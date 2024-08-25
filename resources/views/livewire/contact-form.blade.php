<div class="contact-form wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1000ms">
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form id="contact-form" wire:submit.prevent="submitForm">
        <div class="row">
            <div class="col-md-12">
                <div class="single-form form-group">
                    <input type="text" name="name" wire:model.defer="name" placeholder="Your Name" data-error="Name is required." required="required">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-form form-group">
                    <input type="email" wire:model.defer="email" name="email" placeholder="Your Email" data-error="Valid email is required." required="required">
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-form form-group">
                    <input type="text" wire:model.defer="subject" name="subject" placeholder="Subject" data-error="Subject is required." required="required">
                    @error('subject') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-form form-group">
                    <input type="text" wire:model.defer="phone" name="phone" placeholder="Phone" data-error="Phone is required." required="required">
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-form form-group">
                    <textarea placeholder="Your Mesaage" name="message" wire:model.defer="message" data-error="Please, leave us a message." required="required"></textarea>
                    @error('message') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="single-form form-group text-center">
                    <button type="submit" class="main-btn">Send Message</button>
                </div>
            </div>
        </div>
    </form>
</div>
