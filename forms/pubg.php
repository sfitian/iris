<?php include("header.php"); ?>

<div class="comment-form-wrap pt-5">
    <div style="margin-top:35px; margin-left:20px">
        <h1 style="color:rgb(3,63,255); font-weight: bolder">Pubg.</h1>
        <!-- <h4 class="mb-5" style="margin-left: 20px">IntraCollege Pubg Competition</h4> -->
    </div>
    <form action="#" class="p-5 bg-light">
        <!-- Name -->
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" id="name" name="entry.1577363981" required>
        </div>

        <!-- Number -->
        <div class="form-group">
            <label for="contact">Number *</label>
            <input type="number" class="form-control" id="contact" name="entry.656693241"  required>
        </div>

         <!-- College 
        <div class="form-group">
            <label for="college">College *</label>
            <input type="text" class="form-control" list="colleges" id="interCollege" name="college" required/>
            <datalist id="colleges">
                <option>St. Francis Institute of Technology</option>
            </datalist>
        </div> -->

        <div class="form-group">
            <label for="year">Year *</label>
            <select class="form-control" name="entry.1621489230" id="year">
                <option value="fe">FE</option>
                <option value="se">SE</option>
                <option value="te">TE</option>
                <option value="be">BE</option>
            </select>
        </div>
        <div class="form-group">
            <label for="department">Department *</label>
            <select class="form-control" name="entry.1151954041" id="dept">
                <option value="comp">COMPUTER</option>
                <option value="it">IT</option>
                <option value="extc">EXTC</option>
                <option value="elec">Electrical</option>
                <option value="mech">Mechanical</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pid">PID *</label>
            <input type="number" class="form-control" id="pid" name="entry.235261680"  required>
        </div>
       <div class="form-group">
        <button class="btn py-3 px-4 btn-primary" onclick="return sendMessage();">Register</button>
        </div>
    </form>
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