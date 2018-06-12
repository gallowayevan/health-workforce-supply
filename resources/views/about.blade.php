@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/main.css">
@endsection

@section('content')
<div class="row u-full-width">
  <h3>About the HPDS</h3>
  <p>The North Carolina Health Professions Data System (HPDS) collects and disseminates descriptive data on selected licensed health professionals in North Carolina.  With annual files dating back to 1979, the HPDS is the oldest continuous state health workforce data system in the country.</p><p>The HPDS is maintained by the Program on Health Workforce Research and Policy at the Cecil G. Sheps Center for Health Services Research at the University of North Carolina at Chapel Hill, in collaboration with the North Carolina Area Health Education Centers Program (AHEC), and the state’s independent health professional licensing boards. Ongoing financial support is provided by the NC AHEC Program Office and the Office of the Provost at the University of North Carolina at Chapel Hill.  Although the NC HPDS maintains the data system, the data remain the property of their respective licensing board.
</p>
<p>
  Data include active, licensed health professionals practicing in North Carolina as of October 31 of each data year.  County counts are based on primary practice location.  Some providers may practice in additional locations not shown in primary practice location counts.
</p>
  </div>
  <div class="row u-full-width">
  <h5>Note on Underrepresented Minorities</h5>
<p>Underrepresented minorities include health professionals that self-identify as African-American/Black, American Indian or Alaskan Native, and/or Hispanic.  Health professionals that self-identify as Asian are not included in this category.  Both state<sup>1</sup> and national<sup>2</sup> data have shown that compared to the general population, Asians tend to be more represented in many (although not all) health professions, particularly those requiring a doctoral degree.</p>
<ol>
  <li>Spero JC. Does North Carolina’s health care workforce reflect the diversity of the state’s population? NC Med J. 2016; 77(2):141-145.</li>
  <li>U.S. Department of Health and Human Services, Health Resources and Services Administration, National Center for Health Workforce Analysis. Sex, Race, and Ethnic Diversity of U.S. Health Occupations (2010-2012), Rockville, Maryland; 2015.</li>
