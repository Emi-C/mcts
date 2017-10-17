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
      if (i>8){var discMob="hidden-xs"}else{var discMob=""}
			$('#instacont').append('<div class="instapic '+discMob+'">'+
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
		$('#instacont').imagesLoaded(function(){
			$('#instacont').masonry({
			  itemSelector: '.instapic'
			});
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



//prenota
$("#contdata").change(function() {
  checkForm();
});
$("#contora").change(function() {
  checkForm();
});
$("#contquanti").change(function() {
  checkForm();
});
$("#contnome").keyup(function() {
  checkForm();
});
$("#contmail").keyup(function() {
  checkForm();
});
$("#conttel").keyup(function() {
  checkForm();
});

function validateEmail(email) { var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i; return re.test(email); }

function checkForm(){
	if ($("#contdata").val()==""){
		$("#subcont").removeClass("ok");
		return 0;
	}
	if ($("#contora").val()==""){
		$("#subcont").removeClass("ok");
		return 0;
	}
	if ($("#contquanti").val()==""){
		$("#subcont").removeClass("ok");
		return 0;
	}
	if ($("#contnome").val()==""){
		$("#subcont").removeClass("ok");
		return 0;
	}
	if ($("#contmail").val()==""||!validateEmail($("#contmail").val())){
		$("#subcont").removeClass("ok");
		return 0;
	}
	if ($("#conttel").val()==""||$("#conttel").val().match(/\d/g).length<8){
		$("#subcont").removeClass("ok");
		return 0;
	}
	if (!$("#subcont").hasClass("ok")){
		$("#subcont").addClass("ok");
	}
}

$("#prenota").on("click",".btnform.ok",function(){
	$.ajax({
		url: "mailer.php",
		method: "post",
    data:{data:$("#contdata").val(),ora:$("#contora").val(),quanti:$("#contquanti").val(),nome:$("#contnome").val(),mail:$("#contmail").val(),tel:$("#conttel").val()}
	})
	.done(function() {
		$("#prenota .btnform").removeClass("ok");
		$("#prenota .btnform").addClass("done");
		$("#prenota .btnform").html("Grazie, ti aspettiamo!");
	})
	.fail(function() {
		$("#prenota .btnform").removeClass("ok");
		$("#prenota .btnform").addClass("error");
		$("#prenota .btnform").html("Errore :(");
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


/*calendario*/
function initCal(){
  $("#prenotacal").datepicker({
    //beforeShowDay: highlight,
    onSelect:function (dateText){
      $(this).next("input[class='newdata']").val(dateText);
      $(this).next("input[class='newdata']").trigger('change');
    }
  });
}

$(document).ready(function(){initCal();});



$(document).ready(function() {
	new WOW().init();

  $("#pressCar").owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    navText:['<i class="fa fa-caret-left"></i>','<i class="fa fa-caret-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
  });

  $('#mn1 .sidecont').perfectScrollbar({suppressScrollX:true});
  $('#mn2 .sidecont').perfectScrollbar({suppressScrollX:true});
  $('#mn3 .sidecont').perfectScrollbar({suppressScrollX:true});
  $('#mn4 .sidecont').perfectScrollbar({suppressScrollX:true});
});

function initMap() {
  var place = {lat: 45.48173905, lng: 9.23363864};
  var infowindow = new google.maps.InfoWindow({
    content: '<p><b>Via Ambrogio Campiglio 13, 20133 Milano</b></p>'
  });

  var placeTwo = {lat: 45.487541, lng: 9.163014};
  var infowindowTwo = new google.maps.InfoWindow({
    content: '<p><b>Via Cenisio 55, 20154 Milano</b></p>'
  });

  var map = new google.maps.Map(document.getElementById('mapmcts'), {
    zoom: 12,
    center: {lat:45.465454, lng:9.186516}
  });
  var marker = new google.maps.Marker({
    position: place,
    map: map
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

  var markerTwo = new google.maps.Marker({
    position: placeTwo,
    map: map
  });
  markerTwo.addListener('click', function() {
    infowindowTwo.open(map, markerTwo);
  });
}
