<?php
var_dump(6.1);
echo "hello world";
echo "hello world";
echo "hello world";
?>

<html>
<body>
<?php
$a=1;
echo $a+1; #2
echo "<br />";
$a=2;
print $a+1; #3
?>
</body>
</html>


<html>
<body>
<?php
$a = 100;
echo gettype($a);
settype($a, 'double');
echo '<br />';
echo gettype($a);
?>
</body>
</html>

<html>
<body>
    <form method="get" action="2.php">
        id :  <input type="text" name="id" />
        password :  <input type="text" name="password" />
        <input type="submit" />
    </form>
</body>
</html>