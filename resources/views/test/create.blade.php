<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="{{ route('storepe') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="text" class="form-control" id="namep" name="namep" aria-describedby="emailHelp" placeholder="Enter name" required>

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">age</label>
                <input type="number" class="form-control" id="agep" name="agep" placeholder="age" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">sexe</label>
                <select class="form-control form-control-lg" name="sexep">
                    <option>select</option>
                    <option value="homme">homme</option>
                    <option value="femme">femme</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <footer class="text-center mt-8">
            &copy; 2024 Mary. Tous droits réservés.
        </footer>

    </div>
</body>

</html>