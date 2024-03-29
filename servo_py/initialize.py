# Import libraries
import RPi.GPIO as GPIO
import time

# Set GPIO numbering mode
GPIO.setmode(GPIO.BOARD)

# Set pins 11 & 12 as outputs, and define as PWM servo1 & servo2
GPIO.setup(11,GPIO.OUT)
servo1 = GPIO.PWM(11,50) # pin 11 for servo1 (horizontal)
GPIO.setup(12,GPIO.OUT)
servo2 = GPIO.PWM(12,50) # pin 12 for servo2 (vertical)
GPIO.setup(13,GPIO.OUT)
servo3 = GPIO.PWM(13,50) # pin 12 for servo3 (door)

# Start PWM running on both servos, value of 0 (pulse off)
# initialize servo1 and servo2 to 90 and servo 3 to 0
servo1.start(0)
servo1.ChangeDutyCycle(7.5)
servo2.start(0)
servo2.ChangeDutyCycle(7.5)
servo3.start(0)
servo3.ChangeDutyCycle(2)

#Clean things up at the end
servo1.stop()
servo2.stop()
servo3.stop()
GPIO.cleanup()
