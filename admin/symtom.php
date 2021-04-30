
<?php

session_start();

include "header.php";




?>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js">
        
    </script>
     <div class="page-container ">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row bg-white">
                       <div class="col-lg-12 bg-white">
                    
                            <div class="col-lg-12">
                                <br>
                                <h2> Enter Records</h2>
                             
                                <form action="symtom.php"  method="post"  enctype="multipart/form-data" >
                             <div class="form-row">
                                     <div class="form-group col-md-3">
                                        <label for="inputState">Sympomts</label>
                                        <select id="inputState" class="form-control"  name="sym">
                                          <option value="diabetes during pregnancy"> diabetes during pregnancy </option>
<option value="GERD"> GERD </option>
<option value="heartburn"> heartburn </option>
<option value="cystitis"> cystitis </option>
<option value="UTI"> UTI </option>
<option value="urinary tract infection"> urinary tract infection </option>
<option value="generalized epilepsy"> generalized epilepsy </option>
<option value="intestinal lymph node cancer"> intestinal lymph node cancer </option>
<option value="mouth blisters"> mouth blisters </option>
<option value="increased inner eye pressure"> increased inner eye pressure </option>
<option value="excessive sadness"> excessive sadness </option>
<option value="bacterial toxin causing muscle weakness"> bacterial toxin causing muscle weakness </option>
<option value="(heel tendon tear)"> (heel tendon tear) </option>
<option value="vitamin deficiency blood disorder"> vitamin deficiency blood disorder </option>
<option value="sac of pus near the vaginal opening"> sac of pus near the vaginal opening </option>
<option value="heart muscle inflammation"> heart muscle inflammation </option>
<option value="heart attack"> heart attack </option>
<option value="bone death and destruction"> bone death and destruction </option>
<option value="progressive nerve disorder"> progressive nerve disorder </option>
<option value="nerve compression in the elbow"> nerve compression in the elbow </option>
<option value="leaking heart valve"> leaking heart valve </option>
<option value="IBS"> IBS </option>
<option value="chronic intestinal pain and cramping"> chronic intestinal pain and cramping </option>
<option value="excessive water loss from the kidneys"> excessive water loss from the kidneys </option>
<option value="tinea capitis"> tinea capitis </option>
<option value="Histiocytosis X"> Histiocytosis X </option>
<option value="inflammation of pouches in the large intestine"> inflammation of pouches in the large intestine </option>
<option value="pulled muscle"> pulled muscle </option>
<option value="flu-like bacterial illness"> flu-like bacterial illness </option>
<option value="ethanol intoxication"> ethanol intoxication </option>
<option value="trichinosis"> trichinosis </option>
<option value="parasitic infection from undercooked pork"> parasitic infection from undercooked pork </option>
<option value="tobacco use disorder"> tobacco use disorder </option>
<option value="excess iron disorder"> excess iron disorder </option>
<option value="abnormal rhythmic shaking"> abnormal rhythmic shaking </option>
<option value="bleeding around brain or spine"> bleeding around brain or spine </option>
<option value="retinal detachment"> retinal detachment </option>
<option value="Mediterranean anemia"> Mediterranean anemia </option>
<option value="inherited blood disorder"> inherited blood disorder </option>
<option value="lung infection"> lung infection </option>
<option value="convulsion in child with a fever"> convulsion in child with a fever </option>
<option value="complication of strep infection"> complication of strep infection </option>
<option value="Bacterial Overgrowth Syndrome"> Bacterial Overgrowth Syndrome </option>
<option value="Hirsutism"> Hirsutism </option>
<option value="brain artery dilation"> brain artery dilation </option>
<option value="manic depressive disorder"> manic depressive disorder </option>
<option value="uterine muscle tumor"> uterine muscle tumor </option>
<option value="high blood sugar"> high blood sugar </option>
<option value="odorless"> odorless </option>
<option value="poisonous gas"> poisonous gas </option>
<option value="allergic reaction in the eye"> allergic reaction in the eye </option>
<option value="one-sided headache behind the eye"> one-sided headache behind the eye </option>
<option value="tonsil infection"> tonsil infection </option>
<option value="uncontrollable sleeping"> uncontrollable sleeping </option>
<option value="dementia"> dementia </option>
<option value="collection of pus around tonsils"> collection of pus around tonsils </option>
<option value="common bacterial intestinal infection"> common bacterial intestinal infection </option>
<option value="groin hernia"> groin hernia </option>
<option value="severe throat inflammation"> severe throat inflammation </option>
<option value="oropharyngeal cancer"> oropharyngeal cancer </option>
<option value="intestinal paralysis"> intestinal paralysis </option>
<option value="sperm-filled epididymal cyst"> sperm-filled epididymal cyst </option>
<option value="(adhesive capsulitis of shoulder)"> (adhesive capsulitis of shoulder) </option>
<option value="cancer"> cancer </option>
<option value="Takotsubo cardiomyopathy"> Takotsubo cardiomyopathy </option>
<option value="abnormal vaginal bleeding"> abnormal vaginal bleeding </option>
<option value="symptoms after a concussion"> symptoms after a concussion </option>
<option value="binge eating"> binge eating </option>
<option value="vomiting"> vomiting </option>
<option value="serious blood infection"> serious blood infection </option>
<option value="knee cap tendon rupture"> knee cap tendon rupture </option>
<option value="(tear)"> (tear) </option>
<option value="seasonal flu"> seasonal flu </option>
<option value="broken bone"> broken bone </option>
<option value="increased pressure inside muscles"> increased pressure inside muscles </option>
<option value="parasitic infection"> parasitic infection </option>
<option value="kala azar"> kala azar </option>
<option value="Valium overdose"> Valium overdose </option>
<option value="PMR"> PMR </option>
<option value="muscle and joint disorder"> muscle and joint disorder </option>
<option value="ADHD"> ADHD </option>
<option value="blood clot in the lungs"> blood clot in the lungs </option>
<option value="trypanosomiasis"> trypanosomiasis </option>
<option value="kidney infection"> kidney infection </option>
<option value="viral mouth infection"> viral mouth infection </option>
<option value="calcium deposit arthritis"> calcium deposit arthritis </option>
<option value="chronic sleep disruption"> chronic sleep disruption </option>
<option value="tumor"> tumor </option>
<option value="nasal inflammation"> nasal inflammation </option>
<option value="tumor"> tumor </option>
<option value="stomach ulcer"> stomach ulcer </option>
<option value="tumor"> tumor </option>
<option value="eczema"> eczema </option>
<option value="bleeding on brain"> bleeding on brain </option>
<option value="ED"> ED </option>
<option value="bone marrow failure"> bone marrow failure </option>
<option value="unintentional urination with cough or sneeze"> unintentional urination with cough or sneeze </option>
<option value="pit viper bite"> pit viper bite </option>
<option value="heart valve infection"> heart valve infection </option>
<option value="pinched nerve in neck"> pinched nerve in neck </option>
<option value="irregular heart rate"> irregular heart rate </option>
<option value="prostate inflammation"> prostate inflammation </option>
<option value="CAD"> CAD </option>
<option value="heart disease"> heart disease </option>
<option value="neck injury"> neck injury </option>
<option value="nerve"> nerve </option>
<option value="blood vessel compression"> blood vessel compression </option>
<option value="tumor"> tumor </option>
<option value="placenta covers cervix"> placenta covers cervix </option>
<option value="vaginal infection"> vaginal infection </option>
<option value="PTSD"> PTSD </option>
<option value="intestinal infection"> intestinal infection </option>
<option value="Variola virus infection"> Variola virus infection </option>
<option value="inflammation of the gallbladder"> inflammation of the gallbladder </option>
<option value="bulge in small intestine"> bulge in small intestine </option>
<option value="cauda equina syndrome"> cauda equina syndrome </option>
<option value="tinea corporis"> tinea corporis </option>
<option value="bleeding disorder"> bleeding disorder </option>
<option value="intermittent seasonal depression"> intermittent seasonal depression </option>
<option value="chest wall inflammation"> chest wall inflammation </option>
<option value="male anatomy cancer"> male anatomy cancer </option>
<option value="swelling of finger and nail"> swelling of finger and nail </option>
<option value="viral brain infection"> viral brain infection </option>
<option value="salmonella typhi infection from contaminated food or water"> salmonella typhi infection from contaminated food or water </option>
<option value="lymphadenopathy"> lymphadenopathy </option>
<option value="inflammation of tissue at the bottom of the foot"> inflammation of tissue at the bottom of the foot </option>
<option value="uric acid crystals in the joint causing inflammation"> uric acid crystals in the joint causing inflammation </option>
<option value="FMD"> FMD </option>
<option value="LSD abuse"> LSD abuse </option>
<option value="decreased blood flow"> decreased blood flow </option>
<option value="inflammation of joint cushion"> inflammation of joint cushion </option>
<option value="rapid dilation of the colon"> rapid dilation of the colon </option>
<option value="stone in bile duct"> stone in bile duct </option>
<option value="Legionnaires' disease"> Legionnaires' disease </option>
<option value="hybrid diabetes"> hybrid diabetes </option>
<option value="complex pain syndrome"> complex pain syndrome </option>
<option value="inflamed scalp artery"> inflamed scalp artery </option>
<option value="skin cut"> skin cut </option>
<option value="stroke"> stroke </option>
<option value="breast infection inflammation"> breast infection inflammation </option>
<option value="cercarial dermatitis"> cercarial dermatitis </option>
<option value="bacterial infection spread from animals"> bacterial infection spread from animals </option>
<option value="yeast infection"> yeast infection </option>
<option value="high blood pressure in the lungs"> high blood pressure in the lungs </option>
<option value="type of cancer"> type of cancer </option>
<option value="lymph node cancer"> lymph node cancer </option>
<option value="salivary gland stone"> salivary gland stone </option>
<option value="testicular vein enlargement"> testicular vein enlargement </option>
<option value="(eating disorder)"> (eating disorder) </option>
<option value="collection of pus"> collection of pus </option>
<option value="C. Diff"> C. Diff </option>
<option value="features of schizophrenia and mood disorder"> features of schizophrenia and mood disorder </option>
<option value="liver disorder in pregnancy"> liver disorder in pregnancy </option>
<option value="psychomotor epilepsy"> psychomotor epilepsy </option>
<option value="fluid collection near the testicle"> fluid collection near the testicle </option>
<option value="(severe spine arthritis)"> (severe spine arthritis) </option>
<option value="lung infection"> lung infection </option>
<option value="twisting of testicle"> twisting of testicle </option>
<option value="injury"> injury </option>
<option value="injury from repetitive activity"> injury from repetitive activity </option>
<option value="kidney damage from an area of blocked blood flow"> kidney damage from an area of blocked blood flow </option>
<option value="nail bed cut"> nail bed cut </option>
<option value="infected knee joint"> infected knee joint </option>
<option value="bile duct disease"> bile duct disease </option>
<option value="tendon cut"> tendon cut </option>
<option value="weakened leg veins"> weakened leg veins </option>
<option value="(heel tendon inflammation)"> (heel tendon inflammation) </option>
<option value="nerve damage"> nerve damage </option>
<option value="bacterial skin infection"> bacterial skin infection </option>
<option value="stomach inflammation"> stomach inflammation </option>
<option value="hole in skin between nostrils"> hole in skin between nostrils </option>
<option value="broken hip"> broken hip </option>
<option value="nerve injury"> nerve injury </option>
<option value="intestinal bacterial infection"> intestinal bacterial infection </option>
<option value="bone tumor"> bone tumor </option>
<option value="female organ cancer"> female organ cancer </option>
<option value="fungal skin infection"> fungal skin infection </option>
<option value="(allergic reaction in the nose)"> (allergic reaction in the nose) </option>
<option value="bleeding in brain"> bleeding in brain </option>
<option value="decreased intestinal blood flow"> decreased intestinal blood flow </option>
<option value="growth near the eye"> growth near the eye </option>
<option value="stomach muscle malfunction"> stomach muscle malfunction </option>
<option value="benign fatty tumor"> benign fatty tumor </option>
<option value="stroke syndrome"> stroke syndrome </option>
<option value="fluid in the abdomen"> fluid in the abdomen </option>
<option value="intestinal blockage"> intestinal blockage </option>
<option value="broken spinal bone"> broken spinal bone </option>
<option value="liver abnormality"> liver abnormality </option>
<option value="complication of sickle cell disease"> complication of sickle cell disease </option>
<option value="ALS"> ALS </option>
<option value="Lou Gehrig's disease"> Lou Gehrig's disease </option>
<option value="tumor"> tumor </option>
<option value="swallowing disease"> swallowing disease </option>
<option value="inflammation of cornea"> inflammation of cornea </option>
<option value="decline in mental ability"> decline in mental ability </option>
<option value="broken upper arm"> broken upper arm </option>
<option value="sexually transmitted disease"> sexually transmitted disease </option>
<option value="SVT"> SVT </option>
<option value="painful shinbone inflammation"> painful shinbone inflammation </option>
<option value="intestinal bacterial infection"> intestinal bacterial infection </option>
<option value="viral diarrhea"> viral diarrhea </option>
<option value="Norwalk virus"> Norwalk virus </option>
<option value="nerve damage"> nerve damage </option>
<option value="genetic disorder"> genetic disorder </option>
<option value="penis swelling"> penis swelling </option>
<option value="bruxism"> bruxism </option>
<option value="growths"> growths </option>
<option value="narrowing of the aorta"> narrowing of the aorta </option>
<option value="esophageal inflammation"> esophageal inflammation </option>
<option value="viral hemorrhagic fever"> viral hemorrhagic fever </option>
<option value="chronic eye disease"> chronic eye disease </option>
<option value="regional enteritis"> regional enteritis </option>
<option value="Crohn's colitis"> Crohn's colitis </option>
<option value="intestinal inflammation"> intestinal inflammation </option>
<option value="broken neck bone"> broken neck bone </option>
<option value="pulmonary eosinophilia"> pulmonary eosinophilia </option>
<option value="lung inflammation"> lung inflammation </option>
<option value="TB"> TB </option>
<option value="herpes zoster"> herpes zoster </option>
<option value="tissue damage from cold"> tissue damage from cold </option>
<option value="Coumadin use"> Coumadin use </option>
<option value="bladder inflammation"> bladder inflammation </option>
<option value="high blood sugar"> high blood sugar </option>
<option value="(low red blood cell count)"> (low red blood cell count) </option>
<option value="painful muscle contraction"> painful muscle contraction </option>
<option value="bladder paralysis"> bladder paralysis </option>
<option value="common genetic disorder"> common genetic disorder </option>
<option value="severe obesity"> severe obesity </option>
<option value="CMV viral infection"> CMV viral infection </option>
<option value="benign breast lumps"> benign breast lumps </option>
<option value="inflammatory disease"> inflammatory disease </option>
<option value="newborn skin discoloration"> newborn skin discoloration </option>
<option value="inflammation of the eye"> inflammation of the eye </option>
<option value="tumor"> tumor </option>
<option value="nightmares"> nightmares </option>
<option value="labyrinthitis"> labyrinthitis </option>
<option value="vertigo"> vertigo </option>
<option value="collection of pus in the brain"> collection of pus in the brain </option>
<option value="middle ear mass"> middle ear mass </option>
<option value="movement disorder"> movement disorder </option>
<option value="(eating disorder)"> (eating disorder) </option>
<option value="blood clot in the nose"> blood clot in the nose </option>
<option value="avian influenza"> avian influenza </option>
<option value="COPD"> COPD </option>
<option value="emphysema"> emphysema </option>
<option value="brain or spine pus collection"> brain or spine pus collection </option>
<option value="mosquito-transmitted illness"> mosquito-transmitted illness </option>
<option value="collection of spinal pus"> collection of spinal pus </option>
<option value="viral infection involving salivary glands"> viral infection involving salivary glands </option>
<option value="connection between two bones"> connection between two bones </option>
<option value="rare"> rare </option>
<option value="serious skin disorder"> serious skin disorder </option>
<option value="contact skin irritation"> contact skin irritation </option>
<option value="excessive pituitary gland hormones"> excessive pituitary gland hormones </option>
<option value="ascending muscle weakness"> ascending muscle weakness </option>
<option value="CVA"> CVA </option>
<option value="cerebrovascular accident"> cerebrovascular accident </option>
<option value="joint disorder"> joint disorder </option>
<option value="liver inflammation"> liver inflammation </option>
<option value="bruise of brain"> bruise of brain </option>
<option value="disorder of eye movement"> disorder of eye movement </option>
<option value="neck arthritis"> neck arthritis </option>
<option value="(ear nerve tumor)"> (ear nerve tumor) </option>
<option value="tendon sheath inflammation"> tendon sheath inflammation </option>
<option value="collection of blood"> collection of blood </option>
<option value="granulomatosis with polyangiitis"> granulomatosis with polyangiitis </option>
<option value="blood vessel disease"> blood vessel disease </option>
<option value="human papilloma virus infection"> human papilloma virus infection </option>
<option value="foot warts"> foot warts </option>
<option value="pituitary gland malfunction"> pituitary gland malfunction </option>
<option value="dacryostenosis"> dacryostenosis </option>
<option value="skin cancer"> skin cancer </option>
<option value="scleroderma"> scleroderma </option>
<option value="progressive soft tissue hardening"> progressive soft tissue hardening </option>
<option value="lung disease"> lung disease </option>
<option value="traumatic removal of nail"> traumatic removal of nail </option>
<option value="tumor"> tumor </option>
<option value="superficial"> superficial </option>
<option value="thrombocytopenia"> thrombocytopenia </option>
<option value="poison oak"> poison oak </option>
<option value="poison sumac"> poison sumac </option>
<option value="lymph node tumor"> lymph node tumor </option>
<option value="small intestine"> small intestine </option>
<option value="red blood cell destruction disorder"> red blood cell destruction disorder </option>
<option value="neck gland cancer"> neck gland cancer </option>
<option value="genetic disorder"> genetic disorder </option>
<option value="chorea"> chorea </option>
<option value="ethylene glycol poisoning"> ethylene glycol poisoning </option>
<option value="muscle infection"> muscle infection </option>
<option value="Coxsackie virus"> Coxsackie virus </option>
<option value="gestational trophoblastic disease"> gestational trophoblastic disease </option>
<option value="pregnancy-related tumor"> pregnancy-related tumor </option>
<option value="Zenker's diverticulum"> Zenker's diverticulum </option>
<option value="weakening of the esophageal wall"> weakening of the esophageal wall </option>
<option value="tinea pedis"> tinea pedis </option>
<option value="ovulation pain"> ovulation pain </option>
<option value="bronchial tube inflammation"> bronchial tube inflammation </option>
<option value="apical lung tumor"> apical lung tumor </option>
<option value="toxicity"> toxicity </option>
<option value="systemic lupus erythematosus"> systemic lupus erythematosus </option>
<option value="SLE"> SLE </option>
<option value="lateral epicondylitis"> lateral epicondylitis </option>
<option value="methanol"> methanol </option>
<option value="bends"> bends </option>
<option value="caisson's disease"> caisson's disease </option>
<option value="shoulder nerve injury"> shoulder nerve injury </option>
<option value="broken elbow bone"> broken elbow bone </option>
<option value="intestinal viral infection"> intestinal viral infection </option>
<option value="injury"> injury </option>
<option value="common eye abnormality"> common eye abnormality </option>
<option value="dizziness and vertigo"> dizziness and vertigo </option>
<option value="salicylates overdose"> salicylates overdose </option>
<option value="elevated potassium level"> elevated potassium level </option>
<option value="wasp sting"> wasp sting </option>
<option value="fungal infection"> fungal infection </option>
<option value="age-related drooping eyelid"> age-related drooping eyelid </option>
<option value="thrush"> thrush </option>
<option value="oral yeast"> oral yeast </option>
<option value="ethanol abuse"> ethanol abuse </option>
<option value="bacterial intestinal infection"> bacterial intestinal infection </option>
<option value="enlarged heart"> enlarged heart </option>
<option value="cut skin"> cut skin </option>
<option value="SARS"> SARS </option>
<option value="serious viral pneumonia"> serious viral pneumonia </option>
<option value="valley fever"> valley fever </option>
<option value="fungal infection"> fungal infection </option>
<option value="pink eye"> pink eye </option>
<option value="nerve pain after shingles"> nerve pain after shingles </option>
<option value="throat abscess"> throat abscess </option>
<option value="fungal infection"> fungal infection </option>
<option value="doxylamine overdose"> doxylamine overdose </option>
<option value="severe low blood pressure"> severe low blood pressure </option>
<option value="diabetes and kidney disease"> diabetes and kidney disease </option>
<option value="lung inflammation or infection"> lung inflammation or infection </option>
<option value="(poor adjustment to life stressor)"> (poor adjustment to life stressor) </option>
<option value="enlarged neck lymph nodes"> enlarged neck lymph nodes </option>
<option value="severely high blood pressure"> severely high blood pressure </option>
<option value="tympanic membrane rupture"> tympanic membrane rupture </option>
<option value="cancer of the lymph system"> cancer of the lymph system </option>
<option value="dilation of esophageal veins"> dilation of esophageal veins </option>
<option value="abnormal blood vessel communication"> abnormal blood vessel communication </option>
<option value="abnormal intestinal digestion"> abnormal intestinal digestion </option>
<option value="broken bone"> broken bone </option>
<option value="AVM"> AVM </option>
<option value="blood vessel abnormality of the kidney"> blood vessel abnormality of the kidney </option>
<option value="blood vessel constriction"> blood vessel constriction </option>
<option value="dry eyes and mouth"> dry eyes and mouth </option>
<option value="collection of pus"> collection of pus </option>
<option value="bacterial skin infection"> bacterial skin infection </option>
<option value="high blood pressure in pregnancy"> high blood pressure in pregnancy </option>
<option value="rapid breathing"> rapid breathing </option>
<option value="severe depression"> severe depression </option>
<option value="pes planus"> pes planus </option>
<option value="STD"> STD </option>
<option value="connection between the bladder and vagina"> connection between the bladder and vagina </option>
<option value="tooth caries"> tooth caries </option>
<option value="radial head subluxation"> radial head subluxation </option>
<option value="skin cancer on female genitalia"> skin cancer on female genitalia </option>
<option value="overproduction of thyroid hormone"> overproduction of thyroid hormone </option>
<option value="pancreatitis"> pancreatitis </option>
<option value="chronic"> chronic </option>
<option value="acrochordons"> acrochordons </option>
<option value="wrist nerve compression"> wrist nerve compression </option>
<option value="spinal cord inflammation"> spinal cord inflammation </option>
<option value="lung scarring"> lung scarring </option>
<option value="Escherichia coli"> Escherichia coli </option>
<option value="bacterial infection"> bacterial infection </option>
<option value="MDMA abuse"> MDMA abuse </option>
<option value="twisting of intestine"> twisting of intestine </option>
<option value="HUS"> HUS </option>
<option value="red blood cell destruction"> red blood cell destruction </option>
<option value="kidney disease"> kidney disease </option>
<option value="WPW"> WPW </option>
<option value="additional electrical pathway in the heart"> additional electrical pathway in the heart </option>
<option value="broken hand bone"> broken hand bone </option>
<option value="STD"> STD </option>
<option value="tubal pregnancy"> tubal pregnancy </option>
<option value="fainting"> fainting </option>
<option value="joint out of place"> joint out of place </option>
<option value="painful menstruation"> painful menstruation </option>
<option value="leg fracture"> leg fracture </option>
<option value="depression"> depression </option>
<option value="dysthymic disorder"> dysthymic disorder </option>
<option value="leaking heart valve"> leaking heart valve </option>
<option value="anal itching"> anal itching </option>
<option value="Puncture wound of leg"> Puncture wound of leg </option>
<option value="vitamin C deficiency"> vitamin C deficiency </option>
<option value="(scrapes)"> (scrapes) </option>
<option value="TMJ"> TMJ </option>
<option value="jaw joint pain"> jaw joint pain </option>
<option value="brain infection"> brain infection </option>
<option value="lymphatic obstruction"> lymphatic obstruction </option>
<option value="DKA"> DKA </option>
<option value="a complication of poorly controlled diabetes"> a complication of poorly controlled diabetes </option>
<option value="narrowing of spinal canal"> narrowing of spinal canal </option>
<option value="viral disease with typical rash"> viral disease with typical rash </option>
<option value="kidney trauma"> kidney trauma </option>
<option value="(excessive acid in the body)"> (excessive acid in the body) </option>
<option value="skin infection"> skin infection </option>
<option value="strep throat bacteria"> strep throat bacteria </option>
<option value="pancreas inflammation"> pancreas inflammation </option>
<option value="MRKH"> MRKH </option>
<option value="inherited vaginal abnormality"> inherited vaginal abnormality </option>
<option value="tendon inflammation"> tendon inflammation </option>
<option value="bone inflammation"> bone inflammation </option>
<option value="headache"> headache </option>
<option value="mosquito transmitted illness"> mosquito transmitted illness </option>
<option value="heart stops"> heart stops </option>
<option value="mouth stomatitis"> mouth stomatitis </option>
<option value="joint inflammation"> joint inflammation </option>
<option value="enlarged rectal veins"> enlarged rectal veins </option>
<option value="large intestine tumors"> large intestine tumors </option>
<option value="HPV"> HPV </option>
<option value="Human papillomavirus infection"> Human papillomavirus infection </option>
<option value="Illnesses due to high altitude effects"> Illnesses due to high altitude effects </option>
<option value="blistering skin infection"> blistering skin infection </option>
<option value="painful contractions of the esophagus"> painful contractions of the esophagus </option>
<option value="sexually transmitted disease"> sexually transmitted disease </option>
<option value="Non-accidental traumatic head injury to child"> Non-accidental traumatic head injury to child </option>
<option value="inherited bleeding disorder"> inherited bleeding disorder </option>
<option value="heart sac inflammation following heart attack or heart surgery"> heart sac inflammation following heart attack or heart surgery </option>
<option value="impaired muscle relaxation"> impaired muscle relaxation </option>
<option value="rectal blockage from stool"> rectal blockage from stool </option>
<option value="Valium abuse"> Valium abuse </option>
<option value="giardia infection"> giardia infection </option>
<option value="DCIS"> DCIS </option>
<option value="breast cancer"> breast cancer </option>
<option value="cancer of the lining of the uterus"> cancer of the lining of the uterus </option>
<option value="facial injury"> facial injury </option>
<option value="lead poisoning"> lead poisoning </option>
<option value="low platelet count"> low platelet count </option>
<option value="stomach"> stomach </option>
<option value="intestine bleeding"> intestine bleeding </option>
<option value="bleeding in back of brain"> bleeding in back of brain </option>
<option value="death of spleen"> death of spleen </option>
<option value="rare bacterial infection of the small intestine"> rare bacterial infection of the small intestine </option>
<option value="(enlarged major blood vessel)"> (enlarged major blood vessel) </option>
<option value="celiac sprue"> celiac sprue </option>
<option value="social phobia"> social phobia </option>
<option value="narrowing of the esophagus"> narrowing of the esophagus </option>
<option value="prolonged infant crying episodes"> prolonged infant crying episodes </option>
<option value="collection of pus in the breast"> collection of pus in the breast </option>
<option value="tumor"> tumor </option>
<option value="BV"> BV </option>
<option value="garnerella vaginalis"> garnerella vaginalis </option>
<option value="brain bleeding"> brain bleeding </option>
<option value="failure to thrive"> failure to thrive </option>
<option value="injury"> injury </option>
<option value="high blood pressure"> high blood pressure </option>
<option value="erythema infectiosum"> erythema infectiosum </option>
<option value="viral illness"> viral illness </option>
<option value="blood under nail"> blood under nail </option>
<option value="rectal protrusion"> rectal protrusion </option>
<option value="inflammation of the arteries"> inflammation of the arteries </option>
<option value="broken bone near the eye"> broken bone near the eye </option>
<option value="bacteria"> bacteria </option>
<option value="pertussis"> pertussis </option>
<option value="common cold"> common cold </option>
<option value="tension headache"> tension headache </option>
<option value="toxemia of pregnancy"> toxemia of pregnancy </option>
<option value="(pseudo allergic reaction)"> (pseudo allergic reaction) </option>
<option value="isopropyl alcohol overdose"> isopropyl alcohol overdose </option>
<option value="crossed eyes"> crossed eyes </option>
<option value="skin cut"> skin cut </option>
<option value="head vein cancer"> head vein cancer </option>
<option value="elevated blood sugar"> elevated blood sugar </option>
<option value="morphine"> morphine </option>
<option value="heroin overdose"> heroin overdose </option>
<option value="elevated thyroid hormone"> elevated thyroid hormone </option>
<option value="bacterial respiratory infection"> bacterial respiratory infection </option>
<option value="fluid filled sac on tailbone"> fluid filled sac on tailbone </option>
<option value="hip bursitis"> hip bursitis </option>
<option value="tumor"> tumor </option>
<option value="gum inflammation"> gum inflammation </option>
<option value="muscle inflammation or infection"> muscle inflammation or infection </option>
<option value="belly button hernia"> belly button hernia </option>
<option value="elevated blood sugar"> elevated blood sugar </option>
<option value="ASD"> ASD </option>
<option value="GravesÂ’ ophthalmopathy"> GravesÂ’ ophthalmopathy </option>
<option value="toxin from ticks"> toxin from ticks </option>
<option value="head vein dilation"> head vein dilation </option>
<option value="tumor"> tumor </option>
<option value="sudden kidney failure"> sudden kidney failure </option>
<option value="mandible fracture"> mandible fracture </option>
<option value="diphenhydramine overdose"> diphenhydramine overdose </option>
<option value="salivary gland inflammation"> salivary gland inflammation </option>
<option value="cut on the ear"> cut on the ear </option>
<option value="URI"> URI </option>
<option value="common cold"> common cold </option>
<option value="depression after giving birth"> depression after giving birth </option>
<option value="hand tendon inflammation"> hand tendon inflammation </option>
<option value="pelvic abscess"> pelvic abscess </option>
<option value="mouth ulcers"> mouth ulcers </option>
<option value="cut infection"> cut infection </option>
<option value="heart defect at birth"> heart defect at birth </option>
<option value="inflammation of the bile ducts"> inflammation of the bile ducts </option>
<option value="type of bacteria"> type of bacteria </option>
<option value="cut skin"> cut skin </option>
<option value="broken nose"> broken nose </option>
<option value="inherited muscle weakness and low potassium"> inherited muscle weakness and low potassium </option>
<option value="pre heart attack chest pain"> pre heart attack chest pain </option>
<option value="groin hernia"> groin hernia </option>
<option value="enlarged thyroid"> enlarged thyroid </option>
<option value="lymph tissue inflammation"> lymph tissue inflammation </option>
<option value="Giant cell arteritis of the young"> Giant cell arteritis of the young </option>
<option value="fabricated illness"> fabricated illness </option>
<option value="slipped back bone"> slipped back bone </option>
<option value="pus-filled lump"> pus-filled lump </option>
<option value="female organ fluid collection"> female organ fluid collection </option>
<option value="vaginal bleeding during pregnancy"> vaginal bleeding during pregnancy </option>
<option value="broken finger"> broken finger </option>
<option value="high blood pressure"> high blood pressure </option>
<option value="collapse of lung"> collapse of lung </option>
<option value="flat feet"> flat feet </option>
<option value="pes planus"> pes planus </option>
<option value="skin disease caused by mites"> skin disease caused by mites </option>
<option value="shoulder injury"> shoulder injury </option>
<option value="body appearance obsession"> body appearance obsession </option>
<option value="difficulty sleeping"> difficulty sleeping </option>
<option value="repetitive involuntary movements"> repetitive involuntary movements </option>
<option value="vocalizations"> vocalizations </option>
<option value="premature ovarian failure"> premature ovarian failure </option>
<option value="parasitic skin disease"> parasitic skin disease </option>
<option value="German measles"> German measles </option>
<option value="infant scalp rash"> infant scalp rash </option>
<option value="tearing and dilation of the aorta"> tearing and dilation of the aorta </option>
<option value="persistent erection"> persistent erection </option>
<option value="collection of pus in the liver"> collection of pus in the liver </option>
<option value="dead breast fat"> dead breast fat </option>
<option value="atrophic vaginitis"> atrophic vaginitis </option>
<option value="excessive blood platelets"> excessive blood platelets </option>
<option value="irregular heart rate"> irregular heart rate </option>
<option value="throat infection"> throat infection </option>
<option value="psychogenic illness"> psychogenic illness </option>
<option value="wrist injury"> wrist injury </option>
<option value="inherited heart condition"> inherited heart condition </option>
<option value="epididymitis"> epididymitis </option>
<option value="skin cut"> skin cut </option>
<option value="severe medication reaction"> severe medication reaction </option>
<option value="breathing failure"> breathing failure </option>
<option value="ARDS"> ARDS </option>
<option value="slow heart rate"> slow heart rate </option>
<option value="ITP"> ITP </option>
<option value="low platelets"> low platelets </option>
<option value="(mild)"> (mild) </option>
<option value="death of body tissue"> death of body tissue </option>
<option value="gastric cancer"> gastric cancer </option>
<option value="HPV"> HPV </option>
<option value="joint infection"> joint infection </option>
<option value="ear toxicity"> ear toxicity </option>
<option value="uterine tear during childbirth"> uterine tear during childbirth </option>
<option value="bubonic plague"> bubonic plague </option>
<option value="bacteria yersinia infection"> bacteria yersinia infection </option>
<option value="bruise"> bruise </option>
<option value="ecchymosis"> ecchymosis </option>
<option value="tumor"> tumor </option>
<option value="telescoping intestine"> telescoping intestine </option>
<option value="hives"> hives </option>
<option value="blood vessel abnormality"> blood vessel abnormality </option>
<option value="AVM"> AVM </option>
<option value="spine arthritis"> spine arthritis </option>
<option value="type of bacterial infection"> type of bacterial infection </option>
<option value="leg or arm injury"> leg or arm injury </option>
<option value="fever illness"> fever illness </option>
<option value="IVDA"> IVDA </option>
<option value="felon"> felon </option>
<option value="low blood pressure"> low blood pressure </option>
<option value="brain tumor"> brain tumor </option>
<option value="constriction of genital blood supply"> constriction of genital blood supply </option>
<option value="knee cartilage injury"> knee cartilage injury </option>
<option value="tumor"> tumor </option>
<option value="late stage syphilis"> late stage syphilis </option>
<option value="hallux valgus"> hallux valgus </option>
<option value="pharyngeal pouch"> pharyngeal pouch </option>
<option value="weakening of the esophageal wall"> weakening of the esophageal wall </option>
<option value="cancer spread to bone"> cancer spread to bone </option>
<option value="collection of pus in the rectum"> collection of pus in the rectum </option>
<option value="prostate enlargement"> prostate enlargement </option>
<option value="severe infection in the floor of the mouth and neck"> severe infection in the floor of the mouth and neck </option>
<option value="spinal cord compression"> spinal cord compression </option>
<option value="gonadal dysgenesis"> gonadal dysgenesis </option>
<option value="painful menstruation"> painful menstruation </option>
<option value="splenic rupture"> splenic rupture </option>
<option value="bulging of the abdominal wall"> bulging of the abdominal wall </option>
<option value="rare liver and brain swelling"> rare liver and brain swelling </option>
<option value="venous blood clot in the brain"> venous blood clot in the brain </option>
<option value="dangerous lung collapse"> dangerous lung collapse </option>
<option value="scrape on eye"> scrape on eye </option>
<option value="inflammation of the testicles"> inflammation of the testicles </option>
<option value="severely low thyroid hormone"> severely low thyroid hormone </option>
<option value="stye of eye"> stye of eye </option>
<option value="tumor tongue"> tumor tongue </option>
<option value="Coumadin"> Coumadin </option>
<option value="Jantoven overdose"> Jantoven overdose </option>
<option value="skin cut"> skin cut </option>
<option value="disease of red blood cells"> disease of red blood cells </option>
<option value="inflammation of the gums"> inflammation of the gums </option>
<option value="irrational fear"> irrational fear </option>
<option value="bismuth"> bismuth </option>
<option value="PAD"> PAD </option>
<option value="claudication"> claudication </option>
<option value="inadequate blood flow"> inadequate blood flow </option>
<option value="uterine tissue outside the uterus"> uterine tissue outside the uterus </option>
<option value="kidney disease"> kidney disease </option>
<option value="tight heart valve"> tight heart valve </option>
<option value="soft tissue cancer"> soft tissue cancer </option>
<option value="elbow fracture"> elbow fracture </option>
<option value="OCD"> OCD </option>
<option value="anxiety disorder"> anxiety disorder </option>
<option value="optic nerve inflammation"> optic nerve inflammation </option>
<option value="autoimmune disease of the nerves"> autoimmune disease of the nerves </option>
<option value="muscles"> muscles </option>
<option value="immersion foot"> immersion foot </option>
<option value="progressive hardening of soft tissue"> progressive hardening of soft tissue </option>
<option value="Prescription Drug Overuse"> Prescription Drug Overuse </option>
<option value="fluid sac behind knee"> fluid sac behind knee </option>
<option value="overgrown scar"> overgrown scar </option>
<option value="parasite infection"> parasite infection </option>
<option value="infection around eye"> infection around eye </option>
<option value="injury"> injury </option>
<option value="neck artery tear"> neck artery tear </option>
<option value="raised intracranial pressure"> raised intracranial pressure </option>
<option value="nervous system disorder"> nervous system disorder </option>
<option value="infected hip joint"> infected hip joint </option>
<option value="common intestinal worm"> common intestinal worm </option>
<option value="pediatric blood vessel disease"> pediatric blood vessel disease </option>
<option value="elevated blood pressure at doctor's office"> elevated blood pressure at doctor's office </option>
<option value="radiation sickness"> radiation sickness </option>
<option value="blue birthmark"> blue birthmark </option>
<option value="large intestine inflammation"> large intestine inflammation </option>
<option value="inner ear tube"> inner ear tube </option>
<option value="subungual hematoma"> subungual hematoma </option>
<option value="unnatural object in the nose"> unnatural object in the nose </option>
<option value="cancer of the brain"> cancer of the brain </option>
<option value="inability to urinate"> inability to urinate </option>
<option value="calcaneal apophysitis"> calcaneal apophysitis </option>
<option value="common cause of heel pain"> common cause of heel pain </option>
<option value="eyelid swelling"> eyelid swelling </option>
<option value="abdominal cavity inflammation"> abdominal cavity inflammation </option>
<option value="heart artery tear"> heart artery tear </option>
<option value="lower back nerve irritation"> lower back nerve irritation </option>
<option value="childhood bone disease"> childhood bone disease </option>
<option value="H1N1 Influenza"> H1N1 Influenza </option>
<option value="placenta separation"> placenta separation </option>
<option value="reading disorder"> reading disorder </option>
<option value="stomach pushes through diaphragm"> stomach pushes through diaphragm </option>
<option value="movement disorder"> movement disorder </option>
<option value="elevated parathyroid hormone levels"> elevated parathyroid hormone levels </option>
<option value="toe deformity"> toe deformity </option>
<option value="mouth cut"> mouth cut </option>
<option value="broken ankle"> broken ankle </option>
<option value="rare temperature abnormality"> rare temperature abnormality </option>
<option value="PAN"> PAN </option>
<option value="Methanol poisoning"> Methanol poisoning </option>
<option value="finger tendon rupture"> finger tendon rupture </option>
<option value="growth on the vocal cords"> growth on the vocal cords </option>
<option value="heart block"> heart block </option>
<option value="spinal fluid infection"> spinal fluid infection </option>
<option value="sac under the skin"> sac under the skin </option>
<option value="organophosphate poisoning"> organophosphate poisoning </option>
<option value="loss of contact with reality after birth"> loss of contact with reality after birth </option>
<option value="coughing blood"> coughing blood </option>
<option value="otitis media"> otitis media </option>
<option value="abnormal heart valve"> abnormal heart valve </option>
<option value="large intestine inflammation"> large intestine inflammation </option>
<option value="Chilblains"> Chilblains </option>
<option value="pernio"> pernio </option>
<option value="fabricated illness in a dependent"> fabricated illness in a dependent </option>
<option value="hair follicle infection"> hair follicle infection </option>
<option value="(altered mental status)"> (altered mental status) </option>
<option value="ameba infection"> ameba infection </option>
<option value="(severe/life threatening allergic reaction)"> (severe/life threatening allergic reaction) </option>
<option value="tumor"> tumor </option>
<option value="tibial stress syndrome"> tibial stress syndrome </option>
<option value="tropical mosquito borne illness"> tropical mosquito borne illness </option>
<option value="acetaminophen poisoning"> acetaminophen poisoning </option>
<option value="pain after tooth removal"> pain after tooth removal </option>
<option value="inner chest inflammation"> inner chest inflammation </option>
<option value="dilation of leg artery"> dilation of leg artery </option>
<option value="familial basilar artery migraine headache"> familial basilar artery migraine headache </option>
<option value="PCP"> PCP </option>
<option value="fungal lung infection"> fungal lung infection </option>
<option value="twins"> twins </option>
<option value="triplets"> triplets </option>
<option value="etc"> etc </option>
<option value="blood vessel inflammation"> blood vessel inflammation </option>
<option value="yellow skin color"> yellow skin color </option>
<option value="low blood sugar"> low blood sugar </option>
<option value="spider bite"> spider bite </option>
<option value="twisting of the ovary"> twisting of the ovary </option>
<option value="TIA"> TIA </option>
<option value="reversible stroke"> reversible stroke </option>
<option value="neck artery tear"> neck artery tear </option>
<option value="flushing"> flushing </option>
<option value="diarrhea"> diarrhea </option>
<option value="clouding of the eye lens"> clouding of the eye lens </option>
<option value="vaginal infection inflammation"> vaginal infection inflammation </option>
<option value="appearance of new tooth"> appearance of new tooth </option>
<option value="bacterial infection after cat scratch"> bacterial infection after cat scratch </option>
<option value="stretched"> stretched </option>
<option value="torn ligament"> torn ligament </option>
<option value="inflammation of the uterus"> inflammation of the uterus </option>
<option value="crooked spine"> crooked spine </option>
<option value="head vein blood clot"> head vein blood clot </option>
<option value="broken hand"> broken hand </option>
<option value="liver trauma"> liver trauma </option>
<option value="cancer spread"> cancer spread </option>
<option value="thyroid inflammation"> thyroid inflammation </option>
<option value="skin cut"> skin cut </option>
<option value="polio"> polio </option>
<option value="neck cyst"> neck cyst </option>
<option value="ongoing kidney failure"> ongoing kidney failure </option>
<option value="rare nerve disease"> rare nerve disease </option>
<option value="type of chronic joint inflammation"> type of chronic joint inflammation </option>
<option value="swelling of skin"> swelling of skin </option>
<option value="lips"> lips </option>
<option value="eyes"> eyes </option>
<option value="hypertensive disorder of pregnancy"> hypertensive disorder of pregnancy </option>
<option value="blood pressure medication overdose"> blood pressure medication overdose </option>
<option value="in respiratory tract"> in respiratory tract </option>
<option value="adolescent hip disorder"> adolescent hip disorder </option>
                                        </select>
                                    </div>
        
                                      <div class="form-group col-md-3">
                                        <label for="inputZip">Submit</label>
                                        <input type="Submit" class="form-control btn btn-primary" style="color: white;" id="inputZip">
                                    </div>
                                </div>

                                </form>
                            </div>
                        </div>  
                    </div>


                    <div class="row">
                        <?php


    $sym = $_POST['sym'];
   



   $command = escapeshellcmd("C:\Users\Krishna\AppData\Local\Programs\Python\Python37\python.exe symptomWiseDisease.py ".$sym);
    $output = shell_exec($command);


   
