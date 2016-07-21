<?php

namespace 'Util.Security';

class Cryptography
{
	private $passphrase = null;
	private $iv = null;

	function __construct($passphrase = ENCRYPTION_KEY)
	{
		$this->passphrase = $passphrase;
		$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$this->iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	}

	function Encrypt($plain_text)
	{
		return mcrypt_encrypt(MCRYPT_BLOWFISH, $this->passphrase, utf8_encode($plain_text), MCRYPT_MODE_ECB, $this->iv);
	}

	function Decrypt($encrypted_string)
	{
		return mcrypt_decrypt(MCRYPT_BLOWFISH, $this->passphrase, $encrypted_string, MCRYPT_MODE_ECB, $this->iv);
	}
}

?>
