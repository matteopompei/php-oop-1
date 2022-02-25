<?php

class Movie {
  public $titolo;
  public $genere;
  public $anno;
  public $regista;
  public $cast;

  public function __construct($_titolo, $_genere, $_anno, $_regista, $_cast) {
    $this->titolo = $_titolo;
    $this->generale = $_genere;
    $this->anno = $_anno;
    $this->regista = $_regista;
    $this->cast = $_cast;
  }
}