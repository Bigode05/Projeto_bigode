<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PRODUTOS - IMPORTADOS - DO - BIGODE</title>

		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<div class="caixa">
				<h1><img src="logos e fundos/logo 1.jpg"></h1>
				<nav>
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li><a href="produtos 2.html">Produtos</a></li>
						<li><a href="contato.html">Contato</a></li>
						<li><a href="formulario.html">Login</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<style>
			/*Novo card*/

  @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
body
{

	background-image: url(banner/banner8.png);

}
.card 
{
	position: relative;
	width: 350px;
	height: 380px;
	background: #0000;
	display:inline-flex;
	box-shadow: 0 15px 45px rgba(0,0,0,0.1);
	overflow: hidden;
	transition: 0.5s ease-in-out;
}
.card:hover 
{
	width: 600px;
}
.card .imgBx 
{
	position: relative;
	min-width: 300px;
	height: 100%;
	background: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	z-index: 10;
}
.card .imgBx  img 
{
	max-width: 200px;
	transition: 0.5s ease-in-out;
}
.card:hover .imgBx  img 
{
	transform: rotate(-35deg) translateX(-20px);
}
.card .details 
{
	position: absolute;
	left: 0;
	width: 300px;
	height: 100%;
	background: #4e4e4e;
	display: flex;
	justify-content: center;
	padding: 20px;
	flex-direction: column;
	transition: 0.5s ease-in-out;
}
.card:hover .details 
{
	left: 300px;
}
.card .details::before 
{
	content: '';
	position: absolute;
	left: 0px;
	width: 0; 
  height: 0; 
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 10px solid #fff;
	z-index: 1;
}
.card .details h3 
{
	color: #fff;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 1.5em;
	line-height: 1em;
}
.card .details h3 span 
{
	font-size: 0.65em;
	font-weight: 300;
	opacity: 0.85;
	text-transform: none;
}
.card .details h4 
{
	color: #fff;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 0.9em;
	line-height: 1em;
	margin-top: 20px;
	margin-bottom: 10px;
}
p 
{
	color: #fff;
	font-size: 0.8em;
	opacity: 0.85;
}
.size 
{
	display: flex;
	gap: 10px;
}
.size li 
{
	list-style: none;
	color: #fff;
	font-size: 0.9em;
	width: 40px;
	height: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	border: 2px solid #fff;
	cursor: pointer;
	font-weight: 500;
	opacity: 0.5;
}
.size li:hover 
{
	background: #fff;
	color: #4ba9e9;
	opacity: 1;
}
.group 
{
	position: relative;
	display: flex;
	justify-content: space-between;
	margin-top: 20px;
	align-items: center;
}
.card .details h2 
{
	color: #fff;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 2em;
}
.card .details h2 sup 
{
	font-weight: 300;
}
.card .details h2 small 
{
	font-size: 0.75em;
}
.card .details a 
{
	display: inline-flex;
	padding: 10px 25px;
	background: #fff;
	font-weight: 500;
	text-decoration: none;
	text-transform: uppercase;
	font-weight: 600;
	color: #4ba9e9;
}
		</style>

		<div class="card">
			<div class="imgBx">
				<img src="tenis/1.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="imgBx">
				<img src="tenis/shoe.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="imgBx">
				<img src="tenis/tenis2.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="imgBx">
				<img src="tenis/tenis3.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="imgBx">
				<img src="tenis/tenis4.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div> 

		<div class="card">
			<div class="imgBx">
				<img src="tenis/tenis5.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>
<div class="card">
			<div class="imgBx">
				<img src="tenis/tenis6.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>
		]<div class="card">
			<div class="imgBx">
				<img src="tenis/tenis7.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="tenis/tenis8.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="tenis/tenis9.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="tenis/tenis10.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="tenis/tenis11.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="tenis/tenis12.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="tenis/tenis 13.jpg">
			</div>
			<div class="details">
				<h3>Nike Air Max<br><span>Men's Shoe</span></h3>
				<h4>Product Details</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ducimus iusto.</p>
				<h4>Size</h4>
				<ul class="size">
					<li>36</li>
					<li>38</li>
					<li>40</li>
					<li>42</li>
					<li>44</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">Buy Now</a>
				</div>
			</div>
		</div>

		<footer class="r">
			<p>TCC - GUSTAVO BARCCI DA SILVA</p>
			<img src="logos e fundos/logo-branco.png">
			<p class="copyright">&copy; Copyright Shooping Do Bigode - 2023</p>
		</footer>
	</body>
</html>