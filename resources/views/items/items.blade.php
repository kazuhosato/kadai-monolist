@if ($items)
    <div class="row">
        @foreach ($items as $item)
            <div class="item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <img src="{{ $item->image_url }}" alt="">
                        </div>
                        <div class="panel-body">
                            <p class="item-title"><a href="#">{{ $item->name }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif