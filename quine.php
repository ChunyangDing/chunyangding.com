<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Web Design"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
		<link rel="stylesheet" type="text/css" href="/css/toc.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
	
	<div class='container'>
		<div class='blurb'>
			<h1>Server and Web Design</h1>

			<div id="toc"> 
				<p class="toc_title"> Contents </p>
				<ul> 
					<li> 1 <a href="#motivation"> Motivation </a> </li>
					<li> 2 <a href="#initial_setup"> Initial Setup </a> </li>
					<li> 3 <a href="#serverdesign"> Server Design </a> </li>
						<ul>
							<li> 3.1 <a href="#lamp_setup"> LAMP Setup </a> </li>
							<li> 3.2 <a href="#virtual_hosts">Virtual Hosts </a> </li>
							<li> 3.3 <a href="#ssl_certification">SSL Certification </a></li>
						</ul>
					</li>
					<li> 4 <a href="#webdesign"> Website Design </a> 								
						<ul>
							<li>
								<li> 4.1 <a href="#navbar">Creating a Navigational Bar</a></li>
								<li> 4.2 <a href="#header_footer">Creating header and footer php files </a></li>
								<li> 4.3 <a href="#redirect_php">Redirecting Webpages Without .php Endings</a></li>
								<li> 4.4 <a href="#password_protection">Creating Password Protected Pages </a></li>
								<li> 4.5 <a href="#404_page">Creating my 404 page</a></li>
								<li> 4.6 <a href="#general_css">General CSS ideas </a></li>
								<li> 4.7 <a href="#sticky_footer">Setting up a sticky footer</a></li>
								<li> 4.8 <a href="#video_embed">Embedding videos</a></li>
								<li> 4.9 <a href="#toc_css">Creating a Table of Contents CSS</a></li>
								<li> 4.10 <a href="#pagecounter">Setting up MySQL and a pagecounter</a></li>
								<li> 4.11 <a href="#photogallery">Creating a photo gallery</a></li>
							</li>
						</ul>
					</li>
					<li> 5 <a href="#git_backup">Backup to Github</a></li>
					<li> 6 <a href="#general_tips">General Tips</a></li>
					</li>
				</ul>
			</div>
			
			<h1 id="motivation"> Motivation </h1>
			<p> Part of what I had wanted to accomplish in designing this website was learning how to use my own server for hosting. I have serious reservations about using large, complex software-as-a-service subscriptions for hosting things that would hopefully live semi-permanently, and it didn't seem like too much of a challenge to learn the basics. I followed several web tutorials to set up a pure Linux box, which is what is currently serving you this page! While setting things up, I kept a careful record of all of the commands I sent the server, so that I could fix an mistakes as needed. So far, things look okay, so I'm going to post what I did here, to hopefully act as a simple guide for setting up your own server. </p> 
			
			<p> Overall, this website is made with just html/css/php, without much fancy addons (ie, javascript, html5, or any other content management system (CMS) ). Since the primary purpose of the website is to just deliver text, I figured that a maximally simple and lightweight design would probably be optimal. </p>
			
			<p> All of the website is hosted on a desktop running Ubuntu 18.04, which is also running Apache, MySQL, and PhP - the conventional LAMP server. That is directly connected to my home router, connected by a static internal IP with port 443 (http) open to the public, which is then mapped onto my domain name <a href="chunyangding.com">chunyangding.com</a>). When I move, I would have to remap the public IP address of the router to my website domain name once more. </p>
			
			<p> The code for this website is edited in Notepad++ on my main laptop. I then commit all of the changes to Git, which through <a href="github.com/chunyangding/chunyangding.com"> Github</a>, is then pushed to the live website. Therefore, my <code>dev</code> workspace is local on my laptop, while <code>prod</code> is on the desktop that is permanently on and permanently connected to the web. </p> 
			
			<p> <a href="#toc">Back to top</a> </p>
			
			<h1 id="initial_setup"> Initial Setup </h1>
			
			<p> First, I wiped an old Desktop and installed Ubuntu 18.04 LTS on it, since Ubuntu has a good long-term support structure, doesn't have automatic updates, and is lightweight. I downloaded the disk image from <a href="https://ubuntu.com/download/desktop">Canonical's official repository here</a>, and flashed it to a USB drive. Afterwards, I restarted the desktop, interrupted the boot sequence to request it to boot from USB, and installed Ubuntu. </p>
			
			<p> After that, I ensure that my Ubuntu is fully up to date: </p>
			
