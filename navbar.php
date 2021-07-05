<?php
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

?>
<header>
<button onclick="burger()" class="burger"></button>
<button onclick="go_to_home()" class="logo"></button>
<button onclick="my_cart()" class="cart"></button>
<button onclick="logout()" style="float:right;height:50px;">logout</button>
<br>
<button onclick="pantry()">pantry</button>
<!-- &nbsp; -->
<button onclick="mobiles()">mobiles</button>
<!-- &nbsp; -->
<button onclick="fashion()">fashion</button>
<!-- &nbsp; -->
<button onclick="essentials()">essentials</button>
<!-- &nbsp; -->
<button onclick="electronics()">electronics</button>
<!-- &nbsp; -->
<button onclick="home()">home</button>
<!-- &nbsp; -->
<button onclick="appliances()">appliances</button>
<!-- &nbsp; -->



<!-- &nbsp; -->
</header>

<?php
}
?>
<style>
    .burger{
        background-image:url('burger.png');
        width:50px;
        height:50px;
    }
    .cart{
        background-image:url('cart.png');
        background-size:100% 100%;
        width:60px;
        float:right;
        height:50px;
    }
    .logo{
        background-image:url('clone.png');
        background-size:100% 100%;
        width:200px;
        height:50px;
    }
    header{
        top:0;
        background-color:#232f3e;     
    }
button{
    background-color:#232f3e;
    color:#37475A;
    margin:10px;
    border-radius:4px;
    font-size:20px;
    padding:5px;
    /* width:200px; */
    color:white;
    text-align:center;
    outline:none;
    border:none;
    box-shadow:0.9px 0.9px 1.2px 2px gray;
}
</style>
<script>
    var count=0;
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

<script>
function burger(){
    count++;
    if(count%2==1){
        
        document.getElementById('burger').style.display="block";
        document.getElementById('content').style.width="68%";
        document.getElementById('content').style.marginLeft="28%";

    }
    else{
        document.getElementById('burger').style.display="none";
        document.getElementById('content').style.width="100%";
        document.getElementById('content').style.marginLeft="0%";

    }

}
</script>
<script>
function my_cart(){
    document.getElementById('my_cart').submit();
}
</script>