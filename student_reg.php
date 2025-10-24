<?php?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Registrer student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Registrer ny student</h2>

<form method="post">
    Brukernavn: <input type="text" name="brukernavn" required><br>
    Fornavn: <input type="text" name="fornavn" required><br>
    Etternavn: <input type="text" name="etternavn" required><br>
    Klassekode:
    <select name="klassekode">
        <?php
        $res = $conn->query("SELECT klassekode FROM klasse");
        while ($row = $res->fetch_assoc()) {
            echo "<option value='{$row['klassekode']}'>{$row['klassekode']}</option>";
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Registrer">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $b = $_POST['brukernavn'];
    $f = $_POST['fornavn'];
    $e = $_POST['etternavn'];
    $k = $_POST['klassekode'];

    $sql = "INSERT INTO student VALUES ('$b', '$f', '$e', '$k')";
    if ($conn->query($sql)) {
        echo "<p>✅ Student registrert!</p>";
    } else {
        echo "<p>⚠️ Feil: " . $conn->error . "</p>";
    }
}
?>
<p><a href="index.php">Tilbake</a></p>
</body>
</html>
