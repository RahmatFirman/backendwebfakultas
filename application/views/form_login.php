<?php
echo form_open('auth/login');
echo '
	<input type="text" name="user" placeholder="User name">
	<input type="password" name="pass" placeholder="Password">
	<button type="submit" name="submit">Login</button>

';

?>
