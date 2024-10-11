<?php error_reporting(0);?>
<!-- Loader -->
@if(Route::is(['map-grid','map-list']))
<div id="loader">
    <div class="loader">
        <span></span>
        <span></span>
    </div>
</div>
@endif
<!-- /Loader  -->
<div class="main-wrapper">
    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{!!url('/')!!}" class="navbar-brand logo">
                    <img src="{!!url('assets/img/tellit.png')!!}" class="img-fluid" alt="Logo">
                </a>
            </div> 
            <ul class="nav header-navbar-rht">
                <li class="nav-item contact-item">
                    <div class="header-contact-img">
                        <i class="far fa-hospital"></i>							
                    </div>
                    <div class="header-contact-detail">
                        <p class="contact-header">Contact</p>
                        <p class="contact-info-header"> 0203 355 8081</p>
                    </div>
                </li>
                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow logged-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{!!(isset($userimg[0]) ? url($userimg[0]->destination.'/'.$userimg[0]->file) : url('assets_admin/img/patients/patient1.jpg'))!!}" width="31" alt="{!!isset($user_data[0]) ? $user_data[0]->firstname.' '.$user_data[0]->lastname : '' !!}">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{!!(isset($userimg[0]) ? url($userimg[0]->destination.'/'.$userimg[0]->file) : url('assets_admin/img/patients/patient1.jpg'))!!}" alt="{!!isset($user_data[0]) ? $user_data[0]->firstname.' '.$user_data[0]->lastname : '' !!}" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{!!isset($user_data[0]) ? $user_data[0]->firstname.' '.$user_data[0]->lastname : '' !!}</h6>
                                <p class="text-muted mb-0">Client</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{!!url('/')!!}">Dashboard</a>
                        <a class="dropdown-item" href="{!!url('client_profile')!!}">Profile Settings</a>
                        <a class="dropdown-item" href="{!!url('logout')!!}">Logout</a>
                    </div>
                </li>
                <!-- /User Menu -->
                @if(Route::is(['cart']))
                <li class="nav-item view-cart-header mr-3">
                    <a href="#" class="" id="cart"><i class="fas fa-shopping-cart"></i> <small class="unread-msg1">7</small></a>		<!-- Shopping Cart -->
                    <div class="shopping-cart">
                        <ul class="shopping-cart-items list-unstyled">
                            <li class="clearfix">
                                <div class="close-icon"><i class="far fa-times-circle"></i></div>
                                <img class="avatar-img rounded" src="assets/img/products/product.jpg" alt="User Image">
                                <span class="item-name">Benzaxapine Croplex</span>
                                <span class="item-price">$849.99</span>
                                <span class="item-quantity">Quantity: 01</span>
                            </li>

                            <li class="clearfix">
                                <div class="close-icon"><i class="far fa-times-circle"></i></div>
                                <img class="avatar-img rounded" src="assets/img/products/product1.jpg" alt="User Image">
                                <span class="item-name">Ombinazol Bonibamol</span>
                                <span class="item-price">$1,249.99</span>
                                <span class="item-quantity">Quantity: 01</span>
                            </li>

                            <li class="clearfix">
                                <div class="close-icon"><i class="far fa-times-circle"></i></div>
                                <img class="avatar-img rounded" src="assets/img/products/product2.jpg" alt="User Image">
                                <span class="item-name">Dantotate Dantodazole</span>
                                <span class="item-price">$129.99</span>
                                <span class="item-quantity">Quantity: 01</span>
                            </li>
                        </ul>
                        <div class="booking-summary pt-3">
                            <div class="booking-item-wrap">
                                <ul class="booking-date">
                                    <li>Subtotal <span>$5,877.00</span></li>
                                    <li>Shipping <span>$25.00</span></li>
                                    <li>Tax <span>$0.00</span></li>
                                    <li>Total <span>$5.2555</span></li>
                                </ul>
                                <div class="booking-total">
                                    <ul class="booking-total-list text-align">
                                        <li>
                                            <div class="clinic-booking pt-4">
                                                <a class="apt-btn" href="cart.html">View Card</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="clinic-booking pt-4">
                                                <a class="apt-btn" href="product-checkout.html">Checkout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Shopping Cart -->	
                </li>
                @endif
            </ul>
        </nav>
    </header>
    <!-- /Header -->