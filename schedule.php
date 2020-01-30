<?php include ("header.php"); ?>

<section class="ftco-section bg-light" id="schedule-section">
    <div class="container">

        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Schedule</span>
                <h2 class="mb-4">IRIS Schedule</h2>
                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
            </div>
        </div>

        <div class="ftco-schedule">
            <div class="row">
                <div class="col-md-4 nav-link-wrap">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <a  class="nav-link ftco-animate" href="preSchedule.php">See Pre IRIS Events</a>

                        <!-- <a class="nav-link ftco-animate" id="v-pills-8-tab" data-toggle="pill" href="single.html" role="tab" aria-controls="v-pills-8" aria-selected="false">Pre IRIS Events<span></span></a> -->

                        <a class="nav-link ftco-animate iris-day-ftco" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Day 01 <span>29 January 2020</span></a>

                        <a class="nav-link ftco-animate active iris-day-ftco" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="true">Day 02 <span>30 January 2020</span></a>

                    </div>
                </div>

                <div class="col-md-8 tab-wrap">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- <div class="col-md-8 tab-wrap"> -->
                        <div class="tab-content" id="v-pills-tabContent">
                        <?php

                            include("schedule/day1.php");
                            include("schedule/day2.php");

                        ?>
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


@media (max-width: 768px)  {
    .iris-day-ftco {
        width: 50% !important;
        float: left !important;
        }
    }
@media (max-width: 991.98px) {
    .ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
    color: #fff; } }
</style>

<?php
include("footer.php");
?>
