<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop - Home</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div>
        <h1>Welcome to our Coffee Shop </h1>
        <p>Best coffee in town, crafted with passion and served with love</p>
        <img src="{{ asset('images/coffee-hero.jpg') }}" alt="Fresh brewed coffee">
        <a href="{{ route('menu') }}">
            <button>View Our Menu </button>
        </a>
    </div>

    <div>
        <h2>Grab a Bag of our Best Brew!</h2>
        <p>Take a piece of The Tavern home with you. Every 12oz bag of our signature roast fuels more than your morning — it powers job training, mentorship, and hope right here in Buckeye. Brew boldly. Give generously.</p>
        <button>Order Now</button>
        <img src="{{ asset('images/coffee-bag.jpg') }}" alt="Coffee beans bag">
    </div>

    <div>
        <h2>Why Choose Us?</h2>
        <h3>Premium Quality Beans</h3>
        <p>We source our beans directly from sustainable farms across the world, ensuring the highest quality in every cup.</p>
        
        <h3>Expert Baristas</h3>
        <p>Our skilled team is trained in the art of coffee making, bringing you perfect brews every single time.</p>
        
        <h3>Cozy Atmosphere</h3>
        <p>Whether you're working, studying, or catching up with friends, our warm and inviting space is perfect for you.</p>
        
        <h3>Community Driven</h3>
        <p>We're more than just a coffee shop - we're a community hub that supports local initiatives and brings people together.</p>
    </div>

    <div>
        <h2>Visit Us Today</h2>
        <p>Open daily from 6 AM. Come experience the difference that passion and quality make in every cup.</p>
        <a href="{{ route('contact') }}">
            <button>Get Directions</button>
        </a>
    </div>

    @endsection

</body>

</html>