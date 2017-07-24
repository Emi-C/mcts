//get articoli
$(document).ready(function(){
    getart();
});

function getart(){
    $.ajax({
        method: 'post',
        url: "get.php",
        dataType:"json"
    })

    .done(function(data) {
        var res="";
        $.each(data, function(i, e) {
            res+='<div class="articolo"><h3 class="titolo">'+e.tit+'</h3><br><img style="max-width:300px; display:inline-block;margin:20px;" src="'+e.img+'"><br><p><b>Sottotitolo: </b>'+e.info+'<br><b>Link: </b>'+e.link+'</p><p>'+e.testo+'</p><div class="modpos"><label>Posizione: </label><select id="pos'+e.id+'">'+e.posbloc+'</select></div><br><btn class="del" id="'+e.id+'">elimina</btn></div>';

            //res+='<div><div class="pressimg" style="background:url('+e.img+') center center no-repeat;"></div><a href="'+e.link+'"><h5 class="presstit">'+e.tit+'</h5></a><p class="presssub">'+e.info+'</p><p>'e.testo'</p><a href="'e.link'" class="cta readmore">LEGGI DI PIù</a></div>';
        });
        $("#results").html(res);
    })
    .fail(function() {
        alert('ko');
    });
}



//modpos articoli
$("#results").on('change','.modpos select',function(){
     modpos($(this).attr("id").replace("pos", ""),$(this).val());
});
function modpos(artid,pos){
    $.ajax({
        method: 'post',
        url: "modpos.php",
        data: {artid:artid,pos:pos}
    })

    .done(function(data) {
        getart();
    })
    .fail(function() {
        alert('ko');
    });
}




//del articoli
$("#results").on('click','.del',function() {
    delart($(this).attr("id"));
});

function delart(artid){
    $.ajax({
        method: 'post',
        url: "del.php",
        data: {id:artid}
    })

    .done(function(){
        getart();
    })
    .fail(function() {
        alert('ko');
    });
}



//put articoli
$(".formin input").keyup(function(){
   checkform();
});
/*CKEDITOR.instances.txt.on('key', function(e) {
    var self = this;

    setTimeout(function() {
        checkform();
    }, 10);
});*/
// $(".formin select").change(function(){
    // checkform();
// });


function checkform(){
    //var txtval=CKEDITOR.instances.txt.getData();
    var err=0;
    if ($("#tit").val()==""){err=1}
    if ($("#txt").val()==""){err=1}
    if ($("#lnk").val()==""){err=1}
    if ($("#info").val()==""){err=1}
    if ($("#imgflag").val()==1){err=1}

    if (err!=1){$("#sbm").addClass("sbmok")}else{$("#sbm").removeClass("sbmok")}
}

$(".formin").on("click",".sbmok",function(){
    putart();
});


function putart(){
    var fd = new FormData();
    fd.append('tit', $('#tit').val());
    fd.append('txt', $('#txt').val());
    fd.append('lnk', $('#lnk').val());
    fd.append('info', $('#info').val());
    //fd.append('txt', CKEDITOR.instances.txt.getData());
    fd.append('img', $('#img')[0].files[0]);

    $.ajax({
        method: 'post',
        url: "up.php",
        data:fd,
        processData: false,
        contentType: false
    })

    .done(function() {
        alert('Articolo inserito con successo!');
        $('#tit').val("");
        $('#info').val("");
        $('#lnk').val("");
        $('#txt').val("");
        //CKEDITOR.instances.txt.setData("");
        $('#img').val("");
        $('#imgflag').val(1);
        $('[class*="imgupload"]').not('[class*="imguploadstop"]').show("slow");
        $('[class*="imguploadok"]').hide("slow");
        $('[id*="namefile"]').html("");

        getart();
        checkform();
    })
    .fail(function() {
        alert('Qualcosa è andato storto...');
    });
}



//upload principale
$('#img').change(function(){
//here we assign tu our text field #fileup the name of the selected file
    var res=$(this).val();
    var arr = res.split("\\");
    var filename=arr.slice(-1)[0];
    filextension=filename.split(".");
    filext="."+filextension.slice(-1)[0];
    valid=[".jpg",".png",".jpeg",".bmp"];
//if file is not valid we show the error icon and the red alert
    if (valid.indexOf(filext.toLowerCase())==-1){
        $( ".imgupload" ).hide("slow");
        $( ".imguploadok" ).hide("slow");
        $( ".imguploadstop" ).show("slow");
        $('#namefile').css({"color":"red","font-weight":700});
        $('#namefile').html("Il file "+filename+" non è un'immagine!");
        $( "#imgflag" ).val(1);
    }else{
        //if file is valid we show the green alert
        $( ".imgupload" ).hide("slow");
        $( ".imguploadstop" ).hide("slow");
        $( ".imguploadok" ).show("slow");
        $('#namefile').css({"color":"green","font-weight":700});
        $('#namefile').html(filename);
        $('#imgflag').val(0);
    }
    checkform();
});
