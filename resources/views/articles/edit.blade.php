@extends('master')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                    <!-- Formularz -->

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::model($article, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action'=>['ArticlesController@update', $article->id]]) !!}

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('title','Tytuł') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('contents','Treść') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::textarea('contents',null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Dodaj artykuł',['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop