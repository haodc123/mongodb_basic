@component('components.header')

@endcomponent


	<section id="banner" data-video="images/banner">

		<div class="inner">
			<header>
				<h1>Test</h1>

				@if (isset($user))

					<h1>{{$user->first_name}}</h1>
					<div>{{$user->birthday}}</div>

				@elseif (isset($users))
				
					@foreach ($users as $user)
						<h2>{{$user->profile['first_name']}}</h2>
						<h3>{{$user->profile['birthday']}}</h3>
					@endforeach

				@endif
			</header>

		</div>

	</section>


<!-- Main -->

	<div id="main">

		<section id="s-refer" class="wrapper style2">

			<div class="inner">

				<header>

					<h2>Tham khảo</h2>
					

				</header>

				

			</div>

		</section>


	

		<section id="s-blogs" class="wrapper ">

			<div class="inner">

				<header class="align-center">

					<h2>Thông tin hữu ích</h2>

					<p>Mẹo, Bí kíp, Hướng dẫn, Tài liệu, chỉ nhau học,...</p>

				</header>


				<!-- 3 Column Video Section -->

					<div class="flex flex-3">


					

					

					</div>

			</div>

		</section>



	</div>


@component('components.footer')

@endcomponent