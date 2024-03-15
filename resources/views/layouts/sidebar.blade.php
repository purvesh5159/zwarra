 <!-- Main Sidebar Container -->
 <aside class="main-sidebar zw_brand">
   <!-- Brand Logo -->
   <div class="zw_borderbtm_CCCCCC">
     <a href="index3.html" class="brand-link">
       <img src="dist/img/zwaara_logo.svg" alt="Zwaara Logo" class="brand-image ">
       <!-- <span class="brand-text font-weight-light">Zwarra Admin Panel</span> -->
     </a>
   </div>


   <!-- Sidebar -->
   <div class="sidebar pt-3">
     <!-- Sidebar user panel (optional) -->
     <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div> -->

     <!-- SidebarSearch Form -->
     <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

     <!-- Sidebar Menu -->
     <nav class="mt-2 zw_sidebar">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
           <a href="#" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p class="zw_12">
               Dashboard
               <!-- <i class="right fas fa-angle-left"></i> -->
             </p>
           </a>
           <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
         </li>
         <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
             <p class="zw_12">
               Visit/Service Provider
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
               <!-- <span class="badge badge-info right">6</span> -->
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('serviceproviders') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Health care</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('services') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Add service</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/layout/boxed.html" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Pending order</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p class="zw_12">
               Visit/Service
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('ourservices') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">List of main services</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('subservices') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Sub services</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tree"></i>
             <p class="zw_12">
               Doctor-Practitioner/Video
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('medicalspecialties') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Medical specialists</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('submedicalspecialties') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Sub medical specialists</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('alldoctors') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Add doctors</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('doctorpositions') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Doctor position</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('doctorrequest') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Join request doctors</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-edit"></i>
             <p class="zw_12">
               Patient request
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('patientregistration') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Registration requests</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('patientregistration') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Reject requests</p>
               </a>
             </li>
           </ul>
         </li>

         <li class="nav-item">
           <a href="{{ url('users') }}" class="nav-link">
             <i class="nav-icon far fa-calendar-alt"></i>
             <p class="zw_12">
               Users
               <span class="badge badge-info right">2</span>
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('offers') }}" class="nav-link">
             <i class="nav-icon far fa-image"></i>
             <p class="zw_12">
               Offers
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon far fa-envelope"></i>
             <p class="zw_12">
               Bookings
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('bookings') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">New orders</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/mailbox/compose.html" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Refund bookings</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/mailbox/read-mail.html" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Completed bookings</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('contacts') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Contacts</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/mailbox/read-mail.html" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Incompleted bookings</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-book"></i>
             <p class="zw_12">
               Payments
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('bankings') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Health care banking info...</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="{{ url('complaints') }}" class="nav-link">
             <i class="nav-icon fas fa-ellipsis-h"></i>
             <p class="zw_12">Compaints</p>
           </a>
         </li>

         <li class="nav-item">
           <a href="iframe.html" class="nav-link">
             <i class="nav-icon fas fa-logout-h"></i>
             <p class="zw_12">Logout</p>
           </a>
         </li>
         <!-- <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li> -->
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>