var banners = ["img/web.png",
			   "img/explorer.png"];
var bannerAtual = 0;

function trocaBanner(){
	bannerAtual = (bannerAtual + 1) % 2;
	document.querySelector('.banner').src = banners[bannerAtual];
}
var timer = setInterval(trocaBanner, 4000);
var controle = document.querySelector('.pause');
	controle.onclick = function() {
		if(controle.className == 'pause'){
			clearInterval(timer);
			controle.className = 'play';
		} else {
			timer = setInterval(trocaBanner, 4000);
			controle.className = 'pause';
		}
		return false;
	};