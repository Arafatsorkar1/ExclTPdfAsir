


<a href="javascript:void(0)" onclick="confirmReturn({{$data->id}})" class="" style="color: black" title="Return" >
    <i class="fa-solid fa-rotate-left"></i>
</a>
<form id="confirmReturn{{$data->id}}" action="{{ route('UrlStatus', $data->id) }}" method="post">
    @csrf

</form>



<a href="javascript:void(0)" onclick="confirmDelete({{$data->id}})" class="" style="color: black" title="Delete" >
    <i class="fa-regular fa-trash-can"></i>
</a>
<form id="confirmDelete{{$data->id}}" action="{{ route('url-stories.destroy', $data->id) }}" method="post">
    @csrf
    @method('delete')
</form>
