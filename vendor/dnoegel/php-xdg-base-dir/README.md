html, body, td, p, div, span ,th, input, h1, h2, h3, h4, h5, h6{
    font-family: tahoma;
    font-size: 13px;
}
body{
    background-color: #FFF;
    margin: 0px;
    padding: 0px;
    text-align: center;
    color: #333;
    position: relative;
    
}

p, ul, ol, h1, h2, h3, h4, h5, h6{
    margin: 5px 0px;
}
h1{font-size: 15px;}
h2{font-size: 14px;}
h3, h4, h5, h6{font-size: 13px;}
a{
    text-decoration: none;
    color: #333;
    outline: none;
}
a img{
    border: none;
}
a:hover, a:focus{
    text-decoration: underline;
}
a:active, a:focus {
    outline: none;
}
.a-center{
    text-align: center;
}
.a-right{
    text-align: right;
}
.a-left{
    text-align: left;
}
.f-right{
    float: right;
}
.f-left{
    float: left;
    
}
.f-center{
float: left;
text-align: center;
width: 60%;
}
.cmd .f-right{
    margin-right: -3px;
}
.field, .sfield, .smfield{
    border: solid #DCDCDC 1px;
    font-size: 13px;
    padding: 3px 5px;
}
.clear{
    clear: both;
}
.error{
    background-color: #FFFEEF;
    color: #F00;
    border: solid #f00 1px;
    padding: 10px;
    text-align: center;
}
.error a{
    color: #F00;
    text-decoration: underline;
}
.error ul{
    text-align: left;
}
.validmsg{
    background-color: #EFEFEF;
    color: #F00;
    border: solid #F00 1px;
    padding: 10px;
    text-align: center;
}
.attention{
    color: #CCC;
    display: block;
    margin-left: 130px;
}
.inline{
    display: inline;
}
.hidden{
    display: none;
}
.visible{
    display: block;
}
.small{
    width: 120px;
}
.overflow{
    overflow: hidden;
    height: 1%;
}
ul, ol{
    list-style-position: inside;
}
#wrapper{
    height: auto;
    margin: 0px auto;
    width: 900px;
    padding: 0px;
    position: relative;
    text-align: left;
    
}
#content{
    margin: 0px auto;
    width: 900px;
    text-align: left;
    background-color: #FFF;
    padding-bottom: 20px;
    
}
#header{
    height: 120px;
}
#top-banner{
    width: 900px;
    height: 120px;
    float: left;
    display: block;
    margin: 5px 0px 0px 0px;
}
#sponsors-block{
    overflow: hidden;
    height: 100%;
}
#sponsors-left {
    width: 280px;
    float: left;
}
#sponsors-right{
    width: 300px;
    float: right;
}
#top-left-banner{
    width: 270px;
    height: 118px;
}
#bottom-left-banner{
    width: 270px;
    height: 118px;
    margin-top: 12px;
}
#sponsors-right{
    width: 300px;
}

#header h1 {
    background:url(../images/th.jpg) no-repeat;
    width:auto;
    height: 15px;
    float: left;
}
#header h1{
    margin: 0px;
    margin-left: 10px;
    color :#666;
    font-size: 13px;
    float: left;
    font-weight: normal;
}
.hide{
    position: absolute;
    text-indent: -9999px;
}
#navigation{
    margin-top: 10px;
    position: relative;
    z-index: 110;
    
}
#navigation ul{
    list-style: none;
    padding: 0px;
    overflow: inherit;
    height: 45px;
}
#navigation ul ul li{
    float: none;
}
#navigation ul ul{
    height: auto;
}
#navigation li{
    float: left;
    margin: 0px;
    text-align: center;
    position: relative;
    z-index: 200;
}
#sub-wrap{
    width: 860px;
    margin: 0px auto;
}
#sub-content{
    width: 860px;
}
/* Movie main style */

#movie-content{
    padding: 20px;
    overflow: hidden;
    height: 100%;
    clear : left;
    border: solid #DCDCDC 1px;
}
#movie-detail{
    overflow: hidden;
    height: 100%;
    width: 820px;
    margin-bottom: 20px;
}
#movie-info{
    width: 320px;
    float: left;
}
#movie-trailer{
    width: 380px;
    height: 250px;
}
#movie-description{
    clear: both;
    padding: 20px;
    margin-top: 20px;
}
#movie-gallery{
    overflow: hidden;
    height: 100%;
    margin-top: 20px;
}
#movie-gallery ul{
    list-style: none;
    width: 450px;
    margin: 0px;
    padding: 0px;
    float: left;
    overflow: hidden;
    height: 100%;
}
#movie-gallery li{
    float: left;
    margin-right: 5px;
    margin-bottom: 5px;
}
#movie-gallery a{
    display: block;
}
#movie-gallery-image{
    float: right;
}

/* subcontent style  */
#sub-content{
    margin: 10px 0px;
    float:left;
    width: 100%;
    
}
/* subcontent sidebar */
#sub-sidebar{
    width: 262px;
    float: left;
}
#sub-main{
    width: 580px;
    float: right;
    height: auto;
    overflow: hidden;
}

/* block style */
.block{
    margin-bottom: 10px;
}
.blockpad{
    padding: 10px;
}
.block-content{
    border: solid #C5C0C3 1px;
    background-color: #FFF;
    padding: 10px;
	
}
.head{
    background: #DDD url(../images/sprite.png) no-repeat top left;
    overflow: hidden;
    height: 33px;
    clear: both;
    margin: 0;
    padding: 0px;
 
}
.headred{
    background: #DDD url(../images/spritenew.png) no-repeat top left;
    overflow: hidden;
    height: 33px;
    clear: both;
    margin: 0;
    padding: 0px;
 
}
.headred a.v-all {color:#FFFFFF;}
.head span{
    background: #DDD url(../images/sprite.png) no-repeat -859px 0px;
    display: block;
    width: 10px;
    height: 33px;
    float: right;
}
.headred span{
    background: #DDD url(../images/spritenew.png) no-repeat -859px 0px;
    display: block;
    width: 10px;
    height: 33px;
    float: right;
}
.head-showTime{
    background: #DDD url(../images/head_showtime.jpg)  top left;
    overflow: hidden;
    height: 33px;
    clear: both;
    margin: 0;
    padding: 0px;
 
}
.head-showTime span{
    background: #DDD url(../images/head_showtime.jpg) no-repeat top left;
    display: block;
    width: 10px;
    height: 33px;
    float: right;
}
.head-select{
    background: #000 url(../images/sprite.png) no-repeat 0px -31px;
    overflow: hidden;
    height: 33px;
    color: #FFF;
}
.head-select a{
    color: #FFF;
}
#j_showtime_t,#j_showtime_b,#j_showtime_r{float:left;width:100px;height:33px;display:block;}
#j_showtime_t a,#j_showtime_b a,#j_showtime_r a{float:left;width:100px;height:33px;display:block;text-align:center;padding-top:7px;}
#j_showtime_t a:hover,#j_showtime_b a:hover,#j_showtime_r a:hover{
	background:#000 url(../images/sprite-barHover.jpg) no-repeat 0px 0px;
	  
    height: 30px;
    color: #FFF;
	text-decoration:none;

		width:100px;
}
.cursor a{
	background:#000 url(../images/sprite-barHover.jpg) no-repeat 0px 0px;
	  
    height: 30px;
    color: #FFF;
	text-decoration:none;

		width:100px;
}
		

