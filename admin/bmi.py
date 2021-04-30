import pandas as pd
import sys
import numpy as np


def categoryWiseData(city,age,gender):
    data = pd.read_csv('healthcity.csv')
    # city = 'Vadodara'
    # age = 30
    # gender = 'Female'
    cityGroup = data.groupby('City')
    for k,v in cityGroup:
        if(city == 'All'):
            cityData = data
            break
        if(k==city):
            cityData = v
            break
    ageGroup = cityData.groupby('Age')
    for k,v in ageGroup:
        if(age == 'All'):
            ageData = cityData
            break
        if(k==age):
            ageData = v
            break

    genderGroup = ageData.groupby('Gender')
    for k,v in genderGroup:
        if(gender == 'All'):
            genderData = ageData
            break
        if(k==gender):
            genderData = v
            break
    # print(genderData)
    return genderData

def calculateBMI(height, weight):
    height = str(height)
    height = height.split('.')
    foot = int(height[0])
    inches = int(height[1])
    height = (foot*12) + inches
    height = height * 0.0254
    BMI = weight / (height**2)
    return BMI

def BMIAnalysis(city,age,gender):
    
    dataToAnalyse = categoryWiseData(city, age, gender)
    # print(dataToAnalyse)
    bmiCategory = np.array([])
    for r in dataToAnalyse.itertuples():
        h = r[3]
        w = r[4]
        bmi = calculateBMI(h,w)
        if(bmi<16):
            bmiCategory = np.append(bmiCategory,'Severe Thinness')
        elif(bmi>=16 and bmi<17):
            bmiCategory = np.append(bmiCategory, 'Thinness')
        elif (bmi >= 17 and bmi < 18.5):
            bmiCategory = np.append(bmiCategory, 'Mild Thinnes')
        elif (bmi >= 18.5 and bmi < 25):
            bmiCategory = np.append(bmiCategory, 'Normal')
        elif (bmi >= 25 and bmi < 30):
            bmiCategory = np.append(bmiCategory, 'Overweight')
        elif (bmi >= 30 and bmi < 35):
            bmiCategory = np.append(bmiCategory, 'Obese Class I')
        elif (bmi >= 35 and bmi < 40):
            bmiCategory = np.append(bmiCategory, 'Obese Class II')
        else:
            bmiCategory = np.append(bmiCategory, 'Obese Class III')

    bmiData = pd.DataFrame(bmiCategory, columns=['BMI Category'])
    # print(bmiData)
    bmiGroup = bmiData.groupby('BMI Category')
    bmiCategory = np.array([])
    bmiCategoryCount = np.array([])
    for k,v in bmiGroup:
        bmiCategory = np.append(bmiCategory,k)
        bmiCategoryCount = np.append(bmiCategoryCount,len(v))
    for x in bmiCategory:
        print(x,end=',')
    print('#',end='')
    for x in bmiCategoryCount:
        print(x,end=',')

BMIAnalysis(sys.argv[1],int(sys.argv[2]),sys.argv[3])
# BMIAnalysis('Ahmedabad',20,'Male')
