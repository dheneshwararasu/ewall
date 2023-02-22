#Instructions

1. Initial Setup
    a. Install Pi OS Lite (Buster)
    b. sudo apt update && sudo apt full-upgrade -y
    c. sudo apt clean
    d. sudo apt autoremove -y

2. Install Web Browser & Kiosk Dependencies
    a. sudo apt install chromium-browser -y && sudo apt-get install matchbox-window-manager xautomation unclutter -y && sudo apt-get install fonts-noto-color-emoji -y

3. Setup Web Server (Local)
    a. sudo apt install apache2 -y && sudo apt install php -y && sudo apt install mariadb-server php-mysql -y
    b. sudo mysql_secure_installation
        i. Y to all questions (1234 as root password)
    c. sudo apt install phpmyadmin -y && sudo phpenmod mysqli

4.  Setup Git
    a. sudo apt install git
    b. sudo git clone https://github.com/dheneshwararasu/html.git
    c. sudo ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin

5. Manage Web Pages (Optional)

6. Setup Kiosk Mode
    a. sudo apt-get install --no-install-recommends xserver-xorg -y && sudo apt-get install --no-install-recommends xinit -y && sudo apt-get install --no-install-recommends x11-xserver-utils -y
    b.  nano ~/kiosk
    
    c. Kiosk Start up Script

        #!/bin/sh
        xset -dpms     # disable DPMS (Energy Star) features.
        xset s off     # disable screen saver
        xset s noblank # don't blank the video device
        matchbox-window-manager -use_titlebar no &
        unclutter &    # hide X mouse cursor unless mouse activated
        chromium-browser --display=:0 --kiosk --incognito --window-position=0,0 http://127.0.0.1
    
    d. nano ~/.bashrc
        xinit /home/ewall/kiosk -- vt$(fgconsole)
    e. sudo raspi-config
        D2 Underscan - Enable compensation? [No]
        S5 Boot / Auto Login - [B2 Console Autologin]
