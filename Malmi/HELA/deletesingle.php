<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});

	
</script>

<?php require_once("add/ImConnect.php") ?>
 <?php session_start(); ?>
<?php 

$sql = "DELETE FROM product WHERE p_id = '$_GET[id]'  ";

$result = mysqli_query($connection,$sql);
if($result){

header("Location: sellerprofile.php");

}
else
	echo "Not Deleted";
?>
<script type="text/javascript"></script>
