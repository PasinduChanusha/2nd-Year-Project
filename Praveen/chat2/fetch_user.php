<style>

tr,
td,
th {
  
  padding: 10px;
margin: 0 auto;

}

th{
	font-size: 18px;
}
th,td{
	border: 2px solid #000;
}
.table {
  width: 100%;
  color: #212529;
  vertical-align: top;
}

.btn{
	background-color: #269abc;
	border: none;
	padding: 5px;
	border-radius: 3px;
	width: 104px;
}

.label-success{
background-color: #5cb85c;
padding: 5px;
border-radius: 3px;
margin-left: 50px;
}


.label-danger{
background-color: #d9534f;
padding: 5px;
border-radius: 3px;
margin-left: 50px;
}

</style>
<?php

//fetch_user.php
include('database_connection.php');

session_start();

$query = "
SELECT * FROM buyer 
WHERE b_id != '".$_SESSION['b_id']."' 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-bordered table-striped">
	<tr>
		<th width="70%">Username</td>
		<th width="20%">Status</td>
		<th width="10%">Action</td>
	</tr>
';

foreach($result as $row)
{
	$status = '';
	$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
	$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
	$user_last_activity = fetch_user_last_activity($row['b_id'], $connect);
	if($user_last_activity > $current_timestamp)
	{
		$status = '<span class="label label-success">Online</span>';
	}
	else
	{
		$status = '<span class="label label-danger">Offline</span>';
	}
	$output .= '
	<tr>
		<td>'.$row['u_name'].' '.count_unseen_message($row['b_id'], $_SESSION['b_id'], $connect).' '.fetch_is_type_status($row['b_id'], $connect).'</td>
		<td>'.$status.'</td>
		<td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['b_id'].'" data-tousername="'.$row['u_name'].'">Start Chat</button></td>
	</tr>
	';
}

$output .= '</table>';

echo $output;

?>