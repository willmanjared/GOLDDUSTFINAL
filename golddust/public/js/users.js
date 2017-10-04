$( document ).ready(function () {
  $(".panel-dropdown > .panel-heading").click(function (ev) {
    //console.log("panel clicked");
    $(this).parent().children(".panel-body").toggle("scale");
  });
  $(".nav-tabs > li").click(function (ev) {
    var a = $(ev.target).closest("ul");
    a.children(".active").removeClass("active");
    $(ev.target).parent().addClass("active");
    
    if (a.attr("data-container")) {
      var b = a.attr("data-container");
      var c = $(ev.target).parent().attr("data-value");
      //console.log("has container", b);
      $("."+ b +" > div").fadeOut();
      $("."+ b +" > ."+ c).fadeIn();
    }
    /*
      if (a.attr("data-link") && $(ev.target).parent().attr("data-index")) {
        var b = a.attr("data-link");
        var c = $(ev.target).parent().attr("data-index");
        console.log("has linked list", b, c);
      }
    */
    
  });
  $("li.disabled > a").click(function (ev) {
    ev.preventDefault();
    ev.stopPropagation();
    return false;
  });
});