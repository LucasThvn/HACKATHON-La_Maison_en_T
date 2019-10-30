<?php


namespace App\Controller;

class WinController extends AbstractController
{
    public function WiN()
    {
        return $this->twig->render('win/win.html.twig');
    }
}
