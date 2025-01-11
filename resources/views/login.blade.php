<div>
    <h1>Login Here</h1>
    <br>
    <form action="user-login" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <br>
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <br>
        <button type="submit">Login</button>
    </form>
</div>
