<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/kontakt", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {

        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);


        $my_mail = 'info@zbavtesebolestizad.cz';

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // validate email
            if (empty($data['email'])) {
                $this->addFlash('info', 'Email musí být vyplněn :-)');
                return $this->redirectToRoute('contact');
            }
            elseif($data['email'] == $my_mail) {
                // create flash message
                $this->addFlash('info', 'Dobrý pokus! Tuto emailovou adresu ale není možné zadat! Je přece moje! :-D');
                return $this->redirectToRoute('contact');
            }
            elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $this->addFlash('info', 'Email se nepodařilo odeslat. Špatná emailová adresa.');
                return $this->redirectToRoute('contact');
            }

            // validate message
            if (empty($data['message'])) {
                $this->addFlash('info', 'Zpráva musí být vyplněna :-)');
                return $this->redirectToRoute('contact');
            }

            // validate name
            if (empty($data['name'])) {
                $this->addFlash('info', 'Vaše jméno musí být vyplněno :-)');
                return $this->redirectToRoute('contact');
            }
            elseif (!preg_match("/^[a-zá-žA-ZÁ-Ž ]*$/",$data['name'])) {
                $this->addFlash('info', 'Neplatné jméno.');
                return $this->redirectToRoute('contact');
            }

            // send to myself
            $message = (new \Swift_Message('zbavtesebolestizad'))
                ->setFrom([$my_mail => 'Mgr. Jarmila Helebrantová'])
                ->setTo($my_mail)
                ->setBody($data['message']."\n\n".$data['name']."\n".$data['email'] , 'text/plain');
                $mailer->send($message);

            // Send confirmation
            $message = (new \Swift_Message('Potvrzení o přijetí zprávy'))
                ->setFrom([$my_mail => 'Mgr. Jarmila Helebrantová'])
                ->setTo($data['email'])
                ->setBody(
                     $this->renderView(
                        'emails/confirmation.html.twig',
                        ['message' => $data['message'], 'name' => $data['name'], 'email' => $data['email']])
                    , 'text/html'
                );
            $mailer->send($message);

            // create flash message
            $this->addFlash('success', 'Vaše zpráva byla úspěšně odeslána!');

            // return
            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController', 'muj_form' => $form->createView()
        ]);
    }

}
