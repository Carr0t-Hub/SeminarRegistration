<?php include('../function/functions.php');
  $username = $_POST['username'];
  $password = $_POST['password'];

  $log = userLogin($mysqli, $username, $password);

//print_r($log);

    if(!$log == false){
      $_SESSION = $log;
      echo "<script>alert('Successfully Login');</script>";
      echo "<script>window.location.href='../dashboard.php'</script>";
    }else{
      echo "<script>alert('Invalid Username and Password or Account is Disabled');</script>";
      echo "<script>window.location.href='../login.php'</script>";
    }
?>