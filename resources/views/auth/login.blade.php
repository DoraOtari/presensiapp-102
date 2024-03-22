<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body style="background-color: #f0f2f5">
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="row d-flex justify-content-center align-items-center vh-100 mx-0">
            <div class="col-lg-5">
                <h1 class="text-primary fw-bolder display-4">facebook</h1>
                <h3>Facebook membantu Anda terhubung dan berbagi dengan orang-orang dalam kehidupan Anda.</h3>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post" class="d-grid gap-3">
                            @csrf
                            <input type="email" name="email" id="" class="form-control form-control-lg" placeholder="Masukan email kamu">
                            <input type="password" name="password" id="" class="form-control form-control-lg" placeholder="masukan password kamu">
                            <button type="submit" class="btn btn-primary btn-lg">masuk</button>
                        </form>
                        <a href="{{ route('password.request') }}" class="text-center d-block my-2">Lupa kata sandi?</a>
                        <hr>
                        <a href="{{ route('register') }}" class="btn btn-success btn-lg d-block mx-auto col-6">Buat akun baru</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
