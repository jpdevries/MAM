/*
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

})( jQuery, window, document );