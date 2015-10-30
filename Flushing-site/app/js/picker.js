var positionY = 0;
var positionDelta = 0;
var optionSelected = 1;
var optionPadding = 15;
var optionHeight;
var optionLength
var wrapperHeight;
var wrapper;
var wheelTimeout = 0;
var wheelIncrement = 3;
var wheelArrows = true;
function wll_update(){
	optionSelected = 1;
	wrapper.find('li').css({'padding':optionPadding + 'px'});
	optionHeight = optionPadding * 2 + wrapper.find('li').height();
	wrapperHeight = parseInt(wrapper.css('height'));
	optionLength = wrapper.find('li').length;
	wll_panend();
}

function wll_init(){
	$('.bg-arrow-up').click(function(){
		if(wheelArrows == false) return;
		clearTimeout(wheelTimeout);

		wheelArrows = false;
		optionSelected = Math.max( optionSelected - 1 , 1 );

		wrapper.find('li').removeClass("active")
		$(wrapper.eq(optionSelected)).addClass("active");

		positionY = -optionHeight * optionSelected + (wrapperHeight+optionPadding)/2 ;
		wrapper.find('ul').transition({
			"-webkit-transform":"translateY(" + positionY  + "px)"
		})
		wheelTimeout = setTimeout(function(){ wheelArrows = true },350);
	});

	$('.bg-arrow-down').click(function(){
		if(wheelArrows == false) return;
		clearTimeout(wheelTimeout);

		wheelArrows = false;
		optionSelected = Math.min( optionSelected + 1 , optionLength );

		wrapper.find('li').removeClass("active")
		$(wrapper.eq(optionSelected)).addClass("active");

		positionY = -optionHeight * optionSelected + (wrapperHeight+optionPadding)/2 ;
		wrapper.find('ul').transition({
			"-webkit-transform":"translateY(" + positionY  + "px)"
		})
		wheelTimeout = setTimeout(function(){ wheelArrows = true },350);
	});
	wrapper = $('.wll-wrapper');




	var mc = new Hammer.Manager(wrapper[0]);
	var pan = new Hammer.Pan();


	mc.add(pan);

	mc.on("panmove", wll_panmove)

    mc.on("panend", wll_panend)

}

function wll_panmove(ev){
    var positionDelta = ev.deltaY;
    var tmpPositionY = positionY + positionDelta;
	if(-(tmpPositionY - wrapperHeight/2) / optionHeight < (optionLength+0.3) && -(tmpPositionY - wrapperHeight/2) / optionHeight > 0.3){
		wrapper.find('ul').css({
			"-webkit-transform":"translateY(" + tmpPositionY  + "px)"
		})
	}

	optionSelected = Math.round(-(tmpPositionY - wrapperHeight/2) / optionHeight);
	optionSelected = Math.max( 1 , optionSelected );
	optionSelected = Math.min( optionSelected , optionLength);

	wrapper.find('li.active').removeClass("active");
	wrapper.eq(optionSelected).addClass("active");
}

function wll_panend(ev){
	var positionDelta;
	if(ev) {
		positionDelta = ev.deltaY;
	}else{
		positionDelta = 0;
	}

    positionY = -optionHeight * optionSelected + (wrapperHeight+optionPadding)/2 ;

    positionDelta = 0;
	wrapper.find('ul').transition({
		"-webkit-transform":"translateY(" + positionY + "px)"
	})

	wrapper.find('li.active').removeClass("active");
	wrapper.eq(optionSelected).addClass("active");
}
