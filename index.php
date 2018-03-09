<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "guestbook";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$date_rate = $_POST['dateRate'];
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$country = $_POST['country'];
$email = $_POST['email'];
$website_addres = $_POST['waddress'];
$message= $_POST['subject'];
$query =  "INSERT INTO guestbook(dateRate, firstname, lastname, country, email, website, message)
VALUES (NOW(), '$first_name', '$last_name', '$country' ,'$email', '$website_addres', '$message')";
if ($conn->query($query) === true) {
header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
    die();
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
  <meta name="author" content="Joey Martens">
	<title>Guestbook</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
  <h1>GUESTBOOK</h1>
  <div class="container">
    <form method="POST">
      <label for="fname">First Name:</label>
      <input type="text" id="fname" name="firstname" oninvalid="this.setCustomValidity('Fill in your firstname.')" oninput="this.setCustomValidity('')" required placeholder="Your first name.."></br>
      <label for="lname">Last Name:</label>
      <input type="text" id="lname" name="lastname" oninvalid="this.setCustomValidity('Fill in your lastname.')" oninput="this.setCustomValidity('')" required placeholder="Your last name.."></br>
      <label for="country">Country:</label>
      <select id="country" required name="country" type="text">
        <OPTION VALUE="Albania">Albania
        <OPTION VALUE="Algeria">Algeria
        <OPTION VALUE="Andorra">Andorra
        <OPTION VALUE="Angola">Angola
        <OPTION VALUE="Anguilla">Anguilla
        <OPTION VALUE="Antigua and Barbuda">Antigua and Barbuda
        <OPTION VALUE="Argentina">Argentina
        <OPTION VALUE="Armenia">Armenia
        <OPTION VALUE="Aruba">Aruba
        <OPTION VALUE="Australia">Australia
        <OPTION VALUE="Austria">Austria
        <OPTION VALUE="Azerbaijan">Azerbaijan
        <OPTION VALUE="Azores">Azores
        <OPTION VALUE="Bahamas">Bahamas
        <OPTION VALUE="Bahrain">Bahrain
        <OPTION VALUE="Bangladesh">Bangladesh
        <OPTION VALUE="Barbados">Barbados
        <OPTION VALUE="Belarus">Belarus
        <OPTION VALUE="Belgium">Belgium
        <OPTION VALUE="Belize">Belize
        <OPTION VALUE="Benin">Benin
        <OPTION VALUE="Bermuda">Bermuda
        <OPTION VALUE="Bhutan">Bhutan
        <OPTION VALUE="Bolivia">Bolivia
        <OPTION VALUE="Borneo">Borneo
        <OPTION VALUE="Bosnia and Herzegovina">Bosnia and Herzegovina
        <OPTION VALUE="Botswana">Botswana
        <OPTION VALUE="Brazil">Brazil
        <OPTION VALUE="British Indian Ocean Territories">British Indian Ocean Territories
        <OPTION VALUE="Brunei">Brunei
        <OPTION VALUE="Bulgaria">Bulgaria
        <OPTION VALUE="Burkina Faso (Upper Volta)">Burkina Faso (Upper Volta)
        <OPTION VALUE="Burundi">Burundi
        <OPTION VALUE="Camaroon">Camaroon
        <OPTION VALUE="Cambodia (Kampuchea)">Cambodia (Kampuchea)
        <OPTION VALUE="Canada">Canada
        <OPTION VALUE="Canary Islands">Canary Islands
        <OPTION VALUE="Cape Vere Islands">Cape Vere Islands
        <OPTION VALUE="Cayman Island">Cayman Island
        <OPTION VALUE="Central African Rep">Central African Rep
        <OPTION VALUE="Chad">Chad
        <OPTION VALUE="Chile">Chile
        <OPTION VALUE="China">China
        <OPTION VALUE="Christmas Island">Christmas Island
        <OPTION VALUE="Colombia">Colombia
        <OPTION VALUE="Comoros Islands">Comoros Islands
        <OPTION VALUE="Congo, Democratic Republic of">Congo, Democratic Republic of
        <OPTION VALUE="Costa Rica">Costa Rica
        <OPTION VALUE="Croatia">Croatia
        <OPTION VALUE="Cuba">Cuba
        <OPTION VALUE="Cyprus">Cyprus
        <OPTION VALUE="Czech Republic">Czech Republic
        <OPTION VALUE="Denmark">Denmark
        <OPTION VALUE="Djibouti">Djibouti
        <OPTION VALUE="Dominica">Dominica
        <OPTION VALUE="Dominican Republic">Dominican Republic
        <OPTION VALUE="East Timor">East Timor
        <OPTION VALUE="Ecuador">Ecuador
        <OPTION VALUE="Egypt">Egypt
        <OPTION VALUE="El Salvador">El Salvador
        <OPTION VALUE="Equatorial Guinea">Equatorial Guinea
        <OPTION VALUE="Eritria">Eritria
        <OPTION VALUE="Estonia">Estonia
        <OPTION VALUE="Ethiopia">Ethiopia
        <OPTION VALUE="Falkland Islands">Falkland Islands
        <OPTION VALUE="Faroe Islands">Faroe Islands
        <OPTION VALUE="Fed Rep Yugoslavia">Fed Rep Yugoslavia
        <OPTION VALUE="Fiji">Fiji
        <OPTION VALUE="Finland">Finland
        <OPTION VALUE="France">France
        <OPTION VALUE="French Guiana">French Guiana
        <OPTION VALUE="French Polynesia">French Polynesia
        <OPTION VALUE="Fyro Macedonia">Fyro Macedonia
        <OPTION VALUE="Gabon">Gabon
        <OPTION VALUE="Gambia">Gambia
        <OPTION VALUE="Georgia">Georgia
        <OPTION VALUE="Germany">Germany
        <OPTION VALUE="Ghana">Ghana
        <OPTION VALUE="Gibraltar">Gibraltar
        <OPTION VALUE="Greece">Greece
        <OPTION VALUE="Greenland">Greenland
        <OPTION VALUE="Grenada">Grenada
        <OPTION VALUE="Guadeloupe">Guadeloupe
        <OPTION VALUE="Guatemala">Guatemala
        <OPTION VALUE="Guinea">Guinea
        <OPTION VALUE="Guinea-Bissau">Guinea-Bissau
        <OPTION VALUE="Guyana">Guyana
        <OPTION VALUE="Haiti">Haiti
        <OPTION VALUE="Honduras">Honduras
        <OPTION VALUE="Hong Kong">Hong Kong
        <OPTION VALUE="Hungary">Hungary
        <OPTION VALUE="Iceland">Iceland
        <OPTION VALUE="India">India
        <OPTION VALUE="Indonesia">Indonesia
        <OPTION VALUE="Iran">Iran
        <OPTION VALUE="Iraq">Iraq
        <OPTION VALUE="Ireland">Ireland
        <OPTION VALUE="Israel">Israel
        <OPTION VALUE="Italy">Italy
        <OPTION VALUE="Ivory Coast">Ivory Coast
        <OPTION VALUE="Jamaica">Jamaica
        <OPTION VALUE="Japan">Japan
        <OPTION VALUE="Jordan">Jordan
        <OPTION VALUE="Kazakhstan">Kazakhstan
        <OPTION VALUE="Kenya">Kenya
        <OPTION VALUE="Kiribati">Kiribati
        <OPTION VALUE="Korea">Korea
        <OPTION VALUE="Kuwait">Kuwait
        <OPTION VALUE="Kyrgyzstan">Kyrgyzstan
        <OPTION VALUE="Laos">Laos
        <OPTION VALUE="Latvia">Latvia
        <OPTION VALUE="Lebanon">Lebanon
        <OPTION VALUE="Lesotho">Lesotho
        <OPTION VALUE="Liberia">Liberia
        <OPTION VALUE="Libya">Libya
        <OPTION VALUE="Liechtenstein">Liechtenstein
        <OPTION VALUE="Lithuania">Lithuania
        <OPTION VALUE="Luxembourg">Luxembourg
        <OPTION VALUE="Macao">Macao
        <OPTION VALUE="Madagascar">Madagascar
        <OPTION VALUE="Malawi">Malawi
        <OPTION VALUE="Malaysia">Malaysia
        <OPTION VALUE="Maldives">Maldives
        <OPTION VALUE="Mali">Mali
        <OPTION VALUE="Malta">Malta
        <OPTION VALUE="Martinique">Martinique
        <OPTION VALUE="Mauritania">Mauritania
        <OPTION VALUE="Mauritius">Mauritius
        <OPTION VALUE="Mexico">Mexico
        <OPTION VALUE="Moldova">Moldova
        <OPTION VALUE="Monaco">Monaco
        <OPTION VALUE="Mongolia">Mongolia
        <OPTION VALUE="Montserrat">Montserrat
        <OPTION VALUE="Morocco">Morocco
        <OPTION VALUE="Mozambique">Mozambique
        <OPTION VALUE="Myanmar (Burma)">Myanmar (Burma)
        <OPTION VALUE="Namibia">Namibia
        <OPTION VALUE="Naura">Naura
        <OPTION VALUE="Nepal">Nepal
        <OPTION selected VALUE="Netherlands">Netherlands
        <OPTION VALUE="Netherlands Antilles">Netherlands Antilles
        <OPTION VALUE="New Caledonia">New Caledonia
        <OPTION VALUE="New Zealand">New Zealand
        <OPTION VALUE="Nicaragua">Nicaragua
        <OPTION VALUE="Niger">Niger
        <OPTION VALUE="Nigeria">Nigeria
        <OPTION VALUE="Niue">Niue
        <OPTION VALUE="Norway">Norway
        <OPTION VALUE="Oman">Oman
        <OPTION VALUE="Pakistan">Pakistan
        <OPTION VALUE="Panama">Panama
        <OPTION VALUE="Papua New Guinea">Papua New Guinea
        <OPTION VALUE="Paraguay">Paraguay
        <OPTION VALUE="Peru">Peru
        <OPTION VALUE="Philippines">Philippines
        <OPTION VALUE="Pitcairn Island">Pitcairn Island
        <OPTION VALUE="Poland">Poland
        <OPTION VALUE="Portugal">Portugal
        <OPTION VALUE="Qatar">Qatar
        <OPTION VALUE="Republic of Korea">Republic of Korea
        <OPTION VALUE="Reunion Island">Reunion Island
        <OPTION VALUE="Romania">Romania
        <OPTION VALUE="Russia">Russia
        <OPTION VALUE="Rwanda">Rwanda
        <OPTION VALUE="Saint Barthelemy">Saint Barthelemy
        <OPTION VALUE="Saint Croix">Saint Croix
        <OPTION VALUE="Saint Helena">Saint Helena
        <OPTION VALUE="Saint Kitts and Nevis">Saint Kitts and Nevis
        <OPTION VALUE="Saint Lucia">Saint Lucia
        <OPTION VALUE="Saint Pierre and Miquelon">Saint Pierre and Miquelon
        <OPTION VALUE="Saint Vincent and Grenadi">Saint Vincent and Grenadi
        <OPTION VALUE="San Marino">San Marino
        <OPTION VALUE="Sao Tome and Principe">Sao Tome and Principe
        <OPTION VALUE="Saudi Arabia">Saudi Arabia
        <OPTION VALUE="Senegal">Senegal
        <OPTION VALUE="Seychelles">Seychelles
        <OPTION VALUE="Sierra Leone">Sierra Leone
        <OPTION VALUE="Singapore">Singapore
        <OPTION VALUE="Slovakia">Slovakia
        <OPTION VALUE="Slovenia">Slovenia
        <OPTION VALUE="Solomon Islands">Solomon Islands
        <OPTION VALUE="Somalia Northern Region">Somalia Northern Region
        <OPTION VALUE="Somalia Southern Region">Somalia Southern Region
        <OPTION VALUE="South Africa">South Africa
        <OPTION VALUE="South Sandwich Islands">South Sandwich Islands
        <OPTION VALUE="Spain">Spain
        <OPTION VALUE="Sri Lanka">Sri Lanka
        <OPTION VALUE="Sudan">Sudan
        <OPTION VALUE="Suriname">Suriname
        <OPTION VALUE="Swaziland">Swaziland
        <OPTION VALUE="Sweden">Sweden
        <OPTION VALUE="Switzerland">Switzerland
        <OPTION VALUE="Syria">Syria
        <OPTION VALUE="Taiwan">Taiwan
        <OPTION VALUE="Tajikistan">Tajikistan
        <OPTION VALUE="Tanzania">Tanzania
        <OPTION VALUE="Thailand">Thailand
        <OPTION VALUE="Togo">Togo
        <OPTION VALUE="Tonga">Tonga
        <OPTION VALUE="Trinidad and Tobago">Trinidad and Tobago
        <OPTION VALUE="Tunisia">Tunisia
        <OPTION VALUE="Turkey">Turkey
        <OPTION VALUE="Turkmenistan">Turkmenistan
        <OPTION VALUE="Turks and Caicos Islnd">Turks and Caicos Islnd
        <OPTION VALUE="Tuvalu">Tuvalu
        <OPTION VALUE="USA">USA
        <OPTION VALUE="Uganda">Uganda
        <OPTION VALUE="Ukraine">Ukraine
        <OPTION VALUE="United Arab Emirates">United Arab Emirates
        <OPTION VALUE="United Kingdom">United Kingdom
        <OPTION VALUE="Uruguay">Uruguay
        <OPTION VALUE="Uzbekistan">Uzbekistan
        <OPTION VALUE="Vanuatu">Vanuatu
        <OPTION VALUE="Vatican City">Vatican City
        <OPTION VALUE="Venezuela">Venezuela
        <OPTION VALUE="Vietnam">Vietnam
        <OPTION VALUE="Virgin Islands (United Kingdom)">Virgin Islands (United Kingdom)
        <OPTION VALUE="Wallis and Futuna Islands">Wallis and Futuna Islands
        <OPTION VALUE="Western Sahara">Western Sahara
        <OPTION VALUE="Western Samoa">Western Samoa
        <OPTION VALUE="Yemen">Yemen
        <OPTION VALUE="Zambia">Zambia
        <OPTION VALUE="Zimbabwe (Rhodesia)">Zimbabwe (Rhodesia)
      </select></br>
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" oninvalid="this.setCustomValidity('Fill in your Email address.')" oninput="this.setCustomValidity('')" required placeholder="Your e-mail address.."></br>
      <label for="waddress">Website Address:</label>
      <input type="url" id="waddress" name="waddress" placeholder="Your website address if you have one.. (http://www.yoursite.com)"></br>
      <label for="subject">Subject:</label></br>
      <textarea id="subject" name="subject" oninvalid="this.setCustomValidity('Fill in your message.')" oninput="this.setCustomValidity('')" required placeholder="Write something.." style="height:200px"></textarea></br>
      <div class="g-recaptcha" data-sitekey="6Lfj60oUAAAAABGEqtkZYappJmQdj3LTtO1OCSG-"></div>
      <input type="submit" value="Submit" name="mySubmit">
      <input type="reset" value="Reset">
    </form>
  </div>
  <?php if (isset($_GET['guestbookId'])) {
      $guestbookId = $_GET['guestbookId'];
      $sql = "SELECT dateRate, firstname, lastname, country, email, website, message FROM guestbook";
    }
    else {
       $sql = "SELECT dateRate, firstname, lastname, country, email, website, message FROM guestbook";
    }
      $result = $conn->query($sql);
    ?>
    <?php if ($result->num_rows > 0) {
          //output data of each row
          while ($row = $result->fetch_assoc()) {
    ?>
    <div id="rate-table">
    <table>
    <tr><div id="dateRate"><?php echo $row["dateRate"]; ?></div></tr>
    <tr><div id="firstname"><?php echo $row["firstname"]; ?></div></tr>
    <tr><div id="lastname"><?php echo $row["lastname"]; ?></div></tr>
    <tr><div id="Country"><?php echo $row["country"]; ?></div></tr>
    <tr><div id="Email"><?php echo $row["email"]; ?></div></tr>
    <tr><div id="website"><?php echo $row["website"]; ?></div></tr>
    <tr><div id="message"><?php echo $row["message"]; ?></div></tr>
    </table>
    </div>
    <?php   }} ?>
    <h2>Joey Martens || ROC ter AA &copy;</h2>
</body>
</html>
