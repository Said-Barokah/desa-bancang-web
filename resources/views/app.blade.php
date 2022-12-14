<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @routes
    <script src="{{ URL::asset('js/app.js') }}" defer></script>
    @inertiaHead
  </head>

  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
  <body>
    @inertia
  </body>
</html>
