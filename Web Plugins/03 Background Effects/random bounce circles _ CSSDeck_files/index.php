
var _qevents=_qevents||[];!function(){var e=document.createElement("script");e.src=("https:"==document.location.protocol?"https://secure":"http://edge")+".quantserve.com/quant.js",e.async=!0,e.type="text/javascript";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(e,i)}(),_qevents.push({qacct:"p-GmmW5asRyT1D0",labels:document.location.hostname.replace(/^www./,"")});var noscript=document.createElement("noscript"),div=document.createElement("div"),img=document.createElement("img");div.style.display="none",img.src="//pixel.quantserve.com/pixel/p-GmmW5asRyT1D0.gif?labels="+document.location.hostname.replace(/^www./,""),img.style.border=0,img.style.height=1,img.style.width=1,img.alt="Quantcast",div.appendChild(img),noscript.appendChild(div),!function(e){"use strict";var i,t=e.Base64,n="2.1.9";if("undefined"!=typeof module&&module.exports)try{i=require("buffer").Buffer}catch(o){}var s="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",r=function(e){for(var i={},t=0,n=e.length;n>t;t++)i[e.charAt(t)]=t;return i}(s),a=String.fromCharCode,d=function(e){if(e.length<2){var i=e.charCodeAt(0);return 128>i?e:2048>i?a(192|i>>>6)+a(128|63&i):a(224|i>>>12&15)+a(128|i>>>6&63)+a(128|63&i)}var i=65536+1024*(e.charCodeAt(0)-55296)+(e.charCodeAt(1)-56320);return a(240|i>>>18&7)+a(128|i>>>12&63)+a(128|i>>>6&63)+a(128|63&i)},l=/[\uD800-\uDBFF][\uDC00-\uDFFFF]|[^\x00-\x7F]/g,c=function(e){return e.replace(l,d)},p=function(e){var i=[0,2,1][e.length%3],t=e.charCodeAt(0)<<16|(e.length>1?e.charCodeAt(1):0)<<8|(e.length>2?e.charCodeAt(2):0),n=[s.charAt(t>>>18),s.charAt(t>>>12&63),2>i?s.charAt(t>>>6&63):"=",1>i?s.charAt(63&t):"="];return n.join("")},u=e.btoa?function(i){return e.btoa(i)}:function(e){return e.replace(/[\s\S]{1,3}/g,p)},h=i?function(e){return(e.constructor===i.constructor?e:new i(e)).toString("base64")}:function(e){return u(c(e))},_=function(e,i){return i?h(e+"").replace(/[+\/]/g,function(e){return"+"==e?"-":"_"}).replace(/=/g,""):h(e+"")},w=function(e){return _(e,!0)},m=RegExp("[À-ß][-¿]|[à-ï][-¿]{2}|[ð-÷][-¿]{3}","g"),g=function(e){switch(e.length){case 4:var i=(7&e.charCodeAt(0))<<18|(63&e.charCodeAt(1))<<12|(63&e.charCodeAt(2))<<6|63&e.charCodeAt(3),t=i-65536;return a((t>>>10)+55296)+a((1023&t)+56320);case 3:return a((15&e.charCodeAt(0))<<12|(63&e.charCodeAt(1))<<6|63&e.charCodeAt(2));default:return a((31&e.charCodeAt(0))<<6|63&e.charCodeAt(1))}},f=function(e){return e.replace(m,g)},v=function(e){var i=e.length,t=i%4,n=(i>0?r[e.charAt(0)]<<18:0)|(i>1?r[e.charAt(1)]<<12:0)|(i>2?r[e.charAt(2)]<<6:0)|(i>3?r[e.charAt(3)]:0),o=[a(n>>>16),a(n>>>8&255),a(255&n)];return o.length-=[0,0,2,1][t],o.join("")},b=e.atob?function(i){return e.atob(i)}:function(e){return e.replace(/[\s\S]{1,4}/g,v)},y=i?function(e){return""+(e.constructor===i.constructor?e:new i(e,"base64"))}:function(e){return f(b(e))},x=function(e){return y((e+"").replace(/[-_]/g,function(e){return"-"==e?"+":"/"}).replace(/[^A-Za-z0-9\+\/]/g,""))},k=function(){var i=e.Base64;return e.Base64=t,i};if(e.Base64={VERSION:n,atob:b,btoa:u,fromBase64:x,toBase64:_,utob:c,encode:_,encodeURI:w,btou:f,decode:x,noConflict:k},"function"==typeof Object.defineProperty){var j=function(e){return{value:e,enumerable:!1,writable:!0,configurable:!0}};e.Base64.extendString=function(){Object.defineProperty(String.prototype,"fromBase64",j(function(){return x(this)})),Object.defineProperty(String.prototype,"toBase64",j(function(e){return _(this,e)})),Object.defineProperty(String.prototype,"toBase64URI",j(function(){return _(this,!0)}))}}e.Meteor&&(Base64=e.Base64)}(this),!function(e,i){"use strict";var t="0.7.10",n="",o="?",s="function",r="undefined",a="object",d="string",l="major",c="model",p="name",u="type",h="vendor",_="version",w="architecture",m="console",g="mobile",f="tablet",v="smarttv",b="wearable",y="embedded",x={extend:function(e,i){var t={};for(var n in e)t[n]=i[n]&&i[n].length%2===0?i[n].concat(e[n]):e[n];return t},has:function(e,i){return"string"==typeof e?-1!==i.toLowerCase().indexOf(e.toLowerCase()):!1},lowerize:function(e){return e.toLowerCase()},major:function(e){return typeof e===d?e.split(".")[0]:i}},k={rgx:function(){for(var e,t,n,o,d,l,c,p=0,u=arguments;p<u.length&&!l;){var h=u[p],_=u[p+1];if(typeof e===r){e={};for(o in _)_.hasOwnProperty(o)&&(d=_[o],typeof d===a?e[d[0]]=i:e[d]=i)}for(t=n=0;t<h.length&&!l;)if(l=h[t++].exec(this.getUA()))for(o=0;o<_.length;o++)c=l[++n],d=_[o],typeof d===a&&d.length>0?2==d.length?e[d[0]]=typeof d[1]==s?d[1].call(this,c):d[1]:3==d.length?e[d[0]]=typeof d[1]!==s||d[1].exec&&d[1].test?c?c.replace(d[1],d[2]):i:c?d[1].call(this,c,d[2]):i:4==d.length&&(e[d[0]]=c?d[3].call(this,c.replace(d[1],d[2])):i):e[d]=c?c:i;p+=2}return e},str:function(e,t){for(var n in t)if(typeof t[n]===a&&t[n].length>0){for(var s=0;s<t[n].length;s++)if(x.has(t[n][s],e))return n===o?i:n}else if(x.has(t[n],e))return n===o?i:n;return e}},j={browser:{oldsafari:{version:{"1.0":"/8",1.2:"/1",1.3:"/3","2.0":"/412","2.0.2":"/416","2.0.3":"/417","2.0.4":"/419","?":"/"}}},device:{amazon:{model:{"Fire Phone":["SD","KF"]}},sprint:{model:{"Evo Shift 4G":"7373KT"},vendor:{HTC:"APA",Sprint:"Sprint"}}},os:{windows:{version:{ME:"4.90","NT 3.11":"NT3.51","NT 4.0":"NT4.0",2e3:"NT 5.0",XP:["NT 5.1","NT 5.2"],Vista:"NT 6.0",7:"NT 6.1",8:"NT 6.2",8.1:"NT 6.3",10:["NT 6.4","NT 10.0"],RT:"ARM"}}}},E={browser:[[/(opera\smini)\/([\w\.-]+)/i,/(opera\s[mobiletab]+).+version\/([\w\.-]+)/i,/(opera).+version\/([\w\.]+)/i,/(opera)[\/\s]+([\w\.]+)/i],[p,_],[/(OPiOS)[\/\s]+([\w\.]+)/i],[[p,"Opera Mini"],_],[/\s(opr)\/([\w\.]+)/i],[[p,"Opera"],_],[/(kindle)\/([\w\.]+)/i,/(lunascape|maxthon|netfront|jasmine|blazer)[\/\s]?([\w\.]+)*/i,/(avant\s|iemobile|slim|baidu)(?:browser)?[\/\s]?([\w\.]*)/i,/(?:ms|\()(ie)\s([\w\.]+)/i,/(rekonq)\/([\w\.]+)*/i,/(chromium|flock|rockmelt|midori|epiphany|silk|skyfire|ovibrowser|bolt|iron|vivaldi|iridium|phantomjs)\/([\w\.-]+)/i],[p,_],[/(trident).+rv[:\s]([\w\.]+).+like\sgecko/i],[[p,"IE"],_],[/(edge)\/((\d+)?[\w\.]+)/i],[p,_],[/(yabrowser)\/([\w\.]+)/i],[[p,"Yandex"],_],[/(comodo_dragon)\/([\w\.]+)/i],[[p,/_/g," "],_],[/(chrome|omniweb|arora|[tizenoka]{5}\s?browser)\/v?([\w\.]+)/i,/(qqbrowser)[\/\s]?([\w\.]+)/i],[p,_],[/(uc\s?browser)[\/\s]?([\w\.]+)/i,/ucweb.+(ucbrowser)[\/\s]?([\w\.]+)/i,/JUC.+(ucweb)[\/\s]?([\w\.]+)/i],[[p,"UCBrowser"],_],[/(dolfin)\/([\w\.]+)/i],[[p,"Dolphin"],_],[/((?:android.+)crmo|crios)\/([\w\.]+)/i],[[p,"Chrome"],_],[/XiaoMi\/MiuiBrowser\/([\w\.]+)/i],[_,[p,"MIUI Browser"]],[/android.+version\/([\w\.]+)\s+(?:mobile\s?safari|safari)/i],[_,[p,"Android Browser"]],[/FBAV\/([\w\.]+);/i],[_,[p,"Facebook"]],[/fxios\/([\w\.-]+)/i],[_,[p,"Firefox"]],[/version\/([\w\.]+).+?mobile\/\w+\s(safari)/i],[_,[p,"Mobile Safari"]],[/version\/([\w\.]+).+?(mobile\s?safari|safari)/i],[_,p],[/webkit.+?(mobile\s?safari|safari)(\/[\w\.]+)/i],[p,[_,k.str,j.browser.oldsafari.version]],[/(konqueror)\/([\w\.]+)/i,/(webkit|khtml)\/([\w\.]+)/i],[p,_],[/(navigator|netscape)\/([\w\.-]+)/i],[[p,"Netscape"],_],[/(swiftfox)/i,/(icedragon|iceweasel|camino|chimera|fennec|maemo\sbrowser|minimo|conkeror)[\/\s]?([\w\.\+]+)/i,/(firefox|seamonkey|k-meleon|icecat|iceape|firebird|phoenix)\/([\w\.-]+)/i,/(mozilla)\/([\w\.]+).+rv\:.+gecko\/\d+/i,/(polaris|lynx|dillo|icab|doris|amaya|w3m|netsurf|sleipnir)[\/\s]?([\w\.]+)/i,/(links)\s\(([\w\.]+)/i,/(gobrowser)\/?([\w\.]+)*/i,/(ice\s?browser)\/v?([\w\._]+)/i,/(mosaic)[\/\s]([\w\.]+)/i],[p,_]],cpu:[[/(?:(amd|x(?:(?:86|64)[_-])?|wow|win)64)[;\)]/i],[[w,"amd64"]],[/(ia32(?=;))/i],[[w,x.lowerize]],[/((?:i[346]|x)86)[;\)]/i],[[w,"ia32"]],[/windows\s(ce|mobile);\sppc;/i],[[w,"arm"]],[/((?:ppc|powerpc)(?:64)?)(?:\smac|;|\))/i],[[w,/ower/,"",x.lowerize]],[/(sun4\w)[;\)]/i],[[w,"sparc"]],[/((?:avr32|ia64(?=;))|68k(?=\))|arm(?:64|(?=v\d+;))|(?=atmel\s)avr|(?:irix|mips|sparc)(?:64)?(?=;)|pa-risc)/i],[[w,x.lowerize]]],device:[[/\((ipad|playbook);[\w\s\);-]+(rim|apple)/i],[c,h,[u,f]],[/applecoremedia\/[\w\.]+ \((ipad)/],[c,[h,"Apple"],[u,f]],[/(apple\s{0,1}tv)/i],[[c,"Apple TV"],[h,"Apple"]],[/(archos)\s(gamepad2?)/i,/(hp).+(touchpad)/i,/(kindle)\/([\w\.]+)/i,/\s(nook)[\w\s]+build\/(\w+)/i,/(dell)\s(strea[kpr\s\d]*[\dko])/i],[h,c,[u,f]],[/(kf[A-z]+)\sbuild\/[\w\.]+.*silk\//i],[c,[h,"Amazon"],[u,f]],[/(sd|kf)[0349hijorstuw]+\sbuild\/[\w\.]+.*silk\//i],[[c,k.str,j.device.amazon.model],[h,"Amazon"],[u,g]],[/\((ip[honed|\s\w*]+);.+(apple)/i],[c,h,[u,g]],[/\((ip[honed|\s\w*]+);/i],[c,[h,"Apple"],[u,g]],[/(blackberry)[\s-]?(\w+)/i,/(blackberry|benq|palm(?=\-)|sonyericsson|acer|asus|dell|huawei|meizu|motorola|polytron)[\s_-]?([\w-]+)*/i,/(hp)\s([\w\s]+\w)/i,/(asus)-?(\w+)/i],[h,c,[u,g]],[/\(bb10;\s(\w+)/i],[c,[h,"BlackBerry"],[u,g]],[/android.+(transfo[prime\s]{4,10}\s\w+|eeepc|slider\s\w+|nexus 7)/i],[c,[h,"Asus"],[u,f]],[/(sony)\s(tablet\s[ps])\sbuild\//i,/(sony)?(?:sgp.+)\sbuild\//i],[[h,"Sony"],[c,"Xperia Tablet"],[u,f]],[/(?:sony)?(?:(?:(?:c|d)\d{4})|(?:so[-l].+))\sbuild\//i],[[h,"Sony"],[c,"Xperia Phone"],[u,g]],[/\s(ouya)\s/i,/(nintendo)\s([wids3u]+)/i],[h,c,[u,m]],[/android.+;\s(shield)\sbuild/i],[c,[h,"Nvidia"],[u,m]],[/(playstation\s[34portablevi]+)/i],[c,[h,"Sony"],[u,m]],[/(sprint\s(\w+))/i],[[h,k.str,j.device.sprint.vendor],[c,k.str,j.device.sprint.model],[u,g]],[/(lenovo)\s?(S(?:5000|6000)+(?:[-][\w+]))/i],[h,c,[u,f]],[/(htc)[;_\s-]+([\w\s]+(?=\))|\w+)*/i,/(zte)-(\w+)*/i,/(alcatel|geeksphone|huawei|lenovo|nexian|panasonic|(?=;\s)sony)[_\s-]?([\w-]+)*/i],[h,[c,/_/g," "],[u,g]],[/(nexus\s9)/i],[c,[h,"HTC"],[u,f]],[/[\s\(;](xbox(?:\sone)?)[\s\);]/i],[c,[h,"Microsoft"],[u,m]],[/(kin\.[onetw]{3})/i],[[c,/\./g," "],[h,"Microsoft"],[u,g]],[/\s(milestone|droid(?:[2-4x]|\s(?:bionic|x2|pro|razr))?(:?\s4g)?)[\w\s]+build\//i,/mot[\s-]?(\w+)*/i,/(XT\d{3,4}) build\//i,/(nexus\s[6])/i],[c,[h,"Motorola"],[u,g]],[/android.+\s(mz60\d|xoom[\s2]{0,2})\sbuild\//i],[c,[h,"Motorola"],[u,f]],[/android.+((sch-i[89]0\d|shw-m380s|gt-p\d{4}|gt-n8000|sgh-t8[56]9|nexus 10))/i,/((SM-T\w+))/i],[[h,"Samsung"],c,[u,f]],[/((s[cgp]h-\w+|gt-\w+|galaxy\snexus|sm-n900))/i,/(sam[sung]*)[\s-]*(\w+-?[\w-]*)*/i,/sec-((sgh\w+))/i],[[h,"Samsung"],c,[u,g]],[/(samsung);smarttv/i],[h,c,[u,v]],[/\(dtv[\);].+(aquos)/i],[c,[h,"Sharp"],[u,v]],[/sie-(\w+)*/i],[c,[h,"Siemens"],[u,g]],[/(maemo|nokia).*(n900|lumia\s\d+)/i,/(nokia)[\s_-]?([\w-]+)*/i],[[h,"Nokia"],c,[u,g]],[/android\s3\.[\s\w;-]{10}(a\d{3})/i],[c,[h,"Acer"],[u,f]],[/android\s3\.[\s\w;-]{10}(lg?)-([06cv9]{3,4})/i],[[h,"LG"],c,[u,f]],[/(lg) netcast\.tv/i],[h,c,[u,v]],[/(nexus\s[45])/i,/lg[e;\s\/-]+(\w+)*/i],[c,[h,"LG"],[u,g]],[/android.+(ideatab[a-z0-9\-\s]+)/i],[c,[h,"Lenovo"],[u,f]],[/linux;.+((jolla));/i],[h,c,[u,g]],[/((pebble))app\/[\d\.]+\s/i],[h,c,[u,b]],[/android.+;\s(glass)\s\d/i],[c,[h,"Google"],[u,b]],[/android.+(\w+)\s+build\/hm\1/i,/android.+(hm[\s\-_]*note?[\s_]*(?:\d\w)?)\s+build/i,/android.+(mi[\s\-_]*(?:one|one[\s_]plus)?[\s_]*(?:\d\w)?)\s+build/i],[[c,/_/g," "],[h,"Xiaomi"],[u,g]],[/\s(tablet)[;\/\s]/i,/\s(mobile)[;\/\s]/i],[[u,x.lowerize],h,c]],engine:[[/windows.+\sedge\/([\w\.]+)/i],[_,[p,"EdgeHTML"]],[/(presto)\/([\w\.]+)/i,/(webkit|trident|netfront|netsurf|amaya|lynx|w3m)\/([\w\.]+)/i,/(khtml|tasman|links)[\/\s]\(?([\w\.]+)/i,/(icab)[\/\s]([23]\.[\d\.]+)/i],[p,_],[/rv\:([\w\.]+).*(gecko)/i],[_,p]],os:[[/microsoft\s(windows)\s(vista|xp)/i],[p,_],[/(windows)\snt\s6\.2;\s(arm)/i,/(windows\sphone(?:\sos)*|windows\smobile|windows)[\s\/]?([ntce\d\.\s]+\w)/i],[p,[_,k.str,j.os.windows.version]],[/(win(?=3|9|n)|win\s9x\s)([nt\d\.]+)/i],[[p,"Windows"],[_,k.str,j.os.windows.version]],[/\((bb)(10);/i],[[p,"BlackBerry"],_],[/(blackberry)\w*\/?([\w\.]+)*/i,/(tizen)[\/\s]([\w\.]+)/i,/(android|webos|palm\sos|qnx|bada|rim\stablet\sos|meego|contiki)[\/\s-]?([\w\.]+)*/i,/linux;.+(sailfish);/i],[p,_],[/(symbian\s?os|symbos|s60(?=;))[\/\s-]?([\w\.]+)*/i],[[p,"Symbian"],_],[/\((series40);/i],[p],[/mozilla.+\(mobile;.+gecko.+firefox/i],[[p,"Firefox OS"],_],[/(nintendo|playstation)\s([wids34portablevu]+)/i,/(mint)[\/\s\(]?(\w+)*/i,/(mageia|vectorlinux)[;\s]/i,/(joli|[kxln]?ubuntu|debian|[open]*suse|gentoo|(?=\s)arch|slackware|fedora|mandriva|centos|pclinuxos|redhat|zenwalk|linpus)[\/\s-]?([\w\.-]+)*/i,/(hurd|linux)\s?([\w\.]+)*/i,/(gnu)\s?([\w\.]+)*/i],[p,_],[/(cros)\s[\w]+\s([\w\.]+\w)/i],[[p,"Chromium OS"],_],[/(sunos)\s?([\w\.]+\d)*/i],[[p,"Solaris"],_],[/\s([frentopc-]{0,4}bsd|dragonfly)\s?([\w\.]+)*/i],[p,_],[/(ip[honead]+)(?:.*os\s([\w]+)*\slike\smac|;\sopera)/i],[[p,"iOS"],[_,/_/g,"."]],[/(mac\sos\sx)\s?([\w\s\.]+\w)*/i,/(macintosh|mac(?=_powerpc)\s)/i],[[p,"Mac OS"],[_,/_/g,"."]],[/((?:open)?solaris)[\/\s-]?([\w\.]+)*/i,/(haiku)\s(\w+)/i,/(aix)\s((\d)(?=\.|\)|\s)[\w\.]*)*/i,/(plan\s9|minix|beos|os\/2|amigaos|morphos|risc\sos|openvms)/i,/(unix)\s?([\w\.]+)*/i],[p,_]]},C=function(i,t){if(!(this instanceof C))return new C(i,t).getResult();var o=i||(e&&e.navigator&&e.navigator.userAgent?e.navigator.userAgent:n),s=t?x.extend(E,t):E;return this.getBrowser=function(){var e=k.rgx.apply(this,s.browser);return e.major=x.major(e.version),e},this.getCPU=function(){return k.rgx.apply(this,s.cpu)},this.getDevice=function(){return k.rgx.apply(this,s.device)},this.getEngine=function(){return k.rgx.apply(this,s.engine)},this.getOS=function(){return k.rgx.apply(this,s.os)},this.getResult=function(){return{ua:this.getUA(),browser:this.getBrowser(),engine:this.getEngine(),os:this.getOS(),device:this.getDevice(),cpu:this.getCPU()}},this.getUA=function(){return o},this.setUA=function(e){return o=e,this},this};C.VERSION=t,C.BROWSER={NAME:p,MAJOR:l,VERSION:_},C.CPU={ARCHITECTURE:w},C.DEVICE={MODEL:c,VENDOR:h,TYPE:u,CONSOLE:m,MOBILE:g,SMARTTV:v,TABLET:f,WEARABLE:b,EMBEDDED:y},C.ENGINE={NAME:p,VERSION:_},C.OS={NAME:p,VERSION:_},typeof exports!==r?(typeof module!==r&&module.exports&&(exports=module.exports=C),exports.UAParser=C):typeof define===s&&define.amd?define("ua-parser-js",[],function(){return C}):e.UAParser=C;var M=e.jQuery||e.Zepto;if(typeof M!==r){var B=new C;M.ua=B.getResult(),M.ua.get=function(){return B.getUA()},M.ua.set=function(e){B.setUA(e);var i=B.getResult();for(var t in i)M.ua[t]=i[t]}}}("object"==typeof window?window:this),function(e,i,t,n,o,s){function r(e,i){var t="_"+ +new Date,n=document.createElement("script"),o=document.getElementsByTagName("head")[0]||document.documentElement;window[t]=function(e){o.removeChild(n),i(e)},e.indexOf("?")>-1?e=e.replace("?","?callback="+t+"&"):e+="?callback="+t,n.src=e,o.appendChild(n)}function a(e,i,t,n){var o=document.createElement("script");o.src=e,o.async=!0,o.onreadystatechange=o.onload=function(){var e=o.readyState;!n||n.done||e&&!/loaded|complete/.test(e)||(n.done=!0,n())},function s(){try{t.getElementsByTagName("body")[0].appendChild(o)}catch(e){setTimeout(s,100)}}()}function d(n){return n.indexOf("cb="+t)>-1&&n.indexOf("sub_user_id="+e)>-1&&n.indexOf("widget_id="+i)>-1?!0:!1}function l(){var e={domain:"",pageUrl:""},i=c(document.location.href),t=i.href.indexOf("googlesyndication")>-1,n=[];i.search?n=i.search.replace(/^\?/,"").split("&"):i.hash&&(n=i.hash.replace(/^#/,"").split("&"));for(var o=0;o<n.length;o++){var s=n[o].split("=");if("referrer"==s[0]||t&&"p"==s[0]){e.pageUrl=decodeURIComponent(s[1]),e.domain=decodeURIComponent(s[1]),e.domain=e.domain.replace(/^https:\/\//,"").replace(/^http:\/\//,"").replace(/^www./,"").replace(/\.$/,""),e.domain=e.domain.indexOf("/")>-1?e.domain.substring(0,e.domain.indexOf("/")):e.domain;break}}if((0==e.domain.length||0==e.pageUrl.length)&&(e.pageUrl=document.location.href.indexOf(document.location.protocol)<0?document.location.protocol+"//"+document.location.href:document.location.href,e.domain=document.location.hostname.replace(/^www./,"").replace(/\.$/,"")),0==e.domain.length||0==e.pageUrl.length||e.domain.indexOf("googlesyndication")>-1)for(var r=document.scripts,o=0;o<r.length;o++)if(d(r[o].src)){var a=c(r[o].src),n=[];a.search&&(n=a.search.replace(/^\?/,"").split("&"));for(var l=0;l<n.length;l++){var s=n[l].split("=");if("domain"==s[0]||"p"==s[0]){e.pageUrl=decodeURIComponent(s[1]),e.domain=decodeURIComponent(s[1]);break}}break}return e}function c(e){var i=document.createElement("a");return i.href=e,i}function p(){var e=!1;return window.localStorage&&window.localStorage.cache_miss?(delete window.localStorage.cache_miss,e=!0):window.sessionStorage&&window.sessionStorage.cache_miss&&(delete window.sessionStorage.cache_miss,e=!0),e}function u(){return navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone/i)}function h(e){var i=u(),t=i?e.device.type.toLowerCase():"",n=i?e.os.name.toLowerCase():"";return{mobile_device:i?t.indexOf("mobile")>-1?"mobile":t.indexOf("tablet")>-1?"tablet":"":!1,mobile_os:i?n.indexOf("ios")>-1?"ios":n.indexOf("android")>-1?"android":n.indexOf("windows")>-1?"windows":"":!1,mobile_os_version:i?e.os.version.toLowerCase():!1,os:e.os.name&&e.os.version?(e.os.name+" "+e.os.version).toLowerCase():"",browser:e.browser.name&&e.browser.major?(e.browser.name+" "+e.browser.major).toLowerCase():""}}function _(){var r=n+"/service.php?",a=[],d=h((new UAParser).getResult()),l={sub_user_id:e,widget_id:i,domain:m.domain,env_os:encodeURIComponent(d.os),env_browser:encodeURIComponent(d.browser),adblock:g?"true":"false",cb:t};p()&&(l.cache_miss="true"),o.playlist_id.length>0?l.playlist_id=o.playlist_id:o.video_id.length>0&&(l.video_id=o.video_id),u()&&(l.mobile="true",l.device=d.mobile_device,l.os=d.mobile_os,l.osVer=d.mobile_os_version),s&&(l.preview="true");for(var c in l)a.push(c+"="+l[c]);return r+a.join("&")}function w(e){var i=document.createElement("div");i.innerHTML="&nbsp;",i.className="truvid adsbox",document.body.appendChild(i),setTimeout(function(){0==i.offsetHeight&&(g=!0),i.parentNode.removeChild(i),e()},100)}var m=l(),g=!1;w(function(){r(_(),function(e){function i(e,i){var t=e.split("/").filter(function(e){return e.length>0}),n=t.splice(t.indexOf("scripts")+1);return"/"+t.join("/")+"/v"+i+"/"+n.join("/")}function t(i){return i.indexOf("cb="+e.query_string.cb)>-1&&i.indexOf("sub_user_id="+e.query_string.sub_user_id)>-1&&i.indexOf("widget_id="+e.query_string.widget_id)>-1?!0:!1}function n(){var i=document.createElement("div"),n=document.createElement("div"),o=document.scripts;if(n.id="br_video_player_"+e.ad_id,i.appendChild(n),"floater"==e.widget_json.widget_type)document.getElementsByTagName("body")[0].appendChild(i);else for(var s=0;s<o.length;s++)if(t(o[s].src)){o[s].parentElement!=document.getElementsByTagName("head")[0]?o[s].parentElement.insertBefore(i,o[s].nextSibling):document.getElementsByTagName("body")[0].appendChild(i);break}}function o(){var i=document.getElementById((e.is_iframe?"br_player_iframe_":"br_video_player_")+e.ad_id),t=document.getElementById("br_video_player_"+e.ad_id);this.nanobar=new Nanobar({bg:"#000000",target:e.is_iframe?t:t.parentNode,id:"br_video_player_"+e.ad_id+"_nanobar"}),nanobar.el.style.width=i.style.width,i.nanobarProgress=0,nanobar.go(0),i.nanobarHandler=function(){i.nanobarProgress++,nanobar.go(i.nanobarProgress)}.bind(this),i.nanobarInterval=setInterval(i.nanobarHandler,50,!1)}function s(){var i=document.getElementById((e.is_iframe?"br_player_iframe_":"br_video_player_")+e.ad_id);i.nanobarInterval=clearInterval(i.nanobarInterval);var t=document.getElementById("br_video_player_"+e.ad_id+"_nanobar");t&&t.parentNode.removeChild(t)}function r(e,i,t,n,o){!o&&n&&(e.parentNode.style.maxWidth=t+"px",e.parentNode.style.width="100%",e.parentNode.style.height=i+"px"),e.style.height=(n?parseInt(i*(e.getBoundingClientRect().width/t)):i)+"px",!o&&n&&(e.parentNode.style.height="0px")}function d(e,i,t,n){if(t){n||(e.parentNode.style.maxWidth=i.width+"px",e.parentNode.style.width="100%");var o=e.getBoundingClientRect();i.width=o.width,i.height=o.height,n||(e.parentNode.style.maxWidth="0px")}}function l(e){for(var i=new Date,t=new Date(i.getFullYear()+"-"+("0"+(i.getMonth()+1)).slice(-2)+"-"+("0"+i.getDate()).slice(-2)+" 16:59:59:999 EST"),n=document.cookie.split(";"),o=!1,s=0;s<n.length;s++){var r=n[s].trim();if(r.startsWith("truvid_wakeup")){var a=r.split("="),d=parseInt(a[1]);if(d>=e)return!1;document.cookie=a[0]+"="+ ++d+"; expires="+t+"; path=/",o=!0;break}}return o||(document.cookie="truvid_wakeup"+99999999*Math.random()+"=1; expires="+t+"; path=/"),!0}function c(i){var t=document.createElement("div");t.id="br_video_player_"+e.ad_id+"_widgetContainer",t.style.width=i?e.widget_json.width+"px":"0px",t.style.height=i?e.widget_json.height+"px":"0px";var n=document.getElementById("br_video_player_"+e.ad_id);n.parentNode.insertBefore(t,n),n.parentNode.removeChild(n),t.appendChild(n)}function p(e,i,t){if(!e)return!0;for(var n=document.cookie.split(";"),o=0;o<n.length;o++){var s=n[o].trim();if(s.startsWith("truvid_widget_fq_"+(window.br_util.isMobile()?"mobile":"desktop")+"_sid"+i+"_wid"+t)){var r=s.split("="),a=parseInt(r[1]);return e>a}}return!0}function u(){if(!y){var i=document.getElementById("br_video_player_"+e.ad_id);if(i)for(;i.childNodes.length>0;)i.removeChild(i.childNodes[0]);else n(),i=document.getElementById("br_video_player_"+e.ad_id);i.parentNode.style.width=e.widget_json.width+"px",i.parentNode.style.height=e.widget_json.height+"px",w()}}function h(){a(e.js_cdn_url+e.js_paths.util_path+"?ver="+e.version,!0,document,function(){function i(){return e.is_iframe?function(){a(e.js_cdn_url+e.js_paths.regular_loader_path+"?ver="+e.version,!0,document,function(){if(k.appendChild(x),r(x,_.height,_.width,t.isMobile()&&_.is_responsive),d(x,_,t.isMobile()&&_.is_responsive),t.isMobile()&&_.is_responsive&&(k.parentNode.style.height=_.height+"px",k.parentNode.style.width=_.width+"px",k.parentNode.style.maxWidth=null,k.style.height=_.height+"px",k.style.width=_.width+"px",k.style.maxWidth=null),t.isMobile()&&_.lkqd_tag){var e=k.getBoundingClientRect();_.actualSize={width:e.width,height:e.height}}var i=new RegularLoader(_);i.ListenToMessagesFromIframe()})}:function(){t.loadJSFile(e.js_cdn_url+e.js_paths.regular_widget_path+"?ver="+e.version,!0,document,function(){r(k,_.height,_.width,t.isMobile()&&_.is_responsive),d(k,_,t.isMobile()&&_.is_responsive),t.isMobile()&&_.is_responsive&&(k.parentNode.style.height=_.height+"px",k.parentNode.style.width=_.width+"px",k.parentNode.style.maxWidth=null);var i=new RegularWidget(_);i.renderWidget(),"expandable"==_.widget_type&&(e.regular_widget=i)})}}window.addEventListener("message",function(i){var t=window.br_util.receiveMessage(i.data);if(t&&t.ad_id==e.ad_id&&!t.source)switch(t.message){case"IframeLoad":var n=document.getElementById("br_player_iframe_"+e.ad_id);n.contentWindow.postMessage("truvid:"+JSON.stringify({widget:Base64.encode(JSON.stringify(e))}),"*");break;case"ExpandedIframeLoad":var o=document.getElementById("br_player_iframe_"+e.ad_id+"_expanded");o.contentWindow.postMessage("truvid:"+JSON.stringify({widget:Base64.encode(JSON.stringify(e))}),"*");break;case"FullscreenToggle":t.value&&this.onMouseLeave&&this.onMouseLeave();break;case"JW":var n=document.getElementById("br_player_iframe_"+e.ad_id);n.parentNode.removeChild(n);break;case"CacheMiss":window.localStorage?window.localStorage.cache_miss=!0:window.sessionStorage&&(window.sessionStorage.cache_miss=!0),window.location.reload();break;case"Logger":var s=document.createEvent("Event");s.initEvent("onPlayerMessage",!0,!0);var r=document.getElementById("playerMessages");r.innerText=t.value,r.dispatchEvent(s)}}.bind(this),!1),e.debug_mode&&console.log(e.ad_id);var t=window.br_util,_=e.widget_json;if(t.isMobile()&&_.is_mobile_active===!1)throw"";if(!p(e.widget_fq,_.user_id,_.widget_id))throw"";for(var w=document.getElementsByTagName("head")[0],f=0;f<w.children.length;f++)if("style"==w.children[f].tagName.toLowerCase()){var v=w.children[f].innerHTML.replace(/\s+/,"");(v.indexOf("div,iframe")>-1||v.indexOf("iframe,div")>-1)&&w.removeChild(w.children[f])}for(var y in e.js_paths)"util_path"!=y&&(e.js_paths[y]=t.setScriptsVersion(e.js_paths[y],e.version));_.pageUrl=m.pageUrl,_.domain=m.domain,_.is_iframe=e.is_iframe;var x,k;if(e.is_iframe){if(!document.getElementById("playerMessages")){var j=document.createElement("div");j.id="playerMessages",j.style.height="0px",j.style.width="0px",j.style.display="none",document.getElementsByTagName("body")[0].appendChild(j)}x=document.createElement("iframe"),k=document.getElementById("br_video_player_"+e.ad_id),t.isMobile()&&_.is_responsive?(x.style.width="100%",x.style.maxWidth=_.width+"px"):x.style.width=_.width+"px",x.style.border="0",x.scrolling="no",x.id="br_player_iframe_"+e.ad_id,x.src=e.js_cdn_url+e.js_paths.iframe_path+"?ad_id="+e.ad_id,x.allowFullscreen=!0,_.br_id="br_iframe_video_player"+e.ad_id,_.parentContainer="br_video_player_"+e.ad_id}else _.br_id="br_video_player_"+e.ad_id,k=document.getElementById("br_video_player_"+e.ad_id),t.isMobile()&&_.is_responsive?(k.style.width="100%",k.style.maxWidth=_.width+"px"):k.style.width=_.width+"px";_.ad_id=e.ad_id,_.org_url=e.protocol+"//"+e.host,_.cdn=e.cdn,_.blankVideo=e.blank_video_url,_.jwplayerPath=e.js_cdn_url+e.js_paths.jwplayer_path,_.pixelPath=e.protocol+"//"+e.pixels_host+e.server_paths.pixel_path,_.errorPixelPath=e.protocol+"//"+e.pixels_host+e.server_paths.error_pixel_path,_.vastPath=_.org_url+e.server_paths.vast_path,_.brplayerPath=e.js_cdn_url+e.js_paths.brplayer_path,_.vpaidswfPath=e.js_cdn_url+e.js_paths.vpaid_swf_path,_.debugMode=e.debug_mode,_.ads=e.tags||[],_.protocol=e.protocol,_.js_cdn_url=e.js_cdn_url,_.callbacks=e.callbacks,_.playlist_id=e.playlist_id,_.video_id=e.video_id,_.preview=e.preview,_.google_ima_sdk_url=e.google_ima_sdk_url&&!g?document.location.protocol+"//"+e.google_ima_sdk_url:!1,_.spot_sdk_url=e.spot_sdk_url&&!g?document.location.protocol+"//"+e.spot_sdk_url:!1,_.skin_path=void 0===e.widget_json.skin||"default"==e.widget_json.skin?!1:e.js_cdn_url+e.js_paths.skin_path+"/"+e.widget_json.skin+"/"+e.widget_json.skin+".min",_.ip=e.ip,_.user_agent=e.user_agent,_.truvidBackgroundPath=e.network_widget_background_path,_.widgetFq=e.widget_fq,_.pixels=e.pixels,t.isMobile()&&(_.ads_end_point=e.mobile_paths.ads_end_point,_.parserPath=e.mobile_paths.parser_path,_.networkWidgetBackgroundPath=e.mobile_paths.network_widget_background_path,_.mobileMacros=e.mobile_macros,_.mobileBlankVideoId=e.mobile_blank_video_id,_.hasContent=e.has_content,_.maxAdOpportunities=e.max_ad_opportunities,_.maxAdStarts=e.max_ad_starts,_.lkqd_tag=e.lkqd_tag,_.mobile_environment=e.mobile_environment);var E=!1;switch(_.widget_type){case"in_stream":E=i();break;case"in_read":if(e.widget_json.inread_max_ads=e.widget_json.inread_max_ads||t.defaults.max_inread_ads,"ideal"==e.widget_json.inread_embed_position){var C=k.parentNode,M=!1;if(M=0!=t.tryGetGoogleIframe(),!M){"iframe"!=C.tagName.toLowerCase()&&C.parentNode.removeChild(C);var B=t.getIdealPlacement(parseInt(e.widget_json.inread_min_chars));if(!B)throw"";B.parentNode.insertBefore(C,B.nextSibling),C.style.margin="15px"}}E=e.is_iframe?function(){k.appendChild(x),x.style.setProperty("height","0px"),r(x,_.height,_.width,t.isMobile()&&_.is_responsive),d(x,_,t.isMobile()&&_.is_responsive),a(e.js_cdn_url+e.js_paths.inread_loader_path+"?ver="+e.version,!0,document,function(){var i=new InReadLoader(_),t=function(){--e.widget_json.inread_max_ads>0&&(n(),h())};i.SetOnDestroyCallback(t),i.ListenToMessagesFromIframe()})}:function(){c(),t.loadJSFile(e.js_cdn_url+e.js_paths.inread_widget_path+"?ver="+e.version,!0,document,function(){r(k,_.height,_.width,t.isMobile()&&_.is_responsive),d(k,_,t.isMobile()&&_.is_responsive);var i=new InReadWidget(_),o=function(){--e.widget_json.inread_max_ads>0&&(n(),h())};i.renderWidget(),i.SetOnDestroyCallback(o),i.SetOnPassbackCallback(u),i.ListenToMessagesFromParent()})};break;case"floater":E=e.is_iframe?function(){k.appendChild(x),k.style.setProperty("height","0px"),x.style.height=_.height+"px",r(x,_.height,_.width,t.isMobile()&&_.is_responsive),d(x,_,t.isMobile()&&_.is_responsive),a(e.js_cdn_url+e.js_paths.floater_loader_path+"?ver="+e.version,!0,document,function(){var e=new FloaterLoader(_);e.ListenToMessagesFromIframe()})}:function(){c(),a(e.js_cdn_url+e.js_paths.floater_widget_path+"?ver="+e.version,!0,document,function(){r(k,_.height,_.width,t.isMobile()&&_.is_responsive),d(k,_,t.isMobile()&&_.is_responsive);var e=new FloaterWidget(_);e.renderWidget(),e.SetOnPassbackCallback(u),e.ListenToMessagesFromParent()})};break;case"lightbox":E=e.is_iframe?function(){k.appendChild(x),x.style.setProperty("height","0px"),x.style.setProperty("width","0px"),r(x,_.height,_.width,t.isMobile()&&_.is_responsive),d(x,_,t.isMobile()&&_.is_responsive),a(e.js_cdn_url+e.js_paths.lightbox_loader_path+"?ver="+e.version,!0,document,function(){var e=new LightboxLoader(_);e.ListenToMessagesFromIframe()})}:function(){c(),a(e.js_cdn_url+e.js_paths.lightbox_widget_path+"?ver="+e.version,!0,document,function(){r(k,_.height,_.width,t.isMobile()&&_.is_responsive),d(k,_,t.isMobile()&&_.is_responsive);var e=new LightboxWidget(_);e.renderWidget(),e.ListenToMessagesFromParent()})};break;case"wakeup_lightbox":E=function(){if(e.is_iframe?(x.style.setProperty("height","0px"),x.style.setProperty("width","0px"),r(x,_.height,_.width,t.isMobile()&&_.is_responsive),d(x,_,t.isMobile()&&_.is_responsive)):(r(k,_.height,_.width,t.isMobile()&&_.is_responsive),d(k,_,t.isMobile()&&_.is_responsive)),l(e.widget_json.wakeup_lightbox_daily_fq)){var i=["mousemove","mousedown","mouseup","mouseover","mouseout","keydown","keypress","keyup"],o=function(){window.removeEventListener("blur",a),window.removeEventListener("focus",c),i.forEach(function(e){window.removeEventListener(e,s)});var o=function(){e.widget_json.wakeup_lightbox_fq-->0&&(n(),h())},r=e.is_iframe?function(){x.style.setProperty("height",e.widget_json.height+"px"),x.style.setProperty("width",e.widget_json.width+"px");var i=new WakeupLightboxLoader(_);i.SetOnDestroyCallback(o),k.appendChild(x),i.ShowIframe(),i.ListenToMessagesFromIframe()}:function(){var e=new WakeupLightboxWidget(_);e.SetOnDestroyCallback(o),e.ShowVideoPlayer(),e.renderWidget()};t.loadJSFile(e.js_cdn_url+(e.is_iframe?e.js_paths.wakeup_lightbox_loader_path:e.js_paths.wakeup_lightbox_widget_path)+"?ver="+e.version,!0,document,function(){r()})},s=function(){p=clearTimeout(p),p=setTimeout(o,e.widget_json.wakeup_lightbox_time)},a=function(){p=clearTimeout(p),window.removeEventListener("blur",a),window.addEventListener("focus",c)},c=function(){p=setTimeout(o,e.widget_json.wakeup_lightbox_time),window.addEventListener("blur",a),window.removeEventListener("focus",c)},p=setTimeout(o,e.widget_json.wakeup_lightbox_time);i.forEach(function(e){window.addEventListener(e,s)})}};break;case"interstitial":E=e.is_iframe?function(){k.appendChild(x),x.style.setProperty("height","0px"),r(x,_.height,_.width,t.isMobile()&&_.is_responsive),d(x,_,t.isMobile()&&_.is_responsive),a(e.js_cdn_url+e.js_paths.interstitial_loader_path+"?ver="+e.version,!0,document,function(){var e=new InterstitialLoader(_);e.ListenToMessagesFromIframe()})}:function(){c(),a(e.js_cdn_url+e.js_paths.interstitial_widget_path+"?ver="+e.version,!0,document,function(){r(k,_.height,_.width,t.isMobile()&&_.is_responsive),d(k,_,t.isMobile()&&_.is_responsive);var e=new InterstitialWidget(_);e.renderWidget(),e.ListenToMessagesFromParent()})};break;case"expandable":E=function(){e.is_iframe||c(!0),this.onMouseEnter=function(){this.mouseEnterTimeout=setTimeout(b?function(){}:function(){this.nanobar.go(100),e.is_iframe&&n.removeEventListener("mouseleave",this.onMouseLeave),s();var i=JSON.parse(JSON.stringify(_));i.is_iframe=!1;for(var o=document.getElementById("br_video_player_"+e.ad_id),r=o.cloneNode(!0),d=0;r.children.length>d;d++)r.removeChild(r.children[d]);r.id+="_expanded",r.style.top="0px",r.style.left="0px",r.style.position="fixed",r.style.height="100%",r.style.width="100%",r.style.backgroundColor="rgba(255, 255, 255, 0.5)",r.style.zIndex=2147483647,o.parentNode.insertBefore(r,o);var l=document.createElement("div");if(void 0===_.expandable_player_method||"fixed"==_.expandable_player_method)l.style.width=(_.expandable_player_width||800)+"px",l.style.height=(_.expandable_player_height||450)+"px";
else{var c=(_.expandable_player_ratio||200)/100;l.style.width=_.width*c+"px",l.style.height=_.height*c+"px"}l.id="br_player_iframe_"+e.ad_id+"_expanded",r.appendChild(l),t.loadJSFile(e.js_cdn_url+e.js_paths.widget_path+"?ver="+e.version,!0,document,function(){a(e.js_cdn_url+e.js_paths.expandable_widget_path+"?ver="+e.version,!0,document,function(){var t=new ExpandableWidget(i);t.SetPausePlayerCallback(function(){this.regular_widget?this.regular_widget.PausePlayer():window.br_util.sendMessage(x.contentWindow,this.ad_id,"RegularLoader","pausePlayer")}.bind(e)),t.SetResumePlayerCallback(function(){this.regular_widget?this.regular_widget.ResumePlayer():window.br_util.sendMessage(x.contentWindow,this.ad_id,"RegularLoader","resumePlayer")}.bind(e)),t.SetExpandableWidget(),t.renderWidget(),t.ListenToMessagesFromParent()})})}.bind(this),5e3),window.brProgressBar?o():a(e.js_cdn_url+e.js_paths.progress_bar_path+"?ver="+e.version,!0,document,function(){window.brProgressBar=!0,o()})}.bind(this),this.onMouseLeave=b?function(){}:function(){this.mouseEnterTimeout=clearTimeout(this.mouseEnterTimeout),s()}.bind(this);var n=e.is_iframe?x:document.getElementById("br_video_player_"+e.ad_id);n.addEventListener("mouseenter",this.onMouseEnter,!1),n.addEventListener("mouseleave",this.onMouseLeave,!1),i()()};break;default:console.log("unknown widget type")}E&&(e.is_iframe?E():t.loadJSFile(e.js_cdn_url+e.js_paths.widget_path+"?ver="+e.version,!0,document,function(){t.loadJSFile(_.google_ima_sdk_url,!0,document,function(){if(_.spot_sdk_url!==!1){for(var e=0;e<_.ads.length;e++)if("spotsdk"==_.ads[e].demand_type){_.spot_sdk_url=_.spot_sdk_url.indexOf("177158")>-1?_.spot_sdk_url.replace("177158",_.ads[e].channel_id||"85394"):_.spot_sdk_url+(_.ads[e].channel_id||"85394")+".js";break}_.spot_sdk_url&&_.spot_sdk_url.match(/js.spotx.tv\/directsdk\/v1\/$/)&&(_.spot_sdk_url=!1)}t.loadJSFile(_.spot_sdk_url,!0,document,function(){E()})})}))})}function _(){var i=document.getElementById("br_video_player_"+e.ad_id),t=document.createElement("img");i.style.width=e.width+"px",i.style.height=e.height+"px",t.src=e.rtb_url,t.style.width=e.width+"px",t.style.height=e.height+"px",t.style.cursor="pointer",i.addEventListener("click",function(){window.open(document.location.protocol+"//www.truvid.com","_blank")}),i.appendChild(t)}function w(){var i=document.getElementById("br_video_player_"+e.ad_id),t=document.createElement("iframe");switch(i.parentNode.style.height=e.widget_json.passback.height+"px",t.id="passback_truvid_"+e.ad_id,t.style.cssText="width: "+e.widget_json.passback.width+"px; height: "+e.widget_json.passback.height+"px; border: none;",e.widget_json.widget_type){case"in_read":case"in_stream":t.style.cssText+="margin-left: "+(i.getBoundingClientRect().width-e.widget_json.passback.width)/2+"px;";break;case"floater":var n=f();n.style.cssText+="right: 0px; bottom: "+e.widget_json.passback.height+"px; position: fixed;",t.style.cssText+="right: 0px; bottom: 0px; position: fixed; z-index: 2147483647;",i.appendChild(n)}i.appendChild(t),t.contentWindow.document.open(),t.contentWindow.document.write('<body style="margin: 0px;">'+decodeURIComponent(e.widget_json.passback.code)+"</body>"),t.contentWindow.document.close();try{if(window.top.iframe||window.top.document&&window.top.adUnitBase){var o=window.top.adUnitBase?window.top.adUnitBase.replace(/\/(.+)\//,"")+".inread.article":"",s=window.top.iframe||window.top.document.getElementById("google_ads_iframe_"+window.top.adUnitBase+"/"+o+window.top.ADUNIT_PATH_PATTREN.replace(/%adUnit%/g,o).replace(/section./g,"section")+"_0");switch(s.style.cssText="height: "+e.widget_json.passback.height+"px; width: "+e.widget_json.passback.width+"px; border: none; margin-left: "+(s.parentNode.getBoundingClientRect().width-parseFloat(s.style.width))/2+"px; margin-top: "+(s.parentNode.getBoundingClientRect().height-parseFloat(s.style.height))/2+"px",t.style.marginLeft="0px",e.widget_json.widget_type){case"in_read":case"in_stream":break;case"floater":s.style.cssText+="bottom: 0px; right: 0px; position: fixed; height: "+(15+e.widget_json.passback.height)+"px;"}}}catch(r){}y=!0,a(e.protocol+"//"+e.pixels_host+e.server_paths.pixel_path+"?e="+e.pixels.psbk,!0,document,function(){})}function f(){var i=document.createElement("div"),t=document.createElement("div");return i.appendChild(t),i.style.cssText="height: 15px; width: "+e.widget_json.passback.width+"px; background-color: black;",t.innerText="Close",t.style.cssText="font-family: verdana; color: rgb(255, 255, 255); font-weight: bold; font-size: 9px; text-decoration: none; cursor: pointer; vertical-align: top; margin-left: 4px; line-height: 15px;",t.addEventListener("click",function(){var i=document.getElementById("br_video_player_"+e.ad_id);i.parentNode.removeChild(i);try{if(window.top.iframe||window.top.document&&window.top.adUnitBase){var t=window.top.adUnitBase?window.top.adUnitBase.replace(/\/(.+)\//,"")+".inread.article":"",n=window.top.iframe||window.top.document.getElementById("google_ads_iframe_"+window.top.adUnitBase+"/"+t+window.top.ADUNIT_PATH_PATTREN.replace(/%adUnit%/g,t).replace(/section./g,"section")+"_0");n.style.cssText+="height: 0px; width: 0px;"}}catch(o){}}),i}function v(e){return"string"==typeof e?JSON.parse(e):e}var b=!1,y=!1;e.widget_json=v(e.widget_json),n(),"rtb"==e.widget_json.widget_type?_():e.widget_json.passback&&(e.widget_json.passback.geo||e.widget_json.passback.env)?w():(e.js_paths.util_path=i(e.js_paths.util_path,e.version),e.tags=v(e.tags),e.callbacks=v(e.callbacks),h())})})}('158', '1599', '4146148756615349', 'http://stg.truvidplayer.com', {"playlist_id":false,"video_id":false}, false);