echo $output;

?>
            
<canvas id="myChart2" height="1200" width="400"></canvas>
<script type="text/javascript">

var zz = "<?php  echo $output ?>";
console.log(zz);
bmi = zz.split('#')
    bmiLabels = bmi[0].split(',')
bmiLabelsCount = bmi[1].split(',')
console.log(bmiLabels)
console.log(bmiLabelsCount)
var chartData = {

    // labels: ["January", "February", "March", "April", "May", "June"],
    labels: bmiLabels,
    datasets: [
        {

            fillColor: "#3e95cd",
            strokeColor: "#3e95cd",
             backgroundColor: ["#8e5ea2"],
            // data: [60, 80, 81, 56, 55, 40]
            data: bmiLabelsCount
        }
    ]



};

var barOptions = {

 scales: {
            yAxes: [{

                barThickness: 2,  // number (pixels) or 'flex'
                maxBarThickness: 2 // number (pixels)
            }]
        },
         title: {
        display: true,
        text: 'CITY-AGE-GENDER WISE DISEASES'
      },
  
  events: false,
  showTooltips: false,
  animation: {
    duration: 500,
     
    easing: "easeOutQuart",


    onComplete: function () {
        var ctx = this.chart.ctx;
        ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
        ctx.textAlign = 'left';
        ctx.textBaseline = 'bottom';
        
        this.data.datasets.forEach(function (dataset) {
            console.log(dataset);
            for (var i = 0; i < dataset.data.length; i++) {
                var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                    scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                    left = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._xScale.left;
                    offset = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._xScale.longestLabelWidth;
                ctx.fillStyle = '#ffffff';
                var y_pos = model.y - 5;
                var label = model.label;
                // Make sure data value does not get overflown and hidden
                // when the bar's value is too close to max value of scale
                // Note: The y value is reverse, it counts from top down
                if ((scale_max - model.y) / scale_max >= 0.93)
                    y_pos = model.y + 20; 
                // ctx.fillText(dataset.data[i], model.x, y_pos);
                ctx.fillText(label, left + 10, model.y + 8);
            }
        });               
    }
  }

};

