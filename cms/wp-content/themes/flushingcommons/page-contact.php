<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Exchange
 * @since Twenty Fifteen 1.0
 * template Name: Contact
 */
global $seccion;
$seccion="contact";
get_header(); ?>
    <body class="Contact">
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <div class="bg-nav large-12 medium-12 small-12">
                <?php get_template_part("inc/nav","header"); ?>

            <section class="main-section">


<main id="top" role="main" class="contact">
	<div class="pattern"></div>
	<div class="row">

		<h1 class="title-40"><?php _e("Contact Us","flushing");?></h1>

		<section class="content-form">

			<div class="large-6 medium-6 column content-left">

				<form id="contact-form" action="<?php echo DIR; ?>/contact.php" method="POST" enctype="multipart/form-data">

					<div class="row">
						<div class="large-12 medium-12 small-12 column">
							<label for="first"><?php _e("*Name","flushing");?></label>
						</div>
						<div class="large-4 medium-4 small-12 column">
							<input name="first" id="first" type="text" placeholder="<?php _e("First","flushing");?>" required/>
						</div>
						<div class="large-4 medium-4 small-12 column">
							<input name="middle" id="middle" type="text" placeholder="<?php _e("Middle","flushing");?>" required/>
						</div>
						<div class="large-4 medium-4 small-12 column">
							<input name="last" id="last" type="text" placeholder="<?php _e("Last","flushing");?>" required/>
						</div>
					</div>

					<div class="row">
						<div class="large-12 medium-12 small-12 column">
							<label for="address"><?php _e("*Address","flushing");?></label>
							<input name="address" id="address" type="text" required/>
						</div>
					</div>

					<div class="row less-label">
						<div class="large-4 medium-4 small-12 column">
							<input name="city" id="city" type="text" placeholder="<?php _e("City","flushing");?>" />
						</div>
						<div class="large-4 medium-4 small-12 column">
							<input name="state" id="state" type="text" placeholder="<?php _e("State","flushing");?>" />
						</div>
						<div class="large-4 medium-4 small-12 column">
							<input name="zip" id="zip" type="text" placeholder="<?php _e("Zip Code","flushing");?>" />
						</div>
					</div>

					<div class="row">
						<div class="large-4 medium-4 small-12 column">
							<label for="email"><?php _e("*Email","flushing");?></label>
							<input name="email" id="email" type="text" placeholder="<?php _e("Email","flushing");?>" required/>
						</div>
						<div class="large-4 medium-4 small-12 column">
							<label for="phone"><?php _e("*Phone","flushing");?></label>
							<input name="phone" id="phone" type="text" placeholder="<?php _e("Phone","flushing");?>" required/>
						</div>
						<div for="country" class="large-4 medium-4 small-12 columns">
	            <label for="country"><?php _e("Country","flushing");?></label>
	            <select name="country" id="country">
		            <option value="" disabled selected><?php _e("CHOOSE ONE","flushing");?></option>
		            <option value="United States">United States</option>
		            <option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua &amp; Deps">Antigua &amp; Deps</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia Herzegovina">Bosnia Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina">Burkina</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Central African Rep">Central African Rep</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo {Democratic Rep}">Congo {Democratic Rep}</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland {Republic}">Ireland {Republic}</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea North">Korea North</option><option value="Korea South">Korea South</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value=" {Burma}"> {Burma}</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="St Kitts &amp; Nevis">St Kitts &amp; Nevis</option><option value="St Lucia">St Lucia</option><option value="Saint Vincent &amp; the Grenadines">Saint Vincent &amp; the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
	    	  		</select>
	        	</div>
					</div>

					<div class="row">
						<div class="large-4 medium-5 small-12 column">
							<label for="address"><?php _e("Are you represented By a Broker?","flushing");?></label>
						</div>
						<div class="large-12 medium-12 small-12 column">
							<select name="broker" id="broker">
		            <option value="" disabled selected><?php _e("CHOOSE ONE","flushing");?></option>
		            <option value="yes"><?php _e("YES","flushing");?></option>
		            <option value="no"><?php _e("NO","flushing");?></option>
		          </select>
						</div>
					</div>

					<div class="row">
						<div class="large-6 medium-8 small-12 column">
							<label for="how_hear"><?php _e("How Did Your Hear About Flushing Commons?","flushing");?></label>
						</div>
						<div class="large-12 medium-12 small-12 column">
							<select id="how_hear" name="how_hear">
	              <option selected disabled value=""><?php _e("CHOOSE ONE","flushing");?></option>
	              <option value="newspaper"><?php _e("NEWSPAPER","flushing");?></option>
	              <option value="real_state"><?php _e("REAL STATE AGENT","flushing");?></option>
	              <option value="family_friend"><?php _e("FAMILY OR FRIEND","flushing");?></option>
	              <option value="wealth_manager_etc"><?php _e("WEALTH MANAGER/INVESTMENT ADVISOR/ LAWYER","flushing");?></option>
	              <option value="email_news"><?php _e("E-MAIL/NESWSLETTER","flushing");?></option>
	              <option value="internet"><?php _e("INTERNET","flushing");?></option>
	              <option value="other"><?php _e("OTHER","flushing");?></option>
	            </select>
						</div>
					</div>

					<div class="row">
						<div class="large-12 medium-12 small-12 column">
							<label for="comments"><?php _e("Comments","flushing");?></label>
							<textarea name="comments" id="comments" type="text"></textarea>
						</div>
					</div>

					<div class="row">
						<div class="large-push-6 medium-push-3 small-push-3 column">
							<button class="enviar" type="submit"><?php _e("SECURE YOUR PLACE","flushing");?><span></span></button>
							<p class="required"><?php _e("*Required","flushing");?></p>
						</div>
					</div>

				</form>

			</div>

			<div class="large-6 medium-6 column content-right">

				<div class="row">
					<div class="large-7 medium-12 column">
						<h2 class="title-40">
							136-20 38th Ave., 3G
							Flushing, NY 11354
						</h2>
						<h3 class="title-40 over-gris">
							Tel: <a href="tel:17183958266">1-718-395-8266</a>
						</h3>
					</div>
					<div class="large-5 medium-12 column icon-fulltonex"></div>
				</div>

				<div class="row content-map">
					<div class="map" id="map-canvas"></div>
				</div>
			</div>
		</section>
	</div>
	<div class="thank">
		<a class="close-reveal-modal close-thank" aria-label="Close">&#215;</a>
		<div class="row">
			<p><?php _e("Thank You for your interest in Flushing Commons. We will contact you shortly.","flushing");?></p>
		</div>
	</div>
</main>

<?php get_footer(); ?>
