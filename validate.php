<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
function onFocus(){	
document.register.firstname.onfocus = function(){
	var first = document.getElementById('firstname');
	var hint1 = document.getElementById('hint1');	
	hint1.innerText = "alpha-numeric characters only";
	hint1.style.color = "green";
	}
document.register.lastname.onfocus = function(){
	var last = document.getElementById("lastname");
	var hint2 = document.getElementById('hint2');
	hint2.style.color = "green";
	hint2.innerText = "alpha-numeric characters only";
}
document.register.email.onfocus = function(){
	var email = document.getElementById("email");
	var hint3 = document.getElementById('hint3');
	hint3.style.color = "green";
	hint3.innerText = "format: someone@somewhere.com";
}
document.register.telephone.onfocus = function(){
	var phone = document.getElementById("telephone");
	var hint4 = document.getElementById('hint4');
	hint4.style.color = "green";
	hint4.innerText = "Numbers Only No Spaces (ex: 0123456789)";
}
document.register.mobile.onfocus = function(){
	var mobile = document.getElementById("mobile");
	var hint5 = document.getElementById('hint5');
	hint5.style.color = "green";
	hint5.innerText = "Numbers Only No Spaces (ex: 0123456789)";
}
document.register.address1.onfocus = function(){
	var address1 = document.getElementById("address1");
	var hint6 = document.getElementById('hint6');
	hint6.style.color = "green";
	hint6.innerText = "Letters and Numbers only";
}
document.register.address2.onfocus = function(){
	var address2 = document.getElementById("address2");
	var hint7 = document.getElementById('hint7');
	hint7.style.color = "green";
	hint7.innerText = "Apt. or Suite #";
}
document.register.city.onfocus = function(){
	var city = document.getElementById("city");
	var hint8 = document.getElementById('hint8');
	hint8.style.color = "green";
	hint8.innerText = "Alpha-numeric Characters only";
}
document.register.state.onfocus = function(){
	var state = document.getElementById("state");
	var hint9 = document.getElementById('hint9');
	hint9.style.color = "green";
	hint9.innerText = "Your 2-digit state (ex: FL)";
}
document.register.zip.onfocus = function(){
	var zip = document.getElementById("zip");
	var hint10 = document.getElementById('hint10');
	hint10.style.color = "green";
	hint10.innerText = "Numbers Only (ex: 54321)";
}
document.register.username.onfocus = function(){
	var username = document.getElementById("username");
	var hint11 = document.getElementById('hint11');
	hint11.style.color = "green";
	hint11.innerText = "Enter Your Login Username";
}
document.register.pw1.onfocus = function(){
	var pw1 = document.getElementById("pw1");
	var hint12 = document.getElementById('hint12');
	hint12.style.color = "green";
	hint12.innerText = "Enter Your Login Password";
}
document.register.pw2.onfocus = function(){
	var pw2 = document.getElementById("pw2");
	var hint13 = document.getElementById('hint13');
	hint13.style.color = "green";
	hint13.innerText = "Confirm Password";
}
}
function validateData(event){
	var hint1  = document.getElementById('hint1');
	var hint2  = document.getElementById('hint2');
	var hint3  = document.getElementById('hint3');
	var hint4  = document.getElementById('hint4');
	var hint5  = document.getElementById('hint5');
	var hint6  = document.getElementById('hint6');
	var hint7  = document.getElementById('hint7');
	var hint8  = document.getElementById('hint8');
	var hint9  = document.getElementById('hint9');
	var hint10 = document.getElementById('hint10');
	var hint11 = document.getElementById('hint11');
	var hint12 = document.getElementById('hint12');
	var hint13 = document.getElementById('hint13');
	var pw1 = document.getElementById('pw1');
    var pw2 = document.getElementById('pw2');
	var first_name_valid = false;
	var last_name_valid =  false;
	var email_valid =      false;
	var telephone_valid =  false;
	var mobile_valid =     false;
	var address1_valid =   false;
	var city_valid =       false;
	var state_valid =      false;
	var zip_valid =        false;
	var username_valid =   false;
	var pw1_valid =        false;
	var pw2_valid =        false;
	
	//first name check
	document.register.firstname.onblur = function (){	
	if(this.value.match(/^[A-Za-z]*$/)){
		hint1.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"green icon-thumbs-up");
      	hint1.appendChild(check);
		first_name_valid = true;
	}
	if(!this.value.match(/^[A-Za-z]*$/) || this.value.length === 0){
		hint1.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"red icon-thumbs-down");
		hint1.appendChild(check);

	}
	}
	//last name check
	document.register.lastname.onblur = function(){	
	if(this.value.match(/^[A-Za-z]*$/)){
		hint2.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"green icon-thumbs-up");
		hint2.appendChild(check);
		last_name_valid = true;
	}
	if(!this.value.match(/^[A-Za-z]*$/) || this.value.length === 0){
		hint2.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"red icon-thumbs-down");
		hint2.appendChild(check);
	}
	}
	//phone number check
	document.register.telephone.onblur = function(){	
	if(this.value.match(/^([0-9]{3})([0-9]{3})([0-9]{4})$/)){
		hint4.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"green icon-thumbs-up");
		hint4.appendChild(check);
		telephone_valid = true;
	}
	if(!this.value.match(/^([0-9]{3})([0-9]{3})([0-9]{4})$/) || this.value.length === 0){
		hint4.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"red icon-thumbs-down");
		hint4.appendChild(check);

	}
	}
	
	//email check
	document.register.email.onblur = function(){
	if(this.value.match(/^([A-Za-z0-9]+)(@)([A-Za-z0-9]+)(.)([a-z]+)$/)){
		hint3.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"green icon-thumbs-up");
		hint3.appendChild(check);
		email_valid = true;
		
	}
	if(!this.value.match(/^([A-Za-z0-9]+)(@)([A-Za-z0-9]+)(.)([a-z]+)$/) || this.value.length === 0){
		hint3.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"red icon-thumbs-down");
		hint3.appendChild(check);
		
	}
	}
	//mobile number check
	document.register.mobile.onblur = function(){	
	if(this.value.match(/^([0-9]{3})([0-9]{3})([0-9]{4})$/)){
		hint5.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"green icon-thumbs-up");
		hint5.appendChild(check);
		mobile_valid = true;
	}
	if(!this.value.match(/^([0-9]{3})([0-9]{3})([0-9]{4})$/) || this.value.length === 0){
		hint5.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"red icon-thumbs-down");
		hint5.appendChild(check);

	}
	}
	//address1 check
	document.register.address1.onblur = function(){	
	if(this.value.match(/^[0-9]+\s+([a-zA-Z]+|[a-zA-Z]+\s[a-zA-Z]+)$/)){
		hint6.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"green icon-thumbs-up");
		hint6.appendChild(check);
		address1_valid = true;
	}
	if(!this.value.match(/^[0-9]+\s+([a-zA-Z]+|[a-zA-Z]+\s[a-zA-Z]+)$/) || this.value.length === 0){
		hint6.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"red icon-thumbs-down");
		hint6.appendChild(check);

	}
	}
	document.register.address2.onblur = function(){		
		hint7.innerText = "";
	}
	//city check
	document.register.city.onblur = function(){	
	if(this.value.match(/^[a-zA-Z]$/)){
		hint8.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"green icon-thumbs-up");
		hint8.appendChild(check);
		city_valid = true;
	}
	if(!this.value.match(/^[a-zA-Z]$/) || this.value.length === 0){
		hint8.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"red icon-thumbs-down");
		hint8.appendChild(check);

	}
	}
	//state check
	document.register.state.onblur = function(){	
	if(this.value.match(/^[a-zA-Z]{2}$/)){
		hint9.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"green icon-thumbs-up");
		hint9.appendChild(check);
		state_valid = true;
	}
	if(!this.value.match(/^[a-zA-Z0-9]{2}$/) || this.value.length === 0){
		hint9.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"red icon-thumbs-down");
		hint9.appendChild(check);

	}
	}
	//zip check
	document.register.zip.onblur = function(){	
	if(this.value.match(/^[0-9]{5}$/)){
		hint10.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"green icon-thumbs-up");
		hint10.appendChild(check);
		zip_valid = true;
	}
	if(!this.value.match(/^[0-9]{5}$/) || this.value.length === 0){
		hint10.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"red icon-thumbs-down");
		hint10.appendChild(check);

	}
	}
		//zip check
	document.register.username.onblur = function(){	
	if(this.value.match(/^[a-zA-Z0-9_-]{3,16}$/)){
		hint11.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"green icon-thumbs-up");
		hint11.appendChild(check);
		username_valid = true;
	}
	if(!this.value.match(/^[a-zA-Z0-9_-]{3,16}$/) || this.value.length === 0){
		hint11.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"red icon-thumbs-down");
		hint11.appendChild(check);

	}
	}
		//zip check
	document.register.pw1.onblur = function(){	
	if(this.value.match(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/)){
		hint12.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"green icon-thumbs-up");
		hint12.appendChild(check);
		pw1_valid = true;
	}
	if(!this.value.match(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/) || this.value.length === 0){
		hint12.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"red icon-thumbs-down");
		hint12.appendChild(check);

	}
	}
	document.register.pw2.onblur = function(){	
	if(this.value.match(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/)){
		hint13.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"green icon-thumbs-up");
		hint13.appendChild(check);
		pw2_valid = true;
	}
	if(!this.value.match(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/) || this.value.length === 0){
		hint13.innerText = "";
		var check = document.createElement('i');
		check.setAttribute('class',"red icon-thumbs-down");
		hint13.appendChild(check);
		pw2_valid = false;
	}
	}
	
	
	
	
