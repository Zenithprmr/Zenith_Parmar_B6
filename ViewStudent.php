<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student83-353031379924", "ua92-studentAc", "student83-353031379924");

if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="250px">Student Id<br><hr></th>
				<th width="250px">Name<br><hr></th>
                <th width="250px">Address<br><hr></th>
				<th width="250px">Contact No<br><hr></th>
				<th width="250px">Class <br><hr></th>
			</tr>
				
			<?php
		
			$sql = mysqli_query($link, "SELECT StudentId, Name, Address, ContactNo, ClassId  FROM Students");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['StudentId']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['ContactNo']}</th>
				<th>{$row['ClassId']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


