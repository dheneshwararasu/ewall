import RPi.GPIO as GPIO
import time

# Set GPIO numbering mode to BCM
GPIO.setmode(GPIO.BCM)

# servo is connected to pin 11
# Set PWM frequency
frequency = 50

# Initialize PWM on servo pin with frequency
GPIO.setup(11, GPIO.OUT)
pwm = GPIO.PWM(11, frequency)

# Start PWM with duty cycle for initial position as 90
pwm.start(90 / 18 + 2)

# Move to 180 degrees and back to 90 degrees
pwm.ChangeDutyCycle(180 / 18 + 2)
time.sleep(1)
pwm.ChangeDutyCycle(90 / 18 + 2)
time.sleep(1)

# Stop PWM and cleanup GPIO
pwm.stop()
GPIO.cleanup()