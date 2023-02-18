# e-Wall Source Code
by INNOVUS
    
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