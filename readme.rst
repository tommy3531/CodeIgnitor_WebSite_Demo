###################
Purpose
###################
To build a 3-tier web application. I used phpmyadmin to build my database and added two tables,
one to store information about a registered user and the other to store information about state
legislators.  I used the legislators table of my database as a web service and users are able to
make rest calls in which the data is returned to user in JSON.

###################
Tools
###################
I decided to write my 3-tier web application in php using a php framework called codeigniter. I also used furry-bear, this is a php library for the OpenStates API, I also used codeigniter-restserver, which made writing my web service alot easier. I also used composer to use 3 party libraries like furry bear which is a third party that made talking the openstate api very easy.

###################
Site Information
###################

WebSite Home Page: http://45.79.221.177/hackweekcs4830/
API Base:          http://45.79.221.177/hackweekcs4830/index.php/api/PoliticalApi/
API Methods: /legislator_last_name/last/{Legislator Last Name}{Ex. Webber}
             /legislators

*******************
Register
*******************

Form

When the user clicks on the register text they are redirect to the register area where they are presented with a registration form. The user must fill out all textfields, if the user presses the register button the form is sent to the Users/registor function. The purpose of the User/register is to validate the information on the register form.

Validation Rules

The username, password, first_name, lasst_name and email must all be at least three characters long. If these text fields do not meet the the miniumn requirements the user in redirected to the register form and the errors are displayed to the user. Once the form passes the validation process the new user in created and the user is redirected to the home page. The validated information from the form is sent to the Database at this point the user is able to login, when there username and password that was supplied on the register form.

**************************
Login
**************************

The user should enter there username and password that was supplied on the registeration form. For demo purposes if you username and password did not work for some reason you could type guest, guest, guest. By typing in guest for the three entries you are logged in as a guest user. If you enter the wrong login information you are redirected to the home page and need to click the Login text which is located in the top nav bar. If you enter the correct username and password you will be redirected to the members area

*******************
Members
*******************

In the members area you are presented with a textfield and a blue button that says send. In the textfield please enter a two digit state for example if you wanted to search for missouri, you would type mo. Please use mo, as the state to search for, once you type in mo, you are given a list of legislator for the state of missouri. The legislators party, state, website and MOL id are displayed on a bussiness card. If you click on the MOL**** you are taken to an web page which displays that legislators roles/ committees they belong too.

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

*******
API
*******

API Tutorial
All Rest data is returned in JSON:
Get all Legislators:
http://45.79.221.177/hackweekcs4830/index.php/api/PoliticalApi/legislators
Get legislator by Last Name: http://45.79.221.177/hackweekcs4830/index.php/api/PoliticalApi/legislator_last_name/last/Brown 
Change brown to the legislator state legislator you would like to search for

*********
Site Navigation Tutorial
*********

Site Navigation Tutorial
If the session is set meaning you received a message in Members Area that reads, "You are not logged in". You can navigate feely through the website. Once you click the logout button and you try and go to the below links you will be redirected to the home page because once you click logout the session is destoryed. http://45.79.221.177/hackweekcs4830/index.php/users/login 
http://45.79.221.177/hackweekcs4830/index.php/Legislator/search

