<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    input {
        margin-top: 10px;
    }

    select {
        margin-top: 10px;
    }
</style>
<?php
    require_once "functions.php";
?>
<body>

    <form action="/functions.php" method="POST">
        <p>Your full name: <input type="text" id="full_name" name="full_name" placeholder="Full Name"></p>
        <p>Your password:  <input type="password" id="password" name="password" </p>
        <p><input type="submit" name="ok"/></p>
    </form>

    <select>
    <?php
        foreach ($data_users as $key => $value ) {
            echo "<option>", $value['full_name'] ,"</option>";
        };
    ?>
    </select>
</body>
</html>





