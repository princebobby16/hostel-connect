@extends('layouts.app')

@section('content')
<div id="slides" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="{{ url('../assets/img/hostelconnectimages/ArkHostel/ark22.jpg') }}" alt="image1">
      <div class="carousel-caption">
        <h1 class="display-3">Hostel Connect</h1>
        <!-- <p class="text-style">You dont need to suffer anymore, just sit back, at the comfort of your home and allow us do all the work</p> -->
        <!-- <p class="text-style">That is what <i><b>Hostel Connect</b></i> does for her customers</p> -->
        <a href="/register" class="btn btn-outline-light btn-lg">Get Started</a>
        <a href="/about" class="btn btn-primary btn-lg">Learn More</a>
      </div>
    </div>
    <div class="carousel-item"><img src="{{ url('../assets/img/hostelconnectimages/MaxHostel/max5.jpg') }}" alt="image2"></div>
    <div class="carousel-item"><img src="{{ url('../assets/img/hostelconnectimages/ATestimonyHostel/test11.jpg') }}" alt="image3"></div>
  </div>

  <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <h5 class="text-center hostel-head">LINDA DOR HOSTEL</h5>
          <img src="{{ url('../assets/img/hostelconnectimages/LindaDorHostel/linda.jpg') }}" height="200px" class="img-responsive" alt="img">
          <div class="card-body">
            <p class="card-text">This Hostel has a per semester model. With its location and great facilities.
              Linda Dor should be a bargain</p>
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
          <img src="{{ url('assets/img/hostelconnectimages/JPromptHostel/jp.jpg') }}" height="200px" class="img-responsive" alt="img">
          <div class="card-body">
            <p class="card-text">Beauty of the
              structure plus its affordability
              are one strong features of J
              Prompt Hostel. It has a per semester
              payment arrangement, also all
              utilities are factored into the price.</p>
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
          <img src="{{ url('assets/img/hostelconnectimages/TheKingsCourtHostel/kings.jpg') }}" height="200px" class="img-responsive" alt="img">
          <div class="card-body">
            <p class="card-text">KingsCourt is
              a top-notch Hostel with all
              the needs of the student for a
              comfortable stay provided for.</p>
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
          <img src="{{ url('assets/img/hostelconnectimages/ATestimonyHostel/test7.jpg') }}" height="200px" class="img-responsive" alt="img">
          <div class="card-body">
            <p class="card-text">A Testimony Hostel
              has a per semester payment systemm with
              a quiet serene environment with all the
              utilities taken care of.</p>
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
          <img src="{{ url('assets/img/hostelconnectimages/ArkHostel/ark21.jpg') }}" height="200px" class="img-responsive" alt="img">
          <div class="card-body">
            <p class="card-text">Ark Hostel offers a Serene green environment
              coupled with affordable prices and great facilities.
              It has a per semester or yearly payment system,
              also electricity and water are footed by the hostel</p>
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
          <img src="{{ url('assets/img/hostelconnectimages/MaxHostel/max1.jpg') }}" height="200px" class="img-responsive" alt="img">
          <div class="card-body">
            <p class="card-text">Max Hostel
              has a per semester or yearly
              payment model it is located near
              a busy route and very affordable.
              Water is free but Students pay
              for the light bill.</p>
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
          <img src="{{ url('assets/img/hostelconnectimages/KHostel/k.jpg') }}" height="200px" class="img-responsive" alt="img">
          <div class="card-body">
            <p class="card-text">K Hostel situates at
              an exclusive area with an appartment
              structure and is open to per semester
              or yearly payment arrangement</p>
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
          <img src="{{ url('assets/img/logo.jpg') }}" height="200px" class="img-responsive" alt="img">
          <div class="card-body">
            <p class="card-text"></p>
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
          <img src="{{ url('assets/img/logo.jpg') }}" height="200px" class="img-responsive" alt="img">
          <div class="card-body">
            <p class="card-text">Yellow Hostel
              has a per semester payment arrangement.
              It is located close to a busy route while
              it also offers fantastic facilities.
              Utilities are taken care of.</p>
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
          <img src="{{ url('assets/img/logo.jpg') }}" height="200px" class="img-responsive" alt="img">
          <div class="card-body">
            <p class="card-text">This hostel gives you the
              feel at Home feeling coupled
              with cool prices with a per
              semester payment arrangement.</p>
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
          <img src="{{ url('assets/img/logo.jpg') }}" height="200px" class="img-responsive" alt="img">
          <div class="card-body">
            <p class="card-text">This Hostel has a per
              semester payment arrangement
              with close proximity to GIMPA and
              University of Ghana campuses.</p>
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
          <img src="{{ url('assets/img/logo.jpg') }}" height="200px" class="img-responsive" alt="img">
          <div class="card-body">
            <p class="card-text">Bakana Hostel
              is a top-notch Hostel offering
              facilities that equate the price
              with a per semester payment arrangement.
              Water is free but light bill is payed for.</p>
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
@endsection