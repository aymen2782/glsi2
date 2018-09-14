<?php

namespace Tekup\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('@TekupFirst\Default\index.html.twig');
    }
}
