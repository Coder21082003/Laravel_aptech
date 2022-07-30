@extends('layouts.science.master_science')

@section('science_picture')
<link rel="stylesheet" type="text/css" href="css/peace.css">
@endsection


@section('science_title')
<title>Peace Nobel Prize</title>
@endsection


@section('science_name')
PEACE
@endsection


@section('science_describe')
@foreach ($science_describe as $key=>$item)
    {{$item->Describes}}
@endforeach
@endsection


@section('winner1')
{{$peace_winner[0]->Name_Scientist}}
@endsection

@section('winner1_intro')
{{$peace_winner[0]->Intro}}
@endsection

@section('winner1_link')
<a href="@php echo route('Theodore_Roosevelt') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner2')
{{$peace_winner[1]->Name_Scientist}}
@endsection
@section('winner2_intro')
{{$peace_winner[1]->Intro}}
@endsection

@section('winner2_link')
<a href="@php echo route('Bertha_Von_Suttner') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner3')
{{$peace_winner[2]->Name_Scientist}}
@endsection
@section('winner3_intro')
{{$peace_winner[2]->Intro}}
@endsection

@section('winner3_link')
<a href="@php echo route('Frédéric_Passy') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner4')
{{$peace_winner[3]->Name_Scientist}}
@endsection
@section('winner4_intro')
{{$peace_winner[3]->Intro}}
@endsection

@section('winner4_link')
<a href="@php echo route('Fredrik_Bajer') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner5')
{{$peace_winner[4]->Name_Scientist}}
@endsection
@section('winner5_intro')
{{$peace_winner[4]->Intro}}
@endsection

@section('winner5_link')
<a href="@php echo route('Elihu_Root') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection 

