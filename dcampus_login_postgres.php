<?php
session_start();
unset($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>My DCampus Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="manifest" href="https://mydcampus.dlsl.edu.ph/manifest.json">
    <meta name="theme-color" content="#4285f4">
    <link rel="shortcut icon" href="https://mydcampus.dlsl.edu.ph/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://mydcampus.dlsl.edu.ph/favicon.ico" type="image/x-icon">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="DCampus Portal">
    <link rel="apple-touch-startup-image" href="https://mydcampus.dlsl.edu.ph/assets/icons/icon-256x256.png">
    <link rel="apple-touch-icon" href="https://mydcampus.dlsl.edu.ph/assets/icons/icon-256x256.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://mydcampus.dlsl.edu.ph/assets/icons/icon-256x256.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://mydcampus.dlsl.edu.ph/assets/icons/icon-128x128.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://mydcampus.dlsl.edu.ph/assets/icons/icon-256x256.png">
    <meta name="msapplication-starturl" content="/#dashboard">
    <link rel="stylesheet" href="./My DCampus Portal_files/sweetalert2.min.css">
    <script src="./My DCampus Portal_files/cb=gapi.loaded_0" async=""></script><script src="./My DCampus Portal_files/sweetalert2.min.js"></script>

    <script src="./My DCampus Portal_files/platform.js" async="" defer="" gapi_processed="true"></script>
    <script src="./My DCampus Portal_files/jquery.min.js"></script>
    <!-- Vendor styles -->
    <link rel="stylesheet" href="./My DCampus Portal_files/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="./My DCampus Portal_files/animate.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="./My DCampus Portal_files/app.min.css">
    <style>
      .login__block {
          max-width: 100%;
          width: 100%;
          margin-top:-10%;
      }

      .login {
          background:#f3f6f7 url('../assets/img/loginbg.png') center top no-repeat;
          background-size: 45%;
          background-position: center 15%;
      }

      @media only screen and (max-width: 767px) {
          .login {
              background:#f3f6f7 url('../assets/img/loginbg.png') center top no-repeat;
              background-size: 100%;
          }
      }
      
      .abcRioButtonIcon{display:none;}
      .btn:not(.btn-secondary):not([class*="btn-outline-"]):not(.btn-link) {
          box-shadow:none;
          border: 0;
      }
    </style>

    <style>.abcRioButton{border-radius:1px;box-shadow:0 2px 4px 0 rgba(0,0,0,.25);-moz-box-sizing:border-box;box-sizing:border-box;-webkit-transition:background-color .218s,border-color .218s,box-shadow .218s;transition:background-color .218s,border-color .218s,box-shadow .218s;-webkit-user-select:none;-webkit-appearance:none;background-color:#fff;background-image:none;color:#262626;cursor:pointer;outline:none;overflow:hidden;position:relative;text-align:center;vertical-align:middle;white-space:nowrap;width:auto}.abcRioButton:hover{box-shadow:0 0 3px 3px rgba(66,133,244,.3)}.abcRioButtonBlue{background-color:#4285f4;border:none;color:#fff}.abcRioButtonBlue:hover{background-color:#4285f4}.abcRioButtonBlue:active{background-color:#3367d6}.abcRioButtonLightBlue{background-color:#fff;color:#757575}.abcRioButtonLightBlue:active{background-color:#eee;color:#6d6d6d}.abcRioButtonIcon{float:left}.abcRioButtonBlue .abcRioButtonIcon{background-color:#fff;border-radius:1px}.abcRioButtonSvg{display:block}.abcRioButtonContents{font-family:Roboto,arial,sans-serif;font-size:14px;font-weight:500;letter-spacing:.21px;margin-left:6px;margin-right:6px;vertical-align:top}.abcRioButtonContentWrapper{height:100%;width:100%}.abcRioButtonBlue .abcRioButtonContentWrapper{border:1px solid transparent}.abcRioButtonErrorWrapper,.abcRioButtonWorkingWrapper{display:none;height:100%;width:100%}.abcRioButtonErrorIcon,.abcRioButtonWorkingIcon{margin-left:auto;margin-right:auto}.abcRioButtonErrorState,.abcRioButtonWorkingState{border:1px solid #d5d5d5;border:1px solid rgba(0,0,0,.17);box-shadow:0 1px 0 rgba(0,0,0,.05);color:#262626}.abcRioButtonErrorState:hover,.abcRioButtonWorkingState:hover{border:1px solid #aaa;border:1px solid rgba(0,0,0,.25);box-shadow:0 1px 0 rgba(0,0,0,.1)}.abcRioButtonErrorState:active,.abcRioButtonWorkingState:active{border:1px solid #aaa;border:1px solid rgba(0,0,0,.25);box-shadow:inset 0 1px 0 #ddd;color:#262626}.abcRioButtonWorkingState,.abcRioButtonWorkingState:hover{background-color:#f5f5f5}.abcRioButtonWorkingState:active{background-color:#e5e5e5}.abcRioButtonErrorState,.abcRioButtonErrorState:hover{background-color:#fff}.abcRioButtonErrorState:active{background-color:#e5e5e5}.abcRioButtonErrorState .abcRioButtonErrorWrapper,.abcRioButtonWorkingState .abcRioButtonWorkingWrapper{display:block}.abcRioButtonErrorState .abcRioButtonContentWrapper,.abcRioButtonErrorState .abcRioButtonWorkingWrapper,.abcRioButtonWorkingState .abcRioButtonContentWrapper{display:none} .-webkit-keyframes abcRioButtonWorkingIconPathSpinKeyframes {0% {-webkit-transform: rotate(0deg)}}</style></head>

    <body data-ma-theme="green" id="bdlogin" style="margin:0px;padding:0px;">
  
      

      <div class="login">
        <!-- Login -->
        <div class="login__block active">
            <img src="./My DCampus Portal_files/8.jpg" alt="" style="width:32px;">
            <span class="mt-4">Welcome to the <b>DCampus Portal</b>!</span>
            <br><br>
            <span class="mt-4" style="font-size:1.4em;">For <b>Students</b> &amp; <b>Partners</b></span>
            <br/><br/>
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <!-- Email Input -->
                <span class="mt-4" style="font-size:1.4em;"><b>Email Address</b></span><br/>
                <input class="mt-4" type="email" name="user_email"> </input><br/><br/>
                <!-- Password Input -->
                <span class="mt-4" style="font-size:1.4em;"><b>Password</b></span><br/>
                <input class="mt-4" type="password" name="user_password"> </input><br/><br/>
                <div class="mt-2"><small>By clicking Sign In, you agree <br>to our <a href="https://mydcampus.dlsl.edu.ph/tos_privacy" target="_blank">Terms and Data Policy</a>.</small></div>
                <div class="login__block__body">
                    <div class="g-signin2 btn waves-effect" data-onsuccess="onSignIn" style="width:200px;" data-theme="dark" data-gapiscan="true" data-onload="true">
                        <div style="height:36px;width:200px;" class="abcRioButton abcRioButtonBlue">
                            <div class="abcRioButtonContentWrapper"><div class="abcRioButtonIcon" style="padding:8px">
                                <div style="width:18px;height:18px;" class="abcRioButtonSvgImageWithFallback abcRioButtonIconImage abcRioButtonIconImage18"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 48 48" class="abcRioButtonSvg"><g><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path><path fill="none" d="M0 0h48v48H0z"></path></g></svg>
                                </div>
                            </div>
                        <span style="font-size:13px;line-height:34px;" class="abcRioButtonContents"><span id="not_signed_in634y0drfi47d"><input class="abcRioButton abcRioButtonBlue" style="box-shadow:none;" type="submit" value="Sign In" name="submit_cred" /></span></span></div></div></div>
                </div>
            </form>
        </div>
      </div>

      <!-- Javascript -->
      <!-- Vendors -->

      <script src="./My DCampus Portal_files/tether.min.js"></script>
      <script src="./My DCampus Portal_files/bootstrap.min.js"></script>
      <script src="./My DCampus Portal_files/waves.min.js"></script>

      <!-- App functions and actions -->
      <script src="./My DCampus Portal_files/app.min.js"></script>
      <iframe id="ssIFrame_google" sandbox="allow-scripts allow-same-origin" aria-hidden="true" frame-border="0" style="position: absolute; width: 1px; height: 1px; inset: -9999px; display: none;" src="./My DCampus Portal_files/iframe.html"></iframe>
    </body>
</html>
<?php
include "postgres_dbs_connect.php";

if(isset($_POST['submit_cred']) && !isset($_SESSION['user']))
{
    $user_eml = $_POST['user_email'];
    $user_pass = $_POST['user_password'];
    $temp_eml = "[email]";
    $temp_pass = "[password]";

    $sql_query = "SELECT * FROM public.tbl_users";
    $result = pg_query($con, $sql_query);
    $verify = false;
    while($row = pg_fetch_array($result))
    {
        $temp_eml = $row['fld_email'];
        $temp_pass = $row['fld_password'];
        if($user_eml == $temp_eml AND $user_pass == $temp_pass)
        {
            $verify = true;
        }
    }

    function redirect($url)
    {
        echo "<script type='text/javascript'>document.location.href='{$url}';</script>";
        echo '<META content="0;URL=' . $url . '">';
    }

    if($verify)
    {
        $_SESSION['user'] = $user_eml;
        pg_close($con);
        echo "Correct";
        //header("Location: http://localhost:3000/assets/modules/channel-web/examples/MyDCampusPortal.html?botId=mydbuddy-bot");
        $url = "http://localhost:3000/assets/modules/channel-web/examples/MyDCampusPortal.html?botId=test1";
        redirect($url);
        exit();
    }
    else 
    {
        $url = "dcampus_login_postgres.php";
        redirect($url);
    }
    
}
else {
    pg_close($con);
}
?>