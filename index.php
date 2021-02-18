<link href="https://lucasliu.net/img/tag.ico" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&display=swap" rel="stylesheet">

<body style="font-family: Noto Serif TC">

<div class="container">

<h1 style="text-align:center">內掃區環境評分</h1><hr><br>

<h3>優：整潔明亮；中：無明顯汙垢；劣：具有明顯汙垢及灰塵</h3>
<p>最低分數為54分；最高分數為100分。</p>
	<div class="row">
<select class="custom-select my-1 col-3" id="a">
    <option selected value="">30%｜地面清潔</option>
    <option value="30">優</option>
    <option value="20">中</option>
    <option value="16.5">劣</option>
  </select>
<select class="custom-select my-1 col-3" id="b">
    <option selected value="">20%｜掃具擺放整齊</option>
    <option value="20">優</option>
    <option value="14">中</option>
    <option value="11">劣</option>
  </select>
  <select class="custom-select my-1 col-3" id="c">
    <option selected value="">10%｜內外牆面及天花板</option>
    <option value="10">優</option>
    <option value="6">中</option>
    <option value="6">劣</option>
  </select>
      <select class="custom-select my-1 col-3" id="d">
    <option selected value="">10%｜抽屜內無垃圾</option>
    <option value="10">優</option>
    <option value="6">中</option>
    <option value="5.5">劣</option>
  </select>
      <select class="custom-select my-1 col-3" id="e">
    <option selected value="">10%｜黑板及粉筆槽</option>
    <option value="10">優</option>
    <option value="6">中</option>
    <option value="5.5">劣</option>
  </select>
  <select class="custom-select my-1 col-3" id="f">
    <option selected value="">10%｜窗戶及窗溝</option>
    <option value="10">優</option>
    <option value="6">中</option>
    <option value="5.5">劣</option>
  </select>
      <select class="custom-select my-1 col-3" id="g">
    <option selected value="">5%｜垃圾桶周圍</option>
    <option value="5">優</option>
    <option value="4">中</option>
    <option value="3">劣</option>
  </select>
         <select class="custom-select my-1 col-3" id="h">
    <option selected value="">5%｜回收藍無汙垢</option>
    <option value="5">優</option>
    <option value="4">中</option>
    <option value="3">劣</option>
  </select>
</div>
<br>
	<div class="row">

<button onclick="compute()" type="button" class="btn btn-outline-success col">計算</button>
<output id="result" class="input-group-text col" >結果</output>
</div>
	<p style="color:red">*結果欄位出現<b>NaN</b>表示有任一欄位未填入分數</p>
</div>
</body>

<script>
function compute() {
	var a = parseInt(document.getElementById('a').value);
	var b = parseInt(document.getElementById('b').value);
	var c = parseInt(document.getElementById('c').value);
	var d = parseInt(document.getElementById('d').value);
	var e = parseInt(document.getElementById('e').value);
	var f = parseInt(document.getElementById('f').value);
	var g = parseInt(document.getElementById('g').value);
	var h = parseInt(document.getElementById('h').value);
	var result = a+b+c+d+e+f+g+h;
	document.getElementById('result').value =  result;
}
</script>