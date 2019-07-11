<!DOCTYPE html>
<html lang="en-us">

    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>The Devil's Mouth at Salmon River Adventures - The ultimate whitewater thriller!</title>
    </head>

    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        </header>

        <nav>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav.php'; ?>
        </nav>

        <main>

            <div class="pageTitle">
                <h1>The Devil's Mouth</h1>
                <p class="subTitle">Are you ready to turn up the heat?</p>
            </div>

            <picture>
                <source media="(max-width: 410px)" srcset="images/devil-mini.jpg">
                <source media="(max-width: 655px)" srcset="images/devil-small.jpg">
                <source media="(max-width: 900px)" srcset="images/devil-medium.jpg">
                <img src="images/devil-large.jpg" alt="white water rafting">
            </picture>

            <section>
                <div class="images">
                    <img src="images/kayakfall.jpg" alt="Devil's Mouth"><br><br>
                    <img src="images/devil1.jpg" alt="SRA Devil's Mouth">
                </div>

                <div class="stats">
                    <h2>Difficulty Rating: Ultra Extreme!</h2>
                    <p>Age 18 and up only. Prior experience in rough rapids highly recommended.</p>
                    <h2>Journey Length: 5 miles (approx. 2.5 hrs)</h2>
                    <p>Brief moments of high speed and many more of battling rocks and rapids.</p>
                    <h2>Adventure Guide: Michael Phelps</h2>
                    <p>It takes the best swimmers to overcome this raging river adventure regularly.</p>
                    <h2>Chance of Survival: Fair</h2>
                    <p>Most adventurers who don't return are typically found within 72 hours.</p>
                    <h2>Testimonials:</h2>
                    <p>"We almost totally died like 3 times! It was sweet! I can't wait to almost die again!" <br>
                        <span class="miniText">-Random Surfer Guy</span></p><br>
                    <p>"What kind of river has sharks?! You people are crazy! What is wrong with you?!" <br>
                        <span class="miniText">-Sally Scaredy-cat</span></p> <br>
                    <p>"Glug- glug- gurgle- gurgle..." <br>
                        <span class="miniText">-John Doe</span></p>
                </div>
            </section>

            <section>
                <div class="stats">
                    <h2>Admission Price for all thrill seekers: $1.50/lb<br></h2>
                    <p>Lose weight and save! Seriously, our rafts are getting really worn out by this river.</p>
                    <h2>Equipment rental $50 + $100 deposit</h2>
                    <p>Supplies include raft, life jacket, paddles, helmets, first-aid kit, emergency whistle, flare gun, 48-hour survival kit, bear taser, deck of cards, and an Avengers 2 Blu-ray.</p>
                    <h2>Required documents to be submitted prior to participation:</h2>
                    <ol>
                        <li>Health and safety waiver</li>
                        <li>Emergency contact information</li>
                        <li>Last will and testament</li>
                        <li>Week 5 jQuery Tutorial Assignment</li>
                        <li>Sign my yearbook</li>
                    </ol><br>
                    <p class="reserve"><a href="reservations.php">Reserve Your Trip</a></p>
                </div>
                <div class="images"><br><br>
                    <img src="images/paperwork.jpg" alt="paperwork">
                </div>

            </section>

        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
        </footer>

        <script src="scripts/hamburger.js"></script>
        <script src="scripts/generalscripts.js"></script>
        <script>wayfinder("devil");</script>

    </body>
</html>
