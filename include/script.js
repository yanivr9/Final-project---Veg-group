// For mobile phone change the navbar background color to black
$(window).width(function () {
  if ($(window).width() < 500) {
    $("#collapse").click(function () {
      $("#topnav").toggleClass("black");
    });
  }
});

// For large screen change the navbar background color to black when the user scroll till the end of the header picture
$(window).scroll(function () {
  var windowYmax = 600;
    if($(window).width()<800){    
    var windowYmax = 300;
  }
  if($(window).width()<500){    
    var windowYmax = 100;
  }
  var scrolledY = $(window).scrollTop();
  if (scrolledY > windowYmax) {
    // add black background color
    $("#topnav").addClass("black");
  } else {
    // remove black background color
    $("#topnav").removeClass("black");
    $("#topnav").addClass("transition");
  }
});

// prevent click from all the disabled links
$('a.isDisabled').click(function(e)
{
    e.preventDefault();
});

function check(){
  let firstName = document.gETelementByid('firstName');
  let lastName = document.gETelementByid('lastName');
  let idNumber = document.gETelementByid('id');
  let phoneNumber = document.gETelementByid('phoneNumber');
  let email = document.gETelementByid('email');
  window.alert(firstName);
}