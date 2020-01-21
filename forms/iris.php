<?php include("header.php"); ?>

<div class="comment-form-wrap pt-5">
    <div style="margin-top:35px; margin-left:20px">
        <h1 style="color:rgb(3,63,255); font-weight: bolder">Mr. and Mrs. IRIS</h1>
        <!-- <h4 class="mb-5" style="margin-left: 20px">IntraCollege Pubg Competition</h4> -->
    </div>
    <form action="../competitions.php" class="p-5 bg-light">
        <!-- Name -->
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" id="name" name="entry.962837583" required>
        </div>

        <!-- Number -->
        <div class="form-group">
            <label for="contact">Number *</label>
            <input type="number" class="form-control" id="contact" name="entry.1733787848"  required>
        </div>

        <div class="form-group">
            <label for="year">Year *</label>
            <select class="form-control" name="entry.1960341028" id="year">
                <option value="fe">FE</option>
                <option value="se">SE</option>
                <option value="te">TE</option>
                <option value="be">BE</option>
            </select>
        </div>
        <div class="form-group">
            <label for="department">Department *</label>
            <select class="form-control" name="entry.433383431" id="dept">
                <option value="comp">COMPUTER</option>
                <option value="it">IT</option>
                <option value="extc">EXTC</option>
                <option value="elec">Electrical</option>
                <option value="mech">Mechanical</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pid">PID *</label>
            <input type="number" class="form-control" id="pid" name="entry.982916234"  required>
        </div>
        <div class="form-group">
            <label for="iris">Applying for *</label>
            <select class="form-control" name="entry.1275666766" id="iris">
                <option value="mr">Mr. IRIS</option>
                <option value="mrs">Mrs. IRIS</option>
            </select>
        </div>
        
       <div class="form-group">
            <button class="btn py-3 px-4 btn-primary" onclick="return sendMessage();">Register</button>
        </div>
    </form>
</div>

<script>
    function sendMessage() {
        let name = document.querySelector('#name').value;
        let phoneNumber = document.querySelector('#contact').value;
        let year = $("#year option:selected").text();
        let dept = $("#dept option:selected").text();
        let pid = document.querySelector('#pid').value;
        let post = $("#iris option:selected").text();

        console.log('hi');

        $.ajax({
            url: "https://docs.google.com/forms/d/e/1FAIpQLSdmKFxEmPcpCt0RMrbKhTcRNOiKLshoDJNpvJ8nKW2bi7oeJg/formResponse?",
            data: {"entry.962837583": name, "entry.1733787848":phoneNumber, "entry.1960341028": year,
             "entry.433383431": dept, "entry.982916234":pid, "entry.1275666766":post},
            type: "POST",
            dataType: "xml",
            success: function(d){
                console.log("success");
                window.location.href="/iris/competitions.php";
            },
            error: function(x, y, z) {
                console.log("error");
                window.location.href="/iris/competitions.php";
            }
        });
        return false;   
    }
</script>

<?php include("footer.php") ?>