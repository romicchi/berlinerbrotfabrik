<!DOCTYPE html>
<html>
<head>
    <title>Message Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .email-container {
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .message {
            background-color: #f9f9f9;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="email-container">

        <h2>Hello, Hena Mulianakusumah and Team</h2>
        <p>You have a new message from {{ $name }}:</p>

        <div class="message">
            <p>{{ $body }}</p>
        </div>
    </div>
</body>
</html>