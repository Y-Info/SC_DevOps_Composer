<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
class DefaultController
{
    public function index()
    {
        return new Response(
            '<html><body><h1>Hello world</h1></body></html>'
        );
    }
}