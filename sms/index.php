<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management Portal</title>
</head>
<body>
    <h3 align="right" style="margin-right:20px"><a href="login.php">Admin login</a></h3>
  
  <h1 align="center">Welcome to Student Management Portal System</h1>
  
  <form method="post" action="index.php">
  <table style="width:30%" align="center" border="1">
    <tr>
        <td colspan="2" align="center">Student Information</td>
    </tr>
    <tr>
        <td align="left">Choose Standard</td>
        <td>
            <select name="std">
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
                <option value="7">7th</option>
                <option value="8">8th</option>
                <option value="9">9th</option>
                <option value="10">10th</option>
                <option value="11">11th</option>
                <option value="12">12th</option>
            </select>
        </td>
    </tr>
    <tr>
        <td align="left">Enter Rollno</td>
        <td><input type="text" name="rollno" required></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="show info"></td>
    </tr>
  </table>
</form>
</body>
</html>