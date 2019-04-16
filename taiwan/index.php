<?php
//include("api.php");
$link = mysqli_connect("localhost","s1070205","s1070205","s1070205");
mysqli_query($link,"set names utf8");
    $sql="select * from taiwanapi order by id desc";
    $ro1=mysqli_query($link,$sql);
	$row1=mysqli_fetch_assoc($ro1);

?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>臺灣AQI即時通</title>
    <link rel=stylesheet type="text/css" href="./css/bootstrap.min.css">
	<link rel=stylesheet type="text/css" href="./css/all.min.css">
	<link rel=stylesheet type="text/css" href="./css/css.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-dark shadow" role="navigation">
        <div class="container">
            <a class="navbar-brand" href="index.php"><h3>臺灣AQI即時通</h3></a>
			<button type="button" class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#mynavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
				<div class="navbar-right collapse navbar-collapse" id="mynavbar">
					<?php
					$sql="select * from taiwanapi group by PublishTime desc";
					$to=mysqli_query($link,$sql);
					$tow=mysqli_fetch_assoc($to);
					?>
					<ul  class="nav navbar-nav ml-auto">
						<li>
						<select id="changetime" class="form-control" onchange="document.location.href='?ct='+this.value" style="text-align:center">
							<option>請選擇欲顯示的時間</option>
							<?php do{?> 
								<option value="<?=$tow["PublishTime"]?>"><?=$tow["PublishTime"]?></option>
							<?php }while($tow=mysqli_fetch_assoc($to));?>
						</select>
						</li>
					</ul>
				</div>
        </div>
</nav>
<div class="container-fluid mt-5" >
    <div class="row">
	<div class="col-md-1"></div>
<!--左半邊-->
        <div class="col-md-4 col-sm-12">
		<div class="mx-auto align-middle" >
        <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="100%" height="100%" viewBox="0 0 548.973 729.081" enable-background="new 0 0 548.973 729.081"
	 xml:space="preserve" >
<g id="圖層_1_1_">
<path fill="#00C3A0" d="M456.606,302.395c-4.406,0-7.978,3.575-7.978,7.978v73.644c0,7.545-6.115,13.665-13.665,13.665h-3.364
		c-7.549,0-13.672,6.126-13.672,13.668v54.557c0,5.792-4.693,10.481-10.479,10.481h-2.58c-5.797,0-10.481,4.69-10.481,10.482v44.134
		c0,11.245-9.128,20.375-20.365,20.375h-11.987c-11.241,0-20.364,9.123-20.364,20.361v88.965c0,11.119-8.91,20.164-19.983,20.373
		c-11.423,0.211-20.761-9.482-20.761-20.9v-38.816c0-11.244-9.132-20.367-20.376-20.367h-10.641
		c-11.246,0-20.374-9.125-20.374-20.371v-5.115c0,0-0.043-6.482,0-7.979c0.105-3.775-3.054-6.838-6.834-6.838h-5.653
		c-10.338,0-18.738-8.377-18.738-18.734v-49.76c0-3.789-3.054-6.845-6.831-6.845h-1.111c-8.177,0-14.797-6.62-14.797-14.787v-4.37
		v-0.602c0-3.789,3.06-6.838,6.836-6.838h1.003c3.774,0,6.834-3.056,6.834-6.831v-73.691c0-11.037,8.941-19.962,19.965-19.962h0.654
		c3.099,0,5.62-2.526,5.62-5.625v-22.629c0-9.825,7.919-17.81,17.746-17.911l0,0c9.827-0.084,17.748-8.083,17.748-17.904v-43.114
		c0-15.345,12.441-27.794,27.794-27.794h1.078c15.345,0,27.798-12.442,27.798-27.794v-26.24c0-2.853,2.314-5.154,5.156-5.154h1.478
		c10.185,0,18.445-8.268,18.445-18.444v-1.561c0-10.191,8.263-18.445,18.444-18.445l29.217,0.029
		c10.188,0,18.452-8.265,18.452-18.445v-1.183c0-6.748,5.523-12.206,12.3-12.075c6.648,0.12,11.85,5.825,11.85,12.474v0.784
		c0,5.909,4.783,10.692,10.692,10.692h16.898c8.569,0,15.505,6.946,15.505,15.512l0.124,3.582c0,1.978,1.604,3.583,3.578,3.583
		h0.305c5.665,0,10.278,4.595,10.278,10.278c0,5.673-4.595,10.279-10.278,10.279h-0.305c-8.565,0-15.505,6.939-15.505,15.508
		l0.065,36.538c0,1.981,1.604,3.582,3.585,3.582h0.233c4.524,0,8.188,3.669,8.188,8.191c0,4.523-3.664,8.188-8.188,8.188h-0.233
		c-6.834,0-12.376,5.545-12.376,12.376v48.895c0,4.402-3.575,7.974-7.978,7.974l-2.605,0.032"/>

	<path id="金門縣" class="path2" fill="#36BEA0" d="M54.801,263.835h6.426c8.418,0,15.23,6.824,15.23,15.229l0,0c0,8.413-6.823,15.229-15.23,15.229h-6.426
		c-8.416,0-15.229-6.823-15.229-15.229l0,0C39.576,270.645,46.399,263.835,54.801,263.835z" data-toggle="modal" data-target="#modal-detail"/>
	<path id="馬祖" class="path2" fill="#36BEA0" d="M93.126,37.281h7.975c4.809,0,8.706,3.898,8.706,8.707l0,0c0,4.809-3.896,8.707-8.706,8.707h-7.975
		c-4.813,0-8.707-3.895-8.707-8.707l0,0C84.419,41.183,88.313,37.281,93.126,37.281z" data-toggle="modal" data-target="#modal-detail"/>
	<path id="澎湖縣" class="path2" fill="#36BEA0" d="M107.774,488.851v-4.457c0-5.836,4.724-10.562,10.555-10.562l0,0c5.834,0,10.562,4.722,10.562,10.562v4.457
		c0,5.829-4.724,10.554-10.562,10.554l0,0C112.502,499.405,107.774,494.68,107.774,488.851z" data-toggle="modal" data-target="#modal-detail"/>
	<path id="綠島" class="path2" fill="#36BEA0" d="M426.67,545.629h5.009c3.013,0,5.458,2.443,5.458,5.459l0,0c0,3.021-2.445,5.459-5.458,5.459h-5.009
		c-3.017,0-5.451-2.438-5.451-5.459l0,0C421.219,548.072,423.662,545.629,426.67,545.629z" data-toggle="modal" data-target="#modal-detail"/>
	<path id="蘭嶼" class="path2" fill="#36BEA0" d="M456.808,632.273v6.756c0,4.072-3.302,7.367-7.367,7.367l0,0c-4.071,0-7.367-3.303-7.367-7.367v-6.756
		c0-4.068,3.31-7.371,7.367-7.371l0,0C453.517,624.902,456.808,628.205,456.808,632.273z" data-toggle="modal" data-target="#modal-detail"/>
