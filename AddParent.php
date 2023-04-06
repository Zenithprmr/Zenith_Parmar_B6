<?php



$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student83-353031379924", "ua92-studentAc", "student83-353031379924");

if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $StudentId = $_POST['StudentId'];
    $Name = $_POST['Name'];
    $ContactNo = $_POST['ContactNo'];
    $EmailId = $_POST['EmailId'];
   

    $sql = "INSERT INTO Parents (StudentId,Name,ContactNo,EmailId) VALUES ('$StudentId','$Name','$ContactNo','$EmailId')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>