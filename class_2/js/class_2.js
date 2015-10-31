/**
 * Created by lenovo_pc on 10/29/2015.
 */
$(function() {
    var background = $(".sidebar").attr("data-bg");
    console.log( $(".sidebar"));
    $(".sidebar").css("backgroundColor",background);

    $(".testing").click(function(e) {
        e.preventDefault();
        $("#"+$(this).attr('href')).css({height:255, width:255, background:'green'});
    })

    $(".testing").attr("data-add","This is a simple attribute");

    //$("#box").css({height:255, width:255, background:'green'});
})