</g>
<path id="雲林縣" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M210.267,403.452h21.181c2.604,0,4.716-2.105,4.716-4.711v0.007c0-2.606,2.107-4.711,4.717-4.711h16.292
	c3.145,0,5.694-2.559,5.694-5.698v-0.043c0-3.146,2.549-5.691,5.691-5.691c3.146,0,5.698,2.552,5.698,5.691v0.043
	c0,3.144,2.552,5.698,5.687,5.698l17.708,0.029c3.92,0,7.085-3.176,7.085-7.092c0-3.92-3.172-7.092-7.085-7.092
	c-3.923,0-7.092-3.172-7.092-7.092v-15.592c0-3.92-3.176-7.088-7.091-7.088h-47.003l0.033,2.519c0,3.103-2.519,5.622-5.62,5.622
	h-0.657c-11.03,0-19.962,8.943-19.962,19.969v25.246h0.007V403.452z"  data-toggle="modal" data-target="#modal-detail"/>
<path id="嘉義縣" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M257.181,394.037c3.145,0,5.691-2.555,5.691-5.688v-0.047c0-3.146,2.557-5.699,5.702-5.699c3.14,0,5.691,2.559,5.691,5.699v0.047
	c0,3.14,2.548,5.688,5.684,5.688h27.519c9.53,0,17.269,7.724,17.269,17.269c0,9.538-7.724,17.276-17.269,17.276h-2.613
	c-5.404,0-9.785,4.381-9.785,9.785v9.531c0,5.397-4.384,9.785-9.785,9.785c-5.4,0-9.784-4.388-9.784-9.785v-12.841
	c0-5.401-4.381-9.785-9.785-9.785h-22.407c-5.404,0-9.781,4.384-9.781,9.785v-0.036c0,5.401-4.386,9.792-9.787,9.792h-13.472
	v-41.354h21.177c2.604,0,4.717-2.104,4.717-4.718v0.01c0-2.602,2.107-4.721,4.716-4.721h16.303V394.037L257.181,394.037z" data-toggle="modal" data-target="#modal-detail"/>
<path id="嘉義市" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M242.353,416.691h-1.691c-2.482,0-4.497-2.014-4.497-4.5l0,0c0-2.489,2.015-4.5,4.497-4.5h1.691c2.486,0,4.501,2.011,4.501,4.5l0,0
	C246.854,414.677,244.839,416.691,242.353,416.691z" data-toggle="modal" data-target="#modal-detail"/>
<path id="南投縣" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M289.805,339.225c0-5.262,4.269-9.534,9.531-9.534s9.53-4.271,9.53-9.535c0-5.262,4.269-9.534,9.531-9.534h12.515
	c5.263,0,9.534-4.271,9.534-9.534c0-5.263,4.271-9.539,9.533-9.539h26.981c5.264,0,9.528,4.275,9.528,9.539v92.553
	c0,4.243-3.434,7.669-7.67,7.669l-0.287,0.047c-4.242,0-7.668,3.433-7.668,7.665c0,4.243-3.438,7.673-7.68,7.673l-29.283,0.112
	c-5.465,0-9.885-4.424-9.885-9.886l-0.066-0.381c0-5.466-4.436-9.89-9.895-9.89c-5.465,0-9.885-4.425-9.885-9.887v0.229
	c0-3.923-3.173-7.092-7.089-7.092c-3.924,0-7.092-3.176-7.092-7.088L289.805,339.225z" data-toggle="modal" data-target="#modal-detail"/>
