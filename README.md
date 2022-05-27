<h1 align="center"> RAILTECH -> E-ticket Booking PLatform using Face Recognition   
</h1>
<p align="center">
  
 ![train](https://user-images.githubusercontent.com/106253763/170776728-50b885cb-bcc7-4c7d-b72b-1ed53d1cdfc3.png)


  <p align="center">  
 <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/480px-Microsoft_logo.svg.png" alt="Logo" width="25" height="25">·
 <a target="_blank" href="#">Video Demo</a>
</p>
    ·
<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#salient-features">Salient Features</a></li>
        <li><a href="#compatible-platforms">Compatible Platforms</a></li>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#Getting Started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#Setup Requirements">Setup Requirements</a></li>
      </ul>
    </li>
    <li><a href="#Features and Interfaces">Features and Interfaces</a></li><ul>
        <li><a href="#Register using facial recognition">Register using facial recognition</a></li>
        <li><a href="#Login using facial recognition ">Login using facial recognition</a></li>
        <li><a href="#Book Tickets">Book Tickets</a></li>
        <li><a href="#Available trains"></a>Available trains</li>
        <li><a href="#PNR Enquiry"></a>PNR Enquiry</li>
      </ul>
    <li><a href="#resources-used">Resources Used</a></li>
  </ol>
</details>

  <!-- ABOUT THE PROJECT -->

## About The Project
* A web application for Indian Railways Ticket Booking System was made during Microsoft Engage 2022
* In this Project, the Web application will authenticate its users by asking them to register or login using facial recognition.  
* This would prevent the misuse of user's account from any suspicious activities and will also restrict the black marketers for the illegal 
  hoarding of tickets as they won't be able to create multiple accounts due to security feature of facial recognition. 
  

### Salient Features
* User facial authentication for registration and login using OpenCV in Python.
* Includes Functionalities like Checking the availability of tickets , Booking train Tickets , Checking the PNR status and  Getting the Train Schedule  
* Restrict the access of a particular user's account if someone else try to access it using his/her credentials.

### Compatible Platforms
Laptops, Desktops and PCs


<!-- INSTALLATIONS -->

## Getting Started
To install and run the project on your local system, following are the requirements:
### Prerequisites

1.Make sure to install XAMPP on the device

2.Make sure to install the required packages in python. 
```sh
  import cv2
  import numpy as np
  import face_recognition
  import sys
```
### SETUP REQUIREMENTS

* XAMPP CONTROL PANEL 

To separately run the application on your local host, perform the following steps:

1. Start the `Apache` and `MYSQL` Module in XAMPP CONTROL PANEL
2. Place all the files inside the `htdocs` folder which is present inside the XAMPP folder.



### Features And Interface


1. Landing Page 
   - Seamless landing page with `Register` and `Login` button for user using PHP.

    ![Front](https://user-images.githubusercontent.com/106253763/170714568-b5af49c0-8608-48d9-8fc9-ff4ef4d687c8.png)
   
  
 2.  New users should first Register themselves to proceed with further booking steps
  
      ![register](https://user-images.githubusercontent.com/106253763/170767207-07d3608e-aec7-4de1-879b-45d357aaad46.png)


 3.  In `Capture Photo` Please ensure that the lightning condition should be clear

   ![capture](https://user-images.githubusercontent.com/106253763/170767507-d51f9297-f6e7-4656-87dc-14944731e90c.png)


 4. REGISTERATION SUCCESSFUL - Now user can proceed with Ticket Booking

    ![2022-05-26 (7)](https://user-images.githubusercontent.com/106253763/170720177-e9426ec3-860a-4410-8b9f-93d1edbc6b94.png)
    
    
5.  If their is an existing user they can simply click on `Login` button.
     
     ![loginface](https://user-images.githubusercontent.com/106253763/170768973-995afc79-363b-4bdd-a5ee-ac87d46bb142.png)
     
6.  If any other person try to use the same credentials with his/her face then the face authentication fails and access is denied.

     ![otheruser](https://user-images.githubusercontent.com/106253763/170769602-9b54ef19-8325-474b-b712-6d75b4513d4c.png)
      
      ![fail](https://user-images.githubusercontent.com/106253763/170769834-c7d33861-1a3b-4ec8-8906-ec307ea9d475.png)

7.  After successfully registering or login on the portal now the user can start booking their tickets

    ![2022-05-26 (10)](https://user-images.githubusercontent.com/106253763/170771126-209326ca-62bc-4efc-acfb-f605d66174f1.png)
    
8. Enter the details of Passengers

     ![2022-05-26 (11)](https://user-images.githubusercontent.com/106253763/170771300-429c1425-d6db-4536-a5d6-8022cc672418.png)

9. Proceed with the Payment Option
   ![2022-05-26 (12)](https://user-images.githubusercontent.com/106253763/170771415-64e17e30-2201-4962-bef8-16871f6ad8d6.png)
   
10. Hurray! You have Successfully Booked Your Ticket

     ![2022-05-26 (13)](https://user-images.githubusercontent.com/106253763/170771615-f7646fdf-f843-4140-b79e-e2b6b83f1512.png)
     
     
 ## ADDITIONAL FEATURES 
 
  1. PNR STATUS 

   ![2022-05-26 (16)](https://user-images.githubusercontent.com/106253763/170772532-72411982-3022-48b1-a7cd-7f0215684014.png)
   
   
  2. TRAIN SCHEDULE

     
![2022-05-26 (17)](https://user-images.githubusercontent.com/106253763/170772755-0b76dbf3-9f71-48d6-8e0b-15b01bf148d0.png)

![2022-05-26 (18)](https://user-images.githubusercontent.com/106253763/170772798-91c4fbd9-e4a2-4812-8dd7-301e3f034220.png)


