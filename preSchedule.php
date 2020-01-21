<?php include ("header.php"); ?>

<section class="ftco-section bg-light" id="schedule-section">
    <div class="container">

        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Schedule</span>
                <h2 class="mb-4">Pre IRIS Schedule</h2>
                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
            </div>
        </div>

        <div class="ftco-schedule">
            <div class="row">
                <div class="col-md-4 nav-link-wrap">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <a  class="nav-link ftco-animate" href="schedule.php">IRIS Events</a>

                        <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Hoodie Wednesday<span>22 January 2020</span></a>

                        <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2 " aria-selected="false">Traffic Thursday & Rose day<span>23 January 2020</span></a>

                        <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Black Friday<span>24 January 2020</span></a>

                        <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">High Fashion Monday<span>27 January 2020</span></a>

                        <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Clone Tuesday<span>28 January 2020</span></a>

                    </div>
                </div>


                <div class="col-md-8 tab-wrap">
                    <div class="tab-content" id="v-pills-tabContent">
                        <?php

                            include("schedule/hoodieWed.php");
                            include("schedule/trafficRoseThurs.php");
                            include("schedule/blackFri.php");
                            include("schedule/highFasMon.php");
                            include("schedule/cloneTues.php")

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php") ?>