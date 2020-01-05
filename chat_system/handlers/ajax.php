<?php
session_start();
include("../config.php");
$phn1=$_SESSION['phonenumber'];
echo $phn1;
if( isset($_REQUEST['action']) ){
	switch( $_REQUEST['action'] ){
		case "SendMessage":
			session_start();
			$query = mysqli_query("INSERT INTO chat SET user=?, message=?");
			$query->execute([$_SESSION['phonenumber'], $_REQUEST['message']]);
			echo 1;
        break;
        
		case "getChat":
			$query = $db->prepare("SELECT * from chat");
			$query->execute();
			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			
			$chat = '';
			foreach( $rs as $r ){
				$chat .=  '<div class="siglemessage"><strong>'.$r->phonenumber.' :  </strong>'.$r->message.'</div>';
                //$chat .= $r->user . '  :   ' .$r->message.'<br/>';
            }
			echo $chat;
		break;
	}
}
?>