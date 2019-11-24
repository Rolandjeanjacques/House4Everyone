<?php
require_once('dbconn.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
</head>

<body data-spy = "scroll" data-target = "#navbarResponsive">

<style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
        body {
            background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(img/house.jpg);
            font-family: 'Roboto', sans-serif;
            background-size: cover;
            
            
        }
        
        .main-section {
            margin: 0 auto;
            margin-top: 130px;
            padding: 0;
        }
        .modal-content {
            background-color: rgba(0, 0, 0, 0.6)!important;
            opacity: .95;
            padding: 0 18px;
            box-shadow: 0px 0px 3px #848484;
        }
        .user-img {
            margin-top: -50px;
            margin-bottom: 10px;
        }
        .user-img img {
            height: 100px;
            width: 100px;
            border-radius: 5px;
            box-shadow: 0px 0px 2px #848484;
        }
        .col-lg-6 {
            margin-bottom: 1px;
        }
        .col-lg-13 {
            margin-bottom: 1px;
        }
        .col-lg-6 input {
            height: 42px;
            border-radius: 5px;
            border: 0;
            font-size: 18px;
            padding-left: 20px;
        }
        .col-lg-13 input {
            height: 42px;
            border-radius: 5px;
            border: 0;
            font-size: 18px;
            padding-left: 20px;
        }
        .col-lg-6::before {
            font-family: 'Font Awesome\ 5 Free';
            position: absolute;
            font-size: 22px;
            color: #555e60;
            left: 28px;
            padding-top: 4px;
        }
        .col-lg-13::before {
            font-family: 'Font Awesome\ 5 Free';
            position: absolute;
            font-size: 22px;
            color: #555e60;
            left: 28px;
            padding-top: 4px;
        
        
        button {
            width: 40%;
            margin: 5px 0 25px;
        }
        .btn {
            background-color: #219882;
            color: #fff;
            font-size: 19px;
            padding: 7px 14px;
            border-radius: 5px;
            border-bottom: 4px solid #219882;
        }
        .btn:hover, .btn:focus {
            background-color: #25a890;
            border-bottom: 4px solid #25a890!important;
        }
        .svg-inline--fa {
            font-size: 20px;
            margin-right: 7px;
        }
        .forgot {
            padding: 5px 0 25px;
        }
        .forgot a {
            color: white;
        }
    </style>
</div>
<div>
    <?php
    if(isset($_POST['create'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $password = $_POST['password'];

        $sql = "INSERT INTO user(firstname, lastname, email, phonenumber, password) VALUES(?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
        if($result){
            echo 'Successfully saved.';
        }else{
            echo 'There were errors while saving the data.';
        }
    }
    ?>
</div>
<div class="modal-dialog text-center">
            <div class = "col-sm-12 main-section">
                <div class = "modal-content">
                    <div class = "col-12 user-img">
                        <img src = "img/face.png">
                    </div>
    <form action="createaccount.php" method="post" class = "col-12">
        <div class="row">   
            <div class = "col-lg-6">
            <input type="text" name="firstname" required placeholder="First Name">
            </div>

            <div class = "col-lg-6">
            <input type="text" name="lastname" required placeholder="Last Name">
            </div></div>
            
            <div class = "col-lg-13">
            <input type="text" name="email" required placeholder="Email Adress">
            </div>
            
            <div class = "col-lg-13">
            <input type="text" name="phonenumber" required placeholder="Phone Number">
            </div>

            <div class = "col-lg-13">
            <input type="password" name="password" required placeholder="Password">
            </div>

            <input type="submit" name="create" value="Sign Up" class="btn">
        
    </form>
    <div class="col-12 forgot">
    <a href="login.php">Already have an account?</a>
    </div></div>
</div>

<sript src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src = "https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    $(function(){
        $('#register').click(function(){
            Swal.fire({
                'title' : 'Hello World',
                'text' : 'This is from sweetalert2',
                'type' : 'success'
            })
        });
    });
    </script>

    <!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->
</body>
</html>