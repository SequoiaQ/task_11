<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика по логическому сравнению php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <?php
       echo "<h3>Задание 1. Таблица истинности РНР</h3>";
       //Вычисления в таблице
        echo "<table class='table table-bordered border-primary'><tr><th>A</th><th>B</th><th>!A</th><th>A || B</th><th>A && B</th><th>AxorB</th></tr>";
        $a = 0;
        $b = 0;
        $row = '<tr><td>'.$a.'</td><td>'.$b.'</td><td>'.(!$a? 1 : 0).'</td><td>'.($a || $b ? 1 : 0).'</td><td>'.($a && $b ? 1 : 0).'</td><td>'.(($a xor $b) ? 1 : 0).'</td></tr>';
        $a = 0;
        $b = 1;
        $row .= '<tr><td>'.$a.'</td><td>'.$b.'</td><td>'.(!$a? 1 : 0).'</td><td>'.($a || $b ? 1 : 0).'</td><td>'.($a && $b ? 1 : 0).'</td><td>'.(($a xor $b) ? 1 : 0).'</td></tr>';
        $a = 1;
        $b = 0;
        $row .= '<tr><td>'.$a.'</td><td>'.$b.'</td><td>'.(!$a? 1 : 0).'</td><td>'.($a || $b ? 1 : 0).'</td><td>'.($a && $b ? 1 : 0).'</td><td>'.(($a xor $b) ? 1 : 0).'</td></tr>';
        $a = 1;
        $b = 1;
        $row .= '<tr><td>'.$a.'</td><td>'.$b.'</td><td>'.(!$a? 1 : 0).'</td><td>'.($a || $b ? 1 : 0).'</td><td>'.($a && $b ? 1 : 0).'</td><td>'.(($a xor $b) ? 1 : 0).'</td></tr></table>';
        printf("%s", $row);

        echo "<h3>Задание 2. Таблица гибкого сравнения</h3>";
        echo "<table class='table table-bordered border-primary'><tr><th></th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>'1'</th><th>null</th><th>'php'</th></tr>";
        $a = true;
        $b = false;
        $c = 1;
        $d = 0;
        $e = -1;
        $f = "1";
        $g = null;
        $h = "php";
        $row = '<tr><td>true</td><td>'.($a == $a ? 'true' : 'false').'</td><td>'.($a == $b ? 'true' : 'false').'</td><td>'.($a == $c ? 'true' : 'false').'</td><td>'.($a == $d ? 'true' : 'false').'</td><td>'.($a == $e ? 'true' : 'false').'</td><td>'.($a == $f ? 'true' : 'false').'</td><td>'.($a == $g ? 'true' : 'false').'</td><td>'.($a == $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>false</td><td>'.($b == $a ? 'true' : 'false').'</td><td>'.($b == $b ? 'true' : 'false').'</td><td>'.($b == $c ? 'true' : 'false').'</td><td>'.($b == $d ? 'true' : 'false').'</td><td>'.($b == $e ? 'true' : 'false').'</td><td>'.($b == $f ? 'true' : 'false').'</td><td>'.($b == $g ? 'true' : 'false').'</td><td>'.($b == $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>1</td><td>'.($c == $a ? 'true' : 'false').'</td><td>'.($c == $b ? 'true' : 'false').'</td><td>'.($c == $c ? 'true' : 'false').'</td><td>'.($c == $d ? 'true' : 'false').'</td><td>'.($c == $e ? 'true' : 'false').'</td><td>'.($c == $f ? 'true' : 'false').'</td><td>'.($c == $g ? 'true' : 'false').'</td><td>'.($c == $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>0</td><td>'.($d == $a ? 'true' : 'false').'</td><td>'.($d == $b ? 'true' : 'false').'</td><td>'.($d == $c ? 'true' : 'false').'</td><td>'.($d == $d ? 'true' : 'false').'</td><td>'.($d == $e ? 'true' : 'false').'</td><td>'.($d == $f ? 'true' : 'false').'</td><td>'.($d == $g ? 'true' : 'false').'</td><td>'.($d == $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>-1</td><td>'.($e == $a ? 'true' : 'false').'</td><td>'.($e == $b ? 'true' : 'false').'</td><td>'.($e == $c ? 'true' : 'false').'</td><td>'.($e == $d ? 'true' : 'false').'</td><td>'.($e == $e ? 'true' : 'false').'</td><td>'.($e == $f ? 'true' : 'false').'</td><td>'.($e == $g ? 'true' : 'false').'</td><td>'.($e == $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>"1"</td><td>'.($f == $a ? 'true' : 'false').'</td><td>'.($f == $b ? 'true' : 'false').'</td><td>'.($f == $c ? 'true' : 'false').'</td><td>'.($f == $d ? 'true' : 'false').'</td><td>'.($f == $e ? 'true' : 'false').'</td><td>'.($f == $f ? 'true' : 'false').'</td><td>'.($f == $g ? 'true' : 'false').'</td><td>'.($f == $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>null</td><td>'.($g == $a ? 'true' : 'false').'</td><td>'.($g == $b ? 'true' : 'false').'</td><td>'.($g == $c ? 'true' : 'false').'</td><td>'.($g == $d ? 'true' : 'false').'</td><td>'.($g == $e ? 'true' : 'false').'</td><td>'.($g == $f ? 'true' : 'false').'</td><td>'.($g == $g ? 'true' : 'false').'</td><td>'.($g == $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>"php"</td><td>'.($h == $a ? 'true' : 'false').'</td><td>'.($h == $b ? 'true' : 'false').'</td><td>'.($h == $c ? 'true' : 'false').'</td><td>'.($h == $d ? 'true' : 'false').'</td><td>'.($h == $e ? 'true' : 'false').'</td><td>'.($h == $f ? 'true' : 'false').'</td><td>'.($h == $g ? 'true' : 'false').'</td><td>'.($h == $h ? 'true' : 'false').'</td></tr>';
        
        $row .= '</table>';
        printf("%s", $row);

        echo "<h3>Задание 3. Таблица жесткого сравнения</h3>";
        echo "<table class='table table-bordered border-primary'><tr><th></th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>'1'</th><th>null</th><th>'php'</th></tr>";
        $a = true;
        $b = false;
        $c = 1;
        $d = 0;
        $e = -1;
        $f = "1";
        $g = null;
        $h = "php";
        $row = '<tr><td>true</td><td>'.($a === $a ? 'true' : 'false').'</td><td>'.($a === $b ? 'true' : 'false').'</td><td>'.($a === $c ? 'true' : 'false').'</td><td>'.($a === $d ? 'true' : 'false').'</td><td>'.($a === $e ? 'true' : 'false').'</td><td>'.($a === $f ? 'true' : 'false').'</td><td>'.($a === $g ? 'true' : 'false').'</td><td>'.($a === $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>false</td><td>'.($b === $a ? 'true' : 'false').'</td><td>'.($b === $b ? 'true' : 'false').'</td><td>'.($b === $c ? 'true' : 'false').'</td><td>'.($b === $d ? 'true' : 'false').'</td><td>'.($b === $e ? 'true' : 'false').'</td><td>'.($b === $f ? 'true' : 'false').'</td><td>'.($b === $g ? 'true' : 'false').'</td><td>'.($b === $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>1</td><td>'.($c === $a ? 'true' : 'false').'</td><td>'.($c === $b ? 'true' : 'false').'</td><td>'.($c === $c ? 'true' : 'false').'</td><td>'.($c === $d ? 'true' : 'false').'</td><td>'.($c === $e ? 'true' : 'false').'</td><td>'.($c === $f ? 'true' : 'false').'</td><td>'.($c === $g ? 'true' : 'false').'</td><td>'.($c === $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>0</td><td>'.($d === $a ? 'true' : 'false').'</td><td>'.($d === $b ? 'true' : 'false').'</td><td>'.($d === $c ? 'true' : 'false').'</td><td>'.($d === $d ? 'true' : 'false').'</td><td>'.($d === $e ? 'true' : 'false').'</td><td>'.($d === $f ? 'true' : 'false').'</td><td>'.($d === $g ? 'true' : 'false').'</td><td>'.($d === $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>-1</td><td>'.($e === $a ? 'true' : 'false').'</td><td>'.($e === $b ? 'true' : 'false').'</td><td>'.($e === $c ? 'true' : 'false').'</td><td>'.($e === $d ? 'true' : 'false').'</td><td>'.($e === $e ? 'true' : 'false').'</td><td>'.($e === $f ? 'true' : 'false').'</td><td>'.($e === $g ? 'true' : 'false').'</td><td>'.($e === $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>"1"</td><td>'.($f === $a ? 'true' : 'false').'</td><td>'.($f === $b ? 'true' : 'false').'</td><td>'.($f === $c ? 'true' : 'false').'</td><td>'.($f === $d ? 'true' : 'false').'</td><td>'.($f === $e ? 'true' : 'false').'</td><td>'.($f === $f ? 'true' : 'false').'</td><td>'.($f === $g ? 'true' : 'false').'</td><td>'.($f === $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>null</td><td>'.($g === $a ? 'true' : 'false').'</td><td>'.($g === $b ? 'true' : 'false').'</td><td>'.($g === $c ? 'true' : 'false').'</td><td>'.($g === $d ? 'true' : 'false').'</td><td>'.($g === $e ? 'true' : 'false').'</td><td>'.($g === $f ? 'true' : 'false').'</td><td>'.($g === $g ? 'true' : 'false').'</td><td>'.($g === $h ? 'true' : 'false').'</td></tr>';
        $row .= '<tr><td>"php"</td><td>'.($h === $a ? 'true' : 'false').'</td><td>'.($h === $b ? 'true' : 'false').'</td><td>'.($h === $c ? 'true' : 'false').'</td><td>'.($h === $d ? 'true' : 'false').'</td><td>'.($h === $e ? 'true' : 'false').'</td><td>'.($h === $f ? 'true' : 'false').'</td><td>'.($h === $g ? 'true' : 'false').'</td><td>'.($h === $h ? 'true' : 'false').'</td></tr>';
        
        $row .= '</table>';
        printf("%s", $row);

        echo "<br/><h5>Вывод: при жестком сравнение идет дополнительная проверка по типу данных, и при несовпадении оно дает false. 
        Это исключает 'странные совпадения', когда например сравнение пустых или строковых значений (в версиях php до 8.0) с нулем дает true. 
        Рекомендуется не мешать сравниваемые типы данных, или определять их типы данных в названии.</h5>";
   ?>
</body>
</html>