<path id="臺中市" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M405.667,262.801c0,5.263-4.271,9.535-9.534,9.535v0.054c-5.262,0-9.526,4.272-9.526,9.535c0,5.262-4.272,9.534-9.528,9.534h-27.151
	c-5.263,0-9.527,4.272-9.527,9.535c0,5.263-4.271,9.531-9.534,9.531h-12.518c-5.263,0-9.531,4.276-9.531,9.538
	c0,5.263-4.268,9.531-9.531,9.531l-0.163-0.011c-5.24,0-9.483-4.25-9.483-9.479v-14.347v-4.494c0-4.791-3.875-8.667-8.667-8.667
	h-8.986l0.051-43.204h22.401c3.36,0,6.086,2.722,6.086,6.076v0.519c0,6.392,5.188,11.582,11.573,11.582h44.222
	c10.027,0,18.169-8.137,18.169-18.168v-0.817c0-5.263,4.269-9.535,9.53-9.535h5.404c3.023,0,5.47,2.454,5.47,5.466l-0.131,3.469
	c0,3.02,2.454,5.466,5.474,5.466v0.094c3.02,0,5.466,2.454,5.466,5.466v3.792H405.667z" data-toggle="modal" data-target="#modal-detail"/>
<path id="彰化縣" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M289.805,344.713c0,2.969-2.402,5.364-5.372,5.364h-47.871v-20.056c0-9.829,7.922-17.81,17.746-17.907l0,0
	c9.83-0.087,17.75-8.087,17.75-17.908v-1.314h8.921c4.79,0,8.659,3.869,8.659,8.66L289.805,344.713z" data-toggle="modal" data-target="#modal-detail"/>
<path id="花蓮縣" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M417.858,440.53c-3.978,0-7.219,3.223-7.219,7.215l-0.044,0.265c0,3.981-3.227,7.219-7.219,7.219c-3.978,0-7.223,3.223-7.223,7.215
	v0.573c0,2.915-2.366,5.285-5.283,5.285c-2.918,0-5.285-2.37-5.285-5.285v-0.573c0-3.978-3.223-7.215-7.223-7.215
	c-3.974,0-7.212-3.227-7.212-7.219l-0.043-0.265c0-3.978-3.23-7.215-7.223-7.215h-0.657c-6.583,0-11.923-5.347-11.923-11.927
	c0-6.587,5.346-11.926,11.923-11.926h0.247c4.243,0,7.67-3.434,7.67-7.673c0-4.235,3.432-7.672,7.668-7.672l0.29-0.043
	c4.243,0,7.67-3.434,7.67-7.666V281.925h0.082c0-5.263,4.27-9.531,9.531-9.531v-0.058c5.263,0,9.531-4.269,9.531-9.531v-0.406
	c0-3.017,2.446-5.47,5.473-5.47h54.993v37.484c0,4.403-3.571,7.974-7.978,7.974l-2.613,0.036l0.66-0.036
	c-4.405,0-7.977,3.571-7.977,7.978v73.64c0,7.542-6.119,13.672-13.672,13.672h-3.365c-7.542,0-13.672,6.123-13.672,13.668v29.191
	h0.084v-0.007H417.858z" data-toggle="modal" data-target="#modal-detail"/>
<path id="臺東縣" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M341.409,622.428h-11.367c-10.722,0-19.403-8.684-19.403-19.404v-43.906c0-4.037,3.273-7.311,7.31-7.311l0.276-0.043
	c4.035,0,7.31-3.273,7.31-7.311c0-4.036,3.272-7.31,7.303-7.31h0.572c2.948,0,5.343-2.39,5.343-5.344
	c0-2.963-2.395-5.348-5.343-5.348h-0.572c-4.03,0-7.303-3.273-7.303-7.309l0.29-40.906c0-6.86,5.546-12.42,12.42-12.42
	c6.856,0,12.419-5.553,12.419-12.42l0.081-0.472c0-6.863,5.545-12.424,12.419-12.424h0.363h0.657c3.98,0,7.219,3.223,7.219,7.216
	l0.047,0.268c0,3.978,3.227,7.223,7.219,7.223c3.985,0,7.216,3.223,7.216,7.212v0.574c0,2.914,2.373,5.284,5.291,5.284
	c2.911,0,5.285-2.37,5.285-5.284v-0.574c0-3.974,3.229-7.212,7.215-7.212c3.982,0,7.216-3.23,7.216-7.223l0.047-0.268
	c0-3.978,2.798-7.216,6.779-7.216l0,0v25.363c0,5.796-4.7,10.478-10.48,10.478h-2.574c-5.799,0-10.489,4.701-10.489,10.479v44.14
	c0,11.244-9.121,20.365-20.368,20.365h-11.977c-11.244,0-20.368,9.127-20.368,20.377v50.711h-0.051V622.428L341.409,622.428z" data-toggle="modal" data-target="#modal-detail"/>
