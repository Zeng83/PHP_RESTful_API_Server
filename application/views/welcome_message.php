<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Go-Puffers</title>
	<link href='http://fonts.googleapis.com/css?family=Carme' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="public/css/master.css">
</head>
<body>

<div id="container">
	<div id="header">
		<div id="social-bar"></div>
		<div id="top-menu">
			<ul>
				<li><a href="Resume/index">Resume</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="project">Project</a></li>
				<li><a href="news/index">News</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		
	</div>
	<div id="body">
		<div id="banner">
			<div class="badge"><div class="cycle-pics"></div></div>
			<div class="divide-line">
				<span class="bgH1">Go Puffers</span>
				<hr>
			</div>
			<div class="detail">
				<h3>Welcome to my home</h3>
				<span>I am still working on the new version of my site.</span>
			</div>
		</div>
		<div id="body-content">
			<div id="news-list">
				<ul>
					<li>
						<div class="badge"></div>
						<div class="content">
							<h1>sponsor of the Independence Bowl</h1>
							<p>HLess than two months after the Independence Bowl’s sponsorship relationship with AdvoCare came to an end, the bowl has found a new sponsor with some Louisiana flavor.</p>
						</div>
					</li>
					<li>
						<div class="badge"></div>
						<div class="content">
							<h1>‘Big Baby’ Davis for the stretch run</h1>
							<p>n December of 2011, in a last ditch attempt to make their franchise player happy in the wake of a disappointing playoff run and prolonged lockout, the Orlando Magic decided to sign Glen “Big Baby” Davis away from the Boston Celtics. The motives were simple </p>
						</div>
					</li>
					
				</ul>
			</div>
			<div id="comments-list">
				<div id="remind-comment">
					<h4>Want to say something? </h4>
					<span><a href="javascript:void(0)">Add a Comment</a></span>
				</div>
				<div id="comment-list-body">
					<ul>
						<li>
							<div class="comment-item-header">
								<div class="comment-item-header-pics"><img src=""></div>
								<div class="comment-item-header-authorinfo"><div>Zhao</div><div>2014/09/10</div> </div>
							</div>
							<div class="comment-item-body"><p>Want to join the conversation? Hit us up on Twitter @YahooDrSaturday be sure to "Like" Dr. Saturday on Facebook for football conversations and stuff you won't see on the blog.</p></div>
						</li>

						<li>
							<div class="comment-item-header">
								<div class="comment-item-header-pics"><img src=""></div>
								<div class="comment-item-header-authorinfo"><div>Ray</div><div>2013/09/10</div> </div>
							</div>
							<div class="comment-item-body"><p>Robertson chose not play football as a senior in 1968, which gave Bradshaw the opportunity to claim the starting job. Both of their lives turned out pretty well, I’d say, and now Robertson’s company has its stamp on a bowl game in his home state</p></div>
						</li>

					</ul>
				</div>
				<div id="comment-form">
					<h4>Add a Comment</h4>
					<form action="" method="post" id="commentform">
						<p>
							<label for="author"><small>Name</small></label>
							<input type="text" name="author" id="author" class="" value="" size="30" tabindex="1" aria-required="true"> 
						</p>
						<p>
							<label for="email"><small>Email</small></label>
							<input type="text" name="email" id="email" class=" email" value="" size="30" tabindex="2" aria-required="true"> 
						</p>
						<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
							
						<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Your Comment"> 
						</p>
					</form>
				</div>
			</div>
		</div>
		<div id="body-footer"></div>
	</div>
	<div id="footer">

	</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="public/js/main.js"></script>
</body>
</html>