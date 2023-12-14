<?php
    namespace App\Controllers;

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Models\Category;
    class CategoryController {
        public function index (Request $request, Response $response) {
            $query = Category::query();
            $data = $request->getParsedBody();
            if (isset($data['nume']) && $data['nume'] !== "") {
                $query->where('nume', 'like', '%' . $data['nume'] . '%');
            }
            
        }

        public function create(Request $request, Response $response) {
            ob_start();
            include __DIR__ . "/../../views/categorys/create.view.php";
            $html = ob_get_clean();
            $response->getBody()->write($html);
            return $response;
        }

        public function store(Request $request, Response $response) {
            $data = $request->getParsedBody();
            $contact = new Category($data);
            $contact->save();
            return $response
                ->withHeader('Location', './category')
                ->withStatus(302);
        }

        

        
    }
