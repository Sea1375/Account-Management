<?php /* Template Name: Contacts */ ?>

<?php get_header(); ?>

<?php
if ( have_posts() ) {
?>

    <!-- User definition -->
<?php
    
    $ctc_account_id = '';
    if(!empty($_GET)){
        $ctc_account_id = $_GET['account_id'];
    }
    
    $sql = "SELECT 'AUTO_INCREMENT' FROM contact";
    $userID = $wpdb->query($sql) + 1;
    $password = wp_generate_password ( $length = 12, $special_chars = true, $extra_special_chars = false );
    
?>    
    <div class="other_elements">
		<input type="hidden" value="<?php bloginfo('template_directory');?>" id="theme_url" />
        <input type="hidden" value="<?=home_url();?>" id="site_url"/>
    </div>
    
    <div class="container mt-5 p-3">
        <h3 class="bg-success text-white p-2 text-center" style="font-family: 'Lobster', cursive;">My Contacts</h3>
        <div class="m-4" style="max-height: 200px; overflow: auto;">
            <div class="table-responsive-sm">
                <table class="table table-bordered" style="margin-bottom: 0; margin-top: 0; " id='contactTable'>
                </table>
            </div>
        </div>
        <div class="row m-1 p-2">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <button class="form-control btn btn-success text-white" onclick='add_fill()'>Add</button>
            </div>
            <div class="col-md-3">
                <button class="form-control btn btn-warning text-white" onclick='delete_row()'>Delete</button>
            </div>
        </div>

        <form action="contact_form_action.php" method="POST" id="contact" name='contact' class="needs-validation">
            <input type = 'hidden' name='accountId' value=<?php echo $ctc_account_id; ?> id='accountId' />
            <input type='hidden' id='ctc_id' name='ctc_id' />
            <div class="card mx-4 p-2">
                <div class="row mx-1 p-2">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="firstName">First Name (*)</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" name="firstName" required />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="lastName">Last Name (*)</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" name="lastName" required />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="emailAdress">Email Address (*)</label>
                            <input type="email" class="form-control" id="emailAddress" placeholder="Enter your email address" name="emailAddress" required />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                </div>

                <div class="mx-4 form-group">
                    <label for="phone">Your mobile number(*)</label><br>
                    <input type='hidden' name='mobileNumber' />
                    <input id="phone" name="phone" type="tel" class="form-control" required />
                    <span id="valid-msg" class="invisible">✓ Valid</span>
                    <span id="error-msg" class="invisible"></span>
                </div>

                <div class="row mx-2">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="sel1">Country of residence (*)</label>
                            <select class="form-control" id="country" name='country' required></select>
                        </div>
                    </div>
                </div>

                <div class="form-check mx-4">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="addressCheck" required> I certify I live in the country mentioned above
                    </label>
                </div>

                <div class="card m-4 p-2" style="position: relative;">
                    <div class="row mt-3">
                        <div class="col-12 col-lg-2">
                            <div class="radio">
                                <label><input type="radio" name="typeOfContact" value='GUARDIAN' checked> Guardian</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2">
                            <div class="radio">
                                <label><input type="radio" name="typeOfContact" value='INSIDER'> Insider</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2">
                            <div class="radio">
                                <label><input type="radio" name="typeOfContact" value='RECIPIENT'> Recipient</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2">
                            <div class="radio">
                                <label><input type="radio" name="typeOfContact" value='INSIDER_RECIP'> Insider & Recipient</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2">
                            <div class="radio">
                                <label><input type="radio" name="typeOfContact" value='GUARDIAN_RECIP'> Guardian & Recipient</label>
                            </div>
                        </div>
                    </div>
                    <div style="position: absolute; left: 30px; top: -15px; background-color: white;" class="px-2">
                        <p style="font-size: larger;"><strong> Type of contact </strong></p>
                    </div>
                </div>

                <div class="card m-4 p-2" style="position: relative;">
                    <div class="row mt-3">
                        <div class="col 12 col-md-6">
                            <label for="userID">User ID</label>
                            <input type="text" class="form-control" id="userID" name="userID" readonly value='<?php echo $userID; ?>'>
                        </div>
                        <div class="col 12 col-md-6">
                            <label for="userID">Password</label>
                            <input type="text" class="form-control" id="password" name="password" readonly value='<?php echo $password; ?>'>
                        </div>
                    </div>
                    <p class="mt-2 invisible" id='checkInsider'><small>Please take note of the user id and password as you will have to communicate it to this contact</small></p>
                    <div style="position: absolute; left: 30px; top: -15px; background-color: white;" class="px-2">
                        <p style="font-size: larger;"><strong> Contact Credentials </strong></p>
                    </div>
                </div>

                <div class="mx-4">
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="5" id="message" name='message'></textarea>
                    </div>
                </div>
            </div>

            <div class="row m-1 p-2">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <input type="submit" class="form-control bg-success text-white" value="Save" />
                </div>
                <div class="col-md-3">
                    <input type="button" class="form-control bg-warning text-white" value="Cancel" />
                </div>
            </div>
        </form>
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

        var rad = document.contact.typeOfContact;
        for(let i = 0; i < rad.length; i++) {
            rad[i].addEventListener('change', function() {
                var checkInsider = document.querySelector("#checkInsider");
                if(i == 1) {
                    checkInsider.classList.remove("invisible");
                    console.log(this.value);
                }
                else checkInsider.classList.add("invisible");
            });
        }

        $(document).ready(function () {
            $('#contact').on('submit', function(e) {
                
                e.preventDefault();
                var currentUrl = $('#theme_url').val() + '/page-templates/account_management/contact/' + $(this).attr('action');

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
    <script type="text/javascript">
        var ctc_ids;
        refresh_table();

        function row_click(row) {
            $('table > tr').css('background-color', '#ffffff');
            $(row).css('background-color', '#f2f2f2');
            ctc_ids = ctc_ids.split(" ");
            $('input[name=ctc_id]').val(ctc_ids[row.rowIndex]);
        }
        
        function delete_row() {
            console.log($('input[name=ctc_id]').val());
            $.ajax({
                type: "POST",
                url: $('#theme_url').val() + '/page-templates/account_management/contact/delete_row.php',
                data: { ctc_id: $('input[name=ctc_id]').val()}, 
                success:function(data){
                    refresh_table();
                },
                error: function (jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        }
        function add_fill() {
            $.ajax({
                type: "POST",
                url: $('#theme_url').val() + '/page-templates/account_management/contact/add_fill.php',
                data: { ctc_id: $('input[name=ctc_id]').val()}, 
                success:function(data){
                    console.log('success', data);
                    console.log(data.length);
                    //refresh_table();
                },
                error: function (jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });

        }
        function refresh_table() {            
            $.ajax({
                type: "POST",
                url: $('#theme_url').val() + '/page-templates/account_management/contact/refresh_table.php',
                data: { accountId: $('input[name=accountId]').val()}, 
                success:function(data){
                    ctc_ids = data.split("###")[0];
                    console.log('1: ', ctc_ids);
                    var tableContent = data.split("###")[1];
                    $('#contactTable').html(tableContent);
                },
                error: function (jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        }
    </script>
<?php
}
?>
<?php get_footer(); ?>