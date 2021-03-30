<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form" action="/newsletter" method="POST">
                    @csrf
                    <input type="text" name="mail" placeholder="Your e-mail here">
                    <button type="submit" class="site-btn btn-2">Newsletter</button>
                </form>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('errors'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('errors') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->
