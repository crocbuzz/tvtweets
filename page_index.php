<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TV Tweets</title>

        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/pure.min.css">
        <link rel="stylesheet" href="css/grids-responsive.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/default.css" />
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <div class="header">
            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href="">tvtweets</a>

                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="#about" class="pure-menu-link">About</a></li>
                    <li class="pure-menu-item"><a href="#tv" class="pure-menu-link">TV</a></li>
                    <li class="pure-menu-item"><a href="#movies" class="pure-menu-link">Movies</a></li>
                </ul>
            </div>
        </div>

        <div class="splash-container">
            <div class="splash">
                <h1 class="splash-head">Big Bold Text</h1>
                <p class="splash-subhead">
                    Browse movies and TV shows based on genre and view related tweets...
                </p>
                <p>
                    <a href="includes/authenticate.php" class="pure-button pure-button-primary">Get Started</a>
                </p>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="content" id="about">
                <h2 class="content-head is-center">Entertainment at your fingertips.</h2>

                <div class="pure-g">
                    <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                        <h3 class="content-subhead">
                            <i class="fa fa-rocket"></i>
                            Quick and Secure
                        </h3>
                        <p>
                            Sign in quickly and securely with your existing Twitter account. You never have to reveal your password to us.
                        </p>
                    </div>
                    <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                        <h3 class="content-subhead">
                            <i class="fa fa-mobile"></i>
                            Mobile-Friendly
                        </h3>
                        <p>
                            Get the information you want whenever and wherever you are, even on mobile!
                        </p>
                    </div>
                    <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                        <h3 class="content-subhead">
                            <i class="fa fa-clock-o"></i>
                            Always Accurate
                        </h3>
                        <p>
                            Our data sources are examined often for accuracy. We take pride in having the latest, most accurate data available to you.
                        </p>
                    </div>
                    <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                        <h3 class="content-subhead">
                            <i class="fa fa-hashtag"></i>
                            Relevent Hashtags
                        </h3>
                        <p>
                            We display the most relevant Twitter hashtag for the show or movie you choose.
                        </p>
                    </div>
                </div>
            </div>

            <div class="ribbon l-box-lrg pure-g">
                <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
                    <img class="pure-img-responsive" alt="File Icons" width="300" src="img/ucf.png">
                </div>
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

                    <h2 class="content-head content-head-ribbon">Disclaimer</h2>

                    <p>
                        This is an educational assignment prepared for the UCF SVAD course DIG4503: Rapid App with Dan Novatnak, Spring 2016.
                        Not a commercial product.
                    </p>
                </div>
            </div>

            <div class="content">
                <h2 class="content-head is-center">Dolore magna aliqua. Uis aute irure.</h2>

                <div class="pure-g">
                    <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                        <form class="pure-form pure-form-stacked">
                            <fieldset>

                                <label for="name">Your Name</label>
                                <input id="name" type="text" placeholder="Your Name">


                                <label for="email">Your Email</label>
                                <input id="email" type="email" placeholder="Your Email">

                                <label for="password">Your Password</label>
                                <input id="password" type="password" placeholder="Your Password">

                                <button type="submit" class="pure-button">Sign Up</button>
                            </fieldset>
                        </form>
                    </div>

                    <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                        <h4>Contact Us</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </p>

                        <h4>More Information</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>

            </div>

            <div class="footer l-box is-center">
                Made with <i class="fa fa-heart"></i> by Croc
            </div>

        </div>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>