<path id="新北市" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M491.528,140.61h-0.298c-1.981,0-3.585-1.604-3.585-3.583l-0.117-3.582c0-8.566-6.938-15.512-15.511-15.512h-16.878
	c-5.901,0-10.692-4.791-10.692-10.692v-0.784c0-6.656-5.193-12.354-11.846-12.474c-6.77-0.13-12.304,5.328-12.304,12.075v1.183
	c0,10.191-8.269,18.445-18.445,18.445h-3.636v5.963c0,3.121,2.53,5.644,5.64,5.644c3.833,0,6.933,3.1,6.933,6.928
	c0,3.833-3.1,6.933-6.933,6.933v0.047c-3.122,0-5.64,2.526-5.64,5.633v15.272c0,3.122,2.53,5.64,5.64,5.64h5.037
	c3.122,0,5.64,2.53,5.64,5.64l0.052,1.452v20.782c0,3.11,2.512,5.628,5.626,5.628c3.11,0,5.629-2.518,5.629-5.628
	c0-7.082,5.752-12.831,12.83-12.831h0.232c7.084,0,12.825-5.745,12.825-12.83v-0.442c0-7.078,5.75-12.827,12.835-12.827h0.23
	c7.078,0,12.828-5.749,12.828-12.833v-0.443c0-7.077,5.748-12.826,12.826-12.826L491.528,140.61z" data-toggle="modal" data-target="#modal-detail"/>
<path id="臺北市" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M416.581,123.595c0-3.346,2.711-6.058,6.061-6.058h9.415c1.771,0,3.198,1.43,3.198,3.198v9.755c0,0.882,0.715,1.604,1.606,1.604
	h0.727c1.764,0,3.197,1.43,3.197,3.194v0.893c0,1.768,1.431,3.197,3.198,3.197h0.733c1.444,0,2.605,1.165,2.605,2.606v3.495
	c0,1.444-1.161,2.605-2.605,2.605h-0.733c-1.774,0-3.198,1.43-3.198,3.198v0.936c0,1.768-1.434,3.198-3.197,3.198l-1.153-0.109
	c-4.37,0-7.92-3.542-7.92-7.919l0.077-0.828c0-1.11-0.895-2.003-2.001-2.003h-0.588c-1.113,0-2.004-0.9-2.004-2.003v-8.333
	c0-1.768-1.434-3.198-3.2-3.198h-0.937c-1.764,0-3.187-1.43-3.187-3.197L416.581,123.595z" data-toggle="modal" data-target="#modal-detail"/>
<path id="基隆市" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M481.079,120.84l-14.38,14.38c-4.024,4.025-10.546,4.025-14.572,0l0,0c-4.024-4.025-4.024-10.547,0-14.572l2.693-2.693h18.314
	C473.134,117.956,477.41,118.093,481.079,120.84z" data-toggle="modal" data-target="#modal-detail"/>
<path id="桃園市" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M398.382,125.686l-26.043-0.037c-10.191,0-18.445,8.268-18.445,18.445v1.561c0,4.069-1.325,7.836-3.557,10.892l-0.069-0.054
	c6.921,0,12.528,5.604,12.528,12.529v0.432c0,6.921,5.614,12.529,12.525,12.529h0.232c6.918,0,12.528,5.607,12.528,12.528v0.432
	c0,6.917,5.604,12.529,12.528,12.529h0.236c6.914,0,12.525,5.607,12.525,12.528c0,3.034,2.461,5.499,5.494,5.499
	c3.035,0,5.495-2.464,5.495-5.499l0.139-4.638c0-2.272-1.837-4.123-4.116-4.123c-3.11,0-5.633-2.519-5.633-5.633v-20.76
	l-0.044-1.452c0-3.122-2.533-5.64-5.644-5.64h-5.033c-3.114,0-5.641-2.526-5.641-5.64v-15.269c0-3.118,2.533-5.636,5.641-5.636
	v-0.047c3.829,0,6.928-3.1,6.928-6.929c0-3.833-3.099-6.932-6.928-6.932c-3.114,0-5.641-2.533-5.641-5.644v-5.97H398.382
	L398.382,125.686z" data-toggle="modal" data-target="#modal-detail"/>
