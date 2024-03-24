@extends('layouts.app')

@section('content')
    <div class="flex justify-center  sm:h-full lg:h-3/4 py-8">
        <div x-data="{ selected: null }" class="max-w-2xl mx-auto p-5">
            <h1 class="text-3xl font-bold text-center mb-6">Frequently Asked Questions</h1>

            <ul class="space-y-3">
                <!-- FAQ Item 1 -->
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full px-4 py-2 text-left text-gray-600 bg-gray-100 rounded-lg focus:outline-none focus:shadow-outline">
                        <span>What is your return policy?</span>
                        <svg :class="{'rotate-180': open}" class="h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" class="mt-2 px-4 py-2 bg-white rounded-lg text-gray-600" x-transition>
                        Our return policy is 30 days with no questions asked. If you're not satisfied with your purchase, please return it for a full refund.
                    </div>
                </li>

                <!-- FAQ Item 2 -->
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full px-4 py-2 text-left text-gray-600 bg-gray-100 rounded-lg focus:outline-none focus:shadow-outline">
                        <span>How do I track my order?</span>
                        <svg :class="{'rotate-180': open}" class="h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" class="mt-2 px-4 py-2 bg-white rounded-lg text-gray-600" x-transition>
                        You can track your order with the tracking link sent to your email once your order has shipped.
                    </div>
                </li>

                <!-- FAQ Item 3 -->
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full px-4 py-2 text-left text-gray-600 bg-gray-100 rounded-lg focus:outline-none focus:shadow-outline">
                        <span>Do you ship internationally?</span>
                        <svg :class="{'rotate-180': open}" class="h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" class="mt-2 px-4 py-2 bg-white rounded-lg text-gray-600" x-transition>
                        Yes, we offer international shipping. Shipping costs will vary based on your location and the size of your order.
                    </div>
                </li>

                <!-- FAQ Item 4 -->
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full px-4 py-2 text-left text-gray-600 bg-gray-100 rounded-lg focus:outline-none focus:shadow-outline">
                        <span>Can I change or cancel my order?</span>
                        <svg :class="{'rotate-180': open}" class="h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" class="mt-2 px-4 py-2 bg-white rounded-lg text-gray-600" x-transition>
                        Order changes or cancellations can be made within 24 hours of order placement. Please contact us directly for assistance.
                    </div>
                </li>

                <!-- FAQ Item 5 -->
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full px-4 py-2 text-left text-gray-600 bg-gray-100 rounded-lg focus:outline-none focus:shadow-outline">
                        <span>What payment methods do you accept?</span>
                        <svg :class="{'rotate-180': open}" class="h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" class="mt-2 px-4 py-2 bg-white rounded-lg text-gray-600" x-transition>
                        We accept various payment methods including credit cards (Visa, Mastercard, American Express), PayPal, and direct bank transfers.
                    </div>
                </li>
            </ul>
        </div>



    </div>

@endsection
