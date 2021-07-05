<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- 
<button onclick="my_cart()">my cart</button>
<button onclick="logout()">logout</button>
<button onclick="sell_on_amazon()">sell on amazon</button> -->
<?php

$list=array();
$list_len=0;
$link=mysqli_connect("localhost","root","","ctgrs");
$sql="SELECT * FROM ctgrs_list";
if($result=$link->query($sql)){
    while($row=$result->fetch_assoc()){
        array_push($list,$row['ctgrs']);
        $list_len++;
    }
}
echo "<br>";
?>

<?php
// $product_list=array();
// $nested_list_count=array();
// for($i=0;$i<$list_len;$i++){
//     $temp_list=array();
//     $temp_list_count=0;
//     echo "<button>$list[$i]</button>";
// }
/*
    $sql="SELECT * FROM $list[$i]";
    if($result=$link->query($sql)){
        while($row=$result->fetch_assoc()){
            array_push($temp_list,$row['item']);
            $temp_list_count++;
        }
        
    }
    array_push($nested_list_count,$temp_list_count);
    array_push($product_list,$temp_list);
}
for($i=0;$i<7;$i++){
    ?><div style="margin:30px;height:100px;"><?php
    echo "$list[$i]: "."<br>";
    for($j=0;$j<$nested_list_count[$i];$j++){
        echo "<form action='index.php' method='POST' style='float:left;margin-left:40px;'>";
        echo "<input type='hidden' value='product' name='type'>";
        // echo $product_list[$i][$j];
        ?>
        <input type='hidden' value=<?php echo htmlspecialchars(str_replace(' ','_',$product_list[$i][$j])); ?> name='product'>
        <input type='hidden' value=<?php echo htmlspecialchars($list[$i]); ?> name='category'>

        <?php
        
        echo "<button style='margin-left:2%' >".$product_list[$i][$j]."</button>";
        echo "</form>";
    }

    ?></div><?php

    echo "<br style='margin-right:400px;'><br><br><br>";
}
*/
// $list=array("pantry","mobiles","fashion","essentials","electronics","home","appliances");


    $category=$list[0];
    ?>
    <br><br>
    <div class="outer_wrap">
    <button class="proceed_btn" onclick="pantry()">
    <?php
    echo $category; 
    ?>
    </button>
    
    <div  class="wrap"><?php
    include('feed_item.php');
    ?>
    </div>
</div>
    <?php
    echo "<br><br><br>";


    $category=$list[1];
    ?>
    <div class="outer_wrap">

    <button class="proceed_btn" onclick="mobiles()">
    <?php
    echo $category; 
    ?>
    </button>
    <div  class="wrap"><?php
    include('feed_item.php');
    ?></div>
</div>

    <?php
    echo "<br><br><br>";

    
    $category=$list[2];
    ?>
    <div class="outer_wrap">

    <button class="proceed_btn" onclick="fashion()">
    <?php
    echo $category; 
    ?>
    </button>
    <div  class="wrap"><?php
    include('feed_item.php');
    ?></div>
</div>

    <?php
    echo "<br><br><br>";

    
    $category=$list[3];
    ?>
    <div class="outer_wrap">

    <button class="proceed_btn" onclick="essentials()">
    <?php
    echo $category; 
    ?>
    </button>
    <div class="wrap"><?php
    include('feed_item.php');
    ?></div>
</div>

    <?php
    echo "<br><br><br>";

    
    $category=$list[4];
    ?>
    <div class="outer_wrap">

    <button  class="proceed_btn" onclick="electronics()">
    <?php
    echo $category; 
    ?>
    </button>
    <div class="wrap"><?php
    include('feed_item.php');
    ?></div>
</div>
    
    <?php
    echo "<br><br><br>";

    
    $category=$list[5];
    ?>
    <div class="outer_wrap">

    <button  class="proceed_btn" onclick="home()">
    <?php
    echo $category; 
    ?>
    </button>
    <div  class="wrap"><?php
    include('feed_item.php');
    ?></div>
</div>

    <?php
    echo "<br><br><br>";

    
    $category=$list[6];
    ?>
    <div class="outer_wrap">

    <button class="proceed_btn" onclick="appliances()">
    <?php
    echo $category; 
    ?>
    </button>
    
    <div  class="wrap">
    <tr>
    <?php
    
    include('feed_item.php');
    ?>
    </tr>
    </div>
</div>
    <?php
    echo "<br><br><br>";

    

?>
<script>
function my_cart(){
    document.getElementById('my_cart').submit();
}
</script>
<style>
.{
}
.details{
    font-size:16px;
    color:gray;
    background-color:white;
    font-family:helvetica;
}
.avail{
    color:red;
    font-size:16px;
    font-family:helvetica;
    background-color:white;
    float:left;
}
.product{
    font-size:20px;
    font-family:helvetica;
    /* border:2px solid orange; */
    display: inline-block;
    background-color:white;
    margin-left:20px;
}
.seller{
    font-size:16px;
    background-color:white;
    color:Dodgerblue;
    /* color:limegreen; */
}
.wrap{
    /* width:90%; */
    height:400px;
    /* border:2px solid black; */
    background-color:white;
    
    overflow-y:scroll;
    scroll-behavior: smooth;
    /* overflow-y:hidden; */
}
.proceed_btn{
    background-color:#232f3e;
    color:#37475A;
    margin-left:24px;
    border-radius:4px;
    font-size:20px;
    padding:5px;
    width:200px;
    color:white;
    text-align:center;
    outline:none;
    border:none;
    margin:10px;
    box-shadow:0.9px 0.9px 1.2px 2px gray;
}
.outer_wrap{

    
    /* height:440px; */
    background-color:white;
    box-shadow:2px 4px 9px 8px gray; 
    border-radius:10px;
}

</style>
<script>
function pantry(){
    alert('pantry by you');
    document.getElementById('pantry').submit();
}

function mobiles(){
    alert('mobiles by you');
    document.getElementById('mobiles').submit();
}function fashion(){
    alert('fashion by you');
    document.getElementById('fashion').submit();
}function essentials(){
    alert('essentials by you');
    document.getElementById('essentials').submit();
}function electronics(){
    alert('electronics by you');
    document.getElementById('electronics').submit();
}function home(){
    alert('home by you');
    document.getElementById('home').submit();
}function appliances(){
    alert('appliances by you');
    document.getElementById('appliances').submit();
}
</script>