var checks = document.getElementById('checkbox');
checks.addEventListener('click',checkbox(),true);
	function checkbox(){
	            if(checks.checked) {

					document.getElementById("button").disabled = false;
                }else{
					document.getElementById("button").disabled = true;
				}
	}
	//validating the for data after submit
	function validateForm(first_name_valid,last_name_valid,email_valid,telephone_valid,mobile_valid,address1_valid,city_valid,state_valid,zip_valid,username_valid,pw1_valid,pw2_valid){
		if(first_name_valid == true && last_name_valid == true && email_valid == true && telephone_valid == true && mobile_valid == true && address1_valid == true && city_valid == true && state_valid == true && zip_valid == true && username_valid == true && pw1_valid == true && pw2_valid == true){
		alert("success");	 	
		return false;		 
		}
		else{
		alert("Please fill out the entire form!");
		return false;
		}
	}
                document.getElementById('button').onclick = function() {
					validateForm();
                    return false;
                }
}
function checkPass()
{
    //Store the password field objects into variables ...
    var pw1 = document.getElementById('pw1');
    var pw2 = document.getElementById('pw2');
    //Store the Confimation Message Object ...
    var hint13 = document.getElementById('hint13');
    //Set the colors we will be using ...
    var goodColor = "green";
    var badColor = "red";
    //Compare the values in the password field 
    //and the confirmation field
    if(pw1.value == pw2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        hint13.style.color = goodColor;
        hint13.innerHTML = "Passwords Match!"
		pw2_valid = true;
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        hint13.style.color = badColor;
        hint13.innerHTML = "Passwords Do Not Match!"
		pw2_valid = false;
    }
}        
            function load() 
                {
                    onFocus();
                    validateData();   
                }
            window.onload = load;
			</script>
			
<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-69797602-1', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>