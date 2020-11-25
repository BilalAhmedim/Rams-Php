<form method="/Login">
    <label for="Username">User Name: <br><input id="Username" type="text" name="username"></label><br>
    <label for="Password">Password: <br><input id="Password" type="password" name="password"></label><br>
    <input type="submit" value="Login" name="login">
</form>
<?php
if (isset($_POST['submit'])){
    echo $_POST['name'];
}