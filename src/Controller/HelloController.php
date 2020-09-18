<?php

namespace App\Controller;

//use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HelloController.php',
        ]);
    }

    /**
     * @Route("/david")
     */
    public function david()
    {
        return $this->json([
            'message' => 'Welcome David!',
            'path' => 'src/Controller/HelloController.php',
        ]);
    }

    /**
     * @Route("/games")
     */
    public function games()
    {
//        $response = new Response();
        $data = json_decode(file_get_contents('../src/data/Data.json'));
        return $this->json($data);
    }
}