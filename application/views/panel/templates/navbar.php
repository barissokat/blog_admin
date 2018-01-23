<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark"> <!-- Navbar -->
	<!-- Site adı, ana sayfa için -->
	<a href="/front" class="navbar-brand">
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
			<li class="nav-item active">
				<a class="nav-link" href="/admin"><i class="fas fa-home fa-fw" aria-hidden="true"></i> ANA SAYFA<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/admin/ayarlar/profil/<?= $this->session->admin['id']; ?>"><i class="fas fa-user fa-fw" aria-hidden="true"></i> <?= strtoupper($this->session->admin['name']); ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt fa-fw" aria-hidden="true"></i> ÇIKIŞ</a>
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