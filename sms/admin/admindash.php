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
?>
    <div class="admintitle" align="center">
        <h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px">Logout</a></h4>
        <h1>Welcome to Admin Dashboard</h1>
    </div>
    <div class="dasboard">
        <table style="width=50%" align="center">
            <tr>
                <td>1.</td><td><a href="addstudent.php">Insert Student Details</a></s></td>
            </tr>
            <tr>
                <td>2.</td><td><a href="updatestudent.php">Update Student Details</a></s></td>
            </tr>
            <tr>
                <td>1.</td><td><a href="deletestudent.php">Delete Student Details</a></s></td>
            </tr>
        </table>
    </div>
</body>
</html>