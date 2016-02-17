@extends('layouts.front')
{!!Html::style('css/ycoins.css')!!}
@section('content')

<div class="jumbotron">

<body>
  <nav id="nav">
    <ul>
      <li>MENU</li>
      <li><a href="#section1" >Section 1</a></li>
      <li><a href="#section2" >Section 2</a></li>
      <li><a href="#section3" >Section 3</a></li>
      <li><a href="#section4" >Section 4</a></li>
    </ul>
  </nav>

  <section  id="section1" >
    <h1>Dynamic Navigation Bar</h1>
    <p class="intro">
      Inspired by the new Android Lollipop UI, the navbar gets colored dynamically with a tinted background-color of each following section.
    </p>
  </section>

  <section  id="section2" >
    <h2>Another Section…</h2>
    <p>
      By the way each section is displayed full screen just by one line of css.
      You can use viewport untis for flexible heights and widths.
    </p>
  </section>

  <section id="section3" >
    <h2>And Another Section…</h2>
  </section>

  <section  id="section4" >
    <h2>Wohoo! One more…</h2>
  </section>

    </body>
</html>



</div>
@stop
