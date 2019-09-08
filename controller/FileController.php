<?php
	class FileController extends GeneralController
	{
		public function process($parameters)
		{
			$file_manager = new FileManager;
			
			if (!empty($parameters[0])){
								
				/* Get file by URL */
				$file = $file_manager->showFile($parameters[0]);
				
				/* If file not found redirect to 404 */
				if(!$file){
					$this->redirect('error');
				}
				
				/* Setting title to username of author */
				$this->head = array(
					'title' => $file['files_id'],
				);
				
				/* Set datas for webpage */
				$this->datas['name'] = $file['name'];
				$this->datas['author'] = $file['author'];
				$this->datas['description'] = $file['description'];
				
				/* Set view for user viewing */
				$this->view = 'file';
				
			/* Empty parameter ->show list of users */
			}else{
				$files = $file_manager->showFiles();
				$this->datas['files']=$files;
				
				/* Setting title */
				$this->head = array(
					'title' => "Files",
				);
				
				/* Set view for list of users */
				$this->view = 'allfiles';
			}
		}
	}