<p><pre><code>sudo apt-get update
sudo apt-get upgrade
</code></pre></p>

			<p> In my house, my server is sitting in the laundry room, as that is the closest physical location to our router. I would very much like to not have my monitor and keyboard blocking the laundry room entrance! Therefore, one of the first things I set up is SSH, so that I can give commands to the server remotely, as well as copy and edit files. I use <code>openssh-server</code> to accomplish this. Installing it is very easy:</p>
			
<p><pre><code>sudo apt-get install openssh-server
</code></pre></p>

			<p> and then I do some simple configuration, such as the port number and the number of authorized tries. For editing text files on the command line, I use nano (as it is less likely to trap me in the editor as is, let's say, vim) </p>
		
<p><pre><code>sudo nano /etc/ssh/ssh_config
</code></pre></p>

			<p> I also want to use a ssh key, instead of a password, for the increased security benefit. On my laptop, which is running Windows 10, I am primarily using a combination of PuTTY and WinSCP to connect. PuTTY has a built in function to generate a SSH public and private key, so I go ahead and do that. Then, on the server side, I copy it over, as well as set the permissions and ownerships of that file: </p>
		
<p><pre><code>mkdir -p ~/.ssh
sudo nano ~/.ssh/authorized_keys
sudo chmod -R go= ~/.ssh
sudo chown -R [USERNAME]:[USERNAME] ~/.ssh
</code></pre></p>

			<p> I also ensure that OpenSSH is accessible through my universal firewall, as follows: </p>
		
<p><pre><code>sudo ufw allow OpenSSH
sudo ufw enable
</code></pre></p>

			<p> Finally, I disable the SSH via password, so that connecting to my server requires a SSH key. This is to prevent brute force attacks on my server password. This setting can be found in <code>/etc/ssh/sshd_config</code>, as the <code>PasswordAuthentication no</code> option. </p>
			
			<p> From here on out, everything else is run completely from my PuTTY terminal from my laptop. </p>
			
			<p> <a href="#toc">Back to top</a> </p>
			
			<h1 id="serverdesign"> Server Design </h1>
			
			<p> At this point, the basic functionality of my server has been set up. Now, the remaining work is to configure all of the packages to function together. </p>
			
			<h2 id="lamp_setup"> LAMP Setup </h2>		
			
			<p><b> Apache2 Setup </b></p>
			
			<p> All web pages are served by the Apache2 client. It allows users to make a request over the http or https protocol, and return the corresponding html page. Therefore, we need to 1) install the package, and 2) allow it access through the <code>universal firewall</code> that we had set up. </p>
			
<p><pre><code>sudo apt install apache2
sudo ufw app info "Apache Full"
sudo ufw allow in "Apache Full"
</code></pre></p>

			<p> After Apache is installed, go to your local address (which should look something like <code>192.168.1.XX</code>) to see a "It Works!" page. To find out what your local IP address is, you can type the command <code>ip a</code> into the command line.</p>

			<p> It is also useful to have access to your router settings as well, which typically is accessed through something like <code>192.168.1.1</code>. This may require a login and a password; look at your physical router to see if there is a default password on the outside of it. At this point, I then configured the default ports for http (80) and https (443) to forward from external traffic to my server. I then tested to make sure that I could see the Apache2 "It Works!" page when pinging my external IP address, which is <code>173.73.196.43</code> for me. </p>
			
			<p> At this point, I took a slight detour and configured the web domain that I had purchased, <code>chunyangding.com</code>, to redirect to my public IP address. I had purchased my domain through <a href="https://www.namecheap.com">namecheap.com</a>, although there are many options out there today. The two main things to configure here is to forward my "A record" for the base domain (<code>chunyangding.com</code>) as well as the primary alias (<code>www.chunyangding.com</code>) to forward to my public IP address. It takes a bit of time for this to propagate through the DNS lookup system, so I recommend getting it set up earlier so that it is ready when you want it to be. </p> 
			
			<p><b>MySQL Setup</b></p>
			
			<p> Next, we set up MySQL, a database software that stores data in tables. Although I didn't have any immediate use for this, it came in handy when I wanted to set up some pagecounter code later on. </p>
			
<p><pre><code>sudo apt install mysql-server
sudo mysql_secure_installation
</code></pre></p>
			<p> These commands installed mysql-server on Ubuntu. When running the <code>mysql_secure_installation</code>, I chose to have a strong password, removed anonymous users, disallowed root login remotely, removed test database, and reloaded privilege tables - in short, all the options provided. This is primarily for security purposes; it's not so good to have a database that can be accessed with default credentials. Afterwards, I configured the database with secure passwords, as follows:
			
<p><pre><code>sudo mysql
  SELECT user,authentication_string,plugin,host FROM mysql.user;
  ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '[PASSWORD GOES HERE]'
  FLUSH PRIVILEGES;
  SELECT user,authentication_string,plugin,host FROM mysql.user;
