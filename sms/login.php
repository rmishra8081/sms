<?php
    session_start();
    if(isset($_SESSION['uid']))
    {
        header('location:admindash.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h1 align="center">Admin Login Pannel</h1>
    <form action="login.php" method="post">
        <table align="center">
            <tr>
                <td>Username</td><td><input type="text" name="uname" required></td>
            </tr>
            <tr>
                <td>password</td><td><input type="password" name="pass" required></td></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="login" value="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    include 'dbcon.php';
    if(isset($_POST['login']))
    {
        $username=$_POST['uname'];
        $password=$_POST['pass'];
        $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
        $run=mysqli_query($con,$qry);
        $row=mysqli_num_rows($run);
        if($row<1)
        {   
            ?>
            <script>
                alert('Username And Password Not Match');
                window.open('login.php','self');
            </script>
            <?php
        }
        else
        {
            $data=mysqli_fetch_assoc($run);
            $id=$data['id'];
            
            session_start();
            $_SESSION['uid']=$id;
            header('location:admin/admindash.php');
        }
    }
?>