    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Hello, world!</title>

        <style>
            .nav-link {
                color: black;
            }
            .nav-link:hover {
                color: blue;
            }
            .nav-link.active {
                border: 1px solid #D9D9D9;
                background-color: #D9D9D9;
                border-radius: 12px;
                color: black;
            }
            .logo {
                margin-bottom: 20px;
            }
            .background-image{
                margin-top: 100px;
            }
            .card{
                border-radius: 20px;
                height: 300px;
            }
            .rigth-sidebar{
                margin-top: 100px;
            }
            .right{
                display: flex;
                justify-content: right;
            }
            .rigth-buttons{
                margin-top: 10px;
            }
        </style>


    </head>
    <body>

    <div class="container   ">
        <div class="row">


            <!-- Боковая панель навигации -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3 nav-links">

                    <div class="d-flex justify-content-center logo">
                        <img src="ico/logo.svg" alt="Логотип" width="120" height="50">
                    </div>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">
                                <i class="fas fa-home me-2"></i>Лента
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-user me-2"></i>Сахифаи ман
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i>Нав
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i>Чавоб дихед
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i>Мавзухо
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i>Рейтинг
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i>Машхур
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i>Огохиномахо
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i>Чомеа
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">
                                <i class="fas fa-home me-2"></i>Лента
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user me-2"></i>Сахифаи ман
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Основное содержимое страницы -->
            <main class="col-md-6 col-lg-8 px-md-4">
                <div class="row">
                    <div class="col-md-12 background-image">
                        <div class="card">
                            <img src="img/background.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <hr>
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-success text-white p-2 me-2">
                                        <i class="bi bi-check2-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <div class="row col-md-3 col-lg-2">

                    <div class="sidebar rigth-sidebar">
                        <ul class="nav flex-column ">
                            <li class="nav-item">
                                <a class="nav-link active " aria-current="page" href="#">Dashboard</a>
                            </li>
                            <li class="nav-item rigth-buttons">
                                <a class="nav-link active " href="#">Profile</a>
                            </li>
                            <li class="nav-item rigth-buttons">
                                <a class="nav-link active " href="#">Logout</a>
                            </li>
                        </ul>
                    </div>


            </div>

        </div>





    </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
    </html>






