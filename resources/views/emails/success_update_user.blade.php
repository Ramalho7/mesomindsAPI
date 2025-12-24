<!DOCTYPE html>
<html>
<head>
    <title>Atualização de conta</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 24px;
            background-color: #ffffff;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .email-container h1 {
            font-size: 24px;
            font-weight: bold;
            color: #1f2937;
            margin: 0 0 16px 0;
            text-align: center;
        }

        .email-container p {
            font-size: 16px;
            color: #4b5563;
            line-height: 1.6;
            margin: 12px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <main>
        <div class="email-container">
            <h1>Olá, {{ $newUserName }}!</h1>
            <p>O seu perfil foi criado com sucesso.</p>
            <p>Criador: {{ $creatorName }}</p>
        </div>
    </main>
</body>
</html>
