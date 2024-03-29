<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/logo.jpg"/>
	<title>Accueil - DAEU</title>
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" type="text/css" href="css/accueil.css">
    <link rel="stylesheet" type="text/css" href="css/css_acceuil_student.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <meta charset="utf-8"/>
</head>
<body>
    <!-- .wrapper .body .melbanner #btn-menu.okmenu -->
    <script>
        function show_hide(){
            var div = document.getElementById("navbar");
            var body = document.getElementById("body");
            var firstButton = document.getElementById("btn-menu1");
            div.classList.toggle("okmenu");
            body.classList.toggle("yesmenu");
            firstButton.classList.toggle("okmenu");
        }
        </script>
    <div class="wrapper">
        <div class="nav_bar" id="navbar">
            <img src="img/logo-4.png" id="logo">
            <button id="btn-menu" onclick="show_hide()"><img src="img/menu.png" id="menu"></button>
            <h3>MENU - SECRÉTARIAT</h3>
            <ul>
                <li><a href="#"><img src ="img/home.ico"/>ACCUEIL</a></li>
                <li><a href="#"><img src ="img/diploma.png"/>PROMOTIONS</a></li>
                <li><a href="#"><img src ="img/graph.ico"/>GRAPHIQUES</a></li>
                <li><a href="#"><img src ="img/user.png"/>MES INFORMATIONS</a></li>
                <li><a href="#"><img src ="img/deconnexion.png"/>DECONNEXION</a></li>
                
            </ul>
        </div>
        <div class="body" id="body">
           
            <div class="melbanner">
            
                <button id="btn-menu1" onclick="show_hide()"><img src="img/menu.png" id="menu"></button>
                <img src="img/logo.png" id="logo"/>
                <img src="img/david.jpg" id="user"/>
            
            </div>
            <div class="charts-container" style="position:relative;flex:1;display: flex;flex-direction: row; overflow-x: scroll;">
                <div class="chart-container" style="position: relative; flex:.5;margin-bottom: 25px;">
                    <canvas id="myChart"></canvas>
                </div>
                
                <div class="chart-container" style="position: relative;flex:.5;margin-bottom: 25px;">
                    <canvas id="myChart-2"></canvas>
                </div>
            </div>
            
            <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                    // The data for our dataset
                    data: {
                labels: ['Mois 1', 'Mois 2', 'Mois 3', 'Mois 4'],
                datasets: [{
                    label: 'Mes notes',
                    backgroundColor: 'rgba(255, 99, 132,0)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [0,5, 10, 15, 45]
                },{
                    label: 'Notes Moyenne',
                    backgroundColor: 'rgba(255, 99, 132,0)',
                    borderColor: 'rgb(99, 255, 132)',
                    data: [0, 10, 11, 25, 34]
                }]
            },

            // Configuration options go here
            options: {
                title:{
                    display :true,
                    text : 'Evolutions des notes du semestre'
                }
            }
});//end graph1
                var ctx = document.getElementById('myChart-2').getContext('2d');
                var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                    // The data for our dataset
                    data: {
                labels: ['Mois 1', 'Mois 2', 'Mois 3', 'Mois 4'],
                datasets: [{
                    label: 'Mes notes',
                    backgroundColor: 'rgba(255, 99, 132,0)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [19, 19, 8, 19, 19]
                },{
                    label: 'Notes moyenne',
                    backgroundColor: 'rgba(255, 99, 132,0)',
                    borderColor: 'rgb(99, 255, 132)',
                    data: [0,7, 9, 10, 9.7]
                }]
            },

            // Configuration options go here
            options: {
                title:{
                    display :true,
                    text : 'Evolutions des notes du semestre dernier'
                }
            }
});</script>
            
            <p>Bilan : il y a xxx absences constatées au cours de cette semaine dont xxx justifiées et donc xxx injustifiées. Les élèves devant justifier leurs absences sont : implode("select nom from user join absences on absence.iDEtudiant=user.iD and absence.justifie!=true;" , " ") <em>PHP</em><br/><br/></p>
             <div class="tab" style="display: flex;flex-direction: column;overflow-x: scroll">  
                <h2 style="text-transform: uppercase; margin: 1% 1% 01% 0">Mes notes</h2>
                <table>
                    
                    <tr><th>Date</th><th>Professeur(e)</th><th>Module</th><th>Matière</th><th>Note</th><th>Coeff</th></tr>
                    <tr><td>01/09/19</td><td>Mr.monsieur</td><td>M0000</td><td>Matière</td><td class="bonne-note">19</td><td>4.5</td></tr>
                    <tr><td>01/09/19</td><td>Mr.monsieur</td><td>M0000</td><td>Matière</td><td class="bonne-note">19</td><td>4.5</td></tr>
                    <tr><td>01/09/19</td><td>Mr.monsieur</td><td>M0000</td><td>Matière</td><td class="mauvaise-note">8</td><td>4.5</td></tr>
                    <tr><td>01/09/19</td><td>Mr.monsieur</td><td>M0000</td><td>Matière</td><td class="bonne-note">19</td><td>4.5</td></tr>
                    <tr><th>Moyenne actuelle</th><td class='bonne-note'>19/20</td></tr>
                </table>
            </div>
            <h2 ><br/>MES ABSENCES</h2><br/>
                <div class="tababs">
                    <div class="tab">
                        
                        <table>
                        <tr><th>Date début</th><th>Date fin</th><th>Raison</th><th>Justifiées</th></tr>
                        <tr><td>01/09/20 08h30</td><td>02/09/21 08h30</td><td>Participation à une manifestiation</td><td>Justifiée</td></tr>
                        <tr><td>01/09/20 08h30</td><td>02/09/21 08h30</td><td>Certificat Médical</td><td>Justifiée</td></tr>
                            <tr><td>01/09/20 08h30</td><td>02/09/21 08h30</td><td>Certificat Médical</td><td> Non Justifiée</td></tr>
                            <tr><td>01/09/20 08h30</td><td>02/09/21 08h30</td><td>Certificat Médical</td><td>Justifiée</td></tr>
                        
                        </table>
                    </div>
                    
