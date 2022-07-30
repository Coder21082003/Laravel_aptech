@extends('layouts.science.master_science')

@section('science_picture')
<link rel="stylesheet" type="text/css" href="css/medicine.css">
@endsection


@section('science_title')
<title>Medicine Nobel Prize</title>
@endsection


@section('science_name')
MEDICINE
@endsection


@section('science_describe')
@foreach ($science_describe as $key=>$item)
    {{$item->Describes}}
@endforeach
@endsection


@section('winner1')
{{$medicine_winner[0]->Name_Scientist}}
@endsection


@section('winner1_intro')
{{$medicine_winner[0]->Intro}}
@endsection

@section('winner1_link')
<a href="@php echo route('Emil_von_Behring') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner2')
{{$medicine_winner[1]->Name_Scientist}}
@endsection
@section('winner2_intro')
{{$medicine_winner[1]->Intro}}
@endsection

@section('winner2_link')
<a href="@php echo route('Ronald_Ross') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner3')
{{$medicine_winner[2]->Name_Scientist}}
@endsection
@section('winner3_intro')
{{$medicine_winner[2]->Intro}}
@endsection

@section('winner3_link')
<a href="@php echo route('Archibald_Hill') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner4')
{{$medicine_winner[3]->Name_Scientist}}
@endsection
@section('winner4_intro')
{{$medicine_winner[3]->Intro}}
@endsection

@section('winner4_link')
<a href="@php echo route('Hermann_Joseph_Muller') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner5')
{{$medicine_winner[4]->Name_Scientist}}
@endsection
@section('winner5_intro')
{{$medicine_winner[4]->Intro}}
@endsection

@section('winner5_link')
<a href="@php echo route('Joshua_Lederberg') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection 