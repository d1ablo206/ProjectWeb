

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 id="Asusprd">Asus</h1>
    <img id="backgroundasus" src="20210903141529026_02-new.jpg" alt="AsusProducts">
    <h2 id="availableprdasus">Available</h2>
    <div class="col-12 col-lg-4 col-xl-4">
		<div class="card">
			<img src="ASUS-ROG-Strix-G15-G513-Original-Black-6.jpg" class="card-img-top asuslaptop" alt="...">
			<div class="card-body">
			<h5 class="card-title">ASUS ROG Strix G15 G513QC</h5>
			<p class="card-text">4300</p> <button onclick = "add_to_cart(this.id)"
			class="btn btn-primary"id="product_17" >Buy this product</button>
			</div>
		</div>
	</div>
    <div class="col-12 col-lg-4 col-xl-4">
		<div class="card" >
			<img src="o0HNzb6aMDvu678m_480.jpg" class="card-img-top asusmother" alt="...">
			<div class="card-body">
			<h5 class="card-title">ASUS M5A78L-M LX Motherboard</h5>
			<p class="card-text">3895</p> <button onclick = "add_to_cart(this.id)"
			class="btn btn-primary"id="product_20" >Buy this product</button>
			</div>
		</div>
	</div>
    <style>
        .asuslaptop{
            height: 200px;
            width: 200px;
        }

        .asusmother{
            height: 200px;
            width: 200px;
        }

        .col-12{
           display: inline;
           float: left;
           left: 25%;
           margin: auto;
           top: 700px;
           margin: auto;
        }

        #Asusprd {
            text-align: center;
            top: 5%;
            left: 50%;
            background-color: aliceblue;
            position: absolute;
            z-index: 1;
        }

        #availableprdasus {
            margin-left: 20px;
            position: absolute;
            z-index: 1;
            top: 550px;
            left: 20px;
            
        }

        #backgroundasus {
            height: 500px;
            width: 100%;
            position: top;
            position: absolute;
            opacity: 0.8;
            background-color: black;
        }
        
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>