@extends('layouts.main')

@section('body')
    
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Cat Food Recommendation System</div>
        <div class="masthead-heading text-uppercase">Please Give Your Rating </div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Give Your Rating</a>
    </div>
</header>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Product</h2>
            <h3 class="section-subheading text-muted">
                These are some of the recommended products</h3>
        </div>
        
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1{{ $product->id }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ $product->image }}"  alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{ $product->name }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div style="text-align: center">
            <a class="btn btn-primary btn-xl text-uppercase" href="/products">All Product</a>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; {{ now()->format('Y') }}</div>
            <div class="col-lg-8 text-lg-end">
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
           </div>
    </div>
</footer>
<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->

@endsection