@extends('master')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                    <!-- Formularz -->

                    @include('articles.form_errors')

                    {!! Form::open(['url'=>'articles','class'=>'form-horizontal']) !!}

                        @include('articles.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop