@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
    <div class="social_activities">
        <div class="activities_s">
            <div class="block_label">
                Total Pasien<span>{{$patient->count()}}</span>
            </div>
            <div class="activities_chart">
                <span class="activities_chart">100,150,130,100,250,280,350,250,400,450,280,350,250,400,</span>
            </div>
        </div>
        <div class="activities_s">
            <div class="block_label">
                Total User<span>{{$user->count()}}</span>
            </div>
            <div class="visit_chart">
                <span class="activities_chart">500,450,100,500,550, 400,300,550,480,500,320,400,450</span>
            </div>
        </div>
        <!-- <div class="comments_s">
            <div class="block_label">
                Kamar Kosong<span>{{$user->count()}}</span>
            </div>
            <span class="badge_icon customers_sl"></span>
        </div>
        <div class="views_s">
            <div class="block_label">
                Total Pasien<span>{{$patient->count()}}</span>
            </div>
            <span class="badge_icon customers_sl"></span>
        </div>
        <div class="user_s">
            <div class="block_label">
                Total User<span>{{$user->count()}}</span>
            </div>
            <span class="badge_icon customers_sl"></span>
        </div> -->
    </div>
@stop