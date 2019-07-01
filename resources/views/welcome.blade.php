<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Car Services Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
        <title>TabaJara Lava Jato</title>
		<!-- Fonts -->
		<link rel="icon" href="{{ asset('img/favicon.ico') }}" >
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        	<!-- Custom-Files -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <!-- Bootstrap-Core-CSS -->
        <link href="css/JiSlider.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/smoothbox.css') }}" type='text/css' media="all" />
        <!-- gallery lightbox -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
		<!-- Style-CSS -->
		
        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">
        <script src="https://kit.fontawesome.com/bd13c5bef1.js"></script>
        <!-- Font-Awesome-Icons-CSS -->
        <!-- //Custom-Files -->
        
        <!-- Styles -->
        
    </head>
    <body>
    <div class="main">
		<!-- Modal Login -->
		<div class="modal fade" role="dialog" id="loginWeb">
			<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
								<div class="logo2">
										<h2>
											<a href="index.html">
												<span>T</span>aba
												<span>J</span>ara
											</a>
										</h2>
									</div>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
					<form method="POST" action="{{ route('login') }}">
					@csrf
						<div class="modal-body">
							<div class="form-group">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite seu e-mail" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="form-group">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Digite sua senha" required autocomplete="current-password">

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>	
						</div>
						<div class="modal-footer">
							<!-- <a href="{{ route('register') }}"><button type="submit" class="btn btn-light">Registrar</button></a> -->
							<!-- <a href="{{ route('login') }}"><button type="submit" class="btn btn-success">Entrar</button></a> -->
							<button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
							</button>
							<!-- <button type="submit" class="btn btn-success"> <a href="dash/dashboard.html">Entrar</a></button> -->
						</div>
					</form>
					</div>
				</div>
		</div>
		<!-- //Modal Login -->

		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="row header-ls-top pt-lg-5 pt-md-4 pt-3 px-lg-5 px-3">
					<div class="col-xl-10 col-md-9 col-sm-8 col-6 logo">
						<h1>
							<a href="index.html">
								<span>T</span>aba
								<span>J</span>ara
							</a>
						</h1>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-6 menu-agile text-center">
						<a href="#menu" id="toggle">
							<span></span>
						</a>
						<div id="menu" class="menustyles">
							<ul class="list-unstyled">
								<li>
									<a href="index.html">Início</a>
								</li>
								<li>
									<a href="#about" class="scroll">Sobre</a>
								</li>
								<li>
									<a href="#services" class="scroll">Serviços</a>
								</li>
								<li>
									<a href="#team" class="scroll">Nosso Time</a>
								</li>
								<li>
									<a href="#gallery" class="scroll">Galeria</a>
								</li>
								<li>
									<a href="#testi" class="scroll">Comentários</a>
								</li>
								<li>
									<a href="#contact" class="scroll">Fale Conosco</a>
								</li>
								<!-- <li>
									<a href="dash/dashboard.html">Dashboard</a>
								</li> -->
								<li>
									<button class="btn btn-danger" data-toggle="modal" data-target="#loginWeb"><i class="far fa-user"></i>Entrar</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- //header -->
		<!-- banner -->
		<div class="banner-silder">
			<div id="JiSlider" class="jislider">
				<ul>
					<li>
						<div class="banner-top banner-top1">
							<div class="container">
								<div class="banner-info">
									<h3 class="name text-white text-uppercase text-center">
										<span class="name-part l-text1">Seu</span>
										<span class="name-part l-text2">carro</span>
											<label>sempre</label> em boas mãos</span>
									</h3>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top banner-top2">
							<div class="container">
								<div class="banner-info">
									<h3 class="name text-white text-uppercase text-center">
										<span class="name-part l-text1">Nós</span>
										<span class="name-part l-text2">amamos</span>
										<span class="name-part l-text3">seu
											<label>carro</label> da mesma forma que você</span>
									</h3>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top banner-top3">
							<div class="container">
								<div class="banner-info">
									<h3 class="name text-white text-uppercase text-center">
										<span class="name-part l-text1">Encontre</span>
										<span class="name-part l-text2">&nbsp;&nbsp;os</span>
										<span class="name-part l-text3">melhores serviços para o seu 
											<label>carro</label> </span>
									</h3>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top banner-top4">
							<div class="container">
								<div class="banner-info">
									<h3 class="name text-white text-uppercase text-center">
										<span class="name-part l-text1">Encontre</span>
										<span class="name-part l-text2">&nbsp;&nbsp;os</span>
										<span class="name-part l-text3">melhore serviços para o seu 
											<label>carro</label> </span>
									</h3>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- banner & header section -->

	<!-- about -->
	<div class="about py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">Sobre nós 
				<span></span>
			</h3>
			<div class="row mb-5">
				<div class="col-lg-6 aboutright ml-2 mr-sm-0 mr-3">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="img-fluid" src="{{ asset('img/g1.jpg') }}" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="{{ asset('img/g4.jpg') }}" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="{{ asset('img/g3.jpg') }}" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-lg-5 aboutleft ml-xl-4">
					<h4 class="about-left-agile text-dark text-capitalize mb-2">	
						<span>Tabajara</span>
					</h4>
					<p class="border-left pl-3" style="text-align: justify;"> O lava-jato Tabaraja é especializada em limpeza de automóveis de qualquer porte e tamanho. Nossos profissionais são altamente treinados e capacitados para realizar qualquer tipo de limpeza em seu automóvel. Trabalhamos apenas com produtos de primeira qualidade, visando sempre o lado ecológico. Somos o maior lava-jato de Varginha e realizamos atendimento em toda a região com agendamento de horário marcado, para a sua maior comodidade.
					</p>
					<h4 class="about-left-agile text-dark text-capitalize mt-4 mb-2">Por que nos escolher?
						
					</h4>
					<p class="border-left pl-3" style="text-align: justify" > Trabalhamos com qualidade e competência no serviço e na entrega do seu automóvel.</p>
				</div>
			</div>
		</div>
	</div>
	<!--//about-->

	<!-- about bottom -->
	<div class="about-bottom-wthree py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row py-4 posi-ls-bottom">
				<div class="col-lg-4 bottom-ls1">
					<h4 class="text-white mb-4">Equipe treinada</h4>
					<p>Profissionais capacitados para trazer excelência ao serviço.</p>
					<i class="fas fa-users text-white"></i>
				</div>
				<div class="col-lg-4 bottom-ls1 my-lg-0 my-5">
					<h4 class="text-white mb-4">Ótima qualidade</h4>
					<p> Garantimos a qualidade dos serviços prestados e o atendimento personalizado.</p>
					<i class="fas fa-tachometer-alt text-white"></i>
				</div>
				<div class="col-lg-4 bottom-ls1">
					<h4 class="text-white mb-4">Excelentes produtos</h4>
					<p>Melhores produtos disponíveis no mercado.</p>
					<i class="fas fa-american-sign-language-interpreting text-white"></i>
				</div>
			</div>
		</div>
	</div>
	<!-- //about bottom -->

	<!-- gallery -->
	<div class="agileits-services text-center py-5" id="gallery">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">GALERIA
				<span></span>
			</h3>
			<div class="ls_gallery_grids">
				<div class="row agileits_layouts_gallery_grid">
					<div class="col-md-4 agileits_layouts_gallery_grid1 hover14">
						<div class="_agile_gallery_effect">
							<a href="{{ asset('img/g1.jpg') }}" class="sb" title="we love your car the same as you do">
								<figure>
									<img src="{{ asset('img/g1.jpg') }}" alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
					<div class="col-md-4 agileits_layouts_gallery_grid1 hover14 my-md-0 my-2">
						<div class="_agile_gallery_effect">
							<a href="{{ asset('img/g2.jpg') }}" class="sb" title="we love your car the same as you do">
								<figure>
									<img src="{{ asset('img/g2.jpg') }}" alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
					<div class="col-md-4 agileits_layouts_gallery_grid1 hover14">
						<div class="_agile_gallery_effect">
							<a href="{{ asset('img/g3.jpg') }}" class="sb" title="we love your car the same as you do">
								<figure>
									<img src="{{ asset('img/g3.jpg') }}" alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
				</div>
				<div class="row agileits_layouts_gallery_grid mt-2">
					<div class="col-md-4 agileits_layouts_gallery_grid1 hover14">
						<div class="_agile_gallery_effect">
							<a href="{{ asset('img/g4.jpg') }}" class="sb" title="we love your car the same as you do">
								<figure>
									<img src="{{ asset('img/g4.jpg') }} "alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
					<div class="col-md-4 agileits_layouts_gallery_grid1 hover14 my-md-0 my-2">
						<div class="_agile_gallery_effect">
							<a href="{{ asset('img/g1.jpg') }}" class="sb" title="we love your car the same as you do">
								<figure>
									<img src="{{ asset('img/g1.jpg') }}" alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
					<div class="col-md-4 agileits_layouts_gallery_grid1 hover14">
						<div class="_agile_gallery_effect">
							<a href="{{ asset('img/g2.jpg') }}" class="sb" title="we love your car the same as you do">
								<figure>
									<img src="{{ asset('img/g2.jpg') }}" alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //gallery -->

	<!-- services -->
	<div class="services py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">nossos serviços
				<span></span>
			</h3>
			<div class="row">
				<div class="col-md-7">
					<div class="img1 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_ls px-4">
							<h4>Lavagem à mão</h4>
							<span> </span>
							<p class="text-white"> Realizada manualmente utilizando xampus apropriados de primeira...</p>
							<button type="button" class="btn btn-primary seri-ls text-white my-4" data-toggle="modal" data-target="#modalMao">
								Leia mais
								<i class="fas fa-long-arrow-alt-right ml-2"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-5 px-md-0 my-md-0 mt-3">
					<div class="img1 img2 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_ls px-3">
							<h4>Limpeza Ecologica</h4>
							<span> </span>
							<p class="text-white"> Na Limpeza Ecológica, o produto utilizado é um líquido...</p>
							<button type="button" class="btn btn-primary seri-ls text-white my-4" data-toggle="modal" data-target="#ModalEco">
								Leia mais
								<i class="fas fa-long-arrow-alt-right ml-2"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row my-3">
				<div class="col-md-7">
					<div class="img1 img3 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_ls px-4">
							<h4>Limpeza Delivery</h4>
							<span> </span>
							<p class="text-white">Modalidade de limpeza em que o lava-rápido dispõe de um serviço de ...</p>
							<button type="button" class="btn btn-primary seri-ls text-white my-4" data-toggle="modal" data-target="#ModalDelivery">
								Leia mais
								<i class="fas fa-long-arrow-alt-right ml-2"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-5 px-md-0 my-md-0 mt-3">
					<div class="img1 img4 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_ls px-3">
							<h4>Enceramento de Pintura</h4>
							<span> </span>
							<p class="text-white">Processo de aplicação de cera sobre a pintura que ...</p>
							<button type="button" class="btn btn-primary seri-ls text-white my-4" data-toggle="modal" data-target="#ModalCera">
								Leia mais
								<i class="fas fa-long-arrow-alt-right ml-2"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 my-md-0 mb-3">
					<div class="img1 img5 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_ls px-3">
							<h4>Lavagem Automatica </h4>
							<span> </span>
							<p class="text-white">Realizada inteiramente por máquina, sem a...</p>
							<button type="button" class="btn btn-primary seri-ls text-white my-4" data-toggle="modal" data-target="#ModalAuto">
								Leia mais
								<i class="fas fa-long-arrow-alt-right ml-2"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-7 px-md-0">
					<div class="img1 img6 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_ls px-4">
							<h4>Serviço completo</h4>
							<span> </span>
							<p class="text-white">Serviço completo que dispõe de lavagem e enceramento do carro... </p>
							<button type="button" class="btn btn-primary seri-ls text-white my-4" data-toggle="modal" data-target="#ModalCompleto">
								Leia mais
								<i class="fas fa-long-arrow-alt-right ml-2"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="modalMao" tabindex="-1" role="dialog" aria-labelledby="modalMaoTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalMaoTitle">Lavagem a mão</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="{{ asset('img/g1.jpg') }}" alt=" " class="img-fluid">
					<p>Realizada manualmente utilizando xampus apropriados de primeira qualidade, com componentes que não afetam o meio ambiente, com um acessório que pode ser um pano, 
						uma esponja ou uma luva de pelos. Auxiliado por uma lavadora móvel de pressão para lançar a água e espuma de lavagem.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="ModalEco" tabindex="-1" role="dialog" aria-labelledby="ModalEcoTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="ModalEcoTitle">Limpeza Ecologica</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="{{ asset('img/g4.jpg') }}" alt=" " class="img-fluid">
					<p>Na Limpeza Ecológica, o produto utilizado é um líquido composto entre outros por cera de carnaúba e o grande diferencial 
						utilzam-se apenas 300ml de água, pois o foco é o mínimo desperdicio possível, pensando sempre no bem do meio ambeiente.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="ModalDelivery" tabindex="-1" role="dialog" aria-labelledby="ModalDeliveryTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="ModalDeliveryTitle">Limpeza Delivery</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<img src="{{ asset('img/g2.jpg') }}" alt=" " class="img-fluid">
						<p> Modalidade de limpeza em que o lava-rápido dispõe de um serviço de lavagem a seco que vai ao local escolhido pelo proprietário. 
							Esta modalidade prioriza a conveniência do proprietário e economia de tempo de descolamento. </p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="ModalCera" tabindex="-1" role="dialog" aria-labelledby="ModalCeraTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="ModalCeraTitle">Enceramento de Pintura</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="{{ asset('img/g5.jpg') }}" alt=" " class="img-fluid">
							<p> Processo de aplicação de cera sobre a pintura que preenche pequenas irregularidades da superfície e forma uma película de proteção.
								 Resgatar o brilho da pintura, facilita a remoção de sujeiras e protege a lataria contra sujeiras do cotidiano. </p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="ModalAuto" tabindex="-1" role="dialog" aria-labelledby="ModalAutoTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="ModalAutoTitle">Lavagem Automática</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="{{ asset('img/b2.jpg') }}" alt=" " class="img-fluid">
								<p> Realizada inteiramente por máquina, sem a intervenção de pessoas no processo de lavagem. O automovel percorre um túnel de lavagem por uso de esteiras automáticas. 
									É o processo de lavagem mais rápido, durando em geral menos de 5 minutos e o motorista tem a opção de permanecer dentro do veículo. </p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="ModalCompleto" tabindex="-1" role="dialog" aria-labelledby="ModalCompletoTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="ModalAutoTitle">Serviço completo</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<img src="{{ asset('img/g3.jpg') }}" alt=" " class="img-fluid">
									<p> Serviço completo que dispõe de lavagem e enceramento do carro. Criado especialmente para melhor atender o cliente e para darmos o nosso melhor 
										para agrada-lo sempre. </p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
	<!-- //Modal -->
	<!-- //services -->

	<!-- team -->
	<div class="team py-5" id="team">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">Nosso time
				<span></span>
			</h3>
			<div class="row team-bottom">
				<div class="col-sm-4 team-grid">
					<img src="{{ asset('img/team1.jpg') }}" class="img-fluid img-thumbnail" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Davi</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fab fa-facebook-f f1"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter f2"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-google-plus-g f3"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 team-grid mt-sm-0 mt-3">
					<img src="{{ asset('img/team2.jpg') }}" class="img-fluid img-thumbnail" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Luis</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fab fa-facebook-f f1"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter f2"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-google-plus-g f3"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 team-grid  mt-sm-0 mt-3">
					<img src="{{ asset('img/team4.jpg') }}" class="img-fluid img-thumbnail" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Camilo</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fab fa-facebook-f f1"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter f2"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-google-plus-g f3"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row team-bottom mt-sm-4 mt-3">
				<div class="col-sm-4 team-grid">
					<img src="{{ asset('img/team3.jpg') }}" class="img-fluid img-thumbnail" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Renan</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fab fa-facebook-f f1"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter f2"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-google-plus-g f3"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 team-grid mt-sm-0 mt-3">
					<img src="{{ asset('img/team5.jpg') }}" class="img-fluid img-thumbnail" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>João</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fab fa-facebook-f f1"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter f2"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-google-plus-g f3"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 team-grid mt-sm-0 mt-3">
					<img src="{{ asset('img/team6.jpg') }}" class="img-fluid img-thumbnail" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Regis</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fab fa-facebook-f f1"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter f2"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-google-plus-g f3"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //team -->

	<!-- testimonials -->
	<div class="testimonials py-5" id="testi">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">O que diz nossos clientes
				<span></span>
			</h3>
			<div class="_testimonials_grids _testimonials_grids">
				<div class="sreen-gallery-cursual">
					<div id="owl-demo" class="owl-carousel">
						<div class="row item-owl">
							<div class="col-md-4 img-agile ml-4">
								<img src="{{ asset('img/te1.jpg') }}" class="img-fluid" alt="" />
							</div>
							<div class="col-md-7 test-review test-tooltip1">
								<h6 class="mb-4">Breno Cornélio</h6>
								<p class="quotels">
									<i class="fas fa-quote-left"></i> Atendimento de primeira, fizeram um trabalho excepcional, funcionarios atensiosos e bem treinados, recomendo !!
									<i class="fas fa-quote-right"></i>
								</p>
								<ul class="list-unstyled mt-4">
									<li>
										<i class="fas fa-star"></i>
									</li>
									<li>
										<i class="fas fa-star"></i>
									</li>
									<li>
										<i class="fas fa-star"></i>
									</li>
									<li>
										<i class="fas fa-star"></i>
									</li>
									<li>
										<i class="fas fa-star-half-alt"></i>
									</li>
								</ul>
							</div>
						</div>
						<div class="row item-owl">
							<div class="col-md-4 img-agile ml-4">
								<img src="{{ asset('img/te2.jpg') }}" class="img-fluid" alt="" />
							</div>
							<div class="col-md-7 test-review test-tooltip1">
								<h6 class="mb-4">Michele Souza</h6>
								<p class="quotels">
									<i class="fas fa-quote-left"></i> Recebi recomendações sobre os serviços deste lava jato, meus amigos tinham razão eles são demais.
									<i class="fas fa-quote-right"></i>
								</p>
								<ul class="list-unstyled mt-4">
									<li>
										<i class="fas fa-star"></i>
									</li>
									<li>
										<i class="fas fa-star"></i>
									</li>
									<li>
										<i class="fas fa-star"></i>
									</li>
									<li>
										<i class="fas fa-star"></i>
									</li>
									<li>
										<i class="fas fa-star-half-alt"></i>
									</li>
								</ul>
							</div>
						</div>
						<div class="row item-owl">
							<div class="col-md-4 img-agile ml-4">
								<img src="{{ asset('img/te3.jpg') }}" class="img-fluid" alt="" />
							</div>
							<div class="col-md-7 test-review test-tooltip1">
								<h6 class="mb-4">Raíssa Soares</h6>
								<p class="quotels">
									<i class="fas fa-quote-left"></i> É a primeira vez que trago meu carro e com certeza não será a última. Estou muito satisfeita com o resultado...
									<i class="fas fa-quote-right"></i>
								</p>
								<ul class="list-unstyled mt-4">
									<li>
										<i class="fas fa-star"></i>
									</li>
									<li>
										<i class="fas fa-star"></i>
									</li>
									<li>
										<i class="fas fa-star"></i>
									</li>
									<li>
										<i class="fas fa-star"></i>
									</li>
									<li>
										<i class="fas fa-star-half-alt"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonials -->

	<!-- contact -->
	<div class="contact py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize text-white text-center pb-3 mb-sm-5 mb-4">Fale conosco
				<span></span>
			</h3>
			<div class="d-flex">
				<div class="col-lg-6 contact-right">
					<div class="l-agile">
						<!-- <form action="#" method="post"> -->
							<div class="form-group">
								<input type="text" name="name" placeholder="Seu nome" class="form-control" required="">
							</div>
							<div class="form-group">
								<input type="email" name="email" placeholder="Seu e-mail" class="form-control" required="">
							</div>
							<div class="form-group">
								<input type="text" name="subject" placeholder="Assunto" class="form-control" required="">
							</div>
							<div class="form-group">
								<input type="text" name="phone number" placeholder="Telefone" class="form-control" required="">
							</div>
							<div class="form-group">
								<textarea name="message" placeholder="Sua mensagem" class="form-control" required=""></textarea>
							</div>
							<a href="#"><input type="submit" value="Enviar Mensagem"></a>
							
						<!-- </form> -->
					</div>
				</div>
				<div class="col-lg-6 contact-left mt-lg-0 mt-5">
					<div class="l-agile ">
						<div class="address">
							<h4 class="text-white">
								<i class="fa fa-map-marker" aria-hidden="true"></i>Localização</h4>
							<p>Avenida Alzira Barra Gazzola, 650 Bairro Aeroporto, Varginha - MG, Brasil.</p>
						</div>
						<div class="phone my-4">
							<h4 class="text-white">
								<i class="fa fa-phone" aria-hidden="true"></i>Telefone</h4>
							<p>(35) 3219-5000.</p>
						</div>
						<div class="email">
							<h4 class="text-white">
								<i class="fas fa-envelope"></i>E-mail</h4>
							<p>
								<a href="mailto:info@example.com">lavajatounis@gmail.com</a>
							</p>
						</div>
						<!-- map -->
						<div class="map-ls mt-4">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.3101841585335!2d-45.480208685541896!3d-21.57381209708707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ca928492de75a7%3A0x3ad17fb0fb012f5f!2sUNIS!5e0!3m2!1spt-BR!2sbr!4v1555272699047!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<!-- //map -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<div class="footer-bot py-5 text-center">
		<div class="container">
			<div class="logo2">
				<h2>
					<a href="index.html">
						<span>T</span>aba
						<span>J</span>ara
					</a>
				</h2>
			</div>
			<!-- social icons -->
			<div class="agileinfo_social_icons my-4">
				<ul class="agileits_social_list list-unstyled">
					<li>
						<a href="#" class="_agile_facebook">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li class="mx-2">
						<a href="#" class="agile_twitter">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" class="_agile_dribble">
							<i class="fab fa-dribbble"></i>
						</a>
					</li>
					<li class="ml-2">
						<a href="#" class="_agile_google">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- social icons -->
			<!-- copyright -->
			<p class="copyright-ls"> &copy; 2019 Lava Jato. Todos direitos reservados | Design by
				<a href="http://google.com/"> Taba Jara</a>
			</p>
			<!-- //copyright -->
		</div>
	</div>
	<!-- //footer -->
    
    
	<!-- Js files -->
	<!-- JavaScript -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- <script src="js/jquery-1.11.3.min.js"></script> -->
	<!-- Default-JavaScript-File -->
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!--banner-slider-->
	<script src="{{ asset('js/JiSlider.js') }}"></script>
	<script>
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 3,
				reverse: true
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->

	<!-- smooth scrolling -->
	<script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="{{ asset('js/move-top.js') }}"></script>
	<!-- easing -->
	<script src="{{ asset('js/easing.js') }}"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="{{ asset('js/carServices.js') }}"></script>
	<!-- banner text -->
	<script src="{{ asset('js/text.js') }}/"></script>
	<!-- menu -->
	<script src="{{ asset('js/menu.js') }}"></script>
	<!-- lightbox -->
	<script src="{{ asset('js/smoothbox.jquery2.js') }}"></script>
    
	<!-- testimonials -->
	<!-- required-js-files-->
	<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
	<script src="{{ asset('js/owl.carousel.js') }}"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				lazyLoad: true,
				autoPlay: false,
				navigation: true,
				navigationText: true,
				pagination: true,
			});
		});
	</script>
	<!-- //required-js-files-->
	<!-- //Js files -->
    </body>
</html>
