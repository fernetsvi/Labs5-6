@extends('layout')

@section('title')Хостинг@endsection

@section('top')
    <div class="top__inner">
        <div class="top-info">
            <h1 class="top-info__title">
                Хостинг
            </h1>
            <div class="top-info__descr">
               Найкращий хостинг в Україні
            </div>

            <a class="top-info__btn" href="#">Почни вже зараз!</a>
    </div>
@endsection

@section('main_content')
    <div class="container">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Персоналізований домен</h1>
            <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque culpa, distinctio earum eius, eligendi hic ipsa itaque maiores modi obcaecati, placeat quia quis quo quos reprehenderit vel velit veniam.</p>
            <button class="btn btn-primary btn-lg" type="button">Приклад</button>
        </div>
    </div>
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
                <h2>Найдешевші тарифи</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, autem, consequuntur enim, harum magni molestiae nemo neque nesciunt odit perspiciatis placeat possimus quas ratione! Asperiores enim laborum modi necessitatibus reiciendis.</p>
                <button class="btn btn-outline-light" type="button">Приклад</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Підтримка 24/7</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet aut dolore dolores esse iste possimus quod rem repellat voluptates? Accusamus et exercitationem illum impedit iure laudantium magni nostrum, quis!</p>
                <button class="btn btn-outline-secondary" type="button">Приклад</button>
            </div>
        </div>
    </div>
    </div>
@endsection
