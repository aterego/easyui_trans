<?php
/**
 * Developed by AVA - A.Avetisov.
 * Date: 20.09.2015
 * Time: 20:46
 */

$ddate = $_REQUEST['ddate'];
$doctor = $_REQUEST['doctor'];
$recipient = $_REQUEST['recipient'];
$rec_pid = $_REQUEST['rec_pid'];
$rec_age = $_REQUEST['rec_age'];
$diagnosis = $_REQUEST['diagnosis'];
$rhesus = $_REQUEST['rhesus'];
$fibrosis = $_REQUEST['fibrosis'];
$bilirubin = $_REQUEST['bilirubin'];
$ast = $_REQUEST['ast'];
$alt = $_REQUEST['alt'];
$ggt = $_REQUEST['ggt'];
$cr = $_REQUEST['cr'];
$inr = $_REQUEST['inr'];
$ascites = $_REQUEST['ascites'];
$albumin = $_REQUEST['albumin'];
$encephalopathy = $_REQUEST['encephalopathy'];
$bleeding = $_REQUEST['bleeding'];
$rec_address = $_REQUEST['rec_address'];
$rec_phone = $_REQUEST['rec_phone'];
$child = $_REQUEST['child'];
$meld = $_REQUEST['meld'];
$r_height = $_REQUEST['r_height'];
$r_weight = $_REQUEST['r_weight'];
$r_bmi = $_REQUEST['r_bmi'];
$rec_details = $_REQUEST['rec_details'];
$donor = $_REQUEST['donor'];
$don_pid = $_REQUEST['don_pid'];
$don_age = $_REQUEST['don_age'];
$relationship = $_REQUEST['relationship'];
$don_address = $_REQUEST['don_address'];
$don_phone = $_REQUEST['don_phone'];
$don_rhesus = $_REQUEST['don_rhesus'];
$don_details = $_REQUEST['don_details'];

$dt = DateTime::createFromFormat('m/d/Y', $ddate);
$ddate = $dt->format('Y-m-d');



include 'conn.php';


$sql = "insert into persons(ddate,doctor,recipient,rec_pid,rec_age,diagnosis,rhesus,fibrosis,bilirubin,ast,alt,ggt,cr,inr,ascites,albumin,encephalopathy,
          bleeding,rec_address,rec_phone,child,meld,r_height,r_weight,r_bmi,rec_details,donor,don_pid,don_age,relationship,don_address,don_phone,don_rhesus,don_details,modified)
        values('$ddate','$doctor','$recipient','$rec_pid','$rec_age','$diagnosis','$rhesus','$fibrosis','$bilirubin','$ast','$alt','$ggt','$cr','$inr',
          '$ascites','$albumin','$encephalopathy','$bleeding','$rec_address','$rec_phone','$child','$meld','$r_height','$r_weight','$r_bmi','$rec_details','$donor','$don_pid','$don_age',
          '$relationship', '$don_address','$don_phone','$don_rhesus','$don_details',now())";


@mysql_query($sql);
echo json_encode(array(
	'id' => mysql_insert_id(),
    'ddate' => $ddate,
	'doctor' => $doctor,
	'rec_pid' => $rec_pid,
	'recipient' => $recipient,
	'rec_age' => $rec_age,
	'diagnosis' => $diagnosis,
	'rhesus' => $rhesus,
	'fibrosis' => $fibrosis,
	'bilirubin' => $bilirubin,
	'ast' => $ast,
	'alt' => $alt,
	'ggt' => $ggt,
	'cr' => $cr,
	'inr' => $inr,
	'ascites' => $ascites,
	'albumin' => $albumin,
	'encephalopathy' => $encephalopathy,
	'bleeding' => $bleeding,
	'rec_address' => $rec_address,
	'rec_phone' => $rec_phone,
	'child' => $child,
	'meld' => $meld,
	'rec_details' => $rec_details,
	'r_height' => $r_height,
    'r_weight' => $r_weight,
    'r_bmi' => $r_bmi,
	'donor' => $donor,
	'don_pid' => $don_pid,
	'don_age' => $don_age,
	'relationship' => $relationship,
	'don_address' => $don_address,
	'don_phone' => $don_phone,
	'don_rhesus' => $don_rhesus,
	'don_details' => $don_details
));

?>