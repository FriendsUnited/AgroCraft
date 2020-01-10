<?php
include("../config.php");
session_start();
$phonenumber=$_SESSION['phonenumber'];
if( isset($_REQUEST['action']) ){
	switch( $_REQUEST['action'] ){
		case "SendMessage":
			
			$query = $db->prepare("INSERT INTO chat SET user=?, message=?");
			$query->execute([$phonenumber, $_REQUEST['message']]);
		break;
		case "getChat":
			$query = $db->prepare("SELECT * from chat");
			$query->execute();
			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			
			$chat = '';
			foreach( $rs as $r ){
				$chat .=  '<div class="siglemessage"><strong>'.$phonenumber.' says:  </strong>'.$r->message.'</div>';
			}
			echo $chat;
		break;
		case "clearChat":
			$query = $db->prepare("DELETE from chat");
			$query->execute();
		break;
	}
}
?>