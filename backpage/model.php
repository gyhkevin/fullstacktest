<?php
class IndexModel {
	function open_database_connection() {
		$link = new PDO ( "mysql:host=127.0.0.1;dbname=fstest", 'root', '123456' );
		return $link;
	}
	function close_database_connection(&$link) {
		$link = null;
	}
	function get_all_posts() {
		$link = open_database_connection ();
		$result = $link->query ( 'SELECT id, title FROM post' );
		$posts = array ();
		while ( $row = $result->fetch ( PDO::FETCH_ASSOC ) ) {
			$posts [] = $row;
		}
		close_database_connection ( $link );
		return $posts;
	}
	function insert_message($sql) {
		$link = open_database_connection();
		$result = $link->exec($sql);
		// $result = mysql_query($sql);
		close_database_connection ( $link );
		if($result && mysql_affected_rows()>0){
			if(mysql_insert_id()){
				return mysql_insert_id();
			}

			return true;
		}

		return false;
	}
}
