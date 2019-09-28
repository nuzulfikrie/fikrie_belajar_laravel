
            <form action="/articles/create" method="POST">
                @csrf
                <div class="form-group">
                <label for="title">
                    Title
                </label>
            <input type="text" class="form-control" name="title" value="{{ isset($article) ? $article->title : '' }}">
            </div>
            <div class="form-group">
            <label for="body">
                Body
            </label>
            <textarea class="form-control" name="body" id="" cols="30" rows="10"> {{ isset($article) ? $article->body : '' }}</textarea>
            </div>



            <div class="form-group">
                    <label class="col-md-4 control-label" for="radios">Published</label>
                    <div class="col-md-4">
                    <div class="radio">
                      <label for="radios-0">
                        <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                        Yes
                      </label>
                      </div>
                    <div class="radio">
                      <label for="radios-1">
                        <input type="radio" name="radios" id="radios-1" value="0">
                        No
                      </label>
                      </div>
                    </div>
                  </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('articles:index')}}" type="button" class="btn btn-warning">Cancel</a>

            </div>
            </form>
