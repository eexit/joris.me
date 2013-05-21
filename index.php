<?php
function copyright ($year) { return $year < date('Y') ? $year . '-' . date('Y') : $year; }
$domain = 'http://joris.me';
$expiration = 3600 * 24 * 60; // 60 days
date_default_timezone_set('America/New_York');
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
    <title>Joris Berthelot — PHP / Full-Stack Engineer resume</title>
    <meta name="author" content="Joris Berthelot"/>
    <meta name="description" content="Joris Berthelot's updated resume: PHP developer, full stack, Web server player, back-end engineer, quick and passionate learner"/>
    <meta name="keywords" content="php development full-stack back-end web developer system engineer html css javascript resume w3c msc master sciences oop java c new york usa"/>
    <meta name="robots" content="all"/>
    <meta name="viewport" content="width=device-width"/>
    <!--
    <meta property="og:title" content="Joris Berthelot - PHP engineer resume"/>
    <meta property="og:url" content="<?php echo $domain; ?>"/>
    <meta property="og:image" content="<?php echo $domain; ?>/img/icon.png"/>
    <meta property="og:site_name" content="Joris Berthelot - PHP engineer resume"/>
    <meta property="og:description" content="Joris Berthelot's updated resume: PHP engineer, Web server player, Zend PHP Certified Engineer wannabe/>
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
            <h1 title="PHP engineer available (see below)"><a href="<?php echo $domain; ?>" rel="me">Joris Berthelot</a> <sup><span class="label success"><a href="#experience">Hire me!</a></span></sup></h1>
            <h2 title="This is what I'm doing right now...">I am actively looking for a first Web engineering job in the US,<br>a passionate <abbr title="PHP: Hypertext PreProcessor">PHP</abbr> engineer and secondarily an opportunist <a href="http://photography.eexit.net" title="Check out my photography portfolio!">photographer</a>.</h2>
            <p class="btnlnks"><a href="http://joris.berthelot.tel" title="Cheers me!" class="btn danger">Contact me</a>&nbsp;&nbsp;or&nbsp;&nbsp;<a href="<?php echo $domain; ?>/get/Joris_Berthelot_phpeng_resume_52113.pdf" class="btn" title="Get the latest version of my resume">get my resume!</a></p>
        </header>
        <a href="http://github.com/eexit" rel="me" class="forkme mhide" title="Fork me on GitHub"><span>Fork me on GitHub</span></a>
    </section>
    <div id="resume">
        <section role="main" class="container">
            <section id="background">
                <h2 title="Study background">Educational background</h2>
                <div>
                    <p><strong>Computer Science Engineering MSc</strong> with honours</p>
                    <details><summary>Software, system engineering &amp; architecture, <abbr title="Information System">IS</abbr> auditing, numeric contents management, project management</summary></details>
                    <aside>2010, 3 yr, <a href="http://sciences.univ-larochelle.fr/Master-Ingenierie-Informatique.html">D&eacute;partement Informatique</a>, Universit&eacute; La Rochelle, France.</aside>
                </div>
                <div>
                    <p><strong>Telecommunications &amp; Network Professional Bachelor's Degree, Web Developer concentration</strong> with honours</p>
                    <details><summary>Web development, Zend Framework, Java, <abbr title="Information Technology">IT</abbr></summary></details>
                    <aside>2008, 1 yr, <a href="http://www.insset.u-picardie.fr/site/licencepro_web"><abbr title="INstitut Sup&eacute;rieur des Sciences Et Techniques">INSSET</abbr></a> Saint-Quentin, Universit&eacute; Jules Verne de Picardie, France.</aside>
                </div>
                <div>
                    <p><strong>Communication, Network and Services Higher National Diploma</strong> with honours</p>
                    <details><summary>Multimedia creation, art, languages, communication, development, <abbr title="Information Technology">IT</abbr></summary></details>
                    <aside>2006, 2 yr, <a href="http://serecom.univ-tln.fr"><abbr title="Institut Universitaire Technologique">IUT</abbr> <abbr title="Services et R&eacute;seaux de Communication">SRC</abbr></a> Saint-Rapha&euml;l, Universit&eacute; du Sud Toulon-Var, France.</aside>
                </div>
                <div>
                    <p><strong>Laboratory Sciences High School Diploma</strong></p>
                    <details><summary>Biochemistry, biological engineering option</summary></details>
                    <aside>2004, 2 yr, Lyc&eacute;e Alexis de Tocqueville, Grasse, France.</aside>
                </div>
            </section>
            <section id="experience" class="row">
                <h2 title="Working experience">Experience</h2>
                <dl class="span8">
                    <dt id="2013">2013 <span class="label success">Available</span></dt>
                    <dd>
                        <dl>
                            <dt>Looking forward to start my career:</dt>
                            <dd>
                                <ul>
                                    <li>Availabilty: <abbr title="As Soon As Possible">ASAP</abbr> - Working authorization needed</li>
                                    <li>Desired job type: permanent and full-time</li>
                                    <li>Desired location: New York City, <abbr title="United States of America">USA</abbr></li>
                                </ul>
                            </dd>
                        </dl>
                    </dd>
                    <dt id="2012">2012</dt>
                    <dd>
                        <dl>
                            <dt><a href="http://ohmygreen.com">Oh My Green!</a> <small>in New York City, <abbr title="United States of America">USA</abbr></small></dt>
                            <dd><abbr title="PHP: Hypertext PreProcessor">PHP</abbr> engineer and <abbr title="Continuous Integration">CI</abbr>/<abbr title="Quality Assurance">QA</abbr>/<abbr title="Test Driven Development">TDD</abbr> supervisor intern, 9 mo</dd>
                            <dd><details><summary>Git, Jenkins, Silex, Facebook <abbr title="Application Program Interface">API</abbr>, Magento Enterprise, idea catalyst</summary></details></dd>
                            <dt><a href="http://www.ginlanemedia.com">Gin Lane</a> <small>in New York City, <abbr title="United States of America">USA</abbr></small></dt>
                            <dd><abbr title="PHP: Hypertext PreProcessor">PHP</abbr> and Ruby on Rails intern developer, 9 wk</dd>
                            <dd><details><summary>Database syncing, Wordpress, Ruby on Rails, MongoDB</summary></details></dd>
                        </dl>
                    </dd>
                    <dt id="2011">2011</dt>
                    <dd>
                        <dl>
                            <dt><a href="http://www.clever-age.com">Clever Age</a> <small>in Lyon, France</small></dt>
                            <dd>Drupal consultant/developer, 8 wk</dd>
                            <dd>Drupal intern developer, 10 wk</dd>
                            <dd><details><summary>Drupal, multi-domain, SASS, team work</summary></details></dd>
                        </dl>
                    </dd>
                    <dt id="2010">2010</dt>
                    <dd>
                        <dl>
                            <dt><a href="http://www.internet-selection.net">Internet-Selection</a> <small>in Lyon, France</small></dt>
                            <dd>Telecommuting <abbr title="PHP: Hypertext PreProcessor">PHP</abbr> developer, 2 mo</dd>
                            <dd><details><summary>Web application auditing, <abbr title="Search Engine Optimization">SEO</abbr> tool development, <abbr title="Test Driven Development">TDD</abbr>, PHPUnit, Zend components, automomy</summary></details></dd>
                        </dl>
                    </dd>
                </dl>
                <dl class="span8">
                    <dt id="2009">2009</dt>
                    <dd>
                        <dl>
                            <dt><a href="http://www.sqli.com">SQLI Group</a> <small>in Lyon, France</small></dt>
                            <dd>Intern developer, 5 mo</dd>
                            <dd><details><summary>Adobe Flex, <abbr title="PHP: Hypertext PreProcessor">PHP</abbr>, Zend_Amf <abbr title="Research &amp; Development">R&amp;D</abbr>, Zend Framework, Centura, ergonomy</summary></details></dd>
                        </dl>
                    </dd>
                    <dt id="2008">2008</dt>
                    <dd>
                        <dl>
                            <dt><a href="http://www.be-zend.org">Be-Zend</a> <small>in St-Quentin, France</small></dt>
                            <dd>Project manager and speaker, 6 mo</dd>
                            <dd><details><summary>Project management, external relation, Website development, graphic identity creation, <abbr title="PHP: Hypertext PreProcessor">PHP</abbr>, Zend Framework, Dojo toolkit</summary></details></dd>
                            <dt><a href="http://www.normaweb.fr">Normaweb</a> <small>in Les Adrets, France</small></dt>
                            <dd>Lead <abbr title="PHP: Hypertext PreProcessor">PHP</abbr> developer, 7 wk</dd>
                            <dd><details><summary>Technological watch, database design, data transfers responsible, <abbr title="PHP: Hypertext PreProcessor">PHP</abbr>, MooTools</summary></details></dd>
                            <dt><a href="http://www.ckc-net.com">CKC-Net</a> <small>in Sophia-Antipolis, France</small></dt>
                            <dd>Intern Web developer, 11 wk</dd>
                            <dd><details><summary>Project management, community website development, integration testing, recette, <abbr title="PHP: Hypertext PreProcessor">PHP</abbr>, jQuery</summary></details></dd>
                        </dl>
                    </dd>
                    <dt id="2007">2007</dt>
                    <dd>
                        <dl>
                            <dt><a href="http://www.ccazur.com">CCAZUR FRANCE</a> <small>in Cogolin, France</small></dt>
                            <dd>Web developer, 4 wk</dd>
                            <dd><details><summary>Major development, database design, algorithmics, Web integration, integration tests, <abbr title="PHP: Hypertext PreProcessor">PHP</abbr>, MySQL, JavaScript</summary></details></dd>
                            <dd>Intern communication analist, 10 wk</dd>
                        </dl>
                    </dd>
                </dl>
            <p>Various experience in: photography, modeling/acting, sound recordist &amp; supermarket unpacker.<br>Professionally active since I was 17 year old.</p>
            </section>
            <section id="technologies" class="row">
                <h2 title="Technological skills">Technologies playground</h2>
                <dl class="span8">
                    <dt id="development">Development</dt>
                    <dd>Front-end developement (<abbr title="HyperText Markup Language">HTML</abbr>5, <abbr title="Cascading Style Sheets">CSS</abbr>3, JavaScript + <abbr title="Framework">FW</abbr>, performance &amp; asset caching)</dd>
                    <dd>Back-end developement (<abbr title="PHP: Hypertext PreProcessor">PHP</abbr>5.3+, Silex, Zend Framework, Symfony, MySQL, SQLite, Doctrine)</dd>
                    <dd>Application programing (Java, AppleScript, Ruby, C, Python)</dd>
                    <dd>Best practices &amp; standards worshipper (<abbr title="Test Driven Development">TDD</abbr>, <abbr title="Continuous Integration">CI</abbr>, <abbr title="World Wide Web Consortium">W3C</abbr>, Coding Styles, <abbr title="Don't Repeat Yourself">DRY</abbr>, <abbr title="Keep It Super Simple">KISS</abbr>, <abbr title="Less Is a Prefered Solution">LIPS</abbr>, <abbr title="Never Trust User Input">NTUI</abbr>)</dd>
                    <dd>Team player (Agile methods, Git, SVN, LaTeX)</dd>
                </dl>
                <dl class="span8">
                    <dt id="syseng">System engineering</dt>
                    <dd><abbr title="Continuous Integration">CI</abbr> server &amp; deployment scripts (Jenkins, bash)</dd>
                    <dd>Web server configuration &amp; maintenance (*<abbr title="Apache MySQL PHP">AMP</abbr>)</dd>
                    <dd>Networking (<abbr title="Secure Shell">SSH</abbr>, <abbr title="File Transfert Protocol">FTP</abbr>, <abbr title="Domain Name Server">DNS</abbr>, <abbr title="Dynamic Host Configuration Protocol">DHCP</abbr>, <abbr title="Trivial File Transfer Protocol">TFTP</abbr>)</dd>
                    <dd>Architecture (<abbr title="Redundant Array of Independent Disks">RAID</abbr>, virtualization, load-balancing, clustering)</dd>
                    <dd>Operating systems (OSX, Debian-like, Fedora, <del>Windows</del>)</dd>
                </dl>
            </section>
            <section id="miscelaneous" class="row">
                <h2 title="Better to know about me">Additional information</h2>
                <div class="span8">
                    <p>Sports: volleyball, snowboard, mountain bike</p>
                    <p>Hobbies: photography, music festivals, travels, geek stuff</p>
                    <p>Vehicles: driver licence owner, bike rider</p>
                </div>
                <div class="span4">
                    <p>Languages:</p>
                    <ul>
                        <li>French: native</li>
                        <li>English: fluent</li>
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
                        <li class="us"><a href="http://en.wikipedia.org/wiki/United_States">United States</a></li>
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
                    <p>Last updated: 2013-05-21</p>
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