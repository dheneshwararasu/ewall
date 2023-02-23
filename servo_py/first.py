#!/usr/bin/python3

import RPi.GPIO as GPIO
import time

led = 18

GPIO.setmode(GPIO.BOARD)
GPIO.setup(led, GPIO.OUT)

GPIO.output(led, GPIO.HIGH)
time.sleep(2)
GPIO.output(led, GPIO.LOW)
time.sleep(0.5)

GPIO.cleanup()