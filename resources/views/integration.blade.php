@extends('layout.mainlayout_admin')

@section('content')
   <main>
      <div class="pattern-square"></div>
      <!--Featured start-->
      <section class="py-5 py-lg-8">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                  <div class="text-center mb-8">
                     <h1>Dozens of apps. Endless possibilities.</h1>
                     <p class="mb-0">Extend and automate your workflow by using integrations for your favorite tools.</p>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-lg-3 col-12 d-flex flex-column gap-5">
                  <form class="position-relative">
                     <label for="searchInput" class="form-label visually-hidden">Search</label>
                     <input type="search" class="form-control ps-6" id="searchInput" />
                     <button type="submit" class="btn position-absolute top-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                           <path
                              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                     </button>
                  </form>
                  <div class="d-flex flex-column gap-2">
                     <h4>Categories</h4>
                     <ul class="d-flex flex-column gap-2">
                        <li><a href="#" class="text-reset">CMS</a></li>
                        <li><a href="#" class="text-reset">Commerce</a></li>
                        <li><a href="#" class="text-reset">Databases</a></li>
                        <li><a href="#" class="text-reset">DevTools</a></li>
                        <li><a href="#" class="text-reset">Logging</a></li>
                        <li><a href="#" class="text-reset">Messaging</a></li>
                        <li><a href="#" class="text-reset">Code Repository</a></li>
                     </ul>
                  </div>
                  <div class="d-flex flex-column gap-2 border rounded-3 p-4">
                     <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none" class="mb-3">
                           <path
                              opacity="0.2"
                              d="M29.5 16C29.5 17.5638 27.2725 18.7438 26.665 20.2113C26.08 21.6263 26.8425 24.0425 25.6925 25.1925C24.5425 26.3425 22.1263 25.58 20.7113 26.165C19.25 26.7725 18.0625 29 16.5 29C14.9375 29 13.75 26.7725 12.2887 26.165C10.8737 25.58 8.4575 26.3425 7.3075 25.1925C6.1575 24.0425 6.92 21.6263 6.335 20.2113C5.7275 18.75 3.5 17.5625 3.5 16C3.5 14.4375 5.7275 13.25 6.335 11.7887C6.92 10.375 6.1575 7.9575 7.3075 6.8075C8.4575 5.6575 10.875 6.42 12.2887 5.835C13.7562 5.2275 14.9375 3 16.5 3C18.0625 3 19.25 5.2275 20.7113 5.835C22.1263 6.42 24.5425 5.6575 25.6925 6.8075C26.8425 7.9575 26.08 10.3737 26.665 11.7887C27.2725 13.2562 29.5 14.4375 29.5 16Z"
                              fill="var(--bs-primary)" />
                           <path
                              d="M28.7325 12.8525C28.2612 12.36 27.7738 11.8525 27.59 11.4062C27.42 10.9975 27.41 10.32 27.4 9.66375C27.3813 8.44375 27.3612 7.06125 26.4 6.1C25.4387 5.13875 24.0562 5.11875 22.8363 5.1C22.18 5.09 21.5025 5.08 21.0938 4.91C20.6488 4.72625 20.14 4.23875 19.6475 3.7675C18.785 2.93875 17.805 2 16.5 2C15.195 2 14.2162 2.93875 13.3525 3.7675C12.86 4.23875 12.3525 4.72625 11.9062 4.91C11.5 5.08 10.82 5.09 10.1637 5.1C8.94375 5.11875 7.56125 5.13875 6.6 6.1C5.63875 7.06125 5.625 8.44375 5.6 9.66375C5.59 10.32 5.58 10.9975 5.41 11.4062C5.22625 11.8512 4.73875 12.36 4.2675 12.8525C3.43875 13.715 2.5 14.695 2.5 16C2.5 17.305 3.43875 18.2837 4.2675 19.1475C4.73875 19.64 5.22625 20.1475 5.41 20.5938C5.58 21.0025 5.59 21.68 5.6 22.3363C5.61875 23.5562 5.63875 24.9387 6.6 25.9C7.56125 26.8612 8.94375 26.8813 10.1637 26.9C10.82 26.91 11.4975 26.92 11.9062 27.09C12.3512 27.2738 12.86 27.7612 13.3525 28.2325C14.215 29.0613 15.195 30 16.5 30C17.805 30 18.7837 29.0613 19.6475 28.2325C20.14 27.7612 20.6475 27.2738 21.0938 27.09C21.5025 26.92 22.18 26.91 22.8363 26.9C24.0562 26.8813 25.4387 26.8612 26.4 25.9C27.3612 24.9387 27.3813 23.5562 27.4 22.3363C27.41 21.68 27.42 21.0025 27.59 20.5938C27.7738 20.1488 28.2612 19.64 28.7325 19.1475C29.5613 18.285 30.5 17.305 30.5 16C30.5 14.695 29.5613 13.7162 28.7325 12.8525ZM27.2887 17.7638C26.69 18.3888 26.07 19.035 25.7412 19.8288C25.4262 20.5913 25.4125 21.4625 25.4 22.3062C25.3875 23.1812 25.3738 24.0975 24.985 24.485C24.5963 24.8725 23.6862 24.8875 22.8062 24.9C21.9625 24.9125 21.0913 24.9262 20.3288 25.2412C19.535 25.57 18.8888 26.19 18.2638 26.7887C17.6388 27.3875 17 28 16.5 28C16 28 15.3562 27.385 14.7362 26.7887C14.1163 26.1925 13.465 25.57 12.6713 25.2412C11.9088 24.9262 11.0375 24.9125 10.1938 24.9C9.31875 24.8875 8.4025 24.8738 8.015 24.485C7.6275 24.0963 7.6125 23.1862 7.6 22.3062C7.5875 21.4625 7.57375 20.5913 7.25875 19.8288C6.93 19.035 6.31 18.3888 5.71125 17.7638C5.1125 17.1388 4.5 16.5 4.5 16C4.5 15.5 5.115 14.8562 5.71125 14.2362C6.3075 13.6163 6.93 12.965 7.25875 12.1713C7.57375 11.4088 7.5875 10.5375 7.6 9.69375C7.6125 8.81875 7.62625 7.9025 8.015 7.515C8.40375 7.1275 9.31375 7.1125 10.1938 7.1C11.0375 7.0875 11.9088 7.07375 12.6713 6.75875C13.465 6.43 14.1112 5.81 14.7362 5.21125C15.3612 4.6125 16 4 16.5 4C17 4 17.6438 4.615 18.2638 5.21125C18.8838 5.8075 19.535 6.43 20.3288 6.75875C21.0913 7.07375 21.9625 7.0875 22.8062 7.1C23.6812 7.1125 24.5975 7.12625 24.985 7.515C25.3725 7.90375 25.3875 8.81375 25.4 9.69375C25.4125 10.5375 25.4262 11.4088 25.7412 12.1713C26.07 12.965 26.69 13.6112 27.2887 14.2362C27.8875 14.8612 28.5 15.5 28.5 16C28.5 16.5 27.885 17.1438 27.2887 17.7638ZM22.2075 12.2925C22.3005 12.3854 22.3742 12.4957 22.4246 12.6171C22.4749 12.7385 22.5008 12.8686 22.5008 13C22.5008 13.1314 22.4749 13.2615 22.4246 13.3829C22.3742 13.5043 22.3005 13.6146 22.2075 13.7075L15.2075 20.7075C15.1146 20.8005 15.0043 20.8742 14.8829 20.9246C14.7615 20.9749 14.6314 21.0008 14.5 21.0008C14.3686 21.0008 14.2385 20.9749 14.1171 20.9246C13.9957 20.8742 13.8854 20.8005 13.7925 20.7075L10.7925 17.7075C10.6049 17.5199 10.4994 17.2654 10.4994 17C10.4994 16.7346 10.6049 16.4801 10.7925 16.2925C10.9801 16.1049 11.2346 15.9994 11.5 15.9994C11.7654 15.9994 12.0199 16.1049 12.2075 16.2925L14.5 18.5863L20.7925 12.2925C20.8854 12.1995 20.9957 12.1258 21.1171 12.0754C21.2385 12.0251 21.3686 11.9992 21.5 11.9992C21.6314 11.9992 21.7615 12.0251 21.8829 12.0754C22.0043 12.1258 22.1146 12.1995 22.2075 12.2925Z"
                              fill="var(--bs-primary)" />
                        </svg>

                        <h4>Experts</h4>
                        <p class="mb-0">Explore our certified Block agency experts that build with Block.</p>
                     </div>
                  </div>
                  <div class="d-flex flex-column gap-2 border rounded-3 p-4">
                     <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none" class="mb-3">
                           <path
                              opacity="0.2"
                              d="M27.5 6H5.5C5.23478 6 4.98043 6.10536 4.79289 6.29289C4.60536 6.48043 4.5 6.73478 4.5 7V25C4.5 25.2652 4.60536 25.5196 4.79289 25.7071C4.98043 25.8946 5.23478 26 5.5 26H27.5C27.7652 26 28.0196 25.8946 28.2071 25.7071C28.3946 25.5196 28.5 25.2652 28.5 25V7C28.5 6.73478 28.3946 6.48043 28.2071 6.29289C28.0196 6.10536 27.7652 6 27.5 6ZM12.5 18C11.9067 18 11.3266 17.8241 10.8333 17.4944C10.3399 17.1648 9.95542 16.6962 9.72836 16.1481C9.5013 15.5999 9.44189 14.9967 9.55764 14.4147C9.6734 13.8328 9.95912 13.2982 10.3787 12.8787C10.7982 12.4591 11.3328 12.1734 11.9147 12.0576C12.4967 11.9419 13.0999 12.0013 13.6481 12.2284C14.1962 12.4554 14.6648 12.8399 14.9944 13.3333C15.3241 13.8266 15.5 14.4067 15.5 15C15.5 15.7956 15.1839 16.5587 14.6213 17.1213C14.0587 17.6839 13.2956 18 12.5 18Z"
                              fill="var(--bs-primary)" />
                           <path
                              d="M25.5 14C25.5 14.2652 25.3946 14.5196 25.2071 14.7071C25.0196 14.8946 24.7652 15 24.5 15H19.5C19.2348 15 18.9804 14.8946 18.7929 14.7071C18.6054 14.5196 18.5 14.2652 18.5 14C18.5 13.7348 18.6054 13.4804 18.7929 13.2929C18.9804 13.1054 19.2348 13 19.5 13H24.5C24.7652 13 25.0196 13.1054 25.2071 13.2929C25.3946 13.4804 25.5 13.7348 25.5 14ZM24.5 17H19.5C19.2348 17 18.9804 17.1054 18.7929 17.2929C18.6054 17.4804 18.5 17.7348 18.5 18C18.5 18.2652 18.6054 18.5196 18.7929 18.7071C18.9804 18.8946 19.2348 19 19.5 19H24.5C24.7652 19 25.0196 18.8946 25.2071 18.7071C25.3946 18.5196 25.5 18.2652 25.5 18C25.5 17.7348 25.3946 17.4804 25.2071 17.2929C25.0196 17.1054 24.7652 17 24.5 17ZM29.5 7V25C29.5 25.5304 29.2893 26.0391 28.9142 26.4142C28.5391 26.7893 28.0304 27 27.5 27H5.5C4.96957 27 4.46086 26.7893 4.08579 26.4142C3.71071 26.0391 3.5 25.5304 3.5 25V7C3.5 6.46957 3.71071 5.96086 4.08579 5.58579C4.46086 5.21071 4.96957 5 5.5 5H27.5C28.0304 5 28.5391 5.21071 28.9142 5.58579C29.2893 5.96086 29.5 6.46957 29.5 7ZM27.5 25V7H5.5V25H27.5ZM17.4675 20.75C17.5338 21.0069 17.4953 21.2797 17.3605 21.5082C17.2257 21.7368 17.0057 21.9024 16.7488 21.9688C16.4918 22.0351 16.2191 21.9966 15.9905 21.8618C15.762 21.727 15.5963 21.5069 15.53 21.25C15.2013 19.9675 13.8975 19 12.4987 19C11.1 19 9.7975 19.9675 9.4675 21.25C9.4012 21.5069 9.23554 21.727 9.00698 21.8618C8.77842 21.9966 8.50568 22.0351 8.24875 21.9688C7.99182 21.9024 7.77176 21.7368 7.63696 21.5082C7.50217 21.2797 7.4637 21.0069 7.53 20.75C7.8545 19.5422 8.62157 18.5007 9.67875 17.8325C9.11696 17.274 8.73363 16.5614 8.57736 15.7848C8.42109 15.0082 8.49891 14.2027 8.80096 13.4704C9.10301 12.7381 9.61568 12.112 10.274 11.6714C10.9323 11.2309 11.7066 10.9957 12.4987 10.9957C13.2909 10.9957 14.0652 11.2309 14.7235 11.6714C15.3818 12.112 15.8945 12.7381 16.1965 13.4704C16.4986 14.2027 16.5764 15.0082 16.4201 15.7848C16.2639 16.5614 15.8805 17.274 15.3188 17.8325C16.3771 18.4997 17.1448 19.5416 17.4688 20.75H17.4675ZM12.5 17C12.8956 17 13.2822 16.8827 13.6111 16.6629C13.94 16.4432 14.1964 16.1308 14.3478 15.7654C14.4991 15.3999 14.5387 14.9978 14.4616 14.6098C14.3844 14.2219 14.1939 13.8655 13.9142 13.5858C13.6345 13.3061 13.2781 13.1156 12.8902 13.0384C12.5022 12.9613 12.1001 13.0009 11.7346 13.1522C11.3692 13.3036 11.0568 13.56 10.8371 13.8889C10.6173 14.2178 10.5 14.6044 10.5 15C10.5 15.5304 10.7107 16.0391 11.0858 16.4142C11.4609 16.7893 11.9696 17 12.5 17Z"
                              fill="var(--bs-primary)" />
                        </svg>

                        <h4>Become a Partner</h4>
                        <p class="mb-0">Fill out a quick 30 second form to apply to become a partner.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 col-12">
                  <div class="row gy-4 mb-lg-8 mb-6">
                     <div class="col-md-12">
                        <h3 class="mb-0">Featured</h3>
                     </div>
                     <div class="col-md-4">
                        <a href="integration-single.html" class="card h-100 card-lift bg-gray-100">
                           <div class="card-body">
                              <div class="mb-4">
                                 <img src="assets/images/integration-logo/integration-logo-16.svg" alt="integration" />
                              </div>
                              <p class="mb-0">Receive order, billing and shipping information directly for your customers in Groove.</p>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4">
                        <a href="integration-single.html" class="card h-100 card-lift bg-gray-100">
                           <div class="card-body">
                              <div class="mb-4">
                                 <img src="assets/images/integration-logo/integration-logo-17.svg" alt="integration" />
                              </div>
                              <p class="mb-0">The Easiest Way to Deploy, Operate, and Scale MongoDB in the Cloud in Just a Few Clicks.</p>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4">
                        <a href="integration-single.html" class="card h-100 card-lift bg-gray-100">
                           <div class="card-body">
                              <div class="mb-4">
                                 <img src="assets/images/integration-logo/integration-logo-18.svg" alt="integration" />
                              </div>
                              <p class="mb-0">Make content your competitive advantage. Sanity Composable Content Cloud.</p>
                           </div>
                        </a>
                     </div>
                  </div>

                  <div class="row gy-4 mb-lg-8 mb-6">
                     <div class="col-md-12">
                        <h3 class="mb-0">Analytics</h3>
                     </div>
                     <div class="col-md-4">
                        <a href="integration-single.html" class="card h-100 card-lift bg-gray-100">
                           <div class="card-body">
                              <div class="mb-5 icon-xxl icon-shape rounded-circle border p-3 bg-white">
                                 <img src="assets/images/integration-logo/integrate-logo-10.svg" alt="integration" />
                              </div>

                              <h4>HubSpot</h4>
                              <p class="mb-0">Bring information about your customers straight into.</p>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4">
                        <a href="integration-single.html" class="card h-100 card-lift bg-gray-100">
                           <div class="card-body">
                              <div class="icon-shape icon-xxl rounded-circle border p-3 mb-5 bg-white">
                                 <img src="assets/images/integration-logo/integrate-logo-14.svg" alt="integration" />
                              </div>

                              <h4>Github</h4>
                              <p class="mb-0">Create new Github issues from your conversations.</p>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4">
                        <a href="integration-single.html" class="card h-100 card-lift bg-gray-100">
                           <div class="card-body">
                              <div class="mb-5 icon-xxl icon-shape rounded-circle border p-3 bg-white">
                                 <img src="assets/images/integration-logo/integrate-logo-15.svg" alt="integration" />
                              </div>

                              <h4>Dropbox</h4>
                              <p class="mb-0">Dropbox brings everything—traditional files.</p>
                           </div>
                        </a>
                     </div>
                  </div>

                  <div class="row gy-4 mb-lg-8 mb-6">
                     <div class="col-md-12">
                        <h3 class="mb-0">Productive</h3>
                     </div>
                     <div class="col-md-4">
                        <a href="integration-single.html" class="card h-100 card-lift bg-gray-100">
                           <div class="card-body">
                              <div class="d-flex align-items-center mb-4">
                                 <div class="icon-shape icon-lg border rounded p-3 bg-white">
                                    <img src="assets/images/integration-logo/integrate-logo-9.svg" alt="integration" />
                                 </div>
                                 <h4 class="mb-0 ms-3">Jira</h4>
                              </div>
                              <p class="mb-0">Create a new Jira issue from a Block conversation</p>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4">
                        <a href="integration-single.html" class="card h-100 card-lift bg-gray-100">
                           <div class="card-body">
                              <div class="d-flex align-items-center mb-4">
                                 <div class="icon-shape icon-lg border rounded p-3 bg-white">
                                    <img src="assets/images/integration-logo/integrate-logo-4.svg" alt="integration" />
                                 </div>
                                 <h4 class="mb-0 ms-3">Slack</h4>
                              </div>
                              <p class="mb-0">Messaging means business. Slack is built for work.</p>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4">
                        <a href="integration-single.html" class="card h-100 card-lift bg-gray-100">
                           <div class="card-body">
                              <div class="d-flex align-items-center mb-4">
                                 <div class="icon-shape icon-lg border rounded p-3 bg-white">
                                    <img src="assets/images/integration-logo/integrate-logo-2.svg" alt="integration" />
                                 </div>
                                 <h4 class="mb-0 ms-3">Zoom</h4>
                              </div>
                              <p class="mb-0">Workflows with Zoom's trusted collaboration tools</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Featured end-->
   </main>
@endsection
