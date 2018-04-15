@include('inc.header')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="{{ url('/insert') }}">
                    {{csrf_field()}}
                    <fieldset>
                        <legend>Create Your Note</legend>
                        @if(!$errors->has('title'))
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Your note's title" maxlength="30">
                                <small id="emailHelp" class="form-text text-muted">Maximum 30 characters.</small>
                            </div>
                        @elseif($errors->has('title'))
                            <div class="form-group has-danger">
                                <label>Title</label>
                                <input name="title" class="form-control is-invalid" id="inputInvalid" type="text" placeholder="Your note's title" maxlength="30">
                                <div class="invalid-feedback">Please give your note a title.</div>
                            </div>
                        @endif
                        @if(!$errors->has('description'))
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="5" placeholder="Enter your note's description here" maxlength="280"></textarea>
                                <small id="emailHelp" class="form-text text-muted">Maximum 280 characters.</small>
                            </div>
                        @elseif($errors->has('description'))
                            <div class="form-group has-danger">
                                <label>Description</label>
                                <textarea name="description" class="form-control is-invalid" id="inputInvalid" rows="5" placeholder="Enter your note's description here" maxlength="280"></textarea>
                                <div class="invalid-feedback">Please give your note a description.</div>
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Create!</button>
                        <a href="{{ url('/') }}" class="btn btn-danger">Cancel</a>    
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@include('inc.footer')