</code></pre></p>

			<p> These are commands to configure my root account with the proper password, and then to flush the priviliges. To be honest, I don't fully understand how security in MySQL works, but this is what I did. </p>
			
			<p><b> php Setup</b></p>
			
			<p> Finally, we setup php, a processing language for generating html pages on the fly. This has been very useful, as it allows me to not have to type in manually code that would be repeated across many pages, such as my header and footer. </p>
			
<p><pre><code>sudo apt install php libapache2-mod-php php-mysql</code></pre></p>

			<p> And that's it! I chose not to install any additional packages at this point, since vanilla php was already sufficient for my purposes. </p>
			
			<p> <a href="#toc">Back to top</a> </p>

			<h2 id="virtual_hosts"> Virtual Hosts </h2>
			
			<p> Now, this is the part of the setup that tripped me up the most, and actually led me to completely wiping my previous configuration and redoing it. In theory, Apache2 is able to serve any number of web domains from a single box, according to the different virtual hosts that are setup. By default, Apache2 will try to serve pages from the folder <code>/var/www/default</code>, but you can configure new folders for different host names. </p>
			
<p><pre><code>sudo mkdir /var/www/chunyangding.com
sudo chown -R $USER:$USER /var/www/chunyangding.com
sudo chmod -R 755 /var/www/chunyangding.com
</code></pre></p>
			<p> Now, there exists a folder that collects all of my webpages. Important - I believe you do need to make sure that the title of the folder is the same as your domain address, although I'm not sure if this is the case. I had previously set it up where the folder was only chunyangding, and for some reason this did not seem to work. Next, I need to edit the configuration to point to the correct folder. </p>
			
<p><pre><code>sudo nano /etc/apache2/sites-available/chunyangding.com.conf
  &lt;VirtualHost *:80&gt;
    ServerAdmin webmaster@localhost
    ServerName chunyangding.com
    ServerAlias www.chunyangding.com
    DocumentRoot /var/www/chunyangding.com
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
  &lt;/VirtualHost&gt;
sudo systemctl reload apache2
</code></pre></p>
			<p>After creating that .conf file, I then need to enable that configuration in apache2, and disable the default configuration. Finally, before anything will actually be updated, I need to reload apache2. </p>
			
<p><pre><code>sudo a2ensite chunyangding.com.conf
sudo a2dissite 000-default.conf
sudo systemctl reload apache2
</code></pre></p>

			<p> Now, I want to test that this is working. Since the base domain page will look for a page called <code>index.html</code>, I then go ahead and create one with the most basic information, to see if it works or not. </p>
			
<p><pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Hello World!&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt; Welcome to chunyangding.com! &lt;/h1&gt;
    &lt;p&gt; Hello world! &lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;

</code></pre></p>

			<p> I then go to my browser (firefox is what I am using to debug) and verify that I can see that sample page when I go to chunyangding.com. Success! </p>
	
			<p> <a href="#toc">Back to top</a> </p>

			<h2 id="ssl_certification"> SSL Certification </h2>
			
			<p> After the website runs, I want to set up SSL certification. Honestly, I'm not entirely sure how this process runs, but it seems like there are free services that will grant you a SSL certificate, created and administrated by the Electronic Frontier Foundation. I just go ahead and do what is needed. </p>
			
<p><pre><code>sudo add-apt-repository ppa:certbot/certbot
sudo apt install python-certbot-apache
sudo apache2ctl configtest
  returned: AH00558: apache2: Could not reliably determine the server's fully qualified domain name, using 127.0.1.1. Set the 'ServerName' directive globally to suppress this message//Syntax OK
  sudo nano /etc/apache2/apache2.conf
    ServerName chunyangding.com (appended to bottom of file)
  sudo apache2ctl configtest
    returned: Syntax OK
