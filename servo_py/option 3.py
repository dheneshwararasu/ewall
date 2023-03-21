# Import libraries
import RPi.GPIO as GPIO
# Import libraries
import RPi.GPIO as GPIO
import time

# Set GPIO numbering mode
GPIO.setmode(GPIO.BOARD)

# Set pins 12 as outputs, and define as PWM servo2
GPIO.setup(12,GPIO.OUT)
servo2 = GPIO.PWM(12,50) # pin 12 for servo2 (vertical)

# Turn servo2 to 60
pos2 = 7.5
dec = 0.1
while pos2 > 6:
    pos2 -= 0.1
    servo2.ChangeDutyCycle(pos2)
    time.sleep(dec)

# Wait for 2 seconds
time.sleep(2)

# return
while pos2 < 7.5:
    pos2 += 0.1
    servo2.ChangeDutyCycle(pos2)
    time.sleep(dec)

# Wait for 2 seconds
time.sleep(0.5)

#Clean things up at the end
servo2.stop()
GPIO.cleanup()