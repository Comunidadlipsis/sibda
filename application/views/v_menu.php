<div class="container">
    <div class="navbar navbar-default navbar-inverse navbar-fixed-top menu_principal" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand " href="<?php echo base_url(); ?>index.php">SISTEMA SIBDA</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                   
                    <li class="active"><a target="_blank" href="telefonos.php">BASE DE TELEFONOS PRIMA</a></li>
					
                <!--
                    <li class="active"><a href="<?php echo site_url('c_usuario'); ?>">Cambiar contraseña</a></li>
					<li class="active"><a href="<?php echo site_url('c_reportes'); ?>">Base ACE PERU</a></li>
                -->
                <!--<li class="active"><a href="<?php echo site_url('c_agenda'); ?>">Mis agendados</a></li>
                    <li class="active"><a href="<?php echo site_url('c_venta'); ?>">Mis ventas</a></li>
                    <li class="active"><a href="<?php echo site_url('c_buscar'); ?>">Buscar</a></li>
				-->	
                    <?php if($_SESSION['PERMISO']=="ADMINISTRADOR"){?>
						<li class="active"><a target="_blank" href="buscar.php">BUSCAR CLIENTE</a></li>
						<li class="active"><a href="<?php echo site_url('c_usuario'); ?>">CREAR USUARIOS</a></li>
				<!--   
                       <li class="active"><a href="<?php echo site_url('c_configuracion'); ?>">Configuracion</a></li>
				-->	   
                     <?php }?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a onclick="cerrar_sesion()">SALIR DEL SISTEMA</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<script>
    function cerrar_sesion() {
        var ClosedSystem = confirm('¿Está seguro de cerrar sesión?');
        if (ClosedSystem) {
            location.href = '<?php echo base_url(); ?>index.php/c_login/cerrar_sesion_sistema';
        }
    }
</script>
