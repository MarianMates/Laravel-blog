<form class="navbar-form navbar-left {{Request::is('blog') ? '':'hid'}}" role="search">
    <div class="form-group">
        <input type="text" name="term" id="term" class="form-control" placeholder="Search">
    </div>
    
    <button type="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-search"></span>
    </button>
</form>

