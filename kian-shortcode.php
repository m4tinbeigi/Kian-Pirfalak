<?php


//if(get_option('mbwp_kian')=='1'){}

function kian_html(){

return '<div class="textwidget custom-html-widget">
	<audio id="myAudio">
		<source src="'.MBWP_ESL_URI_KIAN.'kian.mp3" type="audio/mpeg">
	</audio>
	<button style="background:transparent;padding:0;" onclick="playAudio()" type="button">
		<img class="wp-image-13676 alignright lazyloaded" src="'.MBWP_ESL_URI_KIAN.'kian.png" alt="" width="200" height="156" data-ll-status="loaded">
		<noscript>
			<img class="wp-image-13676 alignright" src="'.MBWP_ESL_URI_KIAN.'kian.png" alt="" width="200" height="156" />
		</noscript>
	</button>
</div>
<script>
var xmp3 = document.getElementById("myAudio"); 

function playAudio() { 
  xmp3.play(); 
} 

</script>';

}
add_shortcode('kian', 'kian_html');
?>