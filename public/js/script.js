$(document).ready(function () {
    $("#search_advanced").hide();
    $("body").click(function (e) {
        if(e.target.className=="container-fluid home-page"){
            $("#search_advanced").addClass("hi");
            $("#search_advanced").slideUp();
        }
    });
    $("body").click(function (e) {
        if(e.target.className=="row arama"){
            $("#search_advanced").addClass("hi");
            $("#search_advanced").slideUp();
        }
    });
    $("body").click(function (e) {
        if(e.target.className=="container-fluid arama"){
            $("#search_advanced").addClass("hi");
            $("#search_advanced").slideUp();
        }
    });
    $("body").click(function (e) {
        if(e.target.className=="row link"){
            $("#search_advanced").addClass("hi");
            $("#search_advanced").slideUp();
        }
    });
    $("#formGroupExampleInput").click(function () {

        $("#search_advanced").addClass("disp").slideDown();

    });
    $("#cancel").click(function () {

        $("#search_advanced").slideUp();

    });
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
    });

    $('.radio-group label').on('click', function(){
        $(this).removeClass('not-active').siblings().addClass('not-active');
    });
    $(".fa-heart").on("click", function() {
        $(this).toggleClass("heart");
    });



});
