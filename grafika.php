<!DOCTYPE html> 
 
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='sk' lang='sk' xmlns:fb='http://ogp.me/ns/fb#'> 
	<head>
<?php
require_once "inc.funcs.php";
echo $head;
?>
		
		<title>Tabuľa @ esslm.sk - grafika</title>
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
					<h2>Grafika</h2>
					<p>Rozoznávame <strong>2 druhy grafických súborov:</strong></p>
					<ol>
						<li><strong>Rastrové (bitmapové)</strong> grafické súbory - Takýto druh grafického súboru môže mať prípony JPG, GIF, PNG, BMP, ...</li>
						<li><strong>Vektorové</strong> grafické súbory - Takýto druh grafického súboru môže mať prípony SVG, SWF, ...</li>
					</ol>
					<p><strong>Rozdiel</strong> medzi týmito grafickými súbormi je v kvalite. Rastrová (bitmapová) grafika pri zväčšení stráca kvalitu (objavujú sa štvorčeky - tzv. pixle) a vektorová grafika pri akomkoľvek zväčšení nestráca kvalitu. Stratu kvality môžete sledovať na porovnaní: <a href='http://sk.wikipedia.org/wiki/S%C3%BAbor:Bitmap_VS_SVG.svg'>http://sk.wikipedia.org/wiki/S%C3%BAbor:Bitmap_VS_SVG.svg</a>.</p>
					<p><strong>Pixel</strong> (skratka anglických slov &ldquo;picture element&rdquo;, skracované na <strong>px</strong>) je najmenšia jednotka digitálnej rastrovej (bitmapovej) grafiky a je jednoznačne určený svojou polohou (súradnice) a farbou. Viac informácií na <a href='http://sk.wikipedia.org/wiki/Pixel'>slovenskej</a> alebo <a href='http://cs.wikipedia.org/wiki/Pixel'>českej</a> (podrobnejšie a s obrázkami) wikipedii.</p>
					<p><strong>DPI</strong> (Dots per inch = počet bodov resp. pixelov na palec) udáva počet bodov (pixelov) v jednom riadku/stĺpci na jednotku dĺžky jeden palec (inch) čo je približne 2,54 cm. Ide v podstate o kvalitu obrázku. Čím väčšie DPI, tým väčšia kvalita. Viac na <a href='http://sk.wikipedia.org/wiki/Dots_per_inch'>wikipedia.sk</a>.</p>
					<p><strong>Otázka:</strong> <em>Kde v praxi sa vďaka svojim vlastnostiam môže využiť rastrová a kde vektorová grafika?</em></p>
					<p><strong>Odpoveď:</strong> <a href='javascript:unhide("odpoved1");'>Zobraziť / Skryť</a> <span id='odpoved1' class='hidden'>Rastrová grafika sa v praxi môže využiť napríklad na internetových stránkach (pozri tu o odsek nižšie) a vektorová napríklad na veľkých billboardoch ako reklama.</span></p>
					<a name='photofiltre'></a>
					<p>My budeme pracovať len s rastrovou (bitmapovou) grafikou, a to v programe <span class='localdl'><a href='PhotoFiltre_6.3.2_cz.zip'>PhotoFiltre</a></span>. Predvedieme si v ňom <strong>základné úpravy (editovanie)</strong> tejto grafiky - napríklad: Zväčšenie/zmenšenie veľkosti obrázku, otočenie obrázku, vystrihnutie/nahradenie (retušovanie) určitej časti obrázku, pridávanie vystrihnutej časti obrázku do iného obrázku, pridávanie textu, ... Tu je praktický príklad s niekoľkými už menovanými úpravami:</p>
					<p style='text-align: center'><img src='grafika-uprava.jpg' alt='Upravená rastrová (bitmapová) grafika' /></p>
					<p><strong>Otázky:</strong> <em>Ktoré úpravy som použil (nájdite 2 rozdiely)? Potrebovali ste už niekedy obrázok takto upraviť (editovať)? Kde by sa takéto úpravy dali využiť v praxi?</em></p>
					<p><strong>Odpovede:</strong> <a href='javascript:unhide("odpoved2");'>Zobraziť / Skryť</a> <span id='odpoved2' class='hidden'>Rozdiely: Zelený list vpravo hore a v strede hore. V praxi sa takéto úpravy (retušovanie) bežne používajú napríklad pri úprave pokožky modeliek (pozri fotky v časopisoch).</span></p>
					<p><strong>Videonávod</strong> ukazuje, ako sa spomínané úpravy v programe PhotoFiltre dajú zrealizovať (červená = ľavé tlačidlo myši; modrá = pravé tlačidlo myši):</p>
					<p style='text-align: center'><iframe width="560" height="315" src="https://www.youtube.com/embed/XSI1Jtf4afE" frameborder="0" allowfullscreen></iframe></p>
					<p><strong>Videonávod</strong> zobrazuje aj prácu s dvoma grafickými súbormi (červená = ľavé tlačidlo myši; modrá = pravé tlačidlo myši):</p>
					<p style='text-align: center'><iframe width="560" height="315" src="https://www.youtube.com/embed/9DGRwbQ2wa4" frameborder="0" allowfullscreen></iframe></p>
					<p>Osobitne dôležitý je pre nás <strong>rastrový (bitmapový) súbor s príponou GIF</strong>, pretože tento formát umožňuje vytvárať animovanú (dynamickú, meniacu sa, pohyblivú) rastrovú (bitmapovú) grafiku. Súbory s príponou GIF môžu obsahovať aj viac ako len jeden obrázok. Ako príklad som na adrese <a href='http://make-animation.com/'>make-animation.com</a> spojil nižšie zobrazené 3 obrázky (t. j. 3 grafické súbory) ...</p>
					<p style='text-align: center'><img src='bitmap_1.jpg' alt='Rastrový (bitmapový) súbor číslo 1' style='border: 1px solid black;' />&nbsp;&nbsp;&nbsp;<img src='bitmap_2.jpg' alt='Rastrový (bitmapový) súbor číslo 2' style='border: 1px solid black;' />&nbsp;&nbsp;&nbsp;<img src='bitmap_3.jpg' alt='Rastrový (bitmapový) súbor číslo 3' style='border: 1px solid black;' /></p>
					<p>... do jednej animovanej rastrovej (bitmapovej) grafiky (súbor bitmap-animated.gif):</p>
					<p style='text-align: center'><img src='bitmap-animated.gif' alt='Animovaná rastrový (bitmapový) súbor' style='border: 1px solid black;' /></p>
					<p><strong>Otázka:</strong> <em>Viete uviesť príklady z praxe, v ktorých by bolo vhodné použiť animovanú rastrovú (bitmapovú) grafiku?</em></p>
					<p><strong>Odpoveď:</strong> <a href='javascript:unhide("odpoved3");'>Zobraziť / Skryť</a> <span id='odpoved3' class='hidden'>Predstavte si, že máte k dispozícii malú plochu (napr. 50 x 50 pixelov), na ktorej treba zobraziť čo najviac informácií. Keď sa na takejto malej ploche striedajú obrázky, môžete za pár sekúnd podať veľa informácií. Viac info na <a href='http://en.wikipedia.org/wiki/Web_banner#Standard_sizes'>Wikipédii</a>.</span></p>
					<p><strong>Kvíz:</strong> <em>Myslíte si, že sa v tejto téme vyznáte? Pomôže vám to overiť <a href='kviz-grafika.html'>kvíz o grafike</a>.</em></p>
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
