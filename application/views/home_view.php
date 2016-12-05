
<?php if($this->session->flashdata('logout')): ?>
    <?php echo $this->session->flashdata('logout'); ?>
    <div class="container">
        <p class="alert alert-danger">
            You have been logged out
        </p>
    </div>
<?php endif; ?>



<div class="row">
    <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="code">
                        <div class="carousel-caption">
                            <h3>Purpose</h3>
                            <p>
                                To build a 3-tier web application. I used phpmyadmin to build my database and added two tables,
                                one to store information about a registered user and the other to store information about state
                                legislators.  I used the legislators table of my database as a web service and users are able to
                                make rest calls in which the data is returned to user in JSON.
                            </p>
                            <h3>Language/Tools</h3>
                            <p>
                                I decided to write my 3-tier web application in php using a php framework called codeigniter.
                                I also used furry-bear, this is a php library for the OpenStates API,  I also used codeigniter-restserver,
                                which made writing my web service al
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <div class="code">
                        <div class="carousel-caption">
                            <h2>Form</h2>
                            <p>
                                When the user clicks on the register text they are redirect to the register area where they are
                                presented with a registration form.  The user must fill out all textfields, if the user presses the
                                register button the form is sent to the Users/registor function.  The purpose of the User/register is to
                                validate the information on the register form.
                            </p>
                            <h3>Validation Rules</h3>
                            <p>
                                The username, password, first_name, lasst_name and email must all be at least three characters long.  If
                                these text fields do not meet the the miniumn requirements the user in redirected to the register form and
                                the errors are displayed to the user.  Once the form passes the validation process the new user in created
                                and the user is redirected to the home page.  The validated information from the form is sent to the Database at this point the user is able to login,
                                when there username and password that was supplied on the register form.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <div class="code">
                        <div class="carousel-caption">
                            <h3>Login</h3>
                            <p>
                                The user should enter there username and password that was supplied on the registeration form.
                                For demo purposes if you username and password did not work for some reason you could type guest, guest, guest.
                                By typing in guest for the three entries you are logged in as a guest user.  If you enter the wrong login information
                                you are redirected to the home page and need to click the Login text which is located in the top nav bar.  If you enter
                                the correct username and password you will be redirected to the members area.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <div class="code">
                        <div class="carousel-caption">
                            <h3>Members Area</h3>
                            <p>
                                In the members area you are presented with a textfield and a blue button that says send.  In the
                                textfield please enter a two digit state for example if you wanted to search for missouri, you would
                                type mo.  Please use mo, as the state to search for, once you type in mo, you are given a list of
                                legislator for the state of missouri. The legislators party, state, website and MOL id are displayed
                                on a bussiness card.  If you click on the MOL**** you are taken to an web page which displays that legislators
                                roles/ committees they belong too.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="code">
                        <div class="carousel-caption">
                            <h3>API Tutorial</h3>
                            <p>
                                All Rest data is returned in JSON:<br />

                                Get all Legislators:<br />
                                http://45.79.221.177/hackweekcs4830/index.php/api/PoliticalApi/legislators<br />

                                Get legislator by Last Name:
                                http://45.79.221.177/hackweekcs4830/index.php/api/PoliticalApi/legislator_last_name/last/Brown <br />
                                Change brown to the legislator state legislator you would like to search for
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="code">
                        <div class="carousel-caption">
                            <h3>Site Navigation Tutorial</h3>
                            <p>
                                If the session is set meaning you received a message in Members Area that reads, "You are not logged in". You
                                can navigate feely through the website.  Once you click the logout button and you try and go to the below links
                                you will be redirected to the home page because once you click logout the session is destoryed.

                                http://45.79.221.177/hackweekcs4830/index.php/users/login
                                http://45.79.221.177/hackweekcs4830/index.php/Legislator/search
                            </p>
                        </div>
                    </div>
                </div>

                <!-- End Item -->
            </div>
            <!-- End Carousel Inner -->
            <ul class="nav nav-pills nav-justified">
                <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small></small></a></li>
                <li data-target="#myCarousel" data-slide-to="1"><a href="#">Register Tutorial<small></small></a></li>
                <li data-target="#myCarousel" data-slide-to="2"><a href="#">Login Tutorial<small></small></a></li>
                <li data-target="#myCarousel" data-slide-to="3"><a href="#">Members Tutorial<small></small></a></li>
                <li data-target="#myCarousel" data-slide-to="4"><a href="#">API Tutorial<small></small></a></li>
                <li data-target="#myCarousel" data-slide-to="5"><a href="#">Site Navigation Tutorial<small></small></a></li>


            </ul>
        </div>
        <!-- End Carousel -->
    </div>
</div>








