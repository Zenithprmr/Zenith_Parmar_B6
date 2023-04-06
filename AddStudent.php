<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student83-353031379924", "ua92-studentAc", "student83-353031379924");

if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $ContactNo = $_POST['ContactNo'];
    $ClassId = $_POST['ClassId'];
   

    $sql = "INSERT INTO Students (Name,Address,ContactNo,ClassId) VALUES ('$Name','$Address','$ContactNo','$ClassId')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>