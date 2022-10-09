@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row" >
        <div class="col-3 pt-5">
            <img src="https://www.loanspur.com/wp-content/uploads/elementor/thumbs/Vector01-p0wrzn0k92gfborkfalvrikakquzss3nx50rnpkpyc.png" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="#">Add New Post</a>
            </div >
            <div class="d-flex">
                <div class="pe-sm-4"><strong >23k</strong>  tenants</div>
            <div class="pe-sm-4"><strong>200</strong> posts</div>
            <div class="pe-sm-4"><strong>10k</strong> followers</div>
            </div>
            <div class="pt-4 font-monospace fw-bold">{{$user->profile->title}}</div>
            <div class="class">{{$user->profile->description}} </div>
            <div>
                <a href="#">{{$user->profile->url ?? 'www.umojamagharibi.inc'}}</a>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-4">
                <img src="https://umojamagharibi.com/uploads/images/1655294352_ticket.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://umojamagharibi.com/uploads/images/1653904751_featured-3.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://umojamagharibi.com/uploads/images/1653978843_featured-4.jpg" class="w-100">
            </div>

        </div>
        <div class="row pt-4">
        <div class="col-4">
            <img src="https://umojamagharibi.com/uploads/images/1655704730_CH3.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://umojamagharibi.com/uploads/images/1655704730_CH3.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://umojamagharibi.com/uploads/images/1655704730_CH3.jpg" class="w-100">
        </div>
        </div>
    </div>
</div>
@endsection
