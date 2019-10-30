<?php


namespace App\Controller;

class WinController extends AbstractController
{
    public function wiN()
    {
        return $this->twig->render('win/win.html.twig');
    }
}
