#include "MQ135.h"
#include <SPI.h>
#include <Ethernet.h>
#include <Adafruit_Sensor.h>

#define MQ135PIN A0 // Define the analog pin for the MQ-135 sensor
#define SOIL_MOISTURE_PIN A1 // Define the pin for the Soil Moisture
MQ135 mq135_sensor(MQ135PIN);
int moisture;
float airvalue;
float airQuality;
char server[] = "10.67.16.220";

// Enter a MAC address for your controller below.
// Newer Ethernet shields have a MAC address printed on a sticker on the shield
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED }; 

// Set the static IP address to use if the DHCP fails to assign
IPAddress ip(172, 16, 28, 218); //static IP for the ethernet shield

EthernetClient client;
//int status = WL_IDLE_STATUS;

String postData;
String postVariable = "airvalue=";

String postData2;
String postVariable2 = "& moisture=";

String review;

void setup() {

  Serial.begin(9600);

  while (!Serial) {
    ; // wait for serial port to connect. Needed for native USB port only
  }

  // start the Ethernet connection:
  Serial.println("Initialize Ethernet with DHCP:");
  if (Ethernet.begin(mac) == 0) {
    Serial.println("Failed to configure Ethernet using DHCP");
    // Check for Ethernet hardware present
    if (Ethernet.hardwareStatus() == EthernetNoHardware) {
      Serial.println("Ethernet shield was not found.  Sorry, can't run without hardware. :(");
      while (true) {
        delay(1); // do nothing, no point running without Ethernet hardware
      }
    }
    if (Ethernet.linkStatus() == LinkOFF) {
      Serial.println("Ethernet cable is not connected.");
    }
    // try to congifure using IP address instead of DHCP:
    Ethernet.begin(mac, ip);
  }
  Serial.println("Connecting.....");

  delay(1000);

  IPAddress ip = Ethernet.localIP();
  Serial.print("IP Address: ");
  Serial.println(ip);
  }
 

void loop() {
  airQuality = mq135_sensor.getPPM(); // Get the air quality in PPM
  moisture = analogRead(SOIL_MOISTURE_PIN);
 
  postData = postVariable + airQuality;
  postData2 = postVariable2 + moisture;
  review = (postVariable+airQuality + postVariable2 + moisture);
if (airQuality >= 80){
  if (client.connect(server, 80)) {
    client.println("POST /Airguard/sendData.php HTTP/1.1");
    client.println("Host: 10.67.16.220");
    client.println("Content-Type: application/x-www-form-urlencoded");
    client.print("Content-Length: ");
    client.println(review.length());
    client.println();
    client.print(review);
    delay (500);
   
    delay (500);
    Serial.println("Air Quality Sent");
    Serial.println(postData);

    Serial.println("Soil Moisture Sent");
    Serial.println(postData2);

    while(client.connected()){
      if(client.available()){
        //Read incoming byte from the server and print to the serial monitor
        char c = client.read();
        Serial.print(c);
      }
    }

delay(1000);
  }

  if (client.connected()) {
    client.stop();
  }
  delay(6000);
}

  //Serial.println(postData);

  delay(3000);
}