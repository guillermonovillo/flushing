<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Exchange
 * @since Twenty Fifteen 1.0
 */
global $team;
?>

<footer>
	<div class="footer row">

		<div class="column-1 over-gris large-2 medium-2 column">
			<figure class="flushing"></figure>
			<figure class="fulltonex"></figure>
			<p>136-20 38th Ave., 3G
	Flushing, NY 11354
	Tel: <a href="tel:17183958266">1-718-395-8266</a></p>
		</div>

		<div class="column-2 over-gris large-push-1 medium-push-1 large-3 medium-3 column">
			<p>Developed By:</p>
			<figure class="f-t"></figure>
			<figure class="rockefeller"></figure>
			<figure class="aecom"></figure>
			<p>Flushing Commons All rights Reserved</p>
			<p><a id="legal" href="#">Legal Disclaimer</a> - <a href="http://global.bridgerconway.com/home/" target="_blank">Site Credits</a></p>
		</div>

		<div class="column-3 over-gris large-3 medium-3 column">
			<a class="scroll-top smooth" href="#top">To the top</a>
			<ul>
				<li><a  href="<?php echo $team; ?>">TEAM</a></li>
				
				<li><a  href="#">FAQ</a></li>
			</ul>
		</div>
		<div class="foo-mob text-center over-gris small-12 column">
			<p>Flushing Commons All rights Reserved</p>
			<p><a id="legal-1" href="#">Legal Disclaimer</a> - <a href="http://global.bridgerconway.com/home/" target="_blank">Site Credits</a></p>
		</div>
	</div>
	<div class="disclaimer">
		<a class="close-disclaimer close-reveal-modal"><span></span>&#215;</a>
		<div class="row">
			<p>
				Residential brochure, office brochure, tri-fold, website, Penthouse collection pamphlet, media table, video
				All photographs and renderings are for artistic representation purposes only. Sponsor has provided these renderings for the purpose of presenting prospective purchasers with possible views from certain Units within the Building when they are completed. Sponsor cannot guarantee the views from any specific Unit nor can Sponsor warrant whether any such views will be modified based upon future construction or demolition in the area. Kitchen and bathroom finishes vary by floor and unit. Sponsor makes no representations or warranties with respect to the Units, except as may be set forth in the Offering Plan. Sponsor reserves the right to make substitution of materials, equipment, fixtures and finishes in accordance with the terms of the Offering Plan. The complete offering terms are in an offering plan available from Sponsor. File No. CP130085. Sponsor: Flushing Commons Property Owner, LLC, 1221 Avenue of the Americas, 17th Floor, New York, New York 10020.
				Equal Housing Opportunity. <br><br>

				Residential, office floor plans (every one of it), office brochure, tri-fold, website, media table, floor plans on the TV screen connecting to broker's app
				All dimensions are approximate and subject to normal construction variances and tolerances. Square footage exceeds the usable floor area and includes columns, mechanical pipes shafts, shaftways, chaseways and conduits and other Common Elements. Sponsor reserves the right to make changes in accordance with the terms of the Offering Plan. Plans and dimensions may contain minor variations from floor to floor. The complete offering terms are in an offering plan available from Sponsor. File No. CP130085. Sponsor: Flushing Commons Property Owner, LLC, 1221 Avenue of the Americas, 17th Floor, New York, New York 10020. Equal Housing Opportunity.
			</p>
		</div>
	</div>
</footer>

            </section>
            <a class="exit-off-canvas"></a>
        </div>
    </div>
    <script type="text/javascript">
    	var path="<?php echo DIR; ?>";
    </script>
    <script src="<?php echo DIR; ?>/js/vendor/libraries.min.js"></script>

    <script src="<?php echo DIR; ?>/js/vendor/foundation.min.js"></script>

    <script src="<?php echo DIR; ?>/js/mapping.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerwithlabel/src/markerwithlabel.js"></script>
    <script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>

    <script src="<?php echo DIR; ?>/js/map.min.js"></script>
	<script type='application/javascript' src='<?php echo DIR; ?>/js/hammerjs/hammer.min.js'></script>
    <script type='application/javascript' src='<?php echo DIR; ?>/js/jquery.transit.min.js'></script>
  	<script type='application/javascript' src='<?php echo DIR; ?>/js/picker.js'></script>
    <script src="<?php echo DIR; ?>/js/app.min.js"></script>


  </body>
</html>
