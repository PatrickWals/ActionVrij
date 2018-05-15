@extends('layouts.app')

@section('content')
    <h1>Vrijbrief</h1>
    @if(count($vrij) >= 1 )
        @foreach($vrij as $brief)
            <div class="well">
            <h3>
                <a href="/vrijbrief/{{$brief->VrijID}}">
                    {{$brief->VrijID}}
                </a> 
            </h3>
            <p>
                
                Begindatum: {{$brief->BeginDatum}} <br> Einddatum: {{$brief->EindDatum}}
            </p>
            </div>
        @endforeach
    @else
    <p>Nothing was Found</p>
    @endif
@endsection