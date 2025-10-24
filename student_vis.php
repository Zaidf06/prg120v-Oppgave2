<?php?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Vis studenter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Alle studenter</h2>
<table>
<tr><th>Brukernavn</th><th>Fornavn</th><th>Etternavn</th><th>Klassekode</th></tr>
<?php
$res = $conn->query("SELECT * FROM student");
while ($row = $res->fetch_assoc()) {
    echo "<tr><td>{$row['brukernavn']}</td><td>{$row['fornavn']}</td><td>{$row['etternavn']}</td><td>{$row['klassekode']}</td></tr>";
}
?>
</table>
<p><a href="index.php">Tilbake</a></p>
</body>
</html>
