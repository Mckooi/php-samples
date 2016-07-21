<?php

class Controller
{
	public function loadModel($modelname)
	{
		require 'app/models/' . strtolower($modelname) . '.php';

		return new $modelname();
	}

	public function loadView($viewname, $data)
	{
		$view = new View($viewname, $data);
		return $view;
		// require 'app/views/' . strtolower($view) . '.php';
	}
}

?>