<?php

class MedicationListTableSeeder extends Seeder {

	public function run()
	{
		DB::table('medication_list')->delete();

		MedicationList::create(array(
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
			'name'			=> 'Cymbalta',
			'dosage'		=> '20 mg',
			'warnings'		=> 'Antidepressant medications are used to treat a variety of conditions, including depression and other mental/mood disorders. These medications can help prevent suicidal thoughts/attempts and provide other important benefits. However, a small number of people (especially people younger than 25) who take antidepressants for any condition may experience worsening depression, other mental/mood symptoms, or suicidal thoughts/attempts. Therefore, it is very important to talk with the doctor about the risks and benefits of antidepressant medication (especially for people younger than 25), even if treatment is not for a mental/mood condition.',
			'uses'			=> 'Duloxetine is used to treat depression and anxiety. In addition, duloxetine is used to help relieve nerve pain (peripheral neuropathy) in people with diabetes or ongoing pain due to medical conditions such as arthritis, chronic back pain, or fibromyalgia (a condition that causes widespread pain).',
			'side_effects'	=> 'Nausea, dry mouth, constipation, loss of appetite, tiredness, drowsiness, or increased sweating',
			'precautions'	=> 'Before taking duloxetine, tell your doctor or pharmacist if you are allergic to it; or if you have any other allergies. This product may contain inactive ingredients, which can cause allergic reactions or other problems. Talk to your pharmacist for more details.',
			'interactions'	=> 'clopidogrel, ibuprofen, warfarin, cimetidine, ciprofloxacin, enoxacin',
			'overdose'		=> 'If overdose is suspected, contact a poison control center or emergency room immediately. US residents can call their local poison control center at 1-800-222-1222. Canada residents can call a provincial poison control center. Symptoms of overdose may include: severe drowsiness, fainting.'
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