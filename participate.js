// JavaScript Document
$(function() {
    $("#regform").validate({
		
	rules:{
		username:
		{
			required:true,
			minlength:2	
		},
		contact:
		{
			required:true,
			minlength: 10
		},
		email:{
			required: true,
			email: true

	   },
		password:{
			required: true,
			minlength: 8
		},
		cpassword:{
			required: true,
			minlength: 8,
			equalTo: "#password"
		}
		
	},
	messages:{
		
		username: {
			required:"Please enter your name",
			minlength: "Your name must contain atleast 2 characters"},
			
			contact: {
			required:"Please enter your Contact No.",
			minlength: "Contact No. contains atleast 10 digit"},
			
			password:
			{
				required:"Please provide a password",
				minlength:"Password must be atleast 5 characters long"},
				
				cpassword:
				{required:"Please provide a password",
				minlength:"Password must be atleast 5 characters long",
				equalTo:"Password dont match"}
	            
	          }
	
	});
});