.head-select span{
    background: #000 url(../images/sprite.png) no-repeat 0px -31px;
    display: block;
    width: 10px;
    height: 33px;
    float: right;
}
.head h3, .head h2, .head h4{    
    float: left;
    margin: 0px;
    height: 30px;
    line-height: 30px;
    margin-left: 10px;
}
.head-showTime h2{    
    float: left;
    margin: 0px;
    height: 30px;
    line-height: 30px;
    margin-left: 10px;
	color:#FFFFFF;
}
.head h2{
    font-size: 13px;

}
.head h4{
    font-size: 12px;
}
.head strong{
    color: #F00;
}
.expandable h3, .expandable h2, .ctype h3, .entype h3{
    float: none;
}
.expandable h2 a, .ctype h2 a, .entype h2 a{
    display: block;
}
.expanded-content{
    display: none;
    border: solid #C5C0C3 1px;
    background-color: #FFF;
    padding: 10px;height: 50px;
}
a.v-all{
    line-height: 30px;
}
h2.movie, h2.cinema, h2.bowling, h2.music{
    background: transparent url(../images/sprite.png) no-repeat -636px -197px;
    padding-left: 40px;
    margin-top: 2px;
}    
h2.cinema{
    background-position: -421px -197px;
}
h2.bowling{
    background-position: -200px -197px;
}
h2.music{
    background-position: 0px -197px;
}
.headred h2.movie,.headred h2.cinema,.headred h2.bowling,.headred h2.music{
    background: transparent url(../images/spritenew.png) no-repeat -636px -35px;
    padding-left: 40px;
    margin-top: 2px;
	color:#FFFFFF;
}    
.headred h2.cinema{
    background-position: -421px -35px;
}
.headred h2.bowling{
    background-position: -200px -35px;
}
.headred h2.music{
    background-position: 0px -35px;
}
#footer{
    clear: both;
    background: #FFF url(../images/footer/LineColor.jpg) no-repeat top left;
    padding-top: 70px;margin-bottom: 30px;
}
#site-info p{
    text-align: center;
}

/* navigation menu */
#nav a{
    background: #FFF url(../images/ButtonAll.jpg) no-repeat top left;
    display: block;
    text-indent: -9999px;
    height: 43px;
}
#nav #mhome{
    background-position: 0px 0px;
    width: 137px;
}
#nav #mhome:hover{
    background-position: 0px -43px;
}

#nav #mcinema{
    background-position: -137px 0px;
    width: 155px;
}
#nav #mcinema:hover{
    background-position: -137px -43px;
}

#nav #mbowling{
    background-position: -292px 0px;
    width: 222px;
}
#nav #mbowling:hover{
    background-position: -292px -43px;
}
#nav #maboutus{
    background-position: -518px 0px;
    width: 182px;
}
#nav #maboutus:hover{
    background-position: -518px -43px;
}
#nav #mbooking{
    background-position: -703px 0px;
    width: 163px;
}
#nav #mbooking:hover{
    background-position: -703px -43px;
}

#nav #maboutus-sub{
    width: 180px;
}
#nav #mhistory{
    background-position: -876px 0px;
    width: 180px;
}
#nav #mhistory:hover{
    background-position: -876px -43px;
}
#nav #mcoperate{
    background-position: -1064px 0px;
    width: 180px;
}
#nav #mcoperate:hover{
    background-position: -1064px -43px;
}
#nav #mcontactus{
    background-position: -1252px 0px;
    width: 180px;
}
#nav #mcontactus:hover{
    background-position: -1252px -43px;
}
#nav #mfaqs{
    background-position: -1440px 0px;
    width: 180px;
}
#nav #mfaqs:hover{
    background-position: -1440px -43px;
}
#nav #mjobs{
    background-position: -1628px 0px;
    width: 180px;
}
#nav #mjobs:hover{
    background-position: -1628px -43px;
}
#nav #mnowshowing{
    background-position: -1810px 0px;
    width: 155px;
}
#nav #mnowshowing:hover{
    background-position: -1810px -43px;
}
#nav #mcomingsoon{
    background-position: -1965px 0px;
    width: 155px;
}
#nav #mcomingsoon:hover{
    background-position: -1965px -43px;
}
#nav #marchives{
    background-position: -2120px 0px;
    width: 155px;
}
#nav #marchives:hover{
    background-position: -2120px -43px;
}
#nav ul.submenu{
    position: absolute;
    top: 38px;
    left: 0px;
    display: none;
    z-index: 150;
    list-style-position: outside;
}
.submenu li{
    float: none;
}


/* footer bottom logo */
#bottom-logo{
    list-style: none;
    padding: 0px;
    margin: 0px auto;
    overflow: hidden;
    height: 100%;
    width: 500px;
}
#bottom-logo li{
    float: left;
}
#bottom-logo a img{
    border: none;
}

/* partner ads style */
#partners_ads{
    background: #FFF url(../images/sitecontent/AllADs.jpg) no-repeat bottom left;
    margin-bottom: 10px;
    padding-bottom: 10px;
}
#partners_ads span{
    display: block;
    height: 15px;
    background: #FFF url(../images/sitecontent/AllADs.jpg) no-repeat top left;
}
#partners_ads ul{
    list-style: none;
    padding: 0px;
    margin: 0px 10px 10px;
    overflow: hidden;
    height: 100%;
}
#partners_ads ul li{
    float: left;
}
/* top right ads */
#fold-ads{
    position: absolute;
    top: 0px;
    left: 0px;
    z-index:2000;
    width: 900px;
}
#pageTear100x100{
    position: absolute;
    top: 0px;
    right: 0px;
    z-index:1000 ;
}
#pageTear950x565{
    position: absolute;
    top: 0px;
    left: 0px;
    z-index:1100 ;
}

/* main content style*/
#maincontent, .content_block{
    background-color: #FFF;
    overflow: hidden;
    height: 100%;
    margin: 0px 0px 20px;
    clear: both;
}
.content_block{
    margin: 10px 0px;
}
#cinema-type, #business-type{
    position: absolute;
    top: 0px;
    left: 0px;
    list-style: none;
    margin: 0px;
    padding: 0px;
    overflow: hidden;
    height: 75px;
}
#cinema-type li, #business-type li{
    margin: 0px;
    padding: 0px;
    float: left;
}
#cinema-type-info, #business-type-info{
    margin-bottom: 10px;
    border: solid #DCDCDC 1px;
    position: relative;
    padding: 160px 0px 20px 0px;
}

#type-content{
    margin: 10px;
    color: #FFF;
}
#type-content h3{
    margin-bottom: 0px;
    display: none;
}
#type-info{
    width: 400px;
    /*background: transparent url(../images/BackWhite.png) no-repeat top left;*/
    padding: 10px;
}
#type-info2{
    width: 400px;
    /*background: transparent url(../images/BackWhite.png) no-repeat top left;*/
    padding: 10px;
    padding-left: 415px;
}

#cinema-location, #business-location{
   clear: both;
}

#cinema-section, #business-section{
    padding-left: 20px;
}
#cinema-section h4, #business-section h4{
    color: #FFF;
}
#cinema-location ul, #business-location ul{
    list-style: none;
    padding: 10px;
    width: 500px;
    margin: 0px;
}
#cinema-location li, #business-location li{
    margin: 0px 5px 10px 0px;
    position: relative;
    float: left;width: 30%;height: 35px;
}
#cinema-location h4, #business-location h4{
    margin: 0px;
}
#cinema-location li a, #business-location li a{
    color: #FFF;
}

