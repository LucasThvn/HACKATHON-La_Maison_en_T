<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class RoomController extends AbstractController
{

    /**
     * Display Room page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function attic()
    {
        return $this->twig->render('Room/attic.html.twig');
    }

    public function couloir()
    {
        return $this->twig->render('Room/couloir.html.twig');
    }

    public function cabinet()
    {
        return $this->twig->render('Room/cabinet.html.twig');
    }

    public function chambre()
    {
        return $this->twig->render('Room/chambre.html.twig');
    }

    public function passage()
    {
        return $this->twig->render('Room/passage.html.twig');
    }

    public function salon()
    {
        return $this->twig->render('Room/salon.html.twig');
    }

}

