<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url('/');?>index.php/welcome/download_vcard" method="post">
        <div>
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div>
            <label for="firstname">Last Name:</label>
            <input type="text" name="lastname" id="lastname">
        </div>
        <button type="submit">Download</button>
    </form>
</body>
</html>