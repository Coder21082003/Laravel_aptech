@extends('layouts.winner.master_winner')


@section('winner_css')
<link href="{{ asset('/css/Gabriel_Lippmann.css') }}" rel="stylesheet">
@endsection


{{-- titile --}}
    @section('winner_title')
    <title>{{$winner_data_award[0]->Name_Scientist}}</title>
    @endsection


{{-- Name --}}
    @section('winner_name') 
    {{$winner_data_award[0]->Name_Scientist}}
    @endsection


{{-- Time --}}
    @section('winner_time')
    {{$winner_data_award[0]->Winner_Time}}
    @endsection

    @section('winner_link')
    <a href={{$winner_data_award[0]->Winner_Link}} class="hero-btn">Click here to find more</a>
    @endsection


{{-- Bio --}}
    @section('winner_bio')
    {{$winner_data_award[0]->Bio}}
    @endsection


{{-- Education --}}
    @section('winner_education1')
    {{$winner_data_detail[0]->Education_1}}
    @endsection

    @section('winner_education2')
    {{$winner_data_detail[0]->Education_2}}
    @endsection


{{-- Career --}}
    {{-- theory1 --}}
        @section('theory_name1')
        <a href={{$winner_data_award[0]->Theory_Link_1}}>{{$winner_data_award[0]->Achievement_1}}</a>
        @endsection

        @section('theory_description1')
        {{$winner_data_award[0]->Des_Achievement_1}}
        @endsection


    {{-- theory2 --}}
        @section('theory_name2')
        <a href={{$winner_data_award[0]->Theory_Link_2}}>{{$winner_data_award[0]->Achievement_2}}</a>
        @endsection

        @section('theory_description2')
        {{$winner_data_award[0]->Des_Achievement_2}}
        @endsection


    {{-- theory3 --}}
        @section('theory_name3')
        <a href={{$winner_data_award[0]->Theory_Link_3}}>{{$winner_data_award[0]->Achievement_3}}</a>
        @endsection

        @section('theory_description3')
        {{$winner_data_award[0]->Des_Achievement_3}}
        @endsection


{{-- Career details --}}
    @section('career')

        @php
        for ($i=1; $i <11 ; $i++) { 
            $x="Career_$i";
            if(($winner_data_detail[0]->$x)!=""){
                echo "<p>{$winner_data_detail[0]->$x}</p><br>";
            }
        }
        @endphp

    @endsection



{{-- Relationship --}}
    @section('relationship_img')
    <img src="{{ asset('icon/lippmann-career.jpg') }}" alt="">
    @endsection

    @section('relationship_des')
    {{$winner_data_detail[0]->Relationship_1}}
    @endsection



{{-- Death --}}
    @section('death1')
    {{$winner_data_detail[0]->Death_1}}
    @endsection

    @section('death2')
    {{$winner_data_detail[0]->Death_2}}
    @endsection



{{-- Book --}}
    {{-- Book1 --}}
        @section('book_img1')
        <img src="{{ asset('icon/Book/Gabriel_Lippmann/Colour Photogaphy.jpg') }}" alt="">
        @endsection

        @section('book_name1')
        {{$winner_data_books[0]->Name}}
        @endsection

        @section('book_des1')
        {{$winner_data_books[0]->Describes}}
        @endsection

        @section('book_link1')
        <a href={{$winner_data_books[0]->Download}} class="hero-btn1">Download Book</a>
        @endsection


    {{-- Book2 --}}
        @section('book_img2')
        <img src="{{ asset('icon/Book/Gabriel_Lippmann/Unites Electriques Absolues.jpg') }}" alt="">
        @endsection

        @section('book_name2')
        {{$winner_data_books[1]->Name}}
        @endsection

        @section('book_des2')
        {{$winner_data_books[1]->Describes}}
        @endsection

        @section('book_link2')
        <a href={{$winner_data_books[1]->Download}} class="hero-btn1">Download Book</a>
        @endsection


    {{-- Book3 --}}
        @section('book_img3')
        <img src="{{ asset('icon/Book/Gabriel_Lippmann/Choice Edition.jpg') }}" alt="">
        @endsection
        
        @section('book_name3')
        {{$winner_data_books[2]->Name}}
        @endsection

        @section('book_des3')
        {{$winner_data_books[2]->Describes}}
        @endsection

        @section('book_link3')
        <a href={{$winner_data_books[2]->Download}} class="hero-btn1">Download Book</a>
        @endsection



