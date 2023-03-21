import RPi.GPIO as GPIO
import time

# Set GPIO numbering mode
GPIO.setmode(GPIO.BOARD)

# Set pins 13 as outputs, and define as PWM servo3
GPIO.setup(13,GPIO.OUT)
servo3 = GPIO.PWM(13,50) # pin 12 for servo3 (door)

# Turn servo2 to 90
servo3.ChangeDutyCycle(2)

# Wait for 2 seconds
time.sleep(2)

#Clean things up at the end
servo3.stop()
GPIO.cleanup()