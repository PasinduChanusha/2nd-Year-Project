<style>

.container {
  
  min-width: 1000px;
  width: 70%;
  margin: 0 auto;
}

</style>

<?php

include('database_connection.php');

 session_start();


//  if(!isset($_SESSION['b_id']))
//  {
// 	header("location:login.php");
// }

?>

<html> 
<input type="button" value="" onclick="history.back(-1)" />
<?php
  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$url'>back</a>"; 
?> 
    <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		
        <!-- <title>Chat Application using PHP Ajax Jquery</title> -->  
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			
			<br />
			<div class="row">
				<div class="col-md-8 col-sm-6">
					<h4>Online User</h4>
				</div>
				
				<div class="col-md-2 col-sm-3">
					<!-- <p align="right">Hi -  - <a href="logout.php">Logout</a></p> -->
				</div>
			</div>
			<div class="table-responsive">
				
				<div id="user_details"></div>
				<div id="user_model_details"></div>
			</div>
			<br />
			<br />
			
		</div>
		
    </body>  
</html>

<style>

.chat_message_area
{
	position: relative;
	width: 100%;
	height: auto;
	background-color: #FFF;
    border: 1px solid #CCC;
    border-radius: 3px;
}

</style>  



<script>  
$(document).ready(function(){

	fetch_user();

	setInterval(function(){
		update_last_activity();
		fetch_user();
		update_chat_history_data();
		fetch_group_chat_history();
	}, 5000);

	function fetch_user()
	{
		$.ajax({
			url:"fetch_user.php",
			method:"POST",
			success:function(data){
				$('#user_details').html(data);
			}
		})
	}

	function update_last_activity()
	{
		$.ajax({
			url:"update_last_activity.php",
			success:function()
			{

			}
		})
	}

	function make_chat_dialog_box(to_b_id, to_user_name)
	{
var modal_content = '<div id="user_dialog_'+to_b_id+'" class="user_dialog" title=" chat with   '+to_user_name+'">';
		modal_content += '<div style="height:400px; background-color:#fff; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_b_id+'" id="chat_history_'+to_b_id+'">';
		modal_content += fetch_user_chat_history(to_b_id);
		modal_content += '</div>';
		modal_content += '<div class="form-group">';
		modal_content += '<textarea name="chat_message_'+to_b_id+'" id="chat_message_'+to_b_id+'" class="form-control chat_message" style="width:430px; margin-bottom: -30px;"></textarea>';
		modal_content += '</div><div class="form-group" align="right">';
		modal_content+= '<button type="button" name="send_chat" id="'+to_b_id+'" class="btn btn-info send_chat">Send</button></div></div>';

		$('#user_model_details').html(modal_content);
	}




	$(document).on('click', '.start_chat', function(){
		var to_b_id = $(this).data('touserid');
		var to_user_name = $(this).data('tousername');
		make_chat_dialog_box(to_b_id, to_user_name);
		$("#user_dialog_"+to_b_id).dialog({
			autoOpen:false,
			width:550
		});
		$('#user_dialog_'+to_b_id).dialog('open');
		
	});

	$(document).on('click', '.send_chat', function(){
		var to_b_id = $(this).attr('id');
		var chat_message = $.trim($('#chat_message_'+to_b_id).val());
		if(chat_message != '')
		{
			$.ajax({
				url:"insert_chat.php",
				method:"POST",
				data:{to_b_id:to_b_id, chat_message:chat_message},
				success:function(data)
				{
					$('#chat_message_'+to_b_id).val('');
					
					$('#chat_history_'+to_b_id).html(data);
				}
			})
		}
		else
		{
			alert('Type something');
		}
	});

	function fetch_user_chat_history(to_b_id)
	{
		$.ajax({
			url:"fetch_user_chat_history.php",
			method:"POST",
			data:{to_b_id:to_b_id},
			success:function(data){
				$('#chat_history_'+to_b_id).html(data);
			}
		})
	}

	function update_chat_history_data()
	{
		$('.chat_history').each(function(){
			var to_b_id = $(this).data('touserid');
			fetch_user_chat_history(to_b_id);
		});
	}

	$(document).on('click', '.ui-button-icon', function(){
		$('.user_dialog').dialog('destroy').remove();
		$('#is_active_group_chat_window').val('no');
	});

	$(document).on('focus', '.chat_message', function(){
		var is_type = 'yes';
		$.ajax({
			url:"update_is_type_status.php",
			method:"POST",
			data:{is_type:is_type},
			success:function()
			{

			}
		})
	});

	$(document).on('blur', '.chat_message', function(){
		var is_type = 'no';
		$.ajax({
			url:"update_is_type_status.php",
			method:"POST",
			data:{is_type:is_type},
			success:function()
			{
				
			}
		})
	});

	$(document).on('click', '.remove_chat', function(){
		var chat_message_id = $(this).attr('id');
		if(confirm("Are you sure you want to remove this chat?"))
		{
			$.ajax({
				url:"remove_chat.php",
				method:"POST",
				data:{chat_message_id:chat_message_id},
				success:function(data)
				{
					update_chat_history_data();
				}
			})
		}
	});


	
});  
</script>