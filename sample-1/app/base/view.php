<?php

class View
{
	public $data;
	public $template;

	function __construct($viewname, $params)
	{
		$this->template = ROOT_DIR . 'app/views/' . strtolower($viewname) . '.php';
		$this->data = $params;
	}
	
	function render()
	{
		extract($this->data);
		ob_start();
		require($this->template);
		echo ob_get_clean();
	}
}

?>