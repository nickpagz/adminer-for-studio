<?php
function adminer_object() {
	include_once __DIR__ . "/plugins/plugin.php";
	include_once __DIR__ . "/plugins/login-password-less.php";
	return new AdminerPlugin(array(
		// TODO: inline the result of password_hash() so that the password is not visible in source codes
		new AdminerLoginPasswordLess(password_hash("YOUR_PASSWORD_HERE", PASSWORD_DEFAULT)),
	));
}

include "adminer.php";
