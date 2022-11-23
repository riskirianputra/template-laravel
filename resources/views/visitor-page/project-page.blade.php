@inject('project', 'App\models\Project')

@extends('visitor-layout.main')

@section('content')
<style>
   body {
    background-image: url("assets/img/komputer.jpeg");
    background-repeat: no-repeat;
    background-size:cover;    
   }
 </style>
<br>
<br>
<br>    
<h2>&nbsp;&nbsp;Project</h2>
<h5>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WEB DEVELOPER</h5>
<section id="jumbo">
    <div class="container">
        <h1 class="header-section">Promo</h1>
        <div class="row">
            @foreach ($project as $project)
            <div class="col-lg-4">
                <a href="">
                    <div class="card">
                        <img src="{{ asset('assets/img/project/'.$projects->img) }}" alt="">
                        <div class="bag">
                            <h4 class="">{{ $project->nama_project }}</h4>
                            <h5>{!! $project->deskripsi !!}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>







   

@endsection

