<?php
error_reporting(0);


?>

<html lang="en">

<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
</head>
<!DOCTYPE html>
<html>


<body style="background: #CCC;">
    <h1>Zuri Tech Hub</h1><br>
    <h4><b>Sign Up</b></h4>
    <h4>Please fill this form to create an account.</h4>

    <div id="frm" class="jumbotron" style="width: 500px;">

        <form action="" method="POST">


            <p>


                <input type="text" id="username" method="POST" name="username" class="form-control" placeholder="Username" <?php echo $username; ?> required />
            </p>

            <p>
                <input type="text" id="email" name="email" placeholder="Email" class="form-control" <?php echo $email; ?> required />
            </p>

            <p>


                <input type="password" id="password" name="password" placeholder="Password" class="form-control" <?php echo $_POST['password']; ?> required />
            </p>

            <p>

                <input type="password" id="password" name="cpassword" placeholder="Confirm Password" class="form-control" <?php echo $_POST['cpassword']; ?> required />
            </p>

            <p>


                <button type="submit" class="btn btn-success mt-3" name="submit">Register</button>
            </p>

            <p>
                Aready a member?<a href="index.php">Sign in</a>
            </p>
        </form>
    </div>


</body>
</html>
<?php


extract($_REQUEST);
$file=fopen("form-save.txt", "a");

fwrite($files, "name :");
fwrite($files, $username ."\n");
fwrite($file, "Email :");
fwrite($file, $email ."\n);

fwrite($file, "Password :");
fwrite($file, $password ."\n");




?>