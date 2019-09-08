<?php
	class ErrorController extends GeneralController
	{
		public function process($parameters)
		{
			header("HTTP/1.0 404 Not Found");
			$this->head['title'] = '404';
			$this->view = 'error';
		}
	}