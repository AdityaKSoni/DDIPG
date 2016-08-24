<header>
	<nav class="navbar navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">

				<i id="menu-toggle" class="material-icons navbar-toggle pull-left">menu</i>

				<!-- Collapsed Hamburger -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
					<i class="material-icons">more_vert</i>
				</button>

				<!-- Branding Image -->
				<a class="navbar-brand" href="{{ url('/dashboard') }}">Dashboard</a>

			</div>

			<div class="collapse navbar-collapse" id="app-navbar-collapse">
				<!-- Left Side Of Navbar -->

				<!-- Right Side Of Navbar -->
				<ul class="nav navbar-nav navbar-right">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/') }}">Home</a></li>
					</ul>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
