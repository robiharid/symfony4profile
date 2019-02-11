<?php
namespace App\Controller;

// Include annotations (shortcut routes), method restrictions and Twig templating engine
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    // Index (main) route, only GET (retrieving data) is allowed.
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index()
    {
        // Previous way of rendering PHP parsed HTML
        // return new Response(
        //     '<html><body>Hello</body></html>'
        // );

        // New way of rendering PHP parsed Twig HTML
        return $this->render('main/index.html.twig');
    }
}