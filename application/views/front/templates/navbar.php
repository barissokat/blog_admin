<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark"> <!-- Navbar -->
	<!-- Site adı, ana sayfa için -->
	<a href="/" class="navbar-brand">
		<!-- ikon için resimde kullanılabilir -->
		<i class="fas fa-bold fa-3x text-danger"></i>
	</a>
	<!-- Küçük çözünürlükle ekranlar için menüyü küçüktme -->
	<button class="navbar-toggler" type="button" 
			data-toggle="collapse" data-target="#navbarSupportedContent" 
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
                <div class="top-nav-login-btn pull-right">
					<?php if ($this->session->has_userdata('admin')) { ?>
						<a class="nav-link" href="/admin"><i class="fas fa-user fa-fw" aria-hidden="true"></i> ADMİN</a>
	                <?php } else { ?>
						<a class="nav-link" href="/login"><i class="fas fa-user fa-fw" aria-hidden="true"></i> GİRİŞ</a>
	                <?php } ?>
                </div>
			</li>
		</ul>
	</div>
</nav>	<!-- Navbar end. -->
<div class="pos-f-t fixed-bottom"> <!-- Message container -->
	<nav class="navbar navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-envelope text-primary" aria-hidden="true"></i>
		</button>
	</nav>
	<div class="collapse" id="navbarToggleExternalContent">
		<div class="bg-dark p-4">
			<h4 class="text-white">Collapsed content</h4>
			<span class="text-muted">Toggleable via the navbar brand.</span>
		</div>
	</div>
</div>	<!-- Message container end. -->