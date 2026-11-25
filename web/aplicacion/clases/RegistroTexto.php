<?php

class RegistroTexto {
    private string $cadena;
    private DateTime $fechaHora;

    public function __construct(
        string $cadena,
        DateTime $fecha = new DateTime()
    ) {
        $this->cadena = $cadena;
        $this->fechaHora = $fecha;
    }


    public function getCadena(): string
    {
        return $this->cadena;
    }

    public function getFechaHora(): DateTime{
        return $this->fechaHora;
    }

    public function __toString() : string
    {
        return $this->cadena . " - " . $this->fechaHora->format('d/m/Y H:i:s') . PHP_EOL;
    }

}
