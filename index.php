<?php get_header(); ?>
<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" width="<?php echo get_custom_header()->width; ?>" alt="" >
<div class="conteudo">
	<main>
		<section class="slide container">Slide</section>
		<section class="servicos container">Servicos</section>
		<section class="meio container">

			<div class="row">
				<aside class="barra-lateral col-md-3">Barra Lateral</aside>
				<div class="noticias col-md-9">
					<?php 
					if(have_posts()) : 
						while(have_posts()) : the_post();
					?>
						<h1><?php the_title(); ?></h1>
						<?php the_post_thumbnail(array(175,175)); ?>
						<p>Publicado em <?php get_the_date(); ?> por <?php the_author(); ?></p>						
						<p>Categorias: <?php the_category(' '); ?></p>
						<p><?php the_tags('Tags: ',', ') ?></p>
						<p><?php the_content(); ?></p>		
					<?php 
						endWhile;
						else:
					?>
						<p>Não tem nada para mostrar</p>
					<?php 
					endif 
					?>
				</div>
			</div>

		</section>
		<section class="mapa container">Mapa</section>
	</main>
</div>
<?php get_footer(); ?>
	