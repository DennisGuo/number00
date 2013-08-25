<?php if (!defined('THINK_PATH')) exit();?><form action="<?php echo U('saveWebsiteInfo');?>" method='post'>
    <p>
        <span class="th">网站名称：</span>
        <input type="text" name="wName" value="<?php echo C('WEBSITE_NAME');?>"/>
    </p>
    <p>
        <span class="th">网站关键字：</span>
        <input class='input-long' type="text" name="wKey" value="<?php echo C('WEBSITE_KEYWORDS');?>"/>
    </p>
    <p>
        <span class="th">网站描述：</span>
        <textarea style='width:300px' name="wDesc" rows="4"><?php echo C('WEBSITE_DESCRIPTION');?></textarea>
    </p>
    <p>
        <span class="th"></span>
        <input type="submit" onclick="return confirmSaveWebsite()" class="btn gray" value='保存'>
    </p>
</form>