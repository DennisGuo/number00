$(document).ready(function(){
	showWebsitInfo();
});
/**
 * 
 * @param {type} type
 * @param {type} url
 * @param {type} width
 * @param {type} height
 * @returns {undefined}
 */
function showDialog(type,url,width,height)
{
    switch(type){
        case 'url':TINY.box.show({url:url, width:width, height:height});break;
        case 'html':TINY.box.show({html:url,width:width, height:height});
        default:break;
    }
    
}

function popup(msg)
{
    showDialog('html',msg,200,100);
}

function confirmSaveWebsite()
{
    var name = $("input[name='wName']").val();
    if(name === ""){
        popup('请输入网站名称.');
        return false;
    }
    var key =  $("input[name='wKey']").val();
    if(key === ""){
        popup('请输入网站关键字.');
        return false;
    }
    var desc = $("input[name='wDesc']").val();
    if(desc === ""){
        popup('请输入网站描述.');
        return false;
    }
    return true;
}