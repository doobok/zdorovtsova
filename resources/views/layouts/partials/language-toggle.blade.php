@if(app()->getLocale() !== 'uk')
    <a href="/locale/uk" class="font-header font-semibold text-medium text-white uppercase pt-0.5 cursor-pointer flex flex-nowrap align-middle">uk</a>
@endif
@if(app()->getLocale() !== 'ru')
    <a href="/locale/ru" class="font-header font-semibold text-medium text-white uppercase pt-0.5 cursor-pointer flex flex-nowrap align-middle">ru</a>
@endif
