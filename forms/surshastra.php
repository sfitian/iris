<?php include("header.php"); ?>

<div class="comment-form-wrap pt-5">
    <div style="margin-top:35px; margin-left:20px">
        <h1 style="color:rgb(3,63,255); font-weight: bolder">SURSHASTRA.</h1>
        <h4 class="mb-5" style="margin-left: 20px">InterCollege Singing Competition</h4>
    </div>
    <form action="#" class="p-5 bg-light">
        <!-- Name -->
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <!--  College  -->
        <div class="form-group">
            <label for="college">College *</label>
            <input type="text" class="form-control" list="colleges" id="interCollege" name="college" onchange="setVisibility()"  required/>
            <datalist id="colleges">
                <option>St. Francis Institute of Technology</option>
            </datalist>
        </div>

        <div id="sfitian">
            <div class="form-group">
                <label for="year">Year *</label>
                <select class="form-control" name="dept" id="dept">
                    <option value="fe">FE</option>
                    <option value="se">SE</option>
                    <option value="te">TE</option>
                    <option value="be">BE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="department">Department *</label>
                <select class="form-control" name="dept" id="dept">
                    <option value="comp">COMPUTER</option>
                    <option value="it">IT</option>
                    <option value="extc">EXTC</option>
                    <option value="elec">Electrical</option>
                    <option value="mech">Mechanical</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pid">PID *</label>
                <input type="number" class="form-control" id="pid" name="pid"  required>
            </div>
        </div>
        <div class="form-group">
            <label for="type">Participation *</label>
            <select class="form-control" name="participation" id="participation">
                <option value="solo">Solo</option>
                <option value="duet">Duet</option>
            </select>
        </div>

        <!-- Number -->
        <div class="form-group">
            <label for="contact">Number *</label>
            <input type="number" class="form-control" id="contact" name="contact"  required>
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
            <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
        </div>
    </form>
</div>



<?php include("footer.php") ?>