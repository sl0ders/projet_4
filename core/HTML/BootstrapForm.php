<?php

namespace Core\HTML;

class BootstrapForm extends Form
{
    /**
     * @param $html string Code HTML a entourer
     * @return string
     */
    protected function surround($html)
    {
        return "<div class=\"form-group\">{$html}</div>";
    }

    /**
     * @param $name string
     * @param $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = [])
    {
        $type = isset($options['type']) ? $options = ['type'] : 'text';
        $label = '<label>' . $label . '</label>';
            $input = '<input type="' . $type . '" name="' . $name . '" value= "' . $this->getValue($name) . '" class="form-control">';
        return $this->surround($label . $input);
    }

    public function textarea($name, $label)
    {
        return $this->surround(
            '<label>' . $label . ' </label ><textarea  class = "form-control" name = "' . $name . '"></textarea>');
    }

    public function password($name, $label)
    {
        return $this->surround(
            ' <label>' . $label . ' </label ><input type = "password" name = "' . $name . '" value = "' . $this->getValue($name) . '" class = "form-control" > ');
    }

    /**
     * @return string
     */
    public
    function submit()
    {
        return $this->surround('<button type = "submit" class = "btn btn-primary" > Envoyer</button > ');
    }
}