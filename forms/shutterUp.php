<?php include("header.php"); ?>

<div class="comment-form-wrap pt-5">
    <div style="margin-top:35px; margin-left:20px">
        <h1 style="color:rgb(3,63,255); font-weight: bolder">SHUTTER UP.</h1>
        <h4 class="mb-5" style="margin-left: 20px">InterCollege Photography Competition</h4>
    </div>
    <form action="#" class="p-5 bg-light">
        <!-- Name -->
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" id="name" name="entry.1555171622" required>
        </div>

        <!--  College  -->
        <div class="form-group">
            <label for="college">College *</label>
            <input type="text" class="form-control" list="colleges" id="interCollege" name="entry.861199831" onchange="setVisibility()"  required/>
            <datalist id="colleges">
                <option>St. Francis Institute of Technology</option>
            </datalist>
        </div>

        <div id="sfitian">
            <div class="form-group">
                <label for="year">Year *</label>
                <select class="form-control" name="entry.1767687659" id="year">
                    <option value="fe">FE</option>
                    <option value="se">SE</option>
                    <option value="te">TE</option>
                    <option value="be">BE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="department">Department *</label>
                <select class="form-control" name="entry.716908024" id="dept">
                    <option value="comp">COMPUTER</option>
                    <option value="it">IT</option>
                    <option value="extc">EXTC</option>
                    <option value="elec">Electrical</option>
                    <option value="mech">Mechanical</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pid">PID *</label>
                <input type="number" class="form-control" id="pid" name="entry.1272103391"  required>
            </div>
        </div>
        
        <!-- Number -->
        <div class="form-group">
            <label for="contact">Number *</label>
            <input type="number" class="form-control" id="contact" name="entry.1489331585"  required>
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
        let dept = $("#dept option:selected").text();
        let pid = document.querySelector('#pid').value;
        let phoneNumber = document.querySelector('#contact').value;

        console.log('hi');

        $.ajax({
            url: "https://docs.google.com/forms/d/e/1FAIpQLScQX9K5fMIQFW3l6eqgtyVlzqfw0_LRHrzKNm5aG5od3uD2kg/formResponse?",
            data: {"entry.1555171622": name, "entry.861199831": college, "entry.1767687659": year,
             "entry.716908024": dept, "entry.1272103391":pid, "entry.1489331585":phoneNumber},
            type: "POST",
            dataType: "xml",
            success: function(d){
                console.log("success");
            },
            error: function(x, y, z) {
                console.log("error");
            }
        });
        return false;   
    }
</script>

<?php include("footer.php") ?>