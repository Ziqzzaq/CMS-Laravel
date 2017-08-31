@extends('master')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                    <!-- Formularz -->

                    {!! Form::open(['url'=>'articles','class'=>'form-horizontal']) !!}

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Tytuł</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" />
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop