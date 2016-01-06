<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\HelloBundle\Entity\Blog;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeHelloBundle:Default:index.html.twig');
    }
    public function homeAction()
    {
    	return $this->render('AcmeHelloBundle:Default:home.html.twig');
    }
    public function bienvenidoAction()
    {
    	return $this->render ('AcmeHelloBundle:Default:bienvenido.html.twig');
    }
    public function testAction()
    {
        return $this->render('AcmeHelloBundle:vista1:prueba.html.twig');
    }
    public function postAction(Request $aux)
    {
     #cambiado por rcespedes.
      $blog = "";       
      $titulo = "";
      $paso = 0;

      if(  $aux->isMethod('POST'))
      {

        if(empty($titulo) && empty($blog) ){

        }
        $titulo=$aux->request->get('titulo');
        $blog=$aux->request->get('blog');

        $post = new Blog();

        $post->setTitulo($titulo);

        $post->setCuerpo($blog);

        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();
        $paso =1;

      }

        
        return $this->render('AcmeHelloBundle:blog:postear.html.twig',array('blog'=>$blog,'esteselpao'=>$paso));
    }
    public function inicioAction()
    {
        $em = $this->getDoctrine()->getManager();
        $aux= $em->getRepository('AcmeHelloBundle:Blog')->findAll();
        
        //var_dump($aux);

        return $this->render('AcmeHelloBundle:blog:index.html.twig',array('blogs'=>$aux));
    }
    public function buscaridAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $xok= $em->getRepository('AcmeHelloBundle:Blog')->find($id);

        return $this->render('AcmeHelloBundle:blog:id.html.twig', array('lol' => $xok ));
    }
   
    public function eliminarporidAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $hue= $em->getRepository('AcmeHelloBundle:Blog')->find($id);
        $em->remove($hue);
        $em->flush();

        $aux= $em->getRepository('AcmeHelloBundle:Blog')->findAll();

        return $this->render('AcmeHelloBundle:blog:eliminar.html.twig', array('delete' => $hue,'lista'=>$aux));
    }
}
