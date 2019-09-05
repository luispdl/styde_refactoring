<?php


namespace App;


class HtmlElement
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $content;

    /**
     * @var array
     */
    private $attributes;

    public function __construct(string $name, array $attributes, string $content = null)
    {
        $this->name = $name;
        $this->attributes = $attributes;
        $this->content = $content;
    }

    public function render()
    {
        // Si el elemento tiene atributos:
        if (!empty($this->attributes)) {
            //Abrir la etiqueta con atributos

        } else {
        //Sino

            //Abrir la etiqueta sin atributos;
            $result = "<{$this->name}>";
            //Imprimir el contenido
            $result .= $this->content;
        }


        //Cerrar la etiqueta
        $result .= "</{$this->name}>";

        return $result;
    }

}