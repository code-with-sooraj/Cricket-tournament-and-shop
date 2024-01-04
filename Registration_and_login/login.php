<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Popup</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: url(img/ball.jpg);
            background-size: cover;
        }

        .login-container {
            background: #ffffffa7;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            overflow: hidden;
            width: 300px;
            padding: 20px;
        }

        .login-header {
            color: black;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #3498db;
        }

        button {
            background: #3498db;
            color: #ffffff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 50%;
            margin-left: 23%;
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button:hover {
            background: #207dbb;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="login-header">
            <u><h2>Login</h2></u>
            <br>
        </div>
        <form action="login_process.php" method="post">
            <label for="Registration">Registration no:</label>
            <input type="text" id="regd" name="regd"placeholder="Enter your registration ">
            <label for="password">Password:</label>
            <input type="password" id="pass" name="pass" placeholder="Enter your password">
            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>