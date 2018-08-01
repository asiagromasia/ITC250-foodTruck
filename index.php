<?php 
/**
*  index.php  - The main page of the app, controls whether the menu (form) or the reciept (form results) is displayed.
*

* @package FoodTruck
* @authorEden Dubiso <eden.dubiso@seattlecentral.edu>
* @version 0.1 2018/07/25
* @link http://www.edendu.com/
* @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
* @todo finish instruction sheet
* @todo add more complicated checkbox & radio button examples
*/


require 'includes/menuview.php';

//Renders the form by calling the get_menu method of a new MenuDisplay
function show_form()
{
	echo '<h2>Welcome to our Food & Juice Truck</h2>
 	<form action="index.php" method="post">';
	$menu = new menuview();
	echo $menu->get_menu();

 	echo '<label>Special Instructions: </label><br/>
 	<textarea name="special_instructions"></textarea>

 	<input type="hidden"  id="formData" name="order_data" value=""/>
 	</form>
 	<button id="sendOrder">Submit Order</button>';
}

//function to display receipt by executing the formhandler. 
function show_receipt()
{
	require 'includes/formhandle.php';
}

?>

<html>
 <head>
 	<title>Food Truck</title>
	<meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<meta name="description" content="A Food Truck Menu/Ordering Application" />
	<link href='https://fonts.googleapis.com/css?family=Unkempt:400,700|Averia+Sans+Libre:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/foodtruck.css">
 </head>
 <body>
 	<div class="site-wrapper">
        
        <!--if there is an error msg style it and print -->
       <?php if (!empty($error_message)) : ?>
           <p class="error"><?php echo $error_message; ?></p>
       <?php endif; ?>  
        
 	<?php 
 		//Sense whether to display menu or receipt based on request type. 
 		if ($_POST)
 		{
 			show_receipt();

 			//code for displaying raw order data:
 			// echo '<pre>';
 			// echo var_dump(json_decode($_POST['order_data']));
 			// echo '</pre>';
 		}
 		else 
 		{
 			show_form();
 		}
 	?>

 	<!-- JQuery -->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 	<!--js for submitting the form as a json object (makes parsing during formhandle.php easier)-->
 	<script src="js/submitForm.js"></script>
 	</div>
 </body>
 </html>