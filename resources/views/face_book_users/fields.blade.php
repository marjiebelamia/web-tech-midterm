<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Number Of Users Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_users', 'Number Of Users:') !!}
    {!! Form::number('number_of_users', null, ['class' => 'form-control']) !!}
</div>

<!-- Active Users Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active_users', 'Active Users:') !!}
    {!! Form::number('active_users', null, ['class' => 'form-control']) !!}
</div>

<!-- None Active Users Field -->
<div class="form-group col-sm-6">
    {!! Form::label('none_active_users', 'None Active Users:') !!}
    {!! Form::number('none_active_users', null, ['class' => 'form-control']) !!}
</div>

<!-- Hrs Per Day Online Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hrs_per_day_online', 'Hrs Per Day Online:') !!}
    {!! Form::number('hrs_per_day_online', null, ['class' => 'form-control']) !!}
</div>