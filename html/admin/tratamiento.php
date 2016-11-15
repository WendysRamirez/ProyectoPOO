<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinica "El Milagro"</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/sb-admin.css" rel="stylesheet">
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    

</head>

<body>
<div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Menu</a>
            </div>
            <ul class="nav navbar-right top-nav">

            

                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Usuario <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar sesion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Menu lateral -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    

                    <li >
                        <a href="../../index_admin.php"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>
                    <li>
                        <a href="doctores.php"><i class="fa fa-fw fa-user"></i> Doctores</a>
                    </li>
                    <li >
                        <a href="enfermeros.php"><i class="fa fa-fw fa-user"></i> Enfermeros</a>
                    </li>
                     <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#paciente"><i class="fa fa-fw fa-user"></i> Paciente <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="paciente" class="collapse">
                            <li>
                                <a href="expediente_Admon.php">Expediente</a>
                            </li>
                            <li >
                                <a href="tratamiento.php">Tratamiento</a>
                            </li>
                            
                            <li>
                                <a href="citas.php">Citas</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#farmacia"><i class="fa fa-fw fa-user"></i> Farmacia <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="farmacia" class="collapse">
                            <li>
                                <a href="sucursales.php">Sucursales</a>
                            </li>
                            <li>
                                <a href="ver_registros_medicamentos.php">Medicamentos</a>
                            </li>
                            
                        </ul>
                    </li>

                    

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#cuentas"><i class="fa fa-fw fa-user"></i> Cuentas Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="cuentas" class="collapse">
                            <li>
                                <a href="crear_cuentas_usuarios.php">Crear Cuenta</a>
                            </li>
                            <li>
                                <a href="actualizar_cuentas_usuario.php">Actualizar Cuenta</a>
                            </li>
                            <li>
                                <a href="eliminar_cuentas_usuario.php">Eliminar cuenta</a>
                            </li>
                            
                        </ul>
                    </li>
                   
                </ul>
            </div>
           
        </nav>

        
       <div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" >
               
                <table class = "table table-striped table-hover">
                    <h1 >Tratamiento</h1>
                            <tr>
                                <th>Codigo_Paciente </th>
                                <th>Codigo_Doctor</th>
                                <th>tratamiento</th>
                                <th>dosis</th> 
                                <th>duracion</th>
                                <th>Fecha_Inicio</th>
                                <th>Fecha_Finalizacion</th>
                                
                            </tr>                   
                            <tr>
                                <td>1</td> <td>001</td> <td>Pastillas</td> <td>2 cada hora</td> <td>10 dias</td>   <td>12/12/12 </td> <td>13/12/12</td> 
                            </tr>
							<tr>
                                <td>1</td> <td>001</td> <td>Pastillas2</td> <td>2 cada hora</td> <td>10 dias</td>   <td>12/12/12 </td> <td>13/12/12</td> 
                            </tr>
                            <tr>
                                <td>1</td> <td>001</td> <td>Pastillas3</td> <td>2 cada hora</td> <td>10 dias</td>   <td>12/12/12 </td> <td>13/12/12</td> 
                            </tr>
                </table>
            </div>
        
     
            </div>
        </div>
    </div>
    
    

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
