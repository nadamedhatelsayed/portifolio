<div class="modal" id="modaldemo8">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Add video</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                        type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                            <script>
                                CKEDITOR.replace( 'summary-ckeditor' );
                            </script>

                            <div class="form-group">
                                <label for="exampleInputEmail1">title1</label>
                                <input type="text" class="form-control" id="title1" name="title1">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">description1</label>
{{--                                <textarea class="form-control" id="description" name="description1" rows="2"></textarea>--}}
                                <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">title2</label>
                                <input type="text" class="form-control" id="title1" name="title2">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">description2</label>
                                <textarea class="form-control" id="description" name="description2" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">video link</label>
                                <input type="text" class="form-control" id="video" name="video">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">  image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Basic modal -->
</div>
