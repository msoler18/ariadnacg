<?php 
/**
* Admin Template
*
* @package AriadnaShopApi
*/

namespace Ariadna\Templates;

?>

<div class="ms-dashboard-admin-wrapp">
	<div class="ms-dash-header">
		<div class="ms-dash-header-title">
			<h1>Configuración Ariadna Shop Api</h1>
		</div>
		<div class="ms-dash-header-logos">
			
		</div>
	</div>
	<div class="ms-dashboard-errors">
		<?php settings_errors(); ?>
	</div>
	<div class="ms-dash-admin-content">
		<form method="post" action="options.php">
			<?php 
				settings_fields( 'ariadna_options_group' );
				do_settings_sections( 'ariadna_api_conf' );
				submit_button();
			?>
		</form>
	</div>
	<div id="connection-check">
		<h2>Conectar con web service</h2>
		<p>
			Recuerda que cada vez que conectes el web service
			se actualizaran los productos de la BD, eliminando los productos
			en estado disabled, creando los nuevos y actualizando los actuales.
		</p>
		<div id="connection-result"></div>
		<button class="button button-primary" id="check-con">Conectar</button>
	</div>
</div>