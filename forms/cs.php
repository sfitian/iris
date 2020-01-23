<?php include("header.php"); ?>

<div id="wrapper">
    <div class="form-container">
        <div class="form-heading">CS 1.6</div>
        <div class="form-subheading mb-5">LAN Gaming</div>
        <form action="">
            <!-- name -->
            <div class="input-group">
                <!-- <label for="input" class="control-label">Username</label> -->
                <b class="bold">Name (Group leader)</b>
                <input id="name" name="entry.558749190" type="text" placeholder="Full name of group leader" required>
                <span class="bar"></span>
            </div>
            <div class="input-group">
                <!-- <label for="input" class="control-label">Username</label> -->
                <b class="bold">Member 2</b>
                <input id="name2" name="entry.1390789563" type="text" placeholder="Full name of member 2" required>
                <span class="bar"></span>
            </div>
            <div class="input-group">
                <!-- <label for="input" class="control-label">Username</label> -->
                <b class="bold">Member 3</b>
                <input id="name3" name="entry.209341018" type="text" placeholder="Full name of member 3" required>
                <span class="bar"></span>
            </div>
            <div class="input-group">
                <!-- <label for="input" class="control-label">Username</label> -->
                <b class="bold">Member 4</b>
                <input id="name4" name="entry.977579164" type="text" placeholder="Full name of member 4" required>
                <span class="bar"></span>
            </div>
            <div class="input-group">
                <!-- <label for="input" class="control-label">Username</label> -->
                <b class="bold">Member 5</b>
                <input id="name5" name="entry.641781793" type="text" placeholder="Full name of member 5" required>
                <span class="bar"></span>
            </div>
            <div class="input-group">
                <!-- <label for="input" class="control-label">Username</label> -->
                <b class="bold">Team name</b>
                <input id="team" name="entry.1149899632" type="text" placeholder="Name of your team" required>
                <span class="bar"></span>
            </div>
            <!-- college -->
            <div class="input-group">
                <b class="bold">College</b><br>
                <!-- <input type="text" list="colleges" id="interCollege" name="entry.1957620844" onchange="setVisibility()"
                    placeholder="College name" required>
                <span class="bar"></span>
                <datalist id="colleges">
                    <option>St. Francis Institute of Technology</option>
                </datalist> -->
                <b class="bold"><input class="custom-radio" type="radio" name="entry.1577977678" value="SFIT" id="sfit">SFIT</b>
                <b class="bold"><input type="radio" name="entry.1577977678" value="Other" id="other">Other</b>

            </div>
            <div id="sfitian">
                <div class="input-group">
                    <b class="bold">Year </b><br />
                    <select class="form-control input-list" name="entry.1591931841" id="year">
                        <option value="none">&nbsp;</option>
                        <option value="fe">First Year</option>
                        <option value="se">Second Year</option>
                        <option value="te">Third Year</option>
                        <option value="be">Fourth Year</option>
                    </select>
                </div>
                <div class="form-group dropdown">
                    <div class="input-group">
                        <b class="bold">Department</b>
                        <select class="form-control" name="entry.941060304" id="dept">
                            <option value="none">&nbsp;</option>
                            <option value="comp">COMPUTER</option>
                            <option value="it">IT</option>
                            <option value="extc">EXTC</option>
                            <option value="elec">Electrical</option>
                            <option value="mech">Mechanical</option>
                        </select>
                    </div>
                </div>
                <div class="input-group">
                    <b class="bold">Pid</b>
                    <input type="number" placeholder="eg. 1820xx" id="pid" name="entry.462139172">
                    <span class="bar"></span>
                </div>
            </div>
            <div id="nonSfitian">
                <div class="input-group">
                    <b class="bold">Enter College Name: </b>
                    <input id="collegeName" name="entry.1577977678" type="text" placeholder="Enter your college name" required>
                    <span class="bar"></span>
                </div>
            </div>
            <div class="input-group">
                <b class="bold">Phone Number</b>
                <input type="tel" placeholder="xxx-xxx-xxxx" maxlength="10" id="contact" name="entry.207598181"
                    required>
                <span class="bar"></span>
            </div>
            <!-- submit -->
            <div class="input-group">
                <!--<button>Register</button>-->
                <button class="btn py-3 px-4 btn-primary" onclick="return sendMessage();">Register</button>
            </div>
        </form>
    </div>
</div>

<script>
    function sendMessage() {
        let name = document.querySelector('#name').value;
        let name2 = document.querySelector('#name2').value;
        let name3 = document.querySelector('#name3').value;
        let name4 = document.querySelector('#name4').value;
        let name5 = document.querySelector('#name5').value;
        let team = document.querySelector('#team').value;
        let college = "SFIT";
        let year = $("#year option:selected").text();
        let dept = $("#dept option:selected").text();
        let pid = document.querySelector('#pid').value;
        let phoneNumber = document.querySelector('#contact').value;
        console.log('hi');
          if(document.getElementById("other").checked){
        college = document.querySelector('#collegeName').value;
        }

        $.ajax({
            url: "https://docs.google.com/forms/d/e/1FAIpQLSfvV499yHOOSiM1cjh7Ve9y8UMzNDAAEQbXQ_diO7mP8sMaSA/formResponse?",
            data: {"entry.558749190": name, "entry.1390789563": name2, "entry.209341018": name3, 
            "entry.977579164": name4, "entry.641781793": name5, "entry.1149899632":team, 
            "entry.1577977678": college, "entry.1591931841": year,
             "entry.941060304": dept, "entry.462139172":pid,"entry.207598181":phoneNumber},
            type: "POST",
            dataType: "xml",
            success: function(d){
                console.log("success");
                window.location.href="../competitions.php";
            },
            error: function(x, y, z) {
                console.log("error");
                window.location.href="../competitions.php";
            }
        });
        return false;
    }
</script>

<?php include("footer.php") ?>
