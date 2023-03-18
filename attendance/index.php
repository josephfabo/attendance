<?php include ( "inc/connect.inc.php" ); ?>
<?php
if(isset($_POST['absent'])){
		$dateidy = $_POST['dateid'];
		$useridy = $_POST['userid'];
		$payidy = $_POST['payid'];
		$newpay = floatval($payidy) - 330;

		$query1= "UPDATE user SET totalPay  = '$newpay' WHERE id = '$useridy'";

					$query_run1 = mysqli_query($con,$query1);

		$query= "insert into day values('','$useridy','$dateidy')";

					$query_run = mysqli_query($con,$query);
					
					if($query_run && $query1)
					{
						echo '<script type="text/javascript"> alert("User marked as absent and 330 decuted from pay") </script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("'.mysqli_error($con).'") </script>';
					}
			
			
			
			
		}
	$query = "SELECT * FROM user";
	$result = $con->query($query);
	if ($result->num_rows > 0) {
		$options = mysqli_fetch_all($result, MYSQLI_ASSOC);
	}
	
	if(empty($_POST['userids'])){
		$userid = 1;
	}else{
		$userid = $_POST['userids'];
	}
	$result = mysqli_query($con,"SELECT * FROM user WHERE id='$userid'");
	$row = mysqli_fetch_array($result);
	$fname = $row['firstName'];
	$lname = $row['lastName'];
	$upay = $row['totalPay'];

	
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Attendance</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form method="POST" action="index.php">
		<label>Choose Employee </label><br>
		<select name="userids">
			<?php 
				foreach ($options as $option) {
			?> 
					<option value="<?php echo $option['id']; ?>">
						<?php echo $option['firstName']; ?> <?php echo $option['lastName']; ?>
					</option>
			<?php
				}
			?>
		</select>
		<br><br>
		<input type="submit" value="view" class="submit">
	</form>
	<h1>Name: <?php echo $fname; ?> <?php echo $lname; ?></h1>
	<h1>Pay: <?php echo $upay; ?></h1>
	<ul class="weekdays">
		<li>Mon</li>
		<li>Tues</li>
		<li>Wed</li>
		<li>Thur</li>
		<li>Fri</li>
		<li>Sat</li>
		<li>Sun</li>
	</ul>
	<ul class="days">
		<li><?php $result = select_query(1, $userid, $upay) ?></li>
		<li><?php $result = select_query(2, $userid, $upay) ?></li>
		<li><?php $result = select_query(3, $userid, $upay) ?></li>
		<li><?php $result = select_query(4, $userid, $upay) ?></li>
		<li><?php $result = select_query(5, $userid, $upay) ?></li>
		<li><?php $result = select_query(6, $userid, $upay) ?></li>
		<li><?php $result = select_query(7, $userid, $upay) ?></li>
		<li><?php $result = select_query(8, $userid, $upay) ?></li>
		<li><?php $result = select_query(9, $userid, $upay) ?></li>
		<li><?php $result = select_query(10, $userid, $upay) ?></li>
		<li><?php $result = select_query(11, $userid, $upay) ?></li>
		<li><?php $result = select_query(12, $userid, $upay) ?></li>
		<li><?php $result = select_query(13, $userid, $upay) ?></li>
		<li><?php $result = select_query(14, $userid, $upay) ?></li>
		<li><?php $result = select_query(15, $userid, $upay) ?></li>
		<li><?php $result = select_query(16, $userid, $upay) ?></li>
		<li><?php $result = select_query(17, $userid, $upay) ?></li>
		<li><?php $result = select_query(18, $userid, $upay) ?></li>
		<li><?php $result = select_query(19, $userid, $upay) ?></li>
		<li><?php $result = select_query(20, $userid, $upay) ?></li>
		<li><?php $result = select_query(21, $userid, $upay) ?></li>
		<li><?php $result = select_query(22, $userid, $upay) ?></li>
		<li><?php $result = select_query(23, $userid, $upay) ?></li>
		<li><?php $result = select_query(24, $userid, $upay) ?></li>
		<li><?php $result = select_query(25, $userid, $upay) ?></li>
		<li><?php $result = select_query(26, $userid, $upay) ?></li>
		<li><?php $result = select_query(27, $userid, $upay) ?></li>
		<li><?php $result = select_query(28, $userid, $upay) ?></li>
		<li><?php $result = select_query(29, $userid, $upay) ?></li>
		<li><?php $result = select_query(30, $userid, $upay) ?></li>
		
	</ul>
	<div class="present"></div><span>: present</span><br>
	<div class="absent"></div><span>: absent</span>
	<?php
		function select_query($no, $userid, $upay){
			include ( "inc/connect.inc.php" );
		$result = mysqli_query($con,"SELECT * FROM day WHERE user_id='$userid' AND a_date ='$no'");
		if($row = mysqli_fetch_array($result)) {
			 echo ''.$no.'';
		}else{
			 echo '<form action="index.php" method="POST"><input name="userid" type="hidden" value="'.$userid.'">
			<input name="payid" type="hidden" value="'.$upay.'">
			<input name="dateid" type="hidden" value="'.$no.'">
			<input class="active" type="submit" name="absent" value="'.$no.'"></form>';
		}
	}
	?>
</body>
</html>