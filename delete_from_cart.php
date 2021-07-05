<?php
session_start();
?>
<form action="index.php" method="POST" id="my_cart2">
    <input type="hidden" value="my_cart" name="type">
</form>

<?php
$item=$_POST['item'];
$price=$_POST['price'];
$category=$_POST['category'];
$quantity=$_POST['quantity'];
$img=$_POST['img'];
$seller=$_POST['seller'];
$dt=$_POST['dt'];
$username=$_SESSION['username'];
$link=mysqli_connect("localhost","root","",$username);
$sql_to_delete_in_cart="DELETE FROM cart
WHERE item = '$item' AND price = '$price' AND quantity = '$quantity' AND dt = '$dt' AND seller = '$seller' 
";
if($link->query($sql_to_delete_in_cart)){
    //echo "<script>alert('congo, deleted $item with price $price from cart');</script>";
    ?>
    <script>
        document.getElementById('my_cart2').submit();
    </script>
    <?php
}
else{
    //echo "<script>alert('sorry,can not delete $item with price $price from cart');</script>";

}

?>

