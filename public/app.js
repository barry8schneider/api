$(document).ready(function(event) {

  $('#appWindow').hide();
  $('#appWindow').fadeIn('slow');

  var frm = $('#form-key-enroll');

  frm.submit(function(event) {
    event.preventDefault();
    submitEnrollForm(frm);
  });
});

var submitEnrollForm = function(frm) {

  $( "#enrollsubmit" ).addClass("disabled");
  $('#appWindow').fadeTo("fast", 0.33);

  var opts = {
    lines: 13, // The number of lines to draw
    length: 20, // The length of each line
    width: 10, // The line thickness
    radius: 30, // The radius of the inner circle
    corners: 1, // Corner roundness (0..1)
    top: '150', // Top position relative to parent in px
  };
  var target = document.getElementById('spinner');
  var spinner = new Spinner(opts).spin(target);

  $.ajax({
    type: frm.attr('method'),
    url: frm.attr('action'),
    data: frm.serialize(),
    dataType: 'json',
  })
    .done(function(data) {
      $('#appWindow').fadeIn('slow');
      spinner.stop();
      $( "#enrollsubmit" ).removeClass("disabled");

      $("#modalTitle").replaceWith("It's on the way...");
      $("#modalBody").replaceWith("Wait a moment and check your email. In the mean time, take a look at the <a href='http://api.govtribe.com'>documentation</a>.");
      $(".modalClose").attr("href", "http://www.govtribe.com");

      $('#modalTemplate').modal({
        keyboard: false
      });

      $( "#enrollsubmit" ).removeClass("disabled");
    })

    .fail(function(data) {
      $('#appWindow').fadeIn('slow');
      spinner.stop();
      $( "#enrollsubmit" ).removeClass("disabled");

      $("#modalTitle").replaceWith("Oops!");
      $("#modalBody").replaceWith("Looks like we're having a problem. Please try again later.");
      $(".modalClose").attr("href", "http://www.govtribe.com");

      $('#modalTemplate').modal({
        keyboard: false
      });

      $( "#enrollsubmit" ).removeClass("disabled");
    });
};

var reset = function() {

    $( "#searchSubmit" ).removeClass("disabled");
    $( "#reset" ).removeClass("disabled");

    $( "#results" ).empty();
    $( "#facets-list" ).empty();
    $( ".pagination" ).empty();

    $( "#facet" ).val('[]');
    $( "#search-query" ).val('');
    $( "#from" ).val(0);
};