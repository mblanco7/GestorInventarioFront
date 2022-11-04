<!DOCTYPE html>
<html lang="es">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    	<meta name="title" content="Inventario - UDI">
    	<meta name="description" content="Proyecto de inventario para la UDI">
    	<meta name="keyword" content="inventario,udi,universidad">
    	<title><?php echo 'Inventario - UDI'; ?></title>
    	
    	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
    	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css"/>
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    	<script src="https://kit.fontawesome.com/d5ab60125e.js" crossorigin="anonymous"></script>
    	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    	<link rel="stylesheet" href="index.css">
    </head>
    <body>
        <header class="container-fluid" style="padding: 18px 30px;">
        	<div class="row header">
        		    
        		<!--MENUTOGGLE-->
        		<div class="col-lg-3 col-md-1 col-sm-1 col-1">
        			<nav role="navigation">
                        <div id="menuToggle">
                                 
                            <input type="checkbox" />
                            <span></span>
                            <span></span>
                            <span style="margin: 0;"></span>
                             
                            <ul id="menu">
                        		<li><a href="/">INICIO</a></li>
                        		<li><a href="/">INVENTARIO</a></li>
    
                                <br>
                    			<a class="url" href="#modalIngreso" data-toggle="modal">Iniciar sesión</a><br><br>
                        		<!-- <a class="url" href="#modalRegistro" data-toggle="modal">Crear cuenta</a><br><br> -->
                        			
                				<br><br>
                				<a class="url" style="color: #d9534f; font-weight: 700;" href="">Salir</a>
                            </ul>
                        </div>
                    </nav>
        		</div>
        
        		<!--LOGOTIPO-->
        		<div class="col-lg-6 col-md-6 col-sm-6 col-5" id="logotipo">
        			<a href="/">
        				<img src="https://inventario.persianasemmanuel.com/img/logo.png" style="width: auto; margin-top: 1px; height: 20px;">
        			</a>
        		</div>
        
        		<!--LOG-->
        		<div class="col-lg-3 col-md-5 col-sm-5 col-6 float-right">
        			<!-- <a class="logbtn float-right" href="#modalRegistro" data-toggle="modal" style="font-weight: 500;">Register</a> -->
        			<a class="logbtn float-right" href="#modalIngreso" data-toggle="modal" style="margin-right: 15px; font-weight: 500;">Iniciar sesión</a>
        		</div>
        	</div>
        </header>

        <!--VENTANA MODAL PARA EL REGISTRO-->
        <div class="modal fade modalFormulario" id="modalRegistro" role="dialog">
            <div class="modal-content modal-dialog">
                <div class="modal-body modalTitulo">
        
                	<a href="#modalIngreso" data-dismiss="modal" data-toggle="modal" class="nav login" style="margin:0 0 80px 15px">Login</a>
                    <a class="nav register btnactive" data-target="register" style="margin:0 0 80px 40px">Register</a>
        
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
        			<!--REGISTRO DIRECTO-->
        			<form>
                        
                        <label for="regUsuario" style="margin: 0 0 5px 0; font-size: 10px;">USUARIO</label>
        				<input type="text" class="form-control input-lg" id="regUsuario" name="regUsuario" required>
                        
                        <label for="regEmail" style="margin: 20px 0 5px 0; font-size: 10px;">EMAIL</label>
        				<input type="email" class="form-control input-lg" id="regEmail" name="regEmail" required>
        				
                        <label for="regPassword" style="margin: 20px 0 5px 0; font-size: 10px;">CONTRASEÑA</label>
        				<input type="password" class="form-control input-lg" id="regPassword" name="regPassword" required>
        
        				<br><br>
        			
        				<button type="submit" class="custom-btn btn-udi backColor" style="width: 100%; height: 46px;" value="ENVIAR">REGISTRARSE</button>	
        			</form>
                </div>
            </div>
        </div>
        
        <!--VENTANA MODAL PARA EL INGRESO-->
        <div class="modal fade modalFormulario" id="modalIngreso" role="dialog">
            <div class="modal-content modal-dialog">
                <div class="modal-body modalTitulo">
                	<a class="nav login btnactive" data-target="login" style="margin:0 0 80px 15px">Iniciar sesión</a>
                    <!-- <a href="#modalRegistro" data-dismiss="modal" data-toggle="modal" class="nav register" style="margin:0 0 80px 40px">Register</a> -->
        
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        			<!--INGRESO DIRECTO-->
        			<form method="post" action="ControllerLogin.php">
            			<label for="ingEmail" style="margin: 0 0 5px 0; font-size: 10px;">EMAIL</label>
            			<input type="text" class="form-control input-lg" id="ingEmail" name="ingEmail" required>
                            
                        <label for="ingPassword" style="margin: 20px 0 5px 0; font-size: 10px;">CONTRASEÑA</label>
            			<input type="password" class="form-control input-lg" id="ingPassword" name="ingPassword" required>
        				<br><br>
        				
        				<button type="submit" class="custom-btn btn-udi backColor btnIngreso" style="width: 100%; height: 46px;" value="ENVIAR">INGRESAR</button>	
        			</form>
                </div>
                
                <!-- <div class="modal-footer">
        			<a href="#modalPassword" data-dismiss="modal" data-toggle="modal">Olvidaste la contraseña?</a>
                </div> -->
            </div>
        </div>
        
        <!--VENTANA MODAL PARA OLVIDO DE CONTRASEÑA-->
        <div class="modal fade modalFormulario" id="modalPassword" role="dialog">
            <div class="modal-content modal-dialog">
                <div class="modal-body modalTitulo">
                    <a class="nav login btnactive" style="margin:0 0 70px 15px">Recuperar Contraseña</a>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                	
        			<!--OLVIDO CONTRASEÑA-->
        			<form>
        				<label style="font-size: 13px;">Email:</label>
        
        				<input type="email" class="form-control input-lg" id="passEmail" name="passEmail" required>
        				
        				<br><br>
        				<button type="submit" class="custom-btn btn-udi backColor" style="width: 100%; height: 46px;" value="ENVIAR">RECUPERAR</button>
        			</form>
                </div>
        
                <div class="modal-footer">
                    <a href="#modalRegistro" data-dismiss="modal" data-toggle="modal">Recuerdas la contraseña? <strong>Iniciar Sesion</strong></a>
                </div>
            </div>
        </div>
        
        <figure>
            <div class="banner img-fluid" style="background-image: url(https://s1.1zoom.me/b5050/179/Fitness_Sitting_Legs_Athletic_shoe_Singlet_Glance_593066_2560x1440.jpg); height: 800px; background-size: cover; background-position: center;"></div>
        </figure>
        
        <figure>
            <div class="bannerMovil" style="background-image: url(https://s1.1zoom.me/b5050/179/Fitness_Sitting_Legs_Athletic_shoe_Singlet_Glance_593066_2560x1440.jpg); height: 500px; background-size: cover; background-position: center;"></div>
        </figure>
        
        <div style="width: 100%; margin-top:30px">
    		<figure>
    			<img src="https://inventario.persianasemmanuel.com/banner-inventario.png" class="img-fluid bannerMovil">	
    		</figure>
    	</div>
        
        <div class="inventario-body">
            <center>
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregar" style="margin-bottom:20px;">
                  Agregar Producto
                </button>
            </center>
            <table id="inventario" class="table table-bordered table-striped dt-responsive tablaCategorias dataTable no-footer dtr-inline collapsed" style="width:100%;">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Subcategoria</th>
                        <th>Descripcion</th>
                        <th>Material</th>
                        <th>Talla</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Evostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Active</td>
                        <td>RBX</td>
                        <td>Leggings</td>
                        <td>Dama</td>
                        <td>Tejido elástico súper suave y ultra agarre para una comodidad y apoyo óptimos.</td>
                        <td>75 % poliéster, 25 % elastano</td>
                        <td>S</td>
                        <td>$245,000</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Alstan</td>
                        <td>Puma</td>
                        <td>Malla</td>
                        <td>Dama</td>
                        <td>Fabricado con algodón de BCI: Al comprar productos de algodón de PUMA, estás apoyando la agricultura de algodón más sostenible a través de la iniciativa Better Cotton Disponible en tallas grandes.</td>
                        <td>95 % Algodón, 5 % Elastán</td>
                        <td>XL</td>
                        <td>$200,000</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Asin</td>
                        <td>Desol</td>
                        <td>Leggings</td>
                        <td>Dama</td>
                        <td>Los leggings de entrenamiento para mujer de Desol son pantalones deportivos asequibles que están diseñados para contornear tus curvas y optimizar tu forma con una cintura alta con control de abdomen, estos leggings de yoga son perfectos para mujeres activas.</td>
                        <td>75% poliéster, 25% elastano</td>
                        <td>S</td>
                        <td>$130,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Coral</td>
                        <td>Falabella</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Leggings de cintura alta: capaz de darte el control de abdomen deseado, con la compresión centrada en ciertas áreas y requeridas que te proporcionarán todo el apoyo necesario, siendo tu elección todos los días, que se adapta a cada movimiento o postura.</td>
                        <td>Cuerpo: 77 % poliéster, 23 % malla de elastano: 88 % poliéster, 12 % elastano</td>
                        <td>XS</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Lite racer</td>
                        <td>Adidas</td>
                        <td>Tenis</td>
                        <td>Hombre</td>
                        <td>Zapatos acolchados para hombre, sin cordones, con el aspecto de tenis de correr, fabricados con materiales reciclados.</td>
                        <td>100% sintético textil.</td>
                        <td>40</td>
                        <td>$400,000</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Rufalcon</td>
                        <td>Adidas</td>
                        <td>Tenis</td>
                        <td>Hombre</td>
                        <td>Adidas - Tenis de correr para hombre.</td>
                        <td>100% sintético</td>
                        <td>38</td>
                        <td>$120,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Air Athletic</td>
                        <td>BEYDR</td>
                        <td>Pantalon</td>
                        <td>Hombre</td>
                        <td>Diseño de cojín de aire: los tenis para correr utilizan un diseño de amortiguación de aire, proporcionan amortiguación y efecto de apoyo para los pies. Proporcionan más protección entre los pies y las rodillas y permiten una experiencia cómoda al caminar.</td>
                        <td>Suela de Goma</td>
                        <td>27</td>
                        <td>226,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Blitzing</td>
                        <td>Under Armour</td>
                        <td>Gorra</td>
                        <td>Hombre</td>
                        <td>El UA Classic Fit cuenta con una visera pre-curvada y paneles frontales estructurados que mantienen la forma con un ajuste de perfil bajo.</td>
                        <td>100% poliéster</td>
                        <td>M</td>
                        <td>$95,000</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Zevostripe</td>
                        <td>Puma</td>
                        <td>Pantalon</td>
                        <td>Dama</td>
                        <td>Pantalones de ejercicio versátiles para mujer: los pantalones de rendimiento de Incrediwear son una ropa deportiva superior que cuenta con material transpirable que absorbe la humedad con un elástico en 4 direcciones. Su versatilidad los hace ideales para llevar como pantalones de yoga y leggings de correr para mejorar tu rendimiento y después del entrenamiento para optimizar la recuperación.</td>
                        <td>Lycra</td>
                        <td>M</td>
                        <td>$320,800</td>
                        <td>
                            <div class='btn-group'><button class='btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-edit'></i></button><button class='btn btn-danger btnEliminar'><i class='fa fa-times'></i></button></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="container-fluid final barraSuperior">
        	<div class="row">
        		<div class="col-xs-12 text-left">
        			<h6>© Inventario UDI |
        			    <a href="https://web.udi.edu.co/" target="_blank"> Developed by UDI</a>
        			</h6>
        		</div>
        	</div>
        </div>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
        
            window.addEventListener("scroll", function(){
	            var header = document.querySelector("header");
	            header.classList.toggle("abajo",window.scrollY>0);
            })
            
            $(document).ready(function() {
                $('#inventario').DataTable( {
                    language: {
                        "processing": "Procesando...",
                        "lengthMenu": "Mostrar _MENU_ registros",
                        "zeroRecords": "No se encontraron resultados",
                        "emptyTable": "Ningún dato disponible en esta tabla",
                        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "search": "Buscar:",
                        "infoThousands": ",",
                        "loadingRecords": "Cargando...",
                        "paginate": {
                            "first": "Primero",
                            "last": "Último",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        },
                        "aria": {
                            "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
                        "buttons": {
                            "copy": "Copiar",
                            "colvis": "Visibilidad",
                            "collection": "Colección",
                            "colvisRestore": "Restaurar visibilidad",
                            "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                            "copySuccess": {
                                "1": "Copiada 1 fila al portapapeles",
                                "_": "Copiadas %ds fila al portapapeles"
                            },
                            "copyTitle": "Copiar al portapapeles",
                            "csv": "CSV",
                            "excel": "Excel",
                            "pageLength": {
                                "-1": "Mostrar todas las filas",
                                "_": "Mostrar %d filas"
                            },
                            "pdf": "PDF",
                            "print": "Imprimir",
                            "renameState": "Cambiar nombre",
                            "updateState": "Actualizar",
                            "createState": "Crear Estado",
                            "removeAllStates": "Remover Estados",
                            "removeState": "Remover",
                            "savedStates": "Estados Guardados",
                            "stateRestore": "Estado %d"
                        },
                        "autoFill": {
                            "cancel": "Cancelar",
                            "fill": "Rellene todas las celdas con <i>%d<\/i>",
                            "fillHorizontal": "Rellenar celdas horizontalmente",
                            "fillVertical": "Rellenar celdas verticalmentemente"
                        },
                        "decimal": ",",
                        "searchBuilder": {
                            "add": "Añadir condición",
                            "button": {
                                "0": "Constructor de búsqueda",
                                "_": "Constructor de búsqueda (%d)"
                            },
                            "clearAll": "Borrar todo",
                            "condition": "Condición",
                            "conditions": {
                                "date": {
                                    "after": "Despues",
                                    "before": "Antes",
                                    "between": "Entre",
                                    "empty": "Vacío",
                                    "equals": "Igual a",
                                    "notBetween": "No entre",
                                    "notEmpty": "No Vacio",
                                    "not": "Diferente de"
                                },
                                "number": {
                                    "between": "Entre",
                                    "empty": "Vacio",
                                    "equals": "Igual a",
                                    "gt": "Mayor a",
                                    "gte": "Mayor o igual a",
                                    "lt": "Menor que",
                                    "lte": "Menor o igual que",
                                    "notBetween": "No entre",
                                    "notEmpty": "No vacío",
                                    "not": "Diferente de"
                                },
                                "string": {
                                    "contains": "Contiene",
                                    "empty": "Vacío",
                                    "endsWith": "Termina en",
                                    "equals": "Igual a",
                                    "notEmpty": "No Vacio",
                                    "startsWith": "Empieza con",
                                    "not": "Diferente de",
                                    "notContains": "No Contiene",
                                    "notStarts": "No empieza con",
                                    "notEnds": "No termina con"
                                },
                                "array": {
                                    "not": "Diferente de",
                                    "equals": "Igual",
                                    "empty": "Vacío",
                                    "contains": "Contiene",
                                    "notEmpty": "No Vacío",
                                    "without": "Sin"
                                }
                            },
                            "data": "Data",
                            "deleteTitle": "Eliminar regla de filtrado",
                            "leftTitle": "Criterios anulados",
                            "logicAnd": "Y",
                            "logicOr": "O",
                            "rightTitle": "Criterios de sangría",
                            "title": {
                                "0": "Constructor de búsqueda",
                                "_": "Constructor de búsqueda (%d)"
                            },
                            "value": "Valor"
                        },
                        "searchPanes": {
                            "clearMessage": "Borrar todo",
                            "collapse": {
                                "0": "Paneles de búsqueda",
                                "_": "Paneles de búsqueda (%d)"
                            },
                            "count": "{total}",
                            "countFiltered": "{shown} ({total})",
                            "emptyPanes": "Sin paneles de búsqueda",
                            "loadMessage": "Cargando paneles de búsqueda",
                            "title": "Filtros Activos - %d",
                            "showMessage": "Mostrar Todo",
                            "collapseMessage": "Colapsar Todo"
                        },
                        "select": {
                            "cells": {
                                "1": "1 celda seleccionada",
                                "_": "%d celdas seleccionadas"
                            },
                            "columns": {
                                "1": "1 columna seleccionada",
                                "_": "%d columnas seleccionadas"
                            },
                            "rows": {
                                "1": "1 fila seleccionada",
                                "_": "%d filas seleccionadas"
                            }
                        },
                        "thousands": ".",
                        "datetime": {
                            "previous": "Anterior",
                            "next": "Proximo",
                            "hours": "Horas",
                            "minutes": "Minutos",
                            "seconds": "Segundos",
                            "unknown": "-",
                            "amPm": [
                                "AM",
                                "PM"
                            ],
                            "months": {
                                "0": "Enero",
                                "1": "Febrero",
                                "10": "Noviembre",
                                "11": "Diciembre",
                                "2": "Marzo",
                                "3": "Abril",
                                "4": "Mayo",
                                "5": "Junio",
                                "6": "Julio",
                                "7": "Agosto",
                                "8": "Septiembre",
                                "9": "Octubre"
                            },
                            "weekdays": [
                                "Dom",
                                "Lun",
                                "Mar",
                                "Mie",
                                "Jue",
                                "Vie",
                                "Sab"
                            ]
                        },
                        "editor": {
                            "close": "Cerrar",
                            "create": {
                                "button": "Nuevo",
                                "title": "Crear Nuevo Registro",
                                "submit": "Crear"
                            },
                            "edit": {
                                "button": "Editar",
                                "title": "Editar Registro",
                                "submit": "Actualizar"
                            },
                            "remove": {
                                "button": "Eliminar",
                                "title": "Eliminar Registro",
                                "submit": "Eliminar",
                                "confirm": {
                                    "_": "¿Está seguro que desea eliminar %d filas?",
                                    "1": "¿Está seguro que desea eliminar 1 fila?"
                                }
                            },
                            "error": {
                                "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                            },
                            "multi": {
                                "title": "Múltiples Valores",
                                "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                                "restore": "Deshacer Cambios",
                                "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                            }
                        },
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                        "stateRestore": {
                            "creationModal": {
                                "button": "Crear",
                                "name": "Nombre:",
                                "order": "Clasificación",
                                "paging": "Paginación",
                                "search": "Busqueda",
                                "select": "Seleccionar",
                                "columns": {
                                    "search": "Búsqueda de Columna",
                                    "visible": "Visibilidad de Columna"
                                },
                                "title": "Crear Nuevo Estado",
                                "toggleLabel": "Incluir:"
                            },
                            "emptyError": "El nombre no puede estar vacio",
                            "removeConfirm": "¿Seguro que quiere eliminar este %s?",
                            "removeError": "Error al eliminar el registro",
                            "removeJoiner": "y",
                            "removeSubmit": "Eliminar",
                            "renameButton": "Cambiar Nombre",
                            "renameLabel": "Nuevo nombre para %s",
                            "duplicateError": "Ya existe un Estado con este nombre.",
                            "emptyStates": "No hay Estados guardados",
                            "removeTitle": "Remover Estado",
                            "renameTitle": "Cambiar Nombre Estado"
                        }
                    } 
                } );
            } );
        </script> 
    </body>
</html>