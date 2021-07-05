<?php
$username=$_SESSION['username'];
$link=mysqli_connect("localhost","root","",$username);
$sql="SELECT * FROM cart";
$cart_items_count=0;
if($result=$link->query($sql)){
    while($row=$result->fetch_assoc()){
        $cart_items_count++;
        ?>
        <div style="margin-left:2%;" class="product_in_cart">

        <form action='index.php' method='POST' style='float:left;margin-left:40px;'>
        <input type='hidden' value='product' name='type'>
        <input type='hidden' value=<?php echo htmlspecialchars(str_replace(' ','_',$row['item'])); ?> name='product'>
        <input type='hidden' value=<?php echo htmlspecialchars($row['category']); ?> name='category'>

            <div class="img">
            </div>
            <div style="text-align:left">
            <?php

                $item =$row['item'];
                $price =$row['price'];
                $category =$row['category'];
                $quantity =$row['quantity'];
                $img =$row['img'];
                $seller =$row['seller'];
                $dt=$row['dt'];
                //echo "<script>alert('$quantity');</script>";
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
                <button>
                <?php
                echo $item."<br><i>";
                ?>

                </button>
                <br>
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


<!-- <button class="proceed_btn" onclick="buy()" >proceed to buy</button> -->
<br><br>
<form style="display:none" id="buy" action="index.php" method="POST">
<input type="hidden" value="buy" name="type">
<input type="hidden" value="<?php echo htmlspecialchars($item); ?>" name="item">
<input type="hidden" value="<?php echo htmlspecialchars($seller); ?>" name="seller">
<input type="hidden" value="<?php echo htmlspecialchars($category); ?>" name="category">
<input type="hidden" value="<?php echo htmlspecialchars($price); ?>" name="price">
<input type="hidden" value="<?php echo htmlspecialchars($dt); ?>" name="dt">
<input type="text" placeholder="quantity:1, 2 etc. " name="quantity" style="width:200px;" required/>
<input type="submit" class="proceed_btn" value="proceed to buy">
</form>


</div>
</div>
            </div>
        </form>
        <button  class="delete" onclick="delete_form_cart()">delete</button>
        </div>
        <br>

        <?php
    }
}
if($cart_items_count==0){
    //echo "<script>alert('nothing into the cart');</script>";
    ?>
    <div style="text-align:center">
    <?php echo "nothing into the cart...";?>
    </div>
    <?php
}
?>
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
.delete{
    margin-right:50%;
    
}
.product{
    width:60%;
    font-size:16px;
    font-family:'Times New Roman', Times, serif;
    border:2px solid orange;
    /* background-color:#cccccc; */
}
.seller{
    font-size:16px;
    color:Dodgerblue;
}
.product_in_cart{
    border:5px solid orange;
    /* height:200px; */
}
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
<form id="delete_from_cart" method="POST" action="delete_from_cart.php">
<input type="hidden" value="<?php echo htmlspecialchars($item);?>" name="item" />
<input type="hidden" value="<?php echo htmlspecialchars($price);?>" name="price" />
<input type="hidden" value="<?php echo htmlspecialchars($category);?>" name="category" />
<input type="hidden" value="<?php echo htmlspecialchars($quantity);?>" name="quantity" />
<input type="hidden" value="<?php echo htmlspecialchars($img);?>" name="img" />
<input type="hidden" value="<?php echo htmlspecialchars($seller);?>"   name="seller" />
<input type="hidden" value="<?php echo htmlspecialchars($dt);?>" name="dt" />

</form>
<script>
function delete_form_cart(){
    document.getElementById('delete_from_cart').submit();
}
</script>

<?php
if(isset($category)){
    // echo "valid";
}
else{
    // echo "needed";
    $list=array("pantry","mobiles","fashion","essentials","electronics","home","appliances");
    $category=$list[rand(0,6)];
}
include('similar_items2.php');
?>
  