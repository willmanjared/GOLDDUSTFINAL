$( document ).ready(function () {
  $(".panel-dropdown").click(function (ev) {
    //console.log("panel clicked");
    $(this).children(".panel-body").toggle("scale");
  });
});