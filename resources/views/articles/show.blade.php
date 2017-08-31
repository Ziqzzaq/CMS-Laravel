@extends('master')
@section('content')

<div class="col-xs-12 article-header card">
    <h2>{{$article->title}}</h2>
</div>

<div class="row">

    <!-- left col. -->
    <div class="col-xs-12 col-md-9 single-article-left">

        <div class="card">

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Tc_TO5dAUDE" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="single-article-content">
                <div class="categories">
                    <h4>Kategorie</h4>
                    <span>
                    <a href="">Rap</a>,&nbsp;
                    <a href="">Nullo</a>,&nbsp;
                    <a href="">Rock</a>
                    </span>
                </div>
                <h4>Pełny opis</h4>
                <p>{{$article->contents}}</p>
                <span class="upper-label">Dodał</span>
                <span class="article-author">{{ $article->user->name }}</span>
                <div class="edit-button">
                    <a href="{{ action('ArticlesController@edit', $article->id) }}" class="btn btn-primary btn-lg">
                        Edytuj Video
                    </a>
                </div>
            </div>

        </div>

    </div>

    <!-- right col. -->
    <div class="col-xs-12 col-md-3 single-article-right">

        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box">
                <h4>Udostępnij</h4>
                <div class="social-icons">
                    <i class="fa fa-facebook-official"></i>
                    <i class="fa fa-twitter-square"></i>
                    <i class="fa fa-google-plus-square"></i>
                    <i class="fa fa-youtube-square"></i>
                </div>
            </div>
        </div>

        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box categories-box">
                <h4>Popularne kategorie</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h5>Rap</h5>
                        <span>234 artykułów</span>
                    </li>
                    <li class="list-group-item">
                        <h5>Nullo</h5>
                        <span>87 artykułów</span>
                    </li>
                    <li class="list-group-item">
                        <h5>Rock</h5>
                        <span>56 artykułów</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box">
                <h4>Statystyki</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge">1342</span>Artykułów
                    </li>
                    <li class="list-group-item">
                        <span class="badge">3</span>Kategorii
                    </li>
                    <li class="list-group-item">
                        <span class="badge">7800</span>Użytkowników
                    </li>
                    <li class="list-group-item">
                        <span class="badge">832</span>Komentarzy
                    </li>
                </ul>
            </div>
        </div>

    </div>

</div>

@stop