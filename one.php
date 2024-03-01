<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEI4346 Web Technology</title>
</head>
<body>
    <form action="main.php" method="post" >
        <h1>Form</h1>

        <table>
            <tr>
                <td><label>EmpID</label></td>
                <td><input type="text" name="empid"></td>
            </tr>
            
            <tr>
                <td>Date of Birth</td>
                <td><input type="text"  name="dob"></td>
            </tr>
            <tr>
                <td><label>First Name</label></td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td><label>Last Name</label></td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td><label>Gender</label></td>
                <td><input type="text"  name="gender"></td>
            </tr>
            <tr>
                <td>App Date</td>
                <td><input type="text" name="appdate"></td>
            </tr>
        </table>
        <br><br>
        <input type="submit" value="SUBMIT" name="submit">
    </form>

    <br><br><br>
    <form action="searchBy.php" method="post">
        <input type="text" name="key" placeholder="search..."/>
        <input type="submit" value = "search by id" name="search"/>
    </form>
    
</body>
</html>