<style>
    .hover-card {
  transition: all 0.3s ease-in-out;
}

.hover-card:hover {
  transform: translateY(-10px) scale(1.03);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}

</style>
<section class="bg-secondary procedure-sec py-5 px-4 border-4 border-primary-one">
    <div class="container">
        <!-- text div -->
        <div class="text-center mb-5">
            <h2 class="fw-semibold text-white">
                Why Choose Our CIPD Assignment Writing Services?
            </h2>
            <p class="text-white mt-3">
               We have a team that is always on your side for your complete peace of mind.
            </p>
        </div>

        <!-- Steps Row -->
        <div class="row g-4 pb-3">
            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-left">
            <div class="bg-white p-4 rounded text-center h-100 hover-card">
                <div class="position-relative d-flex justify-content-center align-items-center mb-3">
                    <div class="image-box">
                        <img src="{{asset('images/trust.png')}}" 
                             alt="Details of Your Assignment" 
                             width="64" height="64" 
                             title="Details of Your Assignment">
                    </div>
                </div>
                <h4 class="h5 fw-bold">Trusted CIPD Experts</h4>
                <p class="small mb-0">
                    Qualified experts on our team are conversant with the CIPD project's complexities. 
                    To produce work that fulfils every criterion, they meticulously follow the guidelines.
                </p>
            </div>
        </div>


            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-right">
                <div class="bg-white p-4 rounded text-center h-100 hover-card">
                    <div class="position-relative d-flex justify-content-center align-items-center mb-3">
                        <div class="image-box">
                            <img src="{{asset('images/csr.png')}}" 
                                 alt="Contact Information" 
                                 width="64" height="64" 
                                 title="Contact Information">
                        </div>
                    </div>
                    <h4 class="h5 fw-bold">Round-the-Clock Support</h4>
                    <p class="small mb-0">
                        Need help at an odd time? No problem at all! To help you and address your questions, our support team is reachable 24/7 via chat.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up">
                <div class="bg-white p-4 rounded text-center h-100 hover-card">
                    <div class="position-relative d-flex justify-content-center align-items-center mb-3">
                        <div class="image-box">
                            <img src="{{asset('images/high-quality.png')}}" 
                                 alt="Secure Payment" 
                                 width="64" height="64" 
                                 title="Secure Payment">
                        </div>
                    </div>
                    <h4 class="h5 fw-bold">High-Quality Work</h4>
                    <p class="small mb-0">
                        Providing quality work is our top priority. Our team thoroughly reviews, proofreads, and double-checks every piece of work to ensure you receive flawless results.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-down">
                <div class="bg-white p-4 rounded text-center h-100 hover-card">
                    <div class="position-relative d-flex justify-content-center align-items-center mb-3">
                        <div class="image-box">
                            <img src="{{asset('images/budget-friendly.png')}}" 
                                 alt="Completed Assignment" 
                                 width="64" height="64" 
                                 title="Completed Assignment">
                        </div>
                    </div>
                    <h4 class="h5 fw-bold">Budget-Friendly Prices</h4>
                    <p class="small mb-0">
                        We keep our rates reasonable to suit the limited budgets of our students. You will receive expert assistance without the need to overspend.
                    </p>
                </div>
            </div>
        </div>
        <!-- Button -->
        <div class="text-center mt-4">
            <a href="{{route('order')}}" class="text-white btn bg-primary">
                Place An Order Now
            </a>
        </div>
    </div>
</section>