<path id="新竹縣" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M349.996,156.667c-3.351,4.522-8.747,7.458-14.812,7.458h-1.47c-2.856,0-5.161,2.316-5.161,5.154v26.237l-0.022,2.475v0.261
	c0,4.185,3.401,7.589,7.59,7.589h0.134c4.192,0,7.586,3.401,7.586,7.589v0.258c0,4.185,3.404,7.589,7.585,7.589h0.145
	c4.182,0,7.587,3.4,7.587,7.589l-0.287,6.511c0,2.174,1.768,3.952,3.952,3.952h33.692c2.174,0,3.951-1.767,3.951-3.952
	s1.769-3.952,3.95-3.952h5.306c1.938,0,3.51-1.572,3.51-3.506v-7.912c0-6.917-5.615-12.525-12.529-12.525h-0.236
	c-6.924,0-12.528-5.607-12.528-12.529v-0.431c0-6.918-5.604-12.529-12.528-12.529h-0.232c-6.918,0-12.528-5.608-12.528-12.529
	v-0.429c0-6.92-5.608-12.529-12.522-12.529L349.996,156.667z" data-toggle="modal" data-target="#modal-detail"/>
<path id="苗栗縣" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M271.949,249.405h22.408c3.357,0,6.083,2.722,6.083,6.08V256c0,6.392,5.19,11.582,11.577,11.582h44.222
	c10.031,0,18.165-8.137,18.165-18.169v-0.443c0-5.306-4.301-9.611-9.611-9.611l-1.934-0.036c-2.178,0-3.953-1.768-3.953-3.952
	l0.289-6.511c0-4.185-3.399-7.589-7.585-7.589h-0.141c-4.186,0-7.586-3.401-7.586-7.589v-0.257c0-4.185-3.4-7.589-7.589-7.589
	h-0.139c-4.188,0-7.588-3.401-7.588-7.589v-0.261l0.021-2.476h-0.021c0,15.345-12.441,27.801-27.794,27.801h-1.075
	c-14.659,0-26.661,11.342-27.729,25.722L271.949,249.405z" data-toggle="modal" data-target="#modal-detail"/>
<path id="屏東縣" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M261.606,598.975c2.669,1.291,5.675,2.014,8.84,2.014h10.641c11.236,0,20.365,9.129,20.365,20.373v38.813
	c0,11.418,9.346,21.123,20.759,20.898c11.074-0.203,19.984-9.242,19.984-20.367v-38.277H330.15c-10.726,0-19.41-8.693-19.41-19.41
	v-43.9c0-4.037,3.271-7.311,7.307-7.311l0.279-0.051c4.035,0,7.31-3.273,7.31-7.311c0-4.035,3.273-7.308,7.31-7.308h0.565
	c2.952,0,5.342-2.392,5.342-5.342c0-2.961-2.387-5.344-5.342-5.344h-0.565c-4.036,0-7.31-3.273-7.31-7.309
	c0-5.248-5.147-4.547-5.147-4.547l-39.255,0.213c-3.753,0-6.809,3.034-6.809,6.809v1.132c0,3.753-3.042,6.808-6.816,6.808h-0.723
	c-3.758,0-6.812,3.049-6.812,6.816v61.817L261.606,598.975z" data-toggle="modal" data-target="#modal-detail"/>
<path id="高雄市" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M259.229,597.697c-5.591-3.641-9.27-9.938-9.27-17.08v-5.133c0,0-0.045-6.467,0-7.977c0.107-3.781-3.055-6.838-6.831-6.838h-6.096
	c-10.34,0-18.738-8.385-18.738-18.734v-35.322h38.328c8.083,0,14.636-6.555,14.636-14.634v-12.594
	c0-8.079,6.555-14.638,14.634-14.638h0.352c1.942,0,3.538-1.582,3.538-3.531c0-1.953-1.581-3.542-3.538-3.542h-0.712
	c5.405,0,9.789-4.388,9.789-9.792v-9.524c0-5.404,4.385-9.785,9.785-9.785h2.613c9.531,0,17.269-7.73,17.269-17.276v-4.391
	c0,5.473,4.428,9.894,9.891,9.894l29.282-0.116h-0.473h-0.242c-6.584,0-11.927,5.335-11.927,11.918
	c0,6.587,5.343,11.927,11.927,11.927h0.661h-0.777h-0.375c-6.855,0-12.419,5.553-12.419,12.419l-0.076,0.472
	c0,6.86-5.554,12.42-12.424,12.42c-6.867,0-12.42,5.553-12.42,12.42l-0.291,29.199l0.186,1.978c0,2.853-2.315,5.168-5.168,5.168
	l-39.248,0.239c-3.764,0-6.816,3.034-6.816,6.81v1.132c0,3.753-3.042,6.808-6.809,6.808h-0.73c-3.761,0-6.816,3.05-6.816,6.816
	v61.816L259.229,597.697z" data-toggle="modal" data-target="#modal-detail"/>
