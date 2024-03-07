<?php
$name = $_POST["name"];
$email= $_POST["email"];
$affl = $_POST["affl"];
$room = $_POST["room"];

if ($name == "") {
  echo "NAME cannot be empty!";
} else if ($email == "") {
  echo "EMAIL cannot be empty!";
} else if ($affl == "") {
  echo "AFFILIATION cannot be empty!";
} else if ($room == "") {
  echo "Please select a ROOM TYPE!";
} else {
  echo "NAME:" . $name . ".<br/>";
  echo "EMAIL:" . $email . ".<br/>";
  echo "AFFL:" . $affl . ".<br/>";
  echo "ROOM:" . $room . ".<br/>";

  $line = date("y/m/d H:i ") . gethostbyaddr ( $_SERVER['REMOTE_ADDR']) . " /// " . $name . " /// " . $email . " /// " . $affl . " /// " . $room . "\n";

  $fname_ip = "/home/ami/cek/www/aitp16/adminpiernik/registrations.txt";
  $ffile_ip = fopen($fname_ip ,"a");
  if (flock($ffile_ip, LOCK_EX)) {
    fwrite($ffile_ip, $line);
    flock($ffile_ip, LOCK_UN);
  }
  fclose ($ffile_ip);

  echo "REGISTRATION SAVED<br/>
Transfer money to: <br/>
IBAN: AT47 5700 0210 1113 0470<br/>
BIC: HYPTAT22<br/>
Reference (NECESSARY): Par. 27 Mittel P7030-042-011<br/>
Include your name.";
}
?>

