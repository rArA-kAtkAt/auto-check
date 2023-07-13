"""
	Optical Mark Recognition
"""
# Libraries need
import cv2
import numpy as np
import argparse
import math
import imutils

import utils
from utils import stackImages
import random as r

parser = argparse.ArgumentParser(description='OMR Bubble Sheet Checker')
parser.add_argument("-i", "--image", help="path to the input image")
parser.add_argument("-e", "--examtype", type=int, help="enter Exam type")
parser.add_argument("-a", "--answer", help="enter Exam answers")
args = vars(parser.parse_args())

############################
path = args['image']	# Need parameter from FE
widthImg = 700
heightImg = 700
questions = 10
choices = 4

exam_type = args['examtype'] // 10 # Need parameter from FE
print("exam type:")
print(exam_type)
total_questions = 10 * exam_type

exam_width = exam_type * 100

string_ans = args['answer']
print("string_ans")
print(string_ans)

ans_converted = utils.string_list_to_ans(string_ans)

ans = ans_converted
# ans = {1: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],	# Need parameter from FE
# 	   2: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
# 	   3: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
# 	   4: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
# 	   5: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]}

tries = 5
add_width = 0
############################

try:
	img = cv2.imread(path)
	imgwidth = img.shape[1]
	imgheight = img.shape[0]


	# Pre-Processing (Original Image)
	img = cv2.resize(img, (widthImg, heightImg))
	# Auto landscaping
	if imgwidth < imgheight:
		img = imutils.rotate_bound(img, -90)

	imgContours = img.copy()
	imgAllContours = img.copy()
	imgBlank = np.zeros_like(img)

	imgGray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
	imgBlur = cv2.GaussianBlur(imgGray, (7, 7), 1)
	imgCanny = cv2.Canny(imgBlur, 10, 50)
	imgBlank = np.zeros_like(img)
	# kernel = np.ones((5, 5))
	# imgDialation = cv2.dilate(imgCanny, kernel, iterations=2)
	# imgThres = cv2.erode(imgDialation, kernel, iterations=1)

	# Finding All Contours in original image
	contours, hierarchy = cv2.findContours(imgCanny, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_NONE)

	'''
	Removed Because of change in template
	# cv2.drawContours(imgContours, contours, -1, (0, 255, 0), 10)

	# # Find Rectangle using Contours and get biggest contour
	# ExamrectCon = utils.rectCountour(contours, imgCanny)
	# ExamContour = utils.getCornerPoints(ExamrectCon[0])

	# if ExamContour.size != 0:
	# 	# Inside Exam Paper Area
	# 	#cv2.drawContours(imgAllContours, ExamContour, -1, (0, 255, 0), 10)

	# 	ExamContour = utils.reorder(ExamContour)

	# 	# Getting the cropped image of exam rectangle using Warping
	# 	imgExamContourWarp, Exampt1, Exampt2 = utils.getWarp(img, ExamContour, widthImg+300, heightImg)
	# 	imgExamContourCropped = utils.getWarpCropped(imgExamContourWarp)
	# 	imgExamContourGray = cv2.cvtColor(imgExamContourCropped, cv2.COLOR_BGR2GRAY)
	# 	imgExamContourBlur = cv2.GaussianBlur(imgExamContourGray, (5, 5), 1)
	# 	imgExamContourCanny = cv2.Canny(imgExamContourBlur, 10, 50)
	# 	imgExamContourCroppedCopy = imgExamContourCropped.copy()
	# 	#print(imgExamContourCroppedCopy)

	# 	# Finding All Contours in cropped ExamPaper
	# 	bubblesheet_contours, bubblesheet_hierarchy = cv2.findContours(imgExamContourCanny, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_NONE)
	# 	#cv2.drawContours(imgExamContourCropped, bubblesheet_contours, -1, (0, 255, 0), 10)

	'''

	# 	# Find Biggest Rectangle(Bubble sheet area) in cropped ExamPaper using Contours and get biggest contour
	bubblesheet_rectCon = utils.rectCountour(contours, imgCanny)
	bubblesheet_Contour = utils.getCornerPoints(bubblesheet_rectCon[0])
except:
	print("Err")
	exit()
