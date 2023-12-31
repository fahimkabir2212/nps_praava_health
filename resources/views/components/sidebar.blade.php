<section class="vh-100 form-steps sticky">
    <div class="steps">
        <div class="step">
            <a href="{{ route('main.form.slide1') }}">
                <h3 class="{{ request()->routeIs('main.form.slide1') ? 'active-step' : '' }}">1</h3>
            </a>
            <div class="step-description">
                <h5 class="{{ request()->routeIs('main.form.slide1') ? 'color-wh' : '' }}">STEP 1</h5>
                <p class="{{ request()->routeIs('main.form.slide1') ? 'color-wh' : '' }}">Overall Feedback.</p>
            </div>
        </div>
        <div class="step">
            <a href="{{ route('main.form.slide2') }}">
                <h3 class="{{ request()->routeIs('main.form.slide2') ? 'active-step' : '' }}">2</h3>
            </a>
            <div class="step-description">
                <h5 class="{{ request()->routeIs('main.form.slide2') ? 'color-wh' : '' }}">STEP 2</h5>
                <p class="{{ request()->routeIs('main.form.slide2') ? 'color-wh' : '' }}">Individual Feedback.</p>
            </div>
        </div>
        <div class="step">
            <a href="{{ route('main.form.slide3') }}">
                <h3 class="{{ request()->routeIs('main.form.slide3') ? 'active-step' : '' }}">3</h3>
            </a>
            <div class="step-description">
                <h5 class="{{ request()->routeIs('main.form.slide3') ? 'color-wh' : '' }}">STEP 3</h5>
                <p class="{{ request()->routeIs('main.form.slide3') ? 'color-wh' : '' }}">Main Feedback Reason.</p>
            </div>
        </div>
        <div class="step">
            <a href="{{ route('main.form.slide4') }}">
                <h3 class="{{ request()->routeIs('main.form.slide4') ? 'active-step' : '' }}">4</h3>
            </a>
            <div class="step-description">
                <h5 class="{{ request()->routeIs('main.form.slide4') ? 'color-wh' : '' }}">STEP 4</h5>
                <p class="{{ request()->routeIs('main.form.slide4') ? 'color-wh' : '' }}">Comments for improvement.</p>
            </div>
        </div>
    </div>

</section>
