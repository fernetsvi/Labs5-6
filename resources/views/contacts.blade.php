@extends('layout')

@section('title')Контакти@endsection

@section('top')
    <div class="top__inner">
        <div class="top-info">
            <h1 class="top-info__title">
                Контакти
            </h1>
            <div class="top-info__descr">
                З нами легще зв'язатись ніж з піцерією у тебе під будинком
            </div>

            <a class="top-info__btn" href="#">Подзвони нам!</a>
        </div>
@endsection

@section('main_content')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">КОНТАКТИ</h1>
            <p class="lead text-muted">Місце для контактів</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Дзвінки</a>
                <a href="#" class="btn btn-secondary my-2">Елеткронна пошта</a>
            </p>
        </div>
    </div>

@endsection
