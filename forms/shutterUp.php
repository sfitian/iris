<?php include("header.php"); ?>

<div id="wrapper">
    <div class="form-container">
        <div class="form-heading">SHUTTER UP</div>
        <div class="form-subheading mb-5">Intercollege Photography Competition</div>
        <form action="">
            <!-- name -->
            <div class="input-group">
                <!-- <label for="input" class="control-label">Username</label> -->
                <b class="bold">Name</b>
                <input id="name" name="entry.1555171622" type="text" placeholder="Full name" required>
                <span class="bar"></span>
            </div>
            <!-- college -->
            <div class="input-group">
                <b class="bold">College</b>
                <!--<input type="text" list="colleges" id="interCollege" name="entry.861199831" onchange="setVisibility()"
                    placeholder="College name" required>
                <span class="bar"></span>
                <datalist id="colleges">
                    <option>St. Francis Institute of Technology</option>
                </datalist> -->
                <b class="bold"><input class="custom-radio" type="radio" name="entry.1957620844" value="SFIT" id="sfit">SFIT</b>
                <b class="bold"><input type="radio" name="entry.1957620844" value="Other" id="other">Other</b>

            </div>
            <div id="sfitian">
            <div class="input-group">
                <b class="bold">Year </b><br />
                <select class="form-control input-list" name="entry.1767687659" id="year">
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
                        <select class="form-control" name="entry.716908024" id="dept">
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
                    <input type="number" placeholder="eg. 1820xx" id="pid" name="entry.1272103391">
                    <span class="bar"></span>
                </div>
            </div>
            <div id="nonSfitian">
                <div class="input-group">
                    <b class="bold">Enter College Name: </b>
                    <input id="collegeName" name="entry.1242131349" type="text" placeholder="College name" required>
                    <span class="bar"></span>
                </div>
            </div>
            <div class="input-group">
                <b class="bold">Phone Number</b>
                <input type="tel" placeholder="xxx-xxx-xxxx" maxlength="10" id="contact" name="entry.1489331585"
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
        let college = "SFIT";
        let year = $("#year option:selected").text();
        let dept = $("#dept option:selected").text();
        let pid = document.querySelector('#pid').value;
        let phoneNumber = document.querySelector('#contact').value;
        
        if(document.getElementById("other").checked){
        college = document.querySelector('#collegeName').value;
        }

        console.log('hi');

        $.ajax({
            url: "https://docs.google.com/forms/d/e/1FAIpQLScQX9K5fMIQFW3l6eqgtyVlzqfw0_LRHrzKNm5aG5od3uD2kg/formResponse?",
            data: {"entry.1555171622": name, "entry.861199831": college, "entry.1767687659": year,
             "entry.716908024": dept, "entry.1272103391":pid, "entry.1489331585":phoneNumber},
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
