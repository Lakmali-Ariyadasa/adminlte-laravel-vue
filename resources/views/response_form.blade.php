<style>
    *,
    *:before,
    *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        font-family: 'Nunito', sans-serif;
        color: #384047;
    }

    form {
        /* max-width: 300px; */
        margin: 10px auto;
        padding: 10px 20px;
        background: #f4f7f8;
        border-radius: 8px;
    }

    h1 {
        margin: 0 0 30px 0;
        text-align: center;
    }

    input[type="text"],
    input[type="password"],
    input[type="date"],
    input[type="datetime"],
    input[type="email"],
    input[type="number"],
    input[type="search"],
    input[type="tel"],
    input[type="time"],
    input[type="url"],
    textarea,
    select {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        font-size: 16px;
        height: auto;
        margin: 0;
        outline: 0;
        padding: 15px;
        width: 100%;
        background-color: #e8eeef;
        color: #8a97a0;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        margin-bottom: 30px;
    }

    input[type="radio"],
    input[type="checkbox"] {
        margin: 0 4px 8px 0;
    }

    select {
        padding: 6px;
        height: 32px;
        border-radius: 2px;
    }

    button {
        padding: 19px 39px 18px 39px;
        color: #FFF;
        background-color: #002f78;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        border-radius: 5px;
        /* width: 100%; */
        border: 15px solid #002f78;
        border-width: 1px 1px 3px;
        box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
        margin-bottom: 10px;
    }

    fieldset {
        margin-bottom: 30px;
        border: none;
    }

    legend {
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    label.light {
        font-weight: 300;
        display: inline;
    }

    .number {
        background-color: #FFEB3B;
        color: #fff;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 4px;
        line-height: 30px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
        border-radius: 100%;
    }

    @media screen and (min-width: 480px) {

        /* form {
      max-width: 480px;
    } */

    }

</style>
@extends('layouts.app')

@section('content')

@php
$title = "Form";
$breadcrumbs = [
'First' => ['url' => '/first'],
'Second' => ['url' => '/second'],
'Third' => ['url' => '/third']
];
@endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">

                <form action="index.html" method="post">

                    <fieldset>

                        <legend><span class="number">1</span> Your basic info</legend>

                        <div class="row">
                            <div class="col-md-3"> <label>Membership type:</label></div>

                            <div class="col-md-9">
                                <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13"
                                    class="light">Internal Member</label>
                                <input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13"
                                    class="light">External Member</label>

                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="job">Department Name:</label>
                                <select id="job" name="user_job">

                                    <option value="1">Administrative</option>
                                    <option value="2">Planing and Research</option>
                                    <option value="3">Accounts</option>
                                    <option value="4">Legal</option>
                                    <option value="5">Procurement</option>
                                    <option value="6">Audit and management</option>
                                    <option value="7">Production</option>
                                    <option value="8">Marketing</option>
                                </select>
                            </div>

                            <div class="col-md-6">

                                <label for="job">Job Role:</label>
                                <select id="job" name="user_job">
                                    <optgroup label="Web">
                                        <option value="1">Front-End Developer</option>
                                        <option value="2">PHP Developer</option>
                                        <option value="3">Python Developer</option>
                                        <option value="4">Rails Developer</option>
                                        <option value="5">Web Designer</option>
                                        <option value="6">WordPress Developer</option>
                                    </optgroup>
                                    <optgroup label="Mobile">
                                        <option value="7">Android Developer</option>
                                        <option value="8">iOS Developer</option>
                                        <option value="9">Mobile Designer</option>
                                    </optgroup>
                                    <optgroup label="Business">
                                        <option value="10">Business Owner</option>
                                        <option value="11">Freelancer</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="job">Job Status:</label>
                                <select id="job" name="user_job">

                                    <option value="1">Permanent</option>
                                    <option value="2">Temporary</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col-md-6">

                                <label for="job">Gender:</label>
                                <select id="job" name="user_job">

                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="job">Numbers of experience in industrial:</label>
                                <select id="job" name="user_job">

                                    <option value="1">0 - 5 Years</option>
                                    <option value="2">5 Years - 10 Years</option>
                                    <option value="3">10 Years - 15 Years</option>
                                    <option value="4">More than 15 Years</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col-md-6">

                                <label for="job">Current job related field:</label>
                                <select id="job" name="user_job">

                                    <option value="1">Information Technology</option>
                                    <option value="2">Production</option>
                                    <option value="3">Accounting</option>
                                    <option value="4">Marketing</option>
                                </select>
                            </div>
                        </div>

                    </fieldset>

                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <p>Pick a color:</p>

                            <div class="row">
                                <div class="col-md-1" style="font-weight:600;background:#FF0000">
                                    <p class="w3-xxlarge">#FF0000</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#C0C0C0">
                                    <p class="w3-xlarge w3-wide">#C0C0C0</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#008000">
                                    <p class="w3-xxlarge">#008000</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#0000FF">
                                    <p class="w3-xxlarge w3-wide">#0000FF</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#9FE2BF">
                                    <p class="w3-xxlarge">#9FE2BF</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#FF00FF">
                                    <p class="w3-xxlarge w3-wide">#FF00FF</p>
                                </div>
                                <div class="col-md-1" style="color:#ffffff;font-weight:600;background:#000080">
                                    <p class="w3-xxlarge">#000080</p>
                                </div>
                                <div class="col-md-1" style="color:#ffffff;font-weight:600;background:#800000">
                                    <p class="w3-xlarge w3-wide">#800000<br></p>
                                </div>
                                <div class="col-md-1" style="color:#ffffff;font-weight:600;background:#800080">
                                    <p class="w3-xxlarge">#800080</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#A6EDF7">
                                    <p class="w3-xxlarge w3-wide">#A6EDF7</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#F7A6D2">
                                    <p class="w3-xxlarge">#F7A6D2</p>
                                </div>
                                <div class="col-md-1" style="color:#ffffff;font-weight:600;background:#F55302">
                                    <p class="w3-xxlarge w3-wide">#F55302</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1" style="font-weight:600;background:#DFFF00">
                                    <p class="w3-xxlarge">#DFFF00</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#FFBF00">
                                    <p class="w3-xlarge w3-wide">#FFBF00</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#FF7F50">
                                    <p class="w3-xxlarge">#FF7F50</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#DE3163">
                                    <p class="w3-xxlarge w3-wide">#DE3163</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#9FE2BF">
                                    <p class="w3-xxlarge">#9FE2BF</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#40E0D0">
                                    <p class="w3-xxlarge w3-wide">#40E0D0</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#fefbd8">
                                    <p class="w3-xxlarge">#fefbd8</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#80ced6">
                                    <p class="w3-xlarge w3-wide">#80ced6<br></p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#6495ED">
                                    <p class="w3-xxlarge">#6495ED</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#CCCCFF">
                                    <p class="w3-xxlarge w3-wide">#CCCCFF</p>
                                </div>
                                <div class="col-md-1" style="font-weight:600;background:#FFFFFF">
                                    <p class="w3-xxlarge">#FFFFFF</p>
                                </div>
                                <div class="col-md-1" style="color:#ffffff;font-weight:600;background:#000000">
                                    <p class="w3-xxlarge w3-wide">#000000</p>
                                </div>
                            </div>

                            <fieldset>
                                <br>
                                <label>Interests:</label>
                                <br>
                                <input type="checkbox" id="development" value="interest_development"
                                    name="user_interest"><label class="light" for="development">Development</label><br>
                                <input type="checkbox" id="design" value="interest_design" name="user_interest"><label
                                    class="light" for="design">Design</label><br>
                                <input type="checkbox" id="business" value="interest_business"
                                    name="user_interest"><label class="light" for="business">Business</label>
                                <br>
                            </fieldset>
                            <br>
                            <button type="submit">Submit</button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
