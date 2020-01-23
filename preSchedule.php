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

                        <a class="nav-link ftco-animate" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><strike> Hoodie Wednesday</strike><span>22 January 2020</span></a>
                        
                            <div class="tab-content" id="v-pills-tabContent-1" style="display: none;">
                                <?php
                                include("schedule/hoodieWed.php");
                                ?>
                            </div>
                        

                        <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2 " aria-selected="false">Traffic Thursday & Rose day<span>23 January 2020</span></a>
                        <div class="tab-content" id="v-pills-tabContent-2">
                                <?php
                                include("schedule/trafficRoseThurs.php");
                                ?>
                        </div>

                        <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Black Friday<span>24 January 2020</span></a>
                        <div class="tab-content" id="v-pills-tabContent-3">
                                <?php
                                include("schedule/blackFri.php");
                                ?>
                        </div>
                     
                        <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">High Fashion Monday<span>27 January 2020</span></a>
                        <div class="tab-content" id="v-pills-tabContent-4">
                                <?php
                                include("schedule/highFasMon.php");
                                ?>
                            </div>

                        <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Clone Tuesday<span>28 January 2020</span></a>
                        <div class="tab-content" id="v-pills-tabContent-5">
                                <?php
                                include("schedule/cloneTues.php");
                                ?>
                            </div>

                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>

<style>
.ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
    font-size: 16px;
    padding-top: .7rem;
    padding-bottom: .7rem;
    padding-left: 20px;
    padding-right: 20px;
    color: #000000;
    font-weight: 400;
    opacity: 1 !important; }
    @media (max-width: 991.98px) {
      .ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
        color: #fff; } }
</style>

<?php include("footer.php") ?>
