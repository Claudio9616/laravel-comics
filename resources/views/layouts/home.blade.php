<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='icon' href='{{asset('img/dc-logo.png')}}'>
    @vite('resources/js/app.js')
</head>
<body>
@include('includes.header')
{{-- <main>
    @yield('main-content')
</main> --}}
@include('includes.comics') 
@include('includes.footer')
</body>
</html>
{{-- praticamente nella live della MOLISANA lui prima ha creato le rotte dei link nel suo header, poi ha detto che il main cambia a seconda
di quello che clicchiamo nei link tramite yeld(poi vedi come si scrive), nei singoli file collegati ai link gli mette l'exstend e poi 
la section (guarda bene la sintassi live del 07/03/24) e ogni file avrà il suo markup. --}}