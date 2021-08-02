<!-- Define a iteration  -->
@foreach ($slots as $slot) 
<!-- For each value of array, each key do this : -->
{{slot}} <br>
<!-- use {{}} for display , similar with echo, display function --> 
@endforeach