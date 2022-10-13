
<!doctype html >
<html lang="id-ID">
<head><meta charset="UTF-8" /><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>class RocketLazyLoadScripts{constructor(e){this.triggerEvents=e,this.eventOptions={passive:!0},this.userEventListener=this.triggerListener.bind(this),this.delayedScripts={normal:[],async:[],defer:[]},this.allJQueries=[]}_addUserInteractionListener(e){this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventListener,e.eventOptions)))}_removeUserInteractionListener(e){this.triggerEvents.forEach((t=>window.removeEventListener(t,e.userEventListener,e.eventOptions)))}triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}async _loadEverythingNow(){this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async),await this._triggerDOMContentLoaded(),await this._triggerWindowLoad(),window.dispatchEvent(new Event("rocket-allScriptsLoaded"))}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._requestAnimFrame(),new Promise((t=>{const n=document.createElement("script");let r;[...e.attributes].forEach((e=>{let t=e.nodeName;"type"!==t&&("data-rocket-type"===t&&(t="type",r=e.nodeValue),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")?(n.addEventListener("load",t),n.addEventListener("error",t)):(n.text=e.text,t()),e.parentNode.replaceChild(n,e)}))}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){var e=document.createDocumentFragment();[...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async].forEach((t=>{const n=t.getAttribute("src");if(n){const t=document.createElement("link");t.href=n,t.rel="preload",t.as="script",e.appendChild(t)}})),document.head.appendChild(e)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){let n=e[t];Object.defineProperty(e,t,{get:()=>n||function(){},set(r){e["rocket"+t]=n=r}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._requestAnimFrame(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-load")),await this._requestAnimFrame(),window.rocketonload&&window.rocketonload(),await this._requestAnimFrame(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),window.dispatchEvent(new Event("rocket-pageshow")),await this._requestAnimFrame(),window.rocketonpageshow&&window.rocketonpageshow()}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,r=document.createRange(),i=n.parentElement;let o=e.get(n);void 0===o&&(o=n.nextSibling,e.set(n,o));const a=document.createDocumentFragment();r.setStart(a,0),a.appendChild(r.createContextualFragment(t)),i.insertBefore(a,o)}}async _requestAnimFrame(){return new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts(["keydown","mousemove","touchmove","touchstart","touchend","wheel"]);e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();</script>
    
    <title>12 Cara Jitu Tambah Followers Instagram, Cepat Berhasil dan Gratis!</title><style id="rocket-critical-css">html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article{display:block}a{background-color:transparent}strong{font-weight:bold}img{border:0}svg:not(:root){overflow:hidden}button,input,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button,html input[type="button"]{-webkit-appearance:button}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}textarea{overflow:auto}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}img{max-width:100%;width:auto\9;height:auto}.td-main-content-wrap{background-color:#fff}.tdc-row{width:1068px;margin-right:auto;margin-left:auto}.tdc-row:before,.tdc-row:after{display:table;content:'';line-height:0}.tdc-row:after{clear:both}.tdc-row[class*="stretch_row"]>.td-pb-row>.td-element-style{width:100vw!important;left:50%!important;transform:translateX(-50%)!important}@media (max-width:767px){.td-pb-row>.td-element-style{width:100vw!important;left:50%!important;transform:translateX(-50%)!important}}.tdc-row.stretch_row_content{width:100%!important}@media (max-width:767px){.tdc-row.td-stretch-content{padding-left:20px;padding-right:20px}}.td-pb-row{*zoom:1;margin-right:-24px;margin-left:-24px;position:relative}.td-pb-row:before,.td-pb-row:after{display:table;content:''}.td-pb-row:after{clear:both}.td-pb-row [class*="td-pb-span"]{display:block;min-height:1px;float:left;padding-right:24px;padding-left:24px;position:relative}@media (min-width:1019px) and (max-width:1140px){.td-pb-row [class*="td-pb-span"]{padding-right:20px;padding-left:20px}}@media (min-width:768px) and (max-width:1018px){.td-pb-row [class*="td-pb-span"]{padding-right:14px;padding-left:14px}}@media (max-width:767px){.td-pb-row [class*="td-pb-span"]{padding-right:0;padding-left:0;float:none;width:100%}}.td-ss-row .td-pb-span4 .wpb_wrapper{-webkit-backface-visibility:hidden;-webkit-perspective:1000}.td-pb-span3{width:25%}.td-pb-span4{width:33.33333333%}.td-pb-span8{width:66.66666667%}.td-pb-span9{width:75%}.td-pb-span12{width:100%}.wpb_row{margin-bottom:0}@media (min-width:1019px) and (max-width:1140px){.tdc-row{width:980px}.td-pb-row{margin-right:-20px;margin-left:-20px}}@media (min-width:768px) and (max-width:1018px){.tdc-row{width:740px}.td-pb-row{margin-right:-14px;margin-left:-14px}}@media (max-width:767px){.tdc-row{width:100%;padding-left:20px;padding-right:20px}.td-pb-row{width:100%;margin-left:0;margin-right:0}}@media (min-width:768px){.td-drop-down-search .td-search-form{margin:20px}}#td-outer-wrap{overflow:hidden}@media (max-width:767px){#td-outer-wrap{margin:auto;width:100%;-webkit-transform-origin:50% 200px 0;transform-origin:50% 200px 0}}.td-menu-background{background-repeat:no-repeat;background-size:cover;background-position:center top;position:fixed;top:0;display:block;width:100%;height:113%;z-index:9999;visibility:hidden;transform:translate3d(-100%,0,0);-webkit-transform:translate3d(-100%,0,0)}.td-menu-background:before{content:'';width:100%;height:100%;position:absolute;top:0;left:0;opacity:0.98;background:#313b45;background:-webkit-gradient(left top,left bottom,color-stop(0%,#313b45),color-stop(100%,#3393b8));background:linear-gradient(to bottom,#313b45 0%,#3393b8 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#313b45', endColorstr='#3393b8', GradientType=0)}#td-mobile-nav{padding:0;position:fixed;width:100%;height:calc(100% + 1px);top:0;z-index:9999;visibility:hidden;transform:translate3d(-99%,0,0);-webkit-transform:translate3d(-99%,0,0);left:-1%;font-family:-apple-system,".SFNSText-Regular","San Francisco","Roboto","Segoe UI","Helvetica Neue","Lucida Grande",sans-serif}#td-mobile-nav{height:1px;overflow:hidden}#td-mobile-nav .td-menu-socials{padding:0 65px 0 20px;overflow:hidden;height:60px}#td-mobile-nav .td-social-icon-wrap{margin:20px 5px 0 0;display:inline-block}#td-mobile-nav .td-social-icon-wrap i{border:none;background-color:transparent;font-size:14px;width:40px;height:40px;line-height:38px;color:#fff;vertical-align:middle}#td-mobile-nav .td-social-icon-wrap .td-icon-instagram{font-size:16px}.td-mobile-close{position:absolute;right:1px;top:0;z-index:1000}.td-mobile-close .td-icon-close-mobile{height:70px;width:70px;line-height:70px;font-size:21px;color:#fff;top:4px;position:relative}.td-mobile-content{padding:20px 20px 0}.td-mobile-container{padding-bottom:20px;position:relative}.td-mobile-content ul{list-style:none;margin:0;padding:0}.td-mobile-content li{float:none;margin-left:0;-webkit-touch-callout:none}.td-mobile-content li a{display:block;line-height:21px;font-size:21px;color:#fff;margin-left:0;padding:12px 30px 12px 12px;font-weight:bold}.td-mobile-content .td-icon-menu-right{display:none;position:absolute;top:10px;right:-4px;z-index:1000;font-size:14px;padding:6px 12px;float:right;color:#fff;-webkit-transform-origin:50% 48% 0px;transform-origin:50% 48% 0px;transform:rotate(-90deg);-webkit-transform:rotate(-90deg)}.td-mobile-content .td-icon-menu-right:before{content:'\e83d'}.td-mobile-content .sub-menu{max-height:0;overflow:hidden;opacity:0}.td-mobile-content .sub-menu a{padding:9px 26px 9px 36px!important;line-height:19px;font-size:16px;font-weight:normal}.td-mobile-content .menu-item-has-children a{width:100%;z-index:1}.td-mobile-container{opacity:1}.td-search-wrap-mob{padding:0;position:absolute;width:100%;height:auto;top:0;text-align:center;z-index:9999;visibility:hidden;color:#fff;font-family:-apple-system,".SFNSText-Regular","San Francisco","Roboto","Segoe UI","Helvetica Neue","Lucida Grande",sans-serif}.td-search-wrap-mob .td-drop-down-search{opacity:0;visibility:hidden;-webkit-backface-visibility:hidden;position:relative}.td-search-wrap-mob #td-header-search-mob{color:#fff;font-weight:bold;font-size:26px;height:40px;line-height:36px;border:0;background:transparent;outline:0;margin:8px 0;padding:0;text-align:center}.td-search-wrap-mob .td-search-input{margin:0 5%;position:relative}.td-search-wrap-mob .td-search-input span{opacity:0.8;font-size:12px}.td-search-wrap-mob .td-search-input:before,.td-search-wrap-mob .td-search-input:after{content:'';position:absolute;display:block;width:100%;height:1px;background-color:#fff;bottom:0;left:0;opacity:0.2}.td-search-wrap-mob .td-search-input:after{opacity:0.8;transform:scaleX(0);-webkit-transform:scaleX(0)}.td-search-wrap-mob .td-search-form{margin-bottom:30px}.td-search-background{background-repeat:no-repeat;background-size:cover;background-position:center top;position:fixed;top:0;display:block;width:100%;height:113%;z-index:9999;transform:translate3d(100%,0,0);-webkit-transform:translate3d(100%,0,0);visibility:hidden}.td-search-background:before{content:'';width:100%;height:100%;position:absolute;top:0;left:0;opacity:0.98;background:#313b45;background:-webkit-gradient(left top,left bottom,color-stop(0%,#313b45),color-stop(100%,#3393b8));background:linear-gradient(to bottom,#313b45 0%,#3393b8 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#313b45', endColorstr='#3393b8', GradientType=0)}.td-search-close{text-align:right;z-index:1000}.td-search-close .td-icon-close-mobile{height:70px;width:70px;line-height:70px;font-size:21px;color:#fff;position:relative;top:4px;right:0}.td-login-inputs{position:relative}body{font-family:Verdana,BlinkMacSystemFont,-apple-system,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Open Sans","Helvetica Neue",sans-serif;font-size:14px;line-height:21px}p{margin-top:0;margin-bottom:21px}a{color:#4db2ec;text-decoration:none}ul{padding:0}ul li{line-height:24px;margin-left:21px}h1,h2,h3{font-family:'Roboto',sans-serif;color:#111111;font-weight:400;margin:6px 0}h3>a{color:#111111}h1{font-size:32px;line-height:40px;margin-top:33px;margin-bottom:23px}h2{font-size:27px;line-height:38px;margin-top:30px;margin-bottom:20px}h3{font-size:22px;line-height:30px;margin-top:27px;margin-bottom:17px}textarea{font-size:12px;line-height:21px;color:#444;border:1px solid #e1e1e1;width:100%;max-width:100%;height:168px;min-height:168px;padding:6px 9px}@media (max-width:767px){textarea{font-size:16px}}input[type=text]{font-size:12px;line-height:21px;color:#444;border:1px solid #e1e1e1;width:100%;max-width:100%;height:34px;padding:3px 9px}@media (max-width:767px){input[type=text]{font-size:16px}}input[type=password]{width:100%;position:relative;top:0;display:inline-table;vertical-align:middle;font-size:12px;line-height:21px;color:#444;border:1px solid #ccc;max-width:100%;height:34px;padding:3px 9px;margin-bottom:10px}@media (max-width:767px){input[type=password]{font-size:16px}}.tagdiv-type{font-size:15px;line-height:1.74;color:#222}.tagdiv-type p{margin-bottom:26px}.td_module_wrap{position:relative;padding-bottom:35px}.td_module_wrap .entry-title{font-size:21px;line-height:25px;margin:0 0 6px 0}.entry-title{word-wrap:break-word}.td-module-thumb{position:relative;margin-bottom:13px}.td-module-thumb .entry-thumb{display:block}.td-module-meta-info{font-family:'Open Sans','Open Sans Regular',sans-serif;font-size:11px;margin-bottom:7px;line-height:1;min-height:17px}.td-post-category{font-family:'Open Sans','Open Sans Regular',sans-serif;font-size:10px;font-weight:600;line-height:1;background-color:#222222;color:#fff;margin-right:5px;padding:3px 6px 4px;display:block;vertical-align:top}.td-module-meta-info .td-post-category{display:inline-block}.td-block-title span{display:inline-block}.td-main-content-wrap{padding-bottom:40px}@media (max-width:767px){.td-main-content-wrap{padding-bottom:26px}}.td-pb-span4 .wpb_wrapper{perspective:unset!important}.post{background-color:#fff}.td-post-content{margin-top:21px;padding-bottom:16px}@media (max-width:767px){.td-post-content{margin-top:16px}}.td-post-content p{word-wrap:break-word}#cancel-comment-reply-link{font-size:12px;font-weight:400;color:#111111;margin-left:10px}.comment-form .td-warning-comment,.comment-form .td-warning-author,.comment-form .td-warning-email,.comment-form .td-warning-email-error{display:none}.comment-form textarea{display:block}@font-face{font-family:'newspaper';src:url(https://telset.id/wp-content/themes/Newspaper/images/icons/newspaper.eot?19);src:url(https://telset.id/wp-content/themes/Newspaper/images/icons/newspaper.eot?19#iefix) format('embedded-opentype'),url(https://telset.id/wp-content/themes/Newspaper/images/icons/newspaper.woff?19) format('woff'),url(https://telset.id/wp-content/themes/Newspaper/images/icons/newspaper.ttf?19) format('truetype'),url(https://telset.id/wp-content/themes/Newspaper/images/icons/newspaper.svg?19#newspaper) format('svg');font-weight:normal;font-style:normal;font-display:swap}[class^="td-icon-"]:before,[class*=" td-icon-"]:before{font-family:'newspaper';speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;text-align:center;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}[class*="td-icon-"]{line-height:1;text-align:center;display:inline-block}.td-icon-down:before{content:'\e801'}.td-icon-right:before{content:'\e803'}.td-icon-menu-down:before{content:'\e806'}.td-icon-menu-up:before{content:'\e809'}.td-icon-menu-right:before{content:'\e80d'}.td-icon-mail:before{content:'\e810'}.td-icon-facebook:before{content:'\e818'}.td-icon-instagram:before{content:'\e81d'}.td-icon-rss:before{content:'\e828'}.td-icon-share:before{content:'\e829'}.td-icon-twitter:before{content:'\e831'}.td-icon-youtube:before{content:'\e836'}.td-icon-whatsapp:before{content:'\f232'}.td-icon-close-mobile:before{content:'\e900'}.td-icon-modal-back:before{content:'\e901'}.td-icon-telegram:before{content:'\f2c6'}.td-icon-line:before{content:'\e906'}.td-icon-plus:before{content:'\ea0a'}@font-face{font-display:swap;font-family:"Ionicons";src:url(https://telset.id/wp-content/plugins/alike/assets/fonts/ionicons.eot?v=2.0.0);src:url(https://telset.id/wp-content/plugins/alike/assets/fonts/ionicons.eot?v=2.0.0#iefix) format("embedded-opentype"),url(https://telset.id/wp-content/plugins/alike/assets/fonts/ionicons.ttf?v=2.0.0) format("truetype"),url(https://telset.id/wp-content/plugins/alike/assets/fonts/ionicons.woff?v=2.0.0) format("woff"),url(https://telset.id/wp-content/plugins/alike/assets/fonts/ionicons.svg?v=2.0.0#Ionicons) format("svg");font-weight:normal;font-style:normal}.ion-close-round:before{display:inline-block;font-family:"Ionicons";speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;text-rendering:auto;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.ion-close-round:before{content:"\f129"}.alike-compare-widget-content-before-scale{-webkit-transform:scale(0);transform:scale(0);opacity:0;-webkit-transform-origin:bottom right;transform-origin:bottom right}.alike-compare-widget-wrapper{display:none;position:fixed;z-index:99;bottom:47px;right:0;will-change:transform;padding:24px}.alike-compare-widget-main{position:relative}.alike-compare-widget-content{background:#fff;padding-bottom:0;border-radius:2px;width:160px;overflow:hidden;background-color:#fff;box-shadow:0 1px 2px 0 rgba(0,0,0,0.2);position:absolute;bottom:0;right:0;border:1px solid #f0f0f0;padding:10px 0px}@media (max-width:767px){.alike-compare-widget-content{width:480px!important;overflow:auto}}@media (max-width:600px){.alike-compare-widget-content{width:320px!important;overflow:auto}}.alike-compare-widget-button{font-size:14px;border-radius:2px;color:#fff;position:absolute;bottom:8px;right:8px;font-weight:500;height:40px;line-height:20px;width:144px;background-color:#5E23DC;box-shadow:0 1px 2px 0 rgba(0,0,0,0.2)}.alike-compare-widget-button{background-color:#5E23DC}.alike-compare-widget-button-text{display:inline-block;padding-left:24px;padding-top:12px}.alike-compare-widget-counter-wrapper{display:inline-block;position:relative}.alike-compare-widget-counter{position:absolute;top:-15px;margin-left:14px;border-radius:2px;background-color:#fff;padding:0;display:inline-block;height:20px;width:20px;text-align:center;color:#5e23dc}.alike-compare-widget-post-remove-all{float:right;color:#212121;margin:20px 188px 16px 0;font-size:14px;font-weight:500}.alike-compare-widget-post-remove-all-content{position:relative;width:100px;margin-top:15px}.alike-compare-widget-post-remove-all-content span{position:absolute;top:-10px;right:-30px}.alike-compare-widget-content-load{display:flex;flex-direction:row}#alikeMobileDrawer{width:100%;display:block;overflow:hidden;background-color:#ffffff;height:100vh;position:fixed;z-index:999999;top:0;left:110%}#alikeMobileDrawer .alike-compare-list-wrapper{background-color:#ffffff;height:auto;max-height:calc(100vh - 48px);overflow-y:auto;overflow-x:hidden}#alikeMobileDrawer .alike-compare-title{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:20px 10px;-webkit-box-align:center;-ms-flex-align:center;align-items:center;border-bottom:1px solid #dfdfdf;margin-bottom:0}#alikeMobileDrawer .alike-compare-title h2{margin:0;padding:0;line-height:1;font-size:20px;color:#202020;font-family:inherit;font-weight:600}#alikeMobileDrawer .alike-compare-title i.alikeCloseDrawer{padding:2px 4px;font-size:16px;color:#272727}#alikeMobileDrawer .alike-compare-action{border-top:1px solid #dfdfdf;display:-webkit-box;display:-ms-flexbox;height:48px;display:flex;position:absolute;width:100%;bottom:0;left:0;z-index:1}#alikeMobileDrawer .alike-compare-action>.alike-btn-compare,#alikeMobileDrawer .alike-compare-action>.btn-remove-all{padding:12px 30px;font-size:14px;line-height:20px;border-right:1px solid #4701dc;background-color:rgba(94,35,220,0.95);-webkit-box-flex:1;-ms-flex:1;flex:1;border-top:0;border-left:0;border-bottom:0;color:#ffffff;text-align:center}#alikeMobileDrawer .alike-compare-action>.alike-btn-compare{border-right:0}.tdc_zone{margin:0}.td-main-content-wrap .tdc_zone{z-index:0}.td-header-template-wrap{z-index:100}.td-header-desktop-wrap{width:100%}.td-header-desktop-sticky-wrap,.td-header-mobile-sticky-wrap{position:fixed;top:0;width:100%;z-index:999;visibility:hidden;opacity:0}.td_block_wrap{margin-bottom:48px;position:relative;clear:both}@media (max-width:767px){.td_block_wrap{margin-bottom:32px}}.td_block_wrap .td-load-more-wrap{margin-top:20px}@media (max-width:767px){.td_block_wrap .td-load-more-wrap{margin-bottom:0}}.td-block-title-wrap{position:relative}.td-fix-index{transform:translateZ(0);-webkit-transform:translateZ(0)}.td_with_ajax_pagination{transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0);overflow:hidden}.td_ajax_load_more{display:inline-block;font-family:'Open Sans','Open Sans Regular',sans-serif;font-size:12px;line-height:1;padding:8px 10px;border:1px solid #C9C9C9;text-align:center;vertical-align:middle}.td_ajax_load_more i{font-size:8px;margin-left:6px;position:relative;top:0;vertical-align:middle}.td-load-more-wrap{transform:translateZ(0);-webkit-transform:translateZ(0)}@-moz-document url-prefix(){.td_ajax_load_more{padding:7px 10px 9px}}.td-load-more-wrap{text-align:center;clear:both}.td-load-more-wrap a{color:#767676}.td_block_empty_space,.vc_empty_space{margin-bottom:0}.td_module_flex_1{display:inline-block;width:100%;padding-bottom:0}.td_module_flex_1 .td-module-container{display:flex;flex-direction:column;position:relative}.td_module_flex_1 .td-module-container:before{content:'';position:absolute;bottom:0;left:0;width:100%;height:1px}.td_module_flex_1 .td-image-wrap{display:block;position:relative}.td_module_flex_1 .td-image-container{position:relative;flex:0 0 auto;width:100%;height:100%}.td_module_flex_1 .td-module-thumb{margin-bottom:0}.td_module_flex_1 .td-module-meta-info{width:100%;margin-bottom:0;z-index:1;border:0 solid #eaeaea;min-height:0}.td_module_flex_1 .td-thumb-css{width:100%;height:100%;position:absolute;background-size:cover;background-position:center center}.td-mc1-wrap:after,.td-mc1-wrap .td_module_wrap:after{content:'';display:table;clear:both}.td_module_flex_1 .td-image-wrap{padding-bottom:50%}.td_module_flex_1 .td-module-meta-info{padding:13px 0 0 0}.td_flex_block.td_with_ajax_pagination,.td_flex_block.td_with_ajax_pagination .td_block_inner{overflow:initial}.td_flex_block.td_with_ajax_pagination .td_block_inner{height:auto!important}.tdb-template .td-main-content-wrap{padding-bottom:0}.mfp-hide{display:none!important}button::-moz-focus-inner{padding:0;border:0}.white-popup-block{position:relative;margin:0 auto;max-width:500px;min-height:500px;font-family:'Open Sans','Open Sans Regular',sans-serif;text-align:center;color:#fff;vertical-align:top;-webkit-box-shadow:0px 0px 20px 0px rgba(0,0,0,0.2);box-shadow:0px 0px 20px 0px rgba(0,0,0,0.2);padding:0 0 24px;overflow:hidden}.white-popup-block:after{content:'';width:100%;height:100%;position:absolute;top:0;left:0;display:block;background:rgba(0,69,130,0.8);background:-webkit-gradient(left bottom,right top,color-stop(0%,rgba(0,69,130,0.8)),color-stop(100%,rgba(38,134,146,0.8)));background:linear-gradient(45deg,rgba(0,69,130,0.8) 0%,rgba(38,134,146,0.8) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#2a80cb', endColorstr='#42bdcd', GradientType=1);z-index:-2}.white-popup-block:before{content:'';width:100%;height:100%;position:absolute;top:0;left:0;display:block;background-size:cover;background-position:top;background-repeat:no-repeat;z-index:-3}#login_pass{display:none!important}.td-a-rec-id-sidebar>div{margin-bottom:48px}.td-adspot-title{color:#767676;font-size:10px;text-align:center;display:block;font-family:Verdana,BlinkMacSystemFont,-apple-system,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Open Sans","Helvetica Neue",sans-serif;line-height:21px}.td-container-wrap{background-color:#fff;margin-left:auto;margin-right:auto}.td-scroll-up{position:fixed;bottom:4px;right:5px;width:40px;height:40px;background-color:#4db2ec;z-index:9999;transform:translate3d(0,70px,0);-webkit-transform:translate3d(0,70px,0)}.td-scroll-up .td-icon-menu-up{position:relative;color:#fff;font-size:20px;display:block;text-align:center;width:40px;top:7px}@media (max-width:767px){.td-scroll-up.td-hide-scroll-up-on-mob{display:none!important}}.wpb_button{display:inline-block;font-family:'Open Sans','Open Sans Regular',sans-serif;font-weight:600;line-height:24px;text-shadow:none;border:none;border-radius:0;margin-bottom:21px}.td-element-style{position:absolute;z-index:0;width:100%;height:100%;top:0;bottom:0;left:0;right:0;overflow:hidden}.td-element-style-before{opacity:0}body.td-animation-stack-type0 .td-animation-stack .entry-thumb{opacity:0}</style><link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Open%20Sans%3A400%2C600%2C700%7CRoboto%3A400%2C500%2C700&#038;display=swap" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open%20Sans%3A400%2C600%2C700%7CRoboto%3A400%2C500%2C700&#038;display=swap" media="print" onload="this.media='all'" /><noscript><link rel="preload" href="https://fonts.googleapis.com/css?family=Open%20Sans%3A400%2C600%2C700%7CRoboto%3A400%2C500%2C700&#038;display=swap" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" /></noscript><link rel="preload" href="https://telset.id/wp-content/cache/min/1/f631f3bff26e2b3f921598dfa383cea6.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all" data-minify="1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="https://telset.id/xmlrpc.php" />
    <meta name='robots' content='max-image-preview:large' />
<link rel="icon" type="image/png" href="https://telset.id/wp-content/uploads/2018/10/TELSET-NEW-FAV-ICON.png"><link rel="apple-touch-icon" sizes="76x76" href="https://telset.id/wp-content/uploads/2020/08/TELSET-iOS76.png"/><link rel="apple-touch-icon" sizes="120x120" href="https://telset.id/wp-content/uploads/2020/08/TELSET-iOS120.png"/><link rel="apple-touch-icon" sizes="152x152" href="https://telset.id/wp-content/uploads/2020/08/TELSET-iOS152.png"/><link rel="apple-touch-icon" sizes="114x114" href="https://telset.id/wp-content/uploads/2020/08/TELSET-iOS114.png"/><link rel="apple-touch-icon" sizes="144x144" href="https://telset.id/wp-content/uploads/2020/08/TELSET-iOS144.png"/>
	<!-- This site is optimized with the Yoast SEO Premium plugin v15.8.2 - https://yoast.com/wordpress/plugins/seo/ -->
	<meta name="description" content="Followers mempengaruhi jumlah engagement di postingan kamu. Berikut ini tips cara menambah followers instagram mudah dan gratis." />
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="12 Cara Jitu Tambah Followers Instagram, Cepat Berhasil dan Gratis!" />
	<meta property="og:description" content="Followers mempengaruhi jumlah engagement di postingan kamu. Berikut ini tips cara menambah followers instagram mudah dan gratis." />
	<meta property="og:url" content="https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/" />
	<meta property="og:site_name" content="Telset" />
	<meta property="article:publisher" content="https://facebook.com/majalahtelset/" />
	<meta property="article:author" content="https://web.facebook.com/mfaisalhadip" />
	<meta property="article:published_time" content="2021-09-01T10:14:06+00:00" />
	<meta property="article:modified_time" content="2021-09-27T09:29:19+00:00" />
	<meta property="og:image" content="https://telset.id/wp-content/uploads/2021/01/Instagram-Followers-telset.jpg" />
	<meta property="og:image:width" content="700" />
	<meta property="og:image:height" content="413" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:creator" content="@https://twitter.com/mfaisalhadip" />
	<meta name="twitter:site" content="@telset_id" />
	<meta name="twitter:label1" content="Ditulis oleh">
	<meta name="twitter:data1" content="Muhammad Faisal Hadi Putra">
	<meta name="twitter:label2" content="Estimasi waktu membaca">
	<meta name="twitter:data2" content="10 menit">
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://telset.id/#organization","name":"Telset.id","url":"https://telset.id/","sameAs":["https://facebook.com/majalahtelset/","https://instagram.com/telset.id/","https://youtube.com/TELSETIDTV","https://twitter.com/telset_id"],"logo":{"@type":"ImageObject","@id":"https://telset.id/#logo","inLanguage":"id-ID","url":"https://telset.id/wp-content/uploads/2018/02/TELSET-NEW-LOGO-3.png","width":300,"height":90,"caption":"Telset.id"},"image":{"@id":"https://telset.id/#logo"}},{"@type":"WebSite","@id":"https://telset.id/#website","url":"https://telset.id/","name":"Telset","description":"Technology Trendsetter","publisher":{"@id":"https://telset.id/#organization"},"potentialAction":[{"@type":"SearchAction","target":"https://telset.id/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"id-ID"},{"@type":"ImageObject","@id":"https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/#primaryimage","inLanguage":"id-ID","url":"https://telset.id/wp-content/uploads/2021/01/Instagram-Followers-telset.jpg","width":700,"height":413,"caption":"Ilustrasi Instagram (Foto: Istimewa)"},{"@type":"WebPage","@id":"https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/#webpage","url":"https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/","name":"12 Cara Jitu Tambah Followers Instagram, Cepat Berhasil dan Gratis!","isPartOf":{"@id":"https://telset.id/#website"},"primaryImageOfPage":{"@id":"https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/#primaryimage"},"datePublished":"2021-09-01T10:14:06+00:00","dateModified":"2021-09-27T09:29:19+00:00","description":"Followers mempengaruhi jumlah engagement di postingan kamu. Berikut ini tips cara menambah followers instagram mudah dan gratis.","breadcrumb":{"@id":"https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/#breadcrumb"},"inLanguage":"id-ID","potentialAction":[{"@type":"ReadAction","target":["https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/"]}]},{"@type":"BreadcrumbList","@id":"https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://telset.id/","url":"https://telset.id/","name":"Home"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"https://telset.id/ngehits/","url":"https://telset.id/ngehits/","name":"NGEHITS"}},{"@type":"ListItem","position":3,"item":{"@type":"WebPage","@id":"https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/","url":"https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/","name":"12 Cara Jitu Tambah Followers Instagram, Cepat dan Gratis!"}}]},{"@type":"Article","@id":"https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/#article","isPartOf":{"@id":"https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/#webpage"},"author":{"@id":"https://telset.id/#/schema/person/b4a0d38841e5373d5f4a63f8fcdfac1d"},"headline":"12 Cara Jitu Tambah Followers Instagram, Cepat dan Gratis!","datePublished":"2021-09-01T10:14:06+00:00","dateModified":"2021-09-27T09:29:19+00:00","mainEntityOfPage":{"@id":"https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/#webpage"},"commentCount":1,"publisher":{"@id":"https://telset.id/#organization"},"image":{"@id":"https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/#primaryimage"},"keywords":"Followers,instagram","articleSection":"NGEHITS","inLanguage":"id-ID","potentialAction":[{"@type":"CommentAction","name":"Comment","target":["https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/#respond"]}]},{"@type":"Person","@id":"https://telset.id/#/schema/person/b4a0d38841e5373d5f4a63f8fcdfac1d","name":"Muhammad Faisal Hadi Putra","description":"Hi! My name is Muhammad Faisal Hadi Putra. I am usually called Faisal. I like to talk about gadgets. You can ask questions about smartphones, gadgets, laptops and other technologies. You can also contact me via social media, such as Twitter and Instagram.","sameAs":["https://telset.id","https://web.facebook.com/mfaisalhadip","http://instagram.com/mfaisalhadiputra/","https://id.linkedin.com/in/muhammad-faisal-hadi-putra-899492156","https://twitter.com/https://twitter.com/mfaisalhadip"]}]}</script>
	<!-- / Yoast SEO Premium plugin. -->


<link rel="amphtml" href="https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/amp/" /><meta name="generator" content="AMP for WP 1.0.77.33"/><link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
<link rel="alternate" type="application/rss+xml" title="Telset &raquo; Feed" href="https://telset.id/feed/" />
<link rel="alternate" type="application/rss+xml" title="Telset &raquo; Umpan Komentar" href="https://telset.id/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Telset &raquo; 12 Cara Jitu Tambah Followers Instagram, Cepat dan Gratis! Umpan Komentar" href="https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/feed/" />
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	




<style id='td-theme-inline-css' type='text/css'>
    
        @media (max-width: 767px) {
            .td-header-desktop-wrap {
                display: none;
            }
        }
        @media (min-width: 767px) {
            .td-header-mobile-wrap {
                display: none;
            }
        }
    
	
</style>



<style id='rocket-lazyload-inline-css' type='text/css'>
.rll-youtube-player{position:relative;padding-bottom:56.23%;height:0;overflow:hidden;max-width:100%;}.rll-youtube-player:focus-within{outline: 2px solid currentColor;outline-offset: 5px;}.rll-youtube-player iframe{position:absolute;top:0;left:0;width:100%;height:100%;z-index:100;background:0 0}.rll-youtube-player img{bottom:0;display:block;left:0;margin:auto;max-width:100%;width:100%;position:absolute;right:0;top:0;border:none;height:auto;-webkit-transition:.4s all;-moz-transition:.4s all;transition:.4s all}.rll-youtube-player img:hover{-webkit-filter:brightness(75%)}.rll-youtube-player .play{height:100%;width:100%;left:0;top:0;position:absolute;background:url(https://telset.id/wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat center;background-color: transparent !important;cursor:pointer;border:none;}
</style>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://telset.id/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://telset.id/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js' defer></script>
<script type='text/javascript' id='affegg-price-alert-js-extra'>
/* <![CDATA[ */
var affeggPriceAlert = {"ajaxurl":"https:\/\/telset.id\/wp-admin\/admin-ajax.php","nonce":"43800b6d89"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://telset.id/wp-content/cache/min/1/wp-content/plugins/affiliate-egg/res/js/price_alert.js?ver=1641193600' id='affegg-price-alert-js' defer></script>
<link rel="https://api.w.org/" href="https://telset.id/wp-json/" /><link rel="alternate" type="application/json" href="https://telset.id/wp-json/wp/v2/posts/189614" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://telset.id/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://telset.id/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.8.3" />
<link rel='shortlink' href='https://telset.id/?p=189614' />
<link rel="alternate" type="application/json+oembed" href="https://telset.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftelset.id%2Fngehits%2Fcara-tambah-followers-instagram-gratis%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://telset.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftelset.id%2Fngehits%2Fcara-tambah-followers-instagram-gratis%2F&#038;format=xml" />
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <script type="rocketlazyloadscript">
        window.tdb_globals = {"wpRestNonce":"c389414452","wpRestUrl":"https:\/\/telset.id\/wp-json\/","permalinkStructure":"\/%category%\/%postname%\/","isAjax":false,"isAdminBarShowing":false,"autoloadScrollPercent":50,"postAutoloadStatus":"off","origPostEditUrl":null};
    </script>
    
    <style>
        :root {--accent-color: #fff;}
    </style>
				<script type="rocketlazyloadscript">
				window.tdwGlobal = {"adminUrl":"https:\/\/telset.id\/wp-admin\/","wpRestNonce":"c389414452","wpRestUrl":"https:\/\/telset.id\/wp-json\/","permalinkStructure":"\/%category%\/%postname%\/"};
			</script>
			    <script type="rocketlazyloadscript">
        window.tdaGlobal = {"adminUrl":"https:\/\/telset.id\/wp-admin\/","wpRestNonce":"c389414452","wpRestUrl":"https:\/\/telset.id\/wp-json\/","permalinkStructure":"\/%category%\/%postname%\/","postId":362713};
    </script>
          <meta name="onesignal" content="wordpress-plugin"/>
            <script type="rocketlazyloadscript">

      window.OneSignal = window.OneSignal || [];

      OneSignal.push( function() {
        OneSignal.SERVICE_WORKER_UPDATER_PATH = "OneSignalSDKUpdaterWorker.js.php";
                      OneSignal.SERVICE_WORKER_PATH = "OneSignalSDKWorker.js.php";
                      OneSignal.SERVICE_WORKER_PARAM = { scope: "/" };
        OneSignal.setDefaultNotificationUrl("https://telset.id");
        var oneSignal_options = {};
        window._oneSignalInitOptions = oneSignal_options;

        oneSignal_options['wordpress'] = true;
oneSignal_options['appId'] = 'c23c6ad5-903e-4e58-9aef-ed0c30fbf906';
oneSignal_options['allowLocalhostAsSecureOrigin'] = true;
oneSignal_options['welcomeNotification'] = { };
oneSignal_options['welcomeNotification']['disable'] = true;
oneSignal_options['path'] = "https://telset.id/wp-content/plugins/onesignal-free-web-push-notifications/sdk_files/";
oneSignal_options['safari_web_id'] = "web.onesignal.auto.0a7a62f5-f36d-48c4-91af-ef38916dad6e";
oneSignal_options['persistNotification'] = false;
oneSignal_options['promptOptions'] = { };
oneSignal_options['promptOptions']['actionMessage'] = "Dapatkan Notifikasi Info Teknologi Terbaru dari Telset.id";
oneSignal_options['promptOptions']['acceptButtonText'] = "YA";
oneSignal_options['promptOptions']['cancelButtonText'] = "Terima Kasih";
oneSignal_options['promptOptions']['siteName'] = "https://telset.id";
                OneSignal.init(window._oneSignalInitOptions);
                OneSignal.showSlidedownPrompt();      });

      function documentInitOneSignal() {
        var oneSignal_elements = document.getElementsByClassName("OneSignal-prompt");

        var oneSignalLinkClickHandler = function(event) { OneSignal.push(['registerForPushNotifications']); event.preventDefault(); };        for(var i = 0; i < oneSignal_elements.length; i++)
          oneSignal_elements[i].addEventListener('click', oneSignalLinkClickHandler, false);
      }

      if (document.readyState === 'complete') {
           documentInitOneSignal();
      }
      else {
           window.addEventListener("load", function(event){
               documentInitOneSignal();
          });
      }
    </script>

<!-- JS generated by theme -->

<script type="rocketlazyloadscript">
    
    

	    var tdBlocksArray = []; //here we store all the items for the current page

	    //td_block class - each ajax block uses a object of this class for requests
	    function tdBlock() {
		    this.id = '';
		    this.block_type = 1; //block type id (1-234 etc)
		    this.atts = '';
		    this.td_column_number = '';
		    this.td_current_page = 1; //
		    this.post_count = 0; //from wp
		    this.found_posts = 0; //from wp
		    this.max_num_pages = 0; //from wp
		    this.td_filter_value = ''; //current live filter value
		    this.is_ajax_running = false;
		    this.td_user_action = ''; // load more or infinite loader (used by the animation)
		    this.header_color = '';
		    this.ajax_pagination_infinite_stop = ''; //show load more at page x
	    }


        // td_js_generator - mini detector
        (function(){
            var htmlTag = document.getElementsByTagName("html")[0];

	        if ( navigator.userAgent.indexOf("MSIE 10.0") > -1 ) {
                htmlTag.className += ' ie10';
            }

            if ( !!navigator.userAgent.match(/Trident.*rv\:11\./) ) {
                htmlTag.className += ' ie11';
            }

	        if ( navigator.userAgent.indexOf("Edge") > -1 ) {
                htmlTag.className += ' ieEdge';
            }

            if ( /(iPad|iPhone|iPod)/g.test(navigator.userAgent) ) {
                htmlTag.className += ' td-md-is-ios';
            }

            var user_agent = navigator.userAgent.toLowerCase();
            if ( user_agent.indexOf("android") > -1 ) {
                htmlTag.className += ' td-md-is-android';
            }

            if ( -1 !== navigator.userAgent.indexOf('Mac OS X')  ) {
                htmlTag.className += ' td-md-is-os-x';
            }

            if ( /chrom(e|ium)/.test(navigator.userAgent.toLowerCase()) ) {
               htmlTag.className += ' td-md-is-chrome';
            }

            if ( -1 !== navigator.userAgent.indexOf('Firefox') ) {
                htmlTag.className += ' td-md-is-firefox';
            }

            if ( -1 !== navigator.userAgent.indexOf('Safari') && -1 === navigator.userAgent.indexOf('Chrome') ) {
                htmlTag.className += ' td-md-is-safari';
            }

            if( -1 !== navigator.userAgent.indexOf('IEMobile') ){
                htmlTag.className += ' td-md-is-iemobile';
            }

        })();




        var tdLocalCache = {};

        ( function () {
            "use strict";

            tdLocalCache = {
                data: {},
                remove: function (resource_id) {
                    delete tdLocalCache.data[resource_id];
                },
                exist: function (resource_id) {
                    return tdLocalCache.data.hasOwnProperty(resource_id) && tdLocalCache.data[resource_id] !== null;
                },
                get: function (resource_id) {
                    return tdLocalCache.data[resource_id];
                },
                set: function (resource_id, cachedData) {
                    tdLocalCache.remove(resource_id);
                    tdLocalCache.data[resource_id] = cachedData;
                }
            };
        })();

    
    
var td_viewport_interval_list=[{"limitBottom":767,"sidebarWidth":228},{"limitBottom":1018,"sidebarWidth":300},{"limitBottom":1140,"sidebarWidth":324}];
var td_animation_stack_effect="type0";
var tds_animation_stack=true;
var td_animation_stack_specific_selectors=".entry-thumb, img, .td-lazy-img";
var td_animation_stack_general_selectors=".td-animation-stack img, .td-animation-stack .entry-thumb, .post img, .td-animation-stack .td-lazy-img";
var tds_general_modal_image="yes";
var tdc_is_installed="yes";
var td_ajax_url="https:\/\/telset.id\/wp-admin\/admin-ajax.php?td_theme_name=Newspaper&v=11.4";
var td_get_template_directory_uri="https:\/\/telset.id\/wp-content\/plugins\/td-composer\/legacy\/common";
var tds_snap_menu="smart_snap_always";
var tds_logo_on_sticky="show_header_logo";
var tds_header_style="";
var td_please_wait="Mohon Tunggu\u2026";
var td_email_user_pass_incorrect="Pengguna dan password salah!";
var td_email_user_incorrect="Email atau nama pengguna salah!";
var td_email_incorrect="Email tidak benar!";
var td_user_incorrect="Username incorrect!";
var td_email_user_empty="Email or username empty!";
var td_pass_empty="Pass empty!";
var td_pass_pattern_incorrect="Invalid Pass Pattern!";
var td_retype_pass_incorrect="Retyped Pass incorrect!";
var tds_more_articles_on_post_enable="";
var tds_more_articles_on_post_time_to_wait="";
var tds_more_articles_on_post_pages_distance_from_top=0;
var tds_theme_color_site_wide="#b80000";
var tds_smart_sidebar="enabled";
var tdThemeName="Newspaper";
var td_magnific_popup_translation_tPrev="Sebelumnya (tombol panah kiri)";
var td_magnific_popup_translation_tNext="Berikutnya (tombol panah kanan)";
var td_magnific_popup_translation_tCounter="%curr% dari %total%";
var td_magnific_popup_translation_ajax_tError="Isi dari %url% tidak dapat dimuat.";
var td_magnific_popup_translation_image_tError="Gambar #%curr% tidak dapat dimuat.";
var tdBlockNonce="284553bb7e";
var tdDateNamesI18n={"month_names":["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"],"month_names_short":["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des"],"day_names":["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"],"day_names_short":["Ming","Sen","Sel","Rab","Kam","Jum","Sab"]};
var td_ad_background_click_link="";
var td_ad_background_click_target="";
</script>


<!-- Header style compiled by theme -->

<style>
    

                                    @font-face {
                                      font-family: "Proxima Nova Bold";
                                      src: local("Proxima Nova Bold"), url("https://telset.id/wp-content/uploads/2019/03/fontsfree-net-proxima-nova-bold-webfont.woff") format("woff");
                                      font-display: swap;
                                    }
                                
                                    @font-face {
                                      font-family: "Proxima Nova Reguler";
                                      src: local("Proxima Nova Reguler"), url("https://telset.id/wp-content/uploads/2019/03/FontsFree-Net-ProximaNova-Regular.woff") format("woff");
                                      font-display: swap;
                                    }
                                
.td-header-wrap .black-menu .sf-menu > .current-menu-item > a,
    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > .current-category-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > li > a:hover,
    .td-header-wrap .black-menu .sf-menu > .sfHover > a,
    .sf-menu > .current-menu-item > a:after,
    .sf-menu > .current-menu-ancestor > a:after,
    .sf-menu > .current-category-ancestor > a:after,
    .sf-menu > li:hover > a:after,
    .sf-menu > .sfHover > a:after,
    .header-search-wrap .td-drop-down-search:after,
    .header-search-wrap .td-drop-down-search .btn:hover,
    input[type=submit]:hover,
    .td-read-more a,
    .td-post-category:hover,
    .td_top_authors .td-active .td-author-post-count,
    .td_top_authors .td-active .td-author-comments-count,
    .td_top_authors .td_mod_wrap:hover .td-author-post-count,
    .td_top_authors .td_mod_wrap:hover .td-author-comments-count,
    .td-404-sub-sub-title a:hover,
    .td-search-form-widget .wpb_button:hover,
    .td-rating-bar-wrap div,
    .dropcap,
    .td_wrapper_video_playlist .td_video_controls_playlist_wrapper,
    .wpb_default,
    .wpb_default:hover,
    .td-left-smart-list:hover,
    .td-right-smart-list:hover,
    #bbpress-forums button:hover,
    .bbp_widget_login .button:hover,
    .td-footer-wrapper .td-post-category,
    .td-footer-wrapper .widget_product_search input[type="submit"]:hover,
    .single-product .product .summary .cart .button:hover,
    .td-next-prev-wrap a:hover,
    .td-load-more-wrap a:hover,
    .td-post-small-box a:hover,
    .page-nav .current,
    .page-nav:first-child > div,
    #bbpress-forums .bbp-pagination .current,
    #bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a,
    .td-theme-slider:hover .slide-meta-cat a,
    a.vc_btn-black:hover,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .td-scroll-up,
    .td-smart-list-button:hover,
    .td-weather-information:before,
    .td-weather-week:before,
    .td_block_exchange .td-exchange-header:before,
    .td-pulldown-syle-2 .td-subcat-dropdown ul:after,
    .td_block_template_9 .td-block-title:after,
    .td_block_template_15 .td-block-title:before,
    div.wpforms-container .wpforms-form div.wpforms-submit-container button[type=submit],
    .td-close-video-fixed {
        background-color: #b80000;
    }

    .td_block_template_4 .td-related-title .td-cur-simple-item:before {
        border-color: #b80000 transparent transparent transparent !important;
    }
    
    
    .td_block_template_4 .td-related-title .td-cur-simple-item,
    .td_block_template_3 .td-related-title .td-cur-simple-item,
    .td_block_template_9 .td-related-title:after {
        background-color: #b80000;
    }

    a,
    cite a:hover,
    .td-page-content blockquote p,
    .td-post-content blockquote p,
    .mce-content-body blockquote p,
    .comment-content blockquote p,
    .wpb_text_column blockquote p,
    .td_block_text_with_title blockquote p,
    .td_module_wrap:hover .entry-title a,
    .td-subcat-filter .td-subcat-list a:hover,
    .td-subcat-filter .td-subcat-dropdown a:hover,
    .td_quote_on_blocks,
    .dropcap2,
    .dropcap3,
    .td_top_authors .td-active .td-authors-name a,
    .td_top_authors .td_mod_wrap:hover .td-authors-name a,
    .td-post-next-prev-content a:hover,
    .author-box-wrap .td-author-social a:hover,
    .td-author-name a:hover,
    .td-author-url a:hover,
    .comment-reply-link:hover,
    .logged-in-as a:hover,
    #cancel-comment-reply-link:hover,
    .td-search-query,
    .widget a:hover,
    .td_wp_recentcomments a:hover,
    .archive .widget_archive .current,
    .archive .widget_archive .current a,
    .widget_calendar tfoot a:hover,
    #bbpress-forums li.bbp-header .bbp-reply-content span a:hover,
    #bbpress-forums .bbp-forum-freshness a:hover,
    #bbpress-forums .bbp-topic-freshness a:hover,
    #bbpress-forums .bbp-forums-list li a:hover,
    #bbpress-forums .bbp-forum-title:hover,
    #bbpress-forums .bbp-topic-permalink:hover,
    #bbpress-forums .bbp-topic-started-by a:hover,
    #bbpress-forums .bbp-topic-started-in a:hover,
    #bbpress-forums .bbp-body .super-sticky li.bbp-topic-title .bbp-topic-permalink,
    #bbpress-forums .bbp-body .sticky li.bbp-topic-title .bbp-topic-permalink,
    .widget_display_replies .bbp-author-name,
    .widget_display_topics .bbp-author-name,
    .td-subfooter-menu li a:hover,
    a.vc_btn-black:hover,
    .td-smart-list-dropdown-wrap .td-smart-list-button:hover,
    .td-instagram-user a,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover i,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-link:hover,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-item .td-cur-simple-item,
    .td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more span,
    .td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more i,
    .td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more span,
    .td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more i,
    .td_block_template_2 .td-related-title .td-cur-simple-item,
    .td_block_template_5 .td-related-title .td-cur-simple-item,
    .td_block_template_6 .td-related-title .td-cur-simple-item,
    .td_block_template_7 .td-related-title .td-cur-simple-item,
    .td_block_template_8 .td-related-title .td-cur-simple-item,
    .td_block_template_9 .td-related-title .td-cur-simple-item,
    .td_block_template_10 .td-related-title .td-cur-simple-item,
    .td_block_template_11 .td-related-title .td-cur-simple-item,
    .td_block_template_12 .td-related-title .td-cur-simple-item,
    .td_block_template_13 .td-related-title .td-cur-simple-item,
    .td_block_template_14 .td-related-title .td-cur-simple-item,
    .td_block_template_15 .td-related-title .td-cur-simple-item,
    .td_block_template_16 .td-related-title .td-cur-simple-item,
    .td_block_template_17 .td-related-title .td-cur-simple-item,
    .td-theme-wrap .sf-menu ul .td-menu-item > a:hover,
    .td-theme-wrap .sf-menu ul .sfHover > a,
    .td-theme-wrap .sf-menu ul .current-menu-ancestor > a,
    .td-theme-wrap .sf-menu ul .current-category-ancestor > a,
    .td-theme-wrap .sf-menu ul .current-menu-item > a,
    .td_outlined_btn,
    .td_block_categories_tags .td-ct-item:hover {
        color: #b80000;
    }

    a.vc_btn-black.vc_btn_square_outlined:hover,
    a.vc_btn-black.vc_btn_outlined:hover {
        color: #b80000 !important;
    }

    .td-next-prev-wrap a:hover,
    .td-load-more-wrap a:hover,
    .td-post-small-box a:hover,
    .page-nav .current,
    .page-nav:first-child > div,
    #bbpress-forums .bbp-pagination .current,
    .post .td_quote_box,
    .page .td_quote_box,
    a.vc_btn-black:hover,
    .td_block_template_5 .td-block-title > *,
    .td_outlined_btn {
        border-color: #b80000;
    }

    .td_wrapper_video_playlist .td_video_currently_playing:after {
        border-color: #b80000 !important;
    }

    .header-search-wrap .td-drop-down-search:before {
        border-color: transparent transparent #b80000 transparent;
    }

    .block-title > span,
    .block-title > a,
    .block-title > label,
    .widgettitle,
    .widgettitle:after,
    body .td-trending-now-title,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
    .td_block_template_1 .td-related-title .td-cur-simple-item,
    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more, 
    .td_3D_btn,
    .td_shadow_btn,
    .td_default_btn,
    .td_round_btn, 
    .td_outlined_btn:hover {
    	background-color: #b80000;
    }
    .block-title,
    .td_block_template_1 .td-related-title,
    .wpb_tabs .wpb_tabs_nav,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container {
        border-color: #b80000;
    }
    .td_block_wrap .td-subcat-item a.td-cur-simple-item {
	    color: #b80000;
	}


    
    .td-grid-style-4 .entry-title
    {
        background-color: rgba(184, 0, 0, 0.7);
    }


    
    .block-title > span,
    .block-title > span > a,
    .block-title > a,
    .block-title > label,
    .widgettitle,
    .widgettitle:after,
    body .td-trending-now-title,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
    .td_block_template_1 .td-related-title .td-cur-simple-item,
    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more,
    .td-weather-information:before,
    .td-weather-week:before,
    .td_block_exchange .td-exchange-header:before,
    .td-theme-wrap .td_block_template_3 .td-block-title > *,
    .td-theme-wrap .td_block_template_4 .td-block-title > *,
    .td-theme-wrap .td_block_template_7 .td-block-title > *,
    .td-theme-wrap .td_block_template_9 .td-block-title:after,
    .td-theme-wrap .td_block_template_10 .td-block-title::before,
    .td-theme-wrap .td_block_template_11 .td-block-title::before,
    .td-theme-wrap .td_block_template_11 .td-block-title::after,
    .td-theme-wrap .td_block_template_14 .td-block-title,
    .td-theme-wrap .td_block_template_15 .td-block-title:before,
    .td-theme-wrap .td_block_template_17 .td-block-title:before {
        background-color: #222222;
    }

    .block-title,
    .td_block_template_1 .td-related-title,
    .wpb_tabs .wpb_tabs_nav,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container,
    .td-theme-wrap .td_block_template_5 .td-block-title > *,
    .td-theme-wrap .td_block_template_17 .td-block-title,
    .td-theme-wrap .td_block_template_17 .td-block-title::before {
        border-color: #222222;
    }

    .td-theme-wrap .td_block_template_4 .td-block-title > *:before,
    .td-theme-wrap .td_block_template_17 .td-block-title::after {
        border-color: #222222 transparent transparent transparent;
    }
    
    .td-theme-wrap .td_block_template_4 .td-related-title .td-cur-simple-item:before {
        border-color: #222222 transparent transparent transparent !important;
    }

    
    ul.sf-menu > .menu-item > a {
        font-family:Proxima Nova Bold;
	
    }
    
	#td-mobile-nav,
	#td-mobile-nav .wpb_button,
	.td-search-wrap-mob {
		font-family:Proxima Nova Bold;
	
	}


	
    .td-page-title,
    .td-category-title-holder .td-page-title {
    	font-family:Proxima Nova Bold;
	
    }
    
    .td-page-content p,
    .td-page-content li,
    .td-page-content .td_block_text_with_title,
    .wpb_text_column p {
    	font-family:Proxima Nova Reguler;
	
    }
    
    .td-page-content h1,
    .wpb_text_column h1 {
    	font-family:Proxima Nova Bold;
	
    }
    
    .td-page-content h2,
    .wpb_text_column h2 {
    	font-family:Proxima Nova Bold;
	
    }
    
    .td-page-content h3,
    .wpb_text_column h3 {
    	font-family:Proxima Nova Bold;
	
    }
    
    .td-page-content h4,
    .wpb_text_column h4 {
    	font-family:Proxima Nova Bold;
	
    }
    
    .td-page-content h5,
    .wpb_text_column h5 {
    	font-family:Proxima Nova Bold;
	
    }
    
    .td-page-content h6,
    .wpb_text_column h6 {
    	font-family:Proxima Nova Bold;
	
    }



	
    body, p {
    	font-family:Proxima Nova Reguler;
	font-size:18px;
	line-height:26px;
	font-weight:normal;
	
    }




    
	.white-popup-block,
	.white-popup-block .wpb_button {
		font-family:Proxima Nova Reguler;
	
	}
</style>

<script type="rocketlazyloadscript" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4991238281640005"
     crossorigin="anonymous"></script>

<!-- Start Alexa Certify Javascript -->
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
_atrk_opts = { atrk_acct:"tAzlj1aAkN00yY", domain:"telset.id",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=tAzlj1aAkN00yY" style="display:none" height="1" width="1" alt="telset" /></noscript>
<!-- End Alexa Certify Javascript --> 

<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="rocketlazyloadscript" async src="https://www.googletagmanager.com/gtag/js?id=UA-29159653-1"></script>
<script type="rocketlazyloadscript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-29159653-1');
</script>

<!-- Start GPT Tag -->
<script type="rocketlazyloadscript" data-minify="1" async src='https://telset.id/wp-content/cache/min/1/tag/js/gpt.js?ver=1641193600'></script>
<script type="rocketlazyloadscript">
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {

    googletag.defineSlot('/129702927/Telset', [[728,90]], 'div-gpt-ad-leaderboard')
             .setTargeting('pos', ['Leaderboard'])
             .addService(googletag.pubads());
    googletag.defineSlot('/129702927/Telset', [[300,600],[160,600]], 'div-gpt-ad-skyscraper')
             .setTargeting('pos', ['Skyscraper'])
             .addService(googletag.pubads());
    googletag.defineSlot('/129702927/Telset', [[336,280],[300,250]], 'div-gpt-ad-mr1')
             .setTargeting('pos', ['MR1'])
             .addService(googletag.pubads());
    googletag.defineSlot('/129702927/Telset', [[336,280],[300,250]], 'div-gpt-ad-mr2')
             .setTargeting('pos', ['MR2'])
             .addService(googletag.pubads());
    googletag.defineSlot('/129702927/Telset', [[729,90]], 'div-gpt-ad-sticky')
             .setTargeting('pos', ['Sticky'])
             .addService(googletag.pubads());
    googletag.defineOutOfPageSlot('/129702927/Telset', 'div-gpt-ad-oop')
             .setTargeting('pos', ['OOP'])
             .addService(googletag.pubads());
    googletag.defineOutOfPageSlot('/160553881/Telset', 'div-gpt-ad-oop1')
             .setTargeting('pos', ['OOP'])
             .addService(googletag.pubads());

    googletag.pubads().enableSingleRequest();
    googletag.pubads().collapseEmptyDivs();
    googletag.pubads().setCentering(true);
    googletag.enableServices();
  });
</script>
<!-- End GPT Tag -->




<link rel="icon" href="https://telset.id/wp-content/uploads/2018/10/cropped-TELSET-NEW-FAV-ICON-32x32.png" sizes="32x32" />
<link rel="icon" href="https://telset.id/wp-content/uploads/2018/10/cropped-TELSET-NEW-FAV-ICON-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://telset.id/wp-content/uploads/2018/10/cropped-TELSET-NEW-FAV-ICON-180x180.png" />
<meta name="msapplication-TileImage" content="https://telset.id/wp-content/uploads/2018/10/cropped-TELSET-NEW-FAV-ICON-270x270.png" />

<!-- Button style compiled by theme -->

<style>
    .tdm_block_column_content:hover .tdm-col-content-title-url .tdm-title,
                .tds-button2 .tdm-btn-text,
                .tds-button2 i,
                .tds-button5:hover .tdm-btn-text,
                .tds-button5:hover i,
                .tds-button6 .tdm-btn-text,
                .tds-button6 i,
                .tdm_block_list .tdm-list-item i,
                .tdm_block_pricing .tdm-pricing-feature i,
                body .tdm-social-item i {
                    color: #b80000;
                }
                .tds-button1,
                .tds-button6:after,
                .tds-title2 .tdm-title-line:after,
                .tds-title3 .tdm-title-line:after,
                .tdm_block_pricing.tdm-pricing-featured:before,
                .tdm_block_pricing.tds_pricing2_block.tdm-pricing-featured .tdm-pricing-header,
                .tds-progress-bar1 .tdm-progress-bar:after,
                .tds-progress-bar2 .tdm-progress-bar:after,
                .tds-social3 .tdm-social-item {
                    background-color: #b80000;
                }
                .tds-button2:before,
                .tds-button6:before,
                .tds-progress-bar3 .tdm-progress-bar:after {
                  border-color: #b80000;
                }
                .tdm-btn-style1 {
					background-color: #b80000;
				}
				.tdm-btn-style2:before {
				    border-color: #b80000;
				}
				.tdm-btn-style2 {
				    color: #b80000;
				}
				.tdm-btn-style3 {
				    -webkit-box-shadow: 0 2px 16px #b80000;
                    -moz-box-shadow: 0 2px 16px #b80000;
                    box-shadow: 0 2px 16px #b80000;
				}
				.tdm-btn-style3:hover {
				    -webkit-box-shadow: 0 4px 26px #b80000;
                    -moz-box-shadow: 0 4px 26px #b80000;
                    box-shadow: 0 4px 26px #b80000;
				}
				
			
				
				.tdm-title-xxsm {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm-title-xsm {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm-title-sm {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm-title-md {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm-title-bg {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tds-title3 .tdm-title-sub,
				.tds-title-over-image1 .tdm-title-sub {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm_block_client .tdm-client-name {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm_block_food_menu .tdm-title {
				    font-family:Proxima Nova Bold;
	
				}
				
				.td_block_fancy_text .tdm-fancy-title {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm-counter-wrap .tdm-counter-title {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm_block_progress_bar .tdm-progress-wrap .tdm-progress-title {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm_block_team_member .tdm-title {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm_block_testimonial .tdm-testimonial-name {
				    font-family:Proxima Nova Bold;
	
				}
				
				
				.tdm_block_call_to_action .tdm-descr {
				    font-family:Proxima Nova Reguler;
	
				}
				
				.tdm_block_column_content .tdm-descr {
				    font-family:Proxima Nova Reguler;
	
				}
				
				.tdm_block_fancy_text_image .tdm-descr {
				    font-family:Proxima Nova Reguler;
	
				}
				
				.tdm_block_food_menu .tdm-descr {
				    font-family:Proxima Nova Reguler;
	
				}
				
				.tdm_block_hero .tdm-descr {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm_block_icon_box .tdm-descr {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm_block_image_info_box .tdm-image-description p {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm_block.tdm_block_inline_text .tdm-descr {
				    font-family:Proxima Nova Reguler;
	
				}
				
				.tdm_block_pricing .tdm-descr {
				    font-family:Proxima Nova Reguler;
	
				}
				
				.tdm_block_team_member .tdm-member-info .tdm-descr {
				    font-family:Proxima Nova Reguler;
	
				}
				
				.tdm_block_testimonial .tdm-testimonial-descr {
				    font-family:Proxima Nova Reguler;
	
				}
				
				.tdm_block_text_image .tdm-descr {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm_block_list .tdm-list-items {
				    font-family:Proxima Nova Bold;
	
				}
				
				
				.tdm-btn-sm {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm-btn-md {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm-btn-lg {
				    font-family:Proxima Nova Bold;
	
				}
				
				.tdm-btn-xlg {
				    font-family:Proxima Nova Bold;
	
				}
</style>

	<style id="tdw-css-placeholder"></style><noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript><script type="rocketlazyloadscript">
/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
(function(w){"use strict";if(!w.loadCSS){w.loadCSS=function(){}}
var rp=loadCSS.relpreload={};rp.support=(function(){var ret;try{ret=w.document.createElement("link").relList.supports("preload")}catch(e){ret=!1}
return function(){return ret}})();rp.bindMediaToggle=function(link){var finalMedia=link.media||"all";function enableStylesheet(){link.media=finalMedia}
if(link.addEventListener){link.addEventListener("load",enableStylesheet)}else if(link.attachEvent){link.attachEvent("onload",enableStylesheet)}
setTimeout(function(){link.rel="stylesheet";link.media="only x"});setTimeout(enableStylesheet,3000)};rp.poly=function(){if(rp.support()){return}
var links=w.document.getElementsByTagName("link");for(var i=0;i<links.length;i++){var link=links[i];if(link.rel==="preload"&&link.getAttribute("as")==="style"&&!link.getAttribute("data-loadcss")){link.setAttribute("data-loadcss",!0);rp.bindMediaToggle(link)}}};if(!rp.support()){rp.poly();var run=w.setInterval(rp.poly,500);if(w.addEventListener){w.addEventListener("load",function(){rp.poly();w.clearInterval(run)})}else if(w.attachEvent){w.attachEvent("onload",function(){rp.poly();w.clearInterval(run)})}}
if(typeof exports!=="undefined"){exports.loadCSS=loadCSS}
else{w.loadCSS=loadCSS}}(typeof global!=="undefined"?global:this))
</script></head>

<body class="post-template-default single single-post postid-189614 single-format-standard Newspaper cara-tambah-followers-instagram-gratis global-block-template-8 tdb_template_362713 tdb-template  tdc-header-template  tdc-footer-template td-animation-stack-type0 td-full-layout" itemscope="itemscope" itemtype="https://schema.org/WebPage">

            <div class="td-scroll-up  td-hide-scroll-up-on-mob" style="display:none;"><i class="td-icon-menu-up"></i></div>
    
    <div class="td-menu-background"></div>
<div id="td-mobile-nav">
    <div class="td-mobile-container">
        <!-- mobile menu top section -->
        <div class="td-menu-socials-wrap">
            <!-- socials -->
            <div class="td-menu-socials">
                
        <span class="td-social-icon-wrap">
            <a target="_blank" rel="nofollow external noopener noreferrer" href="https://www.facebook.com/majalahtelset/" title="Facebook" data-wpel-link="external">
                <i class="td-icon-font td-icon-facebook"></i>
            </a>
        </span>
        <span class="td-social-icon-wrap">
            <a target="_blank" rel="nofollow external noopener noreferrer" href="https://www.instagram.com/telset.id/" title="Instagram" data-wpel-link="external">
                <i class="td-icon-font td-icon-instagram"></i>
            </a>
        </span>
        <span class="td-social-icon-wrap">
            <a target="_self" rel="follow" href="https://telset.id/feed/" title="RSS" data-wpel-link="internal">
                <i class="td-icon-font td-icon-rss"></i>
            </a>
        </span>
        <span class="td-social-icon-wrap">
            <a target="_blank" rel="nofollow external noopener noreferrer" href="https://twitter.com/telset_id" title="Twitter" data-wpel-link="external">
                <i class="td-icon-font td-icon-twitter"></i>
            </a>
        </span>
        <span class="td-social-icon-wrap">
            <a target="_blank" rel="nofollow external noopener noreferrer" href="https://www.youtube.com/channel/UCrV4P4azyxL0h3F7gJpId1Q" title="Youtube" data-wpel-link="external">
                <i class="td-icon-font td-icon-youtube"></i>
            </a>
        </span>            </div>
            <!-- close button -->
            <div class="td-mobile-close">
                <a href="#" aria-label="Close"><i class="td-icon-close-mobile"></i></a>
            </div>
        </div>

        <!-- login section -->
        
        <!-- menu section -->
        <div class="td-mobile-content">
            <div class="menu-main-container"><ul id="menu-main" class="td-mobile-main-menu"><li id="menu-item-330125" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-first menu-item-330125"><a href="https://telset.id" data-wpel-link="internal" target="_self" rel="follow">HOME</a></li>
<li id="menu-item-526" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-526"><a href="https://telset.id/news/" data-wpel-link="internal" target="_self" rel="follow">NEWS<i class="td-icon-menu-right td-element-after"></i></a>
<ul class="sub-menu">
	<li id="menu-item-206400" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-206400"><a href="https://telset.id/news/telko/" data-wpel-link="internal" target="_self" rel="follow">TELKO</a></li>
	<li id="menu-item-206401" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-206401"><a href="https://telset.id/news/in-depth/" data-wpel-link="internal" target="_self" rel="follow">IN-DEPTH</a></li>
	<li id="menu-item-316633" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-316633"><a href="https://telset.id/news/edutech/" data-wpel-link="internal" target="_self" rel="follow">EDUTECH</a></li>
	<li id="menu-item-316634" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-316634"><a href="https://telset.id/news/fintech/" data-wpel-link="internal" target="_self" rel="follow">FINTECH</a></li>
	<li id="menu-item-312682" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-312682"><a href="https://telset.id/news/science-tech/" data-wpel-link="internal" target="_self" rel="follow">SCIENCE-TECH</a></li>
	<li id="menu-item-316635" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-316635"><a href="https://telset.id/news/internet/" data-wpel-link="internal" target="_self" rel="follow">INTERNET</a></li>
</ul>
</li>
<li id="menu-item-225086" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-225086"><a href="https://telset.id/ngehits/" data-wpel-link="internal" target="_self" rel="follow">NGEHITS</a></li>
<li id="menu-item-206403" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-206403"><a href="https://telset.id/gizmo/" data-wpel-link="internal" target="_self" rel="follow">GIZMO</a></li>
<li id="menu-item-247582" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-247582"><a href="https://telset.id/review/" data-wpel-link="internal" target="_self" rel="follow">REVIEW</a></li>
<li id="menu-item-206404" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-206404"><a href="https://telset.id/apps/" data-wpel-link="internal" target="_self" rel="follow">APPS</a></li>
<li id="menu-item-248711" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-248711"><a href="https://telset.id/games/" data-wpel-link="internal" target="_self" rel="follow">GAMES</a></li>
<li id="menu-item-513" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-513"><a href="https://telset.id/how-to/" data-wpel-link="internal" target="_self" rel="follow">HOW TO</a></li>
<li id="menu-item-294558" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-294558"><a href="https://telset.id/video/" data-wpel-link="internal" target="_self" rel="follow">TELSET TV<i class="td-icon-menu-right td-element-after"></i></a>
<ul class="sub-menu">
	<li id="menu-item-294559" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-294559"><a href="https://telset.id/video/event/" data-wpel-link="internal" target="_self" rel="follow">Event</a></li>
	<li id="menu-item-294560" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-294560"><a href="https://telset.id/video/giveaway/" data-wpel-link="internal" target="_self" rel="follow">Giveaway</a></li>
	<li id="menu-item-294561" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-294561"><a href="https://telset.id/video/hands-on/" data-wpel-link="internal" target="_self" rel="follow">Hands On</a></li>
	<li id="menu-item-294562" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-294562"><a href="https://telset.id/video/ngopi-sob/" data-wpel-link="internal" target="_self" rel="follow">Ngopi Sob</a></li>
	<li id="menu-item-294563" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-294563"><a href="https://telset.id/video/techno-update/" data-wpel-link="internal" target="_self" rel="follow">Techno Update</a></li>
	<li id="menu-item-294564" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-294564"><a href="https://telset.id/video/tutorial/" data-wpel-link="internal" target="_self" rel="follow">Tutorial</a></li>
	<li id="menu-item-294565" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-294565"><a href="https://telset.id/video/unboxing/" data-wpel-link="internal" target="_self" rel="follow">Unboxing</a></li>
	<li id="menu-item-295119" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-295119"><a href="https://telset.id/video/video-review/" data-wpel-link="internal" target="_self" rel="follow">Video Review</a></li>
</ul>
</li>
<li id="menu-item-378295" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-378295"><a href="https://telset.id/harga-spesifikasi/" data-wpel-link="internal" target="_self" rel="follow">HARGA DAN SPESIFIKASI<i class="td-icon-menu-right td-element-after"></i></a>
<ul class="sub-menu">
	<li id="menu-item-378296" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378296"><a href="https://telset.id/harga-spesifikasi/apple/" data-wpel-link="internal" target="_self" rel="follow">Apple</a></li>
	<li id="menu-item-378297" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378297"><a href="https://telset.id/harga-spesifikasi/asus/" data-wpel-link="internal" target="_self" rel="follow">Asus</a></li>
	<li id="menu-item-378298" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378298"><a href="https://telset.id/harga-spesifikasi/google/" data-wpel-link="internal" target="_self" rel="follow">Google</a></li>
	<li id="menu-item-378299" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378299"><a href="https://telset.id/harga-spesifikasi/honor/" data-wpel-link="internal" target="_self" rel="follow">Honor</a></li>
	<li id="menu-item-378300" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378300"><a href="https://telset.id/harga-spesifikasi/huawei/" data-wpel-link="internal" target="_self" rel="follow">Huawei</a></li>
	<li id="menu-item-378301" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378301"><a href="https://telset.id/harga-spesifikasi/infinix/" data-wpel-link="internal" target="_self" rel="follow">Infinix</a></li>
	<li id="menu-item-378302" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378302"><a href="https://telset.id/harga-spesifikasi/nokia/" data-wpel-link="internal" target="_self" rel="follow">Nokia</a></li>
	<li id="menu-item-378303" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378303"><a href="https://telset.id/harga-spesifikasi/oneplus/" data-wpel-link="internal" target="_self" rel="follow">Oneplus</a></li>
	<li id="menu-item-378304" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378304"><a href="https://telset.id/harga-spesifikasi/oppo/" data-wpel-link="internal" target="_self" rel="follow">Oppo</a></li>
	<li id="menu-item-378305" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378305"><a href="https://telset.id/harga-spesifikasi/realme/" data-wpel-link="internal" target="_self" rel="follow">Realme</a></li>
	<li id="menu-item-378306" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378306"><a href="https://telset.id/harga-spesifikasi/samsung/" data-wpel-link="internal" target="_self" rel="follow">Samsung</a></li>
	<li id="menu-item-378307" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378307"><a href="https://telset.id/harga-spesifikasi/tecno/" data-wpel-link="internal" target="_self" rel="follow">Tecno</a></li>
	<li id="menu-item-378308" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378308"><a href="https://telset.id/harga-spesifikasi/vivo/" data-wpel-link="internal" target="_self" rel="follow">Vivo</a></li>
	<li id="menu-item-378322" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378322"><a href="https://telset.id/harga-spesifikasi/xiaomi/" data-wpel-link="internal" target="_self" rel="follow">Xiaomi</a></li>
</ul>
</li>
</ul></div>        </div>
    </div>

    <!-- register/login section -->
    </div>    <div class="td-search-background"></div>
<div class="td-search-wrap-mob">
	<div class="td-drop-down-search">
		<form method="get" class="td-search-form" action="https://telset.id/">
			<!-- close button -->
			<div class="td-search-close">
				<a href="#"><i class="td-icon-close-mobile"></i></a>
			</div>
			<div role="search" class="td-search-input">
				<span>pencarian</span>
				<input id="td-header-search-mob" type="text" value="" name="s" autocomplete="off" />
			</div>
		</form>
		<div id="td-aj-search-mob" class="td-ajax-search-flex"></div>
	</div>
</div>
    <div id="td-outer-wrap" class="td-theme-wrap">

                    <div class="td-header-template-wrap" style="position: relative">
                                <div class="td-header-mobile-wrap ">
                    <div id="tdi_1" class="tdc-zone"><div class="tdc_zone tdi_2  wpb_row td-pb-row tdc-element-style"  >
<style scoped>

/* custom css */
.tdi_2{
                    min-height: 0;
                }.tdi_2 > .td-element-style:after{
                    content: '' !important;
                    width: 100% !important;
                    height: 100% !important;
                    position: absolute !important;
                    top: 0 !important;
                    left: 0 !important;
                    z-index: 0 !important;
                    display: block !important;
                    background-color: #ffffff !important;
                }.td-header-mobile-wrap{
                    position: relative;
                    width: 100%;
                }

/* phone */
@media (max-width: 767px){
.tdi_2:before{
                    content: '';
                    display: block;
                    width: 100vw;
                    height: 100%;
                    position: absolute;
                    left: 50%;
                    transform: translateX(-50%);
                    box-shadow: none;
                    z-index: 20;
                    pointer-events: none;
                }@media (max-width: 767px) {
                    .tdi_2:before {
                        width: 100%;
                    }
                }
}
</style>
<div class="tdi_1_rand_style td-element-style" ></div><div id="tdi_3" class="tdc-row"><div class="vc_row tdi_4  wpb_row td-pb-row tdc-element-style" >
<style scoped>

/* custom css */
.tdi_4,
                .tdi_4 .tdc-columns{
                    min-height: 0;
                }.tdi_4 > .td-element-style:after{
                    content: '' !important;
                    width: 100% !important;
                    height: 100% !important;
                    position: absolute !important;
                    top: 0 !important;
                    left: 0 !important;
                    z-index: 0 !important;
                    display: block !important;
                    background: -webkit-linear-gradient(-90deg,#ffffff,#d5d5d5);background: linear-gradient(-90deg,#ffffff,#d5d5d5);
                }.tdi_4,
				.tdi_4 .tdc-columns{
				    display: block;
				}.tdi_4 .tdc-columns{
				    width: 100%;
				}

/* phone */
@media (max-width: 767px){
@media (min-width: 768px) {
	                .tdi_4 {
	                    margin-left: -0px;
	                    margin-right: -0px;
	                }
	                .tdi_4 .tdc-row-video-background-error,
	                .tdi_4 .vc_column {
	                    padding-left: 0px;
	                    padding-right: 0px;
	                }
                }
}
/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_4{
position:relative;
}
}

</style>
<div class="tdi_3_rand_style td-element-style" ><div class="td-element-style-before"><style>
/* phone */
@media (max-width: 767px)
{
.tdi_3_rand_style > .td-element-style-before{
content:'' !important;
width:100% !important;
height:100% !important;
position:absolute !important;
top:0 !important;
left:0 !important;
display:block !important;
z-index:0 !important;
background-image:url("https://telset.id/wp-content/uploads/2021/04/20200727653d3a71-360d-49cb-3772-a7b3584fa3df.jpg") !important;
opacity:0.2 !important;
background-size:cover !important;
background-position:center top !important;
}
}
</style></div><style>
/* phone */
@media (max-width: 767px)
{
.tdi_3_rand_style{
background-color:#232d35 !important;
}
}
 </style></div><div class="vc_column tdi_6  wpb_column vc_column_container tdc-column td-pb-span4">
<style scoped>

/* custom css */
.tdi_6{
                    vertical-align: baseline;
                }.tdi_6 > .wpb_wrapper,
				.tdi_6 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_6 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_6 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_6 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}

/* phone */
@media (max-width: 767px){
.tdi_6{
                    vertical-align: middle;
                }
}
/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_6{
width:20% !important;
display:inline-block !important;
}
}

</style><div class="wpb_wrapper"><div class="td_block_wrap tdb_mobile_menu tdi_7 td-pb-border-top td_block_template_8 tdb-header-align"  data-td-block-uid="tdi_7" >
<style>

/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_7{
margin-left:-16px !important;
}
}

</style>
<style>
/* custom css */
.tdb-header-align{
                  vertical-align: middle;
                }.tdb_mobile_menu{
                  margin-bottom: 0;
                  clear: none;
                }.tdb_mobile_menu a{
                  display: inline-block !important;
                  position: relative;
                  text-align: center;
                  color: #4db2ec;
                }.tdb_mobile_menu a > span{
                  display: flex;
                  align-items: center;
                  justify-content: center;
                }.tdb_mobile_menu svg{
                  height: auto;
                }.tdb_mobile_menu svg,
                .tdb_mobile_menu svg *{
                  fill: #4db2ec;
                }#tdc-live-iframe .tdb_mobile_menu a{
                  pointer-events: none;
                }.tdi_7{
                    display: inline-block;
                }.tdi_7 .tdb-mobile-menu-button i{
                    font-size: 22px;
                
                    width: 55px;
					height: 55px;
					line-height:  55px;
                }.tdi_7 .tdb-mobile-menu-button svg{
                    width: 22px;
                }.tdi_7 .tdb-mobile-menu-button .tdb-mobile-menu-icon-svg{
                    width: 55px;
					height: 55px;
                }.tdi_7 .tdb-mobile-menu-button{
                    color: #ffffff;
                }.tdi_7 .tdb-mobile-menu-button svg,
                .tdi_7 .tdb-mobile-menu-button svg *{
                    fill: #ffffff;
                }

/* phone */
@media (max-width: 767px){
.tdi_7 .tdb-mobile-menu-button i{
                    font-size: 27px;
                
                    width: 54px;
					height: 54px;
					line-height:  54px;
                }.tdi_7 .tdb-mobile-menu-button svg{
                    width: 27px;
                }.tdi_7 .tdb-mobile-menu-button .tdb-mobile-menu-icon-svg{
                    width: 54px;
					height: 54px;
                }
}
</style><div class="tdb-block-inner td-fix-index"><a class="tdb-mobile-menu-button" aria-label="menu-button" href="#"><span class="tdb-mobile-menu-icon tdb-mobile-menu-icon-svg"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path d="M903.864 490.013h-783.749c-17.172 0-31.109 13.937-31.109 31.109 0 17.234 13.937 31.15 31.109 31.15h783.739c17.213 0 31.13-13.916 31.13-31.15 0.010-17.162-13.916-31.109-31.119-31.109zM903.864 226.835h-783.749c-17.172 0-31.109 13.916-31.109 31.16 0 17.213 13.937 31.109 31.109 31.109h783.739c17.213 0 31.13-13.896 31.13-31.109 0.010-17.234-13.916-31.16-31.119-31.16zM903.864 753.181h-783.749c-17.172 0-31.109 13.916-31.109 31.099 0 17.244 13.937 31.16 31.109 31.16h783.739c17.213 0 31.13-13.916 31.13-31.16 0.010-17.172-13.916-31.099-31.119-31.099z"></path></svg></span></a></div></div> <!-- ./block --></div></div><div class="vc_column tdi_9  wpb_column vc_column_container tdc-column td-pb-span4">
<style scoped>

/* custom css */
.tdi_9{
                    vertical-align: baseline;
                }.tdi_9 > .wpb_wrapper,
				.tdi_9 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_9 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_9 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_9 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}

/* phone */
@media (max-width: 767px){
.tdi_9{
                    vertical-align: middle;
                }
}
/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_9{
width:60% !important;
display:inline-block !important;
}
}

</style><div class="wpb_wrapper"><div class="td_block_wrap tdb_header_logo tdi_10 td-pb-border-top td_block_template_8 tdb-header-align"  data-td-block-uid="tdi_10" >
<style>
/* custom css */
.tdb_header_logo{
                  margin-bottom: 0;
                  clear: none;
                }.tdb_header_logo .tdb-logo-a,
                .tdb_header_logo h1{
                  display: flex;
                  pointer-events: auto;
                  align-items: flex-start;
                }.tdb_header_logo h1{
                  margin: 0;
                  line-height: 0;
                }.tdb_header_logo .tdb-logo-img-wrap img{
                  display: block;
                }.tdb_header_logo .tdb-logo-svg-wrap + .tdb-logo-img-wrap{
                  display: none;
                }.tdb_header_logo .tdb-logo-svg-wrap svg{
                  width: 50px;
                  display: block;
                }.tdb_header_logo .tdb-logo-text-wrap{
                  display: flex;
                }.tdb_header_logo .tdb-logo-text-title,
                .tdb_header_logo .tdb-logo-text-tagline{
                  -webkit-transition: all 0.2s ease;
                  transition: all 0.2s ease;
                }.tdb_header_logo .tdb-logo-text-title{
                  background-size: cover;
                  background-position: center center;
                  font-size: 75px;
                  font-family: serif;
                  line-height: 1.1;
                  color: #222;
                  white-space: nowrap;
                }.tdb_header_logo .tdb-logo-text-tagline{
                  margin-top: 2px;
                  font-size: 12px;
                  font-family: serif;
                  letter-spacing: 1.8px;
                  line-height: 1;
                  color: #767676;
                }.tdb_header_logo .tdb-logo-icon{
                  position: relative;
                  font-size: 46px;
                  color: #000;
                }.tdb_header_logo .tdb-logo-icon-svg{
                  line-height: 0;
                }.tdb_header_logo .tdb-logo-icon-svg svg{
                  width: 46px;
                  height: auto;
                }.tdb_header_logo .tdb-logo-icon-svg svg,
                .tdb_header_logo .tdb-logo-icon-svg svg *{
                  fill: #000;
                }.tdi_10 .tdb-logo-a,
                .tdi_10 h1{
                   align-items: flex-start;
                
                    justify-content: center;
                }.tdi_10 .tdb-logo-svg-wrap{
                    display: block;
                }.tdi_10 .tdb-logo-svg-wrap + .tdb-logo-img-wrap{
                    display: none;
                }.tdi_10 .tdb-logo-img-wrap{
                    display: block;
                }.tdi_10 .tdb-logo-text-tagline{
                    margin-top: 2px;
                    margin-left: 0;
                
                    display: none;
                }.tdi_10 .tdb-logo-text-title{
                    display: none;
                }.tdi_10 .tdb-logo-text-wrap{
                    flex-direction: column;
                
                    align-items: flex-start;
                }.tdi_10 .tdb-logo-icon{
                    top: 0px;
                
                    display: block;
                }@media (max-width: 767px) {
                  .tdb_header_logo .tdb-logo-text-title {
                    font-size: 36px;
                  }
                }@media (max-width: 767px) {
                  .tdb_header_logo .tdb-logo-text-tagline {
                    font-size: 11px;
                  }
                }

/* phone */
@media (max-width: 767px){
.tdi_10 .tdb-logo-img{
                    max-width: 160px;
                }.tdi_10 .tdb-logo-text-title{
                    font-family:Proxima Nova Bold !important;;
                }.tdi_10 .tdb-logo-text-tagline{
                    font-family:Proxima Nova Reguler !important;;
                }
}
</style><div class="tdb-block-inner td-fix-index"><a class="tdb-logo-a" href="https://telset.id/" data-wpel-link="internal" target="_self" rel="follow"><span class="tdb-logo-img-wrap"><img class="tdb-logo-img td-retina-data" data-retina="https://telset.id/wp-content/uploads/2021/12/logo-techtival-retina.png" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20272%2090'%3E%3C/svg%3E" alt="Logo"  title=""  width="272" height="90" data-lazy-src="https://telset.id/wp-content/uploads/2021/12/logo-techtival.png" /><noscript><img class="tdb-logo-img td-retina-data" data-retina="https://telset.id/wp-content/uploads/2021/12/logo-techtival-retina.png" src="https://telset.id/wp-content/uploads/2021/12/logo-techtival.png" alt="Logo"  title=""  width="272" height="90" /></noscript></span></a></div></div> <!-- ./block --></div></div><div class="vc_column tdi_12  wpb_column vc_column_container tdc-column td-pb-span4">
<style scoped>

/* custom css */
.tdi_12{
                    vertical-align: baseline;
                }.tdi_12 > .wpb_wrapper,
				.tdi_12 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_12 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_12 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_12 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}

/* phone */
@media (max-width: 767px){
.tdi_12{
                    vertical-align: middle;
                }
}
/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_12{
width:20% !important;
display:inline-block !important;
}
}

</style><div class="wpb_wrapper"><div class="td_block_wrap tdb_mobile_search tdi_13 td-pb-border-top td_block_template_8 tdb-header-align"  data-td-block-uid="tdi_13" >
<style>

/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_13{
margin-right:-18px !important;
margin-bottom:0px !important;
}
}

</style>
<style>
/* custom css */
.tdb_mobile_search{
                  margin-bottom: 0;
                  clear: none;
                }.tdb_mobile_search a{
                  display: inline-block !important;
                  position: relative;
                  text-align: center;
                  color: #4db2ec;
                }.tdb_mobile_search a > span{
                  display: flex;
                  align-items: center;
                  justify-content: center;
                }.tdb_mobile_search svg{
                  height: auto;
                }.tdb_mobile_search svg,
                .tdb_mobile_search svg *{
                  fill: #4db2ec;
                }#tdc-live-iframe .tdb_mobile_search a{
                  pointer-events: none;
                }.tdi_13{
                    display: inline-block;
                
                    float: right;
                    clear: none;
                }.tdi_13 .tdb-header-search-button-mob i{
                    font-size: 22px;
                
                    width: 55px;
					height: 55px;
					line-height:  55px;
                }.tdi_13 .tdb-header-search-button-mob svg{
                    width: 22px;
                }.tdi_13 .tdb-header-search-button-mob .tdb-mobile-search-icon-svg{
                    width: 55px;
					height: 55px;
					display: flex;
                    justify-content: center;
                }.tdi_13 .tdb-header-search-button-mob{
                    color: #ffffff;
                }.tdi_13 .tdb-header-search-button-mob svg,
                .tdi_13 .tdb-header-search-button-mob svg *{
                    fill: #ffffff;
                }
</style><div class="tdb-block-inner td-fix-index"><a class="tdb-header-search-button-mob dropdown-toggle" href="#" role="button" aria-label="Search" data-toggle="dropdown"><span class="tdb-mobile-search-icon tdb-mobile-search-icon-svg"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path d="M958.484 910.161l-134.564-134.502c63.099-76.595 94.781-170.455 94.72-264.141 0.061-106.414-40.755-213.228-121.917-294.431-81.244-81.183-187.976-121.958-294.359-121.938-106.435-0.020-213.187 40.796-294.369 121.938-81.234 81.203-122.010 188.017-121.989 294.369-0.020 106.445 40.755 213.166 121.989 294.287 81.193 81.285 187.945 122.020 294.369 121.979 93.716 0.041 187.597-31.642 264.11-94.659l134.554 134.564 57.457-57.467zM265.431 748.348c-65.546-65.495-98.13-150.999-98.171-236.882 0.041-85.832 32.625-171.346 98.171-236.913 65.567-65.536 151.081-98.099 236.933-98.14 85.821 0.041 171.336 32.604 236.902 98.14 65.495 65.516 98.12 151.122 98.12 236.913 0 85.924-32.625 171.387-98.12 236.882-65.556 65.495-151.009 98.099-236.902 98.099-85.852 0-171.366-32.604-236.933-98.099zM505.385 272.864c-61.901 0.020-123.566 23.501-170.824 70.799-47.288 47.258-70.769 108.923-70.799 170.834-0.041 26.624 4.383 53.105 13.046 78.428-0.031-0.522-0.092-1.024-0.031-1.556 13.199-91.341 48.241-159.775 96.963-208.497v-0.020h0.031c48.712-48.722 117.135-83.763 208.486-96.963 0.522-0.061 1.024 0 1.536 0.041-25.313-8.684-51.794-13.087-78.408-13.066z"></path></svg></span></a></div></div> <!-- ./block --></div></div></div></div></div></div>                </div>
                                <div class="td-header-mobile-sticky-wrap tdc-zone-sticky-invisible tdc-zone-sticky-inactive" style="display: none">
                    <div id="tdi_14" class="tdc-zone"><div class="tdc_zone tdi_15  wpb_row td-pb-row" data-sticky-offset="0" >
<style scoped>

/* custom css */
.tdi_15{
                    min-height: 0;
                }.td-header-mobile-sticky-wrap.td-header-active{
                    opacity: 1;
                }.td-header-mobile-sticky-wrap{
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    -o-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }

/* phone */
@media (max-width: 767px){
.tdi_15:before{
                    content: '';
                    display: block;
                    width: 100vw;
                    height: 100%;
                    position: absolute;
                    left: 50%;
                    transform: translateX(-50%);
                    box-shadow: none;
                    z-index: 20;
                    pointer-events: none;
                }.td-header-mobile-sticky-wrap{
                    transform: translateY(-120%);
                    -webkit-transform: translateY(-120%);
                    -moz-transform: translateY(-120%);
                    -ms-transform: translateY(-120%);
                    -o-transform: translateY(-120%);
                }.td-header-mobile-sticky-wrap.td-header-active{
                    transform: translateY(0);
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                }@media (max-width: 767px) {
                    .tdi_15:before {
                        width: 100%;
                    }
                }
}
</style><div id="tdi_16" class="tdc-row"><div class="vc_row tdi_17  wpb_row td-pb-row tdc-element-style" >
<style scoped>

/* custom css */
.tdi_17,
                .tdi_17 .tdc-columns{
                    min-height: 0;
                }.tdi_17,
				.tdi_17 .tdc-columns{
				    display: block;
				}.tdi_17 .tdc-columns{
				    width: 100%;
				}

/* phone */
@media (max-width: 767px){
@media (min-width: 768px) {
	                .tdi_17 {
	                    margin-left: -0px;
	                    margin-right: -0px;
	                }
	                .tdi_17 .tdc-row-video-background-error,
	                .tdi_17 .vc_column {
	                    padding-left: 0px;
	                    padding-right: 0px;
	                }
                }
}
/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_17{
position:relative;
}
}

</style>
<div class="tdi_16_rand_style td-element-style" ><div class="td-element-style-before"><style>
/* phone */
@media (max-width: 767px)
{
.tdi_16_rand_style > .td-element-style-before{
content:'' !important;
width:100% !important;
height:100% !important;
position:absolute !important;
top:0 !important;
left:0 !important;
display:block !important;
z-index:0 !important;
background-image:url("https://telset.id/wp-content/uploads/2021/04/202007279fab9a81-d8fc-9ed0-b34b-02fa52301152.jpg") !important;
opacity:0.2 !important;
background-size:cover !important;
background-position:center top !important;
}
}
</style></div><style>
/* phone */
@media (max-width: 767px)
{
.tdi_16_rand_style{
background-color:#232d35 !important;
}
}
 </style></div><div class="vc_column tdi_19  wpb_column vc_column_container tdc-column td-pb-span4">
<style scoped>

/* custom css */
.tdi_19{
                    vertical-align: baseline;
                }.tdi_19 > .wpb_wrapper,
				.tdi_19 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_19 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_19 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_19 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}

/* phone */
@media (max-width: 767px){
.tdi_19{
                    vertical-align: middle;
                }
}
/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_19{
width:20% !important;
display:inline-block !important;
}
}

</style><div class="wpb_wrapper"><div class="td_block_wrap tdb_mobile_menu tdi_20 td-pb-border-top td_block_template_8 tdb-header-align"  data-td-block-uid="tdi_20" >
<style>

/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_20{
margin-left:-16px !important;
}
}

</style>
<style>
/* custom css */
.tdi_20{
                    display: inline-block;
                }.tdi_20 .tdb-mobile-menu-button i{
                    font-size: 22px;
                
                    width: 55px;
					height: 55px;
					line-height:  55px;
                }.tdi_20 .tdb-mobile-menu-button svg{
                    width: 22px;
                }.tdi_20 .tdb-mobile-menu-button .tdb-mobile-menu-icon-svg{
                    width: 55px;
					height: 55px;
                }.tdi_20 .tdb-mobile-menu-button{
                    color: #ffffff;
                }.tdi_20 .tdb-mobile-menu-button svg,
                .tdi_20 .tdb-mobile-menu-button svg *{
                    fill: #ffffff;
                }

/* phone */
@media (max-width: 767px){
.tdi_20 .tdb-mobile-menu-button i{
                    font-size: 27px;
                
                    width: 54px;
					height: 54px;
					line-height:  54px;
                }.tdi_20 .tdb-mobile-menu-button svg{
                    width: 27px;
                }.tdi_20 .tdb-mobile-menu-button .tdb-mobile-menu-icon-svg{
                    width: 54px;
					height: 54px;
                }
}
</style><div class="tdb-block-inner td-fix-index"><a class="tdb-mobile-menu-button" aria-label="menu-button" href="#"><span class="tdb-mobile-menu-icon tdb-mobile-menu-icon-svg"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path d="M903.864 490.013h-783.749c-17.172 0-31.109 13.937-31.109 31.109 0 17.234 13.937 31.15 31.109 31.15h783.739c17.213 0 31.13-13.916 31.13-31.15 0.010-17.162-13.916-31.109-31.119-31.109zM903.864 226.835h-783.749c-17.172 0-31.109 13.916-31.109 31.16 0 17.213 13.937 31.109 31.109 31.109h783.739c17.213 0 31.13-13.896 31.13-31.109 0.010-17.234-13.916-31.16-31.119-31.16zM903.864 753.181h-783.749c-17.172 0-31.109 13.916-31.109 31.099 0 17.244 13.937 31.16 31.109 31.16h783.739c17.213 0 31.13-13.916 31.13-31.16 0.010-17.172-13.916-31.099-31.119-31.099z"></path></svg></span></a></div></div> <!-- ./block --></div></div><div class="vc_column tdi_22  wpb_column vc_column_container tdc-column td-pb-span4">
<style scoped>

/* custom css */
.tdi_22{
                    vertical-align: baseline;
                }.tdi_22 > .wpb_wrapper,
				.tdi_22 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_22 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_22 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_22 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}

/* phone */
@media (max-width: 767px){
.tdi_22{
                    vertical-align: middle;
                }
}
/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_22{
width:60% !important;
display:inline-block !important;
}
}

</style><div class="wpb_wrapper"><div class="td_block_wrap tdb_header_logo tdi_23 td-pb-border-top td_block_template_8 tdb-header-align"  data-td-block-uid="tdi_23" >
<style>
/* custom css */
.tdi_23 .tdb-logo-a,
                .tdi_23 h1{
                   align-items: flex-start;
                
                    justify-content: center;
                }.tdi_23 .tdb-logo-svg-wrap{
                    display: block;
                }.tdi_23 .tdb-logo-svg-wrap + .tdb-logo-img-wrap{
                    display: none;
                }.tdi_23 .tdb-logo-img-wrap{
                    display: block;
                }.tdi_23 .tdb-logo-text-tagline{
                    margin-top: 2px;
                    margin-left: 0;
                
                    display: none;
                }.tdi_23 .tdb-logo-text-title{
                    display: none;
                }.tdi_23 .tdb-logo-text-wrap{
                    flex-direction: column;
                
                    align-items: flex-start;
                }.tdi_23 .tdb-logo-icon{
                    top: 0px;
                
                    display: block;
                }

/* phone */
@media (max-width: 767px){
.tdi_23 .tdb-logo-img{
                    max-width: 160px;
                }
}
</style><div class="tdb-block-inner td-fix-index"><a class="tdb-logo-a" href="https://telset.id/" data-wpel-link="internal" target="_self" rel="follow"><span class="tdb-logo-img-wrap"><img class="tdb-logo-img td-retina-data" data-retina="https://telset.id/wp-content/uploads/2019/02/LOGO-TELSET-1.png" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20280%2096'%3E%3C/svg%3E" alt="Logo"  title=""  width="280" height="96" data-lazy-src="https://telset.id/wp-content/uploads/2020/08/telset-logo-retina.png" /><noscript><img class="tdb-logo-img td-retina-data" data-retina="https://telset.id/wp-content/uploads/2019/02/LOGO-TELSET-1.png" src="https://telset.id/wp-content/uploads/2020/08/telset-logo-retina.png" alt="Logo"  title=""  width="280" height="96" /></noscript></span></a></div></div> <!-- ./block --></div></div><div class="vc_column tdi_25  wpb_column vc_column_container tdc-column td-pb-span4">
<style scoped>

/* custom css */
.tdi_25{
                    vertical-align: baseline;
                }.tdi_25 > .wpb_wrapper,
				.tdi_25 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_25 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_25 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_25 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}

/* phone */
@media (max-width: 767px){
.tdi_25{
                    vertical-align: middle;
                }
}
/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_25{
width:20% !important;
display:inline-block !important;
}
}

</style><div class="wpb_wrapper"><div class="td_block_wrap tdb_mobile_search tdi_26 td-pb-border-top td_block_template_8 tdb-header-align"  data-td-block-uid="tdi_26" >
<style>

/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_26{
margin-right:-18px !important;
margin-bottom:0px !important;
}
}

</style>
<style>
/* custom css */
.tdi_26{
                    display: inline-block;
                
                    float: right;
                    clear: none;
                }.tdi_26 .tdb-header-search-button-mob i{
                    font-size: 22px;
                
                    width: 55px;
					height: 55px;
					line-height:  55px;
                }.tdi_26 .tdb-header-search-button-mob svg{
                    width: 22px;
                }.tdi_26 .tdb-header-search-button-mob .tdb-mobile-search-icon-svg{
                    width: 55px;
					height: 55px;
					display: flex;
                    justify-content: center;
                }.tdi_26 .tdb-header-search-button-mob{
                    color: #ffffff;
                }.tdi_26 .tdb-header-search-button-mob svg,
                .tdi_26 .tdb-header-search-button-mob svg *{
                    fill: #ffffff;
                }
</style><div class="tdb-block-inner td-fix-index"><a class="tdb-header-search-button-mob dropdown-toggle" href="#" role="button" aria-label="Search" data-toggle="dropdown"><span class="tdb-mobile-search-icon tdb-mobile-search-icon-svg"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path d="M958.484 910.161l-134.564-134.502c63.099-76.595 94.781-170.455 94.72-264.141 0.061-106.414-40.755-213.228-121.917-294.431-81.244-81.183-187.976-121.958-294.359-121.938-106.435-0.020-213.187 40.796-294.369 121.938-81.234 81.203-122.010 188.017-121.989 294.369-0.020 106.445 40.755 213.166 121.989 294.287 81.193 81.285 187.945 122.020 294.369 121.979 93.716 0.041 187.597-31.642 264.11-94.659l134.554 134.564 57.457-57.467zM265.431 748.348c-65.546-65.495-98.13-150.999-98.171-236.882 0.041-85.832 32.625-171.346 98.171-236.913 65.567-65.536 151.081-98.099 236.933-98.14 85.821 0.041 171.336 32.604 236.902 98.14 65.495 65.516 98.12 151.122 98.12 236.913 0 85.924-32.625 171.387-98.12 236.882-65.556 65.495-151.009 98.099-236.902 98.099-85.852 0-171.366-32.604-236.933-98.099zM505.385 272.864c-61.901 0.020-123.566 23.501-170.824 70.799-47.288 47.258-70.769 108.923-70.799 170.834-0.041 26.624 4.383 53.105 13.046 78.428-0.031-0.522-0.092-1.024-0.031-1.556 13.199-91.341 48.241-159.775 96.963-208.497v-0.020h0.031c48.712-48.722 117.135-83.763 208.486-96.963 0.522-0.061 1.024 0 1.536 0.041-25.313-8.684-51.794-13.087-78.408-13.066z"></path></svg></span></a></div></div> <!-- ./block --></div></div></div></div><div id="tdi_27" class="tdc-row"><div class="vc_row tdi_28  wpb_row td-pb-row" >
<style scoped>

/* custom css */
.tdi_28,
                .tdi_28 .tdc-columns{
                    min-height: 0;
                }.tdi_28,
				.tdi_28 .tdc-columns{
				    display: block;
				}.tdi_28 .tdc-columns{
				    width: 100%;
				}
</style><div class="vc_column tdi_30  wpb_column vc_column_container tdc-column td-pb-span12">
<style scoped>

/* custom css */
.tdi_30{
                    vertical-align: baseline;
                }.tdi_30 > .wpb_wrapper,
				.tdi_30 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_30 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_30 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_30 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}
</style><div class="wpb_wrapper"><div class="wpb_wrapper td_block_separator td_block_wrap vc_separator tdi_32  td_separator_solid td_separator_center"><span style="border-color:#dd3333;border-width:3px;width:100%;"></span>
<style scoped>

/* custom css */
.td_block_separator{
                  width: 100%;
                  align-items: center;
                  margin-bottom: 38px;
                  padding-bottom: 10px;
                }.td_block_separator span{
                  position: relative;
                  display: block;
                  margin: 0 auto;
                  width: 100%;
                  height: 1px;
                  border-top: 1px solid #EBEBEB;
                }.td_separator_align_left span{
                  margin-left: 0;
                }.td_separator_align_right span{
                  margin-right: 0;
                }.td_separator_dashed span{
                  border-top-style: dashed;
                }.td_separator_dotted span{
                  border-top-style: dotted;
                }.td_separator_double span{
                  height: 3px;
                  border-bottom: 1px solid #EBEBEB;
                }.td_separator_shadow > span{
                  position: relative;
                  height: 20px;
                  overflow: hidden;
                  border: 0;
                  color: #EBEBEB;
                }.td_separator_shadow > span > span{
                  position: absolute;
                  top: -30px;
                  left: 0;
                  right: 0;
                  margin: 0 auto;
                  height: 13px;
                  width: 98%;
                  border-radius: 100%;
                }
/* inline tdc_css att */

.tdi_32{
margin-right:-48px !important;
margin-bottom:0px !important;
margin-left:-48px !important;
width:auto !important;
}

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px)
{
.tdi_32{
margin-right:-24px !important;
margin-left:-24px !important;
}
}

</style></div></div></div></div></div></div></div>                </div>
                
                <div class="td-header-desktop-wrap ">
                    <div id="tdi_33" class="tdc-zone"><div class="tdc_zone tdi_34  wpb_row td-pb-row tdc-element-style"  >
<style scoped>

/* custom css */
.tdi_34{
                    min-height: 0;
                }.td-header-desktop-wrap{
                    position: relative;
                }
/* inline tdc_css att */

.tdi_34{
margin-right:auto !important;
margin-left:auto !important;
width:1164px !important;
position:relative;
}

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px)
{
.tdi_34{
width:100% !important;
}
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_34{
width:100% !important;
}
}

/* phone */
@media (max-width: 767px)
{
.tdi_34{
width:100% !important;
}
}

</style>
<div class="tdi_33_rand_style td-element-style" ><style>
.tdi_33_rand_style{
background-color:#ffffff !important;
}
 </style></div><div id="tdi_35" class="tdc-row stretch_row_content td-stretch-content"><div class="vc_row tdi_36  wpb_row td-pb-row tdc-element-style tdc-row-content-vert-center" >
<style scoped>

/* custom css */
.tdi_36,
                .tdi_36 .tdc-columns{
                    min-height: 0;
                }.tdi_36 > .td-element-style:after{
                    content: '' !important;
                    width: 100% !important;
                    height: 100% !important;
                    position: absolute !important;
                    top: 0 !important;
                    left: 0 !important;
                    z-index: 0 !important;
                    display: block !important;
                    background-color: #d5d5d5 !important;
                }.tdi_36,
				.tdi_36 .tdc-columns{
				    display: block;
				}.tdi_36 .tdc-columns{
				    width: 100%;
				}@media (min-width: 767px) {
                    .tdi_36.tdc-row-content-vert-center,
                    .tdi_36.tdc-row-content-vert-center .tdc-columns {
                        display: flex;
                        align-items: center;
                        flex: 1;
                    }
                    .tdi_36.tdc-row-content-vert-bottom,
                    .tdi_36.tdc-row-content-vert-bottom .tdc-columns {
                        display: flex;
                        align-items: flex-end;
                        flex: 1;
                    }
                    .tdi_36.tdc-row-content-vert-center .td_block_wrap {
                        vertical-align: middle;
                    }
                    .tdi_36.tdc-row-content-vert-bottom .td_block_wrap {
                        vertical-align: bottom;
                    }
                }
/* inline tdc_css att */

.tdi_36{
padding-top:20px !important;
padding-bottom:20px !important;
}

.tdi_36 .td_block_wrap{ text-align:left }

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_36{
padding-top:14px !important;
padding-bottom:14px !important;
}
}

</style>
<div class="tdi_35_rand_style td-element-style" ></div><div class="vc_column tdi_38  wpb_column vc_column_container tdc-column td-pb-span4">
<style scoped>

/* custom css */
.tdi_38{
                    vertical-align: baseline;
                }.tdi_38 > .wpb_wrapper,
				.tdi_38 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_38 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_38 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_38 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}
/* inline tdc_css att */

.tdi_38{
width:30% !important;
}

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px)
{
.tdi_38{
width:24% !important;
}
}

</style><div class="wpb_wrapper"><div class="td_block_wrap tdb_header_logo tdi_39 td-pb-border-top td_block_template_8 tdb-header-align"  data-td-block-uid="tdi_39" >
<style>

/* inline tdc_css att */

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px)
{
.tdi_39{
margin-right:-30px !important;
margin-left:-20px !important;
}
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_39{
margin-right:-10px !important;
margin-left:-5px !important;
}
}

</style>
<style>
/* custom css */
.tdi_39 .tdb-logo-a,
                .tdi_39 h1{
                   align-items: flex-start;
                
                    justify-content: center;
                }.tdi_39 .tdb-logo-svg-wrap{
                    display: block;
                }.tdi_39 .tdb-logo-svg-wrap + .tdb-logo-img-wrap{
                    display: none;
                }.tdi_39 .tdb-logo-img-wrap{
                    display: block;
                }.tdi_39 .tdb-logo-text-tagline{
                    margin-top: 2px;
                    margin-left: 0;
                
                    display: none;
                }.tdi_39 .tdb-logo-text-title{
                    display: none;
                }.tdi_39 .tdb-logo-text-wrap{
                    flex-direction: column;
                
                    align-items: flex-start;
                }.tdi_39 .tdb-logo-icon{
                    top: 0px;
                
                    display: block;
                }
</style><div class="tdb-block-inner td-fix-index"><a class="tdb-logo-a" href="https://telset.id/" data-wpel-link="internal" target="_self" rel="follow"><span class="tdb-logo-img-wrap"><img class="tdb-logo-img td-retina-data" data-retina="https://telset.id/wp-content/uploads/2021/12/logo-techtival-retina.png" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20272%2090'%3E%3C/svg%3E" alt="Logo"  title=""  width="272" height="90" data-lazy-src="https://telset.id/wp-content/uploads/2021/12/logo-techtival.png" /><noscript><img class="tdb-logo-img td-retina-data" data-retina="https://telset.id/wp-content/uploads/2021/12/logo-techtival-retina.png" src="https://telset.id/wp-content/uploads/2021/12/logo-techtival.png" alt="Logo"  title=""  width="272" height="90" /></noscript></span></a></div></div> <!-- ./block --></div></div><div class="vc_column tdi_41  wpb_column vc_column_container tdc-column td-pb-span8">
<style scoped>

/* custom css */
.tdi_41{
                    vertical-align: baseline;
                }.tdi_41 > .wpb_wrapper,
				.tdi_41 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_41 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_41 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_41 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}
/* inline tdc_css att */

.tdi_41{
width:70% !important;
}

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px)
{
.tdi_41{
width:76% !important;
}
}

</style><div class="wpb_wrapper"><div class="td_block_wrap td-a-rec td-a-rec-id-custom-spot td-a-rec-img tdi_42 td_block_template_8">
<style>

/* inline tdc_css att */

.tdi_42{
margin-bottom:0px !important;
padding-top:5px !important;
}

</style>
<style>
/* custom css */
.tdi_42.td-a-rec{
					text-align: center;
				}.tdi_42 .td-element-style{
					z-index: -1;
				}.tdi_42 .td-spot-id-spot_img_hidden{
                    display: none;
                }.tdi_42 .td-adspot-title{
                    display: block;
                
					font-family:Proxima Nova Bold !important;
				}.tdi_42.td-a-rec-img{
				    text-align: right;
				}.tdi_42.td-a-rec-img img{
                    margin: 0 0 0 auto;
                }@media (max-width: 767px) {
				    .tdi_42.td-a-rec-img {
				        text-align: center;
				    }
                }
</style><div style="display: inline-block"><a href="" class="td_spot_img_all" data-wpel-link="internal" target="_self" rel="follow"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20728%2090'%3E%3C/svg%3E"  alt="spot_img" width="728"  height="90"  data-lazy-src="https://telset.id/wp-content/uploads/2021/12/Banner-Telset-Techtival.png" /><noscript><img src="https://telset.id/wp-content/uploads/2021/12/Banner-Telset-Techtival.png"  alt="spot_img" width="728"  height="90"  /></noscript></a></div></div></div></div></div></div><div id="tdi_43" class="tdc-row tdc-row-is-sticky tdc-rist-top stretch_row"><div class="vc_row tdi_44  wpb_row td-pb-row tdc-element-style tdc-row-content-vert-center" >
<style scoped>

/* custom css */
body .tdc-row.tdc-rist-top-active,
                body .tdc-row.tdc-rist-bottom-active{
                  position: fixed;
                  left: 50%;
                  transform: translateX(-50%);
                  z-index: 10000;
                }body .tdc-row.tdc-rist-top-active.td-stretch-content,
                body .tdc-row.tdc-rist-bottom-active.td-stretch-content{
                  width: 100% !important;
                }body .tdc-row.tdc-rist-top-active{
                  top: 0;
                }body .tdc-row.tdc-rist-absolute{
                  position: absolute;
                }body .tdc-row.tdc-rist-bottom-active{
                  bottom: 0;
                }.tdi_44,
                .tdi_44 .tdc-columns{
                    min-height: 0;
                }.tdi_44,
				.tdi_44 .tdc-columns{
				    display: flex;
				
				    flex-direction: row;
				
				    flex-wrap: nowrap;
				
				    justify-content: space-between;
				
				    align-items: center;
				}.tdi_44 .tdc-columns{
				    width: 100%;
				}@media (min-width: 767px) {
                  body.admin-bar .tdc-row.tdc-rist-top-active {
                    top: 32px;
                  }
                }@media (min-width: 767px) {
                    .tdi_44.tdc-row-content-vert-center,
                    .tdi_44.tdc-row-content-vert-center .tdc-columns {
                        display: flex;
                        align-items: center;
                        flex: 1;
                    }
                    .tdi_44.tdc-row-content-vert-bottom,
                    .tdi_44.tdc-row-content-vert-bottom .tdc-columns {
                        display: flex;
                        align-items: flex-end;
                        flex: 1;
                    }
                    .tdi_44.tdc-row-content-vert-center .td_block_wrap {
                        vertical-align: middle;
                    }
                    .tdi_44.tdc-row-content-vert-bottom .td_block_wrap {
                        vertical-align: bottom;
                    }
                }
/* inline tdc_css att */

.tdi_44{
margin-right:-24px !important;
margin-left:-24px !important;
position:relative;
}

.tdi_44 .td_block_wrap{ text-align:left }

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_44{
margin-right:-10px !important;
margin-left:-10px !important;
}
}

</style>
<div class="tdi_43_rand_style td-element-style" ><div class="td-element-style-before"><style>
.tdi_43_rand_style > .td-element-style-before {
content:'' !important;
width:100% !important;
height:100% !important;
position:absolute !important;
top:0 !important;
left:0 !important;
display:block !important;
z-index:0 !important;
background-image:url("https://telset.id/wp-content/uploads/2021/04/2020072771408f81-31a7-403e-59dd-d687f193fc7d.jpg") !important;
opacity:0.2 !important;
background-size:cover !important;
background-position:center top !important;
}
</style></div><style>
.tdi_43_rand_style{
background-color:#232d35 !important;
}
 </style></div><div class="vc_column tdi_46  wpb_column vc_column_container tdc-column td-pb-span9">
<style scoped>

/* custom css */
.tdi_46{
                    vertical-align: baseline;
                
				    flex-grow: 1;
				}.tdi_46 > .wpb_wrapper,
				.tdi_46 > .wpb_wrapper > .tdc-elements{
				    display: flex;
				
				    flex-direction: column;
				
				    flex-wrap: nowrap;
				
				    justify-content: space-between;
				
				    align-items: center;
				}.tdi_46 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_46 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_46 > .wpb_wrapper{
				    width: 100%;
				    height: 100%;
				}
/* inline tdc_css att */

.tdi_46{
width:90% !important;
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_46{
width:92% !important;
}
}

</style><div class="wpb_wrapper"><div class="td_block_wrap tdb_header_menu tdi_47 tds_menu_active3 tds_menu_sub_active1 tdb-mm-align-screen td-pb-border-top td_block_template_8 tdb-header-align"  data-td-block-uid="tdi_47"  style=" z-index: 999;">
<style>

/* inline tdc_css att */

.tdi_47{
margin-left:-10px !important;
}

</style>
<style>
/* custom css */
.tdb_header_menu{
                  margin-bottom: 0;
                  z-index: 999;
                  clear: none;
                }.tdb_header_menu .tdb-main-sub-icon-fake,
                .tdb_header_menu .tdb-sub-icon-fake{
                    display: none;
                }.tdb_header_menu .tdb-menu{
                  display: inline-block;
                  vertical-align: middle;
                  margin: 0;
                }.tdb_header_menu .tdb-menu .tdb-mega-menu-inactive,
                .tdb_header_menu .tdb-menu .tdb-menu-item-inactive{
                  pointer-events: none;
                }.tdb_header_menu .tdb-menu .tdb-mega-menu-inactive > ul,
                .tdb_header_menu .tdb-menu .tdb-menu-item-inactive > ul{
                  visibility: hidden;
                  opacity: 0;
                }.tdb_header_menu .tdb-menu .sub-menu{
                  font-size: 14px;
                
                  position: absolute;
                  top: -999em;
                  background-color: #fff;
                  z-index: 99;
                }.tdb_header_menu .tdb-menu .sub-menu > li{
                  list-style-type: none;
                  margin: 0;
                  font-family: 'Open Sans', 'Open Sans Regular', sans-serif;
                }.tdb_header_menu .tdb-menu > li{
                  float: left;
                  list-style-type: none;
                  margin: 0;
                }.tdb_header_menu .tdb-menu > li > a{
                  position: relative;
                  display: inline-block;
                  padding: 0 14px;
                  font-weight: 700;
                  font-size: 14px;
                  line-height: 48px;
                  vertical-align: middle;
                  text-transform: uppercase;
                  -webkit-backface-visibility: hidden;
                  color: #000;
                  font-family: 'Open Sans', 'Open Sans Regular', sans-serif;
                }.tdb_header_menu .tdb-menu > li > a:after{
                  content: '';
                  position: absolute;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  margin: 0 auto;
                  width: 0;
                  height: 3px;
                  background-color: #4db2ec;
                  -webkit-transform: translate3d(0, 0, 0);
                  transform: translate3d(0, 0, 0);
                  -webkit-transition: width 0.2s ease;
                  transition: width 0.2s ease;
                }.tdb_header_menu .tdb-menu > li > a > .tdb-menu-item-text{
                  display: inline-block;
                }.tdb_header_menu .tdb-menu > li > a .tdb-menu-item-text,
                .tdb_header_menu .tdb-menu > li > a span{
                  vertical-align: middle;
                  float: left;
                }.tdb_header_menu .tdb-menu > li > a .tdb-sub-menu-icon{
                  margin: 0 0 0 7px;
                }.tdb_header_menu .tdb-menu > li > a .tdb-sub-menu-icon-svg{
                  float: none;
                  line-height: 0;
                }.tdb_header_menu .tdb-menu > li > a .tdb-sub-menu-icon-svg svg{
                  width: 14px;
                  height: auto;
                }.tdb_header_menu .tdb-menu > li > a .tdb-sub-menu-icon-svg svg,
                .tdb_header_menu .tdb-menu > li > a .tdb-sub-menu-icon-svg svg *{
                  fill: #000;
                }.tdb_header_menu .tdb-menu > li.current-menu-item > a:after,
                .tdb_header_menu .tdb-menu > li.current-menu-ancestor > a:after,
                .tdb_header_menu .tdb-menu > li.current-category-ancestor > a:after,
                .tdb_header_menu .tdb-menu > li:hover > a:after,
                .tdb_header_menu .tdb-menu > li.tdb-hover > a:after{
                  width: 100%;
                }.tdb_header_menu .tdb-menu > li:hover > ul,
                .tdb_header_menu .tdb-menu > li.tdb-hover > ul{
                  top: auto;
                }.tdb_header_menu .tdb-menu > li.td-normal-menu > ul.sub-menu{
                  top: auto;
                  left: 0;
                  z-index: 99;
                }.tdb_header_menu .tdb-menu > li .tdb-menu-sep{
                  position: relative;
                  vertical-align: middle;
                  font-size: 14px;
                }.tdb_header_menu .tdb-menu > li .tdb-menu-sep-svg{
                  line-height: 0;
                }.tdb_header_menu .tdb-menu > li .tdb-menu-sep-svg svg{
                  width: 14px;
                  height: auto;
                }.tdb_header_menu .tdb-menu > li:last-child .tdb-menu-sep{
                  display: none;
                }.tdb_header_menu .tdb-menu-item-text{
                  word-wrap: break-word;
                }.tdb_header_menu .tdb-menu-item-text,
                .tdb_header_menu .tdb-sub-menu-icon,
                .tdb_header_menu .tdb-menu-more-subicon{
                  vertical-align: middle;
                }.tdb_header_menu .tdb-sub-menu-icon,
                .tdb_header_menu .tdb-menu-more-subicon{
                  position: relative;
                  top: 0;
                  padding-left: 0;
                }.tdb_header_menu .tdb-normal-menu{
                  position: relative;
                }.tdb_header_menu .tdb-normal-menu ul{
                  left: 0;
                  padding: 15px 0;
                  text-align: left;
                }.tdb_header_menu .tdb-normal-menu ul ul{
                  margin-top: -15px;
                }.tdb_header_menu .tdb-normal-menu ul .tdb-menu-item{
                  position: relative;
                  list-style-type: none;
                }.tdb_header_menu .tdb-normal-menu ul .tdb-menu-item > a{
                  position: relative;
                  display: block;
                  padding: 7px 30px;
                  font-size: 12px;
                  line-height: 20px;
                  color: #111;
                }.tdb_header_menu .tdb-normal-menu ul .tdb-menu-item > a .tdb-sub-menu-icon,
                .tdb_header_menu .td-pulldown-filter-list .tdb-menu-item > a .tdb-sub-menu-icon{
                  position: absolute;
                  top: 50%;
                  -webkit-transform: translateY(-50%);
                  transform: translateY(-50%);
                  right: 0;
                  padding-right: inherit;
                  font-size: 7px;
                  line-height: 20px;
                }.tdb_header_menu .tdb-normal-menu ul .tdb-menu-item > a .tdb-sub-menu-icon-svg,
                .tdb_header_menu .td-pulldown-filter-list .tdb-menu-item > a .tdb-sub-menu-icon-svg{
                  line-height: 0;
                }.tdb_header_menu .tdb-normal-menu ul .tdb-menu-item > a .tdb-sub-menu-icon-svg svg,
                .tdb_header_menu .td-pulldown-filter-list .tdb-menu-item > a .tdb-sub-menu-icon-svg svg{
                  width: 7px;
                  height: auto;
                }.tdb_header_menu .tdb-normal-menu ul .tdb-menu-item > a .tdb-sub-menu-icon-svg svg,
                .tdb_header_menu .tdb-normal-menu ul .tdb-menu-item > a .tdb-sub-menu-icon-svg svg *,
                .tdb_header_menu .td-pulldown-filter-list .tdb-menu-item > a .tdb-sub-menu-icon svg,
                .tdb_header_menu .td-pulldown-filter-list .tdb-menu-item > a .tdb-sub-menu-icon svg *{
                  fill: #000;
                }.tdb_header_menu .tdb-normal-menu ul .tdb-menu-item:hover > ul,
                .tdb_header_menu .tdb-normal-menu ul .tdb-menu-item.tdb-hover > ul{
                  top: 0;
                }.tdb_header_menu .tdb-normal-menu ul .tdb-menu-item.current-menu-item > a,
                .tdb_header_menu .tdb-normal-menu ul .tdb-menu-item.current-menu-ancestor > a,
                .tdb_header_menu .tdb-normal-menu ul .tdb-menu-item.current-category-ancestor > a,
                .tdb_header_menu .tdb-normal-menu ul .tdb-menu-item.tdb-hover > a,
                .tdb_header_menu .tdb-normal-menu ul .tdb-menu-item:hover > a{
                  color: #4db2ec;
                }.tdb_header_menu .tdb-normal-menu > ul{
                  left: -15px;
                }.tdb_header_menu.tdb-menu-sub-inline .tdb-normal-menu ul,
                .tdb_header_menu.tdb-menu-sub-inline .td-pulldown-filter-list{
                  width: 100% !important;
                }.tdb_header_menu.tdb-menu-sub-inline .tdb-normal-menu ul li,
                .tdb_header_menu.tdb-menu-sub-inline .td-pulldown-filter-list li{
                  display: inline-block;
                  width: auto !important;
                }.tdb_header_menu.tdb-menu-sub-inline .tdb-normal-menu,
                .tdb_header_menu.tdb-menu-sub-inline .tdb-normal-menu .tdb-menu-item{
                  position: static;
                }.tdb_header_menu.tdb-menu-sub-inline .tdb-normal-menu ul ul{
                  margin-top: 0 !important;
                }.tdb_header_menu.tdb-menu-sub-inline .tdb-normal-menu > ul{
                  left: 0 !important;
                }.tdb_header_menu.tdb-menu-sub-inline .tdb-normal-menu .tdb-menu-item > a .tdb-sub-menu-icon{
                  float: none;
                  line-height: 1;
                }.tdb_header_menu.tdb-menu-sub-inline .tdb-normal-menu .tdb-menu-item:hover > ul,
                .tdb_header_menu.tdb-menu-sub-inline .tdb-normal-menu .tdb-menu-item.tdb-hover > ul{
                  top: 100%;
                }.tdb_header_menu.tdb-menu-sub-inline .tdb-menu-items-dropdown{
                  position: static;
                }.tdb_header_menu.tdb-menu-sub-inline .td-pulldown-filter-list{
                  left: 0 !important;
                }.tdb-menu .tdb-mega-menu .sub-menu{
                  -webkit-transition: opacity 0.3s ease;
                  transition: opacity 0.3s ease;
                  width: 1114px !important;
                }.tdb-menu .tdb-mega-menu .sub-menu,
                .tdb-menu .tdb-mega-menu .sub-menu > li{
                  position: absolute;
                  left: 50%;
                  -webkit-transform: translateX(-50%);
                  transform: translateX(-50%);
                }.tdb-menu .tdb-mega-menu .sub-menu > li{
                  top: 0;
                  width: 100%;
                  max-width: 1114px !important;
                  height: auto;
                  background-color: #fff;
                  border: 1px solid #eaeaea;
                  overflow: hidden;
                }.tdc-dragged .tdb-block-menu ul{
                  visibility: hidden !important;
                  opacity: 0 !important;
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                }.tdb-mm-align-screen .tdb-menu .tdb-mega-menu .sub-menu{
                  -webkit-transform: translateX(0);
                  transform: translateX(0);
                }.tdb-mm-align-parent .tdb-menu .tdb-mega-menu{
                  position: relative;
                }.tdi_47 .td_block_inner{
                    text-align: center;
                }.tdi_47 .tdb-menu > li > a,
                .tdi_47 .td-subcat-more{
                    padding: 0 12px;
                
                    color: #ffffff;
                }.tdi_47 .tdb-menu > li .tdb-menu-sep,
                .tdi_47 .tdb-menu-items-dropdown .tdb-menu-sep{
                    top: -1px;
                }.tdi_47 .tdb-menu > li > a .tdb-sub-menu-icon,
                .tdi_47 .td-subcat-more .tdb-menu-more-subicon{
                    font-size: 10px;
                
                    top: 1px;
                }.tdi_47 .td-subcat-more .tdb-menu-more-icon{
                    top: 0px;
                }.tdi_47 .tdb-menu > li > a .tdb-sub-menu-icon-svg svg,
                .tdi_47 .tdb-menu > li > a .tdb-sub-menu-icon-svg svg *,
                .tdi_47 .td-subcat-more .tdb-menu-more-subicon-svg svg,
                .tdi_47 .td-subcat-more .tdb-menu-more-subicon-svg svg *,
                .tdi_47 .td-subcat-more .tdb-menu-more-icon-svg,
                .tdi_47 .td-subcat-more .tdb-menu-more-icon-svg *{
                    fill: #ffffff;
                }.tdi_47 .tdb-menu > li > a,
                .tdi_47 .td-subcat-more,
                .tdi_47 .td-subcat-more > .tdb-menu-item-text{
                    font-family:Proxima Nova Bold !important;font-size:13px !important;line-height:48px !important;font-weight:400 !important;text-transform:capitalize !important;letter-spacing:0.4px !important;
                }.tdi_47 .tdb-menu > .tdb-normal-menu > ul,
                .tdi_47 .td-pulldown-filter-list{
                    left: -15px;
                }.tdi_47 .tdb-normal-menu ul ul,
                .tdi_47 .td-pulldown-filter-list .sub-menu{
                    margin-top: -15px;
                }.tdi_47 .tdb-menu .tdb-normal-menu ul,
                .tdi_47 .td-pulldown-filter-list,
                .tdi_47 .td-pulldown-filter-list .sub-menu{
                    padding: 10px 0 15px;
                
                    box-shadow:  0px 2px 10px 0px rgba(0,0,0,0.15);
                }.tdi_47 .tdb-menu .tdb-normal-menu ul .tdb-menu-item > a,
                .tdi_47 .tdb-menu-items-dropdown .td-pulldown-filter-list li > a{
                    padding: 5px 20px;
                }.tdi_47 .tdb-normal-menu ul .tdb-menu-item > a .tdb-sub-menu-icon,
                .tdi_47 .td-pulldown-filter-list .tdb-menu-item > a .tdb-sub-menu-icon{
                    right: 0;
                
                    margin-top: 1px;
                }.tdi_47 .tdb-menu .tdb-normal-menu ul .tdb-menu-item > a,
                .tdi_47 .tdb-menu-items-dropdown .td-pulldown-filter-list li a,
                .tdi_47 .tdb-menu-items-dropdown .td-pulldown-filter-list li a{
                    color: #000000;
                }.tdi_47 .tdb-menu .tdb-normal-menu ul .tdb-menu-item > a .tdb-sub-menu-icon-svg svg,
                .tdi_47 .tdb-menu .tdb-normal-menu ul .tdb-menu-item > a .tdb-sub-menu-icon-svg svg *,
                .tdi_47 .tdb-menu-items-dropdown .td-pulldown-filter-list li a .tdb-sub-menu-icon-svg svg,
                .tdi_47 .tdb-menu-items-dropdown .td-pulldown-filter-list li a .tdb-sub-menu-icon-svg svg *{
                    fill: #000000;
                }.tdi_47 .tdb-menu .tdb-normal-menu ul .tdb-menu-item > a,
                .tdi_47 .td-pulldown-filter-list li a{
                    font-family:Proxima Nova Bold !important;font-size:12px !important;font-weight:500 !important;
                }.tdi_47:not(.tdb-mm-align-screen) .tdb-mega-menu .sub-menu,
                .tdi_47 .tdb-mega-menu .sub-menu > li{
                    max-width: 1164px !important;
                }.tdi_47 .tdb-menu .tdb-mega-menu .sub-menu > li{
					border-width: 0px;
				
					box-shadow:  0px 4px 20px 0px rgba(0,0,0,0.15);
				}@media (max-width: 1140px) {
                  .tdb-menu .tdb-mega-menu .sub-menu > li {
                    width: 100% !important;
                  }
                }@media (max-width: 1018px) {
                    .tdi_47 .td-pulldown-filter-list {
                        left: auto;
                        right: -15px;
                    }
                }

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px){
.tdi_47:not(.tdb-mm-align-screen) .tdb-mega-menu .sub-menu,
                .tdi_47 .tdb-mega-menu .sub-menu > li{
                    max-width: 100% !important;
                }
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_47 .tdb-menu > li > a,
                .tdi_47 .td-subcat-more{
                    padding: 0 10px;
                }.tdi_47 .tdb-menu > li > a .tdb-sub-menu-icon,
                .tdi_47 .td-subcat-more .tdb-menu-more-subicon{
                    font-size: 9px;
                
                    margin-left: 5px;
                
                    top: 0px;
                }.tdi_47 .tdb-menu > li > a,
                .tdi_47 .td-subcat-more,
                .tdi_47 .td-subcat-more > .tdb-menu-item-text{
                    font-family:Proxima Nova Bold !important;font-size:10px !important;line-height:40px !important;font-weight:400 !important;text-transform:capitalize !important;letter-spacing:0.4px !important;
                }.tdi_47:not(.tdb-mm-align-screen) .tdb-mega-menu .sub-menu,
                .tdi_47 .tdb-mega-menu .sub-menu > li{
                    max-width: 100% !important;
                }
}
</style>
<style>
.tds_menu_active3 .tdb-menu > li > a:after{
                  opacity: 0;
                  -webkit-transition: opacity 0.2s ease;
                  transition: opacity 0.2s ease;
                  height: 100%;
                  z-index: -1;
                }.tds_menu_active3 .tdb-menu > li.current-menu-item > a:after,
                 .tds_menu_active3 .tdb-menu > li.current-menu-ancestor > a:after,
                 .tds_menu_active3 .tdb-menu > li.current-category-ancestor > a:after,
                 .tds_menu_active3 .tdb-menu > li:hover > a:after,
                 .tds_menu_active3 .tdb-menu > li.tdb-hover > a:after{
                  opacity: 1;
                }.tds_menu_active3 .tdb-menu-items-dropdown .td-subcat-more:after{
                  opacity: 0;
                  -webkit-transition: opacity 0.2s ease;
                  transition: opacity 0.2s ease;
                  height: 100%;
                  z-index: -1;
                }.tds_menu_active3 .tdb-menu-items-dropdown:hover .td-subcat-more:after{
                  opacity: 1;
                }.tdi_47 .tdb-menu > li > a:after,
				.tdi_47 .tdb-menu-items-dropdown .td-subcat-more:after{
					background-color: #000000;
				}
</style>
<style>
.tdi_47 .tdb-menu ul .tdb-normal-menu.current-menu-item > a,
				.tdi_47 .tdb-menu ul .tdb-normal-menu.current-menu-ancestor > a,
				.tdi_47 .tdb-menu ul .tdb-normal-menu.current-category-ancestor > a,
				.tdi_47 .tdb-menu ul .tdb-normal-menu.tdb-hover > a,
				.tdi_47 .tdb-menu ul .tdb-normal-menu:hover > a,
				.tdi_47 .tdb-menu-items-dropdown .td-pulldown-filter-list li:hover > a{
					color: #008d7f;
				}.tdi_47 .tdb-menu ul .tdb-normal-menu.current-menu-item > a .tdb-sub-menu-icon-svg svg,
				.tdi_47 .tdb-menu ul .tdb-normal-menu.current-menu-item > a .tdb-sub-menu-icon-svg svg *,
				.tdi_47 .tdb-menu ul .tdb-normal-menu.current-menu-ancestor > a .tdb-sub-menu-icon-svg svg,
				.tdi_47 .tdb-menu ul .tdb-normal-menu.current-menu-ancestor > a .tdb-sub-menu-icon-svg svg *,
				.tdi_47 .tdb-menu ul .tdb-normal-menu.current-category-ancestor > a .tdb-sub-menu-icon-svg svg,
				.tdi_47 .tdb-menu ul .tdb-normal-menu.current-category-ancestor > a .tdb-sub-menu-icon-svg svg *,
				.tdi_47 .tdb-menu ul .tdb-normal-menu.tdb-hover > a .tdb-sub-menu-icon-svg svg,
				.tdi_47 .tdb-menu ul .tdb-normal-menu.tdb-hover > a .tdb-sub-menu-icon-svg svg *,
				.tdi_47 .tdb-menu ul .tdb-normal-menu:hover > a .tdb-sub-menu-icon-svg svg,
				.tdi_47 .tdb-menu ul .tdb-normal-menu:hover > a .tdb-sub-menu-icon-svg svg *,
				.tdi_47 .tdb-menu-items-dropdown .td-pulldown-filter-list li:hover > a .tdb-sub-menu-icon-svg svg,
				.tdi_47 .tdb-menu-items-dropdown .td-pulldown-filter-list li:hover > a .tdb-sub-menu-icon-svg svg *{
					fill: #008d7f;
				}
</style><div id=tdi_47 class="td_block_inner td-fix-index"><div class="tdb-main-sub-icon-fake"><i class="tdb-sub-menu-icon td-icon-down tdb-main-sub-menu-icon"></i></div><div class="tdb-sub-icon-fake"><i class="tdb-sub-menu-icon td-icon-right-arrow"></i></div><ul id="menu-main-1" class="tdb-block-menu tdb-menu tdb-menu-items-visible"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-first tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-330125"><a href="https://telset.id" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">HOME</div></a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-526 tdb-menu-item-inactive"><a href="https://telset.id/news/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">NEWS</div><i class="tdb-sub-menu-icon td-icon-down tdb-main-sub-menu-icon"></i></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-206400"><a href="https://telset.id/news/telko/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">TELKO</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-206401"><a href="https://telset.id/news/in-depth/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">IN-DEPTH</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-316633"><a href="https://telset.id/news/edutech/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">EDUTECH</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-316634"><a href="https://telset.id/news/fintech/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">FINTECH</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-312682"><a href="https://telset.id/news/science-tech/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">SCIENCE-TECH</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-316635"><a href="https://telset.id/news/internet/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">INTERNET</div></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-225086"><a href="https://telset.id/ngehits/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">NGEHITS</div></a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-206403"><a href="https://telset.id/gizmo/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">GIZMO</div></a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-247582"><a href="https://telset.id/review/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">REVIEW</div></a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-206404"><a href="https://telset.id/apps/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">APPS</div></a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-248711"><a href="https://telset.id/games/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">GAMES</div></a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-513"><a href="https://telset.id/how-to/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">HOW TO</div></a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-294558 tdb-menu-item-inactive"><a href="https://telset.id/video/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">TELSET TV</div><i class="tdb-sub-menu-icon td-icon-down tdb-main-sub-menu-icon"></i></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-294559"><a href="https://telset.id/video/event/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Event</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-294560"><a href="https://telset.id/video/giveaway/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Giveaway</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-294561"><a href="https://telset.id/video/hands-on/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Hands On</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-294562"><a href="https://telset.id/video/ngopi-sob/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Ngopi Sob</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-294563"><a href="https://telset.id/video/techno-update/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Techno Update</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-294564"><a href="https://telset.id/video/tutorial/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Tutorial</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-294565"><a href="https://telset.id/video/unboxing/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Unboxing</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-295119"><a href="https://telset.id/video/video-review/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Video Review</div></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-378295 tdb-menu-item-inactive"><a href="https://telset.id/harga-spesifikasi/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">HARGA DAN SPESIFIKASI</div><i class="tdb-sub-menu-icon td-icon-down tdb-main-sub-menu-icon"></i></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378296"><a href="https://telset.id/harga-spesifikasi/apple/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Apple</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378297"><a href="https://telset.id/harga-spesifikasi/asus/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Asus</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378298"><a href="https://telset.id/harga-spesifikasi/google/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Google</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378299"><a href="https://telset.id/harga-spesifikasi/honor/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Honor</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378300"><a href="https://telset.id/harga-spesifikasi/huawei/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Huawei</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378301"><a href="https://telset.id/harga-spesifikasi/infinix/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Infinix</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378302"><a href="https://telset.id/harga-spesifikasi/nokia/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Nokia</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378303"><a href="https://telset.id/harga-spesifikasi/oneplus/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Oneplus</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378304"><a href="https://telset.id/harga-spesifikasi/oppo/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Oppo</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378305"><a href="https://telset.id/harga-spesifikasi/realme/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Realme</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378306"><a href="https://telset.id/harga-spesifikasi/samsung/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Samsung</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378307"><a href="https://telset.id/harga-spesifikasi/tecno/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Tecno</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378308"><a href="https://telset.id/harga-spesifikasi/vivo/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Vivo</div></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category tdb-menu-item tdb-normal-menu menu-item-378322"><a href="https://telset.id/harga-spesifikasi/xiaomi/" data-wpel-link="internal" target="_self" rel="follow"><div class="tdb-menu-item-text">Xiaomi</div></a></li>
</ul>
</li>
</ul></div></div></div></div><div class="vc_column tdi_51  wpb_column vc_column_container tdc-column td-pb-span3">
<style scoped>

/* custom css */
.tdi_51{
                    vertical-align: baseline;
                }.tdi_51 > .wpb_wrapper,
				.tdi_51 > .wpb_wrapper > .tdc-elements{
				    display: flex;
				
				    flex-direction: row;
				
				    flex-wrap: nowrap;
				
				    justify-content: flex-end;
				
				    align-items: flex-start;
				}.tdi_51 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_51 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_51 > .wpb_wrapper{
				    width: 100%;
				    height: 100%;
				}
/* inline tdc_css att */

.tdi_51{
width:10% !important;
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_51{
width:8% !important;
}
}

</style><div class="wpb_wrapper"><div class="td_block_wrap tdb_header_search tdi_52 td-pb-border-top td_block_template_8 tdb-header-align"  data-td-block-uid="tdi_52" >
<style>
/* custom css */
.tdb_module_header{
                  width: 100%;
                  padding-bottom: 0;
                }.tdb_module_header .td-module-container{
                  display: flex;
                  flex-direction: column;
                  position: relative;
                }.tdb_module_header .td-module-container:before{
                  content: '';
                  position: absolute;
                  bottom: 0;
                  left: 0;
                  width: 100%;
                  height: 1px;
                }.tdb_module_header .td-image-wrap{
                  display: block;
                  position: relative;
                  padding-bottom: 70%;
                }.tdb_module_header .td-image-container{
                  position: relative;
                  width: 100%;
                  flex: 0 0 auto;
                }.tdb_module_header .td-module-thumb{
                  margin-bottom: 0;
                }.tdb_module_header .td-module-meta-info{
                  width: 100%;
                  margin-bottom: 0;
                  padding: 7px 0 0 0;
                  z-index: 1;
                  border: 0 solid #eaeaea;
                  min-height: 0;
                }.tdb_module_header .entry-title{
                  margin: 0;
                  font-size: 13px;
                  font-weight: 500;
                  line-height: 18px;
                }.tdb_module_header .td-post-author-name,
                .tdb_module_header .td-post-date,
                .tdb_module_header .td-module-comments{
                  vertical-align: text-top;
                }.tdb_module_header .td-post-author-name,
                .tdb_module_header .td-post-date{
                  top: 3px;
                }.tdb_module_header .td-thumb-css{
                  width: 100%;
                  height: 100%;
                  position: absolute;
                  background-size: cover;
                  background-position: center center;
                }.tdb_module_header .td-category-pos-image .td-post-category:not(.td-post-extra-category),
                .tdb_module_header .td-post-vid-time{
                  position: absolute;
                  z-index: 2;
                  bottom: 0;
                }.tdb_module_header .td-category-pos-image .td-post-category:not(.td-post-extra-category){
                  left: 0;
                }.tdb_module_header .td-post-vid-time{
                  right: 0;
                  background-color: #000;
                  padding: 3px 6px 4px;
                  font-family: 'Open Sans', 'Open Sans Regular', sans-serif;
                  font-size: 10px;
                  font-weight: 600;
                  line-height: 1;
                  color: #fff;
                }.tdb_module_header .td-excerpt{
                  margin: 20px 0 0;
                  line-height: 21px;
                }.tdb_module_header .td-read-more{
                  margin: 20px 0 0;
                }.tdb_module_search .tdb-author-photo{
                  display: inline-block;
                }.tdb_module_search .tdb-author-photo,
                .tdb_module_search .tdb-author-photo img{
                  vertical-align: middle;
                }.tdb_module_search .td-post-author-name{
                  white-space: normal;
                }.tdb_header_search{
                  margin-bottom: 0;
                  z-index: 1000;
                  clear: none;
                }.tdb_header_search .tdb-block-inner{
                  position: relative;
                  display: inline-block;
                  width: 100%;
                }.tdb_header_search .tdb-head-search-btn{
                  display: flex;
                  align-items: center;
                  position: relative;
                  text-align: center;
                  color: #4db2ec;
                }.tdb_header_search .tdb-head-search-btn:after{
                  visibility: hidden;
                  opacity: 0;
                  content: '';
                  display: block;
                  position: absolute;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  margin: 0 auto;
                  width: 0;
                  height: 0;
                  border-style: solid;
                  border-width: 0 6.5px 7px 6.5px;
                  -webkit-transform: translate3d(0, 20px, 0);
                  transform: translate3d(0, 20px, 0);
                  -webkit-transition: all 0.4s ease;
                  transition: all 0.4s ease;
                  border-color: transparent transparent #4db2ec transparent;
                }.tdb_header_search .tdb-drop-down-search-open + .tdb-head-search-btn:after{
                  visibility: visible;
                  opacity: 1;
                  -webkit-transform: translate3d(0, 0, 0);
                  transform: translate3d(0, 0, 0);
                }.tdb_header_search .tdb-search-icon,
                .tdb_header_search .tdb-search-txt,
                .tdb_header_search .tdb-search-icon-svg svg *{
                  -webkit-transition: all 0.3s ease-in-out;
                  transition: all 0.3s ease-in-out;
                }.tdb_header_search .tdb-search-icon-svg{
                  display: flex;
                  align-items: center;
                  justify-content: center;
                }.tdb_header_search .tdb-search-icon-svg svg{
                  height: auto;
                }.tdb_header_search .tdb-search-icon-svg svg,
                .tdb_header_search .tdb-search-icon-svg svg *{
                  fill: #4db2ec;
                }.tdb_header_search .tdb-search-txt{
                  position: relative;
                  line-height: 1;
                }.tdb_header_search .tdb-drop-down-search{
                  visibility: hidden;
                  opacity: 0;
                  position: absolute;
                  top: 100%;
                  left: 0;
                  -webkit-transform: translate3d(0, 20px, 0);
                  transform: translate3d(0, 20px, 0);
                  -webkit-transition: all 0.4s ease;
                  transition: all 0.4s ease;
                  pointer-events: none;
                  z-index: 10;
                }.tdb_header_search .tdb-drop-down-search-open{
                  visibility: visible;
                  opacity: 1;
                  -webkit-transform: translate3d(0, 0, 0);
                  transform: translate3d(0, 0, 0);
                }.tdb_header_search .tdb-drop-down-search-inner{
                  position: relative;
                  max-width: 300px;
                  pointer-events: all;
                }.tdb_header_search .tdb-search-form{
                  position: relative;
                  padding: 20px;
                  border-width: 3px 0 0;
                  border-style: solid;
                  border-color: #4db2ec;
                  pointer-events: auto;
                }.tdb_header_search .tdb-search-form:before{
                  content: '';
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                  background-color: #fff;
                }.tdb_header_search .tdb-search-form-inner{
                  position: relative;
                  display: flex;
                  background-color: #fff;
                }.tdb_header_search .tdb-search-form-inner:after{
                  content: '';
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                  border: 1px solid #e1e1e1;
                  pointer-events: none;
                }.tdb_header_search .tdb-head-search-placeholder{
                  position: absolute;
                  top: 50%;
                  transform: translateY(-50%);
                  padding: 3px 9px;
                  font-size: 12px;
                  line-height: 21px;
                  color: #999;
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                  pointer-events: none;
                }.tdb_header_search .tdb-head-search-form-input:focus + .tdb-head-search-placeholder{
                  opacity: 0;
                }.tdb_header_search .tdb-head-search-form-btn,
                .tdb_header_search .tdb-head-search-form-input{
                  height: auto;
                  min-height: 32px;
                }.tdb_header_search .tdb-head-search-form-input{
                  color: #444;
                  flex: 1;
                  background-color: transparent;
                  border: 0;
                }.tdb_header_search .tdb-head-search-form-input.tdb-head-search-nofocus{
                  color: transparent;
                  text-shadow: 0 0 0 #444;
                }.tdb_header_search .tdb-head-search-form-btn{
                  margin-bottom: 0;
                  padding: 0 15px;
                  background-color: #222222;
                  font-family: 'Roboto', sans-serif;
                  font-size: 13px;
                  font-weight: 500;
                  color: #fff;
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                  z-index: 1;
                }.tdb_header_search .tdb-head-search-form-btn:hover{
                  background-color: #4db2ec;
                }.tdb_header_search .tdb-head-search-form-btn i,
                .tdb_header_search .tdb-head-search-form-btn span{
                  display: inline-block;
                  vertical-align: middle;
                }.tdb_header_search .tdb-head-search-form-btn i{
                  font-size: 12px;
                }.tdb_header_search .tdb-head-search-form-btn .tdb-head-search-form-btn-icon{
                  position: relative;
                }.tdb_header_search .tdb-head-search-form-btn .tdb-head-search-form-btn-icon-svg{
                  line-height: 0;
                }.tdb_header_search .tdb-head-search-form-btn svg{
                  width: 12px;
                  height: auto;
                }.tdb_header_search .tdb-head-search-form-btn svg,
                .tdb_header_search .tdb-head-search-form-btn svg *{
                  fill: #fff;
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                }.tdb_header_search .tdb-aj-search-results{
                  padding: 20px;
                  background-color: rgba(144, 144, 144, 0.02);
                  border-width: 1px 0;
                  border-style: solid;
                  border-color: #ededed;
                  background-color: #fff;
                }.tdb_header_search .tdb-aj-search-results .td_module_wrap:last-child{
                  margin-bottom: 0;
                  padding-bottom: 0;
                }.tdb_header_search .tdb-aj-search-results .td_module_wrap:last-child .td-module-container:before{
                  display: none;
                }.tdb_header_search .tdb-aj-search-inner{
                  display: flex;
                  flex-wrap: wrap;
                  *zoom: 1;
                }.tdb_header_search .tdb-aj-search-inner:before,
                .tdb_header_search .tdb-aj-search-inner:after{
                  display: table;
                  content: '';
                  line-height: 0;
                }.tdb_header_search .tdb-aj-search-inner:after{
                  clear: both;
                }.tdb_header_search .result-msg{
                  padding: 4px 0 6px 0;
                  font-family: 'Roboto', sans-serif;
                  font-size: 12px;
                  font-style: italic;
                  background-color: #fff;
                }.tdb_header_search .result-msg a{
                  color: #222;
                }.tdb_header_search .result-msg a:hover{
                  color: #4db2ec;
                }.tdb_header_search .td-module-meta-info,
                .tdb_header_search .td-next-prev-wrap{
                  text-align: left;
                }.tdb_header_search .td_module_wrap:hover .entry-title a{
                  color: #4db2ec;
                }.tdb_header_search .tdb-aj-cur-element .entry-title a{
                  color: #4db2ec;
                }.tdc-dragged .tdb-head-search-btn:after,
                .tdc-dragged .tdb-drop-down-search{
                  visibility: hidden !important;
                  opacity: 0 !important;
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                }.tdi_52 .tdb-head-search-btn i{
                    font-size: 18px;
                
                    width: 46.8px;
					height: 46.8px;
					line-height:  46.8px;
                
                    color: #ffffff;
                }.tdi_52 .tdb-head-search-btn svg{
                    width: 18px;
                }.tdi_52 .tdb-search-icon-svg{
                    width: 46.8px;
					height: 46.8px;
                }.tdi_52 .tdb-search-txt{
                    top: 0px;
                
                    font-family:Proxima Nova Reguler !important;
                }.tdi_52 .tdb-drop-down-search{
                    left: auto;
                    right: 0;
                }.tdi_52 .tdb-drop-down-search-inner,
                .tdi_52 .tdb-search-form,
                .tdi_52 .tdb-aj-search{
                    margin-left: auto;
                    margin-right: 0;
                }.tdi_52 .tdb-head-search-form-btn-icon{
                    top: 0px;
                }.tdi_52 .result-msg{
                    text-align: center;
                
                    font-family:Proxima Nova Bold !important;font-size:11px !important;
                }.tdi_52 .tdb-head-search-btn svg,
                .tdi_52 .tdb-head-search-btn svg *{
                    fill: #ffffff;
                }.tdi_52 .tdb-search-form{
                    border-color: #dd3333;
                }.tdi_52 .tdb-head-search-btn:after{
                    border-bottom-color: #dd3333;
                }.tdi_52 .tdb-drop-down-search-inner{
                    box-shadow:  0px 2px 10px 0px rgba(0,0,0,0.12);
                }.tdi_52 .tdb-head-search-form-btn:hover{
                    background-color: #008d7f;
                }.tdi_52 .result-msg a:hover{
                    color: #008d7f;
                }.tdi_52 .tdb-head-search-form-input{
                    font-family:Proxima Nova Reguler !important;font-size:13px !important;font-weight:400 !important;
                }.tdi_52 .tdb-head-search-placeholder{
                    font-family:Proxima Nova Reguler !important;font-size:13px !important;font-weight:400 !important;
                }.tdi_52 .tdb-head-search-form-btn{
                    font-family:Proxima Nova Reguler !important;font-size:13px !important;font-weight:400 !important;
                }.tdi_52 .td_module_wrap{
					width: 100%;
					float: left;
				
					padding-left: 0px;
					padding-right: 0px;
				
					padding-bottom: 7.5px;
					margin-bottom: 7.5px;
				}.tdi_52 .td_module_wrap:nth-last-child(-n+1){
					margin-bottom: 0;
					padding-bottom: 0;
				}.tdi_52 .td_module_wrap:nth-last-child(-n+1) .td-module-container:before{
					display: none;
				}.tdi_52 .tdb-aj-search-inner{
					margin-left: -0px;
					margin-right: -0px;
				}.tdi_52 .td-module-container:before{
					bottom: -7.5px;
				
					border-color: #eaeaea;
				}.tdi_52 .td-module-container{
				    border-color: #eaeaea;
				
					flex-direction: row;
				
					align-items: center;
				}.tdi_52 .entry-thumb{
					background-position: center 50%;
				}.tdi_52 .td-image-wrap{
					padding-bottom: 80%;
				}.tdi_52 .td-image-container{
				 	flex: 0 0 30%;
				 	width: 30%;
			    
                	display: block; order: 0;
                }.ie10 .tdi_52 .td-image-container,
				.ie11 .tdi_52 .td-image-container{
				 	flex: 0 0 auto;
			    }.ie10 .tdi_52 .td-module-meta-info,
				.ie11 .tdi_52 .td-module-meta-info{
				 	flex: 1;
			    }.tdi_52 .td-post-vid-time{
					display: block;
				}.tdi_52 .td-module-meta-info{
					padding: 0 0 0 15px;
				
					border-color: #eaeaea;
				}.tdi_52 .entry-title{
					margin: 0 0 5px;
				
					font-family:Proxima Nova Bold !important;font-size:13px !important;line-height:1.2 !important;
				}.tdi_52 .td-excerpt{
					column-count: 1;
				
					column-gap: 48px;
				
					display: none;
				
					font-family:Proxima Nova Reguler !important;
				}.tdi_52 .td-post-category:not(.td-post-extra-category){
					display: none;
				}.tdi_52 .td-read-more{
					display: none;
				}.tdi_52 .td-author-date{
					display: inline;
				}.tdi_52 .td-post-author-name{
					display: none;
				}.tdi_52 .entry-review-stars{
					display: none;
				}.tdi_52 .td-icon-star,
                .tdi_52 .td-icon-star-empty,
                .tdi_52 .td-icon-star-half{
					font-size: 15px;
				}.tdi_52 .td-module-comments{
					display: none;
				}.tdi_52 .tdb-author-photo .avatar{
				    width: 20px;
				    height: 20px;
				
				    margin-right: 6px;
				
				    border-radius: 50%;
				}.td-theme-wrap .tdi_52 .td_module_wrap:hover .td-module-title a,
				.tdi_52 .tdb-aj-cur-element .entry-title a{
					color: #008d7f !important;
				}.tdi_52 .td-post-category{
					font-family:Proxima Nova Reguler !important;
				}.tdi_52 .td-editor-date,
				.tdi_52 .td-editor-date .td-post-author-name,
				.tdi_52 .td-module-comments a{
					font-family:Proxima Nova Reguler !important;font-size:11px !important;line-height:1 !important;
				}

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px){
.tdi_52 .td_module_wrap{
					padding-bottom: 7.5px !important;
					margin-bottom: 7.5px !important;
				
					padding-bottom: 7.5px;
					margin-bottom: 7.5px;
				}.tdi_52 .td_module_wrap:nth-last-child(-n+1){
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}.tdi_52 .td_module_wrap .td-module-container:before{
					display: block !important;
				}.tdi_52 .td_module_wrap:nth-last-child(-n+1) .td-module-container:before{
					display: none !important;
				}.tdi_52 .td-module-container:before{
					bottom: -7.5px;
				}
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_52 .tdb-head-search-btn i{
                    font-size: 14px;
                
                    width: 39.2px;
					height: 39.2px;
					line-height:  39.2px;
                }.tdi_52 .tdb-head-search-btn svg{
                    width: 14px;
                }.tdi_52 .tdb-search-icon-svg{
                    width: 39.2px;
					height: 39.2px;
                }.tdi_52 .td_module_wrap{
					padding-bottom: 7.5px !important;
					margin-bottom: 7.5px !important;
				
					padding-bottom: 7.5px;
					margin-bottom: 7.5px;
				}.tdi_52 .td_module_wrap:nth-last-child(-n+1){
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}.tdi_52 .td_module_wrap .td-module-container:before{
					display: block !important;
				}.tdi_52 .td_module_wrap:nth-last-child(-n+1) .td-module-container:before{
					display: none !important;
				}.tdi_52 .td-module-container:before{
					bottom: -7.5px;
				}
}

/* phone */
@media (max-width: 767px){
.tdi_52 .td_module_wrap{
					padding-bottom: 7.5px !important;
					margin-bottom: 7.5px !important;
				
					padding-bottom: 7.5px;
					margin-bottom: 7.5px;
				}.tdi_52 .td_module_wrap:nth-last-child(-n+1){
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}.tdi_52 .td_module_wrap .td-module-container:before{
					display: block !important;
				}.tdi_52 .td_module_wrap:nth-last-child(-n+1) .td-module-container:before{
					display: none !important;
				}.tdi_52 .td-module-container:before{
					bottom: -7.5px;
				}
}
</style><div class="tdb-block-inner td-fix-index"><div class="tdb-drop-down-search" aria-labelledby="td-header-search-button"><div class="tdb-drop-down-search-inner"><form method="get" class="tdb-search-form" action="https://telset.id/"><div class="tdb-search-form-inner"><input class="tdb-head-search-form-input" type="text" value="" name="s" autocomplete="off" /><button class="wpb_button wpb_btn-inverse btn tdb-head-search-form-btn" type="submit"><span>pencarian</span></button></div></form><div class="tdb-aj-search"></div></div></div><a href="#" role="button" aria-label="Search" class="tdb-head-search-btn dropdown-toggle" data-toggle="dropdown"><span class="tdb-search-icon tdb-search-icon-svg"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path d="M958.484 910.161l-134.564-134.502c63.099-76.595 94.781-170.455 94.72-264.141 0.061-106.414-40.755-213.228-121.917-294.431-81.244-81.183-187.976-121.958-294.359-121.938-106.435-0.020-213.187 40.796-294.369 121.938-81.234 81.203-122.010 188.017-121.989 294.369-0.020 106.445 40.755 213.166 121.989 294.287 81.193 81.285 187.945 122.020 294.369 121.979 93.716 0.041 187.597-31.642 264.11-94.659l134.554 134.564 57.457-57.467zM265.431 748.348c-65.546-65.495-98.13-150.999-98.171-236.882 0.041-85.832 32.625-171.346 98.171-236.913 65.567-65.536 151.081-98.099 236.933-98.14 85.821 0.041 171.336 32.604 236.902 98.14 65.495 65.516 98.12 151.122 98.12 236.913 0 85.924-32.625 171.387-98.12 236.882-65.556 65.495-151.009 98.099-236.902 98.099-85.852 0-171.366-32.604-236.933-98.099zM505.385 272.864c-61.901 0.020-123.566 23.501-170.824 70.799-47.288 47.258-70.769 108.923-70.799 170.834-0.041 26.624 4.383 53.105 13.046 78.428-0.031-0.522-0.092-1.024-0.031-1.556 13.199-91.341 48.241-159.775 96.963-208.497v-0.020h0.031c48.712-48.722 117.135-83.763 208.486-96.963 0.522-0.061 1.024 0 1.536 0.041-25.313-8.684-51.794-13.087-78.408-13.066z"></path></svg></span></a></div></div> <!-- ./block --></div></div></div></div></div></div>                </div>
                                <div class="td-header-desktop-sticky-wrap tdc-zone-sticky-invisible tdc-zone-sticky-inactive" style="display: none">
                    <div id="tdi_53" class="tdc-zone"><div class="tdc_zone tdi_54  wpb_row td-pb-row" data-sticky-offset="0" >
<style scoped>

/* custom css */
.tdi_54{
                    min-height: 0;
                }.td-header-desktop-sticky-wrap.td-header-active{
                    opacity: 1;
                
                    transform: translateY(0);
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                }.td-header-desktop-sticky-wrap{
                    transform: translateY(-120%);
                    -webkit-transform: translateY(-120%);
                    -moz-transform: translateY(-120%);
                    -ms-transform: translateY(-120%);
                    -o-transform: translateY(-120%);
                
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    -o-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
</style><div id="tdi_55" class="tdc-row"><div class="vc_row tdi_56  wpb_row td-pb-row tdc-element-style tdc-row-content-vert-center" >
<style scoped>

/* custom css */
.tdi_56,
                .tdi_56 .tdc-columns{
                    min-height: 0;
                }.tdi_56,
				.tdi_56 .tdc-columns{
				    display: flex;
				
				    flex-direction: row;
				
				    flex-wrap: nowrap;
				
				    justify-content: space-between;
				
				    align-items: center;
				}.tdi_56 .tdc-columns{
				    width: 100%;
				}@media (min-width: 767px) {
                    .tdi_56.tdc-row-content-vert-center,
                    .tdi_56.tdc-row-content-vert-center .tdc-columns {
                        display: flex;
                        align-items: center;
                        flex: 1;
                    }
                    .tdi_56.tdc-row-content-vert-bottom,
                    .tdi_56.tdc-row-content-vert-bottom .tdc-columns {
                        display: flex;
                        align-items: flex-end;
                        flex: 1;
                    }
                    .tdi_56.tdc-row-content-vert-center .td_block_wrap {
                        vertical-align: middle;
                    }
                    .tdi_56.tdc-row-content-vert-bottom .td_block_wrap {
                        vertical-align: bottom;
                    }
                }
/* inline tdc_css att */

.tdi_56{
margin-right:-24px !important;
margin-left:-24px !important;
position:relative;
}

.tdi_56 .td_block_wrap{ text-align:left }

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_56{
margin-right:-10px !important;
margin-left:-10px !important;
}
}

</style>
<div class="tdi_55_rand_style td-element-style" ><div class="td-element-style-before"><style>
.tdi_55_rand_style > .td-element-style-before {
content:'' !important;
width:100% !important;
height:100% !important;
position:absolute !important;
top:0 !important;
left:0 !important;
display:block !important;
z-index:0 !important;
background-image:url("https://telset.id/wp-content/uploads/2021/04/202007275bd78565-b48c-584b-cde0-a0735592d83e.jpg") !important;
opacity:0.2 !important;
background-size:cover !important;
background-position:center top !important;
}
</style></div><style>
.tdi_55_rand_style{
background-color:#232d35 !important;
}
 </style></div><div class="vc_column tdi_58  wpb_column vc_column_container tdc-column td-pb-span9">
<style scoped>

/* custom css */
.tdi_58{
                    vertical-align: baseline;
                
				    flex-grow: 1;
				}.tdi_58 > .wpb_wrapper,
				.tdi_58 > .wpb_wrapper > .tdc-elements{
				    display: flex;
				
				    flex-direction: row;
				
				    flex-wrap: nowrap;
				
				    justify-content: space-between;
				
				    align-items: center;
				}.tdi_58 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_58 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_58 > .wpb_wrapper{
				    width: 100%;
				    height: 100%;
				}
/* inline tdc_css att */

.tdi_58{
width:90% !important;
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_58{
width:92% !important;
}
}

</style><div class="wpb_wrapper"><div class="td_block_wrap tdb_header_menu tdi_59 tds_menu_active3 tds_menu_sub_active1 tdb-mm-align-screen td-pb-border-top td_block_template_8 tdb-header-align"  data-td-block-uid="tdi_59"  style=" z-index: 999;">
<style>

/* inline tdc_css att */

.tdi_59{
margin-left:-10px !important;
}

</style>
<style>
/* custom css */
.tdi_59 .td_block_inner{
                    text-align: center;
                }.tdi_59 .tdb-menu > li > a,
                .tdi_59 .td-subcat-more{
                    padding: 0 12px;
                
                    color: #ffffff;
                }.tdi_59 .tdb-menu > li .tdb-menu-sep,
                .tdi_59 .tdb-menu-items-dropdown .tdb-menu-sep{
                    top: -1px;
                }.tdi_59 .tdb-menu > li > a .tdb-sub-menu-icon,
                .tdi_59 .td-subcat-more .tdb-menu-more-subicon{
                    font-size: 10px;
                
                    top: 1px;
                }.tdi_59 .td-subcat-more .tdb-menu-more-icon{
                    top: 0px;
                }.tdi_59 .tdb-menu > li > a .tdb-sub-menu-icon-svg svg,
                .tdi_59 .tdb-menu > li > a .tdb-sub-menu-icon-svg svg *,
                .tdi_59 .td-subcat-more .tdb-menu-more-subicon-svg svg,
                .tdi_59 .td-subcat-more .tdb-menu-more-subicon-svg svg *,
                .tdi_59 .td-subcat-more .tdb-menu-more-icon-svg,
                .tdi_59 .td-subcat-more .tdb-menu-more-icon-svg *{
                    fill: #ffffff;
                }.tdi_59 .tdb-menu > li > a,
                .tdi_59 .td-subcat-more,
                .tdi_59 .td-subcat-more > .tdb-menu-item-text{
                    font-family:Proxima Nova Bold !important;font-size:13px !important;line-height:48px !important;font-weight:400 !important;text-transform:capitalize !important;letter-spacing:0.4px !important;
                }.tdi_59 .tdb-menu > .tdb-normal-menu > ul,
                .tdi_59 .td-pulldown-filter-list{
                    left: -15px;
                }.tdi_59 .tdb-normal-menu ul ul,
                .tdi_59 .td-pulldown-filter-list .sub-menu{
                    margin-top: -15px;
                }.tdi_59 .tdb-menu .tdb-normal-menu ul,
                .tdi_59 .td-pulldown-filter-list,
                .tdi_59 .td-pulldown-filter-list .sub-menu{
                    padding: 10px 0 15px;
                
                    box-shadow:  0px 2px 10px 0px rgba(0,0,0,0.15);
                }.tdi_59 .tdb-menu .tdb-normal-menu ul .tdb-menu-item > a,
                .tdi_59 .tdb-menu-items-dropdown .td-pulldown-filter-list li > a{
                    padding: 5px 20px;
                }.tdi_59 .tdb-normal-menu ul .tdb-menu-item > a .tdb-sub-menu-icon,
                .tdi_59 .td-pulldown-filter-list .tdb-menu-item > a .tdb-sub-menu-icon{
                    right: 0;
                
                    margin-top: 1px;
                }.tdi_59 .tdb-menu .tdb-normal-menu ul .tdb-menu-item > a,
                .tdi_59 .tdb-menu-items-dropdown .td-pulldown-filter-list li a,
                .tdi_59 .tdb-menu-items-dropdown .td-pulldown-filter-list li a{
                    color: #000000;
                }.tdi_59 .tdb-menu .tdb-normal-menu ul .tdb-menu-item > a .tdb-sub-menu-icon-svg svg,
                .tdi_59 .tdb-menu .tdb-normal-menu ul .tdb-menu-item > a .tdb-sub-menu-icon-svg svg *,
                .tdi_59 .tdb-menu-items-dropdown .td-pulldown-filter-list li a .tdb-sub-menu-icon-svg svg,
                .tdi_59 .tdb-menu-items-dropdown .td-pulldown-filter-list li a .tdb-sub-menu-icon-svg svg *{
                    fill: #000000;
                }.tdi_59 .tdb-menu .tdb-normal-menu ul .tdb-menu-item > a,
                .tdi_59 .td-pulldown-filter-list li a{
                    font-family:Proxima Nova Bold !important;font-size:12px !important;font-weight:500 !important;
                }.tdi_59:not(.tdb-mm-align-screen) .tdb-mega-menu .sub-menu,
                .tdi_59 .tdb-mega-menu .sub-menu > li{
                    max-width: 1164px !important;
                }.tdi_59 .tdb-menu .tdb-mega-menu .sub-menu > li{
					border-width: 0px;
				
					box-shadow:  0px 4px 20px 0px rgba(0,0,0,0.15);
				}@media (max-width: 1018px) {
                    .tdi_59 .td-pulldown-filter-list {
                        left: auto;
                        right: -15px;
                    }
                }

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px){
.tdi_59:not(.tdb-mm-align-screen) .tdb-mega-menu .sub-menu,
                .tdi_59 .tdb-mega-menu .sub-menu > li{
                    max-width: 100% !important;
                }
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_59 .tdb-menu > li > a,
                .tdi_59 .td-subcat-more{
                    padding: 0 10px;
                }.tdi_59 .tdb-menu > li > a .tdb-sub-menu-icon,
                .tdi_59 .td-subcat-more .tdb-menu-more-subicon{
                    font-size: 9px;
                
                    margin-left: 5px;
                
                    top: 0px;
                }.tdi_59 .tdb-menu > li > a,
                .tdi_59 .td-subcat-more,
                .tdi_59 .td-subcat-more > .tdb-menu-item-text{
                    font-family:Proxima Nova Bold !important;font-size:10px !important;line-height:40px !important;font-weight:400 !important;text-transform:capitalize !important;letter-spacing:0.4px !important;
                }.tdi_59:not(.tdb-mm-align-screen) .tdb-mega-menu .sub-menu,
                .tdi_59 .tdb-mega-menu .sub-menu > li{
                    max-width: 100% !important;
                }
}
</style>
<style>
.tdi_59 .tdb-menu > li > a:after,
				.tdi_59 .tdb-menu-items-dropdown .td-subcat-more:after{
					background-color: #000000;
				}
</style>
<style>
.tdi_59 .tdb-menu ul .tdb-normal-menu.current-menu-item > a,
				.tdi_59 .tdb-menu ul .tdb-normal-menu.current-menu-ancestor > a,
				.tdi_59 .tdb-menu ul .tdb-normal-menu.current-category-ancestor > a,
				.tdi_59 .tdb-menu ul .tdb-normal-menu.tdb-hover > a,
				.tdi_59 .tdb-menu ul .tdb-normal-menu:hover > a,
				.tdi_59 .tdb-menu-items-dropdown .td-pulldown-filter-list li:hover > a{
					color: #008d7f;
				}.tdi_59 .tdb-menu ul .tdb-normal-menu.current-menu-item > a .tdb-sub-menu-icon-svg svg,
				.tdi_59 .tdb-menu ul .tdb-normal-menu.current-menu-item > a .tdb-sub-menu-icon-svg svg *,
				.tdi_59 .tdb-menu ul .tdb-normal-menu.current-menu-ancestor > a .tdb-sub-menu-icon-svg svg,
				.tdi_59 .tdb-menu ul .tdb-normal-menu.current-menu-ancestor > a .tdb-sub-menu-icon-svg svg *,
				.tdi_59 .tdb-menu ul .tdb-normal-menu.current-category-ancestor > a .tdb-sub-menu-icon-svg svg,
				.tdi_59 .tdb-menu ul .tdb-normal-menu.current-category-ancestor > a .tdb-sub-menu-icon-svg svg *,
				.tdi_59 .tdb-menu ul .tdb-normal-menu.tdb-hover > a .tdb-sub-menu-icon-svg svg,
				.tdi_59 .tdb-menu ul .tdb-normal-menu.tdb-hover > a .tdb-sub-menu-icon-svg svg *,
				.tdi_59 .tdb-menu ul .tdb-normal-menu:hover > a .tdb-sub-menu-icon-svg svg,
				.tdi_59 .tdb-menu ul .tdb-normal-menu:hover > a .tdb-sub-menu-icon-svg svg *,
				.tdi_59 .tdb-menu-items-dropdown .td-pulldown-filter-list li:hover > a .tdb-sub-menu-icon-svg svg,
				.tdi_59 .tdb-menu-items-dropdown .td-pulldown-filter-list li:hover > a .tdb-sub-menu-icon-svg svg *{
					fill: #008d7f;
				}
</style><div id=tdi_59 class="td_block_inner td-fix-index"><div class="tdb-main-sub-icon-fake"><i class="tdb-sub-menu-icon td-icon-down tdb-main-sub-menu-icon"></i></div><div class="tdb-sub-icon-fake"><i class="tdb-sub-menu-icon td-icon-right-arrow"></i></div><ul id="menu-daftar-harga" class="tdb-block-menu tdb-menu tdb-menu-items-visible"><li id="menu-item-285080" class="menuharga menu-item menu-item-type-custom menu-item-object-custom tdb-cur-menu-item menu-item-first tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-285080"><a href="https://gadget.telset.id/product-tag/apple/" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><div class="tdb-menu-item-text">Apple iPhone</div></a></li>
<li id="menu-item-285081" class="menuharga menu-item menu-item-type-custom menu-item-object-custom tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-285081"><a href="https://gadget.telset.id/product-tag/samsung/" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><div class="tdb-menu-item-text">Samsung</div></a></li>
<li id="menu-item-285082" class="menuharga menu-item menu-item-type-custom menu-item-object-custom tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-285082"><a href="https://gadget.telset.id/product-tag/Xiaomi/" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><div class="tdb-menu-item-text">Xiaomi</div></a></li>
<li id="menu-item-285083" class="menuharga menu-item menu-item-type-custom menu-item-object-custom tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-285083"><a href="https://gadget.telset.id/product-tag/Oppo/" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><div class="tdb-menu-item-text">Oppo</div></a></li>
<li id="menu-item-285084" class="menuharga menu-item menu-item-type-custom menu-item-object-custom tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-285084"><a href="https://gadget.telset.id/product-tag/Vivo/" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><div class="tdb-menu-item-text">Vivo</div></a></li>
<li id="menu-item-285085" class="menuharga menu-item menu-item-type-custom menu-item-object-custom tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-285085"><a href="https://gadget.telset.id/product-tag/asus/" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><div class="tdb-menu-item-text">Asus</div></a></li>
<li id="menu-item-285086" class="menuharga menu-item menu-item-type-custom menu-item-object-custom tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-285086"><a href="https://gadget.telset.id/product-tag/huawei/" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><div class="tdb-menu-item-text">Huawei</div></a></li>
<li id="menu-item-285087" class="menuharga menu-item menu-item-type-custom menu-item-object-custom tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-285087"><a href="https://gadget.telset.id/product-tag/realme/" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><div class="tdb-menu-item-text">Realme</div></a></li>
<li id="menu-item-285088" class="menuharga menu-item menu-item-type-custom menu-item-object-custom tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-285088"><a href="https://gadget.telset.id/product-tag/nokia/" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><div class="tdb-menu-item-text">Nokia</div></a></li>
<li id="menu-item-285089" class="menuharga menu-item menu-item-type-custom menu-item-object-custom tdb-menu-item-button tdb-menu-item tdb-normal-menu menu-item-285089"><a href="https://gadget.telset.id/product-tag/infinix/" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><div class="tdb-menu-item-text">Infinix</div></a></li>
</ul></div></div></div></div><div class="vc_column tdi_63  wpb_column vc_column_container tdc-column td-pb-span3">
<style scoped>

/* custom css */
.tdi_63{
                    vertical-align: baseline;
                }.tdi_63 > .wpb_wrapper,
				.tdi_63 > .wpb_wrapper > .tdc-elements{
				    display: flex;
				
				    flex-direction: row;
				
				    flex-wrap: nowrap;
				
				    justify-content: flex-end;
				
				    align-items: flex-start;
				}.tdi_63 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_63 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_63 > .wpb_wrapper{
				    width: 100%;
				    height: 100%;
				}
/* inline tdc_css att */

.tdi_63{
width:10% !important;
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_63{
width:8% !important;
}
}

</style><div class="wpb_wrapper"><div class="td_block_wrap tdb_header_search tdi_64 td-pb-border-top td_block_template_8 tdb-header-align"  data-td-block-uid="tdi_64" >
<style>
/* custom css */
.tdi_64 .tdb-head-search-btn i{
                    font-size: 18px;
                
                    width: 46.8px;
					height: 46.8px;
					line-height:  46.8px;
                
                    color: #ffffff;
                }.tdi_64 .tdb-head-search-btn svg{
                    width: 18px;
                }.tdi_64 .tdb-search-icon-svg{
                    width: 46.8px;
					height: 46.8px;
                }.tdi_64 .tdb-search-txt{
                    top: 0px;
                }.tdi_64 .tdb-drop-down-search{
                    left: auto;
                    right: 0;
                }.tdi_64 .tdb-drop-down-search-inner,
                .tdi_64 .tdb-search-form,
                .tdi_64 .tdb-aj-search{
                    margin-left: auto;
                    margin-right: 0;
                }.tdi_64 .tdb-head-search-form-btn-icon{
                    top: 0px;
                }.tdi_64 .result-msg{
                    text-align: center;
                
                    font-family:Proxima Nova Bold !important;font-size:11px !important;
                }.tdi_64 .tdb-head-search-btn svg,
                .tdi_64 .tdb-head-search-btn svg *{
                    fill: #ffffff;
                }.tdi_64 .tdb-search-form{
                    border-color: #dd3333;
                }.tdi_64 .tdb-head-search-btn:after{
                    border-bottom-color: #dd3333;
                }.tdi_64 .tdb-drop-down-search-inner{
                    box-shadow:  0px 2px 10px 0px rgba(0,0,0,0.12);
                }.tdi_64 .tdb-head-search-form-btn:hover{
                    background-color: #008d7f;
                }.tdi_64 .result-msg a:hover{
                    color: #008d7f;
                }.tdi_64 .tdb-head-search-form-input{
                    font-family:Proxima Nova Bold !important;font-size:13px !important;font-weight:400 !important;
                }.tdi_64 .tdb-head-search-placeholder{
                    font-family:Proxima Nova Bold !important;font-size:13px !important;font-weight:400 !important;
                }.tdi_64 .tdb-head-search-form-btn{
                    font-family:Proxima Nova Bold !important;font-size:13px !important;font-weight:400 !important;
                }.tdi_64 .td_module_wrap{
					width: 100%;
					float: left;
				
					padding-left: 0px;
					padding-right: 0px;
				
					padding-bottom: 7.5px;
					margin-bottom: 7.5px;
				}.tdi_64 .td_module_wrap:nth-last-child(-n+1){
					margin-bottom: 0;
					padding-bottom: 0;
				}.tdi_64 .td_module_wrap:nth-last-child(-n+1) .td-module-container:before{
					display: none;
				}.tdi_64 .tdb-aj-search-inner{
					margin-left: -0px;
					margin-right: -0px;
				}.tdi_64 .td-module-container:before{
					bottom: -7.5px;
				
					border-color: #eaeaea;
				}.tdi_64 .td-module-container{
				    border-color: #eaeaea;
				
					flex-direction: row;
				
					align-items: center;
				}.tdi_64 .entry-thumb{
					background-position: center 50%;
				}.tdi_64 .td-image-wrap{
					padding-bottom: 80%;
				}.tdi_64 .td-image-container{
				 	flex: 0 0 30%;
				 	width: 30%;
			    
                	display: block; order: 0;
                }.ie10 .tdi_64 .td-image-container,
				.ie11 .tdi_64 .td-image-container{
				 	flex: 0 0 auto;
			    }.ie10 .tdi_64 .td-module-meta-info,
				.ie11 .tdi_64 .td-module-meta-info{
				 	flex: 1;
			    }.tdi_64 .td-post-vid-time{
					display: block;
				}.tdi_64 .td-module-meta-info{
					padding: 0 0 0 15px;
				
					border-color: #eaeaea;
				}.tdi_64 .entry-title{
					margin: 0 0 5px;
				
					font-family:Proxima Nova Bold !important;font-size:13px !important;line-height:1.2 !important;
				}.tdi_64 .td-excerpt{
					column-count: 1;
				
					column-gap: 48px;
				
					display: none;
				}.tdi_64 .td-post-category:not(.td-post-extra-category){
					display: none;
				}.tdi_64 .td-read-more{
					display: none;
				}.tdi_64 .td-author-date{
					display: inline;
				}.tdi_64 .td-post-author-name{
					display: none;
				}.tdi_64 .entry-review-stars{
					display: none;
				}.tdi_64 .td-icon-star,
                .tdi_64 .td-icon-star-empty,
                .tdi_64 .td-icon-star-half{
					font-size: 15px;
				}.tdi_64 .td-module-comments{
					display: none;
				}.tdi_64 .tdb-author-photo .avatar{
				    width: 20px;
				    height: 20px;
				
				    margin-right: 6px;
				
				    border-radius: 50%;
				}.td-theme-wrap .tdi_64 .td_module_wrap:hover .td-module-title a,
				.tdi_64 .tdb-aj-cur-element .entry-title a{
					color: #008d7f !important;
				}.tdi_64 .td-editor-date,
				.tdi_64 .td-editor-date .td-post-author-name,
				.tdi_64 .td-module-comments a{
					font-family:Proxima Nova Bold !important;font-size:11px !important;line-height:1 !important;
				}

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px){
.tdi_64 .td_module_wrap{
					padding-bottom: 7.5px !important;
					margin-bottom: 7.5px !important;
				
					padding-bottom: 7.5px;
					margin-bottom: 7.5px;
				}.tdi_64 .td_module_wrap:nth-last-child(-n+1){
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}.tdi_64 .td_module_wrap .td-module-container:before{
					display: block !important;
				}.tdi_64 .td_module_wrap:nth-last-child(-n+1) .td-module-container:before{
					display: none !important;
				}.tdi_64 .td-module-container:before{
					bottom: -7.5px;
				}
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_64 .tdb-head-search-btn i{
                    font-size: 14px;
                
                    width: 39.2px;
					height: 39.2px;
					line-height:  39.2px;
                }.tdi_64 .tdb-head-search-btn svg{
                    width: 14px;
                }.tdi_64 .tdb-search-icon-svg{
                    width: 39.2px;
					height: 39.2px;
                }.tdi_64 .td_module_wrap{
					padding-bottom: 7.5px !important;
					margin-bottom: 7.5px !important;
				
					padding-bottom: 7.5px;
					margin-bottom: 7.5px;
				}.tdi_64 .td_module_wrap:nth-last-child(-n+1){
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}.tdi_64 .td_module_wrap .td-module-container:before{
					display: block !important;
				}.tdi_64 .td_module_wrap:nth-last-child(-n+1) .td-module-container:before{
					display: none !important;
				}.tdi_64 .td-module-container:before{
					bottom: -7.5px;
				}
}

/* phone */
@media (max-width: 767px){
.tdi_64 .td_module_wrap{
					padding-bottom: 7.5px !important;
					margin-bottom: 7.5px !important;
				
					padding-bottom: 7.5px;
					margin-bottom: 7.5px;
				}.tdi_64 .td_module_wrap:nth-last-child(-n+1){
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}.tdi_64 .td_module_wrap .td-module-container:before{
					display: block !important;
				}.tdi_64 .td_module_wrap:nth-last-child(-n+1) .td-module-container:before{
					display: none !important;
				}.tdi_64 .td-module-container:before{
					bottom: -7.5px;
				}
}
</style><div class="tdb-block-inner td-fix-index"><div class="tdb-drop-down-search" aria-labelledby="td-header-search-button"><div class="tdb-drop-down-search-inner"><form method="get" class="tdb-search-form" action="https://telset.id/"><div class="tdb-search-form-inner"><input class="tdb-head-search-form-input" type="text" value="" name="s" autocomplete="off" /><button class="wpb_button wpb_btn-inverse btn tdb-head-search-form-btn" type="submit"><span>pencarian</span></button></div></form><div class="tdb-aj-search"></div></div></div><a href="#" role="button" aria-label="Search" class="tdb-head-search-btn dropdown-toggle" data-toggle="dropdown"><span class="tdb-search-icon tdb-search-icon-svg"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path d="M958.484 910.161l-134.564-134.502c63.099-76.595 94.781-170.455 94.72-264.141 0.061-106.414-40.755-213.228-121.917-294.431-81.244-81.183-187.976-121.958-294.359-121.938-106.435-0.020-213.187 40.796-294.369 121.938-81.234 81.203-122.010 188.017-121.989 294.369-0.020 106.445 40.755 213.166 121.989 294.287 81.193 81.285 187.945 122.020 294.369 121.979 93.716 0.041 187.597-31.642 264.11-94.659l134.554 134.564 57.457-57.467zM265.431 748.348c-65.546-65.495-98.13-150.999-98.171-236.882 0.041-85.832 32.625-171.346 98.171-236.913 65.567-65.536 151.081-98.099 236.933-98.14 85.821 0.041 171.336 32.604 236.902 98.14 65.495 65.516 98.12 151.122 98.12 236.913 0 85.924-32.625 171.387-98.12 236.882-65.556 65.495-151.009 98.099-236.902 98.099-85.852 0-171.366-32.604-236.933-98.099zM505.385 272.864c-61.901 0.020-123.566 23.501-170.824 70.799-47.288 47.258-70.769 108.923-70.799 170.834-0.041 26.624 4.383 53.105 13.046 78.428-0.031-0.522-0.092-1.024-0.031-1.556 13.199-91.341 48.241-159.775 96.963-208.497v-0.020h0.031c48.712-48.722 117.135-83.763 208.486-96.963 0.522-0.061 1.024 0 1.536 0.041-25.313-8.684-51.794-13.087-78.408-13.066z"></path></svg></span></a></div></div> <!-- ./block --></div></div></div></div><div id="tdi_65" class="tdc-row"><div class="vc_row tdi_66  wpb_row td-pb-row" >
<style scoped>

/* custom css */
.tdi_66,
                .tdi_66 .tdc-columns{
                    min-height: 0;
                }.tdi_66,
				.tdi_66 .tdc-columns{
				    display: block;
				}.tdi_66 .tdc-columns{
				    width: 100%;
				}
</style><div class="vc_column tdi_68  wpb_column vc_column_container tdc-column td-pb-span12">
<style scoped>

/* custom css */
.tdi_68{
                    vertical-align: baseline;
                }.tdi_68 > .wpb_wrapper,
				.tdi_68 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_68 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_68 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_68 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}
</style><div class="wpb_wrapper"><div class="wpb_wrapper td_block_separator td_block_wrap vc_separator tdi_70  td_separator_solid td_separator_center"><span style="border-color:#dd3333;border-width:3px;width:100%;"></span>
<style scoped>

/* inline tdc_css att */

.tdi_70{
margin-right:-48px !important;
margin-bottom:0px !important;
margin-left:-48px !important;
width:auto !important;
}

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px)
{
.tdi_70{
margin-right:-24px !important;
margin-left:-24px !important;
}
}

</style></div></div></div></div></div></div></div>                </div>
            </div>
                <div id="tdb-autoload-article" data-autoload="off" data-autoload-org-post-id="189614" data-autoload-type="" data-autoload-count="5" >
    <style>
        .tdb-autoload-wrap {
            position: relative;
        }
        .tdb-autoload-wrap .tdb-loader-autoload {
            top: auto !important;
            bottom: 50px !important;
        }
        .tdb-autoload-debug {
            display: none;
            width: 1068px;
            margin-right: auto;
            margin-left: auto;
        }
        @media (min-width: 1019px) and (max-width: 1018px) {
            .tdb-autoload-debug {
                width: 740px;
            }
        }
        @media (max-width: 767px) {
            .tdb-autoload-debug {
                display: none;
                width: 100%;
                padding-left: 20px;
                padding-right: 20px;
            }
        }
    </style>

        <div class="td-main-content-wrap td-container-wrap">
            <div class="tdc-content-wrap">
                <article id="template-id-362713"
                    class="post-362713 tdb_templates type-tdb_templates status-publish post"                                                                                                >
	                                    <!-- LOGIN MODAL -->

                <div id="login-form" class="white-popup-block mfp-hide mfp-with-anim">
                    <div class="td-login-wrap">
                        <a href="#" aria-label="Back" class="td-back-button"><i class="td-icon-modal-back"></i></a>
                        <div id="td-login-div" class="td-login-form-div td-display-block">
                            <div class="td-login-panel-title">Sign in</div>
                            <div class="td-login-panel-descr">Selamat Datang! Masuk ke akun Anda</div>
                            <div class="td_display_err"></div>
                            <form id="loginForm" action="#" method="post">
                            <div class="td-login-inputs"><input class="td-login-input" autocomplete="username" type="text" name="login_email" id="login_email" value="" required><label for="login_email">nama pengguna</label></div>
	                        <div class="td-login-inputs"><input class="td-login-input" autocomplete="current-password" type="password" name="login_pass" id="login_pass" value="" required><label for="login_pass">kata sandi Anda</label></div>
                            <input type="button"  name="login_button" id="login_button" class="wpb_button btn td-login-button" value="Login">
                            
                            </form>
                            <div class="td-login-info-text"><a href="#" id="forgot-pass-link">Forgot your password? Get help</a></div>
                            
                            
                            
                            <div class="td-login-info-text"><a class="privacy-policy-link" href="https://telset.id/disclaimer/" data-wpel-link="internal" target="_self" rel="follow">Disclaimer</a></div>
                        </div>

                        

                         <div id="td-forgot-pass-div" class="td-login-form-div td-display-none">
                            <div class="td-login-panel-title">Password recovery</div>
                            <div class="td-login-panel-descr">Memulihkan kata sandi anda</div>
                            <div class="td_display_err"></div>
                            <form id="forgotpassForm" action="#" method="post">
                            <div class="td-login-inputs"><input class="td-login-input" type="text" name="forgot_email" id="forgot_email" value="" required><label for="forgot_email">email Anda</label></div>
                            <input type="button" name="forgot_button" id="forgot_button" class="wpb_button btn td-login-button" value="Send My Password">
                            
                            </form>
                            <div class="td-login-info-text">Sebuah kata sandi akan dikirimkan ke email Anda.</div>
                        </div>
                        
                        
                    </div>
                </div>
                <div id="tdi_71" class="tdc-zone"><div class="tdc_zone tdi_72  wpb_row td-pb-row"  >
<style scoped>

/* custom css */
.tdi_72{
                    min-height: 0;
                }
</style><div id="tdi_73" class="tdc-row"><div class="vc_row tdi_74 td-ss-row wpb_row td-pb-row" >
<style scoped>

/* custom css */
.tdi_74,
                .tdi_74 .tdc-columns{
                    min-height: 0;
                }.tdi_74,
				.tdi_74 .tdc-columns{
				    display: block;
				}.tdi_74 .tdc-columns{
				    width: 100%;
				}
</style><div class="vc_column tdi_76  wpb_column vc_column_container tdc-column td-pb-span8">
<style scoped>

/* custom css */
.tdi_76{
                    vertical-align: baseline;
                }.tdi_76 > .wpb_wrapper,
				.tdi_76 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_76 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_76 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_76 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}
</style><div class="wpb_wrapper"><div class="wpb_wrapper td_block_empty_space td_block_wrap vc_empty_space tdi_78 "  style="height: 32px"></div><div class="td_block_wrap td_block_video_embed tdi_79 td-pb-border-top td_block_template_8"  data-td-block-uid="tdi_79" >
<style>
/* custom css */
.tdi_79 .wpb_video_wrapper{
                    position: relative;
                    height: 0;
                    padding-bottom: 56.25%;
                }.tdi_79 iframe{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100% !important;
                    height: 100% !important;
                }
</style><div class="td-block-title-wrap"></div><div id=tdi_79 class="td_block_inner td-fix-index">
                            <div class="wpb_video_wrapper">
                                <div class="rll-youtube-player" data-src="https://www.youtube.com/embed/386nA-Z9MRo" data-id="386nA-Z9MRo" data-query="enablejsapi=1&amp;feature=oembed&amp;wmode=opaque&amp;vq=hd720&amp;autoplay=1&amp;mute=1&amp;&amp;"></div><noscript><iframe class="td-youtube-player" width="600" height="560" src="https://www.youtube.com/embed/386nA-Z9MRo?enablejsapi=1&feature=oembed&wmode=opaque&vq=hd720&autoplay=1&mute=1&&" frameborder="0" allowfullscreen="" allow="autoplay"></iframe></noscript>                            
                            </div>
        
                    <script type="rocketlazyloadscript" data-rocket-type="text/javascript">window.addEventListener('DOMContentLoaded', function() {
                            
                        jQuery().ready(function() {
                            tdShowVideo.loadApiYoutube(); 
                        });
                        
                    });</script></div></div><div class="td_block_wrap tdb_breadcrumbs tdi_80 td-pb-border-top td_block_template_8 tdb-breadcrumbs "  data-td-block-uid="tdi_80" >
<style>

/* inline tdc_css att */

.tdi_80{
margin-bottom:5px !important;
}

/* phone */
@media (max-width: 767px)
{
.tdi_80{
margin-bottom:5px !important;
}
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_80{
margin-bottom:1px !important;
}
}

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px)
{
.tdi_80{
margin-bottom:5px !important;
}
}

</style>
<style>
/* custom css */
.tdb-breadcrumbs{
                  margin-bottom: 11px;
                  font-family: 'Open Sans', 'Open Sans Regular', sans-serif;
                  font-size: 12px;
                  color: #747474;
                  line-height: 18px;
                }.tdb-breadcrumbs a{
                  color: #747474;
                }.tdb-breadcrumbs a:hover{
                  color: #000;
                }.tdb-breadcrumbs .tdb-bread-sep{
                  line-height: 1;
                  vertical-align: middle;
                }.tdb-breadcrumbs .tdb-bread-sep-svg svg{
                  height: auto;
                }.tdb-breadcrumbs .tdb-bread-sep-svg svg,
                .tdb-breadcrumbs .tdb-bread-sep-svg svg *{
                  fill: #c3c3c3;
                }.single-tdb_templates.author-template .tdb_breadcrumbs{
                  margin-bottom: 2px;
                }.tdb_category_breadcrumbs{
                  margin: 21px 0 9px;
                }.search-results .tdb_breadcrumbs{
                  margin-bottom: 2px;
                }.tdi_80 .tdb-bread-sep{
                    font-size: 8px;
                
                    margin: 0 5px;
                }.td-theme-wrap .tdi_80{
					text-align: left;
				}.tdi_80{
					font-family:Proxima Nova Reguler !important;
				}
</style><div class="tdb-block-inner td-fix-index"><span><a title="" class="tdb-entry-crumb" href="https://telset.id/" data-wpel-link="internal" target="_self" rel="follow">Beranda</a></span><i class="tdb-bread-sep td-icon-right"></i><span><a title="Lihat semua kiriman dalam NGEHITS" class="tdb-entry-crumb" href="https://telset.id/ngehits/" data-wpel-link="internal" target="_self" rel="follow">NGEHITS</a></span></div></div><script type="application/ld+json">
                        {
                            "@context": "http://schema.org",
                            "@type": "BreadcrumbList",
                            "itemListElement": [{
                            "@type": "ListItem",
                            "position": 1,
                                "item": {
                                "@type": "WebSite",
                                "@id": "https://telset.id/",
                                "name": "Beranda"                                               
                            }
                        },{
                            "@type": "ListItem",
                            "position": 2,
                                "item": {
                                "@type": "WebPage",
                                "@id": "https://telset.id/ngehits/",
                                "name": "NGEHITS"
                            }
                        }    ]
                        }
                       </script><div class="td_block_wrap tdb_title tdi_81 tdb-single-title td-pb-border-top td_block_template_8"  data-td-block-uid="tdi_81" >
<style>

/* inline tdc_css att */

.tdi_81{
margin-top:10px !important;
margin-bottom:16px !important;
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_81{
margin-top:5px !important;
margin-bottom:10px !important;
}
}

/* phone */
@media (max-width: 767px)
{
.tdi_81{
margin-top:5px !important;
margin-bottom:10px !important;
}
}

</style>
<style>
/* custom css */
.tdb_title{
                  margin-bottom: 19px;
                }.tdb_title.tdb-content-horiz-center{
                  text-align: center;
                }.tdb_title.tdb-content-horiz-center .tdb-title-line{
                  margin: 0 auto;
                }.tdb_title.tdb-content-horiz-right{
                  text-align: right;
                }.tdb_title.tdb-content-horiz-right .tdb-title-line{
                  margin-left: auto;
                  margin-right: 0;
                }.tdb-title-text{
                  display: inline-block;
                  position: relative;
                  margin: 0;
                  word-wrap: break-word;
                  font-size: 30px;
                  line-height: 38px;
                  font-weight: 700;
                }.tdb-first-letter{
                  position: absolute;
                  -webkit-user-select: none;
                  user-select: none;
                  pointer-events: none;
                  text-transform: uppercase;
                  color: rgba(0, 0, 0, 0.08);
                  font-size: 6em;
                  font-weight: 300;
                  top: 50%;
                  -webkit-transform: translateY(-50%);
                  transform: translateY(-50%);
                  left: -0.36em;
                  z-index: -1;
                  -webkit-text-fill-color: initial;
                }.tdb-title-line{
                  display: none;
                  position: relative;
                }.tdb-title-line:after{
                  content: '';
                  width: 100%;
                  position: absolute;
                  background-color: #4db2ec;
                  top: 0;
                  left: 0;
                  margin: auto;
                }.tdb-single-title .tdb-title-text{
                  font-size: 41px;
                  line-height: 50px;
                  font-weight: 400;
                }.tdi_81 .tdb-title-text{
					color: #000000;
				
					font-family:Proxima Nova Bold !important;font-size:36px !important;line-height:1.2 !important;font-weight:500 !important;
				}.tdi_81 .tdb-title-line:after{
					height: 2px;
				
					bottom: 40%;
				}.tdi_81 .tdb-title-line{
					height: 50px;
				}.td-theme-wrap .tdi_81{
					text-align: left;
				}.tdi_81 .tdb-first-letter{
					left: -0.36em;
					right: auto;
				
					font-family:Proxima Nova Reguler !important;
				}.tdi_81 .tdb-add-text{
					font-family:Proxima Nova Reguler !important;
				}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_81 .tdb-title-text{
					font-family:Proxima Nova Bold !important;font-size:30px !important;line-height:1.2 !important;font-weight:500 !important;
				}
}

/* phone */
@media (max-width: 767px){
.tdi_81 .tdb-title-text{
					font-family:Proxima Nova Bold !important;font-size:24px !important;line-height:1.2 !important;font-weight:500 !important;
				}
}
</style><div class="tdb-block-inner td-fix-index"><h1 class="tdb-title-text">12 Cara Jitu Tambah Followers Instagram, Cepat dan Gratis!</h1><div></div><div class="tdb-title-line"></div></div></div><div class="td_block_wrap tdb_single_author tdi_82 td-pb-border-top td_block_template_8 tdb-post-meta"  data-td-block-uid="tdi_82" >
<style>

/* inline tdc_css att */

.tdi_82{
padding-right:10px !important;
}

</style>
<style>
/* custom css */
.tdb-post-meta{
                  margin-bottom: 16px;
                  color: #444;
                  font-family: 'Open Sans', 'Open Sans Regular', sans-serif;
                  font-size: 11px;
                  font-weight: 400;
                  clear: none;
                  vertical-align: middle;
                  line-height: 1;
                }.tdb-post-meta span,
                .tdb-post-meta i,
                .tdb-post-meta time{
                  vertical-align: middle;
                }.tdb_single_author{
                  line-height: 30px;
                }.tdb_single_author a{
                  vertical-align: middle;
                }.tdb_single_author .tdb-block-inner{
                  display: flex;
                  align-items: center;
                }.tdb_single_author .tdb-author-name-wrap{
                  display: flex;
                }.tdb_single_author .tdb-author-name{
                  font-weight: 700;
                  margin-right: 3px;
                }.tdb_single_author .tdb-author-by{
                  margin-right: 3px;
                }.tdb_single_author .tdb-author-photo img{
                  display: block;
                }.tdi_82{
                    display: inline-block;
                }.tdi_82 .tdb-author-name-wrap{
                    align-items: baseline;
                }.tdi_82 .avatar{
                    width: 26px;
                    height: 26px;
                
                    margin-right: 6px;
                
                    border-radius: 50%;
                }.tdi_82 .tdb-author-name{
					color: #000;
				
					font-family:Proxima Nova Bold !important;font-size:13px !important;line-height:1 !important;font-weight:500 !important;text-transform:capitalize !important;
				}.tdi_82 .tdb-author-name:hover{
					color: #008d7f;
				}.tdi_82 .tdb-author-by{
					font-family:Proxima Nova Reguler !important;font-size:13px !important;line-height:1 !important;font-weight:400 !important;text-transform:capitalize !important;
				}
</style><div class="tdb-block-inner td-fix-index"><a class="tdb-author-photo" href="https://telset.id/author/muhammad-faisal-hadi-putra/" title="Muhammad Faisal Hadi Putra" data-wpel-link="internal" target="_self" rel="follow"></a><div class="tdb-author-name-wrap"><span class="tdb-author-by">By</span> <a class="tdb-author-name" href="https://telset.id/author/muhammad-faisal-hadi-putra/" data-wpel-link="internal" target="_self" rel="follow">Muhammad Faisal Hadi Putra</a></div></div></div><div class="td_block_wrap tdb_single_date tdi_83 td-pb-border-top td_block_template_8 tdb-post-meta"  data-td-block-uid="tdi_83" >
<style>
/* custom css */
.tdb_single_date{
                  line-height: 30px;
                }.tdb_single_date a{
                  vertical-align: middle;
                }.tdb_single_date .tdb-date-icon-svg{
                  position: relative;
                  line-height: 0;
                }.tdb_single_date svg{
                  height: auto;
                }.tdb_single_date svg,
                 .tdb_single_date svg *{
                  fill: #444;
                }.tdi_83{
                    display: inline-block;
                
					font-family:Proxima Nova Reguler !important;font-size:13px !important;line-height:1 !important;font-weight:400 !important;text-transform:capitalize !important;
				}.tdi_83 svg{
                    width: 14px;
                }.tdi_83 .tdb-date-icon{
                    margin-right: 5px;
                }
</style><div class="tdb-block-inner td-fix-index"><time class="entry-date updated td-module-date" datetime="2021-09-01T17:14:06+07:00">1 September 2021</time></div></div> <!-- ./block --><div class="td_block_wrap tdb_single_featured_image tdi_84 tdb-content-horiz-left td-pb-border-top td_block_template_8"  data-td-block-uid="tdi_84" >
<style>

/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_84{
margin-right:-20px !important;
margin-left:-20px !important;
}
}

</style>
<style>
/* custom css */
.tdb_single_featured_image{
                  margin-bottom: 26px;
                }.tdb_single_featured_image.tdb-sfi-stretch{
                  opacity: 0;
                }.tdb_single_featured_image.tdb-sfi-stretch,
                .tdb_single_featured_image .tdb-block-inner{
                  -webkit-transition: all 0.3s ease-in-out;
                  transition: all 0.3s ease-in-out;
                }.tdb_single_featured_image img{
                  display: block;
                  width: 100%;
                }.tdb_single_featured_image video{
                  max-width: 100%;
                }.tdb_single_featured_image .tdb-caption-text{
                  z-index: 1;
                  text-align: left;
                  font-size: 11px;
                  font-style: italic;
                  font-weight: normal;
                  line-height: 17px;
                  color: #444;
                }.tdb_single_featured_image.tdb-content-horiz-center .tdb-caption-text{
                  text-align: center;
                  left: 0;
                  right: 0;
                  margin-left: auto;
                  margin-right: auto;
                }.tdb_single_featured_image.tdb-content-horiz-right .tdb-caption-text{
                  text-align: right;
                  left:  auto;
                  right: 0;
                }.tdb-no-featured-img{
                  background-color: #f1f1f1;
                  width: 100%;
                  height: 500px;
                }.tdb-no-featured-audio{
                  height: 59px;
                }.tdi_84 .td-audio-player{
                    font-size: 12px;
                }.tdi_84 .tdb-caption-text{
                    margin: 6px 0 0;
                }.tdi_84:hover .tdb-block-inner:before{
                    opacity: 0;
                }
</style><div class="tdb-block-inner td-fix-index"><figure>
                                    <a href="https://telset.id/wp-content/uploads/2021/01/Instagram-Followers-telset.jpg" data-caption="Ilustrasi Instagram (Foto: Istimewa)" data-wpel-link="internal" target="_self" rel="follow">
                                    
                                    <img 
                                        width="696" 
                                        height="411" 
                                        class="entry-thumb td-modal-image" 
                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20696%20411'%3E%3C/svg%3E" data-lazy-srcset="https://telset.id/wp-content/uploads/2021/01/Instagram-Followers-telset-696x411.jpg 696w, https://telset.id/wp-content/uploads/2021/01/Instagram-Followers-telset-300x177.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Instagram-Followers-telset.jpg 700w" data-lazy-sizes="(max-width: 696px) 100vw, 696px" 
                                        alt="Tambah Followers Instagram" 
                                        title="Instagram Followers telset"
                                    data-lazy-src="https://telset.id/wp-content/uploads/2021/01/Instagram-Followers-telset-696x411.jpg" /><noscript><img 
                                        width="696" 
                                        height="411" 
                                        class="entry-thumb td-modal-image" 
                                        src="https://telset.id/wp-content/uploads/2021/01/Instagram-Followers-telset-696x411.jpg" srcset="https://telset.id/wp-content/uploads/2021/01/Instagram-Followers-telset-696x411.jpg 696w, https://telset.id/wp-content/uploads/2021/01/Instagram-Followers-telset-300x177.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Instagram-Followers-telset.jpg 700w" sizes="(max-width: 696px) 100vw, 696px" 
                                        alt="Tambah Followers Instagram" 
                                        title="Instagram Followers telset"
                                    /></noscript>
                                    </a><figcaption class="tdb-caption-text">Ilustrasi Instagram (Foto: Istimewa)</figcaption></figure></div></div><div class="td_block_wrap tdb_single_post_share tdi_85 td-pb-border-top td_block_template_8"  data-td-block-uid="tdi_85" >
<style>
/* custom css */
.tdb_single_post_share{
                  margin-bottom: 23px;
                }.tdb-share-classic{
                  position: relative;
                  height: 20px;
                  margin-bottom: 15px;
                }.tdi_85 .td-social-share-text{
					font-family:Proxima Nova Reguler !important;
				}.tdi_85 .td-social-network{
					font-family:Proxima Nova Reguler !important;
				}
</style><div id="tdi_85" class="td-post-sharing tdb-block td-ps-bg td-ps-notext td-ps-big td-ps-nogap td-post-sharing-style12 ">
		<style>
            .td-post-sharing-classic {
                position: relative;
                height: 20px;
            }
            .td-post-sharing {
                margin-left: -3px;
                margin-right: -3px;
                font-family: 'Open Sans', 'Open Sans Regular', sans-serif;
                z-index: 2;
                white-space: nowrap;
                opacity: 0;
            }
            .td-post-sharing.td-social-show-all {
                white-space: normal;
            }
            .td-js-loaded .td-post-sharing {
                -webkit-transition: opacity 0.3s;
                transition: opacity 0.3s;
                opacity: 1;
            }
            .td-post-sharing-classic + .td-post-sharing {
                margin-top: 15px;
                /* responsive portrait phone */
            }
            @media (max-width: 767px) {
                .td-post-sharing-classic + .td-post-sharing {
                    margin-top: 8px;
                }
            }
            .td-post-sharing-top {
                margin-bottom: 30px;
            }
            @media (max-width: 767px) {
                .td-post-sharing-top {
                    margin-bottom: 20px;
                }
            }
            .td-post-sharing-bottom {
                border-style: solid;
                border-color: #ededed;
                border-width: 1px 0;
                padding: 21px 0;
                margin-bottom: 42px;
            }
            .td-post-sharing-bottom .td-post-sharing {
                margin-bottom: -7px;
            }
            .td-post-sharing-visible,
            .td-social-sharing-hidden {
                display: inline-block;
            }
            .td-social-sharing-hidden ul {
                display: none;
            }
            .td-social-show-all .td-pulldown-filter-list {
                display: inline-block;
            }
            .td-social-network,
            .td-social-handler {
                position: relative;
                display: inline-block;
                margin: 0 3px 7px;
                height: 40px;
                min-width: 40px;
                font-size: 11px;
                text-align: center;
                vertical-align: middle;
            }
            .td-ps-notext .td-social-network .td-social-but-icon,
            .td-ps-notext .td-social-handler .td-social-but-icon {
                border-top-right-radius: 2px;
                border-bottom-right-radius: 2px;
            }
            .td-social-network {
                color: #000;
                overflow: hidden;
            }
            .td-social-network .td-social-but-icon {
                border-top-left-radius: 2px;
                border-bottom-left-radius: 2px;
            }
            .td-social-network .td-social-but-text {
                border-top-right-radius: 2px;
                border-bottom-right-radius: 2px;
            }
            .td-social-network:hover {
                opacity: 0.8 !important;
            }
            .td-social-handler {
                color: #444;
                border: 1px solid #e9e9e9;
                border-radius: 2px;
            }
            .td-social-handler .td-social-but-text {
                font-weight: 700;
            }
            .td-social-handler .td-social-but-text:before {
                background-color: #000;
                opacity: 0.08;
            }
            .td-social-share-text {
                margin-right: 18px;
            }
            .td-social-share-text:before,
            .td-social-share-text:after {
                content: '';
                position: absolute;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                left: 100%;
                width: 0;
                height: 0;
                border-style: solid;
            }
            .td-social-share-text:before {
                border-width: 9px 0 9px 11px;
                border-color: transparent transparent transparent #e9e9e9;
            }
            .td-social-share-text:after {
                border-width: 8px 0 8px 10px;
                border-color: transparent transparent transparent #fff;
            }
            .td-social-but-text,
            .td-social-but-icon {
                display: inline-block;
                position: relative;
            }
            .td-social-but-icon {
                padding-left: 13px;
                padding-right: 13px;
                line-height: 40px;
                z-index: 1;
            }
            .td-social-but-icon i {
                position: relative;
                top: -1px;
                vertical-align: middle;
            }
            .td-social-but-text {
                margin-left: -6px;
                padding-left: 12px;
                padding-right: 17px;
                line-height: 40px;
            }
            .td-social-but-text:before {
                content: '';
                position: absolute;
                top: 12px;
                left: 0;
                width: 1px;
                height: 16px;
                background-color: #fff;
                opacity: 0.2;
                z-index: 1;
            }
            .td-social-handler i,
            .td-social-facebook i,
            .td-social-reddit i,
            .td-social-linkedin i,
            .td-social-tumblr i,
            .td-social-stumbleupon i,
            .td-social-vk i,
            .td-social-viber i {
                font-size: 14px;
            }
            .td-social-telegram i {
                font-size: 16px;
            }
            .td-social-mail i,
            .td-social-line i,
            .td-social-print i {
                font-size: 15px;
            }
            .td-social-handler .td-icon-share {
                top: -1px;
                left: -1px;
            }
            .td-social-twitter .td-icon-twitter {
                font-size: 12px;
            }
            .td-social-pinterest .td-icon-pinterest {
                font-size: 13px;
            }
            .td-social-whatsapp .td-icon-whatsapp {
                font-size: 18px;
            }
            .td-social-reddit .td-social-but-icon {
                padding-right: 12px;
            }
            .td-social-reddit .td-icon-reddit {
                left: -1px;
            }
            .td-social-telegram .td-social-but-icon {
                padding-right: 12px;
            }
            .td-social-telegram .td-icon-telegram {
                left: -1px;
            }
            .td-social-stumbleupon .td-social-but-icon {
                padding-right: 11px;
            }
            .td-social-stumbleupon .td-icon-stumbleupon {
                left: -2px;
            }
            .td-social-digg .td-social-but-icon {
                padding-right: 11px;
            }
            .td-social-digg .td-icon-digg {
                left: -2px;
                font-size: 17px;
            }
            .td-social-vk .td-social-but-icon {
                padding-right: 11px;
            }
            .td-social-vk .td-icon-vk {
                left: -2px;
            }
            .td-social-naver .td-icon-naver {
                left: -1px;
                font-size: 16px;
            }
            .td-social-expand-tabs i {
                top: -2px;
                left: -1px;
                font-size: 16px;
            }
            @media (min-width: 767px) {
                .td-social-line,
                .td-social-viber {
                    display: none;
                }
            }
            .td-ps-bg .td-social-network {
                color: #fff;
            }
            .td-ps-bg .td-social-facebook .td-social-but-icon,
            .td-ps-bg .td-social-facebook .td-social-but-text {
                background-color: #516eab;
            }
            .td-ps-bg .td-social-twitter .td-social-but-icon,
            .td-ps-bg .td-social-twitter .td-social-but-text {
                background-color: #29c5f6;
            }
            .td-ps-bg .td-social-pinterest .td-social-but-icon,
            .td-ps-bg .td-social-pinterest .td-social-but-text {
                background-color: #ca212a;
            }
            .td-ps-bg .td-social-whatsapp .td-social-but-icon,
            .td-ps-bg .td-social-whatsapp .td-social-but-text {
                background-color: #7bbf6a;
            }
            .td-ps-bg .td-social-reddit .td-social-but-icon,
            .td-ps-bg .td-social-reddit .td-social-but-text {
                background-color: #f54200;
            }
            .td-ps-bg .td-social-mail .td-social-but-icon,
            .td-ps-bg .td-social-digg .td-social-but-icon,
            .td-ps-bg .td-social-mail .td-social-but-text,
            .td-ps-bg .td-social-digg .td-social-but-text {
                background-color: #000;
            }
            .td-ps-bg .td-social-print .td-social-but-icon,
            .td-ps-bg .td-social-print .td-social-but-text {
                background-color: #333;
            }
            .td-ps-bg .td-social-linkedin .td-social-but-icon,
            .td-ps-bg .td-social-linkedin .td-social-but-text {
                background-color: #0266a0;
            }
            .td-ps-bg .td-social-tumblr .td-social-but-icon,
            .td-ps-bg .td-social-tumblr .td-social-but-text {
                background-color: #3e5a70;
            }
            .td-ps-bg .td-social-telegram .td-social-but-icon,
            .td-ps-bg .td-social-telegram .td-social-but-text {
                background-color: #179cde;
            }
            .td-ps-bg .td-social-stumbleupon .td-social-but-icon,
            .td-ps-bg .td-social-stumbleupon .td-social-but-text {
                background-color: #ee4813;
            }
            .td-ps-bg .td-social-vk .td-social-but-icon,
            .td-ps-bg .td-social-vk .td-social-but-text {
                background-color: #4c75a3;
            }
            .td-ps-bg .td-social-line .td-social-but-icon,
            .td-ps-bg .td-social-line .td-social-but-text {
                background-color: #00b900;
            }
            .td-ps-bg .td-social-viber .td-social-but-icon,
            .td-ps-bg .td-social-viber .td-social-but-text {
                background-color: #5d54a4;
            }
            .td-ps-bg .td-social-naver .td-social-but-icon,
            .td-ps-bg .td-social-naver .td-social-but-text {
                background-color: #3ec729;
            }
            .td-ps-dark-bg .td-social-network {
                color: #fff;
            }
            .td-ps-dark-bg .td-social-network .td-social-but-icon,
            .td-ps-dark-bg .td-social-network .td-social-but-text {
                background-color: #000;
            }
            .td-ps-border .td-social-network .td-social-but-icon,
            .td-ps-border .td-social-network .td-social-but-text {
                line-height: 38px;
                border-width: 1px;
                border-style: solid;
            }
            .td-ps-border .td-social-network .td-social-but-text {
                border-left-width: 0;
            }
            .td-ps-border .td-social-network .td-social-but-text:before {
                background-color: #000;
                opacity: 0.08;
            }
            .td-ps-border.td-ps-padding .td-social-network .td-social-but-icon {
                border-right-width: 0;
            }
            .td-ps-border.td-ps-padding .td-social-network.td-social-expand-tabs .td-social-but-icon {
                border-right-width: 1px;
            }
            .td-ps-border-grey .td-social-but-icon,
            .td-ps-border-grey .td-social-but-text {
                border-color: #e9e9e9;
            }
            .td-ps-border-colored .td-social-facebook .td-social-but-icon,
            .td-ps-border-colored .td-social-facebook .td-social-but-text {
                border-color: #516eab;
            }
            .td-ps-border-colored .td-social-twitter .td-social-but-icon,
            .td-ps-border-colored .td-social-twitter .td-social-but-text {
                border-color: #29c5f6;
            }
            .td-ps-border-colored .td-social-pinterest .td-social-but-icon,
            .td-ps-border-colored .td-social-pinterest .td-social-but-text {
                border-color: #ca212a;
            }
            .td-ps-border-colored .td-social-whatsapp .td-social-but-icon,
            .td-ps-border-colored .td-social-whatsapp .td-social-but-text {
                border-color: #7bbf6a;
            }
            .td-ps-border-colored .td-social-reddit .td-social-but-icon,
            .td-ps-border-colored .td-social-reddit .td-social-but-text {
                border-color: #f54200;
            }
            .td-ps-border-colored .td-social-mail .td-social-but-icon,
            .td-ps-border-colored .td-social-digg .td-social-but-icon,
            .td-ps-border-colored .td-social-mail .td-social-but-text,
            .td-ps-border-colored .td-social-digg .td-social-but-text {
                border-color: #000;
            }
            .td-ps-border-colored .td-social-print .td-social-but-icon,
            .td-ps-border-colored .td-social-print .td-social-but-text {
                border-color: #333;
            }
            .td-ps-border-colored .td-social-linkedin .td-social-but-icon,
            .td-ps-border-colored .td-social-linkedin .td-social-but-text {
                border-color: #0266a0;
            }
            .td-ps-border-colored .td-social-tumblr .td-social-but-icon,
            .td-ps-border-colored .td-social-tumblr .td-social-but-text {
                border-color: #3e5a70;
            }
            .td-ps-border-colored .td-social-telegram .td-social-but-icon,
            .td-ps-border-colored .td-social-telegram .td-social-but-text {
                border-color: #179cde;
            }
            .td-ps-border-colored .td-social-stumbleupon .td-social-but-icon,
            .td-ps-border-colored .td-social-stumbleupon .td-social-but-text {
                border-color: #ee4813;
            }
            .td-ps-border-colored .td-social-vk .td-social-but-icon,
            .td-ps-border-colored .td-social-vk .td-social-but-text {
                border-color: #4c75a3;
            }
            .td-ps-border-colored .td-social-line .td-social-but-icon,
            .td-ps-border-colored .td-social-line .td-social-but-text {
                border-color: #00b900;
            }
            .td-ps-border-colored .td-social-viber .td-social-but-icon,
            .td-ps-border-colored .td-social-viber .td-social-but-text {
                border-color: #5d54a4;
            }
            .td-ps-border-colored .td-social-viber .td-social-but-icon,
            .td-ps-border-colored .td-social-viber .td-social-but-text {
                border-color: #3ec729;
            }
            .td-ps-icon-bg .td-social-but-icon {
                height: 100%;
                border-color: transparent !important;
            }
            .td-ps-icon-bg .td-social-network .td-social-but-icon {
                color: #fff;
            }
            .td-ps-icon-bg .td-social-facebook .td-social-but-icon {
                background-color: #516eab;
            }
            .td-ps-icon-bg .td-social-twitter .td-social-but-icon {
                background-color: #29c5f6;
            }
            .td-ps-icon-bg .td-social-pinterest .td-social-but-icon {
                background-color: #ca212a;
            }
            .td-ps-icon-bg .td-social-whatsapp .td-social-but-icon {
                background-color: #7bbf6a;
            }
            .td-ps-icon-bg .td-social-reddit .td-social-but-icon {
                background-color: #f54200;
            }
            .td-ps-icon-bg .td-social-mail .td-social-but-icon,
            .td-ps-icon-bg .td-social-digg .td-social-but-icon {
                background-color: #000;
            }
            .td-ps-icon-bg .td-social-print .td-social-but-icon {
                background-color: #333;
            }
            .td-ps-icon-bg .td-social-linkedin .td-social-but-icon {
                background-color: #0266a0;
            }
            .td-ps-icon-bg .td-social-tumblr .td-social-but-icon {
                background-color: #3e5a70;
            }
            .td-ps-icon-bg .td-social-telegram .td-social-but-icon {
                background-color: #179cde;
            }
            .td-ps-icon-bg .td-social-stumbleupon .td-social-but-icon {
                background-color: #ee4813;
            }
            .td-ps-icon-bg .td-social-vk .td-social-but-icon {
                background-color: #4c75a3;
            }
            .td-ps-icon-bg .td-social-line .td-social-but-icon {
                background-color: #00b900;
            }
            .td-ps-icon-bg .td-social-viber .td-social-but-icon {
                background-color: #5d54a4;
            }
            .td-ps-icon-bg .td-social-naver .td-social-but-icon {
                background-color: #3ec729;
            }
            .td-ps-icon-bg .td-social-but-text {
                margin-left: -3px;
            }
            .td-ps-icon-bg .td-social-network .td-social-but-text:before {
                display: none;
            }
            .td-ps-icon-arrow .td-social-network .td-social-but-icon:after {
                content: '';
                position: absolute;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                left: calc(100% + 1px);
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 9px 0 9px 11px;
                border-color: transparent transparent transparent #000;
            }
            .td-ps-icon-arrow .td-social-network .td-social-but-text {
                padding-left: 20px;
            }
            .td-ps-icon-arrow .td-social-network .td-social-but-text:before {
                display: none;
            }
            .td-ps-icon-arrow.td-ps-padding .td-social-network .td-social-but-icon:after {
                left: 100%;
            }
            .td-ps-icon-arrow .td-social-facebook .td-social-but-icon:after {
                border-left-color: #516eab;
            }
            .td-ps-icon-arrow .td-social-twitter .td-social-but-icon:after {
                border-left-color: #29c5f6;
            }
            .td-ps-icon-arrow .td-social-pinterest .td-social-but-icon:after {
                border-left-color: #ca212a;
            }
            .td-ps-icon-arrow .td-social-whatsapp .td-social-but-icon:after {
                border-left-color: #7bbf6a;
            }
            .td-ps-icon-arrow .td-social-reddit .td-social-but-icon:after {
                border-left-color: #f54200;
            }
            .td-ps-icon-arrow .td-social-mail .td-social-but-icon:after,
            .td-ps-icon-arrow .td-social-digg .td-social-but-icon:after {
                border-left-color: #000;
            }
            .td-ps-icon-arrow .td-social-print .td-social-but-icon:after {
                border-left-color: #333;
            }
            .td-ps-icon-arrow .td-social-linkedin .td-social-but-icon:after {
                border-left-color: #0266a0;
            }
            .td-ps-icon-arrow .td-social-tumblr .td-social-but-icon:after {
                border-left-color: #3e5a70;
            }
            .td-ps-icon-arrow .td-social-telegram .td-social-but-icon:after {
                border-left-color: #179cde;
            }
            .td-ps-icon-arrow .td-social-stumbleupon .td-social-but-icon:after {
                border-left-color: #ee4813;
            }
            .td-ps-icon-arrow .td-social-vk .td-social-but-icon:after {
                border-left-color: #4c75a3;
            }
            .td-ps-icon-arrow .td-social-line .td-social-but-icon:after {
                border-left-color: #00b900;
            }
            .td-ps-icon-arrow .td-social-viber .td-social-but-icon:after {
                border-left-color: #5d54a4;
            }
            .td-ps-icon-arrow .td-social-naver .td-social-but-icon:after {
                border-left-color: #3ec729;
            }
            .td-ps-icon-arrow .td-social-expand-tabs .td-social-but-icon:after {
                display: none;
            }
            .td-ps-icon-color .td-social-facebook .td-social-but-icon {
                color: #516eab;
            }
            .td-ps-icon-color .td-social-twitter .td-social-but-icon {
                color: #29c5f6;
            }
            .td-ps-icon-color .td-social-pinterest .td-social-but-icon {
                color: #ca212a;
            }
            .td-ps-icon-color .td-social-whatsapp .td-social-but-icon {
                color: #7bbf6a;
            }
            .td-ps-icon-color .td-social-reddit .td-social-but-icon {
                color: #f54200;
            }
            .td-ps-icon-color .td-social-mail .td-social-but-icon,
            .td-ps-icon-color .td-social-digg .td-social-but-icon {
                color: #000;
            }
            .td-ps-icon-color .td-social-print .td-social-but-icon {
                color: #333;
            }
            .td-ps-icon-color .td-social-linkedin .td-social-but-icon {
                color: #0266a0;
            }
            .td-ps-icon-color .td-social-tumblr .td-social-but-icon {
                color: #3e5a70;
            }
            .td-ps-icon-color .td-social-telegram .td-social-but-icon {
                color: #179cde;
            }
            .td-ps-icon-color .td-social-stumbleupon .td-social-but-icon {
                color: #ee4813;
            }
            .td-ps-icon-color .td-social-vk .td-social-but-icon {
                color: #4c75a3;
            }
            .td-ps-icon-color .td-social-line .td-social-but-icon {
                color: #00b900;
            }
            .td-ps-icon-color .td-social-viber .td-social-but-icon {
                color: #5d54a4;
            }
            .td-ps-icon-color .td-social-naver .td-social-but-icon {
                color: #3ec729;
            }
            .td-ps-text-color .td-social-but-text {
                font-weight: 700;
            }
            .td-ps-text-color .td-social-facebook .td-social-but-text {
                color: #516eab;
            }
            .td-ps-text-color .td-social-twitter .td-social-but-text {
                color: #29c5f6;
            }
            .td-ps-text-color .td-social-pinterest .td-social-but-text {
                color: #ca212a;
            }
            .td-ps-text-color .td-social-whatsapp .td-social-but-text {
                color: #7bbf6a;
            }
            .td-ps-text-color .td-social-reddit .td-social-but-text {
                color: #f54200;
            }
            .td-ps-text-color .td-social-mail .td-social-but-text,
            .td-ps-text-color .td-social-digg .td-social-but-text {
                color: #000;
            }
            .td-ps-text-color .td-social-print .td-social-but-text {
                color: #333;
            }
            .td-ps-text-color .td-social-linkedin .td-social-but-text {
                color: #0266a0;
            }
            .td-ps-text-color .td-social-tumblr .td-social-but-text {
                color: #3e5a70;
            }
            .td-ps-text-color .td-social-telegram .td-social-but-text {
                color: #179cde;
            }
            .td-ps-text-color .td-social-stumbleupon .td-social-but-text {
                color: #ee4813;
            }
            .td-ps-text-color .td-social-vk .td-social-but-text {
                color: #4c75a3;
            }
            .td-ps-text-color .td-social-line .td-social-but-text {
                color: #00b900;
            }
            .td-ps-text-color .td-social-viber .td-social-but-text {
                color: #5d54a4;
            }
            .td-ps-text-color .td-social-naver .td-social-but-text {
                color: #3ec729;
            }
            .td-ps-text-color .td-social-expand-tabs .td-social-but-text {
                color: #b1b1b1;
            }
            .td-ps-notext .td-social-but-icon {
                width: 40px;
            }
            .td-ps-notext .td-social-network .td-social-but-text {
                display: none;
            }
            .td-ps-padding .td-social-network .td-social-but-icon {
                padding-left: 17px;
                padding-right: 17px;
            }
            .td-ps-padding .td-social-handler .td-social-but-icon {
                width: 40px;
            }
            .td-ps-padding .td-social-reddit .td-social-but-icon,
            .td-ps-padding .td-social-telegram .td-social-but-icon {
                padding-right: 16px;
            }
            .td-ps-padding .td-social-stumbleupon .td-social-but-icon,
            .td-ps-padding .td-social-digg .td-social-but-icon,
            .td-ps-padding .td-social-expand-tabs .td-social-but-icon {
                padding-right: 13px;
            }
            .td-ps-padding .td-social-vk .td-social-but-icon {
                padding-right: 14px;
            }
            .td-ps-padding .td-social-expand-tabs .td-social-but-icon {
                padding-left: 13px;
            }
            .td-ps-rounded .td-social-network .td-social-but-icon {
                border-top-left-radius: 100px;
                border-bottom-left-radius: 100px;
            }
            .td-ps-rounded .td-social-network .td-social-but-text {
                border-top-right-radius: 100px;
                border-bottom-right-radius: 100px;
            }
            .td-ps-rounded.td-ps-notext .td-social-network .td-social-but-icon {
                border-top-right-radius: 100px;
                border-bottom-right-radius: 100px;
            }
            .td-ps-rounded .td-social-expand-tabs {
                border-radius: 100px;
            }
            .td-ps-bar .td-social-network .td-social-but-icon,
            .td-ps-bar .td-social-network .td-social-but-text {
                -webkit-box-shadow: inset 0px -3px 0px 0px rgba(0, 0, 0, 0.31);
                box-shadow: inset 0px -3px 0px 0px rgba(0, 0, 0, 0.31);
            }
            .td-ps-bar .td-social-mail .td-social-but-icon,
            .td-ps-bar .td-social-digg .td-social-but-icon,
            .td-ps-bar .td-social-mail .td-social-but-text,
            .td-ps-bar .td-social-digg .td-social-but-text {
                -webkit-box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.28);
                box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.28);
            }
            .td-ps-bar .td-social-print .td-social-but-icon,
            .td-ps-bar .td-social-print .td-social-but-text {
                -webkit-box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.2);
                box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.2);
            }
            .td-ps-big .td-social-but-icon {
                display: block;
                line-height: 60px;
            }
            .td-ps-big .td-social-but-icon .td-icon-share {
                width: auto;
            }
            .td-ps-big .td-social-handler .td-social-but-text:before {
                display: none;
            }
            .td-ps-big .td-social-share-text .td-social-but-icon {
                width: 90px;
            }
            .td-ps-big .td-social-expand-tabs .td-social-but-icon {
                width: 60px;
            }
            @media (max-width: 767px) {
                .td-ps-big .td-social-share-text {
                    display: none;
                }
            }
            .td-ps-big .td-social-facebook i,
            .td-ps-big .td-social-reddit i,
            .td-ps-big .td-social-mail i,
            .td-ps-big .td-social-linkedin i,
            .td-ps-big .td-social-tumblr i,
            .td-ps-big .td-social-stumbleupon i {
                margin-top: -2px;
            }
            .td-ps-big .td-social-facebook i,
            .td-ps-big .td-social-reddit i,
            .td-ps-big .td-social-linkedin i,
            .td-ps-big .td-social-tumblr i,
            .td-ps-big .td-social-stumbleupon i,
            .td-ps-big .td-social-vk i,
            .td-ps-big .td-social-viber i,
            .td-ps-big .td-social-share-text i {
                font-size: 22px;
            }
            .td-ps-big .td-social-telegram i {
                font-size: 24px;
            }
            .td-ps-big .td-social-mail i,
            .td-ps-big .td-social-line i,
            .td-ps-big .td-social-print i {
                font-size: 23px;
            }
            .td-ps-big .td-social-twitter i,
            .td-ps-big .td-social-expand-tabs i {
                font-size: 20px;
            }
            .td-ps-big .td-social-whatsapp i,
            .td-ps-big .td-social-naver i {
                font-size: 26px;
            }
            .td-ps-big .td-social-pinterest .td-icon-pinterest {
                font-size: 21px;
            }
            .td-ps-big .td-social-telegram .td-icon-telegram {
                left: 1px;
            }
            .td-ps-big .td-social-stumbleupon .td-icon-stumbleupon {
                left: -2px;
            }
            .td-ps-big .td-social-digg .td-icon-digg {
                left: -1px;
                font-size: 25px;
            }
            .td-ps-big .td-social-vk .td-icon-vk {
                left: -1px;
            }
            .td-ps-big .td-social-naver .td-icon-naver {
                left: 0;
            }
            .td-ps-big .td-social-but-text {
                margin-left: 0;
                padding-top: 0;
                padding-left: 17px;
            }
            .td-ps-big.td-ps-notext .td-social-network,
            .td-ps-big.td-ps-notext .td-social-handler {
                height: 60px;
            }
            .td-ps-big.td-ps-notext .td-social-network {
                width: 60px;
            }
            .td-ps-big.td-ps-notext .td-social-network .td-social-but-icon {
                width: 60px;
            }
            .td-ps-big.td-ps-notext .td-social-share-text .td-social-but-icon {
                line-height: 40px;
            }
            .td-ps-big.td-ps-notext .td-social-share-text .td-social-but-text {
                display: block;
                line-height: 1;
            }
            .td-ps-big.td-ps-padding .td-social-network,
            .td-ps-big.td-ps-padding .td-social-handler {
                height: 90px;
                font-size: 13px;
            }
            .td-ps-big.td-ps-padding .td-social-network {
                min-width: 60px;
            }
            .td-ps-big.td-ps-padding .td-social-but-icon {
                border-bottom-left-radius: 0;
                border-top-right-radius: 2px;
            }
            .td-ps-big.td-ps-padding.td-ps-bar .td-social-but-icon {
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .td-ps-big.td-ps-padding .td-social-but-text {
                display: block;
                padding-bottom: 17px;
                line-height: 1;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                border-bottom-left-radius: 2px;
            }
            .td-ps-big.td-ps-padding .td-social-but-text:before {
                display: none;
            }
            .td-ps-big.td-ps-padding .td-social-expand-tabs i {
                line-height: 90px;
            }
            .td-ps-nogap {
                margin-left: 0;
                margin-right: 0;
            }
            .td-ps-nogap .td-social-network,
            .td-ps-nogap .td-social-handler {
                margin-left: 0;
                margin-right: 0;
                border-radius: 0;
            }
            .td-ps-nogap .td-social-network .td-social-but-icon,
            .td-ps-nogap .td-social-network .td-social-but-text {
                border-radius: 0;
            }
            .td-ps-nogap .td-social-expand-tabs {
                border-radius: 0;
            }
            .td-post-sharing-style7 .td-social-network .td-social-but-icon {
                height: 100%;
            }
            .td-post-sharing-style7 .td-social-network .td-social-but-icon:before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.31);
            }
            .td-post-sharing-style7 .td-social-network .td-social-but-text {
                padding-left: 17px;
            }
            .td-post-sharing-style7 .td-social-network .td-social-but-text:before {
                display: none;
            }
            .td-post-sharing-style7 .td-social-mail .td-social-but-icon:before,
            .td-post-sharing-style7 .td-social-digg .td-social-but-icon:before {
                background-color: rgba(255, 255, 255, 0.2);
            }
            .td-post-sharing-style7 .td-social-print .td-social-but-icon:before {
                background-color: rgba(255, 255, 255, 0.1);
            }
            @media (max-width: 767px) {
                .td-post-sharing-style1 .td-social-share-text .td-social-but-text,
                .td-post-sharing-style3 .td-social-share-text .td-social-but-text,
                .td-post-sharing-style5 .td-social-share-text .td-social-but-text,
                .td-post-sharing-style14 .td-social-share-text .td-social-but-text,
                .td-post-sharing-style16 .td-social-share-text .td-social-but-text {
                    display: none !important;
                }
            }
            @media (max-width: 767px) {
                .td-post-sharing-style2 .td-social-share-text,
                .td-post-sharing-style4 .td-social-share-text,
                .td-post-sharing-style6 .td-social-share-text,
                .td-post-sharing-style7 .td-social-share-text,
                .td-post-sharing-style15 .td-social-share-text,
                .td-post-sharing-style17 .td-social-share-text,
                .td-post-sharing-style18 .td-social-share-text,
                .td-post-sharing-style19 .td-social-share-text,
                .td-post-sharing-style20 .td-social-share-text {
                    display: none !important;
                }
            }

        </style>

		<div class="td-post-sharing-visible"><div class="td-social-sharing-button td-social-sharing-button-js td-social-handler td-social-share-text">
                                        <div class="td-social-but-icon"><i class="td-icon-share"></i></div>
                                        <div class="td-social-but-text">Share</div>
                                    </div><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Ftelset.id%2Fngehits%2Fcara-tambah-followers-instagram-gratis%2F" title="Facebook" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">
                                        <div class="td-social-but-icon"><i class="td-icon-facebook"></i></div>
                                        <div class="td-social-but-text">Facebook</div>
                                    </a><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter" href="https://twitter.com/intent/tweet?text=12+Cara+Jitu+Tambah+Followers+Instagram%2C+Cepat+dan+Gratis%21&amp;url=https%3A%2F%2Ftelset.id%2Fngehits%2Fcara-tambah-followers-instagram-gratis%2F&amp;via=telset_id" title="Twitter" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">
                                        <div class="td-social-but-icon"><i class="td-icon-twitter"></i></div>
                                        <div class="td-social-but-text">Twitter</div>
                                    </a><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-whatsapp" href="https://api.whatsapp.com/send?text=12+Cara+Jitu+Tambah+Followers+Instagram%2C+Cepat+dan+Gratis%21 %0A%0A https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/" title="WhatsApp" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">
                                        <div class="td-social-but-icon"><i class="td-icon-whatsapp"></i></div>
                                        <div class="td-social-but-text">WhatsApp</div>
                                    </a><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-mail" href="mailto:?subject=12 Cara Jitu Tambah Followers Instagram, Cepat dan Gratis!&body=https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/" title="Email" >
                                        <div class="td-social-but-icon"><i class="td-icon-mail"></i></div>
                                        <div class="td-social-but-text">Email</div>
                                    </a><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-telegram" href="https://telegram.me/share/url?url=https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/&amp;text=12+Cara+Jitu+Tambah+Followers+Instagram%2C+Cepat+dan+Gratis%21" title="Telegram" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">
                                        <div class="td-social-but-icon"><i class="td-icon-telegram"></i></div>
                                        <div class="td-social-but-text">Telegram</div>
                                    </a><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-line" href="https://line.me/R/msg/text/?12+Cara+Jitu+Tambah+Followers+Instagram%2C+Cepat+dan+Gratis%21%0D%0Ahttps://telset.id/ngehits/cara-tambah-followers-instagram-gratis/" title="LINE" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">
                                        <div class="td-social-but-icon"><i class="td-icon-line"></i></div>
                                        <div class="td-social-but-text">LINE</div>
                                    </a></div><div class="td-social-sharing-hidden"><ul class="td-pulldown-filter-list"></ul><a class="td-social-sharing-button td-social-handler td-social-expand-tabs" href="#" data-block-uid="tdi_85" title="More">
                                    <div class="td-social-but-icon"><i class="td-icon-plus td-social-expand-tabs-icon"></i></div>
                                </a></div></div></div><div class="td_block_wrap tdb_single_content tdi_86 td-pb-border-top td_block_template_8 td-post-content tagdiv-type"  data-td-block-uid="tdi_86" >
<style>
/* custom css */
.tdb_single_content{
                  margin-bottom: 0;
                  *zoom: 1;
                }.tdb_single_content:before,
                .tdb_single_content:after{
                  display: table;
                  content: '';
                  line-height: 0;
                }.tdb_single_content:after{
                  clear: both;
                }.tdb_single_content .tdb-block-inner > *:not(.wp-block-quote):not(.alignwide):not(.td-a-ad){
                  margin-left: auto;
                  margin-right: auto;
                }.tdb_single_content a{
                  pointer-events: auto;
                }.tdb_single_content .td-spot-id-top_ad .tdc-placeholder-title:before{
                  content: 'Article Top Ad' !important;
                }.tdb_single_content .td-spot-id-inline_ad0 .tdc-placeholder-title:before{
                  content: 'Article Inline Ad 1' !important;
                }.tdb_single_content .td-spot-id-inline_ad1 .tdc-placeholder-title:before{
                  content: 'Article Inline Ad 2' !important;
                }.tdb_single_content .td-spot-id-inline_ad2 .tdc-placeholder-title:before{
                  content: 'Article Inline Ad 3' !important;
                }.tdb_single_content .td-spot-id-bottom_ad .tdc-placeholder-title:before{
                  content: 'Article Bottom Ad' !important;
                }.tdb_single_content .id_top_ad,
                .tdb_single_content .id_bottom_ad{
                  clear: both;
                  margin-bottom: 21px;
                  text-align: center;
                }.tdb_single_content .id_top_ad img,
                .tdb_single_content .id_bottom_ad img{
                  margin-bottom: 0;
                }.tdb_single_content .id_top_ad .adsbygoogle,
                .tdb_single_content .id_bottom_ad .adsbygoogle{
                  position: relative;
                }.tdb_single_content .id_ad_content-horiz-left,
                .tdb_single_content .id_ad_content-horiz-right,
                .tdb_single_content .id_ad_content-horiz-center{
                  margin-bottom: 15px;
                }.tdb_single_content .id_ad_content-horiz-left img,
                .tdb_single_content .id_ad_content-horiz-right img,
                .tdb_single_content .id_ad_content-horiz-center img{
                  margin-bottom: 0;
                }.tdb_single_content .id_ad_content-horiz-center{
                  text-align: center;
                }.tdb_single_content .id_ad_content-horiz-center img{
                  margin-right: auto;
                  margin-left: auto;
                }.tdb_single_content .id_ad_content-horiz-left{
                  float: left;
                  margin-top: 9px;
                  margin-right: 21px;
                }.tdb_single_content .id_ad_content-horiz-right{
                  float: right;
                  margin-top: 6px;
                  margin-left: 21px;
                }.tdb_single_content .tdc-a-ad .tdc-placeholder-title{
                  width: 300px;
                  height: 250px;
                }.tdb_single_content .tdc-a-ad .tdc-placeholder-title:before{
                  position: absolute;
                  top: 50%;
                  -webkit-transform: translateY(-50%);
                  transform: translateY(-50%);
                  margin: auto;
                  display: table;
                  width: 100%;
                }.tdi_86,
                .tdi_86 > p,
                .tdi_86 .tdb-block-inner > p{
			        font-family:Proxima Nova Reguler !important;font-size:18px !important;line-height:1.4 !important;
		        }.tdi_86 h1{
			        font-family:Proxima Nova Bold !important;font-weight:500 !important;
		        }.tdi_86 h2{
			        font-family:Proxima Nova Bold !important;font-weight:500 !important;
		        }.tdi_86 h3:not(.tds-locker-title){
			        font-family:Proxima Nova Bold !important;font-weight:500 !important;
		        }.tdi_86 h4{
			        font-family:Proxima Nova Bold !important;font-weight:500 !important;
		        }.tdi_86 h5{
			        font-family:Proxima Nova Bold !important;font-weight:500 !important;
		        }.tdi_86 h6{
			        font-family:Proxima Nova Bold !important;font-weight:500 !important;
		        }.tdi_86 li{
			        font-family:Proxima Nova Reguler !important;font-size:15px !important;
		        }.tdi_86 li:before{
				    margin-top: 1px;
			        line-height: 15px !important;
		        }.tdi_86 .tdb-block-inner blockquote p{
			        font-family:Proxima Nova Reguler !important;
		        }.tdi_86 .wp-caption-text,
				.tdi_86 figcaption{
			        font-family:Proxima Nova Reguler !important;
		        }.tdi_86 .page-nav a,
				.tdi_86 .page-nav span,
				.tdi_86 .page-nav > div{
					font-family:Proxima Nova Reguler !important;
				}@media (max-width: 767px) {
                  .tdb_single_content .id_ad_content-horiz-left,
                  .tdb_single_content .id_ad_content-horiz-right,
                  .tdb_single_content .id_ad_content-horiz-center {
                    margin: 0 auto 26px auto;
                  }
                }@media (max-width: 767px) {
                  .tdb_single_content .id_ad_content-horiz-left {
                    margin-right: 0;
                  }
                }@media (max-width: 767px) {
                  .tdb_single_content .id_ad_content-horiz-right {
                    margin-left: 0;
                  }
                }@media (max-width: 767px) {
                  .tdb_single_content .td-a-ad {
                    float: none;
                    text-align: center;
                  }
                  .tdb_single_content .td-a-ad img {
                    margin-right: auto;
                    margin-left: auto;
                  }
                  .tdb_single_content .tdc-a-ad {
                    float: none;
                  }
                }@media print {
                  .single .td-header-template-wrap,
                  .single .td-footer-template-wrap,
                  .single .td_block_wrap:not(.tdb_breadcrumbs):not(.tdb_single_categories):not(.tdb-single-title):not(.tdb_single_author):not(.tdb_single_date ):not(.tdb_single_comments_count ):not(.tdb_single_post_views):not(.tdb_single_featured_image):not(.tdb_single_content) {
                    display: none;
                  }
                  .single.td-animation-stack-type0 .post img {
                    opacity: 1 !important;
                  }
                }

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_86,
                .tdi_86 > p,
                .tdi_86 .tdb-block-inner > p{
			        font-family:Proxima Nova Reguler !important;font-size:16px !important;line-height:1.4 !important;
		        }
}

/* phone */
@media (max-width: 767px){
.tdi_86,
                .tdi_86 > p,
                .tdi_86 .tdb-block-inner > p{
			        font-family:Proxima Nova Reguler !important;font-size:16px !important;line-height:1.4 !important;
		        }
}
</style><div class="tdb-block-inner td-fix-index"><p><strong>Telset.id &#8211; </strong>Instagram sudah menjadi gaya hidup bagi para generasi milenial, seiring berkembangnya media sosial. Jika ingin memiliki banyak pengikut, ada beberapa cara menambah followers Instagram gratis yang bisa dilakukan.</p>
<p>Instagram menjadi salah satu media sosial yang banyak digunakan di Indonesia. Menurut laporan yang dirilis HootSuite, bahwa jumlah pengguna Instagram di dunia sudah mencapai lebih dari 1 miliar pengguna.</p>
<p>Sedangkan di Indonesia, platform media sosial berbagi foto dan video pendek ini pada tahun 2020 memiliki pengguna sebanyak 63 juta, atau 79% dari jumlah populasi Indonesia. Jumlah yang sangat luar biasa dari platform yang sering disingkat IG ini.</p>
<div class="td-a-ad id_inline_ad0 id_ad_content-horiz-center"><span class="td-adspot-title"></span><!-- AdSlot for MR2 -->
<div id='div-gpt-ad-mr2'>
  <script type="rocketlazyloadscript">
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-mr2'); });
  </script>
</div>
<!-- AdSlot for MR2 -->
</div><p>Berkembangnya Instagram karena kini dijadikan wadah untuk berbagai macam aktifitas, baik untuk keperluan pribadi, maupun untuk bisnis dalam mempromosikan sebuah brand atau produk dari berbagai perusahaan, dan juga <em>public figure</em> terkenal.</p>
<p>Karena semakin banyak yang memiliki akun di Instagram, maka persaingan pun semakin ketat untuk bisa mendapatkan <em>followers</em>. Maka jangan heran jika banyak orang yang melakukan berbagai cara untuk menambah followers Instagram yang real, bukan akun bot.</p>
<p><strong>Baca juga: <a title="Kilas Balik 4 Tren Foto Terpopuler di Instagram" href="https://telset.id/news/internet/tren-editing-foto-instagram/" target="_self" rel="bookmark noopener follow" data-wpel-link="internal">4 Tren Foto Terpopuler di Instagram</a></strong></p>
<p>Ada trik atau strategi yang harus kalian jalankan jika ingin meningkatkan follower Instagram. Karena dengan hanya membagikan foto, video, atau story saja tidak cukup untuk bisa mendongkrak <em>followers</em>.</p>
<p>Kalian harus membuat akun Instagram kamu semenarik mungkin, agar akun kamu terlihat <em>stand out </em>dan membuat orang untuk mau mengikuti kamu. Cara tambah follower Instagram gratis memang tidak mudah, karena tingkat persaingan yang tinggi. Tapi bukan berarti tidak bisa.</p>
<p>Nah, kali ini tim<strong> Telset</strong> akan membagikan tips and trik untuk bisa tambah <em>followers</em> Instagram gratis dengan mudah dan cepat. <em>Gak</em> perlu pake <em>cheat</em> atau aplikasi pihak ketiga yang mungkin malah bahaya untuk akun Instagram kamu. <em>Check this out!</em></p>
<h2><strong>1. Bikin Bio Instagram yang menarik</strong></h2>
<figure id="attachment_345096" aria-describedby="caption-attachment-345096" style="width: 700px" class="wp-caption aligncenter"><img class="wp-image-345096 size-full" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20700%20386'%3E%3C/svg%3E" alt="Tambah Followers Instagram gratis" width="700" height="386" data-lazy-srcset="https://telset.id/wp-content/uploads/2021/01/Bio-Akun-Instagram-Luna-Maya-telset.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Bio-Akun-Instagram-Luna-Maya-telset-300x165.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Bio-Akun-Instagram-Luna-Maya-telset-696x385.jpg 696w" data-lazy-sizes="(max-width: 700px) 100vw, 700px" data-lazy-src="https://telset.id/wp-content/uploads/2021/01/Bio-Akun-Instagram-Luna-Maya-telset.jpg" /><noscript><img class="wp-image-345096 size-full" src="https://telset.id/wp-content/uploads/2021/01/Bio-Akun-Instagram-Luna-Maya-telset.jpg" alt="Tambah Followers Instagram gratis" width="700" height="386" srcset="https://telset.id/wp-content/uploads/2021/01/Bio-Akun-Instagram-Luna-Maya-telset.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Bio-Akun-Instagram-Luna-Maya-telset-300x165.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Bio-Akun-Instagram-Luna-Maya-telset-696x385.jpg 696w" sizes="(max-width: 700px) 100vw, 700px" /></noscript><figcaption id="caption-attachment-345096" class="wp-caption-text">Bio Instagram akun artis Luna Maya (Screenshot: Instagram)</figcaption></figure>
<p>Cara menambah followers IG gratis pertama yang harus kamu lakukan tentu saja membuat akun Instagram. Gunakan <em>username</em> yang mudah diingat, dan isi semua kolom data profil yang dibutuhkan, seperti biodata pribadi, website, dan pakailah foto profil yang semenarik mungkin.</p>
<p>Profil yang menarik merupakan langkah awal untuk bisa menambah <em>followers</em> Instagram kamu, karena akan menjadi <em>first impression</em> orang lain kepada akun kalian. Buatlah Bio Instagram kamu sesuai dengan style atau gaya yang kamu inginkan. Jika kamu ingin terlihat lucu, buatlah kata-kata lucu yang menggambarkan kelucuan kamu.</p>
<h2><strong>2. Jangan pakai Mode Private</strong></h2>
<figure id="attachment_345111" aria-describedby="caption-attachment-345111" style="width: 700px" class="wp-caption aligncenter"><img class="wp-image-345111 size-full" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20700%20418'%3E%3C/svg%3E" alt="Tambah Followers Instagram gratis" width="700" height="418" data-lazy-srcset="https://telset.id/wp-content/uploads/2021/01/Instagram-Private-Mode.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Instagram-Private-Mode-300x179.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Instagram-Private-Mode-696x416.jpg 696w" data-lazy-sizes="(max-width: 700px) 100vw, 700px" data-lazy-src="https://telset.id/wp-content/uploads/2021/01/Instagram-Private-Mode.jpg" /><noscript><img class="wp-image-345111 size-full" src="https://telset.id/wp-content/uploads/2021/01/Instagram-Private-Mode.jpg" alt="Tambah Followers Instagram gratis" width="700" height="418" srcset="https://telset.id/wp-content/uploads/2021/01/Instagram-Private-Mode.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Instagram-Private-Mode-300x179.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Instagram-Private-Mode-696x416.jpg 696w" sizes="(max-width: 700px) 100vw, 700px" /></noscript><figcaption id="caption-attachment-345111" class="wp-caption-text">Ilustrasi Mode Private Instagram</figcaption></figure>
<p>Akan menjadi hal yang aneh jika kamu ingin menambah jumlah followers Instagram, tapi akun kamu menggunakan Mode Private. Fitur ini memang bagus untuk menjaga privasi penggunanya, tapi kalau tujuan kamu ingin melakukan cara menambah follower IG dari kami, maka kamu harus membuka akun kalian menjadi publik, alias bisa dilihat semua orang.</p>
<p>Dengan tidak memakai mode private, maka calon <em>followers</em> bisa melihat feed kamu dengan lebih bebas. Mereka bisa leluasa melihat berbagai foto atau video yang kalian bagikan di feed. Selain itu, akunmu akan lebih visible ketika disetel ke publik, dan post yang kamu bagikan bisa dipromosikan ke explore orang lain sehingga dapat menarik followers baru.</p>
<h2><strong>3. Posting foto atau video secara rutin</strong></h2>
<figure id="attachment_345117" aria-describedby="caption-attachment-345117" style="width: 700px" class="wp-caption aligncenter"><img class="wp-image-345117 size-full" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20700%20456'%3E%3C/svg%3E" alt="Tambah Followers Instagram gratis" width="700" height="456" data-lazy-srcset="https://telset.id/wp-content/uploads/2021/01/Post-foto-di-Instagram-telset.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Post-foto-di-Instagram-telset-300x195.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Post-foto-di-Instagram-telset-696x453.jpg 696w, https://telset.id/wp-content/uploads/2021/01/Post-foto-di-Instagram-telset-645x420.jpg 645w" data-lazy-sizes="(max-width: 700px) 100vw, 700px" data-lazy-src="https://telset.id/wp-content/uploads/2021/01/Post-foto-di-Instagram-telset.jpg" /><noscript><img class="wp-image-345117 size-full" src="https://telset.id/wp-content/uploads/2021/01/Post-foto-di-Instagram-telset.jpg" alt="Tambah Followers Instagram gratis" width="700" height="456" srcset="https://telset.id/wp-content/uploads/2021/01/Post-foto-di-Instagram-telset.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Post-foto-di-Instagram-telset-300x195.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Post-foto-di-Instagram-telset-696x453.jpg 696w, https://telset.id/wp-content/uploads/2021/01/Post-foto-di-Instagram-telset-645x420.jpg 645w" sizes="(max-width: 700px) 100vw, 700px" /></noscript><figcaption id="caption-attachment-345117" class="wp-caption-text">Ilustrasi posting foto Instagram (Foto: Istimewa)</figcaption></figure>
<p>Cara mendapatkan followers Instagram lainnya posting foto atau video secara rutin di akun IG kalian. Saran kami, postinglah saat <em>prime time</em>, yakni pagi pukul 08.00-09.00, siang pukul 12.00, dan malam pukul 19.00-20.00. Biasanya yang paling ramai adalah di malam hari. Pastikan kamu membagikan post di waktu-waktu tersebut.</p>
<p>Kamu harus menjaga keaktifan akun IG kalian, dengan cara minimal post foto atau video di feed kamu satu kali dalam sehari. Dengan cara mendapatkan followers Instagram aktif ini, tingkat <em>engagement</em> juga bisa terjaga.</p>
<h2 style="text-align: left;"><strong>4. Cari lokasi untuk mendapatkan <em>view </em>yang keren</strong></h2>
<figure id="attachment_187354" aria-describedby="caption-attachment-187354" style="width: 4608px" class="wp-caption aligncenter"><img class="wp-image-187354 size-full" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%204608%202304'%3E%3C/svg%3E" alt="Cara Menambah Followers Instagram" width="4608" height="2304" data-lazy-srcset="https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64.jpg 4608w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-300x150.jpg 300w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-768x384.jpg 768w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-1024x512.jpg 1024w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-696x348.jpg 696w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-1068x534.jpg 1068w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-840x420.jpg 840w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-1920x960.jpg 1920w" data-lazy-sizes="(max-width: 4608px) 100vw, 4608px" data-lazy-src="https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64.jpg" /><noscript><img class="wp-image-187354 size-full" src="https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64.jpg" alt="Cara Menambah Followers Instagram" width="4608" height="2304" srcset="https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64.jpg 4608w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-300x150.jpg 300w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-768x384.jpg 768w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-1024x512.jpg 1024w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-696x348.jpg 696w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-1068x534.jpg 1068w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-840x420.jpg 840w, https://telset.id/wp-content/uploads/2017/11/Oppo-F5-Camera64-1920x960.jpg 1920w" sizes="(max-width: 4608px) 100vw, 4608px" /></noscript><figcaption id="caption-attachment-187354" class="wp-caption-text">Foto Istana Presiden di Bogor (Faisal/ Telset.id)</figcaption></figure>
<p>Instagram sering dipakai untuk memosting foto-foto menarik saat orang melakukan <em>traveling</em>. Kamu juga bisa melakukannya sebagai cara menambah followers di IG gratis. Carilah lokasi atau destinasi wisata yang punya <em>view</em> keren. Rata-rata foto atau video yang mendapatkan <em>like</em> yang banyak itu menampilkan tempat-tempat yang <em>Instagramable</em>.</p>
<p>Jika jumlah <em>like</em> semakin banyak, maka semakin besar kesempatan foto atau video kalian masuk ke bagian Feed di Instagram, sehingga jumlah <em>followers</em> pun akan meningkat. Nah jika sudah menentukan lokasi dengan <em>view</em> menarik dan <em>instagramable</em>, pastikan ketika kamu ingin mengambil foto atau video, tak ada orang yang mengganggu <em>view</em> tersebut.</p>
<p><strong>Baca juga: <a title="Instagram Rombak Desain IG Story untuk PC Desktop" href="https://telset.id/apps/desain-ig-story-untuk-pc-dirombak/" target="_self" rel="bookmark noopener follow" data-wpel-link="internal">Instagram Rombak Desain IG Story untuk PC Desktop</a></strong></p>
<h2 style="text-align: left;"><strong>5. Gunakan Hashtag yang kreatif dan relevan</strong></h2>
<figure id="attachment_345124" aria-describedby="caption-attachment-345124" style="width: 700px" class="wp-caption aligncenter"><img class="wp-image-345124 size-full" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20700%20401'%3E%3C/svg%3E" alt="Tambah Followers Instagram gratis" width="700" height="401" data-lazy-srcset="https://telset.id/wp-content/uploads/2021/01/Hashtag-Instagram-telset.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Hashtag-Instagram-telset-300x172.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Hashtag-Instagram-telset-696x399.jpg 696w" data-lazy-sizes="(max-width: 700px) 100vw, 700px" data-lazy-src="https://telset.id/wp-content/uploads/2021/01/Hashtag-Instagram-telset.jpg" /><noscript><img class="wp-image-345124 size-full" src="https://telset.id/wp-content/uploads/2021/01/Hashtag-Instagram-telset.jpg" alt="Tambah Followers Instagram gratis" width="700" height="401" srcset="https://telset.id/wp-content/uploads/2021/01/Hashtag-Instagram-telset.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Hashtag-Instagram-telset-300x172.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Hashtag-Instagram-telset-696x399.jpg 696w" sizes="(max-width: 700px) 100vw, 700px" /></noscript><figcaption id="caption-attachment-345124" class="wp-caption-text">Ilustrasi hashtag Instagram (Foto: Istimewa)</figcaption></figure>
<p>Hashtag menjadi bagian penting yang tidak boleh kalian lupakan saat membuat post. Terutama jika akun kalian masih tergolong kecil. Fungsi dari hashtag adalah agar orang bisa dengan mudah menemukan post yang kamu bagikan.</p>
<p>Cara mendapat followers Instagram ini bisa dibilang cukup efektif, karena biasanya post yang disertai hashtag di kolom <em>caption</em> akan mendapatkan lebih banyak <em>like</em> dan <em>comment</em> dari pengguna Instagram.</p>
<p>Tetapi ingat, kamu harus menggunakan hashtag yang relevan, populer, dan sesuai dengan audiens yang kamu sasar untuk tambah <em>followers</em> Instagram gratis. Itu karena banyak pengguna Instagram sering mencari berbagai hal yang terlintas dalam pikirannya di kolom <strong>Search</strong>, untuk mencari postingan yang menarik.</p>
<p>Dalam pencarian, ada beberapa kategori yang bisa dilihat termasuk kategori Tags. Misalnya kamu mengunggah foto atau video tentang pemandangan alam, kamu bisa menyertakan <em>hashtag</em> #Nature, #Green, #Panorama, #Mountain, dan lainnya.</p>
<p>Atau jika kalian mengunggah foto yang memperlihatkan kehidupan di jalanan, kamu bisa menyertakan <em>hashtag</em> #Urban, #Traffic, #City, dan <em>hashtag</em> lainnya.</p>
<p><strong>Baca juga:</strong> <a href="https://telset.id/ngehits/cara-tambah-followers-instagram-gratis/" data-wpel-link="internal" target="_self" rel="follow"><strong>12 Cara Jitu Tambah Followers Instagram</strong></a></p>
<h2><strong>6. Follow Akun Instagram Tokoh Terkenal</strong></h2>
<figure id="attachment_345128" aria-describedby="caption-attachment-345128" style="width: 700px" class="wp-caption aligncenter"><img class="wp-image-345128 size-full" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20700%20405'%3E%3C/svg%3E" alt="" width="700" height="405" data-lazy-srcset="https://telset.id/wp-content/uploads/2021/01/Instagram-Dian-Sastro-telset.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Instagram-Dian-Sastro-telset-300x174.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Instagram-Dian-Sastro-telset-696x403.jpg 696w" data-lazy-sizes="(max-width: 700px) 100vw, 700px" data-lazy-src="https://telset.id/wp-content/uploads/2021/01/Instagram-Dian-Sastro-telset.jpg" /><noscript><img class="wp-image-345128 size-full" src="https://telset.id/wp-content/uploads/2021/01/Instagram-Dian-Sastro-telset.jpg" alt="" width="700" height="405" srcset="https://telset.id/wp-content/uploads/2021/01/Instagram-Dian-Sastro-telset.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Instagram-Dian-Sastro-telset-300x174.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Instagram-Dian-Sastro-telset-696x403.jpg 696w" sizes="(max-width: 700px) 100vw, 700px" /></noscript><figcaption id="caption-attachment-345128" class="wp-caption-text">Ilustrasi akun Instagram Dian Sastro (Screenshot: Instagram)</figcaption></figure>
<p>Trik mem-<em>follow</em> akun Instagram milik tokoh terkenal atau selebritis, banyak digunakan orang untuk menambah <em>followers</em> Instagram-nya. Kalian pun bisa melakukan cara yang sama. Cari dan follow akun Instagram tokoh terkenal yang memiliki jutaan <em>followers,</em> bisa artis, selebgram, youtuber, atau bisa juga tokoh-tokoh politik.</p>
<p>Kamu bisa <em>follow</em> hingga 15 akun dalam satu waktu. Caranya juga gampang, karena kamu hanya cukup <em>follow</em> akun lain yang direkomendasikan Instagram, setelah kamu membuka satu akun tokoh terkenal. Setelah itu, kamu akan melihat notifikasimu dibanjiri oleh <em>followers</em> Instagram kamu yang baru.</p>
<h2><strong>7. Klik Unfollow untuk kurangi Following Instagram</strong></h2>
<figure id="attachment_345131" aria-describedby="caption-attachment-345131" style="width: 699px" class="wp-caption aligncenter"><img class="wp-image-345131 size-full" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20699%20403'%3E%3C/svg%3E" alt="Tambah Followers Instagram gratis" width="699" height="403" data-lazy-srcset="https://telset.id/wp-content/uploads/2021/01/Unfollow-Instagram.jpg 699w, https://telset.id/wp-content/uploads/2021/01/Unfollow-Instagram-300x173.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Unfollow-Instagram-696x401.jpg 696w" data-lazy-sizes="(max-width: 699px) 100vw, 699px" data-lazy-src="https://telset.id/wp-content/uploads/2021/01/Unfollow-Instagram.jpg" /><noscript><img class="wp-image-345131 size-full" src="https://telset.id/wp-content/uploads/2021/01/Unfollow-Instagram.jpg" alt="Tambah Followers Instagram gratis" width="699" height="403" srcset="https://telset.id/wp-content/uploads/2021/01/Unfollow-Instagram.jpg 699w, https://telset.id/wp-content/uploads/2021/01/Unfollow-Instagram-300x173.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Unfollow-Instagram-696x401.jpg 696w" sizes="(max-width: 699px) 100vw, 699px" /></noscript><figcaption id="caption-attachment-345131" class="wp-caption-text">Ilustrasi Unfollow Instagram</figcaption></figure>
<p>Dengan mem-follow akun instagram tokoh terkenal, akan membuat jumlah <em>following</em> semakin besar. Santai saja gak usah panik, karena kamu bisa langsung klik <em>unfollow</em> untuk mengatasinya. Berikan jeda waktu 10 &#8211; 15 menit dari saat kamu mem-follow mereka.</p>
<p>Kamu bisa melakukan cara ini dengan rutin, setidaknya tiga kali dalam satu hari. Dengan begitu, jumlah followers kamu akan bertambah tetapi jumlah <em>following</em> tetap. Cara ini efektif untuk menambah <em>folowers</em> Instagram yang real.</p>
<h2><strong>8. Bikin Feed Instagram terlihat menarik</strong></h2>
<figure id="attachment_345132" aria-describedby="caption-attachment-345132" style="width: 699px" class="wp-caption aligncenter"><img class="wp-image-345132 size-full" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20699%20415'%3E%3C/svg%3E" alt="Tambah Followers Instagram gratis" width="699" height="415" data-lazy-srcset="https://telset.id/wp-content/uploads/2021/01/Feed-Instagram-telset.jpg 699w, https://telset.id/wp-content/uploads/2021/01/Feed-Instagram-telset-300x178.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Feed-Instagram-telset-696x413.jpg 696w" data-lazy-sizes="(max-width: 699px) 100vw, 699px" data-lazy-src="https://telset.id/wp-content/uploads/2021/01/Feed-Instagram-telset.jpg" /><noscript><img class="wp-image-345132 size-full" src="https://telset.id/wp-content/uploads/2021/01/Feed-Instagram-telset.jpg" alt="Tambah Followers Instagram gratis" width="699" height="415" srcset="https://telset.id/wp-content/uploads/2021/01/Feed-Instagram-telset.jpg 699w, https://telset.id/wp-content/uploads/2021/01/Feed-Instagram-telset-300x178.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Feed-Instagram-telset-696x413.jpg 696w" sizes="(max-width: 699px) 100vw, 699px" /></noscript><figcaption id="caption-attachment-345132" class="wp-caption-text">Ilustrasi Feed Instagram</figcaption></figure>
<p>Kebanyakan orang, terutama generasi milenial, lebih tertarik dengan hal-hal yang bersifat visual dibanding hanya dijejali teks tulisan. Oleh sebab itu usahakan untuk bisa menyamakan <em>tone post</em> yang kalian unggah, agar akun kamu lebih menarik. Cara menambah followers Instagram ini juga terbilang ampuh.</p>
<p>Pakailah warna yang senada yang kamu sukai dan menggambarkan karakter kamu. Caranya, kalian bisa menggunakan filter yang sama di setiap post. Ada <a href="https://telset.id/apps/aplikasi-video-bokeh-hp-android/" target="_self" rel="noopener follow" data-wpel-link="internal">banyak aplikasi edit foto dan video</a> yang bisa membantu kamu.</p>
<h2 style="text-align: left;"><strong>9. Gunakan Kamera Berkualitas</strong></h2>
<figure id="attachment_338361" aria-describedby="caption-attachment-338361" style="width: 700px" class="wp-caption aligncenter"><img class="size-full wp-image-338361" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20700%20417'%3E%3C/svg%3E" alt="" width="700" height="417" data-lazy-srcset="https://telset.id/wp-content/uploads/2020/11/Foto-malam-tripod-telset.jpg 700w, https://telset.id/wp-content/uploads/2020/11/Foto-malam-tripod-telset-300x179.jpg 300w, https://telset.id/wp-content/uploads/2020/11/Foto-malam-tripod-telset-696x415.jpg 696w" data-lazy-sizes="(max-width: 700px) 100vw, 700px" data-lazy-src="https://telset.id/wp-content/uploads/2020/11/Foto-malam-tripod-telset.jpg" /><noscript><img class="size-full wp-image-338361" src="https://telset.id/wp-content/uploads/2020/11/Foto-malam-tripod-telset.jpg" alt="" width="700" height="417" srcset="https://telset.id/wp-content/uploads/2020/11/Foto-malam-tripod-telset.jpg 700w, https://telset.id/wp-content/uploads/2020/11/Foto-malam-tripod-telset-300x179.jpg 300w, https://telset.id/wp-content/uploads/2020/11/Foto-malam-tripod-telset-696x415.jpg 696w" sizes="(max-width: 700px) 100vw, 700px" /></noscript><figcaption id="caption-attachment-338361" class="wp-caption-text">Tripod kamera smartphone (Foto: Aakash Jhaveri)</figcaption></figure>
<p>Trik menambah followers instagram selanjutnya adalah Anda wajib menggunakan kamera berkualitas handal. Tentu ada dua pilihan yakni kamera DSLR atau <em>mirrorless</em>. terbaik Tapi sayangnya, kedua perangkat tersebut harganya cukup mahal untuk bisa dimiliki.</p>
<p>Tenang, jika kamu masih belum mampu untuk membeli kamera profesional, solusi lainnya adalah dengan menggunakan kamera <em>smartphone</em>. Saat ini banyak sekali vendor yang sudah merilis <a href="https://telset.id/gizmo/hp-kamera-terbaik/" target="_self" rel="noopener follow" data-wpel-link="internal">HP kamera terbaik</a>. Harganya pun tidak mahal, karena sekarang kamu bisa beli <a href="https://telset.id/gizmo/hp-dual-kamera-1-jutaan/" target="_self" rel="noopener follow" data-wpel-link="internal">HP dual kamera dengan harga 1 jutaan</a>.</p>
<p><strong>Baca juga: <a title="Cara Hapus Akun Instagram Sementara atau Permanen, Mudah Gak Ribet" href="https://telset.id/how-to/cara-hapus-akun-instagram/" target="_self" rel="bookmark noopener follow" data-wpel-link="internal">Cara Hapus Akun Instagram Sementara atau Permanen</a></strong></p>
<h2><strong>10. Cross Promoting di Akun Media sosial lainnya</strong></h2>
<figure id="attachment_345134" aria-describedby="caption-attachment-345134" style="width: 700px" class="wp-caption aligncenter"><img class="size-full wp-image-345134" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20700%20384'%3E%3C/svg%3E" alt="" width="700" height="384" data-lazy-srcset="https://telset.id/wp-content/uploads/2021/01/Cross-Promoting-Instagram-Facebook.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Cross-Promoting-Instagram-Facebook-300x165.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Cross-Promoting-Instagram-Facebook-696x382.jpg 696w" data-lazy-sizes="(max-width: 700px) 100vw, 700px" data-lazy-src="https://telset.id/wp-content/uploads/2021/01/Cross-Promoting-Instagram-Facebook.jpg" /><noscript><img class="size-full wp-image-345134" src="https://telset.id/wp-content/uploads/2021/01/Cross-Promoting-Instagram-Facebook.jpg" alt="" width="700" height="384" srcset="https://telset.id/wp-content/uploads/2021/01/Cross-Promoting-Instagram-Facebook.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Cross-Promoting-Instagram-Facebook-300x165.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Cross-Promoting-Instagram-Facebook-696x382.jpg 696w" sizes="(max-width: 700px) 100vw, 700px" /></noscript><figcaption id="caption-attachment-345134" class="wp-caption-text">Ilustrasi Cross Promoting Instagram Facebook</figcaption></figure>
<p>Kamu bisa memanfaatkan akun media sosial lainnya yang kamu punya untuk meningkatkan jumlah <em>followers</em>. Lewat akun Facebook, Twitter, Snapchat, atau media sosial lainnya, kamu bisa menarik teman-teman kalian untuk mem-follow akun Instagram kamu.</p>
<p>Kalian juga bisa memanfaatkan akun media sosial lainnya untuk cross promoting kalau ada produk yang ingin kalian jual, seperti via Facebook yang paling sering digunakan.</p>
<h2><strong>11. Memanfaatkan Targeted Ads</strong></h2>
<figure id="attachment_345144" aria-describedby="caption-attachment-345144" style="width: 699px" class="wp-caption aligncenter"><img class="size-full wp-image-345144" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20699%20423'%3E%3C/svg%3E" alt="" width="699" height="423" data-lazy-srcset="https://telset.id/wp-content/uploads/2021/01/Instagram-Targeted-Ads-telset.jpg 699w, https://telset.id/wp-content/uploads/2021/01/Instagram-Targeted-Ads-telset-300x182.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Instagram-Targeted-Ads-telset-696x421.jpg 696w, https://telset.id/wp-content/uploads/2021/01/Instagram-Targeted-Ads-telset-694x420.jpg 694w" data-lazy-sizes="(max-width: 699px) 100vw, 699px" data-lazy-src="https://telset.id/wp-content/uploads/2021/01/Instagram-Targeted-Ads-telset.jpg" /><noscript><img class="size-full wp-image-345144" src="https://telset.id/wp-content/uploads/2021/01/Instagram-Targeted-Ads-telset.jpg" alt="" width="699" height="423" srcset="https://telset.id/wp-content/uploads/2021/01/Instagram-Targeted-Ads-telset.jpg 699w, https://telset.id/wp-content/uploads/2021/01/Instagram-Targeted-Ads-telset-300x182.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Instagram-Targeted-Ads-telset-696x421.jpg 696w, https://telset.id/wp-content/uploads/2021/01/Instagram-Targeted-Ads-telset-694x420.jpg 694w" sizes="(max-width: 699px) 100vw, 699px" /></noscript><figcaption id="caption-attachment-345144" class="wp-caption-text">Ilustrasi Targeted Ads Instagram</figcaption></figure>
<p>Tips ini lebih pas untuk kalian yang memiliki akun bisnis atau organisasi perusahaan. Kamu bisa mempromosikan produk atau jasa yang dijual melalui targeted ads di Instagram. Tapi untuk melakukannya tidak gratis, karena ini layanan berbayar. Sebelum memasangnya, kamu harus tahu dulu siapa yang menjadi target audiens.</p>
<p>sehingga akan lebih relevan dengan akun kamu. Kamu harus tahu soak usia mereka, pekerjaan, dan juga interest dengan apa saja. Karena kamu akan diminta memberikan spesifikasi <em>audiens</em> saat menyetel targeted ads.</p>
<h2><strong>12. Ikuti Tren terbaru yang lagi hits</strong></h2>
<figure id="attachment_345138" aria-describedby="caption-attachment-345138" style="width: 700px" class="wp-caption aligncenter"><img class="size-full wp-image-345138" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20700%20388'%3E%3C/svg%3E" alt="" width="700" height="388" data-lazy-srcset="https://telset.id/wp-content/uploads/2021/01/Oprah-Winfrey-Instagram-Ice-Bucket-Challenge-telset.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Oprah-Winfrey-Instagram-Ice-Bucket-Challenge-telset-300x166.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Oprah-Winfrey-Instagram-Ice-Bucket-Challenge-telset-696x385.jpg 696w" data-lazy-sizes="(max-width: 700px) 100vw, 700px" data-lazy-src="https://telset.id/wp-content/uploads/2021/01/Oprah-Winfrey-Instagram-Ice-Bucket-Challenge-telset.jpg" /><noscript><img class="size-full wp-image-345138" src="https://telset.id/wp-content/uploads/2021/01/Oprah-Winfrey-Instagram-Ice-Bucket-Challenge-telset.jpg" alt="" width="700" height="388" srcset="https://telset.id/wp-content/uploads/2021/01/Oprah-Winfrey-Instagram-Ice-Bucket-Challenge-telset.jpg 700w, https://telset.id/wp-content/uploads/2021/01/Oprah-Winfrey-Instagram-Ice-Bucket-Challenge-telset-300x166.jpg 300w, https://telset.id/wp-content/uploads/2021/01/Oprah-Winfrey-Instagram-Ice-Bucket-Challenge-telset-696x385.jpg 696w" sizes="(max-width: 700px) 100vw, 700px" /></noscript><figcaption id="caption-attachment-345138" class="wp-caption-text">Foto Instagram Oprah Winfrey ikut Ice Bucket Challenge (Screenshot: Instagram)</figcaption></figure>
<p>Tips yang terakhir adalah sering-seringlah melihat apa yang sedang menjadi tren di media sosial, khususnya Instagram. Misalnya tren yang pernah booming adalah Ice Bucket Challenge dan In My Feelings Challenge. Kamu bisa coba ikuti tren itu biar kekinian, untuk menambah <em>followers</em> Instagram.</p>
<p>Sering post foto atau video yang berkaitan dengan tren, kemudian berikan hashtag yang menarik di caption kamu. Mialnya kamu lagi traveling atau sedang nonton konser musik, kamu bisa berbagi moment tersebut dengan memberikan caption yang menarik.</p>
<p>Well, sudah 12 tips yang kami berikan untuk kalian coba untuk menambah jumlah <em>followers</em> Instagram? Selamat mencoba tips and trick yang sudah kami berikan. (FHP/HBS)</p>
<p><div class="rll-youtube-player" data-src="https://www.youtube.com/embed/Fyi4pjL2eiY" data-id="Fyi4pjL2eiY" data-query="feature=oembed"></div><noscript><iframe title="12 Cara Jitu dan Cepat Menambah Followers Instagram" width="696" height="392" src="https://www.youtube.com/embed/Fyi4pjL2eiY?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></noscript></p>
</div></div><div class="td_block_wrap tdb_single_tags tdi_89 td-pb-border-top td_block_template_8"  data-td-block-uid="tdi_89" >
<style>
/* custom css */
.tdb_single_tags{
                  margin-bottom: 2px;
                  font-family: 'Open Sans', 'Open Sans Regular', sans-serif;
                  font-weight: 600;
                }.tdb_single_tags span,
                .tdb_single_tags a{
                  font-size: 11px;
                }.tdb_single_tags span{
                  text-transform: uppercase;
                }.tdb_single_tags a:hover{
                  background-color: #4db2ec;
                  border-color: #4db2ec;
                  color: #fff;
                }.tdb_single_tags ul{
                  display: inline-block;
                  margin: 0;
                  list-style-type: none;
                  font-size: 0;
                }.tdb_single_tags li{
                  display: inline-block;
                  margin-left: 0;
                }.tdi_89 span{
                    margin-right: 4px;
                
                    padding: 2px 8px 3px;
                
                    color: #fff;
                
                    background-color: #222;
                
					font-family:Proxima Nova Reguler !important;
				}.tdi_89 a{
                    margin-right: 4px;
                
                    padding: 1px 7px 2px;
                
                    border: 1px solid #ededed;
                
                    color: #111;
                
					font-family:Proxima Nova Reguler !important;
				}.tdi_89 a:hover{
                    background-color: #008d7f;
                
                    border-color: #008d7f;
                }

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px){
.tdi_89 a{
                    border: 1px solid #ededed;
                }
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_89 a{
                    border: 1px solid #ededed;
                }
}

/* phone */
@media (max-width: 767px){
.tdi_89 a{
                    border: 1px solid #ededed;
                }
}
</style><div class="tdb-block-inner td-fix-index"><ul class="tdb-tags"><li><span>Tags</span></li><li><a href="https://telset.id/tag/followers/" data-wpel-link="internal" target="_self" rel="follow">Followers</a></li><li><a href="https://telset.id/tag/instagram/" data-wpel-link="internal" target="_self" rel="follow">instagram</a></li></ul></div></div><div class="wpb_wrapper td_block_separator td_block_wrap vc_separator tdi_91  td_separator_solid td_separator_center"><span style="border-color:#EBEBEB;border-width:1px;width:100%;"></span>
<style scoped>

/* inline tdc_css att */

.tdi_91{
margin-top:28px !important;
margin-bottom:20px !important;
}

</style></div><div class="td_block_wrap tdb_single_next_prev tdi_92 td-pb-border-top td_block_template_8"  data-td-block-uid="tdi_92" >
<style>

/* inline tdc_css att */

.tdi_92{
margin-bottom:43px !important;
}

/* phone */
@media (max-width: 767px)
{
.tdi_92{
display:none !important;
}
}

</style>
<style>
/* custom css */
.tdb_single_next_prev{
                  *zoom: 1;
                }.tdb_single_next_prev:before,
                .tdb_single_next_prev:after{
                  display: table;
                  content: '';
                  line-height: 0;
                }.tdb_single_next_prev:after{
                  clear: both;
                }.tdb-next-post{
                  font-family: 'Roboto', sans-serif;
                  width: 48%;
                  float: left;
                  transform: translateZ(0);
                  -webkit-transform: translateZ(0);
                  min-height: 1px;
                  line-height: 1;
                }.tdb-next-post span{
                  display: block;
                  font-size: 12px;
                  color: #747474;
                  margin-bottom: 7px;
                }.tdb-next-post a{
                  font-size: 15px;
                  color: #222;
                  line-height: 21px;
                  -webkit-transition: color 0.2s ease;
                  transition: color 0.2s ease;
                }.tdb-next-post a:hover{
                  color: #4db2ec;
                }.tdb-post-next{
                  margin-left: 2%;
                  text-align: right;
                }.tdb-post-prev{
                  margin-right: 2%;
                }.tdi_92 .tdb-next-post a{
					color: #000000;
				
					font-family:Proxima Nova Bold !important;font-size:15px !important;line-height:1.4 !important;font-weight:500 !important;
				}.tdi_92 .tdb-next-post:hover a{
					color: #dd3333;
				}.tdi_92 .tdb-next-post span{
					font-family:Proxima Nova Reguler !important;font-size:11px !important;text-transform:uppercase !important;
				}

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px){

}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){

}

/* phone */
@media (max-width: 767px){
.tdi_92 .tdb-next-post a{
					font-family:Proxima Nova Bold !important;font-size:13px !important;line-height:1.2 !important;font-weight:500 !important;
				}
}
</style><div class="tdb-block-inner td-fix-index"><div class="tdb-next-post tdb-next-post-bg tdb-post-prev"><span>Berita sebelumya</span><a href="https://telset.id/apps/tokopedia-customer-experience-summit-2021/" data-wpel-link="internal" target="_self" rel="follow">Tokopedia Gelar Customer Experience Summit 2021, Ini Cara Daftarnya</a></div><div class="tdb-next-post tdb-next-post-bg tdb-post-next"><span>Berita berikutnya</span><a href="https://telset.id/news/telko/xl-axiata-business-solutions/" data-wpel-link="internal" target="_self" rel="follow">XL Axiata Business Solutions Resmi Dirilis, Ini 5 Layanannya</a></div></div></div>

<script type="rocketlazyloadscript">

var tdb_login_sing_in_shortcode="on";

</script>

<div class="td_block_wrap tdb_single_comments tdi_93 tdb-comm-layout1 td-pb-border-top td_block_template_8"  data-td-block-uid="tdi_93" >
<style>
.td_block_template_8.widget > ul > li {
                margin-left: 0 !important;
            }
            .td_block_template_8 .td-block-title {
                font-size: 20px;
                font-weight: 800;
                margin-top: 0;
                margin-bottom: 18px;
                line-height: 29px;
                position: relative;
                overflow: hidden;
                text-align: left;
            }
            .td_block_template_8 .td-block-title > * {
                position: relative;
                padding-right: 20px;
                color: #000;
            }
            .td_block_template_8 .td-block-title > *:before,
            .td_block_template_8 .td-block-title > *:after {
                content: '';
                display: block;
                height: 4px;
                position: absolute;
                top: 50%;
                margin-top: -2px;
                width: 2000px;
                background-color: #f5f5f5;
            }
            .td_block_template_8 .td-block-title > *:before {
                left: 100%;
            }
            .td_block_template_8 .td-block-title > *:after {
                right: 100%;
            }
            @media (max-width: 767px) {
                .td_block_template_8 .td-related-title a {
                    font-size: 15px;
                }
            }
            .td_block_template_8 .td-related-title a:before {
                display: none;
            }
            .td_block_template_8 .td-related-title a:first-child:after {
                display: none;
            }
            .td_block_template_8 .td-related-title a:last-child:after {
                left: 100%;
                right: auto;
            }
            .td_block_template_8 .td-related-title .td-cur-simple-item {
                color: #4db2ec;
            }
            

            
            .tdi_93 .td-block-title > *:before,
            .tdi_93 .td-block-title > *:after {
                background-color: #008d7f !important;
            }
</style>
<style>
/* custom css */
.tdb_single_comments input[type=text]{
          min-height: 34px;
          height: auto;
        }.tdb_single_comments .comments,
        .tdb_single_comments .comment-respond:last-child,
        .tdb_single_comments .form-submit{
          margin-bottom: 0;
        }.is-visually-hidden{
          border: 0;
          clip: rect(0 0 0 0);
          height: 1px;
          margin: -1px;
          overflow: hidden;
          padding: 0;
          position: absolute;
          width: 1px;
        }.tdb-comm-layout3 form,
        .tdb-comm-layout5 form{
          display: flex;
          flex-wrap: wrap;
        }.tdb-comm-layout3 .td-form-comment,
        .tdb-comm-layout5 .td-form-comment,
        .tdb-comm-layout3 .form-submit,
        .tdb-comm-layout5 .form-submit{
          flex: 0 0 100%;
          order: 1;
        }.tdb-comm-layout3 .td-form-author,
        .tdb-comm-layout3 .td-form-email,
        .tdb-comm-layout3 .td-form-url{
          flex: 0 0 32%;
        }.tdb-comm-layout5 .td-form-author,
        .tdb-comm-layout5 .td-form-email{
          flex: 0 0 49%;
        }.tdb-comm-layout5 .td-form-url{
          flex: 0 0 100%;
        }.tdb-comm-leave_reply_top .comments{
            display: flex;
            flex-direction: column;
        }.tdb-comm-leave_reply_top .td-comments-title{
            order: 0;
            margin-bottom: 14px;
        }.tdb-comm-leave_reply_top .comment-respond .form-submit{
            order: 1;
            margin-bottom: 21px;
        }.tdb-comm-leave_reply_top .comment-list{
            order: 2;
        }.tdb-comm-leave_reply_top .comment-pagination{
            order: 3;
        }.tdi_93 cite a:hover{
            color: #008d7f;
        }.tdi_93 .comment-link{
            display: inline-block;
        }.tdi_93 .comment-reply-link:hover,
        .tdi_93 #cancel-comment-reply-link:hover,
        .tdi_93 .logged-in-as a:hover{
            color: #000000;
        }.tdi_93 .comment{
            border-bottom-style: dashed;
        }.tdi_93 .comment .children{
            border-top-style: dashed;
        }.tdi_93 .td-comments-title a,
        .tdi_93 .td-comments-title span{
            font-family:Proxima Nova Bold !important;font-size:17px !important;font-weight:500 !important;text-transform:uppercase !important;
        }.tdi_93 cite{
            font-family:Proxima Nova Bold !important;font-size:15px !important;font-weight:500 !important;text-transform:capitalize !important;
        }.tdi_93 .comment-link,
        .tdi_93 .comment-edit-link{
            font-family:Proxima Nova Reguler !important;font-size:11px !important;font-weight:400 !important;
        }.tdi_93 .comment-content p{
            font-family:Proxima Nova Reguler !important;font-size:13px !important;font-weight:400 !important;
        }.tdi_93 .comment-reply-link{
            font-family:Proxima Nova Reguler !important;font-weight:400 !important;text-transform:uppercase !important;
        }.tdi_93 .comment-reply-title{
            font-family:Proxima Nova Reguler !important;font-size:15px !important;font-weight:500 !important;text-transform:uppercase !important;
        }.tdi_93 input[type=text],
        .tdi_93 textarea{
            font-family:Proxima Nova Reguler !important;font-size:13px !important;font-weight:400 !important;
        }.tdi_93 .comment-form .submit{
            font-family:Proxima Nova Reguler !important;font-size:13px !important;font-weight:400 !important;text-transform:uppercase !important;
        }.tdi_93 .comment-form-cookies-consent label,
        .tdi_93 .logged-in-as,
        .tdi_93 .logged-in-as a,
        .tdi_93 .td-closed-comments{
            font-family:Proxima Nova Reguler !important;font-size:13px !important;line-height:1.2 !important;font-weight:400 !important;
        }@media (min-width: 767px) {
          .tdb-comm-layout2 form,
          .tdb-comm-layout4 form {
            margin: 0 -10px;
          }
          .tdb-comm-layout2 .logged-in-as,
          .tdb-comm-layout4 .logged-in-as,
          .tdb-comm-layout2 .comment-form-input-wrap,
          .tdb-comm-layout4 .comment-form-input-wrap,
          .tdb-comm-layout2 .form-submit,
          .tdb-comm-layout4 .form-submit,
          .tdb-comm-layout2 .comment-respond p,
          .tdb-comm-layout4 .comment-respond p {
            padding: 0 10px;
          }
          .tdb-comm-layout2 .td-form-author,
          .tdb-comm-layout2 .td-form-email {
            float: left;
            width: 33.3333%;
          }
          .tdb-comm-layout2 .td-form-url {
            width: 33.3333%;
          }
          .tdb-comm-layout2 .td-form-url {
            float: left;
          }
          .tdb-comm-layout4 .td-form-author,
          .tdb-comm-layout4 .td-form-email {
            float: left;
            width: 50%;
          }
          .tdb-comm-layout3 .td-form-author,
          .tdb-comm-layout5 .td-form-author,
          .tdb-comm-layout3 .td-form-email {
            margin-right: 2%;
          }
        }@media (max-width: 767px) {
          .tdb-comm-layout3 .td-form-author,
          .tdb-comm-layout3 .td-form-email,
          .tdb-comm-layout3 .td-form-url,
          .tdb-comm-layout5 .td-form-author,
          .tdb-comm-layout5 .td-form-email {
            flex: 0 0 100%;
          }
        }

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_93 .td-comments-title a,
        .tdi_93 .td-comments-title span{
            font-family:Proxima Nova Bold !important;font-size:15px !important;font-weight:500 !important;text-transform:uppercase !important;
        }.tdi_93 cite{
            font-family:Proxima Nova Bold !important;font-size:13px !important;font-weight:500 !important;text-transform:capitalize !important;
        }.tdi_93 .comment-reply-title{
            font-family:Proxima Nova Reguler !important;font-size:13px !important;font-weight:500 !important;text-transform:uppercase !important;
        }
}
</style><div class="tdb-block-inner td-fix-index"><div class="comments" id="comments"><div class="td-comments-title-wrap td_block_template_8"><h4 class="td-comments-title td-block-title"><span>1 KOMENTAR</span></h4></div>
    <ol class="comment-list">
                <li class="comment pingback" id="comment-75660">
            <article>
                <footer>
				                        <cite>6 Cara Mudah Menghindari Akun Instagram Kena Hack! - Telset.id | Hynx Cyber Cafe</cite>

                    <a class="comment-link" href="#comment-75660">
                        <time pubdate="1612663514">
						    7 Februari 2021						    At						    09:05</time>
                    </a>

				    
                </footer>

                <div class="comment-content">
				    <p>[&#8230;] {Baca Juga: 12 Cara Jitu Tambah Followers Instagram, Cepat dan Gratis!} [&#8230;]</p>
                </div>

                <div class="comment-meta" id="comment-75660">
				    <a rel="nofollow" class="comment-reply-link" href="#comment-75660" data-commentid="75660" data-postid="189614" data-belowelement="comment-75660" data-respondelement="respond" data-replyto="Balasan untuk 6 Cara Mudah Menghindari Akun Instagram Kena Hack! - Telset.id | Hynx Cyber Cafe" aria-label="Balasan untuk 6 Cara Mudah Menghindari Akun Instagram Kena Hack! - Telset.id | Hynx Cyber Cafe">Balas</a>                </div>
            </article>
		    </li><!-- #comment-## -->
    </ol>
    <div class="comment-pagination">
                    </div>

	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">LEAVE A REPLY <small><a rel="follow" id="cancel-comment-reply-link" href="/ngehits/cara-tambah-followers-instagram-gratis/#respond" style="display:none;" data-wpel-link="internal" target="_self">Batal balasan</a></small></h3><form action="https://telset.id/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate><div class="clearfix"></div>
                        <div class="comment-form-input-wrap td-form-comment">
                            <textarea 
                                placeholder="Komentar:" 
                                id="comment" 
                                name="comment" 
                                cols="45" 
                                rows="8" 
                                aria-required="true"
                            ></textarea>
                            <label for="comment" class="is-visually-hidden">Komentar:</label>
                            <div class="td-warning-comment">Please enter your comment!</div>
                        </div><div class="comment-form-input-wrap td-form-author">
                                <input 
                                    class="" 
                                    id="author" 
                                    name="author" 
                                    placeholder="Nama:*" 
                                    type="text" 
                                    value="" 
                                    size="30"  aria-required='true' 
                                />
                                <label for="author" class="is-visually-hidden">Nama:*</label>
                                <div class="td-warning-author">Please enter your name here</div>
                            </div>
<div class="comment-form-input-wrap td-form-email">
                                <input 
                                    class="" 
                                    id="email" 
                                    name="email" 
                                    placeholder="Email:*" 
                                    type="text" 
                                    value="" 
                                    size="30"  aria-required='true' 
                                />
                                <label for="email" class="is-visually-hidden">Email:*</label>
                                <div class="td-warning-email-error">You have entered an incorrect email address!</div>
                                <div class="td-warning-email">Please enter your email address here</div>
                            </div>

<p class="comment-form-cookies-consent">
                            <input 
                                id="wp-comment-cookies-consent" 
                                name="wp-comment-cookies-consent" 
                                type="checkbox" 
                                value="yes"
                                 
                            />
                            <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                          </p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Kirim Komentar" /> <input type='hidden' name='comment_post_ID' value='189614' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="eb079d1bc8" /></p><p style="display: none !important;"><label>&#916;<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js" name="ak_js" value="157"/><script type="rocketlazyloadscript">document.getElementById( "ak_js" ).setAttribute( "value", ( new Date() ).getTime() );</script></p></form>	</div><!-- #respond -->
	</div></div></div><div class="wpb_wrapper td_block_empty_space td_block_wrap vc_empty_space tdi_95 "  style="height: 32px"></div><div class="td_block_wrap td_flex_block_1 tdi_96 td-pb-border-top td_block_template_8 td_flex_block"  data-td-block-uid="tdi_96" >
<style>
.tdi_96 .td-block-title > *:before,
            .tdi_96 .td-block-title > *:after {
                background-color: #008d7f !important;
            }
/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_96{
margin-bottom:40px !important;
}
}

</style>
<style>
/* custom css */
.tdi_96 .td-image-wrap{
					padding-bottom: 100%;
				}.tdi_96 .entry-thumb{
					background-position: center 0%;
				}.tdi_96 .td-image-container{
				 	flex: 0 0 30%;
				 	width: 30%;
			    
                	display: block; order: 0;
                }.ie10 .tdi_96 .td-image-container,
				.ie11 .tdi_96 .td-image-container{
				 	flex: 0 0 auto;
			    }.tdi_96 .td-module-container{
					flex-direction: row;
				
				    border-color: #eaeaea !important;
				}.ie10 .tdi_96 .td-module-meta-info,
				.ie11 .tdi_96 .td-module-meta-info{
				 	flex: 1;
			    }.tdi_96 .td-module-meta-info{
					padding: 0 0 0 15px;
				
				    display: flex;
				    flex-direction: column;
					justify-content: center;
				
					border-color: #eaeaea;
				}.tdi_96 .td-category-pos-above .td-post-category{
				    align-self: flex-start;
				}.tdi_96 .td_module_wrap{
					width: 33.33333333%;
					float: left;
				
					padding-left: 20px;
					padding-right: 20px;
				
					padding-bottom: 12px;
					margin-bottom: 12px;
				}.tdi_96 .td_block_inner{
					margin-left: -20px;
					margin-right: -20px;
				}.tdi_96 .td-module-container:before{
					bottom: -12px;
				
					border-color: #eaeaea;
				}.tdi_96 .td-post-vid-time{
					display: block;
				}.tdi_96 .td-post-category{
					padding: 0px;
				
					background-color: rgba(255,255,255,0);
				
					color: #000000;
				
					font-family:Proxima Nova Reguler !important;font-size:11px !important;line-height:1 !important;font-weight:400 !important;text-transform:uppercase !important;
				}.tdi_96 .td-post-category:not(.td-post-extra-category){
					display: none;
				}.tdi_96 .td-author-photo .avatar{
				    width: 20px;
				    height: 20px;
				
				    margin-right: 6px;
				
				    border-radius: 50%;
				}.tdi_96 .td-excerpt{
					display: none;
				
					margin: 0px;
				
					column-count: 1;
				
					column-gap: 48px;
				
					font-family:Proxima Nova Reguler !important;
				}.tdi_96 .td-audio-player{
					opacity: 1;
					visibility: visible;
					height: auto;
				
					font-size: 13px;
				}.tdi_96 .td-read-more{
					display: none;
				}.tdi_96 .td-author-date{
					display: none;
				}.tdi_96 .td-post-author-name{
					display: none;
				}.tdi_96 .td-post-date,
				.tdi_96 .td-post-author-name span{
					display: none;
				}.tdi_96 .entry-review-stars{
					display: none;
				}.tdi_96 .td-icon-star,
                .tdi_96 .td-icon-star-empty,
                .tdi_96 .td-icon-star-half{
					font-size: 15px;
				}.tdi_96 .td-module-comments{
					display: none;
				}.tdi_96 .td_module_wrap:nth-child(3n+1){
					clear: both;
				}.tdi_96 .td_module_wrap:nth-last-child(-n+3){
					margin-bottom: 0;
					padding-bottom: 0;
				}.tdi_96 .td_module_wrap:nth-last-child(-n+3) .td-module-container:before{
					display: none;
				}.tdi_96 .td-post-category:hover{
					background-color: rgba(255,255,255,0) !important;
				
					color: #008d7f;
				}.tdi_96 .td-module-title a{
					color: #000000;
				}.tdi_96 .td_module_wrap:hover .td-module-title a{
					color: #008d7f !important;
				}.tdi_96.td_with_ajax_pagination .td-next-prev-wrap a:hover,
				.tdi_96 .td-load-more-wrap a:hover{    
					background-color: #008d7f !important;
					border-color: #008d7f !important;
				
					border-color: #008d7f !important;
				}.tdi_96 .entry-title{
					margin: 8px 0 0 0;
				
					font-family:Proxima Nova Bold !important;font-size:15px !important;line-height:1.2 !important;font-weight:500 !important;
				}.tdi_96 .td-block-title a,
				.tdi_96 .td-block-title span{
					font-family:Proxima Nova Bold !important;font-size:17px !important;font-weight:500 !important;text-transform:uppercase !important;
				}.tdi_96 .td-subcat-list a,
				.tdi_96 .td-subcat-dropdown span,
				.tdi_96 .td-subcat-dropdown a{
					font-family:Proxima Nova Reguler !important;
				}.tdi_96 .td-editor-date,
				.tdi_96 .td-editor-date .td-post-author-name a,
				.tdi_96 .td-editor-date .entry-date,
				.tdi_96 .td-module-comments a{
					font-family:Proxima Nova Reguler !important;
				}.tdi_96 .td-read-more a{
					font-family:Proxima Nova Reguler !important;
				}.tdi_96 .td-load-more-wrap a{
					font-family:Proxima Nova Reguler !important;
				}html:not([class*='ie']) .tdi_96 .td-module-container:hover .entry-thumb:before{
                    opacity: 0;
                }

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px){
.tdi_96 .td_module_wrap{
					padding-bottom: 10px;
					margin-bottom: 10px;
				
					clear: none !important;
				
					padding-bottom: 10px !important;
					margin-bottom: 10px !important;
				}.tdi_96 .td-module-container:before{
					bottom: -10px;
				}.tdi_96 .td_module_wrap:nth-child(3n+1){
					clear: both !important;
				}.tdi_96 .td_module_wrap:nth-last-child(-n+3){
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}.tdi_96 .td_module_wrap .td-module-container:before{
					display: block !important;
				}.tdi_96 .td_module_wrap:nth-last-child(-n+3) .td-module-container:before{
					display: none !important;
				}
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_96 .td-module-meta-info{
					padding: 0 0 0 10px;
				}.tdi_96 .td_module_wrap{
					padding-bottom: 7.5px;
					margin-bottom: 7.5px;
				
					clear: none !important;
				
					padding-bottom: 7.5px !important;
					margin-bottom: 7.5px !important;
				}.tdi_96 .td-module-container:before{
					bottom: -7.5px;
				}.tdi_96 .td_module_wrap:nth-child(3n+1){
					clear: both !important;
				}.tdi_96 .td_module_wrap:nth-last-child(-n+3){
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}.tdi_96 .td_module_wrap .td-module-container:before{
					display: block !important;
				}.tdi_96 .td_module_wrap:nth-last-child(-n+3) .td-module-container:before{
					display: none !important;
				}.tdi_96 .entry-title{
					margin: 5px 0 0 0;
				
					font-family:Proxima Nova Bold !important;font-size:11px !important;line-height:1.2 !important;font-weight:500 !important;
				}.tdi_96 .td-block-title a,
				.tdi_96 .td-block-title span{
					font-family:Proxima Nova Bold !important;font-size:15px !important;font-weight:500 !important;text-transform:uppercase !important;
				}
}

/* phone */
@media (max-width: 767px){
.tdi_96 .td_module_wrap{
					width: 100%;
					float: left;
				
					padding-bottom: 12px;
					margin-bottom: 12px;
				
					padding-bottom: 12px !important;
					margin-bottom: 12px !important;
				}.tdi_96 .td-module-container:before{
					bottom: -12px;
				}.tdi_96 .td_module_wrap:nth-last-child(1){
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}.tdi_96 .td_module_wrap .td-module-container:before{
					display: block !important;
				}.tdi_96 .td_module_wrap:nth-last-child(1) .td-module-container:before{
					display: none !important;
				}
}
</style><script type="rocketlazyloadscript">var block_tdi_96 = new tdBlock();
block_tdi_96.id = "tdi_96";
block_tdi_96.atts = '{"modules_on_row":"eyJwaG9uZSI6IjEwMCUiLCJhbGwiOiIzMy4zMzMzMzMzMyUifQ==","image_floated":"float_left","image_width":"30","image_height":"100","show_btn":"none","show_excerpt":"none","modules_category":"above","show_date":"none","show_review":"none","show_com":"none","show_author":"none","meta_padding":"eyJhbGwiOiIwIDAgMCAxNXB4IiwicG9ydHJhaXQiOiIwIDAgMCAxMHB4In0=","art_title":"eyJhbGwiOiI4cHggMCAwIDAiLCJwb3J0cmFpdCI6IjVweCAwIDAgMCJ9","f_title_font_family":"file_1","f_title_font_size":"eyJhbGwiOiIxNSIsInBvcnRyYWl0IjoiMTEifQ==","f_title_font_weight":"500","f_title_font_line_height":"1.2","title_txt":"#000000","cat_bg":"rgba(255,255,255,0)","cat_bg_hover":"rgba(255,255,255,0)","f_cat_font_family":"file_2","f_cat_font_transform":"uppercase","f_cat_font_weight":"400","f_cat_font_size":"11","modules_category_padding":"0","all_modules_space":"eyJhbGwiOiIyNCIsInBvcnRyYWl0IjoiMTUiLCJsYW5kc2NhcGUiOiIyMCJ9","category_id":"_related_tag","ajax_pagination":"","sort":"","title_txt_hover":"#008d7f","tdc_css":"eyJwaG9uZSI6eyJtYXJnaW4tYm90dG9tIjoiNDAiLCJkaXNwbGF5IjoiIn0sInBob25lX21heF93aWR0aCI6NzY3LCJhbGwiOnsiZGlzcGxheSI6IiJ9LCJwb3J0cmFpdCI6eyJkaXNwbGF5IjoiIn0sInBvcnRyYWl0X21heF93aWR0aCI6MTAxOCwicG9ydHJhaXRfbWluX3dpZHRoIjo3NjgsImxhbmRzY2FwZSI6eyJkaXNwbGF5IjoiIn0sImxhbmRzY2FwZV9tYXhfd2lkdGgiOjExNDAsImxhbmRzY2FwZV9taW5fd2lkdGgiOjEwMTl9","cat_txt":"#000000","cat_txt_hover":"#008d7f","f_more_font_weight":"","f_more_font_transform":"","f_more_font_family":"file_2","image_size":"td_150x0","f_meta_font_family":"file_2","block_template_id":"td_block_template_8","border_color":"#008d7f","art_excerpt":"0","meta_info_align":"center","f_cat_font_line_height":"1","pag_h_bg":"#008d7f","td_ajax_filter_type":"","f_header_font_size":"eyJhbGwiOiIxNyIsInBvcnRyYWl0IjoiMTUifQ==","f_header_font_weight":"500","f_header_font_transform":"uppercase","f_header_font_family":"file_1","pag_h_border":"#008d7f","f_ajax_font_family":"file_2","f_ex_font_family":"file_2","f_btn_font_family":"file_2","title_tag":"h2","limit":"3","image_alignment":"0","custom_title":"RELATED ARTICLES","category_ids":"-344812","hide_image":"yes","show_cat":"none","block_type":"td_flex_block_1","separator":"","custom_url":"","mc1_tl":"","mc1_title_tag":"","mc1_el":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","offset":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","el_class":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","container_width":"","modules_gap":"","m_padding":"","modules_border_size":"","modules_border_style":"","modules_border_color":"#eaeaea","modules_divider":"","modules_divider_color":"#eaeaea","h_effect":"","image_radius":"","video_icon":"","video_popup":"yes","video_rec":"","spot_header":"","video_rec_title":"","video_rec_color":"","video_rec_disable":"","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","video_title_color":"","video_title_color_h":"","video_bg":"","video_overlay":"","vid_t_color":"","vid_t_bg_color":"","f_vid_title_font_header":"","f_vid_title_font_title":"Video pop-up article title","f_vid_title_font_settings":"","f_vid_title_font_family":"","f_vid_title_font_size":"","f_vid_title_font_line_height":"","f_vid_title_font_style":"","f_vid_title_font_weight":"","f_vid_title_font_transform":"","f_vid_title_font_spacing":"","f_vid_title_":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_horiz":"layout-default","meta_width":"","meta_margin":"","meta_space":"","art_btn":"","meta_info_border_size":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","meta_info_border_radius":"","modules_category_margin":"","modules_cat_border":"","modules_category_radius":"0","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","review_space":"","review_size":"2.5","review_distance":"","excerpt_col":"1","excerpt_gap":"","excerpt_middle":"","excerpt_inline":"","show_audio":"block","hide_audio":"","art_audio":"","art_audio_size":"1.5","btn_title":"","btn_margin":"","btn_padding":"","btn_border_width":"","btn_radius":"","pag_space":"","pag_padding":"","pag_border_width":"","pag_border_radius":"","prev_tdicon":"","next_tdicon":"","pag_icons_size":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_spacing":"","f_more_":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_style":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_style":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_size":"","f_meta_font_line_height":"","f_meta_font_style":"","f_meta_font_weight":"","f_meta_font_transform":"","f_meta_font_spacing":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","f_btn_font_title":"Article read more button","f_btn_font_settings":"","f_btn_font_size":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_weight":"","f_btn_font_transform":"","f_btn_font_spacing":"","f_btn_":"","mix_color":"","mix_type":"","fe_brightness":"1","fe_contrast":"1","fe_saturate":"1","mix_color_h":"","mix_type_h":"","fe_brightness_h":"1","fe_contrast_h":"1","fe_saturate_h":"1","m_bg":"","color_overlay":"","shadow_shadow_header":"","shadow_shadow_title":"Module Shadow","shadow_shadow_size":"","shadow_shadow_offset_horizontal":"","shadow_shadow_offset_vertical":"","shadow_shadow_spread":"","shadow_shadow_color":"","all_underline_height":"","all_underline_color":"","cat_border":"","cat_border_hover":"","meta_bg":"","author_txt":"","author_txt_hover":"","date_txt":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","audio_btn_color":"","audio_time_color":"","audio_bar_color":"","audio_bar_curr_color":"","shadow_m_shadow_header":"","shadow_m_shadow_title":"Meta info shadow","shadow_m_shadow_size":"","shadow_m_shadow_offset_horizontal":"","shadow_m_shadow_offset_vertical":"","shadow_m_shadow_spread":"","shadow_m_shadow_color":"","btn_bg":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border":"","btn_border_hover":"","pag_text":"","pag_h_text":"","pag_bg":"","pag_border":"","ajax_pagination_infinite_stop":"","css":"","td_column_number":2,"header_color":"","color_preset":"","border_top":"","class":"tdi_96","tdc_css_class":"tdi_96","tdc_css_class_style":"tdi_96_rand_style","live_filter":"cur_post_same_tags","live_filter_cur_post_id":189614}';
block_tdi_96.td_column_number = "2";
block_tdi_96.block_type = "td_flex_block_1";
block_tdi_96.post_count = "3";
block_tdi_96.found_posts = "633";
block_tdi_96.header_color = "";
block_tdi_96.ajax_pagination_infinite_stop = "";
block_tdi_96.max_num_pages = "211";
tdBlocksArray.push(block_tdi_96);
</script><div class="td-block-title-wrap"><h2 class="td-block-title"><span>RELATED ARTICLES</span></h2></div><div id=tdi_96 class="td_block_inner td-mc1-wrap">
        <div class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack ">
            <div class="td-module-container td-category-pos-above">
                
                <div class="td-module-meta-info">
                                        
                    <h3 class="entry-title td-module-title"><a href="https://telset.id/apps/instagram-uji-swipe-up-di-ig-story-tiktok/" rel="bookmark follow" title="Tiru TikTok, Instagram Uji Coba Format Swipe Up di IG Story" data-wpel-link="internal" target="_self">Tiru TikTok, Instagram Uji Coba Format Swipe Up di IG Story</a></h3>
                    
                                            <div class="td-editor-date">
                                                        
                                                            <span class="td-author-date">
                                                                                                                                                                                                                    </span>
                                                    </div>
                    
                    
                    
                                    </div>
            </div>
        </div>

        
        <div class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack ">
            <div class="td-module-container td-category-pos-above">
                
                <div class="td-module-meta-info">
                                        
                    <h3 class="entry-title td-module-title"><a href="https://telset.id/apps/ig-reels-jadi-fokus-utama-instagram-tahun-ini/" rel="bookmark follow" title="Reels jadi Fokus Instagram Tahun Ini, Serius Lawan TikTok?" data-wpel-link="internal" target="_self">Reels jadi Fokus Instagram Tahun Ini, Serius Lawan TikTok?</a></h3>
                    
                                            <div class="td-editor-date">
                                                        
                                                            <span class="td-author-date">
                                                                                                                                                                                                                    </span>
                                                    </div>
                    
                    
                    
                                    </div>
            </div>
        </div>

        
        <div class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack ">
            <div class="td-module-container td-category-pos-above">
                
                <div class="td-module-meta-info">
                                        
                    <h3 class="entry-title td-module-title"><a href="https://telset.id/how-to/cara-download-ig-story/" rel="bookmark follow" title="Cara Download IG Story Dengan atau Tanpa Aplikasi, 100% Works!" data-wpel-link="internal" target="_self">Cara Download IG Story Dengan atau Tanpa Aplikasi, 100% Works!</a></h3>
                    
                                            <div class="td-editor-date">
                                                        
                                                            <span class="td-author-date">
                                                                                                                                                                                                                    </span>
                                                    </div>
                    
                    
                    
                                    </div>
            </div>
        </div>

        </div></div><div class="wpb_wrapper td_block_empty_space td_block_wrap vc_empty_space tdi_98 "  style="height: 32px"></div></div></div><div class="vc_column tdi_100  wpb_column vc_column_container tdc-column td-pb-span4 td-is-sticky">
<style scoped>

/* custom css */
.tdi_100{
                    vertical-align: baseline;
                }.tdi_100 > .wpb_wrapper,
				.tdi_100 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_100 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_100 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_100 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}
</style><div class="wpb_wrapper"><div class="wpb_wrapper td_block_empty_space td_block_wrap vc_empty_space tdi_102 "  style="height: 32px"></div><div class="td_block_wrap td_block_video_embed tdi_104 td-pb-border-top td_block_template_8"  data-td-block-uid="tdi_104" >
<style>
/* custom css */
.tdi_104 .wpb_video_wrapper{
                    position: relative;
                    height: 0;
                    padding-bottom: 56.25%;
                }.tdi_104 iframe{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100% !important;
                    height: 100% !important;
                }
</style><div class="td-block-title-wrap"></div><div id=tdi_104 class="td_block_inner td-fix-index">
                            <div class="wpb_video_wrapper">
                                <div class="rll-youtube-player" data-src="https://www.youtube.com/embed/lCWVoliJ6Ps" data-id="lCWVoliJ6Ps" data-query="enablejsapi=1&amp;feature=oembed&amp;wmode=opaque&amp;vq=hd720&amp;&amp;&amp;"></div><noscript><iframe class="td-youtube-player" width="600" height="560" src="https://www.youtube.com/embed/lCWVoliJ6Ps?enablejsapi=1&feature=oembed&wmode=opaque&vq=hd720&&&" frameborder="0" allowfullscreen="" allow="autoplay"></iframe></noscript>                            
                            </div>
        
                    <script type="rocketlazyloadscript" data-rocket-type="text/javascript">window.addEventListener('DOMContentLoaded', function() {
                            
                        jQuery().ready(function() {
                            tdShowVideo.loadApiYoutube(); 
                        });
                        
                    });</script></div></div><div class="td_block_wrap td_flex_block_1 tdi_105 td_with_ajax_pagination td-pb-border-top td_block_template_8 td_flex_block"  data-td-block-uid="tdi_105" >
<style>
.tdi_105 .td-block-title > *:before,
            .tdi_105 .td-block-title > *:after {
                background-color: #008d7f !important;
            }
/* inline tdc_css att */

/* phone */
@media (max-width: 767px)
{
.tdi_105{
margin-bottom:40px !important;
}
}

</style>
<style>
/* custom css */
.tdi_105 .td-image-wrap{
					padding-bottom: 100%;
				}.tdi_105 .entry-thumb{
					background-position: center 50%;
				}.tdi_105 .td-image-container{
				 	flex: 0 0 30%;
				 	width: 30%;
			    
                	display: block; order: 0;
                }.ie10 .tdi_105 .td-image-container,
				.ie11 .tdi_105 .td-image-container{
				 	flex: 0 0 auto;
			    }.tdi_105 .td-module-container{
					flex-direction: row;
				
				    border-color: #eaeaea !important;
				}.ie10 .tdi_105 .td-module-meta-info,
				.ie11 .tdi_105 .td-module-meta-info{
				 	flex: 1;
			    }.tdi_105 .td-module-meta-info{
					padding: 0 0 0 15px;
				
				    display: flex;
				    flex-direction: column;
					justify-content: center;
				
					border-color: #eaeaea;
				}.tdi_105 .td-category-pos-above .td-post-category{
				    align-self: flex-start;
				}.tdi_105 .td_module_wrap{
					padding-left: 20px;
					padding-right: 20px;
				
					padding-bottom: 12px;
					margin-bottom: 12px;
				}.tdi_105 .td_block_inner{
					margin-left: -20px;
					margin-right: -20px;
				}.tdi_105 .td-module-container:before{
					bottom: -12px;
				
					border-color: #eaeaea;
				}.tdi_105 .entry-thumb,
				.tdi_105 .entry-thumb:before,
				.tdi_105 .entry-thumb:after{
					border-radius: 100%;
				}.tdi_105 .td-post-vid-time{
					display: block;
				}.tdi_105 .td-post-category{
					padding: 0px;
				
					background-color: rgba(255,255,255,0);
				
					color: #000000;
				
					font-family:Proxima Nova Reguler !important;font-size:11px !important;line-height:1 !important;font-weight:400 !important;text-transform:uppercase !important;
				}.tdi_105 .td-post-category:not(.td-post-extra-category){
					display: inline-block;
				}.tdi_105 .td-author-photo .avatar{
				    width: 20px;
				    height: 20px;
				
				    margin-right: 6px;
				
				    border-radius: 50%;
				}.tdi_105 .td-excerpt{
					display: none;
				
					margin: 0px;
				
					column-count: 1;
				
					column-gap: 48px;
				
					font-family:Proxima Nova Reguler !important;
				}.tdi_105 .td-audio-player{
					opacity: 1;
					visibility: visible;
					height: auto;
				
					font-size: 13px;
				}.tdi_105 .td-read-more{
					display: none;
				}.tdi_105 .td-author-date{
					display: none;
				}.tdi_105 .td-post-author-name{
					display: none;
				}.tdi_105 .td-post-date,
				.tdi_105 .td-post-author-name span{
					display: none;
				}.tdi_105 .entry-review-stars{
					display: none;
				}.tdi_105 .td-icon-star,
                .tdi_105 .td-icon-star-empty,
                .tdi_105 .td-icon-star-half{
					font-size: 15px;
				}.tdi_105 .td-module-comments{
					display: none;
				}.tdi_105 .td_module_wrap:nth-last-child(1){
					margin-bottom: 0;
					padding-bottom: 0;
				}.tdi_105 .td_module_wrap:nth-last-child(1) .td-module-container:before{
					display: none;
				}.tdi_105 .td-post-category:hover{
					background-color: rgba(255,255,255,0) !important;
				
					color: #008d7f;
				}.tdi_105 .td-module-title a{
					color: #000000;
				}.tdi_105 .td_module_wrap:hover .td-module-title a{
					color: #008d7f !important;
				}.tdi_105.td_with_ajax_pagination .td-next-prev-wrap a:hover,
				.tdi_105 .td-load-more-wrap a:hover{    
					background-color: #008d7f !important;
					border-color: #008d7f !important;
				
					border-color: #008d7f !important;
				}.tdi_105 .entry-title{
					margin: 8px 0 0 0;
				
					font-family:Proxima Nova Bold !important;font-size:15px !important;line-height:1.2 !important;font-weight:500 !important;
				}.tdi_105 .td-block-title a,
				.tdi_105 .td-block-title span{
					font-family:Proxima Nova Bold !important;font-size:17px !important;font-weight:500 !important;text-transform:uppercase !important;
				}.tdi_105 .td-subcat-list a,
				.tdi_105 .td-subcat-dropdown span,
				.tdi_105 .td-subcat-dropdown a{
					font-family:Proxima Nova Reguler !important;
				}.tdi_105 .td-editor-date,
				.tdi_105 .td-editor-date .td-post-author-name a,
				.tdi_105 .td-editor-date .entry-date,
				.tdi_105 .td-module-comments a{
					font-family:Proxima Nova Reguler !important;
				}.tdi_105 .td-read-more a{
					font-family:Proxima Nova Reguler !important;
				}.tdi_105 .td-load-more-wrap a{
					font-family:Proxima Nova Reguler !important;
				}html:not([class*='ie']) .tdi_105 .td-module-container:hover .entry-thumb:before{
                    opacity: 0;
                }

/* landscape */
@media (min-width: 1019px) and (max-width: 1140px){
.tdi_105 .td_module_wrap{
					padding-bottom: 10px;
					margin-bottom: 10px;
				
					padding-bottom: 10px !important;
					margin-bottom: 10px !important;
				}.tdi_105 .td-module-container:before{
					bottom: -10px;
				}.tdi_105 .td_module_wrap:nth-last-child(1){
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}.tdi_105 .td_module_wrap .td-module-container:before{
					display: block !important;
				}.tdi_105 .td_module_wrap:nth-last-child(1) .td-module-container:before{
					display: none !important;
				}
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_105 .td-module-meta-info{
					padding: 0 0 0 10px;
				}.tdi_105 .td_module_wrap{
					padding-bottom: 7.5px;
					margin-bottom: 7.5px;
				
					padding-bottom: 7.5px !important;
					margin-bottom: 7.5px !important;
				}.tdi_105 .td-module-container:before{
					bottom: -7.5px;
				}.tdi_105 .td_module_wrap:nth-last-child(1){
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}.tdi_105 .td_module_wrap .td-module-container:before{
					display: block !important;
				}.tdi_105 .td_module_wrap:nth-last-child(1) .td-module-container:before{
					display: none !important;
				}.tdi_105 .entry-title{
					margin: 5px 0 0 0;
				
					font-family:Proxima Nova Bold !important;font-size:11px !important;line-height:1.2 !important;font-weight:500 !important;
				}.tdi_105 .td-block-title a,
				.tdi_105 .td-block-title span{
					font-family:Proxima Nova Bold !important;font-size:15px !important;font-weight:500 !important;text-transform:uppercase !important;
				}
}

/* phone */
@media (max-width: 767px){
.tdi_105 .td_module_wrap{
					width: 100%;
					float: left;
				
					padding-bottom: 12px;
					margin-bottom: 12px;
				
					padding-bottom: 12px !important;
					margin-bottom: 12px !important;
				}.tdi_105 .td-module-container:before{
					bottom: -12px;
				}.tdi_105 .td_module_wrap:nth-last-child(1){
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}.tdi_105 .td_module_wrap .td-module-container:before{
					display: block !important;
				}.tdi_105 .td_module_wrap:nth-last-child(1) .td-module-container:before{
					display: none !important;
				}
}
</style><script type="rocketlazyloadscript">var block_tdi_105 = new tdBlock();
block_tdi_105.id = "tdi_105";
block_tdi_105.atts = '{"modules_on_row":"eyJwaG9uZSI6IjEwMCUifQ==","image_floated":"float_left","image_width":"30","image_height":"100","show_btn":"none","show_excerpt":"none","modules_category":"above","show_date":"none","show_review":"none","show_com":"none","show_author":"none","meta_padding":"eyJhbGwiOiIwIDAgMCAxNXB4IiwicG9ydHJhaXQiOiIwIDAgMCAxMHB4In0=","art_title":"eyJhbGwiOiI4cHggMCAwIDAiLCJwb3J0cmFpdCI6IjVweCAwIDAgMCJ9","f_title_font_family":"file_1","f_title_font_size":"eyJhbGwiOiIxNSIsInBvcnRyYWl0IjoiMTEifQ==","f_title_font_weight":"500","f_title_font_line_height":"1.2","title_txt":"#000000","cat_bg":"rgba(255,255,255,0)","cat_bg_hover":"rgba(255,255,255,0)","f_cat_font_family":"file_2","f_cat_font_transform":"uppercase","f_cat_font_weight":"400","f_cat_font_size":"11","modules_category_padding":"0","all_modules_space":"eyJhbGwiOiIyNCIsInBvcnRyYWl0IjoiMTUiLCJsYW5kc2NhcGUiOiIyMCJ9","category_id":"","ajax_pagination":"load_more","sort":"","title_txt_hover":"#008d7f","tdc_css":"eyJwaG9uZSI6eyJtYXJnaW4tYm90dG9tIjoiNDAiLCJkaXNwbGF5IjoiIn0sInBob25lX21heF93aWR0aCI6NzY3LCJhbGwiOnsiZGlzcGxheSI6IiJ9LCJwb3J0cmFpdCI6eyJkaXNwbGF5IjoiIn0sInBvcnRyYWl0X21heF93aWR0aCI6MTAxOCwicG9ydHJhaXRfbWluX3dpZHRoIjo3Njh9","cat_txt":"#000000","cat_txt_hover":"#008d7f","f_more_font_weight":"","f_more_font_transform":"","f_more_font_family":"file_2","image_size":"td_150x0","f_meta_font_family":"file_2","custom_title":"Latest Articles","block_template_id":"td_block_template_8","border_color":"#008d7f","art_excerpt":"0","meta_info_align":"center","f_cat_font_line_height":"1","pag_h_bg":"#008d7f","image_radius":"100%","td_ajax_filter_type":"","f_header_font_size":"eyJhbGwiOiIxNyIsInBvcnRyYWl0IjoiMTUifQ==","f_header_font_weight":"500","f_header_font_transform":"uppercase","f_header_font_family":"file_1","pag_h_border":"#008d7f","f_ajax_font_family":"file_2","f_ex_font_family":"file_2","f_btn_font_family":"file_2","title_tag":"h2","category_ids":"-344812","limit":"3","block_type":"td_flex_block_1","separator":"","custom_url":"","mc1_tl":"","mc1_title_tag":"","mc1_el":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","offset":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","el_class":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","container_width":"","modules_gap":"","m_padding":"","modules_border_size":"","modules_border_style":"","modules_border_color":"#eaeaea","modules_divider":"","modules_divider_color":"#eaeaea","h_effect":"","image_alignment":"50","hide_image":"","video_icon":"","video_popup":"yes","video_rec":"","spot_header":"","video_rec_title":"","video_rec_color":"","video_rec_disable":"","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","video_title_color":"","video_title_color_h":"","video_bg":"","video_overlay":"","vid_t_color":"","vid_t_bg_color":"","f_vid_title_font_header":"","f_vid_title_font_title":"Video pop-up article title","f_vid_title_font_settings":"","f_vid_title_font_family":"","f_vid_title_font_size":"","f_vid_title_font_line_height":"","f_vid_title_font_style":"","f_vid_title_font_weight":"","f_vid_title_font_transform":"","f_vid_title_font_spacing":"","f_vid_title_":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_horiz":"layout-default","meta_width":"","meta_margin":"","meta_space":"","art_btn":"","meta_info_border_size":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","meta_info_border_radius":"","modules_category_margin":"","modules_cat_border":"","modules_category_radius":"0","show_cat":"inline-block","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","review_space":"","review_size":"2.5","review_distance":"","excerpt_col":"1","excerpt_gap":"","excerpt_middle":"","excerpt_inline":"","show_audio":"block","hide_audio":"","art_audio":"","art_audio_size":"1.5","btn_title":"","btn_margin":"","btn_padding":"","btn_border_width":"","btn_radius":"","pag_space":"","pag_padding":"","pag_border_width":"","pag_border_radius":"","prev_tdicon":"","next_tdicon":"","pag_icons_size":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_spacing":"","f_more_":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_style":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_style":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_size":"","f_meta_font_line_height":"","f_meta_font_style":"","f_meta_font_weight":"","f_meta_font_transform":"","f_meta_font_spacing":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","f_btn_font_title":"Article read more button","f_btn_font_settings":"","f_btn_font_size":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_weight":"","f_btn_font_transform":"","f_btn_font_spacing":"","f_btn_":"","mix_color":"","mix_type":"","fe_brightness":"1","fe_contrast":"1","fe_saturate":"1","mix_color_h":"","mix_type_h":"","fe_brightness_h":"1","fe_contrast_h":"1","fe_saturate_h":"1","m_bg":"","color_overlay":"","shadow_shadow_header":"","shadow_shadow_title":"Module Shadow","shadow_shadow_size":"","shadow_shadow_offset_horizontal":"","shadow_shadow_offset_vertical":"","shadow_shadow_spread":"","shadow_shadow_color":"","all_underline_height":"","all_underline_color":"","cat_border":"","cat_border_hover":"","meta_bg":"","author_txt":"","author_txt_hover":"","date_txt":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","audio_btn_color":"","audio_time_color":"","audio_bar_color":"","audio_bar_curr_color":"","shadow_m_shadow_header":"","shadow_m_shadow_title":"Meta info shadow","shadow_m_shadow_size":"","shadow_m_shadow_offset_horizontal":"","shadow_m_shadow_offset_vertical":"","shadow_m_shadow_spread":"","shadow_m_shadow_color":"","btn_bg":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border":"","btn_border_hover":"","pag_text":"","pag_h_text":"","pag_bg":"","pag_border":"","ajax_pagination_infinite_stop":"","css":"","td_column_number":1,"header_color":"","color_preset":"","border_top":"","class":"tdi_105","tdc_css_class":"tdi_105","tdc_css_class_style":"tdi_105_rand_style"}';
block_tdi_105.td_column_number = "1";
block_tdi_105.block_type = "td_flex_block_1";
block_tdi_105.post_count = "3";
block_tdi_105.found_posts = "35443";
block_tdi_105.header_color = "";
block_tdi_105.ajax_pagination_infinite_stop = "";
block_tdi_105.max_num_pages = "11815";
tdBlocksArray.push(block_tdi_105);
</script><div class="td-block-title-wrap"><h2 class="td-block-title"><span>Latest Articles</span></h2></div><div id=tdi_105 class="td_block_inner td-mc1-wrap">
        <div class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack ">
            <div class="td-module-container td-category-pos-above">
                                    <div class="td-image-container">
                                                <div class="td-module-thumb"><a href="https://telset.id/review/review-amazfit-gtr-3-pro-desain-oke-fiturnya-lengkap/" rel="bookmark" class="td-image-wrap " title="Review Amazfit GTR 3 Pro: Desain Oke, Fiturnya Lengkap" ><span class="entry-thumb td-thumb-css" data-type="css_image" data-img-url="https://telset.id/wp-content/uploads/2022/01/Review-Amazfit-GTR-3-Pro-150x96.jpg" data-img-retina-url="https://telset.id/wp-content/uploads/2022/01/Review-Amazfit-GTR-3-Pro-300x193.jpg" ></span></a></div>                                            </div>
                
                <div class="td-module-meta-info">
                                        <a href="https://telset.id/review/" class="td-post-category" data-wpel-link="internal" target="_self" rel="follow">Review</a>
                    <h3 class="entry-title td-module-title"><a href="https://telset.id/review/review-amazfit-gtr-3-pro-desain-oke-fiturnya-lengkap/" rel="bookmark follow" title="Review Amazfit GTR 3 Pro: Desain Oke, Fiturnya Lengkap" data-wpel-link="internal" target="_self">Review Amazfit GTR 3 Pro: Desain Oke, Fiturnya Lengkap</a></h3>
                    
                                            <div class="td-editor-date">
                                                        
                                                            <span class="td-author-date">
                                                                                                                                                                                                                    </span>
                                                    </div>
                    
                    
                    
                                    </div>
            </div>
        </div>

        
        <div class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack ">
            <div class="td-module-container td-category-pos-above">
                                    <div class="td-image-container">
                                                <div class="td-module-thumb"><a href="https://telset.id/news/telko/ghozali-everyday-viral-kominfo-awasi-nft/" rel="bookmark" class="td-image-wrap " title="Ghozali Everyday Viral, Kominfo Awasi Peredaran NFT" ><span class="entry-thumb td-thumb-css" data-type="css_image" data-img-url="https://telset.id/wp-content/uploads/2022/01/NFT-Kominfo-150x84.jpeg" data-img-retina-url="https://telset.id/wp-content/uploads/2022/01/NFT-Kominfo-300x169.jpeg" ></span></a></div>                                            </div>
                
                <div class="td-module-meta-info">
                                        <a href="https://telset.id/news/telko/" class="td-post-category" data-wpel-link="internal" target="_self" rel="follow">TELKO</a>
                    <h3 class="entry-title td-module-title"><a href="https://telset.id/news/telko/ghozali-everyday-viral-kominfo-awasi-nft/" rel="bookmark follow" title="Ghozali Everyday Viral, Kominfo Awasi Peredaran NFT" data-wpel-link="internal" target="_self">Ghozali Everyday Viral, Kominfo Awasi Peredaran NFT</a></h3>
                    
                                            <div class="td-editor-date">
                                                        
                                                            <span class="td-author-date">
                                                                                                                                                                                                                    </span>
                                                    </div>
                    
                    
                    
                                    </div>
            </div>
        </div>

        
        <div class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack ">
            <div class="td-module-container td-category-pos-above">
                                    <div class="td-image-container">
                                                <div class="td-module-thumb"><a href="https://telset.id/apps/download-video-youtube-otomatis-hp-android/" rel="bookmark" class="td-image-wrap " title="YouTube Uji Coba Fitur Download Video Otomatis untuk HP Android" ><span class="entry-thumb td-thumb-css" data-type="css_image" data-img-url="https://telset.id/wp-content/uploads/2022/01/Fitur-Download-YouTube-3-150x84.jpg" data-img-retina-url="https://telset.id/wp-content/uploads/2022/01/Fitur-Download-YouTube-3-300x169.jpg" ></span></a></div>                                            </div>
                
                <div class="td-module-meta-info">
                                        <a href="https://telset.id/apps/" class="td-post-category" data-wpel-link="internal" target="_self" rel="follow">APPS</a>
                    <h3 class="entry-title td-module-title"><a href="https://telset.id/apps/download-video-youtube-otomatis-hp-android/" rel="bookmark follow" title="YouTube Uji Coba Fitur Download Video Otomatis untuk HP Android" data-wpel-link="internal" target="_self">YouTube Uji Coba Fitur Download Video Otomatis untuk HP Android</a></h3>
                    
                                            <div class="td-editor-date">
                                                        
                                                            <span class="td-author-date">
                                                                                                                                                                                                                    </span>
                                                    </div>
                    
                    
                    
                                    </div>
            </div>
        </div>

        </div><div class="td-load-more-wrap"><a href="#" class="td_ajax_load_more td_ajax_load_more_js" aria-label="load_more" id="next-page-tdi_105" data-td_block_id="tdi_105">Muat lebih<i class="td-icon-font td-icon-menu-down"></i></a></div></div><div class="td-a-rec td-a-rec-id-custom_ad_1  td-rec-hide-on-tp td-rec-hide-on-p tdi_106 td_block_template_8">
<style>

/* inline tdc_css att */

.tdi_106{
margin-bottom:40px !important;
}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_106{
margin-bottom:20px !important;
}
}

/* phone */
@media (max-width: 767px)
{
.tdi_106{
margin-bottom:38px !important;
}
}

</style>
<style>
/* custom css */
.tdi_106.td-a-rec{
					text-align: center;
				}.tdi_106 .td-element-style{
					z-index: -1;
				}.tdi_106 .td-adspot-title{
					font-family:Proxima Nova Reguler !important;
				}
</style><span class="td-adspot-title">- Advertisement -</span><!-- AdSlot for Skyscraper -->
<div id='div-gpt-ad-skyscraper'>
  <script type="rocketlazyloadscript">
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-skyscraper'); });
  </script>
</div>
<!-- AdSlot for Skyscraper -->
</div></div></div></div></div></div></div>                                    </article>
            </div>
        </div>
        
    </div> <!-- #tdb-autoload-article -->



    <div class="td-footer-template-wrap" style="position: relative">
                <div class="td-footer-wrap ">
            <div id="tdi_107" class="tdc-zone"><div class="tdc_zone tdi_108  wpb_row td-pb-row"  >
<style scoped>

/* custom css */
.tdi_108{
                    min-height: 0;
                }
</style><div id="tdi_109" class="tdc-row stretch_row_1600 td-stretch-content"><div class="vc_row tdi_110  wpb_row td-pb-row tdc-element-style" >
<style scoped>

/* custom css */
.tdi_110,
                .tdi_110 .tdc-columns{
                    min-height: 0;
                }.tdi_110,
				.tdi_110 .tdc-columns{
				    display: block;
				}.tdi_110 .tdc-columns{
				    width: 100%;
				}
/* inline tdc_css att */

.tdi_110{
padding-top:60px !important;
padding-bottom:60px !important;
position:relative;
}

.tdi_110 .td_block_wrap{ text-align:left }

/* portrait */
@media (min-width: 768px) and (max-width: 1018px)
{
.tdi_110{
padding-top:40px !important;
padding-bottom:40px !important;
}
}

</style>
<div class="tdi_109_rand_style td-element-style" ><style>
.tdi_109_rand_style{
background-color:#ededed !important;
}
 </style></div><div class="vc_column tdi_112  wpb_column vc_column_container tdc-column td-pb-span7">
<style scoped>

/* custom css */
.tdi_112{
                    vertical-align: baseline;
                }.tdi_112 > .wpb_wrapper,
				.tdi_112 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_112 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_112 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_112 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}
</style><div class="wpb_wrapper"><div class="td_block_wrap tdb_header_logo tdi_113 td-pb-border-top td_block_template_8 tdb-header-align"  data-td-block-uid="tdi_113" >
<style>
/* custom css */
.tdi_113 .tdb-logo-a,
                .tdi_113 h1{
                    flex-direction: row;
                
                    align-items: center;
                
                    justify-content: center;
                }.tdi_113 .tdb-logo-svg-wrap{
                    display: block;
                }.tdi_113 .tdb-logo-svg-wrap + .tdb-logo-img-wrap{
                    display: none;
                }.tdi_113 .tdb-logo-img-wrap{
                    display: block;
                }.tdi_113 .tdb-logo-text-tagline{
                    margin-top: 2px;
                    margin-left: 0;
                
                    display: block;
                }.tdi_113 .tdb-logo-text-title{
                    display: block;
                }.tdi_113 .tdb-logo-text-wrap{
                    flex-direction: column;
                
                    align-items: flex-start;
                }.tdi_113 .tdb-logo-icon{
                    top: 0px;
                
                    display: block;
                }
</style><div class="tdb-block-inner td-fix-index"><a class="tdb-logo-a" href="https://telset.id/" data-wpel-link="internal" target="_self" rel="follow"><span class="tdb-logo-img-wrap"><img class="tdb-logo-img td-retina-data" data-retina="https://telset.id/wp-content/uploads/2019/02/LOGO-TELSET-1.png" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20280%2096'%3E%3C/svg%3E" alt="Logo"  title=""  width="280" height="96" data-lazy-src="https://telset.id/wp-content/uploads/2020/08/telset-logo-retina.png" /><noscript><img class="tdb-logo-img td-retina-data" data-retina="https://telset.id/wp-content/uploads/2019/02/LOGO-TELSET-1.png" src="https://telset.id/wp-content/uploads/2020/08/telset-logo-retina.png" alt="Logo"  title=""  width="280" height="96" /></noscript></span></a></div></div> <!-- ./block --><div class="td_block_wrap td_block_list_menu tdi_114 td-pb-border-top td_block_template_8 widget"  data-td-block-uid="tdi_114" >
<style>

/* inline tdc_css att */

.tdi_114{
margin-bottom:0px !important;
}

/* phone */
@media (max-width: 767px)
{
.tdi_114{
margin-bottom:30px !important;
}
}

</style>
<style>
/* custom css */
.td_block_list_menu ul{
                  flex-wrap: wrap;
                  margin-left: 12px;
                }.td_block_list_menu ul li{
                  margin-left: 0;
                }.td_block_list_menu .sub-menu{
                  padding-left: 22px;
                }.td_block_list_menu .sub-menu li{
                  font-size: 13px;
                }.tdi_114 li{
					display: inline-block;
				
					font-style:italic !important;font-weight:700 !important;
				}.tdi_114 .menu{
					display: flex;
				}.tdi_114 .sub-menu{
					display: none;
				}.tdi_114 ul{
					margin: 0px;
				
					text-align: center;
					justify-content: center;
				}.tdi_114 ul li{
					margin-right: 20px;
				}.tdi_114 ul li:last-child{
					margin-right: 0;
				}.tdi_114 a{
					color: #222222;
				}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_114 li{
					font-size:12px !important;font-style:italic !important;font-weight:700 !important;
				}
}
</style><div class="td-block-title-wrap"></div><div id=tdi_114 class="td_block_inner td-fix-index"><div class="menu-footer-container"><ul id="menu-footer" class="menu"><li id="menu-item-247314" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-247314"><a href="https://telset.id/about-us/" data-wpel-link="internal" target="_self" rel="follow">About Us</a></li>
<li id="menu-item-320931" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320931"><a href="https://telset.id/contact-us/" data-wpel-link="internal" target="_self" rel="follow">Contact Us</a></li>
<li id="menu-item-247315" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-247315"><a href="https://telset.id/disclaimer/" data-wpel-link="internal" target="_self" rel="follow">Disclaimer</a></li>
<li id="menu-item-306993" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-306993"><a href="https://telko.id" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">Our Network > Telko.id</a></li>
</ul></div></div></div></div></div><div class="vc_column tdi_116  wpb_column vc_column_container tdc-column td-pb-span5">
<style scoped>

/* custom css */
.tdi_116{
                    vertical-align: baseline;
                }.tdi_116 > .wpb_wrapper,
				.tdi_116 > .wpb_wrapper > .tdc-elements{
				    display: block;
				}.tdi_116 > .wpb_wrapper > .tdc-elements{
				    width: 100%;
				}.tdi_116 > .wpb_wrapper > .vc_row_inner{
				    width: auto;
				}.tdi_116 > .wpb_wrapper{
				    width: auto;
				    height: auto;
				}
</style><div class="wpb_wrapper"><div class="tdm_block td_block_wrap tdm_block_column_title tdi_117 tdm-content-horiz-center td-pb-border-top td_block_template_8"  data-td-block-uid="tdi_117" >
<style>
/* custom css */
.tdm_block_column_title{
                  margin-bottom: 0;
                  display: inline-block;
                  width: 100%;
                }
</style><div class="td-block-row"><div class="td-block-span12 tdm-col">
<style>
body .tdi_118 .tdm-title{
					color: #222222;
				}.tdi_118 .tdm-title{
					font-family:Proxima Nova Bold !important;font-size:20px !important;line-height:1 !important;font-style:italic !important;font-weight:700 !important;text-transform:uppercase !important;
				}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_118 .tdm-title{
					font-family:Proxima Nova Bold !important;font-size:16px !important;line-height:1 !important;font-style:italic !important;font-weight:700 !important;text-transform:uppercase !important;
				}
}
</style><div class="tds-title tds-title1 td-fix-index tdi_118"><h3 class="tdm-title tdm-title-md">Follow Us</h3></div></div></div></div><div class="tdm_block td_block_wrap tdm_block_socials tdi_119 tdm-content-horiz-center td-pb-border-top td_block_template_8"  data-td-block-uid="tdi_119" >
<style>

/* inline tdc_css att */

.tdi_119{
margin-top:-5px !important;
margin-bottom:0px !important;
}

</style>
<style>
/* custom css */
.tdm_block.tdm_block_socials{
                  margin-bottom: 0;
                }.tdm-social-wrapper{
                  *zoom: 1;
                }.tdm-social-wrapper:before,
                .tdm-social-wrapper:after{
                  display: table;
                  content: '';
                  line-height: 0;
                }.tdm-social-wrapper:after{
                  clear: both;
                }.tdm-social-item-wrap{
                  display: inline-block;
                }.tdm-social-item{
                  position: relative;
                  display: inline-block;
                  vertical-align: middle;
                  -webkit-transition: all 0.2s;
                  transition: all 0.2s;
                  text-align: center;
                  -webkit-transform: translateZ(0);
                  transform: translateZ(0);
                }.tdm-social-item i{
                  font-size: 14px;
                  color: #4db2ec;
                  -webkit-transition: all 0.2s;
                  transition: all 0.2s;
                }.tdm-social-text{
                  display: none;
                  margin-top: -1px;
                  vertical-align: middle;
                  font-size: 13px;
                  color: #4db2ec;
                  -webkit-transition: all 0.2s;
                  transition: all 0.2s;
                }.tdm-social-item-wrap:hover i,
                .tdm-social-item-wrap:hover .tdm-social-text{
                  color: #000;
                }.tdm-social-item-wrap:last-child .tdm-social-text{
                  margin-right: 0 !important;
                }
</style>
<style>
.tds-social3 .tdm-social-item{
                  background-color: #4db2ec;
                }.tds-social3 .tdm-social-item:hover{
                  background-color: #000;
                }.tds-social3 .tdm-social-item i{
                  color: #fff;
                }.tdi_120 .tdm-social-item i{
					font-size: 15px;
					vertical-align: middle;
				}.tdi_120 .tdm-social-item i.td-icon-twitter,
				.tdi_120 .tdm-social-item i.td-icon-linkedin,
				.tdi_120 .tdm-social-item i.td-icon-pinterest,
				.tdi_120 .tdm-social-item i.td-icon-blogger,
				.tdi_120 .tdm-social-item i.td-icon-vimeo{
					font-size: 12px;
				}.tdi_120 .tdm-social-item{
					width: 40.5px;
					height: 40.5px;
					line-height: 40.5px;
				
				    margin: 5px 10px 5px 0;
				
					border-radius: 50px;
				}.tdi_120 .tdm-social-item-wrap:last-child .tdm-social-item{
				    margin-right: 0 !important;
				}.tdi_120 .tdm-social-text{
					margin-left: 2px;
				
					margin-right: 18px;
				}

/* portrait */
@media (min-width: 768px) and (max-width: 1018px){
.tdi_120 .tdm-social-item i{
					font-size: 14px;
					vertical-align: middle;
				}.tdi_120 .tdm-social-item i.td-icon-twitter,
				.tdi_120 .tdm-social-item i.td-icon-linkedin,
				.tdi_120 .tdm-social-item i.td-icon-pinterest,
				.tdi_120 .tdm-social-item i.td-icon-blogger,
				.tdi_120 .tdm-social-item i.td-icon-vimeo{
					font-size: 11.2px;
				}.tdi_120 .tdm-social-item{
					width: 33.6px;
					height: 33.6px;
					line-height: 33.6px;
				
				    margin: 2.5px 5px 2.5px 0;
				}
}
</style><div class="tdm-social-wrapper tds-social3 tdi_120"><div class="tdm-social-item-wrap"><a href="https://facebook.com/majalahtelset/" title="Facebook" class="tdm-social-item" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><i class="td-icon-font td-icon-facebook"></i></a><a href="https://facebook.com/majalahtelset/" class="tdm-social-text" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">Facebook</a></div><div class="tdm-social-item-wrap"><a href="https://instagram.com/telset.id/" title="Instagram" class="tdm-social-item" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><i class="td-icon-font td-icon-instagram"></i></a><a href="https://instagram.com/telset.id/" class="tdm-social-text" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">Instagram</a></div><div class="tdm-social-item-wrap"><a href="https://twitter.com/telset_id" title="Twitter" class="tdm-social-item" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><i class="td-icon-font td-icon-twitter"></i></a><a href="https://twitter.com/telset_id" class="tdm-social-text" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">Twitter</a></div><div class="tdm-social-item-wrap"><a href="https://youtube.com/TELSETIDTV" title="Youtube" class="tdm-social-item" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><i class="td-icon-font td-icon-youtube"></i></a><a href="https://youtube.com/TELSETIDTV" class="tdm-social-text" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">Youtube</a></div></div></div></div></div></div></div></div></div>        </div>

    </div>
    <style>
    .tdc-footer-template .td-main-content-wrap {
        padding-bottom: 0;
    }
</style>

</div><!--close td-outer-wrap-->

    <script type="text/html" class="alike-list">
      <% if( _.isObject(items) ){ %>
      
        <% _.each(items, function(item,key,list){ %>
          <div class="alike-compare-widget-post">
            <div class="alike-compare-widget-post-remove">
              <span class="alike-compare-widget-post-remove-button" data-post-id="<%= item.postId %>">✕</span>
            </div>
            <div class="alike-compare-widget-post-image-wrapper" style="height: 112px; width: 112px;">
              <img class="alike-compare-widget-post-image" alt="<%= item.postTitle %>" src="<%= item.postThumb %>">
            </div>
            <div class="alike-compare-widget-post-title" title="<%= item.postTitle %>"><%= item.postTitle %></div>
          </div>

        <% }) %>

      <%  } %>
      <% if( _.isEmpty(items) ){ %>
        <div class="alike-widget-partials clearfix">No Items Selected.</div>
      <%  } %>
    </script>
    
    <script type="text/html" class="alike-mobile-list">
      <% if( _.isObject(items) ){ %>
        <% _.each(items, function(item,key,list){ %>
          <div class="alike-compare-item">
            <div class="alike-item-image-wrap">
              <img src="<%= item.postThumb %>" alt="<%= item.postTitle %>">
            </div>
            <div class="alike-item-content">
              <h3><%= item.postTitle %></h3>
            </div>
            <a href="#" class="alike-close-item" data-post-id="<%= item.postId %>">
              <i class="ion-close-round" data-post-id="<%= item.postId %>"></i>
            </a>
          </div>
        <% }) %>

      <%  } %>
      <% if( _.isEmpty(items) ){ %>
        <div class="alike-widget-partials clearfix">No Items Selected.</div>
      <%  } %>
    </script>
    
    <div class="alike-compare-area">
      <div id="alikeMobileDrawer" class="alike-mobile-drawer">
        <div class="alike-compare-list-wrapper">
          <div class="alike-compare-title">
            <h2>Your compare list</h2>
            <i class="alikeCloseDrawer ion-close-round"></i>
          </div>
          <div class="alike-compare-widget-mobile-content-load"></div>
        </div>
        <div class="alike-compare-action">
          <button class="btn-remove-all alike-btn-remove-all">
            Remove All
          </button>
          <a class="alike-btn-compare" href="#">
            Compare
          </a>
        </div>
      </div>
    </div>

    <div class="alike-compare-widget-wrapper">
      <div class="alike-compare-widget-main">
        <div class="alike-compare-widget-content alike-compare-widget-content-before-scale">
          <div class="alike-compare-widget-content-load" style=""></div>
          <div class="alike-compare-widget-post-remove-all">
            <div class="alike-compare-widget-post-remove-all-content">
              <span>REMOVE ALL</span>
            </div>
          </div>
        </div>
                <a class="alike-compare-widget-button" href="#">
          <span class="alike-compare-widget-button-text">COMPARE</span>
          <div class="alike-compare-widget-counter-wrapper">
            <span class="alike-compare-widget-counter">0</span>
          </div>
        </a>
      </div>
    </div>
    

    <!--

        Theme: Newspaper by tagDiv.com 2021
        Version: 11.4 (rara)
        Deploy mode: deploy
        
        uid: 61e49738258d6
    -->

    
<!-- Custom css from theme panel -->
<style type="text/css" media="screen">
/* custom css theme panel */
.td-post-content {
    text-align: justify;}
.td-header-main-menu {
    text-align:center;}
.td-main-page-wrap {
    padding-top: 0px;
}
.td_block_wrap {margin-bottom: 0px;}
.td-a-rec-id-sidebar>div {
    margin-bottom: 0px;
}
.td_category_template_8 .td-category-header {
    display: none;
}
</style>

<script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='rocket-browser-checker-js-after'>
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
<script type='text/javascript' id='rocket-preload-links-js-extra'>
/* <![CDATA[ */
var RocketPreloadLinksConfig = {"excludeUris":"\/(.+\/)?feed\/?.+\/?|\/(?:.+\/)?embed\/|\/(index\\.php\/)?wp\\-json(\/.*|$)|\/wp-admin\/|\/logout\/|\/wp-login.php","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|php|pdf|html|htm","siteUrl":"https:\/\/telset.id","onHoverDelay":"100","rateThrottle":"3"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='rocket-preload-links-js-after'>
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
</script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://telset.id/wp-includes/js/underscore.min.js?ver=1.13.1' id='underscore-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://telset.id/wp-content/plugins/td-cloud-library/assets/js/js_posts_autoload.min.js?ver=c181d64d1d8a935f19bbe229f049bcfe' id='tdb_js_posts_autoload-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://telset.id/wp-content/plugins/td-composer/legacy/Newspaper/js/tagdiv_theme.min.js?ver=11.4' id='td-site-min-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://telset.id/wp-includes/js/comment-reply.min.js?ver=5.8.3' id='comment-reply-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://telset.id/wp-content/plugins/alike/assets/dist/library/jquery.mousewheel.min.js?ver=1' id='mousewheel-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://telset.id/wp-content/plugins/alike/assets/dist/library/jquery.mCustomScrollbar.min.js?ver=1' id='mCustomScrollbar-js' defer></script>
<script type='text/javascript' id='alike_frontend-js-extra'>
/* <![CDATA[ */
var ALIKE = {"builder_nonce":"7487b74b0a","ajaxurl":"https:\/\/telset.id\/wp-admin\/admin-ajax.php","IMG":"https:\/\/telset.id\/wp-content\/plugins\/alike\/assets\/dist\/img\/","max_compare":"3","LANG":{"YOU_CAN_COMPARE_MAXIMUM_BETWEEN_S_ITEMS":"You can compare maximum between 3 items."},"pageUrl":"https:\/\/telset.id\/komparasi\/","CHECK_DEVICE":"no"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://telset.id/wp-content/cache/min/1/wp-content/plugins/alike/assets/dist/js/alike_frontend_1224bf.js?ver=1641193600' id='alike_frontend-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://telset.id/wp-content/plugins/td-cloud-library/assets/js/js_files_for_front.min.js?ver=c181d64d1d8a935f19bbe229f049bcfe' id='tdb_js_files_for_front-js' defer></script>
<script type='text/javascript' id='ivory-search-scripts-js-extra'>
/* <![CDATA[ */
var IvorySearchVars = {"is_analytics_enabled":"1"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://telset.id/wp-content/plugins/add-search-to-menu/public/js/ivory-search.min.js?ver=4.6.4' id='ivory-search-scripts-js' defer></script>
<script type='text/javascript' src='https://telset.id/wp-includes/js/wp-embed.min.js?ver=5.8.3' id='wp-embed-js' defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://telset.id/wp-content/cache/min/1/sdks/OneSignalSDK.js?ver=1641193600' async='async' id='remote_sdk-js'></script>

<!-- JS generated by theme -->

<script type="rocketlazyloadscript">window.addEventListener('DOMContentLoaded', function() {
    

            
                /* global jQuery:{} */
                jQuery().ready(function () {

                    var tdbMenuItem = new tdbMenu.item();
                    tdbMenuItem.blockUid = 'tdi_47';
                    tdbMenuItem.jqueryObj = jQuery('.tdi_47');

	                
                    tdbMenuItem.isMegaMenuFull = true;

	                
	                
	                
                    tdbMenu.addItem(tdbMenuItem);

                });
            
            

        
            jQuery().ready(function () {

                var tdbSearchItem = new tdbSearch.item();

                //block unique ID
                tdbSearchItem.blockUid = 'tdi_52';
                tdbSearchItem.blockAtts = '{"results_msg_align":"content-horiz-center","image_floated":"float_left","image_width":"30","image_size":"td_324x400","show_cat":"none","show_btn":"none","show_date":"","show_review":"none","show_com":"none","show_excerpt":"none","show_author":"none","meta_padding":"0 0 0 15px","art_title":"0 0 5px","all_modules_space":"15","tdc_css":"eyJhbGwiOnsiZGlzcGxheSI6IiJ9fQ==","form_align":"content-horiz-right","icon_color":"#ffffff","icon_size":"eyJhbGwiOiIxOCIsInBvcnRyYWl0IjoiMTQifQ==","icon_padding":"eyJhbGwiOjIuNiwicG9ydHJhaXQiOiIyLjgifQ==","tdicon":"td-icon-magnifier-medium-short-light","show_form":"yes","form_border_color":"#dd3333","arrow_color":"#dd3333","form_shadow_shadow_size":"10","form_shadow_shadow_color":"rgba(0,0,0,0.12)","f_input_font_family":"file_2","f_input_font_weight":"400","f_btn_font_family":"file_2","f_btn_font_weight":"400","f_input_font_size":"13","f_placeholder_font_family":"file_2","f_placeholder_font_weight":"400","f_placeholder_font_size":"13","f_btn_font_size":"13","f_results_msg_font_family":"file_1","f_results_msg_font_size":"11","f_title_font_family":"file_1","f_title_font_size":"13","f_title_font_line_height":"1.2","f_meta_font_family":"file_2","f_meta_font_size":"11","f_meta_font_line_height":"1","title_txt_hover":"#008d7f","btn_bg_h":"eyJ0eXBlIjoiZ3JhZGllbnQiLCJjb2xvcjEiOiIjMDA4ZDdmIiwiY29sb3IyIjoiIzAwOGQ3ZiIsIm1peGVkQ29sb3JzIjpbXSwiZGVncmVlIjoiLTkwIiwiY3NzIjoiYmFja2dyb3VuZC1jb2xvcjogIzAwOGQ3ZjsiLCJjc3NQYXJhbXMiOiIwZGVnLCMwMDhkN2YsIzAwOGQ3ZiJ9","modules_gap":"0","image_height":"80","meta_info_align":"center","results_msg_color_h":"#008d7f","f_toggle_txt_font_family":"file_2","f_cat_font_family":"file_2","f_ex_font_family":"file_2","block_type":"tdb_header_search","disable_live_search":"","separator":"","toggle_txt":"","toggle_txt_pos":"","toggle_txt_align":"0","toggle_txt_space":"","toggle_horiz_align":"content-horiz-left","inline":"","float_block":"","form_offset":"","form_offset_left":"","form_width":"","form_content_width":"","form_padding":"","form_border":"","form_align_screen":"","input_placeholder":"","placeholder_travel":"0","input_padding":"","input_border":"","input_radius":"","btn_text":"Search","btn_tdicon":"","btn_icon_pos":"","btn_icon_size":"","btn_icon_space":"","btn_icon_align":"0","btn_margin":"","btn_padding":"","btn_border":"","btn_radius":"","results_padding":"","results_border":"","results_msg_padding":"","results_msg_border":"","mc1_tl":"","mc1_title_tag":"","mc1_el":"","results_limit":"","modules_on_row":"100%","m_padding":"","modules_border_size":"","modules_border_style":"","modules_border_color":"#eaeaea","modules_divider":"","modules_divider_color":"#eaeaea","h_effect":"","image_alignment":"50","image_radius":"","hide_image":"","video_icon":"","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","vid_t_color":"","vid_t_bg_color":"","f_vid_time_font_header":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_horiz":"content-horiz-left","meta_width":"","meta_margin":"","meta_info_border_size":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","art_btn":"","modules_category":"","modules_category_margin":"","modules_category_padding":"","modules_cat_border":"","modules_category_radius":"0","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","review_space":"","review_size":"2.5","review_distance":"","art_excerpt":"","excerpt_col":"1","excerpt_gap":"","excerpt_middle":"","btn_title":"","btn_border_width":"","form_general_bg":"","icon_color_h":"","toggle_txt_color":"","toggle_txt_color_h":"","f_toggle_txt_font_header":"","f_toggle_txt_font_title":"Text","f_toggle_txt_font_settings":"","f_toggle_txt_font_size":"","f_toggle_txt_font_line_height":"","f_toggle_txt_font_style":"","f_toggle_txt_font_weight":"","f_toggle_txt_font_transform":"","f_toggle_txt_font_spacing":"","f_toggle_txt_":"","form_bg":"","form_shadow_shadow_header":"","form_shadow_shadow_title":"Shadow","form_shadow_shadow_offset_horizontal":"","form_shadow_shadow_offset_vertical":"","form_shadow_shadow_spread":"","input_color":"","placeholder_color":"","placeholder_opacity":"0","input_bg":"","input_border_color":"","input_shadow_shadow_header":"","input_shadow_shadow_title":"Input shadow","input_shadow_shadow_size":"","input_shadow_shadow_offset_horizontal":"","input_shadow_shadow_offset_vertical":"","input_shadow_shadow_spread":"","input_shadow_shadow_color":"","btn_color":"","btn_color_h":"","btn_icon_color":"","btn_icon_color_h":"","btn_bg":"","btn_border_color":"","btn_border_color_h":"","btn_shadow_shadow_header":"","btn_shadow_shadow_title":"Button shadow","btn_shadow_shadow_size":"","btn_shadow_shadow_offset_horizontal":"","btn_shadow_shadow_offset_vertical":"","btn_shadow_shadow_spread":"","btn_shadow_shadow_color":"","f_input_font_header":"","f_input_font_title":"Input text","f_input_font_settings":"","f_input_font_line_height":"","f_input_font_style":"","f_input_font_transform":"","f_input_font_spacing":"","f_input_":"","f_placeholder_font_title":"Placeholder text","f_placeholder_font_settings":"","f_placeholder_font_line_height":"","f_placeholder_font_style":"","f_placeholder_font_transform":"","f_placeholder_font_spacing":"","f_placeholder_":"","f_btn_font_title":"Button text","f_btn_font_settings":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_transform":"","f_btn_font_spacing":"","f_btn_":"","results_bg":"","results_border_color":"","results_msg_color":"","results_msg_bg":"","results_msg_border_color":"","f_results_msg_font_header":"","f_results_msg_font_title":"Text","f_results_msg_font_settings":"","f_results_msg_font_line_height":"","f_results_msg_font_style":"","f_results_msg_font_weight":"","f_results_msg_font_transform":"","f_results_msg_font_spacing":"","f_results_msg_":"","m_bg":"","color_overlay":"","shadow_module_shadow_header":"","shadow_module_shadow_title":"Module Shadow","shadow_module_shadow_size":"","shadow_module_shadow_offset_horizontal":"","shadow_module_shadow_offset_vertical":"","shadow_module_shadow_spread":"","shadow_module_shadow_color":"","title_txt":"","all_underline_height":"","all_underline_color":"#000","cat_bg":"","cat_bg_hover":"","cat_txt":"","cat_txt_hover":"","cat_border":"","cat_border_hover":"","meta_bg":"","author_txt":"","author_txt_hover":"","date_txt":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","shadow_meta_shadow_header":"","shadow_meta_shadow_title":"Meta info shadow","shadow_meta_shadow_size":"","shadow_meta_shadow_offset_horizontal":"","shadow_meta_shadow_offset_vertical":"","shadow_meta_shadow_spread":"","shadow_meta_shadow_color":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border_hover":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_style":"","f_title_font_weight":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_size":"","f_cat_font_line_height":"","f_cat_font_style":"","f_cat_font_weight":"","f_cat_font_transform":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_style":"","f_meta_font_weight":"","f_meta_font_transform":"","f_meta_font_spacing":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","el_class":"","block_template_id":"","td_column_number":1,"header_color":"","ajax_pagination_infinite_stop":"","offset":"","limit":"5","td_ajax_preloading":"","td_ajax_filter_type":"","td_filter_default_txt":"","td_ajax_filter_ids":"","color_preset":"","ajax_pagination":"","border_top":"","css":"","class":"tdi_52","tdc_css_class":"tdi_52","tdc_css_class_style":"tdi_52_rand_style"}';
                tdbSearchItem.jqueryObj = jQuery('.tdi_52');
                tdbSearchItem._openSearchFormClass = 'tdb-drop-down-search-open';
                tdbSearchItem._resultsLimit = '4';

	            
                
                tdbSearch.addItem( tdbSearchItem );

            });
        
        

            
                /* global jQuery:{} */
                jQuery().ready(function () {

                    var tdbMenuItem = new tdbMenu.item();
                    tdbMenuItem.blockUid = 'tdi_59';
                    tdbMenuItem.jqueryObj = jQuery('.tdi_59');

	                
                    tdbMenuItem.isMegaMenuFull = true;

	                
	                
	                
                    tdbMenu.addItem(tdbMenuItem);

                });
            
            

        
            jQuery().ready(function () {

                var tdbSearchItem = new tdbSearch.item();

                //block unique ID
                tdbSearchItem.blockUid = 'tdi_64';
                tdbSearchItem.blockAtts = '{"results_msg_align":"content-horiz-center","image_floated":"float_left","image_width":"30","image_size":"td_324x400","show_cat":"none","show_btn":"none","show_date":"","show_review":"none","show_com":"none","show_excerpt":"none","show_author":"none","meta_padding":"0 0 0 15px","art_title":"0 0 5px","all_modules_space":"15","tdc_css":"eyJhbGwiOnsiZGlzcGxheSI6IiJ9fQ==","form_align":"content-horiz-right","icon_color":"#ffffff","icon_size":"eyJhbGwiOiIxOCIsInBvcnRyYWl0IjoiMTQifQ==","icon_padding":"eyJhbGwiOjIuNiwicG9ydHJhaXQiOiIyLjgifQ==","tdicon":"td-icon-magnifier-medium-short-light","show_form":"yes","form_border_color":"#dd3333","arrow_color":"#dd3333","form_shadow_shadow_size":"10","form_shadow_shadow_color":"rgba(0,0,0,0.12)","f_input_font_family":"file_1","f_input_font_weight":"400","f_btn_font_family":"file_1","f_btn_font_weight":"400","f_input_font_size":"13","f_placeholder_font_family":"file_1","f_placeholder_font_weight":"400","f_placeholder_font_size":"13","f_btn_font_size":"13","f_results_msg_font_family":"file_1","f_results_msg_font_size":"11","f_title_font_family":"file_1","f_title_font_size":"13","f_title_font_line_height":"1.2","f_meta_font_family":"file_1","f_meta_font_size":"11","f_meta_font_line_height":"1","title_txt_hover":"#008d7f","btn_bg_h":"eyJ0eXBlIjoiZ3JhZGllbnQiLCJjb2xvcjEiOiIjMDA4ZDdmIiwiY29sb3IyIjoiIzAwOGQ3ZiIsIm1peGVkQ29sb3JzIjpbXSwiZGVncmVlIjoiLTkwIiwiY3NzIjoiYmFja2dyb3VuZC1jb2xvcjogIzAwOGQ3ZjsiLCJjc3NQYXJhbXMiOiIwZGVnLCMwMDhkN2YsIzAwOGQ3ZiJ9","modules_gap":"0","image_height":"80","meta_info_align":"center","results_msg_color_h":"#008d7f","block_type":"tdb_header_search","disable_live_search":"","separator":"","toggle_txt":"","toggle_txt_pos":"","toggle_txt_align":"0","toggle_txt_space":"","toggle_horiz_align":"content-horiz-left","inline":"","float_block":"","form_offset":"","form_offset_left":"","form_width":"","form_content_width":"","form_padding":"","form_border":"","form_align_screen":"","input_placeholder":"","placeholder_travel":"0","input_padding":"","input_border":"","input_radius":"","btn_text":"Search","btn_tdicon":"","btn_icon_pos":"","btn_icon_size":"","btn_icon_space":"","btn_icon_align":"0","btn_margin":"","btn_padding":"","btn_border":"","btn_radius":"","results_padding":"","results_border":"","results_msg_padding":"","results_msg_border":"","mc1_tl":"","mc1_title_tag":"","mc1_el":"","results_limit":"","modules_on_row":"100%","m_padding":"","modules_border_size":"","modules_border_style":"","modules_border_color":"#eaeaea","modules_divider":"","modules_divider_color":"#eaeaea","h_effect":"","image_alignment":"50","image_radius":"","hide_image":"","video_icon":"","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","vid_t_color":"","vid_t_bg_color":"","f_vid_time_font_header":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_horiz":"content-horiz-left","meta_width":"","meta_margin":"","meta_info_border_size":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","art_btn":"","modules_category":"","modules_category_margin":"","modules_category_padding":"","modules_cat_border":"","modules_category_radius":"0","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","review_space":"","review_size":"2.5","review_distance":"","art_excerpt":"","excerpt_col":"1","excerpt_gap":"","excerpt_middle":"","btn_title":"","btn_border_width":"","form_general_bg":"","icon_color_h":"","toggle_txt_color":"","toggle_txt_color_h":"","f_toggle_txt_font_header":"","f_toggle_txt_font_title":"Text","f_toggle_txt_font_settings":"","f_toggle_txt_font_family":"","f_toggle_txt_font_size":"","f_toggle_txt_font_line_height":"","f_toggle_txt_font_style":"","f_toggle_txt_font_weight":"","f_toggle_txt_font_transform":"","f_toggle_txt_font_spacing":"","f_toggle_txt_":"","form_bg":"","form_shadow_shadow_header":"","form_shadow_shadow_title":"Shadow","form_shadow_shadow_offset_horizontal":"","form_shadow_shadow_offset_vertical":"","form_shadow_shadow_spread":"","input_color":"","placeholder_color":"","placeholder_opacity":"0","input_bg":"","input_border_color":"","input_shadow_shadow_header":"","input_shadow_shadow_title":"Input shadow","input_shadow_shadow_size":"","input_shadow_shadow_offset_horizontal":"","input_shadow_shadow_offset_vertical":"","input_shadow_shadow_spread":"","input_shadow_shadow_color":"","btn_color":"","btn_color_h":"","btn_icon_color":"","btn_icon_color_h":"","btn_bg":"","btn_border_color":"","btn_border_color_h":"","btn_shadow_shadow_header":"","btn_shadow_shadow_title":"Button shadow","btn_shadow_shadow_size":"","btn_shadow_shadow_offset_horizontal":"","btn_shadow_shadow_offset_vertical":"","btn_shadow_shadow_spread":"","btn_shadow_shadow_color":"","f_input_font_header":"","f_input_font_title":"Input text","f_input_font_settings":"","f_input_font_line_height":"","f_input_font_style":"","f_input_font_transform":"","f_input_font_spacing":"","f_input_":"","f_placeholder_font_title":"Placeholder text","f_placeholder_font_settings":"","f_placeholder_font_line_height":"","f_placeholder_font_style":"","f_placeholder_font_transform":"","f_placeholder_font_spacing":"","f_placeholder_":"","f_btn_font_title":"Button text","f_btn_font_settings":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_transform":"","f_btn_font_spacing":"","f_btn_":"","results_bg":"","results_border_color":"","results_msg_color":"","results_msg_bg":"","results_msg_border_color":"","f_results_msg_font_header":"","f_results_msg_font_title":"Text","f_results_msg_font_settings":"","f_results_msg_font_line_height":"","f_results_msg_font_style":"","f_results_msg_font_weight":"","f_results_msg_font_transform":"","f_results_msg_font_spacing":"","f_results_msg_":"","m_bg":"","color_overlay":"","shadow_module_shadow_header":"","shadow_module_shadow_title":"Module Shadow","shadow_module_shadow_size":"","shadow_module_shadow_offset_horizontal":"","shadow_module_shadow_offset_vertical":"","shadow_module_shadow_spread":"","shadow_module_shadow_color":"","title_txt":"","all_underline_height":"","all_underline_color":"#000","cat_bg":"","cat_bg_hover":"","cat_txt":"","cat_txt_hover":"","cat_border":"","cat_border_hover":"","meta_bg":"","author_txt":"","author_txt_hover":"","date_txt":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","shadow_meta_shadow_header":"","shadow_meta_shadow_title":"Meta info shadow","shadow_meta_shadow_size":"","shadow_meta_shadow_offset_horizontal":"","shadow_meta_shadow_offset_vertical":"","shadow_meta_shadow_spread":"","shadow_meta_shadow_color":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border_hover":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_style":"","f_title_font_weight":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_family":"","f_cat_font_size":"","f_cat_font_line_height":"","f_cat_font_style":"","f_cat_font_weight":"","f_cat_font_transform":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_style":"","f_meta_font_weight":"","f_meta_font_transform":"","f_meta_font_spacing":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_family":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","el_class":"","block_template_id":"","td_column_number":1,"header_color":"","ajax_pagination_infinite_stop":"","offset":"","limit":"5","td_ajax_preloading":"","td_ajax_filter_type":"","td_filter_default_txt":"","td_ajax_filter_ids":"","color_preset":"","ajax_pagination":"","border_top":"","css":"","class":"tdi_64","tdc_css_class":"tdi_64","tdc_css_class_style":"tdi_64_rand_style"}';
                tdbSearchItem.jqueryObj = jQuery('.tdi_64');
                tdbSearchItem._openSearchFormClass = 'tdb-drop-down-search-open';
                tdbSearchItem._resultsLimit = '4';

	            
                
                tdbSearch.addItem( tdbSearchItem );

            });
        
        

            
                jQuery(window).on( 'load', function () {
                    var block = jQuery('.tdi_84'),
                        blockClass = '.tdi_84',
                        blockInner = block.find('.tdb-block-inner'),
                        blockOffsetLeft;

                    if( block.find('audio').length > 0 ) {
                        jQuery(blockClass + ' audio').mediaelementplayer();
                    }

                    if( block.hasClass('tdb-sfi-stretch') ) {
                        jQuery(window).resize(function () {
                            blockOffsetLeft = block.offset().left;

                            if( block.hasClass('tdb-sfi-stretch-left') ) {
                                blockInner.css('margin-left', -blockOffsetLeft + 'px');
                            } else {
                                blockInner.css('margin-right', -(jQuery(window).width() - (blockOffsetLeft + block.outerWidth())) + 'px');
                            }
                        });
                        jQuery(window).resize();
                    }

                    setTimeout(function () {
                        block.css('opacity', 1);
                    }, 500);
                });
            
            

                jQuery().ready(function jQuery_ready() {
                    tdAjaxCount.tdGetViewsCountsAjax("post","[189614]");
                });
            
});</script>

<script>window.lazyLoadOptions={elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://telset.id/wp-content/plugins/wp-rocket/assets/js/lazyload/17.5/lazyload.min.js"></script><script>function lazyLoadThumb(e){var t='<img data-lazy-src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"><noscript><img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"></noscript>',a='<button class="play" aria-label="play Youtube video"></button>';return t.replace("ID",e)+a}function lazyLoadYoutubeIframe(){var e=document.createElement("iframe"),t="ID?autoplay=1";t+=0===this.parentNode.dataset.query.length?'':'&'+this.parentNode.dataset.query;e.setAttribute("src",t.replace("ID",this.parentNode.dataset.src)),e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen","1"),e.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"),this.parentNode.parentNode.replaceChild(e,this.parentNode)}document.addEventListener("DOMContentLoaded",function(){var e,t,p,a=document.getElementsByClassName("rll-youtube-player");for(t=0;t<a.length;t++)e=document.createElement("div"),e.setAttribute("data-id",a[t].dataset.id),e.setAttribute("data-query", a[t].dataset.query),e.setAttribute("data-src", a[t].dataset.src),e.innerHTML=lazyLoadThumb(a[t].dataset.id),a[t].appendChild(e),p=e.querySelector('.play'),p.onclick=lazyLoadYoutubeIframe});</script>
<script type="rocketlazyloadscript">"use strict";var wprRemoveCPCSS=function wprRemoveCPCSS(){var elem;document.querySelector('link[data-rocket-async="style"][rel="preload"]')?setTimeout(wprRemoveCPCSS,200):(elem=document.getElementById("rocket-critical-css"))&&"remove"in elem&&elem.remove()};window.addEventListener?window.addEventListener("load",wprRemoveCPCSS):window.attachEvent&&window.attachEvent("onload",wprRemoveCPCSS);</script><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open%20Sans%3A400%2C600%2C700%7CRoboto%3A400%2C500%2C700&#038;display=swap" /><link rel="stylesheet" href="https://telset.id/wp-content/cache/min/1/f631f3bff26e2b3f921598dfa383cea6.css" media="all" data-minify="1" /></noscript></body>
</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->
