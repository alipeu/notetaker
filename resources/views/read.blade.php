@include('inc.header')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-white bg-primary mb-3" style="width: 100%">
                    <div class="card-header" style="font-size:30px">{{ $articles->title }}</div>
                    <div class="card-body">
                        <p class="card-text">{{ $articles->description }}</p>
                    </div>
                </div>
                <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@include('inc.footer')