<?php
require_once('./model.php');

if ($_POST['contactus']) {
	$controll = new IndexController();
	$controll->insertMessage();
}
/**
* 
*/
class IndexController
{
	function insertMessage(){
		$email = htmlentities($_POST['email'], ENT_COMPAT , "UTF-8");
		$message = htmlentities($_POST['message'], ENT_COMPAT , "UTF-8");
		$model = new IndexModel();
		$result = $model->insert_message("INSERT INTO user_info (email,message) VALUE ('".$email."','".$message."') ");
		if ($result) {
			exit("{state:0}");
		}else{
			exit("{state:1}");
		}
	}
	
}
