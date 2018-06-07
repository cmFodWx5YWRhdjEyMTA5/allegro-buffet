function gup( name ){
  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");

  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp( regexS );
  var results = regex.exec( window.location.href );

  if( results == null ) {
    return "";
  }
  else {
    return results[1];
  }
}

function AlinhaMenu() {
  var wh = $(window).height();

  var m = (wh / 2) - 25;

  var JSONObject = {
    "MeioMenu": m
  };

  return JSONObject;
}

$(function LoadPage() {
  var url = window.location.hash;

  var rp = gup("rp");

  if (url == '') {
    REDIRECT_TO = rp;
    $(location).attr('href', '#home');
  }
  else {
    REDIRECT_TO = rp;
    $(location).attr('href', '#home');
  }

  $(window).bind( 'hashchange', function (e) {
    try {
      var url = e.fragment;
    }
    catch(ee) {

    }

    var ativo = url.substring(0);
    var linkfinal = url+'.html';

    var to_append = '#content';

    $('.st_loading').fadeIn(500);

    setTimeout(function() {
      $("#content").html("");

      $(to_append).load(linkfinal, function(response) {
        setTimeout(function(to_append) {
          $( '.st_loading' ).fadeOut();

        }, 500);

        var response = $( '<div id="content">'+response+'</div>' );
        var data = response.find('#content').html();

        var title = response.find('title').text();

        if(title=="") {
          title = "Allegro Buffet";
        }

        window.history.pushState( linkfinal, title, linkfinal );

        document.title = title;
      });

    }, 500);
  });
});

$(document).ready(function() {      
  var sizes = AlinhaMenu();

  $("#menu").addClass('posicaomeio');

  if ($("#menu").hasClass('posicaomeio')) {
    $("#menu").css('bottom', sizes.MeioMenu);
  }

  $('#menu ul li a').click(function() {
    if ( $(this).hasClass('icons') ) {

    }
    else {
      $('#menu ul li a').removeClass('ativo');
      $(this).addClass('ativo');
      $("#menu").animate({ bottom: '0' }, 500);
      $("#menu").removeClass('posicaomeio');
      $("#menu").addClass('posicaoabaixo');
    }
  });

  $('#logo a').click(function() {
    var sizes = AlinhaMenu();

    $('#menu ul li a').removeClass('ativo');
    $("#menu").removeClass('posicaoabaixo');
    $("#menu").animate({ bottom: sizes.MeioMenu }, 500);
    $("#menu").addClass('posicaomeio');
  });

  //LoadPage();
});