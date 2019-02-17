<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function actionIndex ()
    {
        return $this->render('index.html.twig');
    }


    /**
     * @Route("/sm-system", name="sm-system")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function actionSmSystem()
    {
        return $this->render('sm-system.html.twig');
    }


    /**
     * @Route("/o-mne", name="about")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function actionAbout()
    {
        return $this->render('about.html.twig');
    }

    /**
     * @Route("/darkove-kupony", name="coupons")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function actionCoupons()
    {
        return $this->render('coupons.html.twig');
    }
}