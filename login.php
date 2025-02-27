
<?php
// require_once "login.php";
location: ["wrok.php"];
require_once "config.php";
// INITIALIZE ALL THE INPUT WITH EMPTY VALUE
$email = $password = $error='';

// ASSIGN EMPTY VALUE TO ALL THE INPUT ERROR
$errors = [
    'email'=>'', 
    'password'=>'',
    'name_error'=>''
];
if (isset($_POST['add'])) {
    // echo $_POST['email']. "<br />";
    // echo  $_POST['title']. "<br />";
    // echo  $_POST['ingredients']. "<br />";

    // CHECKING EMAIL ERRORS
    if (empty($_POST['email'])) { // IF EMAIL IS EMPTY
        $errors['email'] = "Email is required!";
    } else {
        $email = mysqli_real_escape_string($conn, trim($_POST['email']));
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // IF EMAIL INPUT IS NOT AN EMAIL FORMAT
            $errors['email'] = "Invalid email address!";
        }
    }

    // CHECKING TITLE ERRORS
    // if (empty($_POST['title'])) { 
    //     $error['title'] = "Title is required!";
    // } else {
    //     $title = $_POST['title'];
    //     if (!preg_match('/^[a-zA-Z\s]+$/', $title)) { 
    //         $error['title'] = "Invalid title name!";
    //     }
    // }

    // TITLE, FIRSTNAME AND LASTNAME ERRORS CHECKING

    if (empty($_POST['password'])) { // IF TITLE IS EMPTY
        $errors['password'] = "Last Name is required!";
    } else {
        $password = trim($_POST['password']);
        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $password)) { // IF TITLE IS NOT ALPHABET AND SPACE
            $errors['password'] = "Invalid password!";
        }
    }

    // if ($firstname === $lastname) {
    //     $errors['name_error'] = "Firstname and lastname should not be match!";
    // }elseif($firstname===$lastname) {
        
    // }

    // CHECKING INGREDIENTS ERRORS



    if (!array_filter($errors)) {
        $num_mail_check_sql = "SELECT email FROM workhohas1 WHERE email = '$email'";
        $check_stmt = mysqli_query($conn, $num_mail_check_sql);
        // $result = mysqli_nums_rows($check_stmt);
            if($result > 0){
                $errors = "Account already exists";
            }
            else{
                $harshed_pwd = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO workhohas1 (name, email, password) VALUES ('$name', '$email', '$harshed_password')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    // $email = $password = $error = $name "";
                    header("Location: wrok.php");
                    exit;
                }
                else{
                    $errors = "Unable to submit your data";
                }
            }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in page</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .brand {
            background:rgb(5, 77, 136) !important;
        }

        .brand-text {
            color: #cbb09c !important;
        }

        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>


</head>
<body class="blue lighten-2">
<section class="container grey-text">
    <h5><?php echo $error ?></h5>
        <h3 class="center brand-text">log in page</h3>
        <form action="" class="white" method="POST">

            <!-- EMAIL INPUT -->
            <label for="email">Enter email:</label>
            <input type="text" name="email" value="<?= $email ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>

            <!-- TITLE INPUT -->
            


            <!-- FIRSTNAME INPUT -->
            <label for="firstname">Enter password </label>
            <input type="text" name="password" value="<?= $password  ?>">
            <div class="red-text"><?php echo $errors['password']; ?></div>
            <div class="center">
                <input type="submit" name="add" class="btn blue  z-depth-0" value="log in ">
           </div>
        </form>
    </section>     

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>