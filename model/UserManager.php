<?php
	class UserManager
	{
		public function showProfile($username)
		{
			return Db::oneQuery('
				SELECT username, permission, avatar, nickname, description, ranks
				FROM users
				WHERE username = ?
			', array($username));
		}
		
		public function showProfiles()
		{
			return Db::allQuery('
				SELECT users_id, username, nickname, ranks
				FROM users
				ORDER BY users_id
			');
		}
	}