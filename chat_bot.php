<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Modistería Elegante</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background: linear-gradient(to bottom, #f5f5dc, #ffe4e1);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .chat-container {
            width: 95%;
            max-width: 600px;  /* Aumentado de 400px para hacer la interfaz más grande */
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            padding: 30px;  /* Aumentado para más espacio */
            border: 2px solid #d4af37;
        }
        .chat-window {
            height: 400px;  /* Aumentado de 300px para más espacio de chat */
            overflow-y: auto;
            border: 1px solid #f0e68c;
            border-radius: 10px;
            padding: 15px;  /* Aumentado */
            background: #faf0e6;
            margin-bottom: 15px;
        }
        .message {
            margin: 15px 0;  /* Aumentado para más separación */
            padding: 15px;  /* Aumentado */
            border-radius: 15px;
            max-width: 80%;
            font-size: 16px;  /* Aumentado ligeramente para mejor legibilidad */
        }
        .user-message {
            background: #d4af37;
            color: white;
            align-self: flex-end;
            margin-left: auto;
        }
        .bot-message {
            background: #ffe4e1;
            color: #333;
        }
        .input-container {
            display: flex;
        }
        input {
            flex: 1;
            padding: 15px;  /* Aumentado */
            border: 1px solid #d4af37;
            border-radius: 20px;
            outline: none;
            font-family: inherit;
            font-size: 16px;  /* Aumentado */
        }
        button {
            background: #d4af37;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;  /* Aumentado de 40px */
            height: 50px;  /* Aumentado de 40px */
            margin-left: 10px;
            cursor: pointer;
            font-size: 20px;  /* Aumentado */
        }
        button:hover {
            background: #b8860b;
        }
        .avatar {
            width: 60px;  /* Aumentado de 50px */
            height: 60px;  /* Aumentado de 50px */
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="%23d4af37"/><text x="50" y="55" text-anchor="middle" fill="white" font-size="30">🎩</text></svg>') no-repeat center;
            background-size: cover;
            border-radius: 50%;
            margin-right: 15px;  /* Aumentado */
        }
        /* Estilo del botón "atrás" proporcionado, integrado */
        #atras-btn {
            position: fixed;
            bottom: 20px;
            right: 50px;
            background-color: coral;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        #atras-btn:hover {
            background-color: #ff8c00;
        }
    </style>
</head>

 

    <div class="chat-container">
        <h2 style="text-align: center; color: #d4af37; font-size: 24px;">Stich Works🧢</h2>  <!-- Tamaño de fuente aumentado -->
        <div class="chat-window" id="chat-window">
            <div class="message bot-message">
                <div class="avatar"></div>
                ¡Hola! Soy tu asistente de modistería. ¿En que te puedo ayudar?
            </div>
        </div>
        <div class="input-container">
            <input type="text" id="user-input" placeholder="Pregúntame sobre sombreros...">
            <button id="send-btn">➤</button>
        </div>
    </div>
<img src="logo aplicacion.png" alt="Logo de Modistería" style="width:150px;height:200px;position: fixed;top:20px;left:20px;z-index:9999999">

    <script>
        // Lógica del chatbot (igual que antes, con respuestas predefinidas o IA si lo integras)
        const chatWindow = document.getElementById('chat-window');
        const userInput = document.getElementById('user-input');
        const sendBtn = document.getElementById('send-btn');

        // Respuestas predefinidas (puedes expandir o integrar IA)
        const responses = {
            "dime como funciona la pagina": "la pagina tiene diferentes funcionalides que quieres hacer?",
            "quiero agendar una cita": "esta bien dirijete a la pagina principal y donde dice reserva entras",
            "como funcionan las reseñas": "Cuando terminas de solicitar el servicio de modisteria puedes expresar como te fue de manera educada",
            "default": "¡Qué interesante! Cuéntame más sobre lo que buscas en modistería."
        };

        function addMessage(text, isUser = false) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${isUser ? 'user-message' : 'bot-message'}`;
            if (!isUser) {
                const avatar = document.createElement('div');
                avatar.className = 'avatar';
                messageDiv.appendChild(avatar);
            }
            messageDiv.appendChild(document.createTextNode(text));
            chatWindow.appendChild(messageDiv);
            chatWindow.scrollTop = chatWindow.scrollHeight;
        }

        function getResponse(input) {
            const lowerInput = input.toLowerCase();
            for (const key in responses) {
                if (lowerInput.includes(key)) {
                    return responses[key];
                }
            }
            return responses.default;
        }

        sendBtn.addEventListener('click', () => {
            const message = userInput.value.trim();
            if (message) {
                addMessage(message, true);
                userInput.value = '';
                setTimeout(() => {
                    addMessage(getResponse(message));
                }, 1000);
            }
        });

        userInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendBtn.click();
            }
        });
    </script>





<a href="administracion.php" id="atras-btn">Atrás</a>

    <style>
         #atras-btn {
               position: fixed;
               bottom: 20px;
               right: 50px;
               background-color: coral;
               color: white;
               border: none;
               border-radius: 5px;
               padding: 10px 20px;
               font-size: 18px;
               cursor: pointer;
               box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
             }  #atras-btn:hover {
               background-color: #ff8c00;
             }
      </style>
    </body>
</html>