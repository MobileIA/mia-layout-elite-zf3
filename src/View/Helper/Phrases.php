<?php

namespace MIALayoutElite\View\Helper;

/**
 * Description of Phrases
 *
 * @author matiascamiletti
 */
class Phrases extends \Zend\View\Helper\AbstractHelper
{
    protected $morning = ['Lo que hagas ahora es lo que más importa', 'Linda mañana para activar la productividad!', 'Te deseamos el mejor café del mundo a tu lado', 'Qué bueno verte por aquí!', 'Esperamos que hayas desayunado bien...', 'Constancia, método y organización = éxito', 'Clave del día: Insistir en todo!', 'Liderazgo es actitud, no tu posición laboral!', 'Puede ser un día para causar impacto!' , 'Cómo estás? Esperamos que muy bien!'];
    protected $afternoon = ['Lo que hagas ahora es lo que más importa', 'Trabajar con buena música es lo mejor', 'Siempre hay tiempo para un snack!', 'Qué bueno verte por aquí!', 'Para cualquier rol: es diferente trabajar con alguien que para alguien', 'Constancia, método y organización = éxito', 'Clave del día: dividir lo difícil en pequeñas tareas', 'Liderazgo es actitud, no tu posición laboral!', 'Linda tarde para cumplir objetivos!' , 'Tu actitud contagia, y mucho!'];
    protected $night = ['Trabajando hasta tarde?', 'A estas horas se trabaja con buena música', 'Si las arañas tejen juntas pueden atrapar un elefante', 'Qué bien te ves esta noche!', 'Para cualquier rol: es diferente trabajar con alguien que para alguien', 'Constancia, método y organización = éxito', 'Clave para esta noche: una taza caliente y gran convicción', 'Se trabaja con otros, nunca contra otros', 'Esta noche es perfecta' , 'Tu actitud contagia, y mucho!'];
    
    /**
     * 
     * @return string
     */
    public function __invoke()
    {
        // Verificar si esta activo
        if(!$this->getView()->miaLayout()->get('layout_phrases', false)){
            return '';
        }
        // Creamos objeto de la fecha actual
        $date = new \DateTime();
        // Obtener hora actual
        $hour = intval($date->format('H'));
        // Verificamos para obtener la frase
        if($hour >= 6 && $hour <= 12){
            $phrase = $this->morning[rand(0, count($this->morning))];
        }else if($hour > 12 && $hour <= 20){
            $phrase = $this->afternoon[rand(0, count($this->afternoon))];
        }else{
            $phrase = $this->night[rand(0, count($this->night))];
        }
        // Devolvemos HTML
        return '<ul class="nav navbar-top-links navbar-left hidden-xs">
            <li style="height: 60px; line-height: 60px; margin-left: 10px; color: #cccccc; font-weight: bold;">'.$date->format("l").' '.$date->format("d").' de '.$date->format("F").' del '.$date->format("Y").'</li>
            <li style="height: 60px; line-height: 60px; margin-left: 10px; color: #FFF;">'.$phrase.'</li>
        </ul>';
    }
}