var ctx = document.getElementById("myChart2").getContext("2d");
var myBar = new Chart(ctx, {
                type: 'horizontalBar',
                data: chartData,
                options: barOptions
            });



            </script>

                    </div>
                </div>  
                
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2019 Theme_Nate. All rights reserved.</p>
                        <span>
                            <a href="#" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="#" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            <div class="modal modal-left fade search" id="search-drawer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Search</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="anticon anticon-close"></i>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="input-affix">
                                <i class="prefix-icon anticon anticon-search"></i>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">Files</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-cyan avatar-icon">
                                        <i class="anticon anticon-file-excel"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Quater Report.exl</a>
                                        <p class="m-b-0 text-muted font-size-13">by Finance</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-blue avatar-icon">
                                        <i class="anticon anticon-file-word"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Documentaion.docx</a>
                                        <p class="m-b-0 text-muted font-size-13">by Developers</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-purple avatar-icon">
                                        <i class="anticon anticon-file-text"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Recipe.txt</a>
                                        <p class="m-b-0 text-muted font-size-13">by The Chef</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-red avatar-icon">
                                        <i class="anticon anticon-file-pdf"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Project Requirement.pdf</a>
                                        <p class="m-b-0 text-muted font-size-13">by Project Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">Members</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Erin Gonzales</a>
                                        <p class="m-b-0 text-muted font-size-13">UI/UX Designer</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Darryl Day</a>
                                        <p class="m-b-0 text-muted font-size-13">Software Engineer</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Marshall Nichols</a>
                                        <p class="m-b-0 text-muted font-size-13">Data Analyst</p>
                                    </div>
                                </div>
                            </div>   
                            <div class="m-t-30">
                                <h5 class="m-b-20">News</h5> 
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/others/img-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">5 Best Handwriting Fonts</a>
                                        <p class="m-b-0 text-muted font-size-13">
                                            <i class="anticon anticon-clock-circle"></i>
                                            <span class="m-l-5">25 Nov 2018</span>
                                        </p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search End-->


            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Theme Config</h5>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="m-b-30">
                                <h5 class="m-b-0">Header Color</h5>
                                <p>Config header background color</p>
                                <div class="theme-configurator d-flex m-t-10">
                                    <div class="radio">
                                        <input id="header-default" name="header-theme" type="radio" checked value="default">
                                        <label for="header-default"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-primary" name="header-theme" type="radio" value="primary">
                                        <label for="header-primary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-success" name="header-theme" type="radio" value="success">
                                        <label for="header-success"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-secondary" name="header-theme" type="radio" value="secondary">
                                        <label for="header-secondary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-danger" name="header-theme" type="radio" value="danger">
                                        <label for="header-danger"></label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Side Nav Dark</h5>
                                <p>Change Side Nav to dark</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-theme-toogle" id="side-nav-theme-toogle">
                                    <label for="side-nav-theme-toogle"></label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Folded Menu</h5>
                                <p>Toggle Folded Menu</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-fold-toogle" id="side-nav-fold-toogle">
                                    <label for="side-nav-fold-toogle"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <!-- Quick View END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->



    <script type="text/javascript">
        

        var ld = document.getElementById('loading');


        function f1()
        {


            ld.style.display = 'none';
        }
    </script>

   <!-- Core Vendors JS -->

    <script src="assets/js/vendors.min.js"></script>
 
    <!-- page js -->
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/quill/quill.min.js"></script>
    <script src="assets/js/pages/form-elements.js"></script>
   <script type="text/javascript" src="assets/js/pluginjs/jasny-bootstrap.js"></script>
    <!-- Core JS -->
   
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from themenate.com/enlink-bs/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2020 05:03:21 GMT -->
</html>