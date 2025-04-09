@extends('layouts.app')

@push('scripts')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endpush

@section('content')
<section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0 hero-content">
          <div class="hero-badge">
            Connecting Ideas with Investors
          </div>
          <h1 class="display-5 mb-4">Turn Your Ideas Into Reality</h1>
          <p class="text-gray-600 fs-5 mb-4">
            Share your innovative ideas with our community and connect with investors who can help bring them to life.
          </p>
          <div class="d-flex flex-column flex-sm-row gap-3 hero-buttons">
            <a class="btn btn-primary btn-lg" href="{{  route('posts.create') }}">
              Share Your Idea <i class="bi bi-arrow-right ms-2"></i>
            </a>
            <a class="btn btn-outline-secondary btn-lg" href="{{ route('home') }}">
              Explore Ideas
            </a>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <img src="{{ asset('images/idea.jpg') }}" alt="Hero Image" class="img-fluid hero-image animate-float">
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features">
    <div class="container">
      <div class="text-center mb-5">
        <span class="custom-badge">Features</span>
        <h2 class="display-5 mb-3">Why Choose IdeaConnect?</h2>
        <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">
          Our platform offers unique features designed to help innovators and investors connect and collaborate.
        </p>
      </div>
      <div class="row g-4 mt-4">
        <div class="col-md-4">
          <div class="text-center">
            <div class="feature-icon-container yellow-container mx-auto">
              <i class="bi bi-lightbulb-fill feature-icon yellow-icon"></i>
            </div>
            <h3 class="fs-4 fw-bold mb-3">Idea Showcase</h3>
            <p class="text-muted">
              Present your ideas in a structured format that highlights their potential and uniqueness.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center">
            <div class="feature-icon-container green-container mx-auto">
              <i class="bi bi-check-circle-fill feature-icon green-icon"></i>
            </div>
            <h3 class="fs-4 fw-bold mb-3">Investor Verification</h3>
            <p class="text-muted">
              Our verification system ensures that investors are legitimate and have the resources to support your ideas.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center">
            <div class="feature-icon-container blue-container mx-auto">
              <i class="bi bi-shield-fill-check feature-icon blue-icon"></i>
            </div>
            <h3 class="fs-4 fw-bold mb-3">Idea Protection</h3>
            <p class="text-muted">
              We provide tools to help protect your intellectual property while still showcasing your ideas.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section id="how-it-works" class="bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <span class="custom-badge">Process</span>
        <h2 class="display-5 mb-3">How It Works</h2>
        <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">
          Our simple process connects innovators with investors in just a few steps.
        </p>
      </div>
      <div class="row g-4 mt-4">
        <div class="col-md-6">
          <div class="card h-100">
            <div class="card-body">
              <div class="d-flex align-items-center mb-4">
                <div class="step-number yellow-step">1</div>
                <h3 class="card-title mb-0">For Idea Creators</h3>
              </div>
              <p class="card-text text-muted mb-4">How to share your innovative ideas</p>

              <div class="process-step">
                <i class="bi bi-lightbulb-fill process-icon yellow-icon"></i>
                <div class="process-content">
                  <h4>Create Your Idea</h4>
                  <p>Develop and refine your idea with our structured templates.</p>
                </div>
              </div>

              <div class="process-step">
                <i class="bi bi-graph-up process-icon yellow-icon"></i>
                <div class="process-content">
                  <h4>Share and Get Feedback</h4>
                  <p>Publish your idea and receive valuable feedback from the community.</p>
                </div>
              </div>

              <div class="process-step">
                <i class="bi bi-briefcase-fill process-icon yellow-icon"></i>
                <div class="process-content">
                  <h4>Connect with Investors</h4>
                  <p>Engage with interested investors who can help fund your project.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card h-100">
            <div class="card-body">
              <div class="d-flex align-items-center mb-4">
                <div class="step-number blue-step">2</div>
                <h3 class="card-title mb-0">For Investors</h3>
              </div>
              <p class="card-text text-muted mb-4">How to discover and verify promising ideas</p>

              <div class="process-step">
                <i class="bi bi-search process-icon blue-icon"></i>
                <div class="process-content">
                  <h4>Discover Ideas</h4>
                  <p>Browse through a curated list of innovative ideas across various sectors.</p>
                </div>
              </div>

              <div class="process-step">
                <i class="bi bi-check-circle-fill process-icon blue-icon"></i>
                <div class="process-content">
                  <h4>Verify and Evaluate</h4>
                  <p>Use our verification tools to assess the potential of ideas.</p>
                </div>
              </div>

              <div class="process-step">
                <i class="bi bi-shield-fill process-icon blue-icon"></i>
                <div class="process-content">
                  <h4>Invest Securely</h4>
                  <p>Connect with creators through our secure communication channels.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section id="team">
    <div class="container">
      <div class="text-center mb-5">
        <span class="custom-badge">Our Team</span>
        <h2 class="display-5 mb-3">Meet the Minds Behind IdeaConnect</h2>
        <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">
          Our dedicated team of professionals is committed to helping innovators and investors connect.
        </p>
      </div>
      <div class="row g-5 mt-4">
        <div class="col-md-4">
          <div class="text-center team-member">
            <img src="https://placehold.co/200x200" alt="" class="team-avatar">
            <h3 class="fs-4 fw-bold mb-1">Al Kafi Sohag</h3>
            <p class="text-primary fw-semibold mb-3">202116</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center team-member">
            <img src="https://placehold.co/200x200" alt="" class="team-avatar">
            <h3 class="fs-4 fw-bold mb-1">Md.Nazmus Sakib</h3>
            <p class="text-primary fw-semibold mb-3">2002104</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center team-member">
            <img src="https://placehold.co/200x200" alt="" class="team-avatar">
            <h3 class="fs-4 fw-bold mb-1">MD. KAMRUZZAMAN</h3>
            <p class="text-primary fw-semibold mb-3">2002109</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container cta-content">
      <div class="text-center">
        <h2 class="display-5 fw-bold mb-4">Ready to Join Our Community?</h2>
        <p class="fs-5 mx-auto mb-5" style="max-width: 700px;">
          Whether you're an innovator with a groundbreaking idea or an investor looking for the next big thing, IdeaConnect is the platform for you.
        </p>
        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
          <button class="btn btn-yellow btn-lg">Sign Up Now</button>
          <button class="btn btn-outline-white btn-lg">Learn More</button>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
