<html>  

<body bgcolor="cyan">
<center>  

<form method = "post">
<br><br><br><br>
First Number <input type="number" name="firstnumber">   
<br><br>  
Second Number <input type="number" name="secondnumber"><br><br><br><br>
<input type = "submit" name = "submit" value="Swap">   
</form>   

</body>   
</html>  

<?php   
if(isset($_POST['submit']))  
    {   
$firstnumber = $_POST['firstnumber'];   
$secondnumber = $_POST['secondnumber'];
$thirdnumber = $firstnumber;
$firstnumber = $secondnumber;  
$secondnumber = $thirdnumber;
echo "After swapping:<br><br>";  
echo "First Number =".$firstnumber."  Second Number=".$secondnumber;
}   
?>