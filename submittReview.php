<?php
//does not write newlines to text file

$request_body = file_get_contents('php://input');
//echo "<p>" . $request_body . "</p>";

//return;
$metrics = explode('/',$request_body);
echo $request_body;
//echo getcwd();
unlink(".\\GameReviews\\review1.txt");
$handle = fopen(".\\GameReviews\\review1.txt","w");
$length = count($metrics);
for($i=0; $i<$length; $i++) {
	fwrite($handle,$metrics[$i] . "\r\n");
}
fclose($handle);

//Mark review in database

return;








/*$q=$_REQUEST["q"];
$q = (string)$q;
if (substr($q,0,4) !== "http") {
	echo "Not a web";
	return;
}
//echo $q;
$con = new mysqli("localhost","root","","hyperlinks") or die(mysql_error());
if ($con->connect_errno) {
    printf("Connect failed: %s\n", $con->connect_error);
    exit();
}
$query = "SELECT ID FROM links where Hyperlink=\"" . $q . "\"";
$result = mysqli_query($con, $query);
$row = $result->fetch_assoc();
//if (!$result) {
if (is_null($row['ID'])) {
	//echo "<br>oh nononono";
	//Delete $row
	//Find primary key ID to insert
	$result = $con->query("SELECT max(ID) FROM links");
	$row = $result->fetch_row();
	$pk = $row[0]+1;
	
	$result = $con->query("INSERT INTO links (ID, Hyperlink) VALUES (" . $pk . ", \"" . $q . "\")");
	if (!$result)
		echo "<br>Oh Nonononono";
	else
		echo "Saved";
}
else {
	//echo "<br>" . $row['ID'] . " Hi";
	echo "Already saved at id: " . $row['ID'];
}

$con->close();
*/
?>