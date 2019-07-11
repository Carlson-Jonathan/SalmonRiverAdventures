<!DOCTYPE html>
<html lang="en-us">

    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Reservation confirmation at Samlon River Adventures.</title>
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

            <section class="homecontainer">
                <div class="homeflexitems" id="thankyou">
                    <h2>Thank you for your Submission!</h2>
                    <p>
                        If you requested a reply or if we have any questions we will contact you within a week of your submission. If you do not hear from us in this time frame, please do exactly the same thing you did the first time and hope we didn't ignore you. We at Salmon River Adventures appreciate your business and are striving to provide the best possible service. <br>
                    </p>
                </div>
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
