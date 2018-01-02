<?php
function copyright ($year) { return $year < date('Y') ? $year . '-' . date('Y') : $year; }
$domain = 'http://joris.me';
$expiration = 3600 * 24 * 60; // 60 days
date_default_timezone_set('Europe/Paris');
header(sprintf('Cache-Control: public, max-age=%d, s-maxage=%d, must-revalidate, proxy-revalidate', $expiration, $expiration));
header(sprintf('Expires: %s', date('r', time() + $expiration)));
header(sprintf('Last-Modified: %s', date('r', getlastmod())));
header('Content-Type: text/html;charset=UTF-8');
header('Pragma: public');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Joris Berthelot — WebApp Engineer Resume</title>
    <meta name="author" content="Joris Berthelot"/>
    <meta name="description" content="Joris Berthelot's updated resume: webapp software engineer, full stack, web server player, back-end engineer, quick and passionate learner"/>
    <meta name="keywords" content="careerbuilder, software, engineer, lille, france, php, go, nodejs, docker, aws, developer, api, agile, golang, testing, scaling, monitoring, metrics, messaging, ci, github, opensource"/>
    <meta name="robots" content="all"/>
    <meta name="viewport" content="width=device-width"/>
    <!--
    <meta property="og:title" content="Joris Berthelot - WebApp Engineer Resume"/>
    <meta property="og:url" content="<?php echo $domain; ?>"/>
    <meta property="og:image" content="<?php echo $domain; ?>/img/icon.png"/>
    <meta property="og:site_name" content="Joris Berthelot - WebApp Engineer"/>
    <meta property="og:description" content="Joris Berthelot's updated resume: WebApp Engineer at CareerBuilder"/>
    -->
    <link rel="alternate" type="application/rdf+xml" href="<?php echo $domain; ?>/index.rdf"/>
    <link rel="image_src" type="image/png" href="<?php echo $domain; ?>/img/icon.png"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain; ?>/img/favicon.ico"/>
    <link rel="icon" type="image/png" href="<?php echo $domain; ?>/img/favicon.png"/>
    <link rel="stylesheet" href="<?php echo $domain; ?>/ui/styles/styles-min.css?v2" type="text/css"  media="all"/>
    <link rel="canonical" href="<?php echo $domain; ?>"/>
    <base href="<?php echo $domain; ?>"/>
    <!--[if lt IE 8]>
        <link rel="stylesheet" href="<?php echo $domain; ?>/ui/styles/styles-poor-min.css?v2" type="text/css"  media="all"/>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <section id="start">
        <div class="container ribbon mhide"></div>
        <header role="banner" class="container">
            <h1 title="PHP engineer"><a href="<?php echo $domain; ?>" rel="me">Joris Berthelot</a> <sup><span class="label"><a href="https://www.linkedin.com/in/eexit">Hired</a></span></sup></h1>
            <h2 title="This is what I'm doing right now...">I am an enthusiast WebApp Engineer, passionate about elegant code<br>and secondarily an opportunist <a href="http://joris.berthelot.photography" title="Check out my photography portfolio!">photographer</a>.</h2>
            <p class="btnlnks"><a href="http://berthelot.tel" title="Cheers me!" class="btn danger">Contact me</a>&nbsp;&nbsp;or&nbsp;&nbsp;<a href="<?php echo $domain; ?>/get/Joris_Berthelot_phpeng_resume_2018-01-02.pdf" class="btn" title="Get the latest version of my resume">get my resume!</a></p>
        </header>
        <a href="http://github.com/eexit" rel="me" class="forkme mhide" title="Fork me on GitHub"><span>Fork me on GitHub</span></a>
    </section>
    <script type="text/javascript">
        (function() {
            var scpt = document.createElement('script'); scpt.type = 'text/javascript'; scpt.async = true; scpt.src = '<?php echo $domain; ?>/ui/js/scripts-min.js';
            var p = document.getElementsByTagName('script')[0]; p.parentNode.insertBefore(scpt, p);
        })();
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-27398122-1']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = 'http://www.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>
</html>