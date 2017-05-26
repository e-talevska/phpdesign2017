<?php
	session_start();
	// var_dump($_POST);exit;
	//proveruvame dali postoi setirana forma
	if(isset($_POST['submit'])){
		//var_dump(ini_get('upload_max_filesize'));
		$fileErrors = [
			UPLOAD_ERR_INI_SIZE => 'Please upload smaller file',
			UPLOAD_ERR_FORM_SIZE => 'Please upload smaller file',
			UPLOAD_ERR_PARTIAL => 'Error occured, please try again',
			UPLOAD_ERR_NO_FILE => 'Please select file',
			UPLOAD_ERR_NO_TMP_DIR => 'No tmp dir',
			UPLOAD_ERR_CANT_WRITE => 'Cannot write to folder',
			UPLOAD_ERR_EXTENSION => 'Please check your file extension'
		];
		$title = $_POST['title'];
		$text = $_POST['text'];
		$errors = false;

		//gi cisteme prazni karakteri, ako ne e popolento pole
		if(trim($title) == ''){
			$_SESSION['error_title'] = 'Title is required.';
			$errors = true;
		}

		if(trim($text) == ''){
			$_SESSION['error_text'] = 'Content is required.';
			$errors = true;
		}

		// var_dump($_FILES);
		// var_dump($fileErrors);exit;


		//od name atributot za input file
		$image = $_FILES['image'];
		//vo $_FILES error klucot ima brojce, i ako ne e 4 znaci ima error
		if(isset($fileErrors[$image['error']])){
			//image error
			$errors = true;
			$_SESSION['error_image'] = $fileErrors[$image['error']]; 
		}

		if($errors){
			//ako ima greski gi setirame promenlivite vo sesija i gi stavame vrednostite od inputite za da mozeme da mu gi ispecatime greskite
			$_SESSION['title'] = $title;
			$_SESSION['text'] = $text;
			header('Location: admin.php');
			exit;
		}else{
			//ako e premesten failot od temporary vo uploads directory
			if(move_uploaded_file($image['tmp_name'], 'uploads/' . $image['name'])){
				$handle = fopen('portfolios.csv', 'a');
				//iscisti pranzi mesta od title, stavi tocka, zapirka , isto za tekst, stavi imae od slika i stavi nov red, toa e contentot sto sakame da go ima vo failot
				$writeContent = trim($title) . ';' .
								trim($text) .  ';' .
								$image['name'] . PHP_EOL;
				fwrite($handle, $writeContent);
				fclose($handle);
				header('Location:index.php');
				exit;
			}else{
				header('Location: admin.php');
				exit;
			}
		}

	}

?>