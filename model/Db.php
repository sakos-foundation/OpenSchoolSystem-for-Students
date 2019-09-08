<?php
	class Db
	{
		private static $connection;
		
		/* Settings of db */
		private static $options = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES utf8" ,
			PDO::ATTR_EMULATE_PREPARES   => false,
		];
		
		/* Connection to db */
		public static function connect($server, $user, $password, $database)
		{
			if(!isset(self::$connection)){
				self::$connection = @ new PDO(
					"mysql:host=$server; dbname=$database",
					$user,
					$password,
					self::$options
				);
			}
		}
		
		/* Getting one row SELECT */
		public static function oneQuery($query, $parameters = array())
		{
			$return = self::$connection->prepare($query);
			$return->execute($parameters);
			return $return->fetch();
		}
		
		/* Getting all rows SELECT */
		public static function allQuery($query, $parameters = array())
		{
			$return = self::$connection->prepare($query);
			$return->execute($parameters);
			return $return->fetchAll();
		}
		
		/* Getting number of affected rows DELETE, UPDATE, CREATE */
		public static function affectedQuery($query, $parameters = array())
		{
			$return = self::$connection->prepare($query);
			$return->execute($parameters);
			return $return->rowCount();
		}
	}