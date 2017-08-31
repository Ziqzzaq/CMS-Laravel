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
        {!! Form::submit($buttonText,['class'=>'btn btn-primary']) !!}
    </div>
</div>