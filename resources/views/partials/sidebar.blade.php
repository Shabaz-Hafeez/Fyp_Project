 <div class="page-wrapper doctris-theme toggled">

     <nav id="sidebar" class="sidebar-wrapper">
         <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
             <div class="sidebar-brand">
                 <a href="index.html">
                     <img src="{{ asset('auth/assets/images/logo-dark.png')}}" height="22" class="logo-light-mode" alt="">
                     <img src="{{ asset('authassets/images/logo-light.png')}}" height="22" class="logo-dark-mode" alt="">
                     <span class="sidebar-colored">
                         <img src="{{ asset('auth/assets/images/logo-light.png')}}" height="22" alt="">
                     </span>
                 </a>
             </div>

             <ul class="sidebar-menu">
                 <li><a href="#"><i class="uil uil-dashboard me-2 d-inline-block"></i>Dashboard</a></li>

                 
                 <li><a href="appointment.html"><i class="uil uil-stethoscope me-2 d-inline-block"></i>Appointment</a>
                 </li>

                 <li class="sidebar-dropdown">
                     <a href="javascript:void(0)"><i class="uil-shopping-cart-alt me-2 d-inline-block"></i>Product Management</a>
                     <div class="sidebar-submenu">
                         <ul>
                             <li><a href="">Add Products</a></li>
                             <li><a href="add-doctor.html">Products</a></li>
                             <li><a href="dr-profile.html">Profile</a></li>
                         </ul>
                     </div>
                 </li>

                 <li class="sidebar-dropdown">
                     <a href="javascript:void(0)"><i class="uil uil-wheelchair me-2 d-inline-block"></i>Patients</a>
                     <div class="sidebar-submenu">
                         <ul>
                             <li><a href="patients.html">All Patients</a></li>
                             <li><a href="add-patient.html">Add Patients</a></li>
                             <li><a href="patient-profile.html">Profile</a></li>
                         </ul>
                     </div>
                 </li>

                 <li class="sidebar-dropdown">
                     <a href="javascript:void(0)"><i class="uil uil-apps me-2 d-inline-block"></i>Apps</a>
                     <div class="sidebar-submenu">
                         <ul>
                             <li><a href="chat.html">Chat</a></li>
                             <li><a href="email.html">Email</a></li>
                             <li><a href="calendar.html">Calendar</a></li>
                         </ul>
                     </div>
                 </li>

                 <li class="sidebar-dropdown">
                     <a href="javascript:void(0)"><i class="uil uil-shopping-cart me-2 d-inline-block"></i>Pharmacy</a>
                     <div class="sidebar-submenu">
                         <ul>
                             <li><a href="shop.html">Shop</a></li>
                             <li><a href="product-detail.html">Shop Detail</a></li>
                             <li><a href="shopcart.html">Shopcart</a></li>
                             <li><a href="checkout.html">Checkout</a></li>
                         </ul>
                     </div>
                 </li>

                

                 <li class="sidebar-dropdown">
                     <a href="javascript:void(0)"><i class="uil uil-file me-2 d-inline-block"></i>Pages</a>
                     <div class="sidebar-submenu">
                         <ul>
                             <li><a href="faqs.html">FAQs</a></li>
                             <li><a href="review.html">Reviews</a></li>
                             <li><a href="invoice-list.html">Invoice List</a></li>
                             <li><a href="invoice.html">Invoice</a></li>
                             <li><a href="terms.html">Terms & Policy</a></li>
                             <li><a href="privacy.html">Privacy Policy</a></li>
                             <li><a href="blank-page.html">Blank Page</a></li>
                         </ul>
                     </div>
                 </li>

                

                 <li class="sidebar-dropdown">
                     <a href="javascript:void(0)"><i
                             class="uil uil-sign-in-alt me-2 d-inline-block"></i>Authentication</a>
                     <div class="sidebar-submenu">
                         <ul>
                             <li><a href="{{ route('login')}}">Login</a></li>
                             <li><a href="{{route('register')}}">Signup</a></li>
                            
                         </ul>
                     </div>
                 </li>

                 

                

                
             <!-- sidebar-menu  -->
         </div>
         <!-- Sidebar Footer -->
         <ul class="sidebar-footer list-unstyled mb-0">
             <li class="list-inline-item mb-0 ms-1">
                 <a href="#" class="btn btn-icon btn-pills btn-soft-primary">
                     <i class="uil uil-comment"></i>
                 </a>
             </li>
         </ul>
         <!-- Sidebar Footer -->
     </nav>
 
