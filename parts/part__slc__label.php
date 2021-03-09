
<?php
// La part Selection Label controle l'affichage des mentions "Grand Prix"
// sur les oeuvres récompensée.
?>

<svg version="1.1" id="slc__label" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px"
viewBox="0 0 112 112" style="enable-background:new 0 0 112 112;" xml:space="preserve">
	<style type="text/css">
	.st0{fill:none;}
	</style>
	<defs>
		<path id="cricle" class="st0" d="M98,56c0,23.2-18.8,42-42,42S14,79.2,14,56s18.8-42,42-42S98,32.8,98,56z"/>
	</defs>
	<g>
		<use xlink:href="#cricle" fill="none"/>
		<text>
			<textPath xlink:href="#cricle"><?php echo $slc__labeltext ?></textPath>
		</text>
	</g>
</svg>
