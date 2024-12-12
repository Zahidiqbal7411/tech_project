<form action="" method="get">
Name : <input type="text" name="f_name"><br><br>
Age  : <input type="text" name="age" ><br><br>
<button type="submit" name="save"> </button>


</form>
<?php 
 if(isset($_GET['save'])
 {
    echo $_GET['fname'];
    echo $_GET['age'];

 }
?>