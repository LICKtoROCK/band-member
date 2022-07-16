<<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @yield('title')
        <div class="card border-info mx-auto mt-4" style="width:fit-content">
            <div class="card-header">
                <div class="text-center">
                     @yield('heading')
                     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">                
                </div>
            </div>
        </div>    
    </head>
    <body>
        <div class="container">
            @include('commons.error_message')
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>