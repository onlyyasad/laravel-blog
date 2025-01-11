<div>
    <h1>Profile</h1>
    <br>
    @if(session('user'))
    <div>
        <h2>Welcome, {{session('user')}}</h2>
        <br>
        <a href="/logout">Logout</a>
    </div>
    
    @else
    <div>
        <h2>Welcome, Guest</h2>
        <br>
        <a href="/login">Login</a>
    </div>
    @endif
    <br>
</div>
