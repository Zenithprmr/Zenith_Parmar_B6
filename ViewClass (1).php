<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student83-353031379924", "ua92-studentAc", "student83-353031379924");

if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Classes</h3>
	
		<table>
		
			<tr>
				<th width="10px">Class Id<br><hr></th>
				<th width="100px">Class Name<br><hr></th>
                <th width="150px">Capacity<br><hr></th>
			</tr>
				
			<?php
		
			$sql = mysqli_query($link, "SELECT ClassId, Name, Capacity  FROM Classes");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['ClassId']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['Capacity']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


