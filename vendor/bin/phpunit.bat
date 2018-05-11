<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0053)http://www.sfcinemacity.com/bannerHTML/top/index.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta charset="utf-8">

<title>index_banner</title>



    <style>

      body {

        margin: 0px;

        padding: 0px;

      }

      iframe{

        margin: 0px;

        border: 0px;

      }

      #result{

        margin: 0px;

        border: 0px;

        width: 900px;

        height: 100px;

      }

    </style>





<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript">





jQuery.noConflict();  



(function($) {

    $(document).ready(function() {

		/*	if (jQuery.browser.msie == true

          && jQuery.browser.version < 9.0



        ) { 

				if (jQuery.browser.version < 9.0){

           console.log("swf");

					 jQuery("#result").html("<iframe width='900px' height='100px' src='swfbanner.html' frameborder='0' allowfullscreen></iframe>");

				}



			}

      else{

        console.log("canvas");

          jQuery("#result").html("<iframe width='100%' height='100%' src='canvasbanner.html' frameborder='0' allowfullscreen border='0' scrolling='no'  ></iframe>");

        }*/
		
		
			if($.browser.mozilla){
			
				jQuery("#result").html("<iframe width='900px' height='100px' src='swfbanner.html' frameborder='0' allowfullscreen></iframe>");
			}else if($.browser.msie){
			
				jQuery("#result").html("<iframe width='900px' height='100px' src='swfbanner.html' frameborder='0' allowfullscreen></iframe>");
			} else if($.browser.opera){
			
				   jQuery("#result").html("<iframe width='100%' height='100%' src='canvasbanner.html' frameborder='0' allowfullscreen border='0' scrolling='no'  ></iframe>");
			}else if($.browser.safari){
			
				   jQuery("#result").html("<iframe width='100%' height='100%' src='canvasbanner.html' frameborder='0' allowfullscreen border='0' scrolling='no'  ></iframe>");
			}
			else
			{
			
				   jQuery("#result").html("<iframe width='100%' height='100%' src='canvasbanner.html' frameborder='0' allowfullscreen border='0' scrolling='no'  ></iframe>");
			}



    });

})(jQuery);  



</script>





 </head>

 <body style="background-color:#D4D4D4;margin:0px">

 <div id="result"><iframe width="100%" height="100%" src="canvasbanner(5).html" frameborder="0" allowfullscreen="" border="0" scrolling="no" __idm_frm__="15"></iframe></div>

 

</body></html>