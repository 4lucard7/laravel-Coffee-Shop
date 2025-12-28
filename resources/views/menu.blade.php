<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu - Coffee Shop</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div>
        <h1>Our Coffee Menu </h1>
        <p>Expertly crafted beverages made with premium beans and love</p>
    </div>

    <div class="menu-grid">
        @foreach($coffees as $coffee)
        <div class="menu-item">
            <img src="{{ asset($coffee['image']) }}" alt="{{ $coffee['name'] }}">
            <h3>{{ $coffee['name'] }}</h3>
            <p>{{ $coffee['description'] }}</p>
            <b><p>${{ $coffee['price'] }}</p></b>
            <button>Add to Order</button>
        </div>
        @endforeach
    </div>

    <div>
        <h2>Can't Decide?</h2>
        <p>Our friendly baristas are here to help! Ask us about our seasonal specials or let us recommend the perfect brew for your taste.</p>
        <a href="{{ route('contact') }}">
            <button>Contact Us</button>
        </a>
    </div>

    @endsection

</body>

</html>