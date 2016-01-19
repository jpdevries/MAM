// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

if (!String.prototype.includes) {
  String.prototype.includes = function() {'use strict';
    return String.prototype.indexOf.apply(this, arguments) !== -1;
  };
}



function getParameterByName(name) {
    var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
}

function decodeHTML(html) {
    var txt = document.createElement("textarea");
    txt.innerHTML = html;
    return txt.value;
}/*
 *  jquery-boilerplate - v3.4.0
 *  A jump-start for jQuery plugins development.
 *  http://jqueryboilerplate.com
 *
 *  Made by Zeno Rocha
 *  Under MIT License
 */
// the semi-colon before function invocation is a safety net against concatenated
// scripts and/or other plugins which may not be closed properly.
;(function ( $, window, document, undefined ) {

	"use strict";

		// undefined is used here as the undefined global variable in ECMAScript 3 is
		// mutable (ie. it can be changed by someone else). undefined isn't really being
		// passed in so we can ensure the value of it is truly undefined. In ES5, undefined
		// can no longer be modified.

		// window and document are passed through as local variable rather than global
		// as this (slightly) quickens the resolution process and can be more efficiently
		// minified (especially when both are regularly referenced in your plugin).

		// Create the defaults once
		var pluginName = "speakable",
				defaults = {
				voice: "Vicki",
				msg:null,
                rate:null,
                pitch:null,
                volume:null,
				transcript:'',
                buttonElement:null,
                onstart:function(){},
                onresume:function(){},
                onend:function(){},
                onaudiostart:function(){},
                onsoundstart:function(){},
                onspeechstart:function(){},
                onsoundend:function(){},
                onaudioend:function(){},
                onresult:function(){},
                onnomatch:function(){},
                onerror:function(){}
		};
        
        var msg = null;

		// The actual plugin constructor
		function Plugin ( element, options ) {
				this.element = element;
				// jQuery has an extend method which merges the contents of two or
				// more objects, storing the result in the first object. The first object
				// is generally empty as we don't want to alter the default options for
				// future instances of the plugin
				this.settings = $.extend( {}, defaults, options );
				this._defaults = defaults;
				this._name = pluginName;
				this.init();
		}

		// Avoid Plugin.prototype conflicts
		$.extend(Plugin.prototype, {
				init: function () {
						// Place initialization logic here 
						// You already have access to the DOM element and
						// the options via the instance, e.g. this.element
						// and this.settings
						// you can add more functions like the one below and
						// call them like so: this.yourOtherFunction(this.element, this.settings).
						var _that = this;
						var _element = $(this.element);

                        var voices = window.speechSynthesis.getVoices();

                        var _sb = _that.settings.buttonElement || _element;
                        
                        _sb.click(function(e){
                            e.preventDefault();
                            if(_element[0].dataset.voice) _that.settings.voice = _element[0].dataset.voice;
                            if(_element[0].dataset.rate) _that.settings.rate = _element[0].dataset.rate;
                            if(_element[0].dataset.pitch) _that.settings.pitch = _element[0].dataset.pitch;
                            if(_element[0].dataset.volume) _that.settings.volume = _element[0].dataset.volume;
                            if(_element[0].dataset.transcript) _that.settings.transcript = _element[0].dataset.transcript;
                        
                            var _voice = _that.settings.voice;

                            window.speechSynthesis.cancel();
                            if(window.speechSynthesis.speaking)  {
                                //window.speechSynthesis.cancel();
                                if(!window.speechSynthesis.paused) {
                                    window.speechSynthesis.pause();
                                    if(typeof(_that.settings.onpause) == "function") _that.settings["onpause"]();
                                } else {
                                    window.speechSynthesis.resume();
                                    if(typeof(_that.settings.onresume) == "function") _that.settings["onresume"]();
                                }
                                return;
                            }
                            
                            var _transcript;
                            
                            if(_that.settings.transcript) {
                                var _t = $(document.getElementById(_that.settings.transcript));
                                if($.inArray(_t.prop('tagName').toLowerCase(),['textarea','input']) > -1) {
                                    _transcript = _t.val();
                                } else {
                                    _transcript= _t.clone().find('.unspeakable').empty().remove().end().text();
                                }
                            }

                            //var _transcript = (_that.settings.transcript) ?  : ;
                            _transcript = '<div>' + _transcript + '</div>'; 
                            
        
                            var _ns = [];
                            var _code;
                            var _msg = (_that.settings.text || $(_element).data('text')) || null;
                            
                            if(!_msg) {
                                console.log('.');
                                console.log(_that.settings.transcript);
                                console.log(document.getElementById(_that.settings.transcript));
                                if(document.getElementById(_that.settings.transcript)) {
                                    console.log('..');
                                    var _t = $(document.getElementById(_that.settings.transcript)).clone();
                                    _t.find('*[data-enunciate]').each(function(){
                                        console.log('enunciate: ' + $(this).attr('data-enunciate'));
                                        $(this).text($(this).attr('data-enunciate'));
                                        console.log($(this).text());
                                    });
                                    _code = _t.find('.unspeakable').empty().remove().end().text();
                                } else { // we have nothing
                                    console.log('...    ');
                                    var _t = $(_element).clone();
                                    _t.find('*[data-enunciate]').each(function(){
                                        console.log('enunciate: ' + $(this).attr('data-enunciate'));
                                        $(this).text($(this).attr('data-enunciate'));
                                        console.log($(this).text());
                                    });
                                    _code = _t.find('.unspeakable').empty().remove().end().text();
                                }
                            } else {
                                _code = _msg;
                                console.log('..');
                            }
                            
                            var msg = new SpeechSynthesisUtterance(); 
                            msg.text = _code;
                            msg.lang = 'en-US';
                            msg.voice = voices.filter(function(voice) { return voice.name == (_voice); })[0];
                            if(_that.settings.rate == null) {
                                msg.rate = (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) ? 0.4 : 1.24; // #janky there is an iOS webkit bug    
                            } else {
                                msg.rate = _that.settings.rate;
                            }
                            
                            if(_that.settings.pitch !== null) msg.pitch = _that.settings.pitch;
                            if(_that.settings.volume !== null) msg.volume = _that.settings.volume;
                            
                            if(typeof(_that.settings.onstart) == "function") msg.onstart = _that.settings.onstart;
                            if(typeof(_that.settings.onend) == "function") msg.onend = _that.settings.onend;
                            if(typeof(_that.settings.onerror) == "function") msg.onerror = _that.settings.onerror;
                            if(typeof(_that.settings.onpause) == "function") msg.onpause = _that.settings.onpause;
                            if(typeof(_that.settings.onresume) == "function") msg.onresume = _that.settings.onresume;
                            if(typeof(_that.settings.onmark) == "function") msg.onmark = _that.settings.onmark;
                            if(typeof(_that.settings.onboundary) == "function") msg.onboundary = _that.settings.onboundary;

                            window.speechSynthesis.speak(msg); 
                        });
				}/*,
				yourOtherFunction: function () {
						// some logic
				}*/
		});

		// A really lightweight plugin wrapper around the constructor,
		// preventing against multiple instantiations
		$.fn[ pluginName ] = function ( options ) {
				return this.each(function() {
						if ( !$.data( this, "plugin_" + pluginName ) ) {
								$.data( this, "plugin_" + pluginName, new Plugin( this, options ) );
						}
				});
		};

})( jQuery, window, document );/*
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