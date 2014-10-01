<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ticket System</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a href="{{ action('TicketsController@index') }}" class="navbar-brand">TicketSystem</a>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>