<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="../controller/create.inc.php" method="POST">
        <input type="text" name="nama" placeholder="nama">
        <br>
        <br>
        <input type="text" name="username" placeholder="username">
        <br>
        <br>
        <input type="text" name="pwd" placeholder="password">
        <br>
        <br>
        <input type="text" name="email" placeholder="email">
        <br>
        <br>
        <input type="submit">
        <br>
        <br>
    </form>
    <a href="update and delete.php">Update Akun</a> <br>
    <a href="search.php">Search Akun</a>

    <h1>Search Comment</h1>
    <form action="search.php" method="POST">
        <label for="search">Search for User : </label>
        <input id="search" name="search" type="text" placeholder="Search ..." >
        <button>Search</button>
    </form>
</body>
</html>

