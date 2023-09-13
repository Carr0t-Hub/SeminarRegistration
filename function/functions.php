<?php
//live
date_default_timezone_set('Asia/Manila');
ini_set('display_errors', 1);
// include_once 'helpers.php';

use PHPMailer\PHPMailer\PHPMailer;

//notes

try {
  $mysqli = new PDO('mysql:host=127.0.0.1;dbname=seminar_db', 'root', '');
  // $mysqli = new PDO('mysql:host=10.0.0.231;dbname=pds_test', 'admin', 'datos@bar2021');
  // See the "errors" folder for details...
  $mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo $e->getMessage();
}

session_start();

<<<<<<< Updated upstream
function saveUserInformation($mysqli, $title, $fname, $mname, $lname, $gender, $age, $emailAdd, $location, $occupation, $agency, $memberIP, $pwd, $coop, $coopName, $association, $assocName, $ric, $ricName)
=======
function userLogin($mysqli, $username, $password)
{
  $stmt = $mysqli->prepare("SELECT * FROM users WHERE username = :w AND password = :x");
  $stmt->execute(array(
    ":w" => $username,
    ":x" => $password,
  ));

  //Fetch the result
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  //Compare the result with user input
  if ($row) {
    if ($row['username'] == $username && $row['password'] == $password) {
      $_SESSION['username'] = $row['username'];
      //return the result if input is correct
      return $row;
    } else {
      //return false if input not correct
      return false;
    }
  }
}

//function saveUserInformation($mysqli, $title, $fname, $mname, $lname, $gender, $age, $emailAdd, $location, $occupation, $agency, $memberIP, $pwd, $coop, $coopName, $association, $assocName, $ric, $ricName)
function saveUserInformation($mysqli)
>>>>>>> Stashed changes
{
  try {
    $sql = " INSERT INTO `user_information`(`title`, `fname`, `mname`, `lname`, `gender`, `age`, `emailAdd`, `location`, `occupation`, `agency`, `memberIP`, `pwd`, `platform`, `coop`, `coopName`, `association`, `assocName`, `ric`, `ricName`) 
    VALUES (:title,:fname,:mname,:lname,:gender,:age,:emailAdd,:loc,:occupation,:agency,:memberIP,:pwd,:platform,:coop,:coopName,:association,:assocName,:ric,:ricName)";
   
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':title' => $title,
        ':fname' => $fname,
        ':mname' => $mname,
        ':lname' => $lname,
        ':gender' => $gender,
        ':age' => $age,
        ':emailAdd' => $emailAdd,
        ':loc' => $location,
        ':occupation' => $occupation,
        ':agency' => $agency,
        ':memberIP' => $memberIP,
        ':pwd' => $pwd,
        ':platform' => 'Webex',
        ':coop' => $coop,
        ':coopName' => $coopName,
        ':association' => $association,
        ':assocName' => $assocName,
        ':ric' => $ric,
        ':ricName' => $ricName
      )
    );
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

?>