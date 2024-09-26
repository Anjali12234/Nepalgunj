
@props([

    'value' => '',
])
<div class="flex">
    <img class="h-28 w-28" src="{{ $value }}"   alt="">
    {{-- <form action="{{ route('user.destroyImage', $registeredUser) }}" method="post"
  >
    @csrf
    @method('DELETE')
    <a href="" class="btn bg-gray-400 text-white h-7 px-1">Remove</a>


</form> --}}
<a href="" class="btn bg-gray-400 text-white h-7 px-1">Remove</a>

</div>
