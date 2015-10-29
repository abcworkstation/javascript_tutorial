/**
 * Created by lenovo_pc on 10/28/2015.
 */
$(function(e){

    var var1 = 2555;
    var var2 = 2554;
    var sum = var1+var2;

    var fName = "Rahim";
    var lName = "Karim";

    var one = 25;
    var two = 2;
    var three = "20";
    var total = one+two+three;

    console.log(total);

    $(".para").css({'color':'red',border:"1px solid #ddd"});
    //$(".para").css("border","1px solid #ddd");
    $("ul").children().css("border","1px solid red");

    $(".active").next().children().css("color","green");

    $(".active").prev().css("border","none");

    $('ul').find(".close").css("font-size","15px");

    $("ul").children(".up").css("border","none");

    $(".close").parents("ul").css("background-color","yellow");

})