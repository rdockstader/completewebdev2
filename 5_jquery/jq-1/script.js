$(".green-circle").click(function() {
   $("p").html("This text has changed");
});
$(".red-square").click(function () {
    $(".red-square").css("width", "400px");
    $(".red-square").css("background-color", "blue"); 
});
$(".green-circle").hover(function() {
    $("iframe").attr("src", "http://www.rydocdevelopment.com")
})
$("#fade-out").click(function() {
    alert("Fade out clicked!");
    this.fadeOut();
    $("#fade-in").fadeIn();
})