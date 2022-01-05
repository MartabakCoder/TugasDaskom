<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Pertamaku</title>
</head>
<body>
    <?php
        print "<h2>Belajar PHP</h2>";
        print "Hello World<br>";
        print "Sedang mempelajari php!";
        echo "<br><br>";

        $txt = "Hello World";
        $x = 5;
        $y = 10.5;

        echo $txt;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;
        echo "<br><br>";

        $txt1 = "Hello World!";
        $txt2 = "What a nice day";
        echo $txt1." ".$txt2;
        echo "<br> Panjang $txt1;";
        echo strlen($txt1)." sama dengan ".strlen("Hello world!");
        echo "<br>Kata world , ada di posisi ke- ";
        echo strpos("Hello world!", "world");

        $x = 10;
        $y = 6;
        $jumlah = $x+$y;
        echo "<br>".$x." + ".$y." = ".$jumlah;
        echo "<br><br>";

        $x = 10;
        echo "nilai x = $x";
        $x += 100;
        echo "<br>nilai x = $x";

        $x = 100;
        $y = "100";
        echo "<br> x == y: ";
        var_dump($x==$y);
        echo "<br> x === y: ";
        var_dump($x===$y);

        $x = 100;
        $y = 50;
        if($x=100 && $y == 50 ){
            echo "<br>Benar x=$x dan y=$y";
        }

        echo "<br><br>";

        $d = date("D");
        if($d=="Mon") echo "hari Senin";
        elseif($d=="Sun") echo "hari Minggu";
        else{
            echo "Bukan hari Minggu/Senin";
            echo "<br>Bye!";
        }

        echo "<br><br>";

        $i = 1;
        while($i<=5){
            echo "bilangan: $i <br>";
            $i++;
        }
        echo "<br><br>";
        $i = 1;
        do{
            $i++;
            echo "bilangan: $i <br>";
        }while($i<=5);
        echo "<br><br>";

        $x = array("Mangga","Nanas","Apel");
        foreach($x as $value){
            echo $value."<br>";
        }
    ?>
</body>
</html>