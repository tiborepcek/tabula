<!DOCTYPE html> 
 
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='sk' lang='sk' xmlns:fb='http://ogp.me/ns/fb#'> 
	<head>
<?php
require_once "inc.funcs.php";
echo $head;
?>
		
		<title>Tabuľa @ esslm.sk - Návod</title>
	</head>
	
	<body>

<?php
echo $FBcommentsJSSDK;
?>
	
		<div id='wrap'>
<?php
echo $header;
?>			

			<div id='content'>
<?php
echo $menu;
?>				
				
				<div class='right'> 
					<h2>Návod</h2>
					<p>Tu sa dozviete, čo ponúkajú tieto poznámky a ako s nimi pracovať. Stránky sú členené na tieto časti:</p>
					<ul>
						<li><strong>Text</strong> - poznámky sa snažím kompletizovať tak, aby v nich bolo len nevyhnutné množstvo textu;</li>
						<li><strong>Obrázky</strong> - dopĺňajú text a slúžia na názornejší popis veci;</li>
						<li><strong>Video</strong> - vo forme videonávodov približujem hlavne prácu s programami;</li>
						<li><strong>Otázky a úlohy</strong> - určené na overenie pochopenia jednotlivých častí kapitol (stránok), pričom po niektorých otázkach nasleduje aj skrytá odpoveď;</li>
						<li><strong>Interaktívne kvízy</strong> - slúžia na overenie pochopenia celej kapitoly (stránky) a sú umiestnené vždy na konci;</li>
						<li><strong>Predpripravené programy</strong> - niektoré programy, ktoré budeme používať, tu nájdete nastavené presne tak, ako ich budeme potrebovať a rozoznáte ich podľa odkazu (linku) <span class='localdl'>so žltým pozadím</span>.</li>
					</ul>
					<p>Ideálny postup pri používaní týchto poznámok je jednoduchý: čítate/pozeráte od začiatku do konca a postupne riešite všetky otázky a úlohy + na konci si overíte pochopenie základných informácií pomocou interaktívneho kvízu.</p>
					<p>Žiaci majú možnosť kedykoľvek počas školského polroka komentovať všetky kapitoly (stránky), čím môžu vylepšiť svoje polročné hodnotenie a kvalitu týchto poznámok. Ku komentárom viac na stránke <a href='komentare.php'>Komentáre</a>.</p>
					<p>Predovšetkým <strong>pre učiteľov</strong> som v rámci výzvy MPC BB spísal osvedčenú pedagogickú skúsenosť pod názvom <a href='http://mpc-edu.sk/shared/Web/OPSOSO%20III.%20kolo%20vyzvy%20na%20poziciu%20Odborny%20poradca%20vo%20vzdelavani/OPS_Repcek%20Tibor%20-%20Vyuzitie%20internetu%20pri%20vyucovani%20informatiky.pdf'>Využitie internetu pri vyučovaní informatiky</a> (dokument vo formáte PDF), ktorá má slúžiť ako podrobný návod na použitie tohto projektu pri učení (sa).</p>
<?php
echo $komentare;
?>

					<p><!-- start facebook comments -->
						<fb:comments href='<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>' publish_feed='<?php echo $FBcommentsPublishFeed; ?>' width='<?php echo $FBcommentsWidth; ?>' num_posts='<?php echo $FBcommentsNumPosts; ?>'></fb:comments>
					</p><!-- end facebook comments -->
				</div><!-- end .right -->
				
				<div style='clear: both;'> </div>
			</div><!-- end #content -->

<?php
echo $footer;
?>
		
		</div><!-- end #wrap -->
		
<?php
echo $googleAnalytics;
?>
		
	</body>
</html>
