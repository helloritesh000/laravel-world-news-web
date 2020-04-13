<form style="margin-bottom: 20px;" action="{{route('universalsearch')}}" method="post">
    @csrf
    <div class="input-group">
    <input type="text" class="form-control" id="txtUniversalSearch" name="q" placeholder="Please enter keyword to search..." required/>
    <span class="input-group-btn">
        <button class="btn btn-default" type="button">Search!</button>
    </span>
    </div>
</form>
