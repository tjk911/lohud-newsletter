<?php
header('Content-Type:text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html style="margin: 0;line-height: 1;height: 100%;width: 100% !important;">
<head style="margin: 0;">
<title style="margin: 0;">Rockland Angle | Lohud.com | The Journal News</title>
<meta name="apple-mobile-web-app-title" content="The Rockland Angle" style="margin: 0;"> <!-- sets the bookmark title for iOS -->
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" style="margin: 0;">
<meta name="keywords" content="lohud.com,Westchester, Rockland, Putnam,New York,News,local news,headlines,stories,world news" style="margin: 0;">
<meta name="description" content="The Rockland Angle Newsletter" style="margin: 0;">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" style="margin: 0;">
<meta http-equiv="pragma" content="no-cache" style="margin: 0;">
<meta http-equiv="expires" content="0" style="margin: 0;">
<meta http-equiv="cache-control" content="no-cache" style="margin: 0;">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="shortcut icon" href="http://www.gannett-cdn.com/sites/lohud/images/favicon.png" style="margin: 0;">
  <style style="margin: 0;">
/**********************************************
* Ink v1.0.5 - Copyright 2013 ZURB Inc        *
**********************************************/

/* Client-specific Styles & Reset */

#outlook a { 
  padding:0; 
} 

body{ 
  width:100% !important; 
  min-width: 100%;
  -webkit-text-size-adjust:100%; 
  -ms-text-size-adjust:100%; 
  margin:0; 
  padding:0;
}

.ExternalClass { 
  width:100%;
} 

.ExternalClass, 
.ExternalClass p, 
.ExternalClass span, 
.ExternalClass font, 
.ExternalClass td, 
.ExternalClass div { 
  line-height: 100%; 
} 

#backgroundTable { 
  margin:0; 
  padding:0; 
  width:100% !important; 
  line-height: 100% !important; 
}

img { 
  outline:none; 
  text-decoration:none; 
  -ms-interpolation-mode: bicubic;
  width: auto;
  max-width: 100%; 
  float: left; 
  clear: both; 
  display: block;
}

center {
  width: 100%;
  min-width: 580px;
}

a img { 
  border: none;
}

p {
  margin: 0 0 0 10px;
}

table {
  border-spacing: 0;
  border-collapse: collapse;
}

td { 
  word-wrap: normal; white-space: normal;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
  border-collapse: collapse !important; 
}

table, tr, td {
  padding: 0;
  vertical-align: top;
  text-align: left;
}

hr {
  color: #d9d9d9; 
  background-color: #d9d9d9; 
  height: 1px; 
  border: none;
}

/* Responsive Grid */

table.body {
  max-height: 400px; /*height:100%;*/
  width: 100%;
}

table.container {
  width: 580px;
  margin: 0 auto;
  text-align: inherit;
  background-color: #FFFFFF; /*#FFFFFF*/
}

table.row { 
  padding: 0px; 
  width: 100%;
  position: relative;
}

table.container table.row {
  display: block;
}

td.wrapper {
  padding: 10px 20px 0px 0px;
  position: relative;
}

table.columns,
table.column {
  margin: 0 auto;
}

table.columns td,
table.column td {
  padding: 0px 0px 10px; 
}

table.columns td.sub-columns,
table.column td.sub-columns,
table.columns td.sub-column,
table.column td.sub-column {
  padding-right: 10px;
}

td.sub-column, td.sub-columns {
  min-width: 0px;
}

table.row td.last,
table.container td.last {
  padding-right: 0px;
}

table.one { width: 30px; }
table.two { width: 80px; }
table.three { width: 130px; }
table.four { width: 180px; }
table.five { width: 230px; }
table.six { width: 280px; }
table.seven { width: 330px; }
table.eight { width: 380px; }
table.nine { width: 430px; }
table.ten { width: 480px; }
table.eleven { width: 530px; }
table.twelve { width: 580px; }

table.one center { min-width: 30px; }
table.two center { min-width: 80px; }
table.three center { min-width: 130px; }
table.four center { min-width: 180px; }
table.five center { min-width: 230px; }
table.six center { min-width: 280px; }
table.seven center { min-width: 330px; }
table.eight center { min-width: 380px; }
table.nine center { min-width: 430px; }
table.ten center { min-width: 480px; }
table.eleven center { min-width: 530px; }
table.twelve center { min-width: 580px; }

table.one .panel center { min-width: 10px; }
table.two .panel center { min-width: 60px; }
table.three .panel center { min-width: 110px; }
table.four .panel center { min-width: 160px; }
table.five .panel center { min-width: 210px; }
table.six .panel center { min-width: 260px; }
table.seven .panel center { min-width: 310px; }
table.eight .panel center { min-width: 360px; }
table.nine .panel center { min-width: 410px; }
table.ten .panel center { min-width: 460px; }
table.eleven .panel center { min-width: 510px; }
table.twelve .panel center { min-width: 560px; }

.body .columns td.one,
.body .column td.one { width: 8.333333%; }
.body .columns td.two,
.body .column td.two { width: 16.666666%; }
.body .columns td.three,
.body .column td.three { width: 25%; }
.body .columns td.four,
.body .column td.four { width: 33.333333%; }
.body .columns td.five,
.body .column td.five { width: 41.666666%; }
.body .columns td.six,
.body .column td.six { width: 50%; }
.body .columns td.seven,
.body .column td.seven { width: 58.333333%; }
.body .columns td.eight,
.body .column td.eight { width: 66.666666%; }
.body .columns td.nine,
.body .column td.nine { width: 75%; }
.body .columns td.ten,
.body .column td.ten { width: 83.333333%; }
.body .columns td.eleven,
.body .column td.eleven { width: 91.666666%; }
.body .columns td.twelve,
.body .column td.twelve { width: 100%; }

td.offset-by-one { padding-left: 50px; }
td.offset-by-two { padding-left: 100px; }
td.offset-by-three { padding-left: 150px; }
td.offset-by-four { padding-left: 200px; }
td.offset-by-five { padding-left: 250px; }
td.offset-by-six { padding-left: 300px; }
td.offset-by-seven { padding-left: 350px; }
td.offset-by-eight { padding-left: 400px; }
td.offset-by-nine { padding-left: 450px; }
td.offset-by-ten { padding-left: 500px; }
td.offset-by-eleven { padding-left: 550px; }

td.expander {
  visibility: hidden;
  width: 0px;
  padding: 0 !important;
}

table.columns .text-pad,
table.column .text-pad {
  padding-left: 10px;
  padding-right: 10px;
}

table.columns .left-text-pad,
table.columns .text-pad-left,
table.column .left-text-pad,
table.column .text-pad-left {
  padding-left: 10px;
}

