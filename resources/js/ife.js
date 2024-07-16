// Payment Number Load
function peymentGetway()
{
    var getwayLoad = document.getElementById("payment_method").value;
    document.getElementById("paymentGetwayLabelLoad").innerHTML = "Type your " + getwayLoad + " Number";
    document.getElementById("paymentGetwayBoxlLoad").innerHTML = ": <input type='text' name='phone_number' id='phone_number'><span id='phone_numberErr' class='error'> *</span>";
    document.getElementById("privacyPolicyLoad").innerHTML = "<input type='checkbox' name='privacyPolicy' id='privacyPolicy'><label for='privacyPolicy'> I have read <a href='../aboutus/privacy_policy.php' target='_blank' class='link-hvr'>Privacy Policy</a></label><span id='privacyPolicyErr' class='error'> *</span>";
}
function peymentGetwayErrRemove()
{
    var payment_method = document.getElementById("payment_method").value;
    
    if (payment_method == "") 
    {
        document.getElementById("payment_methodErr").innerHTML = "";
    }
}

// Create Payment Validation 
function createPaymentValidation() 
{
    var phone_number = document.getElementById("phone_number").value;
    var policyCkeck = document.getElementById("privacyPolicy");

    if (phone_number == "") 
    {
        document.getElementById("phone_numberErr").innerHTML =
        " ⚠ Please fill the Phone Number field";
        return false;
    }
    else{
        document.getElementById("phone_numberErr").innerHTML = "";
    }
    if (policyCkeck.checked == false) 
    {
        document.getElementById("privacyPolicyErr").innerHTML =
        " ⚠ Please check our Privacy Policy!";
        return false;
    }
    else{
        document.getElementById("privacyPolicyErr").innerHTML = "";
    }
}

//Back Function
function goBack()
{
    window.history.back()
}

function Reload()
{
    location.reload();
}

// Login Validation 
function LoginValidation() 
{
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "") 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ Please fill the username field";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (username.length <= 2 || username.length > 20) 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ Username lenght must be between 2 and 20";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (!isNaN(username)) 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ only characters are allowed";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (password == "") 
    {
        document.getElementById("passwordErr").innerHTML =
        " ⚠ Please fill the password field";
        return false;
    }
    else{
        document.getElementById("passwordErr").innerHTML = "";
    }
}

