<?php
/**
*items.php - Class that extends menucontent with the information necessary to represent  
* items.
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

class items extends menucontent
{
	protected static $IN_STOCK = 0;
	public $options;
	public $extras;

	/*
	*	Class constructor
	*	@param $options: array of the flavor/meat options available for this item type
	*	@param $extras: associative array of additional items that may be added, and their included costs. 
	*/
	public function __construct($name, $description, $price, $quantities, $options, $extras)
	{
		//give basic information to parent class (MenuItem). 
		parent::__construct($name, $description, $price, $quantities);

		//initialize properties unique to this class
		$this->options = $options;
		$this->extras = $extras;
	}

	public function toFormField()
	{
		$field = '<div class="menucontent">'; //intial wrapper for js & styling purposes
		$field .= parent::toFormField();  

		$field .= "<br/> Options:";
		$field .= '<select name='.$this->name.'_protein>';

		foreach ($this->options as $option)
		{
			$field .= '<option value="'.$option.'">'.$option.'</option>';
		}
		$field .= '</select>';

		$field .= "<br/> Extras ($1.25 each) : ";


		foreach ($this->extras as $extra)
		{
			$field .= '<input type="checkbox" name="'.$extra.'" value="'.$extra.'">'.$extra.'</input>';
		}
		
		$field .= '</select>';

		$field .= '</div><br/>';

		return $field;
	}

	//checks that item is available for sale, and decrements its inventory to reflect sale. 
	public function sell($quantity)
	{
		if (self::$IN_STOCK > 0)
		{
			self:$IN_STOCK -= $quantity;
			parent::sell();
			return true;
		} 
		else 
		{
			return false;
		}
	}
}

?>