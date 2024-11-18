<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; max-width: 600px; margin: 0 auto; padding: 20px; }
        .contact-info { background-color: #f4f4f4; padding: 15px; border-radius: 5px; }
        .message { background-color: #f9f9f9; padding: 15px; border-left: 4px solid #007bff; }
    </style>
</head>
<body>
    <h2>Hello Admin,</h2>
    
    <p>You have a new contact request with the following details:</p>
    
    <div class="contact-info">
        <strong>Name:</strong> {{ $name ?? '' }}<br>
        <strong>Email:</strong> {{ $email ?? '' }}<br>
        <strong>Phone:</strong> {{ $contact ?? 'Not provided' }}
    </div>
    
    <div class="message">
        <strong>Message:</strong>
        <p>{{ $userMessage ?? '' }}</p>
    </div>
    
    <p>Please review and respond accordingly.</p>
    
    <p>Thank You</p>
</body>
</html>