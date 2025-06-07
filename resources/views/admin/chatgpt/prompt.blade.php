@extends('admin.admin_dashboard')
@section('admin')
<style>
    #chat-box {
        background-color: #f9f9f9;
        border-radius: 0.75rem;
        padding: 1rem;
    }
    .chat-message {
        max-width: 80%;
        padding: 0.75rem 1rem;
        border-radius: 15px;
        margin-bottom: 10px;
        line-height: 1.5;
    }
    .user-message {
        background-color: #e5e5ea;
        color: #000;
        align-self: flex-end;
        border-top-right-radius: 0;
    }
    .gpt-message {
        background-color: #4f88dd;
        color: #fff;
        border-top-left-radius: 0;
    }
    .chat-row {
        display: flex;
        gap: 10px;
        margin-bottom: 10px;
    }
    .chat-row.user {
        justify-content: flex-end;
    }
    .chat-row.gpt {
        justify-content: flex-start;
    }
    #prompt {
        border-radius: 1.5rem 0 0 1.5rem;
        padding: 0.75rem 1rem;
        border: 1px solid #ccc;
    }
    #send-btn {
        border-radius: 0 1.5rem 1.5rem 0;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="card shadow rounded-4 p-3">
    <label for="style" class="form-label">Style de copywriting :</label>
    <select name="style" id="style" class="form-select mb-3">
        <option value="commercial_instagram">Commercial Instagram</option>
        <option value="discours_mariage">Discours de mariage</option>
        <option value="meditation_guidée">Méditation guidée</option>
        <option value="publication_association_facebook">Publication associative Facebook</option>
        <option value="conte">Conte</option>
    </select>

    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">💬 Assistant IA - Wanda</h4>
    </div>

    <div class="card-body" id="chat-box" style="max-height: 400px; overflow-y: auto;"></div>

    <div id="typing-indicator" class="text-muted p-2" style="display:none;">
        🤖 <em>Wanda est en train d'écrire...</em>
    </div>

    <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="copywriting-mode">
        <label class="form-check-label" for="copywriting-mode">Activer le mode Copywriting ✍️</label>
    </div>

    <div class="card-footer">
        <form id="chat-form">
            <div class="input-group">
                <input type="text" name="prompt" id="prompt" class="form-control" placeholder="Écrivez votre message ici..." required autocomplete="off">
                <button class="btn btn-primary" type="submit" id="send-btn">📨</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('chat-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const promptInput = document.getElementById('prompt');
        const prompt = promptInput.value.trim();
        const chatBox = document.getElementById('chat-box');
        const typingIndicator = document.getElementById('typing-indicator');
        const isCopyMode = document.getElementById('copywriting-mode').checked;
        const style = document.getElementById('style').value;

        if (!prompt) return;

        // Affichage message utilisateur
        chatBox.innerHTML += `
            <div class="chat-row user">
                <div class="chat-message user-message">
                    👤 ${prompt}
                </div>
            </div>
        `;

        // Afficher "Wanda écrit..."
        typingIndicator.style.display = 'block';
        chatBox.scrollTop = chatBox.scrollHeight;

        // Envoi au backend avec mode et style
        fetch("{{ route('Prompt.envoie') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                prompt: prompt,
                mode: isCopyMode ? 'copywriting' : 'normal',
                style: style
            })
        })
        .then(response => response.json())
        .then(data => {
            typingIndicator.style.display = 'none';

            const gptRow = document.createElement('div');
            gptRow.classList.add('chat-row', 'gpt');

            const gptMessage = document.createElement('div');
            gptMessage.classList.add('chat-message', 'gpt-message');
            gptMessage.innerHTML = "🤖 ";

            gptRow.appendChild(gptMessage);
            chatBox.appendChild(gptRow);
            chatBox.scrollTop = chatBox.scrollHeight;

            const replyText = data.reply;
            let i = 0;

            function typeWriter() {
                if (i < replyText.length) {
                    gptMessage.innerHTML += replyText.charAt(i);
                    i++;
                    chatBox.scrollTop = chatBox.scrollHeight;
                    setTimeout(typeWriter, 15); // vitesse de frappe (ms)
                }
            }
            typeWriter();
        })
        .catch(error => {
            typingIndicator.style.display = 'none';
            chatBox.innerHTML += `<div class="text-danger mt-2">❌ Erreur : ${error}</div>`;
        });

        promptInput.value = '';
    });
</script>
@endsection
