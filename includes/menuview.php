<?php 

/**
 * muvuview.php Class for to generating menu items and rendering them as form elements.
 *
* @package FoodTruck
* @authors Kelsie Brown <kelsie.brown@seattlecentral.edu>, Joanna Gromadzka<joanna.gromadzka@seattlecentral.edu>,
* Eden Dubiso <eden.dubiso@seattlecentral.edu>
* @version 0.1 2018/07/28
* @link http://www.edendu.com/
* @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
* @todo finish instruction sheet
* @todo add more complicated checkbox & radio button examples
 */

require 'menucontent.php';
require 'items.php';
require 'beverage.php';

class menuview
{
	private $items = [];
	private $beverage = [];
	private $sides = [];
	protected $form = '';
	//intializes menu display with standard menu items. 
	function __construct()
	{
		$standard_proteins = array('Grilled chicken', 'Seared steak', 'Caramelized pork belly', 'Fried tofu', 'Seasonal roasted veggies');
		$standard_toppings = array('Pickles', 'Extra dressing', 'Cheese', 'Fruit', 'Jalapenos', 'Olives');

		$standard_quantities = array(0,1,2,3,4,5,6,7,8);
		//($name, $description, $price, $quantities, $options, $extras)
		$items = array(
			new items('RICE BOWL', 'Brown Rice or White rice, pickled carrot & daikon, mesclun, cilantro, scallions, fried shallots, and soy drizzle.', 8.25, 
			 $standard_quantities,  $standard_proteins, $standard_toppings),
			new items('NOODLE SALAD', 'Soba or Rice Noodles (GF), carrot, mesclun, cilantro, and red onion.', 9, 
			 $standard_quantities,  $standard_proteins, $standard_toppings),
			new items('SALAD (GF)', 'A bed of mesclun with carrot, cilantro, red onion, tomatoes, and almonds', 8, 
			 $standard_quantities,  $standard_proteins, $standard_toppings)
		);

		//$name, $description, $price, $quantities, $flavors, $sizes
		$standard_drink_sizes = array('Small', 'Medium', 'Large');

		$beverage = array(
            new beverage('RUMBO', 'Almonds and bananas are blended together.', 5.25, $standard_quantities, $standard_drink_sizes),
            new beverage('SUNRISE STAR', 'spinach, broccoli, celery, cucumber, orange, banana, grapefruit, ice.', 6.25, $standard_quantities, $standard_drink_sizes),
            new beverage('SUNSET STAR', 'carrots, strawberries, orange, peach, ice.', 5.25, $standard_quantities, $standard_drink_sizes),
			new beverage('Banana Nut', 'Almonds and bananas are blended together.', 5.25, $standard_quantities, $standard_drink_sizes),
            new beverage('Mango Tango', 'Strawberries, mango, pineapple, banana.', 5.75, $standard_quantities,
			    $standard_drink_sizes),
            new beverage('Island Passion', 'Mango, bananas and peaches delivered with a hint of coconut keeps you coming back to the island.', 6.00, $standard_quantities, $standard_drink_sizes),
			
			);

		$menu = '<h2>Food Menu</h2>';

		foreach ($items as $item){
			$menu .= $item->toFormField();
		}

		$menu .= '<h2> Juice Menu </h2>';
		foreach ($beverage as $beverage){
			$menu .= $beverage->toFormField();
		}

		$this->form = $menu;
		$this->items = $items;
		$this->beverage = $beverage;
	}

	public function get_menu()
	{
		return $this->form;
	}
}

?>