table.columns .right-text-pad,
table.columns .text-pad-right,
table.column .right-text-pad,
table.column .text-pad-right {
  padding-right: 10px;
}

/* Block Grid */

.block-grid {
  width: 100%;
  max-width: 580px;
}

.block-grid td {
  display: inline-block;
  padding:10px;
}

.two-up td {
  width:270px;
}

.three-up td {
  width:173px;
}

.four-up td {
  width:125px;
}

.five-up td {
  width:96px;
}

.six-up td {
  width:76px;
}

.seven-up td {
  width:62px;
}

.eight-up td {
  width:52px;
}

/* Alignment & Visibility Classes */

table.center, td.center {
  text-align: center;
}

h1.center,
h2.center,
h3.center,
h4.center,
h5.center,
h6.center {
  text-align: center;
}

span.center {
  display: block;
  width: 100%;
  text-align: center;
}

img.center {
  margin: 0 auto;
  float: none;
}

.show-for-small,
.hide-for-desktop {
  display: none;
}

/* Typography */

body, table.body, h1, h2, h3, h4, h5, h6, p, td { 
  color: #222222;
  font-family: "Tahoma", "Geneva", sans-serif; 
  font-weight: normal; 
  padding:0; 
  margin: 0;
  text-align: left; 
  line-height: 1.3;
}

h1, h2, h3, h4, h5, h6 {
  word-break: normal;
}

h1 {font-size: 40px;}
h2 {font-size: 36px;}
h3 {font-size: 32px;}
h4 {font-size: 28px;}
h5 {font-size: 24px;}
h6 {font-size: 20px;}
body, table.body, p, td {font-size: 14px;line-height:19px;}

p.lead, p.lede, p.leed {
  font-size: 18px;
  line-height:21px;
}

p { 
  margin-bottom: 10px;
}

small {
  font-size: 10px;
}

a {
  color: #444; /*2ba6cb*/
  text-decoration: none;
}

a:hover { 
  color: #2795b6 !important;
}

a:active { 
  color: #094078 !important; /*2795b6*/
}

a:visited { 
  color: #2ba6cb !important;
}

h1 a, 
h2 a, 
h3 a, 
h4 a, 
h5 a, 
h6 a {
  color: #444;
}

h1 a:active, 
h2 a:active,  
h3 a:active, 
h4 a:active, 
h5 a:active, 
h6 a:active { 
  color: #2ba6cb !important; 
} 

h1 a:visited, 
h2 a:visited,  
h3 a:visited, 
h4 a:visited, 
h5 a:visited, 
h6 a:visited { 
  color: #2ba6cb !important; 
} 

/* Panels */

.panel {
  background: #f2f2f2;
  border: 1px solid #d9d9d9;
  padding: 10px !important;
}

.sub-grid table {
  width: 100%;
}

.sub-grid td.sub-columns {
  padding-bottom: 0;
}

/* Buttons */

table.button,
table.tiny-button,
table.small-button,
table.medium-button,
table.large-button {
  width: 100%;
  overflow: hidden;
}

table.button td,
table.tiny-button td,
table.small-button td,
table.medium-button td,
table.large-button td {
  display: block;
  width: auto !important;
  text-align: center;
  background: #2ba6cb;
  border: 1px solid #2284a1;
  color: #ffffff;
  padding: 8px 0;
}

table.tiny-button td {
  padding: 5px 0 4px;
}

table.small-button td {
  padding: 8px 0 7px;
}

table.medium-button td {
  padding: 12px 0 10px;
}

table.large-button td {
  padding: 21px 0 18px;
}

table.button td a,
table.tiny-button td a,
table.small-button td a,
table.medium-button td a,
table.large-button td a {
  font-weight: bold;
  text-decoration: none;
  font-family: Helvetica, Arial, sans-serif;
  color: #ffffff;
  font-size: 16px;
}

table.tiny-button td a {
  font-size: 12px;
  font-weight: normal;
}

table.small-button td a {
  font-size: 16px;
}

table.medium-button td a {
  font-size: 20px;
}

table.large-button td a {
  font-size: 24px;
}

table.button:hover td,
table.button:visited td,
table.button:active td {
  background: #2795b6 !important;
}

table.button:hover td a,
table.button:visited td a,
table.button:active td a {
  color: #fff !important;
}

table.button:hover td,
table.tiny-button:hover td,
table.small-button:hover td,
table.medium-button:hover td,
table.large-button:hover td {
  background: #2795b6 !important;
}

table.button:hover td a,
table.button:active td a,
table.button td a:visited,
table.tiny-button:hover td a,
table.tiny-button:active td a,
table.tiny-button td a:visited,
table.small-button:hover td a,
table.small-button:active td a,
table.small-button td a:visited,
table.medium-button:hover td a,
table.medium-button:active td a,
table.medium-button td a:visited,
table.large-button:hover td a,
table.large-button:active td a,
table.large-button td a:visited {
  color: #ffffff !important; 
}

table.secondary td {
  background: #e9e9e9;
  border-color: #d0d0d0;
  color: #555;
}

table.secondary td a {
  color: #555;
}

table.secondary:hover td {
  background: #d0d0d0 !important;
  color: #555;
}

table.secondary:hover td a,
table.secondary td a:visited,
table.secondary:active td a {
  color: #555 !important;
}

table.success td {
  background: #5da423;
  border-color: #457a1a;
}

table.success:hover td {
  background: #457a1a !important;
}

table.alert td {
  background: #c60f13;
  border-color: #970b0e;
}

table.alert:hover td {
  background: #970b0e !important;
}

