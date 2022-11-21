@extends('layouts.website')
@section('content')
<section>
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="text-primary h6">Our Blog</h5>
            <h2 class="display-20 display-md-18 display-lg-16">Most recent our blog</h2>
        </div>
        <div class="row">
            @foreach ($news_all as $news)
            <div class="col-lg-6 col-md-12 mb-2">
                <article class="card card-style2 mt-2">
                    <div class="card-img">
                        <img class="rounded-top img-fluid mx-auto d-block" src='{{ asset("dashboard/uploads/images/$news->image") }}' alt="news image">
                        <?php
                        $string = "$news->date";
                        $date = DateTime::createFromFormat("Y-m-d", $string);
                        ?>
                        <div class="date"><span><?php echo $date->format("d");?></span><?php echo $date->format("m");?></div>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center font-bold">{{ $news->headline }}</h3>
                        <p class="fs-5">{{ $news->desc }}</p>
                    </div>
                    <div class="card-footer pt-3 bg-primary">
                        <p class="text-center text-light mt-1" style="font-size: 1.8em;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">{{ $news->date }}</p>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>



@endsection
