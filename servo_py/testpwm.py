import RPi.GPIO as GPIO
import time
import sys

# Set up GPIO pins
GPIO.setmode(GPIO.BOARD)
GPIO.setup(18, GPIO.OUT)

# Create PWM instance
pwm = GPIO.PWM(18, 50)  # pin 11, frequency of 50 Hz

# Set initial duty cycle (position)
pwm.start(7.5)  # middle position

# Move the servo to a new position
def set_position(position):
    duty_cycle = 2.5 + (position / 10.0)  # calculate duty cycle from position
    pwm.ChangeDutyCycle(duty_cycle)
    time.sleep(0.3)  # wait for the servo to move

# Move the servo back and forth
try:
    while True:
        set_position(0)  # move to 0 degrees
        set_position(90)  # move to 180 degrees

except KeyboardInterrupt:
    pass

# Clean up GPIO pins
pwm.stop()
GPIO.cleanup()
sys.exit()
