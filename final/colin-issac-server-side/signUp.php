
<html>
  <head>
    <?php include 'includes/Links/mainLinks.php'?>
    <?php include 'includes/Links/signUpLinks.php'?>
  </head>

  <body>
    <?php include 'includes/HTMLcontents/header.php'?>

    <div class = "container">
      <div class = "row">
        <?php include 'includes/HTMLcontents/navigation.php'?>
      </div>
      <div class = "row">
        <div class = "col-md-8">
          <article>
			<h2>Customer Registration</h2>
			<br>
			<form method = "post" id="signUp" action='processUser.php'>
			<h3>User Info</h3>
			<hr/>
			<div class = "row">

					<div class = "form-group col-md-6">
						<label for="fName">First Name</label>
						<input type = "text" class = "form-control" id = "fName" placeholder= "Enter your first name" name = "fName">
					</div>
					<div class = "form-group col-md-6">
						<label for="lName">Last Name</label>
						<input type = "text" class = "form-control" id = "lName" placeholder= "Enter your last name" name = "lName">
					</div>
			</div>

			<div class = "row">
				<div class = "col-md-12">
						<label for = "email" class = "control-label">Email: </label>
						<input type = "email" class = "form-control" id = "email" placeholder = "Enter your email" name = "email">

				</div>
			</div>
			<br>
			<div class = "row">
					<div class = "form-group col-md-6">
						<label for="password">Password</label>
						<input type = "password" class = "form-control" id = "password" placeholder= "Enter password" name = "password">
					</div>
					<div class = "form-group col-md-6">
						<label for="passwordRepeat">Confirm Password</label>
						<input type = "password" class = "form-control" id = "confirmPassword" placeholder= "Confrim Password" name = "confirmPassword">
					</div>
			</div>

			<h3>Location</h3>
			<hr/>
			<div class = "row">
				<div class = "col-md-12">
						<label for = "address" class = "control-label">Address</label>
						<input type = "text" class = "form-control" id = "address" placeholder = "Enter address" name = "address">
				</div>
			</div>
			<br>
			<div class = "row">
				<div class = "col-md-12">
						<label for = "address2" class = "control-label">Secondary Address</label>
						<input type = "text" class = "form-control" id = "address2" placeholder = "Enter secondary address" name = "address2">
				</div>
			</div>
			<br>
			<div class = "row">
					<div class = "form-group col-md-6">
						<label for="city">City</label>
						<input type = "text" class = "form-control" id = "city" placeholder= "City Name" name = "city">
					</div>
					<div class = "form-group col-md-6">
						<label for="state">State</label>
						<input type = "text" class = "form-control" id = "state" placeholder= "Enter your State" name = "state">
					</div>
			</div>


			<div class = "row">
					<div class = "form-group col-md-6">
						<label for = "zipCode" class = "control-label">Zip Code</label>
						<input type = "text" class = "form-control" id = "zipCode" placeholder = "Enter Zip Code" name = "zipCode">
					</div>
					<div class = "form-group col-md-6">
						<label for="Country">Country</label>
						<select class = "form-control" id = "Country" name="Country">
							<option value="  " selected>please select a country</option>
						    <option value="AF">Afghanistan</option>
						    <option value="AL">Albania</option>
						    <option value="DZ">Algeria</option>
						    <option value="AS">American Samoa</option>
						    <option value="AD">Andorra</option>
						    <option value="AO">Angola</option>
						    <option value="AI">Anguilla</option>
						    <option value="AQ">Antarctica</option>
						    <option value="AG">Antigua and Barbuda</option>
						    <option value="AR">Argentina</option>
						    <option value="AM">Armenia</option>
						    <option value="AW">Aruba</option>
						    <option value="AU">Australia</option>
						    <option value="AT">Austria</option>
						    <option value="AZ">Azerbaijan</option>
						    <option value="BS">Bahamas</option>
						    <option value="BH">Bahrain</option>
						    <option value="BD">Bangladesh</option>
						    <option value="BB">Barbados</option>
						    <option value="BY">Belarus</option>
						    <option value="BE">Belgium</option>
						    <option value="BZ">Belize</option>
						    <option value="BJ">Benin</option>
						    <option value="BM">Bermuda</option>
						    <option value="BT">Bhutan</option>
						    <option value="BO">Bolivia</option>
						    <option value="BA">Bosnia and Herzegowina</option>
						    <option value="BW">Botswana</option>
						    <option value="BV">Bouvet Island</option>
						    <option value="BR">Brazil</option>
						    <option value="IO">British Indian Ocean Territory</option>
						    <option value="BN">Brunei Darussalam</option>
						    <option value="BG">Bulgaria</option>
						    <option value="BF">Burkina Faso</option>
						    <option value="BI">Burundi</option>
						    <option value="KH">Cambodia</option>
						    <option value="CM">Cameroon</option>
						    <option value="CA">Canada</option>
						    <option value="CV">Cape Verde</option>
						    <option value="KY">Cayman Islands</option>
						    <option value="CF">Central African Republic</option>
						    <option value="TD">Chad</option>
						    <option value="CL">Chile</option>
						    <option value="CN">China</option>
						    <option value="CX">Christmas Island</option>
						    <option value="CC">Cocos (Keeling) Islands</option>
						    <option value="CO">Colombia</option>
						    <option value="KM">Comoros</option>
						    <option value="CG">Congo</option>
						    <option value="CD">Congo, the Democratic Republic of the</option>
						    <option value="CK">Cook Islands</option>
						    <option value="CR">Costa Rica</option>
						    <option value="CI">Cote d'Ivoire</option>
						    <option value="HR">Croatia (Hrvatska)</option>
						    <option value="CU">Cuba</option>
						    <option value="CY">Cyprus</option>
						    <option value="CZ">Czech Republic</option>
						    <option value="DK">Denmark</option>
						    <option value="DJ">Djibouti</option>
						    <option value="DM">Dominica</option>
						    <option value="DO">Dominican Republic</option>
						    <option value="TP">East Timor</option>
						    <option value="EC">Ecuador</option>
						    <option value="EG">Egypt</option>
						    <option value="SV">El Salvador</option>
						    <option value="GQ">Equatorial Guinea</option>
						    <option value="ER">Eritrea</option>
						    <option value="EE">Estonia</option>
						    <option value="ET">Ethiopia</option>
						    <option value="FK">Falkland Islands (Malvinas)</option>
						    <option value="FO">Faroe Islands</option>
						    <option value="FJ">Fiji</option>
						    <option value="FI">Finland</option>
						    <option value="FR">France</option>
						    <option value="FX">France, Metropolitan</option>
						    <option value="GF">French Guiana</option>
						    <option value="PF">French Polynesia</option>
						    <option value="TF">French Southern Territories</option>
						    <option value="GA">Gabon</option>
						    <option value="GM">Gambia</option>
						    <option value="GE">Georgia</option>
						    <option value="DE">Germany</option>
						    <option value="GH">Ghana</option>
						    <option value="GI">Gibraltar</option>
						    <option value="GR">Greece</option>
						    <option value="GL">Greenland</option>
						    <option value="GD">Grenada</option>
						    <option value="GP">Guadeloupe</option>
						    <option value="GU">Guam</option>
						    <option value="GT">Guatemala</option>
						    <option value="GN">Guinea</option>
						    <option value="GW">Guinea-Bissau</option>
						    <option value="GY">Guyana</option>
						    <option value="HT">Haiti</option>
						    <option value="HM">Heard and Mc Donald Islands</option>
						    <option value="VA">Holy See (Vatican City State)</option>
						    <option value="HN">Honduras</option>
						    <option value="HK">Hong Kong</option>
						    <option value="HU">Hungary</option>
						    <option value="IS">Iceland</option>
						    <option value="IN">India</option>
						    <option value="ID">Indonesia</option>
						    <option value="IR">Iran (Islamic Republic of)</option>
						    <option value="IQ">Iraq</option>
						    <option value="IE">Ireland</option>
						    <option value="IL">Israel</option>
						    <option value="IT">Italy</option>
						    <option value="JM">Jamaica</option>
						    <option value="JP">Japan</option>
						    <option value="JO">Jordan</option>
						    <option value="KZ">Kazakhstan</option>
						    <option value="KE">Kenya</option>
						    <option value="KI">Kiribati</option>
						    <option value="KP">Korea, Democratic People's Republic of</option>
						    <option value="KR">Korea, Republic of</option>
						    <option value="KW">Kuwait</option>
						    <option value="KG">Kyrgyzstan</option>
						    <option value="LA">Lao People's Democratic Republic</option>
						    <option value="LV">Latvia</option>
						    <option value="LB">Lebanon</option>
						    <option value="LS">Lesotho</option>
						    <option value="LR">Liberia</option>
						    <option value="LY">Libyan Arab Jamahiriya</option>
						    <option value="LI">Liechtenstein</option>
						    <option value="LT">Lithuania</option>
						    <option value="LU">Luxembourg</option>
						    <option value="MO">Macau</option>
						    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
						    <option value="MG">Madagascar</option>
						    <option value="MW">Malawi</option>
						    <option value="MY">Malaysia</option>
						    <option value="MV">Maldives</option>
						    <option value="ML">Mali</option>
						    <option value="MT">Malta</option>
						    <option value="MH">Marshall Islands</option>
						    <option value="MQ">Martinique</option>
						    <option value="MR">Mauritania</option>
						    <option value="MU">Mauritius</option>
						    <option value="YT">Mayotte</option>
						    <option value="MX">Mexico</option>
						    <option value="FM">Micronesia, Federated States of</option>
						    <option value="MD">Moldova, Republic of</option>
						    <option value="MC">Monaco</option>
						    <option value="MN">Mongolia</option>
						    <option value="MS">Montserrat</option>
						    <option value="MA">Morocco</option>
						    <option value="MZ">Mozambique</option>
						    <option value="MM">Myanmar</option>
						    <option value="NA">Namibia</option>
						    <option value="NR">Nauru</option>
						    <option value="NP">Nepal</option>
						    <option value="NL">Netherlands</option>
						    <option value="AN">Netherlands Antilles</option>
						    <option value="NC">New Caledonia</option>
						    <option value="NZ">New Zealand</option>
						    <option value="NI">Nicaragua</option>
						    <option value="NE">Niger</option>
						    <option value="NG">Nigeria</option>
						    <option value="NU">Niue</option>
						    <option value="NF">Norfolk Island</option>
						    <option value="MP">Northern Mariana Islands</option>
						    <option value="NO">Norway</option>
						    <option value="OM">Oman</option>
						    <option value="PK">Pakistan</option>
						    <option value="PW">Palau</option>
						    <option value="PA">Panama</option>
						    <option value="PG">Papua New Guinea</option>
						    <option value="PY">Paraguay</option>
						    <option value="PE">Peru</option>
						    <option value="PH">Philippines</option>
						    <option value="PN">Pitcairn</option>
						    <option value="PL">Poland</option>
						    <option value="PT">Portugal</option>
						    <option value="PR">Puerto Rico</option>
						    <option value="QA">Qatar</option>
						    <option value="RE">Reunion</option>
						    <option value="RO">Romania</option>
						    <option value="RU">Russian Federation</option>
						    <option value="RW">Rwanda</option>
						    <option value="KN">Saint Kitts and Nevis</option>
						    <option value="LC">Saint LUCIA</option>
						    <option value="VC">Saint Vincent and the Grenadines</option>
						    <option value="WS">Samoa</option>
						    <option value="SM">San Marino</option>
						    <option value="ST">Sao Tome and Principe</option>
						    <option value="SA">Saudi Arabia</option>
						    <option value="SN">Senegal</option>
						    <option value="SC">Seychelles</option>
						    <option value="SL">Sierra Leone</option>
						    <option value="SG">Singapore</option>
						    <option value="SK">Slovakia (Slovak Republic)</option>
						    <option value="SI">Slovenia</option>
						    <option value="SB">Solomon Islands</option>
						    <option value="SO">Somalia</option>
						    <option value="ZA">South Africa</option>
						    <option value="GS">South Georgia and the South Sandwich Islands</option>
						    <option value="ES">Spain</option>
						    <option value="LK">Sri Lanka</option>
						    <option value="SH">St. Helena</option>
						    <option value="PM">St. Pierre and Miquelon</option>
						    <option value="SD">Sudan</option>
						    <option value="SR">Suriname</option>
						    <option value="SJ">Svalbard and Jan Mayen Islands</option>
						    <option value="SZ">Swaziland</option>
						    <option value="SE">Sweden</option>
						    <option value="CH">Switzerland</option>
						    <option value="SY">Syrian Arab Republic</option>
						    <option value="TW">Taiwan, Province of China</option>
						    <option value="TJ">Tajikistan</option>
						    <option value="TZ">Tanzania, United Republic of</option>
						    <option value="TH">Thailand</option>
						    <option value="TG">Togo</option>
						    <option value="TK">Tokelau</option>
						    <option value="TO">Tonga</option>
						    <option value="TT">Trinidad and Tobago</option>
						    <option value="TN">Tunisia</option>
						    <option value="TR">Turkey</option>
						    <option value="TM">Turkmenistan</option>
						    <option value="TC">Turks and Caicos Islands</option>
						    <option value="TV">Tuvalu</option>
						    <option value="UG">Uganda</option>
						    <option value="UA">Ukraine</option>
						    <option value="AE">United Arab Emirates</option>
						    <option value="GB">United Kingdom</option>
						    <option value="US">United States</option>
						    <option value="UM">United States Minor Outlying Islands</option>
						    <option value="UY">Uruguay</option>
						    <option value="UZ">Uzbekistan</option>
						    <option value="VU">Vanuatu</option>
						    <option value="VE">Venezuela</option>
						    <option value="VN">Viet Nam</option>
						    <option value="VG">Virgin Islands (British)</option>
						    <option value="VI">Virgin Islands (U.S.)</option>
						    <option value="WF">Wallis and Futuna Islands</option>
						    <option value="EH">Western Sahara</option>
						    <option value="YE">Yemen</option>
						    <option value="YU">Yugoslavia</option>
						    <option value="ZM">Zambia</option>
						    <option value="ZW">Zimbabwe</option>
						</select>
					</div>
			</div>

			<div class = "row">
					<div class = "form-group col-md-6">
						<label for = "phone">Phone Number</label>
						<input type = "text" class = "form-control" id = "phone" placeholder= "Enter Phone Number" name = "phone">
					</div>
			</div>

			<h3>Payment Information</h3>
			<hr/>
			<div class = "row">
				<div class = "form-group col-md-8">
					<label for = "owner">Owner</label>
					<input class = "form-control" id = "owner" type = "text" name = "owner">
				</div>
				<div class = "form-group col-md-4">
					<label for = "cvv">CVV</label>
					<input class = "form-control" id = "cvv" type = "number" name = "cvv">
				</div>
			</div>


			<div class = "row">
				<div class = "form-group col-md-8">
						<label for="CreditCard">Credit Card</label>
					    <input class = "form-control" id = "creditCard" type = "number" name = "creditCard">
				</div>
			</div>

			<div class="control-group">
                <label class="control-label">Valid until</label>
                <div class="controls">
                    <div class="row">
                        <div class="col-md-8">
                            <select class="form-control" id = "expirationMonth" name="expirationMonth">
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="expirationYear">
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
			<br>

			<div class = "row form-group">
						<div class = "col-md-1">
							<input id = "sameAddress" type = "checkbox" name = "sameAddress" value = "agree" class = "form-control">
						</div>
						<div class = "col-md-7">
							<p><b>Billing Address already provided</b></p>
						</div>
			</div>

	<!-- removing for initial commit
			<div class = "row">
				<div class = "form-group col-md-8">
						<label for="account#">Account Number</label>
					    <input class = "form-control" id = "accountNumber" type = "number" name = "Account Number">
				</div>
			</div>

			<div class = "row">
				<div class = "form-group col-md-8">
						<label for="routing#">Routing Number</label>
					    <input class = "form-control" id = "routingNumber" type = "number" name = "Routing Number">
				</div>
			</div>

	-->


			<h3>All Done</h3>
			<hr/>
			<div class = "row form-group">
						<div class = "col-md-1">
							<input type = "checkbox" name = "agreeToTerms" value = "agree" class = "form-control">
						</div>
						<div class = "col-md-6 agree">
							<p><b>I agree to the <a href = "#">Terms and Conditions of the site</a></b></p>
						</div>
			</div>
			<div class = "row">
					<div class = "col-md-4 col-md-offset-4">
					<br>
					<input class="btn btn-primary btn-block" type="submit" value="Sign Up" id = "submitBtn">
					</div>
			</div>

			</form>

		</article>
    <?php include 'includes/HTMLcontents/footer.php'?>

        </div>
        <?php  include 'includes/HTMLcontents/rightSideWidget.php'?>
      </div>
    </div>


  </body>
</html>
