function toppad(){
    var ptop=$('.menu').css('height');
    $('#landing').css('padding-top',ptop);
    return parseInt(ptop.replace("px", ""))+100;
}


//cambio colore scroll menu
$(document).ready(function(){
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $('.menu').css('background', 'rgba(254,250,239,1)');
        } else {
            $('.menu').css('background', 'rgba(254,250,239,.75)');
        }
    });
});

//menumob toggle
$('.mobhead').on('click','.mobmenuspento',function(){
  $(this).toggleClass("mobmenuspento");
  $(this).toggleClass("mobmenuactive");
	$("#mobmenu").css("height", "100vh");
	$("body").css("overflow", "hidden");
});

$('.mobhead').on('click','.mobmenuactive',function(){
  $(this).toggleClass("mobmenuspento");
  $(this).toggleClass("mobmenuactive");
	$("#mobmenu").css("height", "0vh");
	$("body").css("overflow", "auto");
});

//menu click
$(".menu a").click(function(){
	var target=$(this).attr('target');

	$('html,body').animate({
        scrollTop: $("#"+target).offset().top-toppad()
    }, 700);
});


//menumob click
$(".menumoblink a").click(function(){
	var target=$(this).attr('target');
  $('.mobhead .mobmenuactive').click();
	setTimeout(function(){$('html,body').animate({
        scrollTop: $("#"+target).offset().top-toppad()
    }, 700)},700);
});


//SCROLLSPY menu
$(window).scroll(function() {
	//$('#landing').css("padding-top",mh+"px");

	$(".menu a").removeClass("active");
	//get the divs offsets
	var divs=[];
	$( ".menu a" ).each(function(i) {
		var appo=$(this).attr("target");
		divs[i]=$("#"+appo).offset().top;
	});

	//gets actual scroll and adds vh/2
	var pos=($(window).scrollTop())-toppad();
	var off=($(window).height())/7;

	//if scroll is < vh/2 then we remove active class
	if (pos<off){$( ".menu a" ).removeClass("active"); return;}

	pos=pos+off;

	//gets the first div on actual scroll > div and sets its menu voice as active
	var index=0;
	for (index = 0; index < divs.length; index++) {
		if (pos<divs[index]){
			break;
		}
	}
  $(".menu a[target]:eq("+index+")").addClass("active");
});

/*
//SCROLLSPY menu MOBILE!
$(window).scroll(function() {
	//$('#landing').css("padding-top",mh+"px");

	$(".menumoblink a").removeClass("active");
	//get the divs offsets
	var divs=[];
	$( ".menumoblink a" ).each(function(i) {
		var appo=$(this).attr("target");
		divs[i]=$("#"+appo).offset().top;
	});

	//gets actual scroll and adds vh/2
	var pos=($(window).scrollTop())-toppad();
	var off=($(window).height())/7;

	//if scroll is < vh/2 then we remove active class
	if (pos<off){$( ".menumoblink a" ).removeClass("active"); return;}

	pos=pos+off;

	//gets the first div on actual scroll > div and sets its menu voice as active
	var index=0;
	for (index = 0; index < divs.length; index++) {
		if (pos<divs[index]){
			break;
		}
	}
  $(".menumoblink a[target]:eq("+index+")").addClass("active");
});
*/


//servizi immagini
/*$(document).ready(function(){
	$.ajax({
		method: 'get',
		url: "foto.php",
		dataType:"json"
	})

	.done(function(data) {
		$.each(data, function(i, e) {
			var $item=$('<div class="col-md-3 col-sm-6"><div class="picevent" style="background:url(\''+e.img+'\') no-repeat center center;background-size:cover;"><a id="foto'+e.id+'" class="picover center" data-toggle="modal" data-target="#modServ"><p>'+e.tit+'</p></a></div></div>');
			$('#serv'+e.cat+' .griglia').append( $item );
		});
	})

	.fail(function() {
		console.log('ko');
	});
});
*/

//modal foto
/*$(".griglia").on('click','.picover',function() {
	var fotoid=$(this).attr('id').replace("foto", "");
	$.ajax({
		method: 'get',
		url: "foto.php",
		data: {id:fotoid},
		dataType: "json"
	})

		.done(function(data) {
      $.each(data, function(i, e) {
				$('.modal-title').html(e.tit);
				$('#fotomodal').attr('src',e.img);
				$('#fotoalt1').html(e.img1);
				$('#fotoalt2').html(e.img2);
				$('#fotoalt3').html(e.img3);
				$('#modtxt').html(e.txt);
		  });
		})

		.fail(function() {
			console.log('ko');
		});
});*/


