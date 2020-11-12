
<div style="margin-top: 15px; background:black;height: 60px;width: 100%;">
    <form style="" action = "/savetodb" method="post">
        <input style="margin-right:10px;"  type="submit" value="Save">
        <input type="text" name="label" value= "<?php echo $dataArray['projectName'] ?>" style=" border:transparent;background: #1E1F26; height:40px;font-size: large; color: white;width: 300px;margin-left: 15px;">
    </form>
</div>



<form id = "htmlform" class = "htmlform" name = "htmlform" action = "/generate" method="post">
    <textarea spellcheck="false" id = "htmlarea" name = "content" rows="15" style="color: yellow" ><?php  echo htmlspecialchars($dataArray['content']); ?></textarea><br>
    <input name = 'nameproject' type="text" value="2222" hidden>
    <input type="submit" value="Generate">
</form>



<div style="position: fixed;background: transparent; box-shadow: 0 0 10px rgba(0,0,0,0.5); height: 1800px; width: 98%; margin-left: 1%">
   <div style="margin-left: 5px;">


    <iframe  style="height: 1800px;width: 100%;border: transparent;" <?php echo "src = '../temp_pages/".$dataArray['pageName']."'"; ?>< sandbox=""></iframe>


   </div>
    <br>
</div>

