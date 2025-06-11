@component('mail::message')
# Nouveau message via le formulaire classique

- **Nom** : {{ $data['name'] }}
- **Email** : {{ $data['email'] }}
- **Téléphone** : {{ $data['phone'] }}
- **Projet** : {{ $data['projet'] }}

## Message
{{ $data['message'] }}

@endcomponent