if bubblesheet_Contour.size != 0:
	# Inside bubble sheet Area
	cv2.drawContours(imgContours, bubblesheet_Contour, -1, (0, 255, 0), 10)
	bubblesheet_Contour = utils.reorder(bubblesheet_Contour)

	# Implemented retries for OMR to adjust for tight width of answersheet
	for attempt in range(tries):
		try:
			#print(add_width)
			imgbiggestContourWarp, biggestpt1, biggestpt2 = utils.getWarp(img, bubblesheet_Contour, widthImg+exam_width+add_width, heightImg)
			imgbiggestContourWarpCropped = utils.getWarpCropped(imgbiggestContourWarp)
			imgbiggestContourWarpCopy = imgbiggestContourWarpCropped.copy()
			

			imgbiggestContourGray = cv2.cvtColor(imgbiggestContourWarpCropped, cv2.COLOR_BGR2GRAY)
			imgbiggestContourBlur = cv2.GaussianBlur(imgbiggestContourGray, (9, 9), 0)
			imgbiggestContourCanny = cv2.Canny(imgbiggestContourBlur, 5, 50)
			biggestkernel = np.ones((5, 5))
			imgbiggestDialation = cv2.dilate(imgbiggestContourCanny, biggestkernel, iterations=-1)
			imgBiggestThres = cv2.erode(imgbiggestDialation, biggestkernel, iterations=1)
			
			
			# Finding All Contours
			biggest_contours, biggest_hierarchy = cv2.findContours(imgBiggestThres, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_NONE)
			cv2.drawContours(imgbiggestContourWarpCropped, biggest_contours, -1, (0, 255, 0), 2)

			# Find Rectangle using Contours and get biggest contour
			biggest_rectCon = utils.rectCountour(biggest_contours, imgbiggestContourCanny)
			#print(len(biggest_rectCon))
			#cv2.imshow("Image", imgbiggestContourWarpCropped)
			#cv2.waitKey(0)

			rectCon_dict = {}

			#Sorting rect from left to right
			for x in range(0, exam_type):
				# Getting the sum of y-axis and sort it to lowest to highest
				rectCon_dict[x] = (sum(biggest_rectCon[x][0]).tolist()[0])

			sorted_rectCon = dict(sorted(rectCon_dict.items(), key=lambda item: item[1]))
			count = 1

			myFinalIndex = {}
			myFinalGrading = []
			for rect in sorted_rectCon:

				#cv2.drawContours(imgbiggestContourWarpCropped, biggest_rectCon[rect], -1, (0, 255, 0), count)
				rectContourPoints = utils.getCornerPoints(biggest_rectCon[rect])
				rectContour = utils.reorder(rectContourPoints)

				rectContourWarp, rectpt1, rectpt2 = utils.getWarp(imgbiggestContourWarpCropped, rectContour, widthImg, heightImg)

				# Apply Threshold to first box
				rectContourWarpGray = cv2.cvtColor(rectContourWarp, cv2.COLOR_BGR2GRAY)
				rectContourWarpBlur = cv2.GaussianBlur(rectContourWarpGray, (5,5), 0)
				rectContourWarpThresh = cv2.threshold(rectContourWarpGray, 130, 255, cv2.THRESH_BINARY_INV)[1]
				# Will use Threshold OTSU (automatic computing lightings)
				rectContourWarpThresh1 = cv2.threshold(rectContourWarpBlur, 0, 255, cv2.THRESH_BINARY_INV | cv2.THRESH_OTSU)[1]
				masked = cv2.bitwise_and(rectContourWarp, rectContourWarp, mask=rectContourWarpThresh1)

				#rectContourWarpblur = cv2.medianBlur(rectContourWarp,5)
				#th3 = cv2.adaptiveThreshold(rectContourWarpblur,255,cv2.ADAPTIVE_THRESH_MEAN_C, cv2.THRESH_BINARY,11,2)

				#Testing Sheet Bubbles
				rect_bubbles = utils.splitBoxes(rectContourWarpThresh1, questions, choices)
				myPixelVal = np.zeros((questions, choices))
				countC = 0
				countR = 0

				for image in rect_bubbles:
					totalPixels = cv2.countNonZero(image)
					myPixelVal[countR][countC] = totalPixels
					countC += 1
					if (countC == choices): countR += 1; countC = 0
					#cv2.imshow("Image", image)
					#cv2.waitKey(0)
				if sum(myPixelVal)[0] < 100:
					raise LookupError
				#print(np.amax(myPixelVal))
				
				#print("------------------")

				# Finding Index Values Of The Markings by finding biggest pixel value (First Box)
				myIndex = []
				
				for x in range(0, questions):
					# print(x)
					arr = myPixelVal[x]
					myIndexVal = np.where(arr == np.amax(arr))  # Finding max value or highest value inside array
					if np.amax(arr) < 4000:
						myIndex.append(-1)
					else:
						myIndex.append(myIndexVal[0][0])  # Used [0][0] to get the actual value of the biggest pixel value
				#print(myIndex)
				myFinalIndex[count] = myIndex

				imgStacked = stackImages(0.5, ([img, imgContours, imgbiggestContourWarp, imgbiggestContourWarpCropped],
										[rectContourWarp, rectContourWarpGray, rectContourWarpThresh, rectContourWarpThresh1]))
										# [imgResult, imgRawDrawing, imgInvRawDrawing, imgFinal]))

				#cv2.imshow("Image", imgStacked)
				#cv2.waitKey(0)
				count += 1
		except:
			if attempt < tries - 1:
				add_width+=100
				continue
			else:
				print("Err")
		else:
			#Grading Comparing Markings to Correct Answer
			try:
				correct_answers = []
				number = 1
				grading = []
				#print(ans)
				for i in range(1, exam_type+1):
					for x in range(0, questions):
						#print(f"Number {number}")
						if ans[i][x] == myFinalIndex[i][x]:
							correct_answers.append(number)
							grading.append(1)
						else:
							grading.append(0)
						number+=1

				# Append to Final Grading 
				myFinalGrading.extend(grading)
				print(f"{sum(myFinalGrading)}-{grading}")
				break
			except:
				print("ValErr")
				break



# print(f"{math.trunc(sum(myFinalGrading)/total_questions*100)}%")

# for i in range(1, exam_type + 1):
# 	print("--------------------------")
# 	print(ans[str(i)])
# 	print(myFinalIndex[i])
# 	print("--------------------------")
