<div class="form-group">
    {!! Form::label('title','Title:',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('body','Body:',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('published_at','Published at:',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::date('published_at',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('tags',"Tags:",['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('tags[]', $tags , null , ['class' => 'form-control','multiple'=>'multiple']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::submit($button,['class'=>'col-sm-2 btn btn-default']) !!}
</div>