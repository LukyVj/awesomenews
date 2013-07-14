$(document).ready(function(){
  var curtain = $('.curtain');
  var awnserYes = $('#yes');
  var awnserNo = $('#no');
  var solutionOne = $('#repOne');
  var solutionTwo = $('#repTwo');
  var stepOne = $('#stepOne');
  var awnDetail = $('.block');
  var awn = $('.block p');
  var solution = $('#solution');
  var iconArrow = $('.entypo-up-circled');
  var clouds = $('.cloud');
    setTimeout(function() {
        curtain.css('visibility','hidden'); 
        clouds.css('visibility','visible');
  }, 3000);
    setTimeout(function() {
       awnDetail.removeClass('invisible').addClass('hover').css('border','3px solid #fff');
       awn.removeClass('invisible');
  }, 3000);
  
  awnserYes.on('click', function(){
     solutionOne.removeClass('hidden').addClass('position');
    stepOne.fadeOut(500);
     setTimeout(function() {
       solution.removeClass('bottom');
	       setTimeout(function() {
	       	iconArrow.removeClass('invisible').css("color","#86bee7");
		       	 setTimeout(function() {
			       	 iconArrow.addClass('bounce');
		  }, 1500);
	  }, 1500);
  }, 1000);
  });
  
  
   awnserNo.on('click', function(){
    solutionTwo.removeClass('hidden').addClass('position');
    stepOne.fadeOut(500);
     setTimeout(function() {
       solution.removeClass('bottom');
	       setTimeout(function() {
	       	iconArrow.removeClass('invisible').css("color","#86bee7");
		       	 setTimeout(function() {
			       	 iconArrow.addClass('bounce');
		  }, 1500);
	  }, 1500);
  }, 1000);
  });

  jQuery(document).ready(function(){
   $("body").mousemove(function(e){
      $('#here').html(e.pageX +', '+ e.pageY);
     var nPosBig = e.pageX/10;
     var nPosSmall = e.pageX*1/4*2/3-240;
     var nPosSmallBg = e.pageX*20;
     $('.big').css({
       right: nPosBig
     });
      $('.small').css({right: nPosSmall});
   }); 
});


$(function() {  
  $("#sumit").click(function() {  
		var email = $("input#mail").val();  
		var dataString = 'email=' + email ;  
		 $.ajax({
		  type: "POST",
		  url: "inset.php",
		  data: dataString,
		  success: function() {
		    $('#sendMail').html("<div id='message'></div>");
		    $('#message').html("<h2>Thanks, we will notify you as soon as the newsletter will be ready</h2>")
		    .append("<p>And don't forget to spread the word ! </p>")
		    .hide()
		    .fadeIn(1500, function() {
		      $('#message').append("<img id='checkmark' src='images/check.png' />");
		    });
		  }
		});
		return false;
  });  
});  
});