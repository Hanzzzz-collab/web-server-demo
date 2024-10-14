<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('navbar')

    <div class="container" style="max-width: 600px; margin: auto; padding: 20px;">
        <h1 style="text-align: center; color: #007bff;">Contact Us</h1>
        <form action="/send-message" method="POST" style="background-color: #f7f7f7; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="name" style="display: block; margin-bottom: 5px;">Name:</label>
                <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block; margin-bottom: 5px;">Email:</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="message" style="display: block; margin-bottom: 5px;">Message:</label>
                <textarea id="message" name="message" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
            </div>
            <button type="submit" style="width: 100%; background-color: #007bff; color: white; padding: 10px; border: none; border-radius: 5px; font-weight: bold;">Send</button>
        </form>
    </div>
</body>
</html>
