/**
	Validates email addresses
	@Title: userEmailValidate
	@Category: None
	@param {string} email = user's email retrieved from temp.email
**/

const userEmailValidate = async(email) => {
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	//defines regular expression
	//var e = email;
	console.log("Here: " + email); //for debugging purposes
	console.log("Here 2: " + temp.email); //for debugging purposes
	
	if(email.match(validRegex)) { //Checks if email value matches with regular expression
		console.log("Valid Email");
		user.emailValidationStatus = true; //confirms email is valid
	} else {
		console.log("Invalid Email");
		user.emailValidationStatus = false; //confirms email is invalid
	}
}

return userEmailValidate(args.email)