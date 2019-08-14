var $j = jQuery.noConflict();
$j(document).ready(function() {
	$j("a").click(function(event){
		var href = $j(this).attr('href');
		if(href!='#'){
			$j(".exit-overlay").show();
			$j("#exit-overlay-refer").val(href);
			event.preventDefault();
			event.stopPropagation();
	    }
	});
	$j(".exit-overlay-close").click(function(event){
		$j(".exit-overlay").hide();
		
	});
});
$j(window).bind('beforeunload', function(){
	return evobilis_checkoutexitmsg;
});

function evoExitFeedback(o)
{
     var $j = jQuery.noConflict();
	 src=$j('#exit-overlay-refer').val();
	 feedback=$j('#feedback').val();
	 email=$j('#email').val();
	 if(o=='1')
	 $j(".exit-overlay-msg").html('Redirecting...');
	 $j.post("../../exitmessage/", { email:email, evobilis_exitmsg_feedback: "true", evobilis_exitmsg_feedback_msg: feedback },function(data) {
	 if(o=='1')
	 {
		 $j(window).unbind('beforeunload');		 
		 window.location=src;
     } 
});
}