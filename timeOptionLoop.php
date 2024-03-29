<?php
function time_option_loop(string $timeStartOrFinish)
{
    $options = "<select name='$timeStartOrFinish'>";
    $options .= "<option value=''>-- Please Choose --</option>";

    // This will start off as '9:00' in the loop
    $hour = 8;

    for ($i = 0; $i < 28; $i++) {
        // Reset
        $mins = ':00';

        // Increment
        if ($i % 2)
            $mins = ":30";
        else
            $hour++;

        $time = $hour . $mins;

        $selected = ($_POST[$timeStartOrFinish] == $time) ? " selected" : '';

        // Push to options
        $options .= "<option$selected value='$time'>$time</option>";
    }

    echo $options .= "</select>";
}
/* <option <?php if (!empty($_POST['TimeStart']) && ($_POST["TimeStart"] == "22:30")) { ?>selected="true" <?php } ?>value='22:30'>22:30</option>*/