#cinema-location li a:hover, #business-location li a:hover{
    color: #FFF;
    text-decoration: none;
}
#cinema-location li .balloon{
    display: none;
    position: absolute;
    width: 400px;
    height: 150px;
    background-color: #FFF;
    border: solid #DCDCDC 1px;
    padding: 10px;
    top: -180px;
    left: 0px;
}
#cinema-location li .tooltip, #business-location li .tooltip{
    display: none;
    position: absolute;
}
#cinema-location li .tooltip2, #business-location li .tooltip2{
    display: none;
    position: absolute;
}

/* cinema gallery style */
#cinema-gallery, #business-gallery{
    margin-top: 10px;
    margin-left: 10px;
    padding: 10px;
    overflow: hidden;
    height: 1%;
    clear: both;
}
#cinema-gallery ul,  #business-gallery ul, #movie-gallery ul{
    list-style: none;
    padding: 0px;
    overflow: hidden;
    display: block;
    width: 440px;
    float: left;
    margin: 0px;
    height: 250px;
   
}
#cinema-gallery li,  #business-gallery li{
    float: left;
    margin: 0px 10px 5px 0px;
    
}
#cinema-gallery li.endrow,  #business-gallery li.endrow{
    float: right;
    clear: right;
    margin-right: 1px;
}
#cinema-gallery a, #business-gallery a{
    display: block;
    float: left;
}
#cinema-gallery a img, #business-gallery a img{
    width: 100px;
    height: 70px;
    border: solid #FFF 1px;
}
#preview-area{
    float: right;
    margin-right: 20px !important; margin-right: 10px;
    
}
#preview-area img{
    border: solid #FFF 1px;
    
}
#cinema-gallery .gallery_page, #business-gallery .gallery_page, #movie-gallery .gallery_page{
    float: none;
    overflow: hidden;
    margin: 0px auto;
    width: 440px;
    text-align: center;
}


#gpage{
    margin:auto;
    width: 100%;
    margin-top: 10px;
    float: none;
    clear: left;
    text-align: center;
}
#cinema-gallery .gallery_page span, #business-gallery .gallery_page span, #movie-gallery .gallery_page span{
    display: inline;
    color: #FFF;
}
#cinema-gallery .gallery_page span.current, #business-gallery .gallery_page span.current, #movie-gallery .gallery_page span.current{
    text-decoration: underline;
    width: 17px;
    display: inline-block;
}

#cinema-gallery .gallery_page a, #business-gallery .gallery_page a, #movie-gallery .gallery_page a{
    background: none;
    border: none;
    color: #FFF;
    width: 17px;
    height: 18px;
    margin-right: 2px;
    padding: 0px;
    float: none;
    display: inline-block;
}
#cinema-gallery .gallery_page .previous a, #business-gallery .gallery_page .previous a, #movie-gallery .gallery_page .previous a{
    text-indent: -9999px;
    background: transparent url(../images/Arrow02.gif);
    width: 17px;
    height: 18px;
    padding: 0px;
}
#cinema-gallery .gallery_page .next a, #business-gallery .gallery_page .next a, #movie-gallery .gallery_page .next a{
    text-indent: -9999px;
    background: transparent url(../images/Arrow02.gif);
    width: 17px;
    height: 18px;
    padding: 0px;
}
#cinema-gallery  .gallery_page .hide,
#business-gallery  .gallery_page .hide{
    display: none;
}
#cinema-gallery .SFW .next a, #movie-gallery .gallery_page .next a{
    background-position: -17px -39px;
}
#cinema-gallery .SFW .previous a, #movie-gallery .gallery_page .previous a{
    background-position: 0px -39px;
}
#cinema-gallery .SFC .next a{
    background-position: -17px -76px;
}
#cinema-gallery .SFC .previous a{
    background-position: 0px -76px;
}
#cinema-gallery .SFX .next a{
    background-position: -17px -58px;
}
#cinema-gallery .SFX .previous a{
    background-position: 0px -58px;
}
#business-gallery .SFB .next a{
    background-position: -17px 0px;
}
#business-gallery .SFB .previous a{
    background-position: 0px 0px;
}
#business-gallery .SFM .next a{
    background-position: -17px -19px;
}
#business-gallery .SFM .previous a{
    background-position: 0px -19px;
}


/* tags cloud style */
#tags-cloud{
    font-size: 1.0em;
    border: solid #DCDCDC 1px;
    padding: 10px;
    color: #DDD;
}

a.size1 {
color: #f00;
font-size: 1.6em;
}
a.size2 {
color: #FF2F2F;
font-size:1.5em;
}
a.size3 {
color: #FF5F5F;
font-size: 1.4em;
}
a.size4 {
color: #FF5F5F;
font-size: 1.3em;
}
a.size5 {
color: #FFBFBF;22
font-size: 1.2em;
}
a.size6 {
color: #DFB5B5;
font-size: 1.1em;
}
a.size7 {
color: #DFD1D1;
font-size: 1.0em;
}
a.size8 {
color: #DFDFDF; 
font-size: 0.9em;
}
a.size0{
    color: #EFEFEF;
    font-size: 0.8em;
}
/* search result */
.search-result{
    margin-bottom: 10px;
}

/* site content items */
.item_list{
    list-style: none;
    overflow: hidden;
    height: 100%;
    padding: 0px;
    margin: 10px 0px;
}
.item_list li{
    padding: 0px;
    float: left;
    width: 140px;
    height: 250px;
    margin-left: 4px;
}
.item_list h3{
    width: 120px;
    margin-left: 10px;
}
.item_list li.clear{
    float: none;
    border: none;
    border-bottom: solid #DCDCDC 1px;
    margin: 10px 0px 10px 0px;
    clear: both;
    padding: 0px;
    width: 100%;
}
.item_list img{
    display: block;
    margin-left: 10px;
    width: 120px;
    height: 180px;
}
.item_list li.endrow{
/*    float: right;*/
    margin-right: 0px;
}

.big_list li{
/*
    5 row
    margin-left: 24px;
*/
    margin-left: 56px;
    padding: 0px;
    height: 250px;
}
.big_list li.clear{
   padding: 0px;
   background: none;
   height: 5px;
}
.big_list li img{
    background: #FFF url(../images/PicShadow2.jpg) no-repeat top left;
    padding: 10px 12px 13px 10px;
}
.big_list h4{
    margin: 0px;
    width: 100%;
}

/* content list style (promotion list, etc) */
.content_list{
    list-style: none;
    padding: 0px;
    margin: 0px;
}
.content_list li{
    margin: 0px;
    padding: 10px;
    overflow: hidden;
    height: 1%;
    background-color: #FFF;
    border-bottom: solid #DCDCDC 1px;
}

