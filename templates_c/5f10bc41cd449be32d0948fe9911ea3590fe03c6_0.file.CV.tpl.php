<?php
/* Smarty version 3.1.30, created on 2017-03-02 02:22:21
  from "/Users/davidducluzeaud/Documents/EP12_Internet-Intranet/Projet_CV/CV.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b773cd3b5d42_52814476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f10bc41cd449be32d0948fe9911ea3590fe03c6' => 
    array (
      0 => '/Users/davidducluzeaud/Documents/EP12_Internet-Intranet/Projet_CV/CV.tpl',
      1 => 1488417423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b773cd3b5d42_52814476 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/Users/davidducluzeaud/Documents/EP12_Internet-Intranet/Projet_CV/tpl/plugins/modifier.date_format.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CV.css"/>
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <style media="text/css">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css"/>
  </style>
  <title>CV <?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
</title>
</head>
<body>
<div class="jumbotron text-center">
  <h1><em>Curriculum Vitae</em> <?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
</h1>
  <p>Sivous souhaitez envoyer un mail à cette personne, veuillez cliquer sur son mail.</p>
</div>

  <div class="container" id="G">
    <h1>Informations candidat</h1>
    <div class="alert alert-info">
      <div class="container" >

          <li class="info"><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
</li>
          <li class="info"><?php echo $_smarty_tpl->tpl_vars['adresse']->value;?>
</li>
          <li class="info">Tel fixe: 0<?php echo $_smarty_tpl->tpl_vars['telephone_fixe']->value;?>
</li>
          <li class="info">Tel portable: 0<?php echo $_smarty_tpl->tpl_vars['telephone_portable']->value;?>
</li>
          <li class="info"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"> @: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</a></li>

      </div>
    </table>
    <br/>
      <h3>Compétences linguistiques</h3>
      <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['langues1']->value;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['langues2']->value;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['langues3']->value;?>
</li>
      </table>
      <br/>
      <h4>Associations</h4>
    <table class="table table-striped">
          <ul>
            <li><?php echo $_smarty_tpl->tpl_vars['association']->value;?>
</li>
          </ul>
          </table>

      <h4>Divers</h4>

      <table class="table table-striped">
        <tbody>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['divers']->value;?>
</td>
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
        <td><?php echo $_smarty_tpl->tpl_vars['anneeform1']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['intituleform1']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['description1']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['univ1']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['mention1']->value;?>
</td>
      </tr>
     <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['anneeform2']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['intituleform2']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['description2']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['univ2']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['mention2']->value;?>
</td>
      </tr>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['anneeform3']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['intituleform3']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['description3']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['univ3']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['mention3']->value;?>
</td>
      </tr>
      <tr>
      <td><?php echo smarty_modifier_date_format(time(),'%Y');?>
</td>
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
          <td><?php echo $_smarty_tpl->tpl_vars['anneexp1']->value;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['description1']->value;?>
</td>
        </tr>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['anneexp2']->value;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['description2']->value;?>
</td>
        </tr>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['anneexp3']->value;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['description3']->value;?>
</td>
        </tr>
      </tbody>
    </table>
</div>
</body>
</html>
<?php }
}
