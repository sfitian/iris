<?php include("header.php"); ?>
<div id="wrapper">
    <div class="form-container">
        <div class="form-heading">PUBG</div>
        <div class="form-subheading mb-5">Classic Mode</div>
        <form action="">
            <!-- name -->
            <div class="input-group">
                <!-- <label for="input" class="control-label">Username</label> -->
                <b class="bold">Name</b>
                <input id="name" name="entry.1577363981" type="text" placeholder="Full name" required>
                <span class="bar"></span>
            </div>
            <!-- college -->
            <div class="input-group">
                <center><b class="bold">ONLY FOR SFITIANS</b></center><br>
                <!-- <input type="text" list="colleges" id="interCollege" name="entry.1957620844" onchange="setVisibility()"
                    placeholder="College name" required>
                <span class="bar"></span>
                <datalist id="colleges">
                    <option>St. Francis Institute of Technology</option>
                </datalist> -->


            </div>

                <div class="input-group">
                    <b class="bold">Year </b><br />
                    <select class="form-control input-list" name="entry.1621489230" id="year">
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
                        <select class="form-control" name="entry.1151954041" id="dept">
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
                    <input type="number" placeholder="eg. 1820xx" id="pid" name="entry.235261680">
                    <span class="bar"></span>
                </div>
            <div class="input-group">
                <b class="bold">Phone Number</b>
                <input type="tel" placeholder="xxx-xxx-xxxx" maxlength="10" id="contact" name="entry.656693241"
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
        //let college = document.querySelector('#interCollege').value;
        let year = $("#year option:selected").text();
        let dept = $("#dept option:selected").text();
        let pid = document.querySelector('#pid').value;
        //let groupCount = document.querySelector('#pid').value;
        let phoneNumber = document.querySelector('#contact').value;

        console.log('hi');

        $.ajax({
            url: "https://docs.google.com/forms/d/e/1FAIpQLSfJAJZxVh53m-FMkT-cJoOQj2kS910mLYg-WPT3JUaTjRqeWA/formResponse?",
            data: {"entry.1577363981": name,"entry.656693241":phoneNumber, "entry.1621489230": year,"entry.1151954041": dept,
            "entry.235261680":pid,},
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
