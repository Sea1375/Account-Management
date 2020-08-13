<?php /* Template Name: Account */ ?>

<?php get_header(); ?>
<?php
if ( have_posts() ) {
?>
<?php

    $act_plan = '';
    $readonly = '';
    $frequency = '';

    if(!empty($_GET)){
        $act_plan = $_GET['plan'];
    }

    if($act_plan == 'FREE') {
        $readonly = 'readonly';
        $frequency = '4';
    } else if($act_plan == 'STANDARD') {
        $readonly = 'readonly';
        $frequency = '2';
    } else {

    }

?>
    <!-- User definition -->
    
    <div class="other_elements">
		<input type="hidden" value="<?php bloginfo('template_directory');?>" id="theme_url" />
		<input type="hidden" value="<?=home_url();?>" id="site_url"/>
	</div>

    <div class="container mt-5 p-3">
        <h3 class="bg-success text-white p-2 text-center" style="font-family: 'Lobster', cursive;">My Account</h3>
        <!-- class="needs-validation" novalidate -->
        <form action="account_form_action.php" method="POST" id="account" class="needs-validation">

            <input type="hidden" value="<?php  ?>" name="actPlan" />
            <input type='hidden' value='N' name='actAuto' />
        
            <div class="row m-1 p-2">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="firstName">First Name (*)</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" name="firstName" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="lastName">Last Name (*)</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" name="lastName"  required>
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
                                <input type="text" class="form-control" id="streetLine1" placeholder="Enter your street line 1" name="streetLine1" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="streetLine2">Street Line 2 (*)</label>
                                <input type="text" class="form-control" id="streetLine2" placeholder="Enter your street line 2" name="streetLine2" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="city">City (*)</label>
                                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
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
                                <input type="text" class="form-control" id="postalCode" placeholder="Enter your postal code" name="postalCode" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="sel1">Country (*)</label>
                                <select class="form-control" id="country" name='country' required></select>
                            </div>
                        </div>
                    </div>
                    <div class="form-check mb-2 mr-sm-2">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="addressCheck" required> I certify I live in the country mentioned above
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
                        <input type="email" class="form-control" id="emailAddress" placeholder="Enter your email address" name="emailAddress" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="country">Birth Year (*)</label>
                        <input type="number" class="form-control" id="birthYear" placeholder="Enter your birth year" name="birthYear" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
            </div>
            <div class="mx-4 p-2 form-group">
                <label for="phone">Your mobile number(*)</label><br>
                <input type='hidden' name='mobileNumber' />
                <input id="phone" name="phone" type="tel" class="form-control" required>
                <span id="valid-msg" class="invisible">✓ Valid</span>
                <span id="error-msg" class="invisible"></span>
            </div>
            
            <div class="m-4 p-2 form-check">
                <label>Please select your notification preference</label>
                <div class="row mx-2">
                    <div class="col-12 col-md-3">
                        <label class="checkbox-inline form-check-label">
                            <input type="checkbox" class="form-check-input" name = 'noticeSMS' id = 'noticeSMS'> SMS
                        </label>
                    </div>
                    <div class="col-12 col-md-3">
                        <label class="checkbox-inline form-check-label">
                            <input type="checkbox" class="form-check-input" name = 'noticeEmail' id = 'noticeEmail'> Email
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="type" name='forNotice' class='invisible' required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out one field at least.</div>
                </div>
            </div>

            <div class="m-4 p-2">
                <label>Please select your pulse check frequency preference:</label>
                <div class="radio">
                    <p><input type="radio" name="pulseRadio" checked value = 'every'><span> Every </span> 
                    <input type="number" id="frequency" placeholder="Enter your frequency" name="frequency" min='1' max='8' <?php echo $readonly; ?> value = '<?php echo $frequency; ?>'> 
                    <span>  weeks</span></p>
                </div>
                <div class="radio">
                    <label><input type="radio" name="pulseRadio" value='automatic'> Automatic</label>
                </div>
            </div>
            <div>
            <div class="m-4 p-2">
                <input type="checkbox" value="" required> I have read and agree with the Need2Tellyou<sup>TM</sup> <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>
            </div>
            <div class="row m-1 p-2">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <input type="submit" class="form-control bg-success text-white" value="Save" />
                </div>
                <div class="col-md-3">
                    <input type="button" class="bg-warning text-white" data-toggle="modal" data-target="#myModal" value='Cancel' />
                </div>
            </div>
        </form>
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Do you want to cancel?</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    Go to Home page...
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href='#'><button type="button" class="btn btn-danger" data-dismiss="modal">Go to Home</button></a>
                </div>
                
            </div>
            </div>
        </div>
    </div>

    <script>
        var input = document.querySelector("#phone"),
        errorMsg = document.querySelector("#error-msg"),
        validMsg = document.querySelector("#valid-msg");

        // here, the index maps to the error code returned from getValidationError - see readme
        var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        
        var iti = window.intlTelInput(input, {
            nationalMode: true,
            allowDropdown: true,
            autoHideDialCode: false,
            separateDialCode: true,
            utilsScript: "build/js/utils.js",
        });
        var reset = function() {
            input.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("invisible");
            validMsg.classList.add("invisible");
        };

        // on blur: validate
        input.addEventListener('blur', function() {
            reset();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    $('input[name=mobileNumber]').val(iti.getNumber());
                    validMsg.classList.remove("invisible");
                } else {
                    input.classList.add("error");
                    var errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("invisible");
                }
            }
        });

        // on keyup / change flag: reset
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);
    </script>

    <script>
        getCountryName();
        function getCountryName() {
            var request_url = $('#theme_url').val() + '/page-templates/account_management/get_countryName.php';
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

                var index = $("input[name=pulseRadio]")[0].checked ? 0 : 1;
                if(index == 1) $("input[name=actAuto]").val('Y');

                e.preventDefault();
                var currentUrl = $('#theme_url').val() + '/page-templates/account_management/account/' + $(this).attr('action');

                $.ajax({
                    url : currentUrl || window.location.pathname,
                    type: "POST",
                    data: $(this).serialize(),
                    success: function (data) {
                        console.log(data, '------------');
                    },
                    error: function (jXHR, textStatus, errorThrown) {
                        alert(errorThrown);
                    }
                });
            });
        });
    </script>
    <script>
    
        (function() {
            'use strict';
            $.ajax({
                type: "POST",
                url: $('#theme_url').val() + '/page-templates/account_management/account/account_birthday.php',
                data: { country: $('input[name=country]').val()},
                success:function(data){
                    console.log(data);
                    $("input[name=birthYear]").attr({
                        "max" : data,        
                        "min" : 1880          
                    });
                },
                error: function (jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
            
            var checkCount = 0;

            $('input[name=noticeSMS]').change(function(){
                if($(this).is(':checked')) {
                    checkCount ++;
                } else {
                    checkCount --;
                }
                if(checkCount > 0) $('input[name=forNotice]').val('FILL');
                else $('input[name=forNotice]').val('');
            });
            $('input[name=noticeEmail]').change(function(){
                if($(this).is(':checked')) {
                    checkCount ++;
                } else {
                    checkCount --;
                }
                if(checkCount > 0) $('input[name=forNotice]').val('FILL');
                else $('input[name=forNotice]').val('');
            });

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
        })();
    </script>


<?php
}
?>
<?php get_footer(); ?>