sudo certbot --apache -d chunyangding.com -d www.chunyangding.com
sudo certbot renew --dry-run
</code></pre></p>
			<p> Note that I ran into issues in the middle there, where it appears that I did not properly configure the servername on my <code>apache2.conf</code> file. Why is this necessary? No clue. </p>
			
			<p> In any case, this seems like a success! It ensures that my website has a valid SSL certificate, and is valid for 3 months. I can then renew that certificate at a later time. I also set up during the configuration to redirect all traffic by default from <code>http://chunyangding.com</code> to <code>https://chunyangding.com</code>. My understanding is that having a SSL certification means that people are unable to sniff packages that are being sent between my website and the user. While this is essentially pointless here (I have no place on my website for you to give me your social security number and your mother's maiden name, for instance), it still seems like good practice to have. </p>
			
			<p> At this point, everything is set up for the server! I am ready to begin creating web pages, and most of the remaining work is in html, php, and css instead. However, I still have terminal access, such as when I need to install or configure additional packages. </p>
		
			<p> <a href="#toc">Back to top</a> </p>

			<h1 id="webdesign"> Website design </h1>
			
			<p> As I mentioned at the very beginning, my overall web design philosophy is to keep things as simple as possible. To that, I drew a ton of inspiration from other <a href="/links">fairly minimalistic personal websites</a>, and tried to only add things on when I felt like they were necessary to achieve some kind of function. So, my initial start for designing everything was to just have plain text pages that were linked to each other. As I tinkered more, I began putting in more and more functions, such that while it is still very basic now, I think it's approaching something of a nice design. </p>
			
			<p> You can see the full organization of my website on my <a href="https://github.com/chunyangding/chunyangding.com">Github</a>, but a brief overview. Within my root folder, I have an <code>assets</code> folder, which stores items that are frequently reused, such as my <code>navbar.php</code>, <code>footbar.php</code>, and <code>pagecounter.php</code>. I also have subfolders to store files, pictures, and videos, although those are not backed up to Github because of size considerations. Back to my root folder, I have another subfolder for all of my <code>css</code> files. For my regular posts, I keep them in date coordinated folders, such that a blog post or a recipe posted on March 31st, 2020 would live in <code>/2020/03/31/blog.php</code>. All of my main pages are stored in the root folder. </p> 
			
			<p> <a href="#toc">Back to top</a> </p>

			<h2 id="navbar"> Creating a navigational bar at the top of my page </h2>
			
			<p> One of the first things that I knew I wanted to include was to have a navigational bar that linked to all of the other pages in my website. I initially edited this navigational bar directly on my <code>index.html</code> page. The CSS of this was a bit complicated, and I think I got it from some html/css cookbook online. You can find that <a href="/css/dropdown.css">css file here</a>. </p>

			<p> After the CSS file was set up, all I needed to do was to implement the navigational bar. The entire navbar was contained within a <code>div</code> that had a <code>navbar</code> class. Links to other pages simply used the <code>&lt;a href="/page"&gt;</code> syntax. For tabs on the navbar that needed to dropdown, I implemented a <code>button</code> with a <code>dropbtn</code> class, opening up to a sub <code>div</code> that contained more links. Links, links, links! </p>
			
			<p> See below for a section of my navbar: </p>
			
