<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Yellowtail" />
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<div class="user-page">
    <div class="header">
        <a href="/"><img  src="images/logotip.png" class="logos" alt=""></a>
        <div class="welcome-user">
            <div class="welcome">Welcome</div>
            <div class="name"><p>{{$username ?? ''}}</p></div>
        </div>
        <div class="links">
                    <a href="/favouriteList" >
                        <img  class="favourite" src="{!! asset('images/favListIcon.png') !!}"/>
                    </a>
                    <a href="/plans" class="plans">
                        <img width=100 height=100  style="vertical-align:top; float:right" src="{!! asset('images/money.png') !!}"/>
                    </a>
        </div>
{{--        <a class="back" href="/" type="button">--}}
{{--            Back to main page--}}
{{--        </a>--}}

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
    .logos {
        display: flex; width: 230px; height: 60px; margin-left: 35px;
    }
    .welcome-user {
        display: block;
    }
    .welcome {
        font-size: 120px;
        color: #ed5b8d;
        text-align: center;
        margin-top: 80px;
        font-family: Yellowtail;
        font-style: normal;
        font-variant: normal;
        line-height: 7.7px;
    }
    .name {
        text-align: center;
        font-family: 'Yellowtail', sans-serif;
        margin-top: -45px;
        font-size: 86px;
        color: #ed5b8d;
        letter-spacing: -1px;
    }
    .links {
        margin-right: 30px;
        margin-top: -305px;
    }
    .favourite {
        width: 100px;
        height: 100px;
        vertical-align: top;
        float: right;
        /*margin-top: -180px;*/
        margin-top: -70px;
    }
    .plans {
        width: 100px;
        height: 100px;
        vertical-align: top;
        float: right;
        /*margin-top: -180px;*/
        margin-top: -70px;
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
        margin-top: 363px;
        display: block;
        text-align: center;
    }
    .form__legend {
        /*margin-left: 330px;*/
        font-family: "Oswald", sans-serif;
        font-size: 20px;
        text-align: center;
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
        /*margin-left: 330px;*/
        display: block;
        margin-top: 25px;
    }
    .input-new-password, .input-old-password, .confirmation-new-password {
        width: 280px; font-size: 12px; padding: 15px 12px;font-family: "Oswald", sans-serif; margin-bottom: 5px; border: 1px solid #e5e5e5; border-bottom: 2px solid #ddd; background: rgba(255,255,255,0.2) !important; color: #555; border-radius: 5px;
    }
    .submit {
        /*margin-left: 575px;*/
        font-family: "Oswald", sans-serif;
        font-size: 12px;
        margin-top: 25px;
        background: #000000;
        border: none;
        color: white;
        padding: 10px 30px;
        border-radius: 5px;
    }
</style>
