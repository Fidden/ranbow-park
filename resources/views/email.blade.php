@component('mail::message')
<h1 style="text-align: center">Ваша электронная бронь!</h1>

<h2 style="text-align: center; margin-bottom: 32px;">
Покажите его при входе для оплаты.
</h2>

@component('mail::panel')
{{$hash}}
@endcomponent

@endcomponent
