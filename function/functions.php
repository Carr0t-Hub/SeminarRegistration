<?php
//live
date_default_timezone_set('Asia/Manila');
ini_set('display_errors', 1);
// include_once 'helpers.php';

use PHPMailer\PHPMailer\PHPMailer;

//notes

try {
  $mysqli = new PDO('mysql:host=127.0.0.1;dbname=seminarseries', 'root', '');
  // $mysqli = new PDO('mysql:host=10.0.0.231;dbname=pds_test', 'admin', 'datos@bar2021');
  // See the "errors" folder for details...
  $mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo $e->getMessage();
}

session_start();

//function saveUserInformation($mysqli, $title, $fname, $mname, $lname, $gender, $age, $emailAdd, $location, $occupation, $agency, $memberIP, $pwd, $coop, $coopName, $association, $assocName, $ric, $ricName)
function saveUserInformation($mysqli)
{
  try {
    if ($_POST['account'] === 'Yes') {

      $sql = " INSERT INTO `user_information`(`title`, `fname`, `mname`, `lname`, `gender`, `age`, `emailAdd`, `location`, `occupation`, `agency`, `memberIP`, `pwd`, `platform`, `coop`, `coopName`, `association`, `assocName`, `ric`, `ricName`) 
      VALUES (:title,:fname,:mname,:lname,:gender,:age,:emailAdd,:loc,:occupation,:agency,:memberIP,:pwd,:platform,:coop,:coopName,:association,:assocName,:ric,:ricName)";
  
        $stmt = $mysqli->prepare($sql);
        $stmt->execute(
          array(
            ':seminarID' => $_POST["seminarID"],
            ':fname' => $_POST["firstName"],
            ':mname' => $_POST["middleName"],
            ':lname' => $_POST["lastName"],
            ':gender' => $_POST["gender"],
            ':age' => $_POST["age"],
            ':emailAdd' => $_POST["emailAdd"],
            ':loc' => $_POST["location"],
            ':occupation' => $_POST["occupation"],
            ':agency' => $_POST["agency"],
            ':memberIP' => $_POST["ipSelect"],
            ':pwd' => $_POST["pwd"],
            ':platform' => "Webex",
            ':coop' => $_POST["farmerCoop"],
            ':coopName' => $_POST["coopName"],
            ':association' => $_POST["farmerAssoc"],
            ':assocName' => $_POST["assocName"],
            ':ric' => $_POST["RIC"],
            ':ricName' => $_POST["RICName"]
          )
        );
    } else {


      $sql = " INSERT INTO `user_information`(`title`, `fname`, `mname`, `lname`, `gender`, `age`, `emailAdd`, `location`, `occupation`, `agency`, `memberIP`, `pwd`, `platform`, `coop`, `coopName`, `association`, `assocName`, `ric`, `ricName`) 
    VALUES (:title,:fname,:mname,:lname,:gender,:age,:emailAdd,:loc,:occupation,:agency,:memberIP,:pwd,:platform,:coop,:coopName,:association,:assocName,:ric,:ricName)";

      $stmt = $mysqli->prepare($sql);
      $stmt->execute(
        array(
          ':seminarID' => $_POST["seminarID"],
          ':fname' => $_POST["firstName"],
          ':mname' => $_POST["middleName"],
          ':lname' => $_POST["lastName"],
          ':gender' => $_POST["gender"],
          ':age' => $_POST["age"],
          ':emailAdd' => $_POST["emailAdd"],
          ':loc' => $_POST["location"],
          ':occupation' => $_POST["occupation"],
          ':agency' => $_POST["agency"],
          ':memberIP' => $_POST["ipSelect"],
          ':pwd' => $_POST["pwd"],
          ':platform' => "Webex",
          ':coop' => $_POST["farmerCoop"],
          ':coopName' => $_POST["coopName"],
          ':association' => $_POST["farmerAssoc"],
          ':assocName' => $_POST["assocName"],
          ':ric' => $_POST["RIC"],
          ':ricName' => $_POST["RICName"]
        )
      );
    }

    return "success";
  } catch (Exception $e) {
    $mysqli->rollback();
    echo "<script>alert('" . $e->getMessage() . "');</script>";
    return false;
  }
}

function saveReport($mysqli, $username, $description)
{
  $sql = "INSERT INTO tbl_reportedissues(username,description)
  VALUES (:username,:description)";
  $stmt = $mysqli->prepare($sql);
  $stmt->execute(
    array(
      ':username' => $username,
      ':description' => $description
    )
  );
}


function getTitle($mysqli, $id)
{
  $sql = "SELECT seminarTitle FROM seminarlist WHERE seminarID = :seminarID";

  $stmt = $mysqli->prepare($sql);

  if (!$stmt) {
    // Handle the error if the statement preparation fails
    return false;
  }

  $stmt->execute(array(":seminarID" => $id));

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row) {
    $columnValue = $row['seminarTitle'];
    $stringValue = strval($columnValue);
    return $stringValue;
  } else {
    // Handle the case where no row was found
    return "No title found";
  }
}
