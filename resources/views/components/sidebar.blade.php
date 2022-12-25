 <!-- sidebar -->
 <section class="sidebar">
     <div class="sidebar__items">
         <div class="logo">
             <p><b>movieapp</b></p>
         </div>
         <div class="sidebar__content">
             <p class="content__title">Menu</p>
             <ul class="list-unstyled sidebar__content--list">
                 <li class="menu {{ Route::is('home') ? 'menu-active' : '' }}">
                     <a href="/">
                         <i class="bi bi-house-door"></i>
                         <span>Home</span>
                     </a>
                 </li>
                 <li class="menu {{ Route::is('discovery') ? 'menu-active' : '' }}">
                     <a href="{{ route('discovery') }}">
                         <i class="bi bi-folder"></i>
                         <span>Discovery</span>
                     </a>
                 </li>
                 <li class="menu {{ Route::is('trending') ? 'menu-active' : '' }}">
                     <a href="{{ route('trending') }}">
                         <i class="bi bi-fire"></i>
                         <span>Trending</span>
                     </a>
                 </li>
                 <li class="menu {{ Route::is('top-rated') ? 'menu-active' : '' }}">
                     <a href="{{ route('top-rated') }}">
                         <i class="bi bi-hand-thumbs-up"></i>
                         <span>Top Rated</span>
                     </a>
                 </li>
             </ul>
         </div>
         <div class="sidebar-divider">
             <hr />
         </div>
         <div class="sidebar__content sidebar__content--second">
             <ul class="list-unstyled sidebar__content--list">
                 <li class="menu {{ Route::is('movies') ? 'menu-active' : '' }}">
                     <a href="{{ route('movies') }}">
                         <i class="bi bi-camera-reels"></i>
                         <span>Movies</span>
                     </a>
                 </li>
                 <li class="menu {{ Route::is('series') ? 'menu-active' : '' }}">
                     <a href="{{ route('series') }}">
                         <i class="bi bi-fast-forward-circle"></i>
                         <span>Series</span>
                     </a>
                 </li>
                 <li class="menu {{ Route::is('settings') ? 'menu-active' : '' }}">
                     <a href="{{ route('settings') }}">
                         <i class="bi bi-gear"></i>
                         <span>Settings</span>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
     <div class="sidebar__footer">
         <div class="sidebar__footer--content">
             @if (Auth::check())
                 <img src="{{ asset('img/profile.png') }}" alt="" />
                 <div class="user__detail">
                     <p class="user__detail--name">{{ Auth::user()->name }}</p>
                     <p class="user__detail--email">{{ Auth::user()->email }}</p>
                 </div>
             @else
                 <img src="{{ asset('img/profile.png') }}" alt="" />
                 <div class="user__detail">
                     <p class="user__detail--name">Login</p>
                     <p class="user__detail--email">login@email.com</p>
                 </div>
             @endif
         </div>
     </div>
 </section>
 <!-- end of sidebar -->
