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
    <?php include __DIR__ . '/../partials/nav.view.php'; ?>
    <div class="container">
            <div class="col-md-10">
                <a href="./category/adauga" class="btn btn-info mb-2 text-white">Adauga Categorie</a>
                <div class="container mt-5">
                    <h2 class="text-center">Categorii disponibile  !</h2>
                    <div  class="row mt-5 m-5" >
                        <?php foreach ($categorys as $key => $category): ?>
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <p class="card-text"><strong>Nume:</strong><?=$category->nume?></p>
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