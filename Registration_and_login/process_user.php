<?php
require_once "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['bonafide']) && $_FILES["bonafide"]["error"] == 0) {
        $regd = $_POST['regd'];
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $phone = $_POST['contact'];
        $college = $_POST['college'];
        $address = $_POST['address'];
        $bonafide = $_FILES['bonafide'];
        $pass = $_POST['pass'];

        $bonafideData = file_get_contents($bonafide['tmp_name']);
        
        $query = "INSERT INTO user_details (regd, name, email, phone, college, address, bonafide,pass) VALUES (?, ?, ?, ?, ?, ?, ?,?)";
        
        try {
            $stmt = mysqli_prepare($conn, $query);
            
            mysqli_stmt_bind_param($stmt, 'ssssssss', $regd, $name, $email, $phone, $college, $address, $bonafideData,$pass);

            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Registered successful'); location.href = 'login.php'</script>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            
            
            mysqli_stmt_close($stmt);
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                echo "<script>alert('User Already Exist');location.href = 'registration.php'</script>";
                die();
            } else {
                echo "Database error: " . $e->getMessage();
            }
        } finally {
            mysqli_close($conn);
        }
    } else {
        echo "File upload error";
    }
}
?>
