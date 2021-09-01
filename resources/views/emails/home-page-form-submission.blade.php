<p>Name: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<p>Phone: {{ $phone }}</p>
<p>Subject: {{ $subject }}</p>
<p>Body: {{ $body }}</p>{{-- Avoid using a variable named $message here to prevent an "ErrorException htmlspecialchars() expects parameter 1 to be string, object given" error when views are called from Mail::send(). Source: Myself. Added: 08/29/2021. --}}
