<?php
    include "connection.php";
    include "fyrirspurnMyndir.php";
    include "fyrirspurnUser.php";
    include "fyrirspurnFjoldi.php";
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <title>Titill vefsíðu</title>
        <style>
            div{
                float: left;
                height: 300px;
                width: 500px;
                border: 2px solid black;
                border-radius: 25px;
                text-align: center;
            }
            h3{
                text-align: center;
            }
            a{
                text-decoration: none;
                width: 500px;
                color: black;
            }
        </style>
</head>
<body>
	<?php
    //SELECT myndir.texti, nafn FROM `users` JOIN myndir ON users.id = myndir.idEigandi WHERE myndir.idEigandi = 2;
    $i = 0;
		foreach ($mynd as $entry) {
			echo "<a href='myndir.php?id=" . $entry[3] ."'><div><h3>" . $entry[1] . "</h3><img style='height: 200px; width: auto;' src='http://178.62.46.222/myndir/" . $entry[0] . ".jpg'></div></a>";
            $i++;
		}
	 ?>
	 <div><h3>Fjoldi mynda</h3><h2><?php echo $fjoldiMynda; ?></h2></div>
	 <div><h3>Users</h3>
	 <?php
    //SELECT myndir.texti, nafn FROM `users` JOIN myndir ON users.id = myndir.idEigandi WHERE myndir.idEigandi = 2;
    $i = 0;
		foreach ($eigandi as $entry) {
			echo "<a href='myndir.php?eigandiId=" . $entry[0] ."'><h2 style='font-weight: 900;'>" . $entry[1] . "</h2><h3>" . $entry[2] . "</h3></a>";
            $i++;
		}
	 ?>
	 </div>
</body>
</html>