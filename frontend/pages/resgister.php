<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Create Account</title>
</head>
<body>
  <h1>Create Account</h1>
  <form action="createaccountf.php" method="post">
    <label for="username">Username:</label>
    <input type="username" id="username" name="username" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="confirm">Confirm Password:</label>
    <input type="password" id="confirm" name="confirm" required><br>

    <label for="address">address:</label>
    <input type="text" id="address" name="address" required><br>


    <button type="submit">Create Account</button>
  </form>
</body>
</html>
