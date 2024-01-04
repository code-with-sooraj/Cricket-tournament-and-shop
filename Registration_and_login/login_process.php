<?php
require_once "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["regd"]) && isset($_POST["pass"])) {
        $registration = $_POST["regd"];
        $password = $_POST["pass"];

        $query = "SELECT * FROM user_details WHERE regd = '$registration'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($password===$row["pass"]) {
                echo "Login successful!";
                session_start();
                $_SESSION["user"]=$registration;
                header("Location: ../start/index.php");
                exit();
            } else {
                echo "<script>alert('Incorrect password. Please try again.');
                location.href= 'login.php';</script>";
            }
        } else {
            echo "<script>alert('User not found. Please check your registration number.');
            location.href= 'login.php';</script>";
        }

        $conn->close();
    } else {
        echo "<script>alert('Invalid request. Please provide both registration number and password.');
        location.href= 'login.php';</script>";
    }
} else {
    echo "Invalid request.";
}
?>
