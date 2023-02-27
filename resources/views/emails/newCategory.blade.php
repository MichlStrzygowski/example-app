<x-mail::message>


    Dodano nową kategorię:<br>
    pl : {{ $category['name_pl'] }}<br>
    de : {{ $category['name_de'] }}<br>
    fr : {{ $category['name_fr'] }}<br>
    en : {{ $category['name_en'] }}<br>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
