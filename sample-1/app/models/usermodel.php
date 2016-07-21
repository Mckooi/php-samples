<?php

class UserModel extends Model
{
	public $id = null;
	public $username = null;
	public $email = null;
	public $password = null;
	public $account_type = null;
	public $family_name = null;
	public $given_name = null;
	public $gender = null;
	public $date_of_birth = null;
	public $company_name = null;
	public $bank_account_number = null;
	public $avatar_dir = null;
	public $registered_on = null;
	public $verified = 0;
	public $locked = 0;
	public $terminated = 0;
	
	public function __construct($data=array())
	{
		if (isset($data['id']))
		{
			$this->id = (int) $data['id'];
		}

		if (isset($data['username']))
		{
			$this->username = (string) $data['username'];
		}

		if (isset($data['email']))
		{
			$this->email = (string) $data['email'];
		}

		if (isset($data['password']))
		{
			$this->password = (string) $data['password'];
		}

		if (isset($data['account_type']))
		{
			$this->account_type = (boolean) $data['account_type'];
		}

		if (isset($data['family_name']))
		{
			$this->family_name = (string) $data['family_name'];
		}

		if (isset($data['given_name']))
		{
			$this->given_name = (string) $data['given_name'];
		}

		if (isset($data['gender']))
		{
			$this->gender = (string) $data['gender'];
		}

		if (isset($data['date_of_birth']))
		{
			$this->date_of_birth = new DateTime($data['date_of_birth']);
		}

		if (isset($data['company_name']))
		{
			$this->company_name = (string)$data['company_name'];
		}

		if (isset($data['bank_account_number']))
		{
			$this->bank_account_number = (string)$data['bank_account_number'];
		}

		if (isset($data['avatar_dir']))
		{
			$this->avatar_dir = (string)$data['avatar_dir'];
		}

		if (isset($data['registered_on']))
		{
			$this->registered_on = new DateTime($data['registered_on']);
		}

		if (isset($data['verified']))
		{
			$this->verified = (boolean) $data['verified'];
		}

		if (isset($data['locked']))
		{
			$this->locked = (boolean) $data['locked'];
		}

		if (isset($data['terminated']))
		{
			$this->terminated = (boolean) $data['terminated'];
		}
	}

	function getLogin($username, $password)
	{
		$user = $this->loadTable($this, "SELECT * FROM user WHERE username = '" . $username . "' AND password = '" . $password . "';");
		
		// no more call to database, make sure that database connection is close!
		$this->closeConnection();

		return $user;
	}
}

?>