@extends('welcome')

@section('title')
    Settings
@endsection

@section('content')
    <div class="col-lg-8 items__list">
        <form action="">
            <div class="profile">
                <div class="profile__image">
                    <img src="{{ asset('img/profile.png') }}" alt="" />
                    <div class="edit__image">
                        <label class="pb-2" for="">Upload an Image</label>
                        <input type="file" name="" id="" />
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="profile__content">
                            <div class="profile__content--inputs">
                                <label class="pb-2" for="username">Username:</label>
                                <input type="text" name="username" class="auth__input" placeholder="jhondoe" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="profile__content">
                            <div class="profile__content--inputs">
                                <label class="pb-2" for="email">Email:</label>
                                <input type="email" name="email" class="auth__input"
                                    pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/" placeholder="jhondoe@domain.com"
                                    required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="profile__content">
                            <div class="profile__content--inputs input-email">
                                <label class="pb-2" for="password">Password</label>
                                <input type="password" name="password" class="auth__input password__type"
                                    placeholder="●●●●●●●●" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="profile__content">
                            <div class="profile__content--inputs input-email">
                                <label class="pb-2" for="email">Confirm Password</label>
                                <input type="password" name="confirm-password"
                                    class="auth__input password__type confirm-password" placeholder="●●●●●●●●" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="profile__content">
                            <div class="profile__content--inputs">
                                <label class="pb-2 notification-title" for="notification">Notifications</label>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox" checked />
                                    <div class="toggle-switch"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <button type="submit" class="btn profile__update my-3">Update</button>
                </div>
            </div>
        </form>
        <div class="profile__extra">
            <p>Last seen at December 8, 2022</p>
            <p>Joined at December 8, 2022</p>
        </div>
    </div>
@endsection
