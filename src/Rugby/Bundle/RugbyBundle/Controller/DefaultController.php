<?php

namespace Rugby\Bundle\RugbyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RugbyRugbyBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
    
     public function menuAction()
    {   
         
         //select * de selecciones
         
         $datos=array (
             array ("titulo"=>"Seleccion Australia","contenido"=>"La Selección de rugby de Australia representa al país en las competiciones oficiales de rugby union. A este equipo se le apoda los Wallabies (ualabí o Wallabies Qantas por razones publicitarias) y compite anualmente con Argentina, Nueva Zelanda y Sudáfrica en el Rugby Championship, en la que también disputan la copa Bledisloe con Nueva Zelanda, la Mandela Challenge Plate con Sudáfrica y el Trofeo Puma con Argentina. Australia está actualmente (finales de agosto de 2015) la segunda del ránking mundial de rugby.1

Está controlada por la Australian Rugby Union (ARU). Es una de las selecciones de rugby más competitivas del mundo. Ha participado en las siete copas del mundo de rugby y tiene el récord (compartido con las selecciones sudafricana y neozelandesa) de haber ganado la Copa Mundial de Rugby en dos ocasiones, en las ediciones de 1991 contra Inglaterra y 1999 contra Francia, ambas disputadas en Europa (siendo el único en lograr tal logro), de la mano de su mítico capitán John Eales. Australia también perdió en la final después de la prórroga con Inglaterra en la competición de 2003.2 Australia

Once jugadores han sido reconocidos dentro del Salón de la Fama del Rugby o el Salón de la Fama del IRB. Tres son miembros solo del Salón Internacional, cuatro son miembros solo del Salón del IRB (uno de los cuales lo logró por méritos ajenos a la competición) y cuatro son miembros de ambos Salones de la Fama: David Campese, Ken Catchpole, John Eales y Mark Ella.","foto"=>"australia.jpg"),
             array ("titulo"=>"Seleccion Gales","contenido"=>"La Selección de rugby de Gales (en galés Tîm rygbi'r undeb cenedlaethol Cymru) representa a esta región británica en las competiciones oficiales de rugby union. Compite anualmente en el 6 Naciones con Inglaterra, Francia, Irlanda, Italia y Escocia. Gales ha ganado 26 veces el 6 Naciones, empatado con Inglaterra. El campeonato más reciente ha sido el de 2013. Gales está actualmente (finales de agosto de 2015) la quinta del ránking mundial de rugby.1","foto"=>"gales.jpg"),
             array ("titulo"=>"Seleccion Nueva Zelanda","contenido"=>"La Selección de rugby de Nueva Zelanda, oficialmente apodada All Blacks, es la selección oficial de rugby representativa de Nueva Zelanda. Es una leyenda en el mundo de dicho deporte y por supuesto también en la propia Nueva Zelanda, donde el rugby se considera deporte nacional.1

Actualmente su capitán es Richie McCaw, elegido mejor jugador del mundo por la IRB en los años 2006, 2009 y 2010.","foto"=>"nuevazelanda.jpg"),
             array ("titulo"=>"Seleccion Argentina","contenido"=>"La selección argentina de rugby, también conocida como Los Pumas, es el representante de dicho país en los campeonatos oficiales organizados por la World Rugby, así como en otras competencias internacionales. Su organización está a cargo de la Unión Argentina de Rugby, fundada en 1899. A la fecha, tiene el puesto 5º del ránking mundial1 , el mejor del continente americano.","foto"=>"argentina.jpg")
             
              );
         
         return $this->render('RugbyRugbyBundle:Default:menu.html.twig',array(
             'tabla'=> $datos
                 ));
        
         }
     public function seleccionesAction($titulo,$contenido,$foto )
    {
         
         
         //select * where nombre="nombre"
         
         
        return $this->render('RugbyRugbyBundle:selecciones:selecciones.html.twig',array(
            'twigtitulo' => "$titulo",
            'twigcontenido' => "$contenido",
             'twigfoto' => "$foto" 
            )
        );
    }
    
}
