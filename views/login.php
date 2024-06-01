<h1>Login</h1>
<?php if (isset($feedback)) echo "<p>$feedback</p>"; ?>
<form action="index.php?page=login" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="passwod">Password:</label>
    <input type="text" id="password" name="password" required>
    <button type="submit">Login</button>
</form>