.content_list li h4{
    margin-top: 0px;
}
.content_list li.evenrow{
    background-color: #FFF7EF;
}
.content_list li img{
    float: left;
    border: solid #DCDCDC 1px;
    width: 180px;
    height: 85px;
}
.content_list li .content_detail{
    float: right;
    width: 630px;
}
/* promotion list (revise) */
ul.promo_list{
    list-style: none;
    margin: 0px;
    padding: 0px;
}
ul.promo_list li{
    width: 415px;
    float: left;
    padding: 10px 0px;
    border-bottom: solid #DCDCDC 1px;
    overflow: hidden;
    clear: left;
}
ul.promo_list img{
    background: #FFF url(../images/PicShadow2.jpg) no-repeat top left;
    padding: 10px 12px 13px 10px;
    float: left;
    width: 120px;
    height: 180px;
    margin-right: 10px;
}
ul.promo_list h4{
    margin: 0px;
}
ul.promo_list li.evenrow{
    float: right;
    clear: right;
}
ul.promo_list .content_detail{
    width: 250px;
    float: left;
}
/* breadcrumbs */
#trackback{
    list-style: none outside;
    margin: 0px;
    padding: 5px;
    border: solid #DCDCDC 1px;
    overflow: hidden;
    height: 1%;
    margin-bottom: 10px;
}
#trackback li{
    float: left;
    margin-right: 5px;
}

/* timetable selector */
/*#timetable{
    position: relative; 
}*/
#timetable a.time-choser{
    display: block;
    background: #D9D9D8 url(../images/sprite.png) no-repeat 0px -142px ;
    text-align: center;
    font-weight: bold;
    width: 236px;
    line-height: 22px;
    margin-bottom: 10px;
    border: solid #BFBEC5 1px;
}
#timetable h4{
    margin-left: 10px;
    line-height: 20px;
}
#timetable .popup{
    position: absolute;
    left: 30px;
    background-color: #FFF;
    display: none;
    z-index: 100;
    border: solid #DCDCDC 2px;
}
#timetable #locations-popup{

}
#timetable #movies-popup{
}
#timetable .selector{
    border: solid #DCDCDC 1px;
    background-color: #FFF;
    padding: 10px;
    overflow: hidden;
    height: 100%;

}
.selector .ctype{
    width: 48%;
    float: left;
    clear: left;
}
.selector ul{
    list-style: none;
    margin: 0px;
    padding: 0px;
}
.selector .SFC-Cinema{
    float: right;
    clear: right;
}
.selector li{
    margin-bottom: 10px;
}
.selector ul a{
    color: #000;
    font-weight: bold;
}
#movie_legends{
    background-color: #EFEFEF;
    border: solid #DCDCDC 1px;
    padding: 10px;
    overflow: hidden;
    height: 1%;
    clear: left;
}
#movie_legends h5 a{
    display: block;
}
#movie_legends h5{
    border-bottom: solid #333 1px;
}
#movie_legends dl,#movies-list_b dl,#movies-list_r dl {
    width: 250px;
	*width: 255px;
    float: left;
    margin-right: 0;
    display: none;
}
#movie_legends dt,#movies-list_b dt,#movies-list_r dt{
    font-weight: bold;
    clear: left;
    float: left;
    margin-right: 5px;
    clear:both ;
   
}
#movie_legends dd,#movies-list_b dd,#movies-list_r dd{
    float: left;
    margin: 0px 0px 10px 0px;
    clear:both;
}
#movie_legends dd .ratingre,#movies-list_b dd .ratingre,#movies-list_r dd .ratingre,.ratingreEn{
	float:left; 
padding:0px;
	width:250px;
	height:70px;
	background:url(../images/rating/filmG.jpg) no-repeat;
	
}
.ratingreEn{
	
	background:url(../images/rating/filmGen.jpg) no-repeat;
	
}
#movie_legends dd .ratinggeneral,#movies-list_b dd .ratinggeneral,#movies-list_r dd .ratinggeneral ,.ratinggeneralEn{
	float:left; 
padding:0px;
	width:250px;
	height:70px;
	background:url(../images/rating/filmR.jpg) no-repeat;
}
.ratinggeneralEn{

	background:url(../images/rating/filmRen.jpg) no-repeat;
}
#movie_legends dd .rating13,#movies-list_b dd .rating13,#movies-list_r dd .rating13,.rating13En{
	float:left; 
padding:0px;
	width:250px;
	height:70px;
	background:url(../images/rating/film13.jpg) no-repeat;
}
.rating13En{

	background:url(../images/rating/film13en.jpg) no-repeat;
}
#movie_legends dd .rating15,#movies-list_b dd .rating15,#movies-list_r dd .rating15,.rating15En{
	float:left; 
padding:0px;
	width:250px;
	height:70px;
	background:url(../images/rating/film15.jpg) no-repeat;
}
.rating15En{

	background:url(../images/rating/film15en.jpg) no-repeat;
}

#movie_legends dd .rating18,#movies-list_b dd .rating18,#movies-list_r dd .rating18,.rating18En{
	float:left; 
padding:0px;
	width:250px;
	height:70px;
	background:url(../images/rating/film18.jpg) no-repeat;
}
.rating18En{

	background:url(../images/rating/film18en.jpg) no-repeat;
}
#movie_legends dd .rating20,#movies-list_b dd .rating20,#movies-list_r dd .rating20,.rating20En{
	float:left; 
padding:0px;
	width:250px;
	height:70px;
	background:url(../images/rating/film20.jpg) no-repeat;
}
.rating20En{

	background:url(../images/rating/film20en.jpg) no-repeat;
}


#movies-list,#movies-list_t,#movies-list_b,#movies-list_r {
    overflow: hidden;
    height: 100%;
    clear: both;
	
}
#movies-list_b,#movies-list_r{padding:10px;}
#movies-list ol,#movies-list_t ol,#movies-list_b ol{
    list-style: none outside;
    margin-right: 10px;
    padding: 0px;
    overflow: hidden;
    width: 266px;
    float: left;
}
#movies-list li,#movies-list_t li,#movies-list_b li{
}

/* showtime table */
.movie_showtime h4, .movie_showtime h3{
    margin-top: 0px;
    margin-right: 10px;
    font-size: 13px;
}
.movie_showtime ol{
    list-style: none;
    width: 630px;
    overflow: hidden;
    height: 100%;
    margin: 0px;
    padding: 0px;
}
.movie_showtime ol li{
    margin: 0px;
    margin-right: 10px;
    padding: 0px;
    float: left;
    border-bottom: none;
}

/* cinema type button */
ul.SFX li a, ul.SFC li a, ul.SFW li a, ul.SFB li a, ul.SFM li a{
    display: block;
    height: 70px;
    text-indent: -9999px;
}
ul.SFX li a, ul.SFC li a, ul.SFW li a{
    background: #000 url(../images/BarAll.jpg) no-repeat top left;
}
ul.SFB li a, ul.SFM li a{
    background: #000 url(../images/BarBG.jpg) no-repeat top left;
}
ul#cinema-type li a#SFX{
    background-position: -150px 0px;
    width: 139px;
}
ul#cinema-type li a#SFX:hover, ul#cinema-type.SFX li a#SFX{
    background-position: -150px -71px;    
}
ul#cinema-type li a#SFC{
    background-position: -293px 0px;
    width: 139px;
}
ul#cinema-type li a#SFC:hover, ul#cinema-type.SFC li a#SFC{
    background-position: -293px -71px;    
}

ul#cinema-type li a#SFW{
    background-position: 0px 0px;
    width: 149px;
}
ul#cinema-type li a#SFW:hover, ul#cinema-type.SFW li a#SFW{
    background-position: 0px -71px;    
}

ul#business-type li a#SFB{
    background-position: 0px 0px;
    width: 177px;
}
ul#business-type li a#SFB:hover, ul#business-type.SFB li a#SFB{
    background-position: 0px -71px;
}
ul#business-type li a#SFM{
    background-position: -174px 0px;
    width: 177px;
}
ul#business-type li a#SFM:hover, ul#business-type.SFM li a#SFM{
    background-position: -176px -71px;
}

