<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Badge Sign In Form Flat Responsive Widget Template :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Badge Sign In Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Custom Theme files -->
        <link href="https://p.w3layouts.com/demos/july-2016/15-07-2016/badge_sign_in_form/web/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- //Custom Theme files -->
        <!-- web font -->
        <!--<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>web font-->
        <!-- //web font -->
    </head>
    <body>
        <script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
        <style type='text/css'>  .adsense_fixed{position:fixed;bottom:-8px;width:100%;z-index:999999999999;}.adsense_content{width:720px;margin:0 auto;position:relative;background:#fff;}.adsense_btn_close,.adsense_btn_info{font-size:12px;color:#fff;height:20px;width:20px;vertical-align:middle;text-align:center;background:#000;top:4px;left:4px;position:absolute;z-index:99999999;font-family:Georgia;cursor:pointer;line-height:18px}.adsense_btn_info{left:26px;font-family:Georgia;font-style:italic}.adsense_info_content{display:none;width:260px;height:340px;position:absolute;top:-360px;background:rgba(255,255,255,.9);font-size:14px;padding:20px;font-family:Arial;border-radius:4px;-webkit-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);-moz-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);box-shadow:0 1px 26px -2px rgba(0,0,0,.3)}.adsense_info_content:after{content:'';position:absolute;left:25px;top:100%;width:0;height:0;border-left:10px solid transparent;border-right:10px solid transparent;border-top:10px solid #fff;clear:both}.adsense_info_content #adsense_h3{color:#000;margin:0;font-size:18px!important;font-family:'Arial'!important;margin-bottom:20px!important;}.adsense_info_content .adsense_p{color:#888;font-size:13px!important;line-height:20px;font-family:'Arial'!important;margin-bottom:20px!important;}.adsense_fh5co-team{color:#000;font-style:italic;}</style>
        <script>

            $(function () {
                $('.adsense_btn_close').click(function () {
                    $(this).closest('.adsense_fixed').css('display', 'none');
                });

                $('.adsense_btn_info').click(function () {
                    if ($('.adsense_info_content').is(':visible')) {
                        $('.adsense_info_content').css('display', 'none');
                    } else {
                        $('.adsense_info_content').css('display', 'block');
                    }
                });

            });

        </script>
    <body>


        <!-- main -->
        <div class="main"> 
            <!---728x90--->
            <h1>Biochem</h1>
            <!---728x90--->
            <div class="login-form"> 
                <h2>Iniciar sesión</h2> 
                 <form action="logincontroller" method="POST">
                <div class="agileits-top">
                   
                        {{ csrf_field() }}
                        <div class="styled-input">
                            <input type="text" name="Cve_usuario" value="{{ old('Cve_usuario') }}" required=""/>
                            <label>Correo</label>
                            <span></span>
                        </div>
                        <strong style="color: #E58E22">{{ $errors->first('Cve_usuario') }}</strong>
                        <div class="styled-input">
                            <input type="password" name="Password" required=""> 
                            <label>Contraseña</label>
                            <span></span>
                        </div> 
                        <strong style="color: #E58E22">{{ $errors->first('Password') }}</strong>
                        <div class="wthree-text"> 
                            <ul> 
                                <li>

                                </li>
                                <li> <a href="#">Recuperar contraseña ?</a> </li>
                            </ul>
                            <div class="clear"> </div>
                        </div>  
                    
                </div>
                <div class="agileits-bottom">
                    <!--<form action="#" method="post">-->
                        <input type="submit" value="Iniciar">
                    <!--</form>-->
                </div>	
                </form>
            </div>	
        </div>	
    </div>	
    <!-- //main -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



</body>


<style>
    /*--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/
    /*--reset--*/
    html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
    article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
    ol,ul{list-style:none;margin:0px;padding:0px;}
    blockquote,q{quotes:none;}
    blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
    table{border-collapse:collapse;border-spacing:0;}
    /*--start editing from here--*/
    a{text-decoration:none;}
    .txt-rt{text-align:right;}/* text align right */
    .txt-lt{text-align:left;}/* text align left */
    .txt-center{text-align:center;}/* text align center */
    .float-rt{float:right;}/* float right */
    .float-lt{float:left;}/* float left */
    .clear{clear:both;}/* clear float */
    .pos-relative{position:relative;}/* Position Relative */
    .pos-absolute{position:absolute;}/* Position Absolute */
    .vertical-base{	vertical-align:baseline;}/* vertical align baseline */
    .vertical-top{	vertical-align:top;}/* vertical align top */
    nav.vertical ul li{	display:block;}/* vertical menu */
    nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
    img{max-width:100%;}
    /*--end reset--*/
    body {
        font-family: 'Open Sans', sans-serif;
        background: url(https://static1.squarespace.com/static/563a8fcbe4b0de39d58b16aa/563a911ae4b0eb98d9a6887e/563a9193e4b07c0d55c70794/1446678932147/At+the+Office+Mac+Apple+Wallpapers+Creative+Planning-2982192420.jpeg?format=2500w)no-repeat center 0px;
        background-attachment: fixed;
        background-size: cover;
    }
    h1 {
        font-size: 3em;
        text-align: center;
        color: #fff;
        font-weight: 100;
    }
    /*-- main --*/
    h2 {
        font-size: 1.1em;
        text-align: center;
        padding: 1.2em;
        background: #02a299;
        color: #fff;
        font-weight: 200;
        letter-spacing: 10px;
    }
    .main {
        padding: 3em 0 0;
    }
    .login-form {
        width: 35%;
        margin: 3.5em auto;
        background: rgba(12, 85, 105, 0.51);
        padding-bottom: 4em;
    }
    .agileits-top {
        padding: 2em 3em 3em;
    }
    .login-form input[type="text"], .login-form input[type="password"] {
        font-size: 1em;
        color: #fff;
        padding: 0.8em 1em;
        border: 0;
        width: 93%;
        border-bottom: 1px solid #c7c7c7;
        background: none;
        -webkit-appearance: none;
    }
    /*-- input-effect --*/
    .styled-input input:focus ~ label, .styled-input input:valid ~ label {
        font-size: 1.1em;
        color: #02a299;
        top: -2em;
        -webkit-transition: all 0.125s ease;
        transition: all 0.125s ease;
    }
    .styled-input {
        width:100%;
        margin: 2em 0 1em;
        position: relative;
    }

    .styled-input label {
        color: #fff;
        padding: 0.8em 1em;
        position: absolute;
        top: 0;
        left: 0;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        transition: all 0.3s ease;
        pointer-events: none;
        font-weight: 400;
        font-size: 1em;
        display: block;
        line-height: 1em;
    }
    .styled-input input ~ span {
        display: block;
        width: 0;
        height:2px;
        background:#fff;
        position: absolute;
        bottom: 0;
        left: 0;
        -webkit-transition: all 0.125s ease;
        transition: all 0.125s ease; 
    }

    .styled-input input:focus { outline: 0; }

    .styled-input input:focus ~ span {
        width: 100%;
        -webkit-transition: all 0.075s ease;
        transition: all 0.075s ease;
        font-family: 'OpenSans-Regular';
    } 
    /*-- //input-effect --*/
    .login-form p {
        font-size: 1em;
        color: #fff;
        margin: 1em 0 .5em;
    }
    /*-- checkbox --*/
    .wthree-text input[type="checkbox"] {
        display: none;
    }
    .wthree-text input[type="checkbox"]+label {
        position: relative;
        padding-left: 1.8em;
        border: none;
        outline: none;
        font-size: 1em;
        color: #fff;
        cursor: pointer;
        display: block; 
    }
    .wthree-text input[type="checkbox"]+label span:first-child {
        width: 14px;
        height: 14px;
        border: 2px solid #fff;
        position: absolute;
        left: 0;
        top: 2px; 
    }
    .wthree-text input[type="checkbox"]:checked+label span:first-child:before {
        content: "";
        background: url(../images/tick.png)no-repeat;
        position: absolute;
        left: 2px;
        top: 2px;
        font-size: 10px;
        width: 10px;
        height: 10px;
    }
    /*-- //checkbox --*/
    .wthree-text {
        margin-top: 3em;
    }
    .wthree-text ul li{
        display:inline-block;
        float: left;
    }
    .wthree-text ul li:nth-child(2) {
        float: right;
    }
    .wthree-text ul li a{
        font-size:1em;
        color: #fff;
    }
    .wthree-text ul li a:hover{
        color: #02a299;
    }
    .agileits-bottom{
        position:relative;
    }
    .agileits-bottom:before {
        content: '';
        position: absolute;
        top: -17px;
        left: -17px;
        width: 0;
        height: 0;
        border-top: 17px solid transparent;
        border-right: 18px solid #fff;
        transition:.5s all ease;
    }
    .agileits-bottom:after {
        content: '';
        position: absolute;
        top: -17px;
        right: -17px;
        width: 0;
        height: 0;
        border-left: 17px solid #fff;
        border-top: 17px solid transparent;
        transition:.5s all ease;
    }
    .agileits-bottom input[type="submit"] {
        font-size: 1.5em;
        color: #02a299;
        background: #fff;
        outline: none;
        cursor: pointer;
        padding: 1em 0;
        -webkit-appearance: none;
        border: none;
        width: 106%; 
        margin-left: -0.7em;
        text-transform: uppercase; 
    }
    .agileits-bottom input[type="submit"]:hover {
        color: #FFF;
        background: #02a299;
        transition:.5s all ease;
    }
    .agileits-bottom:hover:before {
        border-right-color:#02a299;
    }
    .agileits-bottom:hover:after {
        border-left-color:#02a299;
    }
    /*-- //main --*/
    /*-- copyright --*/
    .copyright {
        margin: 2em 0;
        text-align: center;
    }
    .copyright p {
        font-size: 1em;
        color: #fff;
        line-height:1.8em;
    }
    .copyright p a{
        color: #fff; 
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
        transition: 0.5s all;
    }
    .copyright p a:hover{
        color: #000;	
    }
    /*-- //copyright --*/
    /*-- responsive-design --*/
    @media(max-width:1440px){
        .agileits-bottom input[type="submit"] { 
            width: 106.8%; 
        }
    }
    @media(max-width:1366px){
        .login-form {
            width: 37%; 
            margin: 3em auto;
        }
    }
    @media(max-width:1280px){
        .login-form {
            width: 40%; 
        }
    }
    @media(max-width:1080px){
        .main {
            padding: 2em 0 0;
        }
        .login-form {
            width: 48%;
        }
        h1 {
            font-size: 2.8em; 
        }
    }
    @media(max-width:1024px){
        h1 {
            font-size: 2.6em;
        }
        .login-form {
            width: 50%;
            margin: 2em auto;
        }
    }
    @media(max-width:991px){
        h1 {
            font-size: 2.5em;
        }
        .login-form {
            width: 52%; 
        }
    }
    @media(max-width:900px){
        .agileits-top {
            padding: 1em 3em 3em;
        }
        .login-form { 
            width: 56%;
            padding-bottom: 3.5em;
        }
    }
    @media(max-width:800px){
        .login-form {
            width: 63%; 
        }
        .agileits-top {
            padding: 1em 2.5em 2.5em;
        }
        .agileits-bottom input[type="submit"] {
            font-size: 1.3em; 
            margin-left: -0.8em; 
        }
    }
    @media(max-width:768px){
        h1 {
            font-size: 2.3em;
        }
        .agileits-bottom input[type="submit"] {
            width: 107%;
        } 
    } 
    @media (max-width: 736px){
        .agileits-bottom input[type="submit"] {
            width: 107.5%;
        } 
    } 
    @media(max-width:667px){
        .agileits-bottom input[type="submit"] {
            width: 108%;
            font-size: 1.1em;
            margin-left: -0.9em;
        }
    } 
    @media(max-width:640px){
        .login-form {
            width: 67%;
        }
        .agileits-bottom input[type="submit"] {
            width: 108%;
        }
    }
    @media(max-width:600px){
        .agileits-bottom input[type="submit"] {
            width: 108.7%;
        }
    }
    @media(max-width:480px){
        h1 {
            font-size: 1.8em;
        }
        h2 {
            font-size: 1em; 
            padding: 1em; 
            letter-spacing: 7px;
        }
        .agileits-top {
            padding: 1em 1.5em 1.5em;
        }
        .login-form input[type="text"], .login-form input[type="password"] {
            font-size: 0.9em; 
            padding: 0.6em 1em; 
            width: 93%; 
        }
        .styled-input label { 
            padding: 0.6em 1em; 
            font-size: 0.9em; 
        }
        .styled-input input:focus ~ label, .styled-input input:valid ~ label {
            font-size: 1em; 
            top: -1.5em;
        }
        .wthree-text {
            margin-top: 2em;
        }
        .wthree-text input[type="checkbox"]+label { 
            font-size: 0.9em; 
            padding-left: 1.5em;
        }
        .wthree-text input[type="checkbox"]+label span:first-child {
            width: 12px;
            height: 12px; 
        }
        .wthree-text ul li a {
            font-size: 0.9em; 
        }
        .agileits-bottom input[type="submit"] {
            font-size: 1em;
            margin-left: -0.6em;
            width: 105.3%;
            padding: 0.8em 0;
        }
        .login-form { 
            padding-bottom: 3em;
        }
        .login-form {
            width: 80%;
        }
        .copyright p {
            font-size: 0.9em; 
        }
        .agileits-bottom:before { 
            top: -11px;
            left: -11px; 
            border-top: 11px solid transparent;
            border-right: 11px solid #fff; 
        }
        .agileits-bottom:after { 
            top: -11px;
            right: -11px; 
            border-left: 11px solid #fff;
            border-top: 11px solid transparent; 
        }
        .wthree-text input[type="checkbox"]:checked+label span:first-child:before { 
            left: 1px;
            top: 1px; 
        }
    }
    @media(max-width:414px){
        .main {
            padding: 1.5em 0 0;
        }
        .styled-input { 
            margin: 1.5em 0 1em; 
        }
        .copyright p { 
            padding: 0 1em;
        }
        .agileits-bottom:before {
            top: -10px;
            left: -10px;
            border-top: 10px solid transparent;
            border-right: 10px solid #fff;
        }
        .agileits-bottom:after { 
            top: -10px;
            right: -10px;
            border-left: 10px solid #fff;
            border-top: 10px solid transparent; 
        }
        .agileits-bottom input[type="submit"] { 
            width: 106%; 
        }
    }
    @media(max-width:384px){
        .agileits-bottom input[type="submit"] {
            width: 106.8%;
            font-size: 0.9em;
            margin-left: -0.7em;
        }
    }
    @media(max-width:375px){
        .agileits-bottom input[type="submit"] {
            width: 106.5%;
            margin-left: -0.6em;
        }
        h1 {
            font-size: 1.6em;
        }
        h2 { 
            letter-spacing: 5px;
        }
        .login-form { 
            margin: 1.5em auto;
        }
        .wthree-text ul li { 
            float: none;
            display: block;
        }
        .wthree-text ul li:nth-child(2) {
            float: none;
            margin-top: 1em;
        }
        .wthree-text {
            margin-top: 1.5em;
        }
    }
    @media(max-width:320px){
        h2 {
            letter-spacing: 3px;
            padding: 0.8em;
        }
        .login-form {
            width: 85%;
        }
        .agileits-top {
            padding:0.5em 1em 1.5em;
        }
        .login-form input[type="text"], .login-form input[type="password"] {
            font-size: 0.85em;
            padding: 0.6em;
            width: 88%;
        }
        .styled-input label {
            padding: 0.6em;
            font-size: 0.85em;
        }
        .styled-input input:focus ~ label, .styled-input input:valid ~ label {
            font-size: 0.9em;
            top: -1em;
        }
        .login-form {
            padding-bottom: 2em;
        }
        .agileits-bottom input[type="submit"] {
            width: 107%;
            margin-left: -0.6em;
        }
    }
    /*-- //responsive-design --*/


</style>

</html>