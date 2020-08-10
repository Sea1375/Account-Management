<?php /* Template Name: Account */ ?>

<?php get_header(); ?>
<?php
if ( have_posts() ) {
?>

    <!-- User definition -->
    
    <div class="other_elements">
		<input type="hidden" value="<?php bloginfo('template_directory');?>" id="theme_url" />
		<input type="hidden" value="<?=home_url();?>" id="site_url"/>
	</div>

    <div class="container mt-5 p-3">
        <h3 class="bg-success text-white p-2 text-center" style="font-family: 'Lobster', cursive;">My Account</h3>
        <!-- class="needs-validation" novalidate -->
        <form action="action.php" method="POST" id="account">
            <div class="row m-1 p-2">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="firstName">First Name (*)</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" name="firstName" >
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="lastName">Last Name (*)</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" name="lastName"  >
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
            </div>
            
            <div class="card m-4 p-2 " style="position: relative;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="streetLine1">Street Line 1 (*)</label>
                                <input type="text" class="form-control" id="streetLine1" placeholder="Enter your street line 1" name="streetLine1" >
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="streetLine2">Street Line 2 (*)</label>
                                <input type="text" class="form-control" id="streetLine2" placeholder="Enter your street line 2" name="streetLine2" >
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="city">City (*)</label>
                                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" >
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="stateProvince">State/Province</label>
                                <input type="text" class="form-control" id="stateProvince" placeholder="Enter your state/province" name="stateProvince">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="postalCode">Postal Code (*)</label>
                                <input type="text" class="form-control" id="postalCode" placeholder="Enter your postal code" name="postalCode" >
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="sel1">Country (*)</label>
                                <select class="form-control" id="country" ></select>
                            </div>
                        </div>
                    </div>
                    <div class="form-check mb-2 mr-sm-2">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="addressCheck" > I certify I live in the country mentioned above
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </label>
                    </div>    
                </div>
                <div style="position: absolute; left: 30px; top: -15px; background-color: white;" class="px-2">
                    <p style="font-size: larger;"><strong>Address where you live </strong>(for sales tax and data privacy purposes)</p>
                </div>
            </div>
            <div class="row mx-1 p-2">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="emailAdress">Email Address (*)</label>
                        <input type="email" class="form-control" id="emailAddress" placeholder="Enter your email address" name="emailAddress" >
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="country">Birth Year (*)</label>
                        <input type="text" class="form-control" id="birthYear" placeholder="Enter your birth year" name="birthYear" >
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
            </div>
            <div class="mx-4 p-2 form-group">
                <label for="phone">Your mobile number(*)</label><br>
                <input id="phone" name="phone" type="tel" class="form-control" >
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="m-4 p-2">
                <label>Please select your notification preference</label>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="" name = 'noticeSms'> SMS
                        </label>
                    </div>
                    <div class="col-12 col-md-3">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="" name = 'noticeEmail'> Email
                        </label>
                    </div>
                </div>
            </div>

            <div class="m-4 p-2">
                <label>Please select your pulse check frequency preference:</label>
                <div class="radio">
                    <p><input type="radio" name="pulseRadio" checked><span> Every </span> <input type="text" id="frequency" placeholder="Enter your frequency" name="frequency"><span>  weeks</span></p>
                </div>
                <div class="radio">
                    <label><input type="radio" name="pulseRadio"> Automatic</label>
                </div>
            </div>
            <div>
            <div class="m-4 p-2">
                <input type="checkbox" value=""> I have read and agree with the Need2Tellyou<sup>TM</sup> <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>
            </div>
            <div class="row m-1 p-2">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <input type="submit" class="form-control bg-success text-white" value="Save" />
                </div>
                <div class="col-md-3">
                    <input type="button" class="form-control bg-warning" value="Cancel" />
                </div>
            </div>
        </form>
    </div>

    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            allowDropdown: true,
            autoHideDialCode: false,
            separateDialCode: true,
            utilsScript: "build/js/utils.js",
        });
    </script>
    <script>
        getCountryName();
        function getCountryName() {
            var request_url = $('#theme_url').val() + '/page-templates/get_countryName.php';
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("country").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET",request_url,true);
            xmlhttp.send();
        }

        $(document).ready(function () {
            $('#account').on('submit', function(e) {
                e.preventDefault();
                var currentUrl = $('#theme_url').val() + '/page-templates/' + $(this).attr('action');
                alert($(this).serialize());
                $.ajax({
                    url : currentUrl || window.location.pathname,
                    type: "POST",
                    data: $(this).serialize(),
                    success: function (data) {
                        
                    },
                    error: function (jXHR, textStatus, errorThrown) {
                        alert(errorThrown);
                    }
                });
            });
        });
    </script>
    <script>
    /*
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
        })();*/
    </script>
<?php
}
?>
<?php get_footer(); ?>