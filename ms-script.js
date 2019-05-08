document.onkeydown = function (e) {
    e = e || window.event;
    if (e.ctrlKey) {
        var c = e.which || e.keyCode;
        switch (c) {
            case 67:
            case 83:
            case 85:
            case 87:
            case 117:
                e.preventDefault();
                e.stopPropagation();
            break;
        }
    }
};
$(document).ready(function(){


$('.ansview').click(function() {
  if ($(this).text() == "‒ View Answer")
  {
     $(this).text("+ View Answer");
  }
  else
  {
     $(this).text("‒ View Answer");
  };
});

document.addEventListener('contextmenu', event => event.preventDefault());

});
