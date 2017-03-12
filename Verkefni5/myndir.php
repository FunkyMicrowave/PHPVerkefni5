<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        img{
            max-width: 1080px;
            height: auto;
        }
    </style>
</head>

<body>

<?php
if(isset($_GET['id'])) {
    $get = $_GET["id"];
    $mode = 1;
    
    try {
		$sql = "select linkur, texti, lysing FROM myndir WHERE id = " . $get . ";";
		// PDO->query(); er notað fyrir SELECT statements ONLY, skilar object af PDOStatement class
		$result = $pdo ->query($sql);
		
	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
	}
	// fetch() sækir eina röð í einu frá database.
	while($row = $result -> fetch()){
		$mynd[] = array($row['linkur'], $row['texti'], $row['lysing']);
	}
    foreach ($mynd as $entry) {
			echo "<h1>" . $entry[1] . "</h1><img src='http://178.62.46.222/myndir/" . $entry[0] . ".jpg'><h4>" . $entry[2] . "</h4>";
		}
    
}
else if(isset($_GET['eigandiId'])) {
    $get = $_GET["eigandiId"];
    $mode = 2;
    
    try {
		$sql = "SELECT myndir.texti, myndir.linkur, nafn FROM `users` JOIN myndir ON users.id = myndir.idEigandi WHERE myndir.idEigandi = " . $get . ";";
		// PDO->query(); er notað fyrir SELECT statements ONLY, skilar object af PDOStatement class
		$result = $pdo ->query($sql);
		
	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
	}
	// fetch() sækir eina röð í einu frá database.
	while($row = $result -> fetch()){
		$mynd[] = array($row['texti'], $row['linkur'], $row['nafn']);
	}
    foreach ($mynd as $entry) {
			echo "<h1>" . $entry[2] . "</h1>";
        break;
		}
    foreach ($mynd as $entry) {
			echo "<h2>" . $entry[0] . "</h2><img src='http://178.62.46.222/myndir/" . $entry[1] . ".jpg'>";
		}
    
}
?>
</body>
</html>