<div class="form-conteneur">
                    <form action="" method="post">
                        <h2>GESTION DES ABSENCES</h2>
                        <div class="champ-formulaire">
                            <p>Début</p>
                            <input type="date" id="date-debut" name="d_debut" placeholder="dd/mm/yyyy"/>
                            <input type="time" id="temps-debut" name="t_debut" placeholder="hh:mm">
                        </div>
                        
                        <div class="champ-formulaire">
                            <p>Fin </p>
                            <input type="date" id="date-fin" name="d_fin" placeholder="dd/mm/yyyy"/>
                            <input type="time" id="temps-fin" name="t_fin" placeholder="hh:mm">
                        </div>
                        
                        <div class="champ-formulaire">
                            <p>État</p>
                            <select id="sel" name="selection">
                                <option value="justifiee">Certificat médical</option>
                                <option value="injustifiee">Religion</option>
                                <option value="injustifiee">Participation à une manifestation</option>
                                <option value="injustifiee">Test PCR</option>
                            </select>
                        </div>
                            
                        <input type="submit" value="déclarer" id="btn"/>
                    </form>
                    </div>
                    
                </div>
            <div class="mes-infos">
                <h2>MES INFORMATIONS</h2>
                <div class="infos-images">
                <img src="img/david.jpg" style="height:80px;border:3px solid white;margin-top: auto;margin-bottom: auto;"></div>
                <div class="infos-text">
                    <table class="table">
                        <tr id="champs-infos"><td>Nom : Hébert</td></tr>
                        <tr id="champs-infos"><td>Prénom : David</td></tr>
                        <tr id="champs-infos"><td>Naissance : 22/01/1952</td></tr>
                        <tr id="champs-infos"><td>Mot de passe : •••••••• <img src="img/edit.png" style="height: 22px;background-color: white; margin-left:.1%;"></td></tr>
                    </table>
                </div>    
            </div>
           
            
            <footer>
                <ul>
                    <li><a href="mentionsleg.html">Mentions légales</a></li>
                    <li><a href="apropos.html">À Propos - Syages©</a></li>
                    <li><a href="apropos.html">® Design & Création : Inthragith JEYASEGARAN </a></li>
                </ul>
            </footer>
        </div>
        

    </div>
</body>
</html>
