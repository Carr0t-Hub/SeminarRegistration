<?php include '../function/functions.php';

echo 	$res = saveUserInformation($mysqli);
	if ($res == "success") {
		echo "<script>alert('success yarn? );</script>";
		//header("Location: ../../e-library/viewList.php");
	}

?>
