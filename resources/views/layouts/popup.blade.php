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
        <input
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
        />
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