<p><pre><code>&lt;div class="navbar"&gt;
  &lt;a href="/"&gt;Home&lt;/a&gt;
  &lt;div class="dropdown"&gt;
    &lt;button class="dropbtn"&gt; About Me &#9660;
    &lt;/button&gt;
    &lt;div class="dropdown-content"&gt;
      &lt;a href="/about"&gt;About&lt;/a&gt;
      &lt;a href="/cv"&gt;CV&lt;/a&gt;
      &lt;a href="/failure_cv"&gt;Failure CV&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre><p>

			<p> While creating this, I was editing it live on my <code>index.html</code> page, but quickly realized that this was not sustainable. I did not want to manually update the navbar for every single page when I put in a new page for consistency. This led me to my next section, implementing php.</p>
			
			<p> <a href="#toc">Back to top</a> </p>

			<h2 id="header_footer"> Creating header and footer php files </h2>
			
			<p>PHP is a language for processing hypertext. It functions like a simple programming language, and is in fact <a href="https://en.wikipedia.org/wiki/Turing_completeness">Turing complete</a>, but so far I have only used it for some fairly trivial functions. The most basic function is to <code>echo</code> html text from one file to another. This allows you to have a single file, such as <code>navbar.php</code>, that then gets inserted into the html code of many other files. </p>
			
			<p> To begin with, php is a language that is processed on my server. That means that if you view the source of any of my pages, you will not see any php code, which is delineated by <code>&lt;?php  ?&gt;</code>. Instead, my understanding is that the installed php on my computer will first process all of the php code prior to serving the raw html file via apache2 to your browser. Therefore, when you look at the html on your browser, it only contains the final html. This allows for dynamic content to be generated, yet still be lightweight (still just a html file. </p>
			
			<p> To implement this navbar, I use the <code> php include </code> command, which includes the php from some other file. Here, the other file was <code>/assets/navbar.php</code>. Within the <code>navbar.php</code> file, I used the <code>echo</code> command to just spit out verbatim the html for the navbar. See below for some code samples.</p>
			
<p><pre><code>&lt;?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?&gt;

/assets/navbar.php:

&lt;?php
echo 
'&lt;div class="navbar"&gt;
  &lt;a href="/">Home&lt;/a&gt;'
?&gt;
</code></pre></p>
			<p> One thing to point out is that the include statement also has the phrase <code>$_SERVER['DOCUMENT_ROOT'].</code> in it. This is so that php always knows where to look for. By default, php will start searching for the included file starting from the location of where your current file is. For instance, if this include statement does not have the document root phrase and is in one of my blog posts which lives in <code>/2020/03/31/</code>, it will start searching for <code>/2020/03/31/assets/navbar.php</code> which does not exist. Therefore, even in pages that do live in my document root, I keep the same phrase there for consistency, and in case if I want to move that page in the future. </p> 			
			
			<p> <a href="#toc">Back to top</a> </p>

			<h2 id="redirect_php"> Redirecting webpages without .php ending </h2>
			
			<p> Now that I have php documents, all of my urls look somewhat ugly, ending in <code>.php</code>. This is a somewhat aesthetic choice, but I would prefer the url to just simply be <code>chunyangding.com/about</code> rather than have to be <code>chunyangding.com/about.php</code>. Dropping the ending makes it easier to tell other humans about a specific page, and somewhat future-proofs your website (ie, if you decide to go from php back to html or forwards to some future system, like perhaps qhq). </p>
			
			<p> This change is not with the html/css code, but instead, with the apache2 configurations and a file called <code>.htaccess</code>. I created a file using <code>sudo nano /var/www/chunyangding.com/.htaccess</code> and put in the following: </p>
			
<p><pre><code>RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^([^\.]+)$ $1.php [NC,L]
</code></pre></p>
			<p> Note that this does require you to have installed <code>rewrite_engine</code>. I think it comes by default, but to be safe, you can run </p>
			
<p><pre><code>sudo a2enmod rewrite
sudo systemctl restart apache2
</code></pre><p>
			
			<p> However, you are not quite done yet. If you were using Apache2 with the installation that I described above, the main <code>apache2.conf</code> file is not configured to accept these kinds of rewrites. You need to do as follows: </p>

<p><pre><code>sudo nano /etc/apache2/apache2.conf
  &lt;Directory /var/www/&gt;
    Options Indexes FollowSymLinks
    AllowOverride All (changed from AllowOverride None)
    Require all granted
  &lt;/Directory&gt;
sudo service apache2 restart
</code></pre></p>
			<p> And I think that's it! From here on out, any page without an ending will automatically get a .php attached to it before retrieving it from my file system. </p>
			
			<p> <a href="#toc">Back to top</a> </p>

			<h2 id="password_protection"> Creating password protected pages </h2>
			
			<p> Suppose you have a few pages on your website that you want to only be accessible by certain users. What would be the best way to protect that information? </p>
			
			<p> First, you can not have a link to your page. This would solve the immediate problem that unless if someone knows what the address of your page is, they would be unable to easily find it. However, this type of security is very bare, and can't really be relied on. The next level of security is to configure your <code>.htaccess</code> to use a login and a password to access certain pages. </p>
			
			<p> For me, I created my password protected pages underneathe a subdomain, called <code>/foobar</code>. Then, I did <code> sudo nano /var/www/chunyangding.com/foobar/.htaccess</code> with the following information: </p>
			
<p><pre><code>AuthName "[INSERT TEXT HERE]"
AuthType Basic
AuthUserFile /var/www/chunyangding.com/.htpasswd
require valid-user 
</code></pre></p>
			
			<p> Where <code>AuthName</code> is the prompt text that pops up when you try to access one of those pages. This .htaccess file then applies recursively to all of the files and subfolders within the folder where it lives. Note that I refer to a <code>.htpasswd</code> file, which I create with the command <code>htpasswd -c .htpasswd [USERNAME GOES HERE]</code>. The command prompt then prompts me to enter a password, which I do. </p>
			
			<p> And that's it! Your pages protected from prying eyes. </p>
			
			<p> <a href="#toc">Back to top</a> </p>

			<h2 id="404_page"> Creating my 404 page </h2>
			
			<p> It's nice to have a custom 404 page, if not just to redirect people back to your main page. The default Apache2 404 page smacks of poorly configured 90s websites. Luckily, it is almost trivial to create a 404 page. </p>
			
			<p> First, create whatever you want on your page. For me, I kept it simple, keeping the same header and footer, with a standard "Well, this is embarassing" header, and a link back to my main page in the body. I save this file as <code>404.php</code> in my document root. </p>
			
			<p> Next, edit your <code>.htaccess</code> file that is your document root to include the line: </p>
			
<p><pre><code>ErrorDocument 404 /404</code></pre></p>

			<p> And you are good to go! </p>
			
			<p> <a href="#toc">Back to top</a> </p>

			<h2 id="general_css"> General CSS ideas </h2>
			
			<p> Now, some general CSS ideas. I don't think I'm really suitable to be telling anyone how to design a website, as you can tell just by looking around this site. However, I have noticed some things that make your website look less like a computer science professor who configured their site in fall of 1985 and has not touched the design ever since. </p>
			
			<p><b>Font, spacing, and text boxes</b></p>
			
			<p> I think the most important aspect of making a website look passable is to use a reasonable font. Without changing any settings, the text will just run all over the place, from one end of the screen to the other. In general, I have a sense that I don't want the text to be larger than some certain width. To do this, I configure the margins and min/max widths of the <code>body</code> tag, as follows. </p>
			
<p><pre><code>body {
  margin-left: 100px;
  margin-top: 20px;
  margin-bottom: 0px;
  min-width: 400px;
  max-width: 800px;
}
</code></pre></p>
			
			<p> I first make a margin on the left hand side - I don't want the text scrunched up all the way to the left side of your screen. Afterwards, I set the <code>min-width</code> to be 400 pixels, and the maximum width to be 800 pixels. This was determined through just messing with the numbers until it started to look okay. This is somewhat responsive, so I dragged the size of the web browser and looked at how the site appeared on my phone as well (Android with Chrome) to make sure that things were not squeezed too much. </p>
			
			<p> I also make some changes to the font, font-size, and line-height within my <code>p</code> tags. Most of my text lives within these p tags, and I don't want it to look too scrunched together. Therefore: </p>
			
<p><pre><code>p {
  font-family: "Helvetica", "Arial", "Sans-Serif";
  max-width: 90%;
  font-size: 1.4em;
  line-height: 1.5em;
  color: #333;
}
</code></pre></p>
			
			<p> There are some additional adjustments that I made, including for size of headers, for tables, for links (which I mostly copied over from <a href="http://colemancollins.com">Coleman's website</a>), and for preformatted code blocks. To look at what I did there, just take a look at <a href="/css/main.css">my main css file here</a>. You have my blanket permission to copy whatever you like! </p>
			
			<p><b>Use of color</b></p>
			
			<p> For me, color should be used very sparingly, only to provide slight accenting when relevant. I don't see the point of having a ton of different borders and boundaries everywhere. So, the only places that have color is my background, which is configured in the CSS as <code> body{ background-color: #fffffb; }</code>, and the sidebars of my html, which are: </p>
			
<p><pre><code>html{
  border-left: 12px solid #5e7f79;
  border-right: 12px solid #5e7f79;
}
</code></pre></p>
			
			<p> (Incidentally, the color that I chose for my border is the same color as my bike; a moss green Kona Dew Plus that I love) </p>
			
			<p> <a href="#toc">Back to top</a> </p>

			<h2 id="sticky_footer"> Setting up a sticky footer </h2>

			<p> The next CSS thing I did was set up a sticky footer, which was way more difficult than I had initially expected. This seems to be a problem that has been repeatedly solved since the dawn of html, resulting in tons of different solutions floating around the web. Oddly, most of them didn't seem to work for me, resulting in lots of trial and error. The following (very simple) css is the only thing that did end up working:</p>
			
<p><pre><code>body{
  height: 100%;
}
.container{
  min-height: calc(100vh - 150px);
}

footer {
  border-top: 1px solid #d5d5d5;
  font-size: 0.8em;
  height: 50px;
}
</code></pre></p>

			<p> Some explanation. First, I make it such that everything within the body is at 100%. I do not understand what that 100% refers to, but it seems to work. I then define a <b>class</b> called <code>.container</code>, which can then be used within a <code>div</code> tag as <code>&lt;div class='container&gt;</code>. This forces that container to be 100% of the viewport height, less 150 pixels which is given to the sticky footer. The footer itself has some height defined as 50 pixels, and some border and font size as well. </p>
			
			<p> As you can tell from the poor explanation, I don't really understand why or how this works. Ah, <em> c'est la vie. </em> </p>
			<h2 id="video_embed"> Embedding videos</h2>
			<h2 id="toc_css"> Creating a Table of Contents CSS </h2>

			<p> <a href="#toc">Back to top</a> </p>
			
			<h2 id="pagecounter"> Setting up MySQL and a pagecounter </h2>
			
			<p> As a bonus, I was interested in creating a page counter script that automatically logs the number of hits that I got per page. I am used to the Wordpress way of tracking visits, but that seemed to just have too much overhead - and it honestly collected more information than I was comfortable with. I truly do not need to know the demographic or geographic information of my visitors! </p>
			
			<p> To do this, I set up a MySQL table to track the number of hits per page. I also write a php script to update the table and get the number of total hits. </p>
			
			<p> <b>Setting up the MySQL table</b></p>
			
			<p> First, I want to create a new user in MySQL that is not root. I don't want my php to be using the root account, as that seems to be dangerous (even though I have very little valuable information in this table, best practices yada yada). </p>
			
<p><pre><code>sudo mysql -p
  GRANT ALL PRIVILEGES ON *.* TO '[USERNAME]'@'localhost' IDENTIFIED BY '[PASSWORD]'
	\q
mysql -u [USERNAME] -p
</code></pre></p>

			<p> Note that you need to use the -p flag to be prompted for your password. After creating this new user, I then login as that user and begin setting up the table. </p>
			
<p><pre><code>CREATE DATABASE webstats;
CREATE TABLE pagecounter{
  id INT AUTO_INCREMENT PRIMARY KEY,
  access_page VARCHAR(255) NOT NULL UNIQUE,
  access_counter INT,
  access_date TIMESTAMP ON UPDATE CURRENT_TIMESTAMP DEFAULT '2020-04-01 00:00:00'
};
DESCRIBE pagecounter;
\q
</code></pre></p>
			
			<p> Now, I have a table called <code>pagecounter</code> within a database called <code>webstats</code>. It has four fields: An ID for each of my pages, the name of each page, an int that serves as the number of hits, and an access_date column that serves as the last time someone visited that page. </p>
			
			<p> From here, we are done setting up the database, and can go into setting up a php script to talk to the database. I create a new file, <code>/assets/webcounter.php</code>, and begin creating a php function. That function would then later be called on the page. </p>
			
<p><pre><code>&lt;?php
function visitor($record) {
  $db_host = "localhost";
  $db_username = "[USERNAME]"; 
  $db_password = "[PASSWORD]";
  $db_name = "webstats";
  $db_table = "pagecounter";
  $counter_page = "access_page";
  $counter_field = "access_counter";
	
  $db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die("Host not accessible");

  $sql_call = "INSERT INTO ".$db_table." (".$counter_page.", ".$counter_field.") VALUES ('".$record."', 1) ON DUPLICATE KEY UPDATE ".$counter_field." = ".$counter_field." + 1"; 
	
  mysqli_query($db, $sql_call) or die("Error while entering");
</code></pre></p>

			<p>First, we define some variables used for the following script. We then connect to the database using the <code>mysqli_connect</code> command, and then make a SQL call. During that call, we first check if the table already has a line with that page heading, indicated as <code>$record</code>. If there does not exist one, then create that row. If there does already exist such an entry, then increment the <code>$counter_field</code> by one. </p>

<p><pre><code>  $sql_call = "SELECT ".$counter_field. " FROM ".$db_table." WHERE ".$counter_page. " = '".$record. "'";
  $sql_result = mysqli_query($db, $sql_call) or die("SQL request failed");
	
  $row = mysqli_fetch_assoc($sql_result);
  $x = $row[$counter_field];
	
	mysqli_close($db);
	return $x;
	}
?&gt;
</code></pre></p>

			<p> This next section then retrieves the value of the number of page_counts back, so that you can report it on the website. Like above, it first creates a sql_call, and then queries that call. Finally, it closes the database and returns the value. </p>
			
			<p> Now that this function has been written, we can start implementing it. First, we can insert the <code>$access_number</code> into the footer, so that there is a consistent place where page counts would show up. This can be done as <code>Page Hits: ', $access_number, ' </code>. Of course, this does nothing if <code>$access_number</code> was not already defined. So, we need to insert the following php script into each page:</p>
			
<p><pre><code>&lt;?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
$access_number = visitor($page_name); 
?&gt;
</code></pre></p>

			<p>In addition, you need to define the <code>$page_name</code> for each page. I went ahead and used the same text for the page_name as well as the title, making the following change: </p>
			
<p><pre><code>&lt;?php $page_name = "Chunyang Ding - 404"; ?&gt;
&lt;title&gt;&lt;?php echo $page_name; ?&gt;&lt;/title&gt;
</code></pre></p>
			
			<p>This, sadly, requires a lot of manual editing of pages, but I felt like it was well worth it. One thing that I learned from doing this is that php variables seem to persist throughout the page. I don't really know how scoping works for these, but it seems convenient enough. </p>
			
			<p> <a href="#toc">Back to top</a> </p>

			<h2 id="photogallery"> Creating a photo gallery </h2>
			
			<p> <a href="#toc">Back to top</a> </p>

			<h1 id="git_backup"> Creating a git backup </h1>
			
			<p> Most of the above work was done editing live on the server. Before I had Github setup, I was directly SSHing onto my server, using PuTTY for server commands and WinSCP for copying and editing files live on prod. For obvious reasons, live editing on prod is generally discouraged, even if it is a product that isn't really used! Just to get into the right mindset for things, I decided to transition to the Github model, although I imagine that quick changes would probably still go through the WinSCP route. </p> 
			
			<p> The main downside of doing things through Github is that it is fairly roundabout. To start, I don't have Apache installed on my local windows machine, so I am unable to preview pages. Then, to push something to the server, I first need to switch to Github desktop, add the changed files to my commit, push to origin, then switch over to PuTTY and git pull to update the documents. This seems like a lot of extra work, especially for something that used to be live. However, I think this still makes sense for the long term maintenance of the website - ie, when the website has reached some sort of steady-state where I am no longer making dramatic changes, and only updating blog posts. Then, Github would be able to easily track changes, and revert back to older versions if needed. </p> 
			
			<p> To get started, I needed to install <code>git</code> on the server. </p>
			
<p><pre><code>sudo apt update
sudo apt upgrade
sudo apt install git
git --version
  (output): git version 2.17.1
git config --global user.name "Chunyang Ding"
git config --global user.email "[MY EMAIL GOES HERE]"
</code></pre></p>
			
			<p>Since it's been a few days since I last made direct changes to my server, I make sure that any patches or updates are installed. Then, I install git and configure my name and email into the global variables. </p>
			
			<p> Next, I want to add all of the files that I have already created to this git repository. </p>
			
<p><pre><code>cd /var/www/chunyangding.com
git init
git add --all (to recursively add all files in the folder to git)
git status
(created repo chunyangding.com on github)
git remote add origin https://github.com/ChunyangDing/chunyangding.com.git
</code></pre></p>
			
			<p> While <code>git</code> was installing, I set up a project on my Github profile called chunyangding.com. This allows me to sync my project through github. I then initialize the repo, add all files recursively to it starting with the document root, check to make sure the status is correct, and remotely add it to the origin branch. </p>
			
			<p> Then I want to push this to the master branch as my first commit. This requires the command </p>
<p><pre><code>git push -u origin</code></pre></p>
			<p>which is simple enough. You are then prompted for a username and a password. <b>Warning: </b> If you have two-factor authorization enabled (ie, get a text with a code each time you want to log in), you <b>cannot</b> directly use your password. Instead, from your Github account, go to Settings/Developer Settings/Personal Access Tokens, and generate a token. Before generating the token, I gave myself all the access that was shown, although I don't think that is actually strictly necessary. </p>
			
			<p> And that's it! After the push goes through, you can check on your Github page to make sure that everything is updated. From here on out, most of my work was done in my local drive. When I'm ready to commit something, I use Github's desktop app to write a commit message, push it to origin, and then switch to PuTTY to do a <code>git pull</code> in the <code>/var/www/chunyangding.com</code> folder. </p>
			
			<p> <a href="#toc">Back to top</a> </p>

			<h1 id="general_tips"> General Tips </h1>
		
			<p>	I think the key thing that I learned here was the importance of doing this web setup in small steps. My initial attempts to create a website was in using Wordpress's backend, and by copying other websites that I liked the aesthetics of. However, doing so meant that I didn't really understand what was going on, creating something that was very easily breakable. It takes a lot of trial and error to get something going properly, but thankfully trial and error is very cheap for web design - only time and a few pennies of electricity! </p>
			
			<p> The other part of this is that it's so easy to get overwhelmed with the number of options for customizability of the website. Obviously, this is a field that has been around for a while, so it's easy to get pulled into a forum where everyone has been breathing this type of design for decades. Learning in this manner can be particularly difficult because there are few signposts separating what is important from what is trivial. For a newcomer, everything here looks important. I was able to narrow my focus by creating a fairly detailed <code>todo </code> list every day before starting work on my website for the day, so that I could focus on accomplishing a single goal instead of just wandering around, making lots of different edits. </p>
			
			<p> I used notepad++ and Firefox to make all of my html, php, and css edits. It's by far the best, most lightweight option to do so, and it was still very easy to see updates by refreshing my browser from time to time. I highly recommend changing the tab setting of notepad++ to be 2 spaces instead of the default 4, for php and css files, so that the nested structure doesn't just run off the page. </p>

			<p> <a href="#toc">Back to top</a> </p>
		
			<img src="/assets/pics/quine.jpg" alt="quinequinequine" style="width:400px;height:auto;" class="center">
			
		</div>
	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>	
	</body>
</html>