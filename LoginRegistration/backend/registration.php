<?php
include '../config/db.php';

if (isset($_POST['register'])) {
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $section = $_POST['section'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmPassword'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        header("location: ../views/register.php?error=This email already exists!");
        exit();
    } else {
        if ($password === $confirmpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (firstname, lastname, section, email, password) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssss", $firstname, $lastname, $section, $email, $hash);

            if ($stmt->execute()) {
                header("location: ../index.php?Register=Success");
                exit();
            } else {
                header("location: ../views/register.php?error=Registration failed!");
                exit();
            }
        } else {
            header("location: ../views/register.php?error=Passwords do not match!");
            exit();
        }
    }

    $stmt->close();
}

$conn->close();
?>
