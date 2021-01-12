<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Introspect</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?= theme("assets/css/main.css");?>" />
		<link rel="stylesheet" href="<?= theme("assets/css/styles.css");?>" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="<?= url("");?>" class="logo">introspect</a>
					<nav id="nav">
						<a href="<?= url("");?>">Home</a>
						<a href="<?= url("/generic");?>">Generic</a>
						<a href="<?= url("/elements");?>">Elements</a>
						<a href="<?= url("/termos"); ?>">Terms</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			<main class = "main_content">
			<?= $v->section("content"); ?>
			</main>
	<!--FOOTER-->
<footer class="main_footer">
  
        <section class="main_footer_content">
            <article class="main_footer_content_item">
                <h2>About:</h2>
                <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nunc eget blandit dignissim, 
                ex risus consectetur eros.</p>
                <a title="Termos de uso" href="<?= url("/termos"); ?>">Terms of Use</a>
            </article>

            <article class="main_footer_content_item">
                <h2>More:</h2>
                <a class="link transition radius" href="<?= url("");?>">Home</a>
                <a class="link transition radius" href="<?= url("/generic");?>">Generic</a>
                <a class="link transition radius" href="<?= url("/elements");?>">Elements</a>
				
            </article>

            <article class="main_footer_content_item">
                <h2>Contact:</h2>
                <p class="icon-phone"><b>Telephone:</b><br> +55 55 5555.5555</p>
                <p class="icon-envelope"><b>Email:</b><br> Introspect@introspect.com</p>
                <p class="icon-map-marker"><b>Address:</b><br> Derf, AF/Brazil</p>
            </article>

            <article class="main_footer_content_item social">
                <h2>Social:</h2>
                <a target="icons" class="icon fa-facebook"
                   href="https://www.facebook.com/" title="Facebook">/introspect</a>
				
				   <a target="_blank" class="icon fa-instagram"
				   href="https://www.instagram.com/" title="Instagram">@introspect</a>
				   
				   <a target="_blank" class="icon fa-twitter"
                   href="https://www.twitter.com/" title="Twitter">@introspect</a>
            </article>
        </section>
 
</footer>

		<!-- Scripts -->
<script src="<?= theme("/assets/js/jquery.min.js");?>"></script>
<script src="<?= theme("/assets/js/skel.min.js");?>"></script>
<script src="<?= theme("/assets/js/util.js");?>"></script>
<script src="<?= theme("/assets/js/main.js");?>"></script>




			

	</body>
</html>