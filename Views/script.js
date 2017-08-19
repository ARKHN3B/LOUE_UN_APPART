function opacityAnimation(){
    var $body = document.getElementById('body'); 

    $body.onmouseover = function(){
        var $span_title = document.getElementById('title_website');
        var $span_header = document.getElementById('span_header_connexion');
            $span_title.style.opacity = 1;
            $span_header.style.opacity = 1;
    }

    $body.onmouseout = function(){
        var $span_title = document.getElementById('title_website');
        var $span_header = document.getElementById('span_header_connexion');
            $span_title.style.opacity = 0;
            $span_header.style.opacity = 0;
    }
}

function iFrameSignIn(){
    var iframe_div = $('#iframe_div');
    $('#iframe_div').addClass('hide');

    $('#signin_link').click(function(){
        $('#iframe').removeClass('iframe_signup');
        $('#iframe').addClass('iframe_signin');

        if (iframe_div.hasClass('hide')) {
            iframe_div.removeClass('hide');
            iframe_div.addClass('show')
        }
    });

    $('#iframe_div').click(function(){
        if (iframe_div.hasClass('show')) {
            iframe_div.removeClass('show');
            iframe_div.addClass('hide');
        }
    });
}

function iFrameSignUp(){
    var iframe_div = $('#iframe_div');
    $('#iframe_div').addClass('hide');

    $('#signup_link').click(function(){
        $('#iframe').removeClass('iframe_signin');
        $('#iframe').addClass('iframe_signup');

        if (iframe_div.hasClass('hide')) {
            iframe_div.removeClass('hide');
            iframe_div.addClass('show')
        }
    });

    $('#iframe_div').click(function(){
        if (iframe_div.hasClass('show')) {
            iframe_div.removeClass('show');
            iframe_div.addClass('hide');
        }
    });
}

opacityAnimation();
iFrameSignIn();
iFrameSignUp();

