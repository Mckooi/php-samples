<?php

class Url
{
	protected $controller = 'home';

	protected $method = 'index';

	protected $params = [];

	public function __construct()
	{
		$url = $this->parseUrl();

		// check if controller exists
		if (file_exists('app/controllers/' . $url[0] . '.php'))
		{
			$this->controller = $url[0];
			unset($url[0]);

			// attempt to load controller if it exists
			require 'app/controllers/' . $this->controller . '.php';
			$this->controller = new $this->controller;

			if (isset($url[1]))
			{
				// check if method exists
				if (method_exists($this->controller, $url[1]))
				{
					$this->method = $url[1];
					unset($url[1]);
				}
			}
			else
			{
				// default to index method
			}

			// keep the remaining parts of Url as paramters
			$this->params = $url ? array_values($url) : [];
					
			call_user_func_array([$this->controller, $this->method], $this->params);
		}
		else
		{
			// return page not found error
			echo 'return page not found error';
		}
	}

	protected function parseUrl()
	{
		if (isset($_GET['url']))
		{
			$url = $_GET['url'];

			if (strlen($url) > 0)
			{
				if (substr($url, 0, 1) == '/')
				{
					$url = substr($url, 1);
				}
			}

			return $url = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));
		}
	}
}

?>