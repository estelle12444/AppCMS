@extends(index)

@section('content')
<nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
    <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav me-auto p-3 p-lg-0">
            <a href="index.html" class="nav-item nav-link active">Accueil</a>
            <a href="about.html" class="nav-item nav-link">A PROPOS </a>
            <a href="service.html" class="nav-item nav-link">POURQUOI NOUS REJOINDRE</a>
            <a href="project.html" class="nav-item nav-link">COMMENT S'INSTALLER</a>
            <a href="project.html" class="nav-item nav-link">ENTREPRISES AGREEES</a>
            <a href="project.html" class="nav-item nav-link">MEDIATHEQUE </a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ESPACE AE VITIB</a>
                <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact Us</a>
        </div>
        <a href="#" class="btn btn-sm btn-light rounded-pill py-2 px-4 d-none d-lg-block">Get Started</a>
    </div>
</nav>
@endsection
