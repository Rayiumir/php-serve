<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Simple Server</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
        }
        
        .container {
            background: white;
            border-radius: 12px;
            padding: 60px 40px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 90%;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #2c3e50;
            font-weight: 300;
        }
        
        .subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 40px;
            line-height: 1.6;
        }
        
        .status {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #c3e6cb;
            margin-bottom: 30px;
            font-weight: 500;
        }
        
        .footer {
            margin-top: 40px;
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .heart {
            color: #e74c3c;
            animation: pulse 1.5s ease-in-out infinite;
        }

        @media (max-width: 600px) {
            .container {
                padding: 40px 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Simple Server</h1>
        <p class="subtitle">Simple and fast development server for PHP projects</p>
        
        <div class="status">
            The server has been started successfully!
        </div>

        <div class="footer">
            Made with ❤️ for PHP developers
        </div>
    </div>

</body>
</html>