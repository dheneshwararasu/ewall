#!/usr/bin/python
import RPi.GPIO as GPIO
import time
import sys

servo = 8

GPIO.setmode(GPIO.BOARD)
GPIO.setup(servo, GPIO.OUT)

if True:
	GPIO.output(servo, GPIO.HIGH)
	time.sleep(1)
	GPIO.output(servo, GPIO.LOW)
	time.sleep(1)

GPIO.cleanup()
sys.exit(0)
