@component('mail::message')
# Nouveau message via la page Contact

- **Nom** : {{ $data['fname'] }} {{ $data['lname'] }}
- **Email** : {{ $data['email'] }}
- **Téléphone** : {{ $data['phone'] }}

## Message
{{ $data['message'] }}

@endcomponent
