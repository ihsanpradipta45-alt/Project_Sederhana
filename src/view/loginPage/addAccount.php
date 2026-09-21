<form action="index.php?url=loginAddUser/addUser" method="POST" enctype="multipart/form-data">
    <input type="text" name="firstName" placeholder="Alex">
    <input type="text" name="lastName" placeholder="Cassandra">
    <input type="email" name="email" placeholder="admin@invenio.com">
    <input type="password" name="password">
    <input type="radio" id="admin" name="role" value="admin" required>
        <label for="admin">admin</label>
        <br>
    <input type="radio" id="customer" name="role" value="customer">
        <label for="customer">customer</label>
        <br>
    <input type="file" name="file" id="file">
    <button type="submit">Daftar</button>
</form>