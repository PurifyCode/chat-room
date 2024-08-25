<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Forum</title>
</head>
<body bgcolor="#808080">
    <form action='connect.php' method="POST">
        <label for="user">Username:</label><br>
        <input type='text' name='name' id='name' required/><br>
        <label for="message">Message:</label><br>
        <input type='text' name='message' id='message' required/><br>
        <input type='submit' name='submit' id='submit' />
        <br><br>
    </form>
    <div id="chat">

    </div>
</body>
<style>
    body {
        font-family: sans-serif;
    }
    #chat {
        background-color: darkgrey;
        width: 500px;
        height: 500px;
        border-radius: 10px;
    }
</style>
</html>

<?php

?>