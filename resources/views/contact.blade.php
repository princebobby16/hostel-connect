@extends('layouts.app')
@section('content')

<div class="container-fluid padding contact-banner bg-info">
    <br>
    <div class="contact-header">
        <div class="welcome text-center padding">
            <h1 class="display-4"> <i class="fa fa-phone"></i> Get in touch</h1>
            <hr class="light">
        </div>
        <p class="lead text-center">This is just a simple contact page to show you how things work</p>
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="md-12 col-md-6">
                    <p class="lead text-center">
                        <a href="tel:+233249622403">
                            <i class="fa fa-phone"></i>
                            +233 249622403
                        </a>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="lead text-center">
                        <a href="mailto:pbobby001@st.ug.edu.gh">
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
      <a href="#"><i class="fab fa-google-plus-g"></a>

      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">pbobby001@st.ug.edu.gh</strong>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
    </div>
    <div class="media text-muted pt-3">
      <a href="#"><i class="fab fa-google-plus-g"></a>

      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">princebobby864@gmail.com</strong>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
    </div>
    <div class="media text-muted pt-3">
      <a href="#"><i class="fab fa-google-plus-g"></a>

      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">pbobby001@st.ug.edu.gh</strong>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
    </div>
  </div>
  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Social Media</h6>
    <div class="media text-muted pt-3">
      <img src="{{ url('assets/img/fb1.png') }}"height="40px" width="50px" alt="facebook image">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Go to our Facebook Page</strong>
          <a href="#" class="ml-auto">Follow</a>
        </div>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <img src="{{ url('assets/img/twitter2.png') }}" height="40px" width="50px"  alt="twitter image">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Check us out on Twitter</strong>
          <a href="#" class="ml-auto">Follow</a>
        </div>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <img src="{{ url('assets/img/instagram.jpeg') }}" height="40px" width="50px" alt="facebook image">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Don't forget Instagram</strong>
          <a href="#" class="ml-auto">Follow</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection