import cv2
import numpy as np
import face_recognition
import sys

#n = len(sys.argv)
#print("total number of params = "+str(sys.argv[1]))

imageA = sys.argv[1]
imageB = sys.argv[2]
imgRegister = face_recognition.load_image_file(imageA)
imgRegister = cv2.cvtColor(imgRegister,cv2.COLOR_BGR2RGB)


imgLogin = face_recognition.load_image_file(imageB)
imgLogin = cv2.cvtColor(imgLogin,cv2.COLOR_BGR2RGB)

faceLocReg = face_recognition.face_locations(imgRegister)[0]
encodeRegister = face_recognition.face_encodings(imgRegister)[0]
cv2.rectangle(imgRegister,(faceLocReg[3],faceLocReg[0]),(faceLocReg[1],faceLocReg[2]),(255,0,255),2)


faceLocLogin = face_recognition.face_locations(imgLogin)[0]
encodeLogin = face_recognition.face_encodings(imgLogin)[0]
cv2.rectangle(imgLogin,(faceLocLogin[3],faceLocLogin[0]),(faceLocLogin[1],faceLocLogin[2]),(255,0,255),2)

results = face_recognition.compare_faces([encodeRegister],encodeLogin)
faceDis = face_recognition.face_distance([encodeRegister],encodeLogin)
if faceDis <= .5:
    print("1")
else:
    print("0")
#print(results,faceDis) 



    
















