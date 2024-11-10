<div class="header_main">
    <div class="mobile_menu">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="about.html">About</a>
                </li>

                <li class="nav-item">
                   <a class="nav-link " href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="contact.html">Contact us</a>
               </li>
             @if (Route::has('login'))
             @auth
         <x-app-layout></x-app-layout>
               @else
                <li class="nav-item">
                  <li><a href="{{ route('login1') }}">Login</a></li>
               </li>
                <li class="nav-item">
                  <li><a href="{{ route('register1') }}">Register</a></li>
               </li>
               @endauth
               @endif
             </ul>
          </div>
       </nav>
    </div>
    <div class="container-fluid">
       <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
       <div class="menu_main">   
          <ul>
             <li class="active"><a href="index.html">Home</a></li>
             <li><a href="about.html">About</a></li>
             <li><a href="/contact.html">Contact</a></li>
             <li><a href="blog.html">Blog</a></li>
             @if (Route::has('login'))
             @auth
            
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container-fluid">
                   <!-- Toggle button for mobile view -->
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                   </button>
           
                   <!-- Profile Info -->
                   <div class="dropdown show">
                     <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{Auth::user()->name}}
                     </a>
                   
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
   <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
   <a class="dropdown-item" href="{{ route('logout') }}"
      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      Logout
   </a>

   <!-- Form for logout request -->
   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
   </form>
</div>
                   </div>
           
                
                  
           </nav>        
             @else
                 <li><a href="{{ route('login1') }}">Login</a></li>
                 <li><a href="{{ route('register1') }}">Register</a></li>
             @endauth
         @endif
          </ul>
       </div>
    </div>
 </div>
