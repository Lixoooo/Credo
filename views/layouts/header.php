<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>The Fashion Boutique</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, target-densitydpi=device-dpi">
    <script type="text/javascript" src="/template/javascript/head.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;language=en"></script>
    <script type="text/javascript">
        head.js('http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js','/template/javascript/scripts.js','/template/javascript/mobile.js','/template/javascript/main.js','http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5213c4393d82b4a7')
    </script>
    <link rel="stylesheet" type="text/css" href="/template/styles/screen.css" media="screen">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic" media="screen">
    <link rel="stylesheet" type="text/css" href="/template/styles/print.css" media="print">
    <link rel="shortcut icon" href="/template/images/favicon.ico" type="image/x-icon">
    </head>
<body>
<div id="root">

<header id="top">
    <h1><a href="" accesskey="h">The Fashion Boutique</a></h1>
    <nav id="skip">
        <ul>
            <li><a href="#nav" accesskey="n">Skip to navigation (n)</a></li>
            <li><a href="#content" accesskey="c">Skip to content (c)</a></li>
            <li><a href="#footer" accesskey="f">Skip to footer (f)</a></li>
        </ul>
    </nav>
    <nav id="nav">
        <ul class="a">
            <li><a href="/">Home</a></li>
            <li><a accesskey="5" href="./product-map.html">All Pages</a> <em>(5)</em>
                <ul>
                    <li><a href="">Product Map</a></li>
                    <li><a href="">Product List</a></li>
                    <li><a href="">Product Details</a></li>
                    <li><a href="">View Cart</a></li>
                    <li><a href="">Checkout</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </li>
            <li><a accesskey="1" href="/catalog/">Men</a> <em>(1)</em></li>
            <li><a accesskey="2" href="/catalog/">Women</a> <em>(2)</em>
                <ul>
                    <?php $categories = array(); $categories = Category::getCategoriesList();
                    foreach ($categories as $categoryItem): ?>
                        <li><a href="/category/<?php echo $categoryItem['id'];?>"> <?php echo $categoryItem['name'];?> </a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li><a accesskey="3" href="/admin/">Admin</a> <em>(3)</em></li>
            <li><a accesskey="4" href="/contacts/">Contact</a> <em>(4)</em></li>
        </ul>
        <ul class="b">
            <?php if (User::isGuest()): ?>
                <li><a accesskey="8" href="/user/login/">Login</a> <em>(8)</em></li>
                <li><a accesskey="9" href="/user/register">Register</a> <em>(9)</em></li>
            <?php else: ?>
                <li><a accesskey="6" href="/cabinet/">My Account</a> <em>(6)</em></li>
                <li><a accesskey="7" href="/user/logout/">Logout</a> <em>(7)</em></li>
            <?php endif; ?>




        </ul>
        <ul class="c">
            <li><span>ENG</span>
                <ul>
                    <li><a href="">ENG</a></li>
                    <li><a href="">FRA</a></li>
                    <li><a href="">VNS</a></li>
                </ul>
            </li>
            <li><span>USD</span>
                <ul>
                    <li><a href="">USD</a></li>
                    <li><a href="">EUR</a></li>
                    <li><a href="">GBP</a></li>
                    <li><a href="">PLN</a></li>
                </ul>
            </li>
        </ul>
        <div id="cart">
            <p>Cart <a href="/cart">Items (<span id="cart-count"><?php echo Cart::countItems();?></span>)</a></p>
        </div>
    </nav>
    <form action="" method="post" id="search">
        <fieldset>
            <legend>Search</legend>
            <p>
                <label for="sa">Search</label>
                <input type="text" id="sa" name="sa" required>
                <button type="submit">Submit</button>
            </p>
        </fieldset>
    </form>
    <p id="tel">Help &amp; support <span>+375 (44) 799 7887</span></p>
</header>