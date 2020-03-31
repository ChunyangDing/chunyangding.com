<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Web Design"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
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
			
			<h1 id="#motivation"> Motivation </h1>
			<p> Part of what I had wanted to accomplish in designing this website was learning how to use my own server for hosting. I have serious reservations about using large, complex software-as-a-service subscriptions for hosting things that would hopefully live semi-permanently, and it didn't seem like too much of a challenge to learn the basics. I followed several web tutorials to set up a pure Linux box, which is what is currently serving you this page! While setting things up, I kept a careful record of all of the commands I sent the server, so that I could fix an mistakes as needed. So far, things look okay, so I'm going to post what I did here, to hopefully act as a simple guide for setting up your own server. </p> 
			
			<p> Overall, this website is made with just html/css/php, without much fancy addons (ie, javascript, html5, or any other content management system (CMS) ). Since the primary purpose of the website is to just deliver text, I figured that a maximally simple and lightweight design would probably be optimal. </p>
			
			<p> All of the website is hosted on a desktop running Ubuntu 18.04, which is also running Apache, MySQL, and PhP - the conventional LAMP server. That is directly connected to my home router, connected by a static internal IP with port 443 (http) open to the public, which is then mapped onto my domain name <a href="chunyangding.com">chunyangding.com</a>). When I move, I would have to remap the public IP address of the router to my website domain name once more. </p>
			
			<p> The code for this website is edited in Notepad++ on my main laptop. I then commit all of the changes to Git, which through <a href="github.com/chunyangding/chunyangding.com"> Github</a>, is then pushed to the live website. Therefore, my <code>dev</code> workspace is local on my laptop, while <code>prod</code> is on the desktop that is permanently on and permanently connected to the web. </p> 
			
			<p> Before I had Github setup, I was directly SSHing onto my server, using PuTTY for server commands and WinSCP for copying and editing files live on prod. For obvious reasons, live editing on prod is generally discouraged, even if it is a product that isn't really used! Just to get into the right mindset for things, I decided to transition to the Github model, although I imagine that quick changes would probably still go through the WinSCP route. </p> 
			
			<p> The main downside of doing things through Github is that it is fairly roundabout. To start, I don't have Apache installed on my local windows machine, so I am unable to preview pages. Then, to push something to the server, I first need to switch to Github desktop, add the changed files to my commit, push to origin, then switch over to PuTTY and git pull to update the documents. This seems like a lot of extra work, especially for something that used to be live. However, I think this still makes sense for the long term maintenance of the website - ie, when the website has reached some sort of steady-state where I am no longer making dramatic changes, and only updating blog posts. Then, Github would be able to easily track changes, and revert back to older versions if needed. </p> 
			
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
			
			<h2 id="virtual_hosts"> Virtual Hosts </h2>
			
			<p> Now, this is the part of the setup that tripped me up the most, and actually led me to completely wiping my previous configuration and redoing it. In theory, Apache2 is able to serve any number of web domains from a single box, according to the different virtual hosts that are setup. By default, Apache2 will try to serve pages from the folder <code>/var/www/default</code>, but you can configure new folders for different host names. </p>
			
<p><pre><code> sudo mkdir /var/www/chunyangding.com
sudo chown -R $USER:$USER /var/www/chunyangding.com
sudo chmod -R 755 /var/www/chunyangding.com
</code></pre></p>
			<p> Now, there exists a folder that collects all of my webpages. Important - I believe you do need to make sure that the title of the folder is the same as your domain address, although I'm not sure if this is the case. I had previously set it up where the folder was only chunyangding, and for some reason this did not seem to work. Next, I need to edit the configuration to point to the correct folder. </p>
			
<p><pre><code>
sudo nano /etc/apache2/sites-available/chunyangding.com.conf
	&gt;VirtualHost *:80&lt;
		ServerAdmin webmaster@localhost
		ServerName chunyangding.com
		ServerAlias www.chunyangding.com
		DocumentRoot /var/www/chunyangding.com
		ErrorLog ${APACHE_LOG_DIR}/error.log
		CustomLog ${APACHE_LOG_DIR}/access.log combined
	&gt;/VirtualHost&lt;
sudo systemctl reload apache2
</code></pre></p>
			<p>After creating that .conf file, I then need to enable that configuration in apache2, and disable the default configuration. Finally, before anything will actually be updated, I need to reload apache2. </p>
			
<p><pre><code> sudo a2ensite chunyangding.com.conf
sudo a2dissite 000-default.conf
sudo systemctl reload apache2
</code></pre></p>

			<p> Now, I want to test that this is working. Since the base domain page will look for a page called <code>index.html</code>, I then go ahead and create one with the most basic information, to see if it works or not. </p>
			
<p><pre><code>
&lt;!DOCTYPE html&gt;
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
	
			<h2 id="ssl_certification"> SSL Certification </h2>
			
			<p> After the website runs, I want to set up SSL certification. Honestly, I'm not entirely sure how this process runs, but it seems like there are free services that will grant you a SSL certificate, created and administrated by the Electronic Frontier Foundation. I just go ahead and do what is needed. </p>
			
<p><pre><code> sudo add-apt-repository ppa:certbot/certbot
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
		
			<h1 id="webdesign"> Website design </h1>
			<h2 id="navbar"> Creating a navigational bar at the top of my page </h2>
			<h2 id="header_footer"> Creating header and footer php files </h2>
			<h2 id="redirect_php"> Redirecting webpages without .php ending </h2>
			<h2 id="password_protection"> Creating password protected pages </h2>
			<h2 id="404_page"> Creating my 404 page </h2>
			<h2 id="general_css"> General CSS ideas </h2>
			<h2 id="sticky_footer"> Setting up a sticky footer </h2>
			<h2 id="video_embed"> Embedding videos</h2>
			<h2 id="toc_css"> Creating a Table of Contents CSS </h2>
			<h2 id="pagecounter"> Setting up MySQL and a pagecounter </h2>
			<h2 id="photogallery"> Creating a photo gallery </h2>
			
			<h1 id="git_backup"> Creating a git backup </h1>
			
			<h1 id="general_tips"> General Tips </h1>
		
			<p>	I think the key thing that I learned here was the importance of doing this web setup in small steps. My initial attempts to create a website was in using Wordpress's backend, and by copying other websites that I liked the aesthetics of. However, doing so meant that I didn't really understand what was going on, creating something that was very easily breakable. It takes a lot of trial and error to get something going properly, but thankfully trial and error is very cheap for web design - only time and a few pennies of electricity! </p>
			
			<p> The other part of this is that it's so easy to get overwhelmed with the number of options for customizability of the website. Obviously, this is a field that has been around for a while, so it's easy to get pulled into a forum where everyone has been breathing this type of design for decades. Learning in this manner can be particularly difficult because there are few signposts separating what is important from what is trivial. For a newcomer, everything here looks important. I was able to narrow my focus by creating a fairly detailed <code>todo </code> list every day before starting work on my website for the day, so that I could focus on accomplishing a single goal instead of just wandering around, making lots of different edits. </p>
			
			<p> I used notepad++ and Firefox to make all of my html, php, and css edits. It's by far the best, most lightweight option to do so, and it was still very easy to see updates by refreshing my browser from time to time. I highly recommend changing the tab setting of notepad++ to be 2 spaces instead of the default 4, for php and css files, so that the nested structure doesn't just run off the page. </p>
		
		</div>
	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>	
	</body>
</html>