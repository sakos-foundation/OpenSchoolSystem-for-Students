<?php
	class RouterController extends GeneralController
	{
		
		protected $controller;
		
		/* Parse URL from web address to array */
		private function parseURL($url)
		{
			$parsed_url = parse_url($url);
			$parsed_url["path"] = ltrim($parsed_url["path"], "/");
			$parsed_url["path"] = trim($parsed_url["path"]);
			$devided_address = explode("/", $parsed_url["path"]);
			return $devided_address;
		}
		
		/* Turn URL names to controller names */
		private function classify($text)
		{
			$classified = str_replace(' ', '', (ucwords(str_replace('-', ' ', $text))));
			return $classified;
		}
		
		/* Process URL to website */
		public function process($parameters)
		{
			$parsed_url = $this->parseURL($parameters[0]);
			$account_manager = new AccountManager;
			
			/* User logged in */
			if (!($account_manager->loggedIn()) && ($parsed_url[0]!='login')) {
				$this->redirect('login');
			}
			
			/* Nothing chosen->redirect to dashboard */
			if(empty($parsed_url[0])){
				$this->redirect('dashboard');
			}
			
			/* Request to log out */
			if ($account_manager->loggedIn() && ($parsed_url[0]=='logoff')) {
				if($account_manager->logOut()){
					$this->redirect('login');
				}
			}
			
			$controller = $this->classify(array_shift($parsed_url)) . 'Controller';
			if(file_exists('controller/' . $controller . '.php')){
				$this->control = new $controller;
			}else{
				$this->redirect('error');
			}
			
			$this->control->process($parsed_url);
			$this->datas['title'] = $this->control->head['title'];
			$this->view = 'main';
		}
	}