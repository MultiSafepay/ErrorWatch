<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MODMW Error-Watch dashboard</title>
    <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <meta name="theme-color" content="#004A71">
    <style>
        :root{
            --tw-bg-opacity: 1;
            --multisafepay-color: rgba(0, 74, 113, var(--tw-bg-opacity));
        }
        .bg-multisafepay {
            background-color: var(--multisafepay-color) !important;
        }
        .bg-multisafepay-gradient{
            background: linear-gradient(0deg, rgba(0,0,36,1) 0%, rgba(0,74,133,1) 100%);
        }
        .text-multisafepay {
            color: var(--multisafepay-color);
        }
        main{
            min-height: 1900px;
        }
        .nav-item{
            width: 100%;
        }
        .nav-item > .nav-link{
            color: white;
            display: flex;
            justify-content: space-between;
            border-radius: 5px;
        }
        .nav-item > .nav-link:hover{
            background-color: white;
            color: black;
        }
    </style>
</head>
<body class="bg-gray-50">
<div class="container-fluid">
    <div class="row">
        <header class="col-sm-2 bg-multisafepay-gradient">
            <div class="d-flex flex-column justify-content-start text-light">
                <div class="py-3 d-flex align-items-start">
                    <h4>Error-Watch</h4><img style="width: 30px;" class="mx-2" src="/images/error-watch/warring-icon.svg" alt="">
                </div>
                <ul class="nav">
                    <h6 class="pb-2 border-bottom w-100">Modular-MW projects</h6>
                    <li class="nav-item d-block pb-2">
                        <a class="nav-link" href="#">CCV<i>🡺</i></a>
                        <a class="nav-link" href="#">Lightspeed<i>🡺</i></a>
                        <a class="nav-link" href="#">Shopify<i>🡺</i></a>
                    </li>
                </ul>
            </div>
        </header>
        <main class="col">
            @section('content')
            @show
        </main>
    </div>
</div>
<footer></footer>
</body>
</html>