//instagram
$(document).ready(function(){
	$.ajax({
		method: 'get',
		url: "./insta.php",
		dataType: "json"
	})

	.done(function(data) {
		$.each(data.items, function (i,v){
			var pic=this.images.standard_resolution.url;
			var like=this.likes.count;
			var comms=this.comments.count;
			var capt=this.caption.text;
			var spazio = capt.indexOf(" ", 80);
			if (spazio!=-1){capt=capt.substr(0,spazio)+"..."}
			$('#instacont').append('<div class="col-md-3 col-sm-6 nopadding">'+
      '<div class="instapic">'+
        '<img class="img-responsive" src="'+pic+'">'+
        '<p class="instmobinfo"><i class="fa fa-instagram"></i><span>'+like+' <i class="fa fa-heart"></i>    '+comms+' <i class="fa fa-comment"></i></span></p>'+
        '<div class="instover">'+
          '<h5 class="white">- MICHETTA\'S -</h5>'+
          '<div class="likecomms">'+
            '<div class="like"><i class="fa fa-heart"></i><br>'+like+'</div>'+
            '<div class="comms"><i class="fa fa-comment"></i><br>'+comms+'</div>'+
          '</div>'+
          '<p class="instacapt">'+capt+'</p>'+
        '</div>'+
      '</div>'+
    '</div>');
		});
	})

	.fail(function() {
		console.log('We couldn\'t get instagram feed');
	});
});


$("#instacont").on("click",".instapic",function(){
	window.open('https://www.instagram.com/michettas_panini_milano/', '_blank');
});




//torna su
var scrollTrigger = 200 // px
function backToTop() {
	var scrollH = $(window).scrollTop();
	if (scrollH > scrollTrigger) {
		$('#totop').addClass('show');
	} else {
		$('#totop').removeClass('show');
	}
};
backToTop(); //@document ready
$(window).on('scroll', function () { //@each scroll
	backToTop();
});

$('#totop').on('click', function() {
	$('html,body').animate({scrollTop: 0}, 700,function(){$('#totop').removeClass('show');});
});



//contatti
$(".form #name").keyup(function() {
  checkForm();
});
$(".form #cog").keyup(function() {
  checkForm();
});
$(".form #mail").keyup(function() {
  checkForm();
});
$(".form #msg").keyup(function() {
  checkForm();
});

function checkForm(){
	if ($(".form #name").val()==""){
		$("#sbm").removeClass("ok");
		return 0;
	}
	if ($(".form #cog").val()==""){
		$("#sbm").removeClass("ok");
		return 0;
	}
	if ($(".form #mail").val()==""){
		$("#sbm").removeClass("ok");
		return 0;
	}
	if ($(".form #msg").val()==""){
		$("#sbm").removeClass("ok");
		return 0;
	}
	if (!$("#sbm").hasClass("ok")){
		$("#sbm").addClass("ok");
	}
	if ($("#sbm").hasClass("error")){
		$("#sbm").removeClass("error");
	}
}

$(".form").on("click",".btnform.ok",function(){
	$.ajax({
		url: "mailer.php",
		method: "post",
    data:{name:$(".form #name").val(),cog:$(".form #cog").val(),mail:$(".form #mail").val(),msg:$(".form #msg").val()}
	})
	.done(function() {
		$(this).removeClass("ok");
		$(this).addClass("done");
		$(this).html("Message sent!");
	})
	.fail(function() {
		$(this).removeClass("ok");
		$(this).addClass("error");
		$(this).html("Error! Refresh the page");
	});
});


//apertura menu
$('.menublock').click(function(){
  var blckid=$(this).attr("id").replace("ctamn","");
	$('.overlay').addClass("active");
	$('#mn'+blckid).addClass("active");
	//$('#mn'+blckid).perfectScrollbar();
  $('body').css("overflow","hidden");
});
$('.overlay').click(function(){
	$('.overlay').removeClass("active");
  //$('.sidemenu.active').perfectScrollbar('destroy');
	$('.sidemenu.active').removeClass("active");
	$('body').css("overflow","auto");
});
$('.chiudiside').click(function(){
  $('.overlay').removeClass("active");
  //$('.sidemenu.active').perfectScrollbar('destroy');
	$('.sidemenu.active').removeClass("active");
	$('body').css("overflow","auto");
});
