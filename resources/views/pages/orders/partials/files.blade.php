        <div class="card">
            <div class="card-header">
                <h2>Files <small>Click the files to enlarge them</small></h2>
            </div>

            <div class="card-body card-padding">
                <p class="f-500 c-black m-b-20">Images</p>

                <div class="lightbox row">
                    @foreach($order->files->all() as $file)
                        <div data-src="{{ URL::asset($file->filepath . $file->filename) }}" class="col-sm-4 col-xs-6">
                            <div class="lightbox-item">
                                <img src="{{ URL::asset($file->filepath . $file->filename) }}" alt="" />
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card-body card-padding">
                <p class="f-500 c-black m-b-20">PDFs</p>

                <div class="lightbox row">

                </div>
            </div>
        </div>