{{-- Other winner --}}

    {{--1--}}
        {{-- @section('other_winner_img1')
        <img src="{{asset('icon/gabriel-lippmann1.jpg')}}">  
        @endsection

        @section('other_winner_name1')
        Grabiel Lippmann
        @endsection

        @section('other_winner_time1')
        Nobel Prize in Physis 1908
        @endsection

        @section('other_winner_link1')
        <a href="@php echo route('Gabriel_Lippmann') @endphp" class="click">Click here to find more</a>
        @endsection --}}


    {{--2--}}
        @section('other_winner_img2')   
        <img src="{{asset('icon/lorentz1.jpg')}}">  
        @endsection

        @section('other_winner_name2')
        Hendrik Lorentz
        @endsection

        @section('other_winner_time2')
        Nobel Prize in Physis 1902
        @endsection

        @section('other_winner_link2')
        <a href="@php echo route('Hendrik_Lorentz') @endphp" class="click">Click here to find more</a>
        @endsection


    {{--3--}}
        @section('other_winner_img3')
        <img src="{{asset('icon/pierrecurrie1.jpg')}}">  
        @endsection

        @section('other_winner_name3')
        Pierre Currie   
        @endsection

        @section('other_winner_time3')
        Nobel Prize in Physis 1903
        @endsection

        @section('other_winner_link3')
        <a href="@php echo route('Pierre_Curie') @endphp" class="click">Click here to find more</a>
        @endsection


    {{--4--}}
        @section('other_winner_img4')
        <img src="{{asset('icon/Schrodinger1.jpg')}}">  
        @endsection

        @section('other_winner_name4')
        Erwin Schrödinger
        @endsection

        @section('other_winner_time4')
        Nobel Prize in Physis 1933
        @endsection

        @section('other_winner_link4')
        <a href="@php echo route('Erwin_Schrödinger') @endphp" class="click">Click here to find more</a>
        @endsection

    
    {{-- 5 --}}
        @section('other_winner_img1')
        <img src="{{asset('icon/Einstein.jpg')}}">  
        @endsection

        @section('other_winner_name1')
        Albert Einstein
        @endsection

        @section('other_winner_time1')
        Nobel Prize in Physics 1921
        @endsection

        @section('other_winner_link1')
        <a href="@php echo route('Albert_Einstein') @endphp" class="click">Click here to find more</a>
        @endsection



{{-- Life Chart --}}
    @section('life_chart')
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
        function drawChart(chartID, cate, data, title, unit, type = 'line') {
        Highcharts.chart(chartID, {
            chart: {
                type: type
            },
            title: {
                text: title
            },
            xAxis: {
                categories: cate
            },
            yAxis: {
                title: {
                    text: unit
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: true
                }, column: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            series: data
        });
    }
    var revenueCate = ['{{$winner_data_chart[0]->Event_1}}', 
                        '{{$winner_data_chart[0]->Event_2}}', 
                        '{{$winner_data_chart[0]->Event_3}}', 
                        '{{$winner_data_chart[0]->Event_4}}',
                        '{{$winner_data_chart[0]->Event_5}}'];
    var revenueData = [{
            name: 'Time',
            data: [{{$winner_data_chart[0]->Year_1}}, {{$winner_data_chart[0]->Year_2}}, {{$winner_data_chart[0]->Year_3}}, {{$winner_data_chart[0]->Year_4}}, {{$winner_data_chart[0]->Year_5}}]
        }, ]
    drawChart('my-chart', revenueCate, revenueData, '{{$winner_data_award[0]->Name_Scientist}} Life Chart', 'Year');
    </script>
    
    @endsection



