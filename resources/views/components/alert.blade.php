@if ($message = Session::get('error'))
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>{{ $message }}</strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
     </div>
@endif