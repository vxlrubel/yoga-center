@extends('layouts.app')
@push('title', 'Fotgot Password')

@push('style')
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
    .page-top-section {
        padding-top: 120px;
        height: auto;
    }
    .padding-block{
        padding-top: 1.5rem;
        padding-bottom: 3rem;
    }
    @media(width >= 992px){
        .padding-block{
            padding-bottom: 7rem;
        }
    }
</style>
@endpush

@section('content')
<div class="clearfix login-page page-top-section d-flex align-items-center justify-content-center px-3 user-select-none">
    <div class="padding-block">
        <div class="row rounded-4 overflow-hidden" style="--bs-gutter-x: 0px; --bs-gutter-y:0px;">
            <div class="col-md-6 bg-info leftside">
                <img src="{{asset('/assets/img/login-image.png')}}" class="img-fluid">
            </div>
            <div class="col-md-6 bg-white rightside">
                <form action="{{url('/reset-password')}}" class="text-start pt-md-4">
                    <h2 class="fs-4 text-uppercase border-bottom mb-4 pb-1">Forgot Password</h2>
                    <div class="input-group mb-4">
                        <span class="input-group-text">
                            <span class="material-symbols-outlined">
                                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#ec1366"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                            </span>
                        </span>
                        <input type="email" class="form-control text-lowercase small" placeholder="Email Address">
                    </div>

                    <button class="btn w-100 btn-sm py-2 px-3 border-0 btn-primary shadow-none text-uppercase submit-button" type="submit">Next Step</button>
                    <div class="small"><a href="{{url('/')}}" class="text-decoration-none fw-bold text-uppercase small mt-2">Back To Home </a></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