/* first page highlighted movie */
#highlight_info {
    float: left;
    width: 55%;margin:-50px 0px 0px 0px;
    
}
#highlight-booking{
float:right;width:420px;height:42px;position:relative;left:0px;top:250px;z-index:2000;display:block;overflow:hidden;
}
#highlight-booking a{
float:right;width:107px;height:32px;margin-left:-10px;
}
#booking_btn{
float:right;
}
#highlight_trailer{
    float: right;
    width: 48%;
    margin:13px 10px;
}


/* contact us */
#contactus-info{
    margin-bottom: 10px;
    border: solid #DCDCDC 1px;
    position: relative;
    padding: 0px 0px 20px ;
}

#contactus-nav{
    margin-bottom: 10px;
    border: solid #DCDCDC 1px;
    position: relative;
}
#contactus-submit{
    width:auto;
    height:31px;
    display:block;
    text-align:center;
    display:inline-block;
}
#contactus-submit b{
    
}
#contactus-submit .con-submit{
    width:102px;
    height:31px;
    text-align:center;
    float:inherit;
}
/*
#contactus-submit .con-submit a, #contactus-submit .con-submit a:hover{
    width:102px;
    height:31px;
    text-align:center;
    background:url(../images/contactus/contactus-sumit.jpg) no-repeat;
    text-decoration:none;display:inline-block;
}
#contactus-submit .con-submit a:hover{
    background:url(../images/contactus/contactus-sumit-hover.jpg) no-repeat;
}
*/
.contact_btn, .contact_btn-hover{
    background:url(../images/contactus/contactus-sumit.jpg) no-repeat;
    display:inline-block;
    width: 102px;
    height: 31px;
    border:none;
}
.contact_btn-hover{
    background:url(../images/contactus/contactus-sumit-hover.jpg);
    cursor: pointer;
}

/*
#contactus-submit .con-cencel, #contactus-submit .con-cencel a, #contactus-submit .con-cencel a:hover{
    width:102px;
    height:31px;
    text-align:center;
    float:inherit;
}
#contactus-submit .con-cencel a{
    background:url(../images/contactus/contactus-cencel.jpg) no-repeat;
    text-decoration:none;
    display:inline-block;
}
#contactus-submit .con-cencel a:hover{
    background:url(../images/contactus/contactus-cencel-hover.jpg) no-repeat;
}
*/

#contactus-submit .con-cencel{
    width:102px;
    height:31px;
    text-align:center;
    float:inherit;
}
.contact2_btn, .contact2_btn-hover{
    background:url(../images/contactus/contactus-cencel.jpg) no-repeat;
    display:inline-block;
    width: 102px;
    height: 31px;
    border:none;
}
.contact2_btn-hover{
    background:url(../images/contactus/contactus-cencel-hover.jpg);
    cursor: pointer;
}

/* corporate */
#corporate-info{
    margin-bottom: 10px;
    border: solid #DCDCDC 1px;
    position: relative;
    padding: 0px 0px 20px ;
}

#corporate-nav{
    margin-bottom: 10px;
    border: solid #DCDCDC 1px;
    position: relative;
}

/* history */
#history-info{
    margin-bottom: 10px;
    border: solid #DCDCDC 1px;
    position: relative;
    padding: 0px 0px 20px ;
}

#history-nav{
    margin-bottom: 10px;
    border: solid #DCDCDC 1px;
    position: relative;
}
#current{
    float:left;
    width:auto;
    height:auto;
}
#current li.normal, #current li.shadow, #current li.over{
    list-style:none;
    float:left;
    background:url(../images/milestone/history.jpg) no-repeat;
    padding-left:0px;
    padding-top:6px;
    width:62px;
    height:52px;
    margin:0px;
    position:relative;
    top:-1px;
    left: -40px;
    text-align:center;
    margin: 0px 0px 0px 3px;
}
#current li.shadow{
    background:url(../images/milestone/history-current.jpg) no-repeat;
}
#current li.over{
    background:url(../images/milestone/history-current-hover.jpg) no-repeat;
}

#history-section{
    width:845px;
    height:auto;
    border:solid #999999 1px;
    float:left;
    display:block;
    margin:-9px 0px 0px 0px;
    padding: 5px;
}

/* job */
#job-info{
    margin-bottom: 10px;
    border: solid #DCDCDC 1px;
    position: relative;
    padding: 0px 0px 20px ;
}

#job-nav{
    margin-bottom: 10px;
    border: solid #DCDCDC 1px;
    position: relative;
}

#button-bg{
    width:110px;
    height:27px;
    float:left;
    display:
    block;
    text-align:center;
}
#button-bg a{
    width:105px;
    height:20px;
    float:left;
    display:block;
    background:url(../images/nav_bar.jpg) repeat-x;
    text-decoration:none;
    border:solid #838185 1px;
    color:#838185;
    font-size:14px;
}
#button-bg a:hover{
    color:#000000;
}
#back-next{
    width:auto;
    height:31px;
    display:block;
    text-align:center;
    display:inline-block;
}
#back-next .back-page, #back-next .back-page a, #back-next .next-page, #back-next .next-page a, #back-next .preview, #back-next .preview a, #apply-page .apply-submit, #apply-page .apply-submit a{
    width:122px;
    height:31px;
    text-align:center;
    float:inherit;
}


#back-next .back-page a{
    text-decoration:none;
}
.backpage_btn, .backpage_btn-hover{
    background:url(../images/job/back-page.jpg) no-repeat;
    display:inline-block;
    width: 112px;
    height: 31px;
    border:none;
}
.backpage_btn-hover{
    background:url(../images/job/back-page-hover.jpg);
    cursor: pointer;
}
/*
#back-next .back-page a{
    background:url(../images/job/back-page.jpg) no-repeat;
    text-decoration:none;
    display:inline-block;
}
#back-next .back-page a:hover{
    background:url(../images/job/back-page-hover.jpg) no-repeat;
}
*/
.nextpage_btn, .nextpage_btn-hover{
    background:url(../images/job/next-page.jpg) no-repeat;
    display:inline-block;
    width: 112px;
    height: 31px;
    border:none;
}
.nextpage_btn-hover{
    background:url(../images/job/next-page-hover.jpg);
    cursor: pointer;
}
/*
#back-next .next-page a{
    background:url(../images/job/next-page.jpg) no-repeat;
    text-decoration:none;
    display:inline-block;
}
#back-next .next-page a:hover{
    background:url(../images/job/next-page-hover.jpg) no-repeat;
}
*/

#back-next .preview a{
    background:url(../images/job/next-page.jpg) no-repeat;
    text-decoration:none;
    display:inline-block;
}
#back-next .preview a:hover{
    background:url(../images/job/next-page-hover.jpg) no-repeat;
}

#back-next b,#apply-page b{
    display:none;
}
#apply-page {
    width:auto;
    height:31px;
    display:block;
    text-align:center;
    display:inline-block;
}
#apply-page .apply-submit{
    width:122px;
    height:31px;
    text-align:center;
    float:inherit;
}

