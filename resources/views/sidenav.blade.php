<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blueprint: Multi-Level Menu</title>
	<meta name="description" content="Blueprint: A basic template for a responsive multi-level menu" />
	<meta name="keywords" content="blueprint, template, html, css, menu, responsive, mobile-friendly" />
	<meta name="author" content="Codrops" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="shortcut icon" href="favicon.ico">
	<!-- food icons -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/organicfoodicons.css') }}" />
	<!-- demo styles -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/demo.css') }}" />
	<!-- menu styles -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/component.css') }}" />
	<script src="{{ URL::asset('js/modernizr-custom.js') }}"></script>
</head>

<body>
	<!-- Main container -->
	<div class="container">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<div class="dummy-logo">
				<div class="dummy-icon foodicon foodicon--coconut"></div>
				<h2 class="dummy-heading">Fooganic</h2>
			</div>
			
		</header>
		<button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
		<nav id="ml-menu" class="menu">
			<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
			<div class="menu__wrap">
				<ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="All">
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1" aria-owns="submenu-1" href="#">Vegetables</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="#">Fruits</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-3" aria-owns="submenu-3" href="#">Grains</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-4" aria-owns="submenu-4" href="#">Mylk &amp; Drinks</a></li>
				</ul>
				<!-- Submenu 1 -->
				<ul data-menu="submenu-1" id="submenu-1" class="menu__level" tabindex="-1" role="menu" aria-label="Vegetables">
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Stalk Vegetables</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Roots &amp; Seeds</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Cabbages</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Salad Greens</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Mushrooms</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-1" aria-owns="submenu-1-1" href="#">Sale %</a></li>
				</ul>
				<!-- Submenu 1-1 -->
				<ul data-menu="submenu-1-1" id="submenu-1-1" class="menu__level" tabindex="-1" role="menu" aria-label="Sale %">
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Fair Trade Roots</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Dried Veggies</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Our Brand</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Homemade</a></li>
				</ul>
				<!-- Submenu 2 -->
				<ul data-menu="submenu-2" id="submenu-2" class="menu__level" tabindex="-1" role="menu" aria-label="Fruits">
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Citrus Fruits</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Berries</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-2-1" aria-owns="submenu-2-1" href="#">Special Selection</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Tropical Fruits</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Melons</a></li>
				</ul>
				<!-- Submenu 2-1 -->
				<ul data-menu="submenu-2-1" id="submenu-2-1" class="menu__level" tabindex="-1" role="menu" aria-label="Special Selection">
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Exotic Mixes</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Wild Pick</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Vitamin Boosters</a></li>
				</ul>
				<!-- Submenu 3 -->
				<ul data-menu="submenu-3" id="submenu-3" class="menu__level" tabindex="-1" role="menu" aria-label="Grains">
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Buckwheat</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Millet</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Quinoa</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Wild Rice</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Durum Wheat</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-3-1" aria-owns="submenu-3-1" href="#">Promo Packs</a></li>
				</ul>
				<!-- Submenu 3-1 -->
				<ul data-menu="submenu-3-1" id="submenu-3-1" class="menu__level" tabindex="-1" role="menu" aria-label="Promo Packs">
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Starter Kit</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">The Essential 8</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Bolivian Secrets</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Flour Packs</a></li>
				</ul>
				<!-- Submenu 4 -->
				<ul data-menu="submenu-4" id="submenu-4" class="menu__level" tabindex="-1" role="menu" aria-label="Mylk &amp; Drinks">
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Grain Mylks</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Seed Mylks</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Nut Mylks</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Nutri Drinks</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-4-1" aria-owns="submenu-4-1" href="#">Selection</a></li>
				</ul>
				<!-- Submenu 4-1 -->
				<ul data-menu="submenu-4-1" id="submenu-4-1" class="menu__level" tabindex="-1" role="menu" aria-label="Selection">
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Nut Mylk Packs</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="#">Amino Acid Heaven</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="https://www.google.co.in">Allergy Free</a></li>
				</ul>
			</div>
		</nav>
		<div class="content">
			
			Ajax loaded content here 
		
