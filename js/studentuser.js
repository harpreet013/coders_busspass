function formValidation(event){
    event.preventDefault();
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var number = document.getElementById('number').value;
    var email = document.getElementById('email').value;
    var gender = document.getElementById('gender').value;
    var college = document.getElementById('college').value;
    var identity_id = document.getElementById('idtype').value;
    var identity_name = document.getElementById('idnum').value;
    var source = document.getElementById('source').value;
    var destination = document.getElementById('destination').value;
    var from_date = document.getElementById('sdate').value;
    var to_date = document.getElementById('edate').value;

    
    let fcheck=/^[A-Za-z]{3,10}$/;
    let lcheck=/^[A-Za-z]{3,10}$/;
    let ncheck= /^(\+91)-[0-9]([0-9]{4})-([0-9]{5})$/;
    //let addcheck=/^[A-Za-z0-9.,'() ]{5,500}$/;


    //Validation for firstname
    if(fcheck.test(fname)){
        document.getElementById("userfname").innerHTML = null; 
    }
    else{
        document.getElementById("userfname").innerHTML = 
        "Only charcaters are allowed and first name should 3 to 10 character long";
        return false;
    }

    //Validation for lastname
    if(lcheck.test(lname)){
        document.getElementById("userlname").innerHTML = null; 
    }
    else{
        document.getElementById("userlname").innerHTML = 
        "Only charcaters are allowed and last name should 3 to 10 character long";
        return false;
    }

    //Validation for mobile number
    if(ncheck.test(number)){
        document.getElementById("usernumber").innerHTML = null; 
    }
    else{
        document.getElementById("usernumber").innerHTML ="Format should be +91-00000-00000"; 
        return false;
    }

    //Validation for email
    if(email == ""){
        document.getElementById("useremail").innerHTML = "please fill the email"
        return false;
    }
    else if((email.length < 6) || (email.length > 120)){
        document.getElementById("useremail").innerHTML = "email should 6 to 120 character long";
        return false;
    }
    else if((isNaN(email))&&(email.indexOf('@') < 3)){
        document.getElementById("useremail").innerHTML = "**enter valid email";
        return false;
    }
    else if((email.charAt(email.length-4)!='.')){
        document.getElementById("useremail").innerHTML = "**Invalid . position";
        return false;
    }    
    else{
        document.getElementById("useremail").innerHTML = "";
    }

    //Validation for gender
    if(gender == ""){
        document.getElementById("usergender").innerHTML = "please select the gender";
        return false;
    }
    else{
        document.getElementById("usergender").innerHTML = "";
    }

       //Validation for college name
       if(college == ""){
        document.getElementById("usercollege").innerHTML = "please enter the college name";
        return false;
    }
    else{
        document.getElementById("usercollege").innerHTML = "";
    }

    /*  //Validation for document
      if(documen == ""){
        document.getElementById("document").innerHTML = "please selct a document";
        return false;
    }
    else{
        document.getElementById("document").innerHTML = "";
    }  */

 


   /* //Validation for category
    if(category == ""){
        document.getElementById("usercategory").innerHTML = "please enter the category";
        return false;
    }
    else{
        document.getElementById("usercategory").innerHTML = "";
    }   */

    //Validation for identity id
    if(identity_id == ""){
        document.getElementById("useridentity").innerHTML = "please select the identity id";
        return false;
    }
    else{
        document.getElementById("useridentity").innerHTML = "";
    }

    //Validation for identity name
    if(identity_name == ""){
        document.getElementById("useriden").innerHTML = "please enter the identity name";
        return false;
    }
    else{
        document.getElementById("useriden").innerHTML = "";
    }

    //Validation for source
    if(source == ""){
        document.getElementById("usersource").innerHTML = "please select the identity id";
        return false;
    }
    else{
        document.getElementById("usersource").innerHTML = "";
    }

    //Validation for destination
    if(destination == ""){
        document.getElementById("userdestination").innerHTML = "please enter the destination";
        return false;
    }
    else{
        document.getElementById("userdestination").innerHTML = "";
    }

    //Validation for from date
    if(from_date == ""){
        document.getElementById("fromdate").innerHTML = "please enter the date";
        return false;
    }
    else{
        document.getElementById("fromdate").innerHTML = "";
    }

    //Validation for to date
    if(to_date == ""){
        document.getElementById("todate").innerHTML = "please enter the date";
        return false;
    }
    else{
        document.getElementById("todate").innerHTML = "";
    }
}

//function for image validation

function validateImage() {
    var formData = new FormData();
    var file = document.getElementById("img").files[0];
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        document.getElementById("useremail").innerHTML = 'Please select a valid image file';
        document.getElementById("img").value = '';
        return false;
    }
    
    var fsize = (file.size / 1024 / 1024).toFixed(2);  
    if (fsize > 2 ) {
        document.getElementById("userimage").innerHTML = 'Max Upload size is 2MB only';
        document.getElementById("img").value = '';
        return false;
    }
    return true;
}

