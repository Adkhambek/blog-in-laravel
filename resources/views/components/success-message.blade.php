@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        <p>{{session('success')}}</p>
        <button type="button" class="alert-close">
            <span class="fas fa-times"></span>
        </button>
    </div>
@endif
