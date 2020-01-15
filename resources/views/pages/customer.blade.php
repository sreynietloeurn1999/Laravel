@if (count($customer) > 0)
@foreach ($customer as $item)
   . {{$item}} <br>
@endforeach
    
@else
    your array has nothing!!!!!!!!!
@endif