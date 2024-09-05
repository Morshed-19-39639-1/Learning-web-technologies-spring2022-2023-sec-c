
<form method="POST">
Enter the length
<input type = "text" name = "le">
<br/>

Enter the breadth
<input type = "text" name = "br">
<br/>

<input type= "submit" value = "submit" name="btnsubmit">
</form>
<?php
if(isset($_POST['btnsubmit']))
{
$l=$_POST['le'];
$b=$_POST['br'];

$area=$l*$b;
$peri= 2*($l+$b);
echo "The aea of rectangle ".$area."<br/>";
echo "The perimeter of rectangle ".$peri."<br/>";
}
?>
<?php
echo "<br/> 2no : <br/>";
$price = 68.69;
$vat = 15;

echo round($price * (($vat / 100) + 1), 2);
?>
<?php  
echo "<br/> 3no : <br/>";
     $number=1233456;  
     if($number%2==0)  
     {  
      echo "$number is Even Number";   
     }  
     else  
     {  
      echo "$number is Odd Number";  
     }   
?> 
<?php
echo "<br/> 4no : <br/>";
    $num1=50;
    $num2=40;
    $num3=20;
    if($num1>$num2 and $num1>$num3)
    {
        echo "Max is $num1";
    }
    else if($num2>$num3)
    {
        echo "Max is $num2";
    }
    else
    {
        echo "Max is $num3";
    }
?>
<?php
 echo "<br/>5no : <br/>";
 $num = 1;
 while ( $num <= 100 ) {
   print "$num";
   $num += 2;
 }
  
 
 ?>
<?php
echo "<br/>6no : <br/>";
for($i=0;$i<=5;$i++){        
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br/>";
}
for($i=0;$i<=5;$i++)
{
    for($j=5-$i;$j>=0;$j--){
    echo "1";
    }
echo "<br>";
}

$n = 65; /*Initializing ASCII value of (A) */
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo chr($n)." ";
    }
    $n = $n + 1;
    echo "<br/>";
}

?>

<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
echo "<br/> 7no : <br/>";
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i </td>";
  }
  echo "</tr>";
  }
?>
</table>
</body>
</html>
