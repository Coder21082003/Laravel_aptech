@extends('layouts.science.master_science')

@section('science_picture')
<link rel="stylesheet" type="text/css" href="css/physics.css">
@endsection


@section('science_title')
<title>Physics Nobel Prize</title>
@endsection


@section('science_name')
PHYSICS
@endsection


@section('science_describe')
@foreach ($science_describe as $key=>$item)
    {{$item->Describes}}
@endforeach
@endsection




@section('winner1') 
{{$physic_winner[1]->Name_Scientist}}
@endsection

@section('winner1_intro')
{{$physic_winner[1]->Intro}}
@endsection

@section('winner1_link')
<a href="@php echo route('Pierre_Curie') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner2')
{{$physic_winner[0]->Name_Scientist}}
@endsection

@section('winner2_intro')
{{$physic_winner[0]->Intro}}
@endsection

@section('winner2_link')
<a href="@php echo route('Albert_Einstein') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


    
@section('winner3')
{{$physic_winner[2]->Name_Scientist}}
@endsection

@section('winner3_intro')
{{$physic_winner[2]->Intro}}
@endsection

@section('winner3_link')
<a href="@php echo route('Gabriel_Lippmann') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection



@section('winner4')
{{$physic_winner[3]->Name_Scientist}}
@endsection

@section('winner4_intro')
{{$physic_winner[3]->Intro}}
@endsection

@section('winner4_link')
<a href="@php echo route('Hendrik_Lorentz') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection



@section('winner5')
{{$physic_winner[4]->Name_Scientist}}
@endsection

@section('winner5_intro')
{{$physic_winner[4]->Intro}}
@endsection

@section('winner5_link')
<a href="@php echo route('Erwin_Schrödinger') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection




{{-- @section('link')
@php
    $link="https://www.google.com/";
@endphp
<li><a href="{{$link}}">HOME <i class="fa fa-house"></i></a></li>
@endsection --}}