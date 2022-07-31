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
         
          <div class="second-div">
              <select class="optiondiv">
  
                  
                   <option>IND</option>
                  <option>PAK</option>
              </select>
  
        <input type="text" id="numberOtp">
          </div>
          <button type="submit" class="main-button" id="otpContinue" onclick="continiuepop()">Continue</button>
      
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
        <p class="otpheading">OTP sent to <span> +91 1234567890</span></p>
      </div>
      <form action="" class="mt-5">
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
		<input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-2" required>
		<input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-3" required>
		<input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-4" required>
		<input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-5" required>
		
		</div>
	
      </form>
      <button class="main-button-index" id="otp-submit" onclick="submitotp()">Submit</button>

      <p class="otpheading1">
        Resent OTP available in<span class="second"> 58s</span>
      </p>
      <p class="resendbutton"><a href="#">Resend OTP availablenin</a></p>
      <div class="button-div">
        <button class="resendotp">
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

in1.addEventListener('input', splitNumber);

    </script>