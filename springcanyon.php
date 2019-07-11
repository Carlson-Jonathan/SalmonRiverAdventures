<!DOCTYPE html>
<html lang="en-us">

    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Whitewater rafting and kayaking down the Salmon River. An action packed good time!</title>
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
                <h1>Spring Canyon</h1>
                <p class="subTitle">An action-packed good time!</p>
            </div>

            <picture>
                <source media="(max-width: 410px)" srcset="images/spcanyon-mini.jpg">
                <source media="(max-width: 655px)" srcset="images/spcanyon-small.jpg">
                <source media="(max-width: 900px)" srcset="images/spcanyon-medium.jpg">
                <img src="images/spcanyon-large.jpg" alt="Spring Canyon whitewater raftin">
            </picture>

            <section>
                <div class="images">
                    <img src="images/spring1.jpg" alt="Spring Canyon"><br><br>
                    <img src="images/spring2.jpg" alt="SRA Spring Canyon">
                </div>

                <div class="stats">
                    <h2>Difficulty Rating: Moderate</h2>
                    <p>Age 12 and up. Recommended for families and groups of friends.</p>
                    <h2>Journey Length: 3 miles (approx. 1.5 hrs)</h2>
                    <p>Few rock obstacles, deep water, fast current and lots of rapids (most popular).</p>
                    <h2>Adventure Guide: Captain Black Beard</h2>
                    <p>He be navigate'n you through yonder river, but guard your booty or it be gone!</p>
                    <h2>Danger Level: Low</h2>
                    <p>Wear your safety equipment and follow the rafting rules and everything will be fine.</p>
                    <h2>Testimonials:</h2>
                    <p>"Long stretches of fast and bumpy currents. I had a great time and would go again!" <br>
                        <span class="miniText">-Joe Shmoe Nobody</span></p><br>
                    <p>"Our guys had a lot of fun! The perfect outing adventure for our youth group." <br>
                        <span class="miniText">-Peter Priesthood</span></p> <br>
                    <p>"It was my 21st tour and it never gets old. Mother nature keeps you on your toes!" <br>
                        <span class="miniText">-Roger Rabbit</span></p>
                </div>
            </section>

            <section>
                <div class="stats">
                    <h2>Admission Price for all thrill seekers: $50<br></h2>
                    <p>Gratuity not included. Please tip your tour guides. We pay them peanuts.</p>
                    <h2>Equipment rental $20 + $100 deposit</h2>
                    <p>Supplies include raft, life jacket, paddles, helmets, first-aid kit, emergency whistle. You may bring your own equipment for a discounted rate.</p>
                    <h2>Required documents to be submitted prior to participation:</h2>
                    <ol>
                        <li>Health and safety waiver</li>
                        <li>Emergency contact information</li>
                        <li>Friends and family references</li>
                        <li>SRA credit card application</li>
                    </ol><br>
                    <p class="reserve"><a href="reservations.php">Reserve Your Trip</a></p>

                </div>
                <div class="images"><br>
                    <img src="images/paperwork2.jpg" alt="paperwork">
                </div>

            </section>
        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
        </footer>

        <script src="scripts/hamburger.js"></script>
        <script src="scripts/generalscripts.js"></script>
        <script>wayfinder("spring");</script>

    </body>
</html>
