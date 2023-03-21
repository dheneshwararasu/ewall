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
#servo1.start(0)
#servo1.ChangeDutyCycle(7.5)
#servo2.start(0)
#servo1.ChangeDutyCycle(7.5)

# Turn servo1 to 0 and servo2  to 30
servo1.ChangeDutyCycle(5.5)
time.sleep(1)
servo2.ChangeDutyCycle(6)
# Wait for 2 seconds
time.sleep(2)

#return
# Turn servo2 to 90 & servo1 back to 90
servo2.ChangeDutyCycle(7.5)
time.sleep(1)
servo1.ChangeDutyCycle(7.5)

#Clean things up at the end
servo1.stop()
servo2.stop()
GPIO.cleanup()