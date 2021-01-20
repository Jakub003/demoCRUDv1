{{-- Title --}}
<h2 class="font-bold">View Broker Accounts<h2>

    {{-- Table --}}
    <table class="table-fixed">
        {{-- Column Titles --}}
        <thead>
            <tr>
                <th class="w-1/4">Date</th>
                <th class="w-1/4">Name</th>
                <th class="w-1/4">Value</th>
                <th class="w-1/4">Actions</th>
            </tr>
        </thead>
    
        {{-- For loop to display all data --}}
        {{-- @foreach ($data as $key => $value)
        <tr>
            <td>{{ $value->accountDate }}</td>
            <td>{{ $value->accountName }}</td>
            <td>{{ $value->accountValue }}</td>
            <td>
                <form action="{{ route('account.destroy',$value->id) }}" method="POST">      --}}
                    {{-- I want to be able to edit the field and click save on the same page and not get rerouted. Not sure how to use livewire if needed. --}}
                    {{-- <a class="btn btn-primary" href="{{ route('account.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}       --}}