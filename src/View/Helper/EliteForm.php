<?php

namespace MIALayoutElite\View\Helper;

/**
 * Description of lteForm
 *
 * @author matiascamiletti
 */
class EliteForm extends \Zend\View\Helper\AbstractHelper
{
    /**
     * 
     * @param Zend\Form $form
     * @return string
     */
    public function __invoke($form)
    {
        // Abrir etiqueta del formulario
        $html = $this->openForm($form);
        // Abrir box
        $html .= '<div class="box-body">';
        // Agregar los elementos del formulario
        $html .= $this->renderElements($form);
        // Cerrar box
        $html .= '</div><!-- /.box-body -->';
        // Cerrar form
        $html .= $this->closeForm();
        // Devolvemos HTML
        return $html;
    }
    /**
     * Cierra etiqueta del formulario
     * @return string
     */
    protected function closeForm()
    {
        return $this->getView()->form()->closeTag();
    }
    /**
     * Recorre y renderea todos los elementos del formulario
     * @param \MIABase\Form\Base $form
     * @return string
     */
    protected function renderElements($form)
    {
        // Variable que guarda el html
        $html = '';
        // Recorrer los elementos
        foreach($form->getIterator() as $element){
            $html .= $this->getView()->partial('form/element/' . $form->getElementType($element) . '.phtml', array('form' => $form, 'element' => $element));
        }
        // Devolvemos HTML
        return $html;
    }
    /**
     * Abre etiqueta del formulario
     * @param \MIABase\Form\Base $form
     * @return string
     */
    protected function openForm($form)
    {
        return $this->getView()->form()->openTag($form);
    }
    
}