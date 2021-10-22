@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{asset('product/product.css')}}" class="__web-inspector-hide-shortcut__">
@endsection

@section('style')
    <style>
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


        .category-products .panel-default .panel-heading {
            background-color: #FFFFFF;
            border: 0 none;
            /* color: #FFFFFF; */
            padding: 5px 20px;
        }

        .category-products {
            border: 1px solid #F7F7F0;
            margin-bottom: 35px;
            padding-bottom: 20px;
            padding-top: 15px;
            background-color: white;
        }

        .category-products .panel {
            background-color: #FFFFFF;
            border: 0px;
            border-radius: 0px;
            -webkit-box-shadow: none;
            box-shadow: none;
            margin-bottom: 0px;
        }

        .left-sidebar h2, .brands_products h2 {
            color: #FE980F;
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            font-weight: 700;
            margin: 0 auto 30px;
            text-align: center;
            text-transform: uppercase;
            position: relative;
            /* z-index: 3; */
        }

        .category-products .badge {
            background: none !important;
            border-radius: 10px;
            color: #696763 !important;
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            line-height: 1;
            min-width: 10px;
            padding: 3px 7px;
            text-align: center;
            vertical-align: baseline;
            white-space: nowrap;
        }

        .show_product{
            width:100% !important;
            max-width: none !important;
            position: relative;
            background-image: url("../Fruits_store/img/justs_bg.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-attachment: fixed;
        }

        .product__center {
            padding: 0.1rem;

        }

        .left-sidebar{
            width: 100%;
        }

        .product{
            background-color: white;
        }
    </style>
@endsection

@section('title')
    <title>Product</title>
@endsection

@section('js')
    <script src="{{asset('product/product.js')}}"></script>
@endsection



@section('content')
    <!-- Navigation -->
        <div class="products-header hero">
            <div class="products-overlay hero-overlay"></div>
            @include('components.nav_menu')
        </div>

        <!-- Navigation -->
        <div class="product-banner">
            <h3>ALL FRUITS</h3>
            <p>Everything is fresh like new</p>
        </div>

        <!-- Products -->
        <div class="container show_product">
            <div class="row">
{{--                Sidebar menu--}}
                @include('product.components.sidebar')
                <div class="col-md-10 padding-right">
                    <section class="products">
                        <div class="product__center">

                        </div>
                    </section>
                </div>
            </div>
        </div>

        <section class="cart__overlay">
            <div class="cart">
      <span class="close__cart">
        <i class="fas fa-times"></i>
      </span>
                <h1>Your Cart</h1>
                <div class="cart__centent">
                    <!-- Cart Item -->

                </div>

                <div class="cart__footer">
                    <h3>Total: $ <span class="cart__total">0</span></h3>
                    <button class="clear__cart btn">Clear Cart</button>
                </div>
            </div>
        </section>

        <section class="item__overlay">
            <div class="items">
      <span class="close__item">
        <i class="fas fa-times"></i>
      </span>
                <div class="item__centent">
                    <!-- Item content -->
                </div>
            </div>
        </section>
@endsection



