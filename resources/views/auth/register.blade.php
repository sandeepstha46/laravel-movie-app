<div class="register">
    <p class="authentication__type text-center">Register</p>
    <div class="authentication__input">
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="authentication__input--type authentication__name">
                <!-- <span class="error-message">Please enter a valid name</span> -->
                <input type="text" name="name" class="auth__input" placeholder="Jhon Doe" required />
            </div>
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
            <div class="authentication__input--type authentication__password">
                <!-- <span class="error-message">Password must be atleast 8 characters</span> -->
                <input type="password" name="password_confirmation" class="auth__input password__type confirm-password"
                    placeholder="●●●●●●●●" required />
                <i class="bi bi-eye-slash toggle__visibilty"></i>
            </div>
            <div class="submit-button__login">
                <button class="btn primary-button login__button" type="submit">Register</button>
            </div>
        </form>
        <p class="no__account text-end">
            Already have an account?
            <span class="log-in" href="">Log in</span>
        </p>
    </div>
</div>
