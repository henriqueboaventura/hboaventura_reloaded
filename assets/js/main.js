
$(document).ready(function(){
  konami = new Konami()
  konami.code = function() {      
	  $(document).easter_egg();
  }
  konami.load();
  
  $('header#main small').on('click', function(){
    $(document).easter_egg();
  });

  $('.wrapper').hide();
  $('section').on('mouseenter', function() {
    $('div.wrapper', $(this)).slideDown('fast');
  });
  $('section').on('mouseleave', function() {
    $('div.wrapper', $(this)).slideUp('fast');;
  });

  $('section header a').click(function(e){
    e.stopPropagation();
  })

})

