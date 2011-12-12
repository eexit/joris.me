<?php
function copyright ($year) { return $year < date('Y') ? $year . '-' . date('Y') : $year; }
$domain = 'http://joris.me';
$expiration = 3600 * 24 * 60; // 60 days
date_default_timezone_set('Europe/Paris');
header(sprintf('Expires: %d', $expiration));
header('Last-Modified: ' . date('r', getlastmod()));
header(sprintf('Cache-Control: max-age=%d, s-maxage=%d, must-revalidate, proxy-revalidate', $expiration, $expiration));
header('Pragma: public');
header('Content-Type: text/html;charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Joris Berthelot — PHP developer resume</title>
    <meta name="author" content="Joris Berthelot"/>
    <meta name="description" content="Joris Berthelot's updated resume: PHP developer, Web server player, Zend PHP Certified Engineer wannabe"/>
    <meta name="keywords" content="php development web developer system engineer html css javascript resume w3c msc master sciences oop java c"/>
    <meta name="robots" content="all"/>
    <meta name="viewport" content="width=device-width"/>
    <!--
    <meta property="og:title" content="Joris Berthelot - PHP developer resume"/>
    <meta property="og:url" content="<?php echo $domain; ?>"/>
    <meta property="og:image" content="<?php echo $domain; ?>/img/icon.png"/>
    <meta property="og:site_name" content="Joris Berthelot - PHP developer resume"/>
    <meta property="og:description" content="Joris Berthelot's updated resume: PHP developer, Web server player, Zend PHP Certified Engineer wannabe/>
    -->
    <link rel="alternate" type="application/rdf+xml" href="<?php echo $domain; ?>/index.rdf"/>
    <link rel="image_src" type="image/png" href="<?php echo $domain; ?>/img/icon.png"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain; ?>/img/favicon.ico"/>
    <link rel="icon" type="image/png" href="<?php echo $domain; ?>/img/favicon.png"/>
    <link rel="stylesheet" href="<?php echo $domain; ?>/ui/styles/styles-min.css" type="text/css"  media="all"/>
    <link rel="canonical" href="<?php echo $domain; ?>"/>
    <base href="<?php echo $domain; ?>"/>
    <!--[if lt IE 8]>
        <link rel="stylesheet" href="<?php echo $domain; ?>/ui/styles/styles-poor-min.css" type="text/css"  media="all"/>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <section id="start">
        <div class="container ribbon"></div>
        <header role="banner" class="container">
            <h1 title="Awesome PHP developer"><a href="<?php echo $domain; ?>" rel="me">Joris Berthelot</a> <sup><span class="label">Hired</span></sup></h1>
            <ul class="floating traits mhide">
                <li data-rel="tag">Passionated</li>
                <li data-rel="tag">Bright</li>
                <li data-rel="tag">Hard-worker</li>
                <li data-rel="tag">Flexible</li>
                <li data-rel="tag">Curious</li>
                <li data-rel="tag">Autonomous</li>
                <li data-rel="tag">Eager</li>
                <li data-rel="tag">Reliable</li>
                <li data-rel="tag">Open-minded</li>
                <li data-rel="tag">French</li>
            </ul>
            <ul class="floating contact">
                <li class="email"><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#74;&#111;&#114;&#105;&#115;&#37;&#50;&#48;&#66;&#101;&#114;&#116;&#104;&#101;&#108;&#111;&#116;&#60;&#106;&#111;&#114;&#105;&#115;&#64;&#98;&#101;&#114;&#116;&#104;&#101;&#108;&#111;&#116;&#46;&#116;&#101;&#108;&#62;&#63;&#98;&#111;&#100;&#121;&#61;&#37;&#48;&#100;&#37;&#48;&#97;&#37;&#48;&#100;&#37;&#48;&#97;&#45;&#45;&#37;&#48;&#100;&#37;&#48;&#97;&#82;&#101;&#102;&#101;&#114;&#101;&#114;&#58;&#37;&#50;&#48;&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#106;&#111;&#114;&#105;&#115;&#46;&#109;&#101;" rel="me" title="Cheers me!">joris<!-- berthelot -->@<!-- joris -->berthelot.<!-- telnic -->tel</a></li>
                <li class="twitter">@<a href="http://twitter.com/joris_berthelot" rel="me" title="Follow me on Twitter">joris_berthelot</a></li>
            </ul>
            <h2 title="This is what I'm doing right now...">I am majoring in Computer Science Engineering MSc and,<br>for years now, I keep loving <abbr title="PHP: Hypertext PreProcessor">PHP</abbr> language and Web coolness...</h2>
            <p class="btnlnks"><a href="<?php echo $domain; ?>/get/Joris_Berthelot_phpdev_resume.pdf" title="Get the latest version of my resume" class="btn danger">Get resume</a>&nbsp;&nbsp;or&nbsp;&nbsp;<a href="#resume" class="btn" title="Check out the full version online">check it out!</a></p>
        </header>
        <a href="http://github.com/eexit" rel="me" class="forkme mhide" title="Fork me on GitHub"><span>Fork me on GitHub</span></a>
    </section>
    <div id="resume">
        <section role="main" class="container">
            <section id="background">
                <h2 title="Study background">Educational background</h2>
                <div>
                    <p><strong>Majoring: Computer Science Engineering MSc</strong></p>
                    <details>Software, system engineering &amp; architecture, <abbr title="Information System">IS</abbr> auditing, numeric contents management, project management</details>
                    <aside>2010, 2 yr, <a href="http://sciences.univ-larochelle.fr/Master-Ingenierie-Informatique.html">D&eacute;partement Informatique</a>, Universit&eacute; La Rochelle, France.</aside>
                </div>
                <div>
                    <p><strong>Telecommunications &amp; Network Professional Bachelor's Degree, Web Developer concentration</strong> with honours</p>
                    <details>Web development, Zend Framework, Java, <abbr title="Information Technology">IT</abbr></details>
                    <aside>2008, 1 yr, <a href="http://www.insset.u-picardie.fr/site/licencepro_web"><abbr title="INstitut Sup&eacute;rieur des Sciences Et Techniques">INSSET</abbr></a> Saint-Quentin, Universit&eacute; Jules Verne de Picardie, France.</aside>
                </div>
                <div>
                    <p><strong>Communication, Network and Services Higher National Diploma</strong></p>
                    <details>Multimedia creation, art, languages, communication, development, <abbr title="Information Technology">IT</abbr></details>
                    <aside>2006, 2 yr, <a href="http://serecom.univ-tln.fr"><abbr title="Institut Universitaire Technologique">IUT</abbr> <abbr title="Services et R&eacute;seaux de Communication">SRC</abbr></a> Saint-Rapha&euml;l, Universit&eacute; du Sud Toulon-Var, France.</aside>
                </div>
                <div>
                    <p><strong>Laboratory Sciences High School Diploma</strong></p>
                    <details>Biochemistry, biological engineering option</details>
                    <aside>2004, 2 yr, Lyc&eacute;e Alexis de Tocqueville, Grasse, France.</aside>
                </div>
            </section>
            <section id="experience" class="row">
                <h2 title="Working experience">Experience</h2>
                <dl class="span8">
                    <dt id="2011">2011</dt>
                    <dd>
                        <dl>
                            <dt><a href="http://www.clever-age.com">Clever Age</a> <small>in Lyon, France</small></dt>
                            <dd>Drupal consultant/developer, 8 wk</dd>
                            <dd>Drupal intern developer, 10 wk</dd>
                            <dd><details>Drupal, multi-domain, SASS, team work</details></dd>
                        </dl>
                    </dd>
                    <dt id="2010">2010</dt>
                    <dd>
                        <dl>
                            <dt><a href="http://www.internet-selection.net">Internet-Selection</a> <small>in Lyon, France</small></dt>
                            <dd>Telecommuting <abbr title="PHP: Hypertext PreProcessor">PHP</abbr> developer, 2 mo</dd>
                            <dd><details>Web application auditing, SEO tool development, TDD, PHPUnit, Zend components, automomy</details></dd>
                        </dl>
                    </dd>
                    <dt id="2009">2009</dt>
                    <dd>
                        <dl>
                            <dt><a href="http://www.sqli.com">SQLI Group</a> <small>in Lyon, France</small></dt>
                            <dd>Intern developer, 5 mo</dd>
                            <dd><details>Adobe Flex, <abbr title="PHP: Hypertext PreProcessor">PHP</abbr>, Zend_Amf <abbr title="Research &amp; Development">R&amp;D</abbr>, Zend Framework, Centura, ergonomy</details></dd>
                        </dl>
                    </dd>
                </dl>
                <dl class="span8">
                    <dt id="2008">2008</dt>
                    <dd>
                        <dl>
                            <dt><a href="http://www.be-zend.org">Be-Zend</a> <small>in St-Quentin, France</small></dt>
                            <dd>Project manager and speaker, 6 mo</dd>
                            <dd><details>Project management, external relation, Website development, graphic identity creation, <abbr title="PHP: Hypertext PreProcessor">PHP</abbr>, Zend Framework, Dojo toolkit</details></dd>
                            <dt><a href="http://www.normaweb.fr">Normaweb</a> <small>in Les Adrets, France</small></dt>
                            <dd>Lead <abbr title="PHP: Hypertext PreProcessor">PHP</abbr> developer, 7 wk</dd>
                            <dd><details>Technological watch, database design, data transfers responsible, <abbr title="PHP: Hypertext PreProcessor">PHP</abbr>, MooTools</details></dd>
                            <dt><a href="http://www.ckc-net.com">CKC-Net</a> <small>in Sophia-Antipolis, France</small></dt>
                            <dd>Intern Web developer, 11 wk</dd>
                            <dd><details>Project management, community website development, integration testing, recette, <abbr title="PHP: Hypertext PreProcessor">PHP</abbr>, jQuery</details></dd>
                        </dl>
                    </dd>
                    <dt id="2007">2007</dt>
                    <dd>
                        <dl>
                            <dt><a href="http://www.ccazur.com">CCAZUR FRANCE</a> <small>in Cogolin, France</small></dt>
                            <dd>Web developer, 4 wk</dd>
                            <dd><details>Major development, database design, algorithmics, Web integration, integration tests, <abbr title="PHP: Hypertext PreProcessor">PHP</abbr>, MySQL, JavaScript</details></dd>
                            <dd>Intern communication analist, 10 wk</dd>
                        </dl>
                    </dd>
                </dl>
            </section>
            <section id="technologies" class="row">
                <h2 title="Technological skills">Technologies playground</h2>
                <dl class="span8">
                    <dt id="development">Development</dt>
                    <dd>Back-end developement (<abbr title="PHP: Hypertext PreProcessor">PHP</abbr>5 + <abbr title="Framework">FW</abbr>, <abbr title="Server Query Language">SQL</abbr>, <abbr title="Test Driven Development">TDD</abbr>)</dd>
                    <dd>Application programing (Java, C, AppleScript)</dd>
                    <dd>Standards worshipper (<abbr title="World Wide Web Consortium">W3C</abbr>, Coding Styles, <abbr title="Don't Repeat Yourself">DRY</abbr>, <abbr title="Keep It Simple and Stupid">KISS</abbr>)</dd>
                    <dd>Team player (Agile methods, Git, SVN)</dd>
                </dl>
                <dl class="span8">
                    <dt id="syseng">System engineering</dt>
                    <dd>Web server configuration (*<abbr title="Apache MySQL PHP">AMP</abbr>)</dd>
                    <dd>Networking (<abbr title="Secure Shell">SSH</abbr>, <abbr title="File Transfert Protocol">FTP</abbr>, <abbr title="Domain Name Server">DNS</abbr>, <abbr title="Dynamic Host Configuration Protocol">DHCP</abbr>, <abbr title="Trivial File Transfer Protocol">TFTP</abbr>)</dd>
                    <dd>Architecture (<abbr title="Redundant Array of Independent Disks">RAID</abbr>, virtualization, load-balancing, clustering)</dd>
                    <dd>Operating systems (OSX, Debian-like, Fedora, <del>Windows</del>)</dd>
                </dl>
            </section>
            <section id="miscelaneous" class="row">
                <h2 title="Better to know about me">Additional information</h2>
                <div class="span8">
                    <p>Leisures: volley-ball, snowboard, mountain bike</p>
                    <p>Hobbies: photography, festivals/concerts, cinema, travels, coding stuff</p>
                    <p>Vehicle: driver licence owner</p>
                </div>
                <div class="span4">
                    <p>Languages:</p>
                    <ul>
                        <li>French: mother tongue</li>
                        <li>English: functional</li>
                        <li>Italian: basics</li>
                    </ul>
                </div>
                <div class="span4">
                    <p>Tourism:</p>
                    <ul class="countries">
                        <li class="fr"><a href="http://en.wikipedia.org/wiki/France">France</a></li>
                        <li class="it"><a href="http://en.wikipedia.org/wiki/Italy">Italy</a></li>
                        <li class="eg"><a href="http://en.wikipedia.org/wiki/Egypt">Egypt</a></li>
                        <li class="tn"><a href="http://en.wikipedia.org/wiki/Tunisia">Tunisia</a></li>
                        <li class="tr"><a href="http://en.wikipedia.org/wiki/Turkey">Turkey</a></li>
                        <li class="ma"><a href="http://en.wikipedia.org/wiki/Morocco">Morocco</a></li>
                        <li class="ie"><a href="http://en.wikipedia.org/wiki/Ireland">Ireland</a></li>
                        <li class="gb"><a href="http://en.wikipedia.org/wiki/United_Kingdom">UK, Scotland</a></li>
                        <li class="cl"><a href="http://en.wikipedia.org/wiki/Chile">Chile</a></li>
                    </ul>
                </div>
            </section>
        </section>
        <div class="php-logo mhide"></div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="span8">
                    <p>I'd work better with...</p>
                    <ul>
                        <li>Original working methodologies, tools</li>
                        <li>Agile project management</li>
                        <li>Easy time set, flexibility</li>
                        <li>Fun offices</li>
                    </ul>
                </div>
                <div class="span4">
                    <p>Back to <a href="#start" rel="start" title="Back to the top of this page">the top</a></p>
                    <p>Last updated: 2011-12-12</p>
                    <p><small>French-cooked and designed by Joris Berthelot &copy; <?php echo copyright(2011); ?>, with help of <a href="http://twitter.github.com/bootstrap">Bootstrap</a>.</small></p>
                </div>
                <div class="span4">
                    <a href="http://joris.berthelot.tel" rel="me" title="Bookmark my Telnic domain!" id="telnic"><img src="<?php echo $domain; ?>/img/tel_logo_png_transparent.png" width="64" height="64" alt="Telnic logo" /></a>
                    <p class="center"><small><a href="http://d0.webproxy.nic.tel/vcard.action?domain=joris.berthelot.tel" title="Download my vCard" rel="me">vCard</a></small></p>
                </div>
            </div>
        </div>
    </footer>
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