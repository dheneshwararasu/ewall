#!/usr/bin/python3

from gpiozero import LED
from time import sleep

led = LED("GPIO17")

while True:
    led.on()
    sleep(2)
    led.off()

GPIO.cleanup()
sys.exit(0)