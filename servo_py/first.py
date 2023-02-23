#!/usr/bin/python3

from gpiozero import LED
from time import sleep
import sys
from signal import pause

led = LED("GPIO17")

while True:
    led.on()
    pause()
    else:
        exit()