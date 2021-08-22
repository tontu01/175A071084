<!DOCTYPE html>
<html lang="vi-VN" class=" td-md-is-chrome js_active  vc_desktop  vc_transform  vc_transform ">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="{{ asset('frontend/theme/iframe_api.js') }}"></script>
    <script type="text/javascript" id="www-widgetapi-script"
            src="{{ asset('frontend/theme/www-widgetapi.js') }}" async=""></script>
    <title>QuanLyDiemSV</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">.eventon_events_list .eventon_list_event .desc_trig {
            background-color: #fafafa
        }

        .eventon_events_list .eventon_list_event .desc_trig:hover {
            background-color: #f4f4f4
        }

        .ajde_evcal_calendar .calendar_header p,
        .ajde_evcal_calendar .evcal_evdata_row .evcal_evdata_cell h3.evo_h3,
        .evo_lightbox_content h3.evo_h3,
        body .ajde_evcal_calendar h4.evo_h4,
        .evo_content_in h4.evo_h4,
        .evo_metarow_ICS .evcal_evdata_cell p a,
        .eventon_events_list .eventon_list_event .evcal_desc span.evcal_desc2,
        .eventon_list_event .evcal_desc span.evcal_event_title,
        .evcal_desc span.evcal_desc2,
        .evo_metarow_ICS .evcal_evdata_cell p a,
        .evo_metarow_learnMICS .evcal_col50 .evcal_evdata_cell p a,
        .eventon_list_event .evo_metarow_locImg p.evoLOCtxt .evo_loc_text_title,
        .evo_clik_row .evo_h3,
        .evotax_term_card .evotax_term_details h2,
        .evotax_term_card h3.evotax_term_subtitle,
        .ajde_evcal_calendar .evo_sort_btn,
        .eventon_main_section #evcal_cur,
        .ajde_evcal_calendar .calendar_header p.evo_month_title,
        .ajde_evcal_calendar .eventon_events_list .evcal_month_line p,
        .eventon_events_list .eventon_list_event .evcal_cblock,
        .ajde_evcal_calendar .evcal_month_line,
        .eventon_event .event_excerpt_in h3 {
            font-family: roboto, 'arial narrow'
        }

        .ajde_evcal_calendar .eventon_events_list p,
        .eventon_events_list .eventon_list_event .evcal_desc span,
        .evo_pop_body .evcal_desc span,
        .eventon_events_list .eventon_list_event .evcal_desc span.evcal_event_subtitle,
        .evo_pop_body .evcal_desc span.evcal_event_subtitle,
        .ajde_evcal_calendar .eventon_list_event .event_description .evcal_btn,
        .evo_pop_body .evcal_btn, .evcal_btn,
        .eventon_events_list .eventon_list_event .cancel_event .evo_event_headers,
        .evo_pop_body .evo_event_headers.canceled,
        .eventon_events_list .eventon_list_event .evcal_list_a .evo_above_title span,
        .evo_pop_body .evcal_list_a .evo_above_title span,
        .evcal_evdata_row.evcal_event_details .evcal_evdata_cell p,
        #evcal_list .eventon_list_event .evoInput, .evo_pop_body .evoInput,
        .evcal_evdata_row .evcal_evdata_cell p,
        #evcal_list .eventon_list_event p.no_events,
        .ajde_evcal_calendar .eventon_events_list .eventon_desc_in ul,
        .evoGuideCall em,
        .evo_cal_above span,
        .ajde_evcal_calendar .calendar_header .evo_j_dates .legend,
        .eventon_sort_line p, .eventon_filter_line p {
            font-family: 'open sans', 'arial narrow'
        }

        .ajde_evcal_calendar .evo_sort_btn, .eventon_sf_field p, .evo_srt_sel p.fa {
            color: #B8B8B8
        }

        .ajde_evcal_calendar .evo_sort_btn:hover {
            color: #d8d8d8
        }

        #evcal_list .eventon_list_event .evcal_desc em {
            color: #076633
        }

        #evcal_list .eventon_list_event .evcal_desc em a {
            color: #c8c8c8
        }

        #evcal_list .eventon_list_event .event_description .evcal_btn, .evo_pop_body .evcal_btn {
            color: #ffffff;
            background: #24bd45;
        }

        #evcal_list .eventon_list_event .event_description .evcal_btn:hover, .evo_pop_body .evcal_btn:hover {
            color: #fff;
            background: #24bd45;
        }

        .evcal_evdata_row .evcal_evdata_icons i, .evcal_evdata_row .evcal_evdata_custometa_icons i {
            color: #076633;
            font-size: 12px;
        }

        #eventon_loadbar {
            background-color: #6B6B6B
        }

        .evcal_evdata_row .evcal_evdata_cell h3, .evo_clik_row .evo_h3 {
            font-size: 10px
        }

        #evcal_list .eventon_list_event .evcal_cblock {
            color: #ABABAB
        }

        .evcal_evdata_row .evcal_evdata_cell h2, .evcal_evdata_row .evcal_evdata_cell h3 {
            color: #0f7311
        }

        #evcal_list .eventon_list_event .evcal_eventcard p, .ajde_evcal_calendar .eventon_events_list .eventon_desc_in ul {
            color: #454445
        }

        .ajde_evcal_calendar #evcal_head.calendar_header #evcal_cur, .ajde_evcal_calendar .evcal_month_line p {
            color: #C6C6C6
        }

        .eventon_events_list .eventon_list_event .evcal_eventcard, .evcal_evdata_row, .evorow .tbrow, .dark1, .evo_pop_body {
            background-color: #ffffff
        }

        .dark1:hover {
            background-color: #d8d8d8
        }

        .event_description .bordb, #evcal_list .bordb, .eventon_events_list .eventon_list_event .event_description, .bordr, #evcal_list, .evo_pop_body .bordb {
            border-color: #e5e5e5
        }

        .eventon_events_list .eventon_list_event .evcal_list_a:after, .evcal_list_a:after {
            background-color: #cdcdcd
        }

        .eventon_events_list .eventon_list_event .evcal_list_a.featured_event {
            background-color: #F9ECE4
        }

        .eventon_events_list .eventon_list_event .evcal_list_a.featured_event:hover {
            background-color: #FAE4D7
        }

        #eventon_loadbar_section {
            border-color: #cdcdcd
        }

        .event_description .evcal_close {
            background-color: #eaeaea
        }

        .event_description .evcal_close:hover {
            background-color: #c7c7c7
        }

        #evcal_list .evorow.getdirections, .evo_pop_body .evorow.getdirections {
            background-color: #ffffff
        }

        #evcal_list .evorow.getdirections .evoInput, .evo_pop_body .evorow.getdirections .evoInput {
            color: #888888
        }

        #evcal_list .evorow.getdirections .evcalicon_9 i, .evo_pop_body .evorow.getdirections .evcalicon_9 i {
            color: #858585
        }

        #evcal_list .eventon_list_event .evcal_desc span.evcal_event_title, .evo_popup .eventon_events_list .eventon_list_event .evcal_desc span.evcal_event_title {
            color: #000000
        }

        .eventon_events_list .eventon_list_event .evcal_desc span.evcal_event_subtitle, .evo_pop_body .evcal_desc span.evcal_event_subtitle {
            color: #6B6B6B
        }

        .fp_popup_option i {
            color: #999;
            font-size: 22px;
        }

        .evo_cal_above span {
            color: #ffffff;
            background-color: #ADADAD;
        }

        .evo_cal_above span:hover {
            color: #ffffff;
            background-color: #C8C8C8;
        }

        .evo_cal_above span.evo-gototoday-btn {
            color: #ffffff;
            background-color: #076125;
        }

        .evo_cal_above span.evo-gototoday-btn:hover {
            color: #ffffff;
            background-color: #d3d3d3;
        }

        .ajde_evcal_calendar .calendar_header .evo_j_dates .legend a {
            color: #a0a09f
        }

        .ajde_evcal_calendar .calendar_header .evo_j_dates .legend {
            background-color: #f5f5f5
        }

        .ajde_evcal_calendar .calendar_header .evo_j_dates .legend a:hover {
            color: #a0a09f;
            background-color: #e6e6e6;
        }

        .ajde_evcal_calendar .calendar_header .evo_j_dates .legend a.current {
            color: #ffffff;
            background-color: #CFCFCF;
        }

        .ajde_evcal_calendar .calendar_header .evo_j_dates .legend a.set {
            color: #ffffff;
            background-color: #f79191;
        }

        .ajde_evcal_calendar .calendar_header .evcal_arrows {
            color: #e2e2e2;
            border-color: #e2e2e2;
            background-color: #ffffff;
        }

        .ajde_evcal_calendar .calendar_header .evcal_arrows:hover {
            color: #e2e2e2;
            border-color: #e2e2e2;
            background-color: #e2e2e2;
        }

        .ajde_evcal_calendar .calendar_header .evcal_arrows .fa {
            color: #e2e2e2
        }

        .ajde_evcal_calendar .calendar_header .evcal_arrows:hover .fa {
            color: #e2e2e2
        }

        .eventon_events_list .eventon_list_event .evcal_desc span.evo_above_title span, .evo_pop_body .evcal_desc span.evo_above_title span {
            color: #ffffff;
            background-color: #F79191;
        }

        .eventon_events_list .eventon_list_event .evcal_desc span.evo_above_title span.canceled, .evo_pop_body .evcal_desc span.evo_above_title span.canceled {
            color: #ffffff;
            background-color: #F79191;
        }

        .eventon_events_list .eventon_list_event .cancel_event.evcal_list_a {
            color: #ffffff;
            background: repeating-linear-gradient(45deg, #FDF2F2, #FDF2F2 10px, #FAFAFA 10px, #FAFAFA 20px);
        }

        .evcal_desc .evcal_desc3 em.evocmd_button, #evcal_list .evcal_desc .evcal_desc3 em.evocmd_button {
            color: #ffffff;
            background-color: #28a61f;
        }

        .evo_metarow_socialmedia a.evo_ss {
            background-color: #f5f5f5;
        }

        .evo_metarow_socialmedia a.evo_ss:hover {
            background-color: #9d9d9d;
        }

        .evo_metarow_socialmedia a.evo_ss i {
            color: #858585;
        }

        .evo_metarow_socialmedia a.evo_ss:hover i {
            color: #ffffff;
        }

        .evo_metarow_socialmedia .evo_sm {
            border-color: #cdcdcd
        }

        .evcal_event_details .evcal_evdata_cell .eventon_details_shading_bot {
            background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.01) 1%, rgba(255, 255, 255, 1) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(1%, rgba(255, 255, 255, 0.01)), color-stop(100%, rgba(255, 255, 255, 1))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, rgba(255, 255, 2554, 0) 0%, rgba(255, 255, 255, 0.01) 1%, rgba(255, 255, 255, 1) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.01) 1%, rgba(255, 255, 255, 1) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.01) 1%, rgba(255, 255, 255, 1) 100%); /* IE10+ */
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.01) 1%, rgba(255, 255, 255, 1) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff', endColorstr='#ffffff', GradientType=0); /* IE6-9 */
        }

        #evcal_widget .eventon_events_list .eventon_list_event .evcal_desc .evcal_desc_info em {
            color: #076633
        }</style>
    <link rel="icon" type="image/png" href="https://ttu.edu.vn/wp-content/uploads/2017/03/logo.png">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://s.w.org/">
    <link rel="alternate" type="application/rss+xml" title="Đại học Tân Tạo » Feed" href="https://ttu.edu.vn/feed/">
    <link rel="alternate" type="application/rss+xml" title="Đại học Tân Tạo » Comments Feed"
          href="https://ttu.edu.vn/comments/feed/">
    <link rel="alternate" type="application/rss+xml" title="Đại học Tân Tạo » Trang chủ Comments Feed"
          href="https://ttu.edu.vn/trang-chu/feed/">
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/ttu.edu.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.6"}
        };
        !function (a, b, c) {
            function d(a, b) {
                var c = String.fromCharCode;
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
                var d = k.toDataURL();
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
                var e = k.toDataURL();
                return d === e
            }

            function e(a) {
                var b;
                if (!l || !l.fillText) return !1;
                switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                    case"flag":
                        return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
                    case"emoji":
                        return b = d([55357, 56692, 8205, 9792, 65039], [55357, 56692, 8203, 9792, 65039]), !b
                }
                return !1
            }

            function f(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var g, h, i, j, k = b.createElement("canvas"), l = k.getContext && k.getContext("2d");
            for (j = Array("flag", "emoji"), c.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                c.DOMReady = !0
            }, c.supports.everything || (h = function () {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function () {
                "complete" === b.readyState && c.readyCallback()
            })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <script src="./frontend/theme/wp-emoji-release.min.js" type="text/javascript" defer=""></script>
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
    <link rel="stylesheet" id="contact-form-7-css"
          href="./frontend/theme/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="rs-plugin-settings-css"
          href="./frontend/theme/settings.css" type="text/css" media="all">
    <style id="rs-plugin-settings-inline-css" type="text/css">
        #rs-demo-id {
        }

        .tp-caption.NotGeneric-CallToAction, .NotGeneric-CallToAction {
            color: rgba(255, 255, 255, 1.00);
            font-size: 14px;
            line-height: 14px;
            font-weight: 500;
            font-style: normal;
            font-family: Raleway;
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0);
            border-color: rgba(255, 255, 255, 0.50);
            border-style: solid;
            border-width: 1px;
            border-radius: 0px 0px 0px 0px;
            letter-spacing: 3px
        }

        .tp-caption.NotGeneric-CallToAction:hover, .NotGeneric-CallToAction:hover {
            color: rgba(255, 255, 255, 1.00);
            text-decoration: none;
            background-color: transparent;
            border-color: rgba(255, 255, 255, 1.00);
            border-style: solid;
            border-width: 1px;
            border-radius: 0px 0px 0px 0px;
            cursor: pointer
        }

        .tp-caption.NotGeneric-CallToAction, .NotGeneric-CallToAction {
            color: rgba(255, 255, 255, 1.00);
            font-size: 14px;
            line-height: 14px;
            font-weight: 500;
            font-style: normal;
            font-family: Raleway;
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0);
            border-color: rgba(255, 255, 255, 0.50);
            border-style: solid;
            border-width: 1px;
            border-radius: 0px 0px 0px 0px;
            letter-spacing: 3px
        }

        .tp-caption.NotGeneric-CallToAction:hover, .NotGeneric-CallToAction:hover {
            color: rgba(255, 255, 255, 1.00);
            text-decoration: none;
            background-color: transparent;
            border-color: rgba(255, 255, 255, 1.00);
            border-style: solid;
            border-width: 1px;
            border-radius: 0px 0px 0px 0px;
            cursor: pointer
        }

        #rev_slider_5_1_wrapper .tp-loader.spinner3 div {
            background-color: #30f430 !important;
        }

        #rev_slider_5_1 .uranus.tparrows {
            width: 50px;
            height: 50px;
            background: rgba(22, 22, 22, 0);
        }

        #rev_slider_5_1 .uranus.tparrows:before {
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 40px;
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
        }

        #rev_slider_5_1 .uranus.tparrows:hover:before {
            opacity: 0.75;
        }

        #rev_slider_5_1 .metis .tp-bullet {
            opacity: 1;
            width: 30px;
            height: 30px;
            padding: 3px;
            background-color: rgba(0, 0, 0, 0.25);
            margin: 0px;
            box-sizing: border-box;
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
            border-radius: 50%;
        }

        #rev_slider_5_1 .metis .tp-bullet-image {

            border-radius: 50%;
            display: block;
            box-sizing: border-box;
            position: relative;
            -webkit-box-shadow: inset 5px 5px 10px 0px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: inset 5px 5px 10px 0px rgba(0, 0, 0, 0.25);
            box-shadow: inset 5px 5px 10px 0px rgba(0, 0, 0, 0.25);
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center center;
        }

        #rev_slider_5_1 .metis .tp-bullet-title {
            position: absolute;
            bottom: 30px;
            margin-bottom: 10px;
            display: inline-block;
            left: 50%;
            background: #000;
            background: rgba(0, 0, 0, 0.75);
            color: rgb(255, 255, 255);
            padding: 10px 30px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            opacity: 0;
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transform: translatez(0.001px) translatex(-50%) translatey(14px);
            transform-origin: 50% 100%;
            -webkit-transform: translatez(0.001px) translatex(-50%) translatey(14px);
            -webkit-transform-origin: 50% 100%;
            opacity: 0;
            white-space: nowrap;
        }

        #rev_slider_5_1 .metis .tp-bullet:hover .tp-bullet-title {
            transform: rotatex(0deg) translatex(-50%);
            -webkit-transform: rotatex(0deg) translatex(-50%);
            opacity: 1;
        }

        #rev_slider_5_1 .metis .tp-bullet.selected,
        #rev_slider_5_1 .metis .tp-bullet:hover {
            background: -moz-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(67, 193, 82, 1) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255, 255, 255, 1)), color-stop(100%, rgba(67, 193, 82, 1)));
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(67, 193, 82, 1) 100%);
            background: -o-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(67, 193, 82, 1) 100%);
            background: -ms-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(67, 193, 82, 1) 100%);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(67, 193, 82, 1) 100%);
        }

        #rev_slider_5_1 .metis .tp-bullet-title:after {
            content: " ";
            position: absolute;
            left: 50%;
            margin-left: -8px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 8px 8px 0 8px;
            border-color: rgba(0, 0, 0, 0.75) transparent transparent transparent;
            bottom: -8px;
        }


        /* VERTICAL RIGHT */
        #rev_slider_5_1 .metis.nav-dir-vertical.nav-pos-hor-right .tp-bullet-title {
            margin-bottom: 0px;
            top: 50%;
            right: 30px;
            left: auto;
            bottom: auto;
            margin-right: 10px;
            transform: translateX(-10px) translateY(-50%);
            -webkit-transform: translateX(-10px) translateY(-50%);
        }

        #rev_slider_5_1 .metis.nav-dir-vertical.nav-pos-hor-right .tp-bullet-title:after {
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent rgba(0, 0, 0, 0.75);
            right: -10px;
            left: auto;
            bottom: auto;
            top: 10px;
        }


        #rev_slider_5_1 .metis.nav-dir-vertical.nav-pos-hor-right .tp-bullet:hover .tp-bullet-title {
            transform: translateY(-50%) translateX(0px);
            -webkit-transform: translateY(-50%) translateX(0px);
        }

        /* VERTICAL LEFT && CENTER*/
        #rev_slider_5_1 .metis.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title,
        #rev_slider_5_1 .metis.nav-dir-vertical.nav-pos-hor-center .tp-bullet-title {
            margin-bottom: 0px;
            top: 50%;
            left: 30px;
            right: auto;
            bottom: auto;
            margin-left: 10px;
            transform: translateX(10px) translateY(-50%);
            -webkit-transform: translateX(10px) translateY(-50%);
        }

        #rev_slider_5_1 .metis.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title:after,
        #rev_slider_5_1 .metis.nav-dir-vertical.nav-pos-hor-center .tp-bullet-title:after {
            border-width: 10px 10px 10px 0;
            border-color: transparent rgba(0, 0, 0, 0.75) transparent transparent;
            left: -2px;
            right: auto;
            bottom: auto;
            top: 10px;
        }


        #rev_slider_5_1 .metis.nav-dir-vertical.nav-pos-hor-left .tp-bullet:hover .tp-bullet-title,
        #rev_slider_5_1 .metis.nav-dir-vertical.nav-pos-hor-center .tp-bullet:hover .tp-bullet-title {
            transform: translateY(-50%) translateX(0px);
            -webkit-transform: translateY(-50%) translateX(0px);
        }


        /* HORIZONTAL TOP */
        #rev_slider_5_1 .metis.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title {
            margin-bottom: 0px;
            top: 30px;
            left: 50%;
            bottom: auto;
            margin-top: 10px;
            right: auto;
            transform: translateX(-50%) translateY(10px);
            -webkit-transform: translateX(-50%) translateY(10px);
        }

        #rev_slider_5_1 .metis.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title:after {
            border-width: 0 10px 10px 10px;
            border-color: transparent transparent rgba(0, 0, 0, 0.75) transparent;
            right: auto;
            left: 50%;
            margin-left: -10px;
            bottom: auto;
            top: -10px;

        }


        #rev_slider_5_1 .metis.nav-dir-horizontal.nav-pos-ver-top .tp-bullet:hover .tp-bullet-title {
            transform: translateX(-50%) translatey(0px);
            -webkit-transform: translateX(-50%) translatey(0px);
        }


    </style>
    <link rel="stylesheet" id="wpml-legacy-horizontal-list-0-css"
          href="./frontend/theme/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="wpml-menu-item-0-css"
          href="./frontend/theme/style(1).css" type="text/css" media="all">
    <style id="wpml-menu-item-0-inline-css" type="text/css">
        .wpml-ls-slot-84, .wpml-ls-slot-84 a, .wpml-ls-slot-84 a:visited {
            background-color: #ffffff;
            color: #444444;
        }

        .wpml-ls-slot-84:hover, .wpml-ls-slot-84:hover a, .wpml-ls-slot-84 a:hover {
            color: #000000;
            background-color: #eeeeee;
        }

        .wpml-ls-slot-84.wpml-ls-current-language, .wpml-ls-slot-84.wpml-ls-current-language a, .wpml-ls-slot-84.wpml-ls-current-language a:visited {
            color: #444444;
            background-color: #ffffff;
        }

        .wpml-ls-slot-84.wpml-ls-current-language:hover, .wpml-ls-slot-84.wpml-ls-current-language:hover a, .wpml-ls-slot-84.wpml-ls-current-language a:hover {
            color: #000000;
            background-color: #eeeeee;
        }

        .wpml-ls-slot-84.wpml-ls-current-language .wpml-ls-slot-84, .wpml-ls-slot-84.wpml-ls-current-language .wpml-ls-slot-84 a, .wpml-ls-slot-84.wpml-ls-current-language .wpml-ls-slot-84 a:visited {
            background-color: #ffffff;
            color: #444444;
        }

        .wpml-ls-slot-84.wpml-ls-current-language .wpml-ls-slot-84:hover, .wpml-ls-slot-84.wpml-ls-current-language .wpml-ls-slot-84:hover a, .wpml-ls-slot-84.wpml-ls-current-language .wpml-ls-slot-84 a:hover {
            color: #000000;
            background-color: #eeeeee;
        }
    </style>
    <link rel="stylesheet" id="wpml-cms-nav-css-css"
          href="./frontend/theme/navigation.css" type="text/css" media="all">
    <link rel="stylesheet" id="cms-navigation-style-base-css"
          href="./frontend/theme/cms-navigation-base.css" type="text/css"
          media="screen">
    <link rel="stylesheet" id="cms-navigation-style-css"
          href="./frontend/theme/cms-navigation.css" type="text/css"
          media="screen">
    <link rel="stylesheet" id="google-fonts-style-css"
          href="./frontend/theme/css(2)" type="text/css" media="all">
    <link rel="stylesheet" id="evcal_google_fonts-css"
          href="./frontend/theme/css(3)" type="text/css" media="screen">
    <link rel="stylesheet" id="evcal_cal_default-css"
          href="./frontend/theme/eventon_styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="evo_addon_styles-css"
          href="./frontend/theme/eventon_addon_styles.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="evo_font_icons-css"
          href="./frontend/theme/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" id="simcal-qtip-css"
          href="./frontend/theme/jquery.qtip.min.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="simcal-default-calendar-grid-css"
          href="./frontend/theme/default-calendar-grid.min.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="simcal-default-calendar-list-css"
          href="./frontend/theme/default-calendar-list.min.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="js_composer_front-css"
          href="./frontend/theme/js_composer.min.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="td-theme-css" href="./frontend/theme/style(2).css"
          type="text/css" media="all">
    <link rel="stylesheet" id="td-theme-child-css"
          href="./frontend/theme/style(3).css" type="text/css" media="all">
    <link rel="stylesheet" id="td-theme-demo-style-css"
          href="./frontend/theme/demo_style.css" type="text/css" media="all">
    <script type="text/javascript"
            src="./frontend/theme/jquery.js"></script>
    <script type="text/javascript"
            src="./frontend/theme/jquery-migrate.min.js"></script>
    <script type="text/javascript"
            src="./frontend/theme/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript"
            src="./frontend/theme/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="./frontend/theme/aam-login.js"></script>
    <script type="text/javascript" src="./frontend/theme/app.js"></script>


    <!-- WP Links CSS-->
    <style type="text/css">
        .wp-links-icon {
            background: url("https://ttu.edu.vn/wp-content/plugins/wp-links/icons/") no-repeat 100% 50%;
            padding-right: 15px;
            margin-right: 2px;
        };
    </style>

    <style type="text/css">
        .eventon_events_list .eventon_list_event .desc_trig:hover {
            background-color: #f4f4f4
        }

        .ajde_evcal_calendar .calendar_header p,
        .ajde_evcal_calendar .evcal_evdata_row .evcal_evdata_cell h3.evo_h3,
        .evo_lightbox_content h3.evo_h3,
        body .ajde_evcal_calendar h4.evo_h4,
        .evo_content_in h4.evo_h4,
        .evo_metarow_ICS .evcal_evdata_cell p a,
        .eventon_events_list .eventon_list_event .evcal_desc span.evcal_desc2,
        .eventon_list_event .evcal_desc span.evcal_event_title,
        .evcal_desc span.evcal_desc2,
        .evo_metarow_ICS .evcal_evdata_cell p a,
        .evo_metarow_learnMICS .evcal_col50 .evcal_evdata_cell p a,
        .eventon_list_event .evo_metarow_locImg p.evoLOCtxt .evo_loc_text_title,
        .evo_clik_row .evo_h3,
        .evotax_term_card .evotax_term_details h2,
        .evotax_term_card h3.evotax_term_subtitle,
        .ajde_evcal_calendar .evo_sort_btn,
        .eventon_main_section #evcal_cur,
        .ajde_evcal_calendar .calendar_header p.evo_month_title,
        .ajde_evcal_calendar .eventon_events_list .evcal_month_line p,
        .eventon_events_list .eventon_list_event .evcal_cblock,
        .ajde_evcal_calendar .evcal_month_line,
        .eventon_event .event_excerpt_in h3 {
            font-family: roboto, 'arial narrow'
        }

        .ajde_evcal_calendar .eventon_events_list p,
        .eventon_events_list .eventon_list_event .evcal_desc span,
        .evo_pop_body .evcal_desc span,
        .eventon_events_list .eventon_list_event .evcal_desc span.evcal_event_subtitle,
        .evo_pop_body .evcal_desc span.evcal_event_subtitle,
        .ajde_evcal_calendar .eventon_list_event .event_description .evcal_btn,
        .evo_pop_body .evcal_btn, .evcal_btn,
        .eventon_events_list .eventon_list_event .cancel_event .evo_event_headers,
        .evo_pop_body .evo_event_headers.canceled,
        .eventon_events_list .eventon_list_event .evcal_list_a .evo_above_title span,
        .evo_pop_body .evcal_list_a .evo_above_title span,
        .evcal_evdata_row.evcal_event_details .evcal_evdata_cell p,
        #evcal_list .eventon_list_event .evoInput, .evo_pop_body .evoInput,
        .evcal_evdata_row .evcal_evdata_cell p,
        #evcal_list .eventon_list_event p.no_events,
        .ajde_evcal_calendar .eventon_events_list .eventon_desc_in ul,
        .evoGuideCall em,
        .evo_cal_above span,
        .ajde_evcal_calendar .calendar_header .evo_j_dates .legend,
        .eventon_sort_line p, .eventon_filter_line p {
            font-family: 'open sans', 'arial narrow'
        }

        .ajde_evcal_calendar .evo_sort_btn, .eventon_sf_field p, .evo_srt_sel p.fa {
            color: #B8B8B8
        }

        .ajde_evcal_calendar .evo_sort_btn:hover {
            color: #d8d8d8
        }

        #evcal_list .eventon_list_event .evcal_desc em {
            color: #076633
        }

        #evcal_list .eventon_list_event .evcal_desc em a {
            color: #c8c8c8
        }

        #evcal_list .eventon_list_event .event_description .evcal_btn, .evo_pop_body .evcal_btn {
            color: #ffffff;
            background: #24bd45;
        }

        #evcal_list .eventon_list_event .event_description .evcal_btn:hover, .evo_pop_body .evcal_btn:hover {
            color: #fff;
            background: #24bd45;
        }

        .evcal_evdata_row .evcal_evdata_icons i, .evcal_evdata_row .evcal_evdata_custometa_icons i {
            color: #076633;
            font-size: 12px;
        }

        #eventon_loadbar {
            background-color: #6B6B6B
        }

        .evcal_evdata_row .evcal_evdata_cell h3, .evo_clik_row .evo_h3 {
            font-size: 10px
        }

        #evcal_list .eventon_list_event .evcal_cblock {
            color: #ABABAB
        }

        .evcal_evdata_row .evcal_evdata_cell h2, .evcal_evdata_row .evcal_evdata_cell h3 {
            color: #0f7311
        }

        #evcal_list .eventon_list_event .evcal_eventcard p, .ajde_evcal_calendar .eventon_events_list .eventon_desc_in ul {
            color: #454445
        }

        .ajde_evcal_calendar #evcal_head.calendar_header #evcal_cur, .ajde_evcal_calendar .evcal_month_line p {
            color: #C6C6C6
        }

        .eventon_events_list .eventon_list_event .evcal_eventcard, .evcal_evdata_row, .evorow .tbrow, .dark1, .evo_pop_body {
            background-color: #ffffff
        }

        .dark1:hover {
            background-color: #d8d8d8
        }

        .event_description .bordb, #evcal_list .bordb, .eventon_events_list .eventon_list_event .event_description, .bordr, #evcal_list, .evo_pop_body .bordb {
            border-color: #e5e5e5
        }

        .eventon_events_list .eventon_list_event .evcal_list_a:after, .evcal_list_a:after {
            background-color: #cdcdcd
        }

        .eventon_events_list .eventon_list_event .evcal_list_a.featured_event {
            background-color: #F9ECE4
        }

        .eventon_events_list .eventon_list_event .evcal_list_a.featured_event:hover {
            background-color: #FAE4D7
        }

        #eventon_loadbar_section {
            border-color: #cdcdcd
        }

        .event_description .evcal_close {
            background-color: #eaeaea
        }

        .event_description .evcal_close:hover {
            background-color: #c7c7c7
        }

        #evcal_list .evorow.getdirections, .evo_pop_body .evorow.getdirections {
            background-color: #ffffff
        }

        #evcal_list .evorow.getdirections .evoInput, .evo_pop_body .evorow.getdirections .evoInput {
            color: #888888
        }

        #evcal_list .evorow.getdirections .evcalicon_9 i, .evo_pop_body .evorow.getdirections .evcalicon_9 i {
            color: #858585
        }

        #evcal_list .eventon_list_event .evcal_desc span.evcal_event_title, .evo_popup .eventon_events_list .eventon_list_event .evcal_desc span.evcal_event_title {
            color: #000000
        }

        .eventon_events_list .eventon_list_event .evcal_desc span.evcal_event_subtitle, .evo_pop_body .evcal_desc span.evcal_event_subtitle {
            color: #6B6B6B
        }

        .fp_popup_option i {
            color: #999;
            font-size: 22px;
        }

        .evo_cal_above span {
            color: #ffffff;
            background-color: #ADADAD;
        }

        .evo_cal_above span:hover {
            color: #ffffff;
            background-color: #C8C8C8;
        }

        .evo_cal_above span.evo-gototoday-btn {
            color: #ffffff;
            background-color: #076125;
        }

        .evo_cal_above span.evo-gototoday-btn:hover {
            color: #ffffff;
            background-color: #d3d3d3;
        }

        .ajde_evcal_calendar .calendar_header .evo_j_dates .legend a {
            color: #a0a09f
        }

        .ajde_evcal_calendar .calendar_header .evo_j_dates .legend {
            background-color: #f5f5f5
        }

        .ajde_evcal_calendar .calendar_header .evo_j_dates .legend a:hover {
            color: #a0a09f;
            background-color: #e6e6e6;
        }

        .ajde_evcal_calendar .calendar_header .evo_j_dates .legend a.current {
            color: #ffffff;
            background-color: #CFCFCF;
        }

        .ajde_evcal_calendar .calendar_header .evo_j_dates .legend a.set {
            color: #ffffff;
            background-color: #f79191;
        }

        .ajde_evcal_calendar .calendar_header .evcal_arrows {
            color: #e2e2e2;
            border-color: #e2e2e2;
            background-color: #ffffff;
        }

        .ajde_evcal_calendar .calendar_header .evcal_arrows:hover {
            color: #e2e2e2;
            border-color: #e2e2e2;
            background-color: #e2e2e2;
        }

        .ajde_evcal_calendar .calendar_header .evcal_arrows .fa {
            color: #e2e2e2
        }

        .ajde_evcal_calendar .calendar_header .evcal_arrows:hover .fa {
            color: #e2e2e2
        }

        .eventon_events_list .eventon_list_event .evcal_desc span.evo_above_title span, .evo_pop_body .evcal_desc span.evo_above_title span {
            color: #ffffff;
            background-color: #F79191;
        }

        .eventon_events_list .eventon_list_event .evcal_desc span.evo_above_title span.canceled, .evo_pop_body .evcal_desc span.evo_above_title span.canceled {
            color: #ffffff;
            background-color: #F79191;
        }

        .eventon_events_list .eventon_list_event .cancel_event.evcal_list_a {
            color: #ffffff;
            background: repeating-linear-gradient(45deg, #FDF2F2, #FDF2F2 10px, #FAFAFA 10px, #FAFAFA 20px);
        }

        .evcal_desc .evcal_desc3 em.evocmd_button, #evcal_list .evcal_desc .evcal_desc3 em.evocmd_button {
            color: #ffffff;
            background-color: #28a61f;
        }

        .evo_metarow_socialmedia a.evo_ss {
            background-color: #f5f5f5;
        }

        .evo_metarow_socialmedia a.evo_ss:hover {
            background-color: #9d9d9d;
        }

        .evo_metarow_socialmedia a.evo_ss i {
            color: #858585;
        }

        .evo_metarow_socialmedia a.evo_ss:hover i {
            color: #ffffff;
        }

        .evo_metarow_socialmedia .evo_sm {
            border-color: #cdcdcd
        }

        .evcal_event_details .evcal_evdata_cell .eventon_details_shading_bot {
            background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.01) 1%, rgba(255, 255, 255, 1) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(1%, rgba(255, 255, 255, 0.01)), color-stop(100%, rgba(255, 255, 255, 1))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, rgba(255, 255, 2554, 0) 0%, rgba(255, 255, 255, 0.01) 1%, rgba(255, 255, 255, 1) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.01) 1%, rgba(255, 255, 255, 1) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.01) 1%, rgba(255, 255, 255, 1) 100%); /* IE10+ */
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.01) 1%, rgba(255, 255, 255, 1) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff', endColorstr='#ffffff', GradientType=0); /* IE6-9 */
        }

        #evcal_widget .eventon_events_list .eventon_list_event .evcal_desc .evcal_desc_info em {
            color: #076633
        }</style>

    <style type="text/css" id="wp-custom-css">
        .banner-uuthe,
        .online-admission {
            -webkit-animation: move2 5s infinite;
            animation: move2 5s infinite;
        }

        @keyframes move2 {
            0% {
                -webkit-transform: rotate(1deg) translate(2px, 2px);
                transform: rotate(1deg) translate(2px, 2px)
            }
            50% {
                -webkit-transform: rotate(-1deg) translate(-2px, -2px);
                transform: rotate(-1deg) translate(-2px, -2px)
            }
            to {
                -webkit-transform: rotate(1deg) translate(2px, 2px);
                transform: rotate(1deg) translate(2px, 2px)
            }
        }

        @media only screen and (max-width: 768px) {
            .online-admission,
            .banner-uuthe {
                display: none;
            }
        }

        .home-new .td-main-page-wrap {
            padding-top: 0;
        }        </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1506311697755 {
            margin-top: -20px !important;
        }

        .vc_custom_1506915270198 {
            margin-bottom: -40px !important;
        }</style>
    <noscript>
        <style type="text/css"> .wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('/frontend/theme/common.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('/frontend/theme/util.js') }}"></script>
</head>

<body class="home page-template-default page page-id-1909 trang-chu global-block-template-15 wpb-js-composer js-comp-ver-4.12.1 vc_responsive td-full-layout td-js-loaded"
      itemscope="itemscope">

<div class="td-scroll-up"><i class="td-icon-menu-up"></i></div>

<div class="td-menu-background"></div>
<div id="td-mobile-nav" style="min-height: 800px;">
    <div class="td-mobile-container">
        <!-- mobile menu top section -->
        <div class="td-menu-socials-wrap">
            <!-- socials -->
            <div class="td-menu-socials">

        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.facebook.com/tantaouniversity" title="Facebook">
                <i class="td-icon-font td-icon-facebook"></i>
            </a>
        </span>
                <span class="td-social-icon-wrap">
            <a target="_blank" href="https://plus.google.com/102424130313402014529" title="Google+">
                <i class="td-icon-font td-icon-googleplus"></i>
            </a>
        </span>
                <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.instagram.com/tantaouniversity/#" title="Instagram">
                <i class="td-icon-font td-icon-instagram"></i>
            </a>
        </span>
                <span class="td-social-icon-wrap">
            <a target="_blank" href="https://twitter.com/TanTaoUni" title="Twitter">
                <i class="td-icon-font td-icon-twitter"></i>
            </a>
        </span>
                <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.youtube.com/user/DHTANTAO" title="Youtube">
                <i class="td-icon-font td-icon-youtube"></i>
            </a>
        </span></div>
            <!-- close button -->
            <div class="td-mobile-close">
                <a href="https://ttu.edu.vn/#"><i class="td-icon-close-mobile"></i></a>
            </div>
        </div>

        <!-- login section -->
        <div class="td-menu-login-section">

            <div class="td-guest-wrap">
                <div class="td-menu-avatar">
                    <div class="td-avatar-container"><img alt=""
                                                          src="./frontend/theme/none.png"
                                                          srcset="https://secure.gravatar.com/avatar/?s=160&amp;d=mm&amp;r=g 2x"
                                                          class="avatar avatar-80 photo avatar-default" height="80"
                                                          width="80"></div>
                </div>
                <div class="td-menu-login"><a id="login-link-mob">Sign in</a></div>
            </div>
        </div>

        <!-- menu section -->
        <div class="td-mobile-content">
            <div class="menu-header_menu_en-vietnamese-container">
                <ul id="menu-header_menu_en-vietnamese" class="td-mobile-main-menu">
                    <li id="menu-item-8176"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-first menu-item-has-children menu-item-8176 td_mobile_elem_with_submenu_0">
                        <a href="http://ttu.edu.vn/gioi-thieu/" class="td-link-element-after">Giới thiệu<i
                                    class="td-icon-menu-right td-element-after"></i></a>
                        <ul class="sub-menu">
                            <li id="menu-item-0" class="menu-item-0"><a
                                        href="https://ttu.edu.vn/category/gioi-thieu/bo-may-to-chuc/">Bộ máy Tổ chức</a>
                            </li>
                            <li class="menu-item-0"><a
                                        href="https://ttu.edu.vn/category/gioi-thieu/dam-bao-chat-luong-giao-duc/">Đảm
                                    bảo chất lượng giáo dục</a></li>
                            <li class="menu-item-0"><a href="https://ttu.edu.vn/category/gioi-thieu/lich-su/">Lịch
                                    sử</a></li>
                            <li class="menu-item-0"><a href="https://ttu.edu.vn/category/gioi-thieu/loi-ngo/">Lời
                                    ngỏ</a></li>
                            <li class="menu-item-0"><a
                                        href="https://ttu.edu.vn/category/gioi-thieu/thong-tin-tham-quan/">Thông tin
                                    thăm quan</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-2004"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2004"><a
                                href="https://ttu.edu.vn/tuyen-sinh/">Tuyển Sinh</a></li>
                    <li id="menu-item-3031"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3031"><a
                                href="https://ttu.edu.vn/dao-tao/">Đào Tạo</a></li>
                    <li id="menu-item-21699"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-21699 td_mobile_elem_with_submenu_1">
                        <a href="https://ttu.edu.vn/#" class="td-link-element-after">Nghiên cứu<i
                                    class="td-icon-menu-right td-element-after"></i></a>
                        <ul class="sub-menu">
                            <li id="menu-item-21686"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21686"><a
                                        href="https://ttu.edu.vn/nghiencuu/bai-bao-khoa-hoc/">Bài báo khoa học</a></li>
                            <li id="menu-item-21685"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21685"><a
                                        href="https://ttu.edu.vn/nghiencuu/de-tai-nghien-cuu/">Đề tài nghiên cứu</a>
                            </li>
                            <li id="menu-item-21684"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21684"><a
                                        href="https://ttu.edu.vn/nghiencuu/hoat-dong/">Hoạt động</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1966"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1966 td_mobile_elem_with_submenu_2">
                        <a href="https://ttu.edu.vn/#" class="td-link-element-after">Các Khoa<i
                                    class="td-icon-menu-right td-element-after"></i></a>
                        <ul class="sub-menu">
                            <li id="menu-item-3035"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3035"><a
                                        target="_blank" href="http://medicine.ttu.edu.vn/">Khoa Y</a></li>
                            <li id="menu-item-3034"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3034"><a
                                        target="_blank" href="http://soe.ttu.edu.vn/">Khoa Kỹ thuật</a></li>
                            <li id="menu-item-3036"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3036"><a
                                        target="_blank" href="http://biotech.ttu.edu.vn/vi/">Khoa Công nghệ sinh học</a>
                            </li>
                            <li id="menu-item-3037"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3037"><a
                                        target="_blank" href="http://shl.ttu.edu.vn/vi/">Khoa Nhân văn và Ngôn ngữ</a>
                            </li>
                            <li id="menu-item-3033"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3033"><a
                                        target="_blank" href="http://sbe.ttu.edu.vn/">Khoa Kinh tế và Quản trị Kinh
                                    doanh</a></li>
                            <li id="menu-item-20557"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20557"><a
                                        href="http://ttu.edu.vn/khoa-dieu-duong-va-ky-thuat-xet-nghiem-y-hoc/">Khoa Điều
                                    dưỡng &amp; Kỹ thuật Xét nghiệm Y học</a></li>
                            <li id="menu-item-3038"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3038"><a
                                        target="_blank" href="http://ttst.edu.vn/">Trường phổ thông Năng khiếu Tân
                                    Tạo</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1967"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1967 td_mobile_elem_with_submenu_3">
                        <a href="https://ttu.edu.vn/#" class="td-link-element-after">Tin Tức &amp; Sự Kiện<i
                                    class="td-icon-menu-right td-element-after"></i></a>
                        <ul class="sub-menu">
                            <li class="menu-item-0"><a
                                        href="https://ttu.edu.vn/category/tin-tuc-su-kien/bao-chi-viet-ve-ttu/">Báo chí
                                    viết về TTU</a></li>
                            <li class="menu-item-0"><a
                                        href="https://ttu.edu.vn/category/tin-tuc-su-kien/nhat-ky-thuc-tap/">Nhật ký
                                    thực tập</a></li>
                            <li class="menu-item-0"><a href="https://ttu.edu.vn/category/tin-tuc-su-kien/su-kien/">Sự
                                    kiện</a></li>
                            <li class="menu-item-0"><a href="https://ttu.edu.vn/category/tin-tuc-su-kien/tin-tuc/">Tin
                                    tức</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-2529"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2529"><a
                                href="https://ttu.edu.vn/dong-gop/">Đóng góp</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- register/login section -->
    <div id="login-form-mobile" class="td-register-section">

        <div id="td-login-mob" class="td-login-animation td-login-hide-mob">
            <!-- close button -->
            <div class="td-login-close">
                <a href="https://ttu.edu.vn/#" class="td-back-button"><i class="td-icon-read-down"></i></a>
                <div class="td-login-title">Sign in</div>
                <!-- close button -->
                <div class="td-mobile-close">
                    <a href="https://ttu.edu.vn/#"><i class="td-icon-close-mobile"></i></a>
                </div>
            </div>
            <div class="td-login-form-wrap">
                <div class="td-login-panel-title"><span>Welcome!</span>Log into your account</div>
                <div class="td_display_err"></div>
                <div class="td-login-inputs"><input class="td-login-input" type="text" name="login_email"
                                                    id="login_email-mob" value="" required=""><label>your
                        username</label></div>
                <div class="td-login-inputs"><input class="td-login-input" type="password" name="login_pass"
                                                    id="login_pass-mob" value="" required=""><label>your
                        password</label></div>
                <input type="button" name="login_button" id="login_button-mob" class="td-login-button" value="LOG IN">
                <div class="td-login-info-text"><a href="https://ttu.edu.vn/#" id="forgot-pass-link-mob">Forgot your
                        password?</a></div>
            </div>
        </div>


        <div id="td-forgot-pass-mob" class="td-login-animation td-login-hide-mob">
            <!-- close button -->
            <div class="td-forgot-pass-close">
                <a href="https://ttu.edu.vn/#" class="td-back-button"><i class="td-icon-read-down"></i></a>
                <div class="td-login-title">Password recovery</div>
            </div>
            <div class="td-login-form-wrap">
                <div class="td-login-panel-title">Recover your password</div>
                <div class="td_display_err"></div>
                <div class="td-login-inputs"><input class="td-login-input" type="text" name="forgot_email"
                                                    id="forgot_email-mob" value="" required=""><label>your email</label>
                </div>
                <input type="button" name="forgot_button" id="forgot_button-mob" class="td-login-button"
                       value="Send My Pass">
            </div>
        </div>
    </div>
</div>
<div class="td-search-background"></div>
<div class="td-search-wrap-mob">
    <div class="td-drop-down-search" aria-labelledby="td-header-search-button">
        <form method="get" class="td-search-form" action="https://ttu.edu.vn/">
            <!-- close button -->
            <div class="td-search-close">
                <a href="https://ttu.edu.vn/#"><i class="td-icon-close-mobile"></i></a>
            </div>
            <div role="search" class="td-search-input">
                <span>Tìm kiếm</span>
                <input id="td-header-search-mob" type="text" value="" name="s" autocomplete="off">
            </div>
        </form>
        <div id="td-aj-search-mob"></div>
    </div>
</div>

<div id="td-outer-wrap" class="td-theme-wrap">

    <!--
Header style 10
-->

    <div class="td-header-wrap td-header-style-10">

        <div class="td-header-top-menu-full">
            <div class="td-container td-header-row td-header-top-menu">

                <div class="top-bar-style-2">

                    <div class="td-header-sp-top-menu">


                        <ul class="top-header-menu td_ul_login sf-js-enabled">
                            <li class="menu-item"><a class="td-login-modal-js menu-item"
                                                     href="{{ frontendRouter('login') }}"
                                                     data-effect="mpf-td-login-effect">Sign in / Join</a><span
                                        class="td-sp-ico-login td_sp_login_ico_style"></span></li>
                        </ul>
                        <div class="menu-top-container">
                            <ul id="menu-top-menu-en-vietnamese" class="top-header-menu sf-js-enabled">
                                <li id="menu-item-1960"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-first td-menu-item td-normal-menu menu-item-1960">
                                    <a target="_blank" href="http://student.ttu.edu.vn/?lang=vi">ĐỜI SỐNG SINH VIÊN</a>
                                </li>
                                <li id="menu-item-5466"
                                    class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-5466">
                                    <a href="https://ttu.edu.vn/nhan-vien/">GIẢNG VIÊN/NHÂN VIÊN</a></li>
                                <li id="menu-item-22562"
                                    class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-22562">
                                    <a href="https://ttu.edu.vn/thong-tin-noi-bo/">THÔNG TIN NỘI BỘ</a></li>
                                <li id="menu-item-1963"
                                    class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-1963">
                                    <a target="_blank" href="http://student.ttu.edu.vn/category/cuu-sinh-vien/?lang=vi">CỰU
                                        SINH VIÊN</a></li>
                                <li id="menu-item-5723"
                                    class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-5723">
                                    <a target="_blank" href="https://ttu.edu.vn/lien-he/">LIÊN HỆ</a></li>
                                <li class="menu-item wpml-ls-slot-84 wpml-ls-item wpml-ls-item-vi wpml-ls-current-language wpml-ls-menu-item wpml-ls-first-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-has-children td-menu-item td-normal-menu menu-item-wpml-ls-84-vi">
                                    <a href="http://ttu.edu.vn/" class="sf-with-ul"><img class="wpml-ls-flag"
                                                                                         src="./frontend/theme/vi.png"
                                                                                         alt="vi" title="Tiếng Việt"><i
                                                class="td-icon-menu-down"></i></a>
                                    <ul class="sub-menu" style="display: none;">
                                        <li class="menu-item wpml-ls-slot-84 wpml-ls-item wpml-ls-item-en wpml-ls-menu-item wpml-ls-last-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item td-menu-item td-normal-menu menu-item-wpml-ls-84-en">
                                            <a href="http://ttu.edu.vn/?lang=en"><img class="wpml-ls-flag"
                                                                                      src="./frontend/theme/php6Tgb4h"
                                                                                      alt="en" title="English"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- LOGIN MODAL -->

                <div id="login-form" class="white-popup-block mfp-hide mfp-with-anim">
                    <div class="td-login-wrap">
                        <a href="https://ttu.edu.vn/#" class="td-back-button"><i class="td-icon-modal-back"></i></a>
                        <div id="td-login-div" class="td-login-form-div td-display-block">
                            <div class="td-login-panel-title">Sign in</div>
                            <div class="td-login-panel-descr">Welcome! Log into your account</div>
                            <div class="td_display_err"></div>
                            <div class="td-login-inputs"><input class="td-login-input" type="text" name="login_email"
                                                                id="login_email" value="" required=""><label>your
                                    username</label></div>
                            <div class="td-login-inputs"><input class="td-login-input" type="password" name="login_pass"
                                                                id="login_pass" value="" required=""><label>your
                                    password</label></div>
                            <input type="button" name="login_button" id="login_button"
                                   class="wpb_button btn td-login-button" value="Đăng nhập">
                            <div class="td-login-info-text"><a href="https://ttu.edu.vn/#" id="forgot-pass-link">Forgot
                                    your password? Get help</a></div>

                        </div>


                        <div id="td-forgot-pass-div" class="td-login-form-div td-display-none">
                            <div class="td-login-panel-title">Password recovery</div>
                            <div class="td-login-panel-descr">Recover your password</div>
                            <div class="td_display_err"></div>
                            <div class="td-login-inputs"><input class="td-login-input" type="text" name="forgot_email"
                                                                id="forgot_email" value="" required=""><label>your
                                    email</label></div>
                            <input type="button" name="forgot_button" id="forgot_button"
                                   class="wpb_button btn td-login-button" value="Send My Password">
                            <div class="td-login-info-text">A password will be e-mailed to you.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="td-banner-wrap-full td-logo-wrap-full td-logo-mobile-loaded">
            <div class="td-header-sp-logo">
                <h1 class="td-logo"><a class="td-main-logo" href="https://ttu.edu.vn/">
                        <img class="td-retina-data"
                             data-retina="https://ttu.edu.vn/wp-content/uploads/2017/09/logo-ttuVN123.png"
                             src="./frontend/theme/logo-ttuVN123.png" alt="">
                        <span class="td-visual-hidden">Đại học Tân Tạo</span>
                    </a>
                </h1></div>
        </div>

        <div class="td-header-menu-wrap-full" style="height: 48px;">
            <div class="td-header-menu-wrap td-header-gradient" style="transform: translate3d(0px, 0px, 0px);">
                <div class="td-container td-header-row td-header-main-menu">
                    <div id="td-header-menu" role="navigation">
                        <div id="td-top-mobile-toggle"><a href="https://ttu.edu.vn/#"><i
                                        class="td-icon-font td-icon-mobile"></i></a></div>
                        <div class="td-main-menu-logo td-logo-in-header">
                            <a class="td-mobile-logo td-sticky-disable" href="https://ttu.edu.vn/">
                                <img src="./frontend/theme/logomobile-VN.png"
                                     alt="">
                            </a>
                            <a class="td-header-logo td-sticky-disable" href="https://ttu.edu.vn/">
                                <img class="td-retina-data"
                                     data-retina="https://ttu.edu.vn/wp-content/uploads/2017/09/logo-ttuVN123.png"
                                     src="./frontend/theme/logo-ttuVN123.png"
                                     alt="">
                            </a>
                            <div id="flags_language_selector" class="flag-lang"><a
                                        href="http://ttu.edu.vn/?lang=en"><img
                                            src="./frontend/theme/php6Tgb4h"
                                            height="12" alt="en" width="18"></a></div>
                            <style>
                                .flag-lang {
                                    right: 27px;
                                    position: absolute;
                                    top: 27px;
                                }

                                #td-top-search {
                                    right: 25px;
                                }
                            </style>
                        </div>
                        <div class="menu-header_menu_en-vietnamese-container">
                            <ul id="menu-header_menu_en-vietnamese-1" class="sf-menu sf-js-enabled">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-first td-menu-item td-mega-menu menu-item-8176">
                                    <a href="http://ttu.edu.vn/gioi-thieu/" class="sf-with-ul">Giới thiệu<i
                                                class="td-icon-menu-down"></i></a>
                                    <ul class="sub-menu" style="display: none; float: none; width: 20em;">
                                        <li class="menu-item-0" style="white-space: normal; float: left; width: 100%;">
                                            <div class="td-container-border">
                                                <div class="td-mega-grid">
                                                    <div class="td_block_wrap td_block_mega_menu td_uid_1_611e3bbcd6bde_rand td_with_ajax_pagination td-pb-border-top td_block_template_15"
                                                         data-td-block-uid="td_uid_1_611e3bbcd6bde">
                                                        <div class="td_mega_menu_sub_cats">
                                                            <div class="block-mega-child-cats"><a
                                                                        class="cur-sub-cat mega-menu-sub-cat-td_uid_1_611e3bbcd6bde"
                                                                        id="td_uid_2_611e3bbcd8f69"
                                                                        data-td_block_id="td_uid_1_611e3bbcd6bde"
                                                                        data-td_filter_value=""
                                                                        href="https://ttu.edu.vn/category/gioi-thieu/">All</a><a
                                                                        class="mega-menu-sub-cat-td_uid_1_611e3bbcd6bde"
                                                                        id="td_uid_3_611e3bbcd90a0"
                                                                        data-td_block_id="td_uid_1_611e3bbcd6bde"
                                                                        data-td_filter_value="162"
                                                                        href="https://ttu.edu.vn/category/gioi-thieu/bo-may-to-chuc/">Bộ
                                                                    máy Tổ chức</a><a
                                                                        class="mega-menu-sub-cat-td_uid_1_611e3bbcd6bde"
                                                                        id="td_uid_4_611e3bbcd9129"
                                                                        data-td_block_id="td_uid_1_611e3bbcd6bde"
                                                                        data-td_filter_value="160"
                                                                        href="https://ttu.edu.vn/category/gioi-thieu/dam-bao-chat-luong-giao-duc/">Đảm
                                                                    bảo chất lượng giáo dục</a><a
                                                                        class="mega-menu-sub-cat-td_uid_1_611e3bbcd6bde"
                                                                        id="td_uid_5_611e3bbcd919c"
                                                                        data-td_block_id="td_uid_1_611e3bbcd6bde"
                                                                        data-td_filter_value="163"
                                                                        href="https://ttu.edu.vn/category/gioi-thieu/lich-su/">Lịch
                                                                    sử</a><a
                                                                        class="mega-menu-sub-cat-td_uid_1_611e3bbcd6bde"
                                                                        id="td_uid_6_611e3bbcd9219"
                                                                        data-td_block_id="td_uid_1_611e3bbcd6bde"
                                                                        data-td_filter_value="159"
                                                                        href="https://ttu.edu.vn/category/gioi-thieu/loi-ngo/">Lời
                                                                    ngỏ</a><a
                                                                        class="mega-menu-sub-cat-td_uid_1_611e3bbcd6bde"
                                                                        id="td_uid_7_611e3bbcd928d"
                                                                        data-td_block_id="td_uid_1_611e3bbcd6bde"
                                                                        data-td_filter_value="161"
                                                                        href="https://ttu.edu.vn/category/gioi-thieu/thong-tin-tham-quan/">Thông
                                                                    tin thăm quan</a></div>
                                                        </div>
                                                        <div id="td_uid_1_611e3bbcd6bde" class="td_block_inner">
                                                            <div class="td-mega-row">
                                                                <div class="td-mega-span">
                                                                    <div class="td_module_mega_menu td-meta-info-hide td_mod_mega_menu">
                                                                        <div class="td-module-image">
                                                                            <div class="td-module-thumb"><a
                                                                                        href="https://ttu.edu.vn/cong-khai-nam-hoc-2020-2021/"
                                                                                        rel="bookmark"
                                                                                        title="CÔNG KHAI NĂM HỌC 2020 – 2021"><img
                                                                                            width="218" height="150"
                                                                                            class="entry-thumb"
                                                                                            src="./frontend/theme/anh-2-218x150.jpg"
                                                                                            srcset="https://ttu.edu.vn/wp-content/uploads/2020/12/anh-2-218x150.jpg 218w, https://ttu.edu.vn/wp-content/uploads/2020/12/anh-2-100x70.jpg 100w"
                                                                                            sizes="(max-width: 218px) 100vw, 218px"
                                                                                            alt=""
                                                                                            title="CÔNG KHAI NĂM HỌC 2020 – 2021"></a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-details">
                                                                            <h3 class="entry-title td-module-title"><a
                                                                                        href="https://ttu.edu.vn/cong-khai-nam-hoc-2020-2021/"
                                                                                        rel="bookmark"
                                                                                        title="CÔNG KHAI NĂM HỌC 2020 – 2021">CÔNG
                                                                                    KHAI NĂM HỌC 2020 – 2021</a></h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="td-mega-span">
                                                                    <div class="td_module_mega_menu td-meta-info-hide td_mod_mega_menu">
                                                                        <div class="td-module-image">
                                                                            <div class="td-module-thumb"><a
                                                                                        href="https://ttu.edu.vn/quyet-dinh-thanh-lap-hoi-dong-tu-danh-gia-chuong-trinh-dao-tao-y-khoa/"
                                                                                        rel="bookmark"
                                                                                        title="Quyết định thành lập hội đồng tự đánh giá chương trình đào tạo Y khoa"><img
                                                                                            width="218" height="150"
                                                                                            class="entry-thumb"
                                                                                            src="./frontend/theme/tt13-218x150.jpg"
                                                                                            srcset="https://ttu.edu.vn/wp-content/uploads/2018/04/tt13-218x150.jpg 218w, https://ttu.edu.vn/wp-content/uploads/2018/04/tt13-100x70.jpg 100w"
                                                                                            sizes="(max-width: 218px) 100vw, 218px"
                                                                                            alt=""
                                                                                            title="Quyết định thành lập hội đồng tự đánh giá chương trình đào tạo Y khoa"></a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-details">
                                                                            <h3 class="entry-title td-module-title"><a
                                                                                        href="https://ttu.edu.vn/quyet-dinh-thanh-lap-hoi-dong-tu-danh-gia-chuong-trinh-dao-tao-y-khoa/"
                                                                                        rel="bookmark"
                                                                                        title="Quyết định thành lập hội đồng tự đánh giá chương trình đào tạo Y khoa">Quyết
                                                                                    định thành lập hội đồng tự đánh giá
                                                                                    chương trình…</a></h3></div>
                                                                    </div>
                                                                </div>
                                                                <div class="td-mega-span">
                                                                    <div class="td_module_mega_menu td-meta-info-hide td_mod_mega_menu">
                                                                        <div class="td-module-image">
                                                                            <div class="td-module-thumb"><a
                                                                                        href="https://ttu.edu.vn/ke-hoach-tdg-ctdt-y-dk/"
                                                                                        rel="bookmark"
                                                                                        title="Kế hoạch tự đánh giá chương trình đào tạo Y đa khoa"><img
                                                                                            width="218" height="150"
                                                                                            class="entry-thumb"
                                                                                            src="./frontend/theme/laboratory-640-218x150.jpg"
                                                                                            srcset="https://ttu.edu.vn/wp-content/uploads/2019/04/laboratory-640-218x150.jpg 218w, https://ttu.edu.vn/wp-content/uploads/2019/04/laboratory-640-100x70.jpg 100w"
                                                                                            sizes="(max-width: 218px) 100vw, 218px"
                                                                                            alt=""
                                                                                            title="Kế hoạch tự đánh giá chương trình đào tạo Y đa khoa"></a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-details">
                                                                            <h3 class="entry-title td-module-title"><a
                                                                                        href="https://ttu.edu.vn/ke-hoach-tdg-ctdt-y-dk/"
                                                                                        rel="bookmark"
                                                                                        title="Kế hoạch tự đánh giá chương trình đào tạo Y đa khoa">Kế
                                                                                    hoạch tự đánh giá chương trình đào
                                                                                    tạo Y đa…</a></h3></div>
                                                                    </div>
                                                                </div>
                                                                <div class="td-mega-span">
                                                                    <div class="td_module_mega_menu td-meta-info-hide td_mod_mega_menu">
                                                                        <div class="td-module-image">
                                                                            <div class="td-module-thumb"><a
                                                                                        href="https://ttu.edu.vn/de-an-mo-nganh-dieu-duong-trinh-do-dai-hoc/"
                                                                                        rel="bookmark"
                                                                                        title="Đề án mở ngành – Điều dưỡng trình độ đại học"><img
                                                                                            width="218" height="150"
                                                                                            class="entry-thumb"
                                                                                            src="./frontend/theme/nurse-3624461_960_720-218x150.jpg"
                                                                                            srcset="https://ttu.edu.vn/wp-content/uploads/2019/04/nurse-3624461_960_720-218x150.jpg 218w, https://ttu.edu.vn/wp-content/uploads/2019/04/nurse-3624461_960_720-100x70.jpg 100w"
                                                                                            sizes="(max-width: 218px) 100vw, 218px"
                                                                                            alt=""
                                                                                            title="Đề án mở ngành – Điều dưỡng trình độ đại học"></a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-details">
                                                                            <h3 class="entry-title td-module-title"><a
                                                                                        href="https://ttu.edu.vn/de-an-mo-nganh-dieu-duong-trinh-do-dai-hoc/"
                                                                                        rel="bookmark"
                                                                                        title="Đề án mở ngành – Điều dưỡng trình độ đại học">Đề
                                                                                    án mở ngành – Điều dưỡng trình độ
                                                                                    đại học</a></h3></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="td-next-prev-wrap"><a href="https://ttu.edu.vn/#"
                                                                                          class="td-ajax-prev-page ajax-page-disabled"
                                                                                          id="prev-page-td_uid_1_611e3bbcd6bde"
                                                                                          data-td_block_id="td_uid_1_611e3bbcd6bde"><i
                                                                        class="td-icon-font td-icon-menu-left"></i></a><a
                                                                    href="https://ttu.edu.vn/#"
                                                                    class="td-ajax-next-page"
                                                                    id="next-page-td_uid_1_611e3bbcd6bde"
                                                                    data-td_block_id="td_uid_1_611e3bbcd6bde"><i
                                                                        class="td-icon-font td-icon-menu-right"></i></a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div> <!-- ./block1 --></div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-2004">
                                    <a href="https://ttu.edu.vn/tuyen-sinh/">Tuyển Sinh</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-3031">
                                    <a href="https://ttu.edu.vn/dao-tao/">Đào Tạo</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-21699">
                                    <a href="https://ttu.edu.vn/#" class="sf-with-ul">Nghiên cứu<i
                                                class="td-icon-menu-down"></i></a>
                                    <ul class="sub-menu" style="float: none; width: 10.5714em; display: none;">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-21686"
                                            style="white-space: normal; float: left; width: 100%;"><a
                                                    href="https://ttu.edu.vn/nghiencuu/bai-bao-khoa-hoc/"
                                                    style="float: none; width: auto;">Bài báo khoa học</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-21685"
                                            style="white-space: normal; float: left; width: 100%;"><a
                                                    href="https://ttu.edu.vn/nghiencuu/de-tai-nghien-cuu/"
                                                    style="float: none; width: auto;">Đề tài nghiên cứu</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-21684"
                                            style="white-space: normal; float: left; width: 100%;"><a
                                                    href="https://ttu.edu.vn/nghiencuu/hoat-dong/"
                                                    style="float: none; width: auto;">Hoạt động</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-1966">
                                    <a href="https://ttu.edu.vn/#" class="sf-with-ul">Các Khoa<i
                                                class="td-icon-menu-down"></i></a>
                                    <ul class="sub-menu" style="float: none; width: 20em; display: none;">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-3035"
                                            style="white-space: normal; float: left; width: 100%;"><a target="_blank"
                                                                                                      href="http://medicine.ttu.edu.vn/"
                                                                                                      style="float: none; width: auto;">Khoa
                                                Y</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-3034"
                                            style="white-space: normal; float: left; width: 100%;"><a target="_blank"
                                                                                                      href="http://soe.ttu.edu.vn/"
                                                                                                      style="float: none; width: auto;">Khoa
                                                Kỹ thuật</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-3036"
                                            style="white-space: normal; float: left; width: 100%;"><a target="_blank"
                                                                                                      href="http://biotech.ttu.edu.vn/vi/"
                                                                                                      style="float: none; width: auto;">Khoa
                                                Công nghệ sinh học</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-3037"
                                            style="white-space: normal; float: left; width: 100%;"><a target="_blank"
                                                                                                      href="http://shl.ttu.edu.vn/vi/"
                                                                                                      style="float: none; width: auto;">Khoa
                                                Nhân văn và Ngôn ngữ</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-3033"
                                            style="white-space: normal; float: left; width: 100%;"><a target="_blank"
                                                                                                      href="http://sbe.ttu.edu.vn/"
                                                                                                      style="float: none; width: auto;">Khoa
                                                Kinh tế và Quản trị Kinh doanh</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-20557"
                                            style="white-space: normal; float: left; width: 100%;"><a
                                                    href="http://ttu.edu.vn/khoa-dieu-duong-va-ky-thuat-xet-nghiem-y-hoc/"
                                                    style="float: none; width: auto;">Khoa Điều dưỡng &amp; Kỹ thuật Xét
                                                nghiệm Y học</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-3038"
                                            style="white-space: normal; float: left; width: 100%;"><a target="_blank"
                                                                                                      href="http://ttst.edu.vn/"
                                                                                                      style="float: none; width: auto;">Trường
                                                phổ thông Năng khiếu Tân Tạo</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-mega-menu menu-item-1967">
                                    <a href="https://ttu.edu.vn/#" class="sf-with-ul">Tin Tức &amp; Sự Kiện<i
                                                class="td-icon-menu-down"></i></a>
                                    <ul class="sub-menu" style="display: none; float: none; width: 20em;">
                                        <li class="menu-item-0" style="white-space: normal; float: left; width: 100%;">
                                            <div class="td-container-border">
                                                <div class="td-mega-grid">
                                                    <div class="td_block_wrap td_block_mega_menu td_uid_8_611e3bbcf138a_rand td_with_ajax_pagination td-pb-border-top td_block_template_15"
                                                         data-td-block-uid="td_uid_8_611e3bbcf138a">
                                                        <div class="td_mega_menu_sub_cats">
                                                            <div class="block-mega-child-cats"><a
                                                                        class="cur-sub-cat mega-menu-sub-cat-td_uid_8_611e3bbcf138a"
                                                                        id="td_uid_9_611e3bbd00a02"
                                                                        data-td_block_id="td_uid_8_611e3bbcf138a"
                                                                        data-td_filter_value=""
                                                                        href="https://ttu.edu.vn/category/tin-tuc-su-kien/">All</a><a
                                                                        class="mega-menu-sub-cat-td_uid_8_611e3bbcf138a"
                                                                        id="td_uid_10_611e3bbd00f2b"
                                                                        data-td_block_id="td_uid_8_611e3bbcf138a"
                                                                        data-td_filter_value="83"
                                                                        href="https://ttu.edu.vn/category/tin-tuc-su-kien/bao-chi-viet-ve-ttu/">Báo
                                                                    chí viết về TTU</a><a
                                                                        class="mega-menu-sub-cat-td_uid_8_611e3bbcf138a"
                                                                        id="td_uid_11_611e3bbd00fb4"
                                                                        data-td_block_id="td_uid_8_611e3bbcf138a"
                                                                        data-td_filter_value="190"
                                                                        href="https://ttu.edu.vn/category/tin-tuc-su-kien/nhat-ky-thuc-tap/">Nhật
                                                                    ký thực tập</a><a
                                                                        class="mega-menu-sub-cat-td_uid_8_611e3bbcf138a"
                                                                        id="td_uid_12_611e3bbd01029"
                                                                        data-td_block_id="td_uid_8_611e3bbcf138a"
                                                                        data-td_filter_value="76"
                                                                        href="https://ttu.edu.vn/category/tin-tuc-su-kien/su-kien/">Sự
                                                                    kiện</a><a
                                                                        class="mega-menu-sub-cat-td_uid_8_611e3bbcf138a"
                                                                        id="td_uid_13_611e3bbd010af"
                                                                        data-td_block_id="td_uid_8_611e3bbcf138a"
                                                                        data-td_filter_value="77"
                                                                        href="https://ttu.edu.vn/category/tin-tuc-su-kien/tin-tuc/">Tin
                                                                    tức</a></div>
                                                        </div>
                                                        <div id="td_uid_8_611e3bbcf138a" class="td_block_inner">
                                                            <div class="td-mega-row">
                                                                <div class="td-mega-span">
                                                                    <div class="td_module_mega_menu td-meta-info-hide td_mod_mega_menu">
                                                                        <div class="td-module-image">
                                                                            <div class="td-module-thumb"><a
                                                                                        href="https://ttu.edu.vn/hoi-nghi-tim-mach-mien-trung-tay-nguyen-mo-rong-lan-thu-xi/"
                                                                                        rel="bookmark"
                                                                                        title="Hội Nghị Tim mạch Miền Trung – Tây Nguyên mở rộng lần thứ XI"><img
                                                                                            width="218" height="150"
                                                                                            class="entry-thumb"
                                                                                            src="./frontend/theme/06-GS.-Thạch-Nguyễn-02-218x150.png"
                                                                                            srcset="https://ttu.edu.vn/wp-content/uploads/2021/08/06-GS.-Thạch-Nguyễn-02-218x150.png 218w, https://ttu.edu.vn/wp-content/uploads/2021/08/06-GS.-Thạch-Nguyễn-02-100x70.png 100w"
                                                                                            sizes="(max-width: 218px) 100vw, 218px"
                                                                                            alt=""
                                                                                            title="Hội Nghị Tim mạch Miền Trung – Tây Nguyên mở rộng lần thứ XI"></a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-details">
                                                                            <h3 class="entry-title td-module-title"><a
                                                                                        href="https://ttu.edu.vn/hoi-nghi-tim-mach-mien-trung-tay-nguyen-mo-rong-lan-thu-xi/"
                                                                                        rel="bookmark"
                                                                                        title="Hội Nghị Tim mạch Miền Trung – Tây Nguyên mở rộng lần thứ XI">Hội
                                                                                    Nghị Tim mạch Miền Trung – Tây
                                                                                    Nguyên mở rộng…</a></h3></div>
                                                                    </div>
                                                                </div>
                                                                <div class="td-mega-span">
                                                                    <div class="td_module_mega_menu td-meta-info-hide td_mod_mega_menu">
                                                                        <div class="td-module-image">
                                                                            <div class="td-module-thumb"><a
                                                                                        href="https://ttu.edu.vn/bai-gioi-thieu-cua-truong-khoa-y-ve-bac-si-tan-khoa-tran-trong-nhan-truong-dai-hoc-tan-tao/"
                                                                                        rel="bookmark"
                                                                                        title="Bài Giới thiệu của Trưởng khoa Y về Bác Sĩ Tân Khoa Trần Trọng Nhân, Trường Đại học Tân Tạo"><img
                                                                                            width="218" height="150"
                                                                                            class="entry-thumb"
                                                                                            src="./frontend/theme/Tran-Trong-Nhan-218x150.jpg"
                                                                                            srcset="https://ttu.edu.vn/wp-content/uploads/2021/07/Tran-Trong-Nhan-218x150.jpg 218w, https://ttu.edu.vn/wp-content/uploads/2021/07/Tran-Trong-Nhan-100x70.jpg 100w"
                                                                                            sizes="(max-width: 218px) 100vw, 218px"
                                                                                            alt=""
                                                                                            title="Bài Giới thiệu của Trưởng khoa Y về Bác Sĩ Tân Khoa Trần Trọng Nhân, Trường Đại học Tân Tạo"></a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-details">
                                                                            <h3 class="entry-title td-module-title"><a
                                                                                        href="https://ttu.edu.vn/bai-gioi-thieu-cua-truong-khoa-y-ve-bac-si-tan-khoa-tran-trong-nhan-truong-dai-hoc-tan-tao/"
                                                                                        rel="bookmark"
                                                                                        title="Bài Giới thiệu của Trưởng khoa Y về Bác Sĩ Tân Khoa Trần Trọng Nhân, Trường Đại học Tân Tạo">Bài
                                                                                    Giới thiệu của Trưởng khoa Y&nbsp;về
                                                                                    Bác Sĩ Tân Khoa…</a></h3></div>
                                                                    </div>
                                                                </div>
                                                                <div class="td-mega-span">
                                                                    <div class="td_module_mega_menu td-meta-info-hide td_mod_mega_menu">
                                                                        <div class="td-module-image">
                                                                            <div class="td-module-thumb"><a
                                                                                        href="https://ttu.edu.vn/chuong-trinh-can-thiep-mach-vanh-toi-uu/"
                                                                                        rel="bookmark"
                                                                                        title="Chương trình can thiệp mạch vành tối ưu"><img
                                                                                            width="218" height="150"
                                                                                            class="entry-thumb"
                                                                                            src="./frontend/theme/Tim-mach-can-thiep-1-218x150.png"
                                                                                            srcset="https://ttu.edu.vn/wp-content/uploads/2021/07/Tim-mach-can-thiep-1-218x150.png 218w, https://ttu.edu.vn/wp-content/uploads/2021/07/Tim-mach-can-thiep-1-100x70.png 100w, https://ttu.edu.vn/wp-content/uploads/2021/07/Tim-mach-can-thiep-1-700x486.png 700w"
                                                                                            sizes="(max-width: 218px) 100vw, 218px"
                                                                                            alt=""
                                                                                            title="Chương trình can thiệp mạch vành tối ưu"></a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-details">
                                                                            <h3 class="entry-title td-module-title"><a
                                                                                        href="https://ttu.edu.vn/chuong-trinh-can-thiep-mach-vanh-toi-uu/"
                                                                                        rel="bookmark"
                                                                                        title="Chương trình can thiệp mạch vành tối ưu">Chương
                                                                                    trình can thiệp mạch vành tối ưu</a>
                                                                            </h3></div>
                                                                    </div>
                                                                </div>
                                                                <div class="td-mega-span">
                                                                    <div class="td_module_mega_menu td-meta-info-hide td_mod_mega_menu">
                                                                        <div class="td-module-image">
                                                                            <div class="td-module-thumb"><a
                                                                                        href="https://ttu.edu.vn/ban-tin-14-thang-07-nam-2021/"
                                                                                        rel="bookmark"
                                                                                        title="Bản tin 14 tháng 07 năm 2021"><img
                                                                                            width="218" height="150"
                                                                                            class="entry-thumb"
                                                                                            src="./frontend/theme/TTU-co-gi-17-218x150.jpg"
                                                                                            srcset="https://ttu.edu.vn/wp-content/uploads/2019/07/TTU-co-gi-17-218x150.jpg 218w, https://ttu.edu.vn/wp-content/uploads/2019/07/TTU-co-gi-17-100x70.jpg 100w"
                                                                                            sizes="(max-width: 218px) 100vw, 218px"
                                                                                            alt=""
                                                                                            title="Bản tin 14 tháng 07 năm 2021"></a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-details">
                                                                            <h3 class="entry-title td-module-title"><a
                                                                                        href="https://ttu.edu.vn/ban-tin-14-thang-07-nam-2021/"
                                                                                        rel="bookmark"
                                                                                        title="Bản tin 14 tháng 07 năm 2021">Bản
                                                                                    tin 14 tháng 07 năm 2021</a></h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="td-next-prev-wrap"><a href="https://ttu.edu.vn/#"
                                                                                          class="td-ajax-prev-page ajax-page-disabled"
                                                                                          id="prev-page-td_uid_8_611e3bbcf138a"
                                                                                          data-td_block_id="td_uid_8_611e3bbcf138a"><i
                                                                        class="td-icon-font td-icon-menu-left"></i></a><a
                                                                    href="https://ttu.edu.vn/#"
                                                                    class="td-ajax-next-page"
                                                                    id="next-page-td_uid_8_611e3bbcf138a"
                                                                    data-td_block_id="td_uid_8_611e3bbcf138a"><i
                                                                        class="td-icon-font td-icon-menu-right"></i></a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div> <!-- ./block1 --></div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-2529">
                                    <a href="https://ttu.edu.vn/dong-gop/">Đóng góp</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="td-search-wrapper">
                        <div id="td-top-search">
                            <!-- Search -->
                            <div class="header-search-wrap">
                                <div class="dropdown header-search">
                                    <a id="td-header-search-button" href="https://ttu.edu.vn/#" role="button"
                                       class="dropdown-toggle " data-toggle="dropdown"><i
                                                class="td-icon-search"></i></a>
                                    <a id="td-header-search-button-mob" href="https://ttu.edu.vn/#" role="button"
                                       class="dropdown-toggle " data-toggle="dropdown"><i
                                                class="td-icon-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-search-wrap">
                        <div class="dropdown header-search">
                            <div class="td-drop-down-search" aria-labelledby="td-header-search-button">
                                <form method="get" class="td-search-form" action="https://ttu.edu.vn/">
                                    <div role="search" class="td-head-form-search-wrap">
                                        <input id="td-header-search" type="text" value="" name="s"
                                               autocomplete="off"><input class="wpb_button wpb_btn-inverse btn"
                                                                         type="submit" id="td-header-search-top"
                                                                         value="Tìm kiếm">
                                    </div>
                                </form>
                                <div id="td-aj-search"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="td-banner-wrap-full td-banner-bg">
            <div class="td-container-header td-header-row td-header-header">
                <div class="td-header-sp-recs">
                    <div class="td-header-rec-wrap">

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="td-main-content-wrap td-main-page-wrap">
        <div class="td-container tdc-content-wrap">
            <div class="wpb_column vc_column_container td-pb-span12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_revslider_element wpb_content_element">
                            <div id="rev_slider_5_1_wrapper"
                                 class="rev_slider_wrapper fullwidthbanner-container tp-mouseover" data-source="gallery"
                                 style="margin: 0px auto; background: transparent; padding: 0px; height: 502px; overflow: visible;">
                                <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
                                <div id="rev_slider_5_1"
                                     class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive rev_redraw_on_blurfocus"
                                     style="margin-top: 0px; margin-bottom: 0px; height: 502px;" data-version="5.4.8"
                                     data-slideactive="rs-166">
                                    <ul class="tp-revslider-mainul"
                                        style="visibility: visible; display: block; overflow: hidden; width: 1038px; height: 100%; max-height: none; left: 0px;">
                                        <!-- SLIDE  -->
                                        <li data-index="rs-166" data-transition="fade" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-link="https://tuyensinh.ttu.edu.vn/cshb"
                                            data-thumb="https://ttu.edu.vn/wp-content/uploads/2021/08/học-bong-25-web-1-1-100x50.jpg"
                                            data-delay="9600" data-rotate="0" data-saveperformance="off"
                                            data-title="admissions" data-param1="" data-param2="" data-param3=""
                                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                            data-param9="" data-param10="" data-description=""
                                            class="tp-revslider-slidesli active-revslide"
                                            style="width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1; background-color: rgba(255, 255, 255, 0);">
                                            <!-- MAIN IMAGE -->
                                            <div class="slotholder"
                                                 style="position: absolute; top: 0px; left: 0px; z-index: 0; width: 100%; height: 100%; visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="https://ttu.edu.vn/wp-content/uploads/2021/08/học-bong-25-web-1-1.jpg" alt="" title="học-bong-25%-web-1" width="2560" height="1032" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg defaultimg" data-no-retina="">-->
                                                <div class="tp-bgimg defaultimg " data-bgcolor="undefined"
                                                     style="background-repeat: no-repeat; background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2021/08/học-bong-25-web-1-1.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;"
                                                     src="https://ttu.edu.vn/wp-content/uploads/2021/08/học-bong-25-web-1-1.jpg"></div>
                                            </div>
                                            <!-- LAYERS -->
                                            <div class="tp-parallax-wrap"
                                                 style="position: absolute; display: block; visibility: visible; width: 100% !important; height: 100% !important; left: 0px; top: 0px; z-index: 60;">
                                                <div class="tp-loop-wrap"
                                                     style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap"
                                                         style="position: absolute; display: block; width: 100% !important; height: 100% !important; overflow: visible;">
                                                        <div class="tp-caption slidelink"
                                                             style="cursor: pointer; width: 100%; height: 100%; z-index: 60; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 20px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 12px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;"
                                                             data-x="center" data-y="center" data-basealign="slide"
                                                             data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                             id="layer-557541092"><a
                                                                    style="width:100%;height:100%;display:block"
                                                                    target="_self"
                                                                    href="https://tuyensinh.ttu.edu.vn/cshb"><span
                                                                        style="width:100%;height:100%;display:block"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-index="rs-44" data-transition="fade" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-link="http://ttu.edu.vn/gioi-thieu/hoi-dong-sang-lap/?lang=vi"
                                            data-thumb="https://ttu.edu.vn/wp-content/uploads/2017/02/banner-RC41-100x50.jpg"
                                            data-delay="9600" data-rotate="0" data-saveperformance="off" id="198"
                                            data-title="Slide" data-param1="" data-param2="" data-param3=""
                                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                            data-param9="" data-param10="" data-description=""
                                            class="tp-revslider-slidesli"
                                            style="width: 100%; height: 100%; overflow: hidden;">
                                            <!-- MAIN IMAGE -->
                                            <div class="slotholder"
                                                 style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;">
                                                <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="https://ttu.edu.vn/wp-content/uploads/2017/02/banner-RC41.jpg" alt="" title="banner-RC41" width="1068" height="700" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg defaultimg" data-no-retina="">-->
                                                <div class="tp-bgimg defaultimg " data-bgcolor="undefined"
                                                     style="background-repeat: no-repeat; background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2017/02/banner-RC41.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 0;"
                                                     src="https://ttu.edu.vn/wp-content/uploads/2017/02/banner-RC41.jpg"></div>
                                            </div>
                                            <!-- LAYERS -->

                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-parallax-wrap "
                                                 style=" position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                        <div class="tp-caption tp-shape tp-shapewrapper tp-shape tp-shapewrapper  tp-resizeme"
                                                             id="slide-44-layer-2"
                                                             data-x="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]"
                                                             data-hoffset="[&#39;2&#39;,&#39;2&#39;,&#39;2&#39;,&#39;4&#39;]"
                                                             data-y="[&#39;middle&#39;,&#39;middle&#39;,&#39;middle&#39;,&#39;middle&#39;]"
                                                             data-voffset="[&#39;104&#39;,&#39;104&#39;,&#39;104&#39;,&#39;-36&#39;]"
                                                             data-width="1579"
                                                             data-height="[&#39;836&#39;,&#39;836&#39;,&#39;836&#39;,&#39;1200&#39;]"
                                                             data-whitespace="normal" data-type="shape"
                                                             data-responsive_offset="on"
                                                             data-frames="[{&quot;from&quot;:&quot;opacity:0;&quot;,&quot;speed&quot;:4430,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:0,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:4570,&quot;speed&quot;:500,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                             data-textalign="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]"
                                                             data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                             style="z-index: 5; background-color: rgba(25, 25, 25, 0.5); visibility: hidden;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-parallax-wrap "
                                                 style=" position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                        <div class="tp-caption NotGeneric-CallToAction   tp-resizeme"
                                                             id="slide-44-layer-3"
                                                             data-x="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]"
                                                             data-hoffset="[&#39;0&#39;,&#39;0&#39;,&#39;0&#39;,&#39;0&#39;]"
                                                             data-y="[&#39;middle&#39;,&#39;middle&#39;,&#39;middle&#39;,&#39;middle&#39;]"
                                                             data-voffset="[&#39;114&#39;,&#39;114&#39;,&#39;114&#39;,&#39;114&#39;]"
                                                             data-width="540" data-height="none"
                                                             data-whitespace="normal" data-type="text"
                                                             data-responsive_offset="on"
                                                             data-frames="[{&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:2800,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:810,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:5190,&quot;speed&quot;:400,&quot;to&quot;:&quot;y:[100%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;300&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255,255,255,1);bc:rgba(255,255,255,1);bw:1px 1px 1px 1px;&quot;}]"
                                                             data-textalign="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]"
                                                             data-paddingtop="[10,10,10,10]"
                                                             data-paddingright="[30,30,30,30]"
                                                             data-paddingbottom="[10,10,10,10]"
                                                             data-paddingleft="[30,30,30,30]"
                                                             style="z-index: 6; min-width: 540px; max-width: 540px; white-space: normal; font-size: 40px; line-height: 40px; font-weight: 400; font-family: Arial, Helvetica, sans-serif; border-color: rgba(255, 255, 255, 0.5); cursor: pointer; visibility: hidden;">
                                                            HỘI ĐỒNG SÁNG LẬP
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- LAYER NR. 3 -->
                                            <div class="tp-parallax-wrap "
                                                 style=" position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                        <div class="tp-caption   tp-resizeme" id="slide-44-layer-9"
                                                             data-x="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]"
                                                             data-hoffset="[&#39;-130&#39;,&#39;-130&#39;,&#39;-130&#39;,&#39;-91&#39;]"
                                                             data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]"
                                                             data-voffset="[&#39;101&#39;,&#39;101&#39;,&#39;101&#39;,&#39;106&#39;]"
                                                             data-width="none" data-height="none"
                                                             data-whitespace="normal" data-type="image"
                                                             data-responsive_offset="on"
                                                             data-frames="[{&quot;from&quot;:&quot;opacity:0;&quot;,&quot;speed&quot;:2700,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:810,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:5190,&quot;speed&quot;:1200,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                             data-textalign="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]"
                                                             data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                             style="z-index: 7; visibility: hidden;"><img
                                                                    src="./frontend/theme/dthy2.png"
                                                                    alt=""
                                                                    data-ww="[&#39;150px&#39;,&#39;150px&#39;,&#39;150px&#39;,&#39;120px&#39;]"
                                                                    data-hh="[&#39;150px&#39;,&#39;150px&#39;,&#39;150px&#39;,&#39;120px&#39;]"
                                                                    width="400" height="400" data-no-retina=""></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- LAYER NR. 4 -->
                                            <div class="tp-parallax-wrap "
                                                 style=" position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                        <div class="tp-caption   tp-resizeme" id="slide-44-layer-10"
                                                             data-x="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]"
                                                             data-hoffset="[&#39;135&#39;,&#39;135&#39;,&#39;135&#39;,&#39;94&#39;]"
                                                             data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]"
                                                             data-voffset="[&#39;101&#39;,&#39;101&#39;,&#39;101&#39;,&#39;108&#39;]"
                                                             data-width="none" data-height="none"
                                                             data-whitespace="normal" data-type="image"
                                                             data-responsive_offset="on"
                                                             data-frames="[{&quot;from&quot;:&quot;opacity:0;&quot;,&quot;speed&quot;:2500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:300,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:5900,&quot;speed&quot;:1200,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                             data-textalign="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]"
                                                             data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                             style="z-index: 8; visibility: hidden;"><img
                                                                    src="./frontend/theme/Dr.-Charles-J.Henry1_-1.png"
                                                                    alt=""
                                                                    data-ww="[&#39;150px&#39;,&#39;150px&#39;,&#39;150px&#39;,&#39;120px&#39;]"
                                                                    data-hh="[&#39;150px&#39;,&#39;150px&#39;,&#39;150px&#39;,&#39;120px&#39;]"
                                                                    width="400" height="400" data-no-retina=""></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- LAYER NR. 5 -->
                                            <div class="tp-parallax-wrap "
                                                 style=" position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                        <div class="tp-caption   tp-resizeme" id="slide-44-layer-11"
                                                             data-x="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]"
                                                             data-hoffset="[&#39;382&#39;,&#39;382&#39;,&#39;382&#39;,&#39;255&#39;]"
                                                             data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]"
                                                             data-voffset="[&#39;100&#39;,&#39;100&#39;,&#39;100&#39;,&#39;106&#39;]"
                                                             data-width="none" data-height="none"
                                                             data-whitespace="normal" data-type="image"
                                                             data-responsive_offset="on"
                                                             data-frames="[{&quot;from&quot;:&quot;opacity:0;&quot;,&quot;speed&quot;:2500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:300,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:5900,&quot;speed&quot;:1200,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                             data-textalign="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]"
                                                             data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                             style="z-index: 9; visibility: hidden;"><img
                                                                    src="./frontend/theme/Malcolm-Gillis1.png"
                                                                    alt=""
                                                                    data-ww="[&#39;150px&#39;,&#39;150px&#39;,&#39;150px&#39;,&#39;120px&#39;]"
                                                                    data-hh="[&#39;150px&#39;,&#39;150px&#39;,&#39;150px&#39;,&#39;120px&#39;]"
                                                                    width="400" height="400" data-no-retina=""></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- LAYER NR. 6 -->
                                            <div class="tp-parallax-wrap "
                                                 style=" position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                        <div class="tp-caption   tp-resizeme" id="slide-44-layer-12"
                                                             data-x="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]"
                                                             data-hoffset="[&#39;-378&#39;,&#39;-378&#39;,&#39;-378&#39;,&#39;-251&#39;]"
                                                             data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]"
                                                             data-voffset="[&#39;102&#39;,&#39;102&#39;,&#39;102&#39;,&#39;106&#39;]"
                                                             data-width="none" data-height="none"
                                                             data-whitespace="normal" data-type="image"
                                                             data-responsive_offset="on"
                                                             data-frames="[{&quot;from&quot;:&quot;opacity:0;&quot;,&quot;speed&quot;:2500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:300,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:5900,&quot;speed&quot;:1200,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                             data-textalign="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]"
                                                             data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                             style="z-index: 10; visibility: hidden;"><img
                                                                    src="./frontend/theme/Eugene-H.Levy1_.png"
                                                                    alt=""
                                                                    data-ww="[&#39;150px&#39;,&#39;150px&#39;,&#39;150px&#39;,&#39;120px&#39;]"
                                                                    data-hh="[&#39;150px&#39;,&#39;150px&#39;,&#39;150px&#39;,&#39;120px&#39;]"
                                                                    width="400" height="400" data-no-retina=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-parallax-wrap "
                                                 style=" width:100% !important;height:100% !important;position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap"
                                                     style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap"
                                                         style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                        <div class="tp-caption slidelink"
                                                             style="cursor: pointer; width: 100%; height: 100%; z-index: 60; visibility: hidden;"
                                                             data-x="center" data-y="center" data-basealign="slide"
                                                             data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                             id="layer-500915464"><a
                                                                    style="width:100%;height:100%;display:block"
                                                                    target="_self"
                                                                    href="http://ttu.edu.vn/gioi-thieu/hoi-dong-sang-lap/?lang=vi"><span
                                                                        style="width:100%;height:100%;display:block"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-index="rs-67" data-transition="fade" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-link="https://tuyensinh.ttu.edu.vn/"
                                            data-thumb="https://ttu.edu.vn/wp-content/uploads/2021/07/banner-web-TS-21-2-100x50.jpg"
                                            data-delay="9600" data-rotate="0" data-saveperformance="off"
                                            data-title="admissions" data-param1="" data-param2="" data-param3=""
                                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                            data-param9="" data-param10="" data-description=""
                                            class="tp-revslider-slidesli"
                                            style="width: 100%; height: 100%; overflow: hidden;">
                                            <!-- MAIN IMAGE -->
                                            <div class="slotholder"
                                                 style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;">
                                                <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="https://ttu.edu.vn/wp-content/uploads/2021/07/banner-web-TS-21-2.jpg" alt="" title="banner-web-TS-21" width="2678" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg defaultimg" data-no-retina="">-->
                                                <div class="tp-bgimg defaultimg " data-bgcolor="undefined"
                                                     style="background-repeat: no-repeat; background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2021/07/banner-web-TS-21-2.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 0;"
                                                     src="https://ttu.edu.vn/wp-content/uploads/2021/07/banner-web-TS-21-2.jpg"></div>
                                            </div>
                                            <!-- LAYERS -->
                                            <div class="tp-parallax-wrap "
                                                 style=" width:100% !important;height:100% !important;position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap"
                                                     style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap"
                                                         style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                        <div class="tp-caption slidelink"
                                                             style="cursor: pointer; width: 100%; height: 100%; z-index: 60; visibility: hidden;"
                                                             data-x="center" data-y="center" data-basealign="slide"
                                                             data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                             id="layer-566879346"><a
                                                                    style="width:100%;height:100%;display:block"
                                                                    target="_self" href="https://tuyensinh.ttu.edu.vn/"><span
                                                                        style="width:100%;height:100%;display:block"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-index="rs-99" data-transition="fade" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-link="https://tuyensinh.ttu.edu.vn/cshb"
                                            data-thumb="https://ttu.edu.vn/wp-content/uploads/2021/07/banner-web-TS1-21-2-100x50.jpg"
                                            data-delay="9540" data-rotate="0" data-saveperformance="off"
                                            data-title="admissions" data-param1="" data-param2="" data-param3=""
                                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                            data-param9="" data-param10="" data-description=""
                                            class="tp-revslider-slidesli"
                                            style="width: 100%; height: 100%; overflow: hidden;">
                                            <!-- MAIN IMAGE -->
                                            <div class="slotholder"
                                                 style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;">
                                                <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="https://ttu.edu.vn/wp-content/uploads/2021/07/banner-web-TS1-21-2.jpg" alt="" title="banner-web-TS1-21" width="2678" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg defaultimg" data-no-retina="">-->
                                                <div class="tp-bgimg defaultimg " data-bgcolor="undefined"
                                                     style="background-repeat: no-repeat; background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2021/07/banner-web-TS1-21-2.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 0;"
                                                     src="https://ttu.edu.vn/wp-content/uploads/2021/07/banner-web-TS1-21-2.jpg"></div>
                                            </div>
                                            <!-- LAYERS -->
                                            <div class="tp-parallax-wrap "
                                                 style=" width:100% !important;height:100% !important;position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap"
                                                     style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap"
                                                         style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                        <div class="tp-caption slidelink"
                                                             style="cursor: pointer; width: 100%; height: 100%; z-index: 60; visibility: hidden;"
                                                             data-x="center" data-y="center" data-basealign="slide"
                                                             data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                             id="layer-243644140"><a
                                                                    style="width:100%;height:100%;display:block"
                                                                    target="_self"
                                                                    href="https://tuyensinh.ttu.edu.vn/cshb"><span
                                                                        style="width:100%;height:100%;display:block"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-index="rs-95" data-transition="fade" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-link="http://tuyensinh.ttu.edu.vn/news?pts=BS19"
                                            data-thumb="https://ttu.edu.vn/wp-content/uploads/2021/07/bnner-web-TS2-21-1-100x50.jpg"
                                            data-delay="9540" data-rotate="0" data-saveperformance="off"
                                            data-title="admissions" data-param1="" data-param2="" data-param3=""
                                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                            data-param9="" data-param10="" data-description=""
                                            class="tp-revslider-slidesli"
                                            style="width: 100%; height: 100%; overflow: hidden;">
                                            <!-- MAIN IMAGE -->
                                            <div class="slotholder"
                                                 style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;">
                                                <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="https://ttu.edu.vn/wp-content/uploads/2021/07/bnner-web-TS2-21-1.jpg" alt="" title="bnner-web-TS2-21" width="2678" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg defaultimg" data-no-retina="">-->
                                                <div class="tp-bgimg defaultimg " data-bgcolor="undefined"
                                                     style="background-repeat: no-repeat; background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2021/07/bnner-web-TS2-21-1.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 0;"
                                                     src="https://ttu.edu.vn/wp-content/uploads/2021/07/bnner-web-TS2-21-1.jpg"></div>
                                            </div>
                                            <!-- LAYERS -->

                                            <!-- LAYER NR. 7 -->
                                            <div class="tp-parallax-wrap "
                                                 style=" position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                        <div class="tp-caption   tp-resizeme" id="slide-95-layer-18"
                                                             data-x="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]"
                                                             data-hoffset="[&#39;1053&#39;,&#39;1053&#39;,&#39;1053&#39;,&#39;1053&#39;]"
                                                             data-y="[&#39;top&#39;,&#39;top&#39;,&#39;top&#39;,&#39;top&#39;]"
                                                             data-voffset="[&#39;24&#39;,&#39;24&#39;,&#39;24&#39;,&#39;24&#39;]"
                                                             data-width="none" data-height="none"
                                                             data-whitespace="nowrap" data-type="image"
                                                             data-responsive_offset="on"
                                                             data-frames="[{&quot;delay&quot;:240,&quot;speed&quot;:2570,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:2060,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                             data-textalign="[&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;,&#39;inherit&#39;]"
                                                             data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                             style="z-index: 5; visibility: hidden;"><img
                                                                    src="./frontend/theme/icon-111.png"
                                                                    alt=""
                                                                    data-ww="[&#39;86px&#39;,&#39;86px&#39;,&#39;86px&#39;,&#39;86px&#39;]"
                                                                    data-hh="[&#39;96px&#39;,&#39;96px&#39;,&#39;96px&#39;,&#39;96px&#39;]"
                                                                    width="109" height="122" data-no-retina=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-parallax-wrap "
                                                 style=" width:100% !important;height:100% !important;position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap"
                                                     style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap"
                                                         style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                        <div class="tp-caption slidelink"
                                                             style="cursor: pointer; width: 100%; height: 100%; z-index: 60; visibility: hidden;"
                                                             data-x="center" data-y="center" data-basealign="slide"
                                                             data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                             id="layer-47180609"><a
                                                                    style="width:100%;height:100%;display:block"
                                                                    target="_self"
                                                                    href="http://tuyensinh.ttu.edu.vn/news?pts=BS19"><span
                                                                        style="width:100%;height:100%;display:block"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-index="rs-112" data-transition="fade" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-link="http://ttu.edu.vn/cung-ttu-thap-sang-uoc-mo/"
                                            data-thumb="https://ttu.edu.vn/wp-content/uploads/2020/08/baner-thap-sang-uoc-mo-ttu-1-100x50.jpg"
                                            data-delay="9710" data-rotate="0" data-saveperformance="off"
                                            data-title="TTU Lighting" data-param1="" data-param2="" data-param3=""
                                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                            data-param9="" data-param10="" data-description=""
                                            class="tp-revslider-slidesli"
                                            style="width: 100%; height: 100%; overflow: hidden;">
                                            <!-- MAIN IMAGE -->
                                            <div class="slotholder"
                                                 style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;">
                                                <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="https://ttu.edu.vn/wp-content/uploads/2020/08/baner-thap-sang-uoc-mo-ttu-1.jpg" alt="" title="baner-thap-sang-uoc-mo-ttu" width="1068" height="700" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg defaultimg" data-no-retina="">-->
                                                <div class="tp-bgimg defaultimg " data-bgcolor="undefined"
                                                     style="background-repeat: no-repeat; background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2020/08/baner-thap-sang-uoc-mo-ttu-1.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 0;"
                                                     src="https://ttu.edu.vn/wp-content/uploads/2020/08/baner-thap-sang-uoc-mo-ttu-1.jpg"></div>
                                            </div>
                                            <!-- LAYERS -->
                                            <div class="tp-parallax-wrap "
                                                 style=" width:100% !important;height:100% !important;position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap"
                                                     style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap"
                                                         style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                        <div class="tp-caption slidelink"
                                                             style="cursor: pointer; width: 100%; height: 100%; z-index: 60; visibility: hidden;"
                                                             data-x="center" data-y="center" data-basealign="slide"
                                                             data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                             id="layer-827373609"><a
                                                                    style="width:100%;height:100%;display:block"
                                                                    target="_self"
                                                                    href="http://ttu.edu.vn/cung-ttu-thap-sang-uoc-mo/"><span
                                                                        style="width:100%;height:100%;display:block"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-index="rs-53" data-transition="fade" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-link="http://ttu.edu.vn/gioi-thieu/tam-nhin-su-menh/"
                                            data-thumb="https://ttu.edu.vn/wp-content/uploads/2020/08/Banner-TN-XM-100x50.jpg"
                                            data-delay="9600" data-rotate="0" data-saveperformance="off"
                                            data-title="Slide" data-param1="" data-param2="" data-param3=""
                                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                            data-param9="" data-param10="" data-description=""
                                            class="tp-revslider-slidesli"
                                            style="width: 100%; height: 100%; overflow: hidden;">
                                            <!-- MAIN IMAGE -->
                                            <div class="slotholder"
                                                 style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;">
                                                <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="https://ttu.edu.vn/wp-content/uploads/2020/08/Banner-TN-XM.jpg" alt="" title="Banner-TN-XM" width="1080" height="700" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg defaultimg" data-no-retina="">-->
                                                <div class="tp-bgimg defaultimg " data-bgcolor="undefined"
                                                     style="background-repeat: no-repeat; background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2020/08/Banner-TN-XM.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 0;"
                                                     src="https://ttu.edu.vn/wp-content/uploads/2020/08/Banner-TN-XM.jpg"></div>
                                            </div>
                                            <!-- LAYERS -->

                                            <!-- LAYER NR. 8 -->
                                            <div class="tp-parallax-wrap "
                                                 style=" position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                        <div class="tp-caption tp-shape tp-shapewrapper tp-shape tp-shapewrapper  tp-resizeme"
                                                             id="slide-53-layer-2"
                                                             data-x="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]"
                                                             data-hoffset="[&#39;-3&#39;,&#39;-3&#39;,&#39;-3&#39;,&#39;5&#39;]"
                                                             data-y="[&#39;middle&#39;,&#39;middle&#39;,&#39;middle&#39;,&#39;middle&#39;]"
                                                             data-voffset="[&#39;101&#39;,&#39;101&#39;,&#39;101&#39;,&#39;108&#39;]"
                                                             data-width="[&#39;1578&#39;,&#39;1578&#39;,&#39;1578&#39;,&#39;1579&#39;]"
                                                             data-height="[&#39;157&#39;,&#39;157&#39;,&#39;157&#39;,&#39;90&#39;]"
                                                             data-whitespace="normal" data-type="shape"
                                                             data-responsive_offset="on"
                                                             data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:3000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                             data-textalign="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]"
                                                             data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                             style="z-index: 5; background-color: rgba(25, 25, 25, 0.5); visibility: hidden;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- LAYER NR. 9 -->
                                            <div class="tp-parallax-wrap "
                                                 style=" position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                        <div class="tp-caption NotGeneric-CallToAction   tp-resizeme"
                                                             id="slide-53-layer-3"
                                                             data-x="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]"
                                                             data-hoffset="[&#39;-3&#39;,&#39;-3&#39;,&#39;-3&#39;,&#39;17&#39;]"
                                                             data-y="[&#39;middle&#39;,&#39;middle&#39;,&#39;middle&#39;,&#39;middle&#39;]"
                                                             data-voffset="[&#39;99&#39;,&#39;99&#39;,&#39;99&#39;,&#39;110&#39;]"
                                                             data-fontsize="[&#39;35&#39;,&#39;35&#39;,&#39;35&#39;,&#39;32&#39;]"
                                                             data-lineheight="[&#39;40&#39;,&#39;40&#39;,&#39;40&#39;,&#39;25&#39;]"
                                                             data-fontweight="[&#39;400&#39;,&#39;400&#39;,&#39;400&#39;,&#39;200&#39;]"
                                                             data-width="[&#39;521&#39;,&#39;521&#39;,&#39;521&#39;,&#39;515&#39;]"
                                                             data-height="none" data-whitespace="normal"
                                                             data-type="text" data-responsive_offset="on"
                                                             data-frames="[{&quot;delay&quot;:810,&quot;speed&quot;:4000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+4670&quot;,&quot;speed&quot;:420,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[100%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;300&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255,255,255,1);bc:rgba(255,255,255,1);bw:1 1 1 1;&quot;}]"
                                                             data-textalign="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]"
                                                             data-paddingtop="[10,10,10,10]"
                                                             data-paddingright="[30,30,30,30]"
                                                             data-paddingbottom="[10,10,10,10]"
                                                             data-paddingleft="[30,30,30,30]"
                                                             style="z-index: 6; min-width: 521px; max-width: 521px; white-space: normal; font-size: 35px; line-height: 40px; font-weight: 400; font-family: Arial, Helvetica, sans-serif; border-color: rgba(255, 255, 255, 0.5); border-width: 1px; cursor: pointer; visibility: hidden;">
                                                            TẦM NHÌN &amp; SỨ MỆNH
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-parallax-wrap "
                                                 style=" width:100% !important;height:100% !important;position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap"
                                                     style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap"
                                                         style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                        <div class="tp-caption slidelink"
                                                             style="cursor: pointer; width: 100%; height: 100%; z-index: 60; visibility: hidden;"
                                                             data-x="center" data-y="center" data-basealign="slide"
                                                             data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                             id="layer-843405250"><a
                                                                    style="width:100%;height:100%;display:block"
                                                                    target="_self"
                                                                    href="http://ttu.edu.vn/gioi-thieu/tam-nhin-su-menh/"><span
                                                                        style="width:100%;height:100%;display:block"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-index="rs-42" data-transition="fade" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-link="https://www.youtube.com/user/DHTANTAO" data-target="_blank"
                                            data-thumb="https://ttu.edu.vn/wp-content/uploads/2020/08/banner-khám-phá1-100x50.jpg"
                                            data-delay="9600" data-rotate="0" data-saveperformance="off" id="198"
                                            data-title="Slide" data-param1="" data-param2="" data-param3=""
                                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                            data-param9="" data-param10="" data-description=""
                                            class="tp-revslider-slidesli rs-pause-timer-always"
                                            style="width: 100%; height: 100%; overflow: hidden;">
                                            <!-- MAIN IMAGE -->
                                            <div class="slotholder"
                                                 style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;">
                                                <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="https://ttu.edu.vn/wp-content/uploads/2020/08/banner-khám-phá1.jpg" alt="" title="banner-khám-phá1" width="1068" height="700" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg defaultimg" data-no-retina="">-->
                                                <div class="rs-background-video-layer defaultvid" data-forcerewind="on"
                                                     data-volume="mute" data-ytid="l1vYXIA3DNs"
                                                     data-videoattributes="version=3&amp;enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;rel=0;;origin=https://ttu.edu.vn;"
                                                     data-videorate="1" data-videowidth="100%" data-videoheight="100%"
                                                     data-videocontrols="none" data-videoloop="none" data-forcecover="1"
                                                     data-aspectratio="16:9" data-autoplay="true"
                                                     data-autoplayonlyfirsttime="false" style="z-index: 30;"></div>
                                                <div class="tp-bgimg defaultimg " data-bgcolor="undefined"
                                                     style="background-repeat: no-repeat; background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2020/08/banner-khám-phá1.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 0;"
                                                     src="https://ttu.edu.vn/wp-content/uploads/2020/08/banner-khám-phá1.jpg"></div>
                                            </div>
                                            <!-- LAYERS -->

                                            <!-- BACKGROUND VIDEO LAYER -->

                                            <!-- LAYER NR. 10 -->
                                            <div class="tp-parallax-wrap "
                                                 style=" position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                        <div class="tp-caption tp-shape tp-shapewrapper tp-shape tp-shapewrapper  tp-resizeme"
                                                             id="slide-42-layer-2"
                                                             data-x="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]"
                                                             data-hoffset="[&#39;-12&#39;,&#39;-12&#39;,&#39;-12&#39;,&#39;-12&#39;]"
                                                             data-y="[&#39;middle&#39;,&#39;middle&#39;,&#39;middle&#39;,&#39;middle&#39;]"
                                                             data-voffset="[&#39;115&#39;,&#39;115&#39;,&#39;115&#39;,&#39;115&#39;]"
                                                             data-width="1292"
                                                             data-height="[&#39;120&#39;,&#39;120&#39;,&#39;120&#39;,&#39;100&#39;]"
                                                             data-whitespace="normal" data-type="shape"
                                                             data-responsive_offset="on"
                                                             data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:4430,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;+4570&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                             data-textalign="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]"
                                                             data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                             style="z-index: 5; background-color: rgba(25, 25, 25, 0.5); visibility: hidden;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- LAYER NR. 11 -->
                                            <div class="tp-parallax-wrap "
                                                 style=" position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                        <div class="tp-caption NotGeneric-CallToAction   tp-resizeme"
                                                             id="slide-42-layer-3"
                                                             data-x="[&#39;center&#39;,&#39;center&#39;,&#39;center&#39;,&#39;center&#39;]"
                                                             data-hoffset="[&#39;1&#39;,&#39;1&#39;,&#39;1&#39;,&#39;1&#39;]"
                                                             data-y="[&#39;middle&#39;,&#39;middle&#39;,&#39;middle&#39;,&#39;middle&#39;]"
                                                             data-voffset="[&#39;114&#39;,&#39;114&#39;,&#39;114&#39;,&#39;114&#39;]"
                                                             data-width="340" data-height="64" data-whitespace="normal"
                                                             data-type="text" data-responsive_offset="on"
                                                             data-frames="[{&quot;delay&quot;:810,&quot;speed&quot;:2800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;+5190&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[100%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;300&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255,255,255,1);bc:rgba(255,255,255,1);bw:1 1 1 1;&quot;}]"
                                                             data-textalign="[&#39;left&#39;,&#39;left&#39;,&#39;left&#39;,&#39;left&#39;]"
                                                             data-paddingtop="[10,10,10,10]"
                                                             data-paddingright="[30,30,30,30]"
                                                             data-paddingbottom="[10,10,10,10]"
                                                             data-paddingleft="[30,30,30,30]"
                                                             style="z-index: 6; min-width: 340px; max-width: 64px; white-space: normal; font-size: 40px; line-height: 40px; font-weight: 400; font-family: Arial, Helvetica, sans-serif; border-color: rgba(255, 255, 255, 0.5); border-width: 1px; cursor: pointer; visibility: hidden;">
                                                            THAM QUAN
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-parallax-wrap "
                                                 style=" width:100% !important;height:100% !important;position:absolute;display:block;;visibility:hidden">
                                                <div class="tp-loop-wrap"
                                                     style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                    <div class="tp-mask-wrap"
                                                         style="width:100% !important;height:100% !important;position:absolute;display:block;;">
                                                        <div class="tp-caption slidelink"
                                                             style="cursor: pointer; width: 100%; height: 100%; z-index: 60; visibility: hidden;"
                                                             data-x="center" data-y="center" data-basealign="slide"
                                                             data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                             id="layer-559281533"><a
                                                                    style="width:100%;height:100%;display:block"
                                                                    target="_blank"
                                                                    href="https://www.youtube.com/user/DHTANTAO"><span
                                                                        style="width:100%;height:100%;display:block"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                        var htmlDivCss = "";
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        } else {
                                            var htmlDiv = document.createElement("div");
                                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                    <div class="tp-bannertimer tp-bottom"
                                         style="visibility: hidden; width: 90.0208%; transform: translate3d(0px, 0px, 0px);"></div>
                                    <div class="tp-loader spinner3" style="display: none;">
                                        <div class="dot1"></div>
                                        <div class="dot2"></div>
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                    <div class="tp-leftarrow tparrows uranus"
                                         style="top: 50%; transform: matrix(1, 0, 0, 1, 0, 65); left: 0px; visibility: inherit; opacity: 1;"></div>
                                    <div class="tp-rightarrow tparrows uranus"
                                         style="top: 50%; transform: matrix(1, 0, 0, 1, -70, 65); left: 100%; visibility: inherit; opacity: 1;"></div>
                                    <div class="tp-bullets metis horizontal nav-pos-hor-center nav-pos-ver-bottom nav-dir-horizontal"
                                         style="width: 275px; height: 30px; top: 100%; transform: matrix(1, 0, 0, 1, -137, -50); left: 50%;">
                                        <div class="tp-bullet selected" style="left: 0px; top: 0px;"><span
                                                    class="tp-bullet-img-wrap">  <span class="tp-bullet-image"
                                                                                       style="background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2021/08/học-bong-25-web-1-1-100x50.jpg&quot;);"></span></span><span
                                                    class="tp-bullet-title">admissions</span></div>
                                        <div class="tp-bullet" style="left: 35px; top: 0px;"><span
                                                    class="tp-bullet-img-wrap">  <span class="tp-bullet-image"
                                                                                       style="background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2017/02/banner-RC41-100x50.jpg&quot;);"></span></span><span
                                                    class="tp-bullet-title">Slide</span></div>
                                        <div class="tp-bullet" style="left: 70px; top: 0px;"><span
                                                    class="tp-bullet-img-wrap">  <span class="tp-bullet-image"
                                                                                       style="background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2021/07/banner-web-TS-21-2-100x50.jpg&quot;);"></span></span><span
                                                    class="tp-bullet-title">admissions</span></div>
                                        <div class="tp-bullet" style="left: 105px; top: 0px;"><span
                                                    class="tp-bullet-img-wrap">  <span class="tp-bullet-image"
                                                                                       style="background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2021/07/banner-web-TS1-21-2-100x50.jpg&quot;);"></span></span><span
                                                    class="tp-bullet-title">admissions</span></div>
                                        <div class="tp-bullet" style="left: 140px; top: 0px;"><span
                                                    class="tp-bullet-img-wrap">  <span class="tp-bullet-image"
                                                                                       style="background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2021/07/bnner-web-TS2-21-1-100x50.jpg&quot;);"></span></span><span
                                                    class="tp-bullet-title">admissions</span></div>
                                        <div class="tp-bullet" style="left: 175px; top: 0px;"><span
                                                    class="tp-bullet-img-wrap">  <span class="tp-bullet-image"
                                                                                       style="background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2020/08/baner-thap-sang-uoc-mo-ttu-1-100x50.jpg&quot;);"></span></span><span
                                                    class="tp-bullet-title">TTU Lighting</span></div>
                                        <div class="tp-bullet" style="left: 210px; top: 0px;"><span
                                                    class="tp-bullet-img-wrap">  <span class="tp-bullet-image"
                                                                                       style="background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2020/08/Banner-TN-XM-100x50.jpg&quot;);"></span></span><span
                                                    class="tp-bullet-title">Slide</span></div>
                                        <div class="tp-bullet" style="left: 245px; top: 0px;"><span
                                                    class="tp-bullet-img-wrap">  <span class="tp-bullet-image"
                                                                                       style="background-image: url(&quot;https://ttu.edu.vn/wp-content/uploads/2020/08/banner-khám-phá1-100x50.jpg&quot;);"></span></span><span
                                                    class="tp-bullet-title">Slide</span></div>
                                    </div>
                                </div>
                                <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                    var htmlDivCss = ".tp-caption.NotGeneric-CallToAction,.NotGeneric-CallToAction{color:rgba(255,255,255,1.00);font-size:14px;line-height:14px;font-weight:500;font-style:normal;font-family:Raleway;text-decoration:none;background-color:rgba(0,0,0,0);border-color:rgba(255,255,255,0.50);border-style:solid;border-width:1px;border-radius:0px 0px 0px 0px;letter-spacing:3px}.tp-caption.NotGeneric-CallToAction:hover,.NotGeneric-CallToAction:hover{color:rgba(255,255,255,1.00);text-decoration:none;background-color:transparent;border-color:rgba(255,255,255,1.00);border-style:solid;border-width:1px;border-radius:0px 0px 0px 0px;cursor:pointer}.tp-caption.NotGeneric-CallToAction,.NotGeneric-CallToAction{color:rgba(255,255,255,1.00);font-size:14px;line-height:14px;font-weight:500;font-style:normal;font-family:Raleway;text-decoration:none;background-color:rgba(0,0,0,0);border-color:rgba(255,255,255,0.50);border-style:solid;border-width:1px;border-radius:0px 0px 0px 0px;letter-spacing:3px}.tp-caption.NotGeneric-CallToAction:hover,.NotGeneric-CallToAction:hover{color:rgba(255,255,255,1.00);text-decoration:none;background-color:transparent;border-color:rgba(255,255,255,1.00);border-style:solid;border-width:1px;border-radius:0px 0px 0px 0px;cursor:pointer}";
                                    if (htmlDiv) {
                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                    } else {
                                        var htmlDiv = document.createElement("div");
                                        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                    }
                                </script>
                                <script>
                                    var htmlDivCss = '	#rev_slider_5_1_wrapper .tp-loader.spinner3 div { background-color: #30f430 !important; } ';
                                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                    if (htmlDiv) {
                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                    } else {
                                        var htmlDiv = document.createElement('div');
                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                    }
                                </script>
                                <script>
                                    var htmlDivCss = unescape("%23rev_slider_5_1%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%2822%2C%2022%2C%2022%2C%200%29%3B%0A%20%7D%0A%20%23rev_slider_5_1%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_5_1%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A%23rev_slider_5_1%20.metis%20.tp-bullet%20%7B%20%0A%20%20%20%20opacity%3A1%3B%0A%20%20%20%20width%3A30px%3B%0A%20%20%20%20height%3A30px%3B%20%20%20%20%0A%20%20%20%20padding%3A3px%3B%0A%20%20%20%20background-color%3Argba%280%2C%200%2C%200%2C0.25%29%3B%0A%20%20%20%20margin%3A0px%3B%0A%20%20%20%20box-sizing%3Aborder-box%3B%0A%20%20%20%20transition%3Aall%200.3s%3B%0A%20%20%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20%20%20border-radius%3A50%25%3B%0A%20%20%7D%0A%0A%23rev_slider_5_1%20.metis%20.tp-bullet-image%20%7B%0A%0A%20%20%20border-radius%3A50%25%3B%0A%20%20%20display%3Ablock%3B%0A%20%20%20box-sizing%3Aborder-box%3B%0A%20%20%20position%3Arelative%3B%0A%20%20%20%20-webkit-box-shadow%3A%20inset%205px%205px%2010px%200px%20rgba%280%2C0%2C0%2C0.25%29%3B%0A%20%20-moz-box-shadow%3A%20inset%205px%205px%2010px%200px%20rgba%280%2C0%2C0%2C0.25%29%3B%0A%20%20box-shadow%3A%20inset%205px%205px%2010px%200px%20rgba%280%2C0%2C0%2C0.25%29%3B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20background-size%3Acover%3B%0A%20%20background-position%3Acenter%20center%3B%0A%20%7D%20%20%0A%23rev_slider_5_1%20.metis%20.tp-bullet-title%20%7B%20%0A%20%20%20%20%20position%3Aabsolute%3B%20%0A%20%20%20%20%20bottom%3A30px%3B%0A%20%20%20%20%20margin-bottom%3A10px%3B%0A%20%20%20%20%20display%3Ainline-block%3B%0A%20%20%20%20%20left%3A50%25%3B%0A%20%20%20%20%20background%3A%23000%3B%0A%20%20%20%20%20background%3Argba%280%2C%200%2C%200%2C0.75%29%3B%0A%20%20%20%20%20color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%20%20%20%20%20padding%3A10px%2030px%3B%0A%20%20%20%20%20border-radius%3A4px%3B%0A%20%20%20-webkit-border-radius%3A4px%3B%0A%20%20%20%20%20opacity%3A0%3B%0A%20%20%20%20%20%20transition%3Aall%200.3s%3B%0A%20%20%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20%20%20transform%3A%20translatez%280.001px%29%20translatex%28-50%25%29%20translatey%2814px%29%3B%0A%20%20%20%20transform-origin%3A50%25%20100%25%3B%0A%20%20%20%20-webkit-transform%3A%20translatez%280.001px%29%20translatex%28-50%25%29%20translatey%2814px%29%3B%0A%20%20%20%20-webkit-transform-origin%3A50%25%20100%25%3B%0A%20%20%20%20opacity%3A0%3B%0A%20%20%20%20white-space%3Anowrap%3B%0A%20%7D%0A%0A%23rev_slider_5_1%20.metis%20.tp-bullet%3Ahover%20.tp-bullet-title%20%7B%0A%20%20%20%20%20transform%3Arotatex%280deg%29%20translatex%28-50%25%29%3B%0A%20%20%20%20-webkit-transform%3Arotatex%280deg%29%20translatex%28-50%25%29%3B%0A%20%20%20%20opacity%3A1%3B%0A%7D%0A%0A%23rev_slider_5_1%20.metis%20.tp-bullet.selected%2C%0A%23rev_slider_5_1%20.metis%20.tp-bullet%3Ahover%20%20%7B%0Abackground%3A%20-moz-linear-gradient%28top%2C%20%20rgba%28255%2C%20255%2C%20255%2C%201%29%200%25%2C%20rgba%2867%2C%20193%2C%2082%2C%201%29%20100%25%29%3B%0Abackground%3A%20-webkit-gradient%28left%20top%2C%20left%20bottom%2C%20color-stop%280%25%2C%20rgba%28255%2C%20255%2C%20255%2C%201%29%29%2C%20color-stop%28100%25%2C%20rgba%2867%2C%20193%2C%2082%2C%201%29%29%29%3B%0Abackground%3A%20-webkit-linear-gradient%28top%2C%20rgba%28255%2C%20255%2C%20255%2C%201%29%200%25%2C%20rgba%2867%2C%20193%2C%2082%2C%201%29%20100%25%29%3B%0Abackground%3A%20-o-linear-gradient%28top%2C%20rgba%28255%2C%20255%2C%20255%2C%201%29%200%25%2C%20rgba%2867%2C%20193%2C%2082%2C%201%29%20100%25%29%3B%0Abackground%3A%20-ms-linear-gradient%28top%2C%20rgba%28255%2C%20255%2C%20255%2C%201%29%200%25%2C%20rgba%2867%2C%20193%2C%2082%2C%201%29%20100%25%29%3B%0Abackground%3A%20linear-gradient%28to%20bottom%2C%20rgba%28255%2C%20255%2C%20255%2C%201%29%200%25%2C%20rgba%2867%2C%20193%2C%2082%2C%201%29%20100%25%29%3B%0A%20%20%7D%0A%23rev_slider_5_1%20.metis%20.tp-bullet-title%3Aafter%20%7B%0A%20%20%20%20content%3A%22%20%22%3B%0A%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20left%3A50%25%3B%0A%20%20%20%20margin-left%3A-8px%3B%0A%20%20%20%20width%3A%200%3B%0A%20%20%20%20height%3A%200%3B%0A%20%20%20%20border-style%3A%20solid%3B%0A%20%20%20%20border-width%3A%208px%208px%200%208px%3B%0A%20%20%20%20border-color%3A%20rgba%280%2C%200%2C%200%2C0.75%29%20transparent%20transparent%20transparent%3B%0A%20%20%20%20bottom%3A-8px%3B%0A%20%20%20%7D%0A%0A%0A%0A%2F%2A%20VERTICAL%20RIGHT%20%2A%2F%0A%23rev_slider_5_1%20.metis.nav-dir-vertical.nav-pos-hor-right%20.tp-bullet-title%20%7B%20%0A%20%20%20margin-bottom%3A0px%3B%20top%3A50%25%3B%20right%3A30px%3B%20left%3Aauto%3B%20bottom%3Aauto%3B%20margin-right%3A10px%3B%20%20transform%3A%20translateX%28-10px%29%20translateY%28-50%25%29%3B-webkit-transform%3A%20translateX%28-10px%29%20translateY%28-50%25%29%3B%20%0A%7D%20%20%0A%23rev_slider_5_1%20.metis.nav-dir-vertical.nav-pos-hor-right%20.tp-bullet-title%3Aafter%20%7B%20%0A%20%20border-width%3A%2010px%200%2010px%2010px%3B%0A%20%20border-color%3A%20%20transparent%20transparent%20transparent%20rgba%280%2C%200%2C%200%2C0.75%29%20%3B%0A%20%20right%3A-10px%3B%0A%20%20left%3Aauto%3B%20%20%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A10px%3B%20%20%20%20%0A%7D%0A%0A%0A%23rev_slider_5_1%20.metis.nav-dir-vertical.nav-pos-hor-right%20.tp-bullet%3Ahover%20.tp-bullet-title%7B%0A%20%20%20transform%3AtranslateY%28-50%25%29%20translateX%280px%29%3B%0A%20%20-webkit-transform%3AtranslateY%28-50%25%29%20translateX%280px%29%3B%0A%7D%0A%0A%2F%2A%20VERTICAL%20LEFT%20%26%26%20CENTER%2A%2F%0A%23rev_slider_5_1%20.metis.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%2C%0A%23rev_slider_5_1%20.metis.nav-dir-vertical.nav-pos-hor-center%20.tp-bullet-title%20%7B%20%0A%20%20%20margin-bottom%3A0px%3B%20top%3A50%25%3B%20left%3A30px%3B%20right%3Aauto%3B%20bottom%3Aauto%3B%20margin-left%3A10px%3B%20%20transform%3A%20translateX%2810px%29%20translateY%28-50%25%29%3B-webkit-transform%3A%20translateX%2810px%29%20translateY%28-50%25%29%3B%20%0A%7D%20%20%0A%23rev_slider_5_1%20.metis.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%3Aafter%2C%0A%23rev_slider_5_1%20.metis.nav-dir-vertical.nav-pos-hor-center%20.tp-bullet-title%3Aafter%20%7B%20%0A%20%20border-width%3A%2010px%2010px%2010px%200%3B%0A%20%20border-color%3A%20%20transparent%20rgba%280%2C%200%2C%200%2C0.75%29%20%20transparent%20transparent%20%3B%0A%20%20left%3A-2px%3B%0A%20%20right%3Aauto%3B%20%20%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A10px%3B%20%20%20%20%0A%7D%0A%0A%0A%23rev_slider_5_1%20.metis.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet%3Ahover%20.tp-bullet-title%2C%0A%23rev_slider_5_1%20.metis.nav-dir-vertical.nav-pos-hor-center%20.tp-bullet%3Ahover%20.tp-bullet-title%7B%0A%20%20%20transform%3AtranslateY%28-50%25%29%20translateX%280px%29%3B%0A%20%20-webkit-transform%3AtranslateY%28-50%25%29%20translateX%280px%29%3B%0A%7D%0A%0A%0A%2F%2A%20HORIZONTAL%20TOP%20%2A%2F%0A%23rev_slider_5_1%20.metis.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%20%7B%20%0A%20%20%20margin-bottom%3A0px%3B%20top%3A30px%3B%20left%3A50%25%3B%20bottom%3Aauto%3B%20margin-top%3A10px%3B%20right%3Aauto%3B%20transform%3A%20translateX%28-50%25%29%20translateY%2810px%29%3B-webkit-transform%3A%20translateX%28-50%25%29%20translateY%2810px%29%3B%20%0A%7D%20%20%0A%23rev_slider_5_1%20.metis.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%3Aafter%20%7B%20%0A%20%20border-width%3A%200%2010px%2010px%2010px%3B%0A%20%20border-color%3A%20%20transparent%20transparent%20rgba%280%2C%200%2C%200%2C0.75%29%20transparent%3B%0A%20%20right%3Aauto%3B%0A%20%20left%3A50%25%3B%0A%20%20margin-left%3A-10px%3B%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A-10px%3B%0A%20%20%20%20%0A%7D%0A%0A%0A%23rev_slider_5_1%20.metis.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet%3Ahover%20.tp-bullet-title%7B%0A%20%20%20transform%3AtranslateX%28-50%25%29%20translatey%280px%29%3B%0A%20%20-webkit-transform%3AtranslateX%28-50%25%29%20translatey%280px%29%3B%0A%7D%0A%0A%0A");
                                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                    if (htmlDiv) {
                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                    } else {
                                        var htmlDiv = document.createElement('div');
                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                    }
                                </script>
                            </div><!-- END REVOLUTION SLIDER --></div>
                        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span>
                        </div>
                        <div class="td_block_wrap td_block_trending_now td_uid_15_611e3bbd5ed1f_rand td-pb-border-top td_block_template_15"
                             data-td-block-uid="td_uid_15_611e3bbd5ed1f">
                            <div id="td_uid_15_611e3bbd5ed1f" class="td_block_inner">

                                <div class="td-block-row">
                                    <div class="td-trending-now-wrapper" id="td_uid_15_611e3bbd5ed1f" data-start="">
                                        <div class="td-trending-now-title">Khuynh hướng</div>
                                        <div class="td-trending-now-display-area">
                                            <div class="td_module_trending_now td-meta-info-hide td-trending-now-post-0 td-trending-now-post"
                                                 style="opacity: 0; z-index: 0;">

                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/chuong-trinh-can-thiep-mach-vanh-toi-uu/"
                                                            rel="bookmark"
                                                            title="Chương trình can thiệp mạch vành tối ưu">Chương trình
                                                        can thiệp mạch vành tối ưu</a></h3>
                                            </div>


                                            <div class="td_module_trending_now td-meta-info-hide td-trending-now-post-1 td-trending-now-post"
                                                 style="opacity: 0; z-index: 0;">

                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/phong-van-cua-giai-thuong-aces-giai-thuong-doanh-nghiep-xuat-sac-ben-vung-chau-a-voi-ba-dang-thi-hoang-yen/"
                                                            rel="bookmark"
                                                            title="Phỏng vấn Bà Đặng Thị Hoàng Yến (a.k.a Maya Dangelas), Ứng viên Giải thưởng cho Doanh nghiệp Xuất sắc &amp; Bền vững Châu Á (ACES).">Phỏng
                                                        vấn Bà Đặng Thị Hoàng Yến (a.k.a Maya Dangelas), Ứng viên Giải
                                                        thưởng cho Doanh nghiệp Xuất sắc &amp; Bền vững Châu Á...</a>
                                                </h3>
                                            </div>


                                            <div class="td_module_trending_now td-meta-info-hide td-trending-now-post-2 td-trending-now-post"
                                                 style="opacity: 0; z-index: 0;">

                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/doanh-nhan-dang-thi-hoang-yen-chia-se-bi-quyet-kinh-doanh-o-my/"
                                                            rel="bookmark"
                                                            title="Doanh nhân Đặng Thị Hoàng Yến (A.k.a Maya Dangelas) chia sẻ bí quyết kinh doanh ở Mỹ">Doanh
                                                        nhân Đặng Thị Hoàng Yến (A.k.a Maya Dangelas) chia sẻ bí quyết
                                                        kinh doanh ở Mỹ</a></h3>
                                            </div>


                                            <div class="td_module_trending_now td-meta-info-hide td-trending-now-post-3 td-trending-now-post td_animated_xlong td_fadeOutLeft"
                                                 style="opacity: 0; z-index: 0;">

                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/chu-tich-dang-thi-hoang-yen-nguoi-khai-sang-tap-doan-tan-tao/"
                                                            rel="bookmark"
                                                            title="Chủ Tịch Đặng Thị Hoàng Yến (A.k.a Maya Dangelas) người khai sáng tập đoàn Tân Tạo">Chủ
                                                        Tịch Đặng Thị Hoàng Yến (A.k.a Maya Dangelas) người khai sáng
                                                        tập đoàn Tân Tạo</a></h3>
                                            </div>


                                            <div class="td_module_trending_now td-meta-info-hide td-trending-now-post-4 td-trending-now-post td_animated_xlong td_fadeInRight"
                                                 style="opacity: 1; z-index: 1;">

                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/alumni-connection-talk-2-su-kien-thu-hut-sinh-vien-tan-tao/"
                                                            rel="bookmark"
                                                            title="Alumni Connection Talk 2 – Sự Kiện Thu Hút Sinh Viên Tân Tạo">Alumni
                                                        Connection Talk 2 – Sự Kiện Thu Hút Sinh Viên Tân Tạo</a></h3>
                                            </div>

                                        </div>
                                        <div class="td-next-prev-wrap"><a href="https://ttu.edu.vn/#"
                                                                          class="td_ajax-prev-pagex td-trending-now-nav-left"
                                                                          data-block-id="td_uid_15_611e3bbd5ed1f"
                                                                          data-moving="left" data-control-start=""><i
                                                        class="td-icon-menu-left"></i></a><a href="https://ttu.edu.vn/#"
                                                                                             class="td_ajax-next-pagex td-trending-now-nav-right"
                                                                                             data-block-id="td_uid_15_611e3bbd5ed1f"
                                                                                             data-moving="right"
                                                                                             data-control-start=""><i
                                                        class="td-icon-menu-right"></i></a></div>
                                    </div>
                                </div><!--./row-fluid--></div>
                        </div> <!-- ./block --></div>
                </div>
            </div>
            <div class="vc_row wpb_row td-pb-row">
                <div class="wpb_column vc_column_container td-pb-span6">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                <figure class="wpb_wrapper vc_figure">
                                    <a href="http://ttu.edu.vn/category/hoa-trang-nguyen/" target="_blank"
                                       class="vc_single_image-wrapper vc_box_outline  vc_box_border_grey"><img
                                                width="2467" height="400"
                                                src="./frontend/theme/banner-smallvn16-1.jpg"
                                                class="vc_single_image-img attachment-full" alt=""
                                                srcset="https://ttu.edu.vn/wp-content/uploads/2018/09/banner-smallvn16-1.jpg 2467w, https://ttu.edu.vn/wp-content/uploads/2018/09/banner-smallvn16-1-300x49.jpg 300w, https://ttu.edu.vn/wp-content/uploads/2018/09/banner-smallvn16-1-768x125.jpg 768w, https://ttu.edu.vn/wp-content/uploads/2018/09/banner-smallvn16-1-1024x166.jpg 1024w, https://ttu.edu.vn/wp-content/uploads/2018/09/banner-smallvn16-1-696x113.jpg 696w, https://ttu.edu.vn/wp-content/uploads/2018/09/banner-smallvn16-1-1068x173.jpg 1068w"
                                                sizes="(max-width: 2467px) 100vw, 2467px"></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container td-pb-span6">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                <figure class="wpb_wrapper vc_figure">
                                    <a href="https://tuyensinh.ttu.edu.vn/dang-ky/" target="_blank"
                                       class="vc_single_image-wrapper vc_box_outline  vc_box_border_grey"><img
                                                width="1233" height="200"
                                                src="./frontend/theme/banner-small-TS2019-VN-1.jpg"
                                                class="vc_single_image-img attachment-full" alt=""
                                                srcset="https://ttu.edu.vn/wp-content/uploads/2019/05/banner-small-TS2019-VN-1.jpg 1233w, https://ttu.edu.vn/wp-content/uploads/2019/05/banner-small-TS2019-VN-1-300x49.jpg 300w, https://ttu.edu.vn/wp-content/uploads/2019/05/banner-small-TS2019-VN-1-768x125.jpg 768w, https://ttu.edu.vn/wp-content/uploads/2019/05/banner-small-TS2019-VN-1-1024x166.jpg 1024w, https://ttu.edu.vn/wp-content/uploads/2019/05/banner-small-TS2019-VN-1-696x113.jpg 696w, https://ttu.edu.vn/wp-content/uploads/2019/05/banner-small-TS2019-VN-1-1068x173.jpg 1068w"
                                                sizes="(max-width: 1233px) 100vw, 1233px"></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row td-pb-row">
                <div class="wpb_column vc_column_container td-pb-span12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                <figure class="wpb_wrapper vc_figure">
                                    <a href="http://lecturer.ttu.edu.vn/" target="_blank"
                                       class="vc_single_image-wrapper vc_box_outline  vc_box_border_grey"><img
                                                width="1054" height="172"
                                                src="./frontend/theme/Banner-Talkshow-ct-1.jpg"
                                                class="vc_single_image-img attachment-full" alt=""
                                                srcset="https://ttu.edu.vn/wp-content/uploads/2021/03/Banner-Talkshow-ct-1.jpg 1054w, https://ttu.edu.vn/wp-content/uploads/2021/03/Banner-Talkshow-ct-1-300x49.jpg 300w, https://ttu.edu.vn/wp-content/uploads/2021/03/Banner-Talkshow-ct-1-768x125.jpg 768w, https://ttu.edu.vn/wp-content/uploads/2021/03/Banner-Talkshow-ct-1-1024x167.jpg 1024w, https://ttu.edu.vn/wp-content/uploads/2021/03/Banner-Talkshow-ct-1-696x114.jpg 696w"
                                                sizes="(max-width: 1054px) 100vw, 1054px"></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row td-pb-row">
                <div class="wpb_column vc_column_container td-pb-span4">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="td_block_wrap td_block_1 td_uid_16_611e3bbd64991_rand td-pb-border-top td_block_template_15"
                                 data-td-block-uid="td_uid_16_611e3bbd64991">
                                <div class="td-block-title-wrap"><h4 class="td-block-title"><a
                                                href="http://ttu.edu.vn/category/tin-tuc-su-kien/?lang=vi">TIN TỨC &amp;
                                            SỰ KIỆN</a></h4></div>
                                <div id="td_uid_16_611e3bbd64991" class="td_block_inner">

                                    <div class="td-block-span12">

                                        <div class="td_module_4 td_module_wrap td-animation-stack td-meta-info-hide">
                                            <div class="td-module-image">
                                                <div class="td-module-thumb"><a
                                                            href="https://ttu.edu.vn/hoi-nghi-tim-mach-mien-trung-tay-nguyen-mo-rong-lan-thu-xi/"
                                                            rel="bookmark"
                                                            title="Hội Nghị Tim mạch Miền Trung – Tây Nguyên mở rộng lần thứ XI"><img
                                                                width="324" height="235" class="entry-thumb"
                                                                src="./frontend/theme/06-GS.-Thạch-Nguyễn-02-324x235.png"
                                                                alt=""
                                                                title="Hội Nghị Tim mạch Miền Trung – Tây Nguyên mở rộng lần thứ XI"></a>
                                                </div>
                                            </div>

                                            <h3 class="entry-title td-module-title"><a
                                                        href="https://ttu.edu.vn/hoi-nghi-tim-mach-mien-trung-tay-nguyen-mo-rong-lan-thu-xi/"
                                                        rel="bookmark"
                                                        title="Hội Nghị Tim mạch Miền Trung – Tây Nguyên mở rộng lần thứ XI">Hội
                                                    Nghị Tim mạch Miền Trung – Tây Nguyên mở rộng...</a></h3>
                                            <div class="td-module-meta-info">
                                            </div>

                                            <div class="td-excerpt">
                                                Ngày 7 - 8/8/2021, Hội Tim mạch miền Trung, Trường Đại học Y – Dược Huế,
                                                Bệnh viện Đà Nẵng, Hội Tim mạch Thừa...
                                            </div>


                                        </div>


                                    </div> <!-- ./td-block-span12 --></div>
                            </div> <!-- ./block -->
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <hr>
                                    <p style="text-align: right;"><a
                                                href="https://ttu.edu.vn/category/tin-tuc-su-kien/">Khám phá thêm Tin
                                            tức TTU &gt;</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container td-pb-span4">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="td_block_wrap td_block_9 td_uid_17_611e3bbd679e6_rand td_with_ajax_pagination td-pb-border-top td_block_template_15"
                                 data-td-block-uid="td_uid_17_611e3bbd679e6">
                                <div class="td-block-title-wrap"><h4 class="td-block-title"><a
                                                href="http://ttu.edu.vn/dao-tao/thong-bao-chung/">THÔNG BÁO CHUNG</a>
                                    </h4></div>
                                <div id="td_uid_17_611e3bbd679e6" class="td_block_inner">

                                    <div class="td-block-span12">

                                        <div class="td_module_8 td_module_wrap td-meta-info-hide">

                                            <div class="item-details">
                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/thong-bao-thu-hoc-phi-hoc-ky-i-he-dao-tao-dai-hoc-chinh-quy-nam-hoc-2021-2022/"
                                                            rel="bookmark"
                                                            title="Thông báo thu học phí học kỳ I, hệ Đào tạo Đại học chính quy năm học 2021-2022">Thông
                                                        báo thu học phí học kỳ I, hệ Đào tạo Đại học chính...</a></h3>
                                                <div class="td-module-meta-info">
                                                </div>
                                            </div>


                                        </div>


                                    </div> <!-- ./td-block-span12 -->

                                    <div class="td-block-span12">

                                        <div class="td_module_8 td_module_wrap td-meta-info-hide">

                                            <div class="item-details">
                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/thong-bao-tuyen-dung-truong-phong-truyen-thong-tuyen-sinh/"
                                                            rel="bookmark"
                                                            title="Thông báo tuyển dụng trưởng phòng Truyền thông – Tuyển sinh">Thông
                                                        báo tuyển dụng trưởng phòng Truyền thông – Tuyển sinh</a></h3>
                                                <div class="td-module-meta-info">
                                                </div>
                                            </div>


                                        </div>


                                    </div> <!-- ./td-block-span12 -->

                                    <div class="td-block-span12">

                                        <div class="td_module_8 td_module_wrap td-meta-info-hide">

                                            <div class="item-details">
                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/thong-bao-tuyen-dung-hieu-truong-truong-trung-hoc-pho-thong-nang-khieu-thuoc-dai-hoc-tan-tao-tts/"
                                                            rel="bookmark"
                                                            title="Thông báo tuyển dụng hiệu trưởng Trường Trung học Phổ thông Năng khiếu thuộc Đại học Tân Tạo (TTS)">Thông
                                                        báo tuyển dụng hiệu trưởng Trường Trung học Phổ thông Năng khiếu
                                                        thuộc...</a></h3>
                                                <div class="td-module-meta-info">
                                                </div>
                                            </div>


                                        </div>


                                    </div> <!-- ./td-block-span12 -->

                                    <div class="td-block-span12">

                                        <div class="td_module_8 td_module_wrap td-meta-info-hide">

                                            <div class="item-details">
                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/thong-bao-ve-viec-dang-ky-de-tai-nckh-cap-co-so-nam-2021/"
                                                            rel="bookmark"
                                                            title="Thông báo về việc đăng ký đề tài NCKH cấp cơ sở năm 2021.">Thông
                                                        báo về việc đăng ký đề tài NCKH cấp cơ sở năm 2021.</a></h3>
                                                <div class="td-module-meta-info">
                                                </div>
                                            </div>


                                        </div>


                                    </div> <!-- ./td-block-span12 -->

                                    <div class="td-block-span12">

                                        <div class="td_module_8 td_module_wrap td-meta-info-hide">

                                            <div class="item-details">
                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/thong-bao-tuyen-dung-chuyen-vien-kiem-dinh-chat-luong-giao-duc/"
                                                            rel="bookmark"
                                                            title="Thông báo tuyển dụng chuyên viên Kiểm định Chất lượng Giáo dục">Thông
                                                        báo tuyển dụng chuyên viên Kiểm định Chất lượng Giáo dục</a>
                                                </h3>
                                                <div class="td-module-meta-info">
                                                </div>
                                            </div>


                                        </div>


                                    </div> <!-- ./td-block-span12 --></div>
                                <div class="td-next-prev-wrap"><a href="https://ttu.edu.vn/#"
                                                                  class="td-ajax-prev-page ajax-page-disabled"
                                                                  id="prev-page-td_uid_17_611e3bbd679e6"
                                                                  data-td_block_id="td_uid_17_611e3bbd679e6"><i
                                                class="td-icon-font td-icon-menu-left"></i></a><a
                                            href="https://ttu.edu.vn/#" class="td-ajax-next-page"
                                            id="next-page-td_uid_17_611e3bbd679e6"
                                            data-td_block_id="td_uid_17_611e3bbd679e6"><i
                                                class="td-icon-font td-icon-menu-right"></i></a></div>
                            </div> <!-- ./block --></div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container td-pb-span4">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="wpb_widgetised_column wpb_content_element">
                                <div class="wpb_wrapper">

                                    <aside class="td_block_template_15 widget widget_text_icl"><h4
                                                class="td-block-title"><span> THÔNG TIN VỀ TUYỂN SINH</span></h4>
                                        <div class="textwidget">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><a
                                                        href="https://tuyensinh.ttu.edu.vn/ttts/" target="_blank"><img
                                                            width="742" height="486"
                                                            src="./frontend/theme/BT_TS_VN_21.jpg"
                                                            class="vc_single_image-img attachment-full" <="" a=""></a>
                                            </div>
                                            <a href="https://tuyensinh.ttu.edu.vn/ttts/" target="_blank">
                                                <div class="vc_empty_space" style="height: 4px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                            </a>
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><a
                                                        href="https://tuyensinh.ttu.edu.vn/ttts/" target="_blank"></a><a
                                                        href="http://ttu.edu.vn/chon-truong-u-chuyen-nho-dh-tan-tao-duong-di-den-vinh-quang/"
                                                        target="_blank"><img width="742" height="486"
                                                                             src="./frontend/theme/BT_TS_VN_9.jpg"
                                                                             class="vc_single_image-img attachment-full"
                                                    <="" a=""></a></div>
                                            <a href="http://ttu.edu.vn/chon-truong-u-chuyen-nho-dh-tan-tao-duong-di-den-vinh-quang/"
                                               target="_blank">
                                                <div class="vc_empty_space" style="height: 4px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                            </a>
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><a
                                                        href="http://ttu.edu.vn/chon-truong-u-chuyen-nho-dh-tan-tao-duong-di-den-vinh-quang/"
                                                        target="_blank"></a><a
                                                        href="https://tuyensinh.ttu.edu.vn/hdnhs/" target="_blank"><img
                                                            width="742" height="486"
                                                            src="./frontend/theme/BT_TS_VN_7.jpg"
                                                            class="vc_single_image-img attachment-full" <="" a=""></a>
                                            </div>
                                            <a href="https://tuyensinh.ttu.edu.vn/hdnhs/" target="_blank">
                                                <div class="vc_empty_space" style="height: 4px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                            </a>
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><a
                                                        href="https://tuyensinh.ttu.edu.vn/hdnhs/"
                                                        target="_blank"></a><a href="http://tuyensinh.ttu.edu.vn/#ctdt"
                                                                               target="_blank"><img width="742"
                                                                                                    height="486"
                                                                                                    src="./frontend/theme/BT_TS_VN_2.jpg"
                                                                                                    class="vc_single_image-img attachment-full"
                                                    <="" a=""></a></div>
                                            <a href="http://tuyensinh.ttu.edu.vn/#ctdt" target="_blank">
                                                <div class="vc_empty_space" style="height: 4px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                            </a>
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><a
                                                        href="http://tuyensinh.ttu.edu.vn/#ctdt" target="_blank"></a><a
                                                        href="https://drive.google.com/file/d/18H81DZrUhbeWz4LP46nIh7Q-vyRnN4Lx/view?usp=sharing"
                                                        target="_blank"><img width="742" height="486"
                                                                             src="./frontend/theme/BT_TS_VN_3.jpg"
                                                                             class="vc_single_image-img attachment-full"
                                                    <="" a=""></a></div>
                                            <a href="https://drive.google.com/file/d/18H81DZrUhbeWz4LP46nIh7Q-vyRnN4Lx/view?usp=sharing"
                                               target="_blank">
                                                <div class="vc_empty_space" style="height: 4px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                            </a>
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><a
                                                        href="https://drive.google.com/file/d/18H81DZrUhbeWz4LP46nIh7Q-vyRnN4Lx/view?usp=sharing"
                                                        target="_blank"></a><a href="https://tuyensinh.ttu.edu.vn/cshb/"
                                                                               target="_blank"><img width="742"
                                                                                                    height="486"
                                                                                                    src="./frontend/theme/BT_TS_VN_4.jpg"
                                                                                                    class="vc_single_image-img attachment-full"
                                                    <="" a=""></a></div>
                                            <a href="https://tuyensinh.ttu.edu.vn/cshb/" target="_blank">
                                                <div class="vc_empty_space" style="height: 4px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                            </a>
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><a
                                                        href="https://tuyensinh.ttu.edu.vn/cshb/" target="_blank"></a><a
                                                        href="https://tuyensinh.ttu.edu.vn/" target="_blank"><img
                                                            width="742" height="486"
                                                            src="./frontend/theme/BT_TS_VN_8.jpg"
                                                            class="vc_single_image-img attachment-full" <="" a=""></a>
                                            </div>
                                            <a href="https://tuyensinh.ttu.edu.vn/" target="_blank">
                                                <div class="vc_empty_space" style="height: 4px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                            </a></div>
                                        <a href="https://tuyensinh.ttu.edu.vn/" target="_blank">
                                        </a></aside>
                                    <a href="https://tuyensinh.ttu.edu.vn/" target="_blank">
                                    </a></div>
                                <a href="https://tuyensinh.ttu.edu.vn/" target="_blank">
                                </a></div>
                            <a href="https://tuyensinh.ttu.edu.vn/" target="_blank">
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row td-pb-row">
                <div class="wpb_column vc_column_container td-pb-span12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="td_block_wrap td_block_image_box td_uid_18_611e3bbd6c63c_rand td-pb-border-top td_block_template_15"
                                 data-td-block-uid="td_uid_18_611e3bbd6c63c">
                                <div class="td-block-title-wrap"></div>
                                <div class="td-image-box-row td-small-image"
                                     style="margin-left: -px; margin-right: -px;">
                                    <div class="td-image-box-span" style="padding-left: px; padding-right: px;">
                                        <div class="td-custom">
                                            <div class="td-custom-image"><a
                                                        style="background-image: url(&#39;https://ttu.edu.vn/wp-content/uploads/2017/03/library.jpg&#39;); height: 140px"
                                                        href="http://lib.ttu.edu.vn/" target="_blank" rel="bookmark"
                                                        title="Thư viện"></a></div>
                                            <div class="td-custom-title"><h3 class="entry-title"><a
                                                            href="http://lib.ttu.edu.vn/">Thư viện</a></h3></div>
                                        </div>
                                    </div>
                                    <div class="td-image-box-span" style="padding-left: px; padding-right: px;">
                                        <div class="td-custom">
                                            <div class="td-custom-image"><a
                                                        style="background-image: url(&#39;https://ttu.edu.vn/wp-content/uploads/2017/03/calender.jpg&#39;); height: 140px"
                                                        href="http://ttu.edu.vn/dao-tao/lich-dao-tao/?lang=vi"
                                                        rel="bookmark" title="Lịch đào tạo"></a></div>
                                            <div class="td-custom-title"><h3 class="entry-title"><a
                                                            href="http://ttu.edu.vn/dao-tao/lich-dao-tao/?lang=vi">Lịch
                                                        đào tạo</a></h3></div>
                                        </div>
                                    </div>
                                    <div class="td-image-box-span" style="padding-left: px; padding-right: px;">
                                        <div class="td-custom">
                                            <div class="td-custom-image"><a
                                                        style="background-image: url(&#39;https://ttu.edu.vn/wp-content/uploads/2017/03/financial-aid.jpg&#39;); height: 140px"
                                                        href="http://ttu.edu.vn/tuyen-sinh/ho-tro-tai-chinh/?lang=vi"
                                                        rel="bookmark" title="Hỗ trợ tài chính"></a></div>
                                            <div class="td-custom-title"><h3 class="entry-title"><a
                                                            href="http://ttu.edu.vn/tuyen-sinh/ho-tro-tai-chinh/?lang=vi">Hỗ
                                                        trợ tài chính</a></h3></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row td-pb-row td-ss-row">
                <div class="wpb_column vc_column_container td-pb-span8">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="clearfix"></div>
                            <div class="td_block_wrap td_block_15 td_uid_19_611e3bbd703a4_rand td_with_ajax_pagination td-pb-border-top td_block_template_15"
                                 data-td-block-uid="td_uid_19_611e3bbd703a4">
                                <div class="td-block-title-wrap"><h4 class="td-block-title"><a
                                                href="http://ttu.edu.vn/tuyen-sinh/?lang=vi">TUYỂN SINH</a></h4></div>
                                <div id="td_uid_19_611e3bbd703a4" class="td_block_inner td-column-2">

                                    <div class="td-block-row">

                                        <div class="td-block-span4">

                                            <div class="td_module_mx4 td_module_wrap td-animation-stack td-meta-info-hide">
                                                <div class="td-module-image">
                                                    <div class="td-module-thumb"><a
                                                                href="https://ttu.edu.vn/thong-tin-tuyen-sinh-dai-hoc-2021/"
                                                                rel="bookmark"
                                                                title="Thông tin tuyển sinh Đại Học 2021"><img
                                                                    width="218" height="150" class="entry-thumb"
                                                                    src="./frontend/theme/xet-tuyen-218x150.jpg"
                                                                    srcset="https://ttu.edu.vn/wp-content/uploads/2021/07/xet-tuyen-218x150.jpg 218w, https://ttu.edu.vn/wp-content/uploads/2021/07/xet-tuyen-100x70.jpg 100w, https://ttu.edu.vn/wp-content/uploads/2021/07/xet-tuyen-700x486.jpg 700w"
                                                                    sizes="(max-width: 218px) 100vw, 218px" alt=""
                                                                    title="Thông tin tuyển sinh Đại Học 2021"></a></div>
                                                </div>

                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/thong-tin-tuyen-sinh-dai-hoc-2021/"
                                                            rel="bookmark" title="Thông tin tuyển sinh Đại Học 2021">Thông
                                                        tin tuyển sinh Đại Học 2021</a></h3>
                                            </div>


                                        </div> <!-- ./td-block-span4 -->

                                        <div class="td-block-span4">

                                            <div class="td_module_mx4 td_module_wrap td-animation-stack td-meta-info-hide">
                                                <div class="td-module-image">
                                                    <div class="td-module-thumb"><a
                                                                href="https://ttu.edu.vn/chinh-sach-hoc-phi-va-hoc-bong-nam-hoc-2021/"
                                                                rel="bookmark"
                                                                title="Chính sách học phí và học bổng năm học 2021"><img
                                                                    width="218" height="150" class="entry-thumb"
                                                                    src="./frontend/theme/hoc-bong-25-218x150.jpg"
                                                                    srcset="https://ttu.edu.vn/wp-content/uploads/2021/07/hoc-bong-25-218x150.jpg 218w, https://ttu.edu.vn/wp-content/uploads/2021/07/hoc-bong-25-100x70.jpg 100w, https://ttu.edu.vn/wp-content/uploads/2021/07/hoc-bong-25-700x486.jpg 700w"
                                                                    sizes="(max-width: 218px) 100vw, 218px" alt=""
                                                                    title="Chính sách học phí và học bổng năm học 2021"></a>
                                                    </div>
                                                </div>

                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/chinh-sach-hoc-phi-va-hoc-bong-nam-hoc-2021/"
                                                            rel="bookmark"
                                                            title="Chính sách học phí và học bổng năm học 2021">Chính
                                                        sách học phí và học bổng năm học 2021</a></h3>
                                            </div>


                                        </div> <!-- ./td-block-span4 -->

                                        <div class="td-block-span4">

                                            <div class="td_module_mx4 td_module_wrap td-animation-stack td-meta-info-hide">
                                                <div class="td-module-image">
                                                    <div class="td-module-thumb"><a
                                                                href="https://ttu.edu.vn/huong-dan-nop-ho-so-2/"
                                                                rel="bookmark" title="Hướng dẫn nộp hồ sơ 2021"><img
                                                                    width="218" height="150" class="entry-thumb"
                                                                    src="./frontend/theme/8-nghanh-218x150.jpg"
                                                                    srcset="https://ttu.edu.vn/wp-content/uploads/2021/07/8-nghanh-218x150.jpg 218w, https://ttu.edu.vn/wp-content/uploads/2021/07/8-nghanh-100x70.jpg 100w, https://ttu.edu.vn/wp-content/uploads/2021/07/8-nghanh-700x486.jpg 700w"
                                                                    sizes="(max-width: 218px) 100vw, 218px" alt=""
                                                                    title="Hướng dẫn nộp hồ sơ 2021"></a></div>
                                                </div>

                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/huong-dan-nop-ho-so-2/"
                                                            rel="bookmark" title="Hướng dẫn nộp hồ sơ 2021">Hướng dẫn
                                                        nộp hồ sơ 2021</a></h3>
                                            </div>


                                        </div> <!-- ./td-block-span4 --></div><!--./row-fluid--></div>
                                <div class="td-next-prev-wrap"><a href="https://ttu.edu.vn/#"
                                                                  class="td-ajax-prev-page ajax-page-disabled"
                                                                  id="prev-page-td_uid_19_611e3bbd703a4"
                                                                  data-td_block_id="td_uid_19_611e3bbd703a4"><i
                                                class="td-icon-font td-icon-menu-left"></i></a><a
                                            href="https://ttu.edu.vn/#" class="td-ajax-next-page"
                                            id="next-page-td_uid_19_611e3bbd703a4"
                                            data-td_block_id="td_uid_19_611e3bbd703a4"><i
                                                class="td-icon-font td-icon-menu-right"></i></a></div>
                            </div> <!-- ./block -->
                            <div class="clearfix"></div>
                            <div class="td_block_wrap td_block_15 td_uid_20_611e3bbd74a95_rand td_with_ajax_pagination td-pb-border-top td_block_template_15"
                                 data-td-block-uid="td_uid_20_611e3bbd74a95">
                                <div class="td-block-title-wrap"><h4 class="td-block-title"><a
                                                href="http://ttu.edu.vn/nghiencuu/?lang=vi">NGHIÊN CỨU</a></h4></div>
                                <div id="td_uid_20_611e3bbd74a95" class="td_block_inner td-column-2">

                                    <div class="td-block-row">

                                        <div class="td-block-span4">

                                            <div class="td_module_mx4 td_module_wrap td-animation-stack td-meta-info-hide">
                                                <div class="td-module-image">
                                                    <div class="td-module-thumb"><a
                                                                href="https://ttu.edu.vn/chuong-trinh-hoi-thao-tri-tue-thong-minh-nhan-tao-trong-y-hoc-va-tim-mach/"
                                                                rel="bookmark"
                                                                title="Chương trình hội thảo trí tuệ thông minh nhân tạo trong Y học và Tim mạch"><img
                                                                    width="218" height="150" class="entry-thumb"
                                                                    src="./frontend/theme/Talarico-01-218x150.jpg"
                                                                    srcset="https://ttu.edu.vn/wp-content/uploads/2019/03/Talarico-01-218x150.jpg 218w, https://ttu.edu.vn/wp-content/uploads/2019/03/Talarico-01-100x70.jpg 100w"
                                                                    sizes="(max-width: 218px) 100vw, 218px" alt=""
                                                                    title="Chương trình hội thảo trí tuệ thông minh nhân tạo trong Y học và Tim mạch"></a>
                                                    </div>
                                                </div>

                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/chuong-trinh-hoi-thao-tri-tue-thong-minh-nhan-tao-trong-y-hoc-va-tim-mach/"
                                                            rel="bookmark"
                                                            title="Chương trình hội thảo trí tuệ thông minh nhân tạo trong Y học và Tim mạch">Chương
                                                        trình hội thảo trí tuệ thông minh nhân tạo trong...</a></h3>
                                            </div>


                                        </div> <!-- ./td-block-span4 -->

                                        <div class="td-block-span4">

                                            <div class="td_module_mx4 td_module_wrap td-animation-stack td-meta-info-hide">
                                                <div class="td-module-image">
                                                    <div class="td-module-thumb"><a
                                                                href="https://ttu.edu.vn/su-can-thiet-cua-cai-cach-giao-duc-dai-hoc-viet-nam-de-phu-hop-voi-nhu-cau-cua-nha-tuyen-dung/"
                                                                rel="bookmark"
                                                                title="Sự cần thiết của cải cách giáo dục ĐH Việt Nam để phù hợp với nhu cầu của nhà tuyển dụng"><img
                                                                    width="218" height="150" class="entry-thumb"
                                                                    src="./frontend/theme/mdY1-1-218x150.jpg"
                                                                    srcset="https://ttu.edu.vn/wp-content/uploads/2019/05/mdY1-1-218x150.jpg 218w, https://ttu.edu.vn/wp-content/uploads/2019/05/mdY1-1-100x70.jpg 100w"
                                                                    sizes="(max-width: 218px) 100vw, 218px" alt=""
                                                                    title="Sự cần thiết của cải cách giáo dục ĐH Việt Nam để phù hợp với nhu cầu của nhà tuyển dụng"></a>
                                                    </div>
                                                </div>

                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/su-can-thiet-cua-cai-cach-giao-duc-dai-hoc-viet-nam-de-phu-hop-voi-nhu-cau-cua-nha-tuyen-dung/"
                                                            rel="bookmark"
                                                            title="Sự cần thiết của cải cách giáo dục ĐH Việt Nam để phù hợp với nhu cầu của nhà tuyển dụng">Sự
                                                        cần thiết của cải cách giáo dục ĐH Việt Nam...</a></h3>
                                            </div>


                                        </div> <!-- ./td-block-span4 -->

                                        <div class="td-block-span4">

                                            <div class="td_module_mx4 td_module_wrap td-animation-stack td-meta-info-hide">
                                                <div class="td-module-image">
                                                    <div class="td-module-thumb"><a
                                                                href="https://ttu.edu.vn/dai-hoc-tan-tao-ho-tro-sinh-vien-nghien-cuu-khoa-hoc/"
                                                                rel="bookmark"
                                                                title="Đại học Tân Tạo hỗ trợ sinh viên nghiên cứu khoa học"><img
                                                                    width="218" height="150" class="entry-thumb"
                                                                    src="./frontend/theme/Nghen-cuu-khoa-hoc-03-218x150.jpg"
                                                                    srcset="https://ttu.edu.vn/wp-content/uploads/2018/12/Nghen-cuu-khoa-hoc-03-218x150.jpg 218w, https://ttu.edu.vn/wp-content/uploads/2018/12/Nghen-cuu-khoa-hoc-03-100x70.jpg 100w"
                                                                    sizes="(max-width: 218px) 100vw, 218px" alt=""
                                                                    title="Đại học Tân Tạo hỗ trợ sinh viên nghiên cứu khoa học"></a>
                                                    </div>
                                                </div>

                                                <h3 class="entry-title td-module-title"><a
                                                            href="https://ttu.edu.vn/dai-hoc-tan-tao-ho-tro-sinh-vien-nghien-cuu-khoa-hoc/"
                                                            rel="bookmark"
                                                            title="Đại học Tân Tạo hỗ trợ sinh viên nghiên cứu khoa học">Đại
                                                        học Tân Tạo hỗ trợ sinh viên nghiên cứu khoa...</a></h3>
                                            </div>


                                        </div> <!-- ./td-block-span4 --></div><!--./row-fluid--></div>
                                <div class="td-next-prev-wrap"><a href="https://ttu.edu.vn/#"
                                                                  class="td-ajax-prev-page ajax-page-disabled"
                                                                  id="prev-page-td_uid_20_611e3bbd74a95"
                                                                  data-td_block_id="td_uid_20_611e3bbd74a95"><i
                                                class="td-icon-font td-icon-menu-left"></i></a><a
                                            href="https://ttu.edu.vn/#" class="td-ajax-next-page"
                                            id="next-page-td_uid_20_611e3bbd74a95"
                                            data-td_block_id="td_uid_20_611e3bbd74a95"><i
                                                class="td-icon-font td-icon-menu-right"></i></a></div>
                            </div> <!-- ./block -->
                            <div class="clearfix"></div>
                            <div class="td_block_wrap td_block_text_with_title td_uid_21_611e3bbd78565_rand td-pb-border-top td_block_template_15"
                                 data-td-block-uid="td_uid_21_611e3bbd78565"><h4 class="td-block-title"><a
                                            href="http://ttu.edu.vn/nhan-vien/">NHÂN VIÊN</a></h4>
                                <div class="td_mod_wrap">Thông tin quan trọng và hỗ trợ thực tế cho những người quan tâm
                                    và tham gia TTU<br>
                                    Đối với nhân viên hiện tại, đăng nhập <a href="http://adm.ttu.edu.vn/hrm/"
                                                                             target="_blank" rel="noopener">ADM</a> để
                                    truy cập vào mạng nội bộ của nhân viên.
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_inner td-pb-row vc_custom_1506311697755">
                                <div class="wpb_column vc_column_container td-pb-span6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="vc_btn3-container vc_btn3-left"><a
                                                        style="background-color:#ededed; color:#666666;"
                                                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom vc_btn3-block vc_btn3-icon-left"
                                                        href="http://ttu.edu.vn/nhan-vien/co-hoi-nghe-nghiep/" title=""><i
                                                            class="vc_btn3-icon fa fa-chevron-right"></i> Cơ hội nghệ
                                                    nghiệp tại TTU</a></div>
                                            <div class="vc_btn3-container vc_btn3-left"><a
                                                        style="background-color:#ededed; color:#666666;"
                                                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom vc_btn3-block vc_btn3-icon-left"
                                                        href="http://ttu.edu.vn/nhan-vien/song-va-lam-viec-tai-ttu/"
                                                        title=""><i class="vc_btn3-icon fa fa-chevron-right"></i> Sống
                                                    và làm việc tại TTU</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container td-pb-span6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="vc_btn3-container vc_btn3-left"><a
                                                        style="background-color:#ededed; color:#666666;"
                                                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom vc_btn3-block vc_btn3-icon-left"
                                                        href="http://ttu.edu.vn/working-environment-at-ttu/" title=""><i
                                                            class="vc_btn3-icon fa fa-chevron-right"></i> Môi trường làm
                                                    việc tại TTU</a></div>
                                            <div class="vc_btn3-container vc_btn3-left"><a
                                                        style="background-color:#ededed; color:#666666;"
                                                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom vc_btn3-block vc_btn3-icon-left"
                                                        href="http://ttu.edu.vn/nhan-vien/new-staff-induction/"
                                                        title=""><i class="vc_btn3-icon fa fa-chevron-right"></i> Chào
                                                    mừng nhân viên mới</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container td-pb-span4">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper" style="width: auto; position: static; top: auto; bottom: auto;">
                            <div class="clearfix"></div>
                            <div class="wpb_widgetised_column wpb_content_element">
                                <div class="wpb_wrapper">

                                    <aside class="td_block_template_15 widget widget_text_icl"><h4
                                                class="td-block-title"><span>CÁC HOẠT ĐỘNG </span></h4>
                                        <div class="textwidget">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><a
                                                        href="https://ttu.edu.vn/category/tin-tuc-su-kien/nhat-ky-thuc-tap/"
                                                        target="_blank"><img width="742" height="486"
                                                                             src="./frontend/theme/NHAT-KY-THUC-TAP-KHOA-Y.jpg"
                                                                             class="vc_single_image-img attachment-full"
                                                    <="" a=""></a></div>
                                            <a href="https://ttu.edu.vn/category/tin-tuc-su-kien/nhat-ky-thuc-tap/"
                                               target="_blank">
                                                <div class="vc_empty_space" style="height: 4px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                            </a>
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><a
                                                        href="https://ttu.edu.vn/category/tin-tuc-su-kien/nhat-ky-thuc-tap/"
                                                        target="_blank"></a><a
                                                        href="http://ttu.edu.vn/gioi-thieu/su-kien-noi-bat/swec/"
                                                        target="_blank"><img width="742" height="486"
                                                                             src="./frontend/theme/CLB-Swec.jpg"
                                                                             class="vc_single_image-img attachment-full"
                                                    <="" a=""></a></div>
                                            <a href="http://ttu.edu.vn/gioi-thieu/su-kien-noi-bat/swec/"
                                               target="_blank">
                                                <div class="vc_empty_space" style="height: 4px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                            </a>
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><a
                                                        href="http://ttu.edu.vn/gioi-thieu/su-kien-noi-bat/swec/"
                                                        target="_blank"></a><a
                                                        href="https://summerenglishcourse.ttu.edu.vn/"
                                                        target="_blank"><img width="742" height="486"
                                                                             src="./frontend/theme/English-course.jpg"
                                                                             class="vc_single_image-img attachment-full"
                                                    <="" a=""></a></div>
                                            <a href="https://summerenglishcourse.ttu.edu.vn/" target="_blank">
                                                <div class="vc_empty_space" style="height: 4px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                            </a>
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><a
                                                        href="https://summerenglishcourse.ttu.edu.vn/"
                                                        target="_blank"></a><a
                                                        href="https://www.youtube.com/watch?v=nSqv7Wgw38c"
                                                        target="_blank"><img width="742" height="486"
                                                                             src="./frontend/theme/hanh-trinh-dinh-huong-tuong-lai.jpg"
                                                                             class="vc_single_image-img attachment-full"
                                                    <="" a=""></a></div>
                                            <a href="https://www.youtube.com/watch?v=nSqv7Wgw38c" target="_blank">
                                                <div class="vc_empty_space" style="height: 4px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                            </a>
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><a
                                                        href="https://www.youtube.com/watch?v=nSqv7Wgw38c"
                                                        target="_blank"></a><a href="http://lecturer.ttu.edu.vn/"
                                                                               target="_blank"><img width="742"
                                                                                                    height="486"
                                                                                                    src="./frontend/theme/bi-quyet-kinh-doanh-tai-hoa-ky.jpg"
                                                                                                    class="vc_single_image-img attachment-full"
                                                    <="" a=""></a></div>
                                            <a href="http://lecturer.ttu.edu.vn/" target="_blank">
                                                <div class="vc_empty_space" style="height: 4px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                            </a></div>
                                        <a href="http://lecturer.ttu.edu.vn/" target="_blank">
                                        </a></aside>
                                    <a href="http://lecturer.ttu.edu.vn/" target="_blank">
                                    </a></div>
                                <a href="http://lecturer.ttu.edu.vn/" target="_blank">
                                </a></div>
                            <a href="http://lecturer.ttu.edu.vn/" target="_blank">
                                <div class="td_block_wrap td_block_text_with_title td_uid_22_611e3bbd7a952_rand td-pb-border-top td_block_template_15"
                                     data-td-block-uid="td_uid_22_611e3bbd7a952"><h4 class="td-block-title"><span>SỰ KIỆN</span>
                                    </h4>
                                    <div class="td_mod_wrap">
                                        <div id="evcal_calendar_532" class="ajde_evcal_calendar ">
                                            <div class="evo-data" data-cyear="2021" data-cmonth="8" data-runajax="1"
                                                 data-evc_open="0" data-cal_ver="2.5.2" data-mapscroll="true"
                                                 data-mapformat="roadmap" data-mapzoom="18" data-mapiconurl=""
                                                 data-ev_cnt="5" data-show_limit="yes" data-tiles="no"
                                                 data-sort_by="sort_date" data-filters_on="false" data-range_start="0"
                                                 data-range_end="0" data-send_unix="0" data-ux_val="0" data-accord="0"
                                                 data-rtl="no"></div>
                                            <div id="evcal_head" class="calendar_header ">
                                                <div class="evo_cal_above"><span class="evo-gototoday-btn"
                                                                                 style="display:none" data-mo="8"
                                                                                 data-yr="2021" data-dy="">Tháng hiện tại</span>
                                                </div>
                                                <div class="evo_cal_above_content"></div>
                                                <p id="evcal_cur" class="evo_month_title"> Tháng 8, 2021</p>
                                                <p class="evo_arrows"><span id="evcal_prev"
                                                                            class="evcal_arrows evcal_btn_prev"><i
                                                                class="fa fa-angle-left"></i></span><span
                                                            id="evcal_next" class="evcal_arrows evcal_btn_next"><i
                                                                class="fa fa-angle-right"></i></span></p>
                                                <div class="cal_arguments" style="display:none" data-hide_past="no"
                                                     data-show_et_ft_img="no" data-event_order="ASC"
                                                     data-ft_event_priority="no" data-lang="L2" data-month_incre="0"
                                                     data-only_ft="no" data-evc_open="no" data-show_limit="yes"
                                                     data-etc_override="no" data-show_limit_redir="0" data-tiles="no"
                                                     data-tile_height="0" data-tile_bg="0" data-tile_count="2"
                                                     data-tile_style="0" data-s="" data-members_only="no"
                                                     data-ux_val="0"></div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="eventon_sorting_section" style="display:none">
                                                <div class="eventon_filter_line ">
                                                    <div class="eventon_filter" data-filter_field="event_type"
                                                         data-filter_val="all" data-filter_type="tax"
                                                         data-fl_o="IN"></div>
                                                    <div class="eventon_filter" data-filter_field="event_type_2"
                                                         data-filter_val="all" data-filter_type="tax"
                                                         data-fl_o="IN"></div>
                                                    <div class="eventon_filter" data-filter_field="event_type_3"
                                                         data-filter_val="all" data-filter_type="tax"
                                                         data-fl_o="IN"></div>
                                                    <div class="eventon_filter" data-filter_field="event_type_4"
                                                         data-filter_val="all" data-filter_type="tax"
                                                         data-fl_o="IN"></div>
                                                    <div class="eventon_filter" data-filter_field="event_type_5"
                                                         data-filter_val="all" data-filter_type="tax"
                                                         data-fl_o="IN"></div>
                                                    <div class="eventon_filter" data-filter_field="event_location"
                                                         data-filter_val="all" data-filter_type="tax"
                                                         data-fl_o="IN"></div>
                                                    <div class="eventon_filter" data-filter_field="event_organizer"
                                                         data-filter_val="all" data-filter_type="tax"
                                                         data-fl_o="IN"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div id="eventon_loadbar_section">
                                                <div id="eventon_loadbar"></div>
                                            </div>
                                            <div id="evcal_list" class="eventon_events_list ">
                                                <div class="eventon_list_event"><p class="no_events">Không có sự
                                                        kiện</p></div>
                                                <div class="clear"></div>
                                            </div><!-- #evcal_list-->
                                            <div class="clear"></div>
                                        </div><!-- .ajde_evcal_calendar-->

                                    </div>
                                </div>
                            </a>
                            <div class="td_block_wrap td_block_social_counter td_uid_23_611e3bbd80a52_rand td-social-style10 td-social-boxed td-social-colored td-pb-border-top td_block_template_15">
                                <a href="http://lecturer.ttu.edu.vn/" target="_blank"><h4 class="td-block-title"><span>KẾT NỐI</span>
                                    </h4></a>
                                <div class="td-social-list"><a href="http://lecturer.ttu.edu.vn/" target="_blank"></a>
                                    <div class="td_social_type td-pb-margin-side td_social_facebook"><a
                                                href="http://lecturer.ttu.edu.vn/" target="_blank"></a>
                                        <div class="td-social-box"><a href="http://lecturer.ttu.edu.vn/"
                                                                      target="_blank">
                                                <div class="td-sp td-sp-facebook"></div>
                                                <span class="td_social_info">11,760</span><span
                                                        class="td_social_info td_social_info_name">Người hâm mộ</span><span
                                                        class="td_social_button"></span></a><a
                                                    href="https://www.facebook.com/tantaouniversity" target="_blank">Like</a>
                                        </div>
                                    </div>
                                    <div class="td_social_type td-pb-margin-side td_social_instagram">
                                        <div class="td-social-box">
                                            <div class="td-sp td-sp-instagram"></div>
                                            <span class="td_social_info">4</span><span
                                                    class="td_social_info td_social_info_name">Người theo dõi</span><span
                                                    class="td_social_button"><a
                                                        href="http://instagram.com/tantaouniversity#" target="_blank">Follow</a></span>
                                        </div>
                                    </div>
                                    <div class="td_social_type td-pb-margin-side td_social_twitter">
                                        <div class="td-social-box">
                                            <div class="td-sp td-sp-twitter"></div>
                                            <span class="td_social_info">10</span><span
                                                    class="td_social_info td_social_info_name">Người theo dõi</span><span
                                                    class="td_social_button"><a href="https://twitter.com/TanTaoUni"
                                                                                target="_blank">Follow</a></span></div>
                                    </div>
                                    <div class="td_social_type td-pb-margin-side td_social_youtube">
                                        <div class="td-social-box">
                                            <div class="td-sp td-sp-youtube"></div>
                                            <span class="td_social_info">368</span><span
                                                    class="td_social_info td_social_info_name">Số người xem</span><span
                                                    class="td_social_button"><a href="http://www.youtube.com/DHTanTao"
                                                                                target="_blank">Subscribe</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- ./block -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row td-pb-row">
                <div class="wpb_column vc_column_container td-pb-span12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row td-pb-row">
                <div class="wpb_column vc_column_container td-pb-span12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="td_block_wrap td_block_text_with_title vc_custom_1506915270198 td_uid_24_611e3bbd81276_rand td-pb-border-top td_block_template_15"
                                 data-td-block-uid="td_uid_24_611e3bbd81276"><h4 class="td-block-title"><a
                                            href="https://www.youtube.com/channel/UCx68SL0zfwISaT0fX10HP4g">TRUYỀN HÌNH
                                        TTU</a></h4>
                                <div class="td_mod_wrap"></div>
                            </div>
                            <div class="td_block_wrap td_block_video_playlist">
                                <div id="td_uid_25_611e3bbd81491" class="td_block_inner">
                                    <div class="td_video_playlist_column_3">
                                        <div class="td_wrapper_video_playlist">
                                            <div class="td_wrapper_player td_wrapper_playlist_player_youtube"
                                                 data-first-video="nSqv7Wgw38c" data-autoplay="0">
                                                <iframe id="player_youtube_0" frameborder="0" allowfullscreen="1"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        title="YouTube video player" width="100%" height="100%"
                                                        src="./frontend/theme/nSqv7Wgw38c.html"
                                                        style="height: 409.5px;"></iframe>
                                            </div>
                                            <div class="td_container_video_playlist ">
                                                <div class="td_video_controls_playlist_wrapper">
                                                    <div class="td_video_stop_play_control"><a
                                                                class="td-sp-video-play td-sp td_youtube_control"></a>
                                                    </div>
                                                    <div class="td_current_video_play_title_youtube td_video_title_playing">
                                                        TTU HÀNH TRÌNH ĐỊNH HƯỚNG TƯƠNG LAI - OPEN HOUSE
                                                    </div>
                                                    <div class="td_current_video_play_time_youtube td_video_time_playing">
                                                        04:12
                                                    </div>
                                                </div>
                                                <div id="td_youtube_playlist_video"
                                                     class="td_playlist_clickable td_add_scrollbar_to_playlist"><a
                                                            class="td_nSqv7Wgw38c td_click_video td_click_video_youtube td_video_currently_playing"
                                                            data-video-id="nSqv7Wgw38c">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default.jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">TTU HÀNH TRÌNH ĐỊNH HƯỚNG TƯƠNG
                                                                LAI - OPEN HOUSE
                                                            </div>
                                                            <div class="td_video_time">04:12</div>
                                                        </div>
                                                    </a><a class="td_kBJJNqs3uEQ td_click_video td_click_video_youtube"
                                                           data-video-id="kBJJNqs3uEQ">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(1).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">TAN TAO UNIVERSITY - FROM
                                                                KNOWLEDGE TO THE STAR
                                                            </div>
                                                            <div class="td_video_time">08:36</div>
                                                        </div>
                                                    </a><a class="td_CZi-cf5knLY td_click_video td_click_video_youtube"
                                                           data-video-id="CZi-cf5knLY">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(2).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">Giới thiệu trường Đại học Tân
                                                                Tạo.
                                                            </div>
                                                            <div class="td_video_time">08:32</div>
                                                        </div>
                                                    </a><a class="td_3jvpUFs_11A td_click_video td_click_video_youtube"
                                                           data-video-id="3jvpUFs_11A">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(3).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">TTU- LỄ TRAO HỌC BỔNG NĂM
                                                                HỌC 2016-2017
                                                            </div>
                                                            <div class="td_video_time">18:30</div>
                                                        </div>
                                                    </a><a class="td_lcUypOidn78 td_click_video td_click_video_youtube"
                                                           data-video-id="lcUypOidn78">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(4).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">TTU-ORIENTATION NH: 2017-2018
                                                            </div>
                                                            <div class="td_video_time">07:35</div>
                                                        </div>
                                                    </a><a class="td_gPAujaU2x_w td_click_video td_click_video_youtube"
                                                           data-video-id="gPAujaU2x_w">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(5).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">Đại học Tân Tạo đón tiếp đoàn Y,
                                                                Bác sĩ và sinh viên Hoa Kỳ.
                                                            </div>
                                                            <div class="td_video_time">01:10</div>
                                                        </div>
                                                    </a><a class="td_huFsO4AlQ8I td_click_video td_click_video_youtube"
                                                           data-video-id="huFsO4AlQ8I">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(6).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">[TTU] Khung cảnh Trường Đại hoc
                                                                Tân Tạo từ flying cam.
                                                            </div>
                                                            <div class="td_video_time">01:13</div>
                                                        </div>
                                                    </a><a class="td_wb9DGdUp8fU td_click_video td_click_video_youtube"
                                                           data-video-id="wb9DGdUp8fU">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(7).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">Các hoạt động tiêu biểu của Hội
                                                                Sinh Viên Trường Đại học Tân Tạo năm 2016
                                                            </div>
                                                            <div class="td_video_time">04:42</div>
                                                        </div>
                                                    </a><a class="td_ae_ILxLy4kY td_click_video td_click_video_youtube"
                                                           data-video-id="ae_ILxLy4kY">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(8).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">[Talk show] Giao lưu với các
                                                                Sinh viên Y khoa đi thực tập tại Hoa Kỳ_ Tân Tạo
                                                                University
                                                            </div>
                                                            <div class="td_video_time">22:09</div>
                                                        </div>
                                                    </a><a class="td_NMtGOSNWod4 td_click_video td_click_video_youtube"
                                                           data-video-id="NMtGOSNWod4">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(9).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">Benefits of an education at Tan
                                                                Tao University
                                                            </div>
                                                            <div class="td_video_time">01:20</div>
                                                        </div>
                                                    </a><a class="td_TAPdqb81OU4 td_click_video td_click_video_youtube"
                                                           data-video-id="TAPdqb81OU4">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(10).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">Phóng sự kỷ niệm 5 năm
                                                                thành lập Đại Học Tân Tạo
                                                            </div>
                                                            <div class="td_video_time">07:47</div>
                                                        </div>
                                                    </a><a class="td_bOQLymKJxTQ td_click_video td_click_video_youtube"
                                                           data-video-id="bOQLymKJxTQ">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(11).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">Lễ khoác áo trắng cho sinh viên
                                                                khoa Y Trường Đại Học Tân Tạo_part 1
                                                            </div>
                                                            <div class="td_video_time">15:03</div>
                                                        </div>
                                                    </a><a class="td_dFgpoMQBqX0 td_click_video td_click_video_youtube"
                                                           data-video-id="dFgpoMQBqX0">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(12).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">Lễ tốt nghiệp và Khai giảng năm
                                                                học 2016-2017_Trường Đại học Tân Tạo.
                                                            </div>
                                                            <div class="td_video_time">01:33:52</div>
                                                        </div>
                                                    </a><a class="td_946g5AL6HCM td_click_video td_click_video_youtube"
                                                           data-video-id="946g5AL6HCM">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(13).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">TTU-LỄ TRAO GIẢI HOA TRẠNG
                                                                NGUYÊN NĂM 2016_KHU VỰC PHÍA NAM NH 2016-2017
                                                            </div>
                                                            <div class="td_video_time">01:08:39</div>
                                                        </div>
                                                    </a><a class="td_miuyo-k04mA td_click_video td_click_video_youtube"
                                                           data-video-id="miuyo-k04mA">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(14).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">Ông Michael W. Michalak - Phát
                                                                biểu tại Lễ Tốt nghiệp Trường Đại học Tân Tạo
                                                            </div>
                                                            <div class="td_video_time">14:26</div>
                                                        </div>
                                                    </a><a class="td_0h5rI5KylR0 td_click_video td_click_video_youtube"
                                                           data-video-id="0h5rI5KylR0">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(15).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">9 sự kiện nổi bật tập đoàn Tân
                                                                Tạo năm 2015.
                                                            </div>
                                                            <div class="td_video_time">05:00</div>
                                                        </div>
                                                    </a><a class="td_neOUibzHxdQ td_click_video td_click_video_youtube"
                                                           data-video-id="neOUibzHxdQ">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(16).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">[HTV9] Phóng sự DOANH NHÂN VÌ
                                                                CỘNG ĐỒNG về Trường ĐH TÂN TẠO.
                                                            </div>
                                                            <div class="td_video_time">16:24</div>
                                                        </div>
                                                    </a><a class="td_kdcJCOuHRqk td_click_video td_click_video_youtube"
                                                           data-video-id="kdcJCOuHRqk">
                                                        <div class="td_video_thumb"><img
                                                                    src="./frontend/theme/default(17).jpg"
                                                                    alt=""></div>
                                                        <div class="td_video_title_and_time">
                                                            <div class="td_video_title">Ca khúc ''Người thầy'' Biểu
                                                                diễn: Sinh viên y khoa trường đại học Tân Tạo.
                                                            </div>
                                                            <div class="td_video_time">09:02</div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>;
                                        if (undefined === window.td_youtube_list_ids) {
                                            window.td_youtube_list_ids = {}
                                        }
                                        ;window.td_youtube_list_ids['td_nSqv7Wgw38c'] = {
                                            title: "TTU HÀNH TRÌNH ĐỊNH HƯỚNG TƯƠNG LAI - OPEN HOUSE",
                                            time: "04:12"
                                        };
                                        window.td_youtube_list_ids['td_kBJJNqs3uEQ'] = {
                                            title: "TAN TAO UNIVERSITY - FROM KNOWLEDGE TO THE STAR",
                                            time: "08:36"
                                        };
                                        window.td_youtube_list_ids['td_CZi-cf5knLY'] = {
                                            title: "Giới thiệu trường Đại học Tân Tạo.",
                                            time: "08:32"
                                        };
                                        window.td_youtube_list_ids['td_3jvpUFs_11A'] = {
                                            title: "TTU- LỄ TRAO HỌC BỔNG NĂM HỌC 2016-2017",
                                            time: "18:30"
                                        };
                                        window.td_youtube_list_ids['td_lcUypOidn78'] = {
                                            title: "TTU-ORIENTATION NH: 2017-2018",
                                            time: "07:35"
                                        };
                                        window.td_youtube_list_ids['td_gPAujaU2x_w'] = {
                                            title: "Đại học Tân Tạo đón tiếp đoàn Y, Bác sĩ và sinh viên Hoa Kỳ.",
                                            time: "01:10"
                                        };
                                        window.td_youtube_list_ids['td_huFsO4AlQ8I'] = {
                                            title: "[TTU] Khung cảnh Trường Đại hoc Tân Tạo từ flying cam.",
                                            time: "01:13"
                                        };
                                        window.td_youtube_list_ids['td_wb9DGdUp8fU'] = {
                                            title: "Các hoạt động tiêu biểu của Hội Sinh Viên Trường Đại học Tân Tạo năm 2016",
                                            time: "04:42"
                                        };
                                        window.td_youtube_list_ids['td_ae_ILxLy4kY'] = {
                                            title: "[Talk show] Giao lưu với các Sinh viên Y khoa đi thực tập tại Hoa Kỳ_ Tân Tạo University",
                                            time: "22:09"
                                        };
                                        window.td_youtube_list_ids['td_NMtGOSNWod4'] = {
                                            title: "Benefits of an education at Tan Tao University",
                                            time: "01:20"
                                        };
                                        window.td_youtube_list_ids['td_TAPdqb81OU4'] = {
                                            title: "Phóng sự kỷ niệm 5 năm thành lập Đại Học Tân Tạo",
                                            time: "07:47"
                                        };
                                        window.td_youtube_list_ids['td_bOQLymKJxTQ'] = {
                                            title: "Lễ khoác áo trắng cho sinh viên khoa Y Trường Đại Học Tân Tạo_part 1",
                                            time: "15:03"
                                        };
                                        window.td_youtube_list_ids['td_dFgpoMQBqX0'] = {
                                            title: "Lễ tốt nghiệp và Khai giảng năm học 2016-2017_Trường Đại học Tân Tạo.",
                                            time: "01:33:52"
                                        };
                                        window.td_youtube_list_ids['td_946g5AL6HCM'] = {
                                            title: "TTU-LỄ TRAO GIẢI HOA TRẠNG NGUYÊN NĂM 2016_KHU VỰC PHÍA NAM NH 2016-2017",
                                            time: "01:08:39"
                                        };
                                        window.td_youtube_list_ids['td_miuyo-k04mA'] = {
                                            title: "Ông Michael W. Michalak - Phát biểu tại Lễ Tốt nghiệp Trường Đại học Tân Tạo",
                                            time: "14:26"
                                        };
                                        window.td_youtube_list_ids['td_0h5rI5KylR0'] = {
                                            title: "9 sự kiện nổi bật tập đoàn Tân Tạo năm 2015.",
                                            time: "05:00"
                                        };
                                        window.td_youtube_list_ids['td_neOUibzHxdQ'] = {
                                            title: "[HTV9] Phóng sự DOANH NHÂN VÌ CỘNG ĐỒNG về Trường ĐH TÂN TẠO.",
                                            time: "16:24"
                                        };
                                        window.td_youtube_list_ids['td_kdcJCOuHRqk'] = {
                                            title: "Ca khúc &#039;&#039;Người thầy&#039;&#039; Biểu diễn: Sinh viên y khoa trường đại học Tân Tạo.",
                                            time: "09:02"
                                        };</script>
                                </div>
                            </div>
                            {{--<div class="wpb_gmaps_widget wpb_content_element">--}}
                                {{--<div class="wpb_wrapper">--}}
                                    {{--<div class="wpb_map_wraper">--}}
                                        {{--<iframe src="./frontend/theme/embed.html"--}}
                                                {{--width="600" height="450" frameborder="0"--}}
                                                {{--style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row td-pb-row">
                <div class="wpb_column vc_column_container td-pb-span12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper"></div>
                    </div>
                </div>
            </div>
            <div class="banner-uuthe" style="
    position: fixed;
    left: 0;
    bottom: 250px;
    z-index: 2001;
    width: 250px;
"><img id="closeBtn" onclick="closeBannerUuthe()"
       src="./frontend/theme/btn-close.png" style="
    position: absolute;
    right: 0;
    top: 35px;
    width: 25px;
    cursor: pointer;
"> <a target="_blank" href="https://ttu.edu.vn/category/gioi-thieu/thong-tin-tham-quan/"><br>
                    <img src="./frontend/theme/banner-uuthe.png"><br>
                </a>
            </div>
            <p>
                <script>
                    function closeBannerUuthe() {
                        var elems = document.getElementsByClassName('banner-uuthe');
                        for (var i = 0; i < elems.length; i += 1) {
                            elems[i].style.display = "none";
                        }
                    }
                </script>
            </p>
        </div>
    </div> <!-- /.td-main-content-wrap -->


    <!-- Instagram -->


    <!-- Footer -->
    <div class="td-footer-wrapper">
        <div class="td-container">

            <div class="td-pb-row">
                <div class="td-pb-span12">
                </div>
            </div>

            <div class="td-pb-row">

                <div class="td-pb-span4">
                    <aside class="td_block_template_15 widget widget_text_icl"><h4 class="td-block-title"><span>Đại Học Tân Tạo</span>
                        </h4>
                        <div class="textwidget">
                            <div class="f1-footer">
                                <p><a href="http://ttu.edu.vn/gioi-thieu/"><img
                                                src="./frontend/theme/icon-trang.png">Tổng
                                        quan</a></p>
                                <p><a href="http://ttu.edu.vn/tuyen-sinh/"><img
                                                src="./frontend/theme/icon-trang.png">Tuyển
                                        sinh</a></p>
                                <p><a href="http://ttu.edu.vn/dao-tao/"><img
                                                src="./frontend/theme/icon-trang.png">Đào
                                        tạo</a></p>
                                <p><a href="http://ttu.edu.vn/nghiencuu/"> <img
                                                src="./frontend/theme/icon-trang.png">Nghiên
                                        cứu</a></p>
                                <p><a href="http://student.ttu.edu.vn/?lang=vi"> <img
                                                src="./frontend/theme/icon-trang.png">Đời
                                        sống Sinh viên</a></p>
                                <p><a href="http://ttu.edu.vn/nhan-vien/cac-vi-tri-dang-tuyen-dung/"><img
                                                src="./frontend/theme/icon-trang.png">Cơ
                                        hội nghề nghiệp</a></p>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget_text td_block_template_15 widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <div class="online-admission" style="
    position: fixed;
    left: 0;
    bottom: 0;
    z-index: 2001;
    width: 250px;
"><img id="closeBtn" onclick="closeBanner()" src="./frontend/theme/btn-close.png"
       style="
    position: absolute;
    right: 0;
    top: 15px;
    width: 25px;
    cursor: pointer;
"> <a target="_blank" href="https://tuyensinh.ttu.edu.vn/nhap-hoc-truc-tuyen/">
                                    <img src="./frontend/theme/banner-dangky.png">
                                </a>
                            </div>
                            <script>
                                function closeBanner() {
                                    var elems = document.getElementsByClassName('online-admission');
                                    for (var i = 0; i < elems.length; i += 1) {
                                        elems[i].style.display = "none";
                                    }
                                }
                            </script>
                        </div>
                    </aside>
                </div>

                <div class="td-pb-span4">
                    <aside class="td_block_template_15 widget widget_text_icl"><h4 class="td-block-title">
                            <span>Các Khoa</span></h4>
                        <div class="textwidget">
                            <div class="f2-footer">
                                <p><a href="http://medicine.ttu.edu.vn/" target="_blank"> <img
                                                src="./frontend/theme/icon-trang.png">Khoa
                                        Y </a></p>
                                <p><a href="http://soe.ttu.edu.vn/" target="_blank"><img
                                                src="./frontend/theme/icon-trang.png">Khoa
                                        Kỹ thuật</a></p>
                                <p><a href="http://biotech.ttu.edu.vn/vi/" target="_blank"><img
                                                src="./frontend/theme/icon-trang.png">Khoa
                                        Công nghệ sinh học </a></p>
                                <p><a href="http://shl.ttu.edu.vn/vi/" target="_blank"><img
                                                src="./frontend/theme/icon-trang.png">Khoa
                                        Nhân văn &amp; Ngôn ngữ</a></p>
                                <p><a href="http://sbe.ttu.edu.vn/" target="_blank"> <img
                                                src="./frontend/theme/icon-trang.png">Khoa
                                        Kinh tế và Quản trị Kinh doanh</a></p>
                                <p><a href="http://ttu.edu.vn/khoa-dieu-duong-va-ky-thuat-xet-nghiem-y-hoc/"
                                      target="_blank"> <img
                                                src="./frontend/theme/icon-trang.png">Khoa
                                        Điều dưỡng &amp; Kỹ thuật Xét nghiệm Y học</a></p>
                                <p><a href="http://ttst.edu.vn/index.php/" target="_blank"><img
                                                src="./frontend/theme/icon-trang.png">Trường
                                        phổ thông Năng khiếu Tân Tạo</a></p>
                            </div>
                        </div>
                    </aside>
                </div>

                <div class="td-pb-span4">
                    <aside class="td_block_template_15 widget widget_text_icl"><h4 class="td-block-title"><span>Liên Kết Nhanh</span>
                        </h4>
                        <div class="textwidget">
                            <div class="f3-footer">
                                <p><a href="http://ttu.edu.vn/dong-gop/?lang=vi"><img
                                                src="./frontend/theme/giftbox.png">
                                        Đóng góp</a></p>
                                <p><a href="http://lib.ttu.edu.vn/" target="_blank"> <img
                                                src="./frontend/theme/Library.png">
                                        Thư viện</a></p>
                                <p><a href="http://registrar.ttu.edu.vn/" target="_blank"> <img
                                                src="./frontend/theme/registrar.png">
                                        Học vụ</a></p>
                                <p><a href="http://helpdesk.ttu.edu.vn/?lang=vi" target="_blank"><img
                                                src="./frontend/theme/helpdesk.png">
                                        Hỗ trợ</a></p>
                                <p><a href="http://qa.ttu.edu.vn/" target="_blank"><img
                                                src="./frontend/theme/education.png">
                                        Đảm bảo chất lượng giáo dục</a></p>
                                <p><a href="http://ttu.edu.vn/so-do-website/?lang=vi"><img
                                                src="./frontend/theme/site-map-1.png">
                                        Sơ đồ website</a></p>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </div>

    <!-- Sub Footer -->
    <div class="td-sub-footer-container">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span7 td-sub-footer-menu">
                </div>

                <div class="td-pb-span5 td-sub-footer-copy">
                    <strong><span style="color: #076633;">ĐẠI HỌC TÂN TẠO</span></strong><br>
                    ĐT: (+84) 272 376 9216 | Email: <a class="\&quot;email\&quot;"
                                                       href="https://ttu.edu.vn/%22mailto:info@ttu.edu.vn/%22">info@ttu.edu.vn</a><br>
                    Đại lộ Đại học Tân Tạo, Tân Đức E.City, Đức Hòa, Tỉnh Long An
                </div>
            </div>
        </div>
    </div>
</div><!--close td-outer-wrap-->

<script type="text/javascript">
    /*<![CDATA[*/
    var gmapstyles = 'default';
    /* ]]> */
</script>


<!--

        Theme: Newspaper by tagDiv 2016
        Version: 7.7.1 (rara)
        Deploy mode: deploy
        Speed booster: v4.5

        uid: 611e3bbdb4a6d
    -->


<!-- Custom css form theme panel -->
<style type="text/css" media="screen">
    /* custom css theme panel */
    .hebe .tp-tab-title {
        color: #009b3a !important;
    }

    .ajde_evcal_calendar .calendar_header p {
        height: 26px !important;
        line-height: 26px !important;
        margin: 1px !important;
        font-size: 22px !important;
    }

    .ajde_evcal_calendar #evcal_head.calendar_header #evcal_cur, .ajde_evcal_calendar .evcal_month_line p {
        color: #666666;
    }

    .ajde_evcal_calendar .calendar_header .evcal_arrows .fa {
        color: #009b3a !important;
    }

    .td_wrapper_video_playlist .td_container_video_playlist {
        background-color: #ffffff !important;

    }

    .td_wrapper_video_playlist .td_video_title_and_time .td_video_title {
        color: #1c1c1c !important;

    }

    .td_wrapper_video_playlist .td_video_currently_playing {
        background-color: #cecece !important;

    }

    .td_wrapper_video_playlist .td_click_video:hover {
        background-color: #ffffff !important;
        cursor: pointer;
    }

    .td_wrapper_video_playlist .td_video_title:hover {
        color: #009b3a !important;
        cursor: pointer;
    }

    .td_module_6 .entry-title {
        font-size: 16px !important;
    }

    .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist {
        margin-right: 0px;
    }

    .td-trending-now-title {
        background-color: #fff !important;
        color: #009b3a !important;
    }

    .td-image-gap-2 {
        margin: 0 2px;
    }

    .td-page-title {
        font-size: 18px !important;
        line-height: 22px !important;
    }

    .td_module_10 .entry-title {
        font-size: 16px !important;
        line-height: 22px !important;
    }

    Iframe {
        Max-width: 100% !important;
    }
</style>

<div class="evo_lightboxes">
    <div class="evo_lightbox eventcard eventon_events_list" id="">
        <div class="evo_content_in">
            <div class="evo_content_inin">
                <div class="evo_lightbox_content">
                    <a class="evolbclose ">X</a>
                    <div class="evo_lightbox_body eventon_list_event evo_pop_body evcal_eventcard"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" id="font-awesome-css" href="./frontend/theme/font-awesome.min.css" type="text/css" media="all">
<script type="text/javascript" src="{{ asset('/frontend/theme/scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/tagdiv_theme.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/comment-reply.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/jquery.qtip.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/moment-timezone-with-data.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/default-calendar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/imagesloaded.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/wp-embed.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/js_composer_front.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/eventon_functions.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/jquery.mobile.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/jquery.mousewheel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/eventon_script.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/js_1.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/eventon_gen_maps.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/theme/eventon_init_gmap.js') }}"></script>

<style>
    .td-header-wrap .black-menu .sf-menu > .current-menu-item > a,
    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > .current-category-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > li > a:hover,
    .td-header-wrap .black-menu .sf-menu > .sfHover > a,
    .td-header-style-12 .td-header-menu-wrap-full,
    .sf-menu > .current-menu-item > a:after,
    .sf-menu > .current-menu-ancestor > a:after,
    .sf-menu > .current-category-ancestor > a:after,
    .sf-menu > li:hover > a:after,
    .sf-menu > .sfHover > a:after,
    .sf-menu ul .td-menu-item > a:hover,
    .sf-menu ul .sfHover > a,
    .sf-menu ul .current-menu-ancestor > a,
    .sf-menu ul .current-category-ancestor > a,
    .sf-menu ul .current-menu-item > a,
    .td-header-style-12 .td-affix,
    .header-search-wrap .td-drop-down-search:after,
    .header-search-wrap .td-drop-down-search .btn:hover,
    input[type=submit]:hover,
    .td-read-more a,
    .td-post-category:hover,
    .td-grid-style-1.td-hover-1 .td-big-grid-post:hover .td-post-category,
    .td-grid-style-5.td-hover-1 .td-big-grid-post:hover .td-post-category,
    .td_top_authors .td-active .td-author-post-count,
    .td_top_authors .td-active .td-author-comments-count,
    .td_top_authors .td_mod_wrap:hover .td-author-post-count,
    .td_top_authors .td_mod_wrap:hover .td-author-comments-count,
    .td-404-sub-sub-title a:hover,
    .td-search-form-widget .wpb_button:hover,
    .td-rating-bar-wrap div,
    .td_category_template_3 .td-current-sub-category,
    .dropcap,
    .td_wrapper_video_playlist .td_video_controls_playlist_wrapper,
    .wpb_default,
    .wpb_default:hover,
    .td-left-smart-list:hover,
    .td-right-smart-list:hover,
    .woocommerce-checkout .woocommerce input.button:hover,
    .woocommerce-page .woocommerce a.button:hover,
    .woocommerce-account div.woocommerce .button:hover,
    #bbpress-forums button:hover,
    .bbp_widget_login .button:hover,
    .td-footer-wrapper .td-post-category,
    .td-footer-wrapper .widget_product_search input[type="submit"]:hover,
    .woocommerce .product a.button:hover,
    .woocommerce .product #respond input#submit:hover,
    .woocommerce .checkout input#place_order:hover,
    .woocommerce .woocommerce.widget .button:hover,
    .single-product .product .summary .cart .button:hover,
    .woocommerce-cart .woocommerce table.cart .button:hover,
    .woocommerce-cart .woocommerce .shipping-calculator-form .button:hover,
    .td-next-prev-wrap a:hover,
    .td-load-more-wrap a:hover,
    .td-post-small-box a:hover,
    .page-nav .current,
    .page-nav:first-child > div,
    .td_category_template_8 .td-category-header .td-category a.td-current-sub-category,
    .td_category_template_4 .td-category-siblings .td-category a:hover,
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
    .td_block_big_grid_9.td-grid-style-1 .td-post-category,
    .td_block_big_grid_9.td-grid-style-5 .td-post-category,
    .td-grid-style-6.td-hover-1 .td-module-thumb:after,
    .td-pulldown-syle-2 .td-subcat-dropdown ul:after,
    .td_block_template_9 .td-block-title:after,
    .td_block_template_15 .td-block-title:before,
    .global-block-template-3 .td-related-title .td-cur-simple-item,
    .global-block-template-4 .td-related-title .td-cur-simple-item,
    .global-block-template-9 .td-related-title .td-cur-simple-item:after {
        background-color: #009b3a;
    }

    .global-block-template-4 .td-related-title .td-cur-simple-item:before {
        border-color: #009b3a transparent transparent transparent;
    }

    .woocommerce .woocommerce-message .button:hover,
    .woocommerce .woocommerce-error .button:hover,
    .woocommerce .woocommerce-info .button:hover {
        background-color: #009b3a !important;
    }

    .woocommerce .product .onsale,
    .woocommerce.widget .ui-slider .ui-slider-handle {
        background: none #009b3a;
    }

    .woocommerce.widget.widget_layered_nav_filters ul li a {
        background: none repeat scroll 0 0 #009b3a !important;
    }

    a,
    cite a:hover,
    .td_mega_menu_sub_cats .cur-sub-cat,
    .td-mega-span h3 a:hover,
    .td_mod_mega_menu:hover .entry-title a,
    .header-search-wrap .result-msg a:hover,
    .top-header-menu li a:hover,
    .top-header-menu .current-menu-item > a,
    .top-header-menu .current-menu-ancestor > a,
    .top-header-menu .current-category-ancestor > a,
    .td-social-icon-wrap > a:hover,
    .td-header-sp-top-widget .td-social-icon-wrap a:hover,
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
    .td_mod_related_posts:hover h3 > a,
    .td-post-template-11 .td-related-title .td-related-left:hover,
    .td-post-template-11 .td-related-title .td-related-right:hover,
    .td-post-template-11 .td-related-title .td-cur-simple-item,
    .td-post-template-11 .td_block_related_posts .td-next-prev-wrap a:hover,
    .comment-reply-link:hover,
    .logged-in-as a:hover,
    #cancel-comment-reply-link:hover,
    .td-search-query,
    .td-category-header .td-pulldown-category-filter-link:hover,
    .td-category-siblings .td-subcat-dropdown a:hover,
    .td-category-siblings .td-subcat-dropdown a.td-current-sub-category,
    .widget a:hover,
    .archive .widget_archive .current,
    .archive .widget_archive .current a,
    .widget_calendar tfoot a:hover,
    .woocommerce a.added_to_cart:hover,
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
    .footer-text-wrap .footer-email-wrap a,
    .td-subfooter-menu li a:hover,
    .footer-social-wrap a:hover,
    a.vc_btn-black:hover,
    .td-smart-list-dropdown-wrap .td-smart-list-button:hover,
    .td_module_17 .td-read-more a:hover,
    .td_module_18 .td-read-more a:hover,
    .td_module_19 .td-post-author-name a:hover,
    .td-instagram-user a,
    .td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more span,
    .td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more i,
    .td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more span,
    .td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more i,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover i,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-link:hover,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-item .td-cur-simple-item,
    .global-block-template-2 .td-related-title .td-cur-simple-item,
    .global-block-template-5 .td-related-title .td-cur-simple-item,
    .global-block-template-6 .td-related-title .td-cur-simple-item,
    .global-block-template-7 .td-related-title .td-cur-simple-item,
    .global-block-template-8 .td-related-title .td-cur-simple-item,
    .global-block-template-9 .td-related-title .td-cur-simple-item,
    .global-block-template-10 .td-related-title .td-cur-simple-item,
    .global-block-template-11 .td-related-title .td-cur-simple-item,
    .global-block-template-12 .td-related-title .td-cur-simple-item,
    .global-block-template-13 .td-related-title .td-cur-simple-item,
    .global-block-template-14 .td-related-title .td-cur-simple-item,
    .global-block-template-15 .td-related-title .td-cur-simple-item,
    .global-block-template-16 .td-related-title .td-cur-simple-item,
    .global-block-template-17 .td-related-title .td-cur-simple-item {
        color: #009b3a;
    }

    a.vc_btn-black.vc_btn_square_outlined:hover,
    a.vc_btn-black.vc_btn_outlined:hover,
    .td-mega-menu-page .wpb_content_element ul li a:hover {
        color: #009b3a !important;
    }

    .td-next-prev-wrap a:hover,
    .td-load-more-wrap a:hover,
    .td-post-small-box a:hover,
    .page-nav .current,
    .page-nav:first-child > div,
    .td_category_template_8 .td-category-header .td-category a.td-current-sub-category,
    .td_category_template_4 .td-category-siblings .td-category a:hover,
    #bbpress-forums .bbp-pagination .current,
    .post .td_quote_box,
    .page .td_quote_box,
    a.vc_btn-black:hover,
    .td_block_template_5 .td-block-title > * {
        border-color: #009b3a;
    }

    .td_wrapper_video_playlist .td_video_currently_playing:after {
        border-color: #009b3a !important;
    }

    .header-search-wrap .td-drop-down-search:before {
        border-color: transparent transparent #009b3a transparent;
    }

    .block-title > span,
    .block-title > a,
    .block-title > label,
    .widgettitle,
    .widgettitle:after,
    .td-trending-now-title,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
    .td_block_template_1 .td-related-title .td-cur-simple-item,
    .woocommerce .product .products h2,
    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more {
        background-color: #009b3a;
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
        background-color: #009b3a !important;
    }

    .block-title,
    .td_block_template_1 .td-related-title,
    .wpb_tabs .wpb_tabs_nav,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container,
    .woocommerce div.product .woocommerce-tabs ul.tabs:before {
        border-color: #009b3a;
    }

    .td_block_wrap .td-subcat-item a.td-cur-simple-item {
        color: #009b3a;
    }


    .td-grid-style-4 .entry-title {
        background-color: rgba(0, 155, 58, 0.7);
    }


    .block-title > span,
    .block-title > span > a,
    .block-title > a,
    .block-title > label,
    .widgettitle,
    .widgettitle:after,
    .td-trending-now-title,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
    .td_block_template_1 .td-related-title .td-cur-simple-item,
    .woocommerce .product .products h2,
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
        background-color: #009b3a;
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
        background-color: #009b3a !important;
    }

    .block-title,
    .td_block_template_1 .td-related-title,
    .wpb_tabs .wpb_tabs_nav,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container,
    .woocommerce div.product .woocommerce-tabs ul.tabs:before,
    .td-theme-wrap .td_block_template_5 .td-block-title > *,
    .td-theme-wrap .td_block_template_17 .td-block-title,
    .td-theme-wrap .td_block_template_17 .td-block-title::before {
        border-color: #009b3a;
    }

    .td-theme-wrap .td_block_template_4 .td-block-title > *:before,
    .td-theme-wrap .td_block_template_17 .td-block-title::after {
        border-color: #009b3a transparent transparent transparent;
    }


    .td-theme-wrap .block-title > span,
    .td-theme-wrap .block-title > span > a,
    .td-theme-wrap .widget_rss .block-title .rsswidget,
    .td-theme-wrap .block-title > a,
    .widgettitle,
    .widgettitle > a,
    .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
    .td-related-title .td-cur-simple-item,
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
    .woocommerce .product .products h2,
    .td-theme-wrap .td_block_template_2 .td-block-title > *,
    .td-theme-wrap .td_block_template_3 .td-block-title > *,
    .td-theme-wrap .td_block_template_4 .td-block-title > *,
    .td-theme-wrap .td_block_template_5 .td-block-title > *,
    .td-theme-wrap .td_block_template_6 .td-block-title > *,
    .td-theme-wrap .td_block_template_6 .td-block-title:before,
    .td-theme-wrap .td_block_template_7 .td-block-title > *,
    .td-theme-wrap .td_block_template_8 .td-block-title > *,
    .td-theme-wrap .td_block_template_9 .td-block-title > *,
    .td-theme-wrap .td_block_template_10 .td-block-title > *,
    .td-theme-wrap .td_block_template_11 .td-block-title > *,
    .td-theme-wrap .td_block_template_12 .td-block-title > *,
    .td-theme-wrap .td_block_template_13 .td-block-title > span,
    .td-theme-wrap .td_block_template_13 .td-block-title > a,
    .td-theme-wrap .td_block_template_14 .td-block-title > *,
    .td-theme-wrap .td_block_template_14 .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option,
    .td-theme-wrap .td_block_template_14 .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option i,
    .td-theme-wrap .td_block_template_14 .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
    .td-theme-wrap .td_block_template_14 .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover i,
    .td-theme-wrap .td_block_template_15 .td-block-title > *,
    .td-theme-wrap .td_block_template_15 .td-block-title-wrap .td-wrapper-pulldown-filter,
    .td-theme-wrap .td_block_template_15 .td-block-title-wrap .td-wrapper-pulldown-filter i,
    .td-theme-wrap .td_block_template_16 .td-block-title > *,
    .td-theme-wrap .td_block_template_17 .td-block-title > * {
        color: #1c1c1c;
    }


    .td-header-wrap .td-header-top-menu-full,
    .td-header-wrap .top-header-menu .sub-menu {
        background-color: #ffffff;
    }

    .td-header-style-8 .td-header-top-menu-full {
        background-color: transparent;
    }

    .td-header-style-8 .td-header-top-menu-full .td-header-top-menu {
        background-color: #ffffff;
        padding-left: 15px;
        padding-right: 15px;
    }

    .td-header-wrap .td-header-top-menu-full .td-header-top-menu,
    .td-header-wrap .td-header-top-menu-full {
        border-bottom: none;
    }


    .td-header-top-menu,
    .td-header-top-menu a,
    .td-header-wrap .td-header-top-menu-full .td-header-top-menu,
    .td-header-wrap .td-header-top-menu-full a,
    .td-header-style-8 .td-header-top-menu,
    .td-header-style-8 .td-header-top-menu a {
        color: #2d2d2d;
    }


    .top-header-menu .current-menu-item > a,
    .top-header-menu .current-menu-ancestor > a,
    .top-header-menu .current-category-ancestor > a,
    .top-header-menu li a:hover {
        color: #009b3a;
    }


    .sf-menu ul .td-menu-item > a:hover,
    .sf-menu ul .sfHover > a,
    .sf-menu ul .current-menu-ancestor > a,
    .sf-menu ul .current-category-ancestor > a,
    .sf-menu ul .current-menu-item > a,
    .sf-menu > .current-menu-item > a:after,
    .sf-menu > .current-menu-ancestor > a:after,
    .sf-menu > .current-category-ancestor > a:after,
    .sf-menu > li:hover > a:after,
    .sf-menu > .sfHover > a:after,
    .td_block_mega_menu .td-next-prev-wrap a:hover,
    .td-mega-span .td-post-category:hover,
    .td-header-wrap .black-menu .sf-menu > li > a:hover,
    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > .sfHover > a,
    .header-search-wrap .td-drop-down-search:after,
    .header-search-wrap .td-drop-down-search .btn:hover,
    .td-header-wrap .black-menu .sf-menu > .current-menu-item > a,
    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > .current-category-ancestor > a {
        background-color: #009b3a;
    }


    .td_block_mega_menu .td-next-prev-wrap a:hover {
        border-color: #009b3a;
    }

    .header-search-wrap .td-drop-down-search:before {
        border-color: transparent transparent #009b3a transparent;
    }

    .td_mega_menu_sub_cats .cur-sub-cat,
    .td_mod_mega_menu:hover .entry-title a {
        color: #009b3a;
    }


    .td-header-wrap .td-header-menu-wrap .sf-menu > li > a,
    .td-header-wrap .header-search-wrap .td-icon-search {
        color: #1c1c1c;
    }


    @media (max-width: 767px) {
        body .td-header-wrap .td-header-main-menu {
            background-color: #fafafa !important;
        }
    }


    @media (max-width: 767px) {
        body #td-top-mobile-toggle i,
        .td-header-wrap .header-search-wrap .td-icon-search {
            color: #076633 !important;
        }
    }


    .td-menu-background:before,
    .td-search-background:before {
        background: #fafafa;
        background: -moz-linear-gradient(top, #fafafa 0%, #f2f2f2 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, #fafafa), color-stop(100%, #f2f2f2));
        background: -webkit-linear-gradient(top, #fafafa 0%, #f2f2f2 100%);
        background: -o-linear-gradient(top, #fafafa 0%, @mobileu_gradient_two_mob 100%);
        background: -ms-linear-gradient(top, #fafafa 0%, #f2f2f2 100%);
        background: linear-gradient(to bottom, #fafafa 0%, #f2f2f2 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fafafa', endColorstr='#f2f2f2', GradientType=0);
    }


    .td-mobile-content .current-menu-item > a,
    .td-mobile-content .current-menu-ancestor > a,
    .td-mobile-content .current-category-ancestor > a,
    #td-mobile-nav .td-menu-login-section a:hover,
    #td-mobile-nav .td-register-section a:hover,
    #td-mobile-nav .td-menu-socials-wrap a:hover i,
    .td-search-close a:hover i {
        color: #03990f;
    }


    .td-mobile-content li a,
    .td-mobile-content .td-icon-menu-right,
    .td-mobile-content .sub-menu .td-icon-menu-right,
    #td-mobile-nav .td-menu-login-section a,
    #td-mobile-nav .td-menu-logout a,
    #td-mobile-nav .td-menu-socials-wrap .td-icon-font,
    .td-mobile-close .td-icon-close-mobile,
    .td-search-close .td-icon-close-mobile,
    .td-search-wrap-mob,
    .td-search-wrap-mob #td-header-search-mob,
    #td-mobile-nav .td-register-section,
    #td-mobile-nav .td-register-section .td-login-input,
    #td-mobile-nav label,
    #td-mobile-nav .td-register-section i,
    #td-mobile-nav .td-register-section a,
    #td-mobile-nav .td_display_err,
    .td-search-wrap-mob .td_module_wrap .entry-title a,
    .td-search-wrap-mob .td_module_wrap:hover .entry-title a,
    .td-search-wrap-mob .td-post-date {
        color: #076633;
    }

    .td-search-wrap-mob .td-search-input:before,
    .td-search-wrap-mob .td-search-input:after,
    #td-mobile-nav .td-menu-login-section .td-menu-login span {
        background-color: #076633;
    }

    #td-mobile-nav .td-register-section .td-login-input {
        border-bottom-color: #076633 !important;
    }


    .td-header-wrap .td-logo-text-container .td-logo-text {
        color: #1c1c1c;
    }


    .td-menu-background,
    .td-search-background {
        /*background-image: url('http://rc4.ttu.edu.vn/wp-content/uploads/2017/03/Malcom-buuilding.jpg');*/
    }


    ul.sf-menu > .td-menu-item > a {
        font-family: "Roboto Slab";
        font-size: 14px;

    }

    .td_mega_menu_sub_cats .block-mega-child-cats a {
        font-family: "Roboto Slab";
        font-size: 14px;

    }

    .block-title > span,
    .block-title > a,
    .widgettitle,
    .td-trending-now-title,
    .wpb_tabs li a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab > a,
    .td-theme-wrap .td-related-title a,
    .woocommerce div.product .woocommerce-tabs ul.tabs li a,
    .woocommerce .product .products h2,
    .td-theme-wrap .td-block-title {
        font-family: "Roboto Slab";
        font-size: 19px;

    }

    .td_module_wrap .td-module-title {
        font-family: "Roboto Slab";

    }

    .td_block_trending_now .entry-title a,
    .td-theme-slider .td-module-title a,
    .td-big-grid-post .entry-title {
        font-family: "Roboto Slab";

    }

    #td-mobile-nav,
    #td-mobile-nav .wpb_button,
    .td-search-wrap-mob {
        font-family: "Roboto Slab";

    }


    .post .td-post-header .entry-title {
        font-family: "Roboto Slab";

    }

    .td-post-template-default .td-post-header .entry-title {
        font-size: 30px;
        line-height: 38px;

    }

    .td-post-content h1 {
        font-family: "Roboto Slab";

    }

    .td-post-content h2 {
        font-family: "Roboto Slab";

    }

    .td-post-content h3 {
        font-family: "Roboto Slab";

    }

    .td-post-content h4 {
        font-family: "Roboto Slab";

    }

    .td-page-title,
    .woocommerce-page .page-title,
    .td-category-title-holder .td-page-title {
        font-family: "Roboto Slab";

    }

    .widget_archive a,
    .widget_calendar,
    .widget_categories a,
    .widget_nav_menu a,
    .widget_meta a,
    .widget_pages a,
    .widget_recent_comments a,
    .widget_recent_entries a,
    .widget_text .textwidget,
    .widget_tag_cloud a,
    .widget_search input,
    .woocommerce .product-categories a,
    .widget_display_forums a,
    .widget_display_replies a,
    .widget_display_topics a,
    .widget_display_views a,
    .widget_display_stats {
        font-family: "Roboto Slab";
        font-size: 16px;

    }

    input[type="submit"],
    .td-read-more a,
    .vc_btn,
    .woocommerce a.button,
    .woocommerce button.button,
    .woocommerce #respond input#submit {
        font-family: "Roboto Slab";

    }

    .white-popup-block,
    .white-popup-block .wpb_button {
        font-family: "Roboto Slab";

    }
</style>
</div>
</body>
</html>