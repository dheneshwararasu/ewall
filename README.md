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
        Environment=XAUTHORITY=/home/pi/.Xauthority
        Type=simple
        ExecStart=/bin/bash /home/pi/kiosk.sh
        Restart=on-abort
        User=pi
        Group=pi

        [Install]
        WantedBy=graphical.target
    
    g. sudo systemctl enable kiosk.service
    h. sudo systemctl start kiosk.service
    i. sudo systemctl status kiosk.service