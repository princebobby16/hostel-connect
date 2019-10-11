@extends('layouts.app')
@section('content')

<div class="container-fluid padding contact-banner default-color">
  <br>
  <div class="contact-header">
    <div class="welcome text-center padding">
      <h1 class="display-4"> <i class="fa fa-phone"></i> Get in touch</h1>
      <hr class="light">
    </div>
    <!-- <p class="lead text-center">This is just a simple contact page to show you how things work</p> -->
    <div class="container-fluid padding">
      <div class="row padding">
        <div class="md-12 col-md-6">
          <p class="lead text-center">
            <a class="nav-link nav-item" href="tel:+233249622403">
              <i class="fa fa-phone"></i>
              +233 545371541
            </a>
          </p>
        </div>
        <div class="col-md-6">
          <p class="lead text-center">
            <a class="nav-link nav-item" href="mailto:pbobby001@st.ug.edu.gh">
              <i class="fa fa-envelope-open"></i>
              Email Us
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Emails</h6>
    <div class="media text-muted pt-3">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <div class="social"><a href="#"> <i class="fa fa-google-plus"></i> </a></div>
          <strong class="text-gray-dark"><h3>hostelconnect00@gmail.com</h3></strong>
          <a href="#" class="ml-auto">Follow</a>
        </div>
      </div>
    </div>
  </div>
  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Social Media</h6>
    <div class="media text-muted pt-3">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <div class="social"><a href="#"> <i class="fa fa-facebook-square"></i> </a></div>
          <strong class="text-gray-dark"><h3 class="text-center">Go to our Facebook Page</h3></strong>
          <a href="#" class="ml-auto">Follow</a>
        </div>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <div class="social"><a href="#"> <i class="fa fa-twitter"></i> </a></div>
          <strong class="text-gray-dark"><h3 class="text-center">Check us out on Twitter</h3></strong>
          <a href="#" class="ml-auto">Follow</a>
        </div>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <div class="social"><a href="#"> <i class="fa fa-instagram"></i> </a></div>
          <strong class="text-gray-dark"><h3 class="text-center">Don't forget Instagram</h3></strong>
          <a href="#" class="ml-auto">Follow</a>
        </div>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <div class="social"><a href="#"> <i class="fa fa-youtube"></i> </a></div>
          <strong class="text-gray-dark"><h3 class="text-center">Check our YouTube Page</h3></strong>
          <a href="#" class="ml-auto">Follow</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection