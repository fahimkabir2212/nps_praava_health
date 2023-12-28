<div class="review-form">
    <p class="question mb-2x">{{ $question }}</p>
    <div class="main-response-reason">

        @foreach ($options as $index => $option)
            <div class="select">
                <input type="checkbox" id="item_{{ $index + 1 }}">
                <label class="btn btn-warning button_select" for="item_{{ $index + 1 }}">{{ $option }}</label>
            </div>
        @endforeach

        {{-- @foreach ($options as $option)
                            
                        <div class="select">
                            <input type="checkbox" id="item_1">
                            <label class="btn btn-warning button_select" for="item_1">{{$option}}</label>
                        </div>
                        @endforeach --}}

        {{-- <div class="select">
                            <input type="checkbox" id="item_2">
                            <label class="btn btn-warning button_select" for="item_2">Location</label>
                        </div>
                        
                        <div class="select">
                            <input type="checkbox" id="item_3">
                            <label class="btn btn-warning button_select" for="item_3">Quality of care</label>
                        </div>
                        
                        <div class="select">
                            <input type="checkbox" id="item_4">
                            <label class="btn btn-warning button_select" for="item_4">Wait time</label>
                        </div>
                        <div class="select">
                            <input type="checkbox" id="item_5">
                            <label class="btn btn-warning button_select" for="item_5">Availability of services and specialties</label>
                        </div>
                        <div class="select">
                            <input type="checkbox" id="item_6">
                            <label class="btn btn-warning button_select" for="item_6">Availability of medications in the pharmacy </label>
                        </div>
                        <div class="select">
                            <input type="checkbox" id="item_7">
                            <label class="btn btn-warning button_select" for="item_7">Ghorelab & Home services</label>
                        </div> --}}
    </div>
</div>
