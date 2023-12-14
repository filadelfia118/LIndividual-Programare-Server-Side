<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include __DIR__ . '/../partials/nav.view.php'; ?>
    <div class="container">
        
        <div class="row">
            <div class="col-md-2">
                <h5>Filtrare produse</h5>
                <form action="/book/sort" method="post">
                    <div class="mb-3">
                        <label for="titlu">Nume</label>
                        <input type="text" name="titlu" id="titlu" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="category">Categorie</label>
                        <select name="category" id="category" class="form-control">
                            <option></option>
                            <?php foreach( $autori as $autor ): ?>
                                <option value="<?=$autor?>"><?=$autor?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gen">Gen</label>
                        <select name="gen" id="gen" class="form-control">
                            <option></option>
                            <?php foreach( $genuri as $gen ): ?>
                                <option value="<?=$gen?>"><?=$gen?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-secondary">Sorteaza</button>
                </form>
            </div>
            <div class="col-md-10">
                <a href="/book/adauga" class="btn btn-info mb-2 text-white">Adauga</a>
                <div class="container mt-5">
                    <h2 class="text-center">Produse disponibile !</h2>
                    <div  class="row mt-5 m-5" >
                        <?php foreach ($books as $key => $book): ?>
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <img src="<?= $book->image; ?>" class="card-img-top" alt="...">
                                    
                                    <p class="card-text"><strong>Nume:</strong><?=$book->titlu?></p>
                                    <p class="card-text"><strong>Marca:</strong><?=$book->gen ?></p>
                                    <p class="card-text"><strong>Pret:</strong><?=$book->pret?></p>
                                    <a href="/book/details" class="btn btn-primary">Details</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>