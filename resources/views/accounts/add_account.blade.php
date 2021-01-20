{{-- Title --}}
<h2 class="font-bold">Add New Broker Account<h2>

    {{-- Error Message --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    
    {{-- Submit Form --}}
        {{-- The route refers to the class name AddBroker --}}
    <form action="{{ route('accounts.index') }}" method="POST">
        @csrf
        <div>
            <input class="border py-2 px-3 text-grey-darkest" type="date" name="accountDate">
            <input class="border py-2 px-3 text-grey-darkest" type="text" name="accountName" placeholder="Enter Broker Name">
            
            {{-- The value does not see mto store properly, it reverts back to default 0. With no default, it gives me an error. --}}
            <input class="border py-2 px-3 text-grey-darkest" type="number" name="accountValue" placeholder="Enter $ Value">
            <input class="border py-2 px-3 text-grey-darkest" type="text" name="accountNote" placeholder="Notes...">
            
            {{-- Submit Button --}}
            <button type="submit" class="border py-2 px-3 font-semibold bg-gray-200">Add Account</button>
        </div>
    </form>
    
    