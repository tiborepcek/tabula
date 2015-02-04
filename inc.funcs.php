<?php
$head = <<<END
		<meta http-equiv='content-type' content='text/html; charset=utf-8' /> 
		<meta http-equiv='cache-control' content='no-cache' />
		<meta name='robots' content='index, follow, archive' /> 
		<meta name='author' content='Tibor Repček' /> 
		<meta name='description' content='Tabuľa @ esslm.sk - Poznámky pre žiakov/študentov Evanjelického gymnázia Juraja Tranovského (Predmet: INF, Učiteľ: Tibor Repček)' /> 
		<meta name='keywords' content='tabuľa, esslm.sk, poznámky, informatika, vyučovanie, učenie' /> 
		<link rel='bookmark' title='Tabuľa @ esslm.sk' href='http://esslm.sk/tabula/' />
		<link rel='stylesheet' href='http://www.google.com/cse/style/look/default.css' type='text/css' />
		<link rel='stylesheet' type='text/css' href='style.css' media='screen,projection,tv' />
		<script type='text/javascript'>
			 function unhide(divID) {
				 var item = document.getElementById(divID);
				 if (item) {
					item.className=(item.className=='hidden')?'unhidden':'hidden';
				 }
			 }
		 </script>
		<script src='http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php' type='text/javascript'></script>
		<script type='text/javascript'>FB.init('8aed2cc323f40b4d725b720d901ba717');</script>
END;

$header = <<<END
			<div id='header'>
				<h1><a href='index.php'>Tabuľa @ esslm.sk</a></h1>
				<h2>Poznámky pre žiakov/študentov Evanjelického gymnázia Juraja Tranovského (Predmet: INF, Učiteľ: Tibor Repček)</h2>
			</div><!-- end #header -->
END;

$menu = <<<END
				<div class='left'> 
					<h2>Projekt</h2>
						<ul>
							<li><a href='index.php'>O tabuli</a></li>
							<li><a href='vyvin.php'>Vývin projektu</a></li>
							<li><a href='komentare.php'>Komentáre</a></li>
							<li><a href='navod.php'>Návod</a></li>
						</ul>
					
					<h2>Príma (I.O)</h2>
						<ul>
							<!-- <li><a href='pocitac.php'>Počítač</a></li> -->
							<li><a href='sluzby_internetu.php'>Služby internetu</a></li>
							<li><a href='netiketa.php'>Netiketa</a></li>
							<li><a href='grafika.php'>Grafika</a></li>
							<li><a href='prezentacia.php'>Prezentácia</a></li>
							<li><a href='powerpoint.php'>PowerPoint</a></li>
							<li><a href='projekt-prima.php'>Projekt</a></li>
						</ul>

					<h2>Sekunda (II.O)</h2>
						<ul>
							<li><a href='subor.php'>Súbor</a></li>
							<li><a href='tabulkovy_procesor.php'>Tabuľkový procesor</a></li>
							<li><a href='email-rozsirene.php'>E-mail</a></li>
							<li><a href='vyhladavanie.php'>Vyhľadávanie</a></li>
							<li><a href='projekt-sekunda.php'>Projekt</a></li>
						</ul>
					
					<h2>Tercia (III.O)</h2>
						<ul>
							<li><a href='tabulkovy_procesor.php'>Tabuľkový procesor</a></li>
							<li><a href='odsek.php'>Odsek</a></li>
							<li><a href='tabulky.php'>Tabuľky</a></li>
							<li><a href='obrazky.php'>Obrázky</a></li>
							<li><a href='projekt-tercia.php'>Projekt</a></li>
						</ul>
					
					<h2>Kvarta (IV.O)</h2>
						<ul>
							<li><a href='vyhladavanie-rozsirene.php'>Vyhľadávanie</a></li>
							<li><a href='email-rozsirene.php'>E-mail</a></li>
							<li><a href='socialna_siet.php'>Sociálna sieť</a></li>
							<li><a href='projekt-kvarta.php'>Projekt</a></li>
						</ul>
					
					<h2>Kvinta (V.O)</h2>
						<ul>
							<li><a href='suborovy_manazer.php'>Súborový manažér</a></li>
							<li><a href='textovy_procesor.php'>Textový procesor</a></li>
							<li><a href='prezentacia.php'>Prezentácia</a></li>
							<li><a href='powerpoint.php'>PowerPoint</a></li>
							<li><a href='projekt-kvinta.php'>Projekt</a></li>
						</ul>

					<h2>Prváci</h2>
						<ul>
							<li><a href='grafika.php'>Grafika</a></li>
							<li><a href='inkscape.php'>Inkscape</a></li>
							<li><a href='prezentacia.php'>Prezentácia</a></li>
							<li><a href='powerpoint.php'>PowerPoint</a></li>
							<li><a href='projekt-prvaci.php'>Projekt</a></li>
						</ul>
					
					<h2>Druháci a sexta</h2>
						<ul>
							<li><a href='komunikacia.php'>Komunikácia</a></li>
							<li><a href='bezpecnost.php'>Bezpečnosť</a></li>
							<li><a href='html_a_css.php'>HTML a CSS</a></li>
							<li><a href='projekt-druhaci.php'>Projekt</a></li>
						</ul>
					
					<h2>Tretiaci a septima</h2>
						<ul>
							<li><a href='tabulkovy_procesor.php'>Tabuľkový procesor</a></li>
							<li><a href='druhy_informacii.php'>Druhy informácií</a></li>
							<li><a href='ochrana.php'>Ochrana</a></li>
							<li><a href='vyhladavanie-rozsirene.php'>Vyhľadávanie</a></li>
							<li><a href='email-rozsirene.php'>E-mail</a></li>
							<li><a href='forum-rozsirene.php'>Fórum</a></li>
							<li><a href='socialne_siete_a_html.php'>Sociálne siete</a></li>
							<li><a href='amara.php'>Amara.org</a></li>
							<li><a href='projekt-tretiaci.php'>Projekt</a></li>
						</ul>
				</div><!-- end .left -->
