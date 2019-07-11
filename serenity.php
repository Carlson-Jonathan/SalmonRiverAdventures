<!DOCTYPE html>
<html lang="en-us">

    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Fishing, tubing, kayaking and relaxing on the lazy river at Serenity Lake at Salmon River Adventures.</title>
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
                <h1>Serenity Lake</h1>
                <p class="subTitle">Relax and enjoy the scenery.</p>
            </div>

            <picture>
                <source media="(max-width: 410px)" srcset="images/serenity-mini.jpg">
                <source media="(max-width: 655px)" srcset="images/serenity-small.jpg">
                <source media="(max-width: 900px)" srcset="images/serenity-medium.jpg">
                <img src="images/serenity-large.jpg" alt="white water rafting">
            </picture>

            <section>
                <div class="images">
                    <img src="images/girlfish.jpg" alt="Devil's Mouth"><br><br>
                    <img src="images/serenity2.jpg" alt="SRA Devil's Mouth">
                </div>

                <div class="stats">
                    <h2>Difficulty Rating: None</h2>
                    <p>Great for any age. Tube down the lazy river, go fishing, or just enjoy the landscape.</p>
                    <h2>Journey Length: 4 miles</h2>
                    <p>Lazy river exit points every 1.3 miles where shuttles wait to pick you up.</p>
                    <h2>Adventure Guide: Ariel Triton</h2>
                    <p>Our speedy guide can traverse the length of the river in minutes, watching over all.</p>
                    <h2>Danger Level: Completely Safe</h2>
                    <p>The waist deep river empties into Serenity Lake. Life vests required.</p>
                    <h2>Testimonials:</h2>
                    <p>"Beautiful scenery, calm waters, friendly staff. Would recommend to anyone." <br>
                        <span class="miniText">-Lazy Lou</span></p><br>
                    <p>"I caught a 32 inch trout! This is the best fishing hole I have ever been to!" <br>
                        <span class="miniText">-Joe Fisher</span></p> <br>
                    <p>"The family and I had a great time! There are plenty of activities to keep you busy." <br>
                        <span class="miniText">-Mommy Mormon</span></p>
                </div>
            </section>

            <section>
                <div class="stats">
                    <h2>Admission Price $30 per person.<br></h2>
                    <p>Come to fish, swim, lounge on the shore, purchase souvenirs, and enjoy good food.</p>
                    <h2>Equipment rental $25 per person + $50 deposit per group.</h2>
                    <p>Includes use of all facilities, raft, kayak, tube, lifejacket rentals.</p>
                    <h2>Required documents to be submitted prior to participation:</h2>
                    <ol>
                        <li>Liability waiver</li>
                        <li>Emergency contact information</li>

                    </ol><br>
                    <p class="reserve"><a href="reservations.php">Reserve Your Trip</a></p>
                </div>
                <div class="images">
                    <img src="images/paperwork3.jpg" alt="paperwork">
                </div>

            </section>

        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
        </footer>

        <script src="scripts/hamburger.js"></script>
        <script src="scripts/generalscripts.js"></script>
        <script>wayfinder("lake");</script>

    </body>
</html>
