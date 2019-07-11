<!DOCTYPE html>
<html lang="en-us">

    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>River guides at Salmon River Adventures with names, qualifications and contact information.</title>
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
                <h1>Salmon River Adventure Guides</h1>
                <p class="subTitle">Only the best will due for your adventure.</p>
            </div>

            <picture>
                <source media="(max-width: 410px)" srcset="images/spcanyon-mini.jpg">
                <source media="(max-width: 655px)" srcset="images/spcanyon-small.jpg">
                <source media="(max-width: 900px)" srcset="images/spcanyon-medium.jpg">
                <img src="images/spcanyon-large.jpg" alt="Spring Canyon whitewater rafting">
            </picture>

            <div class="srascript">
                <p>At Salmon River Adventures we are committed to providing you maximum enjoyment while maintaining safe and secure recreational activities on the Salmon River. We select only the most highly qualified individuals to guide our adventure tours. In addition to their flawless safety record, each guide has unique, entertaining skills to contribute to your voyage, which will ensure a remarkable journey like no other. We highly recommend tipping your guide. Keep them motivated and they will keep the fun coming!
                <br><br>
                <span class="center">(Click on their name to read about your guide.)</span>
                </p>
            </div>

<!--************************ Guide Profiles **********************-->

           <div class="guidebody">
                <ul class="dropdownmenu">
                    <li><h2>Ariel Triton - Guide to Serenity Lake</h2>
                        <ul>
                            <li class="dropdownlist2 clearfix">
                                <img src="images/ariel.jpg" alt="Ariel Little Mermaid" class="guidepic">
                                Certification Level: Water Princess<br>
                                Age: 16 Forever<br>
                                Years of experience: 27<br>
                                Contact: Iloveshiney@SRA.com<br>
                                Hometown: Atlantica<br>
                                Hobbies: Singing, Exploring, Cutlery Hoarding<br><br>

                                Only rivaled by Michael Phelps in her swimming abilities, Ariel can circle Serenity Lake in the blink of an eye. She knows every fish and boulder and can easily retrieve lost belongings from anywhere in the Salmon River Canyon. Give her something shiny and she will make your relaxing time on the water even more blissful with her world-renowned melodies, which were thought to lure sailors to their deaths. Ariel is the choice guide for a peaceful cruise down the river or on the lake.<br><br>
                            </li>
                        </ul>
                    </li>
               </ul>

                <ul class="dropdownmenu">
                    <li><h2>Captain Blackbeard - Guide to Spring Canyon</h2>
                        <ul>
                            <li class="dropdownlist2 clearfix">
                                <img src="images/blackbeard.jpeg" alt="Ariel Little Mermaid" class="guidepic">
                                Certification Level: River Captain<br>
                                Years of experience: 273<br>
                                Contact: treasurecove32@SRA.com<br>
                                Age: Ancient<br>
                                Hometown: Bristol’s England?<br>
                                Hobbies: Pillaging, Plundering, Swag Hoarding<br><br>

                                With centuries of acquired knowledge about ocean and river currents, Captain Blackbeard knows the most thrilling and exotic routes to take down the Salmon River. Whether raging rapids, waterfalls or sea monsters, he fears nothing the aquatic world throws at him. This old sea dog is not scared to get his feet wet and will even throw in a few extra tour features not included in the brochure. Watch your valuables though. Even as a tour guide, he is still a pirate at heart!<br><br>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="dropdownmenu">
                    <li><h2>Michael Phelps - Guide to The Devil's Mouth</h2>
                        <ul>
                            <li class="dropdownlist2 clearfix">
                                <img src="images/phelps.jpg" alt="Ariel Little Mermaid" class="guidepic">
                                Certification Level: Grandmaster Hydromancer<br>
                                Age: 32<br>
                                Years of experience: 25<br>
                                Contact: swimmersear@SRA.com<br>
                                Hometown: Baltimore Maryland<br>
                                Hobbies: Water Aerobics, Impressing People, Gold Hoarding<br><br>

                                Bio: Grandmaster Olympian swimmer Michael Phelps is one of the few qualified individuals to safely guide you through the Devil’s Mouth. With 68 rescues under his belt, he is ever ready and alert of the dangers you will traverse in one of the world’s most perilous (and fun) river adventures. It is rumored that Phelps swam the Devil’s Mouth backwards, including swimming up both 30ft waterfalls, in under 1.5 hours. With him as your guide, you have nothing to fear- unless he calls in sick.<br><br>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

<!--*********************** End Guide Profiles *******************-->


        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
        </footer>

        <script src="scripts/hamburger.js"></script>
        <script src="scripts/generalscripts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>wayfinder("guide"); guides();</script>

    </body>
</html>
