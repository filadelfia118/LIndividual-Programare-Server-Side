<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Book extends Model {
        protected $table = 'produse';
        protected $fillable = [
            "titlu", "autor", "gen", "an_publicare", "isbn", "descriere", "pret", "stoc"
        ];
    }
    