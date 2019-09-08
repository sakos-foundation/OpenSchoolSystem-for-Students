<?php
	abstract class GeneralController
	{
		protected $datas = array();
		protected $view = '';
		protected $head = array('title' => '');
		
		public function drawView()
		{
			if($this->view)
			{
				extract($this->datas);
				require('view/' . $this->view . '.php');
			}
		}
		
		public function drawNavbar()
		{
			if($this->view != "login")
			{
				echo ' class="pt-5"><div class="container mt-4">';
				require('view/navbar.php');
			}else{
				echo '><div class="container-login">';
			}
		}
		
		public function redirect($url)
		{
			header("Location: /$url");
			header("Connection: close");
			exit;
		}
		
		abstract function process($parameters);
	}