 <div class="login active">
     <p class="authentication__type text-center">Login</p>
     <div class="authentication-welcome text-center">
         <p class="authentication-welcome__title">Welcome</p>
         <p class="authentication-welcome__subtitle">Login to access an amazing content.</p>
     </div>
     <div class="authentication__input">
         <form method="POST" action="{{ route('login') }}">
             @csrf
             <div class="authentication__input--type authentication__email">
                 <!-- <span class="error-message">Please enter a valid email</span> -->
                 <input type="email" name="email" class="auth__input" placeholder="jhondoe@domain.com" required />
             </div>
             <div class="authentication__input--type authentication__password">
                 <!-- <span class="error-message">Password must be atleast 8 characters</span> -->
                 <input type="password" name="password" class="auth__input password__type" placeholder="●●●●●●●●"
                     required />
                 <i class="bi bi-eye-slash toggle__visibilty"></i>
             </div>
             <div class="forgot__password text-end pt-1">
                 @if (Route::has('password.request'))
                     <a href="{{ route('password.request') }}">Forgot Password?</a>
                 @endif
             </div>
             <div class="submit-button__login">
                 <button class="btn primary-button login__button" type="submit">Login</button>
             </div>
         </form>
         <p class="no__account text-end">
             Don't have an account?
             <span class="sign-up">Sign Up</span>
         </p>
     </div>
 </div>
