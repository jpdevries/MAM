/*
MODx.callbacks = {
    resource_view__stateSet:function(){
        
    }
};
*/

window.addEventListener('resource_view__stateSet',function(){
    $('#above-fold').each(function(){
        $(this).css('top',((0-(60+(24*(($('#resource-view-body > tr').length)+2))+16))/16).toString() + 'em');
        return;
        //var _x = Math.round(0-$(this).find('#main-nav').position().top);
        //var _t = $(this).css('top');
        //if(_x !== _t) $(this).css('top',Math.round(0-$(this).find('#main-nav').position().top));
    });
});

$(window).bind('beforeunload', function(){
    try { window.speechSynthesis.cancel(); } catch (e) {} // it seems like Safari should know to do this itself, I am not sure if speechSynthesis instances are supposed persist navagitaion changes
});

$('.js-rem').empty().remove();
$('html.touch .untouchable').empty().remove();
$('html.no-touch .strictly-touchable').empty().remove();

$('.dashbox .shell .expand-btn').click(function(e){
    e.preventDefault();
    $(this).find('.fa').toggleClass('fa-expand').toggleClass('fa-compress').end().closest('.shell').toggleClass('shell-greedy').toggleClass('expanded');

    $('html, body').animate({
            scrollTop: $(this).closest('.shell').find('h2,h3').offset().top - 100
    }, 640);
    
});

$('.resource-edit .page-wrapper').focusin(function(e){
    $('#focus button').addClass('save').children('span').text('Save');
}).click(function(e){
   // $('#focus button').addClass('save').children('span').text('Save');
}).focusout(function(e){
    //$('#focus button').removeClass('save').children('span').text('Go');
});

$('#above-fold').focusin(function(e){
    $('#focus button').removeClass('save').children('span').text('Go');
});

$('#new-field').click(function(e){
    e.preventDefault();
    $(this).closest('.shell').after($('.shell-new-setting-master').clone().show().removeClass('shell-new-setting-master').addClass('shell-field'));
});

$('a[href="#resource-view"]').click(function(e){
    e.preventDefault();
    $('html, body').animate({
            scrollTop: 0
    }, 640);
});

$('.shell-getresources').each(function(){
    var _that = $(this);
    var _form = _that.find('form');
    var _codeArea = _that.find('textarea.code-selectable');
    
    _that.find('input').on('change keyup',function(e){
        var _props = _form.serializeArray(); // get the form data
        
        var _as = [];
        var _dl = {};
                
        $.each(_props,function(index,prop){
            if(prop.value && prop.name.indexOf('[]') > 1) {
                var _name = prop.name.substring(0,prop.name.indexOf('[]'));
                try {
                    _dl[_name].push(prop.value);
                } catch (variable) {
                    _dl[_name] = [prop.value];
                } 
            }
        });
        
        // support multiple input checkboxes
        $.each(_dl,function(index,prop){
            _props.push({name:index,value:prop.join(',')});
        });
        
        $.each(_props,function(index,prop){
            if(prop.value && !prop.name.includes('[]') && prop.name != "cache") _as.push(prop.name + '=`' + prop.value + '`');
        });

        var cache = false;
        try {
            cache = (jQuery.grep(_props,function(n,i){return n.name == "cache"})[0].value == "1") ? true : false;
        } catch (e) { } 
        
        _codeArea.val(
            '[[' + ((cache) ? '' : '!') + 'getResources? ' +
            _as.join(' &') +
            ']]'
        );
    }).end().find('.horz-nav .copy').click(function(e){
        e.preventDefault();
        _codeArea.click();
    });
});

$('.shell-media').each(function(){
    var _that = $(this);
    
    _that.find('.list-view-btn').click(function(e){
        e.preventDefault();
        _that.find('.media-box').removeClass('grid-view'); 
    });
    
    _that.find('.grid-view-btn').click(function(e){
        e.preventDefault();
        _that.find('.media-box').addClass('grid-view');
    });
});

$('.shell-twitter').each(function(){
    var _that = $(this);
    
    _that.find('textarea');
    _that.on('change keyup',function(e){
        _that.find('.char-count').text(140 - _that.find('textarea').val().length);
    });
});

$('.shell-sign-manifesto').each(function(){
    var _that = $(this);
    
    _that.find('textarea').on('change keyup',function(){
        if( $(this).val()) {
            _that.find('.twitter-link').attr('href','http://twitter.com/home?status=' + encodeURIComponent($(this).val()));
            _that.find('button').prop('disabled',false);
        } else {
            _that.find('.twitter-link').removeAttr('href');
            _that.find('button').prop('disabled',true);
        }
        
    });
});

/*
        // event methods
        if(typeof(_that.settings.onstart) == "function") msg.onstart = _that.settings.onstart;
        if(typeof(_that.settings.onend) == "function") msg.onend = _that.settings.onend;
        if(typeof(_that.settings.onerror) == "function") msg.onerror = _that.settings.onerror;
        if(typeof(_that.settings.pause) == "function") msg.pause = _that.settings.pause;
        if(typeof(_that.settings.resume) == "function") msg.resume = _that.settings.resume;
        if(typeof(_that.settings.mark) == "function") msg.mark = _that.settings.mark;
        if(typeof(_that.settings.boundary) == "function") msg.boundary = _that.settings.boundary;
*/

$('.speakable').each(function(){
    
    $(this).speakable({
        buttonElement:$(this).find('.speaker-btn').addClass('clickable'),
        onstart:function(){
            $('.play-controls').find('.play-pause-btn .fa').addClass('fa-pause').end().show();
        },
        onresume:function(){
            $('.play-controls').find('.play-pause-btn .fa').addClass('fa-pause').end().show();
        },
        onend:function(){
            console.log('onend');
            $('.play-controls').find('.play-pause-btn .fa').removeClass('fa-pause').end().hide();
        },
        onmark:function(e){
            console.log('onmark');
        },
        onboundary:function(){
            console.log('onboundary');
        },
        onpause:function(){
            console.log('pause');
             $('.play-controls').find('.play-pause-btn .fa').removeClass('fa-pause');
        },
        onerror:function(){
            console.log('onerror');
             $('.play-controls').find('.play-pause-btn .fa').removeClass('fa-pause');
        }
    });
});

$('.speakable-tip,.speakable-title').each(function(){
    $(this).speakable({
        text:$(this).attr('title')
    }).addClass('clickable');
});

$(window).on('speechSilenced',function(){
    $('.play-controls').find('.play-pause-btn .fa').removeClass('fa-pause')
}).on('speechResumed',function(){
    $('.play-controls').find('.play-pause-btn .fa').addClass('fa-pause')
});

$('.play-pause-btn').each(function(){
    var _that = $(this);
    
    $(this).click(function(e){
        e.preventDefault();
        if(!window.speechSynthesis.paused)  {
            window.speechSynthesis.pause();
            $(this).find('.fa').addClass('fa-pause');
            $(window).trigger('speechSilenced');
        } else {
            window.speechSynthesis.resume();
            $(this).find('.fa').removeClass('fa-pause');
            $(window).trigger('speechResumed');
        }
    });
});

$(document).ready(function(){
    if(getParameterByName('hc') == 1) {
        $('body').addClass('inverted');
    }
});