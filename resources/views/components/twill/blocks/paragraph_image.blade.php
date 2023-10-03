@if ($block->input('type') == 'right')
    @php
        $imageClass = 'order-2';
        $paragraphClass = 'order-1';
    @endphp
@endif

<div class="container">
    <div class="row">
        <div class="col-lg-6 {{ $imageClass ?? 'order-1' }}">
            <img src="{{$block->image('image')}}" class="card-img-top" alt="...">
        </div>
        <div class="col-lg-6 {{$paragraphClass ?? 'order-2' }}">
            {!! $input('paragraph') !!}
        </div>
    </div>
</div>