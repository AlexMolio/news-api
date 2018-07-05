		<?php require_once("views/layouts/header.php");?>
		<!--////////////////////////////////////Container-->

		<span id="ajax_test">Click me!</span> <br/>


		<script>
		    $('#ajax_test').click(function(){

		        $.get('details.php', function(data) {
		            $('body').append(data);
		        })

		    });
		</script>




		<section id="container">
			
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<div id="main-content">
					<div class="wrap-content">
						<div class="row">

							<?php foreach ($newsList as $newsItem) 
								{ 
									if($newsItem['is_published']){
							 ?>
							
							<article class="single-post zerogrid">
								<div class="row wrap-post"><!--Start Box-->
									<div class="entry-header">
										<span class="time"><?php echo $newsItem['date']; ?></span>
										<h2 class="entry-title"><a href="#"><?php echo $newsItem['title']; ?></a></h2>
										<span class="cat-links"><a href="#">BUSINESS</a>, <a href="#">LIFESTYLE</a></span>
									</div>
									<div class="post-thumbnail-wrap">

										<img src="<?php echo $newsItem['image']; ?>">
									</div>
									<div class="entry-content">
										<p><?php echo $newsItem['text']; ?></p>
										<center><a class="button " href="/news/<?php echo $newsItem['id']; ?>">Read More</a>

											<!-- <br/><input type="text" name="name" id="name" />
											<input type="button" id="submit" value="Register" onclick="getphrase()" />
											<div id="msg"></div> -->



										</center>
									</div>
								</div>
							</article>

						<?php } } ?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<?php require_once("views/layouts/footer.php");?>