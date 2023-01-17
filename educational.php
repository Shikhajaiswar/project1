<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        .reg {
            background: linear-gradient(to right, #77a3e4, #aa7df3);

        }
    </style>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
    <!-- <h1 class=" p-3 text-center">Registraion form</h1> -->
    <div class="container shadow rounded-3 border-3 my-5 text-light">
        <div class="row">
            
            <div class="col reg mx-auto rounded-3">
            <div class="mb-3 p-3">
        
        
            <form>
            <fieldset>
                <legend>
                    <h1 class="fs-1 d-flex justify-content-center">Educational Details</h1>
                </legend>
                <fieldset>

                    <fieldset>
                        <legend>10 class or its equivalent</legend>
                        <div class="mb-3 p-2">
                            <div class="row ps-2">
                                <div class="col">
                                    <label for="year" class="form-label ms-2">Year of Passing Class 10th or its
                                        Equivalent</label>
                                    <!-- <input type="text" class="form-control ms-2" id="year" placeholder="School Name"
                                        aria-describedby="emailHelp" /> -->
                                    <select class="form-select" aria-label="Default select example" name="year10" id="year">
                                        <option></option>
                                        <option value="1940">1940</option>
                                        <option value="1941">1941</option>
                                        <option value="1942">1942</option>
                                        <option value="1943">1943</option>
                                        <option value="1944">1944</option>
                                        <option value="1945">1945</option>
                                        <option value="1946">1946</option>
                                        <option value="1947">1947</option>
                                        <option value="1948">1948</option>
                                        <option value="1949">1949</option>
                                        <option value="1950">1950</option>
                                        <option value="1951">1951</option>
                                        <option value="1952">1952</option>
                                        <option value="1953">1953</option>
                                        <option value="1954">1954</option>
                                        <option value="1955">1955</option>
                                        <option value="1956">1956</option>
                                        <option value="1957">1957</option>
                                        <option value="1958">1958</option>
                                        <option value="1959">1959</option>
                                        <option value="1960">1960</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="board" class="form-label ms-2">Name of Board/ Council</label>
                                    <!-- <input type="text" class="form-control ms-2" id="year" placeholder="School Name"
                                        aria-describedby="emailHelp" /> -->
                                    <select class="form-select" aria-label="Default select example" name="board10" id="board">
                                        <option value=""></option>
                                        <option value="CENTRAL BOARD OF SECONDARY EDUCATION, NEW DELHI">CENTRAL BOARD OF
                                            SECONDARY EDUCATION, NEW DELHI</option>
                                        <option value="NATIONAL INSTITUTE OF OPEN SCHOOLING, NEW DELHI">NATIONAL
                                            INSTITUTE OF OPEN SCHOOLING, NEW DELHI</option>

                                        <option
                                            value="COUNCIL FOR THE INDIAN SCHOOL CERTIFICATE EXAMINATIONS, NEW DELHI">
                                            COUNCIL FOR THE INDIAN SCHOOL CERTIFICATE EXAMINATIONS, NEW DELHI</option>

                                        <option value="BOARD OF INTERMEDIATE EDUCATION, ANDHRA PRADESH">BOARD OF
                                            INTERMEDIATE EDUCATION, ANDHRA PRADESH</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, ANDHRA PRADESH">BOARD OF SECONDARY
                                            EDUCATION, ANDHRA PRADESH</option>

                                        <option value="A.P. OPEN SCHOOL SOCIETY, ANDHRA PRADESH">A.P. OPEN SCHOOL
                                            SOCIETY, ANDHRA PRADESH</option>

                                        <option value="ASSAM HIGHER SECONDARY EDUCATION COUNCIL, ASSAM">ASSAM HIGHER
                                            SECONDARY EDUCATION COUNCIL, ASSAM</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, ASSAM">BOARD OF SECONDARY
                                            EDUCATION, ASSAM</option>

                                        <option value="BIHAR SCHOOL EXAMINATION BOARD, BIHAR">BIHAR SCHOOL EXAMINATION
                                            BOARD, BIHAR</option>

                                        <option value="BIHAR BOARD OF OPEN SCHOOLING AND EXAMINATION (BBOSE), BIHAR">
                                            BIHAR BOARD OF OPEN SCHOOLING AND EXAMINATION (BBOSE), BIHAR</option>

                                        <option value="CHHATISGARH BOARD OF SECONDARY EDUCATION, CHHATISGARH">
                                            CHHATISGARH BOARD OF SECONDARY EDUCATION, CHHATISGARH</option>

                                        <option value="CHHATISGARH STATE OPEN SCHOOL, CHHATISGARH">CHHATISGARH STATE
                                            OPEN SCHOOL, CHHATISGARH</option>

                                        <option value="GOA BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION, GOA">GOA
                                            BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION, GOA</option>

                                        <option value="GUJARAT SECONDARY AND HIGHER SECONDARY EDUCATION BOARD, GUJARAT">
                                            GUJARAT SECONDARY AND HIGHER SECONDARY EDUCATION BOARD, GUJARAT</option>

                                        <option value="BOARD OF SCHOOL EDUCATION, HARYANA">BOARD OF SCHOOL EDUCATION,
                                            HARYANA</option>

                                        <option value="H. P. BOARD OF SCHOOL EDUCATION, HIMACHAL PRADESH">H. P. BOARD OF
                                            SCHOOL EDUCATION, HIMACHAL PRADESH</option>

                                        <option value="THE J & K STATE BOARD OF SCHOOL EDUCATION, JAMMU">THE J & K STATE
                                            BOARD OF SCHOOL EDUCATION, JAMMU</option>

                                        <option value="JHARKHAND ACADEMIC COUNCIL,RANCHI">JHARKHAND ACADEMIC
                                            COUNCIL,RANCHI</option>

                                        <option value="GOVT. OF KARNATAKA DEPT. OF PRE-UNIVERSITY EDUCATION, KARNATAKA">
                                            GOVT. OF KARNATAKA DEPT. OF PRE-UNIVERSITY EDUCATION, KARNATAKA</option>

                                        <option value="KARNATAKA SECONDARY EDUCATION, EXAMINATION BOARD, KARNATAKA">
                                            KARNATAKA SECONDARY EDUCATION, EXAMINATION BOARD, KARNATAKA</option>

                                        <option value="KERALA BOARD OF PUBLIC EXAMINATION, KERALA">KERALA BOARD OF
                                            PUBLIC EXAMINATION, KERALA</option>

                                        <option value="KERALA BOARD OF HIGHER SECONDARY EDUCATION, KERALA">KERALA BOARD
                                            OF HIGHER SECONDARY EDUCATION, KERALA</option>

                                        <option value="BOARD OF VOCATIONAL HIGHER SECONDARY EDUCATION, KERALA">BOARD OF
                                            VOCATIONAL HIGHER SECONDARY EDUCATION, KERALA</option>

                                        <option
                                            value="MAHARASHTRA STATE BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION, MAHARASHTRA">
                                            MAHARASHTRA STATE BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION,
                                            MAHARASHTRA</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, MADHYA PRADESH">BOARD OF SECONDARY
                                            EDUCATION, MADHYA PRADESH</option>

                                        <option value="M. P. STATE OPEN SCHOOL EDUCATION BOARD, MADHYA PRADESH">M. P.
                                            STATE OPEN SCHOOL EDUCATION BOARD, MADHYA PRADESH</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, MANIPUR">BOARD OF SECONDARY
                                            EDUCATION, MANIPUR</option>

                                        <option value="COUNCIL OF HIGHER SECONDARY EDUCATION, MANIPUR">COUNCIL OF HIGHER
                                            SECONDARY EDUCATION, MANIPUR</option>

                                        <option value="MEGHALAYA BOARD OF SCHOOL EDUCATION, MEGHALAYA">MEGHALAYA BOARD
                                            OF SCHOOL EDUCATION, MEGHALAYA</option>

                                        <option value="MIZORAM BOARD OF SCHOOL EDUCATION, MIZORAM">MIZORAM BOARD OF
                                            SCHOOL EDUCATION, MIZORAM</option>

                                        <option value="NAGALAND BOARD OF SCHOOL EDUCATION, NAGALAND">NAGALAND BOARD OF
                                            SCHOOL EDUCATION, NAGALAND</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, ODISHA">BOARD OF SECONDARY
                                            EDUCATION, ODISHA</option>

                                        <option value="COUNCIL OF HIGHER SECONDARY EDUCATION, ODISHA">COUNCIL OF HIGHER
                                            SECONDARY EDUCATION, ODISHA</option>

                                        <option value="PUNJAB SCHOOL EDUCATION BOARD, PUNJAB">PUNJAB SCHOOL EDUCATION
                                            BOARD, PUNJAB</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, RAJASTHAN">BOARD OF SECONDARY
                                            EDUCATION, RAJASTHAN</option>

                                        <option value="RAJASTHAN STATE OPEN SCHOOL, RAJASTHAN">RAJASTHAN STATE OPEN
                                            SCHOOL, RAJASTHAN</option>

                                        <option
                                            value="STATE BOARD OF SCHOOL EXAMINATIONS (SEC.) & BOARD OF HIGHER SECONDARY, TAMIL NADU">
                                            STATE BOARD OF SCHOOL EXAMINATIONS (SEC.) & BOARD OF HIGHER SECONDARY, TAMIL
                                            NADU</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, TELANGANA STATE">BOARD OF SECONDARY
                                            EDUCATION, TELANGANA STATE</option>

                                        <option value="TELANGANA STATE BOARD OF INTERMEDIATE EDUCATION, TELANGANA">
                                            TELANGANA STATE BOARD OF INTERMEDIATE EDUCATION, TELANGANA</option>

                                        <option value="TELANGANA OPEN SCHOOL SOCIETY, TELANGANA">TELANGANA OPEN SCHOOL
                                            SOCIETY, TELANGANA</option>

                                        <option value="TRIPURA BOARD OF SECONDARY EDUCATION, TRIPURA">TRIPURA BOARD OF
                                            SECONDARY EDUCATION, TRIPURA</option>

                                        <option
                                            value="U.P. BOARD OF HIGH SCHOOL & INTERMEDIATE EDUCATION, UTTAR PRADESH">
                                            U.P. BOARD OF HIGH SCHOOL & INTERMEDIATE EDUCATION, UTTAR PRADESH</option>

                                        <option value="BOARD OF SCHOOL EDUCATION, UTTARAKHAND">BOARD OF SCHOOL
                                            EDUCATION, UTTARAKHAND</option>

                                        <option value="WEST BENGAL BOARD OF SECONDARY EDUCATION, WEST BENGAL">WEST
                                            BENGAL BOARD OF SECONDARY EDUCATION, WEST BENGAL</option>

                                        <option value="WEST BENGAL COUNCIL OF HIGHER SECONDARY EDUCATION, WEST BENGAL">
                                            WEST BENGAL COUNCIL OF HIGHER SECONDARY EDUCATION, WEST BENGAL</option>


                                        <option value="THE WEST BENGAL COUNCIL OF RABINDRA OPEN SCHOOLING, WEST BENGAL">
                                            THE WEST BENGAL COUNCIL OF RABINDRA OPEN SCHOOLING, WEST BENGAL</option>

                                        <option
                                            value="WEST BENGAL STATE COUNCIL OF TECHNICAL & VOCATIONAL EDUCATION & SKILL DEVELOPMENT, WEST BENGAL">
                                            WEST BENGAL STATE COUNCIL OF TECHNICAL & VOCATIONAL EDUCATION & SKILL
                                            DEVELOPMENT, WEST BENGAL</option>

                                        <option value="MAHARISHI PATANJALI SANSKRIT SANSTHAN, NEW DELHI">MAHARISHI
                                            PATANJALI SANSKRIT SANSTHAN, NEW DELHI</option>

                                        <option value="URDU EDUCATION BOARD, NEW DELHI">URDU EDUCATION BOARD, NEW DELHI
                                        </option>

                                        <option value="BIHAR SANSKRIT SHIKSHA BOARD, BIHAR">BIHAR SANSKRIT SHIKSHA
                                            BOARD, BIHAR</option>

                                        <option
                                            value="U.P. BOARD OF SEC. SANSKRIT EDUCATION SANSKRIT BHAWAN, UTTAR PRADESH">
                                            U.P. BOARD OF SEC. SANSKRIT EDUCATION SANSKRIT BHAWAN, UTTAR PRADESH
                                        </option>

                                        <option value="ASSAM SANSKRIT BOARD, ASSAM">ASSAM SANSKRIT BOARD, ASSAM</option>

                                        <option value="JAMIA MILIA ISLAMIA, NEW DELHI">JAMIA MILIA ISLAMIA, NEW DELHI
                                        </option>

                                        <option value="UTTRAKHAND SANSKRIT SHIKSHA PARISHAD, UTTRAKHAND">UTTRAKHAND
                                            SANSKRIT SHIKSHA PARISHAD, UTTRAKHAND</option>

                                        <option value="STATE MADRASSA EDUCATION BOARD, ASSAM">STATE MADRASSA EDUCATION
                                            BOARD, ASSAM</option>

                                        <option value="BIHAR STATE MADRASA EDUCATION BOARD, BIHAR">BIHAR STATE MADRASA
                                            EDUCATION BOARD, BIHAR</option>

                                        <option value="WEST BENGAL BOARD OF MADRASAH EDUCATION, WEST BENGAL">WEST BENGAL
                                            BOARD OF MADRASAH EDUCATION, WEST BENGAL</option>

                                        <option value="CHHATTISGARH MADRASA BOARD, CHHATTISGARH">CHHATTISGARH MADRASA
                                            BOARD, CHHATTISGARH</option>

                                        <option value="UTTARAKHAND MADRASA EDUCATION BOARD, UTTARAKHAND">UTTARAKHAND
                                            MADRASA EDUCATION BOARD, UTTARAKHAND</option>

                                        <option
                                            value="ALIGARH MUSLIM UNIVERSITY BOARD OF SECONDARY & SR. SECONDARY EDUCATION, UTTAR PARDESH">
                                            ALIGARH MUSLIM UNIVERSITY BOARD OF SECONDARY & SR. SECONDARY EDUCATION,
                                            UTTAR PARDESH</option>

                                        <option value="INDIAN COUNCIL FOR HINDI & SANSKRIT EDUCATION, NEW DELHI">INDIAN
                                            COUNCIL FOR HINDI & SANSKRIT EDUCATION, NEW DELHI</option>

                                        <option value="DAYALBAGH EDUCATIONAL INSTITUTE, AGRA">DAYALBAGH EDUCATIONAL
                                            INSTITUTE, AGRA</option>

                                        <option value="BANASTHALI VIDYAPITH P.O., RAJASTHAN">BANASTHALI VIDYAPITH P.O.,
                                            RAJASTHAN</option>

                                        <option value="BHUTAN COUNCIL FOR SCHOOL EXAMINATIONS & ASSESSMENT, BHUTAN">
                                            BHUTAN COUNCIL FOR SCHOOL EXAMINATIONS & ASSESSMENT, BHUTAN</option>

                                        <option value="CAMBRIDGE ASSESSMENT INTERNATIONAL EXAMINATIONS, UK">CAMBRIDGE
                                            ASSESSMENT INTERNATIONAL EXAMINATIONS, UK</option>

                                        <option value="CHHATTISGARH SANSKRIT BOARD, RAIPUR">CHHATTISGARH SANSKRIT BOARD,
                                            RAIPUR</option>

                                        <option value="MAURITIUS EXAMINATION SYNDICATE, MAURITIUS">MAURITIUS EXAMINATION
                                            SYNDICATE, MAURITIUS</option>

                                        <option value="NATIONAL EXAMINATIONS BOARD, NEPAL">NATIONAL EXAMINATIONS BOARD,
                                            NEPAL</option>

                                        <option value="PEARSON EDEXCEL LTD., UK">PEARSON EDEXCEL LTD., UK</option>

                                        <option value="INTERNATIONAL BACCALAUREATE, GENEVA">INTERNATIONAL BACCALAUREATE,
                                            GENEVA</option>

                                        <option value="NORTHWEST ACCREDITATION COMMISSION (NWAC), USA">NORTHWEST
                                            ACCREDITATION COMMISSION (NWAC), USA</option>

                                        <option
                                            value="SINGHANIA UNIVERSITY BOARD OF SECONDARY & SENIOR SECONDARY EDUCATION, RAJASTHAN">
                                            SINGHANIA UNIVERSITY BOARD OF SECONDARY & SENIOR SECONDARY EDUCATION,
                                            RAJASTHAN</option>

                                    </select>
                                </div>
                                
                            </div>
                        </div>
                        </fieldset>

                    <fieldset>
                        <legend>12 Class or its Equivalent</legend>
                        <div class="mb-3 p-2">
                            <div class="row ps-2">
                                <div class="col">
                                    <label for="12year" class="form-label ms-2">Year of Passing Class 12th or its
                                        Equivalent</label>
                                    <!-- <input type="text" class="form-control ms-2" id="year" placeholder="School Name"
                                        aria-describedby="emailHelp" /> -->
                                    <select class="form-select" aria-label="Default select example" id="12year" name="year12">
                                        <option></option>
                                        <option value="1940">1940</option>
                                        <option value="1941">1941</option>
                                        <option value="1942">1942</option>
                                        <option value="1943">1943</option>
                                        <option value="1944">1944</option>
                                        <option value="1945">1945</option>
                                        <option value="1946">1946</option>
                                        <option value="1947">1947</option>
                                        <option value="1948">1948</option>
                                        <option value="1949">1949</option>
                                        <option value="1950">1950</option>
                                        <option value="1951">1951</option>
                                        <option value="1952">1952</option>
                                        <option value="1953">1953</option>
                                        <option value="1954">1954</option>
                                        <option value="1955">1955</option>
                                        <option value="1956">1956</option>
                                        <option value="1957">1957</option>
                                        <option value="1958">1958</option>
                                        <option value="1959">1959</option>
                                        <option value="1960">1960</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="12board" class="form-label ms-2">Name of Board/ Council</label>
                                    <!-- <input type="text" class="form-control ms-2" id="year" placeholder="School Name"
                                        aria-describedby="emailHelp" /> -->
                                    <select class="form-select" aria-label="Default select example" id="12board">
                                        <option value=""></option>
                                        <option value="CENTRAL BOARD OF SECONDARY EDUCATION, NEW DELHI">CENTRAL BOARD OF
                                            SECONDARY EDUCATION, NEW DELHI</option>
                                        <option value="NATIONAL INSTITUTE OF OPEN SCHOOLING, NEW DELHI">NATIONAL
                                            INSTITUTE OF OPEN SCHOOLING, NEW DELHI</option>

                                        <option
                                            value="COUNCIL FOR THE INDIAN SCHOOL CERTIFICATE EXAMINATIONS, NEW DELHI">
                                            COUNCIL FOR THE INDIAN SCHOOL CERTIFICATE EXAMINATIONS, NEW DELHI</option>

                                        <option value="BOARD OF INTERMEDIATE EDUCATION, ANDHRA PRADESH">BOARD OF
                                            INTERMEDIATE EDUCATION, ANDHRA PRADESH</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, ANDHRA PRADESH">BOARD OF SECONDARY
                                            EDUCATION, ANDHRA PRADESH</option>

                                        <option value="A.P. OPEN SCHOOL SOCIETY, ANDHRA PRADESH">A.P. OPEN SCHOOL
                                            SOCIETY, ANDHRA PRADESH</option>

                                        <option value="ASSAM HIGHER SECONDARY EDUCATION COUNCIL, ASSAM">ASSAM HIGHER
                                            SECONDARY EDUCATION COUNCIL, ASSAM</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, ASSAM">BOARD OF SECONDARY
                                            EDUCATION, ASSAM</option>

                                        <option value="BIHAR SCHOOL EXAMINATION BOARD, BIHAR">BIHAR SCHOOL EXAMINATION
                                            BOARD, BIHAR</option>

                                        <option value="BIHAR BOARD OF OPEN SCHOOLING AND EXAMINATION (BBOSE), BIHAR">
                                            BIHAR BOARD OF OPEN SCHOOLING AND EXAMINATION (BBOSE), BIHAR</option>

                                        <option value="CHHATISGARH BOARD OF SECONDARY EDUCATION, CHHATISGARH">
                                            CHHATISGARH BOARD OF SECONDARY EDUCATION, CHHATISGARH</option>

                                        <option value="CHHATISGARH STATE OPEN SCHOOL, CHHATISGARH">CHHATISGARH STATE
                                            OPEN SCHOOL, CHHATISGARH</option>

                                        <option value="GOA BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION, GOA">GOA
                                            BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION, GOA</option>

                                        <option value="GUJARAT SECONDARY AND HIGHER SECONDARY EDUCATION BOARD, GUJARAT">
                                            GUJARAT SECONDARY AND HIGHER SECONDARY EDUCATION BOARD, GUJARAT</option>

                                        <option value="BOARD OF SCHOOL EDUCATION, HARYANA">BOARD OF SCHOOL EDUCATION,
                                            HARYANA</option>

                                        <option value="H. P. BOARD OF SCHOOL EDUCATION, HIMACHAL PRADESH">H. P. BOARD OF
                                            SCHOOL EDUCATION, HIMACHAL PRADESH</option>

                                        <option value="THE J & K STATE BOARD OF SCHOOL EDUCATION, JAMMU">THE J & K STATE
                                            BOARD OF SCHOOL EDUCATION, JAMMU</option>

                                        <option value="JHARKHAND ACADEMIC COUNCIL,RANCHI">JHARKHAND ACADEMIC
                                            COUNCIL,RANCHI</option>

                                        <option value="GOVT. OF KARNATAKA DEPT. OF PRE-UNIVERSITY EDUCATION, KARNATAKA">
                                            GOVT. OF KARNATAKA DEPT. OF PRE-UNIVERSITY EDUCATION, KARNATAKA</option>

                                        <option value="KARNATAKA SECONDARY EDUCATION, EXAMINATION BOARD, KARNATAKA">
                                            KARNATAKA SECONDARY EDUCATION, EXAMINATION BOARD, KARNATAKA</option>

                                        <option value="KERALA BOARD OF PUBLIC EXAMINATION, KERALA">KERALA BOARD OF
                                            PUBLIC EXAMINATION, KERALA</option>

                                        <option value="KERALA BOARD OF HIGHER SECONDARY EDUCATION, KERALA">KERALA BOARD
                                            OF HIGHER SECONDARY EDUCATION, KERALA</option>

                                        <option value="BOARD OF VOCATIONAL HIGHER SECONDARY EDUCATION, KERALA">BOARD OF
                                            VOCATIONAL HIGHER SECONDARY EDUCATION, KERALA</option>

                                        <option
                                            value="MAHARASHTRA STATE BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION, MAHARASHTRA">
                                            MAHARASHTRA STATE BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION,
                                            MAHARASHTRA</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, MADHYA PRADESH">BOARD OF SECONDARY
                                            EDUCATION, MADHYA PRADESH</option>

                                        <option value="M. P. STATE OPEN SCHOOL EDUCATION BOARD, MADHYA PRADESH">M. P.
                                            STATE OPEN SCHOOL EDUCATION BOARD, MADHYA PRADESH</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, MANIPUR">BOARD OF SECONDARY
                                            EDUCATION, MANIPUR</option>

                                        <option value="COUNCIL OF HIGHER SECONDARY EDUCATION, MANIPUR">COUNCIL OF HIGHER
                                            SECONDARY EDUCATION, MANIPUR</option>

                                        <option value="MEGHALAYA BOARD OF SCHOOL EDUCATION, MEGHALAYA">MEGHALAYA BOARD
                                            OF SCHOOL EDUCATION, MEGHALAYA</option>

                                        <option value="MIZORAM BOARD OF SCHOOL EDUCATION, MIZORAM">MIZORAM BOARD OF
                                            SCHOOL EDUCATION, MIZORAM</option>

                                        <option value="NAGALAND BOARD OF SCHOOL EDUCATION, NAGALAND">NAGALAND BOARD OF
                                            SCHOOL EDUCATION, NAGALAND</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, ODISHA">BOARD OF SECONDARY
                                            EDUCATION, ODISHA</option>

                                        <option value="COUNCIL OF HIGHER SECONDARY EDUCATION, ODISHA">COUNCIL OF HIGHER
                                            SECONDARY EDUCATION, ODISHA</option>

                                        <option value="PUNJAB SCHOOL EDUCATION BOARD, PUNJAB">PUNJAB SCHOOL EDUCATION
                                            BOARD, PUNJAB</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, RAJASTHAN">BOARD OF SECONDARY
                                            EDUCATION, RAJASTHAN</option>

                                        <option value="RAJASTHAN STATE OPEN SCHOOL, RAJASTHAN">RAJASTHAN STATE OPEN
                                            SCHOOL, RAJASTHAN</option>

                                        <option
                                            value="STATE BOARD OF SCHOOL EXAMINATIONS (SEC.) & BOARD OF HIGHER SECONDARY, TAMIL NADU">
                                            STATE BOARD OF SCHOOL EXAMINATIONS (SEC.) & BOARD OF HIGHER SECONDARY, TAMIL
                                            NADU</option>

                                        <option value="BOARD OF SECONDARY EDUCATION, TELANGANA STATE">BOARD OF SECONDARY
                                            EDUCATION, TELANGANA STATE</option>

                                        <option value="TELANGANA STATE BOARD OF INTERMEDIATE EDUCATION, TELANGANA">
                                            TELANGANA STATE BOARD OF INTERMEDIATE EDUCATION, TELANGANA</option>

                                        <option value="TELANGANA OPEN SCHOOL SOCIETY, TELANGANA">TELANGANA OPEN SCHOOL
                                            SOCIETY, TELANGANA</option>

                                        <option value="TRIPURA BOARD OF SECONDARY EDUCATION, TRIPURA">TRIPURA BOARD OF
                                            SECONDARY EDUCATION, TRIPURA</option>

                                        <option
                                            value="U.P. BOARD OF HIGH SCHOOL & INTERMEDIATE EDUCATION, UTTAR PRADESH">
                                            U.P. BOARD OF HIGH SCHOOL & INTERMEDIATE EDUCATION, UTTAR PRADESH</option>

                                        <option value="BOARD OF SCHOOL EDUCATION, UTTARAKHAND">BOARD OF SCHOOL
                                            EDUCATION, UTTARAKHAND</option>

                                        <option value="WEST BENGAL BOARD OF SECONDARY EDUCATION, WEST BENGAL">WEST
                                            BENGAL BOARD OF SECONDARY EDUCATION, WEST BENGAL</option>

                                        <option value="WEST BENGAL COUNCIL OF HIGHER SECONDARY EDUCATION, WEST BENGAL">
                                            WEST BENGAL COUNCIL OF HIGHER SECONDARY EDUCATION, WEST BENGAL</option>


                                        <option value="THE WEST BENGAL COUNCIL OF RABINDRA OPEN SCHOOLING, WEST BENGAL">
                                            THE WEST BENGAL COUNCIL OF RABINDRA OPEN SCHOOLING, WEST BENGAL</option>

                                        <option
                                            value="WEST BENGAL STATE COUNCIL OF TECHNICAL & VOCATIONAL EDUCATION & SKILL DEVELOPMENT, WEST BENGAL">
                                            WEST BENGAL STATE COUNCIL OF TECHNICAL & VOCATIONAL EDUCATION & SKILL
                                            DEVELOPMENT, WEST BENGAL</option>

                                        <option value="MAHARISHI PATANJALI SANSKRIT SANSTHAN, NEW DELHI">MAHARISHI
                                            PATANJALI SANSKRIT SANSTHAN, NEW DELHI</option>

                                        <option value="URDU EDUCATION BOARD, NEW DELHI">URDU EDUCATION BOARD, NEW DELHI
                                        </option>

                                        <option value="BIHAR SANSKRIT SHIKSHA BOARD, BIHAR">BIHAR SANSKRIT SHIKSHA
                                            BOARD, BIHAR</option>

                                        <option
                                            value="U.P. BOARD OF SEC. SANSKRIT EDUCATION SANSKRIT BHAWAN, UTTAR PRADESH">
                                            U.P. BOARD OF SEC. SANSKRIT EDUCATION SANSKRIT BHAWAN, UTTAR PRADESH
                                        </option>

                                        <option value="ASSAM SANSKRIT BOARD, ASSAM">ASSAM SANSKRIT BOARD, ASSAM</option>

                                        <option value="JAMIA MILIA ISLAMIA, NEW DELHI">JAMIA MILIA ISLAMIA, NEW DELHI
                                        </option>

                                        <option value="UTTRAKHAND SANSKRIT SHIKSHA PARISHAD, UTTRAKHAND">UTTRAKHAND
                                            SANSKRIT SHIKSHA PARISHAD, UTTRAKHAND</option>

                                        <option value="STATE MADRASSA EDUCATION BOARD, ASSAM">STATE MADRASSA EDUCATION
                                            BOARD, ASSAM</option>

                                        <option value="BIHAR STATE MADRASA EDUCATION BOARD, BIHAR">BIHAR STATE MADRASA
                                            EDUCATION BOARD, BIHAR</option>

                                        <option value="WEST BENGAL BOARD OF MADRASAH EDUCATION, WEST BENGAL">WEST BENGAL
                                            BOARD OF MADRASAH EDUCATION, WEST BENGAL</option>

                                        <option value="CHHATTISGARH MADRASA BOARD, CHHATTISGARH">CHHATTISGARH MADRASA
                                            BOARD, CHHATTISGARH</option>

                                        <option value="UTTARAKHAND MADRASA EDUCATION BOARD, UTTARAKHAND">UTTARAKHAND
                                            MADRASA EDUCATION BOARD, UTTARAKHAND</option>

                                        <option
                                            value="ALIGARH MUSLIM UNIVERSITY BOARD OF SECONDARY & SR. SECONDARY EDUCATION, UTTAR PARDESH">
                                            ALIGARH MUSLIM UNIVERSITY BOARD OF SECONDARY & SR. SECONDARY EDUCATION,
                                            UTTAR PARDESH</option>

                                        <option value="INDIAN COUNCIL FOR HINDI & SANSKRIT EDUCATION, NEW DELHI">INDIAN
                                            COUNCIL FOR HINDI & SANSKRIT EDUCATION, NEW DELHI</option>

                                        <option value="DAYALBAGH EDUCATIONAL INSTITUTE, AGRA">DAYALBAGH EDUCATIONAL
                                            INSTITUTE, AGRA</option>

                                        <option value="BANASTHALI VIDYAPITH P.O., RAJASTHAN">BANASTHALI VIDYAPITH P.O.,
                                            RAJASTHAN</option>

                                        <option value="BHUTAN COUNCIL FOR SCHOOL EXAMINATIONS & ASSESSMENT, BHUTAN">
                                            BHUTAN COUNCIL FOR SCHOOL EXAMINATIONS & ASSESSMENT, BHUTAN</option>

                                        <option value="CAMBRIDGE ASSESSMENT INTERNATIONAL EXAMINATIONS, UK">CAMBRIDGE
                                            ASSESSMENT INTERNATIONAL EXAMINATIONS, UK</option>

                                        <option value="CHHATTISGARH SANSKRIT BOARD, RAIPUR">CHHATTISGARH SANSKRIT BOARD,
                                            RAIPUR</option>

                                        <option value="MAURITIUS EXAMINATION SYNDICATE, MAURITIUS">MAURITIUS EXAMINATION
                                            SYNDICATE, MAURITIUS</option>

                                        <option value="NATIONAL EXAMINATIONS BOARD, NEPAL">NATIONAL EXAMINATIONS BOARD,
                                            NEPAL</option>

                                        <option value="PEARSON EDEXCEL LTD., UK">PEARSON EDEXCEL LTD., UK</option>

                                        <option value="INTERNATIONAL BACCALAUREATE, GENEVA">INTERNATIONAL BACCALAUREATE,
                                            GENEVA</option>

                                        <option value="NORTHWEST ACCREDITATION COMMISSION (NWAC), USA">NORTHWEST
                                            ACCREDITATION COMMISSION (NWAC), USA</option>

                                        <option
                                            value="SINGHANIA UNIVERSITY BOARD OF SECONDARY & SENIOR SECONDARY EDUCATION, RAJASTHAN">
                                            SINGHANIA UNIVERSITY BOARD OF SECONDARY & SENIOR SECONDARY EDUCATION,
                                            RAJASTHAN</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="12roll" class="form-label ms-2">Roll Number</label>
                                    <input type="text" class="form-control ms-2" id="12roll" placeholder="Roll Number"
                                        aria-describedby="emailHelp" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 p-2">
                            <label for="12name" class="form-label ms-2">School Name</label>
                            <input type="text" class="form-control ms-2" id="12name" placeholder="School Name"
                                aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3 p-2">
                            <label for="saddress1" class="form-label ms-2">School Address</label> <br>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                            <label class="form-check-label" for="exampleCheck1" onchange="myFunction()">Same School
                                addess details as
                                above</label>
                            <div class="mb-3 p-1">
                                <input type="text" class="form-control" id="saddress1" required
                                    placeholder="Address Line 1" />
                            </div>
                            <div class="mb-3 p-1">
                                <input type="text" class="form-control" id="saddress2" required
                                    placeholder="Address Line 2" />
                            </div>
                            <div class="mb-3 p-1">
                                <div class="row">
                                    <div class="col-4">
                                        <input type="text" class="form-control" id="saddress3" required
                                            placeholder="City" />
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" id="saddress4" required
                                            placeholder="State" />
                                    </div>
                                    <div class="col-4">
                                        <input type="number" class="form-control" id="saddress5" required
                                            placeholder="Postal / Zip Code" />
                                    </div>
                                </div>
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
                            <div style="width: 15rem" class="p-2 col">
                                <!-- <button type="button" class=" btn btn-primary  ps-3 pe-3">Reset</button> -->
                                <a href="registration.php">
                                    <!-- <input class="btn btn-primary ps-3 pe-3" type="reset" value="Back" /> -->
                                    <button type="button" class="btn btn-primary  ps-3 pe-3">Back</button>
                                </a>
                            </div>
                            <div style="width: 15rem" class="col-md-4 offset-md-4 p-2 col">
                                <a href="authentication.php">
                                    <button type="button" class="btn btn-primary  ps-3 pe-3">Next</button>

                                </a>
                            </div>
                        </div>
                    </fieldset>


                </fieldset>
        </form></div>
            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- <script src="educational.js"></script> -->

</body>

</html>