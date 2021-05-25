<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

     

    <link rel="stylesheet" href="css/profile.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
 
</style>
 <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<script type="text/javascript">
var citiesByState = {
Odisha: ["Bhubaneswar","Puri","Cuttack","Rourkela","Sambalpur","Balasore","Bhadrak","Baripada","Angul","Konark"],
Maharashtra: ["Mumbai","Pune","Nagpur","Nashik","Solapur","Kolhapur","Thane","Aurangabad","Akola","Satara"],
TamilNadu: ["Chennai","Coimbatore","Madurai","Salem","Vellore","Tiruchirappalli","Erode","Thanjavur","Ooty","Puducherry"],
Kerala: ["kochi","Kannur","Kozhikode","Thrissur","Kottayam","Palakkad","Malappuram","Kovalam","Tirur","Munnar"],
AndhraPradesh: ["Amaravati","Visakhapatnam","Vijayawada","Tirupati","Kakinada","Guntur","Rajahmundry","Eluru","Nellore","Kadapa"],
Haryana: ["Gurugram","Faridabad","Rohtak","Karnal","Panipat","Hisar","Sonipat","Ambala","Rewari","Kaithal"],
Manipur: ["Imphal","Kakching","Tamenglong","Moirang","Thoubal","Moreh","Andro","Ukhrul","Wangoi","Yairipok"],
Sikkim: ["Gangtok","Namchi","Pelling","Lachung","Geyzing","Ravangla","Yuksom","Mangan","Rangpo","Jorethang"],
ArunachalPradesh: ["Itanagar","Tezu","Khonsa","Deomali","Ziro","Tawang","Aalo","Pasaighat","Namsai","Bomdila"],
HimachalPradesh: ["Shimla","Dharamshala","Chamba","Manali","Mandi","Solan","Hamirpur","Kangra","Una","Palampur"],
WestBengal: ["Kolkata","Durgapur","Asansol","Howrah","Darjeeling","Nadia","Malda","Bolpur","Kalyani","Hooghly"],
Rajasthan: ["Jaipur","Jodhpur","Udaipur","Jaisalmer","Ajmer","Bikaner","Kota","Pushkar","Alwar","Bharatpur"] 
}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = citiesOptions;
}
}
function displaySelected() { var country = document.getElementById("countrySelect").value;
var city = document.getElementById("citySelect").value;
alert(country+"\n"+city);
}
function resetSelection() {
document.getElementById("countrySelect").selectedIndex = 0;
document.getElementById("citySelect").selectedIndex = 0;
}
</script>

  </head>

  <body onload="resetSelection()">
   <?php include "dashboard.php"; ?> 
<br>
<br>
<br>

	<div class="container emp-profile" style=" background: transparent; margin-top: 2%; margin-bottom: 7%;">
     
	 
	 
    
 