
 $(document).ready(function() {
    $('#example-getting-started').multiselect();
    $('#seconadarySkill').multiselect();
    $('#primarySkill').multiselect();
    $('#multiple-select1').on('click', function(e){
      $(this).find(".multiselect-container").toggleClass( "active" );
     
    });
    $('#multiple-select2').on('click', function(e){
      $(this).find(".multiselect-container").toggleClass( "active" );
    
    });
    $('#multiple-select3').on('click', function(e){
      $(this).find(".multiselect-container").toggleClass( "active" );
    
    });
   
    $('#successModal').modal('show');

});


$(document).ready(function(){

 
  $.fn.manage_tabs = function() {
    var current = $(this);
      var tabs = current.find('.tabs_title');
      tabs.find('.btn').click(function(){

        var current_click = $(this);
        var filter_name = current_click.data('name');
        
        if(filter_name != '')
        {
          var tabs_content = current.find('.tabs_content');
          if(filter_name == 'all')
          {
            tabs_content.find('.column').show();
            tabs.find('.btn').removeClass('active');
            current_click.addClass('active');
          }
          else
          {
            tabs_content.find('.column').hide();
            tabs_content.find('.'+filter_name).show(300);
            tabs.find('.btn').removeClass('active');
            current_click.addClass('active');

          }
          
          
        }
        
      })
  }


  if($(".pooja_tabs").length != 0)
  {
    $(".pooja_tabs").manage_tabs();
  }

  if($("#Astroshop").length != 0)
  {
    $("#Astroshop").manage_tabs();
  }

  if($(".detail-box").length != 0)
  {
    var detail_box = $(".detail-box");

    detail_box.find('details').click(function(){
      console.log('teee')
      detail_box.find('details').removeAttr('open');
      $(this).attr('open');
    })
  }
  

});



// ---tab pooja script

//filterSelection("all")
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
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
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





     
// -------for popup--

  // -------for popup--
  // function popshow(){
  //   document.body.scrollTop = document.documentElement.scrollTop = 0;
  // let box = document.getElementById("pop1");
  // box.classList.add("popup2")
  // }
  
  // setTimeout(popshow , 2000)
  
  function clsfirstpopup(){
    $("#pop1").css({"display": "none"});
}
function popshow1(){

    $("#pop1").css({"display": "flex"});
}

function hmMenu(){
  $(".mobile-menu").toggleClass('active');
}
// function popshow(){


//   window.scrollTo({ top: 0, left: 0, behavior: 'smooth' });

//   let box = document.getElementById("pop1");
//   if (typeof(box) != 'undefined' && box != null)
//   {
//     box.classList.add("popup2")
//   }
// }


let clsindex = document.getElementById("cls-index");
if (typeof(clsindex) != 'undefined' && clsindex != null)
{
  clsindex.addEventListener('click' , ()=>{
    let box = document.getElementById("pop1");
    box.classList.remove("popup2")
  })
}



let cls = document.getElementById("otpContinue");
if (typeof(cls) != 'undefined' && cls != null)
{
  cls.addEventListener('click' , () => {
  let box = document.getElementById("pop1");
  box.classList.remove("popup2");



  // for second pop up

  let otp = document.getElementById("otp-popup");
  otp.classList.add("otp-popup2");

  })
}



let pop2 = document.getElementById("otp-submit");
if (typeof(pop2) != 'undefined' && pop2 != null)
{
  pop2.addEventListener('click' , ()=>{
  let otpPopup = document.getElementById("otp-popup");
  otpPopup.classList.remove("otp-popup2");
  alert("you are login");
  })
}


let box2 = document.getElementById("otpClose");
if (typeof(box2) != 'undefined' && box2 != null)
{
  box2.addEventListener('click' , ()=>{
    let otpPopup = document.getElementById("otp-popup");
    otpPopup.classList.remove("otp-popup2")
  })
}
 