<path id="臺南市" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M218.317,506.621h38.284c8.083,0,14.635-6.558,14.635-14.634v-12.594c0-8.086,6.599-14.633,14.678-14.633h0.349
	c1.945,0,3.542-1.582,3.542-3.542c0-1.938-1.581-3.536-3.542-3.536c-5.4,0-10.859-4.384-10.859-9.785v-12.833
	c0-5.4-4.377-9.792-9.783-9.792h-22.406c-5.404,0-9.783,4.392-9.783,9.792v-0.04c0,5.404-4.381,9.789-9.785,9.789h-13.398v7.077
	c0,3.782-3.054,6.831-6.83,6.831h-1.003c-3.78,0-6.834,3.057-6.834,6.845v0.595v4.377c0,8.169,6.628,14.786,14.795,14.786h1.11
	c3.776,0,6.831,3.056,6.831,6.838V506.621L218.317,506.621z" data-toggle="modal" data-target="#modal-detail"/>
<path id="宜蘭縣" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M411.035,256.936c-7.076,0-12.826-5.746-12.826-12.83s5.75-12.826,12.826-12.826l1.518-0.174c7.076,0,12.834-5.746,12.834-12.827
	v-12.645c0-7.081,5.74-12.83,12.818-12.83h0.232c7.077,0,12.826-5.745,12.826-12.83v-0.443c0-7.078,5.749-12.826,12.826-12.826
	h0.239c7.078,0,12.826-5.749,12.826-12.833v-0.439c0-7.081,5.749-12.83,12.827-12.83l1.049,0.011
	c5.673,0,10.281,4.591,10.281,10.282c0,5.669-4.59,10.271-10.281,10.271h-0.294c-8.572,0-15.513,6.947-15.513,15.512l0.065,36.538
	c0,1.978,1.607,3.582,3.59,3.582h0.235c4.516,0,8.186,3.666,8.186,8.192c0,4.522-3.67,8.191-8.186,8.191h-0.235
	c-6.834,0-12.376,5.539-12.376,12.376v11.411h-55.476v-0.033H411.035z" data-toggle="modal" data-target="#modal-detail"/>
<g>
		<path id="新竹市" class="path2" fill="#36BEA0" stroke="#48D4BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M328.786,198.197c0,4.229,3.433,7.662,7.668,7.662s7.67-3.434,7.67-7.662v-1.818c0-2.344,1.905-4.253,4.25-4.253l0.279,0.087
		c2.349,0,4.254-1.906,4.254-4.253v-1.514c0-2.345-1.905-4.25-4.254-4.25l-0.279,0.083c-2.345,0-4.25-1.905-4.25-4.25v-0.464
		c0-2.344-1.913-4.253-4.258-4.253h-6.893c-2.344,0-4.253,1.909-4.253,4.253h0.022v17.875L328.786,198.197z" data-toggle="modal" data-target="#modal-detail"/>
</g>


</svg>
</div>
        </div>
<!--左半邊-->

