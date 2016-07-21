<?php

class User extends Controller
{
	function index()
	{
		echo 'Controller: user <br />Method: index';
	}

	function login()
	{
		$attemp = 1;
		$username = null;
		$password = null;
		$remember = null;
		$validation_message = '';
		$user_model = null;
		$login = null;

		if (!empty($_POST['remember']))
		{
			$remember = (boolean)$_POST['remember'];
		}
		
		if (!empty($_POST['attemp']))
		{
			$attemp = ((int)$_POST['attemp']) + 1;

			if (!empty($_POST['username']))
			{
				$username = $_POST['username'];
			}
			else
			{
				$validation_message = 'Username is required<br />';
			}

			if (!empty($_POST['password']))
			{
				$password = $_POST['password'];
			}
			else
			{
				$validation_message = $validation_message . 'Password is required<br />';
			}
		}
		else
		{
			if (isset($_SESSION['username']))
			{
				$username = $_SESSION['username'];
			}
			else if (isset($_COOKIE['username']))
			{
				$username = $_COOKIE['username'];
			}
		}

		if ($validation_message == '' && $attemp > 1)
		{
			$user_model = $this->loadModel('UserModel');
			$login = $user_model->getLogin($username, $password);

			if (count($login) == 1)
			{
				$_SESSION['user_id'] = $login[0]->id;
				$_SESSION['username'] = $login[0]->username;

				if (remember)
				{
					setcookie('user_id', $login[0]->id, time() + (86400 * 30), '/');
					setcookie('username', $login[0]->username, time() + (86400 * 30), '/');
				}

				header('Location: /home');
			}
			else
			{
				$validation_message = 'Incorrect username or password.<br />';
			}
		}

		if ($validation_message != '')
		{
			$validation_message = $validation_message . '<br />';
		}

		$view = $this->loadView('user/login', ['username' => $username, 'remember' => ($remember? 'checked' : ''), 'attemp' => $attemp, 'validation_message' => $validation_message]);
		$view->render();
	}

	function logout()
	{
		unset($_SESSION['user_id']);
		unset($_SESSION['username']);
		setcookie('user_id', '', time() - 3600, '/');
		setcookie('username', '', time() - 3600, '/');
	}
}

?>