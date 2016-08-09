<?php
require_once('./model.php');
/**
* 
*/
class IndexController
{
	function getMessage(){
		$email = htmlentities($_POST['email'], ENT_COMPAT , "UTF-8");
		$message = htmlentities($_POST['message'], ENT_COMPAT , "UTF-8");
		$model = new Model();
		// INSERT INTO user(id,name,sex,age) VALUES(null,'monan','1','30');
		$model->insert_message("INSERT INTO information ('email','message') VALUE () ");
	}
	
}
