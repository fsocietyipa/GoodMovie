<div class="user-page">
    <div class="header">
        <div class="welcome">Welcome {{$email}}</div>
        <a class="back" href="/" type="button">
            Back to main page
        </a>
        <a href="/favouriteList">
            <img width=100 height=100  style="vertical-align:top; float:right" src="{!! asset('images/favListIcon.png') !!}"/>
        </a>
    </div>
    <div class="content">
        <div class="form__legend">
            Password details
        </div>
        <form id="form-change-password" role="form" method="POST" action='{{ route('changePassword') }}' novalidate >
            {{ csrf_field() }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="passwords">
                <div class="old-password-field">
                    <input class="input-old-password" placeholder="Old password" type="password" value="" id="current-password" name="current-password" required>
                </div>
                <div class="new-password-field">
                    <input class="input-new-password" placeholder="New password" type="password" value="" id="password" name="password" required>
                </div>
                <div class="confirmation-password-field">
                    <input class="confirmation-new-password" placeholder="Confirmation new password" type="password" value="" id="password_confirmation" name="password_confirmation" required>
                </div>
            </div>
            <button class="submit" type="submit">
                Change password
            </button>
        </form>
        </div>
</div>
<style>
    .welcome {
        font-size: 60px;
        font-family: fantasy;
        color: red;
        margin-left: 330px;
        margin-top: 50px;
    }
    .back {
        font-size: 30px;
        font-family: fantasy;
        color: black;
        margin-left: 330px;
        display: flex;
        border: none;
        margin-top: 30px;
        background: none;
        text-decoration: none;
    }
    .back:hover {
        color: red;
    }
    .content {
        margin-top: 100px;
    }
    .form__legend {
        margin-left: 330px;
        font-family: "Open Sans", sans-serif;
        font-size: 20px;
    }
    .form__legend:after {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 17em;
        border-top: 1px solid black;
    }
    .passwords {
        font-size: 20px;
        font-family: auto, serif;
        color: #000000;
        margin-left: 330px;
        display: block;
        margin-top: 25px;
    }
    .input-new-password, .input-old-password, .confirmation-new-password {
        width: 40%;
        font-size: 15px;
        padding: 15px 12px;
        margin-bottom: 5px;
        border: 1px solid #e5e5e5;
        border-bottom: 2px solid #ddd;
        background: rgba(255,255,255,0.2) !important;
        color: #555;
        border-radius: 5px;

    }
    .submit {
        margin-left: 575px;
        font-family: "Open Sans", sans-serif;
        font-size: 20px;
        margin-top: 25px;
        background: #ff3434;
        border: none;
        color: white;
        font-weight: bold;
        padding: 10px 30px;
        border-radius: 5px;
    }
</style>
