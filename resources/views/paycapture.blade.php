  
  @include('layouts.header')
  @include('layouts.popup')
  <?php
    // Merchant key here as provided by Payu
    $MERCHANT_KEY = "HBxc80";
    $SALT = "yauHLEFqtr8L4KD4eeqEWpP0YHccAGS4";
    $txnid="astro_".rand()."".rand();
    $name=$name;
    $email=$email;
    $amount=$amount;
    $phone=$phone;
    $surl="{{url('/booking-placed')}}";
    $furl="{{url('/payment-failure')}}";
    $productInfo="Puja Booking";

// Merchant Salt as provided by Payu

$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hashString=$MERCHANT_KEY."|".$txnid."|".$amount."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
   
$hash = strtolower(hash('sha512', $hashString));
?>
<form action="https://secure.payu.in/_payment" method="post" name="payuform">
    
    <input type="hidden" name="key" value="{{$MERCHANT_KEY}}" hidden/>
    <input type="hidden" name="hash"  value="<?php echo $hash;?>" hidden/>
    <input type="hidden" name="txnid" value="{{$txnid}}" hidden/>

    <input type="text" name="amount" id="payuamount" value="<?php echo $amount;?>" hidden/>
    <input type="text" name="firstname" id="firstname" value="{{$name}}" hidden/>
    <input type="text" name="email" id="email"  value="{{@$email}}" hidden/>
    <input type="text" name="phone" value="{{$phone}}" hidden/>
    <input type="text" name="productinfo" value="{{ @$productInfo}}" hidden>
    <input type="text" name="surl"  size="64" value="{{url('booking-placed')}}" hidden/>
    <input type="text" name="furl"  size="64" value="{{url('payment-failure')}}" hidden/>
    <input type="hidden" name="service_provider" value="AstroPanditOm"hidden />
    <button id="placeBtn"type="submit"  value="submit" style="display:none">Place Order</button>
</form>
<script>
   $(function() {
    $('#placeBtn').click();
    });
</script>
@include('layouts.footer')