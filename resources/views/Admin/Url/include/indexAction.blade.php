
<a class="link-slug-copy" role="button" onclick="copyToClipboard('copy-link-{{ $data->id }}')">
    <ion-icon name="copy-outline" class="mr-1" title="Copy" data-icon="icon">
        <i class="fa-regular fa-copy"></i>
    </ion-icon>
</a>



<a href="{{route('url-stories.edit', $data->id)}}" class="link-edit-btn" role="button" style="color: black">
    <ion-icon name="create-outline" class="mr-1" data-icon="icon"  title="Edit" ><i class="fa-solid fa-pen-to-square"></i></ion-icon>
</a>



<a href="javascript:void(0)" onclick="confirmArchive({{$data->id}})" class="" style="color: black" title="Archive" >
    <i class="fa-regular fa-trash-can"></i>
</a>
<form id="confirmArchive{{$data->id}}" action="{{ route('UrlStatus', $data->id) }}" method="post">
    @csrf

</form>

