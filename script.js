function login(){
    document.getElementById('login').style.display="block";
    document.getElementById('signin').style.display="none";
}
function signin(){
    document.getElementById('signin').style.display="block";
    document.getElementById('login').style.display="none";
}
function sell_on_amazon(){
    document.getElementById('sell_on_amazon').submit();
}
function logout(){
    document.getElementById('logout').submit();
}
function remove_seller_form(){
    document.getElementById('remove_seller_form').submit();
}
function show_seller_form(){
    document.getElementById('seller_form').style.display="block";
    document.getElementById('motive_for_seller').style.display="none";
}
function go_to_home(){
    document.getElementById('abort_all').submit();
}
function sell_new_product(){
    alert('sell new product has been clicked by you');
    document.getElementById('sell_new_product').style.display="block";
    document.getElementById('my_items').style.display="none";
}
function abort_selling(){
    alert('abort_selling has been clicked by you');
    document.getElementById('sell_new_product').style.display="none";
    document.getElementById('my_items').style.display="block";
}
function abort_all(){
    alert('abort_all clicked by you');
    go_to_home();
}
