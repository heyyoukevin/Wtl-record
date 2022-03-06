<html>  

<body bgcolor="cyan">
<center>  

<form method = "post">
<br><br><br><br>
Number <input type="number" name="number">   
<br><br><br><br>
<input type = "submit" name = "submit" value="REVERSE">   
</form>   

</body>   
</html>

<?php   
if(isset($_POST['submit']))  
    {   
$number = $_POST['number'];
$revnum = 0;
while ($number > 1)  
{  
$rem = $number % 10;  
$revnum = ($revnum * 10) + $rem;  
$number = ($number / 10);   
}  
echo "Reverse number is: $revnum";
}   
?>