#!/usr/bin/python
import RPi.GPIO as GPIO
import time
import sys

servo = 18

GPIO.setmode(GPIO.BCM)
GPIO.setup(servo, GPIO.OUT)

if True:
    GPIO.output(servo, GPIO.HIGH)
    time.sleep(1)

sys.exit(0)
