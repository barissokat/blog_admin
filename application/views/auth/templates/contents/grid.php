<style>
body {
	background: #101d30;
	color: white;
}
/* Vertical Scroll olmaması için margin değerlerini sıfırla.*/
.row {
	margin-right: 0;
	margin-left: 0;
}
.container h1 {
	text-align: center;
	color: #d8a100;
}
</style>
<div class="container"><h1> Bootstrap’s grid system </h1></div>
<div class="container">
	<div class="row">
		<div class="col-sm">One of three columns</div>
		<div class="col-sm">One of three columns</div>
		<div class="col-sm">One of three columns</div>
	</div>
</div>
<div class="container"><h1> Equal-width </h1></div>
<div class="container">
	<div class="row">
		<div class="col">1 of 2</div>
		<div class="col">2 of 2</div>
	</div>
	<div class="row">
		<div class="col">1 of 3</div>
		<div class="col">2 of 3</div>
		<div class="col">3 of 3</div>
	</div>
</div>
<div class="container"><h1> Equal-width continues </h1></div>
<div class="container">
	<div class="row">
		<div class="col">Column</div>
		<div class="col">Column</div>
		<!-- Force next columns to break to new line -->
		<div class="w-100"></div>
		<div class="col">Column</div>
		<div class="col">Column</div>
	</div>
</div>
<div class="container"><h1> Setting one column width </h1></div>
<div class="container">
	<div class="row">
		<div class="col">1 of 3</div>
		<div class="col-6">2 of 3 (wider)</div>
		<div class="col">3 of 3</div>
	</div>
	<div class="row">
		<div class="col">1 of 3</div>
		<div class="col-5">2 of 3 (wider)</div>
		<div class="col">3 of 3</div>
	</div>
</div>
<div class="container"><h1> Variable width content </h1></div>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col col-lg-2">1 of 3</div>
		<div class="col-md-auto">Variable width content</div>
		<div class="col col-lg-2">3 of 3</div>
	</div>
	<div class="row">
		<div class="col">1 of 3</div>
		<div class="col-md-auto">Variable width content</div>
		<div class="col col-lg-2">3 of 3</div>
	</div>
</div>
<div class="container"><h1> Equal-width multi-row </h1></div>
<div class="row">
	<div class="col">col</div>
	<div class="col">col</div>
	<!-- Force next columns to break to new line -->
	<div class="w-100"></div>
	<div class="col">col</div>
	<div class="col">col</div>
</div>
<div class="container"><h1> All breakpoints </h1></div>
<div class="row">
	<div class="col">col</div>
	<div class="col">col</div>
	<div class="col">col</div>
	<div class="col">col</div>
</div>
<div class="row">
	<div class="col-8">col-8</div>
	<div class="col-4">col-4</div>
</div>
<div class="container"><h1> Stacked to horizontal </h1></div>
<div class="row">
	<div class="col-sm-8">col-8</div>
	<div class="col-sm-4">col-4</div>
</div>
<div class="row">
	<div class="col-sm">col-sm</div>
	<div class="col-sm">col-sm</div>
	<div class="col-sm">col-sm</div>
	<div class="col-sm">col-sm</div>
</div>
<div class="container"><h1>Mix and Match</h1></div>
<!-- Stack the columns on mobile by making one full-width and the other half-width -->
<div class="row">
	<div class="col-12 col-md-8">.col-12 .col-md-8</div>
	<div class="col-6 col-md-4">.col-6 .col-md-4</div>
</div>
<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
	<div class="col-6 col-md-4">.col-6 .col-md-4</div>
	<div class="col-6 col-md-4">.col-6 .col-md-4</div>
	<div class="col-6 col-md-4">.col-6 .col-md-4</div>
</div>
<!-- Columns are always 50% wide, on mobile and desktop -->
<div class="row">
	<div class="col-6">.col-6</div>
	<div class="col-6">.col-6</div>
</div>
<div class="container"><h1>Vertical Alignment</h1></div>
<div class="container">
	<div class="row align-items-start">
		<div class="col"> One of three columns </div>
		<div class="col"> One of three columns </div>
		<div class="col"> One of three columns </div>
	</div>
	<div class="row align-items-center">
		<div class="col"> One of three columns </div>
		<div class="col"> One of three columns </div>
		<div class="col"> One of three columns </div>
	</div>
	<div class="row align-items-end">
		<div class="col"> One of three columns </div>
		<div class="col"> One of three columns </div>
		<div class="col"> One of three columns </div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col align-self-start"> One of three columns </div>
		<div class="col align-self-center"> One of three columns </div>
		<div class="col align-self-end"> One of three columns </div>
	</div>
</div>
<div class="container"><h1>Horizontal Alignment</h1></div>
<div class="container">
	<div class="row justify-content-start">
		<div class="col-4"> One of two columns </div>
		<div class="col-4"> One of two columns </div>
	</div>
	<div class="row justify-content-center">
		<div class="col-4"> One of two columns </div>
		<div class="col-4"> One of two columns </div>
	</div>
	<div class="row justify-content-end">
		<div class="col-4"> One of two columns </div>
		<div class="col-4"> One of two columns </div>
	</div>
	<div class="row justify-content-around">
		<div class="col-4"> One of two columns </div>
		<div class="col-4"> One of two columns </div>
	</div>
	<div class="row justify-content-between">
		<div class="col-4"> One of two columns </div>
		<div class="col-4"> One of two columns </div>
	</div>
</div>
<div class="container"><h1>No Gutters</h1></div>
<div class="row no-gutters">
	<div class="col-12 col-sm-6 col-md-8">.col-12 .col-sm-6 .col-md-8</div>
	<div class="col-6 col-md-4">.col-6 .col-md-4</div>
</div>
<div class="container"><h1>Column Breaks</h1></div>
<div class="row">
	<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
	<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
	<!-- Force next columns to break to new line at md breakpoint and up -->
	<div class="w-100 d-none d-md-block"></div>
	<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
	<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
</div>
<div class="container"><h1>Nesting</h1></div>
<div class="row">
	<div class="col-sm-9">
		Level 1: .col-sm-9
		<div class="row">
			<div class="col-8 col-sm-6">
				Level 2: .col-8 .col-sm-6
			</div>
			<div class="col-4 col-sm-6">
				Level 2: .col-4 .col-sm-6
			</div>
		</div>
	</div>
</div>