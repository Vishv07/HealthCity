import pandas as pd
import numpy as np
import sys
data =pd.read_csv("C:/xampp/htdocs/Healthcity/admin/healthcity (2lac).csv")
df=pd.DataFrame(data)
# print(df)
df['CheckupDate']=df['CheckupDate'].str.replace('/', '-')
df['CheckupDate']=pd.to_datetime(df['CheckupDate'])

# for col in data.columns:
#     print(col, " ,")
diseases_city_year = df[['Disease', 'City', 'CheckupDate']].copy()
# print(diseases_city_year)
def yearwise(year,mon,city):
    count=0
    monthDict = {'January':1, 'February':2, 'March':3, 'April':4,
                 'May':5,'June':6,'July':7,'August':8,'September':9,
                 'October':10,'November':11,'December':12}
    start_date='01-01-'+year
    end_date='31-12-'+year
    diseases_city_year_specific = diseases_city_year[(diseases_city_year['CheckupDate'] > start_date) & (diseases_city_year['CheckupDate'] < end_date)]
    diseases_city_year_specific = diseases_city_year_specific[(diseases_city_year_specific['City'] == city)]
    diseases_city_year_specific = diseases_city_year_specific.copy()
    diseases_city_year_specific['month'] = pd.DatetimeIndex(diseases_city_year_specific['CheckupDate']).month
    diseases_city_year_specific = diseases_city_year_specific[(diseases_city_year_specific['month'] == monthDict[mon])]
    diseases= np.array([])
    diseasescount=np.array([])
    for key, value in diseases_city_year_specific.groupby(['Disease']):
        # print(key,'=',len(value))

        diseases = np.append(diseases, key)
        diseasescount=np.append(diseasescount,len(value))

        count+=1
    for i in diseases:
        print(i,end=',')
    print('#',end='')
    for i in diseasescount:
        print(i,end=',')





yearwise(sys.argv[1],sys.argv[2],sys.argv[3])
