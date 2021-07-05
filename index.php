<?php
session_start();
include('all_forms.php');
// include('title_head.php');
?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<link rel="icon" href="icon.jpg">
<title>amaxon</title>
<link rel="stylesheet" href="style.css" />
<script src="script.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<bootstrap cdn>
<div id="burger" class="burger2">
<?php
include('burger.php');
?>
</div>

<div class="content" id="content">
<?php
include('navbar.php');
?>

<!-- <div id="content" class="content"> -->
<?php
include('type_selection.php');

if($type==="entry"){
    include('feed.php');
}
else if($type==="login"){
    include('log.php');
}
else if($type==="sell_on_amazon"){
    include('sell_on_amazon.php');
}
else if($type==="login_validate"){
    include("login_validate.php");
}
else if($type==="signin_validate"){
    include("signin_validate.php");
}
else if($type==="seller_form_validate"){
    include("seller_form_validate.php");
}
else if($type==="sell_on_amazon"){
    include("sell_on_amazon.php");
}
else if($type==="logout"){
    include("logout.php");
}
else if($type==="validate_new_product"){
    include("validate_new_product.php");
}
else if($type==="product"){
    include("product.php");
}
else if($type==="buy"){
    include("buy.php");
}
else if($type==="my_cart"){
    include("my_cart.php");
}
else if($type==="category_wise"){
    include("similar_items.php");
}
else if($type==="category_wise_product"){
    include("category_wise_product.php");
}
include('footer.php');
?>
</div>
</div>
</body>