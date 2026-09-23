<?php
session_start();
$id=$_POST['id'];
include '../conexion.php';
$ids = $conexion[$usuario($id)];

if($id == null)
    {
        $id== 0;
    }

foreach($ids as $a)
    {
        if($ids == 0)
            {
                break;
            }
        else if($id==$ids)
            {
                break;
            }
    }
    if($id == $a)
        {
            header("location:../../index.php");/*agregar la url del usuario no me acuerdo como mandar a pestañas lol*/ 
        }
        else
            {
            echo "h1>no se encontro la ID</h1>";
            header("location:../buscar.php");
            }


