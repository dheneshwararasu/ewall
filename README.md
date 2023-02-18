#Instructions

1. Initial Setup
    a. Install Pi OS Lite
    b. sudo apt update && sudo apt full-upgrade -y
    c. sudo apt clean
    d. sudo apt autoremove -y

2. Setup Kiosk Mode
    a. sudo apt install xdotool unclutter sed
    b. sudo apt install chromium-browser
    c. nano ~/kiosk.sh
        Content

        #!/bin/bash
        xset s noblank
        xset s off
        xset -dpms

        unclutter -idle 0.5 -root &

        sed -i 's/"exited_cleanly":false/"exited_cleanly":true/' /home/$USER/.config/chromium/Default/Preferences
        sed -i 's/"exit_type":"Crashed"/"exit_type":"Normal"/' /home/$USER/.config/chromium/Default/Preferences

        /usr/bin/chromium-browser --noerrdialogs --disable-infobars --kiosk https://tuisyensuriaininfiniti.com &

        while true; do
            xdotool keydown ctrl+Next; xdotool keyup ctrl+Next;
            sleep 10
        done
    
    d. chmod u+x ~/kiosk.sh
    e. echo $DISPLAY
    f. sudo nano /lib/systemd/system/kiosk.service
        Content

        [Unit]
        Description=Chromium Kiosk
        Wants=graphical.target
        After=graphical.target

        [Service]
        Environment=DISPLAY=:0.0
        Environment=XAUTHORITY=/home/ewall/.Xauthority
        Type=simple
        ExecStart=/bin/bash /home/ewall/kiosk.sh
        Restart=on-abort
        User=ewall
        Group=innovus

        [Install]
        WantedBy=graphical.target
    
    g. sudo systemctl enable kiosk.service
    h. sudo systemctl start kiosk.service
    i. sudo systemctl status kiosk.service

3. Setup web server (Apache2, PHP, MySQL)
    a. sudo apt install apache2 -y
    b. hostname -I
    c. sudo usermod -a -G www-data ewall
    d. sudo chown -R -f www-data:www-data /var/www/html
    f. sudo apt install php7.4 libapache2-mod-php7.4 php7.4-mbstring php7.4-mysql php7.4-curl php7.4-gd php7.4-zip -y
    g. sudo nano /var/www/html/example.php

4. Setup git
    


    h. sudo nano /etc/apache2/sites-available/example.com.conf
        Content

        <VirtualHost *:80>
            ServerName example.com
            ServerAlias www.example.com
            DocumentRoot /var/www/example.com/public_html
            ErrorLog ${APACHE_LOG_DIR}/example.com_error.log
            CustomLog ${APACHE_LOG_DIR}/example.com_access.log combined
        </VirtualHost>

    i. sudo mkdir -p /var/www/example.com/public_html
    j. sudo chown -R www-data:www-data /var/www/example.com/public_html
    k. sudo a2ensite example.com.conf
    l. sudo systemctl reload apache2

