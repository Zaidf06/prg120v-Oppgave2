<?php?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Slett student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Slett student</h2>

<form method="post">
    Velg student:
    <select name="brukernavn">
        <?php
        $res = $conn->query("SELECT brukernavn FROM student");
        while ($row = $res->fetch_assoc()) {
            echo "<option value='{$row['brukernavn']}'>{$row['brukernavn']}</option>";
        }
        ?>
    </select>
    <input type="submit" value="Slett">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $b = $_POST['brukernavn'];
    $sql = "DELETE FROM student WHERE brukernavn='$b'";
    if ($conn->query($sql)) {
        echo "<p>✅ Student slettet!</p>";
    } else {
        echo "<p>⚠️ Feil: " . $conn->error . "</p>";
    }
}
?>
<p><a href="index.php">Tilbake</a></p>
</body>
</html>
