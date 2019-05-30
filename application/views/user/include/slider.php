
		<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="wpb_revslider_element wpb_content_element">
<div id="revslider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
	<div id="revslider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
<ul>	<!-- SLIDE  -->
    <?php
    $i=7;
    $query=$this->db->query("select * from slider");
                  foreach ($query->result() as $row)
{
        $name= $row->image;
        $i=$i+1;
        

    
    ?>
	<li data-index="rs-<?=$i?>" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://themewisdom.com/demo/wpm/doctor/wp-content/uploads/revslider/homeslider1/slider-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="<?=base_url()?>assets/image/slider/<?=$name?>"  alt="" title="Doctor Home Page"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
                <?php
$b="Medical";
$c="Services";
$d="You Can";
$e="Trust";
$f="Learn More";

?>
		<div class="tp-caption   tp-resizeme" 
			 id="slide-7-layer-1" 
			 data-x="['left','left','center','center']" data-hoffset="['51','140','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['155','44','-53','0']" 
						data-fontsize="['48','46','38','20']"
			data-lineheight="['60','60','50','26']"
			data-width="['561','561','480','400']"
			data-height="['221','221','200','200']"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":10,"speed":3000,"frame":"0","from":"x:[105%];z:0px;rX:45deg;rY:0deg;rZ:90deg;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","to":"y:[100%];opacity:0;","ease":"Power2.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 5; min-width: 561px; max-width: 561px; max-width: 221px; max-width: 221px; white-space: nowrap; font-size: 48px; line-height: 60px; font-weight: 300; color: rgba(76,76,76,1); letter-spacing: ;font-family:'Lato', sans-serif;text-transform:uppercase;"><div class="background-block">
	<span class="title-txt" style="font-size: 48px; font-weight:700;"><?=$b?></span>
	<?=$c?> <br> <?=$d?> 
	<span class="title-txt2" style="font-weight:700; font-size: 48px;"><?=$e?></span>
</div> </div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-7-layer-3" 
			 data-x="['left','left','left','left']" data-hoffset="['107','197','193','72']" 
			 data-y="['top','top','top','top']" data-voffset="['734','556','417','380']" 
						data-fontsize="['18','20','24','20']"
			data-lineheight="['22','24','30','24']"
			data-width="224"
			data-height="86"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-actions='[{"event":"click","action":"scrollbelow","offset":"0px","delay":"","speed":"300","ease":"Linear.easeNone"}]'
			data-responsive_offset="on" 

			data-frames='[{"delay":10,"speed":4000,"frame":"0","from":"x:[105%];opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":3000,"frame":"999","to":"y:[100%];opacity:0;","ease":"Power2.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 6; min-width: 224px; max-width: 224px; max-width: 86px; max-width: 86px; white-space: nowrap; font-size: 18px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: ;font-family:'Poppins', sans-serif;text-transform:capitalize;letter-spacing:0.8px;"><span class="learn-btn">
	<span class="button-txt">
	<i class="fa fa-stethoscope" style="text-align: center; line-height: 50px; width: 55px; height: 55px; font-size: 24px; border-radius: 50%; background-color: #fff; vertical-align: middle; box-shadow: inset 0px 5px 5px 0px rgba(0, 0, 0, 0.06); margin-right: 10px;display:inline-block;"></i><?=$f?></span>
</span> </div>
	</li>
<?php } ?>
	<!-- SLIDE  -->
	
	<!-- SLIDE  -->
	
</ul>
		
		
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
						if(htmlDiv) {
							htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
						}else{
							var htmlDiv = document.createElement("div");
							htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
							document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
						}
					</script>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
				if(htmlDiv) {
					htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
				}else{
					var htmlDiv = document.createElement("div");
					htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
					document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
				}
			</script>
		<script type="text/javascript">
if (setREVStartSize!==undefined) setREVStartSize(
	{c: '#revslider_home', responsiveLevels: [1920,1200,768,480], gridwidth: [1240,1024,778,480], gridheight: [989,800,700,600], sliderLayout: 'auto'});
			
var revapi3,
	tpj;	
