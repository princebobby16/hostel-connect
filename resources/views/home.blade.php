@extends('layouts.app')

@section('content')
<main role="main">
  
  <section class="banner text-center">
    <div class="container">
      <h1 class="hostel-heading bigText">Hostel Connect</h1>
      <p class="text-style">You dont need to suffer anymore, just sit back, at the comfort of your home and allow us do all the work</p>
      <p class="text-style">That is what <i><b>Hostel Connect</b></i> does for her customers</p>
      <p>
        <a href="/register" class="btn btn-primary my-2">Get Started</a>
        <a href="/about" class="btn btn-primary my-2">Learn More</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <h5 class="text-center hostel-head">LINDA DOR HOSTEL</h5>
            <img src="{{ url('../assets/img/img1.jpeg') }}" class="img-responsive" alt="img">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/gallery/linda" class="btn btn-info">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <h5 class="text-center hostel-head">J. PROMPT HOSTEL</h5>
          <img src="{{ url('assets/img/img1.jpeg') }}" class="img-responsive" alt="img">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/gallery/jp" class="btn btn-info">Views</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <h5 class="text-center hostel-head">THE KINGS COURT HOSTEL</h5>
          <img src="{{ url('assets/img/img1.jpeg') }}" class="img-responsive" alt="img">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/gallery/kings" class="btn btn-info">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <h5 class="text-center hostel-head">A TESTIMONY HOSTEL</h5>
          <img src="{{ url('assets/img/img1.jpeg') }}" class="img-responsive" alt="img">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/gallery/testimony" class="btn btn-info">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <h5 class="text-center hostel-head">ARK HOSTEL</h5>
          <img src="{{ url('assets/img/img1.jpeg') }}" class="img-responsive" alt="img">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/gallery/ark" class="btn btn-info">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <h5 class="text-center hostel-head">MAX HOSTEL</h5>
          <img src="{{ url('assets/img/img1.jpeg') }}" class="img-responsive" alt="img">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/gallery/max" class="btn btn-info">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <h5 class="text-center hostel-head">K HOSTEL</h5>
          <img src="{{ url('assets/img/img1.jpeg') }}" class="img-responsive" alt="img">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/gallery/k" class="btn btn-info">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <h5 class="text-center hostel-head">PINA PALACE HOSTEL</h5>
          <img src="{{ url('assets/img/img1.jpeg') }}" class="img-responsive" alt="img">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/gallery/pina" class="btn btn-info">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <h5 class="text-center hostel-head">YELLOW HOSTEL</h5>
          <img src="{{ url('assets/img/img1.jpeg') }}" class="img-responsive" alt="img">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/gallery/yellow" class="btn btn-info">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <h5 class="text-center hostel-head">FOSTER HOSTEL</h5>
          <img src="{{ url('assets/img/img1.jpeg') }}" class="img-responsive" alt="img">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/gallery/foster" class="btn btn-info">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <h5 class="text-center hostel-head">THE HAVEN HOSTEL</h5>
          <img src="{{ url('assets/img/img1.jpeg') }}" class="img-responsive" alt="img">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/gallery/haven" class="btn btn-info">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <h5 class="text-center hostel-head">BAKANA HOSTEL</h5>
          <img src="{{ url('assets/img/img1.jpeg') }}" class="img-responsive" alt="img">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/gallery/bakana" class="btn btn-info">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
@endsection