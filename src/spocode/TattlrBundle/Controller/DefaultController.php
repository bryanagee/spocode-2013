<?php

namespace spocode\TattlrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use spocode\TattlrBundle\Form\Type\TattlType;
use spocode\TattlrBundle\Document\Tattl;

class DefaultController extends Controller
{
    /**
     * @Route("/tattls")
     * @Template()
     */
    public function indexAction($tattlType)
    {
        $dm = $this->get('doctrine.odm.mongodb.document_manager');
        if ("Tattl" == $tattlType) {
            $tattls = $dm->getRepository('Tattl');
        } else {
            $tattls = $dm->getRepository('Tattl')->findBy(['type' => $tattlType]);
        }

        foreach ($tattls as $tattl) {

        }

    }

    /**
     * @Route("/{tattlType}/new")
     * @Method({"GET"})
     */
    public function getTattlForm($tattlType)
    {
        $form = $this->createForm(new TattlType(), new Tattl);

        return $this->render(
                'spocodeTattlrBundle:Tattl:submitTattl.html.twig',
                array('form' => $form->createView())
            );
    }

     /**
     * @Route("/tattl")
     * @Method({"POST"})
     */
    public function postTattl()
    {
        $dm = $this->get('doctrine.odm.mongodb.document_manager');

        $form = $this->createForm(new TattlType(), new Tattl());

        $form->bindRequest($this->getRequest());

        if ($form->isValid()) {
            $tattl = $form->getData();

            $dm->persist($tattl);
            $dm->flush();

            //return $this->redirect(...);
        } else {
            return $form->getErrors();
        }

        //return $this->render(
        //        'spocodeTattlrBundle:Tattl:submitTattl.html.twig',
        //        array('form' => $form->createView())
        //    );
        return new \Symfony\Component\HttpFoundation\Response("New Tattl: ". $tattl->getId());
    }
}
