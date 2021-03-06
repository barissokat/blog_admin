<?php $this->load->view('/front/templates/header'); ?>
<body class="contact page page-template-default">

    <!-- Preloader Gif -->
    <?php $this->load->view('/front/templates/preloader'); ?>

    <!-- Left Sidebar -->
    <?php $this->load->view('/front/templates/sidebar'); ?>

    <!-- Contact Content -->
    <div id="content" class="site-content">
        <div class="page-header-map relative">
            <script>
                var lat = "48.87209";
                var lng = "2.34791";
                var marker_lat = "48.87209";
                var marker_lng = "2.34791";
                var zoom = 16;
            </script>
            <div class="map" id="map"></div>
        </div>

        <article>
            <div class="content-1070 center-relative entry-content">
                <div class="content-900 center-relative">
                    <h1 class="entry-title">Contact</h1>
                    <div class="one_half ">
                        We choose to go to the moon in this decade and do the other things, not because they are easy.<p></p>
                        <br>
                        <p>Because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept, one we are unwilling to postpone and one.</p>
                        <br>
                        <div class="montserrat">
                            <span style="color: #adadad;">Address:</span>&nbsp;New York, NY, United States<br>
                            <span style="color: #adadad;">Phone:</span> +1 234-567-890<br>
                            <span style="color: #adadad;">Hours:</span> 6:00 am – 2:00 am
                        </div>
                    </div>
                    <div class="one_half last ">
                        <div class="contact-form">
                            <p><input id="name" type="text" name="your-name" placeholder="Name"></p>
                            <p><input id="contact-email" type="email" name="your-email" placeholder="Email"></p>
                            <p><input id="subject" type="text" name="your-subject" placeholder="Subject"></p>
                            <p><textarea id="message" name="your-message" placeholder="Message"></textarea></p>
                            <p><input type="submit" onClick="SendMail()" value="SEND"></p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </article>
    </div>

    <?php $this->load->view('/front/templates/contents/scripts.php'); ?>
    <script>initializeGoogleMap();</script>
</body>
</html>