.applypage_btn, .applypage_btn-hover{
    background:url(../images/job/apply.jpg) no-repeat;
    display:inline-block;
    width: 112px;
    height: 31px;
    border:none;
}
.applypage_btn-hover{
    background:url(../images/job/apply-hover.jpg);
    cursor: pointer;
}
/*
#apply-page .apply-submit a{
    background:url(../images/job/apply.jpg) no-repeat;
	 text-decoration:none;
    display:inline-block;
}
#apply-page .apply-submit a:hover{
    background:url(../images/job/apply-hover.jpg) no-repeat;
}
*/
#submit-job-left, #submit-job-rigth{
    width:268px;
    height:37px;
    float:left;
    display:block;
    text-align: center;
}
#submit-job-left a, #submit-job-rigth a{
    background:url(../images/job/about-job_07.jpg) no-repeat;
    width:268px;
    height:37px;
    float:left;
    display:block;
    text-decoration: none; 
    padding: 5px 0px 0px 0px;
    text-align: center;
    margin-bottom : -5px;
}
#submit-job-left a:hover, #submit-job-rigth a:hover{
    background:url(../images/job/about-job_07hover.jpg) no-repeat;
}

#submit-job-rigth a{
    background:url(../images/job/about-job_09.jpg) no-repeat;
}
#submit-job-rigth a:hover{
    background:url(../images/job/about-job_09hover.jpg) no-repeat;
}
#submit-job-left b,#submit-job-rigth b{
    float:left;
    display:block;
    text-align: center;
    color: #FFF;
    padding: 10px;
    width:255px;
    height:0px;
}

#job-view, #job-view a{
    width:50px;
    height:20px;
    float:left;
    display:block;cursor: pointer;
}
#job-view a{
    color:#666;
    text-decoration:none;
}
#job-view a:hover{
    color:#000;
}


#about-job-submit, #about-job-submit .job-submit-apply, #about-job-submit .job-submit-apply a{
    width:auto;
    height:31px;
    display:inline-block;
    float:inherit;
}
#about-job-submit .job-submit-apply, #about-job-submit .job-submit-apply a{
    width:189px;
}
#about-job-submit .job-submit-apply a{
    background:url(../images/job/job-submit-apply.jpg) no-repeat;
}
#about-job-submit .job-submit-apply a:hover{
    background:url(../images/job/job-submit-apply-hover.jpg) no-repeat;
}


#about-job-submit .job-submit-apply-ad, #about-job-submit .job-submit-apply-ad a{
    width:249px;
    height:31px;
    display:inline-block;
    float:inherit;
}
#about-job-submit .job-submit-apply-ad a{
    background:url(../images/job/job-submit-apply-ad.jpg) no-repeat;
    text-decoration:none;
}
#about-job-submit .job-submit-apply-ad a:hover{
    background:url(../images/job/job-submit-apply-hover-ad.jpg) no-repeat;
}
#about-job-submit b{
    display:none;
}

/* faq */
#faq-info{
    margin-bottom: 10px;
    border: solid #DCDCDC 1px;
    position: relative;
    padding: 0px 0px 20px ;
}

#faq-nav{
    margin-bottom: 10px;
    border: solid #DCDCDC 1px;
    position: relative;
}
ul.ulfaqs{margin:0px 0px 10px 15px;cursor: pointer;color:#666;}
/*
ul.ulfaqs a{
    color:#666;
    text-decoration:none;
    margin:0px 0px 0px 15px;
}
ul.ulfaqs a:hover{
    color:#000000;
    }*/
li.lifaqs{
    width:auto;
    height:auto;
    border:solid #ccc 1px;
    list-style:none;
    float:left;
    padding:10px;
    background:#fdfdfd;
    max-width:800px;
	width: expression(document.body.clientWidth < 0? "0px" : document.body.clientWidth > 800? "800px" : "auto");
    margin:5px 10px 0px 10px;
    display:none;
}

/* newsletter */
#expanded-content p{
    text-align: center;
    width: 200px;
    height: auto;
    padding: 0px 0px 0px 22px;
}
#expanded-content p .newsletter_error{
    display:none;
}
.subscribe_btn, .subscribe_btn-hover{
    background:url(../images/newsletter/subscribe.jpg) no-repeat;
    float:left;
    display:block;
    width: 103px;
    height: 21px;
    border:none;
    margin-top:5px;
    margin-left :50px!important;
    margin-left:20px
}
.subscribe_btn-hover{
    background:url(../images/newsletter/subscribe-hover.jpg);
    cursor: pointer;
}


/* sidebar calendar */
.small_calendar{
    width: 262px;
    background-color: #e9e8ea;
    font-weight: bold;
    border-collapse: separate;
    padding: 5px;
}
.small_calendar tbody{
    background-color: #e9e8ea;
}
.small_calendar th, .small_calendar td{
    text-align: center;
    font-size: 11px;
}
.small_calendar th{
    background-color: #e9e8ea;
    width: 35px;
}
.small_calendar td{
    background-color: #FFF;
    margin: 1px;
    width: 35px;
    padding: 7px 0px;
    text-align: center;
}
.small_calendar td.highlight{
    background-color: #FFFEEF;
}
#calendar-head{
    overflow: hidden;
    margin: 5px auto;
}
#calendar-head a{
    margin-right: 5px;
}
#calendar-head .next{
    background: #FFF url(../images/sprite.png) no-repeat -122px -122px;
    text-indent: -9999px;
    width: 23px;
    height: 20px;
    display: block;
    float: left;
}
#calendar-head h3{
    margin: 0px;
    text-align: right;
}
#calendar-head .back{
    background: #FFF url(../images/sprite.png) no-repeat -100px -122px;
    text-indent: -9999px;
    width: 23px;
    height: 20px;
    display: block;
    float: left;
   
}
#calendar-head .today{
    background: #FFF url(../images/sprite.png) no-repeat -100px -104px;
    width: 45px;
    height: 18px;
    display: block;
    float: left;
    font-weight: bold;
    font-size: 9px;
    text-align: center;
    line-height: 15px;
}
.small_calendar{
    position: relative;
}/*
.small_calendar td{
    background: #FFF url(../images/sprite.png) no-repeat 0px -104px;
}
.small_calendar td.highlight{
    background: #FFF url(../images/sprite.png) no-repeat -50px -104px;
}*/

/* big calendar style */
.big_calendar{
    width: 100%;
    list-style: none;
    margin: 0px;
    padding: 0px;
  
    height: 100%;
}
.big_calendar li{
    padding: 0px;
    margin: 0px 30px 30px 0px;
    float: left;
    position: relative;
}
.big_calendar li.endrow{
    float: right;
    margin-right: 0px;
}
.big_calendar li a{
    border: solid #DCDCDC 1px;
    background: #FFF url(../images/sprite.png) no-repeat -667px -103px;
    text-align: center;
    font-size: 20px;
    display: block;
    float: left;
    width: 94px;
    height: 94px;
    line-height: 94px;
}
.big_calendar li a.highlight {
    border: solid #f8e5a6 1px;
    background: #FFF url(../images/sprite.png) no-repeat -760px -103px;
}
.day-name{
    list-style: none;
    margin: 0px;
    padding: 0px;
    background-color: #E1E1E1;
    overflow: hidden;
    height: 100%;
    margin-bottom: 10px;
}
.day-name li{
    float: left;
    text-align: center;
    font-weight: bold;
    margin-right: 30px;
    padding: 10px 0px;
}
.day-name .abbr{
    display: block;
    float: left;
    text-align: center;
    width: 95px;
    border: none;
}
.day-name .last{
    float: right;
   margin-right: 0px;
}


