<!DOCTYPE html>
<html lang="en-us">

    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Salmon River Adventures Home - The whitewater experience of a lifetime!</title>
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
                <h1>Salmon River Adventures</h1>
                <p class="subTitle">Get ready for the whitewater experience of a lifetime!</p>
            </div>

            <picture>
                <source media="(max-width: 410px)" srcset="images/adv1-mini.jpg">
                <source media="(max-width: 655px)" srcset="images/adv1-small.jpg">
                <source media="(max-width: 900px)" srcset="images/adv1-medium.jpg">
                <img src="images/adv1-large.jpg" alt="white water rafting">
            </picture>

            <div class="srascript">
                <p> You have never been kayaking or river rafting until you have traversed the world-class rapids of the Salmon River. Located in central Idaho, the Salmon River is Mother Nature’s gift to extreme adventurers seeking the ultimate whitewater experience.
                   <br><br>
                Salmon River Adventures, based in Riggins, Idaho, is the gateway to your journey down this extraordinary river. Our mission is to provide you with the highest quality services the Salmon River Canyon has to offer while helping you to obtain the memories of a lifetime. Salmon River Adventures serves everyone. Your tri-fold adventure begins here.</p>
            </div>

            <section class="homecontainer">
                <h3 class="homeheading">Choose Your Adventure:</h3><br><br>
                    <a href="serenity.php">
                        <div class="homeflexitems">
                            <h3>Serenity Lake</h3><img src="images/tubing.jpg" alt="picture"><p>Peaceful, serene, beautiful. Whether you are pursuing that prized catch, yearning to drift aimlessly down a lazy river, seeking family fun, or just wanting to lounge in the sun, Serenity Lake welcomes all. Isn’t it about time you relaxed on the river? (Click for details)</p>
                        </div>
                    </a>
                    <a href="springcanyon.php">
                        <div class="homeflexitems">
                            <h3>Spring Canyon</h3>
                            <img src="images/canyonhome.jpg" alt="picture"><p>Perfect for casual thrill-seekers, Spring Canyon offers a balance of exhilarating and tranquil moments. Rapids on these waters are plentiful and the majestic view will leave you mesmerized. Come and see what our most popular attraction is all about. (Click for details) </p>
                        </div>
                    </a>
                    <a href="devilsmouth.php">
                        <div class="homeflexitems">
                            <h3>Devil's Mouth</h3>
                            <img src="images/homefall.jpg" alt="picture"><p>Adrenaline junkies, take note! If you are a highly skilled kayaker, have skin of steel, or have a bit of a death wish, the Devil’s Mouth is for you. The rewards for conquering this 'Everest' of the Salmon River are glorious but do you have what it takes? (Click for details)</p>
                        </div>
                    </a>
                <div class="reserveblock">
                    <p class="reserve"><a href="reservations.php">Reserve Your Trip</a></p>
                </div>

            </section>

            <section>
                <div class="stats">
                    <h2>History of the Salmon River Canyon<br></h2>
                    <p>The Salmon River Canyon was discovered in 1732 by Lorem Ipsum who, when being chased by a wild bear, dolor sit amet, consectetur adipiscing elit. At that point in his life he came across eu lacus vel dolor cursus malesuada vel id lacus. Eventually Lorem Ipsum moved a band of settlers near what is now Serenity Lake, which vivamus convallis in dolor ac efficitur. Phasellus consequat ante libero, vel ultricies ex iaculis ac.  <br><br>
                    The canyon was carved by aliens who regularly visited to abduct curabitur porttitor, odio vel aliquet luctus, dolor tortor facilisis enim, non ultricies metus odio ut enim. Later, the historical documentary film, Cowboys and Aliens was produced. Tiny water dwelling aliens in the Salmon River still, to this day, nam erat nisl, porttitor vel sapien efficitur, dictum mollis dui. </p><br>
                    <h2>The Salmon River Today</h2>
                    <p>
                    Today the Salmon River is used for extreme whitewater adventures by the world-famous Salmon River Adventures company based out of Riggins, Idaho. Even more famous than this corporate behemoth is its handsome, intelligent, rich, talented, and exceptionally humble front-ended web developer, Jonathan Carlson. Legends say that he was born for the sole purpose of nullam sit amet enim rutrum magna sollicitudin maximus. Curabitur eget maximus velit. Cras vel blandit urna. Duis eget justo ac enim egestas mattis. Aenean nec felis id nisl lacinia posuere at feugiat ante.
                    <br><br>
                    One day, the volcanic cauldron brewing deep beneath the Salmon River Canyon will aenean id scelerisque libero. Fusce interdum, arcu quis fringilla efficitur, ipsum sem cursus dui, a efficitur arcu augue ac velit. Sister Campbell, I will give you a dollar if you catch this (update- your dollar is in the mail). Proin eget magna rhoncus, bibendum purus ac, ultricies massa. Vestibulum ac felis pellentesque, mattis enim sed, tempor ligula.
                    </p>
                </div>

                <div class="images">
                    <img src="images/rivermap.jpg" alt="paperwork" class="paperw"><br>
                    <img src="images/canyonriver.jpg" alt="paperwork" class="paperw">
                </div>
            </section><br>
        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>

            <script src="scripts/hamburger.js"></script>
            <script src="scripts/generalscripts.js"></script>
            <script>wayfinder("home");</script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        </footer>
    </body>
</html>
