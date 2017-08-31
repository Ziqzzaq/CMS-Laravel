@extends('master')
@section('content')

    <div class="articles-header card">
        <h2>Najnowsze artykuły</h2>
    </div>

    @if( Session::has('article_created'))
        <div class="alert alert-success card">
            {{ Session::get('article_created') }}
        </div>
    @endif

    <div class="row">

        @foreach($articles as $article)

            <!-- Single video -->
            <div class="col-xs-12 col-md-6 col-lg-4 single-aricle">
                <div class="card">

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Tc_TO5dAUDE" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="card-content">
                        <h4>{{$article->title}}</h4>
                        <p>{{ str_limit($article->contents, $limit=80) }}</p>
                        <span class="upper-label">Dodał</span>
                        <span class="article-author">{{ $article->user->name }}</span>
                        <span class="article-date">Utworzony: {{$article->created_at}}</span>
                        <a class="read-more" href="{{ url('articles', $article->id) }}">Czytaj więcej...</a>
                    </div>
                </div>
            </div>

         @endforeach
    </div>

@stop