<?php 
include("include/connect.php");
session_start();
$sub_id=$_GET['sid'];
if(isset($_POST['steg3']))
{
 $sub_id= $_GET['sid'];
 $co_cr=  $_POST['coupon_codes'];
 $cr_ty=  $_POST['credit_card_type'];
 $cr_no=  $_POST['credit_number'];
 $cccv=   $_POST['verification_value'];
 $ex_mont=$_POST['credit_month'];
 $ex_year=$_POST['credit_year'];
 $fname=$_POST['first_name'];
 $lname=$_POST['last_name'];
 $add_a=$_POST['address_a'];
 $add_b=$_POST['address_b'];
 $city= $_POST['city_na'];
 $state=$_POST['state_na'];
 $coun= $_POST['country'];
 $zip=  $_POST['zip_code'];
 $ph_no=$_POST['phone_no'];

$sql="insert into payment(sub_id,coupon_code,credit_card,card_number,ccv,expiration_date,credit_year, first_name, last_name, address_a, address_b, city,state, country,zip_code,phone_no ) VALUES ('$sub_id','$co_cr','$cr_ty','$cr_no','$cccv','$ex_mont','$ex_year','$fname','$lname','$add_a','$add_b','$city','$state','$coun','$zip','$ph_no')";

 $query=mysql_query($sql);
?>
<script type="text/javascript">
window.location.href="adidea_stage4.php?sid=<?php echo $sub_id; ?>";
</script>
<?php
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Invent</title>
<link href="stylesheets/com.tc.toolsd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.contentd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">
    
	
<div class="page">
<div class="tier x12">
<div class="column">
<div class='breadcrumb box filled-soft'>

<p class='breadcrumb-links'>
<a href='invent.php' class='breadcrumb-link'>Invent</a>
			&nbsp;/&nbsp;
<span class='breadcrumb-current'>Project Stage 3</span>
</p>

</div>

</div>

</div>
</div>		
	
	<script src="/javascripts/jquery.tools.min.js?1304015757" type="text/javascript"></script>
<script>
function add_more_text_box(parent_id, child_name, child_id)
{
  var myTable=document.getElementById(parent_id);
  var oDiv, oInput;
  oDiv = document.createElement('div');
  oDiv.setAttribute('id', 'Name');
  myTable.appendChild(oDiv);

  oInput = document.createElement('input');
  oInput.setAttribute('type', 'text');
  oInput.setAttribute('name', child_name);
  oInput.setAttribute('id', child_id);
  oDiv.appendChild(oInput);
} 

var child_id = 1;
function child()
{ 
		return child_id++;
}	
</script>
<script>
function add_more1_text_box(parent_id, child_name1, child_id1)
{
  var myTable=document.getElementById(parent_id);
  var oDiv, oInput;
  oDiv = document.createElement('div');
  oDiv.setAttribute('id', 'Name');
  myTable.appendChild(oDiv);

  oInput = document.createElement('input');
  oInput.setAttribute('type', 'text');
  oInput.setAttribute('name', child_name1);
  oInput.setAttribute('id', child_id1);
  oDiv.appendChild(oInput);
} 

var child_id1 = 1;
function child1()
{ 
		return child_id1++;
}	
</script>

<div class="page quirky-idea">

  


<div class="tier x12">
<div class="column x9">
<form action="" enctype="multipart/form-data" id="pitchForm" method="post" style="margin-top:0px;">
<div class="form-controls box mSmaller filled-bright"><strong>Preview Your Submission</strong> 
  
  <div class="button-holder"><strong>Step 3 of 3</strong>

</div>
  <strong class="right">                                     
								
</strong>
</div> 

<div class="box filled-super-soft pad-bottom idea-sidebar">
<h2>Amount Due</h2>
<ul class="amount-due">
<li class="clearfix" id="total_fee"><p class="left">Idea Submission</p><p class="right">$10.00</p></li> 
<li class="clearfix"><p class="left strong highlight">Total Due</p><p class="right strong highlight" id="amount_due">$10.00</p></li>
</ul>
					
</div>

<div id="payment-box" class="box mSmaller">
<h3>Payment</h3>
<div class="pay-item mSmaller">
						
<p class="item-title">Enter Coupon Information (optional)</p>
						
<p class="input-line clearfix" id="coupon_holder">
<label>Coupon Code</label>
<input id="coupon_codes" name="coupon_codes" size="30" type="text" />
<a class="button medium bright" id="update_coupon">Apply</a></p> 
						
<script type="text/javascript"> 
						
								jQuery(document).ready(function($) {
									var testCoupon = function(couponCode){
										var idea = {"idea":{"flags":0,"option":null,"created_at":null,"category":"kitchen","title":"rytgh","updated_at":null,"deleted_at":null,"similar_products":["fcjgh","gjgj"],"design_product":false,"user_id":73895,"phone_number":null,"last_cc_txn_id":null,"solution":"jfjgf","features":["fcgjfj","fcjhgj"],"description":"","problem":"cfggjfg","state":"pending_payment"}};
										idea.idea.coupon_codes = couponCode;
										idea.idea.option = "concept";
										$.ajax({ url: "/ideas/new", type: "GET", data: idea, success: updateAmount, beforeSend: waitDude, dataType: "json"});
									} 

									var updateAmount = function(responseText, statusText, xhr){
										$("#coupon_holder").stopWaiting();
										$("#amount_due").html(responseText.cc_amount); 
										if (responseText.cc_amount == "$0.00") {
											$('#payment-box').animate({'height': 'toggle'}, 1500);
										} 
										   
										if (responseText.total_due == "$0.00"){
											$("#account_balance_line").remove();
											$("#total_fee").after("<li class='clearfix'><p class='left'>Coupon</p><p class='right'>" + responseText.coupons_value + "</p></li>");  
										}

									} 

									var waitDude = function(){
										$("#coupon_holder").startWaiting();
									}
									
									$("#update_coupon").click(function(){
										var couponCode = $("#idea_coupon_codes").val();
										testCoupon(couponCode);
									});
									
								});
								
								
								
</script>

						
<div class="clear"></div>
</div>  
<div class="pay-item mSmaller">
<p class="item-title" style="margin-bottom:20px;">1. Enter Credit Card Information</p>

<div class="form-controls box mSmaller filled-bright" style="display: none; background-color: #e2a8cf;">
<h4 style="color: #fa0018; margin: 5px 0 0 0;">

</h4>
</div>

<input id="credit_card_type" name="credit_card_type" type="hidden" value="new" />
	

<div id="cc-fields" style="font-size:12px;">
<div class="input-line clearfix" style="margin-top:10px;">

<label for="idea_credit_card_credit_card_type">Credit Card Type</label> 	
<select id="credit_card_type" name="credit_card_type"><option value="american_express">American Express</option>
<option value="master">MasterCard</option>
<option value="visa">Visa</option></select>
<span class="graphic credit-cards"><span>Credit Cards</span></span>
</div>                
<div class="input-line clearfix" style="margin-top:10px;">
<label for="idea_credit_card_number">Credit card number</label>
<input id="credit_number" name="credit_number" size="30" type="text" />                 
<label class="narrow" for="verification_value">CCV</label>

<input class="narrow" id="verification_value" name="verification_value" size="30" type="text" /> 
<a class="hint" href="#" title="The CCV is a three- or four-digit value printed on the card.">What is this?</a>		
</div>
<div class="input-line clearfix" style="margin-top:10px;">
<label for="idea_credit_card_month">Expiration Date</label> 
<select id="credit_month" name="credit_month"option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option></select>
<select id="credit_year" name="credit_year"><option value="2011">2011</option>
<option value="2012">2012</option>

<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option></select>	

</div> 
<p class="input-line" style="margin-top:10px;">
<label></label> <input name="idea[save_credit_card_info]" type="hidden" value="0" /><input id="idea_save_credit_card_info" name="idea[save_credit_card_info]" type="checkbox" value="1" /> &nbsp;Save my credit card information for next time 
</p>
</div>
</div>  

<div id='address-fields' class="pay-item mSmaller"> 
<p class="item-title">2. Enter a Billing Address</p>


<p class="input-line clearfix">
<label>First Name</label>
<input class="wide" id="first_name" name="first_name" onChange="" size="30" type="text" />

</p>
<p class="input-line clearfix">
<label>Last Name</label>
<input class="wide" id="last_name" name="last_name" onChange="" size="30" type="text" />
</p>
<p class="input-line clearfix">
<label>Street Address 1</label>
<input class="wide" id="address_a" name="address_a" onChange="" size="30" type="text" />
</p>
<p class="input-line clearfix">
<label>Street Address 2</label>
<input class="wide" id="address_b" name="address_b" onChange="" size="30" type="text" />
</p>
<p class="input-line clearfix">

<label>City</label>
<input class="wide" id="city_na" name="city_na" onChange="" size="30" type="text" />
</p>
<p class="input-line clearfix">
<label>State/Region</label>
<select id="state_na" style="width: 120px;" name="state_na"> 
<option value="">Select a State</option>
<option value="AL">AL</option>
<option value="AK">AK</option>
<option value="AB">AB</option>
<option value="AZ">AZ</option>

<option value="AR">AR</option>
<option value="BC">BC</option>
<option value="CA">CA</option>
<option value="CO">CO</option>
<option value="CT">CT</option>
<option value="DE">DE</option>
<option value="DC">DC</option>
<option value="FL">FL</option>
<option value="GA">GA</option>

<option value="HI">HI</option>
<option value="ID">ID</option>
<option value="IL">IL</option>
<option value="IN">IN</option>
<option value="IA">IA</option>
<option value="KS">KS</option>
<option value="KY">KY</option>
<option value="LA">LA</option>
<option value="ME">ME</option>

<option value="MB">MB</option>
<option value="MD">MD</option>
<option value="MA">MA</option>
<option value="MI">MI</option>
<option value="MN">MN</option>
<option value="MS">MS</option>
<option value="MO">MO</option>
<option value="MT">MT</option>
<option value="NE">NE</option>

<option value="NV">NV</option>
<option value="NB">NB</option>
<option value="NL">NL</option>
<option value="NH">NH</option>
<option value="NJ">NJ</option>
<option value="NM">NM</option>
<option value="NY">NY</option>
<option value="NC">NC</option>
<option value="ND">ND</option>

<option value="NS">NS</option>
<option value="PE">PE</option>
<option value="OH">OH</option>
<option value="OK">OK</option>
<option value="ON">ON</option>
<option value="OR">OR</option>
<option value="PA">PA</option>
<option value="QC">QC</option>
<option value="RI">RI</option>

<option value="SK">SK</option>
<option value="SC">SC</option>
<option value="SD">SD</option>
<option value="TN">TN</option>
<option value="TX">TX</option>
<option value="UT">UT</option>
<option value="VT">VT</option>
<option value="VA">VA</option>
<option value="WA">WA</option>

<option value="WV">WV</option>
<option value="WI">WI</option>
<option value="WY">WY</option>
</select>
</p>
<p class="input-line clearfix">
<label>Country</label>
<select id="country" name="country">
<option value="US">United States</option><option value="" disabled="disabled">-------------</option>
<option value="DZ">Algeria</option>

<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AN">Antilles Netherlands</option>
<option value="AR">Argentina</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>

<option value="AT">Austria</option>
<option value="PT">Azores Portugal</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="ES">Baleric Islands Spain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="AG">Barbuda and Antigua</option>
<option value="BE">Belgium</option>

<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BO">Bolivia</option>
<option value="AN">Bonaire Netherlands Antilles</option>
<option value="BW">Botswana</option>
<option value="BR">Brazil</option>
<option value="VG">British Virgin Islands</option>
<option value="BN">Brunei</option>

<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="BY">Byelorussia</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="ES">Canary Islands Spain</option>
<option value="CV">Cape Verde Islands</option>

<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China People's Republic of</option>
<option value="CO">Colombia</option>
<option value="CG">Congo</option>
<option value="CK">Cook Islands</option>
<option value="FR">Corsica France</option>

<option value="CR">Costa Rica</option>
<option value="CI">Cote D'Ivoire (Ivory Coast)</option>
<option value="GR">Crete Greece</option>
<option value="CT">Croatia</option>
<option value="CU">Cuba</option>
<option value="AN">Curacao Netherland Antilles</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="CS">Czechoslovakia</option>

<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equitorial Guinea</option>
<option value="ER">Eritrea</option>

<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FO">Faeroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="GA">Gabon</option>

<option value="GM">Gambia</option>
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
<option value="NL">Holland Netherlands</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>

<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran</option>
<option value="IE">Ireland</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="CI">Ivory Coast (Cote D'Ivoire)</option>
<option value="JM">Jamaica</option>

<option value="JP">Japan</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KR">Korea South</option>
<option value="FM">Kosrae Micronesia</option>
<option value="KW">Kuwait</option>
<option value="LA">Laos</option>

<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macau</option>
<option value="MG">Madagascar</option>

<option value="PT">Madeira Portugal</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MP">Mariana Islands Northern</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>

<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia</option>
<option value="MD">Moldova</option>
<option value="MC">Monaco</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>

<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NP">Nepal</option>
<option value="AN">Netherlands Antilles</option>
<option value="NL">Netherlands/Holland</option>
<option value="KN">Nevis St. Christopher (St. Kitts)</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>

<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Isl</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PA">Panama</option>

<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PL">Poland</option>
<option value="FM">Ponape Micronesia</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>

<option value="RE">Reunion</option>
<option value="RO">Romania</option>
<option value="MP">Rota/Northern Marinana Is</option>
<option value="RU">Russia</option>
<option value="SU">Russia/Soviet Union</option>
<option value="RW">Rwanda</option>
<option value="AN">Saba/Netherlands Antilles</option>
<option value="MP">Saipan/Northern Marina Is</option>
<option value="AS">Samoa American</option>

<option value="WS">Samoa Western</option>
<option value="IT">Sardinia/Italy</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="SC">Seychelles</option>
<option value="IT">Sicily/Italy</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovak Republic</option>

<option value="SO">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="ZA">South Africa</option>
<option value="SU">Soviet Union</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="AN">St. Barthelemy (Netherlands Antilles)</option>
<option value="KN">St. Christopher (St. Kitts)</option>
<option value="VI">St. Croix/Virgin Is. (U.S.)</option>

<option value="AN">St. Eustatius  (Netherlands Antilles)</option>
<option value="VI">St. John (U.S.)</option>
<option value="KN">St. Kitts/St. Christopher</option>
<option value="LC">St. Lucia</option>
<option value="AN">St. Maarten/Netherlands Antilles</option>
<option value="AN">St. Martin</option>
<option value="VI">St. Thomas/Virgin Is. (U.S.)</option>
<option value="VC">St. Vincent/Grenadines</option>
<option value="SD">Sudan</option>

<option value="SR">Suriname</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="PF">Tahiti/French Polynesia</option>
<option value="TW">Taiwan</option>
<option value="TZ">Tanzania</option>
<option value="TH">Thailand</option>
<option value="MP">Tinian/Northern Mariana Is</option>

<option value="TT">Tobago and Trinidad</option>
<option value="TG">Togo</option>
<option value="TO">Tonga</option>
<option value="VG">Tortola/Virgin Is. (British)</option>
<option value="TT">Trinidad and Tobago</option>
<option value="FM">Truk/Micronesia</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TC">Turks and Caicos Islands</option>

<option value="TV">Tuvalu</option>
<option value="VI">U.S. Virgin Islands</option>
<option value="SU">U.S.S.R.</option>
<option value="UG">Uganda</option>
<option value="UA">Ukrania</option>
<option value="VC">Union Islands/St. Vincent/Grenadines</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>

<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="VG">Virgin Gorda/Virgin Is. (British)</option>
<option value="WK">Wake Island</option>
<option value="WF">Wallis and Futuna Isl</option>
<option value="WS">Western Samoa</option>

<option value="FM">Yap/Micronesia</option>
<option value="YE">Yemen</option>
<option value="YD">Yemen PDR (S-COM)</option>
<option value="YU">Yugoslavia</option>
<option value="ZR">Zaire</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
</select>
</p>
<p class="input-line clearfix">

<label>Zip Code</label>
<input id="zip_code" name="zip_code" onChange="" size="30" type="text" />
</p>
<p class="input-line clearfix">
<label>Phone Number</label>
<input id="phone_no" name="phone_no" onChange="" size="30" type="text" />
<span class="left ship-meta"><em>Optional</em></span>
</p>

</div>                

<div class="form-controls box filled-bright">
<strong>Step 3 of 3</strong>


<div class="button-holder">
<input type="submit" name="steg3"  value='Continue' class="btnstyle"/>

</div>				
</div>
</form></div></div>
</div>
	
	<?php //include("learn/index.php"); ?>
	</div>
  </div>
</div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
