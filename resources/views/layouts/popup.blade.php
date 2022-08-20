<!-- ---------popup page ---------->

      <!-- ---first -- -->
      <div class="popup-1 "  id="pop1">
        <div class="main-div">
          <div class="next-div">
              <button type="button" class="close" aria-label="Close" id="clsindex" onclick="clsfirstpopup()">
                  <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="login">Login</h5>
              <b>
                  <p class="heading">Hold Tight ,We take you on board Enter your mobile<br> number</p>
              </b>
              <h3 class="heading2">Enter your mobile number*</h3>
          </div>
            <form action="javascript:void(0);" id="registerForm">

                <div class="second-div">
                    <select class="optiondiv" name="mobileTelCode" id="mobileTelCode" required>
        
                        
                        <option value="+91">IND</option>
                        <option value="+92">PAK</option>
                    </select>
        
                    <input type="text" id="numberOtp" value="" id="mobileNumber" name="mobileNumber">
                </div>
                <button type="submit" class="main-button" id="otpContinue" >Continue</button>
          
            </form>
      </div>
  
  
    </div>
  
    
  <!-- ----second--- -->

  <div id="otp-popup">
    <div class="main-div">
      <div class="next-div">
        <button type="button" class="close" aria-label="Close" id="otpClose" onclick="otpcls()">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="login">Verify Phone</h5>
        <p class="otpheading" >OTP sent to +91-<span id="otpheading"> </span></p>
      </div>
      <form action="javascript:void(0);" class="mt-5" id="veryfyOtp">
        <input type="text" id="otpMob" name="mobileNumber" hidden>
        <input type="text" id= "otpTel" name="mobileTelCode" hidden>
        <!-- <input
          class="otp"
          type="text"
          oninput="digitValidate(this)"
          onkeyup="tabChange(1)"
          maxlength="1"
        />
        <input
          class="otp"
          type="text"
          oninput="digitValidate(this)"
          onkeyup="tabChange(2)"
          maxlength="1"
        />
        <input
          class="otp"
          type="text"
          oninput="digitValidate(this)"
          onkeyup="tabChange(3)"
          maxlength="1"
        />
        <input
          class="otp"
          type="text"
          oninput="digitValidate(this)"
          onkeyup="tabChange(4)"
          maxlength="1"
        /> -->
		<div class="otp-field">
		<input type="number" name="otp[]" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-2" required>
		<input type="number" name="otp[]" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-3" required>
		<input type="number" name="otp[]" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" name="otp[]" id="otc-4" required>
		<input type="number" name="otp[]" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-5" required>
		
		</div>
	
        <button class="main-button-index" id="otpSubmit" >Submit</button>
      </form>

      <p class="otpheading1">
        Resent OTP available in <span class="second"> </span>
      </p>
      <p class="resendbutton"><a href="#">Resend OTP availablen in </a></p>
      <div class="button-div">
        <button class="resendotp" id="resendotp" >
          Resend OTP on<br />
          SMS</button
        ><button class="resendotp">
          Resend OTP on<br />
          Call
        </button>
      </div>
    </div>
  </div>

    <!-- -------popup end------- -->

    <script>
        let in1 = document.getElementById('otc-1'),
        ins = document.querySelectorAll('input[type="number"]'),
        splitNumber = function(e) {
            let data = e.data || e.target.value;
            if (!data) return;
            if (data.length === 1) return;

            popuNext(e.target, data);
            //for (i = 0; i < data.length; i++ ) { ins[i].value = data[i]; }
        },
        popuNext = function(el, data) {
            el.value = data[0];
            data = data.substring(1);
            if (el.nextElementSibling && data.length) {

                popuNext(el.nextElementSibling, data);
            }
        };

        ins.forEach(function(input) {

            input.addEventListener('keyup', function(e) {

                if (e.keyCode === 16 || e.keyCode == 9 || e.keyCode == 224 || e.keyCode == 18 || e.keyCode == 17) {
                    return;
                }

                if ((e.keyCode === 8 || e.keyCode === 37) && this.previousElementSibling && this.previousElementSibling.tagName === "INPUT") {
                    this.previousElementSibling.select();
                } else if (e.keyCode !== 8 && this.nextElementSibling) {
                    this.nextElementSibling.select();
                }


                if (e.target.value.length > 1) {
                    splitNumber(e);
                }
            });

            input.addEventListener('focus', function(e) {

                if (this === in1) return;

                if (in1.value == '') {
                    in1.focus();
                }

                if (this.previousElementSibling.value == '') {
                    this.previousElementSibling.focus();
                }
            });
        });

        // in1.addEventListener('input', splitNumber);

    </script>

    <script>
        
        $('#otpContinue').on('click',  function(){
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });         
            var LoginForm = $("#registerForm");
            var formData = LoginForm.serialize();
            $("#otpContinue"). attr("disabled", true);
            var mobileTelCode   = $("select[name=mobileTelCode]").val();
            var mobileNumber    = $("input[name=mobileNumber]").val();
            // alert(mobileNumber);
            var timer2 = "1:00";
            var base_url = '<?=url('');?>';           
            $.ajax({
                url: "{{url('login')}}",
                type: "POST",
                data: formData,
                success: function( response ) {
                    document.getElementById("registerForm").reset(); 
                    $('#otpTel').val(mobileTelCode);
                    $('#otpMob').val(mobileNumber);
                    $('#otpheading').text(mobileNumber);
                    setInterval(function() {

                    var timer = timer2.split(':');
                    //by parsing integer, I avoid all extra string processing
                    var minutes = parseInt(timer[0], 10);
                    var seconds = parseInt(timer[1], 10);
                    --seconds;
                    minutes = (seconds < 0) ? --minutes : minutes;
                    if (minutes < 0) clearInterval(interval);
                    seconds = (seconds < 0) ? 59 : seconds;
                    seconds = (seconds < 10) ? '0' + seconds : seconds;
                    //minutes = (minutes < 10) ?  minutes : minutes;
                    $('.second').html(minutes + ':' + seconds);
                    timer2 = minutes + ':' + seconds;
                    }, 1000);
                    window.setTimeout(setEnabled, 30000);
                    // continiuepop();
                    // alert('Ajax form has been submitted successfully');
                }
            });
        });


        $('#otpSubmit').on('click',  function(){
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });         
            var LoginForm = $("#veryfyOtp");
            var formData = LoginForm.serialize();
           
            var base_url = '<?=url('');?>';           
            $.ajax({
                url: "{{url('otp_verify')}}",
                type: "POST",
                data: formData,
                success: function( response ) {
                    location.reload();
                    // window.history.go(-1);
                    // window.location.replace("{{url('dashboard')}}");
                }
            });
        });

        

        function setEnabled() {
            var submitButton = document.getElementById('resendotp');
            if (submitButton) {
                submitButton.disabled = false;
            }
        }
    </script>
    <script>
        
    </script>