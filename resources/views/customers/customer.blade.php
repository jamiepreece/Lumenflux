
<form method="POST" action="customers">

<input type="text">


<input type="submit">
@csrf
</form>


@foreach($customers as $customer)
    <li>{{$customer->name}}</li>

@endforeach