@extends('layout.mainlayout_admin')

@section('content')
   <main>
      <div class="pattern-square"></div>
      <!--Pricing start-->
       <!--asked question-->
        <section class="mb-xl-9 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="text-center mb-7">
                            <h2>Frequently asked questions</h2>
                            <p class="mb-0">
                                Can’t find any answer for your question?
                                <br />
                                Ask our
                                <a href="mailto:hellosaas@gmail.com" class="text-primary">customer
                                    support</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="accordion" id="accordionExample">
                            <div class="border mb-2 rounded-3 p-3">
                                <h2 class="h5 mb-0">
                                    <a href="#"
                                        class="text-reset d-flex justify-content-between align-items-center"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne"
                                        aria-expanded="false"
                                        aria-controls="collapseOne">
                                        What do I get exactly?
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseOne"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                        With the Laravel starter boilerplate, you'll receive a beginner-friendly framework 
                                        and a lifetime Git repository link. You'll also be updated with the latest features 
                                        for SaaS development.
                                    </div>
                                </div>
                            </div>
                            <div class="border mb-2 rounded-3 p-3">
                                <h2 class="h5 mb-0">
                                    <a href="#"
                                        class="text-reset d-flex justify-content-between align-items-center"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive"
                                        aria-expanded="false"
                                        aria-controls="collapseFive">
                                            If my tech stack is different, can I still use it?                   
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseFive"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                        Yes, you can still use it. However, it primarily utilizes PHP. For other tech stacks, you can integrate via API.
                                    </div>
                                </div>
                            </div>
                            <div class="border mb-2 rounded-3 p-3">
                                <h2 class="h5 mb-0">
                                    <a href="#"
                                        class="text-reset d-flex justify-content-between align-items-center"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo"
                                        aria-expanded="true"
                                        aria-controls="collapseTwo">
                                        Can I take a trial before registering or making a payment?  
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseTwo"
                                    class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                        You can view a demo on the website homepage, but please note that there is no trial available 
                                        for this SaaS setup.
                                    </div>
                                </div>
                            </div>
                            <div class="border mb-2 rounded-3 p-3">
                                <h2 class="h5 mb-0">
                                    <a href="#"
                                        class="text-reset d-flex justify-content-between align-items-center"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree"
                                        aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Is there a refund policy?  
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseThree"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                    This is a one-time payment, and by purchasing, you will gain membership to our repository for
                                    future updates. Please note that refunds are not available.
                                    </div>
                                </div>
                            </div>
                            <div class="border mb-2 rounded-3 p-3">
                                <h2 class="h5 mb-0">
                                    <a href="#"
                                        class="text-reset d-flex justify-content-between align-items-center"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour"
                                        aria-expanded="false"
                                        aria-controls="collapseFour">
                                        What features are included in the free plan?  
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseFour"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                        The free plan includes login and registration, an admin dashboard, 
                                        and the ability to add blogs.
                                    </div>
                                </div>
                            </div>
                            <div class="border mb-2 rounded-3 p-3">
                                <h2 class="h5 mb-0">
                                    <a href="#"
                                        class="text-reset d-flex justify-content-between align-items-center"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive"
                                        aria-expanded="false"
                                        aria-controls="collapseFive">
                                        How can I contact you?  
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseFive"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                        You can reach us by sending an email to (_______).
                                    </div>
                                </div>
                            </div>
                            <div class="border mb-2 rounded-3 p-3">
                                <h2 class="h5 mb-0">
                                    <a href="#"
                                        class="text-reset d-flex justify-content-between align-items-center"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix"
                                        aria-expanded="false"
                                        aria-controls="collapseSix">
                                        Is there any support available?  
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseSix"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                        Yes, we offer 15 days of support starting from the date you purchase the plan.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--asked question-->
      <!--Asked question end-->
   </main>
@endsection


