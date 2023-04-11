<?php
    session_start();
    if(isset($_SESSION['uid']))
    {
        echo "";
    }
    else
    {
        header('location:../login.php');
    }
?>
<?php
    include('header.php');
    include('titlehead.php');
?> 

<form method="post" action="updateform.php" enctype="multipart/form-data">
<table border="1" align="center">
    <tr>
        <th>Roll No</th>
        <td><input type="text" name="rollno" placeholder="Enter Rollno" required></td>
    </tr>
    <tr>
        <th>Full Name</th>
        <td><input type="text" name="name" placeholder="Enter Full Name" required></td>
    </tr>
    <tr>
        <th>City</th>
        <td><input type="text" name="city" placeholder="Enter City" required></td>
    </tr>
    <tr>
        <th>Parents Contact No</th>
        <td><input type="text" name="pcon" placeholder="Enter Parents Contact Number" required></td>
    </tr>
    <tr>
        <th>Standard</th>
        <td><input type="number" name="std" placeholder="Enter Standard" required></td>
    </tr>
    <tr>
        <th>Image</th>
        <td><input type="file" name="simg" required></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
    </tr>
</table>

</form>

</body>
</html>