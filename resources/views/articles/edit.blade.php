@extends('master')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                    <!-- Formularz -->

                    @include('articles.form_errors')

                    {!! Form::model($article, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action'=>['ArticlesController@update', $article->id]]) !!}

                        @include('articles.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop