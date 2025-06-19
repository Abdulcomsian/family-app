<!DOCTYPE html>
<html>

<head>
    <title>Welcome!</title>
</head>

<body>
    <h1>Hi {{ $member->name }},</h1>
    <p>Welcome to our platform! We're glad to have you.</p>

    <p>
        <a href="{{ url('/register') }}" style="display: inline-block; padding: 12px 20px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px; font-weight: bold;">
            Register Now
        </a>
    </p>
</body>

</html>