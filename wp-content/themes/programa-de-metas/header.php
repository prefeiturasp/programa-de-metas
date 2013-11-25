<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- icons -->
		<!--link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon"-->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			
		<!-- css + javascript -->
		<?php wp_head(); ?>
		<script type="text/javascript">
			var wpAjaxUrl = '<?php echo admin_url('admin-ajax.php');?>';
		</script>
		
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=540906732661113";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<meta property="og:type" content="site" />
		<meta property="og:title" content="Programa de Metas da Cidade de S�o Paulo" />
		<meta property="og:description" content="O esfor�o de elabora��o do Programa de Metas 2013-2016 foi o de ir al�m da lista de metas, apontando objetivos estrat�gicos, eixos estruturantes e articula��es territoriais sobre os quais se pretende alcan�ar resultados efetivos." />
		<meta property="og:image" content=<?php echo get_template_directory_uri(); ?>/img/logo-facebook.jpg" />
	</head>
	<body <?php body_class(); ?>>
		<div id="fb-root"></div>
		<!-- wrapper -->
		<!--div class="wrapper"-->
			<div class="mask"></div>
			<!-- header -->
			<header>
				<div class="content">
					<h1>
						<a href="http://planejasampa.prefeitura.sp.gov.br">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Planeja Sampa - Fazendo junto a cidade que a gente quer" name="Planeja Sampa - Fazendo junto a cidade que a gente quer">
						</a>
					</h1>
					<h2>
						<!-- Programa de Metas -->
					</h2>
				</div>
			</header>
			<!-- /header -->