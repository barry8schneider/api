<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style>
  @include('styles')
  </style>
</head>
  <body>
  <div class="container">
    <div class="showkey">
      <div class="logo">
        <a href="http://govtribe.com" title="GovTribe"><img src="{{ asset('logo.png') }}" alt="GovTribe"></a>
      </div>
      <h1>{{ $key->_id }}</h1>
      <small>...is the key.</small>
      <p>Free API keys are limited to 500 requests per day and 4 requests per second. If you need more than that, please <a href="mailto:help@govtribe.com?Subject=API%20Key">contact us.</a></p>
    </div>
  </div>
  @include('scripts')
  </body>
</html>