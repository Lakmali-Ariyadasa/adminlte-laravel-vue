<template>
    <div>
        <div class="card" style="background: #ffffff; padding: 15px;">
            <form action="/action_page.php" method="post">
                <fieldset>

                    <legend><span class="number">1</span> Basic Infomation</legend>

                    <div class="row">
                        <div class="col-md-2"> <label>Membership type:</label></div>

                        <div class="col-md-10">
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
                    <div class="row">
                        <div class="col-md-6">
                            <label>Interests area:</label>
                            <br>
                            <input type="checkbox" id="development" value="interest_development"
                                name="user_interest"><label class="light" for="development">Development</label><br>
                            <input type="checkbox" id="design" value="interest_design" name="user_interest"><label
                                class="light" for="design">Design</label><br>
                            <input type="checkbox" id="business" value="interest_business" name="user_interest"><label
                                class="light" for="business">Business</label>
                        </div>
                    </div>
                </fieldset>

                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <p>Pick a color:</p>
                        <h6>complementary color</h6>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="col-md-12" style="color:#ffffff; font-weight:600;background:#FF0000">
                                    <p class="text-center">#FF0000</p>
                                </div>
                                <div class="col-md-12" style="color:#ffffff;font-weight:600;background:#048412">
                                    <p class="text-center">#048412</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="col-md-12" style="color:#ffffff; font-weight:600;background:#FFFF00">
                                    <p class="text-center">#FFFF00</p>
                                </div>
                                <div class="col-md-12" style="color:#ffffff;font-weight:600;background:#90007D">
                                    <p class="text-center">#90007D</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="col-md-12" style="color:#ffffff; font-weight:600;background:#180090">
                                    <p class="text-center">#180090</p>
                                </div>
                                <div class="col-md-12" style="color:#ffffff;font-weight:600;background:#FF3F02">
                                    <p class="text-center">#FF3F02</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div style="height:165px;">
                                <img class="img-fluid" src="assets/images/complementary.PNG" style="width:100%; height:100%;object-fit:contain;opacity:0.9">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="favcolor">Select your favorite color:</label>
                    <div class="col-md-1">
                        <input type="color" id="favcolor" name="favcolor" value="#ff0000"><br><br>                     
                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="text-right">
                        <button type="submit"
                            style=" background: #6610f2; border: #6610f2; border-radius: 50px;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FeedbackForm",
        props: {

        },
        mounted() {

        }
    }

</script>