END;

$footer = <<<END
			<div id='footer'>
				<p>Designed by <a href='http://www.free-css-templates.com/'>Free CSS Templates</a>, Thanks to <a href='http://www.legalhelpers.com/chapter-13-bankruptcy/chapter13.html'>Chapter 13 Bankruptcy</a>, Edited by <a href='mailto:repcek&#64;esslm.sk'>Tibor Repček</a></p>
			</div><!-- end #footer -->
END;

$googleAnalytics = <<<END
		<script type='text/javascript'>
			var gaJsHost = (('https:' == document.location.protocol) ? 'https://ssl.' : 'http://www.');
			document.write(unescape('%3Cscript src='' + gaJsHost + 'google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E'));
		</script>
		<script type='text/javascript'>
			try {
			var pageTracker = _gat._getTracker('UA-6480797-1');
			pageTracker._trackPageview();
			} catch(err) {}
		</script>
END;

$highlighter = <<<END
			<script type='text/javascript'>var _hl=_hl||{};_hl.site='3129';(function(){var hl=document.createElement('script');hl.type='text/javascript';hl.async=true;hl.src=document.location.protocol+'//highlighter.com/webscript/v1/js/highlighter.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(hl,s);})();</script>
END;

$komentare = <<<END
					<p style='border-top: 1px solid gray; margin-top: 10px; padding-top: 5px'>Dalo by sa niečo vylepšiť? Mohlo by sa niečo povedať jednoduchšie / zrozumiteľnejšie? Niečo som zabudol? Prečítajte si <a href='komentare.php'>pravidlá komentovania</a> a doplňte ma v komentároch:</p>
END;

$FBcommentsJSSDK = <<<END
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=110770745644739";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
END;

$FBcommentsPublishFeed = "true";
$FBcommentsWidth = "568";
$FBcommentsNumPosts = "10";
?>
