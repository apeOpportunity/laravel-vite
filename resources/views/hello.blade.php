<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello!</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])       
</head>
<body>
    <div class="container text-center brown" style="height: 100vh;">
    <div class="row h-25">
        <div class="col h1 text-yellow align-self-center">Page Title</div>
    </div>    
    <div class="row h-75 ">
            <div class="col text-yellow">
            Column
            </div>
            <div class="col ">
                <button type="button" class="btn btn-warning">Testbutton</button>
            </div>
            <div class="col text-yellow">
            Column
            </div>
        </div>
    </div>    
    
</body>
</html>