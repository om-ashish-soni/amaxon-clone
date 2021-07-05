<?php 
session_start();
$item=$_POST['item'];
$seller=$_POST['seller'];
$category=$_POST['category'];
$price=$_POST['price'];
$dt=$_POST['dt'];
$quantity=$_POST['quantity'];
$username=$_SESSION['username'];
$img=$_POST['img'];
// if(isset($_POST['img']))
$link=mysqli_connect("localhost","root","",$username);
$sql="INSERT INTO cart (item,price,quantity,category,seller,img,dt) VALUES ('$item','$price','$quantity','$category','$seller','$img','$dt')";
if($link->query($sql)){
    // echo "<script>alert('added item into cart');</script>";

}
else{
    echo "<script>alert('sorry, can not add item into cart');</script>";

}

?>
<form id="go_back" action='index.php' method='POST' style='float:left;margin-left:40px;'>
    <input type='hidden' value='product' name='type'>
    <input type='hidden' value=<?php echo htmlspecialchars(str_replace(' ','_',$item)); ?> name='product'>
    <input type='hidden' value=<?php echo htmlspecialchars($category); ?> name='category'>
    <input type="hidden" value="yes" name="state">
</form>
<script>
document.getElementById('go_back').submit();
</script>

