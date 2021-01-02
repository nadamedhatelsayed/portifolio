<!-- Modal -->
<div class="modal fade" id="edit{{$video->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('video.update',$video->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">title1</label>
                        <input type="text" class="form-control" value="{{$video->title1}}" name="title1">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">description1</label>
                        <input type="text" class="form-control" value="{{$video->description1}}" name="description1">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">title2</label>
                        <input type="text" class="form-control" value="{{$video->title2}}" name="title2">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">description2</label>
                        <input type="text" class="form-control" value="{{$video->description2}}" name="description2">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">video link</label>
                        <input type="text" class="form-control" value="{{$video->video}}" name="video">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">  image</label>
                        <input type="file" class="form-control" value=" " name="image">

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save Edit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
