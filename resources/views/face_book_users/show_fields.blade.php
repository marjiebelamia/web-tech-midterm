<!-- Country Field -->
<div class="col-sm-12">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $faceBookUser->country }}</p>
</div>

<!-- Number Of Users Field -->
<div class="col-sm-12">
    {!! Form::label('number_of_users', 'Number Of Users:') !!}
    <p>{{ $faceBookUser->number_of_users }}</p>
</div>

<!-- Active Users Field -->
<div class="col-sm-12">
    {!! Form::label('active_users', 'Active Users:') !!}
    <p>{{ $faceBookUser->active_users }}</p>
</div>

<!-- None Active Users Field -->
<div class="col-sm-12">
    {!! Form::label('none_active_users', 'None Active Users:') !!}
    <p>{{ $faceBookUser->none_active_users }}</p>
</div>

<!-- Hrs Per Day Online Field -->
<div class="col-sm-12">
    {!! Form::label('hrs_per_day_online', 'Hrs Per Day Online:') !!}
    <p>{{ $faceBookUser->hrs_per_day_online }}</p>
</div>

