<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BriAnna Marsh's Home Page | CS 313</title>
    <link href="css/styles.css" rel="stylesheet" media="screen">
</head>

<body>
    <header>
        <!-- <img src="#" alt="placeholder"> -->
        <span>BriAnna Marsh</span>
        <?php echo "Today's date is " . date("F j, Y"); ?>
    </header>

    <section class="intro">
        <h1>Welcome to my website!</h1>
        <p>This is a homepage for my CS 313 class. If you would like to view
            assignments I have completed, please click the button below. If you would
            like to learn a little more about me <a href=#aboutMe>scroll down</a>.</p>
        <p class="assignBtn"><a>View Assignments</a></p>
    </section>

    <section id="aboutMe">
        <h2>Hello, my name is <span class="fancier">BriAnna<span></h2>
        <div class="aboutMeWrap">
            <div>
                <h3>A little bit about me:</h3>
                <p>I am currently studying Web Development with a minor in Web Design
                    here at BYUI. I'm currently living in Rexburg and normally I would try and
                    go on campus but I've been taking online classes lately. I currently work
                    as a TA for CSE 340 Web Backend Development 1 class. I've been programming
                    since high school, so about three years now and I absolutely love it!
                </p>
            </div>
            <div>
                <h3>My family:</h3>
                <p>I was born and raised in Utah, my family consists of my parents, me, and
                    my four younger sisters. We're all over the place with me in college, my sister
                    is serving a mission in Chile, and for the last three we've got one each in High
                    School, Junior High, and Elementary. Just over this last Christmas break I got
                    engaged and I'm super excited to start a family of my own here in the near future.</p>
            </div>
            <div>
                <h3>Fun stuff:</h3>
                <p>Some of my hobbies include programming (big suprise), digital artwork, baking,
                    and playing both board games and video games. My favorite board games right now
                    have to be Mysterium and Betrayal at the House on the Hill. As for video games I love
                    Spirit Farer, What Remains of Edith Finch, and especially League of Legends.</p>
            </div>
        </div>
    </section>
    <footer>
        <p>All images used are believed to be in "Fair Use". Please notify the author if any are not and they will be removed.</p>
        <p>Last Updated: <?php echo date('j F, Y', getlastmod()) ?></p>
    </footer>
</body>

</html>