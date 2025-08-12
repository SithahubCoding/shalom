<nav class="hidden w-full lg:flex items-center justify-between bg-[#fff] px-10 xl:px-20 py-4">
    <!-- <div class="bg-[#fff] px-2 xl:px-10 w-24 xl:w-48 h-full flex items-center">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-24 h-auto">
    </div> -->

    <!-- <div class="px-2">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-24 h-auto">
    </div> -->
        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-12 lg:w-18 xl:w-24 h-auto">


    <ul class="flex items-center justify-end gap-2 w-full uppercase">
        <li class="py-2 lg:px-3 xl:px-4 text-[13px] lg:text-[12px] xl:text-[14px] 2xl:text-[16px] text-[#401457] {{ Route::is('home') ? 'bg-[#401457] text-[#fff] rounded-full font-[700]' : 'font-[400]' }}">
            <a href="{{ route('home') }}">{{ __('messages.home') }}</a>
        </li>
        <li>|</li>
        <li class="py-2 lg:px-3 xl:px-4 text-[13px] lg:text-[12px] xl:text-[14px] 2xl:text-[16px] text-[#401457] {{ Route::is('about-us') ? 'bg-[#401457] text-[#fff] rounded-full font-[700]' : 'font-[400]' }}">
            <a href="{{ route('about-us') }}">{{ __('messages.about') }}</a>
        </li>
        <li>|</li>
        <li class="py-2 lg:px-3 xl:px-4 text-[13px] lg:text-[12px] xl:text-[14px] 2xl:text-[16px] text-[#401457] {{ Route::is('service') ? 'bg-[#401457] text-[#fff] rounded-full font-[700]' : 'font-[400]' }}">
            <a href="{{ route('service') }}">{{ __('messages.services') }}</a>
        </li>
        <li>|</li>
        <li class="py-2 lg:px-3 xl:px-4 text-[13px] lg:text-[12px] xl:text-[14px] 2xl:text-[16px] text-[#401457] {{ Route::is('our-partners') ? 'bg-[#401457] text-[#fff] rounded-full font-[700]' : 'font-[400]' }}">
            <a href="{{ route('our-partners') }}">{{ __('messages.partners') }}</a>
        </li>
        <li>|</li>
        <li class="py-2 lg:px-3 xl:px-4 text-[13px] lg:text-[12px] xl:text-[14px] 2xl:text-[16px] text-[#401457] {{ Route::is('client') ? 'bg-[#401457] text-[#fff] rounded-full font-[700]' : 'font-[400]' }}">
            <a href="{{ route('client') }}">{{ __('messages.clients') }}</a>
        </li>
        <li>|</li>
        <li class="py-2 lg:px-3 xl:px-4 text-[13px] lg:text-[12px] xl:text-[14px] 2xl:text-[16px] text-[#401457] {{ Route::is('industry') ? 'bg-[#401457] text-[#fff] rounded-full font-[700]' : 'font-[400]' }}">
            <a href="{{ route('industry') }}">{{ __('messages.industries') }}</a>
        </li>
        <li>|</li>
        <li class="py-2 lg:px-3 xl:px-4 text-[13px] lg:text-[12px] xl:text-[14px] 2xl:text-[16px] text-[#401457] {{ Route::is('event') ? 'bg-[#401457] text-[#fff] rounded-full font-[700]' : 'font-[400]' }}">
            <a href="{{ route('event') }}">{{ __('messages.event') }}</a>
        </li>
        <li>|</li>
        <li class="py-2 lg:px-3 xl:px-4 text-[13px] lg:text-[12px] xl:text-[14px] 2xl:text-[16px] text-[#401457] {{ Route::is('contact') ? 'bg-[#401457] text-[#fff] rounded-full font-[700]' : 'font-[400]' }}">
            <a href="{{ route('contact') }}">{{ __('messages.contact') }}</a>
        </li>
    </ul>
</nav>
