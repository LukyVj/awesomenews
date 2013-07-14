<!DOCTYPE html>
<html lang="en">
<head>
    <title>AweCSSome Newsletter</title>
    <meta charset="utf-8">
    
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- Special project, special landing page -->

<div id="clouds">
	<div class="cloud x1"></div>
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>
<div id="" class="landscape big"></div>
<div id="" class="landscape small"></div>

<!-- End of special -->
<div id="show">
  <p>Do you think you are <span class="curtain"></span></p>
  <p>Up to date with <span class="strong">css</span> and <span class="strong">interweb</span> stuff ?<span class="curtain"></span></p>
<div id="stepOne">  
  <div id="yes" class="block" class="invisible">
    <p class="invisible">Yes</p>
  </div> 
  <div id="no" class="block" class="invisible">
    <p class="invisible">No</p>
  </div> 
 </div>
  <p id="repOne" class="awnser hidden">Anyway, you have to subscribe to our weekly newsletter! </p>
    <p id="repTwo" class="awnser hidden"> So the only solution is to subscribe to our weekly newsletter !</p>
  
  <div id="solution" class="bottom">
<form name="contact" action="">  
      <fieldset>
        <input type="text" id="mail" name="mail" >
        <input type="submit" id="submit" class="button" name="submit" value="send">
      </fieldset>
    </form>
    <span class="entypo-up-circled micro invisible"></span>
  </div>
</div>
<script charset="utf-8" src="http://lab.web-gate.fr/prefixfree.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/functions.js"></script>
<script charset="utf-8">
$(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });

  $(".button").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
			var email = $("input#mail").val();
		if (email == "") {
      $("input#mail").focus();
      return false;
    }
			var dataString = 'email=' + email;
		//alert (dataString);return false;
		
		$.ajax({
      type: "POST",
      url: "insert.php",
      data: dataString,
      success: function() {
        $('#contact_form').html("<div id='message'></div>");
        $('#message').html("<h2>Contact Form Submitted!</h2>")
        .append("<p>We will be in touch soon.</p>")
        .hide()
        .fadeIn(1500, function() {
          $('#message').append("<img id='checkmark' src='images/check.png' />");
        });
      }
     });
    return false;
	});
});
runOnLoad(function(){
  $("input#name").select().focus();
});
</script>

</body>
</html>

