import cv2
import numpy as np

def stackImages(scale, imgArray):
    rows = len(imgArray)
    cols = len(imgArray[0])
    rowsAvailable = isinstance(imgArray[0], list)
    width = imgArray[0][0].shape[1]
    height = imgArray[0][0].shape[0]
    if rowsAvailable:
        for x in range(0, rows):
            for y in range(0, cols):
                if imgArray[x][y].shape[:2] == imgArray[0][0].shape[:2]:
                    imgArray[x][y] = cv2.resize(imgArray[x][y], (0, 0), None, scale, scale)
                else:
                    imgArray[x][y] = cv2.resize(imgArray[x][y], (imgArray[0][0].shape[1], imgArray[0][0].shape[0]), None, scale, scale)

                if len(imgArray[x][y].shape) == 2: imgArray[x][y] = cv2.cvtColor(imgArray[x][y], cv2.COLOR_GRAY2BGR)
        imgBlank = np.zeros((height, width, 3), np.uint8)
        hor = [imgBlank]*rows
        hor_con = [imgBlank]*rows
        for x in range(0, rows):
            hor[x] = np.hstack(imgArray[x])
        ver = np.vstack(hor)
    else:
        for x in range(0, rows):
            if imgArray[x].shape[:2] == imgArray[0].shape[:2]:
                imgArray[x] = cv2.resize(imgArray[x], (0, 0), None, scale, scale)
            else:
                imgArray[x] = cv2.resize(imgArray[x], (imgArray[0].shape[1], imgArray[0].shape[0]), None, scale, scale)

            if len(imgArray[x].shape) == 2: imgArray[x] = cv2.cvtColor(imgArray[x], cv2.COLOR_GRAY2BGR)
        hor = np.hstack(imgArray)
        ver = hor

    return ver


def rectCountour(contours, imgCanny):
    rectCon = []
    for i in contours:
        area = cv2.contourArea(i)
        if area > 500:
            peri = cv2.arcLength(i, True)
            approx = cv2.approxPolyDP(i, 0.01*peri, True)
            #print("Corner Points", approx)
            if len(approx) == 4:
                rectCon.append(i)

    #rectCon = sorted(rectCon, key=lambda ctr: cv2.boundingRect(ctr)[0] + cv2.boundingRect(ctr)[1] * imgCanny.shape[1])
    rectCon = sorted(rectCon, key=cv2.contourArea, reverse=True)
    return rectCon


def getCornerPoints(cont):
    peri = cv2.arcLength(cont, True)
    approx = cv2.approxPolyDP(cont, 0.02 * peri, True)

    return approx


def reorder(myPoints):
    myPoints = myPoints.reshape((4, 2))
    myPointsNew = np.zeros((4, 1, 2), np.int32)
    add = myPoints.sum(1)


    myPointsNew[0] = myPoints[np.argmin(add)] # [0, 0]
    myPointsNew[3] = myPoints[np.argmax(add)] # [w, h]

    diff = np.diff(myPoints, axis=1)
    myPointsNew[1] = myPoints[np.argmin(diff)] # [w, 0]
    myPointsNew[2] = myPoints[np.argmax(diff)] # [0, h]

    return myPointsNew


def getWarp(img, myPoints, widthImg, heightImg):
    pt1 = np.float32(myPoints)
    pt2 = np.float32([[0, 0], [widthImg, 0], [0, heightImg], [widthImg, heightImg]])

    # Getting the Bird View using warpPerspective
    matrix = cv2.getPerspectiveTransform(pt1, pt2)
    imgOutput = cv2.warpPerspective(img, matrix, (widthImg, heightImg), flags= cv2.WARP_FILL_OUTLIERS + cv2.INTER_LINEAR)

    imgCropped = imgOutput[20:imgOutput.shape[0]-20, 20:imgOutput.shape[1]-20]
    return imgOutput, pt1, pt2


def getWarpCropped(imgOutput):

    imgCropped = imgOutput[0:imgOutput.shape[0]-5, 0:imgOutput.shape[1]-5]
    return imgCropped


def splitBoxes(img, questions, choices):
    rows = np.vsplit(img, questions)
    boxes = []
    for r in rows:
        cols = np.hsplit(r, choices)
        for box in cols:
            boxes.append(box)

    return boxes


def string_list_to_ans(string_list):
    list_ans_letters = string_list.split(',')

    # convert letters to number
    converter = lambda a: 0 if a=='A' else (1 if a=='B' else (2 if a == 'C' else 3) )

    ans = []

    for i in list_ans_letters:
         ans.append(converter(i))

    formatted_ans = {}
    count = 1
    for i in getGroupedListby10(ans):
        formatted_ans[count] = i
        count+=1

    return formatted_ans

def getGroupedListby10(data, n=10):
    for i in range(0, len(data), n):
        yield data[i:i+n]
