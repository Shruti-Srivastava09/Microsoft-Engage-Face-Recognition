<h1 align="center"> RAILTECH -> E-ticket Booking Platform using Face Recognition   
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
       <li><a href="#Login using facial recognition">Login using facial recognition</a></li>
       <li><a href="#Book Tickets">Book Tickets</a></li>
       <li><a href="#Available trains">Available trains</a></li>
       <li><a href="#PNR Enquiry">PNR Enquiry</a></li>
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

### built-with

  ## 🔗 TECH STACKS USED
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)



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
### Setup Requirements

* XAMPP CONTROL PANEL 

To separately run the application on your local host, perform the following steps:

1. Start the `Apache` and `MYSQL` Module in XAMPP CONTROL PANEL
2. Place all the files inside the `htdocs` folder which is present inside the XAMPP folder.



### Features And Interface


1. Landing Page 
   - Seamless landing page with `Register` and `Login` button for user using PHP.<br />
    <br />-
    ![Front](https://user-images.githubusercontent.com/106253763/170714568-b5af49c0-8608-48d9-8fc9-ff4ef4d687c8.png)
   <br>
     
 2.  New users should first Register themselves to proceed with further booking steps<br>
     <br>
      ![register](https://user-images.githubusercontent.com/106253763/170767207-07d3608e-aec7-4de1-879b-45d357aaad46.png)
     <br>

 3.  In `Capture Photo` Please ensure that the lightning condition should be clear<br>
     <br>
   ![capture](https://user-images.githubusercontent.com/106253763/170767507-d51f9297-f6e7-4656-87dc-14944731e90c.png)
    <br>

 4. REGISTERATION SUCCESSFUL - Now user can proceed with Ticket Booking<br>
     <br>
    ![2022-05-26 (7)](https://user-images.githubusercontent.com/106253763/170720177-e9426ec3-860a-4410-8b9f-93d1edbc6b94.png)
     <br>   
    
5.  If their is an existing user they can simply click on `Login` button.<br>
     <br>
     ![loginface](https://user-images.githubusercontent.com/106253763/170768973-995afc79-363b-4bdd-a5ee-ac87d46bb142.png)
     <br>
6.  If any other person try to use the same credentials with his/her face then the face authentication fails and access is denied.<br>
     <br>
     ![otheruser](https://user-images.githubusercontent.com/106253763/170769602-9b54ef19-8325-474b-b712-6d75b4513d4c.png)<br>
      <br>
      ![fail](https://user-images.githubusercontent.com/106253763/170769834-c7d33861-1a3b-4ec8-8906-ec307ea9d475.png)
      <br>
7.  After successfully registering or login on the portal now the user can start booking their tickets<br>
      <br>
    ![2022-05-26 (10)](https://user-images.githubusercontent.com/106253763/170771126-209326ca-62bc-4efc-acfb-f605d66174f1.png)
      <br>
8. Enter the details of Passengers<br>
      <br>
     ![2022-05-26 (11)](https://user-images.githubusercontent.com/106253763/170771300-429c1425-d6db-4536-a5d6-8022cc672418.png)
      <br>
9. Proceed with the Payment Option<br>
    <br>
   ![2022-05-26 (12)](https://user-images.githubusercontent.com/106253763/170771415-64e17e30-2201-4962-bef8-16871f6ad8d6.png)
    <br>
10. Hurray! You have Successfully Booked Your Ticket<br>

     ![2022-05-26 (13)](https://user-images.githubusercontent.com/106253763/170771615-f7646fdf-f843-4140-b79e-e2b6b83f1512.png)
     <br>
     
 ## ADDITIONAL FEATURES 
 
  1. PNR STATUS 

   ![2022-05-26 (16)](https://user-images.githubusercontent.com/106253763/170772532-72411982-3022-48b1-a7cd-7f0215684014.png)
   
   
  2. TRAIN SCHEDULE

     
![2022-05-26 (17)](https://user-images.githubusercontent.com/106253763/170772755-0b76dbf3-9f71-48d6-8e0b-15b01bf148d0.png)

![2022-05-26 (18)](https://user-images.githubusercontent.com/106253763/170772798-91c4fbd9-e4a2-4812-8dd7-301e3f034220.png)


## TOOLS, SERVERS , LANGUAGES AND PLATFORMS USED

![Apache](https://img.shields.io/badge/apache-%23D42029.svg?style=for-the-badge&logo=apache&logoColor=white)
![TensorFlow](https://img.shields.io/badge/TensorFlow-%23FF6F00.svg?style=for-the-badge&logo=TensorFlow&logoColor=white)
![OpenCV](https://img.shields.io/badge/opencv-%23white.svg?style=for-the-badge&logo=opencv&logoColor=white)
![Django](https://img.shields.io/badge/django-%23092E20.svg?style=for-the-badge&logo=django&logoColor=white)
![PyCharm](https://img.shields.io/badge/pycharm-143?style=for-the-badge&logo=pycharm&logoColor=black&color=black&labelColor=green)
![Visual Studio Code](https://img.shields.io/badge/Visual%20Studio%20Code-0078d7.svg?style=for-the-badge&logo=visual-studio-code&logoColor=white)


<!-- ACKNOWLEDGEMENTS -->

## Resources Used

* [PHP tutorials](https://www.w3schools.com/php/)
* [Face Recognition using OpenCV in python](https://www.youtube.com/watch?v=sz25xxF_AVE)
* [Connecting to MySQL Database from Php Script](https://www.youtube.com/watch?v=R1djM9B0ay0)

## 🔗 Need Help ?
[![portfolio](https://img.shields.io/badge/my_portfolio-000?style=for-the-badge&logo=ko-fi&logoColor=white)](file:///C:/Users/Lenovo/Desktop/MYPROJECT/MICROSOFT%20_%20ENGAGE%20_%20FILE/MYPROJECT/My%20Portfolio.html)
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/shruti-srivastava-53471320b/)
![Gmail](https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white)

---------

```javascript

if (youEnjoyed) {
    starThisRepository();
}

```

-----------
