<!DOCTYPE html>
<html lang="en">
<head>
     <title> M.L.W | Home </title>
    <meta charset="utf-8" />
    <meta name="description" content="Matthew Wright's programming portfolio. Displayed is an evident  ." />
    <meta name="keywords" content="computer, programming, developer, software, engineering, HTML, CSS, JavaScript, PHP, Java, C#, MySQL, sharepoint, servicenow, migration, innovation, automation, branding, marketing, Matthew, Wright, Portfolio" />
    <meta name="author" content="Matthew Wright - LinkedIN: https://www.linkedin.com/in/matthew-wright-151348135/" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script|Squada+One&display=swap" rel="stylesheet"><!--google font-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" /><!--bootstrap library link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" /><!--bootstrap style link-->
    <link href="StyleFiles/MainStyleSheet/Main_Design_StyleSheet.css" rel="stylesheet" /> <!--my local stylesheet (placed after bootstrap styles on purpose - so you can style bootstrap within local stylesheet)-->
    <link href="StyleFiles/JavaScript_Styles/JavaScript_Design_Class_Styles.css" rel="stylesheet" /><!--my local stylesheet referenced by my local javascript file (placed after bootstrap styles on purpose - so you can style bootstrap within local stylesheet)-->
    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body id="body">
    <div class="backgroundImage"></div>
    <div id="Welcome">
        <!--Wrapper div-->
        <!--------------------------------------------------Top Section----------------------------------------------------->
        <header id="headerLogoBackground" class="headerLogoBackGroundTransform">
            <!--header-->
            <div id="headerLogo" class="headerLogo headerMove"><a id="headerLogoLink" href="index.php" title="Matthew Lee Wright"><img class="headerLogo_picture" titel="Matthew Lee Wright" alt="The Matthew Lee Wright Logo." src="Pictures/CoolLogo.png" /></a></div>
            <!--navigation-->
            <nav id="navRaise" class="navRaise">
                <ul id="navUl" class="navUlStyle_removeBackground_color">
                    <li><a id="topNav" class="navLinkStyle" title="Go to the Top" href="#myCarousel" role="button" data-slide="next"> About </a></li>
                    <li><a id="servicesNav" class="navLinkStyle" title="My Projects" href="#Services"> Projects </a></li>
                    <li><a id="contactNav" class="navLinkStyle" title="Get in touch" href="#Contact">  Contact  </a></li>
                </ul>
            </nav>
        </header>
    
    <?php
    /**
        <div class="topSection">

            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="">
                        <!-- bootstrap carousel items -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active"><!--first carousel item-->
                                <div id="actionContentWrapper">
                                    <div id="actionContent">
                                        <div class="" role="option">
                                            <p class="introP">
                                                Bring usefulness to the world through exceptional quality 
                                                with innovative and forward-thinking for
                                                a brighter tomorrow.
                                                - Matthew Wright
                                            </p> 
                                            <div id="ButtonCenter">
                                                <form class="actionButtonForm" action="Resume/Matthew Wright's Resume - Revised_February2020.docx" method="post">
                                                    <button class="actionButton" type="submit" title="Download the most current version of Matthew's Resume">Resume</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item"><!--second carousel item-->
                                <div class="" role="option">                                     
                                    <p class="aboutSection">
                                       Matthew's mission is to bring exceptional quality in providing usefulness to the world
                                       through innovation and forward-thinking. He is a first-principles analyst and
                                       software engineer with experience developing in multiple programming languages
                                       and platforms across the full stack. His work history ranges from developing
                                       object-oriented C#, Java enterprise, and PHP web applications within an MVC
                                       architecture that included RESTful APIs using the Agile development philosophy.
                                       It also involves building sites, managing permissions, and assisting with data-migrations
                                       inside of the Microsoft SharePoint platform and performing performance tuning
                                       and SEO boosting of various applications on the web. He is currently learning
                                       Microsoft Azure cloud development. 
                                    </p>
                                </div>      
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>

                        </div>
                        <!--end bootstrap carousel items-->                     
                    </div>
            </div>
            **/
   ?>
       
   <!--<h2 class="servicesTitle"> We Bring Value! </h2>-->


        <main>
            <!--------------------------------------------------Services Section------------------------------------------------------------------------------------------------------------>
            <div id="Services" title="Services"></div>

            <div id="innerWrapper">
                <div id="middleServicesLeft">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">

                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
                        </ol>

                        <!--bootstrap carousel items-->
                        <div class="carousel-inner" role="listbox">

                            <div class="item active">
                                <a href="https://youtu.be/7wjuCgtL0yA" target="_blank" rel="noopener">
                                    <img src="Pictures/field_temporary.jpg" alt="This is a temporary picture which shows a beautiful green pastur in the midst of bright dewy morning as a bright and shining sun sits on the clear damp horizon. The image is a clickable link that redirects to YouTube video of Dave Ramsey teaching everyday people how to become a millionaire." title="Learn How to be a millionaire with Dave Ramsey. " class="img-responsive" /> <!-- a picture here -->
                                </a>
                                <div class="carousel-caption" role="option">
                                    <a href="https://youtu.be/7wjuCgtL0yA" target="_blank" rel="noopener" class="buttonStyle_Project" title="How To become a Millionaire. The hard truth with Dave Ramsey.">Let's Grow</a>
                                    <h4 class="projectStatement">Become a Millionaire. The Hard Truth.</h4>
                                </div>
                            </div>

                            <div class="item">
                                <a href="https://youtu.be/00cizszd4z0" target="_blank" rel="noopener">
                                    <img src="Pictures/earth_temporary.jpg" alt="This is a temporary image of the earth from space with an icey cold atmosphere displaying many glacier creast peaks rising above the cloudy atmosphere. The image is a clickable link which that redirects to YouTube video of Elon Musk giving wisdom and knowledge to everyday people about how to truly stay motivated, make change, overcome, take risk, and change the world." /> <!-- a picture here -->
                                </a>
                                <div class="carousel-caption" role="option">                                     
                                    <a href="" target="_blank" class="buttonStyle_Project" title="Click for service 2.">Change the World</a> &nbsp;&nbsp;&nbsp;
                                    <h4 class="projectStatement">Know your passion. Change the World.</h4>                                                                                                                                                                                                                                     
                                </div>                                                                                                      
                            </div>

                        </div>
                        <!--end bootstrap carousel items-->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div> <!-- end div middle -->

                <div class="row">
                    <div class="column">
                      <h2>Column 1</h2>
                      <p>Some text..</p>
                    </div>
                    <div class="column">
                      <h2>Column 2</h2>
                      <p>Some text..</p>
                    </div>
                    <div class="column">
                      <h2>Column 3</h2>
                      <p>Some text..</p>
                    </div>
                </div>


                <div id="videoServicesRight">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/az6NibAUf7Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen rel="noopener"></iframe>
                </div> <!-- end div videoServicesRight -->
            </div><!-- end inner wrapper div -->
            <!--------------------------------------------------Foundation Section---------------------------------------------------------------------------------------------------------->
            <div id="foundationSection">
                <div id="foundationContent">
                        <h3 id="foundationPitch">Help Make a Difference! Support the Cause!</h3>
                        <a href="http://www.matthewleewright.com" target="_blank" rel="noopener" class="buttonStyle" title="The Instrument Foundation"> Music Foundation </a>
                </div>
            </div><!-- end div foundationSection -->
            <!--------------------------------------------------Contact Section------------------------------------------------------------------------------------------------------------->
            <div id="Contact" title="Contact"></div>
            <div id="bottomContact">
                <h2 class="contactTitle"> Let's Connect! </h2>
                <form class="contactForm" method="post" action="wasItSuccessful.php" onsubmit="return validate_input(this);">
                    <label for="firstName"> First Name: </label>
                    <input type="text" name="firstName" id="firstName" tabindex="0" placeholder="   First Name..." title="First Name" required="required" />
                    <br />
                    <label for="lastName"> Last Name: </label>
                    <input type="text" name="lastName" id="lastName" tabindex="0" placeholder="   Last Name..." title="Last Name" required="required" />
                    <br />
                    <label for="email"> Email: </label>
                    <input type="email" name="email" id="email" tabindex="0" placeholder="   E-mail..." title="Email" required="required" />
                    <br />
                    <label for="phone"> Phone: </label>
                    <input type="tel" name="phone" id="phone" tabindex="0" placeholder="   Phone Number... (Optional)" title="Phone Number" />
                    <br />
                    <label for="comments"> Message: </label>
                    <textarea name="comments" id="comments" tabindex="0" cols="70" rows="12" maxlength="1500" placeholder="How Can We Help You?" title="Send us a message!" required="required"> </textarea> <br />
                    <br />
                    <input type="submit" name="submit" value="Send" tabindex="0" title="Send" id="submit" />
                </form>
            </div><!-- end div bottom -->
        </main>
        <!-------------------------------------------------------Custom Alert Error Box Display for JavaScript Form Validation -------------------------------------------------------------------->
        <div id="dialogOverlay"></div>
        <div id="dialogBox">
            <div>
                <div id="dialogBoxHead"></div>
                <div id="dialogBoxDirections"></div>
                <div id="dialogBoxBody"></div>
                <div id="dialogBoxFooter"></div>
            </div>
        </div>
        <!-- END Custom Alert Error Box Display for JavaScript Form Validation -->
        <footer>
            &copy; <?php echo date("Y"); ?> TotalCareerFreedom.com
        </footer>
    </div><!-- end div wrapper -->
    <!-----------------------------------------------------------Bootstrap JQuery Documents-------------------------------------------------------------------------------------------------------->
    <script src="lib/jquery/dist/jquery.js"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="js/site.js" asp-append-version="true"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-----------------------------------------------------------Local JavaScript Documents-------------------------------------------------------------------------------------------------------->
    <script src="ScriptFiles/Navigation/NavButtonActiveHold.js"></script>
    <script src="ScriptFiles/Navigation/NavBarScrollUpTransfigure.js"></script>
    <script src="ScriptFiles/Security/CleanFormInput.js"></script>
    <script src="ScriptFiles/Security/CustomErrorAlert.js"></script>

    </body>
</html>
