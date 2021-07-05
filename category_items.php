
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
$count=0;
if($result=$link->query($sql)){
    while($row=$result->fetch_assoc()){
        array_push($item,$row['item']);
        array_push($price,$row['price']);
        array_push($quantity,$row['quantity']);
        array_push($seller,$row['seller']);
        array_push($dt,$row['dt']);
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
<div class="product" style="margin:10px;margin-top:20px;float:left;">

<button>

<?php
echo substr($item[$i],0,36)."...<br><i>";
echo "Price : <span style='font-size:30px;'>".$price[$i]."</span> Rs"."<br>"; 
echo "<span class='avail' style='text-decoration: line-through;'>".$price[$i]*1.05." Rs</span><br></i>";
?>
<span class="avail" ><?php echo $avail[$i]; ?></span>
<br>
<div class="details">
<span class="seller">
<?php
echo "seller : ".$seller[$i];
?>
<br>
</span>
<?php
echo "details: <br>".substr($dt[$i],0,100)."<br>";
// echo "hello";
?>
</div>
</button>

</div>
</form>
</td>
<?php
}
?>