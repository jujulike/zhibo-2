<?php $this->load->view($cfg['tpl_admin'] . 'public/header')?>
<div class="so_main">
 
 <form action="" id="form1">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right">账户名：</td>
    <td> <input name="username" type="text"   class="input"/>&nbsp;<span style="color:red">必填</span>
      
    </td>
    </tr>
  <tr>
    <td align="right">个人昵称：</td>
    <td><input name="name" type="text"  class="input" />&nbsp;<span style="color:red">必填</span></td>
    </tr>
  <tr>
    <td align="right">设置登录密码：</td>
    <td><input name="passwd" type="password" class="input" value="" />&nbsp;<span style="color:red">必填</span></td>
    </tr>
  <tr>
    <td align="right">再输入一遍：</td>
    <td><input name="repasswd" type="password"  class="input"/>&nbsp;<span style="color:red">必填</span></td>
    </tr>
  <tr>
    <td align="right">手机号：</td>
    <td><input name="phone" type="text" class="input" />&nbsp;<span style="color:red">必填</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">邮箱：</td>
    <td><input name="email" type="text" class="input" />&nbsp;<span style="color:red">必填</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">QQ：</td>
    <td><input name="qq" type="text" class="input" />&nbsp;<span style="color:red">选填</span></td>
    <td>&nbsp;</td>
  </tr>
  <?php if ($cfg['site_reg_vcode'] == '1') {?>
	  <tr>
		<td align="right">验证码：</td>
		<td><div class="cfix">
		  <input name="r_code" type="text"  class="input" style="width:80px"/> <img src="<?php echo  site_url("code/create_vcode")?>" id="imgyzm" style="width:100px; height:32px" /> 
		  </div>
		  输入图片中的字符，区分大小写。<a href="javascript:void(0)" id="refresh">换一张</a></td>
		</tr>
	  <?php }?>
  <tr>
    <td align="right">&nbsp;</td>
    <td><a href="javascript:void(0)" class="reg_btn" onclick="register()">提交</a>已有帐号，马上<a href="javascript:void(0);" onclick="closeLayer()">登录</a></td>
    </tr>
</table>
</form>
</div>
<?php $this->load->view($cfg['tpl_admin'] . 'public/footer')?>

<script type="text/javascript">
function register()
{
	postdata('form1',"<?php echo site_url('user/reg')?>",'show');
}

function closeLayer(){
	layer.closeAll();
	userlogin();
	
	}

$("#refresh").click(function(){
		$("#imgyzm").attr('src', '<?php echo site_url("code/create_vcode");?>' + '/' + Math.random());
});
</script>