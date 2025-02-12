<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Yoga Center is a Laravel-based web application designed for managing yoga classes, schedules, and users. It offers secure authentication, a user-friendly interface">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="{{asset('/assets/img/favicon.jpg')}}" type="image/x-icon">

    <title>Login</title>

    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}"/>

    <style>
        :root{
            --hue: 337;
            --saturation: 85%;
            --lightness: 50%;
            --color-primary: hsl(var(--hue), var(--saturation), var(--lightness));
            --color-secondary: hsl(258, 98%, 70%);
        }
        .page-top-section{
            height: 100dvh;
        }
        .page-top-section:after {
            position: absolute;
            content: "";
            inset: 0;
            opacity: 0.92;
            filter: alpha(opacity=92);
            z-index: -1;
            background: -o-linear-gradient(305deg, var(--color-primary) 0%, var(--color-secondary) 100%);
            background: linear-gradient(145deg, var(--color-primary) 0%, var(--color-secondary) 100%);
        }
        .leftside{
            background: -o-linear-gradient(145deg, #ffffff 0%, hsl(200.18deg 100% 76.28%) 100%);
            background: linear-gradient(145deg, #ffffff 0%, hsl(200.18deg 100% 76.28%) 100%);
            padding-block: 40px;
        }
        .rightside{
            padding: 40px 30px;
        }
        .login-page > div{
            width: 100%;
            max-width: 720px;
        }
        .form-control:focus {
            border-color: var(--color-primary);
            box-shadow: 0 0 0 .1rem rgba(233, 41, 121, 0.5);
        }
        .form-check-input:checked {
            background-color: var(--color-primary);
            border-color: var(--color-primary);
        }
        .btn.submit-button{
            background-color: var(--color-primary);
        }
        .btn.submit-button:focus,
        .btn.submit-button:hover{
            background-color: hsl(var(--hue), var(--saturation), 30%);
        }
        a{
            color: var(--color-primary);
        }
        a:hover{
            color: hsl(var(--hue), var(--saturation), 30%);
        }
    </style>


</head>
<body>

    <div class="clearfix login-page page-top-section d-flex align-items-center justify-content-center px-3 user-select-none">
        <div>
            <div class="row rounded-4 overflow-hidden" style="--bs-gutter-x: 0px; --bs-gutter-y:0px;">
                <div class="col-md-6 bg-info leftside">
                    <img src="{{asset('/assets/img/login-image.png')}}" class="img-fluid">
                </div>
                <div class="col-md-6 bg-white rightside">
                    <form action="javascript:void(0)" method="POST">
                        <h2 class="fs-4 text-uppercase border-bottom mb-3 pb-1">Sign in</h2>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <span class="material-symbols-outlined">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#ec1366"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                                </span>
                            </span>
                            <input type="email" class="form-control text-lowercase small" placeholder="Email Address">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">
                                <span class="material-symbols-outlined">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#ec1366"><path d="M280-240q-100 0-170-70T40-480q0-100 70-170t170-70q66 0 121 33t87 87h432v240h-80v120H600v-120H488q-32 54-87 87t-121 33Zm0-80q66 0 106-40.5t48-79.5h246v120h80v-120h80v-80H434q-8-39-48-79.5T280-640q-66 0-113 47t-47 113q0 66 47 113t113 47Zm0-80q33 0 56.5-23.5T360-480q0-33-23.5-56.5T280-560q-33 0-56.5 23.5T200-480q0 33 23.5 56.5T280-400Zm0-80Z"/></svg>
                                </span>
                            </span>
                            <input type="password" class="form-control small" placeholder="Password" id="password">
                            <button class="input-group-text" type="button" id="togglebutton">
                                <span class="material-symbols-outlined">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#ec1366"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                                </span>
                            </button>
                        </div>
                        <div class="my-2">
                            <div class="form-check user-select-none small">
                                <input class="form-check-input shadow-none" type="checkbox" value="" id="remember" checked>
                                <label class="form-check-label" for="remember">
                                  Remember Password.
                                </label>
                            </div>
                        </div>

                        <button class="btn w-100 btn-sm py-2 px-3 border-0 btn-primary shadow-none text-uppercase submit-button" type="submit">Login</button>
                        <div class="small mt-1">You haven't an account, Please <a href="{{url('/register')}}" class="text-decoration-none">Register</a>.</div>
                        <div class="small"><a href="{{url('/')}}" class="text-decoration-none fw-bold text-uppercase small mt-2">Back To Home </a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButton = document.getElementById("togglebutton");
            const passwordInput = document.getElementById("password");

            toggleButton.addEventListener("click", function () {
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                } else {
                    passwordInput.type = "password";
                }
            });
        });

    </script>

</body>
</html>
