<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<?php 
    include 'controllers/routecontroller.php';
    include 'partials/_head.php';
?>

<body class="page-parent template-slider color-blue layout-full-width header-classic subheader-transparent sticky-header sticky-white subheader-title-left">
  
   

    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <?php 
            include 'partials/_header.php';
        ?>
        <!-- Main Content -->
        <?php
            routePrimaryContent();
        ?>
        <!-- Footer-->
        <?php
            include 'partials/_footer.php'
        ?>
    </div>

    <!-- Popup contact form -->
    <div id="popup_contact">
        <a class="button button_js" href="#"><i class="icon-mail-line"></i></a>
        <div class="popup_contact_wrapper">

            <div id="contactWrapper_popup">
                <form id="contactform_popup">
                    <h4>Send us a message</h4>
                    <p>
                        <span>
								<input type="text" name="name_popup" id="name_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Your name" />
							</span><span>
								<input type="email" name="email_popup" id="email_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Your email" />
							</span><span>
								<input type="text" name="subject_popup" id="subject_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Subject" />
							</span><span> 								<textarea name="body_popup" cols="40" id="body_popup" rows="2" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span>

                        <input type="button" value="Send Message" id="submit_popup" onClick="return check_values_popup();">
                    </p>
                </form>
                <div id="confirmation_popup"></div>
            </div>

            <span class="arrow"></span>
        </div>
    </div>

    <!-- JS -->
    <?php
        include 'partials/_scriptBundle.php';
    ?>
    

</body>

</html>