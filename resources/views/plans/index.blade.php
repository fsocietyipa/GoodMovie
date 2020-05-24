{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">Plans</div>--}}
{{--                <div class="card-body">--}}
{{--                    <ul class="list-group">--}}
{{--                        @foreach($plans as $plan)--}}
{{--                            <li class="list-group-item clearfix">--}}
{{--                                <div class="pull-left">--}}
{{--                                    <h5>{{ $plan->name }}</h5>--}}
{{--                                    <h5>${{ number_format($plan->cost, 2) }} per year</h5>--}}
{{--                                    <h5>{{ $plan->description }}</h5>--}}
{{--                                    <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-outline-dark pull-right">Choose</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="pricing-area">
    @foreach($plans as $plan)
    <div class="pricing-table">
        <div class="pricing-title">{{ $plan->name }}</div>
        <div class="price">{{ number_format($plan->cost, 0) }} ₸</div>
{{--        <div class="pricing-type">{{ $plan->description }}</div>--}}
{{--        <div class="pricing-details">--}}
{{--            <ul>--}}
{{--                <li>Unlimited calls</li>--}}
{{--                <li>Free hosting</li>--}}
{{--                <li>40MB of storage space</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
        <a href="{{ route('plans.show', $plan->slug) }}">
            <div class="btn-plan">Choose Plan</div>
        </a>
    </div>
    @endforeach
</div>


<style>
    A {
        text-decoration: none;
    }
    body {
        background: #111111;
    }

    .pricing-area {
        display: flex;
        justify-content: center;
    }

    .pricing-table {
        display: inline-block;
        padding: 35px 15px 35px 15px;
        margin: 15px;
        width: 275px;
        border-radius: 10px;
        box-shadow: 5px 5px 5px black;
        background-color: #222222;
        transition: .35s;
    }

    .pricing-table:hover {
        background-color: #050505;
    }

    .pricing-title {
        text-align: center;
        font-family: "Avenir Next", Avenir, 'Helvetica Neue', 'Lato', 'Segoe UI', Helvetica, Arial, sans-serif;
        font-weight: 700;
        font-size: 30px;
        color: #ffffff;
        border-bottom: 3px solid #111111;
        padding-bottom: 15px;
    }

    .price {
        text-align: center;
        color: #cc5555;
        font-family: "Avenir Next", Avenir, 'Helvetica Neue', 'Lato', 'Segoe UI', Helvetica, Arial, sans-serif;
        font-size: 30px;
        padding: 30px 0 30px 0;
    }

    .pricing-type {
        color: #ffffff;
        text-align: center;
        font-family: "Avenir Next", Avenir, 'Helvetica Neue', 'Lato', 'Segoe UI', Helvetica, Arial, sans-serif;
        font-weight: 700;
    }

    .pricing-details {
        color: #ffffff;
        font-family: "Avenir Next", Avenir, 'Helvetica Neue', 'Lato', 'Segoe UI', Helvetica, Arial, sans-serif;
        font-size: 16px;
        line-height: 1.25;
        padding: 25px 0 25px 0;
        height: 160px;
    }

    .btn-plan {
        color: #ffffff;
        font-family: "Avenir Next", Avenir, 'Helvetica Neue', 'Lato', 'Segoe UI', Helvetica, Arial, sans-serif;
        text-align: center;
        font-weight: 700;
        background-color: #dd5555;
        padding: 12px 0 12px 0;
        margin: 0 20px 0 20px;
        border-radius: 5px;
        transition: .35s;
    }

    .btn-plan:hover {
        background-color: #bb4444;
        cursor: pointer;
    }
</style>
