<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Hello, {{ $user->name }}</h1>

    <p>Thank you for registration.</p>
    <p>To confirm your registration use link bellow please: </p>

    <a href="{{ env('APP_URL') . '/confirmRegistration/' . $user->id . '/' . $code }}">
        {{ env('APP_URL') . '/confirmRegistration/' . $user->id . '/' . $code }}
    </a>
</body>
</html>