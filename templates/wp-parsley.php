<div class="wrapper">
    <div class="bs-callout bs-callout-warning hidden">
        <h4>Oh snap!</h4>
        <p>This form seems to be invalid :(</p>
    </div>

    <div class="bs-callout bs-callout-info hidden">
        <h4>Yay!</h4>
        <p>Everything seems to be ok :)</p>
    </div>

    <form id="demo-form" data-parsley-validate="">
        <label for="fullname">Full Name * :</label>
        <input class="form-control" name="fullname" required="" type="text">

        <label for="email">Email * :</label>
        <input class="form-control" name="email" data-parsley-trigger="change" required="" type="email">

        <label for="gender">Gender *:</label>
        <p>
            M: <input name="gender" id="genderM" value="M" required="" type="radio">
            F: <input name="gender" id="genderF" value="F" type="radio">
        </p>

        <label for="hobbies">Hobbies (Optional, but 2 minimum):</label>
        <p>
            Skiing <input name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" type="checkbox"><br>
            Running <input name="hobbies[]" id="hobby2" value="run" type="checkbox"><br>
            Eating <input name="hobbies[]" id="hobby3" value="eat" type="checkbox"><br>
            Sleeping <input name="hobbies[]" id="hobby4" value="sleep" type="checkbox"><br>
            Reading <input name="hobbies[]" id="hobby5" value="read" type="checkbox"><br>
            Coding <input name="hobbies[]" id="hobby6" value="code" type="checkbox"><br>
        </p>

        <p>
            <label for="heard">Heard about us via *:</label>
            <select id="heard" required="">
                <option value="">Choose..</option>
                <option value="press">Press</option>
                <option value="net">Internet</option>
                <option value="mouth">Word of mouth</option>
                <option value="other">Other..</option>
            </select>
        </p>

        <p>
            <label for="message">Message (20 chars min, 100 max) :</label>
            <textarea id="message" class="form-control" name="message" data-parsley-trigger="keyup"
                      data-parsley-minlength="20" data-parsley-maxlength="100"
                      data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.."
                      data-parsley-validation-threshold="10"></textarea>
        </p>

        <br>
        <input class="btn btn-default" value="validate" type="submit">
        <p>
            <small>* Please, note that this demo form is not a perfect example of UX-awareness. The aim here is to show
                a quick overview of parsley-API and Parsley customizable behavior.
            </small>
        </p>
    </form>
</div>
<script type="text/javascript">
    jQuery(function ($) {
        $('#demo-form').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        })
            .on('form:submit', function () {
                return false; // Don't submit form for this demo
            });
    });
</script>