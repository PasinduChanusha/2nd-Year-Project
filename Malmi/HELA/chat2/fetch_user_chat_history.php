<?php

//fetch_user_chat_history.php

include('database_connection.php');

session_start();

echo fetch_user_chat_history($_SESSION['b_id'], $_POST['to_b_id'], $connect);

?>