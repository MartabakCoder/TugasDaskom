<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 14 PHP Test POST</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="fnama" id="fnama">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="femail" id="femail">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
    <div>
        <?php
            if(isset($_POST['fnama'])){
                echo "Nama: ".$_POST['fnama'].", email: ".$_POST['femail'];
            }
        ?>
    </div>
</body>
</html>