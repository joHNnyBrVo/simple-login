<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("location: ../index.php");
    exit;
}

require '../config/db.php';

$sql = "SELECT firstname, lastname, section FROM `users` WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_SESSION['email']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fullname = $row['firstname'] . " " . $row['lastname'];
        $section = $row['section'];
        $_SESSION['fullname'] = $fullname;
        $_SESSION['section'] = $section;
    }
} else {
    echo "No user found.";
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/loginStyle.css">
    <title>Dashboard</title>
</head>
<body>

    <?php
        if (isset($_SESSION['fullname']) && isset($_SESSION['section'])) {
            echo "Welcome <span class='highlight'>" .($_SESSION['fullname']) . "</span> from section <span class='highlight'>" .($_SESSION['section']) . "</span>.";
        }
    ?>
    <br>
    <br>
    <button class="btn"><a href="../logout.php">Logout</a></button>

</body>
</html>
