
    <!--Start Header -->
    <?php
    include_once 'home/header.php';
    ?>
    <!--End Header -->
    <div class="layout-container">
        <!--Start Sidebar -->
        <?php
        include_once 'home/sidebar.php';
        ?>
        <!--End Sidebar -->
        <!--Start Main Content -->
        <main class="main-content">
           
            <div class="container">
                <div class="form-column">
                    <form action="/action_page.php">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>

                        <input type="submit" value="Submit">
                    </form>
                </div>

                <div class="form-column">
                    <form action="/action_page2.php">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Your email..">

                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Your phone number..">

                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Your message.." rows="4"></textarea>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>            

        </main>
        <!--End Main Content -->
    </div>

    <!--Start Footer -->
   <?php
    include_once 'home/footer.php';
   ?>
    <!--End Footer -->
    
