@extends('layouts.science.master_science')

@section('science_picture')
<link rel="stylesheet" type="text/css" href="css/literature.css">
@endsection


@section('science_title')
<title>Literature Nobel Prize</title>
@endsection


@section('science_name')
LITERATURE
@endsection


@section('science_describe')    
@foreach ($science_describe as $key=>$item)
    {{$item->Describes}}
@endforeach
@endsection


@section('winner1')
{{$literature_winner[0]->Name_Scientist}}
@endsection

@section('winner1_intro')
{{$literature_winner[0]->Intro}}
@endsection

@section('winner1_link')
<a href="@php echo route('Ernest_Hemingway') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner2')
{{$literature_winner[1]->Name_Scientist}}
@endsection
@section('winner2_intro')
{{$literature_winner[1]->Intro}}
@endsection

@section('winner2_link')
<a href="@php echo route('Pablo_Neruda') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner3')
{{$literature_winner[2]->Name_Scientist}}
@endsection
@section('winner3_intro')
{{$literature_winner[2]->Intro}}
@endsection

@section('winner3_link')
<a href="@php echo route('Pearl_Buck') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner4')
{{$literature_winner[3]->Name_Scientist}}
@endsection
@section('winner4_intro')
{{$literature_winner[3]->Intro}}
@endsection

@section('winner4_link')
<a href="@php echo route('George_Bernard_Shaw') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection


@section('winner5')
{{$literature_winner[4]->Name_Scientist}}
@endsection
@section('winner5_intro')
{{$literature_winner[4]->Intro}}
@endsection 

@section('winner5_link')
<a href="@php echo route('Gabriel_García_Márquez') @endphp" class="hero-btn-bio">Click here to find more</a>
@endsection