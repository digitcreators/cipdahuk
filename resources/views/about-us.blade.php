@extends('layouts.web')
@section('title', 'About CIPD Assignment Help UK – Quality You Can Trust')
@section('description', 'Learn more about CIPD Assignment Help UK, your trusted partner in academic writing. Discover our professional services and vision for your academic success!')
@section('canonical', config('app.url') . Request::path())

@section('schema-script')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "@yield('title', '')",
  "url": "@yield('canonical')",
  "logo": "https://cipdassignmenthelpuk.co.uk/public/images/logo-cipd-2.webp",
  "sameAs": [
    "https://www.facebook.com/cipdassignmenthelpuk.co.uk/",
    "https://www.instagram.com/cipdassignmenthelpuk.co.uk/"
  ]
}
</script>

@endsection
@section('content')


<section>
    <div class="container py-5 px-5">
        <div class="content-wrapper">
            <h1 style="color: #182E47;" class="text-3xl font-medium mb-4 text-center">
                About Us
            </h1>
            <p style="color: #182E47;" class="mb-4 fw-normal">
              CIPD Assignment Help UK is a genuine platform that you won’t regret choosing. Every student at our platform seek professional assistance since we have a team of expert writers who offer all CIPD levels and HR assignment as well.
           </p>

            <p style="color: #182E47;" class="mb-4 fw-normal">Furthermore, our team of writers are qualified with PhD degrees in many different subjects and hold great expertise in them, such as Accounting assignments, Business assignments, and Programming assignments.
            </p>
            <p style="color: #182E47;" class="mb-4 fw-normal">
                Our services are fully online-based so we are available everywhere. Whether you are living in London, Manchester, or Buckingham our services are available to all regions. Our assignment writers are not only genuine but also dedicated and hardworking who are keen help you in every step.
                        </p>
        <div class="px-3 px-lg-4 text-center">
          <a href="javascript:void(Tawk_API.toggle())" class="text-white mt-4 btn bg-primary">Live Chat</a>
          <a href="{{route('order')}}" class="text-white mt-4 btn bg-primary">Order Now</a>
        </div>
        </div><!--.content-wrapper-->
    </div>
</section>


@endsection