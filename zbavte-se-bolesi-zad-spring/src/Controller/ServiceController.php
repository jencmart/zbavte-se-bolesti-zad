<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
       /**
     * @Route("nabidka", name="services")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function actionServicesList()
    {
        return $this->render('service/list.html.twig');
    }

    /**
     * @Route("nabidka/sm-system-terapie", name="sm-individual")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function actionServiceSMIndividual()
    {
        return $this->render('service/sm-individual.html.twig');
    }

    /**
     * @Route("nabidka/sm-system-skupiny", name="sm-group")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function actionServiceSMGroup()
    {
        return $this->render('service/sm-group.html.twig');
    }

    /**
     * @Route("/nabidka/masaze", name="massage")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function actionServiceMassage()
    {
        return $this->render('service/massage.html.twig');
    }

    /**
     * @Route("/nabidka/zdravotni-cviceni", name="workout")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function actionServiceWorkout()
    {
        return $this->render('service/workout.html.twig');
    }

    /**
     * @Route("/nabidka/pilates", name="pilates")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function actionServicePilates()
    {
        return $this->render('service/pilates.html.twig');
    }
}