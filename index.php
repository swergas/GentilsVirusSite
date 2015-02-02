<?php
    //params
    $title = "Les gentils virus pour la democratie";
    $description = "site des gentils virus";
        
    $nav = array("Accueil", "Le constat", "Les solutions", "Participez !", "Actualités");
    $nav_links = array("/index.php", "/le_constat.php", "/les_solutions.php", "/participez.php", "/actualites.php");
    $nav_active = 0;
        
    $span_size = 8;
    $h1 = "Accueil";

    $bloc_video = true;
    $bloc_newsletter = true;
?>

<?php include("structure/beforeContent.php");?>

<article>
			<h1>Accueil</h1>

<p>
Bienvenue sur le site des Gentils Virus !
</p>

<p>
<strong>
Les quoi ?
</strong>
</p>
<p>
Les Gentils Virus sont tous ceux qui pensent que :
<ul>
	<li>
		nous ne sommes pas dans une vraie démocratie, parce que nous ne pouvons qu'&eacute;lire des ma&icirc;tres qui d&eacute;cideront tout &agrave; notre place
	</li>
	<li>
		de nombreux problèmes de notre société sont la conséquence de l'impuissance politique des citoyens, et seraient résolus depuis longtemps si le peuple pouvait vraiment y faire quelque chose
	</li>
	<li>
		il nous faut absolument une vraie démocratie pour pouvoir résoudre ces problèmes
	</li>
	<li>
		il faut en parler autour de soi pour réveiller les citoyens qui sommeillent en nous tous, de sorte à ce que l'on soit nombreux à exiger une vraie démocratie
	</li>
</ul>
Nous essayons donc de donner aux gens le virus de la démocratie, d'où le nom "Gentils Virus".
</p>

<p>
	Si vous êtes nouveau sur le site, nous vous recommandons de commencer votre visite par la rubrique "<a href="le_constat.html">Le constat</a>", qui nous l'espérons arrivera à vous convaincre :).
</p>
<br/>

<p>
  Si vous voulez bavarder avec nous, passez nous voir sur le <a href="http://wiki.gentilsvirus.org/index.php/IRC" target="_blank">tchat</a>.
</p>


<p>
	Nous nous situons principalement en France, mais pas seulement :
</p>
<div style="text-align: center;">
	<iframe width="100%" height="370" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps/ms?msid=214181334946322400499.0004da38c3cf1855c495c&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;ll=22.593726,14.765625&amp;spn=151.233578,80.15625&amp;z=1&amp;output=embed"></iframe><br /><small>Voir la <a href="https://maps.google.fr/maps/ms?msid=214181334946322400499.0004da38c3cf1855c495c&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;ll=30.145127,1.40625&amp;spn=149.376326,298.828125&amp;z=1&amp;source=embed" target="_blank">carte des Gentils Virus dans le monde</a> en plus grand (et vous pouvez vous y ajouter !)</small>
</div>
	
</article>

<?php include("structure/afterContent.php");