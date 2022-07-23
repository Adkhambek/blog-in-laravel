@if(session()->has('error'))
<div class="alert alert-warning" role="alert">
    <p>{{session('error')}}</p>
    <button type="button" class="alert-close">
        <span class="fas fa-times"></span>
    </button>
</div>
@endif