.highlight a{
    display: block;
}
.ev_popup{
    position: absolute;
}
.ev_popup span.tip{
    position: absolute;
    top: -7px;
    left: 7px;
    width: 11px;
    height: 7px;
    display: block;
    background: transparent url(../images/sprite.png) no-repeat 0px -132px;
}
.popup_holder{
    position: absolute;
    display: none;
}
.big_calendar .popup_holder{
    top: 90px;
    left: 0px;
    
}
.highlight .ev_popup{
    position: absolute;
    z-index: 100;
    background-color: #fff;
    border: solid #DCDCDC 1px;
    padding: 10px;
    text-align: left;
    font-family: tahoma;
    top: 15px;
}
.small_calendar .highlight a{
    color: #FFF;
}
.ev_popup ul{
    list-style: none;
    margin: 0px;
    padding: 0px;
    font-weight: normal;
    width: 300px;
}
.ev_popup li{
    border-bottom: dotted #DCDCDC 1px;
    background: transparent url(../images/sprite.png) no-repeat -855px -108px  ;
    padding: 5px 0px 5px 15px;
}
.big_calendar .ev_popup li{
    float: none;
    margin: 0px;
}
.ev_popup h4, .ev_popup h5{
    margin: 0px;
    padding: 0px;
    width: 250px;
}
#big-calendar-head{
    margin: 20px auto;
    font-size: 18px;
    border-bottom: solid #DCDCDC 1px;
    overflow: hidden;
    height: 100%;
    padding-bottom: 5px;
}
#big-calendar-head h3{
    text-align: center;
    font-size: 18px;
}
#big-calendar-head .next, #big-calendar-head .back{
    width: 92px;
    height: 43px;
    background: #FFF url(../images/sprite.png) no-repeat -574px -120px;
    text-indent: -9999px;
}
#big-calendar-head .next:hover{
    background-position: -483px -120px;
}
#big-calendar-head .back{
    background-position: -391px -120px;
}
#big-calendar-head .back:hover{
    background-position: -299px -120px;
}


/*  showtime */
#showtime_reset{
    text-indent: -9999px;
    display: block;
    float: right;
    width: 30px;
    height: 30px;/*
    background: transparent url(../images/sprite.png) no-repeat -397px -88px;
	*/
	background: transparent url(../images/re_showtime.jpg) no-repeat 0px -1px;
    position: relative;
    top: 0px;
    right: -1px;
}
#showtime_search{
    margin: 0px;
}
#showtime_search p{
    text-align: center;
}
#showtime_search p .black_button, #showtime_search p .hover{
    background:url("../images/newsletter/sreach.jpg") no-repeat;
    width: 103px;
    height: 21px;
    border:none;
    cursor: pointer;
}
#showtime_search p .hover{
    background:url("../images/newsletter/sreach-hover.jpg") no-repeat;
}

#member_dashboard{
    position: fixed;
    z-index: 210;
    height: 27px;
    width: 900px;
    bottom: 0px;
    margin: 0px auto;
    background: #EAEAEA url(../images/sprite.png) no-repeat -724px -64px;
    border-top: solid #8F8F8F 1px;
}

#member_dashboard h2{
    font-size: 11px;
    line-height: 10px;
    margin-left: 10px;
}
#member_dashboard label{
    font-weight: bold;
}
#member_dashboard .v-all{
    line-height: 20px;
    color: #FFF;
    font-weight: bolder;
    text-decoration: none;
}
#member_dashboard .red{
    color: #F00;
}
#search_trigger, #member_tracking{
    background: #EAEAEA url(../images/sprite.png) no-repeat -695px -64px;
    display: block;
    width: 29px;
    height: 26px;
    padding: 0px;
    text-decoration: none;
}
#member_tracking{
    background-position:  -666px -64px ;
}

#site-action{
    list-style: none;
    float: right;
    padding: 0px;
    margin: 0px;
    margin-top: 2px;
}
#site-action li{
    float: left;
    margin-right: 2px;
}
.pfb_head{
    background: #333 url(../images/sprite.png) no-repeat -201px  -64px;
    overflow: hidden;
    height: 21px;
    clear: both;
    margin: 0;
}
.pfb_head span{
    background: #333 url(../images/sprite.png) no-repeat -654px -64px ;
    display: block;
    width: 10px;
    height: 22px;
    float: right;
}



/* pagination style */
ul.pagination{
    list-style: none;
    margin: 0px;
    padding: 0px;
}
ul.pagination li{
    float: left;
    margin: 0px;
    margin-right: 5px;
}
ul.pagination li.current{
    display: block;
    border: solid #DCDCDC 1px;
    text-align: center;
    padding: 3px 5px;
    font-weight: bold;
}
ul.pagination li a{
    display: block;
    border: solid #DCDCDC 1px;
    text-align: center;
    padding: 3px 5px;
}
ul.pagination li a:hover{
    background-color: #333;
    color: #FFF;

}
/* head bar pagination */
.head-pagination{
    float: right;
    height: 30px;
    margin-top: 5px;
}
#table1{padding  : 0px 0px 0px 5px;}

/* no loading style */
.loading{
    text-align: center;
    width: 130px;
    height: 80px;
}

/* new style for location popup (showtime) */
#location_list ul{
    float: left;
    width: 180px;
    margin: 10px;
    padding: 0px;
    list-style: none outside;
}
#location_list li{
    margin-bottom: 10px;
}
#location_list a{
    font-weight: bold;
}

/* promotion detail page*/
#promotion-detail{
    border: solid #DCDCDC 1px;
    clear: both;
    padding: 20px;
    position: relative;
    z-index: 1;
}

/* movie magnets list */
#movie-magnets{
    list-style: none;
    clear: both;
    margin: 0px;
    padding: 0px;
    height: 1%;
    list-style-position: inside;
}
#movie-magnets li{
    float: left;
    margin: 0 10px 0 0;
    padding: 0px;
    position: relative;
    height: 1%;
}
#movie-magnets span{
    display: block;
    width: 20px;
    height: 17px;
}

#movie-magnets .magnet-info{
    display: none;
    background-color:#FFF;
    border: solid #DCDCDC 2px;
    color: #3F3F3F;
    left: 30px;
    top: -8px;
    position: absolute;
    padding: 10px;
    text-align: left;
    width: 200px;
    z-index: 100;
    
}
#movie-magnets .mag-permission{
    z-index: 10;
    position: relative;
}
#movie-magnets .magnet-info span{
    position: absolute;
    left: -12px;
    top: 5px;
    background: transparent url(../images/sprite.png) no-repeat -655px -182px;
    display: block;
    width: 12px;
    height: 14px;
}
#movie-magnets .magnet-info strong{
    display: block;
}

/* magnet permission block */
    .permission{
	display: none;
	position: absolute;
	bottom: 5px;
	left: -8px;
	background-color:#FFF;
	border: solid #DCDCDC 2px;
	padding: 10px;
	text-align: left;
	color: #3F3F3F;
	z-index: 50;
	width: 380px;
	margin: 30px auto;
    }
    .permission p{
	text-indent: 0px;
	text-align: center;
    }
    .permission img{
	margin-right: 10px;
    }
    .permission strong{
	display: inline;
    }
    
    
