
<html>

<form action="" method="post">
    <input type="hidden" value="<?php echo $a= "Ornitorrinco"; ?>" name = "animal">
    <input type="submit" value="Aperte" name = "aperte">

</form>


</html>


<?php 

echo $_POST['animal'];



?>