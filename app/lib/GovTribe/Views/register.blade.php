<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GovTribe API - Request API Key</title>
  <style>
  @include('styles')
  </style>
</head>
  <body>
    <div class="container" id="appWindow">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
      <div class="keyform">
        <div class="logo">
          <a href="http://govtribe.com" title="GovTribe"><img src="{{ asset('logo.png') }}" alt="GovTribe"></a>
        </div>
        {{ Form::open([
            'method' => 'post', 
            'action' => 'GovTribe\Controllers\EnrollmentController@postEnroll', 
            'id' => 'form-key-enroll', 
            'role' => 'form',
            'data-toggle' => 'validator',
            'data-delay' => "1000"
          ]
        )}}
        <div class="text-center header">
          <h1>Send Me An API Key!</h1>
        </div>
        <p class="lead">Just fill this out and we'll send it right over. <a href="mailto:help@govtribe.com?Subject=API%20Key">Contact us</a> if you have any questions.</p>
        <div class="form-group">
          {{ Form::label('name', 'Name') }}
          {{ Form::text('firstName', null, ['class' => 'form-control', 'id' => 'inputFirstName', 'placeholder' => 'First', 'required' => '']) }}
          {{ Form::text('lastName', null, ['class' => 'form-control', 'id' => 'inputLastName', 'placeholder' => 'Last', 'required' => '']) }}
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          {{ Form::label('company', 'Company') }}
          {{ Form::text('company', null, ['class' => 'form-control', 'id' => 'inputCompany', 'placeholder' => 'Company']) }}
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          {{ Form::label('email', 'Email') }}
          {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'inputEmail', 'placeholder' => 'Email', 'required' => '']) }}
          {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'inputEmailConfirm', 'placeholder' => 'Confirm', 'required' => '', 'data-match' => "#inputEmail", 'data-match-error' => 'Whoops, these don\'t match']) }}
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <div class="checkbox">
            <label>
              <input type="checkbox" id="terms" data-error="You must check this box to continue" required>
              I have read and agree to <a href="/register/legal" id="loadLegal">this disclaimer</a>
            </label>
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <hr>
          {{ Form::honeypot('my_name', 'my_time') }}
          {{ Form::submit('Submit', ['class'=>'btn btn-success btn-lg btn-block', 'id' => 'enrollsubmit']) }}
          {{ Form::close() }}
      </div>
        </div>
      </div>
      @include('footer')
    </div> <!-- /container -->
    <div class="modal fade modal-wide" id="modalTemplate">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><span id="modalTitle"></span></h4>
          </div>
          <div class="modal-body">
            <p id="modalBody"></p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary modalClose">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    @include('scripts')
    <script src ="validator.min.js"></script>
  </body>
</html>