table.radius td {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

table.round td {
  -webkit-border-radius: 500px;
  -moz-border-radius: 500px;
  border-radius: 500px;
}

/* Outlook First */

body.outlook p {
  display: inline !important;
}

/*  Media Queries */

@media only screen and (max-width: 600px) {

  table[class="body"] img {
    width: auto !important;
    height: auto !important;
  }

  table[class="body"] center {
    min-width: 0 !important;
  }

  table[class="body"] .container {
    width: 95% !important;
  }

  table[class="body"] .row {
    width: 99.5% !important; /*100*/
    display: block !important;
  }

  table[class="body"] .wrapper {
    display: block !important;
    padding-right: 0 !important;
  }

  table[class="body"] .columns,
  table[class="body"] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important;
  }

  table[class="body"] .wrapper.first .columns,
  table[class="body"] .wrapper.first .column {
    display: table !important;
  }

  table[class="body"] table.columns td,
  table[class="body"] table.column td {
    width: 100% !important;
  }

  table[class="body"] .columns td.one,
  table[class="body"] .column td.one { width: 8.333333% !important; }
  table[class="body"] .columns td.two,
  table[class="body"] .column td.two { width: 16.666666% !important; }
  table[class="body"] .columns td.three,
  table[class="body"] .column td.three { width: 25% !important; }
  table[class="body"] .columns td.four,
  table[class="body"] .column td.four { width: 33.333333% !important; }
  table[class="body"] .columns td.five,
  table[class="body"] .column td.five { width: 41.666666% !important; }
  table[class="body"] .columns td.six,
  table[class="body"] .column td.six { width: 50% !important; }
  table[class="body"] .columns td.seven,
  table[class="body"] .column td.seven { width: 58.333333% !important; }
  table[class="body"] .columns td.eight,
  table[class="body"] .column td.eight { width: 66.666666% !important; }
  table[class="body"] .columns td.nine,
  table[class="body"] .column td.nine { width: 75% !important; }
  table[class="body"] .columns td.ten,
  table[class="body"] .column td.ten { width: 83.333333% !important; }
  table[class="body"] .columns td.eleven,
  table[class="body"] .column td.eleven { width: 91.666666% !important; }
  table[class="body"] .columns td.twelve,
  table[class="body"] .column td.twelve { width: 100% !important; }

  table[class="body"] td.offset-by-one,
  table[class="body"] td.offset-by-two,
  table[class="body"] td.offset-by-three,
  table[class="body"] td.offset-by-four,
  table[class="body"] td.offset-by-five,
  table[class="body"] td.offset-by-six,
  table[class="body"] td.offset-by-seven,
  table[class="body"] td.offset-by-eight,
  table[class="body"] td.offset-by-nine,
  table[class="body"] td.offset-by-ten,
  table[class="body"] td.offset-by-eleven {
    padding-left: 0 !important;
  }

  table[class="body"] table.columns td.expander {
    width: 1px !important;
  }

  table[class="body"] .right-text-pad,
  table[class="body"] .text-pad-right {
    padding-left: 10px ;
  }

  table[class="body"] .left-text-pad,
  table[class="body"] .text-pad-left {
    padding-right: 10px !important;
  }

  table[class="body"] .hide-for-small,
  table[class="body"] .show-for-desktop {
    display: none !important;
  }

  table[class="body"] .show-for-small,
  table[class="body"] .hide-for-desktop {
    display: inherit !important;
  }
}

  </style>
  <style style="margin: 0;">

    table.facebook td {
      background: #3b5998;
      border-color: #2d4473;
    }

    table.facebook:hover td {
      background: #2d4473 !important;
    }

    table.twitter td {
      background: #00acee;
      border-color: #0087bb;
    }

    table.twitter:hover td {
      background: #0087bb !important;
    }

    table.google-plus td {
      background-color: #DB4A39;
      border-color: #CC0000;
    }

    table.google-plus:hover td {
      background: #CC0000 !important;
    }

    .template-label {
      color: #ffffff;
      font-weight: bold;
      font-size: 11px;
    }

    .callout .wrapper {
      padding-bottom: 20px;
    }

    .callout .panel {
      background: #ECF8FF !important;
      border-color: #b9e5ff !important;
    }

    .header {
      background: #999999;
    }

    .footer .wrapper {
      background: #ebebeb;
    }

    .footer h5 {
      padding-bottom: 10px;
    }

    table.columns .text-pad {
      padding-left: 10px;
      padding-right: 10px;
    }

    table.columns .left-text-pad {
      padding-left: 10px; /*10px*/
      padding-right: 10px; /*originally none*/
    }

    table.columns .right-text-pad {
      padding-right: 10px;
    }

    .temp-pad {
      padding-top:0px !important;
      padding-left:10px !important;
    }

    @media only screen and (max-width: 600px) {

      table[class="body"] .right-text-pad {
        padding-left: 10px ;
      }

      table[class="body"] .left-text-pad {
        padding-right: 10px !important;
      }

      table[class="body"] .temp-pad {
        padding-left:0px !important;
      }

      table[class="body"] .cards {
        border:none;
      }
    }

    

    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure, 
    footer, header, hgroup, menu, nav, section {
      display: block;
    }
    html, body {
      line-height: 1;
        width: 100% !important;
      height: 100%;
    }
    ol, ul {
      list-style: none;
    }
    blockquote, q {
      quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
      content: '';
      content: none;
    }

    * {
      margin: 0;
    }

    @font-face {
        font-family: 'Futura Today';
        src: url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_today_normal.eot);
        src: url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_today_normal.eot?#iefix) format('embedded-opentype'), url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_today_normal.woff) format('woff'), url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_today_normal.ttf) format('truetype'), url(../../fonts/futura_bold-webfont.svg#FuturaBold) format('svg');
        font-style: normal;
    }
    @font-face {
        font-family: 'Futura Today Light';
        src: url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_today_light.eot);
        src: url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_today_light.eot?#iefix) format('embedded-opentype'), url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_today_light.woff) format('woff'), url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_today_light.ttf) format('truetype'), url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_light-webfont.svg#FuturaLight) format('svg');
        font-style: normal;
    }
    @font-face {
        font-family: 'Futura Today Bold';
        src: url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_today_bold.eot);
        src: url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_today_bold.eot?#iefix) format('embedded-opentype'), url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_today_bold.woff) format('woff'), url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_today_bold.ttf) format('truetype'), url(http://i.usatoday.net/news/graphics/elections-2012-app/static/fonts/futura_bold-webfont.svg#FuturaBold) format('svg');
        font-style: normal;
    }

    /* Primary Styles */
    body {font: 12px/1.231 Arial, Helvetica, sans-serif; background-color: #9CC6E3;}
    h1, h2, h3, h4, h5, h6 {color:#333;}
    h1 {font-weight: 700; font-size: 36px;}
    h3 {font-family: 'helvetica','arial',sans-serif; font-weight: 700; color: #333; margin: 5px 0 3px;}
    p {font: 1em 'arial','helvetica',sans-serif; color: #666;}
    strong {font-weight: 700;}
    a {text-decoration: none;}

    img {border: 0; max-width: 100%;}
    img.floatleft { float: left; margin: 0 10px 0 0; }
    img.floatright { float: right; margin: 0 0 0 10px; }
    cite {float: right; font-size: 11px; color: #707070}

    /* base project classes */
    .outter-wrap {background:#fff; margin: 0 auto 20px; padding: 0; width: 100%; max-width:918px; border: 1px solid #ccc; border-top: none; position: relative;}
    .outter-wrap:before {
      content:""; 
      display: block; 
      border-top:10px solid rgb(0, 155, 255); 
      position: relative; 
      width: 100.2%; 
      left: -1px;
    }

    .head-wrap {
      padding: 0; 
      margin: 0 0 18px 0;
    }
    .head-wrap h1 {font: 700 32px/34px 'helvetica','arial',sans-serif; margin:0; padding: 15px 0 0;}
    .head-wrap h2{font: 20px 'Futura Today Bold', Arial, Helvetica, sans-serif; padding: 15px 20px 0; text-transform: uppercase;}
    .head-wrap p {margin: 7px 20px;}

    .main-content-wrap {display: block; margin: 0 20px;}
    .main-content-wrap p {margin: 0 0 20px;}

    .footer-wrap {padding: 10px; margin: 20px 0 0; background: #ececec; min-height: 20px;}
    .footer-wrap h6 {float: left; color: #999; font: normal 11px/1.5 arial, Helvetica, sans-serif; margin: 2px 0 0 10px; width: 80%;}
    .footer-wrap h6 strong {font-weight: 700;}
    .footer-wrap a.credits_btn {background: url('../graphics/btns/info-btn/base.png'); cursor: pointer; display: block; float: right; height: 40px; width: 40px;}


  </style>
  <style type="text/css" style="margin: 0;">
    /*Kai's tweaks*/

    .cards {
      border: solid 1px;
      border-color:#888;
    }
  </style>
</head>
<body style="margin: 0;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;padding: 0;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;text-align: left;line-height: 1;font-size: 14px;height: 100%;font: 12px/1.231 Arial, Helvetica, sans-serif;background-color: #9CC6E3;width: 100% !important;">
<div id="banner" style="height: 77px;margin: 0;"></div>
  <script style="margin: 0;">
  if(window.self==window.top) {
    var banner = document.getElementById("banner");
    banner.style.backgroundColor = "black"; 
    banner.innerHTML = '<a href="http://www.lohud.com" style="margin: 0;color: #444;text-decoration: none;"><img src="http://data.lohud.com/lohud%20logos/site-masthead-logo.png" width="300" style="margin: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto;max-width: 100%;float: left;clear: both;display: block;border: none;"></a><br style="margin: 0;">';
  }
  </script>  
  <table class='body' style='max-height: 10px;margin: 0;border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;width: 100%;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;'>
        <!-- Pre-Header Text -->
      <tr class='preheader' style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
          <td style='padding-top: 10px;padding-bottom: 10px;font-family: Arial,Helvetica,sans-serif;font-weight: normal;color: rgb(39, 39, 39);font-size: 11px;margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0;vertical-align: top;text-align: left;line-height: 19px;border-collapse: collapse !important;'>
              
          </td>
      </tr>
      <!-- end Pre-Header-->
      <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
          <td class='viewOnline' style='text-align: center;padding-top: 0px;padding-bottom: 10px;font-family: Arial, Helvetica, sans-serif;color: #272727;font-size: 11px;margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0;vertical-align: top;font-weight: normal;line-height: 19px;border-collapse: collapse !important; padding:30px 0px 10px 0px;'>
              <center style='margin: 0;width: 100%;min-width: 580px;'>
                <span class='block' style='margin: 0;'>Having trouble viewing this email?</span> <span class='divider' style='margin: 0;'>|</span>
                <span class='block' style='margin: 0;'>
                    <a href='%%view_email_url%%' target='_blank' style='color: #272727;margin: 0;text-decoration: none;'>View it in your browser</a>
                </span>
              </center>
          </td>
      </tr>
  </table>
  <table class='body' style='margin: 0;border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;max-height: 400px;width: 100%;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;'>
    <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
      <td class='center' align='center' valign='top' style='margin: 0px!important;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0;vertical-align: top;text-align: center;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
        <center style='margin: 0;width: 100%;min-width: 580px;'>
          <table class='row' style='margin: 0;border-spacing: 0;border-collapse: collapse;padding: 0px;vertical-align: top;text-align: left;width: 100%;position: relative;'>
            <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
              <td class='center' align='center' style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0;vertical-align: top;text-align: center;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                <center style='margin: 0;width: 100%;min-width: 580px;'>
                  <table class='container' style='width: 600px;margin-top: 15px;margin: 0 auto;border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: inherit;background-color: #FFFFFF;'>
                    <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
                      <td class='wrapper last' style='padding-top: 0px;margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0px 20px 0px 0px;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;position: relative;padding-right: 0px;border-collapse: collapse !important;'>
                        <table class='twelve columns' style='width: 600px;margin: 0 auto;border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;'>
                          <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
                            <td style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0px 0px 10px 0px;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'> <!-- class='six pull-two sub-columns'  -->
                              <img src='http://data.lohud.com/newsletter/rocklandangle/header.jpg' style='width: 100%;margin: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;max-width: 100%;float: left;clear: both;display: block;border: 0;'> <!-- height:14em; -->
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </center>
              </td>
            </tr>
          </table>
          <table class='container' style='margin: 0 auto;border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: inherit;width: 580px;background-color: #FFFFFF;'>
            <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
              <td style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                <table class='row' style='width: 600px;padding-bottom: 10px;margin: 0;border-spacing: 0;border-collapse: collapse;padding: 0px;vertical-align: top;text-align: left;position: relative;display: block;'>
                <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                   <td class='wrapper last temp-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 10px 20px 0px 0px; padding-left: 10px ; padding-right: 0px; padding-top: 0px !important; position: relative; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                    <table class='twelve columns cards' style='border: solid 1px; border-collapse: collapse; border-color: #888; border-spacing: 0; margin: 0 auto; padding: 0; text-align: left; vertical-align: top; width: 580px;'>
                     <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                      <td style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-bottom: 0px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                       <div style='background-color: #0074BE; margin: 0; margin-bottom: 2px; padding-bottom: 3px; padding-top: 3px; width: 100%;'>
                        <h5 style='color: #fff; display: inline-block; font-family: Tahoma, Geneva, sans-serif; font-size: 1.2em; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; padding-left: 10px; text-align: left; word-break: normal;'>TODAY IN ROCKLAND</h5>
                       </div>
                      </td>
                     </tr>
                     <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                      <td class='left-text-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-left: 10px; padding-right: 10px; padding-top: 10px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                      <?php
                      $jsonIntro = file_get_contents("entries.json");
                      $jsondata = json_decode($jsonIntro, true);
                      
                      echo "
                      
                                <p style='color: #666; font-family: Times New Roman, serif; font-size: 1.25em; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; text-indent: 20px;'>".$jsondata['p1']."</p>
                              
                      ";
                          ?>
                        </td>
                      </tr>
                    </table>
                    <!-- <hr> -->
                  </td>
                </tr>
                </table>
                <table class='container' style='background-color: #FFFFFF; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; padding-bottom: 10px; text-align: inherit; vertical-align: top; width: 600px;'>
                 <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                  <td align='center' class='center' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0; text-align: center; vertical-align: top; word-wrap: normal; white-space: normal;'>
                   <center style='margin: 0; min-width: 580px; width: 100%;'>
                    <table class='row' style='border-collapse: collapse; border-spacing: 0; display: block; margin: 0; padding: 0px; position: relative; text-align: left; vertical-align: top; width: 100%;'>
                     <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                      <td class='wrapper last temp-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 10px 20px 0px 0px; padding-left: 10px ; padding-right: 0px; padding-top: 0px !important; position: relative; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                       <table class='twelve columns' style='border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: left; vertical-align: top; width: 580px;'>
                        <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                         <td align='center' class='center' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-bottom: 10px; text-align: center; vertical-align: top; word-wrap: normal; white-space: normal;'><a href="http://offers.lohud.com/wsf"><img class='center' src='http://data.lohud.com/newsletter/rocklandangle/bannerad.JPG' style='border: 0; clear: both; display: block; float: none; margin: 0 auto; max-width: 100%; outline: none; text-align: center; text-decoration: none; width: auto;' /></a></td>
                         <td class='expander' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; text-align: left; vertical-align: top; visibility: hidden; width: 0px; word-wrap: normal; white-space: normal;'>
                         </td>
                        </tr>
                       </table>
                      </td>
                     </tr>
                    </table>
                   </center>
                  </td>
                 </tr>
                </table>
              </td>
            </tr>
          </table>
                  <?php
                  $file = fopen("apikeys.txt", "r");
                  while(! feof($file)) {
                    $readarr = fgets($file);
                    $readarr = explode('|',$readarr);
                    $api1 = $readarr[0];
                    $api2 = $readarr[1];
                  }
                  $json1 = file_get_contents("http://api-internal.usatoday.com/PresentationService/v3/sites/PWES/fronts/newsletter_rockland/layouts?apiKey=".$api1);
                  // echo $json1;
                  $array1 = json_decode($json1, true);
                  $assets = array();
                  $filename = 'stories.json';
                  date_default_timezone_set('America/New_York');
                  header('Content-Type: application/json');
                  $filetime = filemtime($filename);


                  for ($i=0; $i < count($array1['layoutModules']); $i++){
                      for ($x=0; $x < count($array1['layoutModules'][$i]['contents']); $x++){
                          $assets[] = $array1['layoutModules'][$i]['contents'][$x]['id'];
                          $headline[] = $array1['layoutModules'][$i]['contents'][$x]['headline'];
                      };
                  };
                  $headlines = array_combine($assets, $headline);
                  $assets_comma_string = implode ("+", $assets);

                  if (time() - $filetime >= 30){
                    $searchv4 = "http://api.gannett-cdn.com/prod/Search/v4/assets/proxy?fq=statusname:published&fq=sitecode:PWES&sc=PWES&apiKey=newsletter-search&debug=false&format=json&fq=assettypename:(text%20gallery%20video)&fq=assetid:(".$assets_comma_string.")&format=json&api_key=".$api2;
                    $json2 = file_get_contents($searchv4);
                    // echo $searchv4;
                    $cleanup = str_replace("’", "'", $json2);
                    $data2 = json_decode($cleanup, true);
                    $save = file_put_contents('stories.json', serialize($data2['results']));
                    $stories = unserialize(file_get_contents('stories.json'));
                  } else {
                    $stories = unserialize(file_get_contents('stories.json'));
                  }

                  for ( $a1 = 0; $a1 < count($assets); $a1++ ) {
                    for ( $s = 0; $s < count($stories); $s++ ) {
                      if ( $a1 == 0 ){
                        if ($assets[$a1] == $stories[$s]['assetId']) {
                          $head = $headlines[$stories[$s]['assetId']];
                            echo " 
                            <table class='container' style='background-color: #FFFFFF; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;'>
                             <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                              <td style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                               <table class='row' style='border-collapse: collapse; border-spacing: 0; display: block; margin: 0; padding: 0px; padding-bottom: 10px; position: relative; text-align: left; vertical-align: top; width: 600px;'>
                                <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                 <td class='wrapper last temp-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 10px 20px 0px 0px; padding-left: 10px ; padding-right: 0px; padding-top: 0px !important; position: relative; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                  <table class='twelve columns cards' style='border: solid 1px; border-collapse: collapse; border-color: #888; border-spacing: 0; margin: 0 auto; padding: 0; text-align: left; vertical-align: top; width: 580px;'>
                                   <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                    <td style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-bottom: 0px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                    <div style='background-color: #0074BE; margin: 0; margin-bottom: 2px; padding-bottom: 3px; padding-top: 3px; width: 100%;'>
                                      <h5 style='color: #fff; display: inline-block; font-family: Tahoma, Geneva, sans-serif; font-size: 1.2em; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; padding-left: 10px; text-align: left; word-break: normal;'>".(($stories[$s]['ssts']['subTopic'] == null) ? ($stories[$s]['ssts']['topic'] == null) ? ($stories[$s]['ssts']['subSection'] == null) ? strtoupper($stories[$s]['ssts']['section']) : strtoupper($stories[$s]['ssts']['subSection']) : strtoupper($stories[$s]['ssts']['topic']) : strtoupper($stories[$s]['ssts']['subTopic']))."</h5>
                                    </div>
                                   <table class='twelve columns' style='border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: left; vertical-align: top; width: 580px;'>
                                    <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                     <td class='wrapper last temp-pad hide-for-small' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-left: 10px ; padding-right: 0px; padding-top: 0px !important; position: relative; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                      <table class='five columns' style='border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: left; vertical-align: top; width: 230px;'>
                                       <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                        <td style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'><img class='hide-for-small' src='".$stories[$s]['photo']['crops']['front_thumb']."' style='border: 0; clear: both; display: block; float: left; margin: 0; max-height: 240px; max-width: 100%; outline: none; padding-top: 15px; text-decoration: none; width: 260px;' /></td>
                                        <td class='expander' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; text-align: left; vertical-align: top; visibility: hidden; width: 0px; word-wrap: normal; white-space: normal;'>
                                        </td>
                                       </tr>
                                      </table>
                                     </td>
                                     <td class='wrapper last' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-right: 0px; position: relative; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                      <table class='seven columns' style='border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: left; vertical-align: top; width: 330px;'>
                                       <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                        <td class='left-text-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-left: 10px; padding-right: 10px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                         <h4 style='color: #333; display: inline-block; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 1.4em; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; padding-top: 10px; text-align: left; word-break: normal;'><a href='".$stories[$s]['urls']['longUrl']."?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=rockland_angle' style='color: #444; margin: 0; text-decoration: none;'>".$head."</a></h4>  
                                          "
                                          .
                                          (($stories[$s]['attribution']['author'] == null ) ? "" : "<p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'><i style='font-size: .8em; margin: 0;'>Author: ".$stories[$s]['attribution']['author']." | ".$stories[$s]['attribution']['publication']."</i></p>")
                                          .
                                          "<p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 1.2em; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'>".$stories[$s]['promoBrief']."<p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'><u style='margin: 0;'><a href='".$stories[$s]['urls']['longUrl']."?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=rockland_angle' style='color: #444; margin: 0; text-decoration: none;'>READ STORY</a></u></p>
                                        </td>
                                        <td class='expander' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; text-align: left; vertical-align: top; visibility: hidden; width: 0px; word-wrap: normal; white-space: normal;'>
                                        </td>
                                       </tr>
                                      </table>
                                     </td>
                                    </tr>
                                   </table>
                                  </td>
                                 </tr>
                                </table>
                                <hr style='background-color: #d9d9d9; border: none; color: #d9d9d9; height: 1px; margin: 0;' />
                               </td>
                              </tr>
                             </table>
                            </td>
                           </tr>
                          </table>";
                        }
                      } elseif ( $a1 == 1 ){
                        if ($assets[$a1] == $stories[$s]['assetId']){
                          $head = $headlines[$stories[$s]['assetId']];
                             echo "

                            <table class='container' style='background-color: #FFFFFF; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;'>
                             <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                              <td style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                               <table class='row' style='border-collapse: collapse; border-spacing: 0; display: block; margin: 0; padding: 0px; padding-bottom: 10px; position: relative; text-align: left; vertical-align: top; width: 600px;'>
                                <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                 <td class='wrapper last temp-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 10px 20px 0px 0px; padding-left: 10px ; padding-right: 0px; padding-top: 0px !important; position: relative; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                  <table class='twelve columns cards' style='border: solid 1px; border-collapse: collapse; border-color: #888; border-spacing: 0; margin: 0 auto; padding: 0; text-align: left; vertical-align: top; width: 580px;'>
                                   <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                    <td style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-bottom: 0px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                     <div style='background-color: #0074BE; margin: 0; margin-bottom: 2px; padding-bottom: 3px; padding-top: 3px; width: 100%;'>
                                      <h5 style='color: #fff; display: inline-block; font-family: Tahoma, Geneva, sans-serif; font-size: 1.2em; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; padding-left: 10px; text-align: left; word-break: normal;'>".(($stories[$s]['ssts']['subTopic'] == null) ? ($stories[$s]['ssts']['topic'] == null) ? ($stories[$s]['ssts']['subSection'] == null) ? strtoupper($stories[$s]['ssts']['section']) : strtoupper($stories[$s]['ssts']['subSection']) : strtoupper($stories[$s]['ssts']['topic']) : strtoupper($stories[$s]['ssts']['subTopic']))."</h5>
                                     </div>
                                    </td>
                                   </tr>
                                   <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                    <td class='left-text-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-left: 10px; padding-right: 10px; padding-top: 10px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                     <h4 style='color: #333; display: inline-block; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 1.4em; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; word-break: normal;'><a href='".$stories[$s]['urls']['longUrl']."?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=rockland_angle' style='color: #444; margin: 0; text-decoration: none;'>".$head."</a></h4>
                                      "
                                      .
                                      (($stories[$s]['attribution']['author'] == null ) ? "" : "<p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'><i style='font-size: .8em; margin: 0;'>Author: ".$stories[$s]['attribution']['author']." | ".$stories[$s]['attribution']['publication']."</i></p>")
                                      .
                                      "<p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 1.2em; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'>".$stories[$s]['promoBrief']."</p>
                                      <p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'><u style='margin: 0;'><a href='".$stories[$s]['urls']['longUrl']."?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=rockland_angle' style='color: #444; margin: 0; text-decoration: none;'>READ STORY</a></u></p>
                                    </td>
                                  </tr>
                                </table>
                                <!-- <hr> -->
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>";
                        }
                      } elseif ( $a1 == 2 ){
                        if ($assets[$a1] == $stories[$s]['assetId']){
                          $head = $headlines[$stories[$s]['assetId']];
                           echo "
                           <table class='container' style='background-color: #FFFFFF; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;'>
                             <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                              <td style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                               <table class='row' style='border-collapse: collapse; border-spacing: 0; display: block; margin: 0; padding: 0px; padding-bottom: 10px; position: relative; text-align: left; vertical-align: top; width: 600px;'>
                                <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                 <td class='wrapper last temp-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 10px 20px 0px 0px; padding-left: 10px ; padding-right: 0px; padding-top: 0px !important; position: relative; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                  <table class='twelve columns cards' style='border: solid 1px; border-collapse: collapse; border-color: #888; border-spacing: 0; margin: 0 auto; padding: 0; text-align: left; vertical-align: top; width: 580px;'>
                                   <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                    <td style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-bottom: 0px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                     <div style='background-color: #0074BE; margin: 0; margin-bottom: 2px; padding-bottom: 3px; padding-top: 3px; width: 100%;'>
                                      <h5 style='color: #fff; display: inline-block; font-family: Tahoma, Geneva, sans-serif; font-size: 1.2em; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; padding-left: 10px; text-align: left; word-break: normal;'>".(($stories[$s]['ssts']['subTopic'] == null) ? ($stories[$s]['ssts']['topic'] == null) ? ($stories[$s]['ssts']['subSection'] == null) ? strtoupper($stories[$s]['ssts']['section']) : strtoupper($stories[$s]['ssts']['subSection']) : strtoupper($stories[$s]['ssts']['topic']) : strtoupper($stories[$s]['ssts']['subTopic']))."</h5>
                                     </div>
                                    </td>
                                   </tr>
                                   <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                    <td class='left-text-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-left: 10px; padding-right: 10px; padding-top: 10px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                     <h4 style='color: #333; display: inline-block; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 1.4em; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; word-break: normal;'><a href='".$stories[$s]['urls']['longUrl']."?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=rockland_angle' style='color: #444; margin: 0; text-decoration: none;'>".$head."</a></h4>
                                      "
                                      .
                                      (($stories[$s]['attribution']['author'] == null ) ? "" : "<p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'><i style='font-size: .8em; margin: 0;'>Author: ".$stories[$s]['attribution']['author']." | ".$stories[$s]['attribution']['publication']."</i></p>")
                                      .
                                      "<p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 1.2em; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'>".$stories[$s]['promoBrief']."</p>
                                      <p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'><u style='margin: 0;'><a href='".$stories[$s]['urls']['longUrl']."?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=rockland_angle' style='color: #444; margin: 0; text-decoration: none;'>READ STORY</a></u></p>
                                    </td>
                                  </tr>
                                </table>
                                <!-- <hr> -->
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                            ";
                        }
                      } elseif ( $a1 == 3 ){
                        if ($assets[$a1] == $stories[$s]['assetId']){
                          $head = $headlines[$stories[$s]['assetId']];
                          echo " 

                            
                            <table class='container' style='background-color: #FFFFFF; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;'>
                             <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                              <td style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                               <table class='row' style='border-collapse: collapse; border-spacing: 0; display: block; margin: 0; padding: 0px; padding-bottom: 10px; position: relative; text-align: left; vertical-align: top; width: 600px;'>
                                <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                 <td class='wrapper last temp-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 10px 20px 0px 0px; padding-left: 10px ; padding-right: 0px; padding-top: 0px !important; position: relative; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                  <table class='twelve columns cards' style='border: solid 1px; border-collapse: collapse; border-color: #888; border-spacing: 0; margin: 0 auto; padding: 0; text-align: left; vertical-align: top; width: 580px;'>
                                   <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                    <td style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-bottom: 0px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                     <div style='background-color: #0074BE; margin: 0; margin-bottom: 2px; padding-bottom: 3px; padding-top: 3px; width: 100%;'>
                                      <h5 style='color: #fff; display: inline-block; font-family: Tahoma, Geneva, sans-serif; font-size: 1.2em; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; padding-left: 10px; text-align: left; word-break: normal;'>".(($stories[$s]['ssts']['subTopic'] == null) ? ($stories[$s]['ssts']['topic'] == null) ? ($stories[$s]['ssts']['subSection'] == null) ? strtoupper($stories[$s]['ssts']['section']) : strtoupper($stories[$s]['ssts']['subSection']) : strtoupper($stories[$s]['ssts']['topic']) : strtoupper($stories[$s]['ssts']['subTopic']))."</h5>
                                     </div>
                                    </td>
                                   </tr>
                                   <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                    <td class='left-text-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-left: 10px; padding-right: 10px; padding-top: 10px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                     <h4 style='color: #333; display: inline-block; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 1.4em; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; word-break: normal;'><a href='".$stories[$s]['urls']['longUrl']."?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=rockland_angle' style='color: #444; margin: 0; text-decoration: none;'>".$head."</a></h4>
                                              "
                                              .
                                              (($stories[$s]['attribution']['author'] == null ) ? "" : "<p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'><i style='font-size: .8em; margin: 0;'>Author: ".$stories[$s]['attribution']['author']." | ".$stories[$s]['attribution']['publication']."</i></p>")
                                              .
                                              "<p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 1.2em; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'>".$stories[$s]['promoBrief']."</p>
                                              <p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'><u style='margin: 0;'><a href='".$stories[$s]['urls']['longUrl']."?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=rockland_angle' style='color: #444; margin: 0; text-decoration: none;'>READ STORY</a></u></p>
                                            </td>
                                          </tr>
                                        </table>
                                        <!-- <hr> -->
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                            ";
                        }
                      } else {
                        if ($assets[$a1] == $stories[$s]['assetId']){
                          $head = $headlines[$stories[$s]['assetId']];
                            echo "
                            <table class='container' style='background-color: #FFFFFF; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;'>
                             <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                              <td style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                               <table class='row' style='border-collapse: collapse; border-spacing: 0; display: block; margin: 0; padding: 0px; padding-bottom: 10px; position: relative; text-align: left; vertical-align: top; width: 600px;'>
                                <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                 <td class='wrapper last temp-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 10px 20px 0px 0px; padding-left: 10px ; padding-right: 0px; padding-top: 0px !important; position: relative; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                  <table class='twelve columns cards' style='border: solid 1px; border-collapse: collapse; border-color: #888; border-spacing: 0; margin: 0 auto; padding: 0; text-align: left; vertical-align: top; width: 580px;'>
                                   <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                    <td style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-bottom: 0px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                     <div style='background-color: #0074BE; margin: 0; margin-bottom: 2px; padding-bottom: 3px; padding-top: 3px; width: 100%;'>
                                      <h5 style='color: #fff; display: inline-block; font-family: Tahoma, Geneva, sans-serif; font-size: 1.2em; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; padding-left: 10px; text-align: left; word-break: normal;'>".(($stories[$s]['ssts']['subTopic'] == null) ? ($stories[$s]['ssts']['topic'] == null) ? ($stories[$s]['ssts']['subSection'] == null) ? strtoupper($stories[$s]['ssts']['section']) : strtoupper($stories[$s]['ssts']['subSection']) : strtoupper($stories[$s]['ssts']['topic']) : strtoupper($stories[$s]['ssts']['subTopic']))."</h5>
                                     </div>
                                    </td>
                                   </tr>
                                   <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                                    <td class='left-text-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-left: 10px; padding-right: 10px; padding-top: 10px; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                                     <h4 style='color: #333; display: inline-block; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 1.4em; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; word-break: normal;'><a href='".$stories[$s]['urls']['longUrl']."?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=rockland_angle' style='color: #444; margin: 0; text-decoration: none;'>".$head."</a></h4>
                                              "
                                            .
                                            (($stories[$s]['attribution']['author'] == null ) ? "" : "<p><i style='font-size:.8em;'>Author: ".$stories[$s]['attribution']['author']." | ".$stories[$s]['attribution']['publication']."</i></p>")
                                            .
                                            "<p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 1.2em; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'>".$stories[$s]['promoBrief']."</p>
                                            <p style='color: #666; font: 1em 'arial','helvetica',sans-serif; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; line-height: 19px; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;'><u style='margin: 0;'><a href='".$stories[$s]['urls']['longUrl']."?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=rockland_angle' style='color: #444; margin: 0; text-decoration: none;'>READ STORY</a></u></p>
                                          </td>
                                        </tr>
                                      </table>
                                      <!-- <hr> -->
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>";
                        }
                      }
                    }
                  };
                  ?>
            <table class='container' style='background-color: #FFFFFF; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; padding-bottom: 10px; text-align: inherit; vertical-align: top; width: 600px;'>
             <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
              <td align='center' class='center' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0; text-align: center; vertical-align: top; word-wrap: normal; white-space: normal;'>
               <center style='margin: 0; min-width: 580px; width: 100%;'>
                <table class='row' style='border-collapse: collapse; border-spacing: 0; display: block; margin: 0; padding: 0px; position: relative; text-align: left; vertical-align: top; width: 100%;'>
                 <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                  <td class='wrapper last temp-pad' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 10px 20px 0px 0px; padding-left: 10px ; padding-right: 0px; padding-top: 0px !important; position: relative; text-align: left; vertical-align: top; word-wrap: normal; white-space: normal;'>
                   <table class='twelve columns' style='border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: left; vertical-align: top; width: 580px;'>
                    <tr style='margin: 0; padding: 0; text-align: left; vertical-align: top;'>
                     <td align='center' class='center' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; padding-bottom: 10px; text-align: center; vertical-align: top; word-wrap: normal; white-space: normal;'><a href="http://offers.lohud.com/wsf"><img class='center' src='http://data.lohud.com/newsletter/rocklandangle/bannerad.JPG' style='border: 0; clear: both; display: block; float: none; margin: 0 auto; max-width: 100%; outline: none; text-align: center; text-decoration: none; width: auto;' /></a></td>
                     <td class='expander' style='border-collapse: collapse !important; color: #222222; font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 19px; margin: 0; padding: 0px 0px 10px; text-align: left; vertical-align: top; visibility: hidden; width: 0px; word-wrap: normal; white-space: normal;'>
                     </td>
                    </tr>
                   </table>
                  </td>
                 </tr>
                </table>
               </center>
              </td>
             </tr>
            </table>
            <table class='container' style='background-color: #DCEAF8; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 600px;'>
              <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
                <td style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                  <table class="block-grid three-up">
                    <tr>
                      <h5 style='font-size: 1.4em;font-weight: bold;margin: 0;color: #333;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;padding: 0;text-align: left;line-height: 1.3;word-break: normal; padding:10px 0px 0px 10px;'>CONTACT OR CONNECT:</h5>
                      <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
                        <td style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0px 0px 10px 10px;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                          <b style='margin: 0;'>News: </b>
                          <p style='margin-bottom: 2px;margin: 0;color: #666;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;padding: 0;text-align: left;line-height: 19px;font-size: 14px;font: 1em 'arial','helvetica',sans-serif;'>Robert Brum</p>
                          <p style='margin-bottom: 2px;margin: 0;color: #666;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;padding: 0;text-align: left;line-height: 19px;font-size: 14px;font: 1em 'arial','helvetica',sans-serif;'><a href='mailto:rbrum@lohud.com' style='margin: 0;color: #444;text-decoration: none;'>rbrum@lohud.com</a></p> 
                          <p style='margin: 0;margin-bottom: 10px;color: #666;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;padding: 0;text-align: left;line-height: 19px;font-size: 14px;font: 1em 'arial','helvetica',sans-serif;'>Twitter (<a href='http://www.twitter.com/Bee_Bob' target='_blank' style='margin: 0;color: #444;text-decoration: none;'>@Bee_Bob</a>)</p>
                        </td>
                        <td style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0px 0px 10px 10px;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                          <b style='margin: 0;'>Advertising: </b>
                          <p style='margin-bottom: 2px;margin: 0;color: #666;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;padding: 0;text-align: left;line-height: 19px;font-size: 14px;font: 1em 'arial','helvetica',sans-serif;'>Greg Ferine</p>
                          <p style='margin: 0;margin-bottom: 10px;color: #666;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;padding: 0;text-align: left;line-height: 19px;font-size: 14px;font: 1em 'arial','helvetica',sans-serif;'><a href='mailto:gferine@lohud.com' style='margin: 0;color: #444;text-decoration: none;'>gferine@lohud.com</a></p>
                        </td>
                        <td style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0px 0px 10px;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                          <table class='block-grid two-up' style='margin: 0 10px;border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;width: 130px;'>
                            <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
                              <td style='width: 40px !important;margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0px 0px 10px;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                                <a href='http://www.facebook.com/lohud' style='margin: 0;color: #444;text-decoration: none;'><img style='width: 40px !important;padding-right: 5px;margin: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;max-width: 100%;float: left;clear: both;display: block;border: none;' src='http://data.lohud.com/newsletter/rocklandangle/FB.jpg'></a>
                              </td>
                              <td style='width: 40px !important;margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0px 0px 10px;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                                <a href='http://www.twitter.com/lohud' style='margin: 0;color: #444;text-decoration: none;'><img style='width: 40px !important;padding-right: 5px;max-width: none !important;margin: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;float: left;clear: both;display: block;border: none;' src='http://data.lohud.com/newsletter/rocklandangle/TTTR.jpg'></a>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </tr>
                  </table>
                  <table class="block-grid two-up">
                    <tr>
                      <h5 style='font-size: 1.4em;font-weight: bold;margin: 0;color: #333;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;padding: 0;text-align: left;line-height: 1.3;word-break: normal; padding-left:10px;'>Databases:</h5>
                      <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
                        <td style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0px 0px 10px 10px;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                          <p style='margin-bottom: 2px;margin: 0;color: #666;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;padding: 0;text-align: left;line-height: 19px;font-size: 14px;font: 1em 'arial','helvetica',sans-serif;'><a href='http://lohud.nydatabases.com/database/nys-restaurant-inspections?keywords=rockland' style='margin: 0;color: #444;text-decoration: none;'>>>Restaurant Inspections</a></p>
                        </td>
                        <td style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0px 0px 10px 10px;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                          <p style='margin-bottom: 2px;margin: 0;color: #666;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;padding: 0;text-align: left;line-height: 19px;font-size: 14px;font: 1em 'arial','helvetica',sans-serif;'><a href='http://lohud.nydatabases.com/database/lohud-real-estate?keywords=rockland' style='margin: 0;color: #444;text-decoration: none;'>>>Real Estate</a></p>
                        </td>
                        <td style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0px 0px 10px;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                          <table class='three columns' style='margin: 0 auto;border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;width: 130px;'>
                          </table>
                        </td>
                      </tr>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
                <table class='row' style='margin: 0;border-spacing: 0;border-collapse: collapse;padding: 0px;vertical-align: top;text-align: left;width: 100%;position: relative;'>
                  <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
                    <td class='center' style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0;vertical-align: top;text-align: center;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                      <center style='margin: 0;width: 100%;min-width: 580px;'>
                        <table class='container' style='background-color: #9CC6E3;margin: 0 auto;border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: inherit;width: 580px;'>
                          <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
                            <td class='wrapper' style='padding: 10px;margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;position: relative;border-collapse: collapse !important;'>
                              <table class='four columns' style='margin: 0 auto;border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;width: 180px;'>
                                  <tr style='margin: 0;padding: 0;vertical-align: top;text-align: left;'>
                                    <td style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0px 0px 10px;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;border-collapse: collapse !important;'>
                                        <p style='text-align: center;margin: 0;margin-bottom: 10px;color: #666;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;padding: 0;line-height: 19px;font-size: 14px;font: 1em 'arial','helvetica',sans-serif;'><u style='margin: 0;'><a style='color: #666 !important;margin: 0;text-decoration: none;' href='https://account.lohud.com/newsletter-unsubscribe/?email=%%EmailAddr%%&listId=%%LISTID%%'>Unsubscribe</a></u></p>
                                    </td>
                                    <td class='expander' style='margin: 0;word-wrap: normal; white-space: normal;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;padding: 0 !important;vertical-align: top;text-align: left;color: #222222;font-family: &quot;Tahoma&quot;, &quot;Geneva&quot;, sans-serif;font-weight: normal;line-height: 19px;font-size: 14px;visibility: hidden;width: 0px;border-collapse: collapse !important;'></td>
                                  </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </center>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
</center></td></tr></table></body>
</html>
