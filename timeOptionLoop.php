<?php
function time_option_loop(string $timeStartOrFinish)
{
    $options = "<select name='$timeStartOrFinish'>";
    $options .= "<option value=''>-- Please Choose --</option>";

    for ($i = 0; $i <= 28; $i++) {
        $selected = '';

        $time = '';

        if ($_POST['TimeStart'] == $time)
            $selected = " selected";

        // Push to options
        $options .= "<option$selected value='$time'>$time</option>";
    }

    echo $options .= "</select>";
}
?>

<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "09:00")) { ?>selected="true" <?php } ?>value='09:00'>09:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "09:30")) { ?>selected="true" <?php } ?>value='09:30'>09:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "10:00")) { ?>selected="true" <?php } ?>value='10:00'>10:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "10:30")) { ?>selected="true" <?php } ?>value='10:30'>10:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "11:00")) { ?>selected="true" <?php } ?>value='11:00'>11:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "11:30")) { ?>selected="true" <?php } ?>value='11:30'>11:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "12:00")) { ?>selected="true" <?php } ?>value='12:00'>12:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "12:30")) { ?>selected="true" <?php } ?>value='12:30'>12:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "13:00")) { ?>selected="true" <?php } ?>value='13:00'>13:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "13:30")) { ?>selected="true" <?php } ?>value='13:30'>13:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "14:00")) { ?>selected="true" <?php } ?>value='14:00'>14:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "14:30")) { ?>selected="true" <?php } ?>value='14:30'>14:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "15:00")) { ?>selected="true" <?php } ?>value='15:00'>15:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "15:30")) { ?>selected="true" <?php } ?>value='15:30'>15:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "16:00")) { ?>selected="true" <?php } ?>value='16:00'>16:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "16:30")) { ?>selected="true" <?php } ?>value='16:30'>16:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "17:00")) { ?>selected="true" <?php } ?>value='17:00'>17:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "17:30")) { ?>selected="true" <?php } ?>value='17:30'>17:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "18:00")) { ?>selected="true" <?php } ?>value='18:00'>18:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "18:30")) { ?>selected="true" <?php } ?>value='18:30'>18:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "19:00")) { ?>selected="true" <?php } ?>value='19:00'>19:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "19:30")) { ?>selected="true" <?php } ?>value='19:30'>19:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "20:00")) { ?>selected="true" <?php } ?>value='20:00'>20:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "20:30")) { ?>selected="true" <?php } ?>value='20:30'>20:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "21:00")) { ?>selected="true" <?php } ?>value='21:00'>21:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "21:30")) { ?>selected="true" <?php } ?>value='21:30'>21:30</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "22:00")) { ?>selected="true" <?php } ?>value='22:00'>22:00</option>
<option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "22:30")) { ?>selected="true" <?php } ?>value='22:30'>22:30</option>
</select>