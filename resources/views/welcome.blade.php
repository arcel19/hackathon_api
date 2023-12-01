<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application de Chat</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>Application de Chat</h1>
    <!-- Zone de texte pour saisir le message -->
    <div class="form-group">
      <label for="messageInput">Nouveau message :</label>
      <input type="text" class="form-control" id="messageInput" placeholder="Saisissez votre message">
    </div>
    <!-- Bouton d'envoi -->
    <button type="button" class="btn btn-primary" id="sendMessageButton">Envoyer</button>

    <hr>

    <!-- Liste déroulante des conversations existantes -->
    <div class="form-group">
      <label for="conversationSelect">Sélectionner une conversation :</label>
      <select class="form-control" id="conversationSelect">
        <option value="conversation1">Conversation 1</option>
        <option value="conversation2">Conversation 2</option>
        <option value="conversation3">Conversation 3</option>
      </select>
    </div>

    <hr>

    <!-- Zone de chat pour afficher les messages -->
    <div id="chatZone" style="height: 200px; overflow-y: scroll;">
      <div><strong>Utilisateur 1 :</strong> Bonjour!</div>
      <div><strong>Utilisateur 2 :</strong> Salut, comment ça va ?</div>
      <div><strong>Utilisateur 1 :</strong> Très bien, merci!</div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
