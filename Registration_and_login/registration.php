<!DOCTYPE html>
<html>

<head>
    <title>Student Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(img/hyderabad-cricketstadium-sport-wallpaper-preview.jpg);
            background-size: cover;
            margin: 0;
            padding: 0;
            font-family: 'Courier New', Courier, monospace;
        }

        .parent {
            display: flex;
            gap: 20px;
            /* Adjust the gap as needed */
        }

        h2 {
            text-align: center;
            background-color: #a600ff;
            color: #fff;
            padding: 10px 0;
        }

        form {
            background-color: #ffffffaa;
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"],
        textarea {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="file"] {
            width: 100%;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
        }

        button {
            width: 25%;
            grid-column: span 2;
            background-color: #0022ff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            margin-left: 40%;
        }

        button:hover {
            letter-spacing: 1px;
            background-color: #a600ff;
            color: aqua;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
            letter-spacing: 2px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Additional CSS for labels and inputs */
        label {
            font-size: 16px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"],
        textarea {
            font-size: 16px;
        }

        .inn {
            width: 40%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .in {
            width: 20%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        #d4 {
            color: rgb(15, 14, 14);
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-size: 18px;
            gap: 10px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
    <h2>Cricket Registration Form</h2>
    <div class="parent">
        <form action="process_user.php" method="post" enctype="multipart/form-data">

            <div style="margin-right: 20px;">
                <h2>Registration Form</h2>
                <label for="regd">Register Number:</label>
                <input type="text" id="regd" name="regd" required>

                <label for="fname">Full Name:</label>
                <input type="text" id="fname" name="fname">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email">

                <label for="fname">Password:</label>
                <input type="password" id="pass" name="pass" required>

            </div>


            <div>

                <h2>Other Details</h2>

                <label for="contact">Contact Number:</label>
                <input type="tel" id="contact" name="contact">

                <label for="college">College Name:</label>
                <input type="text" id="college" name="college">

                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="3"></textarea>

                <label for="bonafide">Bonafide Certificate:</label>
                <input type="file" id="bonafide" name="bonafide" required>
            </div>
            
            <button type="submit">Submit</button>
        </form>
    </div>
    <div id="popup" class="popup">
        <p id="message"></p>
    </div>
    <script src="script.js"></script>
</body>

</html>