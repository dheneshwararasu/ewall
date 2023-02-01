#!/usr/bin/env python

import time
import RPi.GPIO as GPIO
from mfrc522 import SimpleMFRC522

<<<<<<< HEAD
reader = SimpleMFRC522()

try:
    id, text= reader.read()
    print(id)
    time.sleep(2)
finally:
    GPIO.cleanup()
=======
id, text= SimpleMFRC522.read()
print(id)
GPIO.cleanup()
>>>>>>> 3b1edd37b61ed0e10ea63d654cc304790c1b92e3
