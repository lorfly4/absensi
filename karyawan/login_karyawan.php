<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/log.css">
    <link rel="icon" href="../picture/bakdat.png">

</head>
<body>
<div class="app">


<h1> Login User </h1>

<form action="pro_login_karyawan.php" method="post">
    <table>
        <tr>
            <td width="120"> Username </td>
            <td> <input type="text" name="username" required=""> </td>
        </tr>
        <tr>
            <td> Password </td>
            <td> <input type="password" name="password" required=""> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="login" class="button"> </td>
        </tr>
    </table>
    <span><a href="../login.php" target="_blank">Login sebagai admin? klik disini</a></span>
</div>

</form>
</body>
</html>