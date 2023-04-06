<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student83-353031379924", "ua92-studentAc", "student83-353031379924");

if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Name = $_POST['Name'];
    $Capacity = $_POST['Capacity'];
   

    $sql = "INSERT INTO Classes (Name,Capacity) VALUES ('$Name','$Capacity')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>