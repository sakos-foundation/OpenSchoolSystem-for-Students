<?php
	class AccountManager
	{		
		public function login($username, $password)
		{
			$sql = Db::oneQuery('
				SELECT username, permission, password
				FROM users
				WHERE username = ?
			', array($username));
			/* Check if account exists */
			if (isset($sql)) {
				/* Check password against hash in db */
				if (password_verify($password, $sql['password'])) {
					return true;
				} else {
					return false;
				}
			}else{
				return false;
			}
		}
		
		public function loggedIn()
		{
			if (isset($_SESSION['username'])) {
				return true;
			}
		}
		
		public function logOut() 
		{
			if (isset($_SESSION['username'])) {
				session_destroy();
				
				/* Unset all session values */
				unset($_SESSION['username']);
				return true;
			}
		}
	}