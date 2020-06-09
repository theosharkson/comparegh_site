<?php

function getNetworks(){
	return [
		"MTN" => "MTN",
		"VODAFONE" => "VODAFONE",
		"AIRTELTIGO" => "AIRTEL-TIGO",
	];
}

function getNetworkUSSD(){
    return [
        "1" => "MTN",
        "2" => "VODAFONE",
        "3" => "AIRTEL",
    ];
}


function numberToletter($number){
    $alphabet = range('A', 'Z');

    return $alphabet[$number]; // returns alphabet
}


function getMonthNumber(){
	return \Carbon\Carbon::now()->month;
}

function getYearNumber(){
    return \Carbon\Carbon::now()->year;
}



function getMonthName($month_number){
    return date('F', mktime(0, 0, 0, $month_number, 1));
}


//generate random string
function generateRandomString($length) {
    $characters = '123456789ABCDEFGHIJKLMN123456789PQRSTUVWXYZ123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//generate random unique code
function getCode($model,$field){
    do{
        $rand = generateRandomString(8);
    }while(!empty($model::where($field,$rand)->first()));
    return $rand;
}


//generate random unique code (general)
function getUniqueCode($model,$field,$code_lenght){
    do{
        $rand = generateRandomString($code_lenght);
    }while(!empty($model::where($field,$rand)->first()));
    return $rand;
}



function getcharge($amount){

    $type = null;
    $charge = null;

    $charge_config = App\PaymentCharge::where('amount_from',"<=",$amount)
                                    ->where('amount_to',">=",$amount)
                                    ->first();

    //Set a default charge if there is no record found for the range in which the users amout fall
    if(empty($charge_config)){
        $type = "%";
        $charge = 1;
    }else{
        $type = $charge_config->type;
        $charge = $charge_config->charge;
    }

    //Calculate the charge_amount based on type of charge
    switch ($type){
        case "%":
            $charge_amount = $charge/100 * $amount;
            break;

        case "fixed":
            $charge_amount = $charge;
            break;
    }

    return $charge_amount;
}




function current_date()
{
    return \Carbon\Carbon::now()->format('Y-m-d');
}

function current_time()
{
    return \Carbon\Carbon::now()->format('g:i A');
}



function readableDate($date)
{
    return \Carbon\Carbon::parse($date)->toFormattedDateString();

}

function readableDateTime($date)
{
    return \Carbon\Carbon::parse($date)->toDayDateTimeString();

}


function humanDate($date)
{
    return \Carbon\Carbon::parse($date)->diffForHumans();

}


function defaultDate($date)
{
    return \Carbon\Carbon::parse($date)->format('d-m-Y');

}

function defaultDate2($date)
{
    return \Carbon\Carbon::parse($date)->format('d/m/Y');

}



function dbDate($date)
{
    return DateTime::createFromFormat('d-m-Y',$date);

}

function formatDateForDb($date)
{
   return \Carbon\Carbon::parse($date)->format('Y-m-d h:m:s');
}



function currency($value)
{
  return number_format($value,2);
}

function currencySymbol()
{
  return "GHS";
}



function getTempId()
{
    return 0;
}

function preparePhoneNumber($number){

    if(substr( $number, 0, 1 ) === "0"){
        $number = substr($number, 1);
        $number = "233". $number;
    }

    return $number;

}


?>
