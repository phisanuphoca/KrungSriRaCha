var seqArr = [];
var duration = 2000;
var num = 0;
var numItems;
var numready;
	$(document).ready(function(){

		$.ajax({
		type: "GET",
		url: "movie.xml",
		dataType: "xml",
		success: function(xml) {
			
			$(xml).find('site').each(function(){
				var id = $(this).attr('id');
				var url = $(this).find('url').text();
				$("#feed").append("<div id="+id+"><iframe id=frame"+id+" src="+url+" scrolling='no'></iframe></div>");
			});//end find
			
			//$('#feed').hide();
			for(var i=0;i<$('#feed').children().size();i++){
				seqArr[i]=i;
			}
			function shuffleArray(array) {
	   			 for (var i = seqArr.length - 1; i > 0; i--) {
	     		   var j = Math.floor(Math.random() * (i + 1));
	      		   var temp = seqArr[i];
	       		   seqArr[i] = seqArr[j];
	      		   seqArr[j] = temp;
	   			  }
				return seqArr;
			}
			seqArr = shuffleArray();
			console.log(seqArr);
			numItems = $('#feed').children().size();
			numready =0;
		}//end success

	});


});
function childReady(){
	//alert(1);
	numready++;
	if(numready==numItems){
		
		showBanner();
	}
}


function showBanner(){
	
	for(var i=0;i<numItems;i++){
		if((i%numItems)==(num%numItems)){
			$('#banner'+(seqArr[num%numItems])).show();
			var iframeID = "framebanner"+((seqArr[num%numItems]));
			var iFrameObject = document.getElementById(iframeID);	
			iFrameObject.contentWindow.replay();
		}
		else{
			$('#banner'+seqArr[i]).hide();
		}
		
		
	}
	
	$('#feed').show();
	num++;
}

function childEnd(){
	 showBanner();
}



