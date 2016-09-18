<form class="navbar-form navbar-left {{Request::is('blog') ? '':'hid'}}">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default 
            {{Request::is('blog') ? '':'hid'}}"><span class="glyphicon glyphicon-search"></span></button>
</form>

