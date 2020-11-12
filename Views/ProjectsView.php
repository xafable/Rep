
<form style="margin-left:10px;display:inline-block;" method="post">

<?php

foreach ($dataArray['projectList'] as $arr) {

        echo "<p style='color: white'>".$arr['name']."<?p> <button formaction =".'/project/'.$arr['id']." name='pageid' class='btt' type=submit >Load</button>";

    echo "<br>";

}
?>
</form>

