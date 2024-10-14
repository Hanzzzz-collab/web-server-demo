<!-- resources/views/layouts/navbar.blade.php -->
<nav style="background-color: #007bff; padding: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
    <ul style="list-style: none; padding: 0; display: flex; justify-content: center;">
        <li style="margin-right: 30px;">
            <a href="{{ url('/') }}" style="color: white; text-decoration: none; padding: 10px; font-weight: bold;">Home</a>
        </li>
        <li style="margin-right: 30px;">
            <a href="{{ url('/about') }}" style="color: white; text-decoration: none; padding: 10px; font-weight: bold;">About</a>
        </li>
        <li style="margin-right: 30px;">
            <a href="{{ url('/contact') }}" style="color: white; text-decoration: none; padding: 10px; font-weight: bold;">Contact</a>
        </li>
    </ul>
</nav>
