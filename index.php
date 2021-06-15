<?php

    include 'view/header.php'

?>
    <div class="content">
        <!-- SECTION 1 HOME PAGE -->
        
        <section data-index="0" id="home" class="home">
            <div class="home">
                <!-- <h2>Welcome to my portfolio</h2> -->
                <svg viewBox="0 0 1350 600" >
                    <text x="50%" y="50%" fill="transparent" text-anchor="middle">
                        ELEA TOOS
                    </text>
                </svg>
            </div>
        </section>

        <!-- SECTION 2 ABOUT -->
        <section data-index="1" id="about" class="about">
            <div class="box">
                <h2 class="text1">Elea</h2>
                <h2 class="text2">Toos</h2>
                <h2 class="text3">Welcome to my portfolio</h2>
                <img class="photo" src="/img/crop.png">
            </div>
        </section>

        <!-- SECTION 3 PORTFOLIO -->
        <section data-index="2" id="portfolio" class="portfolio">
            <div class="box2">
            <h2 class="text">portfolio</h2>
            </div>
        </section>

        <!-- SECTION 4 CONTACT -->
        <section data-index="3" id="contact" class="contact">
            <div class="box3">
                <h2 class="text">contact</h2>
            </div>   
        </section>

        <!-- Back to top button -->
        <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
        </button>

        <!-- SECTION 5 THANKS FOR WATCHING -->
        <!-- <section class="end">
            <div class="box4">
                <h2 class="text4">Thanks for watching</h2>
                <h2 class="text5">Blah blah blah</h2>
                <h2 class="text6">Blah blah</h2>
            </div> -->
            <!-- ***************************** BACK TO TOP BTN *********************************** -->
            <!-- <a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a> -->
        <!-- </section> -->
        <!-- <button class="top" (click)="onClick(home)"></button> -->
    </div>


<?php

    include 'view/footer.php'

?>