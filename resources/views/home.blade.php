
@extends('layout')

@section('title')Головна сторінка@endsection

@section('top')
    <div class="top__inner">
        <div class="top-info">
            <div class="top-info__subtitle">
                Простий – Легкий у використанні – в 10 різів швидший!
            </div>
            <h1 class="top-info__title">
                Найкращий веб-хостинг
            </h1>
            <div class="top-info__descr">
                Ціни стартують від $7.99 $3.95/місяць*
                <span>Введи свід вебсайт, щоб побачити як твій бізнес може вирости ... </span>
            </div>
            <ul class="top-info__list">
                <li>БЕЗКОШТОВНИЙ домен</li>
                <li>БЕЗКОШТОВНИЙ конструктор сайтів</li>
                <li>1-Клік <img src="images/wp-icon.png" alt="">Встановлення WordPress</li>
                <li>24/7 Підтримка</li>
            </ul>
            <a class="top-info__btn" href="#">Почни вже зараз!</a>
            <div class="top-info__btn-descr">
                *Спеціальна вступна пропозиція та 30-днівна гарантія
            </div>
        </div>
        <div class="top-images">
            <div class="top-images__box">
                <img src="images/superman.png" alt="">
                <div class="top-images__circle">
                    <div class="top-images__title">Починається з </div>
                    <div class="top-images__price">$7.99</div>
                    <div class="top-images__date">/місяць</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main_content')
    <section class="price">
        <div class="container">
            <h2 class="title">
                Плати за те, що ти <span>дійсно</span> використовуєш. Ніяких прихованих витрат!
            </h2>
            <div class="price__descr">
                SEO WP розрозблює використовуючи Live Composer — front-end констуктор сторінок для <a href="">WordPress</a>. Live Composer це нове покоління
                the <a href="">візуальних редакторів</a> для вашого сайту. Використовуючи зручний та простий інтерфейс, ви можете створити будь-яку розмітку сторінки.<span> Ніяких навичок програмування</span> не потрібно
            </div>

            <div class="price__items">
                <div class="price-item">
                    <div class="price-item__number">
                        €190 <span>/міс</span>
                    </div>
                    <div class="price-item__images">
                        <img src="images/price-item1.png" alt="">
                    </div>
                    <div class="price-item__title">
                        Персональний
                    </div>
                    <div class="price-item__text">
                        Я думаю, що найкращим варіантом було б почати або приєднатися до стартапу. Це був надійний спосіб збагатитися
                        сотні років.
                    </div>
                    <ul class="price-item__list">
                        <li>10GB Місця</li>
                        <li>1 Безкоштовний Домен</li>
                        <li>300GB SSD Диск</li>
                        <li>Персоналізований домен</li>
                    </ul>
                    <a href="" class="price-item__btn">Почни вже зараз</a>
                </div>

                <div class="price-item">
                    <div class="price-item__number">
                        €499 <span>/міс</span>
                    </div>
                    <div class="price-item__images">
                        <img src="images/price-item2.png" alt="">
                    </div>
                    <div class="price-item__title">
                        Розширений
                    </div>
                    <div class="price-item__text">
                        Я думаю, що найкращим варіантом було б почати або приєднатися до стартапу. Це був надійний спосіб збагатитися
                        сотні років.
                    </div>
                    <ul class="price-item__list">
                        <li>10GB Місця</li>
                        <li>1 Безкоштовний домен</li>
                        <li>300GB SSD Диск</li>
                        <li>Персоналізований домен</li>
                    </ul>
                    <a href="" class="price-item__btn">Почни вже зараз</a>
                </div>

                <div class="price-item">
                    <div class="price-item__number">
                        €999 <span>/міс</span>
                    </div>
                    <div class="price-item__images">
                        <img src="images/price-item3.png" alt="">
                    </div>
                    <div class="price-item__title">
                        Бізнес
                    </div>
                    <div class="price-item__text">
                        Я думаю, що найкращим варіантом було б почати або приєднатися до стартапу. Це був надійний спосіб збагатитися
                        сотні років.
                    </div>
                    <ul class="price-item__list">
                        <li>10GB Місця</li>
                        <li>1 Бескоштовний домен</li>
                        <li>300GB SSD Диск</li>
                        <li>Персоналізований домен</li>
                    </ul>
                    <a href="" class="price-item__btn">Почни вже зараз</a>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <div class="title">
                Що <span>Люди</span> Кажуть Про Нас
            </div>
            <div class="reviews-slider">
                @foreach($reviews as $el)
                    <div class="reviews-slider__item">
                        <div class="reviews-box">
                            <div class="reviews-box__images">
                                <img src="images/photo1.jpg" alt="">
                            </div>
                            <div class="reviews-box__content">
                                <div class="reviews-box__text">
                                    {{ $el->message }}
                                </div>
                                <div class="reviews-box__author">
                                    <span> {{ $el->email }}</span> - {{ $el->subject }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="text-center">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h3 class="comment_header">Ввести відгук</h3>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error  }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/check" method="post">
                        @csrf
                        <div class="row">
                            <div class="item">
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="item">
                                <input type="text" name="subject" id="subject" placeholder="Тема" class="form-control">
                            </div>
                            <div class="item">
                                <textarea name="message" id="message" class="form-control" placeholder="Введіть текст відгуку" cols="30" rows="10"></textarea><br>
                            </div>
                            <div class="item">
                                <button type="submit" class="btn btn-success">Опублікувати</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>

    <section class="clients">
        <div class="container">
            <div class="clients-inner">
                <div class="clients__photo">
                    <img src="images/partners.png" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
