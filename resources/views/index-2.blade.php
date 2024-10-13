@extends('layout.mainlayout_admin')

@section('content')
   <main>
      <!--Pageheader start-->
      <div class="pattern-square"></div>
      <section class="container py-lg-8 py-5" data-cue="fadeIn">
         <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-12" data-cues="zoomIn" data-group="page-title" data-delay="700">
               <div class="text-center d-flex flex-column gap-5">
                  <div class="d-flex justify-content-center">
                     <span class="bg-primary bg-opacity-10 text-primary border-primary border p-2 fs-6 rounded-pill lh-1 d-flex align-items-center">
                        <span>Modern Design</span>
                     </span>
                  </div>
                  <div class="d-flex flex-column gap-3 mx-lg-8">
                     <h1 class="mb-0 display-5">Kickstart your project with Block</h1>
                     <p class="mb-0 lead">Block build with a modular web design concept will easily kickstart your project, and build website & marketing site faster.</p>
                  </div>
                  <div class="d-flex flex-row gap-2 justify-content-center">
                     <a href="https://bit.ly/block-theme" class="btn btn-primary" target="_blank">Purchase Template</a>
                     <a href="#demo" class="btn btn-light">Demos</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Pageheader end-->

      <!--Preview image start-->
      <div class="my-xl-7 py-5 d-none d-lg-block">
         <div class="container-fluid" data-cue="fadeIn">
            <div class="row mb-7 pb-2 text-center justify-content-center gy-4">
               <div class="col-lg-12 col-12">
                  <div class="marquee h-auto" data-cue="slideInLeft">
                     <div class="track d-flex gap-4">
                        <div>
                           <img src="assets/images/hero/landing-saas-v1.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/hero/landing-saas-v2.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>
                        <div>
                           <img src="assets/images/hero/creative-agency-template.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/landings/overview/overview-img-5.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>
                        <div>
                           <img src="assets/images/hero/landing-accounting.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/hero/landing-saas-finance.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/hero/modern-conference-landing-template.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/hero/clean-perosnal-template.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/landings/overview/overview-img-2.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/hero/creative-agency-template.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/hero/landing-saas-v1.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>
                        <div>
                           <img src="assets/images/landings/overview/overview-img-4.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-12">
                  <div class="marquee h-auto" data-cue="slideInRight">
                     <div class="track-2 d-flex gap-4 py-3">
                        <div>
                           <img src="assets/images/landings/overview/overview-img-1.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/landings/overview/overview-img-9.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/landings/overview/overview-img-3.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/landings/overview/overview-img-8.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>
                        <div>
                           <img src="assets/images/hero/clean-perosnal-template.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/landings/overview/overview-img-1.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>
                        <div>
                           <img src="assets/images/landings/overview/overview-img-6.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/landings/overview/overview-img-4.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/landings/overview/overview-img-2.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>

                        <div>
                           <img src="assets/images/hero/creative-agency-template.jpg" alt="Image" class="rounded-3 border" width="360" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Preview image end-->

      <!--Landing pages start-->
      <section class="my-xl-7 py-5">
         <div class="container mb-xl-7" data-cue="fadeIn">
            <div class="row row-cols-1 row-cols-md-3 gy-4">
               <div class="col" data-cue="zoomIn">
                  <div class="card card-lift">
                     <div class="card-body d-flex flex-column gap-4">
                        <div class="">
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <path
                                 opacity="0.2"
                                 d="M28 7V21C28 21.2652 27.8946 21.5196 27.7071 21.7071C27.5196 21.8946 27.2652 22 27 22H24V11C24 10.7348 23.8946 10.4804 23.7071 10.2929C23.5196 10.1054 23.2652 10 23 10H8V7C8 6.73478 8.10536 6.48043 8.29289 6.29289C8.48043 6.10536 8.73478 6 9 6H27C27.2652 6 27.5196 6.10536 27.7071 6.29289C27.8946 6.48043 28 6.73478 28 7Z"
                                 fill="#8B3DFF" />
                              <path
                                 d="M27 5H9C8.46957 5 7.96086 5.21071 7.58579 5.58579C7.21071 5.96086 7 6.46957 7 7V9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V25C3 25.5304 3.21071 26.0391 3.58579 26.4142C3.96086 26.7893 4.46957 27 5 27H23C23.5304 27 24.0391 26.7893 24.4142 26.4142C24.7893 26.0391 25 25.5304 25 25V23H27C27.5304 23 28.0391 22.7893 28.4142 22.4142C28.7893 22.0391 29 21.5304 29 21V7C29 6.46957 28.7893 5.96086 28.4142 5.58579C28.0391 5.21071 27.5304 5 27 5ZM5 11H23V13H5V11ZM23 25H5V15H23V25ZM27 21H25V11C25 10.4696 24.7893 9.96086 24.4142 9.58579C24.0391 9.21071 23.5304 9 23 9H9V7H27V21Z"
                                 fill="#8B3DFF" />
                           </svg>
                        </div>
                        <div class="d-flex flex-column gap-2">
                           <h3 class="mb-0 fs-4">7+ Landing pages</h3>
                           <p class="mb-0">Block kit offers endless possibilities for your pages to kick-start your next project.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col" data-cue="zoomIn">
                  <div class="card card-lift">
                     <div class="card-body d-flex flex-column gap-4">
                        <div class="">
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <path opacity="0.2" d="M28 10L16 17L4 10L16 3L28 10Z" fill="#8B3DFF" />
                              <path
                                 d="M28.8638 21.5C28.9958 21.7292 29.0317 22.0014 28.9635 22.257C28.8954 22.5126 28.7287 22.7308 28.5 22.8638L16.5 29.8638C16.3471 29.9529 16.1733 29.9999 15.9963 29.9999C15.8192 29.9999 15.6454 29.9529 15.4925 29.8638L3.4925 22.8638C3.26712 22.7283 3.10415 22.5096 3.03888 22.2549C2.9736 22.0001 3.01128 21.73 3.14375 21.5028C3.27622 21.2757 3.49282 21.1099 3.74666 21.0413C4.0005 20.9727 4.27114 21.0068 4.5 21.1363L16 27.8425L27.5 21.1363C27.7292 21.0042 28.0014 20.9683 28.257 21.0365C28.5126 21.1047 28.7308 21.2713 28.8638 21.5ZM27.5 15.1363L16 21.8425L4.5 15.1363C4.27231 15.0229 4.00997 15.0006 3.76638 15.0738C3.5228 15.147 3.31627 15.3103 3.18884 15.5305C3.06141 15.7506 3.02266 16.011 3.08046 16.2587C3.13827 16.5064 3.28829 16.7228 3.5 16.8638L15.5 23.8638C15.6529 23.9529 15.8267 23.9999 16.0037 23.9999C16.1808 23.9999 16.3546 23.9529 16.5075 23.8638L28.5075 16.8638C28.6228 16.7986 28.7239 16.7111 28.8051 16.6065C28.8863 16.5019 28.9459 16.3822 28.9804 16.2543C29.015 16.1265 29.0238 15.9931 29.0064 15.8618C28.9889 15.7305 28.9456 15.604 28.8789 15.4896C28.8122 15.3752 28.7234 15.2752 28.6177 15.1954C28.5121 15.1156 28.3916 15.0576 28.2633 15.0247C28.135 14.9918 28.0015 14.9848 27.8705 15.0039C27.7394 15.0231 27.6135 15.0681 27.5 15.1363ZM3 10C3.0004 9.82487 3.04679 9.6529 3.13454 9.50131C3.22229 9.34973 3.34831 9.22385 3.5 9.13627L15.5 2.13627C15.6529 2.04711 15.8267 2.00012 16.0037 2.00012C16.1808 2.00012 16.3546 2.04711 16.5075 2.13627L28.5075 9.13627C28.6585 9.22434 28.7837 9.35044 28.8707 9.50199C28.9578 9.65354 29.0036 9.82525 29.0036 10C29.0036 10.1748 28.9578 10.3465 28.8707 10.4981C28.7837 10.6496 28.6585 10.7757 28.5075 10.8638L16.5075 17.8638C16.3546 17.9529 16.1808 17.9999 16.0037 17.9999C15.8267 17.9999 15.6529 17.9529 15.5 17.8638L3.5 10.8638C3.34831 10.7762 3.22229 10.6503 3.13454 10.4987C3.04679 10.3471 3.0004 10.1752 3 10ZM5.985 10L16 15.8425L26.015 10L16 4.15752L5.985 10Z"
                                 fill="#8B3DFF" />
                           </svg>
                        </div>
                        <div class="d-flex flex-column gap-2">
                           <h3 class="mb-0 fs-4">80+ Flexible Blocks</h3>
                           <p class="mb-0">All our components and sections are responsively & flexibly designed.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col" data-cue="zoomIn">
                  <div class="card card-lift">
                     <div class="card-body d-flex flex-column gap-4">
                        <div class="">
                           <svg xmlns="http://www.w3.org/2000/svg" width="22" height="32" viewBox="0 0 22 32" fill="none">
                              <mask id="mask0_1700_169" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="32">
                                 <path d="M21.3333 0H0V32H21.3333V0Z" fill="white" />
                              </mask>
                              <g mask="url(#mask0_1700_169)">
                                 <mask id="mask1_1700_169" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="32">
                                    <path d="M20.9633 0.121216H0V31.5598H20.9633V0.121216Z" fill="white" />
                                 </mask>
                                 <g mask="url(#mask1_1700_169)">
                                    <path
                                       d="M5.24186 31.5599C8.13422 31.5599 10.4816 29.2125 10.4816 26.3201V21.0803H5.24186C2.34949 21.0803 0.0020752 23.4277 0.0020752 26.3201C0.0020752 29.2125 2.34949 31.5599 5.24186 31.5599Z"
                                       fill="#0ACF83" />
                                    <path
                                       d="M0.0020752 15.8405C0.0020752 12.9482 2.34949 10.6008 5.24186 10.6008H10.4816V21.0803H5.24186C2.34949 21.0803 0.0020752 18.7329 0.0020752 15.8405Z"
                                       fill="#A259FF" />
                                    <path
                                       d="M0.0022583 5.36099C0.0022583 2.46863 2.34968 0.121216 5.24204 0.121216H10.4818V10.6008H5.24204C2.34968 10.6008 0.0022583 8.25335 0.0022583 5.36099Z"
                                       fill="#F24E1E" />
                                    <path
                                       d="M10.4816 0.121216H15.7213C18.6137 0.121216 20.9612 2.46863 20.9612 5.36099C20.9612 8.25335 18.6137 10.6008 15.7213 10.6008H10.4816V0.121216Z"
                                       fill="#FF7262" />
                                    <path
                                       d="M20.9612 15.8405C20.9612 18.7329 18.6137 21.0803 15.7213 21.0803C12.829 21.0803 10.4816 18.7329 10.4816 15.8405C10.4816 12.9482 12.829 10.6008 15.7213 10.6008C18.6137 10.6008 20.9612 12.9482 20.9612 15.8405Z"
                                       fill="#1ABCFE" />
                                 </g>
                              </g>
                           </svg>
                        </div>
                        <div class="d-flex flex-column gap-2">
                           <h3 class="mb-0 fs-4">Figma File Available</h3>
                           <p class="mb-0">Figma file - To give you 100% control over the design, with the block theme.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Landing pages end-->

      <!--Stunning landing start-->
      <section class="py-5 bg-light-subtle" id="demo">
         <div class="container my-lg-7" data-cues="fadeIn">
            <div class="row mb-8">
               <div class="col-xl-8 offset-xl-2 col-12">
                  <div class="d-flex flex-column gap-2 mx-lg-8 text-center">
                     <h2 class="mb-0">Stunning Landing Pages</h2>
                     <p class="mb-0 lead">Blocks bootstrap 5 template comes with everything you need to get your website off the ground.</p>
                  </div>
               </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-6">
               <div class="col" data-cues="zoomIn">
                  <a href="landing-sass-v1.html" target="_blank">
                     <img src="assets/images/hero/landing-saas-v1.jpg" alt="Image" class="border rounded-3 img-fluid card-lift" />
                     <h4 class="mb-0 mt-3">Sass v1</h4>
                  </a>
               </div>
               <div class="col" data-cues="zoomIn">
                  <a href="landing-sass-v2.html" target="_blank">
                     <img src="assets/images/hero/landing-saas-v2.jpg" alt="Image" class="border rounded-3 img-fluid card-lift" />
                     <h4 class="mb-0 mt-3">Sass v2</h4>
                  </a>
               </div>
               <div class="col" data-cues="zoomIn">
                  <a href="landing-accounting.html" target="_blank">
                     <img src="assets/images/hero/landing-accounting.jpg" alt="Image" class="border rounded-3 img-fluid card-lift" />
                     <h4 class="mb-0 mt-3">Accounting</h4>
                  </a>
               </div>

               <div class="col" data-cues="zoomIn">
                  <a href="landing-finance.html" target="_blank">
                     <img src="assets/images/hero/landing-saas-finance.jpg" alt="Image" class="border rounded-3 img-fluid card-lift" />
                     <h4 class="mb-0 mt-3">Finance</h4>
                  </a>
               </div>
               <div class="col" data-cues="zoomIn">
                  <a href="landing-conference.html" target="_blank">
                     <img src="assets/images/hero/modern-conference-landing-template.jpg" alt="Image" class="border rounded-3 img-fluid card-lift" />
                     <h4 class="mb-0 mt-3">Conference</h4>
                  </a>
               </div>
               <div class="col" data-cues="zoomIn">
                  <a href="landing-jamstack-agancy.html" target="_blank">
                     <img src="assets/images/hero/creative-agency-template.jpg" alt="Image" class="border rounded-3 img-fluid card-lift" />
                     <h4 class="mb-0 mt-3">Agency</h4>
                  </a>
               </div>
               <div class="col" data-cues="zoomIn">
                  <a href="landing-personal.html" target="_blank">
                     <img src="assets/images/hero/clean-perosnal-template.jpg" alt="Image" class="border rounded-3 img-fluid card-lift" />
                     <h4 class="mb-0 mt-3">Personal</h4>
                  </a>
               </div>
               <div class="col" data-cues="zoomIn">
                  <a href="landing-it-company.html" target="_blank">
                     <img src="assets/images/hero/it-services-company-website-templates.jpg" alt="Image" class="border rounded-3 img-fluid card-lift" />
                     <h4 class="mb-0 mt-3">
                        IT Company
                        <span class="badge text-bg-success ms-2">New</span>
                     </h4>
                  </a>
               </div>
               <div class="col" data-cues="zoomIn">
                  <a href="#!">
                     <img src="assets/images/landings/overview/coming-soon.jpg" alt="Image" class="border rounded-3 img-fluid card-lift" />
                     <h4 class="mb-0 mt-3">Coming Soon</h4>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!--Stunning landing start-->
      <section class="bg-dark py-8">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-12">
                  <div class="mb-5 mb-lg-0">
                     <h2 class="text-white mb-4">Consists of 80+ blocks from 15 categories to cover the most frequent use cases.</h2>

                     <a href="https://bit.ly/block-theme" class="btn btn-primary me-3" target="_blank">Buy Block now</a>
                     <span class="fs-5">Initial Release - More coming soon</span>
                  </div>
               </div>
               <div class="col-lg-6 offset-lg-1 col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <ul class="list-unstyled">
                           <li class="d-flex justify-content-between mb-3">
                              <span>Navbar</span>
                              <span>4</span>
                           </li>
                           <li class="d-flex justify-content-between mb-3">
                              <span>Hero</span>
                              <span>6</span>
                           </li>
                           <li class="d-flex justify-content-between mb-3">
                              <span>Features</span>
                              <span>5</span>
                           </li>
                           <li class="d-flex justify-content-between mb-3">
                              <span>Pricing</span>
                              <span>3</span>
                           </li>
                           <li class="d-flex justify-content-between mb-3">
                              <span>Contact</span>
                              <span>2</span>
                           </li>
                           <li class="d-flex justify-content-between mb-3">
                              <span>Footer</span>
                              <span>3</span>
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-6">
                        <ul class="list-unstyled">
                           <li class="d-flex justify-content-between mb-3">
                              <span>Testimonials</span>
                              <span>5</span>
                           </li>
                           <li class="d-flex justify-content-between mb-3">
                              <span>Team</span>
                              <span>3</span>
                           </li>
                           <li class="d-flex justify-content-between mb-3">
                              <span>FAQ</span>
                              <span>2</span>
                           </li>
                           <li class="d-flex justify-content-between mb-3">
                              <span>CTA</span>
                              <span>6</span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Block categories end-->

      <!--More block theme start-->
      <section class="py-5">
         <div class="container my-lg-7">
            <div class="row">
               <div class="col-12">
                  <div class="mb-5 text-center" data-cue="fadeIn">
                     <h2 class="mb-0">More Block theme Features</h2>
                  </div>
               </div>

               <div class="row gy-4">
                  <div class="col-md-4 col-12" data-cue="slideInLeft">
                     <div class="d-flex flex-column gap-4">
                        <div>
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="26" viewBox="0 0 32 26" fill="none">
                              <g clip-path="url(#clip0_1699_512)">
                                 <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M6.6465 0.00292969C4.82063 0.00292969 3.46956 1.60105 3.53006 3.33418C3.58812 4.99924 3.51269 7.15574 2.96981 8.91437C2.425 10.6779 1.50425 11.7955 0 11.9389V13.5584C1.50425 13.7022 2.425 14.8192 2.96975 16.583C3.51269 18.3416 3.58806 20.4981 3.53 22.1632C3.4695 23.8961 4.82056 25.4944 6.64675 25.4944H25.3559C27.1818 25.4944 28.5326 23.8963 28.4721 22.1632C28.4141 20.4981 28.4895 18.3416 29.0324 16.583C29.5772 14.8192 30.4957 13.7017 32 13.5584V11.9389C30.4958 11.7952 29.5772 10.6782 29.0324 8.91437C28.4894 7.15599 28.4141 4.99924 28.4721 3.33418C28.5326 1.6013 27.1818 0.00292969 25.3559 0.00292969H6.64625H6.6465ZM21.6949 15.6946C21.6949 18.0811 19.9149 19.5284 16.9608 19.5284H11.9322C11.7883 19.5284 11.6504 19.4712 11.5487 19.3695C11.447 19.2678 11.3898 19.1298 11.3898 18.986V6.51143C11.3898 6.36758 11.447 6.22963 11.5487 6.12791C11.6504 6.0262 11.7883 5.96906 11.9322 5.96906H16.9322C19.3954 5.96906 21.0119 7.30331 21.0119 9.35181C21.0119 10.7896 19.9244 12.0768 18.539 12.3023V12.3773C20.425 12.5842 21.6949 13.8904 21.6949 15.6946ZM16.4125 7.68837H13.5452V11.7384H15.9602C17.8271 11.7384 18.8564 10.9866 18.8564 9.64293C18.8563 8.38368 17.9713 7.68837 16.4125 7.68837ZM13.5452 13.3453V17.8085H16.518C18.4618 17.8085 19.4913 17.0286 19.4913 15.5628C19.4913 14.0971 18.4329 13.3451 16.393 13.3451H13.5452V13.3453Z"
                                    fill="#8B3DFF" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_1699_512">
                                    <rect width="32" height="25.4976" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>

                        <div>
                           <h4 class="mb-2">Built with Bootstrap 5</h4>
                           <p>Block is the powerful front-end solution based on Bootstrap 5 —Powerful, extensible, and feature-packed frontend toolkit.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-12" data-cue="zoomIn">
                     <div class="d-flex flex-column gap-4">
                        <div>
                           <svg xmlns="http://www.w3.org/2000/svg" width="43" height="32" viewBox="0 0 43 32" fill="none">
                              <g clip-path="url(#clip0_1699_531)">
                                 <path
                                    d="M36.7167 18.3833C35.225 18.3917 33.9333 18.75 32.85 19.2834C32.45 18.4917 32.05 17.8 31.9834 17.2834C31.9084 16.6834 31.8167 16.3166 31.9084 15.6001C32 14.8833 32.4167 13.8666 32.4167 13.7833C32.4082 13.7083 32.3249 13.3416 31.4667 13.3333C30.6084 13.325 29.8667 13.5 29.7833 13.725C29.7 13.95 29.5333 14.4666 29.425 15C29.275 15.7833 27.7083 18.5583 26.8167 20.0166C26.525 19.45 26.275 18.95 26.2249 18.5499C26.15 17.95 26.0582 17.5832 26.15 16.8666C26.2417 16.1499 26.6583 15.1333 26.6583 15.05C26.65 14.975 26.5667 14.6083 25.7084 14.6C24.85 14.5916 24.1084 14.7666 24.0251 14.9916C23.9417 15.2166 23.8501 15.75 23.6667 16.2666C23.4917 16.7833 21.4083 21.4166 20.8667 22.625C20.5917 23.2416 20.3501 23.7333 20.175 24.0666C20 24.4 20.1667 24.0916 20.15 24.125C20 24.4083 19.9167 24.5666 19.9167 24.5666V24.5751C19.8 24.7834 19.675 24.9833 19.6166 24.9833C19.5749 24.9833 19.4916 24.425 19.6332 23.6584C19.9416 22.05 20.6916 19.5417 20.6833 19.4501C20.6833 19.4084 20.8249 18.9666 20.1999 18.7417C19.5916 18.5167 19.375 18.8917 19.3249 18.8917C19.2749 18.8917 19.2332 19.0251 19.2332 19.0251C19.2332 19.0251 19.9082 16.2001 17.9416 16.2001C16.7082 16.2001 15.0082 17.5418 14.1666 18.7668C13.6332 19.0585 12.4999 19.6751 11.2999 20.3335C10.8416 20.5835 10.3666 20.8501 9.91658 21.0918L9.825 20.9916C7.44166 18.45 3.03333 16.65 3.21666 13.2333C3.28333 11.9916 3.71666 8.71664 11.6834 4.74997C18.2084 1.49997 23.4334 2.39164 24.3417 4.37497C25.6333 7.2083 21.55 12.475 14.7667 13.2333C12.1834 13.525 10.825 12.525 10.4834 12.15C10.1251 11.7583 10.0751 11.7416 9.94175 11.8166C9.72508 11.9333 9.85841 12.2833 9.94175 12.4916C10.1417 13.0166 10.9751 13.95 12.3917 14.4166C13.6333 14.825 16.6667 15.05 20.3334 13.6333C24.4417 12.0416 27.6501 7.62497 26.7084 3.9333C25.7501 0.174969 19.5167 -1.05836 13.6251 1.0333C10.1167 2.2833 6.31666 4.2333 3.58333 6.79164C0.333329 9.82497 -0.183338 12.475 0.0333285 13.575C0.791745 17.5 6.2 20.0583 8.36666 21.95C8.25833 22.0082 8.15833 22.0666 8.06666 22.1166C6.98333 22.6499 2.85833 24.8083 1.825 27.0916C0.658329 29.6749 2.00833 31.5333 2.90833 31.7833C5.69166 32.5583 8.54166 31.1666 10.0833 28.875C11.6166 26.5833 11.4333 23.6083 10.725 22.25L10.6999 22.2L11.5499 21.7C12.1 21.375 12.6417 21.075 13.1166 20.8166C12.85 21.5416 12.6582 22.3999 12.5583 23.6499C12.4417 25.1166 13.0417 27.0166 13.8333 27.7666C14.1833 28.0915 14.6 28.0999 14.8583 28.0999C15.775 28.0999 16.1917 27.3415 16.65 26.4332C17.2167 25.3249 17.7167 24.0416 17.7167 24.0416C17.7167 24.0416 17.0917 27.5166 18.8 27.5166C19.425 27.5166 20.05 26.7082 20.3333 26.2916V26.2999C20.3333 26.2999 20.35 26.2749 20.3833 26.2166C20.4183 26.1649 20.4516 26.1121 20.4833 26.0583V26.0416C20.7333 25.6083 21.2917 24.6166 22.125 22.975C23.1999 20.8583 24.2333 18.2083 24.2333 18.2083C24.2333 18.2083 24.3333 18.8583 24.6417 19.925C24.8249 20.5584 25.2249 21.25 25.5332 21.925C25.2832 22.275 25.1332 22.4751 25.1332 22.4751L25.1416 22.4834C24.9417 22.7501 24.7166 23.0335 24.4833 23.3167C23.6333 24.3334 22.6167 25.4918 22.4833 25.8251C22.325 26.2167 22.3583 26.5084 22.6667 26.7418C22.8917 26.9085 23.2917 26.9417 23.7167 26.9085C24.4833 26.8584 25.0167 26.6668 25.2833 26.5501C25.7 26.4001 26.175 26.1751 26.6333 25.8417C27.4667 25.2251 27.975 24.3501 27.925 23.1835C27.9 22.5418 27.6917 21.9085 27.4333 21.3085C27.5083 21.2001 27.5834 21.0917 27.6583 20.9751C28.975 19.0501 29.9917 16.9335 29.9917 16.9335C29.9917 16.9335 30.0917 17.5835 30.4 18.6501C30.5582 19.1918 30.875 19.7836 31.1583 20.3669C29.925 21.3752 29.15 22.5419 28.8833 23.3086C28.3917 24.7252 28.775 25.3669 29.5 25.5169C29.8249 25.5836 30.2917 25.4336 30.6416 25.2836C31.0749 25.1419 31.5999 24.9001 32.0833 24.5419C32.9167 23.9252 33.7167 23.0669 33.675 21.9086C33.65 21.3752 33.5083 20.8502 33.3167 20.3502C34.3667 19.9169 35.7249 19.6669 37.45 19.8752C41.1583 20.3086 41.8917 22.6252 41.7501 23.5919C41.6084 24.5586 40.8334 25.0919 40.575 25.2586C40.3167 25.4169 40.2333 25.4753 40.2583 25.5919C40.2917 25.767 40.4083 25.7586 40.6333 25.7253C40.9417 25.6752 42.5833 24.9336 42.65 23.1504C42.75 20.8584 40.575 18.3584 36.7167 18.3833ZM8.11666 28.025C6.89166 29.3666 5.16666 29.875 4.43333 29.4416C3.64166 28.9833 3.94991 27.0083 5.45833 25.5833C6.375 24.7166 7.56666 23.9166 8.34999 23.425C8.52499 23.3166 8.79166 23.1584 9.10833 22.9666C9.15833 22.9334 9.19166 22.9166 9.19166 22.9166C9.25 22.8833 9.31666 22.8416 9.38333 22.8C9.94166 24.8333 9.40833 26.6166 8.11666 28.025ZM17.075 21.9333C16.65 22.975 15.75 25.65 15.2083 25.5C14.7416 25.375 14.4583 23.35 15.1166 21.35C15.4499 20.3416 16.1582 19.1416 16.5749 18.6749C17.25 17.9249 17.9832 17.6749 18.1667 17.9832C18.3833 18.3833 17.3417 21.2833 17.075 21.9333ZM24.4667 25.4666C24.2833 25.5584 24.1167 25.625 24.0417 25.5751C23.9833 25.5417 24.1166 25.4167 24.1166 25.4167C24.1166 25.4167 25.0416 24.4251 25.4082 23.9667C25.6166 23.7001 25.8666 23.3918 26.1332 23.0417V23.1417C26.1333 24.3416 24.9833 25.1416 24.4667 25.4666ZM30.1666 24.1666C30.0332 24.0666 30.05 23.7583 30.4999 22.7916C30.675 22.4083 31.0749 21.7666 31.7666 21.1583C31.8499 21.4083 31.9 21.6499 31.8916 21.875C31.8833 23.375 30.8167 23.9333 30.1666 24.1666Z"
                                    fill="#8B3DFF" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_1699_531">
                                    <rect width="42.6667" height="32" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>

                        <div>
                           <h4 class="mb-2">Easy to Customize with Sass</h4>
                           <p>Block is built using Sass. Easily change colors, typo, and much more. It is the most mature, stable, and powerful CSS extension language in the world.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-12" data-cue="slideInRight">
                     <div class="d-flex flex-column gap-4">
                        <div>
                           <svg xmlns="http://www.w3.org/2000/svg" width="23" height="32" viewBox="0 0 23 32" fill="none">
                              <g clip-path="url(#clip0_1699_502)">
                                 <path d="M2.06294 29.4286L0 6.28955H22.6688L20.6036 29.4249L11.3205 31.9985L2.06294 29.4286Z" fill="#8B3DFF" />
                                 <path d="M11.3344 30.0315L18.8356 27.9519L20.6004 8.18164H11.3344V30.0315Z" fill="#8B3DFF" />
                                 <path
                                    d="M11.3344 16.7635H7.57909L7.31974 13.8575H11.3344V11.0195H4.21826L4.28619 11.7809L4.98369 19.6014H11.3344V16.7635ZM11.3344 24.1339L11.322 24.1372L8.16135 23.2838L7.9593 21.0204H5.11049L5.50808 25.4763L11.3213 27.0901L11.3344 27.0865V24.1339Z"
                                    fill="#EBEBEB" />
                                 <path
                                    d="M2.10907 0.00146484H3.55125V1.42634H4.87051V0.00146484H6.31276V4.31633H4.87057V2.87146H3.55132V4.31633H2.10919V0.00146484H2.10907ZM8.20928 1.43234H6.9397V0.00146484H10.9218V1.43234H9.65165V4.31633H8.2094L8.20928 1.43234ZM11.5538 0.00146484H13.0575L13.9826 1.51758L14.9067 0.00146484H16.4111V4.31633H14.9749V2.17765L13.9826 3.71182H13.9579L12.9649 2.17765V4.31633H11.5539V0.00146484H11.5538ZM17.1289 0.00146484H18.5715V2.89008H20.5996V4.31633H17.1289V0.00146484Z"
                                    fill="#8B3DFF" />
                                 <path
                                    d="M11.3246 16.7635V19.6014H14.8191L14.4897 23.2819L11.3246 24.1362V27.0887L17.1424 25.4763L17.1851 24.9969L17.852 17.5256L17.9212 16.7635H17.1565H11.3246ZM11.3246 11.0195V13.8575H18.1795L18.2364 13.2196L18.3657 11.7809L18.4336 11.0195H11.3246Z"
                                    fill="white" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_1699_502">
                                    <rect width="22.6688" height="32" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>

                        <div>
                           <h4 class="mb-2">W3C Valid HTML Code</h4>
                           <p>
                              All HTML files are checked via the W3C validator to ensure 100% valid code. As you probably know invalid HTML limits innovation, but Block is innovative at its core.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-12" data-cue="slideInLeft">
                     <div class="d-flex flex-column gap-4">
                        <div>
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <g clip-path="url(#clip0_1699_570)">
                                 <path d="M0 0H32V32H0V0Z" fill="#8B3DFF" />
                                 <path
                                    d="M29.381 24.3679C29.1468 22.9079 28.1947 21.682 25.3749 20.5383C24.3954 20.0881 23.3034 19.7657 22.9779 19.0235C22.8624 18.5915 22.8471 18.3482 22.9201 18.0866C23.13 17.2379 24.143 16.9733 24.946 17.2166C25.4631 17.39 25.9528 17.7885 26.2479 18.4242C27.6289 17.53 27.6259 17.536 28.5901 16.9216C28.2373 16.3741 28.0487 16.1216 27.8175 15.8874C26.9871 14.9596 25.8555 14.482 24.0456 14.5185C23.7323 14.5581 23.416 14.6006 23.1027 14.6402C22.1993 14.8684 21.3384 15.3429 20.8335 15.9786C19.3186 17.6973 19.7506 20.7056 21.5939 21.9436C23.4099 23.3064 26.0776 23.6166 26.4182 24.8912C26.7498 26.4516 25.2715 26.9565 23.8023 26.7771C22.7194 26.552 22.1171 26.0014 21.4662 25.0007C20.2677 25.6942 20.2677 25.6942 19.0358 26.403C19.3278 27.0417 19.635 27.3307 20.1247 27.8843C22.4426 30.2357 28.2433 30.1201 29.2837 26.5611C29.3262 26.4394 29.6061 25.6242 29.381 24.3679ZM17.3962 14.7071H14.403C14.403 17.2927 14.3909 19.86 14.3909 22.4455C14.3909 24.0911 14.4761 25.5999 14.2084 26.0622C13.7704 26.9717 12.6358 26.8592 12.1187 26.6827C11.5924 26.4242 11.3247 26.0561 11.0145 25.536C10.9293 25.387 10.8654 25.2714 10.8441 25.2622C10.032 25.7581 9.22281 26.2569 8.41064 26.7527C8.81524 27.5832 9.4114 28.3041 10.1749 28.7725C11.3156 29.4569 12.8487 29.6668 14.4517 29.2987C15.4951 28.9945 16.3954 28.3649 16.8669 27.4067C17.5483 26.1505 17.4023 24.6295 17.3962 22.9474C17.4114 20.2037 17.3962 17.46 17.3962 14.7071Z"
                                    fill="#F8FAFC" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_1699_570">
                                    <rect width="32" height="32" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>

                        <div>
                           <h4 class="mb-2">Future Proof Java-Script</h4>
                           <p>Say jQuery to NO! With the block we build a complete vanilla. js code for all the pages.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-12" data-cue="zoomIn">
                     <div class="d-flex flex-column gap-4">
                        <div>
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <path
                                 opacity="0.2"
                                 d="M26 6V27C26 27.2652 25.8946 27.5196 25.7071 27.7071C25.5196 27.8946 25.2652 28 25 28H7C6.73478 28 6.48043 27.8946 6.29289 27.7071C6.10536 27.5196 6 27.2652 6 27V6C6 5.73478 6.10536 5.48043 6.29289 5.29289C6.48043 5.10536 6.73478 5 7 5H12C11.3495 5.86476 10.9985 6.9179 11 8V9H21V8C21.0015 6.9179 20.6505 5.86476 20 5H25C25.2652 5 25.5196 5.10536 25.7071 5.29289C25.8946 5.48043 26 5.73478 26 6Z"
                                 fill="#8B3DFF" />
                              <path
                                 d="M21 19.0001C21 19.2653 20.8946 19.5196 20.7071 19.7072C20.5196 19.8947 20.2652 20.0001 20 20.0001H12C11.7348 20.0001 11.4804 19.8947 11.2929 19.7072C11.1054 19.5196 11 19.2653 11 19.0001C11 18.7348 11.1054 18.4805 11.2929 18.293C11.4804 18.1054 11.7348 18.0001 12 18.0001H20C20.2652 18.0001 20.5196 18.1054 20.7071 18.293C20.8946 18.4805 21 18.7348 21 19.0001ZM20 14.0001H12C11.7348 14.0001 11.4804 14.1054 11.2929 14.293C11.1054 14.4805 11 14.7348 11 15.0001C11 15.2653 11.1054 15.5196 11.2929 15.7072C11.4804 15.8947 11.7348 16.0001 12 16.0001H20C20.2652 16.0001 20.5196 15.8947 20.7071 15.7072C20.8946 15.5196 21 15.2653 21 15.0001C21 14.7348 20.8946 14.4805 20.7071 14.293C20.5196 14.1054 20.2652 14.0001 20 14.0001ZM27 6.00006V27.0001C27 27.5305 26.7893 28.0392 26.4142 28.4143C26.0391 28.7893 25.5304 29.0001 25 29.0001H7C6.46957 29.0001 5.96086 28.7893 5.58579 28.4143C5.21071 28.0392 5 27.5305 5 27.0001V6.00006C5 5.46963 5.21071 4.96092 5.58579 4.58585C5.96086 4.21078 6.46957 4.00006 7 4.00006H11.5325C12.0944 3.37097 12.7828 2.86763 13.5527 2.52301C14.3225 2.17839 15.1565 2.00024 16 2.00024C16.8435 2.00024 17.6775 2.17839 18.4473 2.52301C19.2172 2.86763 19.9056 3.37097 20.4675 4.00006H25C25.5304 4.00006 26.0391 4.21078 26.4142 4.58585C26.7893 4.96092 27 5.46963 27 6.00006ZM12 8.00006H20C20 6.9392 19.5786 5.92178 18.8284 5.17164C18.0783 4.42149 17.0609 4.00006 16 4.00006C14.9391 4.00006 13.9217 4.42149 13.1716 5.17164C12.4214 5.92178 12 6.9392 12 8.00006ZM25 6.00006H21.6562C21.8837 6.64233 22 7.3187 22 8.00006V9.00006C22 9.26528 21.8946 9.51963 21.7071 9.70717C21.5196 9.89471 21.2652 10.0001 21 10.0001H11C10.7348 10.0001 10.4804 9.89471 10.2929 9.70717C10.1054 9.51963 10 9.26528 10 9.00006V8.00006C10 7.3187 10.1163 6.64233 10.3438 6.00006H7V27.0001H25V6.00006Z"
                                 fill="#8B3DFF" />
                           </svg>
                        </div>

                        <div>
                           <h4 class="mb-2">Extensive Docs</h4>
                           <p>Block theme documentation helps developers, It has a theme installation workflow and how to use it for your purpose and easy copy and paste snippets.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-12" data-cue="slideInRight">
                     <div class="d-flex flex-column gap-4">
                        <div>
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <path
                                 opacity="0.2"
                                 d="M25 8V10H22C21.4696 10 20.9609 10.2107 20.5858 10.5858C20.2107 10.9609 20 11.4696 20 12V22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H23C23.5304 6 24.0391 6.21071 24.4142 6.58579C24.7893 6.96086 25 7.46957 25 8Z"
                                 fill="#8B3DFF" />
                              <path
                                 d="M28 9H26V8C26 7.20435 25.6839 6.44129 25.1213 5.87868C24.5587 5.31607 23.7956 5 23 5H5C4.20435 5 3.44129 5.31607 2.87868 5.87868C2.31607 6.44129 2 7.20435 2 8V20C2 20.7956 2.31607 21.5587 2.87868 22.1213C3.44129 22.6839 4.20435 23 5 23H19V24C19 24.7956 19.3161 25.5587 19.8787 26.1213C20.4413 26.6839 21.2044 27 22 27H28C28.7956 27 29.5587 26.6839 30.1213 26.1213C30.6839 25.5587 31 24.7956 31 24V12C31 11.2044 30.6839 10.4413 30.1213 9.87868C29.5587 9.31607 28.7956 9 28 9ZM5 21C4.73478 21 4.48043 20.8946 4.29289 20.7071C4.10536 20.5196 4 20.2652 4 20V8C4 7.73478 4.10536 7.48043 4.29289 7.29289C4.48043 7.10536 4.73478 7 5 7H23C23.2652 7 23.5196 7.10536 23.7071 7.29289C23.8946 7.48043 24 7.73478 24 8V9H22C21.2044 9 20.4413 9.31607 19.8787 9.87868C19.3161 10.4413 19 11.2044 19 12V21H5ZM29 24C29 24.2652 28.8946 24.5196 28.7071 24.7071C28.5196 24.8946 28.2652 25 28 25H22C21.7348 25 21.4804 24.8946 21.2929 24.7071C21.1054 24.5196 21 24.2652 21 24V12C21 11.7348 21.1054 11.4804 21.2929 11.2929C21.4804 11.1054 21.7348 11 22 11H28C28.2652 11 28.5196 11.1054 28.7071 11.2929C28.8946 11.4804 29 11.7348 29 12V24ZM17 26C17 26.2652 16.8946 26.5196 16.7071 26.7071C16.5196 26.8946 16.2652 27 16 27H11C10.7348 27 10.4804 26.8946 10.2929 26.7071C10.1054 26.5196 10 26.2652 10 26C10 25.7348 10.1054 25.4804 10.2929 25.2929C10.4804 25.1054 10.7348 25 11 25H16C16.2652 25 16.5196 25.1054 16.7071 25.2929C16.8946 25.4804 17 25.7348 17 26ZM27 14C27 14.2652 26.8946 14.5196 26.7071 14.7071C26.5196 14.8946 26.2652 15 26 15H24C23.7348 15 23.4804 14.8946 23.2929 14.7071C23.1054 14.5196 23 14.2652 23 14C23 13.7348 23.1054 13.4804 23.2929 13.2929C23.4804 13.1054 23.7348 13 24 13H26C26.2652 13 26.5196 13.1054 26.7071 13.2929C26.8946 13.4804 27 13.7348 27 14Z"
                                 fill="#8B3DFF" />
                           </svg>
                        </div>

                        <div>
                           <h4 class="mb-2">Mobile friendly website</h4>
                           <p>Block is Mobile friendly, Designing websites to be mobile friendly ensures that your pages perform well on all devices.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-12" data-cue="slideInLeft">
                     <div class="d-flex flex-column gap-4">
                        <div>
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <path
                                 opacity="0.2"
                                 d="M11 25.0001V16.8588L16.5462 21.7226L12.72 25.6926C12.5817 25.836 12.4038 25.9349 12.209 25.9765C12.0141 26.0182 11.8113 26.0006 11.6265 25.9262C11.4417 25.8518 11.2833 25.7239 11.1717 25.5589C11.0601 25.3939 11.0003 25.1993 11 25.0001ZM28.8287 4.00883L3.5 13.9226C3.34274 13.9831 3.20935 14.093 3.11986 14.2358C3.03038 14.3786 2.98962 14.5465 3.0037 14.7145C3.01779 14.8824 3.08596 15.0412 3.19799 15.1671C3.31002 15.293 3.45985 15.3791 3.625 15.4126L11 16.8588L29 4.15258C29.0054 4.13 29.0044 4.10637 28.9971 4.08433C28.9898 4.06229 28.9766 4.04272 28.9588 4.02779C28.941 4.01287 28.9194 4.00319 28.8965 3.99984C28.8735 3.99649 28.85 3.9996 28.8287 4.00883Z"
                                 fill="#8B3DFF" />
                              <path
                                 d="M29.61 3.27376C29.4551 3.13997 29.2666 3.051 29.0648 3.01641C28.863 2.98183 28.6556 3.00296 28.465 3.07751L3.1325 12.9913C2.77348 13.1309 2.46952 13.3833 2.2664 13.7106C2.06328 14.0379 1.97197 14.4224 2.00624 14.806C2.0405 15.1897 2.19848 15.5519 2.45639 15.838C2.71429 16.1241 3.05817 16.3187 3.43625 16.3925L10 17.6813V25C9.9987 25.3987 10.1172 25.7885 10.34 26.119C10.5629 26.4496 10.8799 26.7055 11.25 26.8538C11.6195 27.0046 12.0258 27.0409 12.4162 26.9577C12.8065 26.8746 13.1628 26.6759 13.4387 26.3875L16.6037 23.105L21.625 27.5C21.9873 27.8213 22.4545 27.9992 22.9387 28C23.1509 27.9998 23.3618 27.9665 23.5637 27.9013C23.8937 27.7966 24.1904 27.6073 24.4244 27.3522C24.6584 27.0971 24.8215 26.7852 24.8975 26.4475L29.9712 4.37501C30.0166 4.17595 30.007 3.96829 29.9433 3.77429C29.8797 3.58029 29.7645 3.40727 29.61 3.27376ZM21.9675 7.77376L10.7687 15.7938L4.5675 14.5775L21.9675 7.77376ZM12 25V19.065L15.0987 21.7825L12 25ZM22.9412 26L12.6062 16.9375L27.4812 6.27626L22.9412 26Z"
                                 fill="#8B3DFF" />
                           </svg>
                        </div>

                        <div>
                           <h4 class="mb-2">Kick-Start Your Development</h4>
                           <p>Full task automation. Start your development process fast and easy with Node.js and Gulp setup. Configuration files are included.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-12" data-cue="zoomIn">
                     <div class="d-flex flex-column gap-4">
                        <div>
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <path
                                 opacity="0.2"
                                 d="M23 16C23 17.3845 22.5895 18.7378 21.8203 19.889C21.0511 21.0401 19.9579 21.9373 18.6788 22.4672C17.3997 22.997 15.9922 23.1356 14.6344 22.8655C13.2765 22.5954 12.0292 21.9287 11.0503 20.9497C10.0713 19.9708 9.4046 18.7235 9.13451 17.3656C8.86441 16.0078 9.00303 14.6003 9.53285 13.3212C10.0627 12.0421 10.9599 10.9489 12.111 10.1797C13.2622 9.41054 14.6155 9 16 9C17.8565 9 19.637 9.7375 20.9497 11.0503C22.2625 12.363 23 14.1435 23 16Z"
                                 fill="#8B3DFF" />
                              <path
                                 d="M15 5V4C15 3.73478 15.1054 3.48043 15.2929 3.29289C15.4804 3.10536 15.7348 3 16 3C16.2652 3 16.5196 3.10536 16.7071 3.29289C16.8946 3.48043 17 3.73478 17 4V5C17 5.26522 16.8946 5.51957 16.7071 5.70711C16.5196 5.89464 16.2652 6 16 6C15.7348 6 15.4804 5.89464 15.2929 5.70711C15.1054 5.51957 15 5.26522 15 5ZM24 16C24 17.5823 23.5308 19.129 22.6518 20.4446C21.7727 21.7602 20.5233 22.7855 19.0615 23.391C17.5997 23.9965 15.9911 24.155 14.4393 23.8463C12.8874 23.5376 11.462 22.7757 10.3431 21.6569C9.22433 20.538 8.4624 19.1126 8.15372 17.5607C7.84504 16.0089 8.00346 14.4003 8.60896 12.9385C9.21447 11.4767 10.2398 10.2273 11.5554 9.34824C12.871 8.46919 14.4177 8 16 8C18.121 8.00232 20.1545 8.84591 21.6543 10.3457C23.1541 11.8455 23.9977 13.879 24 16ZM22 16C22 14.8133 21.6481 13.6533 20.9888 12.6666C20.3295 11.6799 19.3925 10.9108 18.2961 10.4567C17.1997 10.0026 15.9933 9.88378 14.8295 10.1153C13.6656 10.3468 12.5965 10.9182 11.7574 11.7574C10.9182 12.5965 10.3468 13.6656 10.1153 14.8295C9.88378 15.9933 10.0026 17.1997 10.4567 18.2961C10.9108 19.3925 11.6799 20.3295 12.6666 20.9888C13.6533 21.6481 14.8133 22 16 22C17.5908 21.9983 19.116 21.3657 20.2408 20.2408C21.3657 19.116 21.9983 17.5908 22 16ZM7.2925 8.7075C7.48014 8.89514 7.73464 9.00056 8 9.00056C8.26536 9.00056 8.51986 8.89514 8.7075 8.7075C8.89514 8.51986 9.00056 8.26536 9.00056 8C9.00056 7.73464 8.89514 7.48014 8.7075 7.2925L7.7075 6.2925C7.51986 6.10486 7.26536 5.99944 7 5.99944C6.73464 5.99944 6.48014 6.10486 6.2925 6.2925C6.10486 6.48014 5.99944 6.73464 5.99944 7C5.99944 7.26536 6.10486 7.51986 6.2925 7.7075L7.2925 8.7075ZM7.2925 23.2925L6.2925 24.2925C6.10486 24.4801 5.99944 24.7346 5.99944 25C5.99944 25.2654 6.10486 25.5199 6.2925 25.7075C6.48014 25.8951 6.73464 26.0006 7 26.0006C7.26536 26.0006 7.51986 25.8951 7.7075 25.7075L8.7075 24.7075C8.80041 24.6146 8.87411 24.5043 8.92439 24.3829C8.97468 24.2615 9.00056 24.1314 9.00056 24C9.00056 23.8686 8.97468 23.7385 8.92439 23.6171C8.87411 23.4957 8.80041 23.3854 8.7075 23.2925C8.61459 23.1996 8.50429 23.1259 8.3829 23.0756C8.2615 23.0253 8.13139 22.9994 8 22.9994C7.86861 22.9994 7.7385 23.0253 7.6171 23.0756C7.49571 23.1259 7.38541 23.1996 7.2925 23.2925ZM24 9C24.1314 9.0001 24.2615 8.97432 24.3829 8.92414C24.5042 8.87395 24.6146 8.80033 24.7075 8.7075L25.7075 7.7075C25.8951 7.51986 26.0006 7.26536 26.0006 7C26.0006 6.73464 25.8951 6.48014 25.7075 6.2925C25.5199 6.10486 25.2654 5.99944 25 5.99944C24.7346 5.99944 24.4801 6.10486 24.2925 6.2925L23.2925 7.2925C23.1525 7.43236 23.0571 7.61061 23.0185 7.80469C22.9798 7.99878 22.9996 8.19997 23.0754 8.38279C23.1511 8.56561 23.2794 8.72185 23.444 8.83172C23.6086 8.94159 23.8021 9.00016 24 9ZM24.7075 23.2925C24.5199 23.1049 24.2654 22.9994 24 22.9994C23.7346 22.9994 23.4801 23.1049 23.2925 23.2925C23.1049 23.4801 22.9994 23.7346 22.9994 24C22.9994 24.2654 23.1049 24.5199 23.2925 24.7075L24.2925 25.7075C24.3854 25.8004 24.4957 25.8741 24.6171 25.9244C24.7385 25.9747 24.8686 26.0006 25 26.0006C25.1314 26.0006 25.2615 25.9747 25.3829 25.9244C25.5043 25.8741 25.6146 25.8004 25.7075 25.7075C25.8004 25.6146 25.8741 25.5043 25.9244 25.3829C25.9747 25.2615 26.0006 25.1314 26.0006 25C26.0006 24.8686 25.9747 24.7385 25.9244 24.6171C25.8741 24.4957 25.8004 24.3854 25.7075 24.2925L24.7075 23.2925ZM5 15H4C3.73478 15 3.48043 15.1054 3.29289 15.2929C3.10536 15.4804 3 15.7348 3 16C3 16.2652 3.10536 16.5196 3.29289 16.7071C3.48043 16.8946 3.73478 17 4 17H5C5.26522 17 5.51957 16.8946 5.70711 16.7071C5.89464 16.5196 6 16.2652 6 16C6 15.7348 5.89464 15.4804 5.70711 15.2929C5.51957 15.1054 5.26522 15 5 15ZM16 26C15.7348 26 15.4804 26.1054 15.2929 26.2929C15.1054 26.4804 15 26.7348 15 27V28C15 28.2652 15.1054 28.5196 15.2929 28.7071C15.4804 28.8946 15.7348 29 16 29C16.2652 29 16.5196 28.8946 16.7071 28.7071C16.8946 28.5196 17 28.2652 17 28V27C17 26.7348 16.8946 26.4804 16.7071 26.2929C16.5196 26.1054 16.2652 26 16 26ZM28 15H27C26.7348 15 26.4804 15.1054 26.2929 15.2929C26.1054 15.4804 26 15.7348 26 16C26 16.2652 26.1054 16.5196 26.2929 16.7071C26.4804 16.8946 26.7348 17 27 17H28C28.2652 17 28.5196 16.8946 28.7071 16.7071C28.8946 16.5196 29 16.2652 29 16C29 15.7348 28.8946 15.4804 28.7071 15.2929C28.5196 15.1054 28.2652 15 28 15Z"
                                 fill="#8B3DFF" />
                           </svg>
                        </div>

                        <div>
                           <h4 class="mb-2">Light/ Dark Mode</h4>
                           <p>Block theme pages also come with the light / dark mode. All components include a dark variant that lets you style your site differently when dark mode is enabled.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-12" data-cue="slideInRight">
                     <div class="d-flex flex-column gap-4">
                        <div>
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <path
                                 opacity="0.2"
                                 d="M24.485 24.4849L19.535 19.5349C20.4723 18.5973 20.9989 17.3257 20.9989 15.9999C20.9989 14.6741 20.4723 13.4025 19.535 12.4649L24.485 7.51489C26.7353 9.76531 27.9994 12.8174 27.9994 15.9999C27.9994 19.1824 26.7353 22.2345 24.485 24.4849ZM7.51499 7.51489C5.26472 9.76531 4.00055 12.8174 4.00055 15.9999C4.00055 19.1824 5.26472 22.2345 7.51499 24.4849L12.465 19.5349C11.5276 18.5973 11.0011 17.3257 11.0011 15.9999C11.0011 14.6741 11.5276 13.4025 12.465 12.4649L7.51499 7.51489Z"
                                 fill="#8B3DFF" />
                              <path
                                 d="M16 3C13.4288 3 10.9154 3.76244 8.77759 5.1909C6.63975 6.61935 4.97351 8.64968 3.98957 11.0251C3.00563 13.4006 2.74819 16.0144 3.2498 18.5362C3.75141 21.0579 4.98953 23.3743 6.80762 25.1924C8.6257 27.0105 10.9421 28.2486 13.4638 28.7502C15.9856 29.2518 18.5995 28.9944 20.9749 28.0104C23.3503 27.0265 25.3807 25.3603 26.8091 23.2224C28.2376 21.0846 29 18.5712 29 16C28.9964 12.5533 27.6256 9.24882 25.1884 6.81163C22.7512 4.37445 19.4467 3.00364 16 3ZM20.8875 19.4737C21.611 18.4599 21.9999 17.2455 21.9999 16C21.9999 14.7545 21.611 13.5401 20.8875 12.5262L24.45 8.965C26.0976 10.939 27.0001 13.4287 27.0001 16C27.0001 18.5713 26.0976 21.061 24.45 23.035L20.8875 19.4737ZM12 16C12 15.2089 12.2346 14.4355 12.6741 13.7777C13.1137 13.1199 13.7384 12.6072 14.4693 12.3045C15.2002 12.0017 16.0044 11.9225 16.7804 12.0769C17.5563 12.2312 18.269 12.6122 18.8284 13.1716C19.3878 13.731 19.7688 14.4437 19.9231 15.2196C20.0775 15.9956 19.9983 16.7998 19.6955 17.5307C19.3928 18.2616 18.8801 18.8864 18.2223 19.3259C17.5645 19.7654 16.7911 20 16 20C14.9391 20 13.9217 19.5786 13.1716 18.8284C12.4214 18.0783 12 17.0609 12 16ZM23.035 7.55L19.4738 11.1125C18.4599 10.389 17.2455 10.0001 16 10.0001C14.7545 10.0001 13.5401 10.389 12.5263 11.1125L8.96501 7.55C10.939 5.90237 13.4287 4.99988 16 4.99988C18.5713 4.99988 21.061 5.90237 23.035 7.55ZM7.55001 8.965L11.1125 12.5262C10.389 13.5401 10.0001 14.7545 10.0001 16C10.0001 17.2455 10.389 18.4599 11.1125 19.4737L7.55001 23.035C5.90238 21.061 4.99988 18.5713 4.99988 16C4.99988 13.4287 5.90238 10.939 7.55001 8.965ZM8.96501 24.45L12.5263 20.8875C13.5401 21.611 14.7545 21.9999 16 21.9999C17.2455 21.9999 18.4599 21.611 19.4738 20.8875L23.035 24.45C21.061 26.0976 18.5713 27.0001 16 27.0001C13.4287 27.0001 10.939 26.0976 8.96501 24.45Z"
                                 fill="#8B3DFF" />
                           </svg>
                        </div>

                        <div>
                           <h4 class="mb-2">Active Support</h4>
                           <p>
                              Our support team helps you solve any issues you have in working with Block them. To get help from our team,
                              <a href="#">Contact us.</a>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--More block theme end-->

      <!--Call to action start-->
      <section class="py-5 bg-light-subtle" data-cue="fadeIn">
         <div class="container my-lg-7" data-cues="zoomIn">
            <div class="row justify-content-center text-center">
               <div class="col-lg-6 col-md-9 col-12 d-flex flex-column gap-4">
                  <div>
                     <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                        <path opacity="0.2" d="M42 18L27.2719 28.5H20.7281L6 18L24 6L42 18Z" fill="#8B3DFF" />
                        <path
                           d="M42.8325 16.7512L24.8325 4.75125C24.586 4.58679 24.2963 4.49902 24 4.49902C23.7037 4.49902 23.414 4.58679 23.1675 4.75125L5.1675 16.7512C4.96202 16.8883 4.79358 17.0741 4.67713 17.2919C4.56068 17.5098 4.49984 17.753 4.5 18V37.5C4.5 38.2956 4.81607 39.0587 5.37868 39.6213C5.94129 40.1839 6.70435 40.5 7.5 40.5H40.5C41.2957 40.5 42.0587 40.1839 42.6213 39.6213C43.1839 39.0587 43.5 38.2956 43.5 37.5V18C43.5002 17.753 43.4393 17.5098 43.3229 17.2919C43.2064 17.0741 43.038 16.8883 42.8325 16.7512ZM18.135 28.5L7.5 36V20.9119L18.135 28.5ZM21.2044 30H26.7956L37.4137 37.5H10.5862L21.2044 30ZM29.865 28.5L40.5 20.9119V36L29.865 28.5ZM24 7.80187L39.3581 18.0412L26.7956 27H21.2081L8.64563 18.0412L24 7.80187Z"
                           fill="#8B3DFF" />
                     </svg>
                  </div>
                  <div>
                     <h2 class="fs-1">Subscribe to our newsletter</h2>
                     <p class="mb-0">Enjoy using Block Template and stay tuned for the latest updates and news.</p>
                  </div>
                  <div>
                     <form
                        class="row g-2 d-flex mx-lg-7"
                        action="https://codescandy.us1.list-manage.com/subscribe/post?u=b838b4eb099ebf09c3407db0f&amp;id=b01fb647c7&amp;f_id=00e5e0e5f0"
                        method="post"
                        name="mc-embedded-subscribe-form"
                        novalidate>
                        <div class="col-md-9 col-12">
                           <label for="notificationEmail" class="visually-hidden"></label>
                           <input type="email" id="notificationEmail" class="form-control" name="EMAIL" placeholder="Email" required="" />
                           <div class="invalid-feedback text-start">Email.</div>
                        </div>
                        <div class="col-md-3 col-12">
                           <div class="d-grid">
                              <button class="btn btn-dark" type="submit" name="subscribe">Subscribe</button>
                           </div>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups -->
                        <div style="position: absolute; left: -5000px" aria-hidden="true">
                           <input class="subscription-form-antispam" type="text" name="b_b838b4eb099ebf09c3407db0f_b01fb647c7" tabindex="-1" />
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Call to action end-->
   </main>
@endsection


