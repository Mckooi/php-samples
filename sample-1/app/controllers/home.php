<?php

class Home extends Controller
{
	function index()
	{
		$view = $this->loadView('home/index', ['users' => null]);
		$view->render();
	}
}

?>