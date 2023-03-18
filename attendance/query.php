<?php 
	public function select_query($no, $userid, $upay){
		$result = mysqli_query($con,"SELECT * FROM day WHERE user_id='$userid' AND a_date ='1'");
		if($row = mysqli_fetch_array($result)) {
			return echo '1';
		}else{
			return echo '<form action="index.php" method="POST"><input name="userid" type="hidden" value="'.$userid.'">
			<input name="payid" type="hidden" value="'.$upay.'">
			<input name="dateid" type="hidden" value="1">
			<input class="active" type="submit" name="absent" value="1"></form>';
		}
	}
	?>