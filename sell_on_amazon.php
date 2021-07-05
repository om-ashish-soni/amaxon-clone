<div class="sell_on_amazon" id="sell_on_amazon">
<?php
    $username=$_SESSION['username'];
    $link=mysqli_connect("localhost","root","",$username);
    $sql="SELECT * FROM shop";
    if($link->query($sql)){
        echo "your accout has been already created on sell on amazon";
        ?>
        <div>
            <!-- <h1>hello , welcome i was waiting for you</h1> -->
            <?php include('seller_home_page.php'); ?>
        </div>
        <?php
    }
    else{
        echo "wellcome to sell on amaxon";
        ?>
        <?php
        include('become_seller_page.php');
    }
?>
</div>