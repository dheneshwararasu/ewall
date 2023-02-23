#!/usr/bin/python3

import RPi.GPIO as GPIO
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
    
    GPIO.cleanup()
    quit()


