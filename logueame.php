<?php

session_start();
$connect = mysqli_connect("sql107.elmejorhosting.online","lmjr_22347091","Can16031","lmjr_22347091_store");

if(isset($_POST["user"]) && isset($_POST["pass"])){
  $user = mysqli_real_escape_string($connect, $_POST["user"]);
  $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
  $sql = "SELECT user FROM usuario WHERE (user='$user' OR email='$user') AND pass='$pass'";
  $result = mysqli_query($connect, $sql);
  $num_row = mysqli_num_rows($result);
  if ($num_row == "1") {
    $data = mysqli_fetch_array($result);
    $_SESSION["user"] = $data["user"];
    echo "1";
  } else {
    echo "error";
  }
} else {
  echo "error";
}

?>
