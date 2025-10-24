<?php?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Slett klasse</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Slett klasse</h2>

<form method="post">
    Velg klassekode:
    <select name="klassekode">
        <?php
        $res = $conn->query("SELECT klassekode FROM klasse");
        while ($row = $res->fetch_assoc()) {
            echo "<option value='{$row['klassekode']}'>{$row['klassekode']}</option>";
        }
        ?>
    </select>
    <input type="submit" value="Slett">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST['klassekode'];
    $sql = "DELETE FROM klasse WHERE klassekode='$kode'";
    if ($conn->query($sql)) {
        echo "<p>✅ Klasse slettet!</p>";
    } else {
        echo "<p>⚠️ Feil: " . $conn->error . "</p>";
    }
}
?>
<p><a href="index.php">Tilbake</a></p>
</body>
</html>
