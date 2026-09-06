<form action="loginAddUser/addUser" method="POST">
    <input type="text" name="firstName" placeholder="Alex">
    <input type="text" name="lastName" placeholder="Cassandra">
    <input type="email" name="username" placeholder="admin@invenio.com">
    <input type="password" name="password">
    <input type="radio" id="admin" name="role" value="admin">
        <label for="admin">admin</label>
        <br>
    <input type="radio" id="customer" name="role" value="customer">
        <label for="customer">customer</label>
        <br>
    <button type="submit">Daftar</button>
</form>