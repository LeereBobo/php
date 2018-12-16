# lesson-15
## Ajax的学习及应用
### Ajax 1 - 请求纯文本数据
### Ajax 2 - 请求JSON数据
### Ajax 3 请求真实接口API
### Ajax 4 - 请求PHP接口
#### 1.button：通过ajax正常请求数据。

		2.GET FORM：将form中的数据提交到PHP文件中。

		3.POST FORM：先将form中的数据提交到PHP文件中，然后插入数据库中。

		以上2.3提交时，form需有action指明提交对象和提交方式get/post。

		
		通过ajax请求对应的PHP接口：form表单输入内容，无action，不需提交，获取input输入的value，通过ajax发送请求时，使用?xxx=value这种形式，找到对应的接口。

		其实就是在接口连接使用?xxx=xxx这种方式发送一个参数，然后通过这个参数判断要请求的接口是哪一个。

		4.5为例：

		4.AJAX GET FORM：xhr.open("GET","process.php?name="+name2,true);

		5.AJAX POST FORM：xhr.open("POST","process.php",true);
		                  post请求一定要写请求头

### Ajax 5 - 请求数据库数据
