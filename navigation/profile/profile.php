<?php
session_start();

require_once "connection.php";

$regd= $_SESSION["user"];
$query = "SELECT * FROM user_details where regd = '$regd'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $regd=$row["regd"];
        $name=$row["name"];
        $email = $row["email"];
        $contact=$row["phone"];
        $college=$row["college"];
        $address = $row["address"];
        $bonafide = base64_encode($row["bonafide"]);
    }
} else {
    echo "No records found";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(cricketground.jpeg);
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        table {
            width: 50%;
            margin: 50px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <u><h1 style="text-align: center;">My Profile</h2></u>

    <table>
        <tr>
            <th>Registration ID</th>
            <td><?php echo $regd; ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Contact</th>
            <td><?php echo $contact; ?></td>
        </tr>
        <tr>
            <th>College</th>
            <td><?php echo $college; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $address; ?></td>
        </tr>
        <tr>
            <th>Bonafide</th>
            <td><img width="500px" height="400px" src="data:image/jpeg;base64, <?php echo $bonafide; ?>"></td>
        </tr>
    </table>

</body>
</html>
