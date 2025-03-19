@extends('layouts.app')
@section('title', 'contact')
@section('content')

<div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
    @if(session('success'))
       <div class="alert alert-success">
        {{ session('success') }}
       </div>
       
    @endif
    <form action="{{ route('contact.action') }}" method="POST" class="form">
        @csrf
        <div class="form-items">
            <div class="mb-3">
                <label class="form-label required-label" for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="subject">subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="message">message</label>
                <textarea class="form-control" id="message" name="message" required></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>

</div>
</div>
@endsection