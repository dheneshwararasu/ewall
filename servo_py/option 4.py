import time
import RPi.GPIO as GPIO
from gpiozero import DistanceSensor
from gpiozero.pins.pigpio import PiGPIOFactory
from gpiozero import LED
from gpiozero import Button
from gpiozero import Servo


factory = PiGPIOFactory()

servo1 = Servo(4, pin_factory=factory)  # horizontal servo
servo2 = Servo(5, pin_factory=factory)  # vertical servo
servo3 = Servo(6, pin_factory=factory)  # door servo
dec = 50

pos1 = 0  # current position of servo 1 (horizontal)
pos2 = 0  # current position of servo 2 (vertical)
detection = 1

for pos1 in range(90, 120):
    servo2.value = pos1 / 180
    time.sleep(dec)
    time.sleep(0.5)
for pos2 in range(120, 90, -1):
    servo2.value = pos2 / 180
