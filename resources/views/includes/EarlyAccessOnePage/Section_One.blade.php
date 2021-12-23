<div class="shades">
    <form  action="{{ route('IndexPage') }}" method="POST">
@csrf
        <div class="rounding" id="early-form">
            <div class="text-center">


                <div class="desktop d-none d-lg-block d-md-none">
                    <h2>Be the first to have access to</h2>
                    <h1>Bright Inventory</h1>
                </div>

                <div class=" mobile d-block d-lg-none d-md-block">
                    <h2>Be the first to know</h2>
                    <h1>when Bright Inventory Launches</h1>
                </div>

            </div>

            <div class="form-group mt-5">
                <input type="text" placeholder="Name" class="form-control" name="username"  />
            </div>

            <div class="form-group">
                <input type="email" placeholder="Email Address" class="form-control" name="email"  />
            </div>


            <div class="d-grid gap-1 mt-5">
                <button type="submit" class="btn btn-primary btn-bi-primary">GET EARLY ACCESS</button>
            </div>
        </div>

        <div class="rounding" id="early-form-success">
            <div>
                <h2 class="h-mobile" >Congratulations!</h2>
                <br />
                <h1 class="mb-5 mt-5 h-mobile">You are on the waiting list!</h1>
                <br />

                <h1 class="mb-5 mt-5 h-desktop mobile-title">Congratulations - You are on the waiting list!</h1>
                <br />

                <h3 class="text-center">Thank you for trusting Bright Inventory</h3>
            </div>
        </div>

    </form>
</div>