</ol>
</div>
<div class="row u-full-width">
<h5>HPDS Physician and Physician Assistant Primary Area of Practice Information</h5>
<h6><strong>What is a Primary Area of Practice?</strong></h6>
<p>The NCMB annual licensure/reregistration forms request self-selected primary area of practice, defined as “<em>What you primarily do as a physician</em>.”  The forms note that “Primary area of practice may correspond to an ABMS/AOA certification or a generally recognized area of work, such as ‘hospitalist’ or ‘administrative medicine.’”</p>
<h6><strong>Why doesn’t the data visualization tool have Primary Area of Practice data prior to 2011?</strong></h6>
<p>The NCMB began to collect data on physician and PA primary area of practice in 2011.  Data on primary area of practice are not available prior to 2011.</p>
<h6><strong>How are Primary Areas of Practice grouped in the data visualization tool?</strong></h6>
<p>The HPDS area of practice categories used in the data visualization tool group physicians and PAs <strong>by what they primarily <span style="text-decoration: underline;">do</span>, <em>not</em> by how they trained.</strong>  For example, adolescent medicine is categorized as general pediatrics, no matter whether the branch specialty was pediatrics, family medicine, or internal medicine.</p>
<p>The “Primary Care Physician” and “Generalist Physician” groups include counts of physicians from multiple areas of practice are not exclusive groups.  For example, a physician who selects a primary area of practice of “pediatrics” is included in the Primary Care Physician, Generalist Physician, and General Pediatrics groups.  General Pediatrics is an exclusive group, meaning that the physician is excluded from all other area of practice groups.</p>
<h6><strong>HPDS Primary Area of Practice Categories</strong></h6>
<table>
<thead><tr>
<th>HPDS Physician Group</th>
<th>Primary Areas of Practice Included</th>
</tr></thead>
<tbody>
<tr class="physician-group-row">
<td class="physician-group">Primary Care Physician</td>
<td></td>
</tr><tr><td>(not exclusive category)</td><td>Adolescent Medicine (FM)</td></tr>
<tr>
<td></td>
<td>Adolescent Medicine (IM)</td>
</tr>
<tr>
<td> </td>
<td>Adolescent Medicine (Peds)</td>
</tr>
<tr>
<td> </td>
<td>Family Medicine</td>
</tr>
<tr>
<td> </td>
<td>General Practice</td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine</td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine-Pediatrics</td>
</tr>
<tr>
<td> </td>
<td>Obstetrics/Gynecology</td>
</tr>
<tr>
<td> </td>
<td>Pediatrics</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Generalist Physician</td>
<td></td>
</tr><tr><td>(not exclusive category)</td><td>Family Medicine</td></tr>
<tr>
<td></td>
<td>Adolescent Medicine (FM)</td>
</tr>
<tr>
<td> </td>
<td>Adolescent Medicine (IM)</td>
</tr>
<tr>
<td> </td>
<td>Adolescent Medicine (Peds)</td>
</tr>
<tr>
<td> </td>
<td>General Practice</td>
</tr>
<tr>
<td> </td>
<td>Hospitalist</td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine</td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine-Pediatrics</td>
</tr>
<tr>
<td> </td>
<td>Obstetrics/Gynecology</td>
</tr>
<tr>
<td> </td>
<td>Osteopathic Manipulative Medicine</td>
</tr>
<tr>
<td> </td>
<td>Pediatrics</td>
</tr>
<tr>
<td> </td>
<td>Urgent Care Medicine</td>
</tr>
<tr>
<td> </td>
<td>Geriatric Medicine (FM)</td>
</tr>
<tr>
<td> </td>
<td>Critical Care Medicine (Internal Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine – Family Medicine</td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine – Geriatrics</td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine - Geriatrics</td>
</tr>
<tr>
<td> </td>
<td>Medicine-OBGYN </td>
</tr>
<tr>
<td> </td>
<td>Integrative Medicine </td>
</tr>
<tr>
<td> </td>
<td>Student Health  </td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Family Medicine</td>
<td></td>
</tr><tr><td></td><td>Family Medicine, Family Practice</td></tr>
<tr>
<td> </td>
<td>General Practice</td>
</tr>
<tr>
<td> </td>
<td>Osteopathic Manipulative Medicine</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">General Internal Medicine</td>
<td></td>
</tr><tr><td></td><td>Internal Medicine</td></tr>
<tr>
<td> </td>
<td>Internal Medicine – Family Medicine</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">General Pediatrics</td>
<td></td>
</tr><tr><td></td><td>Pediatrics</td></tr>
<tr>
<td> </td>
<td>Adolescent Medicine (FM)</td>
</tr>
<tr>
<td> </td>
<td>Adolescent Medicine (IM)</td>
</tr>
<tr>
<td> </td>
<td>Adolescent Medicine (Peds)</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">IM-Peds</td>
<td></td>
</tr><tr><td></td><td>Internal Medicine-Pediatrics</td></tr>
<tr class="physician-group-row">
<td class="physician-group">General Obstetrics &amp; Gynecology</td>
<td></td>
</tr><tr><td></td><td>Obstetrics and Gynecology</td></tr>
<tr>
<td> </td>
<td>Gynecology</td>
</tr>
<tr>
<td> </td>
<td>Obstetrics</td>
</tr>
<tr>
<td> </td>
<td>Medicine-OBGYN </td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">General Psychiatry</td>
<td></td>
</tr><tr><td></td><td>Psychiatry</td></tr>
<tr>
<td> </td>
<td>Forensic Psychiatry</td>
</tr>
<tr>
<td> </td>
<td>Geriatric Psychiatry</td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine - Psychiatry</td>
</tr>
<tr>
<td> </td>
<td>Psychiatry - Family Practice</td>
</tr>
<tr>
<td> </td>
<td>Psychoanalysis</td>
</tr>
<tr>
<td> </td>
<td>Psychosomatic Medicine</td>
</tr>
<tr>
<td> </td>
<td>Hypnosis </td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">General Surgery</td>
<td></td>
</tr><tr><td></td><td>General Surgery</td></tr>
<tr>
<td> </td>
<td>Abdominal Surgery</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Geriatrics</td>
<td></td>
</tr><tr><td></td><td>Geriatric Medicine (FM)</td></tr>
<tr>
<td> </td>
<td>Internal Medicine - Geriatrics</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Administrative Medicine </td>
<td></td>
</tr><tr><td></td><td>Legal Medicine</td></tr>
<tr>
<td> </td>
<td>Medical Management</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Allergy &amp; Immunology</td>
<td></td>
</tr><tr><td></td><td>Allergy</td></tr>
<tr>
<td> </td>
<td>Allergy and Immunology</td>
</tr>
<tr>
<td> </td>
<td>Immunology</td>
</tr>
<tr>
<td> </td>
<td>Clinical and Laboratory Immunology (Allergy &amp; Immunology)</td>
</tr>
<tr>
<td> </td>
<td>Clinical and Laboratory Immunology (Internal Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Clinical and Laboratory Immunology (Pediatrics)</td>
</tr>
<tr>
<td> </td>
<td>Clinical and Laboratory Dermatological Immunology</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Anesthesiology</td>
<td></td>
</tr><tr><td></td><td>Anesthesiology</td></tr>
<tr>
<td> </td>
<td>Adult Cardiothoracic Anesthesiology (Anesthesiology)</td>
</tr>
<tr>
<td> </td>
<td>Critical Care Medicine - Anesthesiology</td>
</tr>
<tr>
<td> </td>
<td>Obstetric Anesthesiology (Anesthesiology)</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Anesthesiology (Anesthesiology)</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Cardiology</td>
<td></td>
</tr><tr><td></td><td>Cardiovascular Disease</td></tr>
<tr>
<td> </td>
<td>Advanced Heart Failure and Transplant Cardiology</td>
</tr>
<tr>
<td> </td>
<td>Clinical Cardiac Electrophysiology</td>
</tr>
<tr>
<td> </td>
<td>Interventional Cardiology</td>
</tr>
<tr>
<td> </td>
<td>Vascular Medicine</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">General Critical Care Medicine</td>
<td></td>
</tr><tr><td></td><td>Critical Care Medicine (Internal Medicine)</td></tr>
<tr class="physician-group-row">
<td class="physician-group">Dermatology</td>
<td></td>
</tr><tr><td></td><td>Dermatology</td></tr>
<tr>
<td> </td>
<td>Dermatologic Surgery</td>
</tr>
<tr>
<td> </td>
<td>MOHS Micrographic Surgery </td>
</tr>
<tr>
<td> </td>
<td>Micrographic Surgery </td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine - Dermatology</td>
</tr>
<tr>
<td> </td>
<td>Procedural Dermatology</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Emergency Medicine</td>
<td></td>
</tr><tr><td></td><td>Emergency Medicine</td></tr>
<tr>
<td> </td>
<td>Critical Care Medicine (Emergency Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Emergency Medical Services</td>
</tr>
<tr>
<td> </td>
<td>Emergency Medicine/Family Medicine</td>
</tr>
<tr>
<td> </td>
<td>Internal Med/Emergency Med/Critical Care Med</td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine - Emergency Medicine</td>
</tr>
<tr>
<td> </td>
<td>Medical Toxicology (Emergency Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Sports Medicine (Emergency Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Undersea and Hyperbaric Medicine (Emergency Medicine)</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Endocrinology</td>
<td></td>
</tr><tr><td></td><td>Endocrinology, Diabetes &amp; Metabolism</td></tr>
<tr>
<td> </td>
<td>Diabetes</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Gastroenterology</td>
<td></td>
</tr><tr><td></td><td>Gastroenterology</td></tr>
<tr>
<td> </td>
<td>Hepatology</td>
</tr>
<tr>
<td> </td>
<td>Transplant Hepatology (Internal Medicine)</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Specialty General Surgery</td>
<td></td>
</tr><tr><td></td><td>Colon and Rectal Surgery</td></tr>
<tr>
<td> </td>
<td>Proctology</td>
</tr>
<tr>
<td> </td>
<td>Surgical Critical Care (Surgery)</td>
</tr>
<tr>
<td> </td>
<td>Transplant Surgery</td>
</tr>
<tr>
<td> </td>
<td>Trauma Surgery</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Infectious Disease</td>
<td></td>
</tr><tr><td></td><td>Infectious Disease</td></tr>
<tr class="physician-group-row">
<td class="physician-group">Hematology/Oncology</td>
<td></td>
</tr><tr><td></td><td>Hematology/Oncology</td></tr>
<tr>
<td> </td>
<td>Hematology </td>
</tr>
<tr>
<td> </td>
<td>Hematology (Internal Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Hematology (Pathology)</td>
</tr>
<tr>
<td> </td>
<td>Oncology </td>
</tr>
<tr>
<td> </td>
<td>Medical Oncology</td>
</tr>
<tr>
<td> </td>
<td>Neoplastic Disease </td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Hospice and Palliative Medicine</td>
<td></td>
</tr><tr><td></td><td>Hospice and Palliative Medicine</td></tr>
<tr>
<td> </td>
<td>Hospice &amp; Palliative Care (OBGYN)</td>
</tr>
<tr>
<td> </td>
<td>Hospice &amp; Palliative Medicine (Anesthesiology)</td>
</tr>
<tr>
<td> </td>
<td>Hospice &amp; Palliative Medicine (Emergency Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Hospice &amp; Palliative Medicine (Family Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Hospice &amp; Palliative Medicine (Physical Medicine &amp; Rehabilitation)</td>
</tr>
<tr>
<td> </td>
<td>Hospice &amp; Palliative Medicine (Psychiatry &amp; Neurology)</td>
</tr>
<tr>
<td> </td>
<td>Hospice &amp; Palliative Medicine (Radiology)</td>
</tr>
<tr>
<td> </td>
<td>Hospice &amp; Palliative Medicine (Surgery)</td>
</tr>
<tr>
<td> </td>
<td>Hospice and Palliative Medicine (Internal Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Palliative Medicine</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Hospitalist</td>
<td></td>
</tr><tr><td></td><td>Hospitalist</td></tr>
<tr class="physician-group-row">
<td class="physician-group">Nephrology</td>
<td></td>
</tr><tr><td></td><td>Nephrology</td></tr>
<tr class="physician-group-row">
<td class="physician-group">Neurology</td>
<td></td>
</tr><tr><td></td><td>Neurology</td></tr>
<tr>
<td> </td>
<td>Brain Injury Medicine (Neurology)</td>
</tr>
<tr>
<td> </td>
<td>Brain Injury Medicine (Physical Medicine &amp; Rehabilitation)</td>
</tr>
<tr>
<td> </td>
<td>Clinical Neurophysiology</td>
</tr>
<tr>
<td> </td>
<td>Epilepsy </td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine - Neurology</td>
</tr>
<tr>
<td> </td>
<td>Movement Disorders </td>
</tr>
<tr>
<td> </td>
<td>Neurodevelopmental Disabilities (Psychiatry &amp; Neurology)</td>
</tr>
<tr>
<td> </td>
<td>Neurology (Physical Medicine and Rehabilitation)</td>
</tr>
<tr>
<td> </td>
<td>Neurology/Nuclear Medicine</td>
</tr>
<tr>
<td> </td>
<td>Neurology/Physical Medicine &amp; Rehabilitation</td>
</tr>
<tr>
<td> </td>
<td>Neuromuscular Medicine (Neurology)</td>
</tr>
<tr>
<td> </td>
<td>Neuromuscular Medicine (Physical Medicine &amp; Rehabilitation)</td>
</tr>
<tr>
<td> </td>
<td>Spinal Cord Injury/ Physical Medicine and Rehab </td>
</tr>
<tr>
<td> </td>
<td>Electrodiagnostics </td>
</tr>
<tr>
<td> </td>
<td>Neuropathology</td>
</tr>
<tr>
<td> </td>
<td>Neuropsychiatry</td>
</tr>
<tr>
<td> </td>
<td>Psychiatry - Neurology</td>
</tr>
<tr>
<td> </td>
<td>Vascular Neurology</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Neurological Surgery</td>
<td></td>
</tr><tr><td></td><td>Neurological Surgery</td></tr>
<tr>
<td> </td>
<td>Endovascular Surgical Neuroradiology (Neurological Surgery)</td>
</tr>
<tr>
<td> </td>
<td>Endovascular Surgical Neuroradiology (Neurology)</td>
</tr>
<tr>
<td> </td>
<td>Endovascular Surgical Neuroradiology (Radiology)</td>
</tr>
<tr>
<td> </td>
<td>Spinal Cord Injury Medicine</td>
</tr>
<tr>
<td> </td>
<td>Neurological Critical Care </td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">OBGYN Subspecialty</td>
<td></td>
</tr><tr><td></td><td>Critical Care Medicine (OBGYN)</td></tr>
<tr>
<td> </td>
<td>Female Pelvic Medicine &amp; Reconstructive Surgery (OBGYN)*</td>
</tr>
<tr>
<td> </td>
<td>Female Pelvic Medicine &amp; Reconstructive Surgery (Urology)*</td>
</tr>
<tr>
<td> </td>
<td>Gynecological Oncology</td>
</tr>
<tr>
<td> </td>
<td>Maternal and Fetal Medicine</td>
</tr>
<tr>
<td> </td>
<td>Reproductive Endocrinology and Infertility</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Ophthalmology</td>
<td></td>
</tr><tr><td></td><td>Ophthalmology</td></tr>
<tr class="physician-group-row">
<td class="physician-group">Oral and Maxillofacial Surgery</td>
<td></td>
</tr><tr><td></td><td>Oral and Maxillofacial Surgery</td></tr>
<tr class="physician-group-row">
<td class="physician-group">Orthopedic Surgery</td>
<td></td>
</tr><tr><td></td><td>Orthopedic Surgery</td></tr>
<tr>
<td> </td>
<td>Adult Reconstructive Orthopedics</td>
</tr>
<tr>
<td> </td>
<td>Foot and Ankle Orthopedics</td>
</tr>
<tr>
<td> </td>
<td>Musculoskeletal Oncology</td>
</tr>
<tr>
<td> </td>
<td>Orthopedic Trauma</td>
</tr>
<tr>
<td> </td>
<td>Orthopedic Surgery Of The Spine</td>
</tr>
<tr>
<td> </td>
<td>Sports Medicine (Orthopedic Surgery)</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Otolaryngology</td>
<td></td>
</tr><tr><td></td><td>Otolaryngology</td></tr>
<tr>
<td> </td>
<td>Head and Neck Surgery </td>
</tr>
<tr>
<td> </td>
<td>Neurotology (Otolaryngology)</td>
</tr>
<tr>
<td> </td>
<td>Otoneurotology </td>
</tr>
<tr>
<td> </td>
<td>Otology </td>
</tr>
<tr>
<td> </td>
<td>Otorhinolaryngology </td>
</tr>
<tr>
<td> </td>
<td>Rhinology </td>
</tr>
<tr>
<td> </td>
<td>Laryngology </td>
</tr>
<tr>
<td> </td>
<td>Bronchoesophagology  </td>
</tr>
<tr>
<td> </td>
<td>Plastic Surgery Within The Head &amp; Neck (Otolaryngology)</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Pain Medicine</td>
<td></td>
</tr><tr><td></td><td>Pain Medicine</td></tr>
<tr>
<td> </td>
<td>Pain Management</td>
</tr>
<tr>
<td> </td>
<td>Pain Medicine (Anesthesiology)</td>
</tr>
<tr>
<td> </td>
<td>Pain Medicine (Neurology)</td>
</tr>
<tr>
<td> </td>
<td>Pain Medicine (Physical Medicine &amp; Rehabilitation)</td>
</tr>
<tr>
<td> </td>
<td>Pain Medicine (Psychiatry)</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Pathology</td>
<td></td>
</tr><tr><td></td><td>Anatomic/Clinical Pathology</td></tr>
<tr>
<td> </td>
<td>Anatomic Pathology</td>
</tr>
<tr>
<td> </td>
<td>Laboratory Medicine </td>
</tr>
<tr>
<td> </td>
<td>Blood Banking/Transfusion Medicine</td>
</tr>
<tr>
<td> </td>
<td>Chemical Pathology</td>
</tr>
<tr>
<td> </td>
<td>Clinical Biochemical Genetics</td>
</tr>
<tr>
<td> </td>
<td>Clinical Cytogenetics</td>
</tr>
<tr>
<td> </td>
<td>Clinical Genetics</td>
</tr>
<tr>
<td> </td>
<td>Clinical Informatics (Pathology)</td>
</tr>
<tr>
<td> </td>
<td>Clinical Molecular Genetics</td>
</tr>
<tr>
<td> </td>
<td>Clinical Pathology</td>
</tr>
<tr>
<td> </td>
<td>Cytopathology</td>
</tr>
<tr>
<td> </td>
<td>Dermatopathology (Pathology)</td>
</tr>
<tr>
<td> </td>
<td>Forensic Pathology</td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine-Medical Genetics</td>
</tr>
<tr>
<td> </td>
<td>Medical Biochemical Genetics</td>
</tr>
<tr>
<td> </td>
<td>Medical Genetics</td>
</tr>
<tr>
<td> </td>
<td>Medical Microbiology</td>
</tr>
<tr>
<td> </td>
<td>Molecular Genetic Pathology (Medical Genetics)</td>
</tr>
<tr>
<td> </td>
<td>Molecular Genetic Pathology (Pathology)</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Pathology</td>
</tr>
<tr>
<td> </td>
<td>Phlebology</td>
</tr>
<tr>
<td> </td>
<td>Radioisotopic Pathology </td>
</tr>
<tr>
<td> </td>
<td>Selective Pathology</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Pediatric Non-Surgical Specialties</td>
<td></td>
</tr><tr><td></td><td>Child Abuse Pediatrics</td></tr>
<tr>
<td> </td>
<td>Child Neurology</td>
</tr>
<tr>
<td> </td>
<td>Developmental-Behavioral Pediatrics</td>
</tr>
<tr>
<td> </td>
<td>Hospice &amp; Palliative Medicine (Pediatrics)</td>
</tr>
<tr>
<td> </td>
<td>Neonatal-Perinatal Medicine</td>
</tr>
<tr>
<td> </td>
<td>Neurodevelopmental Disabilities (Pediatrics)</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Allergy</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Cardiology</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Critical Care Medicine</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Dermatology</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Emergency Medicine (Emergency Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Emergency Medicine (Pediatrics)</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Endocrinology</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Gastroenterology</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Hematology-Oncology</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Infectious Diseases</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Medical Toxicology</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Nephrology</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Pulmonology</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Rehabilitation Medicine</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Rheumatology</td>
</tr>
<tr>
<td> </td>
<td>Pediatrics – Sports Medicine</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Transplant Hepatology</td>
</tr>
<tr>
<td> </td>
<td>Pediatrics - Medical Genetics</td>
</tr>
<tr>
<td> </td>
<td>Pediatrics/ Physical Medicine and Rehabilitation</td>
</tr>
<tr>
<td> </td>
<td>Pediatrics/Dermatology</td>
</tr>
<tr>
<td> </td>
<td>Pediatrics/Emergency Medicine </td>
</tr>
<tr>
<td> </td>
<td>Sleep Medicine (Pediatrics)</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Pediatric Psychiatry</td>
<td></td>
</tr><tr><td></td><td>Child &amp; Adolescent Psychiatry</td></tr>
<tr>
<td> </td>
<td>Pediatrics - Psychiatry</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Pediatric Surgical Specialties</td>
<td></td>
</tr><tr><td></td><td>Pediatric Cardiothoracic Surgery</td></tr>
<tr>
<td> </td>
<td>Pediatric Neurological Surgery</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Ophthalmology</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Orthopedics</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Otolaryngology</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Surgery</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Urology</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Physical Medicine &amp; Rehabilitation</td>
<td></td>
</tr><tr><td></td><td>Physical Medicine &amp; Rehabilitation</td></tr>
<tr>
<td> </td>
<td>Physiatry </td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine - Physical Medicine And Rehabilitation</td>
</tr>
<tr>
<td> </td>
<td>Sports Medicine (Physical Medicine &amp; Rehabilitation)</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Plastic Surgery</td>
<td></td>
</tr><tr><td></td><td>Plastic Surgery</td></tr>
<tr>
<td> </td>
<td>Cosmetic Surgery</td>
</tr>
<tr>
<td> </td>
<td>Craniofacial Surgery</td>
</tr>
<tr>
<td> </td>
<td>Facial Plastic Surgery</td>
</tr>
<tr>
<td> </td>
<td>Hand Surgery</td>
</tr>
<tr>
<td> </td>
<td>Hand Surgery (Orthopedics)</td>
</tr>
<tr>
<td> </td>
<td>Hand Surgery (Surgery)</td>
</tr>
<tr>
<td> </td>
<td>Hand Surgery (Plastic Surgery)</td>
</tr>
<tr>
<td> </td>
<td>Ophthalmic Plastic And Reconstructive Surgery </td>
</tr>
<tr>
<td> </td>
<td>Plastic Surgery - Integrated</td>
</tr>
<tr>
<td> </td>
<td>Plastic Surgery Within The Head &amp; Neck </td>
</tr>
<tr>
<td> </td>
<td>Plastic Surgery Within The Head &amp; Neck (Otolaryngology)</td>
</tr>
<tr>
<td> </td>
<td>Plastic Surgery Within The Head &amp; Neck (Plastic Surgery)</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Preventive Medicine</td>
<td></td>
</tr><tr><td></td><td>General Preventive Medicine</td></tr>
<tr>
<td> </td>
<td>Aerospace Medicine</td>
</tr>
<tr>
<td> </td>
<td>Clinical Informatics (Preventive Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Epidemiology</td>
</tr>
<tr>
<td> </td>
<td>Family Medicine/Preventive Medicine</td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine/Preventive Medicine</td>
</tr>
<tr>
<td> </td>
<td>Medical Toxicology (Preventive Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Nutrition</td>
</tr>
<tr>
<td> </td>
<td>Occupational Medicine</td>
</tr>
<tr>
<td> </td>
<td>Industrial Medicine </td>
</tr>
<tr>
<td> </td>
<td>Public Health and General Preventive Medicine</td>
</tr>
<tr>
<td> </td>
<td>Undersea &amp; Hyperbaric Medicine (Preventive Medicine)</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Psychiatry Addiction Specialty</td>
<td></td>
</tr><tr><td></td><td>Addiction Medicine</td></tr>
<tr>
<td> </td>
<td>Addiction Psychiatry</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Radiology</td>
<td></td>
</tr><tr><td></td><td>Radiology</td></tr>
<tr>
<td> </td>
<td>Abdominal Radiology</td>
</tr>
<tr>
<td> </td>
<td>Cardiothoracic Radiology</td>
</tr>
<tr>
<td> </td>
<td>Diagnostic Radiology</td>
</tr>
<tr>
<td> </td>
<td>Body Imaging </td>
</tr>
<tr>
<td> </td>
<td>Diagnostic Ultrasound </td>
</tr>
<tr>
<td> </td>
<td>Diagnostic Roentgenology </td>
</tr>
<tr>
<td> </td>
<td>Internal Medicine/Nuclear Medicine</td>
</tr>
<tr>
<td> </td>
<td>Musculoskeletal Radiology</td>
</tr>
<tr>
<td> </td>
<td>Neuroradiology</td>
</tr>
<tr>
<td> </td>
<td>Neurology/Diagnostic Radiology/Neuroradiology</td>
</tr>
<tr>
<td> </td>
<td>Nuclear Cardiology</td>
</tr>
<tr>
<td> </td>
<td>Nuclear Medicine</td>
</tr>
<tr>
<td> </td>
<td>Nuclear Radiology</td>
</tr>
<tr>
<td> </td>
<td>Pediatric Radiology</td>
</tr>
<tr>
<td> </td>
<td>Radiation Oncology</td>
</tr>
<tr>
<td> </td>
<td>Radiological Physics</td>
</tr>
<tr>
<td> </td>
<td>Therapeutic Radiology </td>
</tr>
<tr>
<td> </td>
<td>Vascular &amp; Interventional Radiology</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Sleep Medicine</td>
<td></td>
</tr><tr><td></td><td>Sleep Medicine</td></tr>
<tr>
<td> </td>
<td>Sleep Medicine (Anesthesiology)</td>
</tr>
<tr>
<td> </td>
<td>Sleep Medicine (Internal Medicine)</td>
</tr>
<tr>
<td> </td>
<td>Sleep Medicine (Otolaryngology)</td>
</tr>
<tr>
<td> </td>
<td>Sleep Medicine (Psychiatry &amp; Neurology)</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Sports Medicine</td>
<td></td>
</tr><tr><td></td><td>Sports Medicine (FM)</td></tr>
<tr>
<td> </td>
<td>Internal Medicine – Sports Medicine</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Surgical Oncology</td>
<td></td>
</tr><tr><td></td><td>Surgical Oncology</td></tr>
<tr>
<td> </td>
<td>Advanced Surgical Oncology</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Pulmonology</td>
<td></td>
</tr><tr><td></td><td>Pulmonary Disease</td></tr>
<tr>
<td> </td>
<td>Pulmonary Critical Care Medicine</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Rheumatology</td>
<td></td>
</tr><tr><td></td><td>Rheumatology</td></tr>
<tr>
<td> </td>
<td>Rheumatology</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Thoracic Surgery</td>
<td></td>
</tr><tr><td></td><td>Thoracic Surgery</td></tr>
<tr>
<td> </td>
<td>Congenital Cardiac Surgery (Thoracic Surgery)</td>
</tr>
<tr>
<td> </td>
<td>Thoracic and Cardiac Surgery </td>
</tr>
<tr>
<td> </td>
<td>Cardiovascular Surgery </td>
</tr>
<tr>
<td> </td>
<td>Thoracic Surgery - Integrated</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Urgent Care Medicine</td>
<td></td>
</tr><tr><td></td><td>Urgent Care Medicine</td></tr>
<tr class="physician-group-row">
<td class="physician-group">Urology</td>
<td></td>
</tr><tr><td></td><td>Urology</td></tr>
<tr>
<td> </td>
<td>Urological Surgery </td>
</tr>
<tr>
<td> </td>
<td>Endourology </td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Vascular Surgery</td>
<td></td>
</tr><tr><td></td><td>Vascular Surgery</td></tr>
<tr>
<td> </td>
<td>Vascular Surgery - Integrated</td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Other Specialty</td>
<td></td>
</tr><tr><td></td><td>Other Specialty</td></tr>
<tr>
<td> </td>
<td>Bariatric Medicine </td>
</tr>
<tr>
<td> </td>
<td>Clinical Pharmacology</td>
</tr>
<tr>
<td> </td>
<td>Global Health </td>
</tr>
<tr>
<td> </td>
<td>Integrative Medicine </td>
</tr>
<tr>
<td> </td>
<td>Pharmaceutical Medicine</td>
</tr>
<tr>
<td> </td>
<td>Student Health </td>
</tr>
<tr class="physician-group-row">
<td class="physician-group">Unspecified </td>
<td></td>
</tr><tr><td></td><td>Unspecified</td></tr>
<tr>
<td> </td>
<td>Biomedical </td>
</tr>
<tr>
<td> </td>
<td>Clinical Research </td>
</tr>
<tr>
<td> </td>
<td>Transitional Year </td>
</tr>
<tr>
<td> </td>
<td>Fellowship </td>
</tr>
</tbody></table>
</div>
	</div>


@endsection