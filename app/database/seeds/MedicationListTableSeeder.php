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
				'fast breathing.'
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
				'Canada residents can call a provincial poison control center.'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center.'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe drowsiness, fainting.'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: fast/irregular heartbeat, fainting, severe drowsiness, slurred speech, seizures, mental/mood changes (such as confusion, hallucinations).'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: nausea, vomiting, unusual sweating, slow breathing, slow heartbeat, loss of consciousness.'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center.'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe dizziness, fainting.'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center.'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe dizziness, weakness, fainting.'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: slow/shallow breathing, extreme drowsiness, severe stomach pain, vomit that looks like coffee grounds.'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe stomach pain, extreme drowsiness, seizures.'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe drowsiness, slurred speech, weakness.'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center.'
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
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: confusion, unusual sweating, blurred vision, unusually fast heartbeat.'
		));

		// MedicationList::create(array(
		// 	'name'			=> '',
		// 	'dosage'		=> '',
		// 	'warnings'		=> '',
		// 	'uses'			=> '',
		// 	'side_effects'	=> '',
		// 	'precautions'	=> '',
		// 	'interactions'	=> '',
		// 	'overdose'		=> ''
		// ));

		// MedicationList::create(array(
		// 	'name'			=> '',
		// 	'dosage'		=> '',
		// 	'warnings'		=> '',
		// 	'uses'			=> '',
		// 	'side_effects'	=> '',
		// 	'precautions'	=> '',
		// 	'interactions'	=> '',
		// 	'overdose'		=> ''
		// ));

		// MedicationList::create(array(
		// 	'name'			=> '',
		// 	'dosage'		=> '',
		// 	'warnings'		=> '',
		// 	'uses'			=> '',
		// 	'side_effects'	=> '',
		// 	'precautions'	=> '',
		// 	'interactions'	=> '',
		// 	'overdose'		=> ''
		// ));

		// MedicationList::create(array(
		// 	'name'			=> '',
		// 	'dosage'		=> '',
		// 	'warnings'		=> '',
		// 	'uses'			=> '',
		// 	'side_effects'	=> '',
		// 	'precautions'	=> '',
		// 	'interactions'	=> '',
		// 	'overdose'		=> ''
		// ));

		// MedicationList::create(array(
		// 	'name'			=> '',
		// 	'dosage'		=> '',
		// 	'warnings'		=> '',
		// 	'uses'			=> '',
		// 	'side_effects'	=> '',
		// 	'precautions'	=> '',
		// 	'interactions'	=> '',
		// 	'overdose'		=> ''
		// ));

		// MedicationList::create(array(
		// 	'name'			=> '',
		// 	'dosage'		=> '',
		// 	'warnings'		=> '',
		// 	'uses'			=> '',
		// 	'side_effects'	=> '',
		// 	'precautions'	=> '',
		// 	'interactions'	=> '',
		// 	'overdose'		=> ''
		// ));

		// MedicationList::create(array(
		// 	'name'			=> '',
		// 	'dosage'		=> '',
		// 	'warnings'		=> '',
		// 	'uses'			=> '',
		// 	'side_effects'	=> '',
		// 	'precautions'	=> '',
		// 	'interactions'	=> '',
		// 	'overdose'		=> ''
		// ));

		// MedicationList::create(array(
		// 	'name'			=> '',
		// 	'dosage'		=> '',
		// 	'warnings'		=> '',
		// 	'uses'			=> '',
		// 	'side_effects'	=> '',
		// 	'precautions'	=> '',
		// 	'interactions'	=> '',
		// 	'overdose'		=> ''
		// ));

		// MedicationList::create(array(
		// 	'name'			=> '',
		// 	'dosage'		=> '',
		// 	'warnings'		=> '',
		// 	'uses'			=> '',
		// 	'side_effects'	=> '',
		// 	'precautions'	=> '',
		// 	'interactions'	=> '',
		// 	'overdose'		=> ''
		// ));

		// MedicationList::create(array(
		// 	'name'			=> '',
		// 	'dosage'		=> '',
		// 	'warnings'		=> '',
		// 	'uses'			=> '',
		// 	'side_effects'	=> '',
		// 	'precautions'	=> '',
		// 	'interactions'	=> '',
		// 	'overdose'		=> ''
		// ));
	}
}