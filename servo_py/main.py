# Import the Servo library
# pins 7, 8, 9 , 10 are used as input por sorting

import time
import RPi.GPIO as GPIO
from gpiozero import DistanceSensor
from gpiozero.pins.pigpio import PiGPIOFactory
from gpiozero import LED
from gpiozero import Button
from gpiozero import Servo

factory = PiGPIOFactory()

ping_pin = 2  # Trigger Pin of Ultrasonic Sensor
echo_pin = 3  # Echo Pin of Ultrasonic Sensor
led2 = LED(12)  # Green LED
servo1 = Servo(4, pin_factory=factory)  # horizontal servo
servo2 = Servo(5, pin_factory=factory)  # vertical servo
servo3 = Servo(6, pin_factory=factory)  # door servo


pos1 = 0  # current position of servo 1 (horizontal)
pos2 = 0  # current position of servo 2 (vertical)
pos3 = 0  # current position of servo 3 (door)
cm = 0
detection = 1


def Protocol(sig, xrot, yrot, dec):
    global detection, pos1, pos2, pos3
    if cm < 10:
        detection = 1  # change detection to 2 for duplicate motion

    for _ in range(detection):
        if sig == 1:  # right bin
            for pos1 in range(90, 180):
                servo1.value = pos1 / 180
                time.sleep(dec)
            time.sleep(0.5)
            for pos2 in range(90, 30, -1):
                servo2.value = pos2 / 180
                time.sleep(dec)
            time.sleep(1)
            for pos2 in range(30, 90):
                servo2.value = pos2 / 180
                time.sleep(dec)
            for pos1 in range(180, 90, -1):
                servo1.value = pos1 / 180
                time.sleep(dec)

        elif sig == 2:  # center bin
            for pos1 in range(90, 0, -1):
                servo1.value = pos1 / 180
                time.sleep(dec)
            for pos2 in range(90, 30, -1):
                servo2.value = pos2 / 180
                time.sleep(dec)
            time.sleep(1)
            for pos2 in range(30, 90):
                servo2.value = pos2 / 180
                time.sleep(dec)
            for pos1 in range(0, 90):
                servo1.value = pos1 / 180
                time.sleep(dec)

        elif sig == 3:  # left bin
            for pos1 in range(90, 0, -1):
                servo1.value = pos1 / 180
                time.sleep(dec)
            time.sleep(0.5)
            for pos2 in range(90, 150):
                servo2.value = pos2 / 180
                time.sleep(dec)
            time.sleep(1)
            for pos2 in range(150, 90, -1):
                servo2.value = pos2 / 180


