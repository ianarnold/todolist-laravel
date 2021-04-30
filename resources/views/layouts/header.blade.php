<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title>Todo App JavaScript | CodingNepal</title> -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ URL::asset('css/styles.css') }} ">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
            crossorigin="anonymous">
    </head>
    <body>
        <div class="container m-5 p-2 rounded mx-auto bg-light shadow">
            <!-- App title section -->
            <div class="row m-1 p-4">
                <div class="col">
                    <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                        <a href="{{ route('tasksview') }}"><u>To do list LARAVEL</u></a>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </body>
</html>