var $ = $ || jQuery

/** Smooth scroll **/
/** add "smooth-scroll" class to the <a> to activate it **/
$(document).ready(function() {
  $('.send-mail').on('click', function(e) {
    var $this = $(this);
    var infos = JSON.parse($(this).attr('data-info'));
    var resto = JSON.parse($(this).attr('data-resto'));
    e.preventDefault();
    // console.log(infos + resto)
    // console.log("data user : " + 
    //               "\n " + infos["name"] + 
    //               "\n " + infos["prix_moyen"] + 
    //               "\n " + infos["telephone"] + 
    //               "\n " + infos["agenda"] + 
    //               "\n " + infos["type_de_cuisine"] + 
    //               "data resto : " + 
    //               "\n " + resto["title"] +
    //               "\n " + resto["name"] +
    //               "\n " + resto["id"] +
    //               "\n " + resto["content"] +
    //               "\n " + resto["image"] +
    //               "\n " + resto["prenom_du_contact"] +
    //               "\n " + resto["nom_du_contact"] +
    //               "\n " + resto["nom_du_restaurant"] +
    //               "\n " + resto["adresse"] +
    //               "\n " + resto["code_postal"] +
    //               "\n " + resto["ville"] +
    //               "\n " + resto["telephone"] +
    //               "\n " + resto["email"] +
    //               "\n " + resto["specialite"] +
    //               "\n " + resto["prix_moyen"] +
    //               "\n " + resto["category"] +
    //               "\n " + resto["subcategory"])
    $.ajax({
      url: "https://formspree.io/clement.baret@gmail.com", 
      // url: "https://formspree.io/fabrice.labbe@adfab.fr", 
      method: "POST",
      data: {
        message:  "Informations utilisateur" + 
                  "\n " + 
                  "\n " + "Nom : " + infos["name"] + 
                  "\n " + "Prix moyen indiqué : " + infos["prix_moyen"] + 
                  "\n " + "Téléphone : " + infos["telephone"] + 
                  "\n " + "Date de réservation souhaitée : " +infos["agenda"] + 
                  "\n " + "Nombre de personne(s) : " +infos["nb_person"] + 
                  "\n " +
                  "Informations restaurant" + 
                  "\n " +
                  "\n " + "Nom : " + resto["nom_du_restaurant"] +
                  "\n " + "Spécialité : " + resto["specialite"] +
                  "\n " + "Prix moyen : " + resto["prix_moyen"] +
                  "\n " + "Catégorie : " + resto["category"] +
                  "\n " + "Sous-catégorie : " + resto["subcategory"] +
                  "\n " + "Description : " + resto["content"] +
                  "\n " + "Adresse : " + resto["adresse"] +
                  "\n " + resto["code_postal"] +
                  "\n " + resto["ville"] +
                  "\n " +
                  "Informations restaurateur" +
                  "\n " + 
                  "\n " + "Prénom : " + resto["prenom_du_contact"] +
                  "\n " + "Nom : " + resto["nom_du_contact"] +
                  "\n " + "Téléphone : " + resto["telephone"] +
                  "\n " + "Email : " + resto["email"]
      },
      dataType: "json",
      success: function (response) {
        console.log(">>>>>>>>>> SUCCESS : " + JSON.stringify(response))
        $this.parent( "form" ).submit();
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(">>>>>>>>>> ERROR : " + xhr.responseText)
      }
    });
  });
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
      label: "hello, comment tu t'appelles ?"
    }
  ];

  function changeForm(question) {
    $input.attr('disabled', 'disabled')
    $select.attr('disabled', 'disabled')
    $('.conversational-form .calendar').remove()

    var days = ['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi']
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
          minDate: new Date(),
          popupOptions: {
            position: 'top center'
          },
          text: {
              days: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
              months: months,
              monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
              today: "Aujoud'hui",
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
        }

        var formResult = {
          'action': 'ajax_filter'
        }
        var currentKey = questions[0].key
        changeForm(questions[0])
        var lastResult = []
        var conversationalForm = new cf.ConversationalForm({
          formEl: document.getElementById("form"),
          context: document.querySelector('[cf-context]'),
          robotImage: bot_img, //base64 || image url // overwrite robot image, without overwritting the robot dictionary
          userImage: "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==",
          submitCallback: function() {
            // if (questions[index] != null) {
              formResult[currentKey] = $('cf-chat-response').last().find('text').html()
              formResult['question-index'] = index;
              if(typeof formResult['prix_moyen'] !== 'undefined' && formResult['prix_moyen'] !== null){
                formResult['prix_moyen'] = parseInt(formResult['prix_moyen'])
              }
              jQuery.post(
                ajax_url, formResult,
                function(response){
                  var json = JSON.parse(response);

                  if (json.result.length < 3) {
                    var res = json.result
                    while(res.length < 3) {
                      var add = lastResult[0]
                      var shouldAdd = true
                      Array.prototype.forEach.call(res, function(item) {
                        if(item.id == add.id) {
                          shouldAdd = false
                        }
                      })
                      if(shouldAdd) {
                        res.push(lastResult[0])
                      }
                      lastResult.shift()
                    }
                    submitform({
                      info: formResult,
                      resto: res
                    })
                  }else {
                    currentKey = json.question.key
                    changeForm(json.question);
                    lastResult = json.result
                    index++
                  }
                }
              );
            // }else {
              
            // }
          }
        });

        function submitform(res) {
          var url = top.location.pathname
          var $form = $('<form>')
          $form.css('display', 'none')
          $form.attr('method', 'post');
          $form.attr('action', site_url+"/resultats");
          var data = JSON.stringify(res);
          $form.append($('<input type="hidden" name="json"/>').val(data));
          $('body').append($form);
          $form.submit();
      }
    });


$.ajax({
    url: "https://formspree.io/you@email.com", 
    method: "POST",
    data: {message: "hello!"},
    dataType: "json"
});
