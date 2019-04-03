/**
 * Created by yujunzhen on 2019/3/18.
 */

$(function () {


    $("#form_Login").submit(function () {
        console.log($("#email").val());

        formLogin();
    })

    function formLogin() {

        var data = {
            username:$.trim($('#username').val()),
            password:$.trim($('#password').val())
        }
        if(!data.username){

            alert('请填写用户名');

            return;

        }
        if(!data.password){

            alert('请填写密码');

            return;

        }
        $.ajax({
            type : "POST",
            url:"http://localhost/PHP/login.php",
            dataType:"text",
            data: $("#form_Login").serialize(),

            success:function (result) {
                if(result["ret"]==-1){
                    alert(result.msg);
                }else if(result["ret"]==0) {
                    self.location='index.html';
                }else {
                    alert("服务器没响应");
                }

            },
            error:function (error) {
                alert("请求失败");
            }

        });

    }

});