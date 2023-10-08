<html <?php language_attributes(); ?>>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8123166908748705"
     crossorigin="anonymous"></script>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
		<meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
		<meta name="viewport" content="width=device-width" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<link rel="shortcut icon" href="<?php echo (get_option('favicon')) ? get_option('favicon') : get_template_directory_uri().'/images/icon.png' ?>" type="image/x-icon" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo (get_option('warna')) ? get_option('warna') : 'default' ?>.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
		<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.min.js'></script>
		<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/newstickers.js'></script>
		<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/accordion.js'></script>
		<?php wp_head(); ?>
		<script>
        $(function(){
           $("ul#kampus-ticker").liScroll();
        });
        </script>
		<script type="text/javascript">
	    	$(document).ready(function () {
	    		$('ul').accordion();
	     	});
		</script>
		<script type="text/javascript">
    		$("document").ready(function($){
	    		$(".accordion").slideUp();
				$(".open").click(function(){
		    		$(".accordion").slideToggle();
				});
			});
		</script>
		
		<script type="text/javascript">
    		$("document").ready(function($){
	    		$(".mob").slideUp();
				$(".open").click(function(){
		    		$(".mob").slideToggle();
					$(".ndsearch").css("display", "none");
				});
				$(".ops").click(function(){
		    		$(".ndsearch").css("display", "block");
					$(".ops").css("display", "none");
				});
			});
		</script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo (get_option('apikey')) ? get_option('apikey').'' : '' ?>" type="text/javascript"></script>
	
	<script>
    	var myCenter=new google.maps.LatLng(<?php echo (get_option('maps')) ? get_option('maps').'' : '-5.932330,105.992419' ?>);
		function initMap() {
	    	var mapProp = {
			center:myCenter,
			zoom:15,
			mapTypeId:google.maps.MapTypeId.ROADMAP
	    	};
		
    		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    		var marker=new google.maps.Marker({
        		position:myCenter,
    			title: 'Click to zoom',
    			icon:"<?php echo get_template_directory_uri(); ?>/images/maps.png"
    		});
		
	    	marker.setMap(map);
		}
		google.maps.event.addDomListener(window, 'load', initMap);
	</script>
		
	
	
	<!-- Tema Akademi dari MAIN-CSS.COM - 10 Rilis Juli 2017 -->

	</head>
	<body>
				<div class="mob <?php echo (get_option('nofixed')) ? get_option('nofixed') : 'fixed' ?>">
		    			<?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => 'div', 'container_class' => 'mobi', 'menu_class' => 'accordion', 'menu_id' => 'acc', 'fallback_cb' => false)); ?>
		    	</div>
		<div class="wrapper <?php echo (get_option('nofixed')) ? get_option('nofixed') : 'fixed' ?>">
		    <div class="nav-akademi <?php echo (get_option('nofixed')) ? get_option('nofixed') : 'fixed' ?>">
			    <div class="nav-inn clear">
				    <div class="open">
					    <span><?php echo (get_option('sekolah')) ? get_option('sekolah').'' : 'SMA Negeri 12 Sumber Jaya' ?></span>
					</div>
			    	<div class="inn">
		    			<?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => 'div', 'container_class' => 'nav', 'menu_class' => 'dd', 'menu_id' => 'dd', 'fallback_cb' => false)); ?>
		    		</div>
	    			<div class="ndsearch">
	    	    		<?php get_search_form(); ?>
		    		</div>
					<i class="ops fa fa-search"></i>
				</div>

				
			</div>
			<div class="header clear">
				<div class="logo">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri().'/images/logo.png' ?>" alt="<?php bloginfo('name'); ?>"/></a>
				</div>
				<div class="headr">
				    <div class="kontak">
					    <div>
						<?php if (get_option('facebook')) { ?>
						<a href="<?php echo (get_option('facebook')) ? get_option('facebook').'' : '' ?>" target="_blank">
						    <i class="fa fa-facebook"></i>
						</a>
						<?php } ?>
						<?php if (get_option('twitter')) { ?>
						<a href="<?php echo (get_option('twitter')) ? get_option('twitter').'' : '' ?>" target="_blank">
						    <i class="fa fa-twitter"></i>
						</a>
						<?php } ?>
						<?php if (get_option('google')) { ?>
						<a href="<?php echo (get_option('google')) ? get_option('google').'' : '' ?>" target="_blank">
						    <i class="fa fa-google-plus"></i>
						</a>
						<?php } ?>
						<?php if (get_option('youtube')) { ?>
						<a href="<?php echo (get_option('youtube')) ? get_option('youtube').'' : '' ?>" target="_blank">
						    <i class="fa fa-youtube"></i>
						</a>
						<?php } ?>
						<?php if (get_option('email')) { ?>
						<a href="mailto:<?php echo (get_option('email')) ? get_option('email').'' : '' ?>" target="_blank">
						    <i class="fa fa-envelope"></i>
						</a>
						<?php } ?>
						<a href="<?php echo home_url(); ?>/feed/" target="_blank">
						    <i class="fa fa-feed"></i>
						</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="tickercontainer">
				<div id="infotit">
			    	SEKILAS INFO <i class="fa fa-angle-right"></i> 
				</div>
				<div class="infotim">
		    		<div class="ticker-title"><?php if (! is_front_page()) { echo '<span id="time"></span>:<span id="minu"></span> <span id="secs"></span> -'; } ?>
				    	<?php echo date_i18n('l, d-m-Y',time()); ?>
					</div>
				</div>
				
				<div class="mask">
	    			<?php query_posts('post_type=sekilas-info&showposts=3'); ?>
				    	<?php if (have_posts()) { ?>
	    	                <ul id="kampus-ticker" class="newstickers">
	    	                	<?php while (have_posts()): the_post(); ?>
	                                <li><span><?php the_time(); ?></span> / <?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 55); ?></li>
	     	                	<?php endwhile; ?>
                            </ul>
	    		        <?php } else { ?>
						    <ul id="kampus-ticker" class="newstickers">
	                                <li><span>3 detik yang lalu</span> / Untuk menambahkan running text silahkan ke Dashboard > Sekilas Info</li>
                            </ul>
						<?php } ?>
					<?php wp_reset_query(); ?>
	    		</div>
				
	    	</div>
			
			<?php if (is_front_page()) { 
	    		echo '<div id="ndeslide">'; 
	        	    get_template_part('slider'); 
		    	echo '</div>'; 
			} ?>
			
			<?php if (function_exists('dimox_breadcrumbs')) {
    			dimox_breadcrumbs();
			}			?>
			
			<!-- Container -->
			<div id="container" class="clear">
