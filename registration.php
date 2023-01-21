<?php
session_start();
$showAlert = false;
$showError = false;
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    // header("location: login.php");
    $loggedin = false;
    // exit;
} else {
    $loggedin = true;
}

?>


<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $applicationno = $_POST["applicationno"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $a1 = $_POST["a1"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $photo = $_POST["photo"];
    $sign = $_POST["sign"];
    $aadhaarNo = $_POST["aadhaarNo"];
    $aadhaar = $_POST["aadhaar"];
    // $exists=false;




    $sql = "INSERT INTO `registration` (`applicationno`, `fname`, `lname`,`dob`, `gender`, `country`, `phone`, `email`,`a1`,`city`, `state`, `zip`,`photo`, `sign`, `aadhaarNo```, `aadhaar`) VALUES ( '$applicationno','$fname','$lname','$dob','$gender', '$country', '$phone', '$email', '$a1', '$city', '$state', '$zip', '$photo', '$sign', '$aadhaarNo', '$aadhaar' )";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $showAlert = true;
        $_SESSION['applicationno'] = $applicationno;
    } else {
        $showError = true;
    }
    header("location: profile.php");
}


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        .reg {
            background: linear-gradient(to right, #77a3e4, #aa7df3);

        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php include 'header.php'; ?>


    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You Register Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>


    <div class="container shadow rounded-3 border-3 my-5 text-light">
        <div class="row">

            <div class="col reg mx-auto rounded-3">
                <div class="mb-3 p-3">


                    <form method="post">
                        <fieldset>
                            <legend>
                                <h1 class="fs-1 d-flex justify-content-center">Personal Details</h1>
                            </legend>
                            <fieldset>
                                <legend>Student Details</legend>
                                <div class="mb-3 p-2">
                                    <label for="name" class="form-label ms-2">Name</label>
                                    <div class="row grid ms-2 gap-3">
                                        <input type="text" class="form-control col" id="name" placeholder="First Name" name="fname" />

                                        <input type="text" class="form-control col" id="name" placeholder="Last Name" name="lname" />
                                    </div>
                                </div>


                                <div class="mb-3 p-3">
                                    <label for="dob" class="form-label">Application Number</label>
                                    <input type="text" class="form-control" style="width: 12rem" id="applicationno" placeholder="Application Number" name="applicationno" />
                                </div>

                                <div class="mb-3 p-3">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" style="width: 12rem" id="dob" placeholder="Date Of Birth" name="dob" />
                                </div>

                                <div class="mb-3 p-3 row">
                                    <div class="col-4">
                                        <label for="dob" class="form-label">Gender</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="Male" id="flexRadioDefault1" />
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault2" checked />
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="Other" id="flexRadioDefault2" checked />
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Others
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label for="country" class="form-label">Of which country are you a
                                            citizen?</label>

                                        <select class="form-select" aria-label="Default select example" name="country" id="country">
                                            <option selected>Please Select</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland Islands">Åland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">
                                                Bosnia and Herzegovina
                                            </option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">
                                                British Indian Ocean Territory
                                            </option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">
                                                Central African Republic
                                            </option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">
                                                Cocos (Keeling) Islands
                                            </option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">
                                                Congo, The Democratic Republic of The
                                            </option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">
                                                Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">
                                                French Southern Territories
                                            </option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">
                                                Heard Island and Mcdonald Islands
                                            </option>
                                            <option value="Holy See (Vatican City State)">
                                                Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">
                                                Iran, Islamic Republic of
                                            </option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">
                                                Korea, Democratic People's Republic of
                                            </option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">
                                                Lao People's Democratic Republic
                                            </option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">
                                                Libyan Arab Jamahiriya
                                            </option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">
                                                Macedonia, The Former Yugoslav Republic of
                                            </option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">
                                                Micronesia, Federated States of
                                            </option>
                                            <option value="Moldova, Republic of">
                                                Moldova, Republic of
                                            </option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">
                                                Netherlands Antilles
                                            </option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">
                                                Northern Mariana Islands
                                            </option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">
                                                Palestinian Territory, Occupied
                                            </option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">
                                                Saint Kitts and Nevis
                                            </option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">
                                                Saint Pierre and Miquelon
                                            </option>
                                            <option value="Saint Vincent and The Grenadines">
                                                Saint Vincent and The Grenadines
                                            </option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">
                                                Sao Tome and Principe
                                            </option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">
                                                South Georgia and The South Sandwich Islands
                                            </option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">
                                                Svalbard and Jan Mayen
                                            </option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">
                                                Syrian Arab Republic
                                            </option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">
                                                Tanzania, United Republic of
                                            </option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">
                                                Turks and Caicos Islands
                                            </option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">
                                                United Arab Emirates
                                            </option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">
                                                United States Minor Outlying Islands
                                            </option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">
                                                Virgin Islands, British
                                            </option>
                                            <option value="Virgin Islands, U.S.">
                                                Virgin Islands, U.S.
                                            </option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 p-3 row">
                                    <div class="col">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="number" class="form-control" id="phone" placeholder="Phone Number" aria-describedby="emailHelp" name="phone" />
                                        <div id="emailHelp" class="form-text ms-2">
                                            We'll never share your Phone number with anyone else.
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="example@example.com" aria-describedby="emailHelp" />
                                        <div id="emailHelp" class="form-text ms-2">
                                            We'll never share your Email with anyone else.
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>Address Details</legend>
                                <div class="mb-3 p-2">
                                    <label for="address" class="form-label ms-2">Address</label>

                                    <div class="mb-3 p-1">
                                        <input type="text" class="form-control" id="address" name="a1" placeholder="Address Line 1" />
                                    </div>

                                    <div class="mb-3 p-1">
                                        <div class="row">
                                            <div class="col-4">
                                                <input type="text" class="form-control" id="address" name="city" placeholder="City" />
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control" id="address" name="state" placeholder="State" />
                                            </div>
                                            <div class="col-4">
                                                <input type="number" class="form-control" id="address" name="zip" placeholder="Postal / Zip Code" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I hereby declare that all the
                                    particulars stated
                                    in this application form are true to the best of my knowledge and belief. I have
                                    read and
                                    understood the JEE procedures for both JEE (Main) - 2019 and JEE (Advanced) – 2019.
                                    I shall
                                    abide by the terms and
                                    conditions thereon. If any data is found to be false, I understand that I will be
                                    disqualified.</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I hereby declare that I have
                                    verified the data
                                    submitted by my ward. If any data is found to be false, I understand that my ward
                                    will be
                                    disqualified.</label>
                            </div>





                            <div class="row">

                                <div class="col reg mx-auto rounded-3">
                                    <div class="m-3 p-3">
                                        <h1>Authentication Form</h1>
                                        <form method="post" action="submit.php">
                                            <fieldset>
                                                <legend>
                                                    To be uploaded during the submission of online application form: Scanned images in
                                                    JPG/JPEG format only
                                                </legend>
                                                <fieldset>
                                                    <div class="mb-3 p-2">
                                                        <label for="inputGroupFile02" class="form-label ms-2">Candidate’s Passport Size Photograph (File
                                                            size must be greater than 10 kb and less than 100
                                                            kb.)</label>


                                                        <div class="input-group mb-3">
                                                            <!-- <label for="inputGroupFile02">Upload Photo</label> -->
                                                            <!-- <label for="12name" class="form-label ms-2">School Name</label> -->

                                                            <input type="file" class="form-control" id="inputGroupFile02" name="photo">
                                                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 p-2">
                                                        <label for="inputGroupFile02" class="form-label ms-2">Candidate’s Signature in running hand
                                                            Dimension should be 3.5 cm (width) × 1.5 cm (height) only. (File size must be greater than 4
                                                            kb
                                                            and less than 30 kb.)
                                                        </label>


                                                        <div class="input-group mb-3">
                                                            <!-- <label for="inputGroupFile02">Upload Photo</label> -->
                                                            <!-- <label for="12name" class="form-label ms-2">School Name</label> -->

                                                            <input type="file" class="form-control" id="inputGroupFile02" name="sign">
                                                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 p-2">
                                                        <div class="p-2" style="width: 32rem;">
                                                            <label for="exampleInputEmail1" class="form-label">Aadhaar Number, Aadhaar Enrolment ID,
                                                                Aadhaar Registration number, Passport Number, Ration Card Number, Bank Account Number,
                                                                any other valid Government ID Number</label>
                                                            <input type="number" class="form-control" id="exampleInputEmail1" name="aadhaarNo" aria-describedby="emailHelp">

                                                        </div>


                                                    </div>
                                                    <div class="mb-3 p-2">
                                                        <label for="inputGroupFile02" class="form-label ms-2">Uplad Self-attested Copy of Aadhaar Card
                                                            or any othe Government Id</label>


                                                        <div class="input-group mb-3">
                                                            <!-- <label for="inputGroupFile02">Upload Photo</label> -->
                                                            <!-- <label for="12name" class="form-label ms-2">School Name</label> -->

                                                            <input type="file" class="form-control" id="inputGroupFile02" name="aadhaar">
                                                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">I hereby declare that all the
                                                            particulars stated
                                                            in this application form are true to the best of my knowledge and belief. I have read
                                                            and
                                                            understood the JEE procedures for both JEE (Main) - 2019 and JEE (Advanced) – 2019. I
                                                            shall
                                                            abide by the terms and
                                                            conditions thereon. If any data is found to be false, I understand that I will be
                                                            disqualified.</label>
                                                    </div>
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">I hereby declare that I have verified
                                                            the data
                                                            submitted by my ward. If any data is found to be false, I understand that my ward will
                                                            be
                                                            disqualified.</label>
                                                    </div>
                                                    <div class="row ms-2 justify-content-between">

                                                        <div style="width: 15rem" class="col-md-4 offset-md-4 p-2 col">

                                                            <button type="submit" class="btn btn-primary  ps-3 pe-3" name="submit">Submit</button>


                                                        </div>
                                                    </div>


                                                </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>


                </div>




                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
