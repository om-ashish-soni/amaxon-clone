<?php
echo "<button class='proceed_btn' style='width:98%'>
your order has been placed
</button><br>";
echo "<button class='proceed_btn' style='width:98%'>order placed for this product</button>";
$product=$_POST['item'];
$category=$_POST['category'];
$reduced_quantity=$_POST['quantity'];
$link=mysqli_connect("localhost","root","","ctgrs");

$sql="SELECT * FROM $category WHERE item='$product'";
echo "<br>";
$img="icon.jpg";
if($result=$link->query($sql)){
    while($row=$result->fetch_assoc()){
        $item=$row['item'];
        $price=$row['price'];
        $quantity=$row['quantity'];
        $seller=$row['seller'];
        $seller_admin=$row['seller_admin'];
        $dt=$row['dt'];
        if(isset($row['times_now'])) $img=$row['times_now'];
    }
    if($quantity==0){
        $avail="currently unavailable";
    }
    else if($quantity<=24){
        $avail="only ".$quantity." left in stock.";
    }
    else if($quantity<=100) {
        $avail="few left in stock";
    }
    else{
        $avail="in stock";
    }
}
$now_quantity=$quantity-$reduced_quantity;
$income=$reduced_quantity*$price;
$new_income=$income." Rs";
$link_for_income=mysqli_connect("localhost","root","",$seller_admin);
$sql_for_income="INSERT INTO income (item,price,quantity,payment,ctgrs) VALUES ('$item','$price','$reduced_quantity','$new_income','$category')";
if($link_for_income->query($sql_for_income)){
    //echo "<script>alert('congo , deleiverd income to seller $seller');</script>";
}
else{
    //echo "<script>alert('sorry , cannot deleiverd income to seller $seller');</script>";
}


if($quantity-$reduced_quantity > 0){
    $sql_to_update_ctgrs="UPDATE $category
    SET quantity=$now_quantity
    WHERE item = '$item' AND price = '$price' AND quantity = '$quantity' AND dt = '$dt' AND seller = '$seller' 
    ";
    if($link->query($sql_to_update_ctgrs)){
        //echo "<script>alert('congo updated $item $price Rs quantity $quantity to $now_quantity in ctgrs');</script>";

    }
    else{
        //echo "<script>alert('sorry can not update in update in ctgrs.');</script>";

    }

    $link_to_update_in_seller=mysqli_connect("localhost","root","",$seller_admin);
    $sql_to_update_in_seller="UPDATE shop
    SET quantity=$now_quantity
    WHERE item = '$item' AND price = '$price' AND quantity = '$quantity' AND dt = '$dt'  
    ";
    if($link_to_update_in_seller->query($sql_to_update_in_seller)){
        //echo "<script>alert('congo updated $item $price Rs quantity $quantity to $now_quantity in $seller_admin');</script>";

    }
    else{
        //echo "<script>alert('sorry can not update in update in $seller_admin.');</script>";

    }

}
else{
    $sql_to_delete_in_ctgrs="DELETE FROM $category
    WHERE item = '$item' AND price = '$price' AND quantity = '$quantity' AND dt = '$dt' AND seller = '$seller' 
    ";
    if($link->query($sql_to_delete_in_ctgrs)){
        //echo "<script>alert('congo deleted $item $price Rs quantity $quantity to $now_quantity in ctgrs');</script>";

    }
    else{
        //echo "<script>alert('sorry can not delete in ctgrs.');</script>";

    }
    $link_to_delete_in_seller=mysqli_connect("localhost","root","",$seller_admin);
    $sql_to_delete_in_seller="DELETE FROM shop
    WHERE item = '$item' AND price = '$price' AND quantity = '$quantity' AND dt = '$dt'
    ";
    if($link_to_delete_in_seller->query($sql_to_delete_in_seller)){
        //echo "<script>alert('congo deleted $item $price Rs quantity $quantity to $now_quantity in $seller_admin');</script>";
    }
    else{
        //echo "<script>alert('sorry can not delete in $seller_admin.');</script>";

    }
    
}
?>

