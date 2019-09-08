<?php
	class UserController extends GeneralController
	{
		public function process($parameters)
		{
			$user_manager = new UserManager;
			
			if (!empty($parameters[0])){
								
				/* Get user by URL */
				$user = $user_manager->showProfile($parameters[0]);
				
				/* If user not found redirect to 404 */
				if(!$user){
					$this->redirect('error');
				}
				
				/* Setting title to username of author */
				$this->head = array(
					'title' => $user['username'],
				);
				
				/* Set datas for webpage */
				$this->datas['username'] = $user['username'];
				$this->datas['nickname'] = $user['nickname'];
				$this->datas['avatar'] = $user['avatar'];
				$this->datas['description'] = $user['description'];
				
				/* Set view for user viewing */
				$this->view = 'user';
				
			/* Empty parameter ->show list of users */
			}else{
				$users = $user_manager->showProfiles();
				$this->datas['users'] = $users;
				
				/* Setting title */
				$this->head = array(
					'title' => "Users",
				);
				
				/* Set view for list of users */
				$this->view = 'allusers';
			}
		}
	}