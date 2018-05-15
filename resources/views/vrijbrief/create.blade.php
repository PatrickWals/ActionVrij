@extends('layouts.app')

@section('content')
<h1>Vrijvragen</h1>
{!!Form::open (['action'=>'VrijbriefsController@store','method' => 'POST'])!!}
    <div class="form-group">
        {{form::label('begindatum', 'Begin Datum')}}
        {{Form::date('begindatum', '',['class' => 'form-control'])}}
    </div>

    <div class="form-group">
            {{form::label('einddatum', 'Eind Datum')}}
            {{Form::date('einddatum', '',['class' => 'form-control'])}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!!Form::close()!!}
@endsection