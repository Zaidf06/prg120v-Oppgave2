<?php?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Vis klasser</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Alle klasser</h2>
<table>
<tr><th>Klassekode</th><th>Klassenavn</th><th>Studiumkode</th></tr>
<?php
$res = $conn->query("SELECT * FROM klasse");
while ($row = $res->fetch_assoc()) {
    echo "<tr><td>{$row['klassekode']}</td><td>{$row['klassenavn']}</td><td>{$row['studiumkode']}</td></tr>";
}
?>
</table>
<p><a href="index.php">Tilbake</a></p>
</body>
</html>
