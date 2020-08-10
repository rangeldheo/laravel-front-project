<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" />

</head>

<body>
    <div class="d-block w-100 p-5 bg-gray dashboard">
        <div class="main w-100 bg-gray shadow">
            <div class="row m-0 p-0 w-100 h-100 main-body">
                <div class="col-md-2 bg-mid-gray p-4 menu">

                </div>
                <div class="col-md-8 content p-4 h-100 bg-dark-gray">

                </div>
                <div class="col-md-2 bg-mid-gray extra">

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'E aí!?',
            text: 'Quer ganhar tempo no desenvolvimento né?',
            footer: 'Vai em frente, aqui já tá tudo pronto.'
        })
    </script>
</body>

</html>
