@extends('layouts.science.master_science')

@section('science_picture')
<link rel="stylesheet" type="text/css" href="css/chemistry.css">
@endsection


@section('science_title')
<title>Chemistry Nobel Prize</title>
@endsection 


@section('science_name')
CHEMISTRY
@endsection


@section('science_describe')
@foreach ($science_describe as $key=>$item)
    {{$item->Describes}}
@endforeach
@endsection


@section('winner1')
{{$chemistry_winner[0]->Name_Scientist}}
@endsection


@section('winner1_intro')
{{$chemistry_winner[0]->Intro}}
@endsection

@section('winner1_link')
<a href="@php echo route('Harold_Urey') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner2')
{{$chemistry_winner[1]->Name_Scientist}}
@endsection
@section('winner2_intro')
{{$chemistry_winner[1]->Intro}} 
@endsection

@section('winner2_link')
<a href="@php echo route('Frederick_Soddy') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner3')
{{$chemistry_winner[2]->Name_Scientist}}
@endsection
@section('winner3_intro')
{{$chemistry_winner[2]->Intro}}
@endsection

@section('winner3_link')
<a href="@php echo route('Alfred_Werner') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner4')
{{$chemistry_winner[3]->Name_Scientist}}
@endsection
@section('winner4_intro')
{{$chemistry_winner[3]->Intro}}
@endsection

@section('winner4_link')
<a href="@php echo route('Irène_Joliot_Curie') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner5')
{{$chemistry_winner[4]->Name_Scientist}}
@endsection
@section('winner5_intro')
{{$chemistry_winner[4]->Intro}}
@endsection

@section('winner5_link')
<a href="@php echo route('Hermann_Staudinger') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection

