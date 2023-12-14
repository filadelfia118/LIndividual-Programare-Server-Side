<?php
    use App\Controllers\BooksController;
    use App\Controllers\CategoryController;

    $app->get("/", [BooksController::class, "index"]);
    $app->get("./", [CategoryController::class, "index"]);

    $app->get("/book/adauga", [BooksController::class, "create"]);

    $app->get('/book/details/{id}', [BooksController::class, "details"]);
    $app->get('/details/{id}', [BooksController::class, "details"] );

    $app->get("./category/adauga", [CategoryController::class, "create"]);

    $app->post("/book/store", [BooksController::class, "store"]);
    $app->post("./category/category/store", [CategoryController::class, "store"]);

    $app->post("/book/login", [BooksController::class, "autorize"]);
    $app->get("/book/edit/{id}", [BooksController::class, "edit"]);
    $app->put("/book/update/{id}", [BooksController::class, "update"]);
    $app->delete("/book/delete/{id}", [BooksController::class, "delete"]);
    $app->post("/book/sort", [BooksController::class, "index"]);