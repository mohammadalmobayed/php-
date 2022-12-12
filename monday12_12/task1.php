<?php 
$a=1000;
$b=1200;
$c=1400;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=blue>Salary of Mr. A is</td> <td> <?php echo $a ?>$ </font></td></tr> 
<tr> <td><font color=blue>Salary of Mr. B is</td> <td><?php echo $b ?>$</font></td></tr>
<tr> <td><font color=blue>Salary of Mr. C is</td> <td><?php echo $c ?>$</font></td></tr>
</table>

</body>
</html>
<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name); 
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";
?>
<br>
<?php
$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo "There are $no_of_lines lines in $file"."\n";
?>
