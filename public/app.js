$(document).ready(function(event) {

  $('#appWindow').hide();
  $('#appWindow').fadeIn('slow');

  var frm = $('#form-key-enroll');

  frm.submit(function(event) {
    event.preventDefault();
    submitEnrollForm(frm);
  });

  $('body').on('hidden.bs.modal', '.modal', function () {
      $(this).removeData('bs.modal');
      $('#appWindow').fadeTo('fast', 1);
  });

});

var submitEnrollForm = function(frm) {

  $('#appWindow').fadeTo("fast", 0.33);

  $.ajax({
    type: frm.attr('method'),
    url: frm.attr('action'),
    data: frm.serialize(),
    dataType: 'json',
  })
    .done(function(data) {
      $("#modalTemplate #modalTitle").html("It's on the way...");
      $("#modalTemplate #modalBody").html("Wait a moment and check your email. In the mean time, take a look at the <a href='http://api.govtribe.com'>documentation</a>.");
      $('.modalClose').click(function() {
        window.location.href='http://www.govtribe.com';
      });

      $('#modalTemplate').modal({
        keyboard: false
      });
    })

    .fail(function(data) {
      $("#modalTemplate #modalTitle").html('Oops!');
      $("#modalTemplate #modalBody").html(data.responseText);
      $('.modalClose').click(function() {
        $('#modalTemplate').modal('hide');
      });
      $('#modalTemplate').modal({
        keyboard: false
      });
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