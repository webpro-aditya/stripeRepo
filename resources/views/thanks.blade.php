<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Return</title>

    <link rel="stylesheet" href="{{ asset('assets/stripe/css/base.css') }}" />
    <script src="https://js.stripe.com/v3/"></script>

    <script src="{{ asset('assets/stripe/js/utils.js') }}" defer></script>
    <script src="{{ asset('assets/stripe/js//return.js') }}" defer></script>
</head>

<body>
    <main>
        <a href="/">home</a>
        <h1>Thank you!</h1>

        <div id="messages" role="alert"></div>
    </main>
</body>

</html>