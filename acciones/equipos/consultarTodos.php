<?php

require_once "../../Jugadores.php";
require_once "../../Equipos.php";
require_once "responses/consultarTodosResponse.php";

header('Content-Type: application/json');

$resp = new ConsultarTodosResponse();

$j1 = new Jugadores();
$j1->Nombre="Pedro Gonzalez";
$j1->Posicion="Delantero";
$j1->Debut= "17 de agosto de 2005";
$j1->Goles=10;

$j2 = new Jugadores();
$j2->Nombre="Daniel Sanchez";
$j2->Posicion="Delantero";
$j2->Debut="16 de diciembre de 2010";
$j2->Goles=0;

$j3 = new Jugadores();
$j3->Nombre="Juan Perez";
$j3->Posicion="Defensor";
$j3->Debut="17 de setiembre de 2019";
$j3->Goles=10;

$j4 = new Jugadores();
$j4->Nombre="Ignacio gonzalez";
$j4->Posicion="Arquero";
$j4->Debut="17 de enero de 2020";
$j4->Goles=1;

$j5 = new Jugadores();
$j5->Nombre="Ariel Cosentino";
$j5->Posicion="Mediocampista";
$j5->Debut="16 de diciembre de 2001";
$j5->Goles=2;

$j6 = new Jugadores();
$j6->Nombre="Diego Dominguez";
$j6->Posicion="Defensor";
$j6->Debut="15 de febrero de 2018";
$j6->Goles=5;

$j7 = new Jugadores();
$j7->Nombre="Gustavo Santos";
$j7->Posicion="Delantero";
$j7->Debut= "16 de diciembre de 2009";
$j7->Goles=5;

$e1=new Equipo();
$e1->Id=1;
$e1->Nombre="Equipo 1";
$e1->ListJugadores[]=$j1;
$e1->ListJugadores[]=$j2;
$e1->ListJugadores[]=$j3;
$e1->Fundacion="3 de noviembre de 1903 (118 años)";
$e1->Presidente="Javier Perez";

$e2=new Equipo();
$e2->Id=2;
$e2->Nombre="Equipo 2";
$e2->ListJugadores[]=$j4;
$e2->ListJugadores[]=$j5;
$e2->ListJugadores[]=$j6;
$e2->ListJugadores[]=$j7;
$e2->Fundacion="5 de abril de 1923";
$e2->Presidente="Ignacio Quinteros";

$resp->listEquipos[]=$e1;
$resp->listEquipos[]=$e2;


echo json_encode($resp);
