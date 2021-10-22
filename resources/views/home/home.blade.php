@php
    $baseUrl = config('app.base_url');
@endphp
@extends('layouts.master')
@section('title')
    <title>Home page</title>
@endsection

@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('home/home.css')}}" class="__web-inspector-hide-shortcut__">
@endsection

@section('js')
    <script src="{{asset('home/home.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection

@section('style')
    <style>

        /* Products css */

        .product-container{
            height: 14vh;
            background-image: url("{{asset('Fruits_store/img/product-header.png')}}");
        }

        .product-container .logo_name{
            color: #fff;
        }


        .product .hero-overlay{
            background-color: rgba(0, 0, 0, 0.1);
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #4f4f4f49;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #959393}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /*Category tab*/
        .category-tab {
            overflow: hidden;
        }

        .category-tab ul {
            background: #40403E;
            border-bottom: 1px solid ;
            list-style: none outside none;
            margin: 0 0 30px;
            padding: 0;
            width: 100%;
        }

        .nav-tabs>li {
            float: left;
            margin-bottom: -1px;
        }

        .category-tab ul li a {
            border: 0 none;
            border-radius: 0;
            color: #B3AFA8;
            display: block;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            text-transform: uppercase;
        }

        .product-image-wrapper {
            border: 1px solid #F7F7F5;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .single-products {
            position: relative;
        }
        .productinfo {
            position: relative;
        }

        .productinfo img {
            width: 100%;
        }

        .productinfo h2 {
            color: #FE980F;
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
            font-weight: 700;
        }
        .productinfo p {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: #696763;
        }

        .nav-tabs li.active a, .nav-tabs li.active a:hover, .nav-tabs li.active a:focus {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #FE980F;
            border: 0px;
            color: #FFFFFF;
            cursor: default;
            margin-right: 0;
            margin-left: 0;
        }

        .add-to-cart {
            background: #F5F5ED;
            border: 0 none;
            border-radius: 0;
            color: #696763;
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            margin-bottom: 25px;
        }

        .add-to-cart i {
            margin-right: 5px;
        }

        .row{
            padding: 0px 60px;
        }

        .productinfo img{
            height: 276px;
        }



    </style>
@endsection


@section('content')
    <div class="hero">
        <div class="hero-overlay"></div>
        @include('components.nav_menu')
        <div class="content">
            <span class="sell-logan">Eat Fresh<br> Stay Healthy...</span>
            <p class="sell-content">Orange is not just a tasty fruit, its more. Get to know the multiple health benefits of adding oranges in your daily diet</p>
            <a href="./products/products.html#Orange" class="btn btn2">Buy Now</a>
        </div>
        <div class="right">
            <img id="fruit-main" src="Fruits_store/img/orange-slice.png">
        </div>
        <div class="bg"></div>
        <div class="icon">
            <a href="#"><i class="fas fa-share-alt"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="fruit-control">
            <div class="fruit-control-item">
                <img id="apple" src="Fruits_store/img/apple_control.png" alt="">
            </div>
            <div class="fruit-control-item">
                <img id="orange" src="Fruits_store/img/orange_control.png" alt="">
            </div>
            <div class="fruit-control-item">
                <img id="banana" src="Fruits_store/img/banana_control.png" alt="" >
            </div>
            <div class="fruit-control-item">
                <img id="straw" src="Fruits_store/img/straw_control.png" alt="" >
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="service-info">
            <ul>
                <li>
                    <i class="fas fa-shipping-fast"></i>
                    <h3>FREE SHIPPING</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </li>
                <li>
                    <i class="fas fa-exchange-alt"></i>
                    <h3>EASY RETURN</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </li>
                <li>
                    <i class="fas fa-shield-alt"></i>
                    <h3>SECURE PAYMENT</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </li>
                <li>
                    <i class="fas fa-user-headset"></i>
                    <h3>24/7 SUPPORT</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </li>
            </ul>
        </div>
        @include('home.components.feature_product')
        @include('home.components.recommend_product')
        @include('home.components.category-tab')
{{--        Slider--}}
        @include('home.components.slider')
        @include('home.components.slogan')
    </div>
@endsection

