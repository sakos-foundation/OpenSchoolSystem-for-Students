<?php
	class LoginController extends GeneralController
	{
		public function process($parameters)
		{
			$account_manager = new AccountManager;
			$password_errors = $user_errors = "	";
			
			/* Login */
			if (isset($_POST['login'])) {
			
				/* Retrieve form inputs */
				$user_name = trim($_POST['username']);
				$user_password = trim($_POST['password']);

				/* Validate required inputs */
				if (empty($user_name)) {
					$user_errors = "Nezadali jste uživatelské jméno.";
				} elseif (empty($user_password)) {
					$password_errors = "Nezadali jste heslo.";
				} else {
					
					/* Validate correct username and password */
					if ($account_manager->login($user_name, $user_password)) {
						/* Logged in -> redirect */
						$_SESSION['username'] = $user_name;
						$this->redirect('dashboard');
					} else {
						$user_errors = "Špatně zadané uživatelské jméno nebo heslo.";
					}
				}
			}

			/* Redirect if user is already logged in */
			if ($account_manager->loggedIn()) {
				$this->redirect('dashboard');
			}

			/* Setting title to login */
			$this->head = array(
				'title' => 'Login',
			);
			
			/* Send datas with errors */
			if (($password_errors!="") || ($user_errors!="")){
				$this->datas['password_err'] = $password_errors;
				$this->datas['username_err'] = $user_errors;
			}
			
			/* Set view for login view */
			$this->view = 'login';
		}
	}