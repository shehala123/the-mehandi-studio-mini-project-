<?php
 include('dbconnection.php');
$sql="UPDATE `order_table` SET `Status` = '".$_GET['action']."' WHERE `order_table`.`Order_id` =".$_GET['Order_id'];
$result=$con->query($sql);
	if($result)
	{
?>
<script>
alert("Modified the order!");
	window.location.href = 'order_view_admin.php';
</script>

<?php
	}
?>