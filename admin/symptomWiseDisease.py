import pandas as pd
import sys
df = pd.read_csv('diseaseSymptomsUnique.csv')
symptoms = sys.argv
symptom= ''
c = 0
for i in symptoms:
    if(c==0):
        c+=1
        continue
    else:
        c += 1
        symptom = symptom + i + ' '

symptom = symptom.strip()
print('Possible Diseases:')

for r in df.itertuples():
    if(r[2] == symptom):
        print(r[1],',')
