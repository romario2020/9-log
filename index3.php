<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link href="css/my_css.css" rel="stylesheet" type="text/css">
    <link href="css/my_css.css" rel="stylesheet" type="text/css">
	<style type="text/css">

.row .col-xl-8 iframe {
    height: 100%;
    width: 100%;
    border-width: 0px;
}
#home1 .btn-group .my_button {
    width: 100px;
    height: 100px;
    position: static;
    border-radius: 76px / 75px;
    border: 1px solid #3269BC;
    text-transform: capitalize;
    text-align: center;
    font-size: smaller;
    font-variant: normal;
    font-style: normal;
    margin-top: 0px;
    margin-left: 10px;

}

.my_button {
    width: 100px;
    height: 100px;
    position: static;
    border-radius: 76px / 75px;
    border: 1px solid #3269BC;
    text-transform: capitalize;
    text-align: center;
    font-size: smaller;
    font-variant: normal;
    font-style: normal;
    margin-top: 0px;
    margin-left: 5px;
}

.my_button:hover {
    transform: scale(1);
}
.hi {
    width: auto;
    height: 100%;
    overflow-x: hidden;
    overflow-y: hidden;
}
</style>
</head>

<body class="vsc-initialized">


  <div class="row" style="height: 100%; width: 95%">

    <div class="col-xl-8" >
      <iframe src="http://localhost:8668/applications/9-log/9-log.html" style="height: 100%; margin-left: 10px"></iframe>
    </div>
    <div>
		<br>
      <div class="col-12">

          <div>
            <div>
			  <button type="button" class="btn-sm btn-primary" style="margin-left: 5px" id="m_osnova">Окружение</button>
			  <button type="button" class="btn-sm btn-primary" style="margin-left: 5px" id="m_lokotiny">Скриншот</button>
			  <button type="button" class="btn-sm btn-primary" style="margin-left: 5px" id="m_podeika">Вращение</button>
			  <button type="button" class="btn-sm dropdown-toggle" style="margin-left: 5px" data-toggle="dropdown">  Модели </button>

				 <div class="dropdown-menu" >
					<a class="dropdown-item" href="#">Магнолия</a>
					<a class="dropdown-item" href="#">Арарат</a>
				</div>

	        </div>
			  <hr>
      </div>
		  <h4>   Подбор тканей  </h4>
		 <div class="slidecontainer" style="margin-left: 5px"><h5>Подгонка размера ткани на изделии</h5>
			<input class="slider" type="range" min="0.5" max="15" value="3" step="0.1" oninput= "fun1()" id="r1">Основа<br>
			<!--<div id="one"> </div>   выводится число регулировки -->
			<input class="slider" type="range" min="0.5" max="15" value="3" step="0.1" oninput= "fun1()" id="r2">Подлокотники<br>
			<input class="slider" type="range" min="0.5" max="15" value="3" step="0.1" oninput= "fun1()" id="r3">Подушки<br>
		  </div>
          <br>
		  <button type="button" class="my_button_2"  id="m_odnotonra" >Выбранная ткань</button>
		  <button type="button" class="my_button_2" id="m_odnoton_ind" style="margin-left: 5px">Индивидуальная</button>
		  <button type="button" class="my_button_2" id="m_odnoton_del" style="margin-left: 5px">Отмена</button>
		  <br><br>

		<div class="hi_block col-lg-12 ">
		<div class="row">
		<div>

		   <div class="container-fluid">
		     <ul id="clothingnav1" class="nav nav-tabs" role="tablist">
		       <li class="nav-item"> <a class="nav-link active" href="#home2" id="hometab1" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Рогожка</a> </li>
		       <li class="nav-item"> <a class="nav-link" href="#paneTwo1" role="tab" id="hatstab1" data-toggle="tab" aria-controls="hats">Велюр</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#paneTwo2" role="tab" id="hatstab2" data-toggle="tab" aria-controls="hats">Флок</a> </li>
		       <!-- Dropdown -->
		       <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Ткани </a>
		         <div class="dropdown-menu"> <a class="dropdown-item" href="#tabDropDownOne1" role="tab" id="dropdownshoestab1" data-toggle="tab" aria-controls="dropdownShoes">Кожзам</a> <a class="dropdown-item" href="#tabDropDownTwo1" role="tab" id="dropdownbootstab1" data-toggle="tab" aria-controls="dropdownBoots">Шенил</a> </div>
	            </li>
	          </ul>
		     <!-- Content Panel -->
		     <div id="clothingnavcontent2" class="tab-content">
		       <div role="tabpanel" class="tab-pane fade show active" id="home2" aria-labelledby="hometab1">
		         <p>Content in <b>Диваны</b></p>
					<div class="btn-group" role="group" aria-label="Basic outlined example">
					  <button type="button" class="my_button" id="r1_1"></button>
					  <button type="button" class="my_button" id="r1_2"></button>
					  <button type="button" class="my_button" id="r1_3"></button>
					  <button type="button" class="my_button" id="r1_4"></button>
					</div>
				 <p>Content in <b>Диваны</b></p>
					<div class="btn-group" role="group" aria-label="Basic outlined example">
					  <button type="button" class="my_button" id="r1_5"></button>
					  <button type="button" class="my_button" id="r1_6"></button>
					  <button type="button" class="my_button" id="r1_7"></button>
					  <button type="button" class="my_button" id="r1_8"></button>
					</div>
					<p>Content in <b>Диваны</b></p>
					<div class="btn-group" role="group" aria-label="Basic outlined example">
					  <button type="button" class="my_button" id="r1_9"></button>
					  <button type="button" class="my_button" id="r1_10"></button>
					  <button type="button" class="my_button" id="r1_11"></button>
					  <button type="button" class="my_button" id="r1_12"></button>
	            </div>
				 </div>
		       <div role="tabpanel" class="tab-pane fade" id="paneTwo1" aria-labelledby="hatstab1">
		         <p>Content in <b>велюр</b></p>
					<div class="btn-group" role="group" aria-label="Basic outlined example">
					  <button type="button" class="my_button" id="v1_1"></button>
					  <button type="button" class="my_button" id="v1_2"></button>
					  <button type="button" class="my_button" id="v1_3"></button>
					  <button type="button" class="my_button" id="v1_4"></button>
					</div>
				 <p>Content in <b>Диваны</b></p>
					<div class="btn-group" role="group" aria-label="Basic outlined example">
					  <button type="button" class="my_button" id="v1_5"></button>
					  <button type="button" class="my_button" id="v1_6"></button>
					  <button type="button" class="my_button" id="v1_7"></button>
					  <button type="button" class="my_button" id="v1_8"></button>
					</div>
					<p>Content in <b>Диваны</b></p>
					<div class="btn-group" role="group" aria-label="Basic outlined example">
					  <button type="button" class="my_button" id="v1_9"></button>
					  <button type="button" class="my_button" id="v1_10"></button>
					  <button type="button" class="my_button" id="v1_11"></button>
					  <button type="button" class="my_button" id="v1_12"></button>
	            </div>
				  </div>
		       <div role="tabpanel" class="tab-pane fade" id="paneTwo2" aria-labelledby="hatstab2">
		         <p>Content in <b>флок</b></p>
					<div class="btn-group" role="group" aria-label="Basic outlined example">
					  <button type="button" class="my_button" id="f1_1"></button>
					  <button type="button" class="my_button" id="f1_2"></button>
					  <button type="button" class="my_button" id="f1_3"></button>
					  <button type="button" class="my_button" id="f1_4"></button>
					</div>
				 <p>Content in <b>Диваны</b></p>
					<div class="btn-group" role="group" aria-label="Basic outlined example">
					  <button type="button" class="my_button" id="f1_5"></button>
					  <button type="button" class="my_button" id="f1_6"></button>
					  <button type="button" class="my_button" id="f1_7"></button>
					  <button type="button" class="my_button" id="f1_8"></button>
					</div>
					<p>Content in <b>Диваны</b></p>
					<div class="btn-group" role="group" aria-label="Basic outlined example">
					  <button type="button" class="my_button" id="f1_9"></button>
					  <button type="button" class="my_button" id="f1_10"></button>
					  <button type="button" class="my_button" id="f1_11"></button>
					  <button type="button" class="my_button" id="f1_12"></button>
	            </div>
				    </div>
	            </div>
		       <div role="tabpanel" class="tab-pane fade" id="tabDropDownTwo1" aria-labelledby="dropdownbootstab1">
		         <p>Dropdown content#2</p>
	            </div>
	          </div>



            </div>
		        <br>

		  </div>
	      </div>

        </div>


		  <div>





</div>
</div>
</div>
<script> function fun1()	{
		var rng=document.getElementById("r1");
		var p=document.getElementById("one");
		p.innerHTML=rng.value;
			}
</script>

<script> function fun2()	{
		var rng=document.getElementById("r2");
		var p=document.getElementById("one2");

			}
</script>

<script> function fun1()	{
		var rng=document.getElementById("r3");
		var p=document.getElementById("one3");

			}
</script>



</body>
</html>
