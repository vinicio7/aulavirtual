<?php 
	use App\Administradores;
	$administradores = Administradores::all();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Aula Virtual</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="admin/js/toastr.js" />
	<link href="admin/css/toastr.css" rel="stylesheet">	
<!-- Custom Theme files -->
<link href="admin/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="admin/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="admin/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="admin/js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="admin/js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="admin/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>INTEC</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="admin/images/p5.png" alt=""> </span> 
												<div class="user-name">
													<p>Oscar Palala</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<!-- <li> <a href="#"><i class="fa fa-cog"></i> Propiedades</a> </li>  -->
											<li> <a href="#"><i class="fa fa-user"></i> Perfil</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Salir</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->	<div class="portlet-grid-page">
		<h2 style="margin-left: 20px;">Administradores</h2>
	</div>
<!--market updates updates-->
<!--market updates end here-->
<!--mainpage chit-chating-->
<div class="chit-chat-layer1" style="margin-left: 20px;">
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Nuevo administrador</h4>
	      </div>
	      <div class="modal-body">
	       <form id="form-crear" class="form"  method="post" enctype="multipart/form-data">
			        <fieldset>
						<div class="row">
							<div class="col-sm-6" style="margin-top: 10px">
								<label>Nombre: </label>
						    	<input type="text" class="form-control" id="nombre" name="nombre" required>
							</div>
							<div class="col-sm-6" style="margin-top: 10px">
								<label>Correo: </label>
						    	<input type="text" class="form-control" id="correo" name="correo" required>
							</div>
							<div class="col-sm-6" style="margin-top: 10px">
								<label>Direccion: </label>
						    	<input type="text" class="form-control" id="direccion" name="direccion" required>
							</div>
							<div class="col-sm-6" style="margin-top: 10px">
								<label>Telefono: </label>
						    	<input type="text" class="form-control" id="telefono" name="telefono" required>
							</div>
							<div class="col-sm-6" style="margin-top: 10px">
								<label>Fecha: </label>
						    	<input type="date" class="form-control" id="fecha" name="fecha" required>
							</div>
							<div class="col-sm-6" style="margin-top: 10px">
								<label>Estado: </label>
								<br>
						    	<select id="estado" name="estado">
						    		<option value="1">
						    			Activo
						    		</option>
						    		<option value="2">
						    			Inactivo
						    		</option>
						    	</select>
							</div>
						</div>
						
			        </fieldset>
		        </form>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-success" data-dismiss="modal" id="registrar">Registrar</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>

	  </div>
	</div>
	
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Editar administrador</h4>
	      </div>
	      <div class="modal-body">
	       <form id="form-editar" class="form"  method="post" enctype="multipart/form-data">
			        <fieldset>
						<div class="row">
							<div class="col-sm-6" style="margin-top: 10px">
								<label>Nombre: </label>
						    	<input type="text" class="form-control" id="nombre" name="nombre" required>
							</div>
							<div class="col-sm-6" style="margin-top: 10px">
								<label>Correo: </label>
						    	<input type="text" class="form-control" id="correo" name="correo" required>
							</div>
							<div class="col-sm-6" style="margin-top: 10px">
								<label>Direccion: </label>
						    	<input type="text" class="form-control" id="direccion" name="direccion" required>
							</div>
							<div class="col-sm-6" style="margin-top: 10px">
								<label>Telefono: </label>
						    	<input type="text" class="form-control" id="telefono" name="telefono" required>
							</div>
							<div class="col-sm-6" style="margin-top: 10px">
								<label>Fecha: </label>
						    	<input type="date" class="form-control" id="fecha" name="fecha" required>
							</div>
							<div class="col-sm-6" style="margin-top: 10px">
								<label>Estado: </label>
								<br>
						    	<select id="estado" name="estado">
						    		<option value="1">
						    			Activo
						    		</option>
						    		<option value="2">
						    			Inactivo
						    		</option>
						    	</select>
							</div>
						</div>
						
			        </fieldset>
		        </form>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-success" data-dismiss="modal" id="btn-editar">Registrar</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>

	  </div>
	</div>

	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Eliminar administrador</h4>
	      </div>
	      <div class="modal-body">
	       <form id="form-crear" class="form"  method="post" enctype="multipart/form-data">
			        <fieldset>
						<h2>Esta seguro de eliminar este administrador?</h2>
			        </fieldset>
		        </form>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-success" data-dismiss="modal" id="delete">Confirmar</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>

	  </div>
	</div>
	<br>
	<br>
	<button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal">+ Crear</button>
	<br>
	<br>
		<label>Lista de administradores</label>
		<table class="table tab-border">	
						<thead>
							<td>No.</td>
							<td>Estado</td>
							<td>Nombre</td>
							<td>Correo</td>
							<td>Dirección</td>
							<td>Telefono</td>
							<td>Fecha ingreso</td>
							<td>Editar</td>
							<td>Eliminar</td>
						</thead>
			            <tbody>
			            	<?php  foreach($administradores as $row): ?>
					        <tr data-id="<?=$row->id;?>">
					        	<td><?=$row->id;?></td>
					            <td><?=$row->estado;?></td>
					            <td><?=$row->nombre;?></td>
					            <td><?=$row->correo;?></td>
					            <td><?=$row->direccion;?></td>
					            <td><?=$row->telefono;?></td>
					            <td><?=$row->fecha;?></td>
					            <td><button class="btn-info btn btn-lg btn-editar"  data-toggle="modal" data-target="#myModal2" data-id="<?=$row->id;?>">Editar</button></td>
					            <td><button class="btn-danger btn btn-lg btn-eliminar" id="btn-eliminar" data-toggle="modal" data-target="#myModal3" data-id="<?=$row->id;?>">Eliminar</button></td>
					        </tr>
						    <?php endforeach;?>
	                    </tbody>
	                </table>
