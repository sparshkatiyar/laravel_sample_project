filterSelection("all")

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}



// ---------------------for pop up-----------
function popshow(){


    window.scrollTo({ top: 0, left: 0, behavior: 'smooth' });
  
  let box = document.getElementById("pop1");
  box.classList.add("popup2")
  }
  
  function clsfirstpopup(){
    let box = document.getElementById("pop1");
    box.classList.remove("popup2")
  }

   
  
  function continiuepop(){
    let box = document.getElementById("pop1");
    box.classList.remove("popup2");
    let otp = document.getElementById("otp-popup");
    otp.classList.add("otp-popup2");
  }
  

  
  
  function submitotp(){
    let pop2 = document.getElementById("otp-submit");
    let otpPopup = document.getElementById("otp-popup");
  otpPopup.classList.remove("otp-popup2");
    if(true){
  alert("you are login");
    }
  }  
 
  function otpcls(){
    let otpPopup = document.getElementById("otp-popup");
    otpPopup.classList.remove("otp-popup2")
  }

   