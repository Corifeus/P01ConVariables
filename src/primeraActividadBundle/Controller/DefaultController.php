<?php

namespace primeraActividadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('primeraActividadBundle:Default:index.html.twig');
    }

    public function productoAction($idPro)
    {
    	if ( $idPro == 1)
    	{
    		return $this->render('primeraActividadBundle:Default:producto1.html.twig');
    	}else{
    		return $this->render('primeraActividadBundle:Default:producto2.html.twig');
    	}
        //Ejemplo Con Variable// return $this->render('primeraActividadBundle:Default:producto.html.twig',array('idPro'=>$idPro));
    }
}
