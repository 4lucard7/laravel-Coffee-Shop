<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Coffee Shop</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div>
        <h1>About Our Coffee Shop </h1>
        <p>Crafting exceptional coffee experiences since 2010</p>
        <img src="" alt="Coffee Shop Interior">
    </div>

    <div>
        <h2>Our Story</h2>
        <p>What started as a small corner café has grown into a beloved community gathering place. We're passionate about sourcing the finest beans from sustainable farms around the world and roasting them to perfection right here in our shop.</p>
        <p>Every cup we serve is a testament to our commitment to quality, sustainability, and the art of coffee making. Our skilled baristas take pride in creating the perfect brew for each and every customer.</p>
    </div>

    <div>
        <h2>Our Values</h2>
        <h3>Quality First</h3>
        <p>We source only the finest arabica beans from ethical, sustainable farms. Each batch is carefully roasted to bring out unique flavor profiles.</p>
        
        <h3>Community Focused</h3>
        <p>We believe in giving back. A portion of every sale goes towards local job training programs and community development initiatives.</p>
        
        <h3>Sustainability</h3>
        <p>From compostable cups to energy-efficient equipment, we're committed to reducing our environmental footprint.</p>
        
        <h3>Craftsmanship</h3>
        <p>Our baristas are trained in the art and science of coffee. Every drink is made with care, precision, and passion.</p>
    </div>

    <div>
        <h2>Visit Us Today</h2>
        <p>Experience the difference that passion and quality make. Whether you're looking for your morning pick-me-up or a cozy spot to work, we're here for you.</p>
        <a href="{{ route('menu') }}">
            <button>Explore Our Menu</button>
        </a>
    </div>

    @endsection

</body>

</html>