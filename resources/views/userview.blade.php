<div class="user-page">
    <div class="header">
        <div class="welcome">Welcome {{$email}}</div>
        <a class="back" href="/" type="button">
            Back to main page
        </a>
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
</style>
