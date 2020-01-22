<?php include("header.php"); ?>

<div class="comment-form-wrap pt-5">
    <div style="margin-top:35px; margin-left:20px">
        <h1 style="color:rgb(3,63,255); font-weight: bolder">Open Mic.</h1>
        <h4 class="mb-5" style="margin-left: 20px">InterCollege Doodling Contest</h4>
    </div>
    <form action="../competitions.php" class="p-5 bg-light">
        <!-- Name -->
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" id="name" name="entry.1789825728" required>
        </div>

        <!--  College  -->
        <div class="form-group">
            <label for="college">College *</label>
            <input type="text" class="form-control" list="colleges" id="interCollege" name="entry.1367964555" onchange="setVisibility()"  required/>
            <datalist id="colleges">
                <option>St. Francis Institute of Technology</option>
            </datalist>
        </div>

        <div id="sfitian">
            <div class="form-group">
                <label for="year">Year *</label>
                <select class="form-control" name="entry.1639723399" id="year">
                    <option value="fe">FE</option>
                    <option value="se">SE</option>
                    <option value="te">TE</option>
                    <option value="be">BE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="department">Department *</label>
                <select class="form-control" name="entry.579071568" id="dept">
                    <option value="comp">COMPUTER</option>
                    <option value="it">IT</option>
                    <option value="extc">EXTC</option>
                    <option value="elec">Electrical</option>
                    <option value="mech">Mechanical</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pid">PID *</label>
                <input type="number" class="form-control" id="pid" name="entry.1776986425">
            </div>
        </div>
        <div class="form-group">
                <label for="department">What are you performing *</label>
                <select class="form-control" name="entry.970268507" id="perform">
                    <option value="comp">Singing</option>
                    <option value="it">Beat Boxing</option>
                    <option value="extc">Rap</option>
                </select>
            </div>
        
        <!-- Number -->
        <div class="form-group">
            <label for="contact">Number *</label>
            <input type="number" class="form-control" id="contact" name="entry.134291980"  required>
        </div>
        
        <div class="form-group">
            <button class="btn py-3 px-4 btn-primary" onclick="return sendMessage();">Register</button>
        </div>
    </form>
</div>

<script>
    function sendMessage() {
        let name = document.querySelector('#name').value;
        let college = document.querySelector('#interCollege').value;
        let year = $("#year option:selected").text();
        let perform = $("#perform option:selected").text();
        let dept = $("#dept option:selected").text();
        let pid = document.querySelector('#pid').value;
        let phoneNumber = document.querySelector('#contact').value;

        console.log('hi');

         $.ajax({
            url: "https://docs.google.com/forms/d/e/1FAIpQLSdfEKiyPPvNubNA9gMAHSMaIiR9fg-ZyAr0peWy9qAnjGZP6A/formResponse?",
            data: {"entry.1789825728": name, "entry.1367964555": college, "entry.1639723399": year,"entry.970268507":perform,
             "entry.579071568": dept, "entry.1776986425":pid, "entry.134291980":phoneNumber},
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