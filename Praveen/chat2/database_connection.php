<?php

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=newdb;charset=utf8mb4", "root", "");

date_default_timezone_set('Asia/Kolkata');

function fetch_user_last_activity($b_id, $connect)
{
	$query = "
	SELECT * FROM login_details 
	WHERE b_id = '$b_id' 
	ORDER BY last_activity DESC 
	LIMIT 1
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row['last_activity'];
	}
}

function fetch_user_chat_history($from_b_id, $to_b_id, $connect)
{
	$query = "
	SELECT * FROM chat_message 
	WHERE (from_b_id = '".$from_b_id."' 
	AND to_b_id = '".$to_b_id."') 
	OR (from_b_id = '".$to_b_id."' 
	AND to_b_id = '".$from_b_id."') 
	ORDER BY timestamp DESC
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$output = '<ul class="list-unstyled">';
	foreach($result as $row)
	{
		$user_name = '';
		$dynamic_background = '';
		$chat_message = '';
		if($row["from_b_id"] == $from_b_id)
		{
			if($row["status"] == '2')
			{
				$chat_message = '<em>This message has been deleted</em>';
				$user_name = '<b class="text-success">You</b>';
			}
			else
			{
				$chat_message = $row['chat_message'];
				$user_name = '<button type="button" class="btn btn-danger btn-xs remove_chat" style="width: 30px; background-color: #d9534f;" id="'.$row['chat_message_id'].'">x</button>&nbsp;<b class="text-success">You</b>';
			}
			

			$dynamic_background = 'background-color:#9bf8c2;';
		}
		else
		{
			if($row["status"] == '2')
			{
				$chat_message = '<em>This message has been deleted</em>';
			}
			else
			{
				$chat_message = $row["chat_message"];
			}
			$user_name = '<b class="text-danger">'.get_user_name($row['from_b_id'], $connect).'</b>';
			$dynamic_background = 'background-color:#f6f5f5;';
		}
		$output .= '
		<li style="border-bottom:1px dotted #ccc;padding-top:4px; padding-left:8px; padding-right:8px;'.$dynamic_background.'">
			<p>'.$user_name.' - '.$chat_message.'
				<div align="right">
					- <small><em>'.$row['timestamp'].'</em></small>
				</div>
			</p>
		</li>
		';
	}
	$output .= '</ul>';
	$query = "
	UPDATE chat_message 
	SET status = '0' 
	WHERE from_b_id = '".$to_b_id."' 
	AND to_b_id = '".$from_b_id."' 
	AND status = '1'
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	return $output;
}

function get_user_name($b_id, $connect)
{
	$query = "SELECT u_name FROM buyer WHERE b_id = '$b_id'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row['u_name'];
	}
}

function count_unseen_message($from_b_id, $to_b_id, $connect)
{
	$query = "
	SELECT * FROM chat_message 
	WHERE from_b_id = '$from_b_id' 
	AND to_b_id = '$to_b_id' 
	AND status = '1'
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$count = $statement->rowCount();
	$output = '';
	if($count > 0)
	{
		$output = '<span class="label label-success">'.$count.'</span>';
	}
	return $output;
}

function fetch_is_type_status($b_id, $connect)
{
	$query = "
	SELECT is_type FROM login_details 
	WHERE b_id = '".$b_id."' 
	ORDER BY last_activity DESC 
	LIMIT 1
	";	
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		if($row["is_type"] == 'yes')
		{
			$output = ' - <small><em><span class="text-muted">Typing...</span></em></small>';
		}
	}
	return $output;
}


?>