<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Js 方法测试——{{$title}}</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
	<div class="container">
		<h1 class="text-center">concat 连接两个或多个数组</h1>	
		<p class="text-center">该方法不会改变现有的数组，仅仅返回被连接数组的一个副本</p>		
	</div>
</body>
<script>
	// concat() 方法用于连接两个或多个数组。
	// 该方法不会改变现有的数组，而仅仅会返回被连接数组的一个副本。
	var one = ['mia', 'tony'];
	var two = ['allen', 'gouqi'];
	var three = ['mihoutao', 'bus', 'huojian'];
	var result = one.concat(two, three);
	console.log(result);
</script>
</html>