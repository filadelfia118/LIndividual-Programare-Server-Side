<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adauga produs</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h2 class="text-center">Adauga produs</h2>
    </div>
    <div class="row">
        <div class="col-md-4 m-auto">
            <form action="/book/store" method="post">
                <div class="mb-3">
                    <label for="Image">Imagine</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="titlu">Nume</label>
                    <input type="text" name="titlu" id="titlu" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="autor">Brand</label>
                    <input type="text" name="autor" id="autor" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="gen">Genul</label>
                    <input type="text" name="gen" id="gen" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="descriere">Descriere</label>
                    <textarea name="descriere" id="descriere" rows="5" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="pret">Pret</label>
                    <input type="number" name="pret" id="pret" class="form-control" step="0.00">
                </div>
                <div class="mb-3">
                    <label for="stoc">Stoc</label>
                    <input type="number" name="stoc" id="stoc" class="form-control">
                </div>
                <button class="btn btn-success">Salveaza</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>