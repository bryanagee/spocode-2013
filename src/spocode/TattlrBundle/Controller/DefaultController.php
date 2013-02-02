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
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
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
     * @Route("/{tattlType}")
     * @Method({"POST"})
     */
    public function postTattl($tattlType)
    {
        $dm = $this->get('doctrine.odm.mongodb.default_document_manager');

        $form = $this->createForm(new TattlType(), new Tattl);

        $form->bindRequest($this->getRequest());

        if ($form->isValid()) {
            $tattl = $form->getData();

            $dm->persist($tattl);
            $dm->flush();

            //return $this->redirect(...);
        }

        return $this->render(
                'spocodeTattlrBundle:Tattl:submitTattl.html.twig',
                array('form' => $form->createView())
            );
    }
}
