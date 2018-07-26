<!DOCTYPE html>
<html>
   <head>
      <title>Food Truck</title>
      <link rel="stylesheet" type="text/css" href="main.css">
   </head>
   <body>
       <main>
       <h1>Welcome to our Juice Truck!</h1>
      
       <!--if there is an error msg style it and print -->
       <?php if (!empty($error_message)) : ?>
           <p class="error"><?php echo $error_message; ?></p>
       <?php endif; ?>   
  
                   
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
           <div id="data">
               
               <input type="checkbox" name="jumba_mumba" value=""> JUMBA MUMBA (carrots, beets, celery, orange, peach, mango,ice ) Price 5$ <select name="">
                            <option value="">select amount</option>
                            <option value="one">1</option>
                            <option value="two">2</option>
                            <option value="three">3</option>
                            <option value="four">4</option>
                            <option value="five">5</option>
                            </select><br>
               
               
                <input type="checkbox" name="rumbo" value=""> RUMBO (carrots, peach, mango, vanila ice cream, proteins) Price 5$ <select name="">
                            <option value="">select amount</option>
                            <option value="one">1</option>
                            <option value="two">2</option>
                            <option value="three">3</option>
                            <option value="four">4</option>
                            <option value="five">5</option>
                            </select><br>
               
               <input type="checkbox" name="sunrise" value=""> SUNRISE STAR (spinach, broccoli, celery, cucumber, orange, banana, grapefruit, ice ) Price 5$ <select name="">
                            <option value="">select amount</option>
                            <option value="one">1</option>
                            <option value="two">2</option>
                            <option value="three">3</option>
                            <option value="four">4</option>
                            <option value="five">5</option>
                            </select><br>
               
               
               <input type="checkbox" name="sunset" value=""> SUNSET STAR (carrots, strawberries, orange, peach, ice ) Price 5$ <select name="">
                            <option value="">select amount</option>
                            <option value="one">1</option>
                            <option value="two">2</option>
                            <option value="three">3</option>
                            <option value="four">4</option>
                            <option value="five">5</option>
                            </select><br>
               
               <div id="button">
                 <label>&nbsp;</label>
                   <input type="submit" value="Submit"><br />
               </div>
               <div id="results">
                    <label>You are ordering:</label> 
                    <input type="text" name="sum" value="">
                    <label>Total:</label>
                    <input type="text" name="total_price" value="">
               </div>
               
          <label>Would you like to order it? </label><br>
            <input type="radio" name="ready?" value="yes">Yes <br>    
            <input type="radio" name="ready?" value="no">No <br>   
            <input type="radio" name="ready?" value="change">Change the order<br>
               
               <div id="button">
                 <label>&nbsp;</label>
                   <input type="submit" value="Order"><br />
               </div>
               
            </div> 
              
           </form>
      </main>
   </body>
</html>