<?php 
include "Include/header.php";
?>
<div class="container-fluid px-0 aboutusbanner">
    <div class="container px-2">
        <div class="text-over-banner px-0 mx-3">
            <div class="col-lg-5">
                <h1 class="text-white" data-aos="fade-up" data-aos-duration="3000">It is Better to Travel Well Than
                    to Arrive
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container px-2">
        <h1 class="py-3 text-center contact-heading">Contact Us</h1>
        <h3 class="text-dark text-center">Thank you for visiting us!<br />
            If you have any inquiries or feedback, please contact us by completing<br /> the below form.</h3>
        <div class="row mt-5">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 contactus-border mb-3">
                <form method="post" action="" class="p-3">

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="text-dark">First Name<span class="imp_staric">*</span></label>
                                <input type="text" class="form-control border border-dark contact-input-field "
                                    id="firstname1" aria-describedby="firstname" name="cnt_first_name">
                                <div class="d-flex justify-content-center">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="text-dark">Last Name</label>
                                <input type="text" class="form-control border border-dark contact-input-field "
                                    id="lastname" aria-describedby="lastname" name="cnt_last_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="text-dark">Email<span class="imp_staric">*</span></label>
                                <input type="email" class="form-control border border-dark contact-input-field "
                                    id="email" aria-describedby="email" name="cnt_email">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="text-dark">Country</label>
                            <div class="form-group">
                                <select id="inputState" class="form-control border border-dark contact-input-field"
                                    name="cnt_country">
                                    <option value="" disabled selected>Choose Your Country</option>
                                    <option value="AFG">Afghanistan</option>
                                    <option value="AUS">Australia</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-12 px-0">
                        <div class="form-group">
                            <label class="text-dark">Subject<span class="imp_staric">*</span></label>
                            <select id="inputState" class="form-control border border-dark contact-input-field"
                                name="cnt_subject">
                                <option value="" disabled selected>Related</option>
                                <option value="Career">Career</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Travel operators/Travel agents">Travel operators/Travel agents</option>
                                <option value="Consumer events">Consumer events</option>
                                <option value="Media">Media</option>
                                <option value="Digital">Digital</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-12 px-0">
                        <label class="text-dark">Message<span class="imp_staric">*</span></label>
                        <div class="form-group">
                            <textarea class="form-control border border-dark contact-input-field px-4 "
                                id=" exampleFormControlTextarea1" rows="3" name="cnt_msg"></textarea>

                        </div>
                    </div>
                    <button type="submit"
                        class=" border border-dark btn btn-primary d-flex justify-content-center m-auto w-75 contact-input-field">Submit</button>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
<?php
include "includes/scripts.php";
?>
<?php 
include "Include/footer.php";
?>