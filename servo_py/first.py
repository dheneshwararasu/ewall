#!/usr/bin/python

import RPi.GPIO as GPIO
import time
import sys

led = 11

GPIO.setmode(GPIO.BOARD)
GPIO.setup(led, GPIO.OUT)

if True:
    GPIO.output(led, GPIO.HIGH)
    time.sleep(1)
    GPIO.output(led, GPIO.LOW)
    time.sleep(1)
    sys.exit(0)

GPIO.cleanup()
sys.exit(0)


