
Lab 1
Create an index page that will display all the results in the table. 
Create an add page that will allow the user to add a new record. 
Please validate the fields using PHP or Regex where it makes sense. 
Use a ZIP code regex for ZIP(5 numbers only). For Birthday just check that is is a valid date(regex or PHP). 
If the user does not enter data or if the data is not valid. 
You do not need a Regex for fullname, addressline1, state or city. 
Display a list of errors for each field that does not validate. 
Re-populate the post values back into the fields that the user has entered data for when the data is invalid.
Display a success message if the user is able to add the data. 
Make sure to have links on the site to navigate to the index and add page.
    
    
Lab 2
Part 1:
Lets create a message class that will handle messages for our page.
Create a part-1 folder under Lab
Create IMessage interface.
The interface should have the following methods(functions)
addMessage($key, $msg)
removeMessage($key)
getAllMessages()
Create a Message class that implements the IMessage interface.
Create a ErrorMessage class that extends Message.
Create a SuccessMessage class that extends Message.
Create a test for each class.  

Part 2:
Create a part-2 folder under Lab.
Refactor assignment 1 to use classes and mitigate all use of spaghetti code.
You should have a CRUD class that extends the DB class and a validation class at minimum with documentation. 

Lab 3
Create a signup page.
Add validation to the signup page to ensure the user enters a valid email and password. This also includes an email that is already registered.
Use password_hash to store the password into the database.
Create a login page.
If the user logs in store the user_id in a session.
Create an admin page that does not allow the user to enter unless they are logged in.
Have a logout button on the admin page and display the user_id, the created column formatted and email. When logged out you can redirect the user to the login page.
Add Links to help navigate the site.

Lab 4
Create a page that will allow me to upload a new file. I should only be allowed to upload images, text files, html files, word docs and excel files.
Make sure to add validation and let the user know why the file was not uploaded. Use exceptions. 
Create a view page that will display all my files uploaded in a list format with a number order. 
There should be a view button/link to each file to view more details. There should be a delete button/link to remove the file.
On the file read page be sure to display the file size, the file type, date created and a link to the file directly.
On the file read page I should have action buttons that will allow me to delete the file. (10 points)
On the file read page, knowing the type of file it is display the images in an img tag, display text in a textarea tag(use new SplFileObject class), 
use the object tag or an iframe to display pdf files or HTML. All other files can stay as a link to direct download. 
<object src="'+file+'"><embed src="'+file+'"></embed></object>
Add Links to help navigate the site.
'txt' => 'text/plain',
'html' => 'text/html',
'pdf' => 'application/pdf',
'doc' => 'application/msword',
'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
'xls' => 'application/vnd.ms-excel',
'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
'jpg' => 'image/jpeg',
'png' => 'image/png',
'gif' => 'image/gif'

Lab 5