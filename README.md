# taskcreateform
Explanation:
1. Page1.php 
has a simple form with input fields for name, phone number and email, and a submit button.
The 'required' attribute ensures that the fields are not empty.
When the form is submitted, the action attribute directs it to page 2 ('page2.php').

2. Page2.php also
has a form with input fields for location, age and university, and a submit button.
The 'hidden' input fields are used to pass the values of name, phone number and email from page 1 to page 2 without displaying them to the user.
When the form is submitted, the 'action' attribute directs it to the success page

3. 'success.php'
The success page has a simple message that displays the name of the user who filled out the form.
It uses the '$_POST superglobal array to get the value of name that was submitted from page 2.
If the value exists, it displays the message "Thank you for filling the form, {name}."
