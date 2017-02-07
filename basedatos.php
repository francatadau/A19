<?php
/**
 */
class JuegoTronos
{
  private $mysqli;
  private $error=false;
  //Conexion
  function __construct()
  {
    $this->mysqli= new mysqli("localhost", "root", "", "gameofthrones");
    if ($this->mysqli->connect_errno) {
      $this->error=true;
    }
  }
  //Consultas
  public function resumenSerie(){
    return $resumen=$this->mysqli->query("SELECT plot FROM titles");
  }
  public function actoresSerie(){
    return $actores=$this->mysqli->query("SELECT serie_name, name FROM cast");
  }
  public function actoresTemporada($episodio){
    return $temporada=$this->mysqli->query("SELECT serie_name, name, season, episode FROM season_ep WHERE season=1 AND episode='" .$episodio ."'");
  }
}

 ?>