<!--右半邊-->		
<div class="col-md-6  col-sm-12">
	<div class="mx-auto" style="width:95%">
	<div class="mb-3">
		<div class="card shadow">
			<div class="card-header" align="center">
				<h4>空氣品質指標(AQI)與健康影響</h4>
				<ul class="nav nav-pills justify-content-center">
								<li class="nav-item">
									<div class="nav-link2 " onclick="showinfo('aqicolor')">AQI指數對照表</div>
								</li>
								<li class="nav-item">
									<div class="nav-link2 " onclick="showinfo('knowaqi')">什麼是AQI?</div>
								</li>
								<div id="drop-aqi" class=" nav-link2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">AQI所影響到的健康</div>
								<div class="dropdown-menu" aria-labelledby="drop-aqi">
								<li class="nav-item ">
									<div class="nav-link2" onclick="showinfo('lv1')">AQI：0~50</div>
								</li> 
								<li class="nav-item "> 
									<div class="nav-link2"  onclick="showinfo('lv2')">AQI：51~100</div>
								</li> 
								<li class="nav-item "> 
									<div class="nav-link2"  onclick="showinfo('lv3')">AQI：100~150</div>
								</li> 
								<li class="nav-item "> 
									<div class="nav-link2" onclick="showinfo('lv4')">AQI：151~200</div>
								</li> 
								<li class="nav-item "> 
									<div class="nav-link2" onclick="showinfo('lv5')">AQI：201~250</div>
								</li> 
								<li class="nav-item "> 
									<div class="nav-link2" onclick="showinfo('lv6')">AQI：251~300</div>
								</li>	
								</div>
			</ul>
			</div>

			<div class="card-body" style="padding:0px;">
			<div id="infobox">
				<div  id="aqicolor" class="aqiinfo">
							<div class="table-responsive">
							<table class="table " cellpadding="">
								<tbody>
									<tr>
										<td width="16.7%" align="left" bgcolor="#36BEA0"></td>
										<td width="16.7%" align="left" bgcolor="#ffeb3b"></td>
										<td width="16.7%" align="left" bgcolor="#ff9800"></td>
										<td width="16.7%" align="left" bgcolor="#dc1505"></td>
										<td width="16.7%" align="left" bgcolor="#8b239c"></td>
										<td width="16.7%" align="left" bgcolor="#9a1542"></td>
									</tr>
									<tr>
										<td align="center">0~50</td>
										<td align="center">51~100</td>
										<td align="center">101~150</td>
										<td align="center">151~200</td>
										<td align="center">201~250</td>
										<td align="center">251~300</td>
									</tr>
								</tbody>
							</table>
							</div>
				</div>
				<div  id="knowaqi" class="aqiinfo">
						<table class="table" cellpadding="">
							<tbody>
								<tr>
									<td align="left">
										<div style="line-height:2"><strong>AQI空氣品質指標</strong>為依據監測資料將當日空氣中臭氧(O3)、細懸浮微粒(PM2.5)、懸浮微粒(PM10)、一氧化碳(CO)、二氧化硫(SO2)及二氧化氮(NO2)濃度等數值，以其對人體健康的影響程度，分別換算出不同污染物之副指標值，再以當日各副指標之最大值為該測站當日之空氣品質指標值(AQI)。</div>
									</td>

								</tr>
							</tbody>
						</table>
					</div>
				<div  id="lv1" class="aqiinfo">
					<table class="table " cellpadding="">
						<thead align="center">
							<tr>
								<th >代表顏色</th>
								<th >AQI指數</th>
								<th >狀態</th>
								<th >影響</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="center" width="15%" >
									<div style="background-color:#36BEA0;width:100%">　</div>
								</td>
								<td align="center" width="15%">0~50</td>
								<td align="center" width="20%">良好</td>
								<td align="center" >污染程度低或無污染</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div  id="lv2" class="aqiinfo">
				<table class="table " cellpadding="10">
						<thead align="center">
							<tr>
								<th >代表顏色</th>
								<th >AQI指數</th>
								<th >狀態</th>
								<th >影響</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="center" width="15%">
								<div style="background-color:#ffeb3b;width:100%">　</div>
								</td>
								<td align="center" width="15%">51~100</td>
								<td align="center" width="20%">普通</td>
								<td align="center" >對非常少數的極敏感族群產生輕微影響</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div  id="lv3" class="aqiinfo">
				<table class="table " cellpadding="10">
						<thead align="center">
							<tr>
								<th >代表顏色</th>
								<th >AQI指數</th>
								<th >狀態</th>
								<th >影響</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="center" width="15%" >
								<div style="background-color:#ff9800;width:100%">　</div>
								</td>
								<td align="center" width="15%">101~150</td>
								<td align="center" width="20%">對敏感族群不良</td>
								<td align="center" >對敏感族群健康造成影響，對一般大眾影響不明顯</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div  id="lv4" class="aqiinfo">
				<table class="table " cellpadding="10">
						<thead align="center">
							<tr>
								<th >代表顏色</th>
								<th >AQI指數</th>
								<th >狀態</th>
								<th >影響</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="center" width="15%">
								<div style="background-color:#dc1505;width:100%">　</div>
								</td>
								<td align="center" width="15%">151~200</td>
								<td align="center" width="20%">對所有族群不良</td>
								<td align="center" >對所有人健康開始產生影響，對敏感族群影響較嚴重</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div  id="lv5" class="aqiinfo">
				<table class="table "  cellpadding="10">
						<thead align="center">
							<tr>
								<th >代表顏色</th>
								<th >AQI指數</th>
								<th >狀態</th>
								<th >影響</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="center" width="15%">
								<div style="background-color:#8b239c;width:100%">　</div>
								</td>
								<td align="center" width="15%">201~300</td>
								<td align="center" width="20%">非常不良</td>
								<td align="center" >對所有人都可能有嚴重影響</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div  id="lv6" class="aqiinfo">
				<table class="table " cellpadding="10">
						<thead align="center">
							<tr>
								<th >代表顏色</th>
								<th >AQI指數</th>
								<th >狀態</th>
								<th >影響</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="center" width="15%" >
								<div style="background-color:#9a1542;width:100%">　</div>
								</td>
								<td align="center" width="15%">301~500</td>
								<td align="center" width="20%">有害</td>
								<td align="center" >健康威脅達緊急程度，所有人都可能影響</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			</div>
		</div>
	</div>
	<script>

	</script>

				<div class="card  mb-3 shadow ">
					<canvas id="chart"></canvas>
				</div>
				<div class="row mb-3">
						<div class="col-md-6 col-sm-12 mb-3">
							<div class="card shadow ">
								<div class="card-header" align="center">
										<h4>目前顯示資料的時間</h4>
								</div>
								<div class="card-body" align="center">
									<div class="card-text" style="font-size:1.2rem">
										<?php if(!empty($_GET["ct"])){echo $_GET["ct"];}else{echo $row1["PublishTime"];}?>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6 col-sm-12">
							<div  class="card shadow" >
								<div id="upd-btn">
								<div class="card-header" align="center">
										<h4>更新資料庫</h4>
								</div>
								<div class="card-body" align="center">
										<div  class="card-text">
											<span class="fas fa-sync-alt" style="font-size:1.5rem"></span>
											<button style="position:absolute;left: 0;font-size: 35px;top: 64px;width: 100%; opacity:0;" onclick="upd()">123</button>
										</div>
								</div>
							</div>	
							</div>
						</div>
				</div>

	</div>
