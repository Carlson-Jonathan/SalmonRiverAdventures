<!DOCTYPE html>
<html lang="en-us">

    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Reservations at Salmon River Adventures whitewater kayak and rafting resort.</title>
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
                <h1>Salmon River Reservations</h1>
                <p class="subTitle">Your whitewater adventure begins here!</p>
            </div>

            <picture>
                <source media="(max-width: 410px)" srcset="images/shorerafts-mini.jpg">
                <source media="(max-width: 655px)" srcset="images/shorerafts-small.jpg">
                <source media="(max-width: 900px)" srcset="images/shorerafts-medium.jpg">
                <img src="images/shorerafts-large.jpg" alt="Spring Canyon whitewater raftin">
            </picture>

            <div class="srascript">
                <p> Select your adventure based on the below information and complete the registration form. All fields must be completed properly before submitting. You may be contacted withing one week for us to obtain additional information or regarding payment issues.
                <br><br>
                If you have any questions, please <a href="contact.php">contact us</a> and we will try to reply in a timely fasion. We appreciate your business!
                </p>
            </div>

            <table>
                <tr>
                    <th class="noborder"></th>
                    <th>Serenity Lake</th>
                    <th>Spring Canyon</th>
                    <th class="noborder">Devil's Mouth</th>
                </tr>
                <tr>
                    <td>Difficulty</td>
                    <td>Child's play<br>All ages</td>
                    <td>It's go time!<br>Ages 12 and up</td>
                    <td>I am immortal!<br>Ages 18+ only</td>
                </tr>
                <tr>
                    <td>Course Length</td>
                    <td>At your leisure</td>
                    <td>About 3 miles<br>Complete in 1.5 hours</td>
                    <td>5 miles<br>Complete in 2.5 hours<br>...if you survive!</td>
                </tr>
                <tr>
                    <td>Admission Price</td>
                    <td>$30 per person</td>
                    <td>$50 per person</td>
                    <td>$1.50/lb</td>
                </tr>
                <tr>
                    <td>Equipment Rental</td>
                    <td>$25 per person<br>$50 group deposit</td>
                    <td>$20 per person<br>$100 group deposit</td>
                    <td>$50 per person<br>$100 deposit per group</td>
                </tr>
                <tr>
                    <td class="noborder">Gratuity</td>
                    <td>1 Dinglehopper</td>
                    <td>A chest of doubloons</td>
                    <td class="noborder">Thunderous applause</td>
                </tr>



            </table>

            <form action="confirmation.php">
                <fieldset class="leftBox"><br><br>
                    <label class="labelNames">Full name:</label><br>
                    <label class="labelNames">Address:</label><br>
                    <label class="labelNames">Zip Code:</label><br>
                    <label class="labelNames">Phone:</label><br>
                    <label class="labelNames">Email:</label><br>
                    <label class="labeNames">Mailings</label><br><br><br><br><br><br>
                    <label class="labelNames">Course:</label>
                    <br><br>
                    <label class="labelNames">Party Size:</label><br>
                    <label class="labelNames">Timeframe:</label><br>
                    <label class="labelNames">Rentals:</label><br><br>
                    <label class="labelNames">Other info:</label>
                    <br><br><br><br><br><br><br><br>
                    <label class="labelNames">Card #:</label><br>
                    <label class="labelNames">Issue:</label><br>
                    <label class="labelNames">Exp:</label><br>
                </fieldset>

                <fieldset class="rightBox">
                    <h2>About you</h2>
                    <input type="text" name="firstname" placeholder="eg. 'John Doe'" pattern="[A-za-z ]{5,}" title="First and Last name - alpha only , 5 character minimum" required><br>
                    <input type="text" class="hzitems" name="address" required><br>
                    <input type="number" class="hzitems" name="zip" required>
                    <input type="number" name="phone" required>
                    <input type="email" name="email" placeholder="eg. 'JohnDoe@email.com'"><br>
                    <p>May we send you spam and junk mail?</p><br>
                    <select name="junk">
                        <option id="junk1">Yes</option>
                        <option id="junk2">Absolutely!</option>
                        <option id="junk3">Always!</option>
                        <option id="junk4">Please do!</option>
                        <option id="junk5">Send me lots!</option>
                        <option id="junk6">Keep it coming!</option>
                        <option id="junk7">Never stop!</option>
                    </select><br><br><br>

                    <h2>Your Adventure</h2>

                    <input type="radio" class="radio" name="advtype" value="serenity" required>
                    <p>Serenity Lake</p><br>
                    <input type="radio" class="radio" name="advtype" value="spring" required>
                    <p>Spring Canyon</p><br>
                    <input type="radio" class="radio" name="advtype" value="devil" required>
                    <p>Devil's Mouth</p><br>

                    <input type="number" name="participants" required>
                    <input type="date" name="resdate"><br><br>
                    <select>
                        <option disabled>..select one</option>
                        <option value="YES rental">I will rent equipment.</option>
                        <option value="No rental">I have my own gear.</option>
                        <option value="No rental">Safety is for chumps!</option>
                    </select><br><br>

                    <textarea name="message" rows="5" placeholder="Tell us about any special needs, accomodations, or requests..."></textarea>
                    <br><br><br><br>

                    <h2>Payment Information</h2>
                    <input type="number" name="CCnumber"><br>
                    <input type="number" name="Issue"><br>
                    <input type="number" name="experation"><br>
                    <div class="center">
                        <input type="submit" class="finished">
                    </div>
                </fieldset>
            </form>
        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
        </footer>

        <script src="scripts/hamburger.js"></script>
        <script src="scripts/generalscripts.js"></script>

    </body>
</html>
