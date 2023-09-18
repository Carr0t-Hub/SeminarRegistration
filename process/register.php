<?php include '../function/functions.php'; ?>

<?php 	
  if(isset($_POST['stitle']) AND isset($_POST['sFName']) AND isset($_POST['sMName']) AND isset($_POST['sLName']) AND isset($_POST['sSex']) AND isset($_POST['sAgeGroup']) AND isset($_POST['sEmail']) AND isset($_POST['sLoc']) AND isset($_POST['sWork']) AND isset($_POST['sWorkplace']) AND isset($_POST['sMemberIP']) AND isset($_POST['sPwde']) AND isset($_POST['sFCoop']) AND isset($_POST['sCpName']) AND isset($_POST['sFAssoc']) AND isset($_POST['sAName']) AND isset($_POST['sFRIC']) AND isset($_POST['sRName'])){

echo 	$res = saveUserInformation($mysqli);
	if ($res == "success") {
		echo '<script type="text/JavaScript"> 
						alert("Information Saved!");
					</script>';
		header("Location: ../");
	}

echo 	$res = saveUserInformation($mysqli);
	if ($res == "success") {
		echo "<script>alert('success yarn? );</script>";
		//header("Location: ../../e-library/viewList.php");
	}


?>