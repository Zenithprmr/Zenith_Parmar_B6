<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student83-353031379924", "ua92-studentAc", "student83-353031379924");

if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="250px">Parent ID<br><hr></th>
				<th width="250px">Student <br><hr></th>
				<th width="250px">Parent Name<br><hr></th>
				<th width="250px">Contact No<br><hr></th>
				<th width="250px">Email ID<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT ParentID, StudentId, Name, ContactNo, EmailId  FROM Parents");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['ParentID']}</th>
				<th>{$row['StudentId']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['ContactNo']}</th>
				<th>{$row['EmailId']}</th>
                
			</tr>";
			}
			?>
        </table>
 </body>
 </html>

