<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "loginAddUser" method="POST">
        <input type="text" name="firstName" placeholder="Alex">
        <input type="text" name="lastName" placeholder="Cassandra">
        <input type="email" name="username" placeholder="admin@invenio.com">
        <input type="password" name="password">
        <input type="radio" id="admin" name="role"value="admin">
            <label for="admin">admin</label>
            <br>
        <input type="radio" id="customer" name="role" value="customer">
            <label for="customer">admin</label>
            <br>



    </form>
    
</body>
</html>