@include('inc.header')
    <br>
    <div class="container">
        <div class="row">
            <legend>Your Notes</legend>
        </div>
        @if(count($articles) > 0)
            <div class="row" style="margin-bottom:30px;">
                <a href="{{ url('/create') }}" class="btn btn-primary">&plus; Create new note</a>
            </div>
        @endif        
        <div class="row">
            @if(session('pass'))
                <div class="alert-box success">{{session('pass')}}</div> 
                <script>
                    function passAlert() {
                        $(" div.success " ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
                    }
                    passAlert();
                </script>
            @endif
            @if(count($articles) > 0)
                @foreach($articles->all() as $article)
                    <div style="margin-left:15px;margin-right:15px;margin-bottom:15px">
                        <div class="card text-white bg-primary mb-3" style="width:350px;z-index:0;">
                            <div class="card-header">
                                <span style="width:100%;display:inline-block;text-align:right;">
                                    <a href="{{ url("/note/$article->id") }}" class="badge badge-success">Read</a>
                                    <a href="{{ url("/edit/$article->id") }}" class="badge badge-info">Edit</a>
                                    <a href="{{ url("/delete/$article->id") }}" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                </span>
                            </div>
                            <div class="card-body">
                                <h4>{{ $article->title }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        @if(count($articles) == 0)
            <h1 style="text-align:center;color:gray;padding:10px">No notes yet... :(</h1>    
            <center><a class="btn btn-primary" href="{{ url('/create') }}">Start creating one!</a></center>
        @endif
    </div>
@include('inc.footer')