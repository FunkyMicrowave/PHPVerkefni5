<?php 
	try {
		$sql = "select linkur, texti, idEigandi, id FROM myndir ORDER BY texti ASC";
		// PDO->query(); er notað fyrir SELECT statements ONLY, skilar object af PDOStatement class
		$result = $pdo ->query($sql);
		
	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
	}
	// fetch() sækir eina röð í einu frá database.
	while($row = $result -> fetch()){
		$mynd[] = array($row['linkur'], $row['texti'], $row['idEigandi'], $row['id']);
	}
 ?>