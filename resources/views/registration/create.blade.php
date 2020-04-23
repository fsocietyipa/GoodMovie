<style>
    .login-box {
        margin: 250px 540px;
        width: 500px;
        height: 300px;
        background-color: #fff;
        padding: 10px;
        position: absolute;
    }
    .lb-header{
        position: relative;
        color: #00415d;
        margin: 5px 5px 10px -252px;
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
        text-align: center;
        height: 28px;
    }
    .lb-header a{
        margin: 0 25px;
        padding: 0 20px;
        text-decoration: none;
        color: #666;
        font-weight: bold;
        font-size: 15px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }

    .social-login{
        position:relative;
        float: left;
        width: 100%;
        height:auto;
        padding: 10px 0 15px 0;
        border-bottom: 1px solid #eee;
    }
    .social-login a{
        position:relative;
        float: left;
        width:calc(40% - 8px);
        text-decoration: none;
        color: #fff;
        border: 1px solid rgba(0,0,0,0.05);
        padding: 12px;
        border-radius: 2px;
        font-size: 12px;
        text-transform: uppercase;
        margin: 0 3%;
        text-align:center;
    }
    .social-login a i{
        position: relative;
        float: left;
        width: 20px;
        top: 2px;
    }
    .social-login a:first-child{
        background-color: #49639F;
    }
    .social-login a:last-child{
        background-color: #DF4A32;
    }
    .email-login,.email-signup{
        position:relative;
        float: left;
        width: 100%;
        height:auto;
        margin-top: 20px;
        text-align:center;
    }
    .u-form-group{
        width:100%;
        margin-bottom: 10px;
    }
    .u-form-group input[type="email"],
    .u-form-group input[type="password"],
    .u-form-group input[type="text"]{
        width: calc(54.5% - 22px);
        height: 45px;
        outline: none;
        border: 1px solid #ddd;
        padding: 0 10px;
        border-radius: 2px;
        color: #333;
        font-size:0.8rem;
        -webkit-transition:all 0.1s linear;
        -moz-transition:all 0.1s linear;
        transition:all 0.1s linear;
    }
    .u-form-group input:focus{
        border-color: #358efb;
    }
    .u-form-group button {
        width:50%;
        background-color: #1CB94E;
        border: none;
        outline: none;
        color: #fff;
        font-size: 14px;
        font-weight: normal;
        padding: 14px 0;
        border-radius: 2px;
        text-transform: uppercase;
        margin-top: 15px;
    }
    .forgot-password{
        width:50%;
        text-align: left;
        text-decoration: underline;
        color: #888;
        font-size: 0.75rem;
    }

    /*Home*/
    /* resets */

    /* main */
    header {
        height: 360px;
        z-index: 10;
        margin-left: -8px;
        width: 1542px;
    }
    .header-banner {
        background-color: #333;
        background-image: url('https://37.media.tumblr.com/8b4969985e84b2aa1ac8d3449475f1af/tumblr_n3iftvUesn1snvqtdo1_1280.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 1550px;
        height: 300px;
        margin-left: -8px;
        margin-top: -8px;
    }

    header h1 {
        background-color: rgba(18,72,120, 0.8);
        color: #fff;
        padding: 0 1rem;
        position: absolute;
        top: 2rem;
        left: 2rem;
    }

    .fixed-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
    }
    .logout {
        text-decoration: none;
        background: none;
        color: whitesmoke;
        border: none;
        margin-top: 5px;
        font-size: 25px;
    }
    nav {
        width: 100%;
        height: 60px;
        background: #292f36;
        z-index: 10;
        padding-left: 1400px;
        padding-top: 15px;
        font-size: 18px;
        text-decoration: none;
    }
    a {
        padding-left: 15px;
    }

    nav div {
        color: white;
        font-size: 2rem;
        line-height: 60px;
        position: absolute;
        top: 0;
        left: 2%;
        visibility: hidden;
    }
    .visible-title {
        visibility: visible;
    }

    nav ul {
        list-style-type: none;
        margin: 0 2% auto 0;
        padding-left: 0;
        text-align: right;
        max-width: 100%;
    }
    nav ul li {
        display: inline-block;
        line-height: 60px;
        margin-left: 40px;
    }
    nav ul li a {
        text-decoration: none;
        color: #a9abae;
    }
    nav ul li a:hover {
        color: white;
    }

    section {
        padding: 4rem 0;
        width: 960px;
        max-width: 100%;
    }
    /* demo content */
    body {
        color: #292f36;
        font-family: helvetica, serif;
        line-height: 1.6;
    }
    .content{
        margin: 0 auto;
        padding: 4rem 0;
        width: 960px;
        max-width: 100%;
    }
    article {
        float: left;
        margin-left: 120px;
        width: 720px;
    }
    article p:first-of-type {
        margin-top: 0;
    }
    aside {
        float: right;
        width: 120px;
    }
    p img {
        max-width: 100%;
    }

    @media only screen and (max-width: 960px) {
        .content{
            padding: 2rem 0;
        }
        article {
            float: none;
            margin: 0 auto;
            width: 96%;
        }
        article:last-of-type {
            margin-bottom: 3rem;
        }
        aside {
            float: none;
            text-align: center;
            width: 100%;
        }
    }
    footer {
        flex-shrink: 0;
        flex-grow: 0;
        background: #292f36;
        margin: 1px auto auto -8px;
        max-height: 100%;
        width: 1545px;
        color: white;
    }

    ul {
        list-style: none;
        padding-left: 0;
    }

    footer a {
        text-decoration: none;
        color: #eee;
    }

    a:hover {
        text-decoration: underline;
    }

    .ft-title {
        color: #fff;
        font-family: "Merriweather", serif;
        font-size: 1.375rem;
        padding-bottom: 0.625rem;
    }

    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    .container {
        flex: 1;
    }

    .ft-main {
        padding: 1.25rem 1.875rem;
        display: inline-flex;
        flex-wrap: wrap;
    }

    @media only screen and (min-width: 29.8125rem /* 477px */) {
        .ft-main {
            justify-content: space-between;
            margin-left: 195px;
        }
    }

    @media only screen and (min-width: 77.5rem /* 1240px */) {
        .ft-main {
            justify-content: space-between;
            margin-left: 195px;
        }
    }

    .ft-main-item {
        padding: 1.25rem;
        min-width: 12.5rem;
    }
    .abc {
        margin-left: 150px;
    }
    form {
        display: flex;
        flex-wrap: wrap;
    }

    input[type="text"] {
        border: 0;
        padding: 0.625rem;
        margin-top: 0.3125rem;
    }

    input[type="email"] {
        border: 0;
        padding: 0.625rem;
        margin-top: 0.3125rem;
    }

    input[type="submit"] {
        background-color: #00d188;
        color: #fff;
        cursor: pointer;
        border: 0;
        padding: 0.625rem 0.9375rem;
        margin-top: 0.3125rem;
    }

    .ft-social {
        padding: 0 1.875rem 1.25rem;
    }
    .ft-social-list {
        display: flex;
        justify-content: center;
        border-top: 1px #777 solid;
        padding-top: 1.25rem;
    }
    .ft-social-list li {
        margin: 0.5rem;
        font-size: 1.25rem;
    }

    .ft-legal {
        padding: 0.9375rem 1.875rem;
    }
    .ft-legal-list {
        width: 100%;
        margin-left: 485px;
        display: flex;
        flex-wrap: wrap;
    }
    .ft-legal-list li {
        margin: 0.125rem 0.625rem;
        white-space: nowrap;
    }
    .ft-legal-list li:nth-last-child(2) {
        flex: 1;
    }

    .me-photo {
        width: 800px;
        height: 600px;
        display: flex;
        margin-left: -35px;
        margin-top: 50px;
        border-radius: 2px;
    }
    .boy-photo {
        width: 500px;
        height: 500px;
        display: flex;
        margin-left: 115px;
        margin-top: 50px;
        border-radius: 2px;
    }
    .lb-header #signup-box-link:active {
        color: #029f5b;
        font-size: 18px;
    }
    .lb-header #login-box-link:active {
        color: #029f5b;
        font-size: 18px;
    }
</style>



    <form method="POST" action="/register">
        {{ csrf_field() }}

        <div class="login-box">
            <div class="lb-header">
                <a href="/" id="signup-box-link">Main page</a>
                <a href="/login" id="signup-box-link">Sign Up</a>
            </div>
            <form class="email-signup" method="post">
        <div class="u-form-group">
            <!-- <label for="email">Email:</label> -->
            <input type="email" placeholder="Email" name="email" required/>
        </div>

        <div class="u-form-group">
            <!-- <label for="password">Password:</label> -->
            <input type="password"  class="form-control" placeholder="Password" id="password" name="password" required/>
        </div>

        <div class="u-form-group">
            <!-- <label for="password_confirmation">Password Confirmation:</label> -->
            <input type="password" class="form-control" placeholder="Confirm password" id="password_confirmation" name="password_confirmation" required/>

            <div class="u-form-group">
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>


</div></div></form>
        </div>

        @include('partials.formerrors')
    </form>


