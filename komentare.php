<!DOCTYPE html> 
 
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='sk' lang='sk' xmlns:fb='http://ogp.me/ns/fb#'> 
	<head>
<?php
require_once "inc.funcs.php";
echo $head;
?>
		
		<title>Tabuľa @ esslm.sk - Komentáre</title>
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
					<h2>Komentáre</h2>
					<p>Komentáre cez Facebook na týchto stránkach slúžia hlavne na vylepšenie výsledkov žiakov z informatiky a na zvýšenie kvality samotných poznámok. Pridávať komentáre by teda mali predovšetkým žiaci, s ktorými mám informatiku. Ktokoľvek ale má možnosť komentovať, pokiaľ dodrží tieto pravidlá:</p>
					<ul>
						<li><strong>Konštruktívna kritika</strong> - napíšte, v čom vidíte nedostatky, ale napíšte aj to, ako by sa tie nedostatky dali odstrániť;</li>
						<li><strong>Inými slovami</strong> - ak si myslíte, že by sa niečo dalo povedať menej komplikovane a rozumeli by tak poznámkam aj menej pokročilí;</li>
						<li><strong>Doplňte, čo chýba</strong> - ak si myslíte, že na nejakej stránke chýbajú informácie, ktoré určite treba vedieť;</li>
						<li><strong>Opravte chybu</strong> - na chybách sa dá veľa naučiť, tak ich odhaľujme ;);</li>
					</ul>
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
