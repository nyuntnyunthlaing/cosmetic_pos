<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel=stylesheet href="{{ mix('css/admin-menu.css') }}" />

    <title>{{env('APP_NAME')}}</title><style>body{font-family:'Nunito',sans-serif}</style></head>
<body>
    <div id="admin-app">
        <admin-panel></admin-panel>
    </div>  
    <script src="{{ mix('js/admin-app.js') }}"></script> </body>
</html>