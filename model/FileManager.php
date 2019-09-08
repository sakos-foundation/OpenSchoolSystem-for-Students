<?php
	class FileManager
	{
		public function showFile($id)
		{
			return Db::oneQuery('
				SELECT files_id, address, name, subject, author, date, description
				FROM files
				WHERE files_id = ?
			', array($id));
		}
		
		public function showFiles()
		{
			return Db::allQuery('
				SELECT files_id, name, subject, author
				FROM files
				ORDER BY files_id DESC
			');
		}
	}