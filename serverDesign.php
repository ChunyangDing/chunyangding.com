<!DOCTYPE html>
<html>
	<head>
		<title> Chunyang Ding</title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/toc.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
	
		<div class='container'>
			<div class='blurb'>
				<h1>Server Design</h1>

				<div id="toc"> 
					<p class="toc_title"> Contents </p>
					<ul> 
						<li> 1 <a href="#motivation"> Motivation </a> </li>
						<li> 2 <a href="#initial_setup"> Initial Setup </a> </li>
						<li> 3 <a href="#lamp_setup"> LAMP Setup </a> </li>
						<li> 4 <a href="#webdesign"> Website Design </a> 
							<ul>
								<li>
									<li> 4.1 <a href="navbar">Creating a Navigational Bar</a></li>
									<li> 4.2 <a href="header_footer">Creating header and footer php files </a></li>
									<li> 4.3 <a href="redirect_php">Redirecting Webpages Without .php Endings</a></li>
									<li> 4.4 <a href="password_protection">Creating Password Protected Pages </h1>
									<li> 4.5 <a href="404_page">Creating my 404 page</a></li>
								</li>
							</ul>
						<li> 5 <a href="git_backup">Backup to Github</a></li>
						<li> 6 <a href="general_tips">General Tips</a></li>
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
			
			<h1 id="#lamp_setup">LAMP Setup</h1>
			<h1 id="#virtual_hosts">Virtual Hosts</h1>
			<h1 id="ssl_certification">SSL Certification</h1>
			<!--All of these should be subheaders of a general web heading -->
			<h1 id="webdesign">Website design</h1>
			<h1 id="navbar">Creating a navigational bar at the top of my page </h1>
			<h1 id="header_footer">Creating header and footer php files</h1>
			<h1 id="redirect_php">Redirecting webpages without .php ending</h1>
			<h1 id="password_protection">Creating password protected pages</h1>
			<h1 id="404_page">Creating my 404 page</h1>
			<h1 id="git_backup">Creating a git backup</h1>
			<h1 id="general_tips">General Tips</h1>
			<p>	I think the key thing that I learned here was the importance of doing this web setup in small steps. My initial attempts to create a website was in using Wordpress's backend, and by copying other websites that I liked the aesthetics of. However, doing so meant that I didn't really understand what was going on, creating something that was very easily breakable. It takes a lot of trial and error to get something going properly, but thankfully trial and error is very cheap for web design - only time and a few pennies of electricity! </p>
			<p> The other part of this is that it's so easy to get overwhelmed with the number of options for customizability of the website. Obviously, this is a field that has been around for a while, so it's easy to get pulled into a forum where everyone has been breathing this type of design for decades. Learning in this manner can be particularly difficult because there are few signposts separating what is important from what is trivial. For a newcomer, everything here looks important. I was able to narrow my focus by creating a fairly detailed <code>todo </code> list every day before starting work on my website for the day, so that I could focus on accomplishing a single goal instead of just wandering around, making lots of different edits. </p>
			
			<p> I used notepad++ and Firefox to make all of my html, php, and css edits. It's by far the best, most lightweight option to do so, and it was still very easy to see updates by refreshing my browser from time to time. I highly recommend changing the tab setting of notepad++ to be 2 spaces instead of the default 4, for php and css files, so that the nested structure doesn't just run off the page. </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	
	</body>
</html>
	
	
	