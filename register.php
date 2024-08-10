<?php
require('config.php');

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    // Check if the email already exists in the database
    $sql_check_email = "SELECT * FROM user WHERE u_email = '$email'";
    $result_check_email = mysqli_query($conn, $sql_check_email);

    if (mysqli_num_rows($result_check_email) > 0) {
        // Email already exists, show alert and redirect
        echo "<script>alert('Email already exists! Please use a different email.');</script>";
        //echo "<script>window.location.href = 'sign-up.php';</script>";
    } else {
        // Email does not exist, proceed with user registration

        // Insert user into database
        $sql = "INSERT INTO user(u_name, u_mobile, u_email, u_password) VALUES ('$name', '$mobile', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Register Successfully!');</script>";
            echo "<script>window.location.href = 'logIn.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .regform {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h2 {
            text-align: center;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }


        /* Media Queries for responsive design */

        @media (max-width: 600px) {
            form {
                padding: 15px;
            }

            input[type="text"],
            input[type="password"] {
                padding: 8px;
            }

            button {
                padding: 8px;
                font-size: 14px;
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Authentication</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    

                </ul>

            </div>
        </div>
    </nav>

    <br>

    <div class="regform">
        <form role="form" method="POST" enctype="multipart/form-data">
            <label for="name">Name :</label>
            <input type="text" id="name" name="name">
            <br><br>

            <label for="mobile">Mobile Number :</label>
            <input type="text" id="mobile" name="mobile">
            <br><br>

            <label for="email">Email :</label>
            <input type="text" id="email" name="email">
            <br><br>

            <label for="password">Password :</label>
            <input type="password" id="password" name="password">
            <br><br>

            <button type="submit" name="submit">SignUp</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>