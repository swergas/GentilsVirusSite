        </div>
        
        
        <!--bloc video-->
        <?php if($bloc_video == true){ ?>
        <div class="span4 niceblock">
			<h2 class="block-title">Explications en vidéo</h2>

			<form action="#" class="quick_explanation_video_form">

				J'ai &nbsp;
				<select class="quick_explanation_video_time_value">
					<option value="http://player.vimeo.com/video/52009258?title=0&amp;portrait=0&amp;badge=0&amp;color=ff9933">1 minute</option>
					<option value="http://www.youtube.com/embed/_XoBYJXbmZE">14 minutes</option>
					<option value="http://www.youtube.com/embed/oN5tdMSXWV8?feature=player_embedded">18 minutes</option>
					<option value="http://www.dailymotion.com/embed/video/xwq9dj">37 minutes</option>
					<option value="http://www.dailymotion.com/embed/video/xiyzhh">1 h 25 min</option>
					<option value="http://www.youtube.com/embed/TLjq25_ayWM?feature=player_detailpage">2 h 30 min</option>
				</select>
				<input type="submit" class="btn btn-success" value="C'est parti !" />
			</form>
		</div>
        <?php } ?>

        <!--bloc newsletter-->
        <?php if($bloc_newsletter == true){ ?>
        <div class="span4 niceblock">
            <h2 class="block-title">Abonnez-vous à la newsletter</h2>

            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
            <form action="http://gentilsvirus.us8.list-manage.com/subscribe/post?u=6e50b5ef3f07d6baf9d24a654&amp;id=6216750698" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                
            <div class="mc-field-group">
                <label for="mce-EMAIL"></label>
                <input type="email" value="" name="EMAIL" class="required email newsletter" id="mce-EMAIL" placeholder="votre_adresse@email.com">
            </div>
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response"></div>
                    <div class="response" id="mce-success-response"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div class="hidden_field"><input type="text" name="b_6e50b5ef3f07d6baf9d24a654_6216750698" tabindex="-1" value=""></div>
                <div class="clear"><input id="subscribe_button" type="submit" value="S'inscrire" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success"></div>
            </form>
            </div>

            <!--End mc_embed_signup-->

            <p>Nous envoyons environ une lettre par mois.</p>
            <p><a href="http://us8.campaign-archive2.com/home/?u=6e50b5ef3f07d6baf9d24a654&amp;id=6216750698">Voir les précédentes lettres d'information</a></p>

        </div>
        <?php } ?>
		
      </div>

      <!--footer-->
      <div class="footer">
        &copy; Les Gentils Virus
		- 
        Le texte des pages de ce site sont mis à disposition sous la <a href="http://creativecommons.org/licenses/by/3.0/fr/" target="_blank">Licence Creative Commons Attribution 3.0 France</a>.
      </div>

      <div class="bottom_menu">
      	<a href="a_propos.php">&Agrave; propos</a>
      	-
        <a href="contact.php">Contact</a>
        -
        <!-- footer a changer-->
      	<a href="http://github.com/swergas/GentilsVirusSite/commits/master.atom" title="Modifications récentes du site (flux Atom)"><img src="img/Rss-feed.svg.png" /></a>
      </div>

    </div> <!-- /container -->
    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

    <!-- Piwik -->
	<script type="text/javascript"> 
	  var _paq = _paq || [];
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
	    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://piwik.gentilsvirus.fr//";
	    _paq.push(['setTrackerUrl', u+'piwik.php']);
	    _paq.push(['setSiteId', 1]);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
	    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();

	</script>
	<noscript><p><img id="piwik_img" src="http://piwik.gentilsvirus.fr/piwik.php?idsite=1" alt="" /></p></noscript>
	<!-- End Piwik Code -->


  </body>
</html>
