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
    <span id="spinner" style="position: absolute;display: block;top: 50%;left: 50%;"></span>
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
        <h1 class="form-key-enroll-heading">Send Me An API Key!</h1>
        <p>Free API keys are limited to 1000 requests per month. If you need more than that, please <a href="mailto:help@govtribe.com?Subject=API%20Key">contact us.</a></p>
        <hr>
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
        <hr>
          {{ Form::honeypot('my_name', 'my_time') }}
          {{ Form::submit('Submit', ['class'=>'btn btn-primary btn-lg btn-block', 'id' => 'enrollsubmit']) }}
          {{ Form::close() }}
      </div>
    </div>
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