<!DOCTYPE html>
<html>

<head>
    <title>New Contact Message</title>
</head>

<body>
    <h1>Contact Message from {{ $data['name'] }}</h1>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
</body>

</html>
