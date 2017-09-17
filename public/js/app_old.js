$(document).foundation;

var preview,
    array64 = [];

/****funcion preview imagen - convierte imagen a base64 ********************/
function previewFile() {
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.attr("src",reader.result);
    preview.addClass("base64 data");
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
}

/***************************************************************************/

$(document).ready(function(){
  
  var headerEmailing = '<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml"><head></head><body bgcolor="FFFFFF" topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" style="background-color: #ffffff;"><table width="100%" border="0" cellpadding="0" cellspacing="0"><tr>  <td align="center" valign="top" bgcolor="ffffff" style="background-color: #ffffff;">';
  var footerEmailing = '</td></tr></table></body></html>';

  function getAbsolutePath() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
  }
  var rutaAbsoluta = getAbsolutePath();
  $('#top').find('img').attr('src', getAbsolutePath() + $('#top').find('img').attr('src'));
  


  /*--------------------------------------*\
    CORE (gatillo)
  \*--------------------------------------*/ 

  var img,anchor,files;
  

  $('.jsSelect').on('change', chooseTemplate);/*cargar plantilla*/
  $('.btn-generator').on('click', parse64);/*generar emailing*/
  $('.btn-changeLink').on('click', changeLink);/*boton aceptar en modal*/
  
  $('.btn-upload').on('click',showImage);/*boton subir imagen*/  
  $('.btn-agregar').on('click',chooseOption);/*boton subir plantilla cuerpo*/

  $('.print').on('click',printScreen);/*boton print screen*/
  
  /*************************************/
  
  function delegateFunction(){
    $('table').on('click','img', editImage);
    $('table').on('dblclick','a', editAnchor);
  }

  /*************************************/
  
  function printScreen(event){
    event.preventDefault();
    $('#print').html($("#doc").html());
    html2canvas(document.getElementById('print'), {
      onrendered: function(canvas) {
        document.body.appendChild(canvas);
        //alert('asasa');
      }
    });
  }

  /*************************************/

  function parse64(event){
    event.preventDefault();
    $('.veladura').css('display','block');
    var imagenes = $(".base64"),
        lengthImg = imagenes.length,
        sw = 0,
        cont = 0;

    if (lengthImg == 0) {
      generatorEmailing();
    }else{

      $.each(imagenes, function(index, el) {
        var image = $(this),
            src = image.attr("src"),
            url = $('#doc').data('image'),
            id  = index,
            directory = $('#namefile').val();
            
        if (parseInt(index)+1 >= lengthImg) {
          sw = 1;
        };

        if (src.indexOf("data:image") >= 0){
          array64.push(src);
          $.ajax({
            method: "POST",
            url: url,
            data: { image:src , id:id , directory:directory}
          })
            .done(function( msg ) {
              image.attr('src',msg);
              cont+=1;
              if (cont >= lengthImg) { 
                generatorEmailing();
              };
            });
        }
      });
    }
  }

  function generatorEmailing(){

    var clone         = $('#doc').clone(),
        htmlParseado  = $(clone).removeAttr('contenteditable').find('.panelsito').remove().end().html();

    $('.veladura p').html('Comprimiendo imagenes');
    $.ajax({
      method: "POST",
      url: $('#doc').data('replace'),
      data: { string:htmlParseado }
    })
      .done(function( msg ) {
        var namezip = $.trim($('#namefile').val()).replace(" ","-");
        
        $('#frm-emailing #input').val(msg);
        console.log($('#input').val());
        console.log(footerEmailing);
        var html = headerEmailing + $('#input').val() + footerEmailing;

        $('.base64').removeClass('base64');

        var zip = new JSZip();
        zip.file("index.html", html);
        
        if (array64.length>0) {
          for (var i = 0; i <= array64.length-1; i++) {
            var img = zip.folder("images");
            var index =  array64[i].indexOf(",");
            var res = array64[i].substring(index+1);
            img.file("imagen"+[i]+".jpg", res , {base64: true});
          };
        };
        
        zip.generateAsync({type:"blob"})
        .then(function(content) {
            saveAs(content, namezip + ".zip");
            $('.veladura').css('display','none');
        });

      });
       
  }


  /**/
  function chooseTemplate(){
    var id = $( this ).attr( 'data-id' ),
        $id = $(id);
        root = $( this ).val();

    if (root != "") {

     $id.html('Loading ...').load(root, function(response, status, xhr) {
        // si cargo ( meterle con ganas la url absoluta )        
        if (status == 'success') {
          var $img = $(id).find('img');
          $.each($img, function(idx, ele){
            var $ele = $(ele), 
                 src = $ele.attr('src');
            if ( !/http/.test(src) ) {
              $ele.attr('src', rutaAbsoluta + src);              
            }
          });
        }
        
 
        // no cargo
        if (status == "error") {
          $(this).html("Error al cargar.");//I think this is correct
        }

        // mostrar celda y delegar eventos
        $id.hide().fadeIn(1000, function(){
          if (status == 'success') {            
            delegateFunction();       
          };
        });
      });

    }else{
      $( id ).empty();
      //addValueInput();
    };
  }



  function chooseOption(){
    var id = $( this ).attr( 'data-id' ),
        root = $( this ).closest('div').find('select').val();

    $.ajax({url: root, success: function(result){
        // agregar panelsito
        var panelsito = '<div class="panelsito" contenteditable="false"><div class="move"><div class="move__up"></div><div class="move__down"></div></div><div class="remove"></div></div>';
        var value = $(result).find('td').first().append(panelsito).parent();
        $('#cuerpo .contenedor').append(value);
        delegateFunction();

        // si cargo ( meterle con ganas la url absoluta )    
        var $tr = $(id).find('.contenedor > tbody > tr').last(),
            $img = $tr.find('img');
            console.log($img);
        $.each($img, function(idx, ele){
          var $ele = $(ele), 
               src = $ele.attr('src');
          if ( !/http/.test(src) ) {
            $ele.attr('src', rutaAbsoluta + src);              
          }
        });
      }
    });

  }

  /**/
  function editImage(){
    event.stopPropagation();
    img = $(this);
    preview = img;
    $('#files').val("");
    $.colorbox({inline:true,href:"#uploadImage"});

    if (img.parent().is('a') ){
      var lnk = $(img.parent());
      $("#linkImage").val(lnk.attr('href'));
    }else{
      $("#linkImage").val('');
    }
  }

  function showImage(){
    var linkI = $.trim($('#linkImage').val());
    if (linkI != '') {
      replace(img, linkI);
    };
    $.colorbox.close();
  }

  function replace(obj,link){
    if (!obj.parent().is('a') ){
      $('<a/>', { href : link }).insertAfter(obj);
      obj.appendTo(obj.next());   
    } else {
      obj.parent().attr({ href : link })
    }
  }

  /**/
  function editAnchor(event){
    event.stopPropagation();
    anchor = $(this);
    $('#inputLink').val(anchor.attr('href'));
    $.colorbox({inline:true,href:"#changeLink", innerWidth:'500px'});
  }

  /**/
  function changeLink(){
    var link =  $('#inputLink').val();
    anchor.attr('href',link);
    $.colorbox.close();
  }


  $('.text').alphanumeric({ichars:"ñÑ,.:-_¿'*/+%$&´}{><@()#$!=~`^[]¨¨"});

  /*--------------------------------------*\
    OTHERS (chris)
  \*--------------------------------------*/ 

    // NEW
    $("#frm-emailing").keypress(function(e) {
      if (e.which == 13) {
        crearFolder(event);
        return false;
      }
    });

    $('.btn-new').on('click', crearFolder);
    $('.btn-generator-new').on('click', nuevoHtml);
    $('.btn-generator-duplicate').on('click', duplicateHtml);

    function crearFolder(event){
      event.preventDefault();

      var $folder = $('.folder');
      var $input = $.trim($('input[name$="namefile"]').val());
      $('input[name$="namefile"]').val($input);
      $(".construct__title").find('span').html($input);
      
      if ($input!="") {
        $folder
          .stop(true, false)
          .animate({ 'top' : '-100%' }, 800, 'easeInOutQuart');
        $("select").eq(0).focus();
      };

    }

    function nuevoHtml(event){
      event.preventDefault();

      var $folder = $('.folder');
      $('input[name$="namefile"]').val("");
      
      $folder
        .stop(true, false)
        .animate({ 'top' : '0%' }, 800, 'easeInOutQuart');

      $(" #header, .contenedor, #cierre, #disponible, #claqueta, #legales, #diclaimer, #footer").empty();
    }

    function duplicateHtml(event){
      event.preventDefault();

      var $folder = $('.folder');
      $('input[name$="namefile"]').val("");
      
      $folder
        .stop(true, false)
        .animate({ 'top' : '0%' }, 800, 'easeInOutQuart');

      
      $.each($('.data'), function(index, el) {
        $(this).attr('src',array64[index]);
        $(this).addClass('base64');
      });

    }

    // restringir tab
    $('.noTab').keydown(function (e) {
        if (e.which === 9) {
            return false;
        }
    });

    // mover TR
    function moveDown(e){
      e.preventDefault();
      var $tr_current = $(this).closest('tr');
          $tr_current.next().after($tr_current);
      //console.log('moviendo tr hacia abajo');
      //console.log($thisTR)
    }

    function moveUp(e){
      e.preventDefault();
      var $tr_current = $(this).closest('tr');
          $tr_current.prev().before($tr_current);
    }

    $('#cuerpo table').on('click', '.move__down', moveDown);
    $('#cuerpo table').on('click', '.move__up', moveUp);

    // remover TR
    function removeTR(e){
      e.preventDefault();
      $(this).closest('tr').remove();
      console.log('Removi TR :)');
    }

    $('#cuerpo table').on('click', '.remove', removeTR);



    ////////////////////////////////////////////////////////
    // cambiar tamaño device
    //
    var $device = $('#device'),
        $deviceChange = $('.device-mode');

    $deviceChange.on('click', 'a.device', function(event){
      event.preventDefault();
      var $that = $(this);
          // cambiar estado
          $that.parent().addClass('is-active').siblings().removeClass('is-active');
          $device.attr('data-device', $that.attr('class'));
    });

    


});





