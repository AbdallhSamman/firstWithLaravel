
@extends('header')
@section('title','about us')

@section('content')
<div id="footer-wrapper">

					<div  class="container">
						<header class="x">
							<h2>Euismod aliquam vehicula lorem</h2>
							<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit<br />
							dolor neque semper magna lorem ipsum feugiat veroeros lorem ipsum dolore.</p>
						</header>
						<div class="row">
							<section class="col-12 col-12-narrower">
								<form method="post" action="#">
									<div class="row gtr-50">
										<div class="col-12 col-12-mobile">
											<input name="name" placeholder="Name" type="text" />
										</div>
										<div class="col-12 col-12-mobile">
											<input name="email" placeholder="Email" type="text" />
										</div>
										<div class="col-12">
											<textarea name="message" placeholder="Message"></textarea>
										</div>
										<div class="col-12 y ">
											<ul class="actions">
												<li><input type="submit" value="Send Message" /></li>
												<li><input type="reset" value="Clear form" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
						
						</div>
					</div>
					
				</div>

		</div>

	
            @endsection