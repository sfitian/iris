<?php include("header.php"); ?>

<div class="comment-form-wrap pt-5">
    <div style="margin-top:35px; margin-left:20px">
        <h1 style="color:rgb(3,63,255); font-weight: bolder">SURSHASTRA.</h1>
        <h4 class="mb-5" style="margin-left: 20px">InterCollege Singing Competition</h4>
    </div>
    <form action="../competitions.php" method="POST" id="registrationform" class="p-5 bg-light">
        <!-- Name -->
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" id="name" name="entry.1242131349" required>
        </div>

        <!--  College  -->
        <div class="form-group">
            <label for="college">College *</label>
            <input type="text" class="form-control" list="colleges" id="interCollege" name="entry.1957620844" onchange="setVisibility()"  required/>
            <datalist id="colleges">
                <option>St. Francis Institute of Technology</option>
            </datalist>
        </div>

        <div id="sfitian">
            <div class="form-group">
                <label for="year">Year *</label>
                <select class="form-control" name="entry.1864115645" id="year">
                    <option value="fe">FE</option>
                    <option value="se">SE</option>
                    <option value="te">TE</option>
                    <option value="be">BE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="department">Department *</label>
                <select class="form-control" name="entry.1944219620" id="dept">
                    <option value="comp">COMPUTER</option>
                    <option value="it">IT</option>
                    <option value="extc">EXTC</option>
                    <option value="elec">Electrical</option>
                    <option value="mech">Mechanical</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pid">PID *</label>
                <input type="number" class="form-control" id="pid" name="entry.167761393">
            </div>
        </div>
        <div class="form-group">
            <label for="type">Participation *</label>
            <select class="form-control" name="entry.1299802954" id="participation">
                <option value="solo">Solo</option>
                <option value="duet">Duet</option>
            </select>
        </div>

        <!-- Number -->
        <div class="form-group">
            <label for="contact">Number *</label>
            <input type="number" class="form-control" id="contact" name="entry.1586680497"  required>
        </div>

        <!-- <div class="form-group">
            <label for="website">Website</label>
            <input type="url" class="form-control" id="website">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
        </div> -->
        <div class="form-group">
            <!-- <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary"> -->
            <!-- <button type="submit" class="btn py-3 px-4 btn-primary" sendMessage()>Register</button> -->
            <!-- <button class="btn py-3 px-4 btn-primary" onclick="sendMessage()">Register</button> -->
            <!-- <button class="btn py-3 px-4 btn-primary" onsubmit="return sendMessage();">Register</button> -->
            <button class="btn py-3 px-4 btn-primary" onclick="return sendMessage();">Register</button>
        </div>
    </form>

</div>

<!-- <script src="../js/register_surshastra.js"></script> -->
<script>
    function sendMessage() {
        let name = document.querySelector('#name').value;
        let college = document.querySelector('#interCollege').value;
        let year = $("#year option:selected").text();
        let dept = $("#dept option:selected").text();
        let pid = document.querySelector('#pid').value;
        let participation = $("#participation option:selected").text();
        let phoneNumber = document.querySelector('#contact').value;

        console.log('hi');

        $.ajax({
            url: "https://docs.google.com/forms/d/e/1FAIpQLSfv7OKaoV_J0uh_xIRQEX5K-HGsw9ZZyEK5xuDq-C1J3KQqyg/formResponse?",
            data: {"entry.1242131349": name, "entry.1957620844": college, "entry.1864115645": year, "entry.1944219620": dept, "entry.167761393":pid, "entry.1299802954":participation, "entry.1586680497":phoneNumber},
            type: "POST",
            dataType: "xml",
            success: function(d){
                console.log("success");
                window.location.href="/iris/competitions.php";
            },
            error: function(x, y, z) 
                console.log("error");
                window.location.href="/iris/competitions.php";
            }
        });
        return true;   
    }

</script>
<?php include("footer.php") ?>