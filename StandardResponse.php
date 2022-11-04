<?php

class StandardResponse {
    public string | int | float | bool | null $data;
    public mixed $objeto;
    public ?array $listado;
    public ?string $mensaje;
    public bool $correctToken;
    public int $status;

    public function __construct($atributos = []) {
        $atributos = (array) $atributos;
        $this->data = $atributos['data'];
        $this->objeto = $atributos['objeto'];
        $this->listado = $atributos['listado'];
        $this->mensaje = $atributos['mensaje'];
        $this->correctToken = $atributos['correctToken'];
        $this->status = $atributos['status'];
    }
}