<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h2 class="text-center">Adauga categorie</h2>
    </div>
    <div class="row">
        <div class="col-md-4 m-auto">
            <form action="./category/store" method="post">
                <div class="mb-3">
                    <label for="Nume">Nume</label>
                    <input type="text" name="nume" id="nume" class="form-control">
                </div>
                
                <button class="btn btn-success">Salveaza</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>