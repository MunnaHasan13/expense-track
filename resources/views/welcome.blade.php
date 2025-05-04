
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome to ExpenseTrack </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #cececb;
        }
        .welcome-section {
            padding: 300px 0;
            text-align: center;
        }
        .welcome-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .welcome-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .btn-learn-more {
            padding: 10px 30px;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-section">
            <h1>Welcome To The ExpenseTrack</h1>
            <p>The ExpenseTrack is a cutting-edge platform designed to streamline and simplify the process of tracking, managing, and optimizing our daily expenses. </p>
            <a href="{{ route('login') }}" class="btn btn-primary btn-learn-more"> Log In </a>
            <a href="{{ route('register') }}" class="btn btn-primary btn-learn-more"> Register </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
