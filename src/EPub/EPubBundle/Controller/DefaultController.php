<?php

namespace EPub\EPubBundle\Controller;

use EPub\EPubBundle\Entity\TypeTaxe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        /**
         * Return
         */
        return $this->render('EPubEPubBundle:Default:index.html.twig');
    }

    /**
     * @Route("/fetch")
     */
    public function fetchAction()
    {
        //On recupere le manager doctrine
        $em = $this->getDoctrine()->getManager();

        //Requete Get pour recuperer toutes les lignes
        //Si on veut un enregistrement particulier il faut mettre un ID dans la parenthese
        $taxes = $em->getRepository("EPub\EPubBundle\Entity\TypeTaxe")->findAll();
        //$taxes = $em->getRepository("EPubBundle:TypeTaxe")->findOneByID($id);
        //$taxes = $em->getRepository("EPubBundle:TypeTaxe")->findOneByName('TVA');
        //$taxes = $em->getRepository("EPubBundle:TypeTaxe")->findByNom('TVA');


        //interception de l exception
        if (!$taxes) {
            throw $this->createNotFoundException(
                "pas d'enregistrement"
            );
        }

        /**
         * Return
         */
        return $this->render('EPubEPubBundle:Default:fetch.html.twig',
            array("taxes" => $taxes)
        );
    }

    /**
     * @Route("/create")
     */
    public function createAction()
    {
        $taxe = new TypeTaxe();
        $taxe->setNom("19,6");

        //On recupere le manager
        $em = $this->getDoctrine()->getManager();

        /**
         * Traitement
         */
        //On rend la variable persistante
        $em->persist($taxe);

        //On flush le cache
        $em->flush();

        /**
         * Return
         */
        return $this->render('EPubEPubBundle:Default:index.html.twig');
    }

    /**
     * @Route("/update")
     */
    public function updateAction()
    {
        //On recupere le manager doctrine
        $em = $this->getDoctrine()->getManager();

        //Requete Get pour recuperer toutes les lignes
        //Si on veut un enregistrement particulier il faut mettre un ID dans la parenthese
        $taxes = $em->getRepository("EPub\EPubBundle\Entity\TypeTaxe")->findOneById(1);
        //$taxes = $em->getRepository("EPubBundle:TypeTaxe")->findOneByID($id);
        //$taxes = $em->getRepository("EPubBundle:TypeTaxe")->findOneByName('TVA');
        //$taxes = $em->getRepository("EPubBundle:TypeTaxe")->findByNom('TVA');


        //interception de l exception
        if (!$taxes) {
            throw $this->createNotFoundException(
                "pas d'enregistrement"
            );
        }
        $taxes->setNom('taxe ascise');
        $em->flush();

        /**
         * Return
         */
        return $this->render('EPubEPubBundle:Default:update.html.twig'
        );
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        //On recupere le manager doctrine
        $em = $this->getDoctrine()->getManager();
        //On choisi l element a supprimer
        $taxes = $em->getRepository("EPub\EPubBundle\Entity\TypeTaxe")->findOneById(2);
        //Flush le cache du manager
        $em->remove($taxes);
        $em->flush();
        /**
         * Return
         */
        return $this->render('EPubEPubBundle:Default:delete.html.twig'
        );
    }
}
