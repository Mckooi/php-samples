<?php

class Register extends Controller
{
	public function index($param = '')
	{
		$user = $this->loadModel('UserModel');
		$users = $user->getLogin($param);

		$view = $this->loadView('user/index', ['users' => $users]);
		$view->render();
	}
}

?>
