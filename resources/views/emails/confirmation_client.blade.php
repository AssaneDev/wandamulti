@component('mail::message')
# Merci pour votre message

Bonjour {{ $data['name'] ?? ($data['fname'] ?? '') }},

Nous avons bien reçu votre message et vous répondrons dans les plus brefs délais.

## Récapitulatif :

- **Email** : {{ $data['email'] }}
- **Téléphone** : {{ $data['phone'] }}
- **Message** : {{ $data['message'] }}

Merci pour votre confiance.  
L’équipe

@endcomponent
