<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact Form Email</title>
</head>

<body>
    <h2>Contact Form Details</h2>
    <p><strong>Name:</strong>{!! $name !!}</p>
    <p><strong>Email:</strong> {!! $email !!}</p>
    <p><strong>Subject:</strong> {!! $subject !!}</p>
    <p><strong>Message:</strong> {{ $body }}</p>
</body>

</html>
