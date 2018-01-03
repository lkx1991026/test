<input type="text" name="url" placeholder="输入网址">
<input style='background-color: #00B83F;border:none;margin-left: 5px;' type="button" value="点击我跳转" onclick="redirect()">
<input type="button" name="clear" value="清除计时器">
<script src="jquery10.js"></script>
<script type="text/javascript">
    var id;
    var time;
    $('input[name=url]').on('blur',function () {
        window.clearInterval(id);
        time=5;
         id=setInterval('check()',1000);
    })
    $('input[name=clear]').on('click',function(){

    })

    var check=function () {

        if(time>=0){
            $('input[type=button]').val('还有'+time+'秒自动跳转');
        }else{
            redirect();
        }
        time--;

    }
    var redirect=function(){
        window.clearInterval(id);
        var url=$('input[name=url]').val();
        if(url.length==0){
            confirm('请输入网址');
            return false;

        }else if(url.substring(0,4)!='http'){
            url='http://'+url;
        }
        window.open(url);

    }
</script>