#!/usr/bin/env python

import RPi.GPIO as GPIO
from mfrc522 import SimpleMFRC522

id, text= SimpleMFRC522.read()
print(id)
GPIO.cleanup()
