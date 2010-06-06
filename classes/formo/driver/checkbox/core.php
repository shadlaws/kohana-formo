<?php defined('SYSPATH') or die('No direct script access.');

class Formo_Driver_Checkbox_Core extends Formo_Driver {

	protected $view = 'checkbox';
	
	// Setup the html field
	protected function html()
	{
		$this->render_field
			->set('tag', 'input')
			->attr('type', 'checkbox')
			->attr('name', $this->field->parent()->alias().'[]')
			->attr('value', htmlentities($this->render_field->val()));
		
		$parent_value = $this->render_field->parent()->val();
				
		if (is_array($parent_value) AND in_array($this->render_field->val(), $parent_value))
		{
			$this->render_field->attr('checked', 'checked');
		}
	}

}