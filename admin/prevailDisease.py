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

def prevalilingDiseases(city,age,gender):

    diseaseGroup = categoryWiseData(city,age,gender).groupby('Disease')
    # print(diseaseGroup)
    c = 0
    diseaseList = np.array([])
    diseaseCount = np.array([])
    for k,v in diseaseGroup:
        c += 1
        diseaseList = np.append(diseaseList,k)
        diseaseCount = np.append(diseaseCount,len(v))

    # plotDictionary = {'Disease':diseaseList, 'Count':diseaseCount}
    # plotData = pd.DataFrame(plotDictionary)
    # plotData = plotData.sort_values(by = 'Count', ascending=False)
    # print(plotData)
    # pl = plotData.plot(kind='barh', x='Disease',y='Count', rot=0, color='r')
    #
    # pl.invert_yaxis()
    # plt.title('Prevailing Diseases')
    # plt.show()
    for x in diseaseList:
        print(x,end=',')
    print('#',end='')
    for x in diseaseCount:
        print(x,end=',')


prevalilingDiseases(sys.argv[1],int(sys.argv[2]),sys.argv[3])