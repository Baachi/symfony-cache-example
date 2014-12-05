<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Cache(public=true, expires="+ 1 day")
     */
    public function indexAction()
    {
        sleep(10);
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/{name}")
     */
    public function helloAction($name)
    {
        return Response::create(sprintf('%s Hello %s', date('d.m.Y H:i:s'), $name));
    }
}
