@if (session('status'))

    <br>

    <div class="alert alert-success" role="alert">

        {{session('status')}}

    </div>

@endif