// ----------------------------------------------------------coustomer details----------------------------------------------------------------
// --for customer-detail2
        function f1(){
           let div = document.getElementById("customerDetail");
           div.classList.toggle("customer-detail2");
        }

        // --for address2
        function f2(){
           let div = document.getElementById("adr");
           div.classList.toggle("address2");
        }

        // --for customer-detail2
        function f3(){
           let div = document.getElementById("sum");
           div.classList.toggle("summary2");
           
        }
// --for customer-detail2
function f4(){
           let div = document.getElementById("pay");
           div.classList.toggle("pay2");
           
        }
 
        
  //  ----for payment box open close

  function f5(){
          document.getElementById("box1").classList.toggle("boxA1Big")
        }
        function f6(){
          document.getElementById("box2").classList.toggle("boxA2Big")
        }

        function f7(){
          document.getElementById("box3").classList.toggle("boxA3Big")
        }
        function f8(){
          document.getElementById("box4").classList.toggle("boxA4Big")
        }
        function f9(){
          document.getElementById("box5").classList.toggle("boxA5Big")
        }


        // ------------------arise------------------------------------
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";


        //   document.getElementById("Daily").click();
        }


        // -------------------------------------------------------------------------------profile-----------------------------------------------
        // function show(){

        //   let pop1 = document.getElementById("p1");
        //   pop1.classList.add("popup1-show")
    
        //  }
    
         function show2(){
          let pop2 = document.getElementById("p2");
          let pop1 = document.getElementById("p1");
          pop1.classList.remove("popup1-show")
          pop2.classList.add("popup2-show")
         }
    
         function hide2(){
          let pop2 = document.getElementById("p2");
          console.log("hide2")
          // pop2.classList.remove("popup2");
          pop2.style.display ="none";
         }


// ----------------------------------------------------pandit registration---------------------



        




        // -------------------------------------------------------------product------------------------------------
        // ---for side bar 

function sideBar(){
  let  bar = document.getElementById('slde-bar-id');

  bar.style.display = "block";
  // bar.style.position = "absolute";
}

function hide_sideBar(){
  let  bar = document.getElementById('slde-bar-id');

  bar.style.display = "none";
  // bar.style.position = "absolute";
}



// ------------------------------cart---------------------------------------
// --for customer-detail2
function f1(){
  let div = document.getElementById("customerDetail");
  div.classList.toggle("customer-detail2");
}

// --for address2
function f2(){
  let div = document.getElementById("adr");
  div.classList.toggle("address2");
}

// --for customer-detail2
function f3(){
  let div = document.getElementById("sum");
  div.classList.toggle("summary2");
  
}


function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
  }
  
  function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
  }
  

  

  // --------------------------------delivery-----------------------------------
  function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
    }
    
    function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
    }


    // --for customer-detail2
    function f1(){
      let div = document.getElementById("customerDetail");
      div.classList.toggle("customer-detail2");
   }

   // --for address2
   function f2(){
      let div = document.getElementById("adr");
      div.classList.toggle("address2");
   }

   // --for customer-detail2
   function f3(){
      let div = document.getElementById("sum");
      div.classList.toggle("summary2");
      
   }

    // --for customer-detail2
    function f4(){
      let div = document.getElementById("pay");
      div.classList.toggle("pay2");
      
   }


//  ----for payment box open close

function f5(){
     document.getElementById("box1").classList.toggle("boxA1Big")
   }
   function f6(){
     document.getElementById("box2").classList.toggle("boxA2Big")
   }

   function f7(){
     document.getElementById("box3").classList.toggle("boxA3Big")
   }
   function f8(){
     document.getElementById("box4").classList.toggle("boxA4Big")
   }
   function f9(){
     document.getElementById("box5").classList.toggle("boxA5Big")
   }
 

  //  --------------------------------------item 1-------------------------------------------
  function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}

function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
}

// ---------------for filter

function filterShow(){
   let filter = document.getElementById("po2")
   filter.style.height = "auto";
}

function filterHide(){
    let filter = document.getElementById("po2")
    filter.style.height = "0px";
 }