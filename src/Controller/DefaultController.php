<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route({"en": "/bug", "de": "/fehler"}, name="bug")
     */
    public function bug()
    {
        return $this->render('default/bug.html.twig');
    }
}
