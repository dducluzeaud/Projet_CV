<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CV.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style media="text/css">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css"/>
  </style>
  <title>CV {$nom} {$prenom}</title>
</head>
<body>
<div class="jumbotron text-center">
  <h1><em>Curriculum Vitae</em> {$nom} {$prenom}</h1>
  <p>Sivous souhaitez envoyer un mail à cette personne, veuillez cliquer sur son mail.</p>
</div>

  <div class="container" id="G">
    <h1>Informations candidat</h1>
    <div class="alert alert-info">
      <div class="container" >

          <li class="info">{$nom} {$prenom}</li>
          <li class="info">{$adresse}</li>
          <li class="info">Tel fixe: 0{$telephone_fixe}</li>
          <li class="info">Tel portable: 0{$telephone_portable}</li>
          <li class="info"><a href="mailto:{$email}"> @: {$email}</a></li>

      </div>
    </table>
    <br/>
      <h3>Compétences linguistiques</h3>
      <ul>
        <li>{$langues1}</li>
        <li>{$langues2}</li>
        <li>{$langues3}</li>
      </table>
      <br/>
      <h4>Associations</h4>
    <table class="table table-striped">
          <ul>
            <li>{$association}</li>
          </ul>
          </table>

      <h4>Divers</h4>

      <table class="table table-striped">
        <tbody>
          <tr>
            <td>{$divers}</td>
          </tr>
        </tbody>
      </div>
    </table>
  </div></div>



  <div class="container" id="D">
  <h2>Formations</h2>

  <table class="table table-striped" id="D">
    <thead>
      <tr>
        <th>Année</th>
        <th>Intitulé de la formation</th>
        <th>Description</th>
        <th>Université</th>
        <th>Mention</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{$anneeform1}</td>
        <td>{$intituleform1}</td>
        <td>{$description1}</td>
        <td>{$univ1}</td>
        <td>{$mention1}</td>
      </tr>
     <tr>
        <td>{$anneeform2}</td>
        <td>{$intituleform2}</td>
        <td>{$description2}</td>
        <td>{$univ2}</td>
        <td>{$mention2}</td>
      </tr>
      <tr>
        <td>{$anneeform3}</td>
        <td>{$intituleform3}</td>
        <td>{$description3}</td>
        <td>{$univ3}</td>
        <td>{$mention3}</td>
      </tr>
      <tr>
      <td>{$smarty.now|date_format:'%Y'}</td>
      <td>CCI</td>
      <td>Cette formation de haut niveau (Bac+5) permet aux personnes issues de divers domaines (Biologie, Maths, psychologie, Gestion, …) et ayant au minimum un bac+ 4, de développer des connaissances théoriques et d’acquérir des compétences pratiques en informatique à l’heure où la double compétence en informatique est de plus en plus recherchée par les entreprises.</td>
      <td>Université de Tours</td>
      <td>"En cours d'obtention"</td>
      </tr>
    </tbody>
  </table>
  <h2>Expériences</h2>

    <table class="table table-striped" id="D">
      <thead>
        <tr>
          <th>Année </th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{$anneexp1}</td>
          <td>{$description1}</td>
        </tr>
        <tr>
          <td>{$anneexp2}</td>
          <td>{$description2}</td>
        </tr>
        <tr>
          <td>{$anneexp3}</td>
          <td>{$description3}</td>
        </tr>
      </tbody>
    </table>
</div>
</body>
</html>
