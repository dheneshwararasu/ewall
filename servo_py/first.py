#!/usr/bin/python3

from gpiozero import LED
from time import sleep

led = LED("GPIO17")

while True:
    led.on()
    sleep(1)
    led.off()
    sleep(1)
    else:
        print("ok!")

GPIO.cleanup()
sys.exit(0)