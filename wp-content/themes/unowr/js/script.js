/** Smooth scroll **/
/** add "smooth-scroll" class to the <a> to activate it **/
$(document).ready(function() {
  $('.smooth-scroll').on('click', function() { // Au clic sur un élément
    var page = $(this).attr('href'); // Page cible
    var speed = 750; // Durée de l'animation (en ms)
      $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
    return false;
  });
});

/** menu **/
  $(document)
    .ready(function() {
      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;
      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;

/** Modal activation **/
  $(document).ready(function(){
     $('#demande_inscription').click(function(){
        $('#modal_inscription').modal('show');    
     });
});


/** Modal activation **/
  $(document).ready(function(){
     $('#feedback').click(function(){
        $('#modal_feedback').modal('show');    
     });
});

/** Modal activation **/
  $(document).ready(function(){
     $('#login1').click(function(){
        $('#modal_login').modal('show');    
     });
});

/** Modal activation **/
  $(document).ready(function(){
     $('#login2').click(function(){
        $('#modal_login').modal('show');    
     });
});

/** Tab activation **/
$('.menu .item')
  .tab()
;

/** Conversational form parameters for FEEDBACK **/
$(document).ready(function(){
  if ($(document.getElementById("feedback-context-bot")).size() > 0) {
    $(document.getElementById("feedback")).conversationalForm({
      context: document.getElementById('feedback-context-bot'),
      robotImage: bot_img, //base64 || image url // overwrite robot image, without overwritting the robot dictionary
      userImage: "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==",



      submitCallback: function(){
        window.ConversationalForm.addRobotChatResponse("Merci beaucoup, attends quelques secondes..");
        setTimeout(function(){ document.getElementById('feedback').submit(); }, 1000);
      }
    });
  }
});

$(document).ready(function(){
  $('#example1').calendar();
});

