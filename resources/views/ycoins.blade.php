@extends('layouts.front')
@section('content')	
<div class="jumbotron">

    <div id="fullWidth" class='row' >
      <div class='col-md-8'>
        <div class="panel panel-default">
          <img src="{!!URL::to('images/logo-example.jpg')!!}" class="img-responsive">
        </div>
      </div>
     <div class='col-md-4 pull-right'>
        <div class="panel panel-default">
          <img src="{!!URL::to('images/sorteos.jpg')!!}" class="img-responsive">
        </div>
     </div>
    </div>
     <div id="fullWidth" class='row' >
      <div class='col-md-4'>
        <div class="panel panel-default">
          Menu
          Descripcion
          Como funciona
          Unete a yavu.cl
          Empresas asociadas!
          <ul class="nav nav-pills">
			  <li role="presentation" class="active"><a href="#">Home</a></li>
			  <li role="presentation"><a href="#">Profile</a></li>
			  <li role="presentation"><a href="#">Messages</a></li>
		</ul>
        </div>
      </div>
     <div class='col-md-8 pull-right'>
        <div class="panel panel-default">
          Mostrar info yavu
        </div>
     </div>
    </div>

    <div id="pagewrap">

	<header>
		<h1>3 Column Responsive Layout</h1>
	</header>
		
	<section id="content">
		<h2>1st Content Area</h2>
		<p>This page demonstrates a 3 column responsive layout, complete with responsive images and jquery slideshow.</p>
	</section>
	
	<section id="middle">
		<h2>2nd Content Area</h2>
		<p>At full width all three columns will be displayed side by side. As the page is resized the third column will collapse under the first and second. At the smallest screen size all three columns will be stacked on top of one another.</p>
		<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
	</section>

	<aside id="sidebar">
		<h2>3rd Content Area</h2>
		<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
		<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
	</aside>
  </div>



@stop 