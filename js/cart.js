$(document).ready(function(){
    $("#btn1").click(function(){
        $("p").append(" <b>Appended text</b>.");
        key = "0";
        var name = $(".item-1").find('.name');
        var price = $(".item-1").find('.price');
        value = {
            name: name,
            price: price
        }
        localStorage.setItem("2", "1");
        console.log(localStorage.getItem('2'));
    });
    $("#show").click(function(){
        var items = localStorage.getItem('2');
        console.log(items);
        localStorage.clear();
    });
    
    });