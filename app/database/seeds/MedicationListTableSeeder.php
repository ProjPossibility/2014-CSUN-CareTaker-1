<?php

class MedicationListTableSeeder extends Seeder {

	public function run()
	{
		DB::table('medication_list')->delete();

		MedicationList::create(array(
			'id'				=> 1,
			'name'			=> 'Adderall',
			'dosage'		=> '10 mg',
			'warnings'		=> 'Misuse or abuse of amphetamine may cause '.
				'serious (possibly fatal) heart and blood pressure problems. '.
				'Amphetamine-type medications can be habit-forming. '.
				'Use only as directed. If you use this drug for a long time, '.
				'you may become dependent on it and may have withdrawal symptoms '.
				'after stopping the drug. Consult your doctor or pharmacist for '.
				'more details.',
			'uses'			=> 'This combination medication is used to treat '.
				'attention deficit hyperactivity disorder (ADHD) as part of a '.
				'total treatment plan, including psychological, social, and '.
				'other treatments. It may help to increase the ability to pay '.
				'attention, concentrate, stay focused, and stop fidgeting.',
			'side_effects'	=> 'Loss of appetite, weight loss, dry mouth, '.
				'stomach upset/pain, nausea/vomiting, dizziness, headache, '.
				'diarrhea, fever, nervousness, and trouble sleeping',
			'precautions'	=> 'Before taking this medication, tell your '.
				'doctor or pharmacist if you are allergic to it; or to '.
				'sympathomimetic drugs (such as epinephrine, pseudoephedrine); '.
				'or if you have any other allergies.',
			'interactions'	=> 'isocarboxazid, linezolid, methylene blue, '.
				'moclobemide, phenelzine, procarbazine, rasagiline, selegiline, '.
				'tranylcypromine',
			'overdose'		=> 'If overdose is suspected, contact a poison '.
				'control center or emergency room immediately. US residents '.
				'can call their local poison control center at 1-800-222-1222. '.
				'Canada residents can call a provincial poison control center. '.
				'Symptoms of overdose may include: severe mental/mood changes, '.
				'seizures, severe/persistent headache, severe restlessness, '.
				'fast breathing.',
			'image_name'	=> 'adderall.jpg'
		));

		MedicationList::create(array(
			'id'				=> 2,
			'name'			=> 'Celexa',
			'dosage'		=> '10 mg',
			'warnings'		=> 'Antidepressant medications are used to treat '.
				'a variety of conditions, including depression and other '.
				'mental/mood disorders. These medications can help prevent '.
				'suicidal thoughts/attempts and provide other important '.
				'benefits. However, studies have shown that a small number of '.
				'people (especially people younger than 25) who take '.
				'antidepressants for any condition may experience worsening '.
				'depression, other mental/mood symptoms, or suicidal '.
				'thoughts/attempts. Therefore, it is very important to talk '.
				'with the doctor about the risks and benefits of antidepressant '.
				'medication (especially for people younger than 25), even if '.
				'treatment is not for a mental/mood condition.',
			'uses'			=> 'Citalopram is used to treat depression. It '.
				'may improve your energy level and feelings of well-being. '.
				'Citalopram is known as a selective serotonin reuptake '.
				'inhibitor (SSRI). This medication works by helping to restore '.
				'the balance of a certain natural substance (serotonin) in '.
				'the brain.',
			'side_effects'	=> 'Nausea, dry mouth, loss of appetite, tiredness, '.
				'drowsiness, sweating, blurred vision, and yawning',
			'precautions'	=> 'Before taking citalopram, tell your doctor or '.
				'pharmacist if you are allergic to it; or to escitalopram; or '.
				'if you have any other allergies. This product may contain '.
				'inactive ingredients, which can cause allergic reactions or '.
				'other problems. Talk to your pharmacist for more details.',
			'interactions'	=> 'isocarboxazid, linezolid, methylene blue, '.
				'moclobemide, phenelzine, procarbazine, rasagiline, selegiline, '.
				'tranylcypromine',
			'overdose'		=> 'If overdose is suspected, contact a poison '.
				'control center or emergency room immediately. US residents '.
				'can call their local poison control center at 1-800-222-1222. '.
				'Canada residents can call a provincial poison control center.',
			'image_name'	=> 'celexa.jpg'
		));

		MedicationList::create(array(
			'id'				=> 3,
			'name'			=> 'Cipro',
			'dosage'		=> '500 mg',
			'warnings'		=> 'This medication may rarely cause tendon damage (such as tendonitis, tendon rupture) during or after treatment. Your risk for tendon problems is greater if you are over 60 years of age, if you are taking corticosteroids (such as prednisone), or if you have a kidney, heart, or lung transplant. Stop exercising, rest, and get medical help right away if you develop joint/muscle/tendon pain or swelling.',
			'uses'			=> 'This medication is used to treat a variety of bacterial infections. Ciprofloxacin belongs to a class of drugs called quinolone antibiotics. It works by stopping the growth of bacteria.',
			'side_effects'	=> 'Nausea, diarrhea, dizziness, lightheadedness, headache, and trouble sleeping',
			'precautions'	=> 'Before taking ciprofloxacin, tell your doctor or pharmacist if you are allergic to it; or to other quinolone antibiotics such as norfloxacin, gemifloxacin, levofloxacin, moxifloxacin, or ofloxacin; or if you have any other allergies. This product may contain inactive ingredients, which can cause allergic reactions or other problems. Talk to your pharmacist for more details.',
			'interactions'	=> 'acenocoumarol, warfarin, strontium',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center.',
			'image_name'	=> 'cipro.jpg'
		));

		MedicationList::create(array(
			'id'				=> 4,
			'name'			=> 'Cymbalta',
			'dosage'		=> '20 mg',
			'warnings'		=> 'Antidepressant medications are used to treat a variety of conditions, including depression and other mental/mood disorders. These medications can help prevent suicidal thoughts/attempts and provide other important benefits. However, a small number of people (especially people younger than 25) who take antidepressants for any condition may experience worsening depression, other mental/mood symptoms, or suicidal thoughts/attempts. Therefore, it is very important to talk with the doctor about the risks and benefits of antidepressant medication (especially for people younger than 25), even if treatment is not for a mental/mood condition.',
			'uses'			=> 'Duloxetine is used to treat depression and anxiety. In addition, duloxetine is used to help relieve nerve pain (peripheral neuropathy) in people with diabetes or ongoing pain due to medical conditions such as arthritis, chronic back pain, or fibromyalgia (a condition that causes widespread pain).',
			'side_effects'	=> 'Nausea, dry mouth, constipation, loss of appetite, tiredness, drowsiness, or increased sweating',
			'precautions'	=> 'Before taking duloxetine, tell your doctor or pharmacist if you are allergic to it; or if you have any other allergies. This product may contain inactive ingredients, which can cause allergic reactions or other problems. Talk to your pharmacist for more details.',
			'interactions'	=> 'clopidogrel, ibuprofen, warfarin, cimetidine, ciprofloxacin, enoxacin',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe drowsiness, fainting.',
			'image_name'	=> 'cymbalta.jpg'
		));

		MedicationList::create(array(
			'id'				=> 5,
			'name'			=> 'Flexeril',
			'dosage'		=> '5 mg',
			'warnings'		=> 'N/A',
			'uses'			=> 'Cyclobenzaprine is used short-term to treat muscle spasms. It is usually used along with rest and physical therapy. It works by helping to relax the muscles.',
			'side_effects'	=> 'Drowsiness, dizziness, dry mouth, or tiredness',
			'precautions'	=> 'Before taking cyclobenzaprine, tell your doctor or pharmacist if you are allergic to it; or if you have any other allergies. This product may contain inactive ingredients, which can cause allergic reactions or other problems. Talk to your pharmacist for more details.',
			'interactions'	=> 'amitriptyline, imipramine, isocarboxazid, linezolid, methylene blue, moclobemide, phenelzine, procarbazine, rasagiline, selegiline, tranylcypromine',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: fast/irregular heartbeat, fainting, severe drowsiness, slurred speech, seizures, mental/mood changes (such as confusion, hallucinations).',
			'image_name'	=> 'flexeril.jpg'
		));

		MedicationList::create(array(
			'id'				=> 6,
			'name'			=> 'Hydrocodon',
			'dosage'		=> '7.5 mg',
			'warnings'		=> 'One ingredient in this product is acetaminophen. Taking too much acetaminophen may cause serious (possibly fatal) liver disease. Adults should not take more than 4000 milligrams (4 grams) of acetaminophen a day. If you have liver problems, consult your doctor or pharmacist for a safe dosage of this medication. Daily use of alcohol, especially when combined with acetaminophen, may increase your risk for liver damage. Avoid alcohol. Check with your doctor or pharmacist for more information. Get medical help right away if you have any symptoms of liver damage, including: dark urine, persistent nausea/vomiting, stomach/abdominal pain, extreme tiredness, or yellowing eyes/skin.',
			'uses'			=> 'This combination medication is used to relieve moderate to severe pain. It contains a narcotic pain reliever (hydrocodone) and a non-narcotic pain reliever (acetaminophen). Hydrocodone works in the brain to change how your body feels and responds to pain. Acetaminophen can also reduce a fever.',
			'side_effects'	=> 'Nausea, vomiting, constipation, lightheadedness, dizziness, or drowsiness',
			'precautions'	=> 'Before taking this medication, tell your doctor or pharmacist if you are allergic to it; or to other narcotics (such as morphine, codeine); or if you have any other allergies. This product may contain inactive ingredients (such as propylene glycol), which can cause allergic reactions or other problems. Talk to your pharmacist for more details.',
			'interactions'	=> 'pentazocine, nalbuphine, butorphanol, ketoconazole, isocarboxazid, linezolid, methylene blue, moclobemide, phenelzine, procarbazine, rasagiline, selegiline, tranylcypromine',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: nausea, vomiting, unusual sweating, slow breathing, slow heartbeat, loss of consciousness.',
			'image_name'	=> 'hydrocodone.jpg'
		));

		MedicationList::create(array(
			'id'				=> 7,
			'name'			=> 'Lexapro',
			'dosage'		=> '5 mg',
			'warnings'		=> 'Antidepressant medications are used to treat a variety of conditions, including depression and other mental/mood disorders. These medications can help prevent suicidal thoughts/attempts and provide other important benefits. However, studies have shown that a small number of people (especially people younger than 25) who take antidepressants for any condition may experience worsening depression, other mental/mood symptoms, or suicidal thoughts/attempts. Therefore, it is very important to talk with the doctor about the risks and benefits of antidepressant medication (especially for people younger than 25), even if treatment is not for a mental/mood condition.',
			'uses'			=> 'Escitalopram is used to treat depression and anxiety. It works by helping to restore the balance of a certain natural substance (serotonin) in the brain. Escitalopram belongs to a class of drugs known as selective serotonin reuptake inhibitors (SSRI). It may improve your energy level and feelings of well-being and decrease nervousness.',
			'side_effects'	=> 'Nausea, dry mouth, trouble sleeping, constipation, tiredness, drowsiness, dizziness, and increased sweating',
			'precautions'	=> 'Before taking escitalopram, tell your doctor or pharmacist if you are allergic to it; or to citalopram; or if you have any other allergies. This product may contain inactive ingredients, which can cause allergic reactions or other problems. Talk to your pharmacist for more details.',
			'interactions'	=> 'clopidogrel, ibuprofen, warfarin, isocarboxazid, linezolid, methylene blue, moclobemide, phenelzine, procarbazine, rasagiline, selegiline, tranylcypromine',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center.',
			'image_name'	=> 'lexapro.jpg'
		));

		MedicationList::create(array(
			'id'				=> 8,
			'name'			=> 'Lisinopril',
			'dosage'		=> '2.5 mg',
			'warnings'		=> 'This drug can cause serious (possibly fatal) harm to an unborn baby if used during pregnancy. Therefore, it is important to prevent pregnancy while taking this medication. Consult your doctor for more details and to discuss the use of reliable forms of birth control while taking this medication. If you are planning pregnancy, become pregnant, or think you may be pregnant, contact your doctor immediately.',
			'uses'			=> 'Lisinopril is used to treat high blood pressure (hypertension). Lowering high blood pressure helps prevent strokes, heart attacks, and kidney problems. It is also used to treat heart failure and to improve survival after a heart attack.',
			'side_effects'	=> 'Dizziness, lightheadedness, tiredness, or headache',
			'precautions'	=> 'Before taking lisinopril, tell your doctor or pharmacist if you are allergic to it; or to other ACE inhibitors (such as benazepril); or if you have any other allergies. This product may contain inactive ingredients, which can cause allergic reactions or other problems. Talk to your pharmacist for more details.',
			'interactions'	=> 'aliskiren, lithium, ibuprofen, naproxen',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe dizziness, fainting.',
			'image_name'	=> 'lisinopril.jpg'
		));

		MedicationList::create(array(
			'id'				=> 9,
			'name'			=> 'Medrol',
			'dosage'		=> '2 mg',
			'warnings'		=> 'N/A',
			'uses'			=> 'Methylprednisolone is used to treat conditions such as arthritis, blood disorders, severe allergic reactions, certain cancers, eye conditions, skin/kidney/intestinal/lung diseases, and immune system disorders. It decreases your immune system\'s response to various diseases to reduce symptoms such as swelling, pain, and allergic-type reactions. This medication is a corticosteroid hormone.',
			'side_effects'	=> 'Nausea, vomiting, heartburn, headache, dizziness, trouble sleeping, appetite changes, increased sweating, or acne',
			'precautions'	=> 'Before taking methylprednisolone, tell your doctor or pharmacist if you are allergic to it; or to prednisone; or if you have any other allergies. This product may contain inactive ingredients, which can cause allergic reactions or other problems. Talk to your pharmacist for more details.',
			'interactions'	=> 'aldesleukin, mifepristone, clopidogrel, warfarin, dabigatran, ibuprofen, celecoxib, aspirin, salicylates',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center.',
			'image_name'	=> 'medrol.jpg'
		));

		MedicationList::create(array(
			'id'				=> 10,
			'name'			=> 'Microzide',
			'dosage'		=> '12.5 mg',
			'warnings'		=> 'N/A',
			'uses'			=> 'This medication is used to treat high blood pressure. Lowering high blood pressure helps prevent strokes, heart attacks, and kidney problems. Hydrochlorothiazide is a "water pill" (diuretic) that causes you to make more urine. This helps your body get rid of extra salt and water.',
			'side_effects'	=> 'Upset stomach, dizziness, or headache',
			'precautions'	=> 'Before taking hydrochlorothiazide, tell your doctor or pharmacist if you are allergic to it; or if you have any other allergies. This product may contain inactive ingredients (such as sulfites found in some brands), which can cause allergic reactions or other problems. Talk to your pharmacist for more details. This drug may make you dizzy. Do not drive, use machinery, or do any activity that requires alertness until you are sure you can perform such activities safely. Limit alcoholic beverages.',
			'interactions'	=> 'cisapride, dofetilide, lithium, ibuprofen, naproxen',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe dizziness, weakness, fainting.',
			'image_name'	=> 'microzide.jpg'
		));

		MedicationList::create(array(
			'id'				=> 11,
			'name'			=> 'Mobic',
			'dosage'		=> '7.5 mg',
			'warnings'		=> 'Nonsteroidal anti-inflammatory drugs (including meloxicam) may rarely increase the risk of a heart attack or stroke. The risk may be greater if you have heart disease or increased risk for heart disease (for example, due to smoking, family history of heart disease, or conditions such as high blood pressure or diabetes), or with longer use. This drug should not be taken right before or after heart bypass surgery (CABG).',
			'uses'			=> 'Meloxicam is used to treat arthritis. It reduces pain, swelling, and stiffness of the joints. Meloxicam is known as a nonsteroidal anti-inflammatory drug (NSAID).',
			'side_effects'	=> 'Stomach upset, nausea, dizziness, or diarrhea',
			'precautions'	=> 'Before taking meloxicam, tell your doctor or pharmacist if you are allergic to it; or to aspirin or other NSAIDs (such as ibuprofen, naproxen, celecoxib); or if you have any other allergies. This product may contain inactive ingredients, which can cause allergic reactions or other problems. Talk to your pharmacist for more details.',
			'interactions'	=> 'aliskiren, captopril, lisinopril, losartan, valsartan, cidofovir, lithium, methotrexate, pemetrexed',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: slow/shallow breathing, extreme drowsiness, severe stomach pain, vomit that looks like coffee grounds.',
			'image_name'	=> 'mobic.jpg'
		));

		MedicationList::create(array(
			'id'				=> 12,
			'name'			=> 'Naproxen',
			'dosage'		=> '250 mg',
			'warnings'		=> 'Nonsteroidal anti-inflammatory drugs (including naproxen) may rarely increase the risk for a heart attack or stroke. The risk may be greater if you have heart disease or increased risk for heart disease (for example, due to smoking, family history of heart disease, or conditions such as high blood pressure or diabetes), or with longer use. This drug should not be taken right before or after heart bypass surgery (CABG).',
			'uses'			=> 'Naproxen is used to relieve pain from various conditions such as headaches, muscle aches, tendonitis, dental pain, and menstrual cramps. It also reduces pain, swelling, and joint stiffness caused by arthritis, bursitis, and gout attacks. This medication is known as a nonsteroidal anti-inflammatory drug (NSAID). It works by blocking your body\'s production of certain natural substances that cause inflammation.',
			'side_effects'	=> 'Upset stomach, nausea, heartburn, headache, drowsiness, or dizziness',
			'precautions'	=> 'Before taking naproxen, tell your doctor or pharmacist if you are allergic to it; or to aspirin or other NSAIDs (such as ibuprofen, celecoxib); or if you have any other allergies. This product may contain inactive ingredients, which can cause allergic reactions or other problems. Talk to your pharmacist for more details.',
			'interactions'	=> 'aliskiren, captopril, lisinopril, losartan, valsartan, cidofovir, corticosteroids, lithium',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe stomach pain, extreme drowsiness, seizures.',
			'image_name'	=> 'naproxen.jpg'
		));

		MedicationList::create(array(
			'id'				=> 13,
			'name'			=> 'Neurtontin',
			'dosage'		=> '600 mg',
			'warnings'		=> 'N/A',
			'uses'			=> 'Gabapentin is used with other medications to prevent and control seizures. It is also used to relieve nerve pain following shingles (a painful rash due to herpes zoster infection) in adults. Gabapentin is known as an anticonvulsant or antiepileptic drug.',
			'side_effects'	=> 'Drowsiness, dizziness, loss of coordination, tiredness, blurred/double vision, unusual eye movements, or shaking (tremor)',
			'precautions'	=> 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: kidney disease, mental/mood problems (such as depression, thoughts of suicide), use/abuse of drugs/alcohol.',
			'interactions'	=> 'alcohol, cetirizine, diphenhydramine, alprazolam, diazepam, zolpidem, codeine, morphine',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe drowsiness, slurred speech, weakness.',
			'image_name'	=> 'neurontin.jpg'
		));

		MedicationList::create(array(
			'id'				=> 14,
			'name'			=> 'Prednisone',
			'dosage'		=> '1 mg',
			'warnings'		=> 'N/A',
			'uses'			=> 'Prednisone is used to treat conditions such as arthritis, blood disorders, breathing problems, severe allergies, skin diseases, cancer, eye problems, and immune system disorders. Prednisone belongs to a class of drugs known as corticosteroids. It decreases your immune system\'s response to various diseases to reduce symptoms such as swelling and allergic-type reactions.',
			'side_effects'	=> 'Nausea, vomiting, loss of appetite, heartburn, trouble sleeping, increased sweating, or acne',
			'precautions'	=> 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: current/past infections (such as fungal infections, tuberculosis, herpes), heart problems (such as heart failure, recent heart attack), high blood pressure, thyroid problems, kidney disease, liver disease, stomach/intestinal problems (such as ulcer, diverticulitis), bone loss (osteoporosis), mental/mood disorders (such as psychosis, anxiety, depression), eye diseases (such as cataracts, glaucoma), diabetes, mineral imbalance (such as low level of potassium/calcium in the blood), seizures, blood clots, bleeding problems.',
			'interactions'	=> 'aldesleukin, mifepristone, clopidogrel, warfarin, dabigatran, aspirin, celecoxib, ibuprofen',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center.',
			'image_name'	=> 'prednisone.jpg'
		));

		MedicationList::create(array(
			'id'				=> 15,
			'name'			=> 'Prilosec',
			'dosage'		=> '2.5 mg',
			'warnings'		=> 'N/A',
			'uses'			=> 'Omeprazole is used to treat certain stomach and esophagus problems (such as acid reflux, ulcers). It works by decreasing the amount of acid your stomach makes. It relieves symptoms such as heartburn, difficulty swallowing, and persistent cough. This medication helps heal acid damage to the stomach and esophagus, helps prevent ulcers, and may help prevent cancer of the esophagus. Omeprazole belongs to a class of drugs known as proton pump inhibitors (PPIs).',
			'side_effects'	=> 'Headache or abdominal pain',
			'precautions'	=> 'Some symptoms may actually be signs of a more serious condition. Tell your doctor immediately if you have: heartburn with lightheadedness/sweating/dizziness, chest pain or shoulder pain (especially with trouble breathing, sweating, lightheadedness, pain spreading to arms/jaw/neck/shoulders), unexplained weight loss.',
			'interactions'	=> 'cilostazol, clopidogrel, methotrexate, rifampin, warfarin',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: confusion, unusual sweating, blurred vision, unusually fast heartbeat.',
			'image_name'	=> 'prilosec.jpg'
		));

		MedicationList::create(array(
			'name'			=> 'Prozac',
			'dosage'		=> '60 mg',
			'warnings'		=> 'Antidepressant medications are used to treat a variety of conditions, including depression and other mental/mood disorders. These medications can help prevent suicidal thoughts/attempts and provide other important benefits. However, studies have shown that a small number of people (especially people younger than 25) who take antidepressants for any condition may experience worsening depression, other mental/mood symptoms, or suicidal thoughts/attempts. Therefore, it is very important to talk with the doctor about the risks and benefits of antidepressant medication (especially for people younger than 25), even if treatment is not for a mental/mood condition.',
			'uses'			=> 'Fluoxetine is used to treat depression, panic attacks, obsessive compulsive disorder, a certain eating disorder (bulimia), and a severe form of premenstrual syndrome (premenstrual dysphoric disorder).',
			'side_effects'	=> 'Nausea, drowsiness, dizziness, anxiety, trouble sleeping, loss of appetite, tiredness, sweating, or yawning',
			'precautions'	=> 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: personal or family history of bipolar/manic-depressive disorder, personal or family history of suicide attempts, liver problems, diabetes, low sodium in the blood (such as may occur while taking "water pills" - diuretics), severe loss of body water (dehydration), seizures, stomach/intestinal ulcers, glaucoma.',
			'interactions'	=> 'carbamazepine, vinblastine, propafenone, flecainide, desipramine, imipramine, clopidogrel, ibuprofen, warfarin.',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe dizziness, fainting.',
			'image_name'	=> 'prozac.jpg'
		));

		MedicationList::create(array(
			'name'			=> 'Seroquel',
			'dosage'		=> '20 mg',
			'warnings'		=> 'There may be a slightly increased risk of serious, possibly fatal side effects (such as stroke, heart failure, fast/irregular heartbeat, pneumonia) when this medication is used by older adults with dementia. This medication is not approved for the treatment of dementia-related behavior problems. Discuss the risks and benefits of this medication, as well as other effective and possibly safer treatments for dementia-related behavior problems, with the doctor.',
			'uses'			=> 'This medication is used to treat certain mental/mood conditions (such as schizophrenia, bipolar disorder, sudden episodes of mania or depression associated with bipolar disorder). Quetiapine is known as an anti-psychotic drug (atypical type). It works by helping to restore the balance of certain natural substances (neurotransmitters) in the brain.',
			'side_effects'	=> 'Constipation, drowsiness, upset stomach, tiredness, weight gain, blurred vision, or dry mouth',
			'precautions'	=> 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: eye cataracts, liver disease, low white blood cell count (including history of low white blood cell count caused by medications), seizure disorder, trouble swallowing, thyroid problems, stomach/intestinal blockage (such as severe constipation, bowel obstruction), stomach/intestines that are not moving (such as ileus).',
			'interactions'	=> 'amiodarone, moxifloxacin, procainamide, quinidine, sotalol, thioridazine',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe drowsiness, loss of consciousness.',
			'image_name'	=> 'seroquel.jpg'
		));

		MedicationList::create(array(
			'name'			=> 'Synthroid',
			'dosage'		=> '25 mcg',
			'warnings'		=> 'This medication should not be used for weight loss. Normal doses of this medication will not work for weight loss, and large doses of this medication may cause serious, possibly fatal side effects, especially when taken with diet pills.',
			'uses'			=> 'Levothyroxine is used to treat an underactive thyroid (hypothyroidism). It replaces or provides more thyroid hormone, which is normally produced by the thyroid gland. Low thyroid hormone levels can occur naturally or when the thyroid gland is injured by radiation/medications or removed by surgery. Having enough thyroid hormone is important for maintaining normal mental and physical activity. In children, having enough thyroid hormone is important for normal mental and physical development.',
			'side_effects'	=> 'Hair loss may occur during the first few months of treatment. This effect is usually temporary as your body adjusts to this medication. If this effect persists or worsens, tell your doctor or pharmacist promptly.',
			'precautions'	=> 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: increased thyroid hormones (thyrotoxicosis), decreased adrenal gland function, heart disease (such as coronary artery disease, irregular heartbeat), high blood pressure, diabetes.',
			'interactions'	=> 'digoxin, theophylline, warfarin',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: fast/pounding/irregular heartbeat, loss of consciousness, confusion, seizures.',
			'image_name'	=> 'synthroid.jpg'
		));

		MedicationList::create(array(
			'name'			=> 'Tramadol',
			'dosage'		=> '50 mg',
			'warnings'		=> 'N/A',
			'uses'			=> 'This medication is used to help relieve moderate to moderately severe pain. Tramadol is similar to narcotic analgesics. It works in the brain to change how your body feels and responds to pain.',
			'side_effects'	=> 'Nausea, vomiting, constipation, lightheadedness, dizziness, drowsiness, or headache',
			'precautions'	=> 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: brain disorders (such as head injury, tumor, seizures), breathing problems (such as asthma, sleep apnea, chronic obstructive pulmonary disease-COPD), kidney disease, liver disease, mental/mood disorders (such as confusion, depression, suicidal thoughts), personal or family history of regular use/abuse of drugs/alcohol, stomach/intestinal problems (such as blockage, constipation, diarrhea due to infection, paralytic ileus), difficulty urinating (such as due to enlarged prostate), gallbladder disease, disease of the pancreas (pancreatitis).',
			'interactions'	=> 'pentazocine, nalbuphine, butorphanol, naltrexone',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: slow breathing, slow/irregular heartbeat, loss of consciousness, seizure.',
			'image_name'	=> 'tramadol.jpg'
		));

		MedicationList::create(array(
			'name'			=> 'Trazodone',
			'dosage'		=> '50 mg',
			'warnings'		=> 'Antidepressant medications are used to treat a variety of conditions, including depression and other mental/mood disorders. These medications can help prevent suicidal thoughts/attempts and provide other important benefits. However, studies have shown that a small number of people (especially people younger than 25) who take antidepressants for any condition may experience worsening depression, other mental/mood symptoms, or suicidal thoughts/attempts. Therefore, it is very important to talk with the doctor about the risks and benefits of antidepressant medication (especially for people younger than 25), even if treatment is not for a mental/mood condition.',
			'uses'			=> 'This medication is used to treat depression. It may help to improve your mood, appetite, and energy level as well as decrease anxiety and insomnia related to depression. Trazodone works by helping to restore the balance of a certain natural chemical (serotonin) in the brain.',
			'side_effects'	=> 'Nausea, vomiting, diarrhea, drowsiness, dizziness, tiredness, blurred vision, changes in weight, headache, muscle ache/pain, dry mouth, bad taste in the mouth, stuffy nose, constipation, or change in sexual interest/ability',
			'precautions'	=> 'This medication should not be used if you have certain medical conditions. Before using this medicine, consult your doctor or pharmacist if you have: history of priapism from taking trazodone, recent heart attack.',
			'interactions'	=> 'amitriptyline, nefazodone, digoxin, ketoconazole, itraconazole, atazanavir, indinavir, ritonavir',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: painful/prolonged erection, slow/rapid/irregular heartbeat, unusual drowsiness, unusual dizziness, vomiting, trouble breathing, seizures.',
			'image_name'	=> 'trazodone.jpg'
		));

		MedicationList::create(array(
			'name'			=> 'Vicodin',
			'dosage'		=> '300 mg',
			'warnings'		=> 'One ingredient in this product is acetaminophen. Taking too much acetaminophen may cause serious (possibly fatal) liver disease. Adults should not take more than 4000 milligrams (4 grams) of acetaminophen a day. If you have liver problems, consult your doctor or pharmacist for a safe dosage of this medication. Daily use of alcohol, especially when combined with acetaminophen, may increase your risk for liver damage. Avoid alcohol. Check with your doctor or pharmacist for more information. Get medical help right away if you have any symptoms of liver damage, including: dark urine, persistent nausea/vomiting, stomach/abdominal pain, extreme tiredness, or yellowing eyes/skin.',
			'uses'			=> 'This combination medication is used to relieve moderate to severe pain. It contains a narcotic pain reliever (hydrocodone) and a non-narcotic pain reliever (acetaminophen). Hydrocodone works in the brain to change how your body feels and responds to pain. Acetaminophen can also reduce a fever.',
			'side_effects'	=> 'Nausea, vomiting, constipation, lightheadedness, dizziness, or drowsiness',
			'precautions'	=> 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: brain disorders (such as head injury, tumor, seizures), breathing problems (such as asthma, sleep apnea, chronic obstructive pulmonary disease-COPD), kidney disease, liver disease, mental/mood disorders (such as confusion, depression), personal or family history of regular use/abuse of drugs/alcohol, stomach/intestinal problems (such as blockage, constipation, diarrhea due to infection, paralytic ileus), difficulty urinating (such as due to enlarged prostate), gallbladder disease, disease of the pancreas (pancreatitis).',
			'interactions'	=> 'pentazocine, nalbuphine, butorphanol, ketoconazole, naltrexone, isocarboxazid, linezolid, methylene blue, moclobemide, phenelzine, procarbazine, rasagiline, selegiline, tranylcypromine',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: nausea, vomiting, unusual sweating, slow breathing, slow heartbeat, loss of consciousness.',
			'image_name'	=> 'vicodin.jpg'
		));

		MedicationList::create(array(
			'name'			=> 'Welbutrin',
			'dosage'		=> '150 mg',
			'warnings'		=> 'Bupropion is an antidepressant used for smoking cessation and to treat a variety of conditions, including depression and other mental/mood disorders. Antidepressants can help prevent suicidal thoughts/attempts and provide other important benefits. However, a small number of people (especially people younger than 25) who take antidepressants for any condition may experience new or worsening depression, other mental/mood symptoms, or suicidal thoughts/attempts. Therefore, it is very important to talk with the doctor about the risks and benefits of antidepressant medication, even if treatment is not for a mental/mood condition.',
			'uses'			=> 'This medication is used to treat depression. It may also be used to prevent seasonal affective disorder (SAD), a type of depression that occurs each year at the same time (for example, during winter). This medication can improve your mood and feelings of well-being. It may work by restoring the balance of certain natural substances (dopamine, norepinephrine) in the brain.',
			'side_effects'	=> 'Dry mouth, sore throat, dizziness, nausea, vomiting, ringing in the ears, headache, decreased appetite, weight loss, constipation, trouble sleeping, increased sweating, or shaking (tremor)',
			'precautions'	=> 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: diabetes, heart disease, high blood pressure, kidney problems, liver disease, use/abuse of drugs/alcohol, seizures or conditions that increase your risk of seizures (including brain/head injury, brain tumor, eating disorders such as bulimia/anorexia nervosa, withdrawal treatment for alcohol/sedative drug dependence).',
			'interactions'	=> 'pimozide, isocarboxazid, linezolid, methylene blue, moclobemide, phenelzine, procarbazine, rasagiline, selegiline, tranylcypromine',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: seizures, severe confusion, hallucinations, rapid heart rate, loss of consciousness.',
			'image_name'	=> 'welbutrin.jpg'
		));

		MedicationList::create(array(
			'name'			=> 'Xanax',
			'dosage'		=> '0.25 mg',
			'warnings'		=> 'N/A',
			'uses'			=> 'Alprazolam is used to treat anxiety and panic disorders. It belongs to a class of medications called benzodiazepines which act on the brain and nerves (central nervous system) to produce a calming effect. It works by enhancing the effects of a certain natural chemical in the body (GABA).',
			'side_effects'	=> 'Drowsiness, dizziness, increased saliva production, or change in sex drive/ability',
			'precautions'	=> 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: severe lung/breathing problems (such as COPD, sleep apnea), liver disease, kidney disease, drug or alcohol abuse, glaucoma.',
			'interactions'	=> 'kava, sodium oxybate, itraconazole, ketoconazole, cimetidine, fluoxetine, fluvoxamine, nefazodone, delavirdine, indinavir, erythromycin, rifabutin, St. John\'s wort, carbamazepine, phenytoin',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe drowsiness, slowed/reduced reflexes, slowed breathing, loss of consciousness.',
			'image_name'	=> 'xanax.jpg'
		));

		MedicationList::create(array(
			'name'			=> 'Zocor',
			'dosage'		=> '10 mg',
			'warnings'		=> 'N/A',
			'uses'			=> 'Simvastatin is used along with a proper diet to help lower "bad" cholesterol and fats (such as LDL, triglycerides) and raise "good" cholesterol (HDL) in the blood. It belongs to a group of drugs known as "statins." It works by reducing the amount of cholesterol made by the liver. Lowering "bad" cholesterol and triglycerides and raising "good" cholesterol decreases the risk of heart disease and helps prevent strokes and heart attacks.',
			'side_effects'	=> 'This medication may rarely cause liver problems. If you notice any of the following rare but serious side effects, tell your doctor immediately: yellowing eyes/skin, dark urine, severe stomach/abdominal pain, persistent nausea/vomiting.',
			'precautions'	=> 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: liver disease, kidney disease, alcohol use.',
			'interactions'	=> 'warfarin, cyclosporine, danazol, gemfibrozil',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center.',
			'image_name'	=> 'zocor.jpg'
		));

		MedicationList::create(array(
			'name'			=> 'Zoloft',
			'dosage'		=> '25 mg',
			'warnings'		=> 'Antidepressant medications are used to treat a variety of conditions, including depression and other mental/mood disorders. These medications can help prevent suicidal thoughts/attempts and provide other important benefits. However, a small number of people (especially people younger than 25) who take antidepressants for any condition may experience worsening depression, other mental/mood symptoms, or suicidal thoughts/attempts. Therefore, it is very important to talk with the doctor about the risks and benefits of antidepressant medication (especially for people younger than 25), even if treatment is not for a mental/mood condition.',
			'uses'			=> 'Sertraline is used to treat depression, panic attacks, obsessive compulsive disorder, post-traumatic stress disorder, social anxiety disorder (social phobia), and a severe form of premenstrual syndrome (premenstrual dysphoric disorder).',
			'side_effects'	=> 'Nausea, dizziness, drowsiness, dry mouth, loss of appetite, increased sweating, diarrhea, upset stomach, or trouble sleeping',
			'precautions'	=> 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: bleeding problems, liver disease, seizure disorder, thyroid disease.',
			'interactions'	=> 'pimozide, clopidogrel, ibuprofen, warfarin',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe dizziness, fainting.',
			'image_name'	=> 'zoloft.jpg'
		));
	}
}