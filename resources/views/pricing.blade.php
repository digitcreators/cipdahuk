@extends('layouts.web')
@section('title', 'CIPD Assignment Help UK Pricing - Transparent & Fair Rates')
@section('description', 'Looking for CIPD Assignment Help in UK? Discover our pricing options and choose the best plan for your academic needs and goals that fits your budget.')
@section('canonical', config('app.url') . Request::path())
@section('content')

<style>
    .pricing-sec{
        border-radius: 1.5rem;
        border: 2px solid var(--color-secondary);
    }
    .border-box{
    border-top-left-radius: 17px;
    border-bottom-left-radius: 17px;
    }
    .border-end {
    border-right: 2px solid var(--color-primary) !important;
    flex: 1;
    /*padding: 53px 0px !important;*/
    text-align: center;
}
@media (min-width: 320px) and (max-width: 480px) {
    .border-end {
        width: 100%;
        padding: 15px !important;
        padding-bottom: 5px !important;
        flex: 100%;
        border-bottom: 1px solid var(--color-primary);
        border-right: none !important
    }
}

</style>
<section class="container py-5">
  <h1 class="text-center text-primary fw-bold mb-4 text-3xl">
    Your Needs, Our Priority—Accessible Support at Student-Friendly Rates
  </h1>
  

  <!-- Level 3 -->
  <div class="px-3 ">
      <div class="row pricing-sec mb-4 text-center mt-5">
    <div class="col-md-2 border-box bg-secondary text-white d-flex flex-column justify-content-center p-3">
      <h5 class="mb-0 fw-bold text-white text-2xl">CIPD<br>Level 3</h5>
    </div>
    <div class="col-md-10">
      <div class="row g-0">
        <div class="col p-3 border-end">
          <div class="fw-bold">20 Days</div>
          <div>£4</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">15 Days</div>
          <div>£5</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">10 Days</div>
          <div>£6</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">7 Days</div>
          <div>£8</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">6 Days</div>
          <div>£10</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">5 Days</div>
          <div>£12</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">4 Days</div>
          <div>£14</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">3 Days</div>
          <div>£16</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">2 Days</div>
          <div>£18</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">24 Hours</div>
          <div>£20</div>
        </div> 
        <div class="col p-3">
          <div class="fw-bold">6 Hours</div>
          <div>£22</div>
        </div>
      </div>
    </div>
  </div>
  </div>
  

  <!-- Level 5 -->
  <div class="px-3">
  <div class="row pricing-sec mb-4 text-center">
    <div class="col-md-2 border-box bg-secondary text-white d-flex flex-column justify-content-center p-3">
      <h5 class="mb-0 fw-bold text-white text-2xl">CIPD<br>Level 5</h5>
    </div>
    <div class="col-md-10 ">
      <div class="row g-0">
        <div class="col p-3 border-end"><div class="fw-bold">20 Days</div><div>£6</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">15 Days</div><div>£7</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">10 Days</div><div>£8</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">7 Days</div><div>£10</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">6 Days</div><div>£12</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">5 Days</div><div>£14</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">4 Days</div><div>£16</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">3 Days</div><div>£18</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">2 Days</div><div>£20</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">24 Hours</div><div>£22</div></div>
        <div class="col p-3"><div class="fw-bold">6 Hours</div><div>£24</div></div>
      </div>
    </div>
  </div>
  </div>

  <!-- Level 7 -->
  <div class="px-3">
  <div class="row pricing-sec mb-4 text-center">
    <div class="col-md-2 border-box bg-secondary text-white d-flex flex-column justify-content-center p-3">
      <h5 class="mb-0 fw-bold text-white text-2xl">CIPD<br>Level 7</h5>
    </div>
    <div class="col-md-10 ">
      <div class="row g-0">
        <div class="col p-3 border-end"><div class="fw-bold">20 Days</div><div>£8</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">15 Days</div><div>£9</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">10 Days</div><div>£10</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">7 Days</div><div>£12</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">6 Days</div><div>£14</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">5 Days</div><div>£16</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">4 Days</div><div>£18</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">3 Days</div><div>£20</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">2 Days</div><div>£22</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">24 Hours</div><div>£24</div></div>
        <div class="col p-3"><div class="fw-bold">6 Hours</div><div>£26</div></div>
      </div>
    </div>
  </div>
  </div>
  
  <div class="px-3">
  <div class="row pricing-sec mb-4 text-center">
    <div class="col-md-2 border-box bg-secondary text-white d-flex flex-column justify-content-center p-3">
      <h5 class="mb-0 fw-bold text-white text-2xl">HR<br>Assignment</h5>
    </div>
    <div class="col-md-10 ">
      <div class="row g-0">
        <div class="col p-3 border-end"><div class="fw-bold">20 Days</div><div>£10</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">15 Days</div><div>£11</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">10 Days</div><div>£12</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">7 Days</div><div>£14</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">6 Days</div><div>£16</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">5 Days</div><div>£18</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">4 Days</div><div>£20</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">3 Days</div><div>£22</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">2 Days</div><div>£24</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">24 Hours</div><div>£26</div></div>
        <div class="col p-3"><div class="fw-bold">6 Hours</div><div>£28</div></div>
      </div>
    </div>
  </div>
  </div>

  <div class="text-center mt-4">
    <a href="{{route('order')}}" class="hero-section-order py-2  fw-bold">Order Now</a>
    <a href="javascript:void(Tawk_API.toggle())" class="hero-section-order py-2  fw-bold">Live Chat</a>
  </div>
</section>

@endsection
