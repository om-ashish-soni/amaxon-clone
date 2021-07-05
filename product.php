<!-- <button onclick="go_to_home()" ><=</button> -->

<?php
$product=str_replace('_',' ',$_POST['product']);
$category=$_POST['category'];
$state="no";
$img="icon.jpg";
if(isset($_POST['state'])&& !empty($_POST['state'])) {
    $state=$_POST['state'];
}

// echo "before".$product."<br>".$category."after";
$link=mysqli_connect("localhost","root","","ctgrs");
$sql="SELECT * FROM $category WHERE item='$product'";
echo "<br>";
if($result=$link->query($sql)){
    while($row=$result->fetch_assoc()){
        $item=$row['item'];
        $price=$row['price'];
        $quantity=$row['quantity'];
        $seller=$row['seller'];
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
        $avail="only few left in stock";
    }
    else{
        $avail="in stock";
    }
}

?>
<!-- <center> -->

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
echo "<span style='font-size:20px;'> You save :<span style='color:red'> ".$price*0.05."</span> Rs</span>";

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
<div class="buy">
<br>
<?php
if($state=="yes"){
    ?>
    <button class="proceed_btn" disabled>already in cart</button>
    <?php
}
else{
    ?>
    <button class="proceed_btn" onclick="add_to_cart()"  >add to cart</button>
    <?php
}
?>

<button class="proceed_btn" onclick="buy()" >proceed to buy</button>
<br><br>
<form style="display:none" id="buy" action="index.php" method="POST">
<input type="hidden" value="buy" name="type">
<input type="hidden" value="<?php echo htmlspecialchars($item); ?>" name="item">
<input type="hidden" value="<?php echo htmlspecialchars($seller); ?>" name="seller">
<input type="hidden" value="<?php echo htmlspecialchars($category); ?>" name="category">
<input type="hidden" value="<?php echo htmlspecialchars($price); ?>" name="price">
<input type="hidden" value="<?php echo htmlspecialchars($dt); ?>" name="dt">
<input type="text" placeholder="quantity:1, 2 etc. " name="quantity" style="width:200px;" required/>
<input type="submit" class="proceed_btn" value="buy">
</form>


</div>
</div>
<form style="display:none" id="add_to_cart" action="add_to_cart.php" method="POST">
<input type="hidden" value="<?php echo htmlspecialchars($item); ?>" name="item">
<input type="hidden" value="<?php echo htmlspecialchars($seller); ?>" name="seller">
<input type="hidden" value="<?php echo htmlspecialchars($quantity);?>" name="quantity">
<input type="hidden" value="<?php echo htmlspecialchars($category); ?>" name="category">
<input type="hidden" value="<?php echo htmlspecialchars($price); ?>" name="price">
<input type="hidden" value="<?php echo htmlspecialchars($dt); ?>" name="dt">
<input type="hidden" value="<?php echo htmlspecialchars($img); ?>" name="img">

</form>


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
<script>
function add_to_cart(){
    document.getElementById('add_to_cart').submit();
}
function buy(){
    document.getElementById('buy').style.display="block";
}
</script>
<!-- <div  class="wrap"> -->
<br><br><br><br>
<br><br><br><br>
<h1>More items like this : </h1>
<?php

include('similar_items2.php');
?>
<!-- </div> -->