</div>
	<!--右半邊-->	
	<div class="col-md-1"></div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal-detail" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title ml-auto" style=""></h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
				<div class="card">
	<div class="card-body table-responsive">
	<table class="talbe table-striped"  widht="100%"style="width:100%;" cellpadding="10" >
		<thead align="center">
			<tr>
				<th class="card-text" scope="col">測站名稱</th>
				<th class="card-text" scope="col">空氣品質指標AQI</th>
				<th class="card-text" scope="col">空氣污染指標物</th>
				<th class="card-text" scope="col">狀態</th>
			</tr>
		</thead>
		<tbody id="result"></tbody>
		<tfoot>
			<tr>
				<td id="lastupdate" class="card-text" align="center" colspan="4" ></td>
			</tr>
		</tfoot>
	</table>
	</div>
	</div>
				</div>
			</div>
		</div>
	</div>	

<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/Chart.min.js"></script>


<script>
$(".aqiinfo").hide();
	function showinfo(x){
			$(".aqiinfo").hide();
			$("#"+x).show();
			
	}showinfo('aqicolor');

function upd(){
	var upd = 1;
	$.post("updapi.php",{upd},function(o){
		if(o>1){
			alert('目前為最新資料');
		}else{
			document.location.href="index.php";
			alert('更新成功');
		}
	})
}
function aqicolor(COUNTY,AQI){
	if(AQI>=0 && AQI<51){
		$("#"+COUNTY).css("fill","#36BEA0");
	}
	if(AQI>=51 && AQI<101){
		$("#"+COUNTY).css("fill","#ffeb3b");
	}
	if(AQI>=101 && AQI<151){
		$("#"+COUNTY).css("fill","#ff9800");
	}
	if(AQI>=151 && AQI<201){
		$("#"+COUNTY).css("fill","#dc1505");
	}
	if(AQI>=201 && AQI<301){
		$("#"+COUNTY).css("fill","#8b239c");
	}
	if(AQI>=301 && AQI<501){
		$("#"+COUNTY).css("fill","#9a1542");
	}
}


$("#changetime").change(function(){
	var ct = "'"+$(this).val()+"'";
})
</script>
<?php
if(!empty($_GET["ct"])) $row1["PublishTime"] = $_GET["ct"];
?>
<?php
	//篩選出最近更新的時間點且以縣市為Group
	$sql="select * from taiwanapi where PublishTime ='".$row1["PublishTime"]."' group by County";
    $ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);
	$time = "'".$row1["PublishTime"]."'";
	$tt=0;
	do{//以縣市為Group去做各縣市AQI指數之平均;
		$county[] = $row["County"];
		$sql="select * from taiwanapi where PublishTime ='".$row["PublishTime"]."' and County='".$row["County"]."'";
		$ro2=mysqli_query($link,$sql);
		$row2=mysqli_fetch_assoc($ro2);
		$num=mysqli_num_rows($ro2);
		$total=0;
		do{
			$total=$total + $row2["AQI"];
			$avg=$total/$num;
		}while($row2=mysqli_fetch_assoc($ro2));
			$county[$tt]=$row["County"];
			$aqiavg[$tt]=round($avg,1);
			//echo $row["County"].round($avg,1)."<br>";
			echo "<script>aqicolor('".$row["County"]."',".round($avg,1).");</script>";
			$tt ++;
	}while($row=mysqli_fetch_assoc($ro));
?>

<script>
$("path").click(function(){
    $(".select-path").attr("class","bg-green");
    $(this).attr("class","select-path");
	var id=$(this).attr("id");
	var time=<?=$time?>;
	$.post("api-select.php",{id,time},function(o){
		$("#result").html(o);
	})
	$("#modal-detail").find("h3").text(id);
	$("#lastupdate").text("更新時間："+time);
})
</script>

<script>
//chart.js--------------------------------------------------------START
var canvas = document.getElementById("chart").getContext("2d");
var line = new Chart(canvas,{
	type:"line",
	data:{
		labels:[
			<?php
				foreach($county as $name){
			?>
				"<?=$name?>",
			<?php	
				}
			?>
		],
		datasets:[
			{
				data:[
					<?php
						foreach($aqiavg as $value){
					?>
						"<?=$value?>",
					<?php	
						}
					?>
				],
				// 資料名稱
				label:"各地區空氣品質指標平均",
				// 背景顏色
				backgroundColor: "#19426b",
				// 邊框顏色
				borderColor:"#19426b",
				// 邊框粗細
				borderWidth: 3,
				// 是否填滿(限折線圖)
				fill: false,
				// 曲線彎度 0 代表直線(限折線圖)
				lineTension: 0,
			},
		],
	},
		options:{
				// 標題
				title:{
					display:true,
					text: "臺灣每小時空氣品質指標(AQI)",
				},
				scales: { 
					yAxes: [{ 
						ticks: {
							beginAtZero: true
						} 
					}] 
				}
		}
})
//chart.js--------------------------------------------------------END
</script>

</body>
</html>