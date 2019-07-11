<!DOCTYPE html>
<html lang="en-us">

    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Contact Salmon River Adventures in Riggins Idaho.g</title>
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
                <h1>Contact Us</h1>
                <p class="subTitle">Let us help you plan your adventure.</p>
            </div>

            <picture>
                <source media="(max-width: 410px)" srcset="images/spcanyon-mini.jpg">
                <source media="(max-width: 655px)" srcset="images/spcanyon-small.jpg">
                <source media="(max-width: 900px)" srcset="images/spcanyon-medium.jpg">
                <img src="images/spcanyon-large.jpg" alt="Spring Canyon whitewater raftin">
            </picture>

            <div class="srascript">
                <p> You have never been kayaking or river rafting until you have traversed the world-class rapids of the Salmon River. Located in central Idaho, the Salmon River is Mother Nature’s gift to extreme adventures seeking the ultimate whitewater experience.
                    <br><br>
                    Salmon River Adventures, based in Riggins Idaho, is the gateway to your journey down this extraordinary river. Our mission is to provide you with the highest quality services the Salmon River Canyon has to offer while helping you to obtain the memories of a lifetime. Salmon River Adventures serves everyone. Your tri-fold adventure begins here.</p>
            </div>

            <section class="homecontainer">
                <div class="contactstuff">
                    <h2>Address:</h2>
                    <p>
                        Salmon River Adventures<br>
                        1000 Main St<br>
                        Riggins, Idaho 83549<br>
                    </p>
                    <h2>Phone:</h2>
                    <a href="tel:7897657345"><p>789-765-7345</p></a>
                    <h2>Email:</h2>
                    <p><a href="mailto:admin@SRAdventures.com">admin@SRAdventures.com</a></p>
                </div>

                <div class="contact">
                    <h2>Send us a message:</h2>
                    <form action="confirmation.php">
                        <input type="email" name="email" placeholder="Enter your email address here">
                    </form>
                        <form action="confirmation.php">
                        <textarea placeholder="Type your message here..." name="message" rows="4" cols="35"></textarea>
                    </form>
                    <form action="confirmation.php">
                        <input type="submit" class="submit">
                    </form>
                </div>


                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.6122545391354!2d-116.32013982898586!3d45.41715803767134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54a6c56be892013d%3A0xf34792f82bc2a30b!2s1000+Main+St%2C+Riggins%2C+ID+83549!5e0!3m2!1sen!2sus!4v1504212412401" width="800" height="600" style="border:0" allowfullscreen></iframe>
            </section>

        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
        </footer>

        <script src="scripts/hamburger.js"></script>
        <script src="scripts/generalscripts.js"></script>
        <script>wayfinder("contact");</script>

    </body>
</html>
