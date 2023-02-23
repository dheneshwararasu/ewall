#!/usr/bin/python3

from gpiozero import LED
from time import sleep
import sys

led = LED("GPIO17")

while True:
    led.on()
    sleep(2)
    led.off()
    sleep(1)

    pause()

GPIO.cleanup()
sys.exit(0)