@extends('app.app')
@section('title')
@endsection
@section('css')
@endsection
@section('page-title')
    <div style="text-align:center;margin-top:30px">

        <h1>Latest Blogs</h1>
        <p>Home/ <span class="">Blogs</span></p>
        @for ($i = 1; $i <3; $i++)
            <p>Welocme back: {{ $name[$i] }}</p>
        @endfor
    </div>
@endsection


@section('content')
    <section class="blog-section">

        <div class="d-flex gap-3  " style="margin-bottom: 20px">
            <div class="blog-card flex-grow-1">
                <div class="blog-card-image">
                    <img src="https://themeforest.kreativdev.com/teeno/demo/assets/images/blog/blog-1.jpg" alt="">
                </div>
                <div class="blog-card-title">
                    <h2>Step by Step Guide to Teeno <br> Application</h2>
                </div>
            </div>
            <div class="blog-card flex-grow-1">
                <div class="blog-card-image">
                    <img src="https://themeforest.kreativdev.com/teeno/demo/assets/images/blog/blog-5.jpg" alt="">
                </div>
                <div class="blog-card-title">
                    <h2>Never Miss a Single Notificatio</h2>
                </div>
            </div>
            <div class="blog-card flex-grow-1">
                <div class="blog-card-image">
                    <img src="https://themeforest.kreativdev.com/teeno/demo/assets/images/blog/blog-2.jpg" alt="">
                </div>
                <div class="blog-card-title">
                    <h2>Teeno Application Allow to Send Messag</h2>
                </div>
            </div>
        </div>


        <div class="d-flex gap-3 ">
            <div class="blog-card flex-grow-1">
                <div class="blog-card-image">
                    <img src="https://themeforest.kreativdev.com/teeno/demo/assets/images/blog/blog-6.jpg" alt="">
                </div>
                <div class="blog-card-title">
                    <h2>Step by Step Guide to Teeno <br> Application</h2>
                </div>
            </div>
            <div class="blog-card flex-grow-1">
                <div class="blog-card-image">
                    <img src="https://themeforest.kreativdev.com/teeno/demo/assets/images/blog/blog-7.jpg" alt="">
                </div>
                <div class="blog-card-title">
                    <h2>Never Miss a Single Notificatio</h2>
                </div>
            </div>
            <div class="blog-card flex-grow-1">
                <div class="blog-card-image">
                    <img src="https://themeforest.kreativdev.com/teeno/demo/assets/images/blog/blog-3.jpg" alt="">
                </div>
                <div class="blog-card-title">
                    <h2>Teeno Application Allow to Send Messag</h2>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
@endsection



@section('javascript')
@endsection
