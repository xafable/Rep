
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/Editor.css">
</head>
<body>


<div style="background: #990000;display:flex;width: 1920px">

<form style="margin-left:10px;display:inline-block;" action = "/" method="post">
    <input name ="login" type="text" name="label" <?php if($dataArray['logStatus'] == '1') echo " hidden='true'"; ?>  >
    <input name ="password" type="text" name="label" <?php if($dataArray['logStatus'] == '1') echo " hidden='true'"; ?> >
    <input type="submit" <?php if($dataArray['logStatus'] == '1') echo "value = Logout formaction = /logout"; else echo "value = Login formaction = /login"; ?>>
    <input type="submit" formaction="/register" value ="Register">
</form>

<div id="menu" class="menu" name="menu">
    <ul class = "hr">
        <li><a href="/uploadpage"  <?php if($dataArray['logStatus'] == '0') echo " hidden='true' "; ?>>Upload</a></li>
        <li><a href="/projects/my" <?php if($dataArray['logStatus'] == '0') echo " hidden='true' "; ?>>My Projects</a></li>
        <li><a href="/projects/all" <?php if($dataArray['logStatus'] == '0') echo " hidden='true' "; ?>>All Projects</a></li>
    </ul>
</div>

</div>

<?php  include $dataArray['viewName']; ?>

</body>
</html>