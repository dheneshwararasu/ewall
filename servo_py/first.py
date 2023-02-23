#!/usr/bin/python3

import sys
from gpiozero import LED
from time import sleep
from signal import pause

led = LED("GPIO17")

while True:
    led.on()
    sleep(2)
    led.off()
    sleep(1)
    
    pause()
    LED.cleanup()
    sys.exit(0)


