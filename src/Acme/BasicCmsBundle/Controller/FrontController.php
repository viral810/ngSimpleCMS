<?php

namespace Acme\BasicCmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{
    /**
     * @Template()
     * @Route(path="/home/")
     */
    public function homeAction()
    {
        $content = $this->container->get('templating')->render('AcmeBasicCmsBundle:Front:home.html.twig');
        return new Response($content);
    }
}
