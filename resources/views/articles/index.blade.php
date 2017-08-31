@extends('master')
@section('content')

    <div class="articles-header card">
        <h2>Najnowsze artykuły</h2>
    </div>
    <div class="row">

        @foreach($articles as $article)

            <!-- Single video -->
            <div class="col-xs-12 col-md-6 col-lg-4 single-video">
                <div class="card">

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Tc_TO5dAUDE" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="card-content">
                        <a href="single_video.html">
                            <h4>{{$article->title}}</h4>
                        </a>
                        <p>{{$article->contents}}</p>
                        <span class="upper-label">Dodał</span>
                        <span class="article-author">Michał Borzęcki</span>
                        <span class="article-date">Utworzony: {{$article->created_at}}</span>
                    </div>
                </div>
            </div>

         @endforeach
    </div>

@stop