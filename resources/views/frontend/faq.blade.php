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
                                <a href="#" class="text-primary">customer
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
                                        Can I trial block before paying?
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseOne"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Quae harum adipisci
                                        possimus et. Iusto pariatur iste nam
                                        incidunt ratione modi.
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
                                        How are additional plan billed?
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseTwo"
                                    class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                        Sed urna felis, dapibus quis leo nec, luctus
                                        auctor augue. Nam gravida placerat sem vitae
                                        rutrum. Integer accumsan, enim et facilisis
                                        eleifend, ante ligula
                                        ornare nulla, sed pharetra tortor diam eget
                                        magna.
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
                                        When should I change my plan?
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseThree"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                        Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Inventore tenetur cum
                                        doloremque iusto molestiae. Minus beatae
                                        quam cumque modi quidem asperiores
                                        aliquam pariatur in iste.
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
                                        What payment methods do you offer?
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseFour"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                        Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Inventore tenetur cum
                                        doloremque iusto molestiae. Minus beatae
                                        quam cumque modi quidem asperiores
                                        aliquam pariatur in iste.
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
                                        What is your refund policy?
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseFive"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                        Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Inventore tenetur cum
                                        doloremque iusto molestiae. Minus beatae
                                        quam cumque modi quidem asperiores
                                        aliquam pariatur in iste.
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
                                        How are paid plans billed when moving other
                                        plan?
                                        <span class="chevron-arrow"><i
                                                class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapseSix"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="mt-3">
                                        Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Inventore tenetur cum
                                        doloremque iusto molestiae. Minus beatae
                                        quam cumque modi quidem asperiores
                                        aliquam pariatur in iste.
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


