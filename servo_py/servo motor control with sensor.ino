  // Include the Servo library 
#include <Servo.h> 
const int pingPin = 3; // Trigger Pin of Ultrasonic Sensor
const int echoPin = 4; // Echo Pin of Ultrasonic Sensor
const int button = 7; // declare push button is on pin 7
const int button1 = 8; // declare push button is on pin 8
const int button2 = 9; // declare push button is on pin 9
const int button3 = 10; // declare push button is on pin 10
const int led1 = 11; // Red LED
const int led2 = 12; // Green LED
int pos1; //current position of servo 1 (horizontal)
int pos2; // current position of servo 2 (vertical)
Servo Servo1; // horizontal servo 
Servo Servo2; // vertical servo
int cm;
void Protocol(int sig, int xrot, int yrot, int dec);
int detect_item ();
int detection = 1;


void setup()
{
  pinMode(7,INPUT_PULLUP); // set pushbutton 1 as input
  pinMode(8,INPUT_PULLUP); // set pushbutton 2 as input
  pinMode(9,INPUT_PULLUP); // set pushbutton 3 as input
  pinMode(10,INPUT_PULLUP); // set pushbutton 4 as input
  pinMode(11,OUTPUT); // Set the LED Pin as an output
  pinMode(12,OUTPUT); // Set the LED Pin as an output  
  Servo1.attach(5); // horizontal servo 
  Servo2.attach(6); // vertical servo
  Serial.begin(9600); // Starting Serial Terminal
  Servo1.write(90); // set initial position of servo 1 as 90 degrees
  Servo2.write(90);  // set initial position of servo 2 as 0 degrees
}

void loop()
{
  int digitalVal1 = digitalRead(7); // Take a reading from pushbutton
  int digitalVal2 = digitalRead(8); // Take a reading from pushbutton
  int digitalVal3 = digitalRead(9); // Take a reading from pushbutton
  int digitalVal4 = digitalRead(10); // Take a reading from pushbutton  
  cm = detect_item();
  int sig = 0 ; //signal  
  //Serial.print(cm); Serial.print("cm \n");

  if (digitalVal1 == LOW) {sig = 1;}
  if (digitalVal2 == LOW) {sig = 2;}
  if (digitalVal3 == LOW) {sig = 3;}
  if (digitalVal4 == LOW) {sig = 4;}

  if (sig == 1 || sig == 2 || sig == 3 || sig == 4) {Protocol(sig, 0, 25, 10, 10);}
  if (cm < 10) {digitalWrite(12,HIGH);}//Turn the LED on    
  //if (cm < 10) {digitalWrite(12,HIGH);Serial.println("Item stucked  ");Serial.print(" ");}
  else
  {
    digitalWrite(11,LOW);//Turn the LED off
    digitalWrite(12,LOW);//Turn the LED off
  }  
  delay(500);
}

int detect_item ()
{
  long duration, inches, cm;
  pinMode(pingPin, OUTPUT);
  digitalWrite(pingPin, LOW);
  delayMicroseconds(100);
  digitalWrite(pingPin, HIGH);
  delayMicroseconds(100);
  digitalWrite(pingPin, LOW);
  pinMode(echoPin, INPUT);
  duration = pulseIn(echoPin, HIGH);
  cm = duration/ 29/ 2;
  delay(100);
  return cm;
}

void Protocol(int signal, int xrot, int yrot, int dec1, int dec2)
{
int cycle = 0;
digitalWrite(11,HIGH);//Turn the LED on 
if (cm<10){detection=2;} 

for (detection; detection > 0; detection -= 1)
{
 if (signal == 1)
 {
  for(pos1 = 90; pos1 > 0; pos1 -= 1) 
    {Servo1.write(pos1); delay(dec1);} 
  delay(500);   
  for(pos2 = 90; pos2 < 115; pos2 += 1) 
    {Servo2.write(pos2); delay(dec2);}
  delay(1000);
  for(pos2 = 115 ; pos2 > 90; pos2 -= 1) 
    {Servo2.write(pos2); delay(dec1);}     
  for(pos1; pos1 < 90; pos1 += 1) 
    {Servo1.write(pos1); delay(dec2);}            
 } 
 if (signal == 2)
 {
  for(pos1 = 90; pos1 < 180; pos1 += 1) 
    {Servo1.write(pos1); delay(dec1);}
  delay(500);    
  for(pos2 = 90; pos2 < 115; pos2 += 1) 
    {Servo2.write(pos2); delay(dec2);}
  delay(1000); 
  for(pos2 = 115 ; pos2 > 90; pos2 -= 1) 
    {Servo2.write(pos2); delay(dec1);}    
  for(pos1 = 180; pos1 > 90; pos1 -= 1) 
    {Servo1.write(pos1); delay(dec2);}             
 } 
 if (signal == 3)
 {
  for(pos2 = 90; pos2 > 65; pos2 -= 1) 
    {Servo2.write(pos2); delay(dec2);}
  delay(1000);
  for(pos2 = 65 ; pos2 < 90; pos2 += 1) 
    {Servo2.write(pos2); delay(dec1);}                
 } 
 if (signal == 4)
 {
  for(pos2 = 90; pos2 < 115; pos2 += 1) 
    {Servo2.write(pos2); delay(dec2);}
  delay(1000);    
  for(pos2 = 115 ; pos2 > 90; pos2 -= 1) 
    {Servo2.write(pos2); delay(dec2);}             
 }

digitalWrite(11,HIGH);//Turn the LED on  
cycle += 1; 
delay(500);
}
if (cm<10 && cycle > 1){Serial.println("Item stucked  ");Serial.print(" ");}
}
