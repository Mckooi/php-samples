
<h1>User List</h1>
<br />
<table>
<?php

foreach ($this->data['users'] as $user)
{
	// print_r($record);
	echo '<tr><td>' . ((string)$user->id) . '</td><td>' . htmlspecialchars($user->username) . '</td><td>' . htmlspecialchars($user->email) . '</td></tr>';
}

?>
</table>
