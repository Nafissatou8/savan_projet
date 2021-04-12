<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>savan</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="css/forme.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/css/style_form.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" action="{{Route('form')}}" class="appointment-form" id="appointment-form">
            @csrf
                <h2>Veuillez renseigner les informations du livre</h2>
                <div class="form-group-1">
                    <input type="text" name="titre" id="name" placeholder="titre" required />
                    <input type="date" name="date_de_parution" id="name" placeholder="date de parution" required />
                    <div class="select-list">
                        <select input name="categorie" id="">
                            <option selected value="romance">ROMANCE</option>
                            <option value="Phylosophie">PHILOSOPHIE</option>
                            <option value="economie">ECONOMIE</option>
                            <option value="mangas">MANGAS</option>
                        </select>
                    </div>
                </div>
                <div class="form-group-2">
                    <h3>LES INFORMATIONS SUR L'AUTEUR</h3>
                    <input type="text" name="nom_auteur" id="title" placeholder="Nom_auteur" required />
                    <input type="date" name="date_de_naissance" id="name" placeholder="date de naissance"  />
                    <div class="select-list">
                        <select  input name="pays" id="">
                            <option selected value="BF">Burkina Faso</option>
                            <option value="FR">France</option>
                            <option value="GN">Guinnée</option>
                            <option value="USA">USA</option>
                        </select>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Enrégistrer le document" />
                </div>
            </form>
        </div>
    </div>
    <script src="/jquery.min.js"></script>
    <script src="/main.js"></script>
</body>
</html>