document.querySelector("div[contenteditable]").addEventListener("paste", function(e) {
  e.preventDefault();
  var text = e.clipboardData.getData("text/plain");
  document.execCommand("insertHTML", false, text);
});

var storedSelections;
var currentCont;

$('.contenedor').on('click','.editor__left, .editor__right, .editor__center', align);

$("#doc").on('mouseup', function (e){
  if ( !$(e.target).hasClass('BtnEditor'))  {
    currentCont = $(e.target);
    var t = currentCont.closest('td');
    if (window.getSelection) {  // all browsers, except IE before version 9
      var range = window.getSelection();
      $('.editor').removeClass('show');
      if (range.toString()!='') {
        t.find('.editor').addClass('show');
      }
    } 
  };

  
});

function SelectedText(fn) {
  
  if (window.getSelection) {  // all browsers, except IE before version 9
    var range = window.getSelection().getRangeAt(0);
    storedSelections = range;
    var myfn = function(fn){
      var result = fn(range);
    };
    myfn(fn);            
    window.getSelection().addRange(storedSelections);
  }

}

function align(){
  var alignText = $(this).attr('data-align');
  console.log(currentCont);
  currentCont.closest('p').css('text-align',alignText);
}

function color(range){
  var color = $('#paletaBBVA').val();
  if (currentCont.prop('tagName')=='SPAN') {
    currentCont.css({'color':color});
  }else{
    build('span',range,'color:' + color);
  };
}

function italic(range){
  if (currentCont.prop('tagName')=='SPAN') {

    if(currentCont.css('font-style')=='italic' ){
      currentCont.css({'font-style':''});
    }else{
      currentCont.css({'font-style':'italic'});
    }

    
  }else{
    build('span',range,'font-style:italic');
  };
}

function bold(range){
  if (currentCont.prop('tagName')=='SPAN') {
    
    if(currentCont.css('font-weight')=='bold' ){
      currentCont.css({'font-weight':''});  
    }else{
      currentCont.css({'font-weight':'bold'});
    }
    
  }else{
    build('span',range,'font-weight:bold;');
  };
}

function fontSize(range){
  var font = currentCont.closest('td').find('select').val();
  if (currentCont.prop('tagName')=='SPAN') {
    currentCont.css({'font-size': font+'px'});
  }else{
    build('span',range,'font-size:'+font+'px');
  };
}

function createLink(range){
  build('a',range,'color:blue; text-decoration:none;');
}

function build(dom,range,value){
  var selectionContents = range.extractContents();
  var span = document.createElement(dom);
  var valores = value;
  span.setAttribute("style",valores);
  if (dom=='a') {
    span.setAttribute("href","http://");
    span.setAttribute("target","_blank");
  };
  span.appendChild(selectionContents);
  range.insertNode(span);
  currentCont = $(span);
}