<!-- <center> -->
<?php
$quantity=$now_quantity;
if($quantity<=0){
    $avail="currently unavailable";
}
else if($quantity<=24){
    $avail="only ".$quantity." left in stock.";
}
else if($quantity<=100) {
    $avail="few left in stock";
}
else{
    $avail="in stock";
}
?>
<div class="actual_product">

<div class="product_image">
<!-- hello i am image; -->
<image src="<?php echo htmlspecialchars($img); ?>" class="image_representation">
<br>
</div>


<div class="main_wrap">
<div class="product_now">
<br><br>
<?php
echo $item."<br><i>";
echo "<br>";

echo "Price : <span class='checked_price' style='font-size:27px;'>".$price."</span> Rs &nbsp;&nbsp;"; 
echo "<span  style='color:gray;text-decoration: line-through;'>".$price*1.05." Rs</span><br></i>";
echo "<span style='font-size:20px;'> You have saved :<span style='color:red'> ".$price*0.05."</span> Rs</span>";

?>
<br>
<br>
<span class="avail_now" ><?php echo $avail; ?></span>
<br><hr><br>
<div class="details_now">
<span class="seller_now">
<?php
echo "seller : ".$seller;
?>
<br>
</span>
<?php
echo "<span style='color:black;'>details: </span><br>".$dt."<br>";
// echo "hello";
?>
</div>
</div>
</div>
<!-- </center> -->

</div>

<style>
.details{
    font-size:16px;
    color:gray;
    font-family:helvetica;
}
.avail{
    color:red;
    font-size:16px;
    font-family:helvetica;
    /* float:left; */
}
.product{
    width:60%;
    font-size:20px;
    font-family:helvetica;
    box-shadow:1px 2px 4px 5px gray;
    border-radius:10px;
    /* border:2px solid orange; */
    /* background-color:#cccccc; */
}
.seller{
    font-size:16px;
    color:Dodgerblue;
}
.wrap{
    width:90%;
    height:400px;
    /* border:2px solid black; */
    background-color:orange;
    overflow-x:scroll;
    scroll-behavior: smooth;
    /* overflow-y:hidden; */
}
.main_wrap{
    float:right;
    width:48%;
    height:97%;
    /* border:2px solid black; */
    /* background-color:orange; */
    /* overflow-x:scroll; */
    scroll-behavior: smooth;
    /* overflow-y:hidden; */
}
.actual_product{
    width:90%;
    height:95%;
    /* border:5px solid black; */
    scroll-behaviour:smooth;
}
input{
    border-radius:4px;
    outline:none;
    border:none;
    box-shadow:0.9px 0.9px 1.2px 2px gray;

}
.product_image{
    float:left;
    width:48%;
    height:70%;
    /* border:2px solid black; */
    text-align:center;
    /* background-color:orange; */
    /* overflow-x:scroll; */
    scroll-behavior: smooth;
}
.image_representation{
    width:50%;
    
}
.buy{
    text-align:center;
    width:48%;
    /* border:2px solid orange; */
}
.product_now{
    font-size:27px;
    font-family:helvetica;
    /* border:2px solid orange; */
}
.details_now{
    font-size:24px;
    color:gray;
    font-family:helvetica;
}
.avail_now{
    color:brown;
    font-size:22px;
    font-family:helvetica;
    /* float:left; */
}
.seller_now{
    color:dodgerblue;
    font-size:24px;
}
.checked_price{
    color:red;
    font-size:20px;
}
.{
    background-color:white;
}
.proceed_btn{
    background-color:#feb069;
    color:#37475A;
    margin-left:10px;
    border-radius:4px;
    font-size:20px;
    padding:5px;
    text-align:center;
    outline:none;
    border:none;

    box-shadow:0.9px 0.9px 1.2px 2px gray;
}
</style>
<div  class="outer_wrap">

<?php
echo "<span class='proceed_btn'>Few more items like this : </span>";
echo "<br><br>";
include('similar_items2.php');
?>
</div>
