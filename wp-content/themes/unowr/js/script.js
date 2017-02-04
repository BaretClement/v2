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

$(document).ready(function(){
  var $form = $('[data-form="true"]');
  var $input = $('[data-form="input"]');
  var $select = $('[data-form="select"]');
  var index = 0;

  var questions = [
    {
      type: "input",
      key: "name",
      label: "hello from input"
    },
    {
      type: "date",
      key: "date",
      label: "hello from date"
    },
    {
      type: "select",
      label: "hello from select",
      key: "select_1",
      answers: [
        "answer 1 from option",
        "answer 2 from option",
        "answer 3 from option"
      ]
    },
    {
      type: "select",
      label: "more select",
      key: "select_2",
      answers: [
        "answer 1 from option",
        "answer 2 from option",
        "answer 3 from option",
        "answer 4 from option",
        "answer 5 from option",
        "answer 6 from option"
      ]
    },
    {
      type: "input",
      key: "select_3",
      label: "again input"
    }
  ];

  function changeForm(question) {
    $input.attr('disabled', 'disabled')
    $select.attr('disabled', 'disabled')
    $('.conversational-form .calendar').remove()

    var days = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche']
    var months = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"]

    switch(question.type) {
      case "input":
        $input.attr('cf-questions', question.label)
        $input.removeAttr('disabled')
        break
      case "date":
        $input.attr('cf-questions', question.label)
        $input.removeAttr('disabled')
        $('.conversational-form [tag-type]').calendar({
          monthFirst: false,
          ampm: false,
          text: {
              days: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
              months: months,
              monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
              today: 'Today',
              now: 'Now',
              am: 'AM',
              pm: 'PM'
            },
            onHidden: function () {
              
            },
          formatter: {
          date: function (date, settings) {
            if (!date) return '';
              var day = days[date.getDay()];
              var dateNum = date.getDate();
              var month = months[date.getMonth()];
              var monthNum = date.getMonth() + 1;
              var year = date.getFullYear();
              return day + ' ' + dateNum + ' ' + month + ' ' + year;
                  }
                }
              });
              break
            case "select":
              $select.attr('cf-questions', question.label)
              var options = $('form').find('option')
              var i = 0
              Array.prototype.forEach.call(options, (option) => {
                if(question.answers[i] != null) {
                  $(option).val(question.answers[i]).html(question.answers[i])
                }else {
                  $(option).val('').html('')
                }
                i++
              })
              $select.removeAttr('disabled')
              break
          }
          if (window.ConversationalForm != null) {
            window.ConversationalForm.remapTagsAndStartFrom()
          }
          index++
        }

        var formResult = {}
        var currentKey = ''
        changeForm(questions[0])
        var conversationalForm = new cf.ConversationalForm({
          formEl: document.getElementById("form"),
          robotImage: bot_img, //base64 || image url // overwrite robot image, without overwritting the robot dictionary
          userImage: "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==",
          submitCallback: function() {
            if (questions[index] != null) {
              currentKey = questions[index].key
              formResult[currentKey] = $('cf-chat-response').last().find('text').html()
              console.log('* * * * * * * * * * * * * * * * * * * * * * * * * * * * *')
              console.log('formResult', formResult)
            //   jQuery.post(
            //     'http://v2.local/wp-admin/admin-ajax.php', {
            //       'action': 'ajax_filter',
            //       'ambiance': 'chill',
            //       'agenda': 'jeudi 15 février 2017 9:05',
            //       'type_de_cuisine': 'chinois'
            //     },
            //     function(response){
            //       console.log(JSON.parse(response));
            //     }
            //   );
              changeForm(questions[index])
            }else {
              submitform()
            }
          }
        });

        function submitform() {
          var url = top.location.pathname
          var $form = $('<form>')
          $form.css('display', 'none')
          $form.attr('method', 'post');
          $form.attr('action', url);
          var data = JSON.stringify(formResult);
          $form.append($('<input type="hidden" name="json"/>').val(data));
          $('body').append($form);
          $form.submit();
      }
      });