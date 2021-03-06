<?php $this->load->view('/front/templates/header'); ?>
<body class="about page page-template-default">

    <!-- Preloader Gif -->
	<?php $this->load->view('/front/templates/preloader'); ?>

    <!-- Left Sidebar -->
	<?php $this->load->view('/front/templates/sidebar'); ?>

    <!-- About Content -->
    <div id="content" class="site-content">
        <div class="page-header-image relative">
            <img src="/assets/front/demo-images/01.jpg" alt="About">
        </div>

        <article>
            <div class="content-1070 center-relative entry-content">
                <div class="content-900 center-relative">
                    <h1 class="entry-title">About Suppablog</h1>
                    <div class="one_half ">
                        <p>We choose to go to the moon in this decade and do the other things, not because they are easy.</p>
                        <br>
                        <p>Because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept, one we are unwilling to postpone and one.</p>
                    </div>
                    <div class="one_half last">
                        Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center an equal earth which all men occupy as equals. The airman’s earth, if free men make it, will be truly round.<br>
                    </div>
                    <div class="clear"></div>
                    <br>
                    <br>
                    <div class="clear"></div>
                </div>
                <div class="page-full-width ">
                    <div class="team-holder ">
                        <div class="member relative one ">
                            <img src="/assets/front/demo-images/profile_01.jpg" alt="">
                            <div class="member-info">
                                <div class="member-name">JENN MARSHALL</div>
                                <div class="member-position">AUTHOR / BLOGGER</div>
                                <div class="member-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur perset adipisicing elit, sed do eiusmod tempor.</p>
                                    <br>
                                    <p>Ut enim aden minim veniam, quis nostrud seti exercitation ullamco laboris nisi ut aliquip exeea commodo consequat. Duis aute irure dolor.</p>
                                    <br>
                                    <p>Suspendisse potenti. Maecenas faucibus massa euismod, malesuada diam finibus, semper ligula. Donec nibh arcu, scelerisque id nisl sit amet, placerat mollis neque. Nullam suscipit auctor laoreet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </article>
    </div>

	<?php $this->load->view('/front/templates/contents/scripts.php'); ?>
</body>
</html>