#movie-content .permission .close{
    position: absolute;
    top: 0px;
    right: 5px;
    color: #AFAFAF;
}
#movie-magnets  .permission span{
    position: absolute;
    width: 13px;
    height: 9px;
    display: block;
    bottom: -7px;
    left: 10px;
    line-height: 9px;
    background: transparent url(../images/sprite.png) no-repeat -12px -133px;
}



/* add magnet button */
a.add-magnet, #movie-content a.add-magnet {
    background-color: #FFF;
    width: 13px;
    height: 13px;
    color: #6E7CA0;
    font-weight: bold;
    text-align: center;
    border: solid #6E7CA0 1px;
    text-decoration: none;
}


.block-content p{
    text-indent: 20px;
}
.block-content p.cmd{
    text-indent: 0px;
    text-align: center;
}


button{
    background: none;
    border: none;
}
a.button{
    background: transparent url(../images/sprite.gif) no-repeat -64px 0px;
    text-align: center;
    color: #FFF;
    font-weight: bold;
    height: 20px;
    width: 100px;
    text-indent: 0px;
    display: block;
    line-height: 17px;
    float: left;
}
.blkbtn{
    background: transparent url(../images/sprite.gif) no-repeat -64px 0px;
    text-align: center;
    color: #FFF;
    font-weight: bold;
    height: 20px;
    width: 100px;
    border: 0px;
    font-size: 10px;
    line-height: 20px;
    text-transform: uppercase;
}
a.button:hover, .blkbtn.hover{
    background: transparent url(../images/sprite.gif) repeat-x -84px 0px;
    cursor: pointer;
}

/* member bar style */
.member_action{
    list-style: none;
    padding: 0px;
    margin: 0px;
    margin-left: 60px;
}
.member_action li{
    float: left;
    padding: 0px 5px;
    border-right: solid #8f8f8f 1px;
}
.member_action a{
    color: #000;
    line-height: 30px;
}
#q_login{
    display: none;
    position: absolute;
    left: 0px;
    width: 280px;
    bottom: 28px;
    background-color: #FFF;
    border: solid #4F4F4F 1px;
    border-bottom: none;
}
#q_login h2{

}
#q_login form{
    margin: 10px;
}
#q_login .field{
    width: 170px;
    padding: 2px 3px;
}
#q_login label{
    width: 75px;
    float: left;
}

#q_login em{
    display: block;
    padding-left: 80px;
    color: #F00;
}
#q_login p{
    clear: both;
}
#q_login .cmd{
    padding-left: 80px;
    font-size: 11px;
}
/* member quick profile */
#q_profile{
    display: none;
    position: absolute;
    z-index: 210;
    left: 0px;
    width: 245px;
    bottom: 27px;
    background-color: #FFF;
    border: solid #8F8F8F 1px;
}
#q_profile *{
    font-size: 11px;
}
#member_dashboard h2{
    color: #FFF;
    margin-top: 0px;
    padding: 5px 0px;
}
#member_qprofile{
    margin: 10px;
    overflow: hidden;
    height: 100%;
}
#member_qprofile .myavatar{
    border: solid #999 1px;
    float: left;
}


/* checkbox/radio list */
.option_list{
    padding: 0px;
    margin: 0px;
    list-style: none;
    overflow: hidden;
    height: 100%;
}

.option_list li{
    padding: 0px;
    float: left;
    width: 49%;
}
.option_list label{
    display: inline;
   
}

/* magnets bar */
#magnets-bar{
    list-style: none;
    margin: 5px 0px 0px 5px;
    padding: 0px;
    float: left;
}
#magnets-bar li{
    float: left;
    padding: 0px;
    margin: 0px;
    margin-right: 5px;
    position: relative;
}
#magnets-bar strong{
    display: block;
}
#magnets-bar .magnet-info{
    display: none;
    position: absolute;
    bottom: 35px;
    left: -8px;
    background-color:#FFF;
    border: solid #DCDCDC 2px;
    padding: 10px;
    width: 200px;
    text-align: left;
}
#magnets-bar .magnet-info span{
    position: absolute;
    width: 13px;
    height: 9px;
    display: block;
    bottom: -7px;
    left: 10px;
    background: transparent url(../images/sprite.png) no-repeat -12px -133px;
}

#help{
    text-indent: -9999px;
    display: block;
    width: 24px;
    height: 33px;
    background: transparent url(../images/sprite.png) no-repeat -332px -87px;
}
#print{
    text-indent: -9999px;
    display: block;
    width: 26px;
    height: 33px;
    background: transparent url(../images/sprite.png) no-repeat -363px -87px;
}

/* search form  + tracking log*/
#search_form, #tracking_log{
    display: none;
    position: absolute;
    right: 2px;
    bottom: 27px;
    background-color: #FFF;
    border: solid #8F8F8F 1px;
}
#search_form{
    width: 240px;
}
#tracking_log{
    right: 34px;
    z-index: 50;
    width: 400px;
}
#tracking_log ul{
    list-style: none;
    margin: 0px;
    padding: 0px;
    height: 300px;
    position: relative;
    overflow-y: scroll;
}
#tracking_log li{
    padding: 5px;
}
#tracking_log li.zebra{
    background-color: #EFEFEF;
}
#search{
   margin: 10px;
}

/* red button style*/
.redbtn{
    background: #DD1B1B url(../images/sprite.png) no-repeat -300px -169px;
    color: #FFF;
    font-weight: bold;
    border: none;
    padding-top: 2px;
    padding-bottom: 2px;
}
.redbtn:hover{
    text-decoration: none;
    cursor: pointer;
}
a.redbtn{
    padding: 2px 10px;
}

/* reset form */
#maincontent.highblock{
    height: 400px;
}

/* my magnet list in q_profile */
#my_magnets{
    background-color: #F7F7F7;
    border-top: solid #8F8F8F 1px;
    margin: 0px;
    padding: 0px 10px 10px 10px;
}
#my_magnets ul{
    list-style: none;
    margin: 0px;
    padding: 0px;
    clear: both;
    overflow: hidden;
    height: 100%;
}
#my_magnets li{
    margin: 0px;
    padding: 0px;
    width: 49%;
    float: left;
    margin-bottom: 5px;
}
#my_magnets a img{
    margin-right: 5px;
    position: relative;
    top: 5px;
}
#my_magnets a{
    color: #3E5BA8;
    text-decoration: none;
}
#member_qprofile p{
    overflow: hidden;
    height: 100%;
    float: right;
    width: 145px;
}

.qprofile_section{
    margin: 10px;
    border-top: solid #8f8f8f 1px;
    padding: 0px;
    clear: both;
}

/* hovered title for link */
.hover-title {
    position: relative;
}
.hover-title span{
    display: none;
    position: absolute;
    top: -30px;
    right: 0px;
    padding: 5px;
    border: solid #CFCFCF 1px;
    background-color: #FFF;
    width: 100px;
    text-decoration: none;
}

#member_dashboard .hover-title span{
    right: 0px;
    top: -35px;	
}
#banner-left{
	display:block;
	margin-top:-15px;
	margin-left:5px;
}
#banner-left .top{
	width:250px;
	height:90px;
	float:left;
	display:block;

}
#banner-left .buttom{
	width:250px;
	height:90px;
	float:left;
	display:block;
	margin:5px 0px 5px 0px;
}

/* expandable content in quick profile block */
.q-expanded{
    display: none;
}
.rating1{background:url(../images/rating/1.jpg) no-repeat;float:left;width:55px;height:66px;}
