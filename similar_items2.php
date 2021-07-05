
<?php
if(isset($_POST['category'])){
    $category=$_POST['category'];
}
$link=mysqli_connect("localhost","root","","ctgrs");
$sql="SELECT * FROM $category";
$item=array();
$price=array();
$quantity=array();
$seller=array();
$dt=array();
$avail=array();
$img=array();
$count=0;
if($result=$link->query($sql)){
    while($row=$result->fetch_assoc()){
        array_push($item,$row['item']);
        array_push($price,$row['price']);
        array_push($quantity,$row['quantity']);
        array_push($seller,$row['seller']);
        array_push($dt,$row['dt']);
        if(isset($row['times_now'])) array_push($img,$row['times_now']);
        else array_push($img,"icon.jpg");
        $count++;
        $temp=$row['quantity'];
        if($temp==0){
            array_push($avail,"currently unavailable");
        }
        else if($temp<=24){
            array_push($avail,"only ".$temp." left in stock.");
        }
        else if($temp<=100) {
            array_push($avail,"few left in stock");
        }
        else{
            array_push($avail,"in stock");
        }
    }
    
}


for($i=0;$i<$count;$i++){
    // $t_category=$category[$i];
?>
<td>
<form action="index.php" method="POST">
<input type="hidden" value="product" name="type">
<input type="hidden" value="<?php echo htmlspecialchars(str_replace(' ','_',$item[$i]));?>" name='product'>
<input type="hidden" value="<?php echo htmlspecialchars($category);?>" name='category'>
<!-- <div class="product" style="width:400px;margin:10px;margin-top:20px;float:left;"> -->

<button class="product" style="width:400px;margin:10px;margin-top:20px;float:left;background-color:white;text-align:center;">
<span style="font-size:18px;width:300px;color:black">

<?php
echo substr($item[$i],0,40)."...<br><i>";
?>
</span>
<div class="sub_image_representation">
<image src="<?php echo htmlspecialchars($img[$i]); ?>" >
</div>
<br>
 
<?php
echo "<span style='color:black'>Price :<span style='font-size:30px;background-color:white;color:black'>".$price[$i]."</span> Rs</span>"; 
?>


<!-- <span class="avail" ><?php echo $avail[$i]; ?></span>
<br>
<div class="details">
<span class="seller"> -->
<?php
// echo "seller : ".$seller[$i];
?>
<!-- <br>
</span> -->
<?php
// echo "details: <br>".substr($dt[$i],0,100)."<br>";
// echo "hello";
?>

<!-- </div> -->
</button>

<!-- </div> -->
</form>
</td>
<?php
}
?>
<style>
.sub_image_representation{
    border-radius:24px;
    /* box-shadow:1px 1px 2px 4px gray; */
    background-color:white;
}
.wrap::-webkit-scrollbar {
  width: 0.5em;
  /* border-radius:100%; */
}
 
.wrap::-webkit-scrollbar-track {
  /* box-shadow: inset 0 0 6px gray; */

}
 
.wrap::-webkit-scrollbar-thumb {
  background-color: grey;
  border-radius:16px;

}
button{
    outline:none;
    border:none;
}
.bg{
    background-color:white;
}
.{
    font-family:helvetica;
    font-size:18px;
}
</style>