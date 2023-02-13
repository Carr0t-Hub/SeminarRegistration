<?php include '../functions/function.php';?>

<?php 	
  if(isset($_POST['stitle']) AND isset($_POST['sFName']) AND isset($_POST['sMName']) AND isset($_POST['sLName']) AND isset($_POST['sSex']) AND isset($_POST['sAgeGroup']) AND isset($_POST['sEmail']) AND isset($_POST['sLoc']) AND isset($_POST['sWork']) AND isset($_POST['sWorkplace']) AND isset($_POST['sMemberIP']) AND isset($_POST['sPwde']) AND isset($_POST['sFCoop']) AND isset($_POST['sCpName']) AND isset($_POST['sFAssoc']) AND isset($_POST['sAName']) AND isset($_POST['sFRIC']) AND isset($_POST['sRName'])){

    $res = saveUserInformation($mysqli, $_POST['stitle'], $_POST['sFName'], $_POST['sMName'], $_POST['sLName'], $_POST['sSex'], $_POST['sAgeGroup'], $_POST['sEmail'], $_POST['sLoc'], $_POST['sWork'], $_POST['sWorkplace'], $_POST['sMemberIP'], $_POST['sPwde'], $_POST['sFCoop'], $_POST['sCpName'], $_POST['sFAssoc'], $_POST['sAName'], $_POST['sFRIC'], $_POST['sRName']);

    if($res == "success"){
      echo json_encode ("submitted");
    }
  }
?>