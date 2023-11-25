@extends('layouts.master')

@section('content')
<section class="section">
    <div class="section__container">
        <div class="content">
            <p class="subtitle">HELLO</p>
            <h1 class="title">
                I'm <span>Tarek<br />a</span> Web Developer
            </h1>
            <p class="description">
                Hey there! Welcome to my portfolio website! I am Tarek Aziz, a passionate and ambitious student pursuing a degree in Computer Science and Engineering. I am thrilled to share my journey, projects, and skills with you.
            </p>
            <div class="action__btns">
               <a href="https://www.github.com/tarekpredix" target="_blank" style="text-decoration: none;"> <button class="portfolio">Hire Me</button> </a>
            </div>
        </div>
        <div class="image">
            <img src="images\pro.jpg" alt="profile" />
        </div>
    </div>
</section>
@endsection