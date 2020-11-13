<?php require 'server/data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TPSI 2º</title>

	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header>
		<h1>Turma de Programação Web</h1>
        <h2>TPSI</h2>
	</header>

	 <main>
        <ul>
	        <?php foreach ($students as $student) { 
	        	$studentName = explode(" ",$student['name']); 
	        	$firstName = $studentName[0];
	        	$lastName = $studentName[count($studentName)-1]?>

	            <li>
	                <div class="photo">
	                    <img src="https://siesgt.ipsantarem.pt/esgt/fotografias_service.foto?pct_cod=<?php echo $student["code"]; ?>">
	                </div>
	                <div class="info">
	                    <span class="name"><?php echo $firstName." ".$lastName; ?></span>
	                    <span class="number"><?php echo $student["code"]; ?></span>
	                </div>    
	            </li>
	        <?php } ?>
        </ul>
    </main>
</body>
</html>