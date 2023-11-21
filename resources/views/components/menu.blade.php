 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item {{ url()->current() == url('/inicio') ? 'active' : '' }}">
             <a class="nav-link collapsed" href="{{ url('/') }}">
                 <i class="bi bi-grid"></i>
                 <span>Início</span>
             </a>
         </li>

         <li class="nav-item {{ url()->current() == url('/estudantes') ? 'active' : '' }}">
             <a class="nav-link collapsed" href="{{ url('/estudantes') }}">
                 <i class="bi bi-people"></i>
                 <span>Estudantes</span>
             </a>
         </li>

         <li class="nav-item {{ url()->current() == url('/transportes') ? 'active' : '' }}">
             <a class="nav-link collapsed" href="{{ url('/transportes') }}">
                 <i class="bi bi-truck"></i>
                 <span>Transportes</span>
             </a>
         </li>

          <li class="nav-item {{ url()->current() == url('/anos_lectivos') ? 'active' : '' }}">
             <a class="nav-link collapsed" href="{{ url('/anos_lectivos') }}">
                 <i class="bi bi-calendar"></i>
                 <span>Anos Lectivos</span>
             </a>
         </li>

          <li class="nav-item {{ url()->current() == url('/planos_pagamento') ? 'active' : '' }}">
             <a class="nav-link collapsed" href="{{ url('/planos_pagamento') }}">
                 <i class="bi bi-currency-dollar"></i>
                 <span>Planos de Pagamentos</span>
             </a>
         </li>



         @if (request()->user()->is_admin)
             <li class="nav-item {{ url()->current() == url('admin/users') ? 'active' : '' }}">
                 <a class="nav-link collapsed" href="{{ url('admin/users') }}">
                     <i class="bi bi-person"></i>
                     <span>Utilizadores</span>
                 </a>
             </li>
         @endif
         <!-- End Dashboard Nav -->


     </ul>

 </aside><!-- End Sidebar-->
