<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col mt-3 px-md-1 d-lg-block d-none d-xl-block"><div class="p-3 border bg-primary text-center">A</div></div>
            <div class="col mt-3 px-md-1 d-lg-none d-xl-none d-m-block"><div class="p-3 border bg-primary text-center">L</div></div>
        </div>

        <div class="row">
            <div class="col mt-3 px-md-1 d-lg-block d-xl-block d-m-block d-none"><div class="p-3 border bg-primary text-center">B</div></div>
            <div class="col mt-3 px-md-1"><div class="p-3 border bg-primary text-center">C</div></div>
            <div class="col mt-3 px-md-1"><div class="p-3 border bg-primary text-center ">D</div></div>
            <div class="col mt-3 px-md-1 col mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center">E</div></div>
        </div>

        <div class="row d-lg-block d-xl-block d-m-block d-none">
            <div class="col mt-3 px-md-1"><div class="p-3 border bg-primary text-center">F</div></div>
            <div class="col mt-3 px-md-1"><div class="p-3 border bg-primary text-center">G</div></div>
        </div>

        <div class="row">
            <div class="col-8 mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center">H</div></div>
            <div class="col-4 mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center">I</div></div>
        </div>

        <div class="row justify-content-evenly">
            <div class="col-3 mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center">J</div></div>
            <div class="col-3 mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center">K</div></div>
        </div>

        <div class="row d-lg-none d-xl-none d-m-block">
            <div class="col-12 mt-3 px-md-1"><div class="p-3 border bg-primary text-center">f</div></div>
            <div class="col-12 mt-3 px-md-1"><div class="p-3 border bg-primary text-center">m</div></div>
            <div class="col-12 mt-3 px-md-1"><div class="p-3 border bg-primary text-center">H</div></div>
            <div class="col-12 mt-3 px-md-1"><div class="p-3 border bg-primary text-center">I</div></div>
            <div class="col-12 mt-3 px-md-1 "><div class="p-3 border bg-primary text-center">J</div></div>
            <div class="col-12 mt-3 px-md-1 "><div class="p-3 border bg-primary text-center">K</div></div>
        </div>

    </div>

<script src="{{asset('/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
