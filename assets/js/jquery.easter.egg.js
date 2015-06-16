(function($) {
  $.fn.easter_egg = function() {
      var str = "                      Please could you stop the noise, I'm trying to get some rest        \n";   
          str+= "                      From all the unborn chicken voices in my head        \n";
          str+= "                      What's that...? (I may be paranoid, but not an android)        \n";
          str+= "                      When I am king, you will be first against the wall        \n";
          str+= "                      With your opinion which is of no consequence at all        \n";
          str+= "                      What's that...? (I may be paranoid, but no android)        \n";
          str+= "                      Ambition makes you look pretty ugly        \n";
          str+= "                      Kicking and squealing gucci little piggy        \n";
          str+= "                      You don't remember        \n";
          str+= "                      Why don't you remember my name?        \n";
          str+= "                      Off with his head, man        \n";
          str+= "                      Why don't you remember my name?        \n";
          str+= "                      I guess he does....        \n";
          str+= "                      Rain down, rain down        \n";
          str+= "                      Come on rain down on me        \n";
          str+= "                      From a great height        \n";
          str+= "                      Rain down, rain down        \n";
          str+= "                      Come on rain down on me        \n";
          str+= "                      From a great height        \n";
          str+= "                      Rain down, rain down        \n";
          str+= "                      Come on rain down on me        \n";
          str+= "                      That's it, sir        \n";
          str+= "                      You're leaving        \n";
          str+= "                      The crackle of pigskin        \n";
          str+= "                      The dust and the screaming        \n";
          str+= "                      The yuppies networking        \n";
          str+= "                      The panic, the vomit        \n";
          str+= "                      God loves his children...        \n";
          str+= "                      sudo shutdown -h now             \n";

      var container = $('<div id="terminal">');
      container.css('height', '100%');
      var terminal = $('<div>'); 
      terminal.hide();
      
      container.click(function(){
        terminal.fadeOut('slow', function(){
          container.fadeOut('slow',function(){
            $(this).remove();
          });
        });
      })
      
      container.html(terminal).hide();
      $('body').append(container);
      container.fadeIn('slow',function(){
        terminal.fadeIn('slow');
      });

      var progress = 0;
      //$ele.text('');      
      var timer = setInterval(function() {                
        if (str[progress] == "\n") {          
          str = str.substring(0,progress) + '<br/><strong>marvin@heart_of_gold:</strong> ' + str.substring(progress+1,str.length);
          progress = progress + 45;
        }
        terminal.html('<strong>marvin@heart_of_gold:</strong> ' + str.substring(0, progress++) + '<span class="cursor">_</span>');                
        if (progress >= str.length){          
          clearInterval(timer);
          terminal.fadeOut('slow', function(){
            container.fadeOut('slow',function(){
              $(this).remove();
            });
          })
          
        }
      }, 100);      

    return this;
  };
})(jQuery);
