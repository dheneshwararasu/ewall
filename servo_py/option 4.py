# Import libraries
import RPi.GPIO as GPIO
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

# Turn servo2 to 60
servo2.ChangeDutyCycle(30)
# Wait for 2 seconds
time.sleep(2)

# Turn servo2 to 90
servo1.ChangeDutyCycle(7.5)

#Clean things up at the end
servo1.stop()
servo2.stop()
servo3.stop()
GPIO.cleanup()