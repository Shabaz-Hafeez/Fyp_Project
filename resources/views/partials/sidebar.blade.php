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

                 
                 <li><a href="appointment.html"><i class="uil uil-stethoscope me-2 d-inline-block"></i>Services</a>
                 </li>

                 <li class="sidebar-dropdown">
                     <a href="javascript:void(0)"><i class="uil-shopping-cart-alt me-2 d-inline-block"></i>Product Management</a>
                     <div class="sidebar-submenu">
                         <ul>
                             <li><a href="">Manage Products</a></li>
                             <li><a href="add-doctor.html">Product Categories</a></li>
                             
                         </ul>
                     </div>
                 </li>

                 <li class="sidebar-dropdown">
                     <a href="javascript:void(0)"><i class="uil uil-wheelchair me-2 d-inline-block"></i>Order Management</a>
                     <div class="sidebar-submenu">
                         <ul>
                             <li><a href="patients.html">All Orders</a></li>
                             <li><a href="add-patient.html">Add Orders</a></li>
                         </ul>
                     </div>
                 </li>

                 <li class="sidebar-dropdown">
                     <a href="javascript:void(0)"><i class="uil uil-apps me-2 d-inline-block"></i>Inventory Management</a>
                     <div class="sidebar-submenu">
                         <ul>
                             <li><a href="chat.html">Stock Details</a></li>
                             <li><a href="email.html">Stock Threshold</a></li>
                             {{-- <li><a href="calendar.html">Calendar</a></li> --}}
                         </ul>
                     </div>
                 </li>

                 <li class="sidebar-dropdown">
                     <a href="javascript:void(0)"><i class="uil uil-shopping-cart me-2 d-inline-block"></i>Customer Management</a>
                     <div class="sidebar-submenu">
                         <ul>
                             <li><a href="shop.html">Information</a></li>
                             <li><a href="product-detail.html">Order History</a></li>
                             <li><a href="shopcart.html">Payment Detail</a></li>
                             {{-- <li><a href="checkout.html">Checkout</a></li> --}}
                         </ul>
                     </div>
                 </li>

                

                 <li class="sidebar-dropdown">
                     <a href="javascript:void(0)"><i class="uil uil-file me-2 d-inline-block"></i>Report and Analytics</a>
                     <div class="sidebar-submenu">
                         <ul>
                             <li><a href="faqs.html">Sales Report</a></li>
                             <li><a href="review.html">Inventory Report</a></li>
                             <li><a href="invoice-list.html">Customer Data</a></li>
                             {{-- <li><a href="invoice.html">Invoice</a></li>
                             <li><a href="terms.html">Terms & Policy</a></li>
                             <li><a href="privacy.html">Privacy Policy</a></li>
                             <li><a href="blank-page.html">Blank Page</a></li> --}}
                         </ul>
                     </div>
                 </li>

                

                 <li class="sidebar-dropdown">
                     <a href="javascript:void(0)"><i
                             class="uil uil-sign-in-alt me-2 d-inline-block"></i>Payment Gateway Management</a>
                     <div class="sidebar-submenu">
                         <ul>
                             <li><a href="{{ route('login')}}">Payment Options</a></li>
                             <li><a href="{{route('register')}}">Payment Settings</a></li>
                            <li><a href="{{route('register')}}">Payment History</a></li>

                            
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
 
