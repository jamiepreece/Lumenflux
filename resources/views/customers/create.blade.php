<form method="POST" action="{{route('customer.store')}}">
    @csrf
<label>input name</label>


<input type="text" name="name">

<input type="submit">


</form>