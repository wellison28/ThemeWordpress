<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Curso WordPress</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
	
		<div class="barra-topo container">
			<div class="row">
				<div class="redes-sociais col-md-4">Redes Sociais</div>
				<div class="pesquisa col-md-8">Pesquisa</div>
			</div>
		</div>

		<div class="area-menu container">
			<div class="row">
				<div class="logo col-md-3">Logo</div>
				<div class="menu-principal col-md-9 text-right">
					<?php wp_nav_menu(array('theme_location' => 'meu_menu_principal')); ?>
				</div>
			</div>
		</div>

	</header>