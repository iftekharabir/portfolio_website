@extends('layouts.app')
@section('custom-style')
    <style>
        .hero-section {
            position: relative;
            color: white;
            background: url("home_picture.jpg") ;
            background-size: cover;
            height: 85vh;
            
        }

        .overlay-text {
            position: absolute;
            top: 500px;
            right: 200px;
            text-align: right;
            font-family: 'Nunito', sans-serif;
            color:blueviolet;
        }

        .overlay-text h1 {
            font-size: 3rem;
        }

        .overlay-text p {
            font-size: 1.5rem;
        }
    </style>
@endsection

@section('content')
    <div class="hero-section">
        <div class="overlay-text">
            <h1>Iftekhar Uddin</h1>
            <p>I'm Web Developer</p>
        </div>
    </div>
@endsection
