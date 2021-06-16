@extends('app')
@section('title')
@section('content')
	<!-- Slider -->
	<div id="theme-main-banner" class="banner-two gradient-banner">
		<div data-src="images/home/espacio.jpg">
			<div class="camera_caption">
				<div class="main-container">
					<div class="container">
						
						<div class="image-wrapper wow fadeInUp animated" data-wow-delay="0.75s">
							<img src="images/home/shape-3.jpg" alt=""> 
							{{-- "{{ voyager : :image(stting('site.image'))}}" --}}
						</div>

						<h1 class="wow fadeInUp animated">Freestyle <br>para todos</h1>
						<p class="wow fadeInUp animated"><p class="wow fadeInUp animated">Aqui podras encontrar lo mejor del <br> Freestyle en medellin.<strong>¡Disfrtuta!</strong></p>
						<div class="center">
							<a href="course-2-column.html" class="tran3s wow fadeInLeft animated button-one" data-wow-delay="0.499s"><i class="fa fa-apple" aria-hidden="true"></i>App Store</a>
							<a href="course-2-column.html" class="tran3s wow fadeInRight animated button-two" data-wow-delay="0.499s"><img src="images/icon/2.png" alt="">GooglePlay</a>			
						</div>
					</div>
				</div> 
			</div> 
		</div>

		<div data-src="images/home/slide-2.png">
			<div class="camera_caption">
				<div class="main-container">
					<div class="container">
						
						<div class="image-wrapper wow fadeInUp animated" data-wow-delay="0.75s">
							<img src="images/home/shape-3.jpg" alt="">
						</div>

						<h1 class="wow fadeInUp animated">Freestyle <br>para todos.</h1>
						<p class="wow fadeInUp animated"><p class="wow fadeInUp animated">Aqui podras encontrar lo mejor del <br> Freestyle en medellin.<strong>¡Disfrtuta!</strong></p>
						<div class="center">

							<a href="course-2-column.html" class="tran3s wow fadeInLeft animated button-one" data-wow-delay="0.499s"><i class="fa fa-apple" aria-hidden="true"></i>App Store</a>
							<a href="course-2-column.html" class="tran3s wow fadeInRight animated button-two" data-wow-delay="0.499s"><img src="images/icon/2.png" alt="">GooglePlay</a>
							
						</div>
						
					</div> 
				</div> 
			</div>
		</div>
	</div> 
	<!-- /Slider -->
   

   

	

	<!--App-->
	<div class="app">
		<h2>Así luce nuestra aplicación</h2>
		<div class="interfaz">
			<div class="phone-mockup"><img src="images/home/mobile-mockup.png" alt="" class=""></div>
			<div class="slider-row">
				<div class="screenshoot-slider">
					<div class="item"><img src="images/home/apps-1.jpg" alt=""></div>
					<div class="item"><img src="images/home/apps-2.jpg" alt=""></div>
					<div class="item"><img src="images/home/apps-3.jpg" alt=""></div>
					<div class="item"><img src="images/home/apps-1.jpg" alt=""></div>
					<div class="item"><img src="images/home/apps-1.jpg" alt=""></div>
				</div> 
			</div> 
		</div> 
	</div> 
	<!-- /App -->

	<!-- About -->
	<div class="what-we-do bg" style="padding-bottom: 30px;">
		<div class="container">
			<div class="theme-title-one text-center"> 
				<h2>¿Por qué obtener esta <br>aplicación?</h2>
			</div> 

			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
					<div class="single-block tran3s">
						<img src="images/icon/6.svg" style="width: 40%;" alt="" class="tran4s">
						<h6>Comunidad amplia</h6>
						<p>+1M de personas que <br>también aman el Freestyle.</p>
						<a  style=""cursor: pointer; data-toggle="modal" data-target="#communityModal" class="tran3s theme-button"><span></span> Descubrir</a>
					</div> 
				</div>

            <!-- community Modal -->
            <div class="modal fade" id="communityModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"data-backdrop="false">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">comunidad Freestyle</h4>
                  </div>
                  <div class="modal-body">
                     Nadie sabe verdaderamente quien fue la primera persona que empezo a improvisar el rap, cuando comenzo, o donde tomo lugar verdaderamente, pero generalmente se cree que tuvo origen en la escena Hip Hop de la Costa Este de Estados Unidos (East Coast) a mediados de los 80.
                     3. Empezaron a surgir las Batallas de Freestyle, tambien conocidas como Freestyle Battles. Quiza la batalla mas temprana y famosa de Freestyle Rap haya sido en 1981 cuando Kool Moe Dee reto a Busy Bee Starsky.
                     4. Como es una batalla Las faltas de respeto pueden incluir ataques hacia la credibilidad de alguna persona, tratos violentos (siempre verbalmente, no fisicamente), o simplemente presumir que uno es mejor que otro. Pero lo mas importante del freestyle es que los raperos una vez que acaba la batalla deben mostrar respeto hacia el rival.</div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">por ahora no</button>
                  
                     
            
                  @guest
                     <a class ="btn btn-success" href ="{{ route('register') }}">crear mi 
                     cuenta</a>
                  @else
                     <a class ="btn btn-success"  data-dismiss ="modal">ya estas 
                     registrado</a>
                  @endguest
                  </div>
               </div>
            </div>
         </div>
            <!--community modal-->


				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.1s">
					<div class="single-block tran3s">
						<img src="images/icon/7.svg" style="width: 40%;" alt="" class="tran4s">
						<h6>Comparte</h6>
						<p>Permite que otros miembros <br> conozcan tu evento.</p>
						<a  style=""cursor: pointer; data-toggle="modal" data-target="#ShareModal" class="tran3s theme-button"><span></span> Descubrir</a>
					</div> 
				</div>
            <!-- shared Modal -->
            <div class="modal fade" id="ShareModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"data-backdrop="false">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">compartir</h4>
                  </div>
                  <div class="modal-body">
                     Nadie sabe verdaderamente quien fue la primera persona que empezo a improvisar el rap, cuando comenzo, o donde tomo lugar verdaderamente, pero generalmente se cree que tuvo origen en la escena Hip Hop de la Costa Este de Estados Unidos (East Coast) a mediados de los 80.
                     3. Empezaron a surgir las Batallas de Freestyle, tambien conocidas como Freestyle Battles. Quiza la batalla mas temprana y famosa de Freestyle Rap haya sido en 1981 cuando Kool Moe Dee reto a Busy Bee Starsky.
                     4. Como es una batalla Las faltas de respeto pueden incluir ataques hacia la credibilidad de alguna persona, tratos violentos (siempre verbalmente, no fisicamente), o simplemente presumir que uno es mejor que otro. Pero lo mas importante del freestyle es que los raperos una vez que acaba la batalla deben mostrar respeto hacia el rival.</div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">por ahora no</button>
                  
                  @guest
                     <a class ="btn btn-success" href ="{{ route('register') }}">crear mi 
                     cuenta</a>
                  @else
                     <a class ="btn btn-success"  data-dismiss ="modal">ya estas 
                     registrado</a>
                  @endguest
                  </div>
               </div>
            </div>
            </div>
            <!--shared modal-->

            
             


				<div class="col-md-4 hidden-sm col-xs-12 wow fadeInUp" data-wow-delay="0.150s">
					<div class="single-block tran3s">
						<img src="images/icon/8.svg" style="width: 40%;" alt="" class="tran4s">
						<h6>Familia</h6>
						<p>Haz crecer la cultura<br> apoyando a los MCs</p>
						<a  style=""cursor: pointer; data-toggle="modal" data-target="#FamilyModal" class="tran3s theme-button"><span></span> Descubrir</a>
					</div> 
				</div> 
			</div> 
		</div> 
	</div> 
   <!-- family Modal -->
            <div class="modal fade" id="FamilyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"data-backdrop="false">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">compartir</h4>
                  </div>
                  <div class="modal-body">
                     Nadie sabe verdaderamente quien fue la primera persona que empezo a improvisar el rap, cuando comenzo, o donde tomo lugar verdaderamente, pero generalmente se cree que tuvo origen en la escena Hip Hop de la Costa Este de Estados Unidos (East Coast) a mediados de los 80.
                     3. Empezaron a surgir las Batallas de Freestyle, tambien conocidas como Freestyle Battles. Quiza la batalla mas temprana y famosa de Freestyle Rap haya sido en 1981 cuando Kool Moe Dee reto a Busy Bee Starsky.
                     4. Como es una batalla Las faltas de respeto pueden incluir ataques hacia la credibilidad de alguna persona, tratos violentos (siempre verbalmente, no fisicamente), o simplemente presumir que uno es mejor que otro. Pero lo mas importante del freestyle es que los raperos una vez que acaba la batalla deben mostrar respeto hacia el rival.</div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">por ahora no</button>
                  
                  @guest
                     <a class ="btn btn-success" href ="{{ route('register') }}">crear mi 
                     cuenta</a>
                  @else
                     <a class ="btn btn-success"  data-dismiss ="modal">ya estas 
                     registrado</a>
                  @endguest
                  </div>
               </div>
            </div>
            </div>
            <!--community modal-->

	<!-- /About -->

	<!-- Feature -->
	<div class="advance-feature">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12 wow fadeInRight">
					<div class="feature-warpper">
						<div class="row">
							<div class="col-xs-6">
								<div class="destacado fondo_uno voltear">
									<i class="flaticon-reproductor-de-video"></i>
									<h5>Eventos</h5>
									<p> </p>
								</div>
								<div class="destacado fondo_dos voltear">
									<i class="flaticon-alarma"></i>
									<h5>Ranking</h5>
									<p> </p>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="destacado fondo_tres voltear">
									<i class="flaticon-grabadora-de-voz"></i>
									<h5>Mcs</h5>
									<p> </p>
								</div>
								<div class="destacado fondo_cuatro voltear">
									<i class="flaticon-mapa"></i>
									<h5>invitaciones</h5>
									<p> </p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-xs-12 wow fadeInLeft">
					<div class="feature-text">
						<div class="theme-title-two">
							<h2>Aqui podras</h2>
							<p>Econtrar todos los eventos de freestyle de medellin</p>
						</div> <!-- /.theme-title-two -->
						<p>Ipsum dolor sit amet, consectetur adipisicing elit. Temporibus dolorem veniam odit molestiae labore, illo magni nisi natus quibusdam, doloribus nihil deleniti!</p>
					</div>
				</div> 
			</div> 
		</div> 
	</div> 
	<!-- /Feature -->

	<!-- Blog -->
	<div class="our-blog">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-xs-6">
				<div class="single-blog">
					<div class="image"><img src="images/blog/comida.jpg" alt=""></div>
					<div class="text">
						<h6>Carlos French.</h6>
						<h5><a href="blog-details.html" class="tran3s">Cómo hacer un delicioso almuerzo para tu gato</a></h5>
						<p>Their testimonial videos aren't production quality, but they get message across, cover useful & relevant information with tips.</p>
					</div>
				</div> 
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6">
				<div class="single-blog">
					<div class="image"><img src="images/blog/parque.jpg" alt=""></div>
					<div class="text">
						<h6>María Zapata.</h6>
						<h5><a href="blog-details.html" class="tran3s">Cuidados para tu perro en el parque</a></h5>
						<p>Their testimonial videos aren't production quality, but they get message across, cover useful & relevant information with tips.</p>
					</div>
				</div> 
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6">
				<div class="single-blog">
					<div class="image"><img src="images/blog/limpieza.jpg" alt=""></div>
					<div class="text">
						<h6>Daniel Castaño.</h6>
						<h5><a href="blog-details.html" class="tran3s">Cómo limpiar tu gato adecuadamente</a></h5>
						<p>Their testimonial videos aren't production quality, but they get message across, cover useful & relevant information with tips.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6">
				<div class="single-blog">
					<div class="image"><img src="images/blog/cama.jpg" alt=""></div>
					<div class="text">
						<h6>Sandra Hurtado</h6>
						<h5><a href="blog-details.html" class="tran3s">Cómo hacer una cama para tu mascota</a></h5>
						<p>Their testimonial videos aren't production quality, but they get message across, cover useful & relevant information with tips.</p>
					</div>
				</div> 
			</div>
		</div> 
		<a href="{{url('/blog')}}" class="load-more tran3s theme-button"><span></span> Ver blog</a>
	</div>
	<!-- /Blog -->

	<div style="padding-bottom: 10px;"></div>
	</div> <!-- /.html-top-content -->
@endsection