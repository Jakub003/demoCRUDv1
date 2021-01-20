@extends ('layouts.app')

@section('content')
<h2 class="font-semibold">Manage Accounts</h2>
    <div class="px-10 py-10">
        @include('accounts/add_account')
    </div>    

    <div class="px-10">
        @include('accounts/view_account')
    </div>
@endsection


