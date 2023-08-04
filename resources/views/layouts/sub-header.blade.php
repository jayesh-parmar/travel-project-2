
@include('layouts/header')

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:@yield('url')">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">@yield('title1')</span>
							<h1>@yield('title2')</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>

	