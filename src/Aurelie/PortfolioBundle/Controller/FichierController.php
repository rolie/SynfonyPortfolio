<?php
namespace Aurelie\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Aurelie\PortfolioBundle\Entity\FichierGestion;


class FichierController extends Controller
{
    public function indexAction()
    {
        $fichierGestion = new FichierGestion(__DIR__ . '/../Resources/public/xml/langages.xml');
        $tableauResultat = $fichierGestion->getContenuFichier('langages');
        //affichage du template de l'index
        return $this->render('AureliePortfolioBundle:Fichier:index.html.twig', array("resultat" => $tableauResultat));

    }
}
