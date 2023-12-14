<?php
    namespace App\Controllers;

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Models\Book;
    class BooksController {
        public function index (Request $request, Response $response) {
            $query = Book::query();
            $data = $request->getParsedBody();
            if (isset($data['titlu']) && $data['titlu'] !== "") {
                $query->where('titlu', 'like', '%' . $data['titlu'] . '%');
            }
            if (isset($data['category']) && $data['category'] !== "") {
                $query->where('category', 'like', '%' . $data['category'] . '%');
            }
            if (isset($data['gen']) && $data['gen'] !== "") {
                $query->where('gen', $data['gen']);
            }
            
            $query->orderBy('titlu', 'asc');
            $books = $query->get();
            // Pentru formular
            $autori = Book::select('category')->distinct()->orderBy('category', 'asc')->get()->pluck('category')->toArray();
            $genuri = Book::select('gen')->distinct()->orderBy('gen', 'asc')->get()->pluck('gen')->toArray();
            ob_start();
            include __DIR__ . "/../../views/books/index.view.php";
            $html = ob_get_clean();
            $response->getBody()->write($html);
            return $response;
        }

        public function create(Request $request, Response $response) {
            ob_start();
            include __DIR__ . "/../../views/books/create.view.php";
            $html = ob_get_clean();
            $response->getBody()->write($html);
            return $response;
        }
        public function details(Request $request, Response $response, array $args) {
            ob_start();
            $book = Book::findOrFail($args['id']);
        
            $response->get('renderer')->render($response, '/../../views/books/details.view.php', ['id' => $book]);
            return $response;
        }
        
        public function autorize(Request $request, Response $response) {
            ob_start();
            include __DIR__ . "/../../views/books/autorize.php";
            $html = ob_get_clean();
            $response->getBody()->write($html);
            return $response;
        }

        public function store(Request $request, Response $response) {
            $data = $request->getParsedBody();
            $contact = new Book($data);
            $contact->save();
            return $response
                ->withHeader('Location', '/')
                ->withStatus(302);
        }

        public function edit(Request $request, Response $response, $args) {
            $book = Book::findOrFail($args['id']);
            ob_start();
            include __DIR__ . "/../../views/books/edit.view.php";
            $html = ob_get_clean();
            $response->getBody()->write($html);
            return $response;
        }

        public function update(Request $request, Response $response, $args) {
            $data = $request->getParsedBody();
            $book = Book::findOrFail($args['id']);
            $book->update([...$data]);
            return $response
                ->withHeader('Location', '/')
                ->withStatus(302);
        }

        public function delete(Request $request, Response $response, $args) {
            $book = Book::findOrFail($args['id']);
            $book->delete();
            return $response;
        }
    }
