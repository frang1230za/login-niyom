<?php 
    include_once('functions.php'); 
    
    $userdata = new DB_con();

    if (isset($_POST['submit'])) {
        $fname = $_POST['fullname'];
        $uname = $_POST['username'];
        $uemail = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = $userdata->registration($fname, $uname, $uemail, $password);

        if ($sql) {
            echo "<script>alert('Registor Successful!');</script>";
            echo "<script>window.location.href='signin.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again.');</script>";
            echo "<script>window.location.href='signin.php'</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 <!-- Favicon-->
 <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="text-center text-danger btn-xl text-uppercase fs-3" >Register Page</h1>
        <hr>
        <form method="post">
            <div class="mb-3">
                <label for="fullname" class="form-label text-primary btn-x3 fs-5  ">Full Name</label>
                <input type="text" class="form-control" id="username" name="fullname">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label  text-danger btn-x3 fs-5 ">User Name</label>
                <input type="text" class="form-control" id="username" name="username" onblur="checkusername(this.value)">
                <span id="usernameavailable"></span>
            </div>
            <div class="mb-3">
            <label for="email" class="form-label  text-info btn-x3 fs-5 ">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label  text-success btn-x3 fs-5 ">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" name="submit" id="submit" class="btn btn-warning  text-danger btn-x3 fs-5 ">Register</button>
            <a href="signin.php" class="btn btn-primary">Go to login</a>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function checkusername(val) {
            $.ajax({
                type: 'POST',
                url: 'checkuser_available.php',
                data: 'username='+val,
                success: function(data) {
                    $('#usernameavailable').html(data);
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>