@extends('layouts.app')
@section('content')
    <div class="head_home2">
        <h3>
            <a href="/" style="text-decoration: none;color: black">Decorista</a>
        </h3>
        <a type="button" class="btn btn-danger logout_button" href="{{ route('logout') }}"
            onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
            <i class="fas fa-power-off"></i>

        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <form class="class_form_home2">
        <div class="container container_body_home2" id="">
            <div class="row row_show_resault" style="width: 100%;height: 100%;">
                <div class="col-lg-4 col-sm-12">
                    <label>اجمالى التكلفه هوا </label>
                    <p style="color: black;font-weight: bold">{{ $res }}</p>
                    <a type="button" class="btn btn-primary" href="/">لحساب تكلفه اخرى يرجى الضغط هنا </a>
                </div>
            </div>
        </div>
    </form>
@endsection
