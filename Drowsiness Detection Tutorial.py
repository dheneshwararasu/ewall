#!/usr/bin/env python
# coding: utf-8

# # 1. Install and Import Dependencies

# In[1]:


get_ipython().system('pip install torch torchvision torchaudio --extra-index-url https://download.pytorch.org/whl/cu116')


# In[ ]:


get_ipython().system('git clone https://github.com/ultralytics/yolov5')


# In[ ]:


get_ipython().system('cd yolov5 & pip install -r requirements.txt')


# In[2]:


import torch
from matplotlib import pyplot as plt
import numpy as np
import cv2


# # 2. Load Model

# In[3]:


model = torch.hub.load('ultralytics/yolov5', 'yolov5s')


# In[ ]:


model


# # # 3. Make Detections with Images
#
# # In[ ]:
#
#
# img = 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Cars_in_traffic_in_Auckland%2C_New_Zealand_-_copyright-free_photo_released_to_public_domain.jpg/800px-Cars_in_traffic_in_Auckland%2C_New_Zealand_-_copyright-free_photo_released_to_public_domain.jpg'
#
#
# # In[ ]:
#
#
# results = model(img)
# results.print()
#
#
# # In[ ]:
#
#
# get_ipython().run_line_magic('matplotlib', 'inline')
# plt.imshow(np.squeeze(results.render()))
# plt.show()
#
#
# # In[ ]:
#
#
# results.render()
#
#
# # # 4. Real Time Detections
#
# # In[ ]:
#
#
# cap = cv2.VideoCapture(0)
# while cap.isOpened():
#     ret, frame = cap.read()
#
#     # Make detections
#     results = model(frame)
#
#     cv2.imshow('YOLO', np.squeeze(results.render()))
#
#     if cv2.waitKey(10) & 0xFF == ord('q'):
#         break
# cap.release()
# cv2.destroyAllWindows()
#

# # 5. Train from scratch

# In[4]:


import uuid   # Unique identifier
import os
import time


# In[5]:


IMAGES_PATH = os.path.join('data', 'images') #/data/images
labels = ['safe', 'suspicious']
number_imgs = 20


# In[9]:


cap = cv2.VideoCapture(0)
# Loop through labels
for label in labels:
    print('Collecting images for {}'.format(label))
    time.sleep(5)

    # Loop through image range
    for img_num in range(number_imgs):
        print('Collecting images for {}, image number {}'.format(label, img_num))

        # Webcam feed
        ret, frame = cap.read()

        # Naming out image path
        imgname = os.path.join(IMAGES_PATH, label+'.'+str(uuid.uuid1())+'.jpg')

        # Writes out image to file
        cv2.imwrite(imgname, frame)

        # Render to the screen
        cv2.imshow('Image Collection', frame)

        # 2 second delay between captures
        time.sleep(2)

        if cv2.waitKey(10) & 0xFF == ord('q'):
            break
cap.release()
cv2.destroyAllWindows()


# In[6]:


print(os.path.join(IMAGES_PATH, labels[0]+'.'+str(uuid.uuid1())+'.jpg'))


# In[7]:


for label in labels:
    print('Collecting images for {}'.format(label))
    for img_num in range(number_imgs):
        print('Collecting images for {}, image number {}'.format(label, img_num))
        imgname = os.path.join(IMAGES_PATH, label+'.'+str(uuid.uuid1())+'.jpg')
        print(imgname)


# In[10]:


get_ipython().system('git clone https://github.com/tzutalin/labelImg')


# In[11]:


get_ipython().system('pip install pyqt5 lxml --upgrade')
get_ipython().system('cd labelImg && pyrcc5 -o libs/resources.py resources.qrc')


# In[13]:


get_ipython().system('cd yolov5 && python train.py --img 320 --batch 16 --epochs 500 --data dataset.yaml --weights yolov5s.pt --workers 2')


# # 6. Load Custom Model

# In[15]:


model = torch.hub.load('ultralytics/yolov5', 'custom', path='yolov5/runs/train/exp/weights/last.pt', force_reload=True)


# In[25]:


img = os.path.join('data', 'images', 'suspicious.3180cdd9-bb55-11ed-9971-2cf05da1704f.jpg')


# In[26]:


results = model(img)


# In[27]:


results.print()


# In[28]:


get_ipython().run_line_magic('matplotlib', 'inline')
plt.imshow(np.squeeze(results.render()))
plt.show()


# In[20]:


cap = cv2.VideoCapture(0)
while cap.isOpened():
    ret, frame = cap.read()

    # Make detections
    results = model(frame)

    cv2.imshow('YOLO', np.squeeze(results.render()))

    if cv2.waitKey(10) & 0xFF == ord('q'):
        break
cap.release()
cv2.destroyAllWindows()


# In[ ]:




