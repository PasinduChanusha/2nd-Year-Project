<?php

//insert_chat.php

include('database_connection.php');

session_start();

$data = array(
	':to_b_id'		=>	$_POST['to_b_id'],
	':from_b_id'		=>	$_SESSION['b_id'],
	':chat_message'		=>	$_POST['chat_message'],
	':status'			=>	'1'
);

$query = "
INSERT INTO chat_message 
(to_b_id, from_b_id, chat_message, status) 
VALUES (:to_b_id, :from_b_id, :chat_message, :status)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
	echo fetch_user_chat_history($_SESSION['b_id'], $_POST['to_b_id'], $connect);
}

?>