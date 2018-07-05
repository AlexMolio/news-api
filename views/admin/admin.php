		<?php require_once("views/layouts/header.php");?>
		<!--////////////////////////////////////Container-->
		<br/>
		<h2 class="entry-title">Админпанель</h2>
		<section id="container">
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<div id="main-content">
					<div class="wrap-content">
						<div class="row">

							<form action="" method="post">
									<button name="submit" value="1">Обновить</button>
								</form>


							<?php foreach ($newsList as $key => $newsItem) 
								{
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
									<form action="" method="post">
									<button name="publish" value="<?php echo $newsItem['id']; ?>">Опубликовать</button>
								

										<input type="checkbox" id="submit" name="publish" value ="<?php echo $newsItem['id']; ?>" <?php echo News::checked($newsItem['id']);?> />

									</form>
											<!-- <script>
											    $('#submit').change(function(){
											        
											    	var name = $('#name').val();

											        if ($("#submit:checkbox").is(":checked")) {

											        $.get('/views/layouts/details.php', function(data) {  
											            $('#sasha').append(data);
											        })
											        } else {
											            $("#sasha").empty()
											        }
											       

											    });
											</script> -->

										</center>
									</div>
								</div>
								
							</article>

						<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<?php require_once("views/layouts/footer.php");?>