//Tenant Add Validation by Farhan Naeem
function RegistrationValidation() 
{
    var name = document.getElementById("name").value;
    var father = document.getElementById("father").value;
    var dob = document.getElementById("dob").value;
    var genderM = document.getElementById("Male");
    var genderF = document.getElementById("Female");
    var genderO = document.getElementById("Other");
    var religion = document.getElementById("religion").value;
    var maritial_status = document.getElementById("maritial_status").value;
    var occupation = document.getElementById("occupation").value;
    var nid = document.getElementById("nid").value;
    var phone_number = document.getElementById("phone_number").value;
    var permanent_address = document.getElementById("permanent_address");
    var room_no = document.getElementById("room_no");
    var advance = document.getElementById("advance");
    var monthly_bill = document.getElementById("monthly_bill");
    var rent_date = document.getElementById("rent_date");
    var status = document.getElementById("status");
    var image = document.getElementById("image").value;
    
    if (name == "") 
    {
        document.getElementById("nameErr").innerHTML =
        " ⚠ Please fill the name field";
        return false;
    }
    else{
        document.getElementById("nameErr").innerHTML = "";
    }
    if (father == "") 
    {
        document.getElementById("fatherErr").innerHTML =
        " ⚠ Please fill the father field";
        return false;
    }
    else{
        document.getElementById("fatherErr").innerHTML = "";
    }
    if (dob == "") 
    {
        document.getElementById("dobErr").innerHTML =
        " ⚠ Please select your Date of Birth";
        return false;
    }
    else{
        document.getElementById("dobErr").innerHTML = "";
    }
    if (genderM.checked == false && genderF.checked == false && genderO.checked == false ) 
    {
        document.getElementById("genderErr").innerHTML =
        " ⚠ Please select your gender";
        return false;
    }
    else{
        document.getElementById("genderErr").innerHTML = "";
    }
    if (religion == "") 
    {
        document.getElementById("religionErr").innerHTML =
        " ⚠ Please fill the religion field";
        return false;
    }
    else{
        document.getElementById("religionErr").innerHTML ="";
    }
    if (maritial_status == "") 
    {
        document.getElementById("maritial_statusErr").innerHTML =
        " ⚠ Please select Maritial Status";
        return false;
    }
    else{
        document.getElementById("maritial_statusErr").innerHTML = "";
    }
    if (occupation == "") 
    {
        document.getElementById("occupationErr").innerHTML =
        " ⚠ Please fill the occupation field";
        return false;
    }
    else{
        document.getElementById("occupationErr").innerHTML = "";
    }
    if (nid == "") 
    {
        document.getElementById("nidErr").innerHTML =
        " ⚠ Please Enter National ID Number";
        return false;
    }
    else{
        document.getElementById("nidErr").innerHTML = "";
    }
    if (phone_number == "") 
    {
        document.getElementById("phone_numberErr").innerHTML =
        " ⚠ Please Enter Phone Number";
        return false;
    }
    else{
        document.getElementById("phone_numberErr").innerHTML = "";
    }
    if (permanent_address == "") 
    {
        document.getElementById("permanent_addressErr").innerHTML =
        " ⚠ Please Enter permanent_address";
        return false;
    }
    else{
        document.getElementById("permanent_addressErr").innerHTML = "";
    }
    if (room_no == "") 
    {
        document.getElementById("room_noErr").innerHTML =
        " ⚠ Please Enter room_no";
        return false;
    }
    else{
        document.getElementById("room_noErr").innerHTML = "";
    }
    if (advance == "") 
    {
        document.getElementById("advanceErr").innerHTML =
        " ⚠ Please Enter advance";
        return false;
    }
    else{
        document.getElementById("advanceErr").innerHTML = "";
    }
    if (monthly_bill == "") 
    {
        document.getElementById("monthly_billErr").innerHTML =
        " ⚠ Please Enter monthly_bill";
        return false;
    }
    else{
        document.getElementById("monthly_billErr").innerHTML = "";
    }
    if (rent_date == "") 
    {
        document.getElementById("rent_dateErr").innerHTML =
        " ⚠ Please Enter rent_date";
        return false;
    }
    else{
        document.getElementById("rent_dateErr").innerHTML = "";
    }
    if (status == "") 
    {
        document.getElementById("statusErr").innerHTML =
        " ⚠ Please Enter status";
        return false;
    }
    else{
        document.getElementById("statusErr").innerHTML = "";
    }
    
    if (image == "") 
    {
        document.getElementById("imageErr").innerHTML =
        " ⚠ Please your profile Image";
        return false;
    }
    else{
        document.getElementById("imageErr").innerHTML = "";
    }
}

//Add Room by javascript by Munna
function RoomAddValidation() 
{
    var houseAddress = document.getElementById("house_address").value;
    var roomNo = document.getElementById("room_no").value;
    var rent = document.getElementById("rent").value;
    var roomDetails = document.getElementById("room_details").value;
    var bookedYes = document.getElementById("yes");
    var bookedNo = document.getElementById("no");
    var image = document.getElementById("image").value;

    if (houseAddress == "") 
    {
        document.getElementById("house_addressErr").innerHTML =
        " ⚠ Please fill the Address field";
        return false;
    }
    else{
        document.getElementById("house_addressErr").innerHTML = "";
    }

    if (roomNo == "") 
    {
        document.getElementById("room_noErr").innerHTML =
        " ⚠ Please type Room No";
        return false;
    }
    else{
        document.getElementById("room_noErr").innerHTML = "";
    }
    if (rent == "") 
    {
        document.getElementById("rentErr").innerHTML =
        " ⚠ Please add a valid Price";
        return false;
    }
    else{
        document.getElementById("rentErr").innerHTML = "";
    }
    if (roomDetails == "") 
    {
        document.getElementById("room_detailsErr").innerHTML =
        " ⚠ Please input Room Details";
        return false;
    }
    else{
        document.getElementById("room_detailsErr").innerHTML = "";
    }
    if (bookedYes.checked == false && bookedNo.checked == false) 
    {
        document.getElementById("bookedErr").innerHTML =
        " ⚠ Is this room booked? Select 'Y'";
        return false;
    }
    else{
        document.getElementById("bookedErr").innerHTML = "";
    }
    if (image == "") 
    {
        document.getElementById("imageErr").innerHTML =
        " ⚠ Please select Room Image";
        return false;
    }
    else{
        document.getElementById("imageErr").innerHTML = "";
    }
}

