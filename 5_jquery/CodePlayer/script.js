var openCount = 4;
$("#html-button").click(function() {
   if($("#html-player").css("display") != "none") {
       $("#html-player").css("display", "none");
       $("#html-button").css("backgroundColor", "lightgrey");
   } else {
       $("#html-button").css("backgroundColor", "aliceblue");
       $("#html-player").css("display", "inline");
   }
});
$("#css-button").click(function() {
   if($("#css-player").css("display") != "none") {
       $("#css-player").css("display", "none");
       $("#css-button").css("backgroundColor", "lightgrey");
   } else {
       $("#css-button").css("backgroundColor", "aliceblue");
       $("#css-player").css("display", "inline");
   }
});
$("#js-button").click(function() {
   if($("#js-player").css("display") != "none") {
       $("#js-player").css("display", "none");
       $("#js-button").css("backgroundColor", "lightgrey");
   } else {
       $("#js-button").css("backgroundColor", "aliceblue");
       $("#js-player").css("display", "inline");
   }
});
$("#output-button").click(function() {
   if($("#output-player").css("display") != "none") {
       $("#output-player").css("display", "none");
       $("#output-button").css("backgroundColor", "lightgrey");
   } else {
       $("#output-button").css("backgroundColor", "aliceblue");
       $("#output-player").css("display", "inline");
   }
});