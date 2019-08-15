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
	var mergeSortedArray = function (A, B) {
		console.log((new Date()).getTime());
	    var result = [];
	    result = A.concat(B);
	    result = result.sort();
	    console.log(result);
	    console.log((new Date()).getTime());
	}

	var mergeSortedArray2 = function (A, B) {
		var ret = [];
	    var i, j
	    for (len = 0, i = 0, j = 0; i < A.length && j < B.length; ) {
	        if (A[i] < B[j]) {
	            ret.push(A[i++]);
	        } else {
	            ret.push(B[j++]);
	        }
	    }
	    while (i < A.length) {
	        ret.push(A[i++]);
	    }
	    while (j < B.length) {
	        ret.push(B[j++]);
	    }
	    console.log(ret);
	    return ret;
	}

	mergeSortedArray2([1], [2, 1]);

</script>
</html>