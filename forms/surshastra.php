<?php include('header.php') ?>

<div id="wrapper">
    <div class="form-container">
        <div class="form-heading">SURSHASTRA</div>
        <div class="form-subheading mb-5">Intercollege Singing Competition</div>
        <form action="">
            <!-- name -->
            <div class="input-group">
                <!-- <label for="input" class="control-label">Username</label> -->
                <b class="bold">Name</b>
                <input id="name" name="entry.1242131349" type="text" placeholder="Full name" required>
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
                <b class="bold"><input class="custom-radio" type="radio" name="entry.1957620844" value="SFIT" id="sfit">SFIT</b>
                <b class="bold"><input type="radio" name="entry.1957620844" value="Other" id="other">Other</b>

            </div>
            <div id="sfitian">
                <div class="input-group">
                    <b class="bold">Year </b><br />
                    <select class="form-control input-list" name="entry.1864115645" id="year">
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
                        <select class="form-control" name="entry.1944219620" id="dept">
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
                    <input type="number" placeholder="eg. 1820xx" id="pid" name="entry.167761393">
                    <span class="bar"></span>
                </div>
            </div>
            <div id="nonSfitian">
                <div class="input-group">
                    <b class="bold">Enter College Name: </b>
                    <input id="collegeName" name="entry.1242131349" type="text" placeholder="college name" required>
                    <span class="bar"></span>
                </div>
            </div>
            <div class="input-group">
                <b class="bold">Participation</b>
                <select class="form-control" name="entry.1299802954" id="participation">
                    <option value="solo">Solo</option>
                </select>
            </div>
            <div class="input-group">
                <b class="bold">Phone Number</b>
                <input type="tel" placeholder="xxx-xxx-xxxx" maxlength="10" id="contact" name="entry.1586680497"
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
        let participation = $("#participation option:selected").text();
        let phoneNumber = document.querySelector('#contact').value;


        if(document.getElementById("other").checked){
        college = document.querySelector('#collegeName').value;
        }

        console.log('hi');

        $.ajax({
            url: surshastraGD ,
            data: { "entry.1242131349": name, "entry.1957620844": college, "entry.1864115645": year, "entry.1944219620": dept, "entry.167761393": pid, "entry.1299802954": participation, "entry.1586680497": phoneNumber },
            type: "POST",
            dataType: "xml",
            success: function (d) {
                console.log("success");
                window.location.href="../competitions.php?status=success&name="+name+"&game=Surshastra";
            },
            error: function (x, y, z) {
                console.log("error");
                window.location.href="../competitions.php?status=success&name="+name+"&game=Surshastra";
            }
        });
    return false;
    }

</script>
<?php include("footer.php") ?>
