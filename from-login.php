<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="get">
         username:
         <input type="text" name="usrnm">
         password:
            <input type="password" name="pwd">
         user type:
            <select name="usertype">
                <option value="admin">Admin</option>
                <option value="finance">Finance</option>
                <option value="logistik">Logistik</option>
            </select>
            <button type="submit">login</button>
            <button type="reset">reset</button>
    </form>
</body>
</html>