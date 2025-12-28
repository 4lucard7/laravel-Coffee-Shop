<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Coffee Shop</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div>
        <h1>Get In Touch </h1>
        <p>We'd love to hear from you! Visit us or reach out anytime.</p>
    </div>

    <div>
        <h2>Visit Our Shop</h2>
        <p><strong>Address:</strong> 123 Coffee Street, Buckeye, AZ 85326</p>
        <p><strong>Phone:</strong> (555) 123-4567</p>
        <p><strong>Email:</strong> hello@coffeeshop.com</p>
        
        <h3>Opening Hours</h3>
        <p><strong>Monday - Friday:</strong> 6:00 AM - 8:00 PM</p>
        <p><strong>Saturday:</strong> 7:00 AM - 9:00 PM</p>
        <p><strong>Sunday:</strong> 7:00 AM - 7:00 PM</p>
    </div>

    <div>
        <h2>Send Us a Message</h2>
        <p>Have a question, suggestion, or just want to say hello? Fill out the form below and we'll get back to you as soon as possible.</p>
        
        <form action="#" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required placeholder="John Doe">
            </div>
            
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required placeholder="john@example.com">
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number (Optional)</label>
                <input type="tel" id="phone" name="phone" placeholder="(555) 123-4567">
            </div>
            
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required placeholder="How can we help?">
            </div>
            
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" required placeholder="Tell us what's on your mind..."></textarea>
            </div>
            
            <button type="submit">Send Message</button>
        </form>
    </div>

    <div>
        <h2>Follow Us</h2>
        <p>Stay connected and never miss our latest brews, special offers, and community events!</p>
        <p>Find us on Instagram, Facebook, and YouTube for daily coffee inspiration.</p>
    </div>

    @endsection

</body>

</html>