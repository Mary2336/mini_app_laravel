<!-- resources/views/events/personne_created.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Personne Created</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #f2f2f2; padding: 10px; text-align: center; }
        .content { margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Personne Created</h1>
        </div>
        <div class="content">
            <p><strong>Name:</strong> {{ $personne->name }}</p>
            <p><strong>age:</strong> {{ $personne->age }}</p>
            <p><strong>Created at:</strong> {{ $personne->created_at }}</p>
        </div>
    </div>
</body>
</html>
