<!-- <button onclick="abort_all()"  >abort</button> -->
<div id="sell_new_product" style="display:none">
<?php
$username=$_SESSION['username'];
$link=mysqli_connect("localhost","root","",$username);
$sql="SELECT * FROM org";
if($result=$link->query($sql)){
    while($row=$result->fetch_assoc()){
        $org=$row['org'];
    }
}
?>
<button onclick="abort_selling()" >X</button>

    <form  action="index.php" method="POST" enctype="multipart/form-data">
    <?php $username=$_SESSION['username']; ?>
    <input type="hidden" value="validate_new_product" name="type">
    <input type="hidden" value="<?php echo htmlspecialchars($username); ?>" name="username">
    <input type="text" placeholder="item name" name="item"><br>
    <input type="text" placeholder="price" name="price"><br>
    <input type="text" placeholder="quantity" name="quantity"><br>
    <input type="text" placeholder="category" name="ctgrs"><br>
    <input type="text" placeholder="details" name="dt"><br>
    <input type="file" accept="image/*" name="img">
    <input type="hidden" value="<?php echo htmlspecialchars($username); ?>" name="seller_admin">
    <input type="hidden" value="<?php echo htmlspecialchars(str_replace(' ','_',$org)); ?>" name="org">
    <br>
    <button type="submit">publish</button>
    </form>
</div>

<div style="display:block" id="my_items">
<button onclick="sell_new_product()"  >sell new product</button>

<?php
echo "<br><br>";

echo "sold items of you by us: ";
echo "<br><br>";
$link_to_products=mysqli_connect("localhost","root","",$username);
$sql_to_products="SELECT * FROM income";
$product_count=1;
echo "<table border=1>";
echo "<tr><th>*</th> <th>item name</th> <th>price</th> <th>quantity</th> <th>credited amount</th> <th>category</th>  </tr>";
if($result=$link_to_products->query($sql_to_products)){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$product_count++."</td>";
        echo "<td>".$row['item']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "<td>".$row['payment']."</td>";
        echo "<td>".$row['ctgrs']."</td>";
        echo "</tr>";
    }
}
echo "</table>";

echo "<br><br>";
echo "published items by you: ";
echo "<br><br>";
$link_to_products=mysqli_connect("localhost","root","",$username);
$sql_to_products="SELECT * FROM shop";
$product_count=1;
echo "<table border=1>";
echo "<tr><th>*</th> <th>item name</th> <th>price</th> <th>quantity</th> <th>category</th> <th>details</th> </tr>";
if($result=$link_to_products->query($sql_to_products)){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$product_count++."</td>";
        echo "<td>".$row['item']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "<td>".$row['ctgrs']."</td>";
        echo "<td>".$row['dt']."</td>";
        echo "</tr>";
    }
}
echo "</table>";

?>
</div>
<style>
    table{
        background-color:37475a;
        color:white;
    }
    input{
        margin:4px;
        border-radius:10px;
        box-shadow:1px 2px 5px 4px gray;
        width:400px;
    }
</style>
<script>

// function go_to_home(){
//     document.getElementById('abort_all').submit();
// }
</script>