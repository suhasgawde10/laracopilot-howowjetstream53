@extends('layouts.app')
@section('title', 'Contact Us — LexCore Legal Advisory')
@section('content')

<section class="bg-gradient-to-br from-[#1F365C] to-[#0d1f3c] py-24">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <span class="text-yellow-400 font-bold uppercase tracking-widest text-sm">Get In Touch</span>
        <h1 class="text-5xl font-extrabold text-white mt-3 mb-4">Contact Us</h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto">Schedule a free consultation or reach out with any legal questions. We're here to help.</p>
        <div class="flex items-center justify-center gap-2 mt-6 text-sm text-gray-400">
            <a href="{{ route('home') }}" class="hover:text-white transition">Home</a><span>/</span>
            <span class="text-white">Contact</span>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            <!-- Contact Info -->
            <div class="space-y-6">
                <div>
                    <h3 class="text-2xl font-extrabold text-[#1F365C] mb-6">Office Information</h3>
                    <div class="space-y-5">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-[#1F365C] rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Office Address</p>
                                <p class="text-gray-600 text-sm mt-1">1200 Justice Avenue, Suite 800<br>New York, NY 10001<br>United States</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-[#1F365C] rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Phone Numbers</p>
                                <p class="text-gray-600 text-sm mt-1">Main: +1 (555) 200-3000<br>Toll-Free: 1-800-LEXCORE</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-[#1F365C] rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Email Addresses</p>
                                <p class="text-gray-600 text-sm mt-1">General: info@lexcorelegal.com<br>New Clients: consult@lexcorelegal.com</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-[#1F365C] rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-white"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Office Hours</p>
                                <p class="text-gray-600 text-sm mt-1">Monday – Friday: 9:00 AM – 6:00 PM<br>Saturday: 10:00 AM – 2:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-[#1F365C] mb-4">Follow Us</h4>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-[#1F365C] rounded-lg flex items-center justify-center text-white hover:bg-yellow-500 transition">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-[#1F365C] rounded-lg flex items-center justify-center text-white hover:bg-yellow-500 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-[#1F365C] rounded-lg flex items-center justify-center text-white hover:bg-yellow-500 transition">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-[#1F365C] rounded-lg flex items-center justify-center text-white hover:bg-yellow-500 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-sm p-8 border border-gray-100">
                    <h3 class="text-2xl font-extrabold text-[#1F365C] mb-2">Send Us a Message</h3>
                    <p class="text-gray-500 text-sm mb-6">Fill in the form below and one of our attorneys will contact you within 24 hours.</p>

                    @if(session('success'))
                        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-4 rounded-xl mb-6 flex items-center gap-3">
                            <i class="fas fa-check-circle text-xl"></i>
                            <div>
                                <p class="font-semibold">Message Sent Successfully!</p>
                                <p class="text-sm">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6">
                            <ul class="list-disc list-inside text-sm space-y-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" value="{{ old('name') }}" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm"
                                    placeholder="John Doe">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                                <input type="email" name="email" value="{{ old('email') }}" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm"
                                    placeholder="john@example.com">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Phone Number</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm"
                                    placeholder="+1 (555) 000-0000">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Practice Area</label>
                                <select name="practice_area" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm">
                                    <option value="">Select an area of interest</option>
                                    <option value="Corporate Law">Corporate Law</option>
                                    <option value="Contract Law">Contract Law</option>
                                    <option value="Intellectual Property">Intellectual Property</option>
                                    <option value="Employment Law">Employment Law</option>
                                    <option value="Real Estate">Real Estate Law</option>
                                    <option value="Estate Planning">Estate Planning</option>
                                    <option value="Tax Law">Tax Law</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Message <span class="text-red-500">*</span></label>
                            <textarea name="message" rows="5" required
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm"
                                placeholder="Please describe your legal matter or question in detail...">{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="w-full bg-[#1F365C] text-white py-4 rounded-xl font-bold text-base hover:bg-[#152540] transition flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google Map -->
        <div class="mt-12 rounded-2xl overflow-hidden shadow-sm border border-gray-200">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215256878254!2d-73.9874!3d40.7580!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1sen!2sus!4v1580000000000!5m2!1sen!2sus"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" title="LexCore Legal Advisory Office Location">
            </iframe>
        </div>
    </div>
</section>
@endsection
