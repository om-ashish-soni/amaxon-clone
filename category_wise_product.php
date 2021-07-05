<!-- <div class="wrap"> -->
<?php
    $category=$_POST['category'];
    include("similar_items2.php");
?>
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
    /* width:400px; */
    width:400px;
    font-size:16px;
    text-align:left;
    border-radius:10px;
    box-shadow:1px 2px 4px 5px gray;
    font-family:helvetica;
    /* border:2px solid orange; */
    /* background-color:#cccccc; */
}
.seller{
    font-size:16px;
    color:Dodgerblue;
}
.wrap{
    width:90%;
    /* height:400px; */
    /* border:2px solid black; */
    background-color:orange;
    overflow-x:scroll;
    scroll-behavior: smooth;
    
    /* overflow-y:hidden; */
}

.outer_wrap{

    background-color:white;
    box-shadow:2px 4px 9px 8px gray; 
    border-radius:10px;
}
</style>