</div>
<!--main page chit chating end here-->
<!--main page chart start here-->
<div class="main-page-charts">
   
 </div>
<!--main page chart layer2-->
<!--climate start here-->
<!--climate end here-->
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2018. All Rights Reserved | Design by VJL </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="#"><i class="fa fa-cogs"></i><span>Mantenimientos</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		          	<li><a href="administradores">Administradores</a></li>
		            <li><a href="catedraticos">Catedráticos</a></li>
		            <li><a href="estudiantes">Estudiantes</a></li>		            
		          </ul>
		        </li>
		        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Cursos</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		          	<li id="menu-arquivos" ><a href="creacion">Creación</a></li>
		            <li id="menu-mensagens" style="width: 120px" ><a href="asignacion">Asignación</a>		              
		            </li>
		            <li id="menu-arquivos" ><a href="typography.html">Reportes</a></li>
		            
		          </ul>
		        </li>
		        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Cursos - Catedráticos</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		          	<li id="menu-arquivos" ><a href="icons.html">Tareas</a></li>
		            <li id="menu-mensagens" style="width: 120px" ><a href="buttons.html">Actividades</a>		              
		            </li>
		            <li id="menu-arquivos" ><a href="typography.html">Notas</a></li>
		            
		          </ul>
		        </li>
		        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Cursos - Estudiantes</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		          	<li id="menu-arquivos" ><a href="icons.html">Tareas</a></li>
		            <li id="menu-mensagens" style="width: 120px" ><a href="buttons.html">Actividades</a>		              
		            </li>
		            <li id="menu-arquivos" ><a href="typography.html">Notas</a></li>
		            
		          </ul>
		        </li>
		        <!--   <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>
		        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="login.html">Login</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>		           
		          </ul>
		        </li> -->
		        
		        <!-- <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li> -->
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Mensajes</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="inbox.html">Bandeja de entrada</a></li>
			            <li id="menu-academico-boletim" ><a href="inbox-details.html">Crear nuevo mensaje</a></li>
		             </ul>
		        </li>
		         <!-- <li><a href="#"><i class="fa fa-cog"></i><span>System</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="404.html">404</a></li>
			            <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>
		             </ul>
		         </li> -->
		         <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="product.html">Product</a></li>
			            <li id="menu-academico-boletim" ><a href="price.html">Price</a></li>
		             </ul>
		         </li> -->
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });

jQuery(document).ready(function($){
	var id = 0
	$(".btn-eliminar").on("click",function(){
		console.log("entro");
		id = $(this).data("id");
		console.log(id);
	});

	$(".btn-editar").on("click",function(){
		console.log("entro");
		id = $(this).data("id");
		console.log(id);
		$.ajax({
            url:        'admin/administradores/'+id,
            type:       'GET',
        })
        .done(function(response){
            if (response.result) {
            	console.log(response.records);
                toastr['success'](response.message, 'Éxito');
                $("#form-editar #nombre").val(response.records.nombre);
                $("#form-editar #correo").val(response.records.correo);
                $("#form-editar #fecha").val(response.records.fecha);
				$("#form-editar #direccion").val(response.records.direccion);
				$("#form-editar #estado").val(response.records.estado);
				$("#form-editar #telefono").val(response.records.telefono);
			} else {
                toastr['error'](response.message, 'Error');
            }
        })
        .fail(function(response){
            toastr['error'](response.message, 'Error');
        })
        .always(function(){ $('#loader').fadeOut(); })
	});

	$("#delete").on("click",function(){
		$.ajax({
            url:        'admin/administradores/'+id,
            type:       'DELETE',
        })
        .done(function(response){
            if (response.result) {
                toastr['success'](response.message, 'Éxito');
                $("#form-crear").modal('hide'); 
               window.location.reload();
            } else {
                toastr['error'](response.message, 'Error');
            }
        })
        .fail(function(response){
            toastr['error'](response.message, 'Error');
        })
        .always(function(){ $('#loader').fadeOut(); })
	});
	
	$("#registrar").on("click",function(){
		console.log("entro");
		$.ajax({
            url:        'admin/administradores',
            type:       'POST',
            dataType:   'json',
            data:       $('#form-crear').serialize()
        })
        .done(function(response){
            if (response.result) {
                toastr['success'](response.message, 'Éxito');
                $("#form-crear").modal('hide'); 
               window.location.reload();
            } else {
                toastr['error'](response.message, 'Error');
            }
        })
        .fail(function(response){
            toastr['error'](response.message, 'Error');
        })
        .always(function(){ $('#loader').fadeOut(); })

	});

	$("#btn-editar").on("click",function(){
		console.log("entro");
		$.ajax({
            url:        'admin/administradores/'+id,
            type:       'PUT',
            dataType:   'json',
            data:       $('#form-editar').serialize()
        })
        .done(function(response){
            if (response.result) {
                toastr['success'](response.message, 'Éxito');
                $("#form-crear").modal('hide'); 
               window.location.reload();
            } else {
                toastr['error'](response.message, 'Error');
            }
        })
        .fail(function(response){
            toastr['error'](response.message, 'Error');
        })
        .always(function(){ $('#loader').fadeOut(); })

	});

});
</script>
<!--scrolling js-->
		<script src="admin/js/jquery.nicescroll.js"></script>
		<script src="admin/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="admin/js/bootstrap.js"> </script>
<script src="admin/js/toastr.js"></script>
<!-- mother grid end here-->
</body>
</html>                     