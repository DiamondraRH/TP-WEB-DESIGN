<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>

    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/soft-ui-dashboard.css?v=1.0.3.css" rel="stylesheet" type="text/css">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                <p class="mb-0">Enter your email and password to sign in</p>
                            </div>
                            <div class="card-body">
                                <form role="form" method="post" action="/login">
                                    @csrf

                                    <label>Email</label>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Email" name="email" aria-label="Email" aria-describedby="email-addon" value="andry_r@gmail.com">
                                    </div>
                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Password" name="password" aria-label="Password" aria-describedby="password-addon" value="andry1234">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

</body>
</html>