(function() {			
	if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();	
	function onLoad() {				
		if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
	if(tpj("#revslider_home").revolution == undefined){
		revslider_showDoubleJqueryError("#revslider_home");
	}else{
		revapi3 = tpj("#revslider_home").show().revolution({
			sliderType:"standard",
			jsFileLocation:"//themewisdom.com/demo/wpm/doctor/wp-content/plugins/revslider/public/assets/js/",
			sliderLayout:"auto",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
				onHoverStop:"off",
				arrows: {
					style:"uranus",
					enable:true,
					hide_onmobile:true,
					hide_under:767,
					hide_onleave:false,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:20,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:20,
						v_offset:0
					}
				}
				,
				bullets: {
					enable:true,
					hide_onmobile:false,
					style:"zeus",
					hide_onleave:false,
					direction:"horizontal",
					h_align:"center",
					v_align:"bottom",
					h_offset:0,
					v_offset:-45,
					space:10,
					tmp:'<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title">{{title}}</span>'
				}
			},
			responsiveLevels:[1920,1200,768,480],
			visibilityLevels:[1920,1200,768,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[989,800,700,600],
			lazyType:"none",
			shadow:0,
			spinner:"spinner0",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}; /* END OF revapi call */
	
 }; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
</script>
		<script>
					var htmlDivCss = unescape("%23revslider_home%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23revslider_home%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23revslider_home%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A%23revslider_home%20.zeus%20.tp-bullet%20%7B%0A%20%20%20%20%20box-sizing%3Acontent-box%3B%20-webkit-box-sizing%3Acontent-box%3B%20border-radius%3A50%25%3B%0A%20%20%20%20%20%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200%29%3B%0A%20%20%20%20%20%20-webkit-transition%3A%20opacity%200.3s%20ease%3B%0A%20%20%20%20%20%20transition%3A%20opacity%200.3s%20ease%3B%0A%20%20%20%20width%3A13px%3Bheight%3A13px%3B%0A%20%20%20%20border%3A2px%20solid%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%7D%0A%23revslider_home%20.zeus%20.tp-bullet%3Aafter%20%7B%0A%20%20content%3A%20%22%22%3B%0A%20%20position%3A%20absolute%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20left%3A%200%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20-webkit-transform%3A%20scale%280%29%3B%0A%20%20transform%3A%20scale%280%29%3B%0A%20%20-webkit-transform-origin%3A%2050%25%2050%25%3B%0A%20%20transform-origin%3A%2050%25%2050%25%3B%0A%20%20-webkit-transition%3A%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20transform%200.3s%20ease%3B%0A%7D%0A%23revslider_home%20.zeus%20.tp-bullet%3Ahover%3Aafter%2C%0A%23revslider_home%20.zeus%20.tp-bullet.selected%3Aafter%7B%0A%20%20%20%20-webkit-transform%3A%20scale%281.2%29%3B%0A%20%20transform%3A%20scale%281.2%29%3B%0A%7D%0A%20%20%0A%20%23revslider_home%20.zeus%20.tp-bullet-image%2C%0A%20%23revslider_home%20.zeus%20.tp-bullet-imageoverlay%7B%0A%20%20%20%20%20%20%20%20width%3A135px%3B%0A%20%20%20%20%20%20%20%20height%3A60px%3B%0A%20%20%20%20%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20%20%20%20%20background%3A%23000%3B%0A%20%20%20%20%20%20%20%20background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%20%20%20%20%20%20%20%20bottom%3A13px%3B%0A%20%20%20%20%20%20%20%20margin-bottom%3A10px%3B%0A%20%20%20%20%20%20%20%20transform%3AtranslateX%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3AtranslateX%28-50%25%29%3B%0A%20%20%20%20%20%20%20%20box-sizing%3Aborder-box%3B%0A%20%20%20%20%20%20%20%20background-size%3Acover%3B%0A%20%20%20%20%20%20%20%20background-position%3Acenter%20center%3B%0A%20%20%20%20%20%20%20%20visibility%3Ahidden%3B%0A%20%20%20%20%20%20%20%20opacity%3A0%3B%0A%20%20%20%20%20%20%20%20%20-webkit-backface-visibility%3A%20hidden%3B%20%0A%20%20%20%20%20%20%20%20backface-visibility%3A%20hidden%3B%0A%20%20%20%20%20%20%20%20-webkit-transform-origin%3A%2050%25%2050%25%3B%0A%20%20%20%20transform-origin%3A%2050%25%2050%25%3B%0A%20%20%20%20%20%20-webkit-transition%3A%20all%200.3s%20ease%3B%0A%20%20%20%20%20%20transition%3A%20all%200.3s%20ease%3B%0A%20%20%20%20%20%20%20%20border-radius%3A4px%3B%0A%7D%0A%20%20%20%20%20%20%20%20%20%20%0A%0A%23revslider_home%20.zeus%20.tp-bullet-title%2C%0A%23revslider_home%20.zeus%20.tp-bullet-imageoverlay%20%7B%0A%20%20%20%20%20%20%20%20z-index%3A2%3B%0A%20%20%20%20%20%20%20%20-webkit-transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20%20transform%3AtranslateX%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3AtranslateX%28-50%25%29%3B%0A%7D%20%20%20%20%20%0A%23revslider_home%20.zeus%20.tp-bullet-title%20%7B%20%0A%20%20%20%20%20%20%20%20color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%20%20%20%20%20%20%20%20text-align%3Acenter%3B%0A%20%20%20%20%20%20%20%20line-height%3A15px%3B%0A%20%20%20%20%20%20%20%20font-size%3A13px%3B%0A%20%20%20%20%20%20%20%20font-weight%3A600%3B%20%20%0A%20%20%20%20%20%20%20%20z-index%3A3%3B%0A%20%20%20%20%20%20%20%20%20visibility%3Ahidden%3B%0A%20%20%20%20%20%20%20%20opacity%3A0%3B%0A%20%20%20%20%20%20%20%20%20-webkit-backface-visibility%3A%20hidden%3B%20%0A%20%20%20%20%20%20%20%20backface-visibility%3A%20hidden%3B%0A%20%20%20%20%20%20%20%20-webkit-transform-origin%3A%2050%25%2050%25%3B%0A%20%20%20%20transform-origin%3A%2050%25%2050%25%3B%0A%20%20%20%20%20%20-webkit-transition%3A%20all%200.3s%20ease%3B%0A%20%20%20%20%20%20transition%3A%20all%200.3s%20ease%3B%0A%20%20%20%20%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20%20%20%20%20bottom%3A45px%3B%0A%20%20%20%20%20%20%20%20width%3A135px%3B%0A%20%20%20%20%20%20vertical-align%3Amiddle%3B%0A%20%20%20%20%20%20%20%0A%7D%0A%20%20%20%20%20%20%0A%23revslider_home%20.zeus%20.tp-bullet%3Ahover%20.tp-bullet-title%2C%0A%23revslider_home%20.zeus%20.tp-bullet%3Ahover%20.tp-bullet-image%2C%0A%23revslider_home%20.zeus%20.tp-bullet%3Ahover%20.tp-bullet-imageoverlay%7B%0A%20%20%20%20%20%20opacity%3A1%3B%0A%20%20%20%20%20%20visibility%3Avisible%3B%0A%20%20%20%20-webkit-transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20%20%20%20%20transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%7D%0A%0A%0A%0A%0A%2F%2A%20VERTICAL%20RIGHT%20%2A%2F%0A%0A%23revslider_home%20.zeus.nav-dir-vertical%20.tp-bullet-image%2C%0A%23revslider_home%20.zeus.nav-dir-vertical%20.tp-bullet-imageoverlay%7B%0A%20%20bottom%3Aauto%3B%0A%20%20margin-right%3A10px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20right%3A13px%3B%0A%20%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20%0A%7D%0A%0A%23revslider_home%20.zeus.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%0A%23revslider_home%20.zeus.nav-dir-vertical%20.tp-bullet-title%2C%0A%23revslider_home%20.zeus.nav-dir-vertical%20.tp-bullet-imageoverlay%20%7B%0A%20%20%20%20%20%20%20%20z-index%3A2%3B%0A%20%20%20%20%20%20%20%20-webkit-transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%20%20%20%0A%0A%0A%23revslider_home%20.zeus.nav-dir-vertical%20.tp-bullet-title%20%7B%0A%20%20%20%20%20bottom%3Aauto%3B%0A%20%20%20%20%20right%3A100%25%3B%0A%20%20%20%20%20margin-right%3A10px%3B%0A%7D%0A%0A%23revslider_home%20.zeus.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-title%2C%0A%23revslider_home%20.zeus.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-image%2C%0A%23revslider_home%20.zeus.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-imageoverlay%20%7B%0A%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%0A%0A%2F%2A%20VERTICAL%20LEFT%20%2A%2F%0A%0A%23revslider_home%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-image%2C%0A%23revslider_home%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-imageoverlay%7B%0A%20%20bottom%3Aauto%3B%0A%20%20margin-left%3A10px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20left%3A13px%3B%0A%20%20transform%3A%20%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20%0A%7D%0A%0A%23revslider_home%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%23revslider_home%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%2C%0A%23revslider_home%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-imageoverlay%20%7B%0A%20%20%20%20%20%20%20%20z-index%3A2%3B%0A%20%20%20%20%20%20%20%20-webkit-transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20%20transform%3AtranslateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3AtranslateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%20%20%20%0A%0A%0A%23revslider_home%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%20%7B%0A%20%20%20%20%20bottom%3Aauto%3B%0A%20%20%20%20%20left%3A100%25%3B%0A%20%20%20%20%20margin-left%3A10px%3B%0A%7D%0A%0A%2F%2A%20HORIZONTAL%20TOP%20%2A%2F%0A%0A%23revslider_home%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-image%2C%0A%23revslider_home%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-imageoverlay%7B%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A13px%3B%0A%20%20margin-top%3A10px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20-webkit-transform%3AtranslateX%280px%29%20translateX%28-50%25%29%3B%0A%20%20%0A%7D%0A%0A%23revslider_home%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20%0A%20%20transform%3A%20scale%281%29%20translateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20scale%281%29%20translateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20%0A%7D%0A%0A%23revslider_home%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%2C%0A%23revslider_home%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-imageoverlay%20%7B%0A%20%20%20%20%20%20%20%20z-index%3A2%3B%0A%20%20%20%20%20%20%20%20-webkit-transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20%20transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%0A%7D%20%20%20%0A%0A%0A%23revslider_home%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%20%7B%0A%20%20%20%20%20bottom%3Aauto%3B%0A%20%20%20%20%20top%3A13px%3B%0A%20%20%20%20%20margin-top%3A20px%3B%0A%7D%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}
					else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				  </script>
	
	
				</div><!-- END REVOLUTION SLIDER --></div></div></div></div></div>