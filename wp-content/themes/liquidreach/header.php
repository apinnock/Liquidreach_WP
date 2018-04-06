<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<?php 
		$url = get_template_directory_uri();
		$url .= '/img/Liquidreach.svg';
	?>

	<header>
		<a id="logo" href="/"><img src="<?php echo $url; ?>" alt="logo" width="132" height="49"></a>

		 <div class="wrapper-takeover">    
                <div id="takeover">
                    <div id="overlay"></div>
                    <nav>
                        <?php wp_nav_menu( array(
                        	'theme_location'  => 'liquidreach',
                        	'menu'            => 'header_nav',
                        	'container'       => '',
                        ) ); ?>
                    </nav>

                    <div id="info">
                        <div>
                            <hr class="close">
                            CONTACT
                        </div>

                        <address class="overwrite">
                            <span>NEW YORK</span>
                            <div class="first">
                                45 Rockefeller Plaza <br/>
                                Suite 2000 <br/>
                                New York, NY 10111 <br/>
                                <a href="tel:6467270943">(646) 727-0943</a>
                            </div>
                        </address>

                        <address>
                            <span>ORLANDO</span>
                            <div>
                                801 N. Magnolia Ave. <br/>
                                Suite 210 <br/>
                                Orlando, FL 32803 <br/>
                                <a href="tel:4074017479">(407) 401-7479</a>
                            </div>
                        </address>

                        <address>
                            <span>BALTIMORE</span>
                            <div>
                                111 South Calvert Street <br/>
                                Suite 2700 <br/>
                                Baltimore, MD 21202 <br/>
                                <a href="tel:4074017479">(407) 401-7479</a>
                            </div>
                        </address>

                        <address>
                            <span>NEW ORLEANS</span>
                            <div>
                                3014 Dauphine Street <br/>
                                New Orleans, LA 70117 <br/>
                                <a href="tel:4074017479">(407) 401-7479</a>
                            </div>
                        </address>

                        <ul id="social-media" class="clearfix">
                            <li><a class="facebook" href="https://www.facebook.com/liquidreach" target="_blank"></a></li>
                            <li><a class="linkedin" href="https://www.linkedin.com/company-beta/236812/" target="_blank"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mobile-btns">
                <div></div>
                <div></div>
                <div></div>
            </div>
	</header>

	<section id="banner" aria-label="banner" class="sub-banner">
        
        <?php the_post_thumbnail(); ?>

        <div id="banner-text">
            <h1><?php wp_title( '' ); ?></h1>
        </div>
    </section>
	
	<main>

