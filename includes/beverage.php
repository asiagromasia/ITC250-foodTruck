<?php
//baverege.php

/*
    Models the behavior and properties of drinks for the menu. 
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

class beverage extends menucontent
{
    
    protected static $in_stock = 0;
    public $flavors;
    public $sizes;
    

    public function __construct($name, $description, $price, $quantities, $sizes)
    {   
        //send essential info to parent class constructor. 
        parent::__construct($name, $description, $price, $quantities);
        
       
        $this->sizes = $sizes; 
    }
    
    //Renders the current instance as a form field with appropriate inputs. 
    public function toFormField()
    {
        
        $drink_field = '<div class="menucontent beverage">'; //wrapper for styling & js purposes
		$drink_field .= parent::toFormField();
  
        $drink_field .= '</select>';
        
        $drink_field .= '<br> Size: ';
        $drink_field .= '<select name="'.$this->name.'_size">';
        
        foreach ($this->sizes as $size)
        {
            $drink_field .= '<option value="'.$size.'">'.$size.'</option>';
        }
        
        $drink_field .= '</select>';
        $drink_field .= '</div><br>';
        
        return $drink_field;    
    } 
}

?>
