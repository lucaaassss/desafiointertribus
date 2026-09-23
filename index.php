<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssprincipal.css" />
    <title>Document</title>
</head>
<body>
    
    <?php 
        include 'conexion.php';
        $datos = [];
        // $alumno = $datos['alumno'];


        if($_SESSION['user']!=true){
            
            echo "<script type='text/javascript'>window.location.href = 'login.php';</script>";
            }
            if($_SESSION['user']==true && $_SESSION['rol'] == 'admin'){?>
                    
                <h1>Sistema de votacion de caciques intertribus ITLF</h1>
                <div class="botones">
                    <a href="usuarios.php">
                        <BUtton>Usuarios</BUtton>
                    </a>
                    <a href="">
                        <BUtton>Votaciones</BUtton>
                    </a>
                    <a href="">
                        <BUtton>Cerrar sesion</BUtton>
                    </a>
                </div>
                <?php
                }
            if($_SESSION['user']==true && $_SESSION['rol'] == 'alumno'){?>

                <h1>Sistema de votacion de caciques intertribus ITLF</h1>
                
                <?php
            }
                
                // if($alumno == null)
                //     {
                    //         $alumno = null;
                    //         echo"no hay usuario registrado";
                    //         $_SESSION['usuario']=null;
                    //         $_SESSION['año']=null;
                    //     }
                    // if($_SESSION['usuario'] == null)
                    // {
                        //     echo"
                        
                        //         <head>
                        //             <a href=''><img src='logo' alt=''></a>
                        //             <a href='login.php'>registrarse</a>
                        //             <a href='datos.html'>Inter</a>
                        //     </head>";
                        // }
                        // else if($_SESSION['usuario'] == 'admin')
                        // {
                            //     echo"
                            //     <body>
                            //         <head>
                            //             <a href=''><img src='logo' alt=''></a>
                            //             <a href='usuario.html'>Usuario</a>
                            //             <a href='datos.html'>Inter</a>
                            //             <a href='postularse.html'>agregar usuarios
                            //             </a>
                            //         </head>
                            //         <div class='info'>
                            //             <h1>Inter</h1>
                            //             <div>
                            //             <a href='admin/agregarusuario.php'>usuarios</a>
                            //             <a href=''>editar</a>
                            //             </div>
                            //             <div>
                            //             <a href=''>iniciar votacion</a>
                            //             </div>
                            //         </div>
                            //     </body>
                            //     </html>";
                            // }
                            // else if ($_SESSION['año'] == '6to')
                            //     {
                                //     echo"
                                // <head>
                                //     <meta charset='UTF-8'>
                                //     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                                //     <title>Inter</title>
                                // </head>
                                
                                // <body>
                                
        //     <head>
        //         <a href=''><img src='logo' alt=''></a>
        //         <a href='usuario.html'>Usuario</a>
        //         <a href='datos.html'>Inter</a>
        //         <a href='votacion.html'>Votar</a>
        //         <a href='postularse.html'>Postularse</a>
        //     </head>

        // </body>
        // ";
        // }
        // else
        // {
            

        // echo "<body>

        //     <head>
        //         <a href=''><img src='logo' alt=''></a>
        //         <a href='usuario.html'>Usuario</a>
        //         <a href='datos.html'>Inter</a>
        //         <a href='votacion.html'>Votar</a>
        //     </head>

        // </body>

        // </html>";
        // }
        //    echo "<div class='info'>
        //         <h1>Inter</h1>
        //         <p>informacion-......................................</p>
        //     </div>";
?>
</body>
</html>