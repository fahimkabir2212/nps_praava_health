{{-- <div class="review-form">
    <p class="question mb-2x">{{ $question }}</p>
    <div class="main-response-reason">

        @foreach ($options as $index => $option)
            <div class="select">
                <input type="checkbox" id="item_{{ $index + 1 }}">
                <label class="btn btn-warning button_select" for="item_{{ $index + 1 }}">{{ $option }}</label>
            </div>
        @endforeach
    </div>
</div> --}}

<!-- Your Blade Component Structure -->
<div class="review-form">
    <p class="question mb-2x">{{ $question }}</p>
    <div class="main-response-reason" data-component-id="{{ $componentId }}">
        @foreach ($options as $index => $option)
            <div class="select">
                <input type="checkbox" id="item_{{ $componentId }}_{{ $index + 1 }}" class="checkbox-item">
                <label class="btn btn-warning button_select"
                    for="item_{{ $componentId }}_{{ $index + 1 }}">{{ $option }}</label>
